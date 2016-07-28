<?
$subject_val = "[OMPI devel] [patch] add explicit IT instructions in ARM assembly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 12:52:04 2011" -->
<!-- isoreceived="20110802165204" -->
<!-- sent="Tue, 02 Aug 2011 17:51:51 +0100" -->
<!-- isosent="20110802165151" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] add explicit IT instructions in ARM assembly" -->
<!-- id="4E382B27.3020502_at_arm.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] add explicit IT instructions in ARM assembly<br>
<strong>From:</strong> Leif Lindholm (<em>leif.lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 12:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9587.php">Jeff Squyres: "Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>Previous message:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9587.php">Jeff Squyres: "Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>Reply:</strong> <a href="9587.php">Jeff Squyres: "Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the Linaro 11.05 Linux metadistribution, and hence most likely in 
<br>
Ubuntu 11.04, the GNU assembler no longer defaults to 
<br>
-mimplicit-it=thumb, causing the build to fail when compiling on this 
<br>
platform.
<br>
<p>The attached trivial patch adds explicit IT instructions where required, 
<br>
permitting a successful build. Patch created against r24936, but 
<br>
validated also against subsequent ones up to and including r24961.
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<p>p.s.
<br>
In case someone is curious about what I'm talking about above, there is 
<br>
a pretty decent description of the IT instruction here:
<br>
<a href="http://infocenter.arm.com/help/topic/com.arm.doc.dui0489d/Cjabicci.html">http://infocenter.arm.com/help/topic/com.arm.doc.dui0489d/Cjabicci.html</a>
<br>

<br><p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9586/iteq.diff">iteq.diff</a>
</ul>
<!-- attachment="iteq.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9587.php">Jeff Squyres: "Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>Previous message:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9587.php">Jeff Squyres: "Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
<li><strong>Reply:</strong> <a href="9587.php">Jeff Squyres: "Re: [OMPI devel] [patch] add explicit IT instructions in ARM assembly"</a>
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
