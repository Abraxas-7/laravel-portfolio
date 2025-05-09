<div class="d-flex justify-content-between border border-secondary bg-white rounded border-2 p-2 mb-3">
    <div>
        <a href="{{ route($routeName . '.index', $model->id) }}" class="btn btn-outline-dark border-0 fw-bold p-1">
            <i class="fa-solid fa-left-long fs-4"></i>
        </a>
    </div>

    <div>
        <a href="{{ route($routeName . '.edit', $model->id) }}" class="btn btn-outline-warning border-0 fw-bold p-1">
            <i class="fa-solid fa-pen-to-square fs-4"></i>
        </a>
        <button type="button" class="btn btn-outline-danger border-0 fw-bold p-1" data-bs-toggle="modal"
            data-bs-target="#deleteProject">
            <i class="fa-solid fa-trash fs-4"></i>
        </button>
    </div>
</div>

<div class="modal fade" id="deleteProject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma l'eliminazione</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare l'oggetto selezionato?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                <form action="{{ route($routeName . '.destroy', $model->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Elimina">
                </form>
            </div>
        </div>
    </div>
</div>
