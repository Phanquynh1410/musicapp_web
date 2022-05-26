@extends('layouts.app')

@section('content')
   
    <div class="container-fluid py-4 ">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Add new advertisement</h6>
              <div class="pull-right">
                  <a class="badge badge-sm bg-gradient-primary" href="{{ route('adver.index') }}" style="padding: 10px;">Back</a>
                </div>
            </div>

              <div style="margin: 30px;">
               
                  @if ($errors->any())
                      <div class="alert alert-danger">
                          <strong>Whoops!</strong> There were some problems with your input.<br><br>
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                    
                  <form action="{{ route('adver.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                         
                          <div class="col-xs-12 col-sm-12 col-md-12" >
                            <strong>Advertisement Image:</strong>
                            <input type="file" name="image" class="form-control">
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                              <div class="form-group">
                                  <strong>Content:</strong>
                                  <textarea type="text" name="content" class="form-control" placeholder="content"></textarea>
                              </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-group">
                                  <strong>Song Name:</strong>
                                  <select class="form-control " name="id_song">
                                    @foreach ($song as $song)
                                        <option value="{{$song->id_baihat}}">{{$song->ten_baihat}}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>
                          

                          <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 20px;">
                            <button type="submit" class="badge badge-sm bg-gradient-success" style="padding: 10px; outline: none !important;">Submit</button>
                          </div>
                      </div>
                      
                  </form>
               </div>

          </div>
        </div>
      </div>
    
    </div>


 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>



<script>
 
  var adver = document.getElementById("adver");
  
  adver.style.background = "#E6E6FA";
</script>

</html>
@endsection
