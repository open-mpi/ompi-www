<?
$subject_val = "Re: [OMPI devel] 1.2.8 testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 14:12:35 2008" -->
<!-- isoreceived="20081013181235" -->
<!-- sent="Mon, 13 Oct 2008 14:12:29 -0400" -->
<!-- isosent="20081013181229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2.8 testing" -->
<!-- id="8808C60D-E48D-487C-9603-B972F8644E87_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CB3D8A0A-6722-4963-81E9-06DAA508777D_at_cisco.com" -->
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
<strong>Date:</strong> 2008-10-13 14:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4758.php">Jeff Squyres: "[OMPI devel] 1.2.8 testing"</a>
<li><strong>In reply to:</strong> <a href="4758.php">Jeff Squyres: "[OMPI devel] 1.2.8 testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4761.php">Ralph Castain: "Re: [OMPI devel] 1.2.8 testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 13, 2008, at 1:34 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; MPI_Bsend_init_rtoa_f
</span><br>
<span class="quotelev1">&gt; MPI_Bsend_rtoa_f
</span><br>
<span class="quotelev1">&gt; MPI_Ibsend_rtoa_f
</span><br>
<span class="quotelev1">&gt; MPI_Bsend_init_rtoa_f
</span><br>
<span class="quotelev1">&gt; MPI_Bsend_rtoa_f
</span><br>
<span class="quotelev1">&gt; MPI_Ibsend_rtoa_f
</span><br>
<p><p>These tests fail with the PGI fortran compiler because they are trying  
<br>
to allocate a 1.5MB buffer on the stack (i.e., they segv before the  
<br>
first executable line of code).  Reducing the size of the buffer makes  
<br>
the tests pass.
<br>
<p>The size of the buffer was increased by Rolf when he made the intel  
<br>
tests able to be run with more than 64 procs.  So I'm pretty sure this  
<br>
is a new failure.
<br>
<p>Rolf and I will work out what to do about the intel test, but for  
<br>
1.2.8, I think we're good to one.  It would be good to get one more  
<br>
confirmation from someone else, though.
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
<li><strong>Next message:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4758.php">Jeff Squyres: "[OMPI devel] 1.2.8 testing"</a>
<li><strong>In reply to:</strong> <a href="4758.php">Jeff Squyres: "[OMPI devel] 1.2.8 testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4760.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4761.php">Ralph Castain: "Re: [OMPI devel] 1.2.8 testing"</a>
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
