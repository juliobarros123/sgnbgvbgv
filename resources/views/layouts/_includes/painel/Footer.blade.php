</div> <!-- .wrapper -->
<script src="/painel/js/jquery.min.js"></script>
<script src="/painel/js/popper.min.js"></script>
<script src="/painel/js/moment.min.js"></script>
<script src="/painel/js/bootstrap.min.js"></script>
<script src="/painel/js/simplebar.min.js"></script>
<script src='/painel/js/daterangepicker.js'></script>
<script src='/painel/js/jquery.stickOnScroll.js'></script>
<script src="/painel/js/tinycolor-min.js"></script>
<script src="/painel/js/config.js"></script>
<script src="/painel/js/d3.min.js"></script>
<script src="/painel/js/topojson.min.js"></script>
<script src="/painel/js/datamaps.all.min.js"></script>
<script src="/painel/js/datamaps-zoomto.js"></script>
<script src="/painel/js/datamaps.custom.js"></script>
<script src="/painel/js/Chart.min.js"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;

</script>
<script src="/painel/js/gauge.min.js"></script>
<script src="/painel/js/jquery.sparkline.min.js"></script>
<script src="/painel/js/apexcharts.min.js"></script>
<script src="/painel/js/apexcharts.custom.js"></script>
<script src='/painel/js/jquery.mask.min.js'></script>
<script src='/painel/js/select2.min.js'></script>
<script src='/painel/js/jquery.steps.min.js'></script>
<script src='/painel/js/jquery.validate.min.js'></script>
<script src='/painel/js/jquery.timepicker.js'></script>
<script src='/painel/js/dropzone.min.js'></script>
<script src='/painel/js/uppy.min.js'></script>
<script src='/painel/js/quill.min.js'></script>
<script src='/painel/js/jquery.dataTables.min.js'></script>
<script src='/painel/js/dataTables.bootstrap4.min.js'></script>
<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
        ]
    });

</script>
<script src="/js/sweetalert2.all.min.js"></script>

<script>
    $('.select2').select2({
        theme: 'bootstrap4',
    });
    $('.select2-multi').select2({
        multiple: true,
        theme: 'bootstrap4',
    });
    $('.drgpicker').daterangepicker({
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale: {
            format: 'MM/DD/YYYY'
        }
    });
    $('.time-input').timepicker({
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
    });
    /** date range picker */
    if ($('.datetimes').length) {
        $('.datetimes').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                'month')]
        }
    }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
        placeholder: "____-___"
    });
    $('.input-money').mask("#.##0,00", {
        reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        },
        placeholder: "___.___.___.___"
    });
    // editor
    var editor = document.getElementById('editor');
    if (editor) {
        var toolbarOptions = [
            [{
                'font': []
            }],
            [{
                'header': [1, 2, 3, 4, 5, 6, false]
            }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [{
                    'header': 1
                },
                {
                    'header': 2
                }
            ],
            [{
                    'list': 'ordered'
                },
                {
                    'list': 'bullet'
                }
            ],
            [{
                    'script': 'sub'
                },
                {
                    'script': 'super'
                }
            ],
            [{
                    'indent': '-1'
                },
                {
                    'indent': '+1'
                }
            ], // outdent/indent
            [{
                'direction': 'rtl'
            }], // text direction
            [{
                    'color': []
                },
                {
                    'background': []
                }
            ], // dropdown with defaults from theme
            [{
                'align': []
            }],
            ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor, {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
    }
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


<script>
    function mudarCor(novaCor) {
        var elemento = document.getElementById("scroller");
        elemento.style.overflow = "hidden !important";
    }

</script>
<script src="/painel/js/apps.js"></script>
</body>

</html>
