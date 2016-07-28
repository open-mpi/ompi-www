<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 15:48:07 2011" -->
<!-- isoreceived="20111214204807" -->
<!-- sent="Wed, 14 Dec 2011 15:48:03 -0500" -->
<!-- isosent="20111214204803" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="4EE90B83.3040302_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2162663-B3F5-48E2-A919-DC1AAD741CDD_at_cisco.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 15:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17979.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17979.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17979.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2011 03:39 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 14, 2011, at 3:21 PM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, your configure command,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doesn't tell Open MPI to use ifcort for mpif90 and mpif77.
</span><br>
<span class="quotelev1">&gt; Actually, that's not correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For Open MPI, our wrapper compilers will default to using the same compilers that were used to build Open MPI.  So in the above case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc will use gcc
</span><br>
<span class="quotelev1">&gt; mpicxx will use g++
</span><br>
<span class="quotelev1">&gt; mpif77 will use ifort
</span><br>
<span class="quotelev1">&gt; mpif90 will use ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Jeff,
<br>
<p>I realized this after I wrote that and clarified it in a subsequent
<br>
e-mail. Which you probably just read. ;-)
<br>
<p>Prentice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17979.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Previous message:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>In reply to:</strong> <a href="17977.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17979.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17979.php">Jeff Squyres: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
