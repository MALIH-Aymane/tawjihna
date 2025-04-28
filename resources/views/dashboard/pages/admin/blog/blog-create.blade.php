@php
    $configData = Helper::appClasses();
@endphp

@extends('dashboard/layouts/layoutMaster')

@section('title', 'Créer un article')

{{-- Page specific CSS --}}
@section('page-style')
    <!-- Quill Editor CSS -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <style>
        #editor {
            background-color: #fff;
            min-height: 300px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 0.375rem;
        }
    </style>
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Créer un nouvel article</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.blog.store') }}" enctype="multipart/form-data" id="blog-form">
        @csrf

        <!-- Titre -->
            <div class="mb-3">
                <label for="title" class="form-label">Titre de l'article</label>
                <input type="text" class="form-control" name="title" id="title" required>
            </div>

            <!-- Extrait -->
            <div class="mb-3">
                <label for="excerpt" class="form-label">Extrait</label>
                <textarea class="form-control" name="excerpt" id="excerpt" rows="2" placeholder="Résumé de l'article"></textarea>
            </div>

            <!-- Éditeur Quill -->
            <div class="mb-3">
                <label for="editor" class="form-label">Contenu</label>
                <div id="editor"></div>
                <input type="hidden" name="content" id="content">
            </div>

            <!-- Image principale -->
            <div class="mb-3">
                <label for="featured_image" class="form-label">Image Principale</label>
                <input class="form-control" type="file" name="featured_image" id="featured_image">
            </div>

            <!-- Catégorie -->
            <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    <option value="">-- Choisir une catégorie --</option>
                    @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- SEO Meta Title -->
            <div class="mb-3">
                <label for="meta_title" class="form-label">Meta Title (SEO)</label>
                <input type="text" class="form-control" name="meta_title" id="meta_title" maxlength="255">
            </div>

            <!-- SEO Meta Description -->
            <div class="mb-3">
                <label for="meta_description" class="form-label">Meta Description (SEO)</label>
                <textarea class="form-control" name="meta_description" id="meta_description" rows="2" maxlength="255"></textarea>
            </div>

            <!-- SEO Meta Keywords -->
            <div class="mb-3">
                <label for="meta_keywords" class="form-label">Meta Keywords (séparés par virgules)</label>
                <input type="text" class="form-control" name="meta_keywords" id="meta_keywords">
            </div>

            <!-- Statut -->
            <div class="mb-3">
                <label for="status" class="form-label">Statut</label>
                <select name="status" id="status" class="form-select" required>
                    <option value="draft">Brouillon</option>
                    <option value="published">Publié</option>
                    <option value="archived">Archivé</option>
                </select>
            </div>

            <!-- Bouton Submit -->
            <button type="submit" class="btn btn-primary">Publier l'article</button>
        </form>
    </div>
@endsection

{{-- Page specific JS --}}
@section('page-script')
    <!-- Quill Editor JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            modules: {
                toolbar: [
                    [{ 'font': [] }],
                    [{ 'size': ['small', false, 'large', 'huge'] }],
                    ['bold', 'italic', 'underline', 'strike'],
                    [{ 'color': [] }, { 'background': [] }],
                    [{ 'script': 'sub'}, { 'script': 'super' }],
                    [{ 'header': 1 }, { 'header': 2 }, 'blockquote', 'code-block'],
                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                    [{ 'direction': 'rtl' }],
                    [{ 'align': [] }],
                    ['link', 'image', 'video'],
                    ['clean']
                ]
            }
        });

        // Avant de soumettre, injecter le contenu HTML dans input caché
        document.getElementById('blog-form').addEventListener('submit', function() {
            document.getElementById('content').value = quill.root.innerHTML;
        });
    </script>
@endsection
