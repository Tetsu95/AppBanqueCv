<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Information Personnel</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
        
            <div class="card-body">
         <form role="form" wire:submit.prevent="AddCv" enctype="multipart/form-data">
              <div class="form-group">
                <label>Nom du cv <span style="color:red;"> (*) </span></label>
                <input type="text" placeholder="Donnez un nom a votre cv" class="form-control @error('nom_cv') is-invalid @enderror" wire:model="nom_cv" required>
              </div>
               <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Nom <span style="color:red;"> (*) </span></label>
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" wire:model="nom" required>
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Prenoms <span style="color:red;"> (*) </span></label>
                        <input type="text" class="form-control @error('prenoms') is-invalid @enderror" value="{{old('prenoms')}}" wire:model="prenoms" required>
                    </div>
              </div>
               <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Date de naissance <span>(falcultatif)</span></label>
                        <input type="date" class="form-control " wire:model="date_naissance" >
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Lieu de naissance <span>(falcultatif)</span></label>
                        <input type="text" class="form-control @error('lieu_naissance') is-invalid @enderror" wire:model="lieu_naissance" value="{{old('lieu_naissance')}}">
                    </div>
              </div>
              <div class="form-group">
                <label>Profil <span style="color:red;"> (*) </span></label>
                <input type="text" placeholder="Poste actuellement occupé" class="form-control @error('type_profil') is-invalid @enderror" wire:model="type_profil" value="{{old('type_profil')}}" required>
              </div>
              <div class="form-group">
                <label>email <span style="color:red;"> (*) </span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" value="{{old('email')}}" required>
              </div>
              <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label>Telephone 1 <span style="color:red;"> (*) </span></label>
                        <input type="text" class="form-control @error('telephone1') is-invalid @enderror" wire:model="telephone1" value="{{old('telephone1')}}" required>
                    </div>
                    <div class="form-group flex-grow-1">
                        <label>Telephone 2 <span>(falcultatif)</span></label>
                        <input type="text" class="form-control" value="{{old('telephone2')}}" wire:model="telephone2">
                    </div>
              </div>
              <div class="form-group">
                <label>Adresse <span style="color:red;"> (*) </span></label>
                <input type="text" class="form-control @error('adresse') is-invalid @enderror" wire:model="adresse" value="{{old('adresse')}}" required>
              </div>
               <div class="form-group col-md-12">
                      @if ($photo)
                          Photo Preview:
                          <img src="{{ $photo->temporaryUrl() }}">
                      @endif
                    <label>Photo de profil <span style="color:red;"> (*) </span></label>
                    <div>
                        <input type="file" name="image"  wire:model="photo">
                       
                      
                      @error('photo') <span class="error">{{ $message }}</span> @enderror
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
              <h3 class="card-title">Formations</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            
                <div class="card-body">
            <form role="form" wire:submit.prevent="AddFormation">
                    {{-- @foreach ($orderFormation as $index=> $orderForm ) --}}  
                    <div>
                        <div class="form-group">
                            <label>Nom de la formation <span style="color:red;"> (*) </span></label>
                            <input type="text"  class="form-control @error('Newformation.formation') is-invalid @enderror" wire:model="Newformation.formation">
                           
                        </div>
                        <div class="form-group">
                            <label >Etablissement <span style="color:red;"> (*) </span></label>
                            <input type="text"  class="form-control  @error('Newformation.etablissement') is-invalid @enderror" wire:model="Newformation.etablissement">
                          
                        </div>
                        <div class="form-group">
                            <label >Ville <span style="color:red;"> (*) </span></label>
                            <input type="text"  class="form-control  @error('Newformation.ville') is-invalid @enderror" wire:model="Newformation.ville">
                           
                        </div>
                       
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>date_debut <span style="color:red;"> (*) </span></label>
                                        <input type="text" placeholder=" en mois ou année ou la date complète(01/02/2010"   class="form-control  @error('Newformation.date_debut') is-invalid @enderror" wire:model="Newformation.date_debut">
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>date_fin <span style="color:red;"> (*) </span></label>
                                        <input type="text" placeholder=" en mois ou année ou la date complète(01/02/2011" class="form-control  @error('Newformation.date_fin') is-invalid @enderror" wire:model="Newformation.date_fin">
                                       
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label >Description</label>
                                    <input type="text"  class="form-control" wire:model="Newformation.description">
                                
                                </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>nom du cv <span style="color:red;"> (*) </span></label>
                                            <select  class="form-control  @error('Newformation.cv_id') is-invalid @enderror" wire:model="Newformation.cv_id">
                                            <option value="">-------------------</option>
                                            @foreach ($allCv as $cur )
                                                <option value="{{$cur->id}}"> {{$cur->nom_cv}} </option>
                                            @endforeach
                                                
                                            </select>
                                        {{-- @error("Newformation.cv_id") 
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror --}}
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6 mt-4">
                                        <input style="text-align:center;" type="submit" value="- Supprimer le block" class="btn btn-danger  float-left" wire:click.prevent="removeFormation({{$index}})">
                                    </div> --}}
                            
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