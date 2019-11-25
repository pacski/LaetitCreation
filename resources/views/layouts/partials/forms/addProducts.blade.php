<form class="needs-validation px-2 pb-2" method="post" enctype="multipart/form-data" novalidate >
    @csrf

        <div class="form-row d-flex justify-content-center">
          <div class="col-md-6 mb-6">
            <input type="text" class="form-control" id="validationCustom01" placeholder="Nom" name="name" required>
            <div class="valid-feedback">
              Looks good!
            </div>
            @if ($errors->has('name'))
            <p>{{$errors->first('name')}}</p>
            @endif
          </div>
        </div>
        <div class="form-row d-flex justify-content-center">
          <div class="col-md-6 mb-6 ">
            <input type="text" class="form-control" id="validationCustom02" placeholder="Description" name="description" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="form-row d-flex justify-content-center">
          <div class="col-md-6 mb-6 ">
            <div class="input-group">
              <div class="input-group-prepend">
              </div>
              <input type="text" class="form-control" id="validationCustomUsername" placeholder="Coût (Cm)" aria-describedby="inputGroupPrepend" name="cost" required>
              <div class="invalid-feedback">
                Looks not good!
              </div>
            </div>
          </div>
        </div>
        <div class="form-row d-flex justify-content-center">
          <div class="col-md-6 mb-6 ">
            <input type="text" class="form-control" id="validationCustom03" placeholder="Prix" name="price" required>
            <div class="invalid-feedback">
              Please provide a valid price
            </div>
          </div>
        </div>
        <div class="form-row d-flex justify-content-center">
          <div class="col-md-6 mb-6 ">
            <input type="text" class="form-control" id="validationCustom04" placeholder="Temps de production (Min)" name="production_time" required>
            <div class="invalid-feedback">
              Please provide a valid time.
            </div>
          </div>
        </div>
        <div class="form-group d-flex justify-content-center">
          <div class="d-flex justify-content-center">
              <label for="exampleFormControlFile1">Photo du produit</label>
              <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
          </div>
        </div>
        <div class="form-group d-flex justify-content-center">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Confirmer la validité des informations
            </label>
            <div class="invalid-feedback">
              Vous devez d'abord Confirmer
            </div>
          </div>
        </div>
        <div class=" d-flex justify-content-center">
          <button class="btn btn-primary  col-md-6 mb-6" type="submit">Ajouter Produit</button>
        </div>
      </form>
      
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();


     
      </script>