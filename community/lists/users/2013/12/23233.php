<?
$subject_val = "[OMPI users] What's the status of OpenMPI and thread safety?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 18:57:46 2013" -->
<!-- isoreceived="20131218235746" -->
<!-- sent="Wed, 18 Dec 2013 23:57:43 +0000" -->
<!-- isosent="20131218235743" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] What's the status of OpenMPI and thread safety?" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CB03953_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] What's the status of OpenMPI and thread safety?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 18:57:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was wondering if the FAQ entry below is considered current opinion or perhaps a little stale.  Is multi-threading still considered to be 'lightly tested'?  Are there known open bugs?
<br>
<p>Thank you,
<br>
<p>Ed
<br>
<p><p>7. Is Open MPI thread safe?
<br>
<p>Support for MPI_THREAD_MULTIPLE (i.e., multiple threads executing within the MPI library) and asynchronous message passing progress (i.e., continuing message passing operations even while no user threads are in the MPI library) has been designed into Open MPI from its first planning meetings.
<br>
<p>Support for MPI_THREAD_MULTIPLE is included in the first version of Open MPI, but it is only lightly tested and likely still has some bugs. Support for asynchronous progress is included in the TCP point-to-point device, but it, too, has only had light testing and likely still has bugs.
<br>
<p>Completing the testing for full support of MPI_THREAD_MULTIPLE and asynchronous progress is planned in the near future.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23234.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>Previous message:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
<li><strong>Reply:</strong> <a href="23237.php">Ralph Castain: "Re: [OMPI users] What's the status of OpenMPI and thread safety?"</a>
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
