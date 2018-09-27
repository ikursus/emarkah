<a href="{{ route('kursus.edit', $item['id']) }}" class="btn btn-sm btn-info">Edit</a>

<!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $item['id'] }}">
  Delete
</button>

<form method="POST" action="{{ route('kursus.destroy', $item['id']) }}">
  @csrf
  @method('DELETE')

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $item['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengesahan Hapus Rekod</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Adakah anda bersetuju untuk menghapuskan rekod ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Teruskan</button>
      </div>
    </div>
  </div>
</div>
</form>
