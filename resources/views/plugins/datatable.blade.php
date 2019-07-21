{{-- Extend @section from parent --}}
@section('js')
    @parent
    <script type="text/javascript" src="{{ asset('plugins/datatables/JSZip-2.5.0/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/AutoFill-2.3.3/js/dataTables.autoFill.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.6/js/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.6/js/buttons.colVis.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.6/js/buttons.flash.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.6/js/buttons.html5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Buttons-1.5.6/js/buttons.print.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Responsive-2.2.2/js/dataTables.responsive.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/RowGroup-1.1.0/js/dataTables.rowGroup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Scroller-2.0.0/js/dataTables.scroller.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/datatables/Select-1.3.0/js/dataTables.select.min.js') }}"></script>

@append

{{-- Extend @section from parent --}}
@section('css')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/AutoFill-2.3.3/css/autoFill.dataTables.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/Buttons-1.5.6/css/buttons.dataTables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/Responsive-2.2.2/css/responsive.dataTables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/RowGroup-1.1.0/css/rowGroup.dataTables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/Scroller-2.0.0/css/scroller.dataTables.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/Select-1.3.0/css/select.dataTables.min.css') }}"/>
@append

