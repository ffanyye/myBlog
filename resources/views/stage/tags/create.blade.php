@extends('stage.blogbk')
@section('content')
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 添加标签
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>
        </div>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">
                <div class="am-u-sm-12 am-u-md-9">
                    <form action="{{ url('stage/tags') }}" method="POST" class="am-form am-form-horizontal">
                        {!! csrf_field() !!}
                        <div class="am-form-group">
                            <label for="tags-name" class="am-u-sm-3 am-form-label">标签 / Tags</label>
                            <div class="am-u-sm-9">
                                <input type="text" name="tags" id="tags-name" placeholder="标签 / Tags">
                                <small>添加标签</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
