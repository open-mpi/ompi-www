<?
$subject_val = "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 13:16:54 2008" -->
<!-- isoreceived="20081001171654" -->
<!-- sent="Wed, 01 Oct 2008 19:14:31 +0200" -->
<!-- isosent="20081001171431" -->
<!-- name="Roberto Fichera" -->
<!-- email="kernel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment" -->
<!-- id="48E3AFF7.6040106_at_tekno-soft.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69E41731-440E-40AD-B2DB-5F0B9D740DEF_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment<br>
<strong>From:</strong> Roberto Fichera (<em>kernel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-01 13:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6815.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6810.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain ha scritto:
<br>
<span class="quotelev1">&gt; Afraid I am somewhat at a loss. The logs indicate that mpirun itself
</span><br>
<span class="quotelev1">&gt; is having problems, likely caused by the threading. Only thing I can
</span><br>
<span class="quotelev1">&gt; suggest is that you &quot;unthread&quot; the spawning loop and try it that way
</span><br>
<span class="quotelev1">&gt; first so we can see if some underlying problem exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I have run a loop over calls to comm_spawn without problems.
</span><br>
<span class="quotelev1">&gt; However, there are system limits to the number of child processes an
</span><br>
<span class="quotelev1">&gt; orted can create. You may hit those at some point - we try to report
</span><br>
<span class="quotelev1">&gt; that as a separate error when we see it, but it isn't always easy to
</span><br>
<span class="quotelev1">&gt; catch.
</span><br>
How it works? Does it spawn and disconnect the slave in a loop? I guess
<br>
you don't perform any multithreaded MPI_Send()/Recv(), our you did?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Like I said, we really don't support threaded operations like this
</span><br>
<span class="quotelev1">&gt; right now, so I have no idea what your app may be triggering. I would
</span><br>
<span class="quotelev1">&gt; definitely try it &quot;unthreaded&quot; if possible.
</span><br>
My approach uses one thread for each node allocated for the slave in
<br>
order to overlap
<br>
the communication and make it to progress concurrently depending by how
<br>
each slave
<br>
converge in its solution. When the slave terminate and get back its
<br>
results I would assigned
<br>
another job until I complete my workqueue.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6815.php">Roberto Fichera: "Re: [OMPI users] Running application	with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6813.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<li><strong>In reply to:</strong> <a href="6812.php">Ralph Castain: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6810.php">Roberto Fichera: "Re: [OMPI users] Running application with	MPI_Comm_spawn()	in	multithreaded environment"</a>
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
