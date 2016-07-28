<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 09:04:25 2007" -->
<!-- isoreceived="20070322130425" -->
<!-- sent="Thu, 22 Mar 2007 09:04:15 -0400" -->
<!-- isosent="20070322130415" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] portability of the executables compiled with OpenMPI" -->
<!-- id="E65C7850-B595-4934-BEAE-A99FA87B3A9D_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0D8AFD86-82FE-498F-A747-6B841D7C7833_at_cisco.com" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 09:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2874.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For your reference:
<br>
<p>The following cross compile/run combination with OpenMPI 1.1.4 is  
<br>
currently working for me:
<br>
<p>I'm compiling on a Debian Linux system with dual 1.3 GHz AMD Opterons  
<br>
per node and an internal network of dual gigabit ethernet.  With  
<br>
OpenMPI compiled with Intel Fortran 9.1.041 and gcc 3.3.5
<br>
<p>I'm running on a SUSE Linux Enterprise Server 9 system with dual 3.6  
<br>
GHz Intel Xeon EM64T per node and an internal network using Myrinet.   
<br>
OpenMPI compiled with Intel Fortran 9.1.041 and Intel icc 9.1.046
<br>
<p>There is enough compatibility between the two different libmpi.so's  
<br>
that I do not have a problem.
<br>
<p>I have to periodically check the second system to see if it has been  
<br>
updated in which I case I have to update my system.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2877.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2875.php">Michael: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2874.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2873.php">Jeff Squyres: "Re: [OMPI users] portability of the executables compiled with OpenMPI"</a>
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
