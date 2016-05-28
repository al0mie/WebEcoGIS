<div id="add-dem" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h4 class="modal-title">Добавить цифровую модель рельефа</h4>
            </div>
            <form class="form-horizontal" role="form">
                <div class="modal-body">

                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Абсолютная высота Z(x, y)</legend>
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
                                <legend class="scheduler-border">Параметры загрузки файлов</legend>
                                <div class="control-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="radio">
                                                <label><input type="radio" name="useXY">Метры(x, y)</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="radio">
                                                <label><input type="radio" name="useBL">Градусы (B, L)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label><input type="checkbox" value="" name="changeXY">Поменять местами X и Y при импорте файлов</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <label class="control-label col-sm-4 text-left" for="pwd"><p class="text-left">
                                Действие в случае выхода координат матрицы за пределы области проекта</p></label>
                        <div class="col-sm-8">
                            <select class="selectpicker" name="incorrectSize">
                                <option>Обрезать матрицу</option>
                                <option>Расширить область проекта</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                            <button class="btn btn-error" type="button" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<script src="/js/fileinput.min.js"></script>

<script>
    $("#file-0").fileinput({
        'allowedFileExtensions' : ['jpg', 'png','gif'],
    });
</script>