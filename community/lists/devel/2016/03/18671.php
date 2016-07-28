<?
$subject_val = "[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 20:17:08 2016" -->
<!-- isoreceived="20160304011708" -->
<!-- sent="Thu, 3 Mar 2016 19:17:07 -0600" -->
<!-- isosent="20160304011707" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="CAFGXdkw18XGEiJ92ec5Q=ed0J7v_MnxQe3pROYCQ1LP4gEGzKg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 20:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18670.php">dpchoudh .: "[OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18676.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My understanding is that OpenMPI built with either Intel or
<br>
GNU compilers should be able to use the other compilers using the
<br>
OMPI_CC and OMPI_FC environmental variables.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For OpenMPI-1.8.8 built with Intel compilers, if you try to
<br>
compile any code that includes mpif.h using OMPI_FC=gfortran it
<br>
fails.  The Intel build creates mpi-sizeof.h that dimensions
<br>
arrays to more than 6 dimensions which gfortran cannot handle.
<br>
The example below illustrates this.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I wasn't able to find any other reports like this on the
<br>
web, and I don't see any way of specifying a path to an alternate
<br>
mpif.h include file.  This looks to be a bug to me, but please let
<br>
me know if I missed a config flag somewhere.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>
<p><p><p>Selene cat bugtest.F
<br>
! Program to illustrate bug when OpenMPI is compiled with Intel
<br>
!    compilers but run using OMPI_FC=gfortran.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROGRAM BUGTEST
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INCLUDE &quot;mpif.h&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END
<br>
Selene cat go
<br>
#!/bin/bash
<br>
<p><p>echo &quot;Compile test using default ifort&quot;
<br>
<p>mpifort --version
<br>
mpifort bugtest.F -o bugtest_ifort
<br>
<p><p>echo &quot;Compile test using gfortan when OpenMPI was compiled with ifort/icc&quot;
<br>
<p>export OMPI_FC=gfortran
<br>
<p>mpifort --version
<br>
mpifort bugtest.F -o bugtest_gfortran
<br>
<p><p>Selene ./go
<br>
Compile test using default ifort
<br>
ifort (IFORT) 15.0.3 20150407
<br>
Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
<br>
<p>Compile test using gfortan when OpenMPI was compiled with ifort/icc
<br>
GNU Fortran (Gentoo 4.9.3 p1.4, pie-0.6.4) 4.9.3
<br>
Copyright (C) 2015 Free Software Foundation, Inc.
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>
<p>mpif-sizeof.h:75.48:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at mpif.h:61:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at bugtest.F:6:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,*)::x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Array specification at (1) has more than 7 dimensions
<br>
mpif-sizeof.h:82.48:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at mpif.h:61:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at bugtest.F:6:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,*)::x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Array specification at (1) has more than 7 dimensions
<br>
mpif-sizeof.h:89.48:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at mpif.h:61:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Included at bugtest.F:6:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,1,*)::x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Array specification at (1) has more than 7 dimensions
<br>
<p>[ More of the same errors have been clipped ]
<br>
<p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             2219 Durland, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18670.php">dpchoudh .: "[OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18676.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
