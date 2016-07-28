<?
$subject_val = "Re: [OMPI users] MPI_Comm_spawn errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 19 08:01:03 2008" -->
<!-- isoreceived="20080219130103" -->
<!-- sent="Tue, 19 Feb 2008 08:00:59 -0500" -->
<!-- isosent="20080219130059" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn errors" -->
<!-- id="47BAD30B.904_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="98e4c1720802181618j12c1b8d3pdcef466ccf8d3ad2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_spawn errors<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-19 08:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5037.php">Joao Vicente Lima: "[OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>In reply to:</strong> <a href="5037.php">Joao Vicente Lima: "[OMPI users] MPI_Comm_spawn errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joao,
<br>
<p>Unfortunately, spawn is broken on the development trunk right now. We 
<br>
are working on a major revamp of the runtime system which should fix 
<br>
these problems, but it is not ready yet.
<br>
<p>Sorry about that :(
<br>
<p>Tim
<br>
<p><p>Joao Vicente Lima wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I'm getting errors with spawn in the situations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) spawn1.c - spawning 2 process on localhost, one by one,  the error is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; spawning ...
</span><br>
<span class="quotelev1">&gt; [localhost:31390] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [localhost:31390] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [localhost:31390] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [localhost:31390] Failing at address: 0x98
</span><br>
<span class="quotelev1">&gt; [localhost:31390] [ 0] /lib/libpthread.so.0 [0x2b1d38a17ed0]
</span><br>
<span class="quotelev1">&gt; [localhost:31390] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/openmpi-svn/lib/libmpi.so.0(ompi_comm_dyn_finalize+0xd2)
</span><br>
<span class="quotelev1">&gt; [0x2b1d37667cb2]
</span><br>
<span class="quotelev1">&gt; [localhost:31390] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/openmpi-svn/lib/libmpi.so.0(ompi_comm_finalize+0x3b)
</span><br>
<span class="quotelev1">&gt; [0x2b1d3766358b]
</span><br>
<span class="quotelev1">&gt; [localhost:31390] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/local/mpi/openmpi-svn/lib/libmpi.so.0(ompi_mpi_finalize+0x248)
</span><br>
<span class="quotelev1">&gt; [0x2b1d37679598]
</span><br>
<span class="quotelev1">&gt; [localhost:31390] [ 4] ./spawn1(main+0xac) [0x400ac4]
</span><br>
<span class="quotelev1">&gt; [localhost:31390] [ 5] /lib/libc.so.6(__libc_start_main+0xf4) [0x2b1d38c43b74]
</span><br>
<span class="quotelev1">&gt; [localhost:31390] [ 6] ./spawn1 [0x400989]
</span><br>
<span class="quotelev1">&gt; [localhost:31390] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 31390 on
</span><br>
<span class="quotelev1">&gt; node localhost calling &quot;abort&quot;. This will have caused other processes
</span><br>
<span class="quotelev1">&gt; in the application to be terminated by signals sent by mpirun
</span><br>
<span class="quotelev1">&gt; (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With 1 process spawned or with 2 process spawned in one call there is
</span><br>
<span class="quotelev1">&gt; no output from child.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) spawn2.c - no response, this init is
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread (&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;required)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attachments contains the programs, ompi_info and config.log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some suggest ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks a lot.
</span><br>
<span class="quotelev1">&gt; Joao.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<li><strong>Previous message:</strong> <a href="5037.php">Joao Vicente Lima: "[OMPI users] MPI_Comm_spawn errors"</a>
<li><strong>In reply to:</strong> <a href="5037.php">Joao Vicente Lima: "[OMPI users] MPI_Comm_spawn errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5039.php">jessie puls: "[OMPI users] openmpi/openib problems"</a>
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
