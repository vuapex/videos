<?php
function xml_to_array($xml,$main_heading = '') {
    $deXml = simplexml_load_string($xml);
    $deJson = json_encode($deXml);
    $xml_array = json_decode($deJson,TRUE);
    if (! empty($main_heading)) {
        $returned = $xml_array[$main_heading];
        return $returned;
    } else {
        return $xml_array;
    }
}
$xml = '<entry xmlns="http://www.w3.org/2005/Atom" xmlns:media="http://search.yahoo.com/mrss/" xmlns:gd="http://schemas.google.com/g/2005" xmlns:yt="http://gdata.youtube.com/schemas/2007">
   <id>http://gdata.youtube.com/feeds/api/videos/9mZb6PZM4FU</id>
   <published>2010-01-09T19:38:15.000Z</published>
   <updated>2013-07-17T06:51:32.000Z</updated>
   <category scheme="http://schemas.google.com/g/2005#kind" term="http://gdata.youtube.com/schemas/2007#video" />
   <category scheme="http://gdata.youtube.com/schemas/2007/categories.cat" term="Entertainment" label="Розваги" />
   <title type="text">Каратэ</title>
   <content type="text">Сцена из фильма "Не бойся, я с тобой"</content>
   <link rel="alternate" type="text/html" href="http://www.youtube.com/watch?v=9mZb6PZM4FU&amp;feature=youtube_gdata" />
   <link rel="http://gdata.youtube.com/schemas/2007#video.responses" type="application/atom+xml" href="http://gdata.youtube.com/feeds/api/videos/9mZb6PZM4FU/responses" />
   <link rel="http://gdata.youtube.com/schemas/2007#video.related" type="application/atom+xml" href="http://gdata.youtube.com/feeds/api/videos/9mZb6PZM4FU/related" />
   <link rel="http://gdata.youtube.com/schemas/2007#mobile" type="text/html" href="http://m.youtube.com/details?v=9mZb6PZM4FU" />
   <link rel="self" type="application/atom+xml" href="http://gdata.youtube.com/feeds/api/videos/9mZb6PZM4FU" />
   <author>
      <name>Lefan123</name>
      <uri>http://gdata.youtube.com/feeds/api/users/Lefan123</uri>
   </author>
   <gd:comments>
      <gd:feedLink rel="http://gdata.youtube.com/schemas/2007#comments" href="http://gdata.youtube.com/feeds/api/videos/9mZb6PZM4FU/comments" countHint="80" />
   </gd:comments>
   <media:group>
      <media:category label="Розваги" scheme="http://gdata.youtube.com/schemas/2007/categories.cat">Entertainment</media:category>
      <media:content url="http://www.youtube.com/v/9mZb6PZM4FU?version=3&amp;f=videos&amp;app=youtube_gdata" type="application/x-shockwave-flash" medium="video" isDefault="true" expression="full" duration="174" yt:format="5" />
      <media:content url="rtsp://r4---sn-4g57kuek.c.youtube.com/CiILENy73wIaGQlV4Ez26Ftm9hMYDSANFEgGUgZ2aWRlb3MM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="174" yt:format="1" />
      <media:content url="rtsp://r4---sn-4g57kuek.c.youtube.com/CiILENy73wIaGQlV4Ez26Ftm9hMYESARFEgGUgZ2aWRlb3MM/0/0/0/video.3gp" type="video/3gpp" medium="video" expression="full" duration="174" yt:format="6" />
      <media:description type="plain">Сцена из фильма "Не бойся, я с тобой"</media:description>
      <media:keywords />
      <media:player url="http://www.youtube.com/watch?v=9mZb6PZM4FU&amp;feature=youtube_gdata_player" />
      <media:thumbnail url="http://i1.ytimg.com/vi/9mZb6PZM4FU/0.jpg" height="360" width="480" time="00:01:27" />
      <media:thumbnail url="http://i1.ytimg.com/vi/9mZb6PZM4FU/1.jpg" height="90" width="120" time="00:00:43.500" />
      <media:thumbnail url="http://i1.ytimg.com/vi/9mZb6PZM4FU/2.jpg" height="90" width="120" time="00:01:27" />
      <media:thumbnail url="http://i1.ytimg.com/vi/9mZb6PZM4FU/3.jpg" height="90" width="120" time="00:02:10.500" />
      <media:title type="plain">Каратэ</media:title>
      <yt:duration seconds="174" />
   </media:group>
   <gd:rating average="4.934732" max="5" min="1" numRaters="429" rel="http://schemas.google.com/g/2005#overall" />
   <yt:statistics favoriteCount="0" viewCount="215169" />
</entry>';
$data_array = xml_to_array($xml);
var_dump($data_array);

?>
