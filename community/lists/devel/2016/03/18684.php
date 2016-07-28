<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 23:27:54 2016" -->
<!-- isoreceived="20160304042754" -->
<!-- sent="Thu, 3 Mar 2016 22:27:51 -0600" -->
<!-- isosent="20160304042751" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="CAFGXdkzobc_xKF7iabDb65OSZhvag4tHB6B0BZ3gEOj69HhwsQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="008201d175c8$b97dbf70$2c793e50$_at_nci.org.au" -->
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
<strong>Date:</strong> 2016-03-03 23:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ben's suggestion seems reasonable to me.  How about having the
<br>
mpifort script choose the correct mpif-sizeof.h header file based on
<br>
the OMPI_FC compiler given at compile time?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p>On Thu, Mar 3, 2016 at 9:48 PM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is the way MPI_Sizeof is handled; it's implemented as a series
</span><br>
<span class="quotelev1">&gt; of interfaces that map the MPI_Sizeof call to the right function in the
</span><br>
<span class="quotelev1">&gt; library. I suspect this is needed because that function doesn't take a
</span><br>
<span class="quotelev1">&gt; datatype argument and instead infers this from the argument types - in
</span><br>
<span class="quotelev1">&gt; Fortran, this is only possible if you use an interface to call a different
</span><br>
<span class="quotelev1">&gt; function for each data type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since &quot;real, dimension(:)&quot; is different from &quot;real, dimension(:, :)&quot; from
</span><br>
<span class="quotelev1">&gt; the perspective of the interface, you need a separate entry for each
</span><br>
<span class="quotelev1">&gt; possible array rank. In Fortran 2008 the maximum rank was increased to 15.
</span><br>
<span class="quotelev1">&gt; This is supported in Intel Fortran and so the mpif-sizeof.h from such a
</span><br>
<span class="quotelev1">&gt; build needs to have interface blocks for up to rank-15 arrays. However, the
</span><br>
<span class="quotelev1">&gt; version of gfortran that you're using doesn&#226;&#128;&#153;t, and hence it complains when
</span><br>
<span class="quotelev1">&gt; it sees the rank &gt; 7 interfaces in mpif-sizeof.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To make it compatible between Fortran 2008 compliant and non-compliant
</span><br>
<span class="quotelev1">&gt; compilers, you would need to implement MPI_Sizeof in a totally different
</span><br>
<span class="quotelev1">&gt; fashion - if that&#226;&#128;&#153;s even possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: We maintain two copies of mpif-sizeof.h in separate subdirectories &#226;&#128;&#147;
</span><br>
<span class="quotelev1">&gt; one for gfortran and one for ifort. Then, there are wrappers around each of
</span><br>
<span class="quotelev1">&gt; the compilers that adds the appropriate subdirectory to the include path.
</span><br>
<span class="quotelev1">&gt; This makes it transparent to our users, and allows us to present a single
</span><br>
<span class="quotelev1">&gt; build tree that works for both compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Dave
</span><br>
<span class="quotelev1">&gt; Turner
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, 4 March 2016 2:23 PM
</span><br>
<span class="quotelev1">&gt; *To:* Larry Baker &lt;baker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Cc:* Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] mpif.h on Intel build when run with
</span><br>
<span class="quotelev1">&gt; OMPI_FC=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I think that a GNU build of OpenMPI will allow compiling with both
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gfortan and ifort, so I think OMPI_FC is useful.  I'd like to see it fully
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; supported if possible, so if the higher-dimensions in mpif-sizeof.h are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; not vital and there is another way of accomplishing the same thing I think
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it would be useful to address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      If not, I would at least like to see some warnings in the
</span><br>
<span class="quotelev1">&gt; documentation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; of the OMPI_FC section that would list the cases like this where it will
</span><br>
<span class="quotelev1">&gt; fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 3, 2016 at 9:07 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I don't see the point of having the OMPI_CC and OMPI_FC environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variables at all if you're saying that we shouldn't expect them to work.
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; actually do think they work fine if you do a GNU build and use them to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; specify the Intel compilers.  I also think it works fine when you do an
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel build and compile with gcc.  So to me it just looks like that one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include file is the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 3, 2016 at 8:02 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/4/2016 10:17 AM, Dave Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      My understanding is that OpenMPI built with either Intel or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU compilers should be able to use the other compilers using the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CC and OMPI_FC environmental variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      For OpenMPI-1.8.8 built with Intel compilers, if you try to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compile any code that includes mpif.h using OMPI_FC=gfortran it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fails.  The Intel build creates mpi-sizeof.h that dimensions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; arrays to more than 6 dimensions which gfortran cannot handle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The example below illustrates this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I wasn't able to find any other reports like this on the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; web, and I don't see any way of specifying a path to an alternate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif.h include file.  This looks to be a bug to me, but please let
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; me know if I missed a config flag somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Selene cat bugtest.F
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ! Program to illustrate bug when OpenMPI is compiled with Intel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !    compilers but run using OMPI_FC=gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PROGRAM BUGTEST
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INCLUDE &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       END
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Selene cat go
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;Compile test using default ifort&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort --version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort bugtest.F -o bugtest_ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;Compile test using gfortan when OpenMPI was compiled with ifort/icc&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPI_FC=gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort --version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpifort bugtest.F -o bugtest_gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Selene ./go
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compile test using default ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 15.0.3 20150407
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compile test using gfortan when OpenMPI was compiled with ifort/icc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU Fortran (Gentoo 4.9.3 p1.4, pie-0.6.4) 4.9.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2015 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h:75.48:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h:82.48:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif-sizeof.h:89.48:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Included at mpif.h:61:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Included at bugtest.F:6:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ More of the same errors have been clipped ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;               cell: (785) 770-5929
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Work:     DaveTurner_at_[hidden]     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; Home:    DrDaveTurner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;               cell: (785) 770-5929
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             2219 Durland, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18685.php">Gilles Gouaillardet: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18683.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Reply:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
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
