<div id="main-product">

  <div class="row">
    <div class="mrg">
      <div class="col-xs-12, col-sm-7">
        <div class="description_pr text_desc_reponsive">
           <h5><?php 
                    $lang=$this->session->userdata('language');
                    switch ($lang) {
                      case 'lang2':
                        echo $data['0']->name_post_lang2;
                        break;
                      case 'lang3':
                        echo $data['0']->name_post_lang3;
                        break;
                      default:
                        echo $data['0']->name_post_lang1;
                        break;
                     } ?> 
                </h5>
          <?php switch ($lang) {
                    case 'lang2':
                      echo $data['0']->descript_lang2;
                      break;
                    case 'lang3':
                      echo $data['0']->descript_lang3;
                      break;
                    default:
                      echo $data['0']->descript_lang1;
                      break;
                   } ?>
        </div>
      </div><!--comlum1-->

      <div class="col-sm-5 hidden-xs">
        <img class="description_second" src="<?php echo $data['0'] -> thumb_post; ?>"alt="<?php echo $data['0']->name_post_lang1;?>">
      </div>
      </div>
  </div><!--end row2-->
</div><!--end main-product-->