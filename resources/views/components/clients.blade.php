    <!-- start clients -->
    <section class="clients text-center" id="client">
      <div class="custom_border">
        <h2>Our Clients</h2>
      </div>

      <div class="container">
        <div class="row">
          @foreach ($logos as $logo )
          <div class="col-md-2 col-sm-3 col-4">
            <img data-src="images/logo/{{$logo->image}}" alt="etisalat" style="display: inline-block; height: 100px; width:100px; border-radius:50%; border:1px solid black"/>
          </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- end clients-->