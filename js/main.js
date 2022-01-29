const app = new Vue({
    el: '#app',
    data: {
        movies: []
    },
    beforeCreate() {
        axios.get('php/movies.php')
        .then(response => {
            this.movies = response.data
            this.movies.forEach(movie => {
                movie.formattedDate = dayjs(movie.releaseDate, 'YYYY-MM-DD').format('D MMMM YYYY')
                if (movie.vote) {
                    movie.formattedVote = movie.vote * 10 + '%'
                }
            })
        })
    }
})