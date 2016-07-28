<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 22:22:35 2016" -->
<!-- isoreceived="20160304032235" -->
<!-- sent="Thu, 3 Mar 2016 21:22:34 -0600" -->
<!-- isosent="20160304032234" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="CAFGXdkw8+rtQi2_fkk5k2r4K8SeJwpRQsjdxY+5i8EAeBQfgzQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="508D750B-3025-4834-AD56-19B567F86687_at_usgs.gov" -->
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
<strong>Date:</strong> 2016-03-03 22:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18681.php">Michael Rezny: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I think that a GNU build of OpenMPI will allow compiling with both
<br>
gfortan and ifort, so I think OMPI_FC is useful.  I'd like to see it fully
<br>
supported if possible, so if the higher-dimensions in mpif-sizeof.h are
<br>
not vital and there is another way of accomplishing the same thing I think
<br>
it would be useful to address.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If not, I would at least like to see some warnings in the documentation
<br>
of the OMPI_FC section that would list the cases like this where it will
<br>
fail.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>On Thu, Mar 3, 2016 at 9:07 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both Gilles and Chris raise important points.  You really cannot expect to
</span><br>
<span class="quotelev1">&gt; mix modules from two different Fortran compilers in a single executable.
</span><br>
<span class="quotelev1">&gt; There is no requirement placed on a compiler by the Fortran standard for
</span><br>
<span class="quotelev1">&gt; what object language it should use, how the information in modules is made
</span><br>
<span class="quotelev1">&gt; available across compilation units, or the procedure calling conventions.
</span><br>
<span class="quotelev1">&gt; This makes me wonder, as you do, what the point is of the OMPI_CC and
</span><br>
<span class="quotelev1">&gt; OMPI_FC environment variables?  I do think that Intel has tried to make
</span><br>
<span class="quotelev1">&gt; their objects interoperable with GCC objects.  That is a link-time issue.
</span><br>
<span class="quotelev1">&gt; You are encountering compile-time issues.  Gilles says whatever
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h was intended to define, it cannot be done in gfortran.  Even
</span><br>
<span class="quotelev1">&gt; if mpif-sizeof.h generated for an Intel compiler was standard-conforming
</span><br>
<span class="quotelev1">&gt; (so the errors you encountered are not show stoppers), I'm not sure you
</span><br>
<span class="quotelev1">&gt; would be able to get past the incompatibility between the internal formats
</span><br>
<span class="quotelev1">&gt; used by each compiler to store module definitions and declarations for
</span><br>
<span class="quotelev1">&gt; later USE by another compilation unit.  I think your expectations cannot be
</span><br>
<span class="quotelev1">&gt; fulfilled because of the compilers, not because of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3 Mar 2016, at 6:39 PM, Dave Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I don't see the point of having the OMPI_CC and OMPI_FC environment
</span><br>
<span class="quotelev1">&gt; variables at all if you're saying that we shouldn't expect them to work.
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; actually do think they work fine if you do a GNU build and use them to
</span><br>
<span class="quotelev1">&gt; specify the Intel compilers.  I also think it works fine when you do an
</span><br>
<span class="quotelev1">&gt; Intel build and compile with gcc.  So to me it just looks like that one
</span><br>
<span class="quotelev1">&gt; include file is the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 3, 2016 at 8:02 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you should not expect anything when mixing Fortran compilers
</span><br>
<span class="quotelev2">&gt;&gt; (and to be on the safe side, you might not expect much when mixing C/C++
</span><br>
<span class="quotelev2">&gt;&gt; compilers too,
</span><br>
<span class="quotelev2">&gt;&gt; for example, if you built ompi with intel and use gcc for your app, gcc
</span><br>
<span class="quotelev2">&gt;&gt; might complain about unresolved symbols from the intel runtime)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you compile OpenMPI with gfortran 4.8.5, the automatically generated
</span><br>
<span class="quotelev2">&gt;&gt; mpif-sizeof.h contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ! Sad panda.
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; ! This compiler does not support the Right Stuff to enable MPI_SIZEOF.
</span><br>
<span class="quotelev2">&gt;&gt; ! Specifically: we need support for the INTERFACE keyword,
</span><br>
<span class="quotelev2">&gt;&gt; ! ISO_FORTRAN_ENV, and the STORAGE_SIZE() intrinsic on all types.
</span><br>
<span class="quotelev2">&gt;&gt; ! Apparently, this compiler does not support both of those things, so
</span><br>
<span class="quotelev2">&gt;&gt; ! this file will be (effecitvely) blank (i.e., we didn't bother
</span><br>
<span class="quotelev2">&gt;&gt; ! generating the necessary stuff for MPI_SIZEOF because the compiler
</span><br>
<span class="quotelev2">&gt;&gt; ! doesn't support
</span><br>
<span class="quotelev2">&gt;&gt; ! it).
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; ! If you want support for MPI_SIZEOF, please use a different Fortran
</span><br>
<span class="quotelev2">&gt;&gt; ! compiler to build Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; intel fortran compilers have the right stuff, so mpif-sizeof.h is usable,
</span><br>
<span class="quotelev2">&gt;&gt; and you get something very different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/4/2016 10:17 AM, Dave Turner wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; echo &quot;Compile test using gfortan when OpenMPI was compiled with ifort/icc&quot;
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
<span class="quotelev2">&gt;&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev2">&gt;&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt;&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18678.php">http://www.open-mpi.org/community/lists/devel/2016/03/18678.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18682/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18681.php">Michael Rezny: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18680.php">Larry Baker: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
