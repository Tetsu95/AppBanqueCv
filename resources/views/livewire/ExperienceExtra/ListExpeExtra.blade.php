@foreach ($editListe as $list)
    @if ( count($list->experienceextraprofressionnelle)>0)
        
    
        <div class="col-md-12">
          <!-- /.card -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Experience Professionnelle</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                    <tr>
                      <th>Poste</th>
                      <th>Employeur</th>
                      <th>Ville</th>
                      <th>Date_debut</th>
                      <th>Date_fin</th>
                      <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($list->experienceextraprofressionnelle as $expeExtra)
                  <tr>
                    <td style="width:15%;">{{$expeExtra->poste}}</td>
                    <td style="width:15%;">{{$expeExtra->employeur}}</td>
                    <td style="width:15%;">{{$expeExtra->ville}}</td>
                    <td style="width:15%;">{{$expeExtra->date_debut}}</td>
                    <td style="width:10%;">{{$expeExtra->date_fin}}</td>
                    <td style="width:15%;">{{$expeExtra->description}}</td>
                    
                    <td style="width:5%;text-align:center;">
                        <button class="btn btn-link" wire:click.prevent="goEditExperienceExtra({{$expeExtra->id}})"> <i class="far fa-edit"><span></span></i></button>
                        <button class="btn btn-link" wire:click.prevent="DeleteExperienceExtra({{$expeExtra->id}})"> <i class="far fa-trash-alt"><span></span></i></button>
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