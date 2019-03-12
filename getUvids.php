<?php
	set_time_limit(150);
	
	$keyword = "Tu kuja man kuja";
	$keyword = urlencode($keyword);
	$maxVids = 2;
	
	$apikey = 'AIzaSyC2jNyPqfI4zNgxexaeCTUJ7qmloHbmfQU'; 
	$googleApiUrl = file_get_contents('https://www.googleapis.com/youtube/v3/search?part=snippet&q='.$keyword.'&maxResults='.$maxVids.'&key='.$apikey);
	$jsonData = json_decode($googleApiUrl, true);
	
	$videoIDs = null;
	
	foreach($jsonData['items'] as $vidItem)
	{
		$videoIDs .= 'https://www.youtube.com/watch?v='.$vidItem['id']['videoId']."\n";
	}
	
	
	function Qualitys($iTag){

		switch ($iTag) {
			case 5:
				$Message = 'Flv (400x240)';
				break;
			
			case 6:
				$Message = 'Flv (450x270)';
				break;
			
			case 13:
				$Message = '3gp';
				break;
			
			case 17:
				$Message = '3gp (176x144)';
				break;
			
			case 18:
				$Message = 'Mp4 (640x360)';
				break;
			
			case 22:
				$Message = 'HD - Mp4 (1280x720)';
				break;
			
			case 34:
				$Message = '360p Flv - 640x360';
				break;
			
			case 35:
				$Message = '480p Flv - 854x480';
				break;
			
			case 36:
				$Message = '3gp - 320x240';
				break;
			
			case 37:
				$Message = 'HD 1080p - Mp4 (1920x1080)';
				break;
			
			case 38:
				$Message = 'HD 3072p - Mp4 (4096x3072)';
				break;
			
			case 43:
				$Message = '360p - Webm (640x360)';
				break;
			
			case 44:
				$Message = '480p - Webm (854x480)';
				break;
			
			case 45:
				$Message = '720p - Webm (1280x720)';
				break;
			
			case 46:
				$Message = '1080p - Webm (1920x1080)';
				break;
			
			default:
				$Message = 'Bulunamadı';
				break;

		}

		return $Message;

	}

	function GetVideoSourceUrl($Baglanti){

		$YtVideoID = explode('v=', $Baglanti);
		$YtVideoID = end($YtVideoID);
		$YtVideoID = substr($YtVideoID, 0, 11);

		$Links = array();
		$Title = '';
		$Source = file_get_contents('http://www.youtube.com/get_video_info?&video_id='.$YtVideoID.'&hl=tr');
		parse_str($Source,$Results);
		$Title = $Results['title'];
		$Results['url_encoded_fmt_stream_map'] = isset($Results['url_encoded_fmt_stream_map'])?$Results['url_encoded_fmt_stream_map']:false;
		
		if($Results['url_encoded_fmt_stream_map']){

			$UrlInformation = explode(',',$Results['url_encoded_fmt_stream_map']);
			
			$linkCounter = 0;
			foreach($UrlInformation as $Bilgi){

				parse_str($Bilgi,$VideoInformation);

				$VideoUrl = urldecode($VideoInformation['url']);
				//Format info Qualitys($VideoInformation['itag']);
				$DLinks[] = $VideoUrl;
			}

		}

		return array($Title, $DLinks);

	}
	
		 $ProfilBaglantilari = trim($videoIDs);
		 $ProfilBaglantilari = explode("\n", $ProfilBaglantilari);
		 $ProfilBaglantilari = array_map('trim', $ProfilBaglantilari);
		foreach ($ProfilBaglantilari as $Key => $Baglanti) {

			$Results = GetVideoSourceUrl($Baglanti);
			$Title = $Results[0];
			$DLinks = $Results[1];
			
			$counter = 0;
			foreach ($DLinks as $dkey => $dSonuc) {

				if($counter === 0)
				{
					$dSourceUrl = $dSonuc;
				}
				
				$counter = 1;
			}
			
			@$Mp4_URL = file_get_contents($dSourceUrl);
			if($Mp4_URL)
			{
?>
			
	<video width="320" height="240" controls>
	  <source src="<?php echo $dSourceUrl; ?>" type="video/mp4">
	Your browser does not support the video tag.
	</video>
<?php
			}
		}
		
?>