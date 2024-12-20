function initializeDataTable(tableId, lang_system = 'en') {
    // โหลด DataTables CSS แบบไดนามิก
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = 'https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css';
    document.head.appendChild(link);

    // โหลด DataTables JS แบบไดนามิก
    const script = document.createElement('script');
    script.src = 'https://cdn.datatables.net/2.1.8/js/dataTables.js';
    document.head.appendChild(script);

    // เมื่อ DataTables JS โหลดเสร็จแล้ว
    script.onload = function() {
        // กำหนด URL สำหรับภาษา
        let lang_url = '';

        switch (lang_system) {
            case 'th':
                lang_url = 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/th.json';
                break;
            case 'en':
                lang_url = 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/en-GB.json';
                break;
            default:
                lang_url = 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/zh.json';
        }

        // รอจนกว่า DOM จะโหลดเสร็จ แล้วทำการตั้งค่า DataTable
        document.addEventListener("DOMContentLoaded", function() {
            var dt = new DataTable(`#${tableId}`, {
                language: {
                    url: lang_url,
                },
            });
        });

        // แทรก CSS สำหรับการปรับเลย์เอาต์
        const style = document.createElement('style');
        style.innerHTML = `
            .dt-layout-row .dt-layout-start {
                padding-left: 20px;
            }
            .dt-layout-row .dt-layout-end {
                padding-right: 20px;
            }
        `;
        document.head.appendChild(style);
    };
}