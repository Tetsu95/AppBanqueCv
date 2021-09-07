<div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Centre d'Interet</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
        <form role="form" wire:submit.prevent="UpdateCentre()">
            <div class="card-body">
            <input type="hidden" wire:model="idCentre"/>
              <div class="form-group">
                <label >Centre d'Ineteret</label>
                <input type="text" wire:model="nomCentre" value="{{old('nomCentre')}}"  class="form-control @error('nomCentre')
                        is-invalid
                    @enderror">
              </div>

               <div class="col-md-12">
                    <div class="form-group">
                        <label>nom du cv <span style="color:red;"> (*) </span></label>
                        <select  class="form-control"  wire:model="cv_idCentre">
                        <option value="">-------------------</option>
                        @foreach ($editListe as $cur )
                            <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Modifier" class="btn btn-success float-right">
                    <input type="submit" value="Retour" class="btn btn-primary float-left" wire:click.prevent="retourCentre"> 
                </div>
              
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>