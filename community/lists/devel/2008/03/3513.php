<?
$subject_val = "[OMPI devel] iof/libevent failures?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 08:49:20 2008" -->
<!-- isoreceived="20080325124920" -->
<!-- sent="Tue, 25 Mar 2008 08:49:17 -0400" -->
<!-- isosent="20080325124917" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] iof/libevent failures?" -->
<!-- id="47E8F4CD.8080508_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] iof/libevent failures?<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 08:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>For the last couple nights ALL of our mtt runs have been failing 
<br>
(although the failure is masked because mpirun is returning the wrong 
<br>
error code) with:
<br>
<p>[odin005.cs.indiana.edu:28167] [[46567,0],0] ORTE_ERROR_LOG: Error in file
<br>
base/plm_base_launch_support.c at line 161
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered
<br>
an error.
<br>
More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
<p>This line is where we try to do an IOF push. It looks like it was broken 
<br>
somewhere between r17922 and r17926, which includes the libevent merge.
<br>
<p>I cannot replicate this with a debug build, so I thought I would throw 
<br>
this out before I look any further.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3514.php">Jeff Squyres: "Re: [OMPI devel] iof/libevent failures?"</a>
<li><strong>Reply:</strong> <a href="3519.php">Ralph H Castain: "Re: [OMPI devel] iof/libevent failures?"</a>
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
