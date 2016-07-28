<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 21:00:00 2010" -->
<!-- isoreceived="20101021010000" -->
<!-- sent="Wed, 20 Oct 2010 18:59:50 -0600" -->
<!-- isosent="20101021005950" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="1629467C-1503-4E2F-8D35-7D87B9BCFFD7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CBF8C2E.4030203_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 20:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14515.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14513.php">Raymond Muno: "[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14513.php">Raymond Muno: "[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14515.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14515.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The error message seems to imply that mpirun itself didn't segfault, but that something else did. Is that segfault pid from mpirun?
<br>
<p>This kind of problem usually is caused by mismatched builds - i.e., you compile against your new build, but you pick up the Myrinet build when you try to run because of path and ld_library_path issues. You might check to ensure you are running against what you built with.
<br>
<p><p>On Oct 20, 2010, at 6:41 PM, Raymond Muno wrote:
<br>
<p><span class="quotelev1">&gt; We are doing a test build of a new cluster. We are re-using our Myrinet 10G gear from a previous cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI 1.4.2  with PGI 10.4.   We use this regularly on our Infiniband based cluster and all the install elements were readily available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With a few go-arounds with the Myrinet MX stack, we are now running MX -1.2.12 with allowances for more than the max of 16 endpoints. Each node has 24 cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The cluster is running rocks 5.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As part of the initial build, I installed the Myrinet_MX Rocks Roll from Myricom. With the default limitation of 16 endpoints, we could not run on all nodes. As mentioned above, the MX stack was replaced.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Myrinet provided a build of OpenMPI 1.4.1.    That build works. It is only compiled with gcc and gfortran and we wanted it built with the compilers we normally use, e.g. PGI, Pathscale and Intel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can compile with the  OpenMPI 1.4.2 / PGI 10.4 build. However, we cannot launch jobs with mpirun. It seg faults.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [enet1-head2-eth1:29532] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [enet1-head2-eth1:29532] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [enet1-head2-eth1:29532] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [enet1-head2-eth1:29532] Failing at address: 0x6c
</span><br>
<span class="quotelev1">&gt; [enet1-head2-eth1:29532] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if we launch the job with the Myricom supplied mpirun in the OpenMPI tree, the job runs successfully. This works even with a test program compiled with the OpenMPI 1.4.2  with PGI 10.4 build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14515.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14513.php">Raymond Muno: "[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14513.php">Raymond Muno: "[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14515.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14515.php">Raymond Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
