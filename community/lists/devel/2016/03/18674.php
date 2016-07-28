<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 21:11:24 2016" -->
<!-- isoreceived="20160304021124" -->
<!-- sent="Fri, 4 Mar 2016 11:11:23 +0900" -->
<!-- isosent="20160304021123" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="56D8EECB.1030000_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6CB078D4-B1F8-4854-8077-92005E9CB384_at_usgs.gov" -->
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
<strong>Date:</strong> 2016-03-03 21:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Larry,
<br>
<p>currently, OpenMPI generate mpif-sizeof.h with up to 15 dimensions with 
<br>
intel compilers, but up to 7 dimensions with &quot;recent&quot; gcc (for example 
<br>
gcc 5.2 and higher)
<br>
<p>so i guess the logic behind this is &quot;give the compiler all it can 
<br>
handle&quot;, so if intel somehow &quot;extended&quot; the standard to support up to 15 
<br>
dimensions,  then OpenMPI generates mpif-sizeof.h with up to 15 dimensions.
<br>
/* otherwise, you could use 10 dimensions arrays in your application, as 
<br>
long as they are not an argument of MPI_SIZEOF */
<br>
<p>Jeff, can you please comment on that ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/4/2016 10:43 AM, Larry Baker wrote:
<br>
<span class="quotelev1">&gt; I have never tried to mix compilers like Dave mentions.  In any event, 
</span><br>
<span class="quotelev1">&gt; the Fortran standard specifies no more than seven dimensions are 
</span><br>
<span class="quotelev1">&gt; allowed in an array declaration.  I'm puzzled why OpenMPI would 
</span><br>
<span class="quotelev1">&gt; generate code that violates the Fortran standard?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden] &lt;mailto:baker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3 Mar 2016, at 5:17 PM, Dave Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      My understanding is that OpenMPI built with either Intel or
</span><br>
<span class="quotelev2">&gt;&gt; GNU compilers should be able to use the other compilers using the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_CC and OMPI_FC environmental variables.
</span><br>
<span class="quotelev2">&gt;&gt;      For OpenMPI-1.8.8 built with Intel compilers, if you try to
</span><br>
<span class="quotelev2">&gt;&gt; compile any code that includes mpif.h using OMPI_FC=gfortran it
</span><br>
<span class="quotelev2">&gt;&gt; fails.  The Intel build creates mpi-sizeof.h that dimensions
</span><br>
<span class="quotelev2">&gt;&gt; arrays to more than 6 dimensions which gfortran cannot handle.
</span><br>
<span class="quotelev2">&gt;&gt; The example below illustrates this.
</span><br>
<span class="quotelev2">&gt;&gt;      I wasn't able to find any other reports like this on the
</span><br>
<span class="quotelev2">&gt;&gt; web, and I don't see any way of specifying a path to an alternate
</span><br>
<span class="quotelev2">&gt;&gt; mpif.h include file.  This looks to be a bug to me, but please let
</span><br>
<span class="quotelev2">&gt;&gt; me know if I missed a config flag somewhere.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Dave Turner
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Selene cat bugtest.F
</span><br>
<span class="quotelev2">&gt;&gt; ! Program to illustrate bug when OpenMPI is compiled with Intel
</span><br>
<span class="quotelev2">&gt;&gt; !    compilers but run using OMPI_FC=gfortran.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       PROGRAM BUGTEST
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       INCLUDE &quot;mpif.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       END
</span><br>
<span class="quotelev2">&gt;&gt; Selene cat go
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;Compile test using default ifort&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpifort --version
</span><br>
<span class="quotelev2">&gt;&gt; mpifort bugtest.F -o bugtest_ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;Compile test using gfortan when OpenMPI was compiled with 
</span><br>
<span class="quotelev2">&gt;&gt; ifort/icc&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpifort --version
</span><br>
<span class="quotelev2">&gt;&gt; mpifort bugtest.F -o bugtest_gfortran
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Selene ./go
</span><br>
<span class="quotelev2">&gt;&gt; Compile test using default ifort
</span><br>
<span class="quotelev2">&gt;&gt; ifort (IFORT) 15.0.3 20150407
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compile test using gfortan when OpenMPI was compiled with ifort/icc
</span><br>
<span class="quotelev2">&gt;&gt; GNU Fortran (Gentoo 4.9.3 p1.4, pie-0.6.4) 4.9.3
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2015 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev2">&gt;&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev2">&gt;&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev2">&gt;&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif-sizeof.h:75.48:
</span><br>
<span class="quotelev2">&gt;&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev2">&gt;&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev2">&gt;&gt;                                                 1
</span><br>
<span class="quotelev2">&gt;&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev2">&gt;&gt; mpif-sizeof.h:82.48:
</span><br>
<span class="quotelev2">&gt;&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev2">&gt;&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev2">&gt;&gt;                                                 1
</span><br>
<span class="quotelev2">&gt;&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev2">&gt;&gt; mpif-sizeof.h:89.48:
</span><br>
<span class="quotelev2">&gt;&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev2">&gt;&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev2">&gt;&gt;                                                 1
</span><br>
<span class="quotelev2">&gt;&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [ More of the same errors have been clipped ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Work: DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt;     (785) 532-7791
</span><br>
<span class="quotelev2">&gt;&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt;&gt; Home: DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18672.php">http://www.open-mpi.org/community/lists/devel/2016/03/18672.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18672.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18675.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
