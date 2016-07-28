<?
$subject_val = "[OMPI users] send and receive buffer the same  on root";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 12:01:51 2010" -->
<!-- isoreceived="20100916160151" -->
<!-- sent="Thu, 16 Sep 2010 09:01:24 -0700" -->
<!-- isosent="20100916160124" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] send and receive buffer the same  on root" -->
<!-- id="1284652884.6749.38.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] send and receive buffer the same  on root<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 12:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Previous message:</strong> <a href="14234.php">Axel Schweiger: "[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and, gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>Reply:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am working with a Fortran 90 code with many MPI calls like this:
<br>
<p>call mpi_gatherv(x,nsize(rank+1),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_real,x,nsize,nstep,mpi_real,root,mpi_comm_world,mstat)
<br>
<p>'x' is allocated on root to be large enough to hold the results of the
<br>
gather, other arrays and parameters are defined correctly, and the code
<br>
runs as it should.  However, I am concerned that having the same send
<br>
and receive buffer on root is a violation of the MPI standard.  Am I
<br>
correct?  I am aware of the MPI_IN_PLACE feature that can be used in
<br>
this situation, by defining it as the send buffer at root.  
<br>
<p>The fact that the code as written seems to work on most system we run on
<br>
(some with OpenMPI, some with proprietary MPI's) indicates that in spite
<br>
of the standard, implementations allow it.  Is this correct, or are we
<br>
just lucky.
<br>
<p>T. Rosmond
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Previous message:</strong> <a href="14234.php">Axel Schweiger: "[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and, gcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14236.php">David Zhang: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Reply:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>Reply:</strong> <a href="14238.php">Richard Treumann: "Re: [OMPI users] send and receive buffer the same  on root"</a>
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
