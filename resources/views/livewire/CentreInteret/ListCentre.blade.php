@foreach ($editListe as $list)
  @if ( count($list->centreinteret)>0)
        <div class="col-md-6">
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Centre d'Interet</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                    <tr>
                      <th>Centre d'Interet</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list->centreinteret as $centre)
                  <tr>
                    <td style="width:50%;">{{$centre->nom}}</td>
                    <td style="width:50%;text-align:center;">
                        <button class="btn btn-link" wire:click.prevent="goEditCentre({{$centre->id}})"> <i class="far fa-edit"><span></span></i></button>
                        <button class="btn btn-link" wire:click.prevent="DeleteCentre({{$centre->id}})"> <i class="far fa-trash-alt"><span></span></i></button>
                    </td>
                    
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      @endif
    @endforeach