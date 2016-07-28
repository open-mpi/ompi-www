<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:39:49 2011" -->
<!-- isoreceived="20111214203949" -->
<!-- sent="Wed, 14 Dec 2011 15:39:44 -0500" -->
<!-- isosent="20111214203944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="E2162663-B3F5-48E2-A919-DC1AAD741CDD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE9055B.90105_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17978.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17978.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17978.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2011, at 3:21 PM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; For example, your configure command,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doesn't tell Open MPI to use ifcort for mpif90 and mpif77.
</span><br>
<p>Actually, that's not correct.
<br>
<p>For Open MPI, our wrapper compilers will default to using the same compilers that were used to build Open MPI.  So in the above case:
<br>
<p>mpicc will use gcc
<br>
mpicxx will use g++
<br>
mpif77 will use ifort
<br>
mpif90 will use ifort
<br>
<p>--&gt; Note that in a future version of Open MPI (v1.7, probably), we're deprecating mpif77 and mpif90 in favor of mpifort.  We'll also be ignoring the F77 configure variable and only using FC.  This reflects what the underlying compilers are doing (i.e., ifort, pgfortran, gfortran, ...etc.).  
<br>
<p>mpif77 and mpif90 will still exist (as sym links to mpifort), of course, but we'll be encouraging everyone to migrate to mpifort.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17978.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17976.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17972.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17978.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17978.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
