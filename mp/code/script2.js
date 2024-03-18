// Function to filter and display courses in course page

document.addEventListener('DOMContentLoaded', function () {
    // Get the buttons and course cards
    const pianoButton = document.getElementById('pianoButton');
    const violinButton = document.getElementById('violinButton');
    const guitarButton = document.getElementById('guitarButton');
    const vocalButton = document.getElementById('vocalButton');
    const courseCards = document.getElementById('coursecards');

    // Array of course data
    const courses = [
        {
            "songName": "Halloween",
            "className": "Piano classes",
            "bookName": "Book one",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/6bKN7UODpcY?si=6Xd0ieEyMcn7XnlT" 
        },
        {
            "songName": "Bicycle Bill",
            "className": "Piano classes",
            "bookName": "Book one",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/40PfBU52MNI?si=kE2WtbzIg916tXvf"
        },
        {
            "songName": "Leaping Lou the Kangaroo",
            "className": "Piano classes",
            "bookName": "Book one",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/TPFS9girmJE?si=asbN4Lv_2ZA6nZPw"
        },
        {
            "songName": "The Bells of Vendome",
            "className": "Violin classes",
            "bookName": "Book one",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/xeVtne76mEg?si=djgygyHpH9b6ID1b"
        },
        {
            "songName": "Now the day is over",
            "className": "Violin classes",
            "bookName": "Book one",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/1Y1Yu08TeDU?si=6WLSdeLTPkUc5BKT"
        },
        {
            "songName": "Bells",
            "className": "Violin classes",
            "bookName": "Book one",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/R_1bAVETWcs?si=TXrVMlfomOPMwCrK" 
        },
        {
            "songName": "Rockin' Robin",
            "className": "Guitar classes",
            "bookName": "Book one",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/KLp9T7Zx-18?si=P9PId62a9MAX0Bgy"
        },
        {
            "songName": "Blues",
            "className": "Guitar classes",
            "bookName": "Book one",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/LY5Ewc6KUmM?si=sX-dKAikg36qH9Pg"
        },
        {
            "songName": "World Beat",
            "className": "Guitar classes",
            "bookName": "Book one",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/V1MamvDj3As?si=4--2FQJdxJ5AzThT"
        },
        {
            "songName": "Little Johnny Jones",
            "className": "Piano classes",
            "bookName": "Book two",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/kjWCS4Lqjyg?si=hQlosAHUhBCNPStM"
        },
        {
            "songName": "Ode to Joy",
            "className": "Piano classes",
            "bookName": "Book two",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/hl2ZbNYpfXA?si=mWJm-6ZkfukUjbWB" 
        },
        {
            "songName": "S.O.S",
            "className": "Piano classes",
            "bookName": "Book two",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/5FQUBgZdK6w?si=PWcor5We7kTc4XPr" 
        },
        {
            "songName": "Chorale",
            "className": "Violin classes",
            "bookName": "Book two",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/wddXSRuoRfs?si=k1ye3zo0YdP0-ZIk" 
        },
        {
            "songName": "Blow away the morning dew",
            "className": "Violin classes",
            "bookName": "Book two",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/SMjSSqisHiM?si=yk-CcR6JfSqWvk4I" 
        },
        {
            "songName": "God save the Queen",
            "className": "Violin classes",
            "bookName": "Book two",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/nuqPZyzhxQ4?si=qwpIxnXvslUrcAAp"
        },
        {
            "songName": "Cockles and mussels",
            "className": "Guitar classes",
            "bookName": "Book two",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/YpLxw3PcDTw?si=sr09Kwep5VZbXeFO"
        },
        {
            "songName": "Tending tonight",
            "className": "Guitar classes",
            "bookName": "Book two",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/m26ILWiJpE4?si=KYdpKwS83YppStOR"
        },
        {
            "songName": "Small Chord Etude",
            "className": "Guitar classes",
            "bookName": "Book three",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/WXNl0wc4emE?si=myGvsmx52Jp3wTWk"
        },
        {
            "songName": "Shepherds Hey",
            "className": "Piano classes",
            "bookName": "Book three",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/4cJtHwfcqoo?si=V9S7Xc_s1DAvPO6R"
        },
        {
            "songName": "Indian Camp Fire",
            "className": "Piano classes",
            "bookName": "Book three",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/UCW1N8P_90g?si=AHHCaKO8vtwn2t9S" 
        },
        {
            "songName": "Rippling Rhythm",
            "className": "Piano classes",
            "bookName": "Book three",
            "instrument": "Piano",
            "videoUrl" : "https://www.youtube.com/embed/CR6DytbGuDA?si=MHLDHTrq0Dy_F4oY" 
        },
        {
            "songName": "Song of freedom",
            "className": "Violin classes",
            "bookName": "Book three",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/JJwZOUyUXHw?si=HM2lR_x9jh7XD0E6" 
        },
        {
            "songName": "La Serenata",
            "className": "Violin classes",
            "bookName": "Book three",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/qziduNRi5pM?si=N3LyCrxs6uGAk0Lu" 
        },
        {
            "songName": "Allemanda",
            "className": "Violin classes",
            "bookName": "Book three",
            "instrument": "Violin",
            "videoUrl" : "https://www.youtube.com/embed/tdFaIhbeZz8?si=gc4XnAnEc3k_UJ8l" 
        },
        {
            "songName": "Aura Lee",
            "className": "Guitar classes",
            "bookName": "Book three",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/K6ErwJfXJhg?si=25vg0Gcj4UQnqW3P"
        },
        {
            "songName": "He's a jollu good fellow",
            "className": "Guitar classes",
            "bookName": "Book three",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/W_wHtMJsvqY?si=qWKQR1zsWtyWRpT4"
        },
        {
            "songName": "Worried Man Blues",
            "className": "Guitar classes",
            "bookName": "Book three",
            "instrument": "Guitar",
            "videoUrl" : "https://www.youtube.com/embed/BaTp4wJGNl0?si=X4cFrIQHIcExQ5K8"
        }
    ];

    function displayCoursesByInstrument(query) {
        // Filter courses based on the query string
        const filteredCourses = courses.filter(course => {
            // Check if any field (songName, className, bookName, or instrument) contains the query
            return (
                course.songName.toLowerCase().includes(query.toLowerCase()) ||
                course.className.toLowerCase().includes(query.toLowerCase()) ||
                course.bookName.toLowerCase().includes(query.toLowerCase()) ||
                course.instrument.toLowerCase().includes(query.toLowerCase())
            );
        });
    
        // Generate HTML for the filtered courses
        const html = filteredCourses.map(course => `
            <li>
                <a href="class.php?video=${encodeURIComponent(course.videoUrl)}&
                songName=${encodeURIComponent(course.songName)}&
                className=${encodeURIComponent(course.className)}&
                bookName=${encodeURIComponent(course.bookName)}
                " 
                <?php echo $GLOBALS["active-nav"]=="class"? 'class="active"':'';?>
                    <section>
                        <div>
                            <img src="${getImageForInstrument(course.instrument)}" alt="${course.instrument}">
                        </div>
                        <h2 class="song-name">${course.songName}</h2>
                        <p class="class-name">${course.className} > ${course.bookName}</p>
                    </section>
                </a>
            </li>
        `).join('');
    
        // Update the courseCards with the generated HTML
        courseCards.innerHTML = `<ul>${html}</ul>`;
    }
    
    

    function resetButtonColors() {
        const buttons = [pianoButton, violinButton, guitarButton, vocalButton];
        buttons.forEach(button => {
            button.style.background = '#8ABE41';
            button.style.color = '#FFF';
            button.style.padding= '5px 20px';
            pianoButton.style.border= 'transparent';
        });
    }

    // Event listeners for instrument buttons
    pianoButton.addEventListener('click', () => {
        displayCoursesByInstrument('Piano');
        resetButtonColors();
        pianoButton.style.background = '#FFF';
        pianoButton.style.color = '#8ABE41';
        pianoButton.style.padding= '3px 18px';
        pianoButton.style.border= '2px solid #8ABE41';
    });
    violinButton.addEventListener('click', () => { 
        displayCoursesByInstrument('Violin');
        resetButtonColors();
        violinButton.style.background = '#FFF';
        violinButton.style.color = '#8ABE41';
        violinButton.style.padding= '3px 18px';
        violinButton.style.border= '2px solid #8ABE41';
    });
    guitarButton.addEventListener('click', () => { 
        displayCoursesByInstrument('Guitar');
        resetButtonColors();
        guitarButton.style.background = '#FFF';
        guitarButton.style.color = '#8ABE41';
        guitarButton.style.padding= '3px 18px';
        guitarButton.style.border= '2px solid #8ABE41';
    });

    // Initially, display all courses
    displayCoursesByInstrument(''); // To display all courses on page load

        
    document.getElementById('searchButton').addEventListener('click', () => {
        const searchInput = document.getElementById('searchInput').value;
        displayCoursesByInstrument(searchInput);
        resetButtonColors(); // Reset button styles
    });

});



// Function to get the appropriate image URL based on the instrument
function getImageForInstrument(instrument) {
    switch (instrument.toLowerCase()) {
        case 'violin':
            return '../assests/violin2.png'; // Replace with the actual URL of the violin image
        case 'guitar':
            return '../assests/guitar2.png'; // Replace with the actual URL of the guitar image
        case 'piano':
            return '../assests/piano2.png'; // Replace with the actual URL of the piano image
        default:
            return '../assests/default.png'; // Provide a default image URL if the instrument is not recognized
    }
}

