<head>
<style>
.container{
        background-color: red;
        width: 100%;
        
    }
.side1{
    position: relative;
    left: -115%;
    background: blue;
}
.side2{
    position: relative;
    right: 0;
    background: green
}
.side3{
    position: relative;
    right: -115%;
    background: purple
}

ul{
    display: flex;
    justify-content: space-around
}
li{
    list-style: none
}

@keyframes show{

    from{
    position: relative;
    right: -115%;
    background: purple
    }
    to{
    position: relative;
    right: 0;
    background: green
    }
    
}

@keyframes hide{
    from{
    position: relative;
    right: 0;
    background: green
    }
    to{
    position: relative;
    right: -115%;
    background: purple 
    }
}
    
</style>
    
</head>
<ul>
    <li><button  onclick="showTissus()" type="button" class="btn btn-primary">Primary</button></li>
    <li><button type="button" class="btn btn-primary">Primary</button></li>
    <li><button type="button" class="btn btn-primary">Primary</button></li>
</ul>

<div class="container">
    <div id="side1" class="side1">@include('layouts/partials/forms/addTissus')</div>
    <div id="side2" class="side2">@include('layouts/partials/forms/addProducts')</div>
    <div id="side3" class="side3">@include('layouts/partials/forms/addCommands')</div>
</div>

      {{-- @include('layouts/partials/forms/addTissus') --}}

      {{-- @include('layouts/partials/forms/addProducts')     --}}

      {{-- @include('layouts/partials/forms/addCommands') --}}
  

<script>
function showTissus(){
    Element.getElementById('side1').style.animation = "show";
    Element.getElementById('side1').style.animation = "hide";
    console.log("reacttttt")
}


</script>


