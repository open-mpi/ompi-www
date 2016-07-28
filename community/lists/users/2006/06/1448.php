<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 13:33:16 2006" -->
<!-- isoreceived="20060619173316" -->
<!-- sent="Mon, 19 Jun 2006 13:33:04 -0400" -->
<!-- isosent="20060619173304" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Wtime" -->
<!-- id="F357CD32-5DD4-4BF8-BC6E-1CF05AA0916C_at_ieee.org" -->
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
<strong>Date:</strong> 2006-06-19 13:33:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1447.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1456.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Wtime"</a>
<li><strong>Maybe reply:</strong> <a href="1456.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is anyone using MPI_Wtime with any version of OpenMPI under Fortran 90?
<br>
<p>I got my program to compile with MPI_Wtime commands but the  
<br>
difference between two different times in the process is always zero.
<br>
<p>When compiling against OpenMPI I have to specify
<br>
<p>mytime = MPI_Wtime
<br>
<p>For other MPI's I specify:
<br>
<p>mytime = MPI_Wtime()
<br>
<p>This has been tested on a dual-opteron with PGI 6.1-5 and a G4 with  
<br>
g95, I'm currently using OpenMPI 1.2a1r10297.
<br>
<p>The same code works fine on the dual-operton with PGI 6.1-5 and  
<br>
MPICH2, SGI Altix with Intel compilers and SGI MPI library, and SGI  
<br>
IRIX with SGI MPI library.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1449.php">Michael Kluskens: "[OMPI users] auto detect hosts"</a>
<li><strong>Previous message:</strong> <a href="1447.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1456.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Wtime"</a>
<li><strong>Maybe reply:</strong> <a href="1456.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] MPI_Wtime"</a>
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
