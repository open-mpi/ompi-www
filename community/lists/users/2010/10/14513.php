<?
$subject_val = "[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 20:41:25 2010" -->
<!-- isoreceived="20101021004125" -->
<!-- sent="Wed, 20 Oct 2010 19:41:18 -0500" -->
<!-- isosent="20101021004118" -->
<!-- name="Raymond Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="4CBF8C2E.4030203_at_aem.umn.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Raymond Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 20:41:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;We are doing a test build of a new cluster. We are re-using our 
<br>
Myrinet 10G gear from a previous cluster.
<br>
<p>I have built OpenMPI 1.4.2  with PGI 10.4.   We use this regularly on 
<br>
our Infiniband based cluster and all the install elements were readily 
<br>
available.
<br>
<p>With a few go-arounds with the Myrinet MX stack, we are now running MX 
<br>
-1.2.12 with allowances for more than the max of 16 endpoints. Each node 
<br>
has 24 cores.
<br>
<p>The cluster is running rocks 5.3.
<br>
<p>As part of the initial build, I installed the Myrinet_MX Rocks Roll from 
<br>
Myricom. With the default limitation of 16 endpoints, we could not run 
<br>
on all nodes. As mentioned above, the MX stack was replaced.
<br>
<p>Myrinet provided a build of OpenMPI 1.4.1.    That build works. It is 
<br>
only compiled with gcc and gfortran and we wanted it built with the 
<br>
compilers we normally use, e.g. PGI, Pathscale and Intel.
<br>
<p>We can compile with the  OpenMPI 1.4.2 / PGI 10.4 build. However, we 
<br>
cannot launch jobs with mpirun. It seg faults.
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
[enet1-head2-eth1:29532] *** Process received signal ***
<br>
[enet1-head2-eth1:29532] Signal: Segmentation fault (11)
<br>
[enet1-head2-eth1:29532] Signal code: Address not mapped (1)
<br>
[enet1-head2-eth1:29532] Failing at address: 0x6c
<br>
[enet1-head2-eth1:29532] *** End of error message ***
<br>
Segmentation fault
<br>
<p>However, if we launch the job with the Myricom supplied mpirun in the 
<br>
OpenMPI tree, the job runs successfully. This works even with a test 
<br>
program compiled with the OpenMPI 1.4.2  with PGI 10.4 build.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14512.php">Storm Zhang: "[OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14514.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
