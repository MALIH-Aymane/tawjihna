@extends('dashboard/layouts/layoutMaster')

@section('title', 'Gestion des Types de Bac')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <h4 class="fw-bold py-3 mb-4">Types de Baccalauréat Marocain</h4>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Bouton Ajouter -->
        <button class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#createModal">
            Ajouter un Type de Bac
        </button>

        <!-- Table -->
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nom (Français)</th>
                        <th>Nom (Arabe)</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bacTypes as $bacType)
                        <tr>
                            <td>{{ $bacType->name_fr }}</td>
                            <td style="font-family: 'Arial', sans-serif; direction: rtl;">{{ $bacType->name_ar }}</td>
                            <td>
                                <button class="btn btn-sm btn-icon btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{ $bacType->id }}">
                                    <i class="ti ti-pencil"></i>
                                </button>

                                <form action="{{ route('admin.bac-types.destroy', $bacType->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-icon btn-danger" onclick="return confirm('Confirmer la suppression ?')">
                                        <i class="ti ti-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal{{ $bacType->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('admin.bac-types.update', $bacType->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modifier Type de Bac</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Nom en Français</label>
                                                <input type="text" name="name_fr" class="form-control" value="{{ $bacType->name_fr }}" required>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nom en Arabe</label>
                                                <input type="text" name="name_ar" class="form-control" value="{{ $bacType->name_ar }}" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-3 mx-3">
                {{ $bacTypes->links('pagination::bootstrap-5') }}
            </div>

        </div>

        <!-- Modal Create -->
        <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <form method="POST" action="{{ route('admin.bac-types.store') }}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Ajouter un Type de Bac</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nom en Français</label>
                                <input type="text" name="name_fr" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nom en Arabe</label>
                                <input type="text" name="name_ar" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
