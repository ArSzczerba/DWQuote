<?php
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
?>

<form id="userForm" class="form dw-form text-white" method="post" action="#">
  <fieldset class="formContainer">
    <div class="line-separator"></div>
    <div class="form-row text-center mb-5">
    
      <div class="col-12 mb-5">
        <p class="text-center lead"><strong>Your Details:</strong></p>
      </div>

      <div class="col-md-6">
        <div class="form-group rsform-block rsform-block-your-name">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Your Name" name="form[Your Name]" id="Your Name" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component91" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>

        <div class="form-group rsform-block rsform-block-telephone">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Telephone" name="form[Telephone]" id="Telephone" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component92" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group rsform-block rsform-block-company">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Company (Optional)" name="form[Company]" id="Company" class="rsform-input-box form-control">
            <div><span class="formValidation"><span id="component93" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>

        <div class="form-group rsform-block rsform-block-email">
          <div class="formControls">
            <input type="email" value="" size="20" placeholder="Email" name="form[Email]" id="Email" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component94" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- product row -->
    <div class="form-row text-center mb-5">
      <div class="col-12 mb-5">
        <p class="text-center lead"><strong>Product details:</strong></p>
      </div>

      <div class="col-6">
        <div class="form-group rsform-block rsform-block-catalogue">
          <div class="formControls">
            <select name="form[Catalogue][]" id="Catalogue" class="rsform-select-box form-control custom-select">
              <option value="">Catalogue</option>
              <option value="Promotion">Promotion</option>
              <option value="Seasonal">Seasonal</option>
              <option value="Confectionery">Confectionery</option>
              <option value="Clothing-Bags">Clothing & Bags</option>
            </select>
            <div><span class="formValidation"><span id="component95" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>

        <div class="form-group rsform-block rsform-block-item-code">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Item/code" name="form[Item code]" id="Item code" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component96" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>

        <div class="form-group rsform-block rsform-block-size">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Size (if applicable)" name="form[Size]" id="Size" class="rsform-input-box form-control">
            <div><span class="formValidation"><span id="component97" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>

        <div class="form-group rsform-block rsform-block-artwork-required text-left d-flex">
          <label class="control-label formControlLabel mr-3">Artwork required?</label>
          <div class="formControls">
            <div class="form-check form-check-inline"><label for="Artwork required0" class="form-check-label"><input type="radio" name="form[Artwork required]" value="yes" id="Artwork required0" class="rsform-radio form-check-input">Yes</label></div>
            <div class="form-check form-check-inline"><label for="Artwork required1" class="form-check-label"><input type="radio" name="form[Artwork required]" value="no" id="Artwork required1" class="rsform-radio form-check-input">No</label></div>
            <div><span class="formValidation"><span id="component101" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class="form-group rsform-block rsform-block-date-required">

          <div class="formControls">
            <input id="Date required" placeholder="Date required" name="form[Date required]" type="text" value="" class="rsform-input-box form-control">
            <div><span class="formValidation"><span id="component107" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
        <div class="form-group rsform-block rsform-block-quantity">
          <!-- <label class="control-label formControlLabel" data-toggle="tooltip" title="" for="Quantity" data-original-title=""></label> -->
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Quantity - some items may have a MOQ" name="form[Quantity]" id="Quantity" class="rsform-input-box form-control">
            <div><span class="formValidation"><span id="component99" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
        <div class="form-group rsform-block rsform-block-color-of-item">
          <!-- <label class="control-label formControlLabel" data-toggle="tooltip" title="" for="Color of item" data-original-title=""></label> -->
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Color of item" name="form[Color of item]" id="Color of item" class="rsform-input-box form-control">
            <div><span class="formValidation"><span id="component100" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
        <div class="form-group  rsform-block rsform-block-printing-required text-left d-flex">
          <label class="control-label formControlLabel mr-3" data-toggle="tooltip" title="" data-original-title="">Printing required?</label>
          <div class="formControls ">
            <div class="form-check form-check-inline"><label for="Printing required0" class="form-check-label"><input type="radio" name="form[Printing required]" value="yes" id="Printing required0" class="rsform-radio form-check-input">Yes</label></div>
            <div class="form-check form-check-inline"><label for="Printing required1" class="form-check-label"><input type="radio" name="form[Printing required]" value="blank" id="Printing required1" class="rsform-radio form-check-input">Blank product</label></div>
            <div><span class="formValidation"><span id="component102" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>
    </div>

    <div class="addrow text-center">
      <a class="btn--addrow" href="#">+ Add additional product</a>
    </div>

    <div class="line-separator"></div>
    <div class="form-row">
      <div class="col-12">
        <div class="form-group rsform-block rsform-block-description-of-your-requirements">
          <p class="text-center lead"><strong>Description of your requirements:</strong></p>
          <p class="text-center lead">Please provide us with an overview of your requirements and deadline.<br>Leadtimes and minimum order quantities will vary by product and print requirements</p>
        </div>
        <div class="form-group rsform-block rsform-block-requirements">
          <label class="control-label formControlLabel" data-toggle="tooltip" title="" for="Requirements" data-original-title=""></label>
          <div class="formControls">
            <textarea cols="50" rows="5" name="form[Requirements]" id="Requirements" class="rsform-text-box form-control"></textarea>
            <div><span class="formValidation"><span id="component106" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>
    </div>

    <!-- RECAPTCHA2 -->
    <?php if ($params->get('recaptcha', 1)) : ?>
      <div class="form-row justify-content-center grecaptcha">
        <div class="form-group control-group text-right">
          <div class="controls">
            <?php
            JPluginHelper::importPlugin('captcha', 'recaptcha');
            $dispatcher = JDispatcher::getInstance();
            $dispatcher->trigger('onInit', 'dynamic_recaptcha_' . $module->id);
            $recaptcha = $dispatcher->trigger('onDisplay', array(null, 'dynamic_recaptcha_' . $module->id));
            echo $recaptcha[0];
            ?>
            <div><span class="formValidation"><span id="component102" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="form-row justify-content-center">
      <input type="hidden" class="form-control" name="module_id" id="module_id" value="<?php echo $module->id; ?>">
      <?php echo JHtml::_('form.token'); ?>
      <button id="Get in touch" type="submit" name="form[Get in touch]" class="rsform-submit-button  btn btn-primary">
        <i class="fa"></i><?php echo JText::_('Send Enquiry'); ?>
      </button>
    </div>
    <div class="alert alert-dismissable fade mt-5" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="msg"></div>
    </div>
  </fieldset>
</form>