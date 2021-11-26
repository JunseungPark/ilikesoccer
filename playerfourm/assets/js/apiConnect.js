
var requestOptions = {
    method: 'GET',
    redirect: 'follow',
    mode: 'cors'
};
let reqType = {

    bootstrap : 'bootstrap-static/', //Overview
    element : 'element-summary/', //Players (playderID)
    events : 'events', // Get all gameweeks
    event : 'event',  //A selected gameweek
    entry : 'entry', //Get a team
    elementTypes: 'element-types', // Get all player positions
    gameweekFixtures: 'fixtures/?event', //Get all fixtures for a specified gameweek (gameweek number)
    teams: 'teams/', //Get all teams,
    leagueClassicStanding: 'leagues-classic/' //Get league standing at current gameweek.

}
const proxyURL = 'https://corsanywhere.herokuapp.com/';

async function fetchExam() {

    try {

        const response = await fetch(`${proxyURL}https://fantasy.premierleague.com/api/bootstrap-static/`, requestOptions);
        const exam = await response.json();

        return exam;

    } catch (error) {

        console.error(error);

    }

}

// render 데이터
async function renderExam() {
    console.log(1);
    const exam = await fetchExam();
    console.log(exam);
    // document.write(exam.elements[0].team);

    return exam;

}

function test() {
    console.log(1);
}