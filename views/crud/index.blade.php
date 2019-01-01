<?php
$source = LC_CurrentTheme().'.views.layout';
$targetView = 'livecms-templates::'.$source; ?>
@extends($targetView)

@section('content')
<div class="page-inner">
    <div class="page-header d-flex justify-content-between">
        <div class="page-title mr-3">{{str_plural(ResTitle())}}</div>
        <div class="buttons">
            <a href="{{ResRoute('create')}}" class="btn btn-primary">
                Create {{ResTitle()}}
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatables" class="display table table-striped table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                @foreach ($dataTablesCaptions as $field)
                                    <th @if (strtolower($field) == 'action') class="text-right" @endif>
                                        {{ $field }}
                                    </th>
                                @endforeach
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js-bottom')
<script type="text/javascript">
    var table = $('#datatables').DataTable({!! $dataTablesView !!});

    @if (config('app.debug') == false)
    $.fn.dataTable.ext.errMode = 'none';
    @endif

    $('#datatables').on('click', 'a[data-delete="form"]', function (e) {
        e.preventDefault();
        if (confirm('{{__('Are you sure will delete this item ?')}}')) {
            var url = $(this).attr('href');
            $.ajax({
              type: "DELETE",
              url: url,
              data: {_token: '{{csrf_token()}}'},
               success: function (success) {
                table.draw(false);
                    swal('{{__('Deleted')}}', '{{__('Item has benn deleted')}}', 'success');
              },
            });
        }
    });
</script>
@endpush
