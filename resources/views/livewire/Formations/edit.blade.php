<div>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Formations</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
        <form role="form" wire:submit.prevent="UpdateFormation()">
            <div class="card-body">
            <input type="hidden" wire:model="idss"/>
              <div class="form-group">
                <label >Nom de la formation</label>
                <input type="text" wire:model="formation" value="{{old('formation')}}"  class="form-control @error('formation')
                        is-invalid
                    @enderror">
              </div>
              <div class="form-group">
                <label >Etablissement</label>
                <input type="text" wire:model="etablissement"  class="form-control @error('etablissement')
                        is-invalid
                    @enderror">
              </div>
              <div class="form-group">
                <label >Ville</label>
                <input type="text" wire:model="ville"  class="form-control @error('ville')
                        is-invalid
                    @enderror">
              </div>
              <div class="d-flex">
                <div class="form-group flex-grow-1 mr-2">
                    <label >Date de debut</label>
                    <input type="text" wire:model="date_debut"  class="form-control @error('date_debut')
                        is-invalid
                    @enderror">
                </div>
                <div class="form-group flex-grow-1 mr-2">
                    <label >Date de fin</label>
                    <input type="text" wire:model="date_fin"  class="form-control @error('date_fin')
                        is-invalid
                    @enderror">
                </div>
              </div>
               <div class="form-group flex-grow-1 mr-2">
                    <label >Description</label>
                    <input type="text" wire:model="description"  class="form-control">
                </div>

               <div class="col-md-12">
                    <div class="form-group">
                        <label>nom du cv <span style="color:red;"> (*) </span></label>
                        <select  class="form-control"  wire:model="cv_id">
                        <option value="">-------------------</option>
                        @foreach ($editListe as $cur )
                            <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Modifier" class="btn btn-success float-right">
                    <input type="submit" value="Retour" class="btn btn-primary float-left" wire:click.prevent="retour"> 
                </div>
              
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>