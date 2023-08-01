let form = document.getElementById('form')

form.addEventListener('submit', function (event) {
    event.preventDefault()
    let body_part = document.getElementById("body_parts").value
    let bench_press = document.getElementById("bench_press")
    let deadlift = document.getElementById("deadlift")
    let back_squat = document.getElementById("back_squat")
    let hip_thrust = document.getElementById("hip_thrust")
    let shoulder_press = document.getElementById("shoulder_press")
    let bicep_curl = document.getElementById("bicep_curl")
    let lying_tricep_extension = document.getElementById("lying_tricep_extension")
    let sit_up = document.getElementById("sit_up")

    if (body_part == "chest") {
        bench_press.style.display = 'block'
        deadlift.style.display = 'none'
        back_squat.style.display = 'none'
        hip_thrust.style.display = 'none'
        shoulder_press.style.display = 'none'
        bicep_curl.style.display = 'none'
        lying_tricep_extension.style.display = 'none'
        sit_up.style.display = 'none'
    }
    else if (body_part == "back") {
        bench_press.style.display = 'none'
        deadlift.style.display = 'block'
        back_squat.style.display = 'none'
        hip_thrust.style.display = 'none'
        shoulder_press.style.display = 'none'
        bicep_curl.style.display = 'none'
        lying_tricep_extension.style.display = 'none'
        sit_up.style.display = 'none'
    }
    else if (body_part == "legs") {
        bench_press.style.display = 'none'
        deadlift.style.display = 'none'
        back_squat.style.display = 'block'
        hip_thrust.style.display = 'none'
        shoulder_press.style.display = 'none'
        bicep_curl.style.display = 'none'
        lying_tricep_extension.style.display = 'none'
        sit_up.style.display = 'none'
    }
    else if (body_part == "glutes") {
        bench_press.style.display = 'none'
        deadlift.style.display = 'none'
        back_squat.style.display = 'none'
        hip_thrust.style.display = 'block'
        shoulder_press.style.display = 'none'
        bicep_curl.style.display = 'none'
        lying_tricep_extension.style.display = 'none'
        sit_up.style.display = 'none'
    }
    else if (body_part == "shoulders") {
        bench_press.style.display = 'none'
        deadlift.style.display = 'none'
        back_squat.style.display = 'none'
        hip_thrust.style.display = 'none'
        shoulder_press.style.display = 'block'
        bicep_curl.style.display = 'none'
        lying_tricep_extension.style.display = 'none'
        sit_up.style.display = 'none'
    }
    else if (body_part == "biceps") {
        bench_press.style.display = 'none'
        deadlift.style.display = 'none'
        back_squat.style.display = 'none'
        hip_thrust.style.display = 'none'
        shoulder_press.style.display = 'none'
        bicep_curl.style.display = 'block'
        lying_tricep_extension.style.display = 'none'
        sit_up.style.display = 'none'
    }
    else if (body_part == "triceps") {
        bench_press.style.display = 'none'
        deadlift.style.display = 'none'
        back_squat.style.display = 'none'
        hip_thrust.style.display = 'none'
        shoulder_press.style.display = 'none'
        bicep_curl.style.display = 'none'
        lying_tricep_extension.style.display = 'block'
        sit_up.style.display = 'none'
    }
    else if (body_part == "abs") {
        bench_press.style.display = 'none'
        deadlift.style.display = 'none'
        back_squat.style.display = 'none'
        hip_thrust.style.display = 'none'
        shoulder_press.style.display = 'none'
        bicep_curl.style.display = 'none'
        lying_tricep_extension.style.display = 'none'
        sit_up.style.display = 'block'
    }
})

