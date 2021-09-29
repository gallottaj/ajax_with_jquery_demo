//make sure page is loaded before running scripts
$(function (){
    console.log("jquery is running. document is ready");

$("#get-songs-from-api").click(function () {
    console.log("You clicked the add song button");
    $.ajax( {
        dataType: "Json",
        url: "getsongs.php",
        success: function(songs){
            console.log("Here is the list of songs I just received");
            console.log(songs);
            $.each( songs, function(i, song) {
                var songString = "<li>Title: " + song.title + " Arist: " + song.artist + "</li>";
                console.log(songString);
                $(songString).append("#songs");
            })
        }
    })
});
});