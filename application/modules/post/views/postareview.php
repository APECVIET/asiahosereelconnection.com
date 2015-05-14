<div id="main_inguiries">
  <p id="p_inquiries"> 
    <?php $lang=$this->session->userdata('language');
      switch ($lang) {
        case 'lang2':
          echo $data['0']->title_lang2;
          break;
          case 'lang3':
           echo $data['0']->title_lang3;
          break;
        default:
          echo $data['0']->title_lang1;
          break;
      }
     ?>
  </p>

  <div class="row">
    <div class="col-xs-12">
      <div id="mainframe_inquiries">
        <div id="text_frame_inquiries">
          <p> <?php 
              switch ($lang) {
          case 'lang2':
            echo $data['0']->body_lang2;
            break;
            case 'lang3':
             echo $data['0']->body_lang3;
            break;
          default:
            echo $data['0']->body_lang1;
            break;
            }
          ?> </p>
        </div><!--end text_frame_inquiries-->
      </div><!--end mainframe_inquiries-->
    </div>
  </div><!-- end row1-->

  <div class="row">
    <div class="col-xs-12">
      <div id="mainframe_inquiries_2">
        <div id="text_frame_inquiries_2">
          <div id="frame_inquerie">
           <p> <b>Review</b></p>
          </div><!-- frame_inquerie-->
        
          <div id="frame_inquerie_2">
            <form class="form-text" method="post" action="/send_comment.html">
              <div class="row">
                <div class="col-xs-6">
                  <div class="form-group">
                    <input type='hidden' name='type_page' value="<?php echo $data['0']->type_page; ?>">
                    <input name="name_product" type="text" id="inputEmail" class="form-control" placeholder="Reel product make and model" required autofocus>
                  </div><!--end form-group-->
                  <div class="form-group">
                    <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email" required>
                  </div><!--end form-group-->
                </div><!--end colum1-->

                <div class="col-xs-12">
                  <div class="form-group">
                   <textarea name="body" type="text" rows="14" id="inputEmail" class="form-control" placeholder="Enter the body" required /></textarea>
                  </div><!--end form-group-->
                  <div class="btn-postreview">
                    <button class="btn btn-lg btn-primary btn-block-size" type="submit">SUBMIT</button>
                  </div><!--end btn-postreview-->
                </div>       
                </div><!--end row-->   
            </form>
          </div><!--end frame_inquerie_2-->
      </div><!--text_frame_inquiries_2-->
    </div><!--mainframe_inquiries_2-->
    </div>
  </div><!--end row2-->
</div><!--main_inguiries-->

