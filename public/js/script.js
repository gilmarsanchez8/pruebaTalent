var newListMovies = [];
setTimeout(() => {
    const tableRows = document.querySelectorAll('#moviesResults tr.movieRow');
    var years = [];
    for (let i = 0; i < tableRows.length; i++) {
        const row = tableRows[i];
        const title = row.querySelector('.titleMovie');
        const year = row.querySelector('.yearMovie');
        const type = row.querySelector('.typeMovie');
        const image = row.querySelector('.imageMovie');
        var newListMovie = {
            "title": title.innerHTML,
            "year": year.innerHTML,
            "type": type.innerHTML,
            "image": image.innerHTML,
        }
        years.push(year.innerHTML);
        newListMovies.push(newListMovie);
    }
    const yearsArray = new Set(years);
    let result = [...yearsArray];
    createOptionSelect(result, "selectStartDate");
    createOptionSelect(result, "selectEndDate");
}, 1000);

function createOptionSelect(years, id) {
    var selectYear = document.getElementById(id);
    return years.forEach(element => {
        var option = document.createElement("option");
        option.text = element;
        option.setAttribute("value", option.value);
        selectYear.add(option);
    });
}

function showInformationOfMovies(results) {
    $("#moviesResults > tbody").html("");
    var newResults = "";
    results.forEach(element => {
        newResults += "<tr>";
        newResults += "<td class='titleMovie'>" + element.title + "</td>";
        newResults += "<td class='yearMovie'>" + element.year + "</td>";
        newResults += "<td class='typeMovie'>" + element.type + "</td>";
        newResults += "<td class='imageMovie'>" + element.image + "</td >";
        newResults += "</tr>";
    });
    $("#moviesResults > tbody tr")
        .remove()
        .append(newResults);
    $("#moviesResults > tbody").append(newResults);
    newListMovies = results;
}

$(document).ready(function () {
    $(".fieldYear").change(function () {
        var optionStart = document.getElementById("selectStartDate").value;
        var optionEnd = document.getElementById("selectEndDate").value;
        const results = newListMovies.filter(element => element.year >= optionStart && element.year <= optionEnd);

        showInformationOfMovies(results);
    });

    $(".searchSortMovies").change(function () {
        var optionSort = document.getElementById("selectSort").value;
        if (optionSort == 'ASC' || optionSort == 'TITLE') {
            newListMovies.sort((x, y) => x.title.localeCompare(y.title));
            showInformationOfMovies(newListMovies);
        } else if (optionSort == 'DATE') {
            newListMovies.sort((x, y) => x.year - y.year);
            showInformationOfMovies(newListMovies);
        } else if (optionSort == 'DESC') {
            newListMovies.sort((x, y) => y.title.localeCompare(x.title));
            showInformationOfMovies(newListMovies);
        }
    });
});