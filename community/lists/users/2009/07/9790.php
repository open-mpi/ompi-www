<?
$subject_val = "Re: [OMPI users] enable-mpi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  1 23:38:26 2009" -->
<!-- isoreceived="20090702033826" -->
<!-- sent="Thu, 2 Jul 2009 07:07:03 +0330 (IRST)" -->
<!-- isosent="20090702033703" -->
<!-- name="rahmani" -->
<!-- email="m_rahmani56_at_[hidden]" -->
<!-- subject="Re: [OMPI users] enable-mpi-threads" -->
<!-- id="17957826.19311246505823441.JavaMail.root_at_mta.iut.ac.ir" -->
<!-- charset="utf-8" -->
<!-- inreplyto="41145107-E4D3-47F4-97C0-0D4346F3C3C8_at_cisco.com" -->
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
<strong>From:</strong> rahmani (<em>m_rahmani56_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-01 23:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9791.php">Ashika Umanga Umagiliya: "[OMPI users] Error connecting to nodes ?"</a>
<li><strong>Previous message:</strong> <a href="9789.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9769.php">Jeff Squyres: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Very thanks for your discussion 
<br>
<p>----- Original Message -----
<br>
From: &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, June 30, 2009 7:23:13 AM (GMT-0500) America/New_York
<br>
Subject: Re: [OMPI users] enable-mpi-threads
<br>
<p>On Jun 30, 2009, at 1:29 AM, rahmani wrote:
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9791.php">Ashika Umanga Umagiliya: "[OMPI users] Error connecting to nodes ?"</a>
<li><strong>Previous message:</strong> <a href="9789.php">Ralph Castain: "Re: [OMPI users] Disconnections"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9769.php">Jeff Squyres: "Re: [OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="9889.php">Lenny Verkhovsky: "Re: [OMPI users] enable-mpi-threads"</a>
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
