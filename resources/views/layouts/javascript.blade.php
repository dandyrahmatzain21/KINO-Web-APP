<script src="{{ asset('template') }}/assets/js/plugins/chartjs.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/popper.min.js"></script>
<script src="{{ asset('template') }}/assets/js/core/bootstrap.min.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="{{ asset('template') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(45, 206, 137, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(45, 206, 137, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(45, 206, 137, 0)');
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                label: "Mobile apps",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 0,
                borderColor: "#20c997",
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


<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('template') }}/assets/js/argon-dashboard.min.js?v=2.0.4"></script>

{{-- Data Tables
<script src="{{ asset('template') }}/assets/datatables/jquery.dataTables.min.js "></script>
<script src="{{ asset('template') }}/assets/datatables/dataTables.bootstrap4.min.js"></script> --}}

<script type="text/javascript" src="{{asset('DataTables')}}/DataTables-1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{{asset('DataTables')}}/DataTables-1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#dataTable').DataTable({
            language : {url:"{{asset('DataTables')}}/DataTables-1.10.24/js/dataTables.indonesia.js"}
        });
    } );
</script>

<!-- Buttons examples -->
{{-- <script src="{{ asset('template') }}/assets/datatables/dataTables.buttons.min.js "></script>
<script src="{{ asset('template') }}/assets/datatables/buttons.bootstrap4.min.js "></script>
<script src="{{ asset('template') }}/assets/datatables/jszip.min.js "></script>
<script src="{{ asset('template') }}/assets/datatables/pdfmake.min.js "></script>
<script src="{{ asset('template') }}/assets/datatables/vfs_fonts.js "></script>
<script src="{{ asset('template') }}/assets/datatables/buttons.html5.min.js "></script>
<script src="{{ asset('template') }}/assets/datatables/buttons.print.min.js "></script> --}}
<!-- Responsive examples -->
{{-- <script src="{{ asset('template') }}/assets/datatables/dataTables.responsive.min.js') "></script>
<script src="{{ asset('template') }}/assets/datatables/responsive.bootstrap4.min.js') "></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
@stack('scripts')
