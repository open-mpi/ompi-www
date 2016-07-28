<?
$subject_val = "[OMPI users] Application hangs on mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 18:50:46 2013" -->
<!-- isoreceived="20130618225046" -->
<!-- sent="Tue, 18 Jun 2013 22:50:39 +0000" -->
<!-- isosent="20130618225039" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Application hangs on mpi_waitall" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA34570_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Application hangs on mpi_waitall<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 18:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22128.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22126.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>Reply:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>Reply:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Maybe reply:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running OpenMPI 1.6.4 and seeing a problem where mpi_waitall never returns.  The case runs fine with MVAPICH.  The logic associated with the communications has been extensively debugged in the past; we don't think it has errors.   Each process posts non-blocking receives, non-blocking sends, and then does waitall on all the outstanding requests.
<br>
<p>The work is broken down into 960 chunks. If I run with 960 processes (60 nodes of 16 cores each), things seem to work.  If I use 160 processes (each process handling 6 chunks of work), then each process is handling 6 times as much communication, and that is the case that hangs with OpenMPI 1.6.4; again, seems to work with MVAPICH.  Is there an obvious place to start, diagnostically?  We're using the openib btl.
<br>
<p>Thanks,
<br>
<p>Ed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22128.php">Ralph Castain: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<li><strong>Previous message:</strong> <a href="22126.php">Hans Ekkehard Plesser: "Re: [OMPI users] MPI_Init_thread(..., MPI_THREAD_SERIALIZED) hangs under OSX 10.8.4 if compiled	with	OpenMPI 1.7.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>Reply:</strong> <a href="22133.php">Vladimir Yamshchikov: "[OMPI users] unsubscribe"</a>
<li><strong>Reply:</strong> <a href="22213.php">eblosch_at_[hidden]: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
<li><strong>Maybe reply:</strong> <a href="22222.php">Ed Blosch: "Re: [OMPI users] Application hangs on mpi_waitall"</a>
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
