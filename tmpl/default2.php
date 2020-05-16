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

      <div class="col-md-4">
        <div class="form-group rsform-block rsform-block-your-name">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Your Name" name="form[Your Name]" id="Your Name" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component91" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group rsform-block rsform-block-email">
          <div class="formControls">
            <input type="email" value="" size="20" placeholder="Email" name="form[Email]" id="Email" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component94" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group rsform-block rsform-block-telephone">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Telephone" name="form[Telephone]" id="Telephone" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component92" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group rsform-block rsform-block-company">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Company (Optional)" name="form[Company]" id="Company" class="rsform-input-box form-control">
            <div><span class="formValidation"><span id="component93" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>
      
      <div class="col-md-12">
        <div class="form-group rsform-block rsform-block-artwork-required text-left d-flex">
          <label class="control-label formControlLabel mr-3">Design</label>
          <div class="formControls">
            <div class="form-check form-check-inline">
              <label for="Design required0" class="form-check-label">
                <input type="radio" name="form[Design required0]" value="Required" id="Design required0" class="rsform-radio form-check-input">Required</label>
              </div>
            <div class="form-check form-check-inline">
              <label for="Design required1" class="form-check-label">
                <input type="radio" name="form[Design required1]" value="Supplied" id="Design required1" class="rsform-radio form-check-input">Supplied</label></div>
            <div><span class="formValidation"><span id="component101" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group rsform-block rsform-block-email">
          <div class="formControls">
            <input type="number" value="" size="20" placeholder="Quantity (minimum of 5 items)" name="form[quantity-no]" id="quantity-no" class="rsform-input-box form-control" min="5" required>
            <div><span class="formValidation"><span id="component94" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group rsform-block rsform-block-your-name">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Sizes" name="form[Sizes]" id="Sizes" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component91" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="form-group rsform-block rsform-block-your-name">
          <div class="formControls">
            <input type="text" value="" size="20" placeholder="Colour" name="form[Colour]" id="Colour" class="rsform-input-box form-control" required>
            <div><span class="formValidation"><span id="component91" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group rsform-block rsform-block-Product">
          <div class="formControls">
            <select name="form[Product][]" id="Product" class="rsform-select-box form-control custom-select">
              <option value="">Product</option>
              <option value="T-shirt">T-shirt</option>
              <option value="Hoodies">Hoodies</option>
              <option value="Sweatshirts">Sweatshirts</option>
              <option value="Polo-shirts">Polo shirts</option>
              <option value="Bags">Bags</option>
              <option value="Aprons">Aprons</option>
              <option value="Other">Other (please specify)</option>
            </select>
            <div><span class="formValidation"><span id="component95" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group rsform-block rsform-block-Decoration ">
          <div class="formControls">
            <select name="form[Decoration][]" id="Decoration" class="rsform-select-box form-control custom-select">
              <option value="">Decoration</option>
              <option value="Transfer">Transfer</option>
              <option value="Direct to garment">Direct to garment</option>
              <option value="Embroidery">Embroidery</option>
              <option value="Dye sublimation">Dye sublimation</option>
              <option value="Laser Art">Laser Art</option>
            </select>
            <div><span class="formValidation"><span id="component95" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group rsform-block rsform-block-file m-0 text-left">
          <div class="formControls">
            <label>*Upload your artwork example (5mb max) allowed extensions (jpg, png, pdf)</label>
            <input type="file" accept=".pdf,.jpg,.jpeg,.png" size="40" name="form[File]" id="File" class="rsform-input-box form-control">
            <div><span class="formValidation"><span id="component91" class="formNoError">Invalid Input</span></span></div>
          </div>
        </div>
      </div>
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
            <textarea cols="50" rows="5" name="form[Requirements]" id="Requirements" class="rsform-text-box form-control"></textarea><div><span class="formValidation"><span id="component106" class="formNoError">Invalid Input</span></span></div>
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
    <input type="hidden" class="form-control" name="module_id" id="module_id" value="<?php echo $module->id; ?>" >
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