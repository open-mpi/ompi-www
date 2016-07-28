<?
$subject_val = "[OMPI users] Porting MPI-3 C-program to Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 19:20:59 2016" -->
<!-- isoreceived="20160418232059" -->
<!-- sent="Mon, 18 Apr 2016 16:15:46 -0700" -->
<!-- isosent="20160418231546" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Porting MPI-3 C-program to Fortran" -->
<!-- id="57156AA2.7010800_at_reachone.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Porting MPI-3 C-program to Fortran<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 19:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28961.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28959.php">Farid Parpia: "[OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to port a simple halo exchange program from C to fortran.  
<br>
It is designed to demonstrate the shared memory features of MPI-3.  The 
<br>
original C program was download from an Intel site, and I have modified 
<br>
it to simplify the port.  A tarfile of a directory with each program and 
<br>
example outputs is attached.  To test use Open-MPI 1.10.3rc1 (which 
<br>
supports MPI-3), and do :
<br>
<p>mpicc testmpi3.c
<br>
mpif90 -np 8 a.out | sort &gt; outc
<br>
<p>and
<br>
<p>mpif90 testmpi3.f90
<br>
mpif90 -np 8 a.out | sort &gt; outf
<br>
<p>Comparing outc and outf,  you can see that 'testmpi3.c' runs correctly, 
<br>
loading variable values from on-node processors as well as from 
<br>
off-node.  'testmpi3.f90' does not work correctly, as it cannot mimic 
<br>
the inter-node C pointers.  'testmpi3.c' correctly loads variable values 
<br>
from addresses, while 'testmpi3.f90' just loads the addresses.  Line 141 
<br>
in 'testmpi3.c' and line 94 in 'testmpi3.f90' are the companion lines of 
<br>
interest.  I am not a C programmer, but as I understand it, the ** 
<br>
syntax of line 28 defines the variable 'shar_pntr' as a 'pointer to a 
<br>
pointer'.  This seems to be the secret, but unfortunately I haven't 
<br>
found a way to do the same in fortran.  Does anyone have a suggestion?  
<br>
Is this a case where a C function must be called from fortran to perform 
<br>
this kind of operation?
<br>
<p>T. Rosmond
<br>
<p>PS: Running gcc version 4.4.7 20120313 (Red Hat 4.4.7-16), IFORT 
<br>
12.0.3.174, and Open-MPI 1.10.3rc1
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28960/testmpi3.tar">testmpi3.tar</a>
</ul>
<!-- attachment="testmpi3.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28961.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28959.php">Farid Parpia: "[OMPI users] Fw:  LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Reply:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
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
