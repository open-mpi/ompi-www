<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  5 09:51:03 2007" -->
<!-- isoreceived="20070305145103" -->
<!-- sent="Mon, 5 Mar 2007 09:50:45 -0500" -->
<!-- isosent="20070305145045" -->
<!-- name="Michael" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran90 interfaces--problem?" -->
<!-- id="7DFA4448-7773-4C34-BD8E-1D3A665AD982_at_ieee.org" -->
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
<strong>From:</strong> Michael (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-05 09:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2752.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2750.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- Updated TPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Reply:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have discovered a problem with the Fortran90 interfaces for all  
<br>
types of communication when one uses derived datatypes (I'm currently  
<br>
using openmpi-1.3a1r13918 [for testing] and openmpi-1.1.2 [for  
<br>
compatibility with an HPC system]), for example
<br>
<p>call MPI_RECV(tsk,1,MPI_TASKSTATE,src, 
<br>
1,MPI_COMM_WORLD,MPI_STATUS_IGNORE,ier)
<br>
<p>where tsk is a Fortran 90 structure and MPI_TASKSTATE has been  
<br>
created by MPI_TYPE_CREATE_STRUCT.
<br>
<p>At the moment I can't imagine a way to modify the OpenMPI interface  
<br>
generation to work around this besides switching to --with-mpi-f90- 
<br>
size=small.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2752.php">Rozzen.VINCONT_at_[hidden]: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="2750.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- Updated TPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Reply:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
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
