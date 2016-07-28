<?
$subject_val = "[OMPI users] Problems with f90 implementation under Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 24 15:38:04 2008" -->
<!-- isoreceived="20080224203804" -->
<!-- sent="Sun, 24 Feb 2008 15:37:48 -0500" -->
<!-- isosent="20080224203748" -->
<!-- name="Gregory J. Orris" -->
<!-- email="gregory.orris_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with f90 implementation under Leopard" -->
<!-- id="E2AA6187-AF2A-41CE-AE1E-CD4A22914A3B_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Problems with f90 implementation under Leopard<br>
<strong>From:</strong> Gregory J. Orris (<em>gregory.orris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-24 15:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5075.php">Jeff Squyres: "Re: [OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>Previous message:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5075.php">Jeff Squyres: "Re: [OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>Reply:</strong> <a href="5075.php">Jeff Squyres: "Re: [OMPI users] Problems with f90 implementation under Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>Been trying to activate mpif90 on a set of machines running Leopard  
<br>
for some colleagues and have gotten stuck.
<br>
Compiles fine, but will not run any examples and returns
<br>
<p>mymachine me% /usr/local/mpiexec -np 2 ./ring_f90
<br>
[mymachine.local:23974] *** An error occurred in MPI_Comm_rank
<br>
[mymachine.local:23974] *** on communicator MPI_COMM_WORLD
<br>
[mymachine.local:23974] *** MPI_ERR_COMM: invalid communicator
<br>
[mymachine.local:23974] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[mymachine.local:23975] *** An error occurred in MPI_Comm_rank
<br>
[mymachine.local:23975] *** on communicator MPI_COMM_WORLD
<br>
[mymachine.local:23975] *** MPI_ERR_COMM: invalid communicator
<br>
[mymachine.local:23975] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Seems tied up in how gfortran implements parameters. If MPI_COMM_WORLD  
<br>
is changed in the example code to 0 (its parameter value) all is fine.  
<br>
In the recesses of my mind I seem to remember reading ones that  
<br>
gfortran used for f90 treats parameters differently than integers.   
<br>
Anyone else seen this?
<br>
<p>BTW mpif77 works without problems.
<br>
<p>Regards,
<br>
Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5075.php">Jeff Squyres: "Re: [OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>Previous message:</strong> <a href="5073.php">Jeff Squyres: "Re: [OMPI users] mpi.h macro naming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5075.php">Jeff Squyres: "Re: [OMPI users] Problems with f90 implementation under Leopard"</a>
<li><strong>Reply:</strong> <a href="5075.php">Jeff Squyres: "Re: [OMPI users] Problems with f90 implementation under Leopard"</a>
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
