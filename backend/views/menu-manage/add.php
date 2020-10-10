<?php
$baseurl = \backend\assets\DiyAsset::register($this)->baseUrl;
$webuploder = \backend\assets\WebUploaderAsset::register($this)->baseUrl;
?>
<div class="tpl-content-wrapper">
    <div class="tpl-content-page-title">
        Amaze UI 表单
    </div>
    <ol class="am-breadcrumb">
        <li><a href="#" class="am-icon-home">首页</a></li>
        <li><a href="#">表单</a></li>
        <li class="am-active">Amaze UI 表单</li>
    </ol>
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 表单
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>


        </div>

        <div class="tpl-block">

            <div class="am-g">
                <div class="tpl-form-body tpl-form-line">
                    <form action="<?=\yii\helpers\Url::to(['menu-manage/add'])?>" class="am-form tpl-form-line-form">
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">别名 <span class="tpl-form-line-small-title">Alias</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="请输入别名">
                                <small>请填写别名</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">标题 <span class="tpl-form-line-small-title">Title</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" name="title" class="tpl-form-input" id="user-title" placeholder="请输入标题文字">
                                <small>请填写标题文字10-20字左右。</small>
                            </div>
                        </div>

<!--                        <div class="am-form-group">-->
<!--                            <label for="user-email" class="am-u-sm-3 am-form-label">发布时间 <span class="tpl-form-line-small-title">Time</span></label>-->
<!--                            <div class="am-u-sm-9">-->
<!--                                <input type="text" class="am-form-field tpl-form-no-bg" placeholder="发布时间" data-am-datepicker="" readonly/>-->
<!--                                <small>发布时间为必填</small>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="am-form-group">
                            <label for="user-phone" class="am-u-sm-3 am-form-label">所属菜单 <span class="tpl-form-line-small-title">Pid</span></label>
                            <div class="am-u-sm-9">
                                <select name="pid" data-am-selected="{searchBox: 1}">
                                    <option value="1">系统</option>
                                    <option value="b">夕风色</option>
                                    <option value="o">Orange</option>
                                </select>
                            </div>
                        </div>

<!--                        <div class="am-form-group">-->
<!--                            <label class="am-u-sm-3 am-form-label">SEO关键字 <span class="tpl-form-line-small-title">SEO</span></label>-->
<!--                            <div class="am-u-sm-9">-->
<!--                                <input type="text" placeholder="输入SEO关键字">-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="am-form-group">
                            <label for="user-weibo" class="am-u-sm-3 am-form-label">封面图 <span class="tpl-form-line-small-title">Images</span></label>
                            <div class="am-u-sm-9">
                                <div class="am-form-group am-form-file">
                                    <div class="tpl-form-file-img">
                                        <img id="only" src="<?=$baseurl?>/img/a5.png" alt="未上传图片">
                                        <input type="hidden" name="image" id="only_image" value="">
                                    </div>
                                    <span id="picker">
                                        <i  class="am-icon-cloud-upload"></i>添加封面图片</span>
                                </div>

                            </div>
                        </div>

<!--                        <div class="am-form-group">-->
<!--                            <label for="user-weibo" class="am-u-sm-3 am-form-label">添加分类 <span class="tpl-form-line-small-title">Type</span></label>-->
<!--                            <div class="am-u-sm-9">-->
<!--                                <input type="text" id="user-weibo" placeholder="请添加分类用点号隔开">-->
<!--                                <div>-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->

                        <div class="am-form-group">
                            <label for="user-intro" class="am-u-sm-3 am-form-label">隐藏文章</label>
                            <div class="am-u-sm-9">
                                <div class="tpl-switch">
                                    <input type="checkbox" class="ios-switch bigswitch tpl-switch-btn" checked />
                                    <div class="tpl-switch-btn-view">
                                        <div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">排序 <span class="tpl-form-line-small-title">Sort</span></label>
                            <div class="am-u-sm-9">
                                <input type="text" name="sort" class="tpl-form-input" id="user-name" placeholder="请输入排序">
                                <small>请填写排序</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>










</div>
<?php $this->beginBlock('js');?>
    <script>
        var uploader = WebUploader.create({
            // swf文件路径
            auto:true,
            swf: '<?=$webuploder?>/Uploader.swf',
            // 文件接收服务端。
            server: 'upload.php',
            // 选择文件的按钮。可选。
            // 内部根据当前运行是创建，可能是input元素，也可能是flash.
            pick: '#picker'
        });
        uploader.on( 'uploadSuccess', function( file,response ) {
            var image = response._raw;
            $("#only").attr("src",image);
            $("#only_image").val(image);
        });
        $(".tpl-switch-btn-view").click(function (){
            console.log(1);
           if ($(".ios-switch").attr("checked")){
               $(".ios-switch").removeAttr("checked");
           }else{
               $(".ios-switch").attr("checked","true");
           }
        })
    </script>
<?php $this->endBlock();?>