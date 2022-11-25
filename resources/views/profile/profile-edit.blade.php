@extends('layout/app')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/css/profile-edit.css')}}">
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endsection

@section('content')
@include('components.sidebar')
  
<div class="contents">
  <div class="sub-content">
      <a href="{{ route('profile') }}">My Profile</a>
      <a href="{{ route('profile-edit') }}">Edit Profile</a>
  </div>

  <div class="row-1">
      <div class="left">
          <img src="assets/ALM00016.JPG" alt="">
          <button id="btn-prof">Edit Profile</button>
      </div>
      <div class="right">
          <p>user 24124341</p>
          <h1>Kiagus Ahmad Farhan Aziz</h1>
          <textarea name="" id="" cols="90" rows="5">Gapapa jele yang penting sombong</textarea>
          <p></p>
      </div>
  </div>

  <div class="row-2">
      <table>
          <tr>
              <td>First Name</td>
              <td><input type="text" value="Kiagus Ahmad"></td>
          </tr>
          <tr>
              <td>Last Name</td>
              <td><input type="text" value="Farhan Aziz"></td>
          </tr>
          <tr>
              <td>Email</td>
              <td><input type="email" value="kgs.FA@gmail.com"> </td>
          </tr>
          <tr>
              <td>Phone Number</td>
              <td><input type="number" value="6287887427813"></td>
          </tr>
          <tr>
              <td>Address</td>
              <td><textarea name="" id="" cols="65" rows="5">2972 Westheimer Rd. Santa Ana, Illinois 85486</textarea>  </td>
          </tr>
      </table>

      <div class="form-group">
            <label for="gallery">Gallery</label>
            <div class="needsclick dropzone" id="gallery-dropzone"></div>
        </div>

      <div class="btn-submit">
        <button>Save</button>
      </div>
  </div>
</div>

<div id="myProfile" class="modalProfile">
    <div class="modalprofile-content">
        <div class="header">
            <span class="close close-prof">&times;</span>
        </div>
        <form action="">
            <div class="profile-content">
                <div class="form-group">
                <label for="gallery">Gallery</label>
                <div class="needsclick dropzone" id="gallery-dropzone"></div>
                </div>
                <div class="btn-Profile">
                    <button>submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('assets/js/uploadimg.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script>
        var uploadedGalleryMap = {}
            Dropzone.options.galleryDropzone = {
                    url: "{{ url('profile/image') }}",
                         maxFilesize: 5, // MB
                         maxFiles: 1,
                         acceptedFiles: '.jpeg,.jpg,.png,.gif',
                         addRemoveLinks: true,
                         headers: {
                           'X-CSRF-TOKEN': "{{ csrf_token() }}"
                         },
                         success: function (file, response) {
                           $('form').append('<input type="hidden" name="gallery[]" value="' + response.name + '">')
                           uploadedGalleryMap[file.name] = response.name
                         },
                         removedfile: function (file) {
                           file.previewElement.remove()
                           var name = ''
                           if (typeof file.file_name !== 'undefined') {
                             name = file.file_name
                           } else {
                             name = uploadedGalleryMap[file.name]
                           }
                           $('form').find('input[name="gallery[]"][value="' + name + '"]').remove()
                         },
                         init: function () {
                     @if(isset($profile) && $profile->gallery)
                           var files =
                             {!! json_encode($profile->gallery) !!}
                               for (var i in files) {
                               var file = files[i]
                               this.options.addedfile.call(this, file)
                               this.options.thumbnail.call(this, file, file.original_url)
                               file.previewElement.classList.add('dz-complete')
                               $('form').append('<input type="hidden" name="gallery[]" value="' + file.file_name + '">')
                             }
                     @endif
                         },
                          error: function (file, response) {
                              if ($.type(response) === 'string') {
                                  var message = response //dropzone sends it's own error messages in string
                              } else {
                                  var message = response.errors.file
                              }
                              file.previewElement.classList.add('dz-error')
                              _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                              _results = []
                              for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                                  node = _ref[_i]
                                  _results.push(node.textContent = message)
                              }
                              return _results
                          }
                        }
</script>

@endsection