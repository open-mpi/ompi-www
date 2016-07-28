<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 21:02:09 2016" -->
<!-- isoreceived="20160304020209" -->
<!-- sent="Fri, 4 Mar 2016 11:02:08 +0900" -->
<!-- isosent="20160304020208" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="56D8ECA0.8080302_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAFGXdkw18XGEiJ92ec5Q=ed0J7v_MnxQe3pROYCQ1LP4gEGzKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 21:02:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18674.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18671.php">Dave Turner: "[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18678.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18678.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>you should not expect anything when mixing Fortran compilers
<br>
(and to be on the safe side, you might not expect much when mixing C/C++ 
<br>
compilers too,
<br>
for example, if you built ompi with intel and use gcc for your app, gcc 
<br>
might complain about unresolved symbols from the intel runtime)
<br>
<p>if you compile OpenMPI with gfortran 4.8.5, the automatically generated 
<br>
mpif-sizeof.h contains
<br>
<p>! Sad panda.
<br>
!
<br>
! This compiler does not support the Right Stuff to enable MPI_SIZEOF.
<br>
! Specifically: we need support for the INTERFACE keyword,
<br>
! ISO_FORTRAN_ENV, and the STORAGE_SIZE() intrinsic on all types.
<br>
! Apparently, this compiler does not support both of those things, so
<br>
! this file will be (effecitvely) blank (i.e., we didn't bother
<br>
! generating the necessary stuff for MPI_SIZEOF because the compiler
<br>
! doesn't support
<br>
! it).
<br>
!
<br>
! If you want support for MPI_SIZEOF, please use a different Fortran
<br>
! compiler to build Open MPI.
<br>
<p>intel fortran compilers have the right stuff, so mpif-sizeof.h is 
<br>
usable, and you get something very different.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/4/2016 10:17 AM, Dave Turner wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      My understanding is that OpenMPI built with either Intel or
</span><br>
<span class="quotelev1">&gt; GNU compilers should be able to use the other compilers using the
</span><br>
<span class="quotelev1">&gt; OMPI_CC and OMPI_FC environmental variables.
</span><br>
<span class="quotelev1">&gt;      For OpenMPI-1.8.8 built with Intel compilers, if you try to
</span><br>
<span class="quotelev1">&gt; compile any code that includes mpif.h using OMPI_FC=gfortran it
</span><br>
<span class="quotelev1">&gt; fails.  The Intel build creates mpi-sizeof.h that dimensions
</span><br>
<span class="quotelev1">&gt; arrays to more than 6 dimensions which gfortran cannot handle.
</span><br>
<span class="quotelev1">&gt; The example below illustrates this.
</span><br>
<span class="quotelev1">&gt;      I wasn't able to find any other reports like this on the
</span><br>
<span class="quotelev1">&gt; web, and I don't see any way of specifying a path to an alternate
</span><br>
<span class="quotelev1">&gt; mpif.h include file.  This looks to be a bug to me, but please let
</span><br>
<span class="quotelev1">&gt; me know if I missed a config flag somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                Dave Turner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Selene cat bugtest.F
</span><br>
<span class="quotelev1">&gt; ! Program to illustrate bug when OpenMPI is compiled with Intel
</span><br>
<span class="quotelev1">&gt; !    compilers but run using OMPI_FC=gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PROGRAM BUGTEST
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INCLUDE &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       END
</span><br>
<span class="quotelev1">&gt; Selene cat go
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;Compile test using default ifort&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort --version
</span><br>
<span class="quotelev1">&gt; mpifort bugtest.F -o bugtest_ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;Compile test using gfortan when OpenMPI was compiled with ifort/icc&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_FC=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort --version
</span><br>
<span class="quotelev1">&gt; mpifort bugtest.F -o bugtest_gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Selene ./go
</span><br>
<span class="quotelev1">&gt; Compile test using default ifort
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 15.0.3 20150407
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compile test using gfortan when OpenMPI was compiled with ifort/icc
</span><br>
<span class="quotelev1">&gt; GNU Fortran (Gentoo 4.9.3 p1.4, pie-0.6.4) 4.9.3
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2015 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h:75.48:
</span><br>
<span class="quotelev1">&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev1">&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev1">&gt;                                                 1
</span><br>
<span class="quotelev1">&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h:82.48:
</span><br>
<span class="quotelev1">&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev1">&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev1">&gt;                                                 1
</span><br>
<span class="quotelev1">&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h:89.48:
</span><br>
<span class="quotelev1">&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev1">&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev1">&gt;                                                 1
</span><br>
<span class="quotelev1">&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ More of the same errors have been clipped ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Work: DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt;     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; Home: DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18674.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18671.php">Dave Turner: "[OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18678.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18678.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
