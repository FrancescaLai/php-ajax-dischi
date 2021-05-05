var app = new Vue({
  el: '#root',
  data: {
      albums: []
  },
  mounted: function(){
      axios.get('http://localhost/Classe27/php-ajax-dischi/api.php')
      .then((serverResponse) => {
          this.albums = serverResponse.data;
      });
    }
});
