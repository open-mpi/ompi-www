<?
$subject_val = "[OMPI users] testsome returns negative indices";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 20:40:00 2014" -->
<!-- isoreceived="20140321004000" -->
<!-- sent="Thu, 20 Mar 2014 17:39:59 -0700" -->
<!-- isosent="20140321003959" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] testsome returns negative indices" -->
<!-- id="532B8A5F.9010403_at_biostat.ucsf.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] testsome returns negative indices<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 20:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23906.php">tmishima_at_[hidden]: "[OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23904.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Testsome seems to have returned successfully, with a positive 
<br>
outcount, and yet given me a negative index, -4432.  Can anyone help me 
<br>
understand what's going on?
<br>
<p>The call is from R, and so there might be a translation issue.  My first 
<br>
thought was that it might be 32 vs 64 bit integers, but both OMPI and R 
<br>
seem to be using the C int type for the integers.
<br>
<p>Here's the inner call:
<br>
<p>SEXP mpi_testsome(SEXP sexp_count){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int countn=INTEGER(sexp_count)[0];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEXP indices;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROTECT (indices = allocVector(INTSXP, countn+1));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_errhandler(MPI_Testsome(countn, request, &amp;INTEGER(indices)[0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;INTEGER(indices)[1], status));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UNPROTECT(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return indices;
<br>
}
<br>
<p>SEXP is an R structure.
<br>
<p>OMPI 1.7.4.
<br>
<p>Ross Boylan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23906.php">tmishima_at_[hidden]: "[OMPI users] coll_ml_priority in openmpi-1.7.5"</a>
<li><strong>Previous message:</strong> <a href="23904.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
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
