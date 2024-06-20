const { createApp } = Vue;

createApp({
  data() {
    return {
      artistUrl: "http://localhost/php-dischi-json/server.php",
      artAutor: [],
    };
  },
  methods: {
    //chiamata api server
    getArtist() {
      axios.get(this.artistUrl).then((response) => {
        this.artAutor = response.data;
      });
    },
  },
  created() {
    this.getArtist();
  },
}).mount("#app");
