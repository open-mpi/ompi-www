<?
$subject_val = "[OMPI users] Need help with tuning of IB for OpenMPI 1.3.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 03:34:42 2009" -->
<!-- isoreceived="20090825073442" -->
<!-- sent="Tue, 25 Aug 2009 09:34:26 +0200" -->
<!-- isosent="20090825073426" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Need help with tuning of IB for OpenMPI 1.3.3" -->
<!-- id="1251185666.30154.13.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] Need help with tuning of IB for OpenMPI 1.3.3<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 03:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>Previous message:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>We have one user code that is having lots of problems with RNRs or
<br>
sometimes hangs. (The same code runs ok on another IB based system which
<br>
has full connectivity and on our Myrinet system)
<br>
<p>The IB network has a 7:3 overload, i.e. 7 nodes per 3 IB links up to the
<br>
main Cisco switch. In other words, we have 48 bladecenters with 14
<br>
blades (8 cores) in each with a IB switch per bladecenter and 2x3 IB
<br>
lines per bladecenter to the main Cisco switch.
<br>
<p>Now to the question, do you have any good suggestions on parameters that
<br>
will help us get around this problem.
<br>
I tried changing the queue-pair settings and it does affect the problem
<br>
but so far i haven't been able to fix it completely.
<br>
The code usually works when running with nodes=8:ppn=8, but always fails
<br>
sooner or later with nodes=16:ppn=8.
<br>
Also turning off leave_pinned helps a bit.
<br>
<p>The best settings i have so far are:
<br>
-mca mpi_leave_pinned 0 -mca btl_openib_receive_queues
<br>
&quot;P,128,512:S,2048,
<br>
512,128,2:S,12288,512,128,2:S,65536,512,128,2&quot;
<br>
<p>I have tried almost anything i can think of and desperately need help
<br>
here. Building everything in debug mode helps somewhat due to the code
<br>
getting so slow that the network can keep up a lot better but not
<br>
completely.
<br>
<p>OS: CentOS5.3 (OFED 1.3.2 and 1.4.2 tested)
<br>
HW: Mellanox MT25208 InfiniHost III Ex (128MB)
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>Previous message:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
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
