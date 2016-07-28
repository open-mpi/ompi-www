<?
$subject_val = "[OMPI users] How can I tell (open-)mpi about the HW topology of my system?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 07:54:58 2009" -->
<!-- isoreceived="20091023115458" -->
<!-- sent="Fri, 23 Oct 2009 13:54:49 +0200" -->
<!-- isosent="20091023115449" -->
<!-- name="Luigi Scorzato" -->
<!-- email="luigi.scorzato_at_[hidden]" -->
<!-- subject="[OMPI users] How can I tell (open-)mpi about the HW topology of my system?" -->
<!-- id="7DB8E8DD-E657-4A50-BAB2-7AC42D6E51CE_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How can I tell (open-)mpi about the HW topology of my system?<br>
<strong>From:</strong> Luigi Scorzato (<em>luigi.scorzato_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 07:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10954.php">Jeff Squyres: "[OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>Previous message:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10978.php">Jeff Squyres: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?"</a>
<li><strong>Reply:</strong> <a href="10978.php">Jeff Squyres: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?"</a>
<li><strong>Maybe reply:</strong> <a href="10979.php">Luigi Scorzato: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody,
<br>
<p>The short question is: How can I tell (open-)mpi about the HW  
<br>
topology of my system?
<br>
<p>The longer form is the following, I have a cluster which is  
<br>
physically connected in a 3D torus topology (say 5x3x2). The nodes  
<br>
have names: node_000, node_001, ... node_421. I can use a rankfile to  
<br>
assign a fix MPI rank to each node. E.g:
<br>
rank 0 = node_000
<br>
rank 1 = node_001
<br>
rank 2 = node_010
<br>
...
<br>
However, in general, nothing forces e.g. MPI_Cart_create() to build  
<br>
the 3D grid I want i.e. coord[node_ijk] =(i,j,k) rather than, say  
<br>
coord[node_000] =(0,0,0), coord[node_001] =(1,0,0), coord[node_010] = 
<br>
(2,0,0) ..., which would be wrongly mapped to the physical topology.
<br>
<p>How can I bind at least MPI_Cart_create() to the topology I want? Of  
<br>
course it would be nice to use an MPI-compliant procedure, if it  
<br>
exists. If not, I am also happy with something that works at least  
<br>
with some version of open-mpi.
<br>
<p>Note: For some reason too long to explain I cannot rely on a system  
<br>
that tests the the connections at the beginning. But the is no reason  
<br>
to do these tests, since I know my topology exactly.
<br>
<p>Thanks in advance for any help!
<br>
Luigi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10954.php">Jeff Squyres: "[OMPI users] MPI-3 Fortran feedback"</a>
<li><strong>Previous message:</strong> <a href="10952.php">Francesco Pietra: "[OMPI users] Fwd: installation with two different compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10978.php">Jeff Squyres: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?"</a>
<li><strong>Reply:</strong> <a href="10978.php">Jeff Squyres: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of mysystem?"</a>
<li><strong>Maybe reply:</strong> <a href="10979.php">Luigi Scorzato: "Re: [OMPI users] How can I tell (open-)mpi about the HW topology of my system?"</a>
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
