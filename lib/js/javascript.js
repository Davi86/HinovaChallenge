(function(win,doc){
    'use strict';

    let calendarEl = doc.querySelector('.calendar');
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar:{
            start: 'prev,next,today', // will normally be on the left. if RTL, will be on the right
            center: 'title',
            end: 'dayGridMonth, timeGridWeek, timeGridDay' // will normally be on the right. if RTL, will be on the left
          },
          buttonText:{
            today:    'hoje',
            month:    'mês',
            week:     'semana',
            day:      'dia'
          },
        locale: 'pt-br',
        dateClick: function(info) {
            alert('Clicked on: ' + info.dateStr);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('Current view: ' + info.view.type);
            // change the day's background color just for fun
            info.dayEl.style.backgroundColor = 'red';
          },

          events: [
            {
              title: 'The Title', // a property!
              start: '2022-09-01', // a property!
              end: '2022-09-02' // a property! ** see important note below about 'end' **
            }
          ],

          eventClick: function(info) {
            alert('Event: ' + info.event.title);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('View: ' + info.view.type);
        
            // change the border color just for fun
            info.el.style.borderColor = 'red';
          }



      });

      calendar.render();

})(window,document);