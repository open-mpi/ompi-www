<?
$subject_val = "[OMPI users] MPI_Comm_spawn errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 18 19:18:25 2008" -->
<!-- isoreceived="20080219001825" -->
<!-- sent="Mon, 18 Feb 2008 21:18:10 -0300" -->
<!-- isosent="20080219001810" -->
<!-- name="Joao Vicente Lima" -->
<!-- email="jvflimabak_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn errors" -->
<!-- id="98e4c1720802181618j12c1b8d3pdcef466ccf8d3ad2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn errors<br>
<strong>From:</strong> Joao Vicente Lima (<em>jvflimabak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-18 19:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>Previous message:</strong> <a href="5036.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>Reply:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I'm getting errors with spawn in the situations:
<br>
<p>1) spawn1.c - spawning 2 process on localhost, one by one,  the error is:
<br>
<p>spawning ...
<br>
[localhost:31390] *** Process received signal ***
<br>
[localhost:31390] Signal: Segmentation fault (11)
<br>
[localhost:31390] Signal code: Address not mapped (1)
<br>
[localhost:31390] Failing at address: 0x98
<br>
[localhost:31390] [ 0] /lib/libpthread.so.0 [0x2b1d38a17ed0]
<br>
[localhost:31390] [ 1]
<br>
/usr/local/mpi/openmpi-svn/lib/libmpi.so.0(ompi_comm_dyn_finalize+0xd2)
<br>
[0x2b1d37667cb2]
<br>
[localhost:31390] [ 2]
<br>
/usr/local/mpi/openmpi-svn/lib/libmpi.so.0(ompi_comm_finalize+0x3b)
<br>
[0x2b1d3766358b]
<br>
[localhost:31390] [ 3]
<br>
/usr/local/mpi/openmpi-svn/lib/libmpi.so.0(ompi_mpi_finalize+0x248)
<br>
[0x2b1d37679598]
<br>
[localhost:31390] [ 4] ./spawn1(main+0xac) [0x400ac4]
<br>
[localhost:31390] [ 5] /lib/libc.so.6(__libc_start_main+0xf4) [0x2b1d38c43b74]
<br>
[localhost:31390] [ 6] ./spawn1 [0x400989]
<br>
[localhost:31390] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 31390 on
<br>
node localhost calling &quot;abort&quot;. This will have caused other processes
<br>
in the application to be terminated by signals sent by mpirun
<br>
(as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>With 1 process spawned or with 2 process spawned in one call there is
<br>
no output from child.
<br>
<p>2) spawn2.c - no response, this init is
<br>
&nbsp;MPI_Init_thread (&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;required)
<br>
<p>the attachments contains the programs, ompi_info and config.log.
<br>
<p>Some suggest ?
<br>
<p>thanks a lot.
<br>
Joao.
<br>
<p>



<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5037/spawn1.c.gz">spawn1.c.gz</a>
</ul>
<!-- attachment="spawn1.c.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5037/spawn2.c.gz">spawn2.c.gz</a>
</ul>
<!-- attachment="spawn2.c.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5037/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5037/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>Previous message:</strong> <a href="5036.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] funnel-threaded application blocks from time to time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>Reply:</strong> <a href="5038.php">Tim Prins: "Re: [OMPI users] MPI_Comm_spawn errors"</a>
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
