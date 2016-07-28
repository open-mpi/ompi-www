<?
$subject_val = "[OMPI devel] migrating to newer AC/AM/LT";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 15:38:00 2008" -->
<!-- isoreceived="20080507193800" -->
<!-- sent="Wed, 7 May 2008 15:37:48 -0400" -->
<!-- isosent="20080507193748" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] migrating to newer AC/AM/LT" -->
<!-- id="D0AE1188-A31F-4098-929A-88A755D84178_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] migrating to newer AC/AM/LT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 15:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3854.php">Richard Graham: "[OMPI devel] Process &quot;layout&quot;"</a>
<li><strong>Previous message:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI -- a little motivation for developers to upgrade your local copies  
<br>
of AC/AM/LT, I finally upgraded my Cisco development cluster today to  
<br>
the latest of everything and ran a quick configure benchmark:
<br>
<p>- AC 2.61, AM 1.10, LT 2.2.2:   2m38s
<br>
- AC 2.62, AM 1.10.1, LT 2.2.4: 2m10s
<br>
<p>The upgrade of AC to 2.62 (with the new gm4) seemed to deliver the  
<br>
performance increases that Rolf W. mentioned a little while ago.  Just  
<br>
watching config.status run, it was fairly obvious that 2.62's version  
<br>
was faster. Woo hoo!
<br>
<p>The above tests were on a local disk; if you're configuring on a  
<br>
network filesystem, I would expect the speedup to be larger.
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
<li><strong>Next message:</strong> <a href="3854.php">Richard Graham: "[OMPI devel] Process &quot;layout&quot;"</a>
<li><strong>Previous message:</strong> <a href="3852.php">Ralph Castain: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
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
