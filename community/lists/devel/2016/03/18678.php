<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 21:39:10 2016" -->
<!-- isoreceived="20160304023910" -->
<!-- sent="Thu, 3 Mar 2016 20:39:09 -0600" -->
<!-- isosent="20160304023909" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="CAFGXdkxTmDWu1D5eKi1zPnnwgKW-AxQUsfF=+FHuUEnHaYQYyQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56D8ECA0.8080302_at_rist.or.jp" -->
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
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 21:39:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18679.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I don't see the point of having the OMPI_CC and OMPI_FC environment
<br>
variables at all if you're saying that we shouldn't expect them to work.  I
<br>
actually do think they work fine if you do a GNU build and use them to
<br>
specify the Intel compilers.  I also think it works fine when you do an
<br>
Intel build and compile with gcc.  So to me it just looks like that one
<br>
include file is the problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>On Thu, Mar 3, 2016 at 8:02 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you should not expect anything when mixing Fortran compilers
</span><br>
<span class="quotelev1">&gt; (and to be on the safe side, you might not expect much when mixing C/C++
</span><br>
<span class="quotelev1">&gt; compilers too,
</span><br>
<span class="quotelev1">&gt; for example, if you built ompi with intel and use gcc for your app, gcc
</span><br>
<span class="quotelev1">&gt; might complain about unresolved symbols from the intel runtime)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you compile OpenMPI with gfortran 4.8.5, the automatically generated
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h contains
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ! Sad panda.
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; ! This compiler does not support the Right Stuff to enable MPI_SIZEOF.
</span><br>
<span class="quotelev1">&gt; ! Specifically: we need support for the INTERFACE keyword,
</span><br>
<span class="quotelev1">&gt; ! ISO_FORTRAN_ENV, and the STORAGE_SIZE() intrinsic on all types.
</span><br>
<span class="quotelev1">&gt; ! Apparently, this compiler does not support both of those things, so
</span><br>
<span class="quotelev1">&gt; ! this file will be (effecitvely) blank (i.e., we didn't bother
</span><br>
<span class="quotelev1">&gt; ! generating the necessary stuff for MPI_SIZEOF because the compiler
</span><br>
<span class="quotelev1">&gt; ! doesn't support
</span><br>
<span class="quotelev1">&gt; ! it).
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; ! If you want support for MPI_SIZEOF, please use a different Fortran
</span><br>
<span class="quotelev1">&gt; ! compiler to build Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; intel fortran compilers have the right stuff, so mpif-sizeof.h is usable,
</span><br>
<span class="quotelev1">&gt; and you get something very different.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/4/2016 10:17 AM, Dave Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             2219 Durland, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18679.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18677.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18673.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
