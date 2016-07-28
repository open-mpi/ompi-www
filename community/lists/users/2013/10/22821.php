<?
$subject_val = "[OMPI users] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 22 12:23:25 2013" -->
<!-- isoreceived="20131022162325" -->
<!-- sent="Tue, 22 Oct 2013 12:23:04 -0400" -->
<!-- isosent="20131022162304" -->
<!-- name="Jai Dayal" -->
<!-- email="dayalsoap_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="CAMJ-YiQ1LZoHkZSeNit1dbkcdGLXNbsJjknF2-JVRe=ynNV_vg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED<br>
<strong>From:</strong> Jai Dayal (<em>dayalsoap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-22 12:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22820.php">John Hearns: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I, for the life of me, can't understand the difference between these two
<br>
init_thread modes.
<br>
<p>MPI_THREAD_SINGLE states that &quot;only one thread will execute&quot;, but
<br>
MPI_THREAD_FUNNELED states &quot;The process may be multi-threaded, but only the
<br>
main thread will make MPI calls (all MPI calls are funneled to the main
<br>
thread).&quot;
<br>
<p>If I use MPI_THREAD_SINGLE, and just create a bunch of pthreads that dumbly
<br>
loop in the background, the MPI library will have no way of detecting this,
<br>
nor should this have any affects on the machine.
<br>
<p>This is exactly the same as MPI_THREAD_FUNNELED. What exactly does it mean
<br>
with &quot;only one thread will execute?&quot; The openmpi library has absolutely
<br>
zero way of knowng I've spawned other pthreads, and since these pthreads
<br>
aren't actually doing MPI communication, I fail to see how this would
<br>
interfere.
<br>
<p>I'm asking because I'm using an open_mpi build ontop of infiniband, and the
<br>
maximum thread mode is MPI_THREAD_SINGLE.
<br>
<p>What am I misunderstanding?
<br>
<p>Thanks,
<br>
Jai
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22821/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22820.php">John Hearns: "Re: [OMPI users] Get your Open MPI schwag!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
