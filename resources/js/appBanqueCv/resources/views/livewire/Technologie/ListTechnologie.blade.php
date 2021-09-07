@foreach ($editListe as $list)
  @if ( count($list->technologieoutil)>0)
        <div class="col-md-6 float-right">
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Technologie et Outil</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list->technologieoutil as $technologie)
                  <tr>
                    <td style="width:50%;">{{$technologie->nom}}</td>
                    <td style="width:50%;">{{$technologie->description}}</td>
                    <td style="width:50%;text-align:center;">
                        <button class="btn btn-link" wire:click.prevent="goEditTechnologie({{$technologie->id}})"> <i class="far fa-edit"><span></span></i></button>
                        <button class="btn btn-link" wire:click.prevent="Deletetechnologie({{$technologie->id}})"> <i class="far fa-trash-alt"><span></span></i></button>
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