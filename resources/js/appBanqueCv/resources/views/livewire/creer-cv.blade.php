<div>
      <!-- Content Wrapper. Contains page content -->

    <!-- Main content -->
    {{-- première section --}}
    @include("sections.section1")
    {{-- deuxieme partie --}}
    @include("sections.section2")
    {{--troisieme partie --}}
    @include("sections.section3")
    {{-- quatrieme partie --}}
    @include("sections.section4")
    <!-- /.content -->
  <!-- /.content-wrapper -->
  
</div>
<script>
      window.addEventListener("showSuccessMessage", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:5000
          })
      })
  </script>
  <script>
      window.addEventListener("showSuccessMessageInformation", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:10000
          })
      })
  </script>
   <script>
      window.addEventListener("showSuccessMessageExperience", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:10000
          })
      })
  </script>
  <script>
      window.addEventListener("showSuccessMessageExtra", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:10000
          })
      })
  </script>
  <script>
      window.addEventListener("showSuccessMessageCompetence", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:10000
          })
      })
  </script>
  <script>
      window.addEventListener("showSuccessMessageTechnologie", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:10000
          })
      })
  </script>
  <script>
      window.addEventListener("showSuccessMessageLangue", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:10000
          })
      })
  </script>
   <script>
      window.addEventListener("showSuccessMessagecentre", event=>{
          Swal.fire({
              position: 'top-end',
              icon: 'success',
              toast:true,
              title:event.detail.message || "Operation éffectué avec succès",
              showConfirmButton:false,
              timer:8000
          })
      })
  </script>
