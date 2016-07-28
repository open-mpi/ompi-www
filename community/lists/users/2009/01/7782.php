<?
$subject_val = "Re: [OMPI users] Asynchronous behaviour of MPI Collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 06:51:27 2009" -->
<!-- isoreceived="20090123115127" -->
<!-- sent="Fri, 23 Jan 2009 06:51:21 -0500" -->
<!-- isosent="20090123115121" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Asynchronous behaviour of MPI Collectives" -->
<!-- id="995A152A-151D-4282-8F85-009B5E2AD7B5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0901230332l5ae8020ey50d7a136c8d145bb_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 06:51:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
<li><strong>In reply to:</strong> <a href="7779.php">Gabriele Fatigati: "[OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7788.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2009, at 6:32 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; I've noted that OpenMPI has an asynchronous behaviour in the  
</span><br>
<span class="quotelev1">&gt; collective calls.
</span><br>
<span class="quotelev1">&gt; The processors, doesn't wait that other procs arrives in the call.
</span><br>
<p>That is correct.
<br>
<p><span class="quotelev1">&gt; This behaviour sometimes can cause some problems with a lot of
</span><br>
<span class="quotelev1">&gt; processors in the jobs.
</span><br>
<p>Can you describe what exactly you mean?  The MPI spec specifically  
<br>
allows this behavior; OMPI made specific design choices and  
<br>
optimizations to support this behavior.  FWIW, I'd be pretty surprised  
<br>
if any optimized MPI implementation defaults to fully synchronous  
<br>
collective operations.
<br>
<p><span class="quotelev1">&gt; Is there an OpenMPI parameter to lock all process in the collective
</span><br>
<span class="quotelev1">&gt; call until is finished? Otherwise  i have to insert many MPI_Barrier
</span><br>
<span class="quotelev1">&gt; in my code and it is very tedious and strange..
</span><br>
<p>As you have notes, MPI_Barrier is the *only* collective operation that  
<br>
MPI guarantees to have any synchronization properties (and it's a  
<br>
fairly weak guarantee at that; no process will exit the barrier until  
<br>
every process has entered the barrier -- but there's no guarantee that  
<br>
all processes leave the barrier at the same time).
<br>
<p>Why do you need your processes to exit collective operations at the  
<br>
same time?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7781.php">Jeff Squyres: "Re: [OMPI users] MCA base component file not found"</a>
<li><strong>In reply to:</strong> <a href="7779.php">Gabriele Fatigati: "[OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7783.php">Ashley Pittman: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7788.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Reply:</strong> <a href="7802.php">Eugene Loh: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
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
