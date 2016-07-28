<?
$subject_val = "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 09:58:48 2007" -->
<!-- isoreceived="20070501135848" -->
<!-- sent="Tue, 1 May 2007 06:58:35 -0700" -->
<!-- isosent="20070501135835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem." -->
<!-- id="CA6BFF36-CEBC-4C91-8F58-83001C3B7236_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070428200747.GA58197_at_freebsd.aeminium.pt" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-01 09:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3165.php">Ole Holm Nielsen: "[OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3163.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>In reply to:</strong> <a href="../../2007/04/3160.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the moment, a possible workaround might be to use plain TCP  
<br>
sockets (i.e., outside of MPI) to make the initial connection.  That  
<br>
way, you can just have your server blocking in accept().
<br>
<p>After the TCP connection is made, use MPI_COMM_JOIN to create a  
<br>
communicator and then proceed with normal MPI communications after that.
<br>
<p><p><p>On Apr 28, 2007, at 1:07 PM, Nuno Sucena Almeida wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	thanks for taking the time to answer this. I actually reached that
</span><br>
<span class="quotelev1">&gt; conclusion after trying a simple MPI::Barrier() with both OpenMPI and
</span><br>
<span class="quotelev1">&gt; Lam-MPI , where both had the same active wait kind of behaviour.
</span><br>
<span class="quotelev1">&gt; 	What I'm trying to achive is to have some kind of calculation
</span><br>
<span class="quotelev1">&gt; server, where the clients can connect through MPI::Intercomm to the
</span><br>
<span class="quotelev1">&gt; server process with rank 0, and transfer data so that it can perform
</span><br>
<span class="quotelev1">&gt; computation, but it seems wasteful to have a server group of processes
</span><br>
<span class="quotelev1">&gt; running at 100% while waiting for the clients.
</span><br>
<span class="quotelev1">&gt; 	 It would be nice to be able to specify the behaviour in this
</span><br>
<span class="quotelev1">&gt; case, or do you suggest another approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 			Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 				Nuno
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 27, 2007 at 07:49:04PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; | This is actually expected behavior.  We make the assumption that MPI
</span><br>
<span class="quotelev1">&gt; | processes are meant to exhibit as low latency as possible, and
</span><br>
<span class="quotelev1">&gt; | therefore use active polling for most message passing.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3165.php">Ole Holm Nielsen: "[OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3163.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>In reply to:</strong> <a href="../../2007/04/3160.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
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
