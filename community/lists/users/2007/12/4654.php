<?
$subject_val = "[OMPI users] parpack with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 17:16:18 2007" -->
<!-- isoreceived="20071212221618" -->
<!-- sent="Wed, 12 Dec 2007 17:15:13 -0500" -->
<!-- isosent="20071212221513" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] parpack with openmpi" -->
<!-- id="E874F964-DFAB-4BF1-AECC-9AF850890615_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] parpack with openmpi<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 17:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4655.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Reply:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone ever built parpack (<a href="http://www.caam.rice.edu/software/">http://www.caam.rice.edu/software/</a> 
<br>
ARPACK/)  with openmpi?  It compiles but some of the examples give:
<br>
<p>[nyx-login1.engin.umich.edu:12173] *** on communicator MPI_COMM_WORLD
<br>
[nyx-login1.engin.umich.edu:12173] *** MPI_ERR_TYPE: invalid datatype
<br>
[nyx-login1.engin.umich.edu:12173] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[nyx-login1.engin.umich.edu:12174] *** An error occurred in MPI_Recv
<br>
[nyx-login1.engin.umich.edu:12174] *** on communicator MPI_COMM_WORLD
<br>
<p>I checked all the data types are:  MPI_DOUBLE_PRECISION  Im not sure  
<br>
where to look next.
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
<li><strong>Next message:</strong> <a href="4655.php">Lisandro Dalcin: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4653.php">George Bosilca: "Re: [OMPI users] Dual ethernet &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>Reply:</strong> <a href="4657.php">Jeff Squyres: "Re: [OMPI users] parpack with openmpi"</a>
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
