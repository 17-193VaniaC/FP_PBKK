<div class="col-sm-3">
	<div class="left-sidebar">
		<h2>Category</h2>
		<div class="panel-group category-products" id="accordian"><!--category-productsr-->
			<?php $all_category = $this->CategoryModel->get_all_category();?>
			<?php $all_brands = $this->BrandModel->get_all_brand();?>
			<?php $all_sub_category = $this->CategoryModel->get_all_sub_category();?>
			<?php foreach ($all_category as  $maincat) {?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $maincat->category_name;?>">
							<span class="badge pull-right">
							<?php foreach ($all_sub_category as $plusicon){?>
								<?php if($plusicon->category_sub_id == $maincat->category_id){?>
									<i class="fa fa-plus"></i>
							<?php if($plusicon->category_sub_id == $maincat->category_id) {
								        break;    
								    }?>
								<?php }}?>
							
							</span>
							<?php echo $maincat->category_name?>	
						</a>
					</h4>
				</div>
				<div id="<?php echo $maincat->category_name;?>" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							<?php foreach ($all_sub_category as  $subcat) {?>
								<?php if($subcat->category_sub_id == $maincat->category_id){?>
										<li><a href="<?php echo base_url()?>/show-post-by-sub-cat-id/<?php echo $subcat->sub_cat_id?>"><?php echo $subcat->sub_category_name?></a></li>
								<?php }?>
							<?php } ?>						
						</ul>
					</div>
				</div>
			</div>
			<?php }?>
			<!--
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="#">Kids</a></h4>
				</div>
			</div>
		-->
		</div><!--/category-productsr-->

		<div class="brands_products"><!--brands_products-->
			<h2>Brands</h2>
			<div class="brands-name">
				<ul class="nav nav-pills nav-stacked">
					<?php foreach ($all_brands as $key => $brand) {	?>
					<li><a href="<?php echo base_url()?>show-post-by-brand-id/<?php echo $brand->brand_id?>"> <span class="pull-right">
						<?php
							$total_brand = $this->HomeModel->get_total_product_by_brand($brand->brand_id)[0]->total;
						 ?>
						 <?php echo "($total_brand)"?>
					</span><?php echo $brand->brand_name;?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div><!--/brands_products-->
		
	</div>
</div>