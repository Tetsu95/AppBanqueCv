<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Competence</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <form role="form" wire:submit.prevent="AddCompetence">
              <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Nom competence <span style="color:red;"> (*) </span></label>
                        <input type="text" class="form-control" wire:model="nom_competence" required>
                    </div>
                    <div class="form-group flex-grow-1">
                        <div class="form-group">
                            <label>nom du cv <span style="color:red;"> (*) </span></label>
                            <select  class="form-control" wire:model="cv_id_competence" required>
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
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Technologie et Outils</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
            <form role="form" wire:submit.prevent="AddTechnologie">
              <div class="form-group">
                  <label>Technologie ou Outils utilisé<span style="color:red;"> (*) </span></label>
                  <input type="text" class="form-control" wire:model="nom_technologie" required>
              </div>
               <div class="form-group">
                <label> Detail</label>
                <textarea  class="form-control" rows="3" wire:model="description_technologie"></textarea>
              </div>
                <div class="form-group col-md-12">
                    <label>nom du cv <span style="color:red;"> (*) </span></label>
                    <select  class="form-control" wire:model="cv_id_technologie" required>
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
      </div>
      
    </section>