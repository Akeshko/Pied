$(document).ready(function () {



    $.getJSON("infoa.json", function (jdata) {
        
        function getName(id) {
            var acto = jdata.Actors;
            var nameac = acto[id].name;
            console.log(id);
            console.log(nameac);
            return nameac;
        }

        function getBorn(id) {
            var acto = jdata.Actors;
            var bornac = acto[id].born;
            console.log(id);
            console.log(bornac);
            return bornac;
        }

        function getNation(id) {
            var acto = jdata.Actors;
            var nationac = acto[id].nation;
            console.log(id);
            console.log(nationac);
            return nationac;
        }

        function getJob(id) {
            var acto = jdata.Actors;
            var jobac = acto[id].job;
            console.log(id);
            console.log(jobac);
            return jobac;
        }

        function getImg(id) {
            var acto = jdata.Actors;
            var imac = acto[id].img;
            console.log(id);
            console.log(imac);
            return imac;
        }

        $('[data-toggle="popover"]').popover({
            placement: 'top',
            trigger: 'hover',
            html: true,
            content: function () {
                return '<div class="popstuff"><div><img src="' + getImg($(this).attr('id')) + '" width="120" height="150"/></div><div style="color:white" id="so">Name:' + getName($(this).attr('id'))+ ' <br> Born:'+ getBorn($(this).attr('id'))+'<br> Nationality:'+ getNation($(this).attr('id'))+'<br> Profession:'+ getJob($(this).attr('id'))+'</div></div>';
            }
        });
    });
});