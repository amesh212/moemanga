
<style>
* {box-sizing: border-box;}

.moeoverlay {
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.moeoverlay:hover .overlay {
  opacity: 1;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-lg-12"> 
      <img src="<?=base_url()?>assets/img/hohe.png" style="height: 100px; float: left;">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <nav class="navbar navbar-expand-lg navbar-dark bg-moe-2" style="border-radius: 5px;">

        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav nav-pills mr-auto">
            <li class="nav-item">
              <a class="nav-link hovernav" href="#!" style="color:white; width: auto;"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hovernav" href="#manga" style="color:white; width: auto;"> Manga </a>
            </li>
            <li class="nav-item">
              <a class="nav-link hovernav" href="#ln" style="color:white; width: auto;"> Light Novel </a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!" role="button" aria-haspopup="true" aria-expanded="false" style="color:white;">Content</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#!">Manga</a>
                <a class="dropdown-item" href="#!">Light Novel</a>
              </div>
            </li> -->
          </ul>

          <form class="form-inline my-2 my-lg-0">
            <div class="input-group">
              <div class="input-group-prepend">
                <!-- <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manga
                </button> -->
                <select class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: auto;" name="type">
                  <option selected="" disabled="">Select</option>
                  <option value="0">Manga</option>
                  <option value="1">Light Novel</option>
                </select>
              </div>
              <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Title Search" name="search">
            </div>

            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        
        </div>
      </nav>

    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-lg-2">
        <div class="moeoverlay">
          <img src="<?=base_url()?>assets/img/cover.jpg" alt="Avatar" class="image" style="width: 100%;">
          <div class="overlay">My Name is John</div>
        </div>
      </div>
    </div>

  </div>
</div>