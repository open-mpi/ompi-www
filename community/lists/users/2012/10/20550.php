<?
$subject_val = "[OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 26 12:28:02 2012" -->
<!-- isoreceived="20121026162802" -->
<!-- sent="Fri, 26 Oct 2012 18:27:58 +0200" -->
<!-- isosent="20121026162758" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application" -->
<!-- id="CAH_fbj=6cUNcAj08_cThbgkKv2SF_bRXF71ZH2cjQmzoDBiFHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application<br>
<strong>From:</strong> Mathieu Gontier (<em>mathieu.gontier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-26 12:27:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20551.php">Mahmood Naderan: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<li><strong>Previous message:</strong> <a href="20549.php">Jeff Squyres: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am willing to use OpenMPI on Windows for a CFD instead of  MPICH2. My
<br>
solver is developed if Fortran77 and piloted by a C++ interface; the both
<br>
levels call MPI functions.
<br>
<p>So, I installed OpenMPI-1.6.2-x64 on my system and compiled my code
<br>
successfully. But, at the runtime it crashed.
<br>
I reproduced the problem into a small C application calling a Fortran
<br>
function using MPI_Allreduce; when I removed some aggressive optimization
<br>
options from the Fortran, it worked:
<br>
*
<br>
<p>&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;Optimization: Disable (/Od)
<br>
&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;Inline Function Expansion: Any Suitable (/Ob2)
<br>
&nbsp;&nbsp;&nbsp;-
<br>
<p>&nbsp;&nbsp;&nbsp;Favor Size or Speed: Favor Fast Code (/Ot)
<br>
<p>*
<br>
<p>So, I removed the same options from the Fortran parts of my solver, but it
<br>
still crashes. I tried some others, but it still continues crashing. Does
<br>
anybody has an idea? Should I (de)activate some compilation options? Is
<br>
there some properties to build and link against libmpi_f77.lib?
<br>
<p>Thanks for your help.
<br>
Mathieu.
<br>
<p><pre>
-- 
Mathieu Gontier
- MSN: mathieu.gontier_at_[hidden]
- Skype: mathieu_gontier
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20551.php">Mahmood Naderan: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<li><strong>Previous message:</strong> <a href="20549.php">Jeff Squyres: "Re: [OMPI users] running openmpi in debug/verbose mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Reply:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
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
