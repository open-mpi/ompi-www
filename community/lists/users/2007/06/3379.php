<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 18:52:51 2007" -->
<!-- isoreceived="20070605225251" -->
<!-- sent="Tue,  5 Jun 2007 17:52:47 -0500" -->
<!-- isosent="20070605225247" -->
<!-- name="smairal_at_[hidden]" -->
<!-- email="smairal_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)" -->
<!-- id="1181083967.4665e93f0e99e_at_webmail.ksu.edu" -->
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
<strong>From:</strong> <a href="mailto:smairal_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%20with%20multiple%20threads%20(MPI_THREAD_MULTIPLE)"><em>smairal_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-05 18:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3380.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3378.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying a program in which I have 2 MPI nodes and each MPI node has
<br>
2 threads:
<br>
<p>Main node-thread                         Receive Thread
<br>
-----------------                       ----------------
<br>
MPI_Init_Thread(MPI_THREAD_MULTIPLE);
<br>
.
<br>
.
<br>
LOOP:                                  LOOP:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;THREAD-BARRIER                           THREAD-BARRIER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send();                              MPI_Recv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;goto LOOP;                               goto LOOP;
<br>
<p>.
<br>
.
<br>
<p>The thread-barrier ensures that the 2 threads complete the previous
<br>
iteration before moving ahead with this one.
<br>
<p>I get the following error SOMETIMES (while sometimes the program runs
<br>
properly):
<br>
*** An error occurred in MPI_Recv
<br>
*** on communicator MPI_COMM_WORLD
<br>
*** MPI_ERR_TRUNCATE: message truncated
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Somewhere I read that MPI_THREAD_MULTIPLE is not properly tested with
<br>
OpenMPI. Can someone tell me whether I am making some mistake or is
<br>
there any bug with MPI_THREAD_MULTIPLE?
<br>
<p>-Thanks and Regards,
<br>
Sarang.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3380.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3378.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="3395.php">Jeff Squyres: "Re: [OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
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
