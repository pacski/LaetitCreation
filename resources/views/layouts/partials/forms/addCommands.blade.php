<form class="needs-validation px-2 pb-2" action="/liste_des_commandes" method="post" novalidate>
    @csrf

        <div class="form-row">
          <div class="col-md-12 mb-12">
            <input type="text" class="form-control" id="validationCustom01" placeholder="Nom" name="name" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-12">
            <input type="text" class="form-control" id="validationCustom02" placeholder="Adresse" name="adresse" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
        </div>
        
        <select class="custom-select col-md-12" name="origin" id="">
            <option name="origin" selected>Origine de la vente</option>
            <option value="Etsy">Etsy</option>
            <option value="Vinted">Vinted</option>
            <option value="Instagram">Instagram</option>
        </select>


        
    
        <div class="form-row ">
            <div class="form-group col-md-4">
                <select class="custom-select"  name="product_1" id="" onchange="myFunction()">
                    <option name="product_1" selected>Produit 1</option>
                    @foreach ($products as $product)
                      <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>            
                <div class="invalid-feedback">
                Please provide a valid price
                </div>
                
              </div>
              <div class="form-group col-md-4">
                  <select class="custom-select" name="quantity_1" id="">
                      <option name="quantity_1" selected>Quantité</option>
                      <option  value="1">1</option>
                      <option  value="2">2</option>
                      <option  value="3">3</option>
                  </select>             
                  <div class="invalid-feedback">
                  Please provide a valid time.
                </div>
              </div>
              <div class="form-group col-md-4">
                  <select class="custom-select" name="tissu_1" id="">
                      <option selected>Tissu</option>
                      @foreach ($tissuses as $tissue)
                        <option value="{{$tissue->image}}">{{$tissue->name}}</option>
                      @endforeach
                  </select>             
                  <div class="invalid-feedback">
                  Please provide a valid time.
                </div>
              </div>
        </div>

    

        <div  class="form-row ">
            <div class="form-group col-md-4">
                <select class="custom-select" name="product_2" id="">
                    <option value="" selected>Produit 2</option>
                    @foreach ($products as $product)
                      <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>            
                <div class="invalid-feedback">
                Please provide a valid price
                </div>
              </div>
              <div class="form-group col-md-4">
                  <select  class="custom-select" name="quantity_2" id="">
                      <option value="" selected>Quantité</option>
                      <option  value="1">1</option>
                      <option  value="2">2</option>
                      <option  value="3">3</option>
                  </select>             
                  <div class="invalid-feedback">
                  Please provide a valid time.
                </div>
              </div>
              <div class="form-group col-md-4">
                  <select class="custom-select" name="tissu_2" id="">
                      <option selected>Tissu</option>
                      @foreach ($tissuses as $tissue)
                        <option value="{{$tissue->image}}">{{$tissue->name}}</option>
                      @endforeach
                  </select>             
                  <div class="invalid-feedback">
                  Please provide a valid time.
                </div>
              </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <select class="custom-select" name="product_3" id="">
                    <option value="" selected>Produit 3</option>
                    @foreach ($products as $product)
                      <option value="{{$product->name}}">{{$product->name}}</option>
                    @endforeach
                </select>            
                <div class="invalid-feedback">
                Please provide a valid price
                </div>
              </div>
              <div class="form-group col-md-4">
                  <select class="custom-select" name="quantity_3" id="">
                      <option value="" selected>Quantité</option>
                      <option  value="1">1</option>
                      <option  value="2">2</option>
                      <option  value="3">3</option>
                  </select>             
                  <div class="invalid-feedback">
                  Please provide a valid time.
                </div>
              </div>
              <div class="form-group col-md-4">
                  <select class="custom-select" name="tissu_3" id="">
                      <option value="" selected>Tissu</option>
                      @foreach ($tissuses as $tissue)
                        <option  value="{{$tissue->image}}">{{$tissue->name}}</option>
                      @endforeach
                  </select>             
                  <div class="invalid-feedback">
                  Please provide a valid time.
                </div>
              </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        
        <button class="btn btn-primary mx-auto" style="width:100%" type="submit">Ajouter commande</button>
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