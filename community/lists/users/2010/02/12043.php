<?
$subject_val = "[OMPI users] openmpi fails to terminate for errors/signals on some but not all processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 14:29:43 2010" -->
<!-- isoreceived="20100208192943" -->
<!-- sent="Mon, 8 Feb 2010 13:29:38 -0600" -->
<!-- isosent="20100208192938" -->
<!-- name="Laurence Marks" -->
<!-- email="L-marks_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi fails to terminate for errors/signals on some but not all processes" -->
<!-- id="876512661002081129t7c92aa9ud0371a5beef767b0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes<br>
<strong>From:</strong> Laurence Marks (<em>L-marks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-08 14:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12044.php">Lubomir Klimes: "[OMPI users] Executing of external programs"</a>
<li><strong>Previous message:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Reply:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Reply:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was &quot;Re: [OMPI users] Trapping fortran I/O errors leaving zombie
<br>
mpi processes&quot;, but it is more severe than this.
<br>
<p>Sorry, but it appears that at least with ifort most run-time errors
<br>
and signals will leave zombie processes behind with openmpi if they
<br>
only occur on some of the processors and not all. You can test this
<br>
with the attached using (for instance)
<br>
<p>mpicc -c doraise.c
<br>
mpif90 -o crash_test crash_test.F doraise.o -FR -xHost -O3
<br>
<p>Then, as appropriate mpirun -np 8 crash_test
<br>
<p>The output is self explanatory, and has an option to both try and
<br>
simulate common fortran problems as well as to send fortran or C
<br>
signals to the process. Please note that the results can be dependent
<br>
upon the level of optimization, and with other compilers there could
<br>
be problems where the compiler complains about SIGSEV or other errors
<br>
since the code deliberately tries to create these.
<br>
<p><pre>
-- 
Laurence Marks
Department of Materials Science and Engineering
MSE Rm 2036 Cook Hall
2220 N Campus Drive
Northwestern University
Evanston, IL 60208, USA
Tel: (847) 491-3996 Fax: (847) 491-7820
email: L-marks at northwestern dot edu
Web: www.numis.northwestern.edu
Chair, Commission on Electron Crystallography of IUCR
www.numis.northwestern.edu/
Electron crystallography is the branch of science that uses electron
scattering and imaging to study the structure of matter.


</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12043/doraise.c">doraise.c</a>
</ul>
<!-- attachment="doraise.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12043/crash_test.F">crash_test.F</a>
</ul>
<!-- attachment="crash_test.F" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12044.php">Lubomir Klimes: "[OMPI users] Executing of external programs"</a>
<li><strong>Previous message:</strong> <a href="12042.php">Jed Brown: "Re: [OMPI users] Similar question about MPI_Create_type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Reply:</strong> <a href="12049.php">Laurence Marks: "Re: [OMPI users] openmpi fails to terminate for errors/signals on some but not all processes"</a>
<li><strong>Reply:</strong> <a href="12070.php">Douglas Guptill: "Re: [OMPI users] openmpi fails to terminate for errors/signals on	some but not all processes"</a>
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
