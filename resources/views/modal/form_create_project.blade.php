<div id="create-project" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h4 class="modal-title">{{ trans('modal_forms.create_new_project') }}</h4>
            </div>
            <form class="form-horizontal" role="form" action="/projects" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-4 text-left" for="projectName"><p
                                    class="text-left">{{ trans('modal_forms.name_project') }}:</p></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="projectName" name="projectName" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4 text-left" for="pwd"><p
                                    class="text-left">{{ trans('modal_forms.transform_coord') }}:</p></label>
                        <div class="col-sm-8">
                            <select class="selectpicker" name="transformCoord">
                                <option>{{ trans('modal_forms.converterWGSToCK95') }}</option>
                            </select>
                        </div>
                    </div>

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">{{ trans('modal_forms.area_project') }}</legend>
                        <div class="control-group">
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <div class="radio">
                                            <label> <input type="radio" name="coordType"
                                                           value="geographical_type">{{ trans('modal_forms.geo_coord') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div id="geoCoord">
                                        <div class="form-group">
                                            <label class="control-label col-sm-3 text-left" for="BminHours"><p
                                                        class="text-left">Bmin:</p></label>
                                            <div class="col-sm-3 geo-coord">
                                                <input type="number" class="form-control" name="BminHours" value="0">
                                            </div>
                                            <div class="col-sm-3 geo-coord">
                                                <input type="number" class="form-control" name="BminMinutes" value="0">
                                            </div>
                                            <div class="col-sm-3 geo-coord">
                                                <input type="number" class="form-control" name="BminSeconds" value="0">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3 text-left" for="LminHours"><p
                                                        class="text-left">Lmin:</p></label>
                                            <div class="col-sm-3 geo-coord">
                                                <input type="number" class="form-control" name="LminHours" value="0">
                                            </div>
                                            <div class="col-sm-3 geo-coord">
                                                <input type="number" class="form-control" name="LminMinutes" value="0">
                                            </div>
                                            <div class="col-sm-3 geo-coord">
                                                <input type="number" class="form-control" name="LminSeconds" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <div class="radio">
                                            <label><input type="radio" name="coordType"
                                                          value="rectangle_type" checked>{{ trans('modal_forms.rectangle_coord') }}
                                            </label>
                                        </div>
                                    </div>
                                    <div id="rectangleCoord">
                                        <div class="form-group">
                                            <label class="control-label col-sm-4 text-left" for="Xmin">Xmin, м</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="Xmin" class="form-control" id="Xmin"
                                                       value="1000">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4 text-left" for="Ymin">Ymin, м</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="Ymin" class="form-control" id="Ymin"
                                                       value="1000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset class="scheduler-border">
                                <legend class="scheduler-border">{{ trans('modal_forms.settings_net') }}</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label col-sm-5 txt-left" for="sizeElem"><p
                                                            class="text-left">{{ trans('modal_forms.size_element') }} h,
                                                        м:</p></label>
                                                <div class="col-sm-6 geo-coord">
                                                    <input type="number" class="form-control" name="sizeElem"
                                                           id="sizeElem" value="50">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5 txt-left" for="XElem"><p
                                                            class="text-left">
                                                        Nx {{ trans('modal_forms.number_element') }} X:</p>
                                                </label>
                                                <div class="col-sm-6 geo-coord">
                                                    <input type="number" class="form-control" name="XElem" id="XElem"
                                                           value="1000">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5 txt-left" for="YElem"><p
                                                            class="text-left">
                                                        Ny {{ trans('modal_forms.number_element') }} Y:</p>
                                                </label>
                                                <div class="col-sm-6 geo-coord">
                                                    <input type="number" class="form-control" name="YElem" id="YElem"
                                                           value="1000">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-5 txt-left" for="maxHeight"><p
                                                            class="text-left">{{ trans('modal_forms.absolute_height') }}
                                                        z0, м:</p></label>
                                                <div class="col-sm-6 geo-coord">
                                                    <input type="number" class="form-control" name="maxHeight"
                                                           id="maxHeight" value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">{{ trans('modal_forms.save') }}</button>
                            <button class="btn btn-error" type="button"
                                    data-dismiss="modal">{{ trans('modal_forms.close') }}</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>

<script>
    var $coordType = $("[name = 'coordType']");
    var $rectInputs = $("#rectangleCoord :input");
    var $geoInputs = $("#geoCoord :input");
    $coordType.on('change', function (event) {
        if ($(this).is(":checked") && $(this).val() == 'geographical_type') {
            disableGeoInputs();
        } else {
            disableRectangleInputs()
        }
    });

    function disableGeoInputs() {
        $rectInputs.prop("disabled", true);
        $geoInputs.prop("disabled", false);
    }

    function disableRectangleInputs() {
        $geoInputs.prop("disabled", true);
        $rectInputs.prop("disabled", false);
    }

    disableRectangleInputs();

</script>
