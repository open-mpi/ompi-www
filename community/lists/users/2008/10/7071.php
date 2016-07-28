<?
$subject_val = "Re: [OMPI users] OpenMPI runtime-specific environment variable?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 05:15:25 2008" -->
<!-- isoreceived="20081022091525" -->
<!-- sent="Wed, 22 Oct 2008 11:15:15 +0200" -->
<!-- isosent="20081022091515" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI runtime-specific environment variable?" -->
<!-- id="27AC5D63-EDB6-40BD-8B89-565B768A88D6_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081022083046.GE4074_at_brakk.ethz.ch" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 05:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7070.php">Jed Brown: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7070.php">Jed Brown: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 22.10.2008 um 10:30 schrieb Jed Brown:
<br>
<p><span class="quotelev1">&gt; On Wed 2008-10-22 00:40, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, now I see. Why not just call MPI_Comm_size(MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;nprocs) When nprocs is 1, it's a serial run. It can also be executed
</span><br>
<span class="quotelev2">&gt;&gt; when not running within mpirun AFAICS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is absolutely NOT okay.  You cannot call any MPI functions before
</span><br>
<span class="quotelev1">&gt; MPI_Init (and at least OMPI 1.2+ and MPICH2 1.1a will throw an  
</span><br>
<span class="quotelev1">&gt; error if
</span><br>
<span class="quotelev1">&gt; you try).
</span><br>
<p>Sorry for being not precise. Of course you have to call MPI_Init  
<br>
(which will also return successful when called while not being  
<br>
started with mpirun), then check the number of cores you got with the  
<br>
mentioned call, and if it's just one you can call MPI_Finalize  
<br>
immediately and continue with a serial run.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I'm slightly confused about the original problem.  Is the program  
</span><br>
<span class="quotelev1">&gt; linked
</span><br>
<span class="quotelev1">&gt; against an MPI when running in serial?  You have to recompile  
</span><br>
<span class="quotelev1">&gt; anyway if
</span><br>
<span class="quotelev1">&gt; you change MPI implementation, so if it's not linked against a real  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; then you know at compile time.  But what is the problem with calling
</span><br>
<span class="quotelev1">&gt; MPI_Init for a serial job?  All implementations I've used allow you to
</span><br>
<span class="quotelev1">&gt; call MPI_Init when the program is run as ./foo (no mpirun).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed
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
<li><strong>Next message:</strong> <a href="7072.php">Jeff Squyres: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>Previous message:</strong> <a href="7070.php">Jed Brown: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<li><strong>In reply to:</strong> <a href="7070.php">Jed Brown: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7068.php">Adams, Brian M: "Re: [OMPI users] OpenMPI runtime-specific environment variable?"</a>
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
