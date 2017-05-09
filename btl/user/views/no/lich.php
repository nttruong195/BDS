<?php 

require_once('./user/views/side_bar.php');

?>
<div id="page_content">
        <div id="page_content_inner">

            <h3 class="heading_b uk-margin-bottom">Calendar</h3>

            <div class="md-card">
                <div class="md-card-content">
                    <div id="calendar_selectable"></div>
                </div>
            </div>

        </div>
    </div>

    <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- momentJS date library -->
    <script src="public/js/admin/moment.min.js"></script>

    <!-- common functions -->
    <script src="public/js/admin/common.min.js"></script>
    <!-- uikit functions -->
    <script src="public/js/admin/uikit_custom.min.js"></script>
    <!-- altair common functions/helpers -->
    <script src="public/js/admin/altair_admin_common.min.js"></script>
    <!-- page specific plugins -->
    <!-- fullcalendar -->
    <script src="public/js/admin/fullcalendar.min.js"></script>

    <!--  calendar functions --> 
    <!-- copy nguyên file dưới vào đây rồi dùng php để in phần event -->
    <!-- <script src="assets/js/pages/plugins_fullcalendar.js"></script> -->
    <script>
        $(function() {
    altair_fullcalendar.calendar_selectable()
}), altair_fullcalendar = {
    calendar_selectable: function() {
        var t = $("#calendar_selectable"),
            a = $('<div id="calendar_colors_wrapper"></div>'),
            e = altair_helpers.color_picker(a).prop("outerHTML");
        t.length && t.fullCalendar({
            header: {
                left: "title today",
                center: "",
                right: "month,agendaWeek,agendaDay prev,next"
            },
            buttonIcons: {
                prev: "md-left-single-arrow",
                next: "md-right-single-arrow",
                prevYear: "md-left-double-arrow",
                nextYear: "md-right-double-arrow"
            },
            buttonText: {
                today: " ",
                month: " ",
                week: " ",
                day: " "
            },
            aspectRatio: 2.1,
            defaultDate: moment(),
            selectable: !0,
            selectHelper: !0,
            select: function(a, r) {
                UIkit.modal.prompt('<h3 class="heading_b uk-margin-medium-bottom">New Event</h3><div class="uk-margin-medium-bottom" id="calendar_colors">Event Color:' + e + "</div>Event Title:", "", function(e) {
                    if ("" !== $.trim(e)) {
                        var o, d = $("#calendar_colors_wrapper").find("input").val();
                        o = {
                            title: e,
                            start: a,
                            end: r,
                            color: d ? d : ""
                        }, t.fullCalendar("renderEvent", o, !0), t.fullCalendar("unselect")
                    }
                }, {
                    labels: {
                        Ok: "Add Event"
                    }
                })
            },
            editable: !0,
            eventLimit: !0,
            timeFormat: "(HH)(:mm)",
            events: [{ //lùi 1 ngày so với ngày thực
                title: "Hợp đồng 1",
                start: moment().startOf("month").add(25, "days").format("YYYY-MM-DD")
            },{ //lùi 1 ngày so với ngày thực
                title: "Hợp đồng 12",
                start: moment().startOf("month").add(1, "days").format("YYYY-MM-DD")
            },{ //lùi 1 ngày so với ngày thực
                title: "Hợp đồng 5",
                start: moment().startOf("month").add(14, "days").format("YYYY-MM-DD")
            },{ //lùi 1 ngày so với ngày thực
                title: "Hợp đồng 21",
                start: moment().startOf("month").add(9, "days").format("YYYY-MM-DD")
            },{ //lùi 1 ngày so với ngày thực
                title: "Hợp đồng 4",
                start: moment().startOf("month").add(9, "days").format("YYYY-MM-DD")
            }
            ]
        })
    }
};
    </script>
    <!-- enable hires images -->
    <script>
        $(function() {
            altair_helpers.retina_images();
        });
    </script>

</body>
</html>