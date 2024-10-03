<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">
    <title>@stack('title' ?? '')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap">
    <link rel="stylesheet" href="{{asset('assets/css/summernote.min.css')}}">
    <link href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/simplebar.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/sidebar-dark.min.css')}}" id="sidebar-theme">
  <link rel="stylesheet" href="{{asset('assets/css/dselect.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/dataTables.css')}}" />
    @stack('style')
</head>
<body class="preloading">
<div id="wrapper" class="fixed-sidebar fixed-navbar">
@include('layouts.sidebar')
    <div id="main">
    @include('layouts.navbar')
    @yield('content')
    </div>
</div>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/js/summernote.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/js/dataTables.js')}}"></script>
<script src="{{asset('assets/js/sweetalert.all.js')}}"></script>
@stack('script')
@include('sweetalert::alert')
<script>
    new ApexCharts(document.querySelector('#orders'), {
        chart: {
            type: 'bar',
            sparkline: {
                enabled: true
            },
            height: 50,
        },
        colors: ['#facc15'],
        series: [{
            name: 'orders',
            data: [30, 40, 35, 45, 40, 50]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        },
        plotOptions: {
            bar: {
                columnWidth: '30%',
                colors: {
                    backgroundBarColors: ['#f5f5f5', '#f5f5f5', '#f5f5f5', '#f5f5f5', '#f5f5f5'],
                },
                borderRadius: 4,
            },
        },
    }).render()

    new ApexCharts(document.querySelector('#profit'), {
        chart: {
            type: 'line',
            sparkline: {
                enabled: true
            },
            height: 50,
        },
        colors: ['#0dcaf0'],
        series: [{
            name: 'profit',
            data: [10, 30, 15, 40, 25, 55]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        },
        stroke: {
            width: 2,
        },
    }).render()

    new ApexCharts(document.querySelector('#revenue'), {
        chart: {
            type: 'bar',
            height: 260,
            toolbar: {
                show: false,
            }
        },
        colors: ['#facc15', '#6366f1'],
        series: [{
            name: 'expense',
            data: [17, 32, 50, 47, 19, 11, 30, 40, 13]
        },
            {
                name: 'earning',
                data: [34, 65, 104, 94, 38, 23, 61, 80, 26]
            },
        ],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
        },
        plotOptions: {
            bar: {
                columnWidth: '30%',
                borderRadius: 4,
            },
        },
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false,
        }
    }).render()

    new ApexCharts(document.querySelector('#budget'), {
        chart: {
            type: 'line',
            sparkline: {
                enabled: true
            },
            height: 80,
            width: '80%',
        },
        colors: ['#6366f1'],
        series: [{
            data: [61, 48, 69, 52, 60, 40, 79, 60, 59, 43, 62]
        }],
        stroke: {
            width: 2,
            curve: 'smooth',
        },
        tooltip: {
            enabled: false,
        },
    }).render()

    new ApexCharts(document.querySelector('#earnings'), {
        series: [53, 16, 31],
        chart: {
            height: 150,
            type: 'donut',
            toolbar: {
                show: false,
            },
        },
        labels: ['App', 'Service', 'Product'],
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        stroke: {
            width: 0,
        },
        colors: ['#6366f1', '#0dcaf0', '#facc15'],
    }).render()

    new ApexCharts(document.querySelector('#browser-stat-1'), {
        series: [54.4],
        chart: {
            width: 30,
            height: 30,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '20%',
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false,
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round',
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -15,
                bottom: -15,
            },
        },
        colors: ['#6366f1'],
    }).render()

    new ApexCharts(document.querySelector('#browser-stat-2'), {
        series: [6.1],
        chart: {
            width: 30,
            height: 30,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '20%',
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false,
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round',
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -15,
                bottom: -15,
            },
        },
        colors: ['#facc15'],
    }).render()

    new ApexCharts(document.querySelector('#browser-stat-3'), {
        series: [14.6],
        chart: {
            width: 30,
            height: 30,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '20%',
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false,
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round',
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -15,
                bottom: -15,
            },
        },
        colors: ['#4b5563'],
    }).render()

    new ApexCharts(document.querySelector('#browser-stat-4'), {
        series: [4.2],
        chart: {
            width: 30,
            height: 30,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '20%',
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false,
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round',
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -15,
                bottom: -15,
            },
        },
        colors: ['#0dcaf0'],
    }).render()

    new ApexCharts(document.querySelector('#browser-stat-5'), {
        series: [8.4],
        chart: {
            width: 30,
            height: 30,
            type: 'radialBar',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '20%',
                },
                dataLabels: {
                    name: {
                        show: false,
                    },
                    value: {
                        show: false,
                    }
                }
            },
        },
        stroke: {
            lineCap: 'round',
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        grid: {
            show: false,
            padding: {
                left: -15,
                right: -15,
                top: -15,
                bottom: -15,
            },
        },
        colors: ['#ef4444'],
    }).render()

    new ApexCharts(document.querySelector('#goal'), {
        chart: {
            height: 245,
            type: 'radialBar',
        },
        colors: ['#16a34a'],
        plotOptions: {
            radialBar: {
                offsetY: -10,
                startAngle: -150,
                endAngle: 150,
                hollow: {
                    size: '77%'
                },
                track: {
                    background: '#e5e7eb',
                },
                dataLabels: {
                    name: {
                        show: false
                    },
                    value: {
                        fontSize: '2rem',
                    }
                }
            }
        },
        series: [83],
        stroke: {
            lineCap: 'round'
        }
    }).render()
</script>
</body>
</html>
