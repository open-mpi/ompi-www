<?
$subject_val = "Re: [OMPI devel] 1.2.8 testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 14:41:57 2008" -->
<!-- isoreceived="20081013184157" -->
<!-- sent="Mon, 13 Oct 2008 12:41:49 -0600" -->
<!-- isosent="20081013184149" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2.8 testing" -->
<!-- id="B45155BD-2AD2-4DD5-BB74-9425B307E915_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8808C60D-E48D-487C-9603-B972F8644E87_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 14:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>In reply to:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll test 1.2.8 on our Lobo system tomorrow (out today). Primary issue  
<br>
we are seeing there frankly is that some of the tests simply fail when  
<br>
you get up to 16ppn - in one case, it appears that the memory  
<br>
allocated during the test overflows available memory on the node when  
<br>
you get that many procs. So sorting out which tests run at 16ppn and  
<br>
which don't has become a bit of a challenge.
<br>
<p>I'll see what I can do, though.
<br>
Ralph
<br>
<p><p>On Oct 13, 2008, at 12:12 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 13, 2008, at 1:34 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bsend_init_rtoa_f
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bsend_rtoa_f
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Ibsend_rtoa_f
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bsend_init_rtoa_f
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Bsend_rtoa_f
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Ibsend_rtoa_f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These tests fail with the PGI fortran compiler because they are  
</span><br>
<span class="quotelev1">&gt; trying to allocate a 1.5MB buffer on the stack (i.e., they segv  
</span><br>
<span class="quotelev1">&gt; before the first executable line of code).  Reducing the size of the  
</span><br>
<span class="quotelev1">&gt; buffer makes the tests pass.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The size of the buffer was increased by Rolf when he made the intel  
</span><br>
<span class="quotelev1">&gt; tests able to be run with more than 64 procs.  So I'm pretty sure  
</span><br>
<span class="quotelev1">&gt; this is a new failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf and I will work out what to do about the intel test, but for  
</span><br>
<span class="quotelev1">&gt; 1.2.8, I think we're good to one.  It would be good to get one more  
</span><br>
<span class="quotelev1">&gt; confirmation from someone else, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>In reply to:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4762.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
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
