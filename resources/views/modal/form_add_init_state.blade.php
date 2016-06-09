<div id="add-init-state" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h4 class="modal-title">{!! trans('modal_forms.add_init_state')  !!}</h4>
            </div>
            <form class="form-horizontal" role="form">
                <div class="modal-body">

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">{!! trans('modal_forms.depth')  !!} Z(x, y)</legend>
                        <div class="control-group">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        <div class="radio">
                                            <label><input type="radio" name="typeCoordinateDepth" value="grd">GRD </label>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="radio">
                                            <label><input type="radio" name="typeCoordinateDepth" checked>TXT/DAT</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">{!! trans('modal_forms.select_file') !!}</label>
                                    <input type="file" class="loadInitState file" data-show-preview="false"
                                           name="fileDepth">
                                </div>
                                <div class="col-sm-12">
                                    <div style="text-align: center;"><h5>{!! trans('modal_forms.unit_measure') !!}</h5></div>
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label><input type="radio" name="typeValueDepth"
                                                          checked>{!! trans('modal_forms.meters')  !!}(x, y)</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label><input type="radio" name="typeValueDepth"
                                                          value="useBL">{!! trans('modal_forms.gradus')  !!} (B,
                                                L)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""
                                                          name="changeXYDepth">{!! trans('modal_forms.reverseXY')  !!}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <fieldset class="scheduler-border">
                        <div class="row">
                            <legend class="scheduler-border">{!! trans('modal_forms.speed')  !!} V<sub>x</sub>(x, y)
                            </legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-12">

                                        <div class="col-sm-4">
                                            <div class="radio">
                                                <label><input type="radio" name="typeSpeedSpeedX" value="grd">GRD </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="radio">
                                                <label><input type="radio" name="typeSpeedSpeedX" checked>TXT/DAT</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">{!! trans('modal_forms.select_file') !!}</label>
                                    <input type="file" class="loadInitState file" data-show-preview="false"
                                           name="fileSpeedX">
                                </div>
                                <br>

                                <div class="col-sm-12">
                                    <div style="text-align: center;"><h5>{!! trans('modal_forms.unit_measure') !!}</h5></div>
                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label><input type="radio" name="typeValueSpeedX"
                                                          checked>{!! trans('modal_forms.meters')  !!}(x, y)</label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="radio">
                                            <label><input type="radio" name="typeValueSpeedX"
                                                          value="useBL">{!! trans('modal_forms.gradus')  !!} (B,
                                                L)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-12">
                                        <div class="checkbox">
                                            <label><input type="checkbox" value=""
                                                          name="changeXYSpeedX">{!! trans('modal_forms.reverseXY')  !!}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>


                    <fieldset class="scheduler-border">
                        <div class="row">
                            <legend class="scheduler-border">{!! trans('modal_forms.speed')  !!} V<sub>y</sub>(x, y)
                            </legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="col-sm-4">
                                            <div class="radio">
                                                <label><input type="radio" name="typeValueSpeedY" value="grd">GRD </label>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="radio">
                                                <label><input type="radio" name="typeValueSpeedY" checked>TXT/DAT</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="control-label">{!! trans('modal_forms.select_file') !!}</label>
                                    <input class="loadInitState file" type="file" data-show-preview="false"
                                           name="fileSpeedY">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div style="text-align: center;"><h5>{!! trans('modal_forms.unit_measure') !!}</h5></div>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label><input type="radio" name="typeValueSpeedY"
                                                      checked>{!! trans('modal_forms.meters')  !!}(x, y)</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="radio">
                                        <label><input type="radio" name="typeValueSpeedY"
                                                      value="useBL">{!! trans('modal_forms.gradus')  !!} (B, L)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value=""
                                                      name="changeXYSpeedY">{!! trans('modal_forms.reverseXY')  !!}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">{!! trans('modal_forms.save')  !!}</button>
                            <button class="btn btn-error" type="button"
                                    data-dismiss="modal">{!! trans('modal_forms.close')  !!}</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
</div>


<script src="/js/fileinput.min.js"></script>

<script>
    $(".loadInitState").fileinput({
        'allowedFileExtensions': ['jpg', 'png', 'gif']
    });
</script>