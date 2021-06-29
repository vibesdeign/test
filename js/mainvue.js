var app = new Vue({
  el: '#app',
  data: {
   sku: ''
  },
  filters: {
    //金額に3桁区切りをつける
    number_format: function(val){
      return val.toLocaleString();
    },
    //金額の後ろに単位をつけるフィルター
    unit: function(val){
      return val + '円';
    }
  }
});