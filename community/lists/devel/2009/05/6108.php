<?
$subject_val = "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 09:18:33 2009" -->
<!-- isoreceived="20090527131833" -->
<!-- sent="Wed, 27 May 2009 09:18:27 -0400" -->
<!-- isosent="20090527131827" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?" -->
<!-- id="A7E67922-1010-43FD-B411-25F58BBEE91D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A1D1AA7.5040202_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 09:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6107.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2009, at 6:49 AM, Holger Mickler wrote:
<br>
<p><span class="quotelev1">&gt; would you mind sharing this patch? We'd like to test our current VT  
</span><br>
<span class="quotelev1">&gt; version with
</span><br>
<span class="quotelev1">&gt; some MPI RMA code :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No problem-o.  I've submitted this patch upstream to Intel as well.   
<br>
Note that the patch slightly changed between 3.1 and 3.2; this is the  
<br>
3.2 patch:
<br>
<p>--- imb/src/IMB_window.c	2008-10-21 01:17:31.000000000 -0700
<br>
+++ IMB_3.2/src/IMB_window.c	2009-05-26 05:29:15.000000000 -0700
<br>
@@ -140,6 +140,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c_info-&gt;rank, 0, 1, c_info-&gt;r_data_type,  
<br>
c_info-&gt;WIN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRHAND(ierr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+          /* JMS Added a call to MPI_WIN_FENCE, per MPI-2.1 11.2.1 */
<br>
+          ierr = MPI_Win_fence(0, c_info-&gt;WIN);
<br>
+          MPI_ERRHAND(ierr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Win_free(&amp;c_info-&gt;WIN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ERRHAND(ierr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><span class="quotelev1">&gt; Does anyone know of some (small) code/benchmark that uses all  
</span><br>
<span class="quotelev1">&gt; available MPI RMA
</span><br>
<span class="quotelev1">&gt; functionality? As far as I see, IMB only uses fence and put/get/ 
</span><br>
<span class="quotelev1">&gt; accumulate. No
</span><br>
<span class="quotelev1">&gt; locks or post/wait/start/complete...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We have a few one-sided tests in the ompi-test repository (which I  
<br>
think Dresden has access to?), but I'm not 100% sure that they're  
<br>
correct...
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
<li><strong>Next message:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Previous message:</strong> <a href="6107.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="6104.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6138.php">Holger Mickler: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
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
