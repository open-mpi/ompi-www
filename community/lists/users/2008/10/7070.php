<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 04:30:54 2008" -->
<!-- isoreceived="20081022083054" -->
<!-- sent="Wed, 22 Oct 2008 10:30:46 +0200" -->
<!-- isosent="20081022083046" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="20081022083046.GE4074_at_brakk.ethz.ch" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9CDF1810-19D1-46B1-B4B6-6D0C3A90C0A7_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI runtime-specific environment variable?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 04:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed 2008-10-22 00:40, Reuti wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, now I see. Why not just call MPI_Comm_size(MPI_COMM_WORLD,  
</span><br>
<span class="quotelev1">&gt; &amp;nprocs) When nprocs is 1, it's a serial run. It can also be executed  
</span><br>
<span class="quotelev1">&gt; when not running within mpirun AFAICS.
</span><br>
<p>This is absolutely NOT okay.  You cannot call any MPI functions before
<br>
MPI_Init (and at least OMPI 1.2+ and MPICH2 1.1a will throw an error if
<br>
you try).
<br>
<p>I'm slightly confused about the original problem.  Is the program linked
<br>
against an MPI when running in serial?  You have to recompile anyway if
<br>
you change MPI implementation, so if it's not linked against a real MPI
<br>
then you know at compile time.  But what is the problem with calling
<br>
MPI_Init for a serial job?  All implementations I've used allow you to
<br>
call MPI_Init when the program is run as ./foo (no mpirun).
<br>
<p>Jed
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7070/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7069.php">Mike Dubman: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="7067.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Reply:</strong> <a href="7071.php">Reuti: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
