<?
$subject_val = "[OMPI users] OPEN_MPI macro for mpif.h?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 16:09:38 2010" -->
<!-- isoreceived="20100329200938" -->
<!-- sent="Mon, 29 Mar 2010 22:10:02 +0200" -->
<!-- isosent="20100329201002" -->
<!-- name="Martin Bernreuther" -->
<!-- email="bernreuther_at_[hidden]" -->
<!-- subject="[OMPI users] OPEN_MPI macro for mpif.h?" -->
<!-- id="201003292210.02544.bernreuther_at_hlrs.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OPEN_MPI macro for mpif.h?<br>
<strong>From:</strong> Martin Bernreuther (<em>bernreuther_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 16:10:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12464.php">Jody Klymak: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12496.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI macro for mpif.h?"</a>
<li><strong>Reply:</strong> <a href="12496.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI macro for mpif.h?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>looking at the Open MPI mpi.h include file there's a preprocessor macro
<br>
OPEN_MPI defined, as well as e.g. OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION
<br>
and OMPI_RELEASE_VERSION. version.h e.g. also defines OMPI_VERSION
<br>
This seems to be missing in mpif.h and therefore something like
<br>
<p>include 'mpif.h'
<br>
[...]
<br>
#ifdef OPEN_MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write( *, '(&quot;MPI library: OpenMPI&quot;,I2,&quot;.&quot;,I2,&quot;.&quot;,I2)' ) &amp;
<br>
&amp;            OMPI_MAJOR_VERSION, OMPI_MINOR_VERSION, OMPI_RELEASE_VERSION
<br>
#endif
<br>
<p>doesn't work for a FORTRAN openmpi program. 
<br>
<p>Which are the Open MPI specific preprocessor macros to be used for the
<br>
Fortran binding?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin
<br>
<pre>
-- 
________________________________________________________________________
   Dr.-Ing. Martin Bernreuther
   University of Stuttgart
   High Performance Computing Center (HLRS)
   Nobelstrasse 19 (Office: Allmandring 30, 0.032)
   70569 Stuttgart, Germany
  
   Phone: (++49-(0)711) 685-64542, Fax: (++49-(0)711) 685-65832
   E-Mail: bernreuther_at_[hidden]
   URL: <a href="http://www.hlrs.de/people/bernreuther/">http://www.hlrs.de/people/bernreuther/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Previous message:</strong> <a href="12464.php">Jody Klymak: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12496.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI macro for mpif.h?"</a>
<li><strong>Reply:</strong> <a href="12496.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI macro for mpif.h?"</a>
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
