@foreach ($editListe as $list)
  @if ( count($list->formation)>0)
        <div class="col-md-12">
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Formations</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                    <tr>
                      <th>Formation</th>
                      <th>Etablissement</th>
                      <th>Ville</th>
                      <th>Date_debut</th>
                      <th>Date_fin</th>
                      <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list->formation as $form)
                  <tr>
                    <td style="width:15%;">{{$form->formation}}</td>
                    <td style="width:15%;">{{$form->etablissement}}</td>
                    <td style="width:15%;">{{$form->ville}}</td>
                    <td style="width:15%;">{{$form->date_debut}}</td>
                    <td style="width:10%;">{{$form->date_fin}}</td>
                    <td style="width:15%;">{{$form->description}}</td>
                    <td style="width:5%;text-align:center;">
                        <button class="btn btn-link" wire:click.prevent="goEditFormation({{$form->id}})"> <i class="far fa-edit"><span></span></i></button>
                        <button class="btn btn-link" wire:click.prevent="DeleteFormation({{$form->id}})"> <i class="far fa-trash-alt"><span></span></i></button>
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