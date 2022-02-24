<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "unicorn";

    $get_track_id1 = "";
    $get_track_id2 = "";
    $get_track_id3 = "";
    $get_track_id4 = "";
    $get_track_id5 = "";

    $get_track_name1 = "";
    $get_track_name2 = "";
    $get_track_name3 = "";
    $get_track_name4 = "";
    $get_track_name5 = "";

    $get_track_album1 = "";
    $get_track_album2 = "";
    $get_track_album3 = "";
    $get_track_album4 = "";
    $get_track_album5 = "";

    $get_track_artist1 = "";
    $get_track_artist2 = "";
    $get_track_artist3 = "";
    $get_track_artist4 = "";
    $get_track_artist5 = "";

    $get_track_genre1 = "";
    $get_track_genre2 = "";
    $get_track_genre3 = "";
    $get_track_genre4 = "";
    $get_track_genre5 = "";

    $get_track_mediatype1 = "";
    $get_track_mediatype2 = "";
    $get_track_mediatype3 = "";
    $get_track_mediatype4 = "";
    $get_track_mediatype5 = "";

    $get_track_milliseconds1 = "";
    $get_track_milliseconds2 = "";
    $get_track_milliseconds3 = "";
    $get_track_milliseconds4 = "";
    $get_track_milliseconds5 = "";

    $get_track_Bytes1 = "";
    $get_track_Bytes2 = "";
    $get_track_Bytes3 = "";
    $get_track_Bytes4 = "";
    $get_track_Bytes5 = "";

    $get_track_UnitPrice1 = "";
    $get_track_UnitPrice2 = "";
    $get_track_UnitPrice3 = "";
    $get_track_UnitPrice4 = "";
    $get_track_UnitPrice5 = "";

    try {
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if (!$conn) 
        {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "
            SELECT
                track.TrackId AS trackId,
                track.Name AS trackName,
                album.Title AS albumTitle,
                artist.Name AS artistName,
                genre.Name AS genreName,
                mediatype.Name AS mediatypeName,
                FORMAT(track.Milliseconds / 60000, 2) AS trackMilliseconds,
                FORMAT((track.Bytes / 1000000),2) * 0.9537 AS trackBytes,
                track.UnitPrice AS trackUnitPrice
            FROM
                track
            LEFT JOIN 
                album ON album.AlbumId = track.AlbumId
            LEFT JOIN 
                artist ON artist.ArtistId = album.ArtistId
            LEFT JOIN 
                mediatype ON mediatype.MediaTypeId = track.MediaTypeId
            LEFT JOIN 
                genre ON genre.GenreId = track.GenreId
            WHERE
                track.TrackId IN (6, 7, 8, 9, 10)
            ORDER BY
                track.TrackId ASC;
        ";

        $result = $conn->query($sql);

        $stack_track_id = "";
        $stack_track_name = "";
        $stack_track_album = "";
        $stack_track_artist = "";
        $stack_track_genre = "";
        $stack_track_mediatype = "";
        $stack_track_milliseconds = "";
        $stack_track_bytes = "";
        $stack_track_unitPrice = "";
        
        $array_track_id = array();
        $array_track_name = array();
        $array_track_album = array();
        $array_track_artist = array();
        $array_track_genre = array();
        $array_track_mediatype = array();
        $array_track_milliseconds = array();
        $array_track_bytes = array();
        $array_track_unitPrice = array();

        if ($result->num_rows > 0) 
        {
           while($row = $result->fetch_assoc()) 
           {
               $stack_track_id .= $row["trackId"] . ", ";
               $stack_track_name .= $row["trackName"] . ", ";
               $stack_track_album .= $row["albumTitle"] . ", ";
               $stack_track_artist .= $row["artistName"] . ", ";
               $stack_track_genre .= $row["genreName"] . ", ";
               $stack_track_mediatype .= $row["mediatypeName"] . ", ";  
               $stack_track_milliseconds .= $row["trackMilliseconds"] . ", ";
               $stack_track_bytes .= $row["trackBytes"] . ", ";  
               $stack_track_unitPrice .= $row["trackUnitPrice"] . ", "; 
           }
        }
        else
        {
            echo "0 results";
        }

        array_push($array_track_id, explode(',', $stack_track_id, 5));
        array_push($array_track_name, explode(',', $stack_track_name, 5));
        array_push($array_track_album, explode(',', $stack_track_album, 5));
        array_push($array_track_artist, explode(',', $stack_track_artist, 5));
        array_push($array_track_genre, explode(',', $stack_track_genre, 5));
        array_push($array_track_mediatype, explode(',', $stack_track_mediatype, 5));
        array_push($array_track_milliseconds, explode(',', $stack_track_milliseconds, 5));
        array_push($array_track_bytes, explode(',', $stack_track_bytes, 5));
        array_push($array_track_unitPrice, explode(',', $stack_track_unitPrice, 5));

        $get_track_id1 = $array_track_id[0][0];
        $get_track_id2 = $array_track_id[0][1];
        $get_track_id3 = $array_track_id[0][2];
        $get_track_id4 = $array_track_id[0][3];
        $get_track_id5 = $array_track_id[0][4];

        $get_track_name1 = $array_track_name[0][0];
        $get_track_name2 = $array_track_name[0][1];
        $get_track_name3 = $array_track_name[0][2];
        $get_track_name4 = $array_track_name[0][3];
        $get_track_name5 = $array_track_name[0][4];

        $get_track_album1 = $array_track_album[0][0];
        $get_track_album2 = $array_track_album[0][1];
        $get_track_album3 = $array_track_album[0][2];
        $get_track_album4 = $array_track_album[0][3];
        $get_track_album5 = $array_track_album[0][4];

        $get_track_artist1 = $array_track_artist[0][0];
        $get_track_artist2 = $array_track_artist[0][1];
        $get_track_artist3 = $array_track_artist[0][2];
        $get_track_artist4 = $array_track_artist[0][3];
        $get_track_artist5 = $array_track_artist[0][4];

        $get_track_genre1 = $array_track_genre[0][0];
        $get_track_genre2 = $array_track_genre[0][1];
        $get_track_genre3 = $array_track_genre[0][2];
        $get_track_genre4 = $array_track_genre[0][3];
        $get_track_genre5 = $array_track_genre[0][4];

        $get_track_milliseconds1 = $array_track_milliseconds[0][0];
        $get_track_milliseconds2 = $array_track_milliseconds[0][1];
        $get_track_milliseconds3 = $array_track_milliseconds[0][2];
        $get_track_milliseconds4 = $array_track_milliseconds[0][3];
        $get_track_milliseconds5 = $array_track_milliseconds[0][4];

        $get_track_btyes1 = $array_track_bytes[0][0];
        $get_track_btyes2 = $array_track_bytes[0][1];
        $get_track_btyes3 = $array_track_bytes[0][2];
        $get_track_btyes4 = $array_track_bytes[0][3];
        $get_track_btyes5 = $array_track_bytes[0][4];

        $get_track_unitPrice1 = $array_track_unitPrice[0][0];
        $get_track_unitPrice2 = $array_track_unitPrice[0][1];
        $get_track_unitPrice3 = $array_track_unitPrice[0][2];
        $get_track_unitPrice4 = $array_track_unitPrice[0][3];
        $get_track_unitPrice5 = $array_track_unitPrice[0][4];
        
        $conn->close();
    } 
    catch (Exception $e) 
    {
        // Show Message Error $e.    
    }
?>