<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr 28 16:07:39 2007" -->
<!-- isoreceived="20070428200739" -->
<!-- sent="Sat, 28 Apr 2007 21:07:47 +0100" -->
<!-- isosent="20070428200747" -->
<!-- name="Nuno Sucena Almeida" -->
<!-- email="slug_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem." -->
<!-- id="20070428200747.GA58197_at_freebsd.aeminium.pt" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A159B5A4-1DDD-4241-9FF8-807925E8BA9B_at_cisco.com" -->
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
<strong>From:</strong> Nuno Sucena Almeida (<em>slug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-28 16:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>In reply to:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thanks for taking the time to answer this. I actually reached that 
<br>
conclusion after trying a simple MPI::Barrier() with both OpenMPI and
<br>
Lam-MPI , where both had the same active wait kind of behaviour.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What I'm trying to achive is to have some kind of calculation
<br>
server, where the clients can connect through MPI::Intercomm to the
<br>
server process with rank 0, and transfer data so that it can perform
<br>
computation, but it seems wasteful to have a server group of processes
<br>
running at 100% while waiting for the clients.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It would be nice to be able to specify the behaviour in this
<br>
case, or do you suggest another approach?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheers, 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nuno
<br>
<p>On Fri, Apr 27, 2007 at 07:49:04PM -0400, Jeff Squyres wrote:
<br>
| This is actually expected behavior.  We make the assumption that MPI  
<br>
| processes are meant to exhibit as low latency as possible, and  
<br>
| therefore use active polling for most message passing.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>In reply to:</strong> <a href="3162.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
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
