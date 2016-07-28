<?
$subject_val = "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 15:42:15 2015" -->
<!-- isoreceived="20150430194215" -->
<!-- sent="Thu, 30 Apr 2015 19:41:50 +0000" -->
<!-- isosent="20150430194150" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4" -->
<!-- id="AE1BF1A3-88F1-4D65-B256-D4287FC6D733_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="69C90423-5DDF-4A1D-9161-337797D66C23_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-04-30 15:41:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26827.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26825.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per Satish's last mail (<a href="http://www.open-mpi.org/community/lists/users/2015/04/26823.php">http://www.open-mpi.org/community/lists/users/2015/04/26823.php</a>), George is looking at a followup issue...
<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 30, 2015, at 2:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks! The patch wasn&#226;&#128;&#153;t quite correct, but we have a good one now and it is going into 1.8.5 (just squeaked in before release)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2015, at 9:50 PM, Satish Balay &lt;balay_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We've had issues (memory errors) with OpenMPI - and code in PETSc
</span><br>
<span class="quotelev2">&gt;&gt; library that uses MPI_Win_fence().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Vagrind shows memory corruption deep inside OpenMPI function stack.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm attaching a potential patch that appears to fix this issue for us.
</span><br>
<span class="quotelev2">&gt;&gt; [the corresponding valgrind trace is listed in the patch header]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps there is a more appropriate fix for this memory corruption. Could
</span><br>
<span class="quotelev2">&gt;&gt; you check on this?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [Sorry I don't have a pure MPI test code to demonstrate this error -
</span><br>
<span class="quotelev2">&gt;&gt; but a PETSc test example code consistantly reproduces this issue]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Satish&lt;openmpi-1.8.4.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26818.php">http://www.open-mpi.org/community/lists/users/2015/04/26818.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26822.php">http://www.open-mpi.org/community/lists/users/2015/04/26822.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26827.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26825.php">George Bosilca: "Re: [OMPI users] [petsc-dev] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
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
