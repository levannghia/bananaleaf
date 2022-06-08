<?php
	include "ajax_config.php";
    $output = '';
	$idl= (isset($_GET['id_list']) && $_GET['id_list'] != '') ? htmlspecialchars($_GET['id_list']) : '';
    $product_list = $d->rawQuery("select ten$lang ,tenkhongdau$lang ,id,photo,gia from #_product where hienthi>0 and id_list = ? and type='san-pham'",array($idl));

    if(count($product_list) > 0){
    foreach ($product_list as $key => $v) {
        
            $output .= '<div class="col-md-3">
        <div class="product__item">
            <div class="product__bd">
                <div class="product__img">
                    <a href="'.$v['tenkhongdauvi'].'">
                        <img src="'. THUMBS .'/380x270x1/'. UPLOAD_PRODUCT_L . $v['photo'] .'" alt="'.$v['ten'.$lang].'" width="350" height="265">
                    </a>
                </div>
                <div class="product__content">
                    <div class="product__name"><a href="'.$v['tenkhongdauvi'].'"
                            title="'.$v['tenvi'].'">'.$v['ten'.$lang].'</a></div>
                    <div class="product__price">
                        <div class="product__giaban">Giá: <span>'. $v['gia'] .'</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
       
    }
}else{
    $output .= '<div class="alert alert-warning" style="margin:auto;" role="alert"><strong>Đang cập nhật</strong></div>';
}
echo $output;
