<main>
	<section class="slide-show py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="slide-show__left">
						<div class="title">
							SẢN PHẨM ĐANG HOT
						</div>
						<div class="content">
							<ul>
								<?php foreach ($productHighlight as $item) { ?>
									<li class="item">
										<a href="/<?= $item['tenkhongdauvi'] ?>"><img src="<?= THUMBS ?>/1280x1024x1/upload/product/<?= $item['photo'] ?>" class="img-fluid" alt="goland"></a>
										<div class="description">
											<p class="address">
												Địa Chỉ: <span><?= $item['diachi']; ?></span>
											</p>
											<p class="area">
												Diện tích:
												<span><?= $item['dientich'] ?></span>
											</p>
											<p class="price">
												Giá:
												<span><?= $item['giavi'] ?></span>
											</p>
										</div>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="slide-show__right">
						<?php include TEMPLATE . LAYOUT . "search.php"; ?>
						<div class="slide-show__right__slide">
							<div class="owl-carousel owl-theme">
								<?php foreach ($qc as $item) { ?>
									<div class="item">
										<img src="<?= THUMBS ?>/730x420x1/upload/photo/<?= $item['photo'] ?>" alt="hinh">
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="introduce py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="introduce__left">
						<p class="tt">Giới thiệu chung</p>
						<h1>GO LAND</h1>
						<div class="description">

								<?php
								$none = "";
								(strlen(htmlspecialchars_decode($gioithieuchung['noidungvi'])) > 300) ? $none = "block" : $none = "none";
								?>
								<?= htmlspecialchars_decode($gioithieuchung['noidungvi']); ?>
								<br>
						</div>
						<button class="btn text-center i-xemthem d-<?= $none ?>">Xem thêm</button>
					</div>
				</div>
				<div class="col-md-5">
					<?php include TEMPLATE . LAYOUT . "newsletter.php"; ?>

				</div>
			</div>
		</div>
	</section>
	<?php foreach ($productList as $productL) { ?>
		<section class="category py-4">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="category__header">
							<div class="title">
								<?= $productL['tenvi'] ?>
							</div>
							<div class="description">
								<?= htmlspecialchars_decode($productL['noidungvi']) ?>
							</div>
							<div class="helmet">
								<img src="/assets/images/helmet.png" alt="helmet" onerror="src='assets/images/noimage.png'">
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="category__body">
							<div class="row">
								<?php
								$limitC = 4;
								if ($productL['tenkhongdauvi'] == "dat-nen") $limitC = 8;
								$productC = $d->rawQuery("select ten$lang, tenkhongdauvi, id, gia, noidungvi, photo, giavi, dientich, diachi from #_product where id_list = ? and hienthi > 0 order by stt,id desc limit ?", array($productL['id'], $limitC));
								?>
								<?php foreach ($productC as $item) { ?>
									<div class="col-lg-3 col-md-4 col-6 sm-px-2 px-1">
										<div class="item boxproduct_item">
											<a class="boxproduct_img" href="/<?= $item['tenkhongdauvi'] ?>"><img src="<?= THUMBS ?>/1280x1024x1/upload/product/<?= $item['photo']; ?>" alt="datnengoland" onerror="src='assets/images/noimage.png'"></a>
											<div class="content" title="<?= $item['tenvi'] ?>">
												<p class="tieude">
													<a href="/<?= $item['tenkhongdauvi'] ?>"><span><?= $item['tenvi'] ?></span></a>
												</p>
												<p class="gia">
													Giá: <span><?= $item['giavi'] ?></span>
												</p>
												<p class="dientich">
													Diện tích: <span><?= $item['dientich'] ?></span>
												</p>
												<p class="diachi">
													Địa chỉ: <span><?= $item['diachi'] ?></span>
												</p>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-md-12 seemore">
						<button class="btn text-center"><a href="/<?= $productL['tenkhongdauvi'] ?>">XEM THÊM</a></button>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
	<section class="uytin py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<a href="<?= $baner['link'] ?>">
								<div style="background-image: url(<?= THUMBS ?>/1280x160x1/upload/photo/<?= $baner['photo'] ?>);" class="item__title">
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="news py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="news__header ct">
						TIN TỨC & SỰ KIỆN
					</div>
					<div class="news__highlight">
						<div class="row">
							<div class="col-md-6">
								<a href="/<?= $tintucnoibat['tenkhongdauvi'] ?>"><img src="<?= THUMBS ?>/360x205x1/upload/news/<?= $tintucnoibat['photo'] ?>" alt="tintucnoibat"></a>
							</div>
							<div class="col-md-6">
								<div class="title" title="<?= $tintucnoibat['tenvi'] ?>">
									<a href="/<?= $tintucnoibat['tenkhongdauvi'] ?>"><?= $tintucnoibat['tenvi'] ?></a>
								</div>
								<div class="description">
									<?= $tintucnoibat['motavi'] ?>
								</div>
							</div>
						</div>
					</div>
					<div class="news__list">
						<ul>
							<?php foreach ($tintuc as $item) { ?>
								<li class="item">
									<div class="photo">
										<a href="/<?= $item['tenkhongdauvi'] ?>"><img src="<?= THUMBS ?>/360x205x1/upload/news/<?= $item['photo'] ?>" alt="item"></a>
									</div>
									<div class="title" title="<?= $item['tenvi'] ?>">
										<a href="/<?= $item['tenkhongdauvi'] ?>"><?= $item['tenvi'] ?></a>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="news__video">
						<div class="ct">
							video
						</div>
						<div class="video-slick">
							<?php foreach($videos as $video) { ?>
							<div class="video py-4">
								<iframe class="iframe" width="100%" height="375" src="//www.youtube.com/embed/<?= $func->getYoutube($video['link_video']) ?>" frameborder="0" allowfullscreen=""></iframe>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="doitac py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="owl-carousel owl-theme doitac__slide">
						<?php foreach ($doitac as $q => $ad) { ?>
							<div class="item">
								<a href="<?= $ad['link'] ?>"><img class="img-fluid img-thumbnail" onerror="this.src='<?= THUMBS ?>/140x140x2/assets/images/noimage.png';" src="<?= THUMBS ?>/175x85x1/<?= UPLOAD_PHOTO_L . $ad['photo'] ?>" alt="<?= $ad['ten' . $lang] ?>" title="<?= $ad['ten' . $lang] ?>" /></a>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>