jQuery(function($) {
  var $no = 1;

  function validateform($form){
    $result = true;
    if(grecaptcha.getResponse() == ""){
      $form.find('.grecaptcha .formValidation').show();
      $result = false;
    }
    return $result;
  }

	$(document).on('submit', '.dw-form', function(event) {
    event.preventDefault();
    var $self   = $(this);
    if(!validateform($self)){
      return false;
    }
    var value   = $(this).serializeArray();
    var request = {
        'option' : 'com_ajax',
				'module' : 'dwquote',
        'data'   : value,
				'format' : 'raw'
    };

    $.ajax({
        type   : 'POST',
        data   : request,
        beforeSend: function(){
            $self.find('.fa').addClass('fa-spinner fa-spin');
        },
        success: function (response) {
            $self.find('.fa-spin').removeClass('fa-spinner fa-spin');
            
						if($.parseJSON(response).data === true) {
							$self.find('.alert').removeClass("alert-danger");
              $self.find('.alert').addClass("alert-success");
              $self.find('.newrow').remove();
              $self.find('.formValidation').hide();
              $self.trigger('reset');
              grecaptcha.reset();
						} else {
							$self.find('.alert').removeClass("alert-success");
							$self.find('.alert').addClass("alert-danger");
						}

            $self.find('.alert .msg').html($.parseJSON(response).message);
            $self.find('.alert').addClass('show');
            $self.find('.alert').fadeIn().delay(4000);
        }
    });

      return false;
  });

  $(document).ready(function(){
    $('.btn--addrow').on('click', function(){
      $no++;
      addrow();
      return false;
    });
  });

  function addrow(){
    var $row = '<div class="form-row text-center mb-5 newrow">'+
      '<div class="col-12 mb-5">'+
        '<p class="text-center lead"><strong>Product '+$no+' details:</strong></p>'+
      '</div>'+

      '<div class="col-6">'+
        '<div class="form-group rsform-block rsform-block-catalogue">'+
          '<div class="formControls">'+
            '<select name="form[Catalogue]['+$no+'][]" id="Catalogue" class="rsform-select-box form-control custom-select">'+
              '<option value="Promotion">Promotion</option>'+
              '<option value="Seasonal">Seasonal</option>'+
              '<option value="Confectionery">Confectionery</option>'+
              '<option value="Clothing-Bags">Clothing & Bags</option>'+
            '</select>'+
            '<div><span class="formValidation"><span id="component95" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
        '<div class="form-group rsform-block rsform-block-item-code">'+
          '<div class="formControls">'+
            '<input type="text" value="" size="20" placeholder="Item/code" name="form['+$no+'][Item code]" id="Item code" class="rsform-input-box form-control">'+
            '<div><span class="formValidation"><span id="component96" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
        '<div class="form-group rsform-block rsform-block-size">'+
          '<div class="formControls">'+
            '<input type="text" value="" size="20" placeholder="Size (if applicable)" name="form['+$no+'][Size]" id="Size" class="rsform-input-box form-control">'+
            '<div><span class="formValidation"><span id="component97" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
        '<div class="form-group rsform-block rsform-block-artwork-required text-left d-flex">'+
          '<label class="control-label formControlLabel mr-3">Artwork required?</label>'+
          '<div class="formControls">'+
            '<div class="form-check form-check-inline"><label for="Artwork required0" class="form-check-label"><input type="radio" name="form['+$no+'][Artwork required]" value="yes" id="Artwork required0" class="rsform-radio form-check-input">Yes</label></div>'+
            '<div class="form-check form-check-inline"><label for="Artwork required1" class="form-check-label"><input type="radio" name="form['+$no+'][Artwork required]" value="no" id="Artwork required1" class="rsform-radio form-check-input">No</label></div>'+
            '<div><span class="formValidation"><span id="component101" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
      '</div>'+

      '<div class="col-6">'+
        '<div class="form-group rsform-block rsform-block-date-required">'+
          
          '<div class="formControls">'+
            '<input id="Date required" placeholder="Date required" name="form['+$no+'][Date required]" type="text" value="" class="rsform-input-box form-control">'+
            '<div><span class="formValidation"><span id="component107" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
        '<div class="form-group rsform-block rsform-block-quantity">'+
          '<!-- <label class="control-label formControlLabel" data-toggle="tooltip" title="" for="Quantity" data-original-title=""></label> -->'+
          '<div class="formControls">'+
            '<input type="text" value="" size="20" placeholder="Quantity – some items may have a MOQ" name="form['+$no+'][Quantity]" id="Quantity" class="rsform-input-box form-control">'+
            '<div><span class="formValidation"><span id="component99" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
        '<div class="form-group rsform-block rsform-block-color-of-item">'+
          '<!-- <label class="control-label formControlLabel" data-toggle="tooltip" title="" for="Color of item" data-original-title=""></label> -->'+
          '<div class="formControls">'+
            '<input type="text" value="" size="20" placeholder="Color of item" name="form['+$no+'][Color of item]" id="Color of item" class="rsform-input-box form-control">'+
            '<div><span class="formValidation"><span id="component100" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
        '<div class="form-group  rsform-block rsform-block-printing-required text-left d-flex">'+
          '<label class="control-label formControlLabel mr-3" data-toggle="tooltip" title="" data-original-title="">Printing required?</label>'+
          '<div class="formControls ">'+
            '<div class="form-check form-check-inline"><label for="Printing required0" class="form-check-label"><input type="radio" name="form['+$no+'][Printing required]" value="yes" id="Printing required0" class="rsform-radio form-check-input">Yes</label></div>'+
            '<div class="form-check form-check-inline"><label for="Printing required1" class="form-check-label"><input type="radio" name="form['+$no+'][Printing required]" value="blank" id="Printing required1" class="rsform-radio form-check-input">Blank product</label></div>'+
            '<div><span class="formValidation"><span id="component102" class="formNoError">Invalid Input</span></span></div>'+
          '</div>'+
        '</div>'+
      '</div>'+
    '</div>';
    $($row).insertBefore($('.addrow'));
  }

});
