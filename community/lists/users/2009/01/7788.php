<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:58:57 2009" -->
<!-- isoreceived="20090123125857" -->
<!-- sent="Fri, 23 Jan 2009 13:58:51 +0100" -->
<!-- isosent="20090123125851" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="3a37617f0901230458y680ee582pceeeeeb82b29fc79_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="995A152A-151D-4282-8F85-009B5E2AD7B5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Asynchronous behaviour of MPI Collectives<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 07:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7789.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7787.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7789.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7789.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
i would like to understand why, if i run over 512 procs or more, my
<br>
code stops over mpi collective, also with little send buffer. All
<br>
processors are locked into call, doing nothing. But, if i add
<br>
MPI_Barrier  after MPI collective, it works! I run over Infiniband
<br>
net.
<br>
<p>I know many people with this strange problem, i think there is a
<br>
strange interaction between Infiniband and OpenMPI that causes it.
<br>
<p><p><p>2009/1/23 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Jan 23, 2009, at 6:32 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've noted that OpenMPI has an asynchronous behaviour in the collective
</span><br>
<span class="quotelev2">&gt;&gt; calls.
</span><br>
<span class="quotelev2">&gt;&gt; The processors, doesn't wait that other procs arrives in the call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This behaviour sometimes can cause some problems with a lot of
</span><br>
<span class="quotelev2">&gt;&gt; processors in the jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you describe what exactly you mean?  The MPI spec specifically allows
</span><br>
<span class="quotelev1">&gt; this behavior; OMPI made specific design choices and optimizations to
</span><br>
<span class="quotelev1">&gt; support this behavior.  FWIW, I'd be pretty surprised if any optimized MPI
</span><br>
<span class="quotelev1">&gt; implementation defaults to fully synchronous collective operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there an OpenMPI parameter to lock all process in the collective
</span><br>
<span class="quotelev2">&gt;&gt; call until is finished? Otherwise  i have to insert many MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt; in my code and it is very tedious and strange..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you have notes, MPI_Barrier is the *only* collective operation that MPI
</span><br>
<span class="quotelev1">&gt; guarantees to have any synchronization properties (and it's a fairly weak
</span><br>
<span class="quotelev1">&gt; guarantee at that; no process will exit the barrier until every process has
</span><br>
<span class="quotelev1">&gt; entered the barrier -- but there's no guarantee that all processes leave the
</span><br>
<span class="quotelev1">&gt; barrier at the same time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why do you need your processes to exit collective operations at the same
</span><br>
<span class="quotelev1">&gt; time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7789.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7787.php">Allen Barnett: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>In reply to:</strong> <a href="7782.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7789.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7789.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
