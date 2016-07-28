<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 11 07:00:19 2007" -->
<!-- isoreceived="20070111120019" -->
<!-- sent="Thu, 11 Jan 2007 12:59:26 +0100" -->
<!-- isosent="20070111115926" -->
<!-- name="Wolfgang Wieser" -->
<!-- email="wwieser_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI sucks CPU when doing nothing" -->
<!-- id="200701111259.26636.wwieser_at_gmx.de" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Wolfgang Wieser (<em>wwieser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-11 06:59:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2459.php">Tim Campbell: "Re: [OMPI users] problem with mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello...
<br>
<p>I'm just in progress of selecting an MPI implementation to be 
<br>
used on a compute server cluster at the University of Munich. 
<br>
Since MPI_THREAD_MULTIPLE is a requirement, I went for OpenMPI. 
<br>
<p>The setup is a rack of boxes running Linux and connected with 
<br>
gigabit ethernet. 
<br>
<p>However, there is a severe problem: 
<br>
Blocking functions like MPI_Probe() suck all CPU power. 
<br>
But as everybody knows, select(2), poll(2) and recently also 
<br>
epoll(2) were invented to give implementes a possibility to write 
<br>
programs with multiple IO channels without the need for busy waiting. 
<br>
<p>So, I wonder if there is a way to have OpenMPI not make use of busy 
<br>
waiting but rather apply some kernel-level event selection function 
<br>
like the ones mentioned above. 
<br>
<p>Regards,
<br>
Wolfgang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2459.php">Tim Campbell: "Re: [OMPI users] problem with mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="2457.php">George Bosilca: "Re: [OMPI users] problem with mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/02/2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
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
