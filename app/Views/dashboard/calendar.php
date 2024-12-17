<?= link_tag('assets/css/plugins/datepicker-bs5.min.css'); ?>
<div class="card">
    <div class="card-body ">
        <div class="widget-calender" id="pc-datepicker-6"></div>
    </div>
</div>
<?= script_tag('assets/js/plugins/datepicker-full.min.js'); ?>

<script>
    function check() {
        Swal.fire({
            title: "Good job!",
            text: "You clicked the button!",
            icon: "success"
        });
    }


    'use strict';
    document.addEventListener('DOMContentLoaded', function() {
        const datepickerElement = document.querySelector('#pc-datepicker-6');
        var events = [{
                startDate: '2024-12-01',
                endDate: '2024-12-10',
                label: 'กิจกรรมที่ 1',
                color: 'red'
            },
            {
                startDate: '2024-12-05',
                endDate: '2024-12-05',
                label: 'กิจกรรมที่ 2',
                color: 'blue'
            },
            {
                startDate: '2024-12-05',
                endDate: '2024-12-20',
                label: 'กิจกรรมที่ 3',
                color: 'green'
            }
        ];

        function isInRange(date, startDate, endDate) {
            var dateString = date.toISOString().slice(0, 10); // แปลงวันที่เป็น 'yyyy-mm-dd'
            return dateString >= startDate && dateString <= endDate;
        }

        const datepicker_inline = new Datepicker(datepickerElement, {
            language: '<?= $lang; ?>', // ใช้ภาษาจากตัวแปร PHP
            buttonClass: 'btn',
            beforeShowDay: function(date) {
                var dateString = date.toISOString().slice(0, 10); // 'yyyy-mm-dd'
                var circleHTML = ''; // ตัวแปรเก็บ HTML สำหรับวงกลม
                var hasEvent = false;

                // ตรวจสอบกิจกรรมที่ตรงกับวันที่
                for (var i = 0; i < events.length; i++) {
                    if (isInRange(date, events[i].startDate, events[i].endDate)) {
                        circleHTML += '<div class="event-circle" style="background-color:' + events[i].color + '"></div>';
                        hasEvent = true; // วันที่มีกิจกรรม
                    }
                }

                // ถ้าวันนี้มีกิจกรรม ให้เพิ่มวงกลม
                if (hasEvent) {
                    return {
                        classes: 'has-event', // ใช้ class เพื่อสไตล์เพิ่มเติม
                        content: '<span>' + date.getDate() + '</span>' + circleHTML // วงกลมที่แสดงในวันที่
                    };
                }

                // ถ้าวันนี้ไม่มีการจัดกิจกรรม ให้คืนค่า true เพื่อแสดงวัน
                return true;
            }
        });


        // ตรวจสอบว่าคุณกำลังใช้งาน Datepicker แบบที่รองรับ 'changeDate'
        if (datepickerElement) {
            // ฟังเหตุการณ์เมื่อวันที่ถูกเลือก
            datepickerElement.addEventListener('changeDate', function(event) {
                // ตรวจสอบว่า event.date หรือ event.detail.date ไม่เป็น undefined หรือ null
                const selectedDate = event.detail ? event.detail.date : event.date; // ใช้ event.detail.date หรือ event.date ขึ้นอยู่กับว่าคุณใช้ตัวไหน
                if (selectedDate) {
                    const formattedDate = selectedDate instanceof Date ? dayjs(selectedDate).format('YYYY-MM-DD') : 'Invalid Date';
                    console.log(formattedDate);
                    Swal.fire({
                        title: "Good job!",
                        text: formattedDate,
                        icon: "success"
                    });

                } else {
                    console.log('วันที่ไม่ถูกต้อง');
                }
            });
        }
    });
</script>
<style>
    /* กำหนดสไตล์การแสดงวงกลม */
    #pc-datepicker-6 .datepicker-grid .has-event .day {
        position: relative;
        padding-bottom: 20px;
        /* เพิ่มพื้นที่ด้านล่างให้วงกลมไม่ทับข้อความ */
    }


    #pc-datepicker-6 .datepicker-grid .datepicker-cell {
        position: relative;
        padding-bottom: 20px;
        /* เพิ่มพื้นที่ด้านล่างให้วงกลมไม่ทับข้อความ */
        height: 3.2rem;
    }

    #pc-datepicker-6 .datepicker-grid .datepicker-cell .event-circle {
        position: absolute;
        bottom: 5px;
        /* ให้วงกลมแสดงในแนวล่างสุดของวันที่ */
        width: 8px;
        height: 8px;
        border-radius: 50%;
        border: 1px solid #fff;
        z-index: 1;
        /* เพื่อให้วงกลมแสดงขึ้นมาเหนือวันที่ */
    }

    /* กรณีที่มีกิจกรรมหลายอันในวันเดียวกัน */
    #pc-datepicker-6 .datepicker-grid .datepicker-cell .event-circle:nth-child(1) {
        left: 10%;
        /* วงกลมแรกจะอยู่ห่างจากซ้ายสุด 10% ของความกว้าง */
    }

    #pc-datepicker-6 .datepicker-grid .datepicker-cell .event-circle:nth-child(2) {
        left: 30%;
        /* วงกลมที่สองจะอยู่ห่างจากซ้ายสุด 30% */
    }

    #pc-datepicker-6 .datepicker-grid .datepicker-cell .event-circle:nth-child(3) {
        left: 50%;
        /* วงกลมที่สามจะอยู่ห่างจากซ้ายสุด 50% */
    }

    /* เพิ่มระยะห่างสำหรับกรณีมีกิจกรรมมากกว่าหนึ่งกิจกรรม */
    #pc-datepicker-6 .datepicker-grid .datepicker-cell .event-circle:nth-child(n+4) {
        left: 70%;
        /* กำหนดตำแหน่งเริ่มต้นจาก 70% */
    }
</style>