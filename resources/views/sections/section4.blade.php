<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Langues</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form role="form" wire:submit.prevent="AddLangue">
              <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Nom Langue <span style="color:red;"> (*) </span></label>
                        <input type="text" class="form-control" wire:model="nom_langue" required>
                    </div>
                    <div class="form-group flex-grow-1">
                         <div class="form-group flex-grow-1 mr-2">
                            <label>Niveau de langue<span style="color:red;"> (*) </span></label>
                            <input type="text" class="form-control" wire:model="niveau_langue">
                          </div>
                    </div>
              </div>
              <div class="form-group">
                    <label>nom du cv <span style="color:red;"> (*) </span></label>
                    <select  class="form-control" wire:model="cv_id_langue">
                    <option value="">-------------------</option>
                    @foreach ($allCv as $cur )
                        <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                    @endforeach
                    </select>
              </div>

              <div class="form-group">
                    <div>
                        <input type="submit" value="Enregistrer" class="btn btn-success float-right">
                        
                    </div>
                </div>
              
              </form>
            </div>
            
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Centre d'Interet</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
             <form role="form" wire:submit.prevent="AddCentre">
              <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Intitulé <span style="color:red;"> (*) </span></label>
                        <input type="text" class="form-control" wire:model="nom_centre" required>
                    </div>
                    <div class="form-group flex-grow-1">
                        <div class="form-group">
                            <label>nom du cv <span style="color:red;"> (*) </span></label>
                            <select  class="form-control" wire:model="cv_id_centre" required>
                            <option value="">-------------------</option>
                            @foreach ($allCv as $cur )
                                <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                            @endforeach
                                
                            </select>
                                       
                        </div>
                    </div>
              </div>

              <div class="form-group">
                    <div>
                        <input type="submit" value="Enregistrer" class="btn btn-success float-right">
                        
                    </div>
                </div>
              
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      
    </section>