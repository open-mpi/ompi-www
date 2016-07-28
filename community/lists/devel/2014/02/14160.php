<?
$subject_val = "[OMPI devel] CRS/CRIU: add code to actually checkpoint a process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 14:39:24 2014" -->
<!-- isoreceived="20140217193924" -->
<!-- sent="Mon, 17 Feb 2014 20:39:23 +0100" -->
<!-- isosent="20140217193923" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] CRS/CRIU: add code to actually checkpoint a process" -->
<!-- id="20140217193923.GR24474_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] CRS/CRIU: add code to actually checkpoint a process<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-17 14:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have prepared a patch I would like to commit which adds to code to
<br>
actually checkpoint a process. Thanks for the pointers about the string
<br>
variables I tried to do implement it correctly.
<br>
<p>CRIU currently has problems with the new OOB usock but I will contact
<br>
the CRIU developers about this error. Using tcp, checkpointing works.
<br>
<p>CRIU also has problems with --np &gt; 1, but I am sure this can also be
<br>
resolved.
<br>
<p>The patch is at:
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=89c9c27c87598706e8f798f84fe9520ee5884492</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Previous message:</strong> <a href="14159.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] Fix typo defining macro _WORD_MASK_"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<li><strong>Reply:</strong> <a href="14161.php">Ralph Castain: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
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
