<div class="videoUpload-zone">
    <div class="videoUpload-detail" id="videoUpload-preview">
        <video width="100%" height="306" controls id="video-preview" autoplay muted loop>
            <source src="<?=$photoDetail['upload']?><?=$photoDetail['video']?>" type="video/mp4">
        </video>
        <?php if($item['videomp4']!='' and (($com == 'static' and $act == 'update') or ($com == 'news' and $act == 'edit') or ($com == 'product' and $act == 'edit'))) { ?>
            <a href="javascript:void(0)" class="delete_1video" data-id="<?=$item['id']?>" data-table="<?=$com?>" data-cot="videomp4" data-type="<?=$type?>" data-vitrixoa="videoUpload-preview" title="Xóa video này ?">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path></svg>
            </a>
        <?php } ?>
    </div>
    <label class="videoUpload-file" id="video-zone" for="video-input">
        <input type="file" name="videomp4" id="video-input" accept="video/mp4">
        <i class="fas fa-cloud-upload-alt"></i>
        <p class="videoUpload-choose btn btn-sm bg-gradient-success">Chọn video</p>
    </label>
    <div class="videoUpload-dimension"><?= $photoDetail['dimension'] ?></div>
</div>