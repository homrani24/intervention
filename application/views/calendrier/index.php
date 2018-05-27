<div class="row">
    <div class="col-md-12">
    <div id="calendar"></div>
    </div>
</div>
<script src='<?php echo site_url('resources/fullcallendar/moment.min.js');?>'></script>
        <script src='<?php echo site_url('resources/fullcallendar/jquery.min.js');?>'></script>
        <script src='<?php echo site_url('resources/fullcallendar/jquery-ui.custom.min.js');?>'></script>
        <script src='<?php echo site_url('resources/fullcallendar/fullcalendar.min.js');?>'></script>
        <script>
					$('#calendar').fullCalendar({
                        header: {
                            left: 'prev,next today',
                            center: 'title',
                            right: 'month,basicWeek,basicDay'
                        },
                        defaultDate: new Date(),
                        navLinks: true, 
                        editable: true,
                        eventLimit: true, 
                        editable: true,
                        events: function(start, end, timezone, callback) {
                            $.ajax({
                                url: '<?php echo site_url('calendrier/calendar_json'); ?>',						
                                success: function(json) {
                                    var events = [];
                                    json=JSON.parse(json);
                                    $.each(json, function(arrayID,event) {
                                        events.push({
                                            title: event.title,
                                            start:  event.start // will be parsed
                                        });
                                    });
                                    callback(events);
                                }
                            });
                        }
        
                    })
        
</script>