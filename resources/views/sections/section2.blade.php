<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Experience Professionnelle</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
        
            <div class="card-body">
         <form role="form" wire:submit.prevent="AddExperiencePro">
              <div class="form-group">
                <label>Poste<span style="color:red;"> (*) </span></label>
                <input type="text" placeholder="Poste occupé" class="form-control" wire:model="poste" value="old('poste')" required>
              </div>
              <div class="form-group">
                <label>Employeur<span style="color:red;"> (*) </span></label>
                <input type="text"class="form-control" wire:model="employeur" value="old('employeur')" required>
              </div>
              <div class="form-group">
                <label>Ville<span style="color:red;"> (*) </span></label>
                <input type="text" class="form-control" wire:model="ville_experience" value="old('ville_experience')" required>
              </div>
               <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>date de debut <span style="color:red;"> (*) </span></label>
                        <input type="text" placeholder="en mois ou année ou la date complète(01/02/2010" class="form-control" wire:model="date_debut_experience" required>
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>date de fin <span style="color:red;"> (*) </span></label>
                        <input type="text" placeholder=" en mois ou année ou la date complète(01/02/2011" class="form-control" wire:model="date_fin_experience" required>
                    </div>
              </div>
              <div class="form-group">
                <label> Description</label>
                <textarea  class="form-control" rows="3" wire:model="description_experience"></textarea>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                      <label>nom du cv <span style="color:red;"> (*) </span></label>
                        <select  class="form-control" wire:model="cv_id_experience">
                        <option value="">-------------------</option>
                        @foreach ($allCv as $cur )
                            <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                        @endforeach
                        </select>
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
              <h3 class="card-title">Experience Extra Porfessionnelle</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
                <div class="card-body">
            <form role="form" wire:submit.prevent="AddExperienceExtraPro">
                    {{-- @foreach ($orderFormation as $index=> $orderForm ) --}}  
                    <div>
                        <div class="form-group">
                          <label>Poste<span style="color:red;"> (*) </span></label>
                          <input type="text" placeholder="Poste occupé" class="form-control" wire:model="poste_experience_extra" value="old('poste_experience_extra')" required>
                        </div>
                        <div class="form-group">
                          <label>Employeur<span style="color:red;"> (*) </span></label>
                          <input type="text"class="form-control" wire:model="employeur_experience_extra" value="old('employeur_experience_extra')" required>
                        </div>
                        <div class="form-group">
                          <label>Ville<span style="color:red;"> (*) </span></label>
                          <input type="text" class="form-control" wire:model="ville_experience_extra" value="old('ville_experience_extra')" required>
                        </div>
                       
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>date_debut <span style="color:red;"> (*) </span></label>
                                        <input type="text" placeholder=" en mois ou année ou la date complète(01/02/2010"   class="form-control" wire:model="date_debut_experience_extra">
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>date_fin <span style="color:red;"> (*) </span></label>
                                        <input type="text" placeholder=" en mois ou année ou la date complète(01/02/2011" class="form-control" wire:model="date_fin_experience_extra">
                                       
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                  <label> Description</label>
                                  <textarea  class="form-control" rows="3" wire:model="description_experience_extra"></textarea>
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>nom du cv <span style="color:red;"> (*) </span></label>
                                            <select  class="form-control" wire:model="cv_id_experience_extra">
                                            <option value="">-------------------</option>
                                            @foreach ($allCv as $cur )
                                                <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                                            @endforeach
                                                
                                            </select>
                                       
                                        </div>
                                    </div>
                                    
                            
                        </div>
                    </div>
            
                    {{-- @endforeach --}}
            
                    <div class="form-group">
                        <input type="submit" value="Enregistrer" class="btn btn-success float-right mt-2">
                    
                        {{-- <a href="#" class="btn btn-secondary ml-5 mt-2 float-right">Enregistrer</a> --}}
                        <!-- /.card-body -->
                    </div>
            </form>
                </div>
            
          <!-- /.card -->
        </div>
      </div>
    </section>