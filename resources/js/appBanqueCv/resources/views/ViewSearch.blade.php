@extends("layouts.master")

@section("contenu")
<div class="row p-4 pt-5">
 <div class="col-12">
     <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <tbody>
                    @foreach ($cvs as $cv)
                        <td>{{$cv->nom_cv}}</td>
                        <td>{{$cv->nom}} {{$cv->prenoms}}</td>
                        <td>
                        <a class="btn btn-link" href="{{url('/modification/'.$cv->id)}}"> <i class="far fa-edit"><span style="size: 30px;"></span></i></a></td>
                    @endforeach
                    </tbody>
                </table>
          </div>
        </div>
 </div>
</div>

@endsection