var clndr = {};

$( function() { 
    $(document).ready(function(){
       $.getJSON("js/ctsEvents.json", function(data){
           var events = [];
           $.each(data.jsonevents, function(index, value){
              events.push(value); 
           });
         clndr = $('#cts-clndr').clndr({
            template: $('#cts-clndr-template').html(),
            daysOfTheWeek: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            events: events,
            lengthOfTime: {
                // Set to an integer if you want to render one or more months, otherwise
                // leave this null
                months: null,

                // Set to an integer if you want to render one or more days, otherwise
                // leave this null. Setting this to 14 would render a 2-week calendar.
                days: null,

                // This is the amount of months or days that will move forward/back when
                // paging the calendar. With days=14 and interval=7, you would have a
                // 2-week calendar that pages forward and backward 1 week at a time.
                interval: 1
            },
            clickEvents: {
                click: function(target) {
                    if(target.events.length){
                        var selectedDate = target.date['_i'];
                        console.log(selectedDate);
                        var eventsContainer = $('#cts-clndr').find('.event-card-modal.' + selectedDate);

                        eventsContainer.show();

                        $('#cts-clndr').find('.closeModalButton').click(function() {
                         eventsContainer.hide();
                    });
                        // Closes the event card modal when you click outside or when you press the escape key
                        $(document).mouseup(function(e){
                            var container = $(".event-card-modal");
                            if(container.is(e.target) && container.has(e.target).length === 0){
                                container.hide();
                            }
                        });
                        
                        $(document).on('keydown', function( e ){
                            var container = $(".event-card-modal"); 
                            if( e.keyCode === 27){ // escape key
                                container.hide();
                            }
                        });
                    }
                }
            },
            forceSixRows: false,
            showAdjacentMonths: false
          });
       }) ;
    });

});


