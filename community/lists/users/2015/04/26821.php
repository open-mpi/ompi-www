<?
$subject_val = "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:55:57 2015" -->
<!-- isoreceived="20150430185557" -->
<!-- sent="Thu, 30 Apr 2015 18:55:54 +0000" -->
<!-- isosent="20150430185554" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4" -->
<!-- id="269EFB44-C713-45DD-B323-D1943B033023_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LFD.2.11.1504292259460.5873_at_asterix" -->
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
<strong>Subject:</strong> Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-30 14:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26820.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26818.php">Satish Balay: "[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
<p>George reviewed your patch and adjusted it a bit.  We applied it to master and it's pending to the release series (v1.8.x).
<br>
<p>Would you mind testing a nightly master snapshot?  It should be in tonight's build:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 30, 2015, at 12:50 AM, Satish Balay &lt;balay_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've had issues (memory errors) with OpenMPI - and code in PETSc
</span><br>
<span class="quotelev1">&gt; library that uses MPI_Win_fence().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vagrind shows memory corruption deep inside OpenMPI function stack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm attaching a potential patch that appears to fix this issue for us.
</span><br>
<span class="quotelev1">&gt; [the corresponding valgrind trace is listed in the patch header]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps there is a more appropriate fix for this memory corruption. Could
</span><br>
<span class="quotelev1">&gt; you check on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Sorry I don't have a pure MPI test code to demonstrate this error -
</span><br>
<span class="quotelev1">&gt; but a PETSc test example code consistantly reproduces this issue]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Satish&lt;openmpi-1.8.4.patch&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26820.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<li><strong>In reply to:</strong> <a href="26818.php">Satish Balay: "[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
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
