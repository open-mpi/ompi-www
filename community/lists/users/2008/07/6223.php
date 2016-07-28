<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 16:16:14 2008" -->
<!-- isoreceived="20080730201614" -->
<!-- sent="Wed, 30 Jul 2008 13:15:54 -0700" -->
<!-- isosent="20080730201554" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="4890CBFA.2020506_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6DDCF651-ECB8-42FA-BA27-4A86B44ECF6D_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing F90 modules<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 16:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock Palen wrote:
<br>
<span class="quotelev1">&gt; On all MPI's I have always used there was only MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; use mpi;
</span><br>
<p>Please excuse my admittedly gross ignorance of all things Fortran but 
<br>
why does &quot;include 'mpif.h'&quot; work but &quot;use mpi&quot; does not? When I try the 
<br>
&quot;use mpi&quot; method I get errors like:
<br>
<p>$ mpif90 -c cart.f
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_cart_get(   igcomm,2,ivdimx,lvperx, mygrid,       ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-389 pathf90: ERROR CART, File = cart.f, Line = 34, Column = 12
<br>
&nbsp;&nbsp;&nbsp;No specific match can be found for the generic subprogram call 
<br>
&quot;MPI_CART_GET&quot;
<br>
<p>$ mpif90 -c cartfoo.f
<br>
$ diff cart.f cartfoo.f
<br>
3,4c3,4
<br>
&lt; C     include 'mpif.h'
<br>
&lt;       use mpi;
<br>
<pre>
---
 &gt;       include 'mpif.h'
 &gt; C      use mpi;
$
 From the googling I've done it seems like &quot;use mpi&quot; is preferred[1]. 
I've made sure that my $LD_LIBRARY_PATH has the directory that MPI.mod 
is in.
Scott
--------
[1] <a href="http://www.mpi-forum.org/docs/mpi-20-html/node243.htm">http://www.mpi-forum.org/docs/mpi-20-html/node243.htm</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6222.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
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
