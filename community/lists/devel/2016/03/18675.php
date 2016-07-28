<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 21:20:27 2016" -->
<!-- isoreceived="20160304022027" -->
<!-- sent="Thu, 3 Mar 2016 18:20:14 -0800" -->
<!-- isosent="20160304022014" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="BC8EAFD5-6302-48D2-B620-97345CD62A5C_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56D8EECB.1030000_at_rist.or.jp" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 21:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18676.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18674.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18674.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Before anyone takes my opinion as gospel, I should note that I only checked my copies of the Fortran 90 Handbook (Adams et al.) and the Fortran 2003 Handbook (Adams et al.).  If more than seven dimensions is permitted by Fortran 2008 or Fortran 15, I stand corrected.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 3 Mar 2016, at 6:11 PM, Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; Larry,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; currently, OpenMPI generate mpif-sizeof.h with up to 15 dimensions with intel compilers, but up to 7 dimensions with &quot;recent&quot; gcc (for example gcc 5.2 and higher)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so i guess the logic behind this is &quot;give the compiler all it can handle&quot;, so if intel somehow &quot;extended&quot; the standard to support up to 15 dimensions,  then OpenMPI generates mpif-sizeof.h with up to 15 dimensions.
</span><br>
<span class="quotelev1">&gt; /* otherwise, you could use 10 dimensions arrays in your application, as long as they are not an argument of MPI_SIZEOF */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, can you please comment on that ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/4/2016 10:43 AM, Larry Baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have never tried to mix compilers like Dave mentions.  In any event, the Fortran standard specifies no more than seven dimensions are allowed in an array declaration.  I'm puzzled why OpenMPI would generate code that violates the Fortran standard?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3 Mar 2016, at 5:17 PM, Dave Turner wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      My understanding is that OpenMPI built with either Intel or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU compilers should be able to use the other compilers using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_CC and OMPI_FC environmental variables.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      For OpenMPI-1.8.8 built with Intel compilers, if you try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compile any code that includes mpif.h using OMPI_FC=gfortran it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fails.  The Intel build creates mpi-sizeof.h that dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arrays to more than 6 dimensions which gfortran cannot handle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The example below illustrates this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      I wasn't able to find any other reports like this on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; web, and I don't see any way of specifying a path to an alternate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif.h include file.  This looks to be a bug to me, but please let
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me know if I missed a config flag somewhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                Dave Turner
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Selene cat bugtest.F
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ! Program to illustrate bug when OpenMPI is compiled with Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !    compilers but run using OMPI_FC=gfortran.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PROGRAM BUGTEST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       INCLUDE &quot;mpif.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       END
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Selene cat go
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo &quot;Compile test using default ifort&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpifort --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpifort bugtest.F -o bugtest_ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo &quot;Compile test using gfortan when OpenMPI was compiled with ifort/icc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMPI_FC=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpifort --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpifort bugtest.F -o bugtest_gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Selene ./go
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compile test using default ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifort (IFORT) 15.0.3 20150407
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compile test using gfortan when OpenMPI was compiled with ifort/icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU Fortran (Gentoo 4.9.3 p1.4, pie-0.6.4) 4.9.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2015 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif-sizeof.h:75.48:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif-sizeof.h:82.48:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif-sizeof.h:89.48:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                                 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ More of the same errors have been clipped ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18672.php">http://www.open-mpi.org/community/lists/devel/2016/03/18672.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18674.php">http://www.open-mpi.org/community/lists/devel/2016/03/18674.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18676.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18674.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18674.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
