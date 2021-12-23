<div class="row">
    <div class="col- mb-3 mt-3">
        <div id='calendar'></div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const eventsData = new XMLHttpRequest();
        eventsData.open('GET', 'http://localhost:8000/api/events/all');
        eventsData.send();
        eventsData.onreadystatechange = () => {
            if(eventsData.readyState == 4) {
                if(eventsData.status == 200) {
                    const eventClassroom = JSON.parse(eventsData.responseText);
                    evtData = [];
                    eventClassroom.forEach((v,i) => {
                        evtData = [...evtData, {"title": v['titulo'],"start": v['start_time'],"end": v['end_time']}]
                    })

                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'timeGridWeek',
                        titleFormat: {
                            year: 'numeric',
                            month: 'long'
                        },
                        events: evtData,
                        eventColor: '#42ad3d',
                        link: 'http://localhost:8000/dashboard'
                    });

                    calendar.render();
                }
            }
        };
    });
</script>
