$(document).ready(function () {
    $.getJSON("movnfo.json", function (mdata) {
        getMov(mdata);
        
    });

});

function getMov(mdata)
{
    var mo=mdata.Movies;
    var output="";
    console.log(mo);

    for(var i=0 ; i<mo.length; i++){
        output +=
        `<div class="mj"><img  src="${mo[i].img}" width="190" height="260"/><a class="mvt" href="${mo[i].hre}">${mo[i].name}</a><br></div>`;
        }
        output="MOVIES"+output;
        $("#mogrid").html(output);
}