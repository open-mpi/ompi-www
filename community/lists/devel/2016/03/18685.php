<?
$subject_val = "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 23:39:54 2016" -->
<!-- isoreceived="20160304043954" -->
<!-- sent="Fri, 4 Mar 2016 13:39:50 +0900" -->
<!-- isosent="20160304043950" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran" -->
<!-- id="56D91196.1090009_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAFGXdkw8+rtQi2_fkk5k2r4K8SeJwpRQsjdxY+5i8EAeBQfgzQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-03 23:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18684.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18682.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18676.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dave,
<br>
<p>As an OpenMPI developer, i strongly encourage everyone to use Fortran 
<br>
2008 bindings
<br>
(e.g. use mpi_f08) whenever possible. Main reason is some ambiguous 
<br>
stuff from legacy fortran bindings
<br>
have been removed, and type checking is much better and hence less error 
<br>
prone.
<br>
since Fortran modules are not interoperable, that could allow me to 
<br>
avoid answering your request ...
<br>
<p>Note mangling is an other source of issues in Fortran (no/single/double 
<br>
underscore, or even all lower case or all upper case) regarding 
<br>
interoperability.
<br>
<p>MPI_Sizeof is just a nightmare in (legacy ?) Fortran, for example :
<br>
- gfortran 4.8.5 (stock compiler in RHEL7) does not support MPI_Sizeof
<br>
- gfortran (probably since 4.9.2, tested with 5.2.0, a snapshot of 
<br>
upcoming 6.0.0) does support up to 7 dimensions
<br>
- intel compiler (at least the recent ones) does support up to 15 dimensions
<br>
<p>the common denominator here is &quot;no support for MPI_Sizeof in legacy 
<br>
Fortran&quot;.
<br>
a less extreme option could be to add a configure parameter to force the 
<br>
number of dimensions
<br>
(e.g. 0, 7 or 15). If you force it to 7, it will be up to you to explain 
<br>
your endusers why MPI_Sizeof does not
<br>
work with 10 dimesions array in Intel Fortran ...
<br>
doing that would be basically providing a workaround to do something 
<br>
that is discouraged.
<br>
(&quot;something&quot; here means 'include mpif.h&quot; and assume everything will be 
<br>
fine, whereas use of
<br>
Fortran 2008 bindings is encouraged)
<br>
<p><p>imho, the &quot;right&quot; way is to use modules and several OpenMPI install dirs.
<br>
(e.g. module load compiler/&lt;vendor&gt;/&lt;version&gt;/&lt;option&gt;; module load ompi,
<br>
properly configured modules will do the magic and pick the ompi tree 
<br>
that works)
<br>
that obviously requires more disk space and time to build, but on the 
<br>
bright side,
<br>
disk is getting cheaper and having happy endusers have always been 
<br>
priceless.
<br>
<p><p>We could somehow automate what Ben Menadue is doing
<br>
(e.g. use one directory per vendor (or vendor x version x &quot;-i8 or not&quot;)).
<br>
i am sure it would make vendors and those who use gnu + one other vendor 
<br>
happy,
<br>
but i am not sure that could easily work with more than two vendors.
<br>
i need to give it some thoughts and let other folks comment about that.
<br>
i will double check the documentation per your recommendation.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>FWIW, from ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
<p># Script to generate the overloaded MPI_SIZEOF interfaces and
<br>
# subroutine bodies for both the mpi and mpi_f08 modules.
<br>
#
<br>
# This script won't really be necessary (i.e., be a whole lot simpler)
<br>
# when Fortran compilers uniformly supprort TS 29113 -- i.e., they
<br>
# support dimension(..).  Using dimension(..), you can have just *one*
<br>
# procedure for every type, and dimension(..) will resolve to both
<br>
# scalars and all possible ranks.
<br>
#
<br>
# But for the meantime, we generate for all ranks so that we support
<br>
# as many compilers as possible.  :-\ (we don't check the compiler and
<br>
# see if it supports dimension(..) and do a different generation based
<br>
# on that, because we already have a zillion different options in the
<br>
# Fortran support -- let's just do MPI_Sizeof this one way in the name
<br>
# of simplicity...).
<br>
#
<br>
<p><p><p><p>On 3/4/2016 12:22 PM, Dave Turner wrote:
<br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I think that a GNU build of OpenMPI will allow compiling with both
</span><br>
<span class="quotelev1">&gt; gfortan and ifort, so I think OMPI_FC is useful.  I'd like to see it fully
</span><br>
<span class="quotelev1">&gt; supported if possible, so if the higher-dimensions in mpif-sizeof.h are
</span><br>
<span class="quotelev1">&gt; not vital and there is another way of accomplishing the same thing I think
</span><br>
<span class="quotelev1">&gt; it would be useful to address.
</span><br>
<span class="quotelev1">&gt;      If not, I would at least like to see some warnings in the 
</span><br>
<span class="quotelev1">&gt; documentation
</span><br>
<span class="quotelev1">&gt; of the OMPI_FC section that would list the cases like this where it 
</span><br>
<span class="quotelev1">&gt; will fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 3, 2016 at 9:07 PM, Larry Baker &lt;baker_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:baker_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Both Gilles and Chris raise important points.  You really cannot
</span><br>
<span class="quotelev1">&gt;     expect to mix modules from two different Fortran compilers in a
</span><br>
<span class="quotelev1">&gt;     single executable.  There is no requirement placed on a compiler
</span><br>
<span class="quotelev1">&gt;     by the Fortran standard for what object language it should use,
</span><br>
<span class="quotelev1">&gt;     how the information in modules is made available across
</span><br>
<span class="quotelev1">&gt;     compilation units, or the procedure calling conventions.  This
</span><br>
<span class="quotelev1">&gt;     makes me wonder, as you do, what the point is of the OMPI_CC and
</span><br>
<span class="quotelev1">&gt;     OMPI_FC environment variables?  I do think that Intel has tried to
</span><br>
<span class="quotelev1">&gt;     make their objects interoperable with GCC objects.  That is a
</span><br>
<span class="quotelev1">&gt;     link-time issue.  You are encountering compile-time issues. 
</span><br>
<span class="quotelev1">&gt;     Gilles says whatever mpif-sizeof.h was intended to define, it
</span><br>
<span class="quotelev1">&gt;     cannot be done in gfortran.  Even if mpif-sizeof.h generated for
</span><br>
<span class="quotelev1">&gt;     an Intel compiler was standard-conforming (so the errors you
</span><br>
<span class="quotelev1">&gt;     encountered are not show stoppers), I'm not sure you would be able
</span><br>
<span class="quotelev1">&gt;     to get past the incompatibility between the internal formats used
</span><br>
<span class="quotelev1">&gt;     by each compiler to store module definitions and declarations for
</span><br>
<span class="quotelev1">&gt;     later USE by another compilation unit.  I think your expectations
</span><br>
<span class="quotelev1">&gt;     cannot be fulfilled because of the compilers, not because of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Larry Baker
</span><br>
<span class="quotelev1">&gt;     US Geological Survey
</span><br>
<span class="quotelev1">&gt;     650-329-5608 &lt;tel:650-329-5608&gt;
</span><br>
<span class="quotelev1">&gt;     baker_at_[hidden] &lt;mailto:baker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 3 Mar 2016, at 6:39 PM, Dave Turner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I don't see the point of having the OMPI_CC and OMPI_FC
</span><br>
<span class="quotelev2">&gt;&gt;     environment
</span><br>
<span class="quotelev2">&gt;&gt;     variables at all if you're saying that we shouldn't expect them
</span><br>
<span class="quotelev2">&gt;&gt;     to work.  I
</span><br>
<span class="quotelev2">&gt;&gt;     actually do think they work fine if you do a GNU build and use
</span><br>
<span class="quotelev2">&gt;&gt;     them to
</span><br>
<span class="quotelev2">&gt;&gt;     specify the Intel compilers.  I also think it works fine when you
</span><br>
<span class="quotelev2">&gt;&gt;     do an
</span><br>
<span class="quotelev2">&gt;&gt;     Intel build and compile with gcc.  So to me it just looks like
</span><br>
<span class="quotelev2">&gt;&gt;     that one
</span><br>
<span class="quotelev2">&gt;&gt;     include file is the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                       Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Mar 3, 2016 at 8:02 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Dave,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         you should not expect anything when mixing Fortran compilers
</span><br>
<span class="quotelev2">&gt;&gt;         (and to be on the safe side, you might not expect much when
</span><br>
<span class="quotelev2">&gt;&gt;         mixing C/C++ compilers too,
</span><br>
<span class="quotelev2">&gt;&gt;         for example, if you built ompi with intel and use gcc for
</span><br>
<span class="quotelev2">&gt;&gt;         your app, gcc might complain about unresolved symbols from
</span><br>
<span class="quotelev2">&gt;&gt;         the intel runtime)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         if you compile OpenMPI with gfortran 4.8.5, the automatically
</span><br>
<span class="quotelev2">&gt;&gt;         generated mpif-sizeof.h contains
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ! Sad panda.
</span><br>
<span class="quotelev2">&gt;&gt;         !
</span><br>
<span class="quotelev2">&gt;&gt;         ! This compiler does not support the Right Stuff to enable
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_SIZEOF.
</span><br>
<span class="quotelev2">&gt;&gt;         ! Specifically: we need support for the INTERFACE keyword,
</span><br>
<span class="quotelev2">&gt;&gt;         ! ISO_FORTRAN_ENV, and the STORAGE_SIZE() intrinsic on all types.
</span><br>
<span class="quotelev2">&gt;&gt;         ! Apparently, this compiler does not support both of those
</span><br>
<span class="quotelev2">&gt;&gt;         things, so
</span><br>
<span class="quotelev2">&gt;&gt;         ! this file will be (effecitvely) blank (i.e., we didn't bother
</span><br>
<span class="quotelev2">&gt;&gt;         ! generating the necessary stuff for MPI_SIZEOF because the
</span><br>
<span class="quotelev2">&gt;&gt;         compiler
</span><br>
<span class="quotelev2">&gt;&gt;         ! doesn't support
</span><br>
<span class="quotelev2">&gt;&gt;         ! it).
</span><br>
<span class="quotelev2">&gt;&gt;         !
</span><br>
<span class="quotelev2">&gt;&gt;         ! If you want support for MPI_SIZEOF, please use a different
</span><br>
<span class="quotelev2">&gt;&gt;         Fortran
</span><br>
<span class="quotelev2">&gt;&gt;         ! compiler to build Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         intel fortran compilers have the right stuff, so
</span><br>
<span class="quotelev2">&gt;&gt;         mpif-sizeof.h is usable, and you get something very different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On 3/4/2016 10:17 AM, Dave Turner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              My understanding is that OpenMPI built with either Intel or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         GNU compilers should be able to use the other compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OMPI_CC and OMPI_FC environmental variables.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              For OpenMPI-1.8.8 built with Intel compilers, if you try to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         compile any code that includes mpif.h using OMPI_FC=gfortran it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fails.  The Intel build creates mpi-sizeof.h that dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         arrays to more than 6 dimensions which gfortran cannot handle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         The example below illustrates this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              I wasn't able to find any other reports like this on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         web, and I don't see any way of specifying a path to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         alternate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpif.h include file.  This looks to be a bug to me, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         please let
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         me know if I missed a config flag somewhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                        Dave Turner
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Selene cat bugtest.F
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ! Program to illustrate bug when OpenMPI is compiled with Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         !    compilers but run using OMPI_FC=gfortran.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               PROGRAM BUGTEST
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               INCLUDE &quot;mpif.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               END
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Selene cat go
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         echo &quot;Compile test using default ifort&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpifort --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpifort bugtest.F -o bugtest_ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         echo &quot;Compile test using gfortan when OpenMPI was compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         with ifort/icc&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         export OMPI_FC=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpifort --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpifort bugtest.F -o bugtest_gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Selene ./go
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Compile test using default ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ifort (IFORT) 15.0.3 20150407
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Compile test using gfortan when OpenMPI was compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ifort/icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         GNU Fortran (Gentoo 4.9.3 p1.4, pie-0.6.4) 4.9.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Copyright (C) 2015 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         GNU Fortran comes with NO WARRANTY, to the extent permitted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         by law.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         under the terms of the GNU General Public License.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         For more information about these matters, see the file named
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         COPYING
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpif-sizeof.h:75.48:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Included at mpif.h:61:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Included at bugtest.F:6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpif-sizeof.h:82.48:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Included at mpif.h:61:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Included at bugtest.F:6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpif-sizeof.h:89.48:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Included at mpif.h:61:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Included at bugtest.F:6:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               COMPLEX(REAL128), DIMENSION(1,1,1,1,1,1,1,1,1,*)::x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                             1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Error: Array specification at (1) has more than 7 dimensions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [ More of the same errors have been clipped ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Work: DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt; (785)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         532-7791 &lt;tel:%28785%29%20532-7791&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Home: DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       cell: (785) 770-5929 &lt;tel:%28785%29%20770-5929&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2016/03/18671.php">http://www.open-mpi.org/community/lists/devel/2016/03/18671.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Work: DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt; (785)
</span><br>
<span class="quotelev2">&gt;&gt;     532-7791 &lt;tel:%28785%29%20532-7791&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev2">&gt;&gt;     Home: DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   cell: (785) 770-5929 &lt;tel:%28785%29%20770-5929&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18678.php">http://www.open-mpi.org/community/lists/devel/2016/03/18678.php</a>
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
<span class="quotelev1">&gt; Work: DaveTurner_at_[hidden] &lt;mailto:DaveTurner_at_[hidden]&gt;     (785) 532-7791
</span><br>
<span class="quotelev1">&gt;              2219 Durland, Manhattan KS  66502
</span><br>
<span class="quotelev1">&gt; Home: DrDaveTurner_at_[hidden] &lt;mailto:DrDaveTurner_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;               cell: (785) 770-5929
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18686.php">Ben Menadue: "Re: [OMPI devel] mpif.h on Intel build when run with	OMPI_FC=gfortran"</a>
<li><strong>Previous message:</strong> <a href="18684.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<li><strong>In reply to:</strong> <a href="18682.php">Dave Turner: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18676.php">Christopher Samuel: "Re: [OMPI devel] mpif.h on Intel build when run with OMPI_FC=gfortran"</a>
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
