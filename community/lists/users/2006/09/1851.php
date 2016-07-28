<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 11 12:32:59 2006" -->
<!-- isoreceived="20060911163259" -->
<!-- sent="Mon, 11 Sep 2006 12:31:10 -0400" -->
<!-- isosent="20060911163110" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] segfault with HPL/OMPI/LAM" -->
<!-- id="FF0A20F9-0B17-41B8-9148-41C1DD75312C_at_umich.edu" -->
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
<strong>Date:</strong> 2006-09-11 12:31:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1852.php">Aidaros Dev: "[OMPI users] MPI_Wtime return a value less than 1?"</a>
<li><strong>Previous message:</strong> <a href="1850.php">&#197;ke Sandgren: "Re: [OMPI users] Blacs tester failure due to bug in	datatype_unpack.c (?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In trying to test a new large memory machine i have encountered a  
<br>
problem with with segfaults.
<br>
<p>I am trying to run a large problemsize HPL job.  Once each process  
<br>
exceeds ~2GB per process i get segfaults.  This happens with both  
<br>
openmpi-1.1 openmpi-1.1.1 and lam-7.1.2  the blas lib is ACML-3.1.0   
<br>
and the compiler is PGI-6.1
<br>
<p>Is this a known problem with HPL?  each process was never ment to get  
<br>
into greater than 2 GB ?
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1852.php">Aidaros Dev: "[OMPI users] MPI_Wtime return a value less than 1?"</a>
<li><strong>Previous message:</strong> <a href="1850.php">&#197;ke Sandgren: "Re: [OMPI users] Blacs tester failure due to bug in	datatype_unpack.c (?)"</a>
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
