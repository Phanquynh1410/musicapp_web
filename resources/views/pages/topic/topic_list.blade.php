@extends('layouts.app')

@section('content')
   
    <div class="container-fluid py-4 ">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Topic List</h6>
              <a href="{{ route('topic.create') }}"><span class="badge badge-sm bg-gradient-success" style="margin-right: 10px; float: right; word-wrap: normal;">Add Topic</span></a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">

                  <thead>                 
                    <tr>
                      <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7">ID</th>
                      <th class="text-uppercase text-center text-secondary font-weight-bolder opacity-7" >Topic Image</th>
                      <th class=" text-uppercase text-center text-secondary font-weight-bolder opacity-7" >Topic Name</th>
                      <th class="text-center text-center text-uppercase text-secondary font-weight-bolder opacity-7"></th>
                      <th class="text-center text-center text-uppercase text-secondary font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($topic as $key => $value)
                    <tr>
                      <td class="text-center col-md-1">
                      {{ $key+1 }}
                      </td>
                      <td class="text-center">
                            <img src="http://127.0.0.1:8000/images/topic/{{ $value->hinh_chude }}" class="" alt="user1" style="width: 200px; height: 100px;" >
                      </td>
                      <td class="text-center">
                      {{  $value->ten_chude }}
                      </td>
                      <td class=" text-center">
                        <!-- <div class="d-flex px-2 py-1" > -->
                            <p class="text-secondary mb-0 text-center" ></p>
                        <!-- </div> -->
                      </td>
                      <td class="align-middle text-center text-sm col-md-2" >
                          <a href="{{ route('topic.edit', $value->id_chude) }}" class="badge badge-sm bg-gradient-primary" style="margin-bottom: 10px;">Edit</a>
                         
                         <a class="badge badge-sm bg-gradient-danger" href="{{ route('topic.destroy',$value->id_chude) }}" > Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="pull-right" style="margin: 20px;">{{ $topic->links() }}</div>
              </div>
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
 
  var topic = document.getElementById("topic");
  
  topic.style.background = "#E6E6FA";
</script>

</html>
@endsection
