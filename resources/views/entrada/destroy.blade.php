<div class="modal" tabindex="-1" role="dialog" id="modal-delete-{{$entrada->id}}">
  <form action="{{route('entrada.destroy',['entrada'=>$entrada->id])}}" method="post">
  @method('DELETE')
  @csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">@lang('main.delete-record')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>@lang('main.question-delete') {{$entrada->titulo}}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('main.close')</button>
        <button type="submit" class="btn btn-danger">@lang('main.delete')</button>
      </div>
    </div>
  </div>
  </form>
</div>