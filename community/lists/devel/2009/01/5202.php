<?
$subject_val = "[OMPI devel] This is why we test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 09:05:16 2009" -->
<!-- isoreceived="20090115140516" -->
<!-- sent="Thu, 15 Jan 2009 09:05:09 -0500" -->
<!-- isosent="20090115140509" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] This is why we test" -->
<!-- id="BDB16843-AD64-415F-AE3C-52146AE78F4D_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] This is why we test<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 09:05:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5203.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5201.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5204.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
<li><strong>Reply:</strong> <a href="5204.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
<li><strong>Reply:</strong> <a href="5218.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, I have to throw the flag in the v1.3 release.  :-(
<br>
<p>I ran ~16k tests via MTT yesterday on the rc5 and rc6 tarballs.  I  
<br>
found the following:
<br>
<p>Found test runs: 15962
<br>
Passed: 15785 (98.89%)
<br>
Failed: 83 (0.52%)
<br>
--&gt; Openib failures: 80 (0.50%)
<br>
Skipped: 46 (0.29%)
<br>
Timedout: 48 (0.30%)
<br>
<p>The 80 openib failures are all seemingly random segv's.  I repeated a  
<br>
much smaller run this morning (about 700 runs) and still found a non- 
<br>
zero percentage of fails of the same flavor.
<br>
<p>The timeouts are a little worrysome as well.
<br>
<p>This unfortunately requires investigation.  :-(
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
<li><strong>Next message:</strong> <a href="5203.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5201.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5204.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
<li><strong>Reply:</strong> <a href="5204.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
<li><strong>Reply:</strong> <a href="5218.php">Jeff Squyres: "Re: [OMPI devel] This is why we test"</a>
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
