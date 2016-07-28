<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  8 14:38:33 2006" -->
<!-- isoreceived="20060608183833" -->
<!-- sent="Thu, 8 Jun 2006 14:37:42 -0400" -->
<!-- isosent="20060608183742" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Errors with MPI_Cart_create" -->
<!-- id="7A1960C4-D346-4F20-B8FE-30AEA9C5E855_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-08 14:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1385.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpif90 error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1399.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Maybe reply:</strong> <a href="1399.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Maybe reply:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have build vasp (<a href="http://cms.mpi.univie.ac.at/vasp/">http://cms.mpi.univie.ac.at/vasp/</a>)  for a user  
<br>
using openMPI-1.0.2 with teh PGI 6.1 compilers,  At runtime I am  
<br>
getting the following OMPI errors,
<br>
<p>bash-3.00$ mpirun -np 2  vasp
<br>
running on    2 nodes
<br>
[nyx.engin.umich.edu:16167] *** An error occurred in MPI_Cart_create
<br>
[nyx.engin.umich.edu:16167] *** on communicator MPI_COMM_WORLD
<br>
[nyx.engin.umich.edu:16167] *** MPI_ERR_OTHER: known error not in list
<br>
[nyx.engin.umich.edu:16167] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p>This is regular OMPI error messages,  is this a problem with the  
<br>
build? (its very complicated)  or with vasp as writen? Or OMPI?
<br>
Direction is very much appreciated.
<br>
<p>Brock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1385.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] mpif90 error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1399.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Maybe reply:</strong> <a href="1399.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Maybe reply:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
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
