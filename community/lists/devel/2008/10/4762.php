<?
$subject_val = "Re: [OMPI devel] 1.2.8 testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 14:47:12 2008" -->
<!-- isoreceived="20081013184712" -->
<!-- sent="Mon, 13 Oct 2008 14:47:06 -0400" -->
<!-- isosent="20081013184706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2.8 testing" -->
<!-- id="5B4985F7-76ED-42F0-B4C3-830E8A9E770F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B45155BD-2AD2-4DD5-BB74-9425B307E915_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.2.8 testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 14:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4763.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4761.php">Ralph Castain: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>In reply to:</strong> <a href="4761.php">Ralph Castain: "Re: [OMPI devel] 1.2.8 testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
K, thanks.  I don't think I've run the tests up to 16ppn to be able to  
<br>
help out here, sorry...
<br>
<p>On Oct 13, 2008, at 2:41 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'll test 1.2.8 on our Lobo system tomorrow (out today). Primary issue
</span><br>
<span class="quotelev1">&gt; we are seeing there frankly is that some of the tests simply fail when
</span><br>
<span class="quotelev1">&gt; you get up to 16ppn - in one case, it appears that the memory
</span><br>
<span class="quotelev1">&gt; allocated during the test overflows available memory on the node when
</span><br>
<span class="quotelev1">&gt; you get that many procs. So sorting out which tests run at 16ppn and
</span><br>
<span class="quotelev1">&gt; which don't has become a bit of a challenge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll see what I can do, though.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 13, 2008, at 12:12 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 13, 2008, at 1:34 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bsend_init_rtoa_f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bsend_rtoa_f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Ibsend_rtoa_f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bsend_init_rtoa_f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bsend_rtoa_f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Ibsend_rtoa_f
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These tests fail with the PGI fortran compiler because they are
</span><br>
<span class="quotelev2">&gt;&gt; trying to allocate a 1.5MB buffer on the stack (i.e., they segv
</span><br>
<span class="quotelev2">&gt;&gt; before the first executable line of code).  Reducing the size of the
</span><br>
<span class="quotelev2">&gt;&gt; buffer makes the tests pass.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The size of the buffer was increased by Rolf when he made the intel
</span><br>
<span class="quotelev2">&gt;&gt; tests able to be run with more than 64 procs.  So I'm pretty sure
</span><br>
<span class="quotelev2">&gt;&gt; this is a new failure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf and I will work out what to do about the intel test, but for
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.8, I think we're good to one.  It would be good to get one more
</span><br>
<span class="quotelev2">&gt;&gt; confirmation from someone else, though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4763.php">Stephan Kramer: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4761.php">Ralph Castain: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>In reply to:</strong> <a href="4761.php">Ralph Castain: "Re: [OMPI devel] 1.2.8 testing"</a>
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
