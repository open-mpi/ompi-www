<?
$subject_val = "[MTT devel] server side Mellanox patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 17:27:03 2008" -->
<!-- isoreceived="20080110222703" -->
<!-- sent="Thu, 10 Jan 2008 17:26:43 -0500" -->
<!-- isosent="20080110222643" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] server side Mellanox patch" -->
<!-- id="0A321F47-E147-46C2-8A3A-AD16F03770CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [MTT devel] server side Mellanox patch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 17:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0220.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0218.php">Jeff Squyres: "Re: [MTT devel] Oleg's mtt client changes."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha sent a 2nd file with their server-side changes.  It looks like  
<br>
there is only one substantive change in report.inc:
<br>
<p>-    do_pg_query(&quot;set sort_mem = '256MB';&quot;);
<br>
+    do_pg_query(&quot;set sort_mem = 256;&quot;);
<br>
<p>Pasha -- what was this change for?  Does a knob for this change need  
<br>
to be added to config.inc?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0220.php">Ethan Mallove: "Re: [MTT devel] MTT Visualization"</a>
<li><strong>Previous message:</strong> <a href="0218.php">Jeff Squyres: "Re: [MTT devel] Oleg's mtt client changes."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
