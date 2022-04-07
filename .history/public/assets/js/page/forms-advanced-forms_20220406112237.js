"use strict";

var cleavePN = new Cleave('.phone-number', {
  phone: true,
  phoneRegionCode: 'us'
});
var cleaveC = new Cleave('.currency', {
  numeral: true,
  numeralThousandsGroupStyle: 'thousand'
});
var cleavePC = new Cleave('.purchase-code', {
  delimiter: '-',
  blocks: [4, 4, 4, 4],
  uppercase: true
});
var cleaveI = new Cleave('.invoice-input', {
  prefix: 'INV',
  delimiter: '-',
  blocks: [10],
  uppercase: true
});
var cleaveD = new Cleave('.datemask', {
  date: true,
  datePattern: ['Y', 'm', 'd']
});
var cc_last_type;
var cleaveCC = new Cleave('.creditcard', {
  creditCard: true,
  onCreditCardTypeChanged: function(type) {
    if(type !== 'unknown') {
      if(type == 'amex') {
        type = 'americanexpress';
      }else if(type == 'mastercard') {
        type = 'mastercard';
      }else if(type == 'visa') {
        type = 'visa';
      }else if(type == 'diners') {
        type = 'dinersclub';
      }else if(type == 'discover') {
        type = 'discover';
      }else if(type == 'jcb') {
        type = 'jcb';
      }
      $(".creditcard").removeClass(cc_last_type);
      $(".creditcard").addClass(type);
      cc_last_type = type;
    }
  }
});
var now = new Date();
var inputElementTime = document.getElementsByName("time")[0];
var inputElementDate = document.getElementsByName("date")[0];
inputElementTime.value = ("0" + now.getHours()).slice(-2) + ":" + ("0" + now.getMinutes()).slice(-2);
inputElementDate.value = now.getUTCFullYear() + "-" + ("0" + now.getMonth()).slice(-2) + "-" + ("0" + now.getDate()).slice(-2);
