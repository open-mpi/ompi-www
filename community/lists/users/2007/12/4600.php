<?
$subject_val = "[OMPI users] OpenMP + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 21:57:33 2007" -->
<!-- isoreceived="20071206025733" -->
<!-- sent="Wed, 5 Dec 2007 18:57:26 -0800 (PST)" -->
<!-- isosent="20071206025726" -->
<!-- name="Tee Wen Kai" -->
<!-- email="teewenkai_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMP + OpenMPI" -->
<!-- id="927233.58948.qm_at_web32806.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMP + OpenMPI<br>
<strong>From:</strong> Tee Wen Kai (<em>teewenkai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 21:57:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4605.php">Michael: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4605.php">Michael: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I have installed openmpi-1.2.3. My system has two ethernet ports. Thus, I am trying to make use of both ports to speed up the communication process by using openmp to split into two threads. However, this implementation always cause error. Then I realized that I need to build openmpi using --enable-mpi-threads and use MPI_Init_thread to initialize. But, the initialization always return MPI_THREAD_SINGLE no matter what value I set. Using ompi_info|grep Thread, it shows that thread support has already been activated. Thus, I seek your help to teach me what other configurations I need to set in order to use multi-threads and what are the parameters to include in mpirun in order to use the two ethernet ports.
<br>
<p>Thank you very much.
<br>
<p>Regards,
<br>
Tee
<br>
<p><p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;_________________________________________________
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Many of us spend our time wishing for things we could have if we didn't spend half our time wishing.
<br>
<p><p><p><p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Looking for last minute shopping deals?  Find them fast with Yahoo! Search.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4601.php">Prakash Velayutham: "Re: [OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4599.php">Brian Dobbins: "Re: [OMPI users] Q: Problems launching MPMD applications? ('mca_oob_tcp_peer_try_connect' error 103)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4605.php">Michael: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4605.php">Michael: "Re: [OMPI users] OpenMP + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="4609.php">Jeff Squyres: "Re: [OMPI users] OpenMP + OpenMPI"</a>
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
