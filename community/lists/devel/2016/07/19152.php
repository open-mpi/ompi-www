<?
$subject_val = "[OMPI devel] MTT: make hung threading tests be reported as failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 14:10:33 2016" -->
<!-- isoreceived="20160705181033" -->
<!-- sent="Tue, 5 Jul 2016 18:10:31 +0000" -->
<!-- isosent="20160705181031" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT: make hung threading tests be reported as failures" -->
<!-- id="9397FE46-AF13-4A36-8127-C2447375DACB_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] MTT: make hung threading tests be reported as failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-05 14:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19153.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per request from last week's teleconf, I've converted Cisco's running of the thread tests in MTT to treat hangs as failures, just to make them show up a little better in the MTT results.
<br>
<p>If you want to do the same, update to the latest MTT and set the following variable in your thread tests test run sections:
<br>
<p><pre>
----
treat_timeouts_as_fail = 1
----
Enjoy.
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19153.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19151.php">Nathan Hjelm: "Re: [OMPI devel] BML/R2 error"</a>
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
