function setTime(time, deadlineDate) {
    const now = new Date().getTime();
    time.querySelector(".hari").innerHTML = setWebTime(
        Math.floor(Math.abs(deadlineDate - now) / (1000 * 60 * 60 * 24)),
        ["hari1", "hari2", "hari3"]
    );
    time.querySelector(".jam").innerHTML = setWebTime(
        Math.floor(
            (Math.abs(deadlineDate - now) % (1000 * 60 * 60 * 24)) /
                (1000 * 60 * 60)
        ),
        ["jam1", "jam2"]
    );
    time.querySelector(".menit").innerHTML = setWebTime(
        Math.floor(
            (Math.abs(deadlineDate - now) % (1000 * 60 * 60)) / (1000 * 60)
        ),
        ["menit1", "menit2"]
    );
    time.querySelector(".detik").innerHTML = setWebTime(
        Math.floor((Math.abs(deadlineDate - now) % (1000 * 60)) / 1000),
        ["detik1", "detik2"]
    );
}

function setWebTime(time, namaClass) {
    return String(time)
        .padStart(namaClass.length, "0")
        .split("")
        .map((e, i) => {
            return `<span class="${namaClass[i]}">${e}</span>`;
        });
}

function makeListBook(listBorrowBooks, countdown, path) {
    countdown.map((e) => {
        listBorrowBooks.innerHTML += `<div class="countdown">
                                    <img src="${path}/${e["id"]}.png" alt="book" />
                                    <h1 class="title-book">${e["title"]}</h1>
                                    <div class="description-time">
                                      <div class="time">
                                        <div class="hari"></div>
                                        <span class="titik-dua">:</span>
                                        <div class="jam"></div>
                                        <span class="titik-dua">:</span>
                                        <div class="menit"></div>
                                        <span class="titik-dua">:</span>
                                        <div class="detik"></div>
                                      </div>
                                      <div class="return-back">
                                        <a href="#return-back">RETURN</a>
                                      </div>
                                    </div>
                                  </div>`;
    });
}

makeListBook(document.querySelector("section.countdown-list"), countdown, path);

setInterval(() => {
    Array.from(
        document.querySelectorAll(
            "section.countdown-list .countdown .description-time .time"
        )
    ).map((e, i) => {
        setTime(e, new Date(countdown[i]["dates"]));
    });
}, 1000);
