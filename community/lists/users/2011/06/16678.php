<?
$subject_val = "[OMPI users] parallel I/O on 64-bit indexed arays";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 05:27:05 2011" -->
<!-- isoreceived="20110606092705" -->
<!-- sent="Mon, 06 Jun 2011 11:26:59 +0200" -->
<!-- isosent="20110606092659" -->
<!-- name="Troels Haugboelle" -->
<!-- email="haugboel_at_[hidden]" -->
<!-- subject="[OMPI users] parallel I/O on 64-bit indexed arays" -->
<!-- id="4DEC9D63.7060600_at_nbi.dk" -->
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
<strong>Subject:</strong> [OMPI users] parallel I/O on 64-bit indexed arays<br>
<strong>From:</strong> Troels Haugboelle (<em>haugboel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 05:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16679.php">Virginie trinite: "[OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Previous message:</strong> <a href="16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>The problem I face is not open-mpi specific, but I hope still the MPI 
<br>
wizards on the list can help me nonetheless.
<br>
<p>I am running and developing a large-scale scientific code written in 
<br>
Fortran90. One type of objects are global 1-D vectors, which contains 
<br>
data for particles in the application. I want to use MPI commands for 
<br>
saving the particle data but the global 1D array holding the data can 
<br>
reach up to 100 billion elements, and array offsets and global sizes 
<br>
have to be 64-bit.
<br>
<p>We use MPI_TYPE_CREATE_SUBARRAY for making a custom type and then 
<br>
MPI_FILE_SET_VIEW and MPI_FILE_WRITE_ALL for saving the 3D field data. 
<br>
This works with good performance on even very large installations / 
<br>
runs, but arguments to MPI_TYPE_CREATE_SUBARRAY are 32 bit integers, and 
<br>
that is not sufficient for the 1D-particle array. It needs 64-bit 
<br>
offsets and 64-bit global sizes. Local sizes for each thread are 32-bit 
<br>
though.
<br>
<p>What MPI call could I use to make a custom MPI type that describes the 
<br>
above data, which has 64-bit indices / global size ?
<br>
<p>As an example, for 3 threads the type layout would be :
<br>
<p>Thread 0: n0 reals, n1 holes, n2 holes
<br>
Thread 1: n0 holes, n1 reals, n2 holes
<br>
Thread 2: n0 holes, n1 holes, n2 reals
<br>
<p>The problem is I have to generalize that to 100 billion elements and 
<br>
250k threads.
<br>
<p>As a remark; given that data keeps on becoming bigger: It would be very 
<br>
nice if the arguments to MPI_TYPE_CREATE_SUBARRAY, and arguments to 
<br>
other similar routines could be 64-bit.
<br>
<p>TIA,
<br>
<p>Troels
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16679.php">Virginie trinite: "[OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Previous message:</strong> <a href="16677.php">Marcin Zielinski: "Re: [OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
<li><strong>Reply:</strong> <a href="16685.php">Jeff Squyres: "Re: [OMPI users] parallel I/O on 64-bit indexed arays"</a>
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
