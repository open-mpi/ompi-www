<?
$subject_val = "[OMPI devel] trunk breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 10:45:07 2010" -->
<!-- isoreceived="20100521144507" -->
<!-- sent="Fri, 21 May 2010 10:45:02 -0400" -->
<!-- isosent="20100521144502" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk breakage" -->
<!-- id="934FBB14-56FE-4ABA-BDB4-0668303B2A99_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk breakage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 10:45:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7977.php">Rayson Ho: "[OMPI devel] MPI_Pack &amp; MPI_Unpack Performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's two things broken on the trunk right now:
<br>
<p>1. I broke internal libltdl builds.  Grr.  Should have a fix shortly.
<br>
<p>2. Paffinity is broken -- if you try to run with any binding, you'll get an error.  It looks like some OPAL_SOS stuff broke it (error code checking conversion stuff).  Ralph and I talked on the phone and agreed on a fix; I'll get to it after I fix #1.
<br>
<p>Sorry folks...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7977.php">Rayson Ho: "[OMPI devel] MPI_Pack &amp; MPI_Unpack Performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
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
