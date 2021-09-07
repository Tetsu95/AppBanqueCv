<div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Langue</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
        <form role="form" wire:submit.prevent="UpdateLangue()">
            <div class="card-body">
            <input type="hidden" wire:model="idLangue"/>
              <div class="form-group">
                <label >Competence</label>
                <input type="text" wire:model="nomLangue" value="{{old('nomLangue')}}"  class="form-control @error('nomLangue')
                        is-invalid
                    @enderror">
              </div>

              <div class="form-group">
                <label >Niveau</label>
                <input type="text" wire:model="niveau" value="{{old('niveau')}}"  class="form-control @error('niveau')
                        is-invalid
                    @enderror">
              </div>

               <div class="col-md-12">
                    <div class="form-group">
                        <label>nom du cv <span style="color:red;"> (*) </span></label>
                        <select  class="form-control"  wire:model="cv_idLangue">
                        <option value="">-------------------</option>
                        @foreach ($editListe as $cur )
                            <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Modifier" class="btn btn-success float-right">
                    <input type="submit" value="Retour" class="btn btn-primary float-left" wire:click.prevent="retourLangue"> 
                </div>
              
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>