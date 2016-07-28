<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 12 21:37:20 2007" -->
<!-- isoreceived="20070313013720" -->
<!-- sent="Mon, 12 Mar 2007 18:36:59 -0700" -->
<!-- isosent="20070313013659" -->
<!-- name="Brian Powell" -->
<!-- email="powellb_at_[hidden]" -->
<!-- subject="[OMPI users] Any Known Incompatibilities with ifort+gcc on MacOSX/Intel?" -->
<!-- id="47CB992D-8C70-4A53-B224-F4BBFD107F2F_at_ucsc.edu" -->
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
<strong>From:</strong> Brian Powell (<em>powellb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-12 21:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2783.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>I have been pounding my head trying to get a large Fortran/MPI  
<br>
package to work on MacOSX with ifort and openmpi. This is a MacBook  
<br>
Pro with core duo. I do NOT believe the fault lies with openmpi;  
<br>
however, after searching the archives, I will ask the list for  
<br>
assistance.
<br>
<p>1) I have compiled netcdf and openmpi with ifort and gcc.
<br>
2) I have compiled my code with mpif90 (using ifort with the same flags)
<br>
3) Run an mpi job with more than 1 processor, and the job hangs:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 executable input.txt
<br>
4) Run with 1 processor, and it runs fine:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 executable input.txt
<br>
<p>I have tried all of the above using both g95 and absoft10beta in  
<br>
place of ifort, and everything works fine. It appears to be an ifort  
<br>
issue. If I compile with debug on, it gets further and dies during a  
<br>
netcdf write.
<br>
<p>I apologize for the sparsity of this request. I have tried many  
<br>
FFLAGS consistently across netcdf, openmpi, and my code to ensure  
<br>
consistency, all to no avail.
<br>
<p>Anyhow, is this a threading issue with ifort? Are there any ideas out  
<br>
there for how to get ifort working, rather than using g95?
<br>
<p>Cheers,
<br>
Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2785.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<li><strong>Previous message:</strong> <a href="2783.php">Ralph Castain: "Re: [OMPI users] signal handling"</a>
<!-- nextthread="start" -->
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
