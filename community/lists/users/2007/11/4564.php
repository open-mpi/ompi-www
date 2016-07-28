<?
$subject_val = "[OMPI users] Reinitialize MPI_COMM_WORLD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 12:13:08 2007" -->
<!-- isoreceived="20071129171308" -->
<!-- sent="Thu, 29 Nov 2007 12:13:03 -0500" -->
<!-- isosent="20071129171303" -->
<!-- name="Rajesh Sudarsan" -->
<!-- email="rsudarsan_at_[hidden]" -->
<!-- subject="[OMPI users] Reinitialize MPI_COMM_WORLD" -->
<!-- id="41935ab00711290913r111b25cardafaad910a19b3ea_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Reinitialize MPI_COMM_WORLD<br>
<strong>From:</strong> Rajesh Sudarsan (<em>rsudarsan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 12:13:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4565.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4563.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4566.php">Edgar Gabriel: "Re: [OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="4566.php">Edgar Gabriel: "Re: [OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have simple MPI program that uses MPI_comm_spawn to create additional
<br>
child processes.
<br>
Using  MPI_Intercomm_merge, I merge the child and the parent
<br>
communicator resulting in a single expanded user
<br>
defined intracommunicator. I know MPI_COMM_WORLD is a constant which is
<br>
statically initialized during MPI_Init call. But
<br>
is there a way to update the value of MPI_COMM_WORLD at runtime
<br>
to reflect this expanded set of processes? Is it possible to some how
<br>
reinitialize MPI_COMM_WORLD using ompi_comm_init() function?
<br>
<p>Regards,
<br>
Rajesh
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4565.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4563.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4566.php">Edgar Gabriel: "Re: [OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>Reply:</strong> <a href="4566.php">Edgar Gabriel: "Re: [OMPI users] Reinitialize MPI_COMM_WORLD"</a>
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
