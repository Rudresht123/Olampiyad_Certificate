//Checkbox code
$('.is_active').

// clock timer start here
function updateClock() {
    const now = new Date();
    let hours = now.getHours();
    let minutes = now.getMinutes();
    let seconds = now.getSeconds();

    // Add leading zero to hours, minutes, and seconds if they are less than 10
    hours = (hours < 10) ? '0' + hours : hours;
    minutes = (minutes < 10) ? '0' + minutes : minutes;
    seconds = (seconds < 10) ? '0' + seconds : seconds;

    // Format time as HH:MM:SS
    const time = `${hours}:${minutes}:${seconds}`;

    // Display the time
    document.getElementById('clock').textContent = time;
}


function populateCourse(route, courseId = null) {
    alert(route);
    $.ajax({
        url: route,
        type: 'GET',
        success: function (response) {
            console.log(response);
            let select = $('#course');
            select.empty(); 
            select.append(`<option value="">**Please Select Sub Status..</option>`);
            response.forEach(course => {
                // Check if this substatus should be selected
                let isSelected = courseId && course.id == courseId ? 'selected' : '';
                let option = `
                    <option value="${course.courses.id}"  ${isSelected}>
                        ${course.courses.course_name}
                    </option>
                `;
                select.append(option);
            });
        },
        error: function () {
            console.error('Failed to fetch substatus');
        }
    });
}
