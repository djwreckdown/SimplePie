<?php

$data = <<<EOD
<rss version="2.0">
	<channel>
		<item>
			<title>This <![CDATA[&amp;]]>amp; this</title>
		</item>
	</channel>
</rss>
EOD;

$expected = 'This &amp;amp;amp; this';

?>