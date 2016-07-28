<?
$subject_val = "Re: [OMPI devel] Totalview broken with 1.5/trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 13:35:38 2011" -->
<!-- isoreceived="20111215183538" -->
<!-- sent="Thu, 15 Dec 2011 13:35:33 -0500" -->
<!-- isosent="20111215183533" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Totalview broken with 1.5/trunk" -->
<!-- id="2EB454BD-4A3E-4174-B6B9-DD0F4E7767B2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FBCE1825-E1D1-4909-B53C-29BE890CCFDC_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Totalview broken with 1.5/trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 13:35:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 15, 2011, at 10:28 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I have had the chance now to test it with totalview and stat 1.1.0. Looks good. I pushed the fix to the trunk and it will need to be CMRed to 1.5.
</span><br>
<p>Ralph and I just talked about this on the phone some more -- I don't think <a href="https://svn.open-mpi.org/trac/ompi/changeset/25654">https://svn.open-mpi.org/trac/ompi/changeset/25654</a> was the right fix.
<br>
<p>We still need to ensure that all the symbols in orte/debugger/base/debugger_base_fns.o are pulled in from shared libraries at run-time.  Totalview may well have gotten confused if we used the actual MPIR_Breakpoint symbol to pull it in (i.e., it actually broke right there, rather than when we actually invoked MPIR_Breakpoint, later). 
<br>
<p>A better way might be to use another dummy function to pull in all the symbols from that .o file.  I.e., instead of doing foo=MPIR_Breakpoint, call some other dummy function that lives in debugger_base_fns.c.  It's only purpose in life would be to ensure that all the symbols -- including MPIR_Breakpoint -- are pulled in at run time.
<br>
<p>I'll go do that on the trunk right now...
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
<li><strong>Next message:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Previous message:</strong> <a href="10135.php">Ralph Castain: "Re: [OMPI devel] Nodes already filled when spawning"</a>
<li><strong>In reply to:</strong> <a href="10130.php">Ralph Castain: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
<li><strong>Reply:</strong> <a href="10137.php">Jeff Squyres: "Re: [OMPI devel] Totalview broken with 1.5/trunk"</a>
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
