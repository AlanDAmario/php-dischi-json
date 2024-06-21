<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Disco Artist</title>
    <!-- boostrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>

  <body>
    <div id="app" v-cloak>
      <div class="container">
        <section>
          <div class="row py-4 justify-content-center gap-5 flex-wrap">
            <div
              class="card"
              style="width: 25rem"
              v-for="artist in artAutor"
              :key="artist.id"
            >
              <img
                :src="artist.poster"
                class="card-img-top"
                alt="{{artist.title}}"
              />

              <div class="card-body text-center">
                <p class="card-text py-2">{{artist.title}}</p>
                <p>{{artist.author}}</p>
                <p>{{artist.year}}</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios (sempre sopra js, per verificare se funziona, inspect=> console => scrivere  window)-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Project js -->
    <script src="./src/main.js"></script>
  </body>
</html>
