var app = new Vue({
  el: '#app',
  data: {
      music: []
  },
  mounted: function(){
      axios.get('https://flynn.boolean.careers/exercises/api/array/music')
      .then((serverResponse) => {
          this.music = serverResponse.data;
      });
    }
});