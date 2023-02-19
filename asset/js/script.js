$('#open-card').on('click', function() {
    $('#card').addClass('duration-500');
    $('#card').addClass('-translate-y-full');
    
    $('#card-invite').removeClass('hidden')
    
    setTimeout(function() {
        $('#card').addClass('hidden')
        $('#card').removeClass('flex justify-center')
    }, 1000)

    $('#home').attr('data-aos', 'fade-up')

})

function timeCountdown(){

    const countDate = new Date('July 24, 2022 08:00:00').getTime()
    const now = new Date().getTime()
    const gap = countDate - now

    const second = 1000
    const minute = second * 60
    const hour = minute * 60
    const day = hour * 24

    const textDay = Math.floor(gap / day)
    const textHour = Math.floor((gap % day) / hour)
    const textMinute = Math.floor((gap % hour) / minute)
    const textSecond = Math.floor((gap % minute) / second)

    if(countDate > now){
        $('#day').text(textDay)
        $('#hour').text(textHour)
        $('#minute').text(textMinute)
        $('#second').text(textSecond)
    } else {
        $('#day').text('0')
        $('#hour').text('0')
        $('#minute').text('0')
        $('#second').text('0')
    }



}

setInterval(timeCountdown, 1000)

$('#salinrek').click(function (e) { 
    e.preventDefault();
    
    
    Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
      )
});