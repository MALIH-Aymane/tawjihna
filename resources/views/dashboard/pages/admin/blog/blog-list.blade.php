@php
    use Illuminate\Support\Str;
    $configData = Helper::appClasses();
@endphp

@extends('dashboard/layouts/layoutMaster')

@section('title', 'Liste des articles')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold mb-4">Liste des articles <a href="{{route('admin.blog.create')}}" class="btn btn-success"
                                                       style="float: right">Ajouter un article</a>
        </h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Filtres -->
        <div class="card mb-4">
            <div class="card-body">
                <form method="GET" action="{{ route('admin.blog.index') }}" class="row gy-2 gx-3 align-items-center">
                    <div class="col-auto">
                        <select name="status" class="form-select" onchange="this.form.submit()">
                            <option value="">-- Tous les statuts --</option>
                            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Brouillon
                            </option>
                            <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>Publié
                            </option>
                            <option value="archived" {{ request('status') == 'archived' ? 'selected' : '' }}>Archivé
                            </option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <!-- Liste des articles en cartes -->
        <div class="row">
            @forelse($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 position-relative">

                        @if($blog->featured_image)
                            <img src="{{ asset('storage/' . $blog->featured_image) }}" class="card-img-top"
                                 alt="Image de l'article" style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ Str::limit($blog->title, 50) }}</h5>
                            <p class="card-text">{{ Str::limit(strip_tags($blog->excerpt ?? $blog->content), 100) }}</p>

                            <div class="mt-auto">
                                <span class="badge bg-label-primary">{{ ucfirst($blog->status) }}</span>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{ $blog->category->name ?? 'Sans catégorie' }}</small>
                            <small
                                class="text-muted">{{ $blog->published_at ? $blog->published_at->format('d/m/Y') : 'Non publié' }}</small>
                        </div>

                        <!-- Options CRUD en haut à droite -->
                        <div class="position-absolute top-0 end-0 m-2">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-icon btn-label-primary" type="button"
                                        id="crudOptions{{ $blog->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="crudOptions{{ $blog->id }}">
                                    <li>
                                        {{--                                        <a class="dropdown-item" href="{{ route('admin.blogs.edit', $blog->id) }}">--}}
                                        <a class="dropdown-item" href="#">
                                            <i class="ti ti-pencil me-1"></i> Modifier
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST"
                                              onsubmit="return confirm('Confirmer la suppression ?');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="dropdown-item text-danger" type="submit">
                                                <i class="ti ti-trash me-1"></i> Supprimer
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">Aucun article trouvé.</div>
                </div>
            @endforelse
        </div>


        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $blogs->withQueryString()->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection
