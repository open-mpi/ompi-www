<?
$subject_val = "[OMPI users] What's wrong with this code?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 16:41:31 2011" -->
<!-- isoreceived="20110222214131" -->
<!-- sent="Tue, 22 Feb 2011 16:41:26 -0500" -->
<!-- isosent="20110222214126" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] What's wrong with this code?" -->
<!-- id="4D642D86.3050105_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] What's wrong with this code?<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 16:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One of the researchers I support is writing some Fortran code that uses
<br>
Open MPI. The code is being compiled with the Intel Fortran compiler.
<br>
This one line of code:
<br>
<p>integer ierr,istatus(MPI_STATUS_SIZE)
<br>
<p>leads to these errors:
<br>
<p>$ mpif90 -o simplex simplexmain579m.for simplexsubs579
<br>
/usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-config.h(88):
<br>
error #6406: Conflicting attributes or multiple declaration of name.
<br>
[MPI_STATUS_SIZE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter (MPI_STATUS_SIZE=5)
<br>
-----------------^
<br>
simplexmain579m.for(147): error #6591: An automatic object is invalid in
<br>
a main program.   [ISTATUS]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr,istatus(MPI_STATUS_SIZE)
<br>
---------------------^
<br>
simplexmain579m.for(147): error #6219: A specification expression object
<br>
must be a dummy argument, a COMMON block object, or an object accessible
<br>
through host or use association   [MPI_STATUS_SIZE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr,istatus(MPI_STATUS_SIZE)
<br>
-----------------------------^
<br>
/usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-common.h(211):
<br>
error #6756: A COMMON block data object must not be an automatic object.
<br>
&nbsp;&nbsp;[MPI_STATUS_IGNORE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer MPI_STATUS_IGNORE(MPI_STATUS_SIZE)
<br>
--------------^
<br>
/usr/local/openmpi-1.2.8/intel-11/x86_64/include/mpif-common.h(211):
<br>
error #6591: An automatic object is invalid in a main program.
<br>
[MPI_STATUS_IGNORE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer MPI_STATUS_IGNORE(MPI_STATUS_SIZE)
<br>
<p><p>Any idea how to fix this? Is this a bug in the Intel compiler, or the code?
<br>
<p>Some additional information:
<br>
<p>$ mpif90 --showme
<br>
ifort -I/usr/local/openmpi-1.2.8/intel-11/x86_64/include
<br>
-I/usr/local/openmpi-1.2.8/intel-11/x86_64/lib
<br>
-L/usr/local/openmpi-1.2.8/intel-11/x86_64/lib -lmpi_f90 -lmpi_f77 -lmpi
<br>
-lopen-rte -lopen-pal -libverbs -lrt -lnuma -ldl -Wl,--export-dynamic
<br>
-lnsl -lutil
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Previous message:</strong> <a href="15684.php">Jeff Squyres: "Re: [OMPI users] Beginner's question: why multiple sends or receives don't work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15686.php">Tim Prince: "Re: [OMPI users] What's wrong with this code?"</a>
<li><strong>Reply:</strong> <a href="15687.php">Jeff Squyres: "Re: [OMPI users] What's wrong with this code?"</a>
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
