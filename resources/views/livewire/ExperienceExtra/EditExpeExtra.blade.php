<div>
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Experience Extra Professionnelle</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
        <form role="form" wire:submit.prevent="UpdateExperienceExtra()">
            <div class="card-body">
            <input type="hidden" wire:model="idExtra"/>
              <div class="form-group">
                <label >Poste</label>
                <input type="text" wire:model="posteExtra" value="{{old('posteExtra')}}"  class="form-control @error('posteExtra')
                        is-invalid
                    @enderror">
              </div>
              <div class="form-group">
                <label >Employeur</label>
                <input type="text" wire:model="employeurExtra"  class="form-control @error('employeurExtra')
                        is-invalid
                    @enderror">
              </div>
              <div class="form-group">
                <label >Ville</label>
                <input type="text" wire:model="villeExtra"  class="form-control @error('villeExtra')
                        is-invalid
                    @enderror">
              </div>
              <div class="d-flex">
                <div class="form-group flex-grow-1 mr-2">
                    <label >Date de debut</label>
                    <input type="text" wire:model="date_debutExtra"  class="form-control @error('date_debutExtra')
                        is-invalid
                    @enderror">
                </div>
                <div class="form-group flex-grow-1 mr-2">
                    <label >Date de fin</label>
                    <input type="text" wire:model="date_finExtra"  class="form-control @error('date_finExtra')
                        is-invalid
                    @enderror">
                </div>
              </div>
               <div class="form-group flex-grow-1 mr-2">
                    <label >Description</label>
                    <input type="text" wire:model="descriptionExtra"  class="form-control">
                </div>

               <div class="col-md-12">
                    <div class="form-group">
                        <label>nom du cv <span style="color:red;"> (*) </span></label>
                        <select  class="form-control"  wire:model="cv_idExtra">
                        <option value="">-------------------</option>
                        @foreach ($editListe as $cur )
                            <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Modifier" class="btn btn-success float-right">
                    <input type="submit" value="Retour" class="btn btn-primary float-left" wire:click.prevent="retourExtra"> 
                </div>
              
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>