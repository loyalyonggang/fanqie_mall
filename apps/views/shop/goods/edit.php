<?php $data['definedcss'] = array(CSS_PATH.'fileinput/fileinput.min',JS_PATH.'jquery/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min'); echo template('shop/header',$data);template('shop/sider');?>
<div id="content" class="app-content" role="main">
	<div class="app-content-body ">
		<div class="wrapper-md">
			<div class="panel panel-default">
				<div class="panel-heading font-bold">
					<span class="pull-right"><a href="<?php echo $index_url;?>"><i class="fa fa-arrow-circle-left fa-fw"></i> 返回</a></span> <i class="fa fa-edit fa-fw"></i> 编辑状态
				</div>
				<div class="panel-body">
					<form class="form-horizontal" autocomplete="off" id="content_add_form">
						<div class="form-group">
							<label class="col-sm-2 control-label"> 分类</label>
							<div class="col-sm-10">
								<select name="data[catid]" data-toggle="select" class="form-control select select-default" >
                                	<?php foreach($parent as $v){?>
                                	<option value="<?php echo $v['id'];?>" <?php if($v['id']==$item['catid']) echo "selected";?>>  <?php echo str_repeat('├',$v['level']).' '.$v['names'];?></option>
                                	<?php }?>
                            	</select>
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 名称</label>
							<div class="col-sm-10">
								<input type="text" name="data[names]" class="form-control" cname="名称" value="<?php echo $item['names'];?>" required>
							</div>
						</div>
						<!-- <div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 货号</label>
							<div class="col-sm-10">
								<input type="text" name="data[code]" class="form-control" value="<//?php echo $item['code'];?>">
							</div>
						</div> -->
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 售价</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="text" name="data[price]" id='price' class="form-control" cname="售价" value="<?php echo $item['price'];?>" required> <span class="input-group-addon">元</span>
								</div>
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 市场价</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="text" name="data[baz_price]" class="form-control" cname="市场价" value="<?php echo $item['baz_price'];?>" required> <span class="input-group-addon">元</span>
								</div>
							</div>
						</div>
						<!-- <div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 重量</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="text" name="data[weight]" class="form-control" value="<//?php echo $item['weight'];?>" > <span class="input-group-addon">KG</span>
								</div>
							</div>
						</div> -->
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 库存</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="text" name="data[stock]" id='stock' class="form-control" value="<?php echo $item['stock'];?>"> <span class="input-group-addon">个</span>
								</div>
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 销量</label>
							<div class="col-sm-10">
								<div class="input-group">
									<input type="text" name="data[sales]" class="form-control" value="<?php echo $item['sales'];?>"> <span class="input-group-addon">个</span>
								</div>
							</div>
						</div>
						<!-- <div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 积分奖励</label>
							<div class="col-sm-10">
								<input type="text" name="data[integral]" class="form-control" value="<//?php echo $item['integral'];?>">
							</div>
						</div> -->
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 是否上架</label>
							<div class="col-sm-1">
								<label class="i-switch m-t-xs m-r"> <input type="checkbox" name="data[putaway]" class="fanqie_ckb" value="<?php echo $item['putaway'];?>" <?php echo $item['putaway']?'checked':''?> > <i></i>
								</label>
							</div>
							<label class="col-sm-2 control-label"> 是否包邮</label>
							<div class="col-sm-1">
								<label class="i-switch m-t-xs m-r"> <input type="checkbox" name="data[is_freight]" class="fanqie_ckb" value="<?php echo $item['is_freight'];?>" <?php echo $item['is_freight']?'checked':''?>> <i></i>
								</label>
							</div>
							<label class="col-sm-6 control-label text-left" style="color:#aaa">（如果不包邮，请在邮费模版里面设置价格，系统会自动计算）</label>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 库存方式</label>
							<div class="col-sm-10">
								<label class="i-checks m-t-xs m-r"> <input type="radio" name="is_stock" value="0" <?php if($item['is_stock']==0)echo 'checked';?> ><i></i> 拍下减库存</label> 
								<label class="i-checks m-t-xs m-r"> <input type="radio" name="is_stock" value="1" <?php if($item['is_stock']==1)echo 'checked';?> ><i></i> 永不减库存</label>
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 商品属性</label>
							<div class="col-sm-10">
								<label class="checkbox-inline i-checks"> 
									<input type="checkbox" name="data[is_recommand]" value="1" class="fanqie_ckb" <?php echo $item['is_recommand']?'checked':''?>> <i></i> 首页推荐
								</label> 
								<label class="checkbox-inline i-checks"> 
									<input type="checkbox" name="data[is_new]" value="1" class="fanqie_ckb" <?php echo $item['is_new']?'checked':''?>> <i></i> 新品
								</label> 
								<label class="checkbox-inline i-checks"> 
									<input type="checkbox" name="data[is_first]" value="1" class="fanqie_ckb" <?php echo $item['is_first']?'checked':''?>> <i></i> 首发
								</label> 
								<label class="checkbox-inline i-checks"> 
									<input type="checkbox" name="data[is_hot]" value="1" class="fanqie_ckb" <?php echo $item['is_hot']?'checked':''?>> <i></i> 热卖
								</label> 
								<label class="checkbox-inline i-checks"> 
									<input type="checkbox" name="data[is_jingping]" value="1" class="fanqie_ckb" <?php echo $item['is_jingping']?'checked':''?>> <i></i> 精品
								</label>
							</div>
						</div>
<!--						<div class="line line-dashed b-b line-lg pull-in"></div>
 						<div class="form-group">
							<label class="col-sm-2 control-label">商品促销</label>
							<div class="col-sm-2">
								<label class="checkbox-inline i-checks "> 
									<input type="hidden" name="data[promotion]" value="0" >
									<input type="checkbox" name="data[promotion]" value="1" < ?php echo $item['promotion']?'checked':''?>> <i></i> 开启促销
								</label>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
									<span class="input-group-addon">开始</span> <input type="text" name="data[p_start_time]" class="form-control form_datetime" value="< ?php echo $item['p_start_time']?format_time($item['p_start_time'],'Y-m-d H:i'):''?>" placeholder="选择时间">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
									<span class="input-group-addon">结束</span> <input type="text" name="data[p_end_time]" class="form-control form_datetime" value="< ?php echo $item['p_end_time']?format_time($item['p_end_time'],'Y-m-d H:i'):''?>" placeholder="选择时间">
								</div>
							</div>
						</div> -->
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 商品主图</label>
							<div class="col-sm-10">
								<input name="thumb" type="file" class="file file-one" data-bs='1' data-max-image-width='320'  data-max-image-height='320'  data-initial-preview='<?php echo get_fileinput_initview($item['thumb']);?>'  data-initial-preview-config=<?php echo get_fileinput_initview($item['thumb'],true)?> /> 
								<input name="data[thumb]" id="thumburl-1" type="hidden" value="<?php echo $item['thumb']?>" />
								<p class="help_block">图片大小：一定要是正方形，建议尺寸（320*320px）或其他正方形图片</p>
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 详情轮播图片</label>
							<div class="col-sm-10">
								<input name="thumb_arr" type="file" multiple class="file file-multi" data-max-image-width='640'  data-max-image-height='640'  data-max-image-height='6' data-max-file-count='3' data-bs='2' data-okthumb="" data-initial-preview='<?php echo get_fileinput_initview($item['thumb_arr']);?>'  data-initial-preview-config=<?php echo get_fileinput_initview($item['thumb_arr'],true)?> /> 
								<input name="data[thumb_arr]" id="thumburl-2" type="hidden" value="<?php echo $item['thumb_arr']?>"/>
								<p class="help_block">商品轮播图只能上传三张图片，图片大小：(建议尺寸: 640*640px)，三张图片的大小要保持一致</p>
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 分享描述</label>
							<div class="col-sm-10">
								<input type="text" name="data[share_describe]" class="form-control" value="<?php echo $item['share_describe']?>">
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 商品详情</label>
							<div class="col-sm-10">
								<script type="text/plain" id="editor" style="width: 100%; height: 500px;" name="data[content]"><?php echo $item['content']?></script>
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 排序</label>
							<div class="col-sm-10">
								<input type="text" name="data[sort]" class="form-control" value="<?php echo $item['sort']?>">
							</div>
						</div>
						<div class="line line-dashed b-b line-lg pull-in"></div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> 启用商品规格</label>
							<div class="col-sm-1">
								<label class="i-switch m-t-xs m-r"> 
								<input type="checkbox" name="data[is_sku]" id="is_sku" value="1" class="fanqie_ckb" <?php if($item['is_sku'])echo 'checked';?> > <i></i>
								</label>
								<input type="hidden" name="data[sku_titles]" id="sku_titles" value='<?php echo $item['sku_titles']?$item['sku_titles']:'[]';?>'>
								<input type="hidden" name="data[sku_options]" id="sku_options" value='<?php echo $item['sku_options']?$item['sku_options']:'[]';?>'>
								<input type="hidden" name="data[sku_price]" id="sku_price" value='<?php echo $item['sku_price']?$item['sku_price']:'[]';?>'>
								<input type="hidden" name="data[sku_stock]" id="sku_stock" value='<?php echo $item['sku_stock']?$item['sku_stock']:'[]';?>'>
							</div>
							<label class="col-sm-2 control-label text-left <?php if(!$item['is_sku'])echo 'hide';?>" id="sku_edit"><a class="btn btn-xs btn-info ">编辑规格</a></label>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<input type="hidden" name="id" value="<?php echo $item['id']?>">
								<a href="<?php echo site_url($edit_url)?>" class="btn btn-sm btn-primary ajaxproxy" data-loading-text="正在提交……" proxy='{"formId":"content_add_form", "method":"post" ,"location":"<?php echo site_url($index_url)?>"}'>保存修改</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo template('shop/sku');?>
<script src="<?php echo '/res/plugin/ueditor/ueditor.config.js'?>"></script>
<script src="<?php echo '/res/plugin/ueditor/ueditor.all.min.js'?>"></script>
<script src="<?php echo '/res/plugin/ueditor/lang/zh-cn/zh-cn.js'?>"></script>
<?php echo template('shop/script');?>
<script type="text/javascript">
var fileinput_edit = true;
//规格操作
$('#is_sku').click(function(){//开启规格
	if($(this).is(":checked")){
		$('.skuModal').modal('show');
	}else{
		$('#sku_edit').addClass('hide');
	}
});

$('.skuModal').on('hide.bs.modal',function(){//关闭模态框的时候去掉规格的启用
	var titles = $('#s_titles').html();
	if(!titles){
		$('#is_sku').prop('checked',false);
		$('#sku_edit').addClass('hide');
	}else{
		$('#sku_edit').removeClass('hide');
	}
});

$('#sku_save').click(function(){
	var titles = $('#s_titles').html(),options = $('#s_options').html(),stock = $('#s_stock').html().replace(',}','}'),price = $('#s_price').html().replace(',}','}');
	
	$('#sku_titles').val(titles.split('-')[0]||'[]');
	$('#sku_options').val(options.split('-')[0]||'[]');
	if(stock=='{}'){
		$('#sku_stock').val('[]');
	}else{
		$('#sku_stock').val(stock);
	}
	if(price=='{}'){
		$('#sku_price').val('[]');
	}else{
		$('#sku_price').val(price);
	}
	$('.skuModal').modal('hide');
});
$('#sku_edit').click(function(){
	$('.skuModal').modal('show');
});
//规格结束
$(function(){
	$(".form_datetime").datetimepicker({
		 language:'zh-CN',
		 format: 'yyyy-mm-dd hh:ii',
	     autoclose: true,
	     todayBtn: true
	});     
	setTimeout(function(){	 		
		  var ue = UE.getEditor('editor');
		},1000);    
});
</script>
<script src="<?php echo JS_PATH.'fileinput_common.js'?>"></script>
<script src="<?php echo JS_PATH.'fileinput/fileinput.min.js'?>"></script>
<script src="<?php echo JS_PATH.'fileinput/locales/zh.js'?>"></script>
<script src="<?php echo JS_PATH.'jquery/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js'?>"></script>
<script src="<?php echo JS_PATH.'jquery/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js'?>"></script>
<?php echo template('shop/footer');?>