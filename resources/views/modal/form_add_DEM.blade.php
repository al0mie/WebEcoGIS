<div id="add-dem" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h4 class="modal-title">{!! trans('modal_forms.add_dem')  !!}</h4>
            </div>
            <form class="form-horizontal" role="form">
                <div class="modal-body">

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">{!! trans('modal_forms.absolute_height')  !!} Z(x, y)</legend>
                        <div class="control-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <div class="radio">
                                            <label><input type="radio" name="grd">GRD </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="radio">
                                            <label><input type="radio" name="text">TXT/DAT</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="radio">
                                            <label><input type="radio" name="srtm">SRTM3</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">Select File</label>
                                    <input id="file-0" type="file" class="file" data-show-preview="false" name="file">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">{!! trans('modal_forms.parameters_to_load_files')  !!}</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="radio">
                                                <label><input type="radio" name="useXY">{!! trans('modal_forms.meters')  !!}(x, y)</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="radio">
                                                <label><input type="radio" name="useBL">{!! trans('modal_forms.gradus')  !!} (B, L)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="" name="changeXY">{!! trans('modal_forms.reverseXY')  !!}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <label class="control-label col-sm-4 text-left" for="pwd"><p class="text-left">
                                {!! trans('modal_forms.option_load_out_area')  !!}</p></label>
                        <div class="col-sm-8">
                            <select class="selectpicker" name="incorrectSize">
                                <option>{!! trans('modal_forms.trim_matrix')  !!}</option>
                                <option>{!! trans('modal_forms.expand_project_area')  !!}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">{!! trans('modal_forms.save')  !!}</button>
                            <button class="btn btn-error" type="button" data-dismiss="modal">{!! trans('modal_forms.close')  !!}</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


{{--<script src="/js/fileinput.min.js"></script>--}}

{{--<script>--}}
    {{--$("#file-0").fileinput({--}}
        {{--'allowedFileExtensions': ['jpg', 'png', 'gif'],--}}
    {{--});--}}
{{--</script>--}}