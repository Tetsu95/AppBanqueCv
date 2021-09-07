<div>
      <!-- Content Wrapper. Contains page content -->
 

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Information Personnel</h3>
            
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            
            </div>
        <form role="form" wire:submit.prevent="UpdateInformationPersonnel()">
            <div class="card-body">
            <input type="hidden" wire:model="ids"/>
              <div class="form-group">
                <label >Nom du Cv</label>
                <input type="text" wire:model="nom_cv" value="{{old('nom_cv')}}"  class="form-control @error('nom_cv') is-invalid @enderror">
              </div>
              <div class="form-group">
                <label >Nom</label>
                <input type="text" wire:model="nom"  class="form-control @error('nom') is-invalid @enderror">
              </div>
              <div class="form-group">
                <label >Prenoms</label>
                <input type="text" wire:model="prenoms"  class="form-control @error('prenoms') is-invalid @enderror">
              </div>
              <div class="d-flex">
                <div class="form-group flex-grow-1 mr-2">
                    <label >Date de naissance</label>
                    <input type="date" wire:model="date_naissance"  class="form-control">
                </div>
                <div class="form-group flex-grow-1 mr-2">
                    <label >Lieu de naissance</label>
                    <input type="text" wire:model="lieu_naissance"  class="form-control">
                </div>
              </div>
               <div class="form-group">
                    <label >Profil</label>
                    <input type="text" wire:model="type_profil"  class="form-control @error('nom_cv') is-invalid @enderror">
                </div>
                 <div class="form-group">
                    <label >Email</label>
                    <input type="email" wire:model="email"  class="form-control  @error('email')
                        is-invalid
                    @enderror">
                </div>
               <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                        <label >Telephone 1</label>
                        <input type="text" wire:model="telephone1"  class="form-control @error('telephone1') is-invalid @enderror">
                    </div>
                    <div class="form-group flex-grow-1 mr-2">
                        <label >Telephone 2</label>
                        <input type="text" wire:model="telephone2"  class="form-control">
                    </div>
              </div>
              <div class="form-group flex-grow-1 mr-2">
                    <label >Adresse</label>
                    <input type="text" wire:model="adresse"  class="form-control @error('adresse') is-invalid @enderror">
              </div>
              <div class="form-group col-md-12">
                    <label>Photo de profil <span style="color:red;"> (*) </span></label>
                    <div>
                        <input type="file" name="image"  wire:model="photo">
                       
                      
                      @error('photo') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div>
                    <input type="submit" value="Modifier" class="btn btn-success float-right">
                     
               </div>
              
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        @if ($isClikedCompetence)
            @include("livewire.Competence.EditCompetence")
        @else
            @include("livewire.Competence.ListCompetence")
        @endif

        @if ($isClikedCentre)
            @include("livewire.CentreInteret.EditCentre")
        @else
            @include("livewire.CentreInteret.ListCentre")
        @endif

        @if ($isClikedLangue)
            @include("livewire.Langue.EditLangue")
        @else
            @include("livewire.Langue.ListLangue")
        @endif

        @if ($isClikedTechnologie)
            @include("livewire.Technologie.Edittechnologie")
        @else
            @include("livewire.Technologie.ListTechnologie")
        @endif

        @if ($iscliked)
            @include("livewire.Formations.edit")
        @else
            @include("livewire.Formations.list")
        @endif

        @if ($isClikedExpe)
            @include("livewire.ExperienceProfessionelle.EditExperience")
        @else
            @include("livewire.ExperienceProfessionelle.ListeExperience")
        @endif

        @if ($isClikedExpeExtra)
            @include("livewire.ExperienceExtra.EditExpeExtra")
        @else
            @include("livewire.ExperienceExtra.ListExpeExtra")
        @endif

      </div>
      {{-- <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div> --}}
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
</div>
