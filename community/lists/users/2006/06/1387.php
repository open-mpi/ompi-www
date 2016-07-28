<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  8 18:47:24 2006" -->
<!-- isoreceived="20060608224724" -->
<!-- sent="Thu, 8 Jun 2006 18:47:17 -0400" -->
<!-- isosent="20060608224717" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] F90 interfaces again" -->
<!-- id="B16DAE7A-8B90-4410-A8D2-69FAD1ECBC83_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-08 18:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Reply:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe reply:</strong> <a href="1389.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe reply:</strong> <a href="1392.php">Michael Kluskens: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe reply:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_WAITALL(3,sp_request,MPI_STATUSES_IGNORE,ier)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Generic subroutine 'mpi_waitall' at (1) is not consistent with  
<br>
a specific subroutine interface
<br>
<p>Issue, 3rd argument of MPI_WAITALL expects an integer array normally,  
<br>
but this constant is permitted by the standard.
<br>
<p>This is with OpenMPI 1.2a1r10186,  I can check the details of the  
<br>
scripts and generated files next week for whatever is the latest  
<br>
version.  But odds are this has not been spotted.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Previous message:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Reply:</strong> <a href="1388.php">Brian W. Barrett: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe reply:</strong> <a href="1389.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe reply:</strong> <a href="1392.php">Michael Kluskens: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe reply:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
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
