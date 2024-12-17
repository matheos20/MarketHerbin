const allcontent = {
    "all_releases": [{
        src: "https://assets.mubicdn.net/images/notebook/post_images/33754/images-w1400.jpg?1630167193",
        title: "Future Study",
        year: "2028"
    },
        {
            src: "https://graphicdesignjunction.com/wp-content/uploads/2012/05/large/movie-poster-20.jpg",
            title: "Remembrance",
            year: "2006"
        },
        {
            src: "https://assets.mubicdn.net/images/notebook/post_images/35223/images-w1400.jpeg?1653564310",
            title: "Fashion",
            year: "1977"
        },
        {
            src: "https://mir-s3-cdn-cf.behance.net/project_modules/1400/62332132039857.566bcebd67c82.jpg",
            title: "Order",
            year: "1941"
        },
        {
            src: "https://graphicdesignjunction.com/wp-content/uploads/2012/03/large/movies-poster-13.jpg",
            title: "Any Time of the Day",
            year: "2010"
        },
        {
            src: "http://uiconstock.com/wp-content/uploads/2014/05/noah-2014-movie-poster.jpg",
            title: "Spiritual",
            year: "2014"
        },
        {
            src: "https://lh3.googleusercontent.com/blogger_img_proxy/AEn0k_tzD0H5RJNt7dc6wc3b8SwOjJfX9Wm9ZAGtYwyO6H3PZhcV5Oh_5zWL0alRLW_VxBh-vHTWdNYz8KpCZM4GyDIPZYoCGP4Wf1ARYR7tOhmrWtHgIQy91TuYm9FMW3J1mW081ukUWQ5ZcKEEsMOrJC94zzLYJLCXczgeSFqAhhjmbvJdpcD2LJ8wgKlRsA=s0-d",
            title: "Vintage Age",
            year: "1950"
        },
        {
            src: "https://www.boredart.com/wp-content/uploads/2015/01/famous-movie-posters-of-All-time-Hollywood-8.jpg",
            title: "Technical",
            year: "1990"
        },
        {
            src: "https://i.pinimg.com/originals/db/33/f3/db33f3ce7b4f8ab8e4959166f104b0c3.jpg",
            title: "Western",
            year: "1902"
        },
        {
            src: "https://marketplace.canva.com/EAFDTAjD2B4/1/0/1131w/canva-black-white-simple-minimalist-horror-movie-poster-fnqnDrM2sT8.jpg",
            title: "Darkness Revealed",
            year: "2002"
        }
    ]
};

const mainElem = document.querySelector("main");

window.onload = function() {
    for (let row in allcontent) {
        const insertrow = document.createElement("div");
        insertrow.classList.add("row");

        allcontent[row].forEach((j) => {
            const content = document.createElement("span");
            content.classList.add("content");

            const oneElemImg = document.createElement("a");
            oneElemImg.classList.add("content-img");
            oneElemImg.href = "#";
            const insertImg = document.createElement("img");
            insertImg.src = j.src;
            insertImg.alt = j.title;
            oneElemImg.appendChild(insertImg);

            const oneElemTit = document.createElement("h3");
            oneElemTit.classList.add("content-title");
            oneElemTit.innerHTML = j.title;

            const oneElemYear = document.createElement("p");
            oneElemYear.classList.add("content-year");
            oneElemYear.innerHTML = j.year;

            content.appendChild(oneElemImg);
            content.appendChild(oneElemTit);
            content.appendChild(oneElemYear);
            insertrow.appendChild(content);
        });

        mainElem.appendChild(insertrow);
    }

    // Ajout du défilement automatique horizontal
    const rows = document.querySelectorAll('.row');

    rows.forEach(row => {
        let scrollAmount = 0;
        const scrollSpeed = 2; // Nombre de pixels à défiler à chaque intervalle
        const maxScroll = row.scrollWidth - row.clientWidth; // largeur totale de la ligne moins la largeur visible

        // Fonction de défilement automatique
        const autoScroll = () => {
            if (scrollAmount < maxScroll) {
                row.scrollLeft = scrollAmount;
                scrollAmount += scrollSpeed;
            } else {
                // Si le défilement a atteint la fin, on recommence à zéro
                row.scrollLeft = 0;
                scrollAmount = 0;
            }
        };

        // Définir l'intervalle pour faire défiler toutes les 20ms
        setInterval(autoScroll, 20);
    });
};
