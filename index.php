

<?php
$url = "https://tylandingpages.com/作品暫放區2/新中華版需要多一個fetch連線版/hans/index.html"; // 替換成您要訪問的URL

$ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
// curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; YourBot/1.0; +http://yourwebsite.com/bot.html)');

$content = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpcode >= 200 && $httpcode < 300) {
  echo $content;
} else {
  echo "無法獲取內容，HTTP狀態碼: " . $httpcode;
}
?>
