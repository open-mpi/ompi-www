<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 23:50:58 2016" -->
<!-- isoreceived="20160304045058" -->
<!-- sent="Fri, 4 Mar 2016 15:50:54 +1100" -->
<!-- isosent="20160304045054" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran" -->
<!-- id="00c401d175d1$6f68f860$4e3ae920$_at_nci.org.au" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFGXdkzobc_xKF7iabDb65OSZhvag4tHB6B0BZ3gEOj69HhwsQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran<br>
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 23:50:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18684.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dave,
<br>
<p>&nbsp;
<br>
<p>Our wrappers are custom written by us for our machines, rather than provided by OpenMPI. I&#226;&#128;&#153;m not sure how the developers feel, but I&#226;&#128;&#153;m guessing that&#226;&#128;&#153;s probably how it should be since it&#226;&#128;&#153;s so highly dependent on the system environment. Plus, the wrappers are at the ifort / gfortran level, rather than mpifort &#226;&#128;&#147; this way it also works for all the other libraries that provide compiler-specific bindings (i.e. most packages).
<br>
<p>&nbsp;
<br>
<p>Essentially, they check each path in the list of include paths for a GNU or Intel subdirectory and add that as needed &#226;&#128;&#147; and similarly for the library directories. Of course, this breaks build systems (one relatively common one in particular) that expect the files to be in particular locations in the tree rather than just assuming the compiler knows what it&#226;&#128;&#153;s doing.
<br>
<p>&nbsp;
<br>
<p>We thought about doing &#226;&#128;&#156;module load openmpi/intel/1.10.2&#226;&#128;&#157; and so on (and similarly for the other packages &#226;&#128;&#147; we have about 200-300 in our /apps tree now), but decided against it due to the extra complication for our users &#226;&#128;&#147; especially since many just do &#226;&#128;&#156;module load openmpi&#226;&#128;&#157; and don&#226;&#128;&#153;t care about the version (yuck). I think there were other reasons as well, but that was before my time.
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>Ben
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Dave Turner
<br>
Sent: Friday, 4 March 2016 3:28 PM
<br>
To: Ben Menadue &lt;ben.menadue_at_[hidden]&gt;
<br>
Cc: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran
<br>
<p>&nbsp;
<br>
<p>All,
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ben's suggestion seems reasonable to me.  How about having the 
<br>
<p>mpifort script choose the correct mpif-sizeof.h header file based on
<br>
<p>the OMPI_FC compiler given at compile time?
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>&nbsp;
<br>
<p>On Thu, Mar 3, 2016 at 9:48 PM, Ben Menadue &lt;ben.menadue_at_[hidden] &lt;mailto:ben.menadue_at_[hidden]&gt; &gt; wrote:
<br>
<p>Hi Dave,
<br>
<p>&nbsp;
<br>
<p>The issue is the way MPI_Sizeof is handled; it's implemented as a series of interfaces that map the MPI_Sizeof call to the right function in the library. I suspect this is needed because that function doesn't take a datatype argument and instead infers this from the argument types - in Fortran, this is only possible if you use an interface to call a different function for each data type.
<br>
<p>&nbsp;
<br>
<p>Since &quot;real, dimension(:)&quot; is different from &quot;real, dimension(:, :)&quot; from the perspective of the interface, you need a separate entry for each possible array rank. In Fortran 2008 the maximum rank was increased to 15. This is supported in Intel Fortran and so the mpif-sizeof.h from such a build needs to have interface blocks for up to rank-15 arrays. However, the version of gfortran that you're using doesn&#226;&#128;&#153;t, and hence it complains when it sees the rank &gt; 7 interfaces in mpif-sizeof.h.
<br>
<p>&nbsp;
<br>
<p>To make it compatible between Fortran 2008 compliant and non-compliant compilers, you would need to implement MPI_Sizeof in a totally different fashion - if that&#226;&#128;&#153;s even possible.
<br>
<p>&nbsp;
<br>
<p>FWIW: We maintain two copies of mpif-sizeof.h in separate subdirectories &#226;&#128;&#147; one for gfortran and one for ifort. Then, there are wrappers around each of the compilers that adds the appropriate subdirectory to the include path. This makes it transparent to our users, and allows us to present a single build tree that works for both compilers.
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>Ben
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: devel [mailto: &lt;mailto:devel-bounces_at_[hidden]&gt; devel-bounces_at_[hidden]] On Behalf Of Dave Turner
<br>
Sent: Friday, 4 March 2016 2:23 PM
<br>
To: Larry Baker &lt; &lt;mailto:baker_at_[hidden]&gt; baker_at_[hidden]&gt;
<br>
Cc: Open MPI Developers &lt; &lt;mailto:devel_at_[hidden]&gt; devel_at_[hidden]&gt;
<br>
Subject: Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran
<br>
<p>&nbsp;
<br>
<p>All,
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I think that a GNU build of OpenMPI will allow compiling with both
<br>
<p>gfortan and ifort, so I think OMPI_FC is useful.  I'd like to see it fully
<br>
<p>supported if possible, so if the higher-dimensions in mpif-sizeof.h are
<br>
<p>not vital and there is another way of accomplishing the same thing I think
<br>
<p>it would be useful to address.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If not, I would at least like to see some warnings in the documentation
<br>
<p>of the OMPI_FC section that would list the cases like this where it will fail.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>&nbsp;
<br>
<p>On Thu, Mar 3, 2016 at 9:07 PM, Larry Baker &lt;baker_at_[hidden] &lt;mailto:baker_at_[hidden]&gt; &gt; wrote:
<br>
<p>Dave,
<br>
<p>&nbsp;
<br>
<p>Both Gilles and Chris raise important points.  You really cannot expect to mix modules from two different Fortran compilers in a single executable.  There is no requirement placed on a compiler by the Fortran standard for what object language it should use, how the information in modules is made available across compilation units, or the procedure calling conventions.  This makes me wonder, as you do, what the point is of the OMPI_CC and OMPI_FC environment variables?  I do think that Intel has tried to make their objects interoperable with GCC objects.  That is a link-time issue.  You are encountering compile-time issues.  Gilles says whatever mpif-sizeof.h was intended to define, it cannot be done in gfortran.  Even if mpif-sizeof.h generated for an Intel compiler was standard-conforming (so the errors you encountered are not show stoppers), I'm not sure you would be able to get past the incompatibility between the internal formats used by each compiler to store module definitions and declarations for later USE by another compilation unit.  I think your expectations cannot be fulfilled because of the compilers, not because of OpenMPI.
<br>
<p>&nbsp;
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
&nbsp;&lt;tel:650-329-5608&gt; 650-329-5608
<br>
&nbsp;&lt;mailto:baker_at_[hidden]&gt; baker_at_[hidden]
<br>
<p>&nbsp;
<br>
<p>On 3 Mar 2016, at 6:39 PM, Dave Turner wrote:
<br>
<p>&nbsp;
<br>
<p>Gilles,
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I don't see the point of having the OMPI_CC and OMPI_FC environment
<br>
<p>variables at all if you're saying that we shouldn't expect them to work.  I 
<br>
<p>actually do think they work fine if you do a GNU build and use them to
<br>
<p>specify the Intel compilers.  I also think it works fine when you do an
<br>
<p>Intel build and compile with gcc.  So to me it just looks like that one
<br>
<p>include file is the problem.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>&nbsp;
<br>
<p>On Thu, Mar 3, 2016 at 8:02 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt; &gt; wrote:
<br>
<p>Dave,
<br>
<p>you should not expect anything when mixing Fortran compilers
<br>
(and to be on the safe side, you might not expect much when mixing C/C++ compilers too,
<br>
for example, if you built ompi with intel and use gcc for your app, gcc might complain about unresolved symbols from the intel runtime)
<br>
<p>if you compile OpenMPI with gfortran 4.8.5, the automatically generated mpif-sizeof.h contains
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
<p>intel fortran compilers have the right stuff, so mpif-sizeof.h is usable, and you get something very different.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>&nbsp;
<br>
<p>On 3/4/2016 10:17 AM, Dave Turner wrote:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My understanding is that OpenMPI built with either Intel or
<br>
<p>GNU compilers should be able to use the other compilers using the
<br>
<p>OMPI_CC and OMPI_FC environmental variables.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For OpenMPI-1.8.8 built with Intel compilers, if you try to
<br>
<p>compile any code that includes mpif.h using OMPI_FC=gfortran it
<br>
<p>fails.  The Intel build creates mpi-sizeof.h that dimensions
<br>
<p>arrays to more than 6 dimensions which gfortran cannot handle.
<br>
<p>The example below illustrates this.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I wasn't able to find any other reports like this on the
<br>
<p>web, and I don't see any way of specifying a path to an alternate
<br>
<p>mpif.h include file.  This looks to be a bug to me, but please let
<br>
<p>me know if I missed a config flag somewhere.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Selene cat bugtest.F
<br>
<p>! Program to illustrate bug when OpenMPI is compiled with Intel
<br>
<p>!    compilers but run using OMPI_FC=gfortran.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROGRAM BUGTEST
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INCLUDE &quot;mpif.h&quot;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END
<br>
<p>Selene cat go
<br>
<p>#!/bin/bash
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>echo &quot;Compile test using default ifort&quot;
<br>
<p>&nbsp;
<br>
<p>mpifort --version
<br>
<p>mpifort bugtest.F -o bugtest_ifort
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>echo &quot;Compile test using gfortan when OpenMPI was compiled with ifort/icc&quot;
<br>
<p>&nbsp;
<br>
<p>export OMPI_FC=gfortran
<br>
<p>&nbsp;
<br>
<p>mpifort --version
<br>
<p>mpifort bugtest.F -o bugtest_gfortran
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Selene ./go
<br>
<p>Compile test using default ifort
<br>
<p>ifort (IFORT) 15.0.3 20150407
<br>
<p>Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
<br>
<p>&nbsp;
<br>
<p>Compile test using gfortan when OpenMPI was compiled with ifort/icc
<br>
<p>GNU Fortran (Gentoo 4.9.3 p1.4, pie-0.6.4) 4.9.3
<br>
<p>Copyright (C) 2015 Free Software Foundation, Inc.
<br>
<p>&nbsp;
<br>
<p>GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
<p>You may redistribute copies of GNU Fortran
<br>
<p>under the terms of the GNU General Public License.
<br>
<p>For more information about these matters, see the file named COPYING
<br>
<p>&nbsp;
<br>
<p>mpif-sizeof.h:75.48:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Included at mpif.h:61:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Included at bugtest.F:6:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,*)::x
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
<p>Error: Array specification at (1) has more than 7 dimensions
<br>
<p>mpif-sizeof.h:82.48:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Included at mpif.h:61:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Included at bugtest.F:6:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,*)::x
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
<p>Error: Array specification at (1) has more than 7 dimensions
<br>
<p>mpif-sizeof.h:89.48:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Included at mpif.h:61:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Included at bugtest.F:6:
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,1,*)::x
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
<p>Error: Array specification at (1) has more than 7 dimensions
<br>
<p>&nbsp;
<br>
<p>[ More of the same errors have been clipped ]
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><pre>
-- 
Work:     DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt;      (785) 532-7791 &lt;tel:%28785%29%20532-7791&gt;  
             2219 Durland, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt; 
              cell: (785) 770-5929 &lt;tel:%28785%29%20770-5929&gt; 
 
_______________________________________________
devel mailing list
devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; 
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
 
 
-- 
Work:     DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt;      (785) 532-7791 &lt;tel:%28785%29%20532-7791&gt; 
             2219 Durland, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt; 
              cell: (785) 770-5929 &lt;tel:%28785%29%20770-5929&gt; 
_______________________________________________
devel mailing list
devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; 
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18678.php">http://www.open-mpi.org/community/lists/devel/2016/03/18678.php</a>
 
 
-- 
Work:     DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt;      (785) 532-7791 &lt;tel:%28785%29%20532-7791&gt; 
             2219 Durland, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt; 
              cell: (785) 770-5929 &lt;tel:%28785%29%20770-5929&gt; 
 
-- 
Work:     DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt;      (785) 532-7791
             2219 Durland, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt; 
              cell: (785) 770-5929
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18686/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18684.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
