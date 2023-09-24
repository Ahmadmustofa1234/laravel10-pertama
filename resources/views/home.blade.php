<div class="container">
<div class="row">
    <div class="col-lg-6">
        <div class="card mt-3">
            <div class="card-header">
             Profil
            </div>
            <div class="card-body">
              <h5 class="card-title">Nama : {{ $nama }}</h5>
              <p class="card-text">Jurusan :  {{ $jurusan }} .</p>
            
            </div>
          </div>
    </div>
    <div class="col-lg-6">
       
         
            
              <img src="{{URL::asset("/img/$gambar")}}" alt="" width="400px">
              
          </div>
    </div>
    {{--  --}}
    
    {{--  --}}
</div>
   

    
</div>

