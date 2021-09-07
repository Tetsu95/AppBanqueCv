<div>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Experience Professionnelle</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
        <form role="form" wire:submit.prevent="UpdateExperiencePro()">
            <div class="card-body">
            <input type="hidden" wire:model="idExp"/>
              <div class="form-group">
                <label >Poste</label>
                <input type="text" wire:model="poste" value="{{old('formation')}}"  class="form-control @error('poste')
                        is-invalid
                    @enderror">
              </div>
              <div class="form-group">
                <label >Employeur</label>
                <input type="text" wire:model="employeur"  class="form-control @error('employeur')
                        is-invalid
                    @enderror">
              </div>
              <div class="form-group">
                <label >Ville</label>
                <input type="text" wire:model="villeExp"  class="form-control @error('villeExp')
                        is-invalid
                    @enderror">
              </div>
              <div class="d-flex">
                <div class="form-group flex-grow-1 mr-2">
                    <label >Date de debut</label>
                    <input type="text" wire:model="date_debutExp"  class="form-control @error('date_debutExp')
                        is-invalid
                    @enderror">
                </div>
                <div class="form-group flex-grow-1 mr-2">
                    <label >Date de fin</label>
                    <input type="text" wire:model="date_finExp"  class="form-control @error('date_finExp')
                        is-invalid
                    @enderror">
                </div>
              </div>
               <div class="form-group flex-grow-1 mr-2">
                    <label >Description</label>
                    <input type="text" wire:model="descriptionExp"  class="form-control">
                </div>

               <div class="col-md-12">
                    <div class="form-group">
                        <label>nom du cv <span style="color:red;"> (*) </span></label>
                        <select  class="form-control"  wire:model="cv_idExp">
                        <option value="">-------------------</option>
                        @foreach ($editListe as $cur )
                            <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Modifier" class="btn btn-success float-right">
                    <input type="submit" value="Retour" class="btn btn-primary float-left" wire:click.prevent="retourExp"> 
                </div>
              
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>