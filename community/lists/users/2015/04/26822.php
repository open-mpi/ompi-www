<?
$subject_val = "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 14:57:49 2015" -->
<!-- isoreceived="20150430185749" -->
<!-- sent="Thu, 30 Apr 2015 11:57:36 -0700" -->
<!-- isosent="20150430185736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4" -->
<!-- id="69C90423-5DDF-4A1D-9161-337797D66C23_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-30 14:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26823.php">Satish Balay: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26818.php">Satish Balay: "[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26826.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26826.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! The patch wasn&#226;&#128;&#153;t quite correct, but we have a good one now and it is going into 1.8.5 (just squeaked in before release)
<br>
<p><span class="quotelev1">&gt; On Apr 29, 2015, at 9:50 PM, Satish Balay &lt;balay_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; Satish&lt;openmpi-1.8.4.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26818.php">http://www.open-mpi.org/community/lists/users/2015/04/26818.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26823.php">Satish Balay: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26818.php">Satish Balay: "[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26826.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26826.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
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
