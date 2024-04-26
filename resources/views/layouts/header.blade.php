<header>


        <div class="header">
            <img class="lgo" src="img/vecteezy_mecca-for-hajj_.jpg" alt="logo">
        </div>
        <nav>

            <li><a href="{{url('/')}}" class="active">Home</a></li>
            <li><a href="{{url('/landmark')}}">Landmark</a></li>
            <li><a href="{{url('/hajj')}}">Hajj</a></li>
            <li><a href="{{url('/umrah')}}">Umrah</a></li>
            <li><a href="{{url('/#contact')}}">Contact Us</a></li>

            @if (Auth::check())
            <x-app-layout>
            </x-app-layout>
        @endif
          


        </nav>
        <div class="box">
        <select id="mySelect1">
        <option value="{{ url('/') }}">EN</option>
    <option value="{{ url('/ar/home') }}">AR</option>
</select>
          </div>

          
        <div class="show">
            <div id="open"><i class="fas fa-bars text-white"></i></div>
            <div id="close"><i class="fas fa-times text-white"></i></div>
        </div>
        <div class="menu text-white">
        <li><a href="{{url('/')}}" class="active">Home</a></li>
            <li><a href="{{url('/landmark')}}">Landmark</a></li>
            <li><a href="{{url('/hajj')}}">Hajj</a></li>
            <li><a href="{{url('/umrah')}}">Umrah</a></li>
            <li><a href="{{url('/#contact')}}">Contact Us</a></li>
           
           
            <div class="box">
           
            <select id="mySelect2">
              <option value="{{ url('/') }}">EN</option>
              <option value="{{ url('/ar/home') }}">AR</option>
          </select>  
          </div>
            
        </div>


        <script>
        document.getElementById('mySelect1').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            if (selectedOption.value) {
                window.location.href = selectedOption.value;
            }
        });

        document.getElementById('mySelect2').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            if (selectedOption.value) {
                window.location.href = selectedOption.value;
            }
        });
    </script>

    </header>