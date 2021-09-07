<div>

  
     
           <!-- /.row -->
         <div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
             
                {{-- <h3 class="card-title">Responsive Hover Table</h3> --}}
                <div class="card-tools ">
                  <div class="input-group input-group-lg ">
                    <input type="text" wire:model="search" class="form-control float-right" placeholder="saisissez le nom de votre Cv // ou votre prenom entier" style="width:500px;">

                    <div class="input-group-append">
                    
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    
                    </div>
                  </div>
                </div>  
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
      
                  <tbody>
                  @foreach ($cv as $cvs)
                    <tr>
                      <td >{{$cvs->nom_cv}}</td>
                      <td >{{$cvs->nom}} {{$cvs->prenoms}}</td>
                      <td >Créer le {{$cvs->created_at->format('d/m/y')}}</td>
                      <td style="witdh: 15%">
                      <button class="btn btn-link" wire:click.prevent="goDetail({{$cvs->id}})"> <i class="far fa-eye"><span style="size: 30px;">Voir</span></i></button>
                      </td>
                    </tr>
                  @endforeach
                   
                  </tbody>
                 
                </table> 
               </div>
            
            </div>
            
          </div>
        </div> 
        <!-- /.row -->
    
         
 
</div>
