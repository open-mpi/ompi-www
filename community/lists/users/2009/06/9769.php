<?
$subject_val = "Re: [OMPI users] enable-mpi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 07:23:18 2009" -->
<!-- isoreceived="20090630112318" -->
<!-- sent="Tue, 30 Jun 2009 07:23:13 -0400" -->
<!-- isosent="20090630112313" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] enable-mpi-threads" -->
<!-- id="41145107-E4D3-47F4-97C0-0D4346F3C3C8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="10610914.177121246339799589.JavaMail.root_at_mta.iut.ac.ir" -->
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
<strong>Subject:</strong> Re: [OMPI users] enable-mpi-threads<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 07:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9770.php">Kritiraj Sajadah: "[OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Previous message:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9765.php">rahmani: "[OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9790.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9790.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 30, 2009, at 1:29 AM, rahmani wrote:
<br>
<p><span class="quotelev1">&gt; I want install openmpi in a cluster with multicore processor.
</span><br>
<span class="quotelev1">&gt; Is it necessary to configure with --enable-mpi-threads option?
</span><br>
<span class="quotelev1">&gt; when this option should be used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Open MPI's threading support is functional but not optimized.
<br>
<p>It depends on the problem you're trying to solve.  There's many ways  
<br>
to write software, but two not-uncommon models for MPI applications are:
<br>
<p>1. Write the software such that MPI will launch one process for each  
<br>
core.  You communicate between these processes via MPI communication  
<br>
calls such as MPI_SEND, MPI_RECV, etc.
<br>
<p>2. Write the software that that MPI will launch one process per host,  
<br>
and then spawn threads for all the cores on that host.  The threads  
<br>
communicate with each other via typical threaded IPC mechanisms  
<br>
(usually not MPI); MPI processes communicate across hosts via MPI  
<br>
communication calls.  Sometimes MPI function calls are restricted to  
<br>
one thread; sometimes they're invoked by any thread.
<br>
<p>So it really depends on how you want to write your software.  Make  
<br>
sense?
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
<li><strong>Next message:</strong> <a href="9770.php">Kritiraj Sajadah: "[OMPI users] Apllication level checkpointing tools."</a>
<li><strong>Previous message:</strong> <a href="9768.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9765.php">rahmani: "[OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9790.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9790.php">rahmani: "Re: [OMPI users] enable-mpi-threads"</a>
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
