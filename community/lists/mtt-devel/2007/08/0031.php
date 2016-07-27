<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 21:47:29 2007" -->
<!-- isoreceived="20070828014729" -->
<!-- sent="Mon, 27 Aug 2007 21:46:34 -0400" -->
<!-- isosent="20070828014634" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] Broken &amp;amp;find()?" -->
<!-- id="E6A339BC-6260-4EFF-9A07-56EE7EF6F3B2_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 21:46:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0032.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0030.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan --
<br>
<p>You said to me in IM:
<br>
<p>&quot;i'm getting stuck trying to use MTT::Functions::find. it's returning
<br>
EVERY file under the directory i give it.&quot;
<br>
<p>Can you cite a specific example?  Is this on the jms-new-parser branch?
<br>
<p>Keep in mind that you need to supply a *perl* regexp (not a shell
<br>
regexp).  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argv = -i &amp;find(&quot;coll_.+.ski&quot;, &quot;input_files&quot;)
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
<li><strong>Next message:</strong> <a href="0032.php">Ethan Mallove: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
<li><strong>Previous message:</strong> <a href="0030.php">Jeff Squyres: "Re: [MTT devel] jms-new-parser / submit.php error"</a>
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
