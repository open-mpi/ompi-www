<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 15:03:32 2005" -->
<!-- isoreceived="20051108200332" -->
<!-- sent="Tue, 8 Nov 2005 15:03:24 -0500" -->
<!-- isosent="20051108200324" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime" -->
<!-- id="5aeaf5bfbd5e9478f3866ec9b21d418b_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CDE423CE-FD88-410B-ADE5-1A46D7D9714E_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 15:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0294.php">Troy Telford: "[O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Previous message:</strong> <a href="0292.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>In reply to:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alternative, if you don't wait until tomorrow, you can replace your  
<br>
ompi/f77/profile/prototypes_pmpi.h with this file:
<br>
<p><a href="http://svn.open-mpi.org/svn/ompi/branches/v1.0/ompi/mpi/f77/profile/">http://svn.open-mpi.org/svn/ompi/branches/v1.0/ompi/mpi/f77/profile/</a> 
<br>
prototypes_pmpi.h
<br>
<p>You should not need to rerun configure; you should be able to compile  
<br>
from there.
<br>
<p>Sorry about that!
<br>
<p><p><p>On Nov 8, 2005, at 1:31 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; We did discover this problem on MAC OS X yesterday. There was a patch
</span><br>
<span class="quotelev1">&gt; on the trunk but I don't think it get into the stable branch. It will
</span><br>
<span class="quotelev1">&gt; be in the tarball by tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Sorry about that,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2005, at 1:17 PM, Charles Williams wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for working on this.  I now have a problem building Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI, though.  This is from the end of the build log:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  gcc -DHAVE_CONFIG_H -I. -I/Users/willic3/build/openmpi-1.0rc5r8038/
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mpi/f77
</span><br>
<span class="quotelev2">&gt;&gt; /profile -I../../../../include -I../../../../include -
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_PROFILE_LAYER=1 -DOM
</span><br>
<span class="quotelev2">&gt;&gt; PI_COMPILING_F77_WRAPPERS=1 -I/Users/willic3/build/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0rc5r8038/include -
</span><br>
<span class="quotelev2">&gt;&gt; I/Users/willic3/build/openmpi-1.0rc5r8038 -I../../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../include -I
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/build/openmpi-1.0rc5r8038/opal -I/Users/willic3/
</span><br>
<span class="quotelev2">&gt;&gt; build/openmpi-1.0
</span><br>
<span class="quotelev2">&gt;&gt; rc5r8038/orte -I/Users/willic3/build/openmpi-1.0rc5r8038/ompi -
</span><br>
<span class="quotelev2">&gt;&gt; D_REENTRANT -O3 -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -fno-strict-aliasing -MT pwaitsome_f.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pwaitsome_f.Tp
</span><br>
<span class="quotelev2">&gt;&gt; o -c pwaitsome_f.c  -fno-common -DPIC -o .libs/pwaitsome_f.o
</span><br>
<span class="quotelev2">&gt;&gt; if test ! -r pwtick_f.c ; then \
</span><br>
<span class="quotelev2">&gt;&gt;     pname=`echo pwtick_f.c | cut -b '2-'` ; \
</span><br>
<span class="quotelev2">&gt;&gt;     ln -s /Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/
</span><br>
<span class="quotelev2">&gt;&gt; $pname pwtick_f.
</span><br>
<span class="quotelev2">&gt;&gt; c ; \
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo pwtick_f.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev2">&gt;&gt; if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -
</span><br>
<span class="quotelev2">&gt;&gt; I/Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../inc
</span><br>
<span class="quotelev2">&gt;&gt; lude -I../../../../include  -DOMPI_PROFILE_LAYER=1 -
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_COMPILING_F77_WRAPPERS
</span><br>
<span class="quotelev2">&gt;&gt; =1 -I/Users/willic3/build/openmpi-1.0rc5r8038/include -I/Users/
</span><br>
<span class="quotelev2">&gt;&gt; willic3/build/ope
</span><br>
<span class="quotelev2">&gt;&gt; nmpi-1.0rc5r8038 -I../../../.. -I../../../../include -I/Users/
</span><br>
<span class="quotelev2">&gt;&gt; willic3/build/open
</span><br>
<span class="quotelev2">&gt;&gt; mpi-1.0rc5r8038/opal -I/Users/willic3/build/openmpi-1.0rc5r8038/
</span><br>
<span class="quotelev2">&gt;&gt; orte -I/Users/wi
</span><br>
<span class="quotelev2">&gt;&gt; llic3/build/openmpi-1.0rc5r8038/ompi  -D_REENTRANT  -O3 -DNDEBUG -
</span><br>
<span class="quotelev2">&gt;&gt; fno-strict-ali
</span><br>
<span class="quotelev2">&gt;&gt; asing  -MT pwtick_f.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o pwtick_f.lo
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c;
</span><br>
<span class="quotelev2">&gt;&gt; \
</span><br>
<span class="quotelev2">&gt;&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f
</span><br>
<span class="quotelev2">&gt;&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev2">&gt;&gt; gcc -DHAVE_CONFIG_H -I. -I/Users/willic3/build/openmpi-1.0rc5r8038/
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mpi/f77
</span><br>
<span class="quotelev2">&gt;&gt; /profile -I../../../../include -I../../../../include -
</span><br>
<span class="quotelev2">&gt;&gt; DOMPI_PROFILE_LAYER=1 -DOM
</span><br>
<span class="quotelev2">&gt;&gt; PI_COMPILING_F77_WRAPPERS=1 -I/Users/willic3/build/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.0rc5r8038/include -
</span><br>
<span class="quotelev2">&gt;&gt; I/Users/willic3/build/openmpi-1.0rc5r8038 -I../../../.. -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../include -I
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/build/openmpi-1.0rc5r8038/opal -I/Users/willic3/
</span><br>
<span class="quotelev2">&gt;&gt; build/openmpi-1.0
</span><br>
<span class="quotelev2">&gt;&gt; rc5r8038/orte -I/Users/willic3/build/openmpi-1.0rc5r8038/ompi -
</span><br>
<span class="quotelev2">&gt;&gt; D_REENTRANT -O3 -
</span><br>
<span class="quotelev2">&gt;&gt; DNDEBUG -fno-strict-aliasing -MT pwtick_f.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.Tpo -c p
</span><br>
<span class="quotelev2">&gt;&gt; wtick_f.c  -fno-common -DPIC -o .libs/pwtick_f.o
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c:33: error: conflicting types for 'PMPI_WTICK'
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile/
</span><br>
<span class="quotelev2">&gt;&gt; prototypes_pmpi.h:
</span><br>
<span class="quotelev2">&gt;&gt; 1483: error: previous declaration of 'PMPI_WTICK' was here
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c: In function 'PMPI_WTICK':
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c:33: error: incompatible types in return
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c: At top level:
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c:34: error: conflicting types for 'pmpi_wtick'
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile/
</span><br>
<span class="quotelev2">&gt;&gt; prototypes_pmpi.h:
</span><br>
<span class="quotelev2">&gt;&gt; 622: error: previous declaration of 'pmpi_wtick' was here
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c: In function 'pmpi_wtick':
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c:34: error: incompatible types in return
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c: At top level:
</span><br>
<span class="quotelev2">&gt;&gt; pwtick_f.c:35: error: conflicting types for 'pmpi_wtick_'
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile/
</span><br>
<span class="quotelev2">&gt;&gt; prototypes_pmpi.h:
</span><br>
<span class="quotelev2">&gt;&gt; 909: error: previous declaration of 'pmpi_wtick_' was here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If it would help, I can also send complete configure and build logs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Charles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 8, 2005, at 12:00 PM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 7 Nov 2005 14:05:02 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;3AE5C826-7EB8-4CA2-A69D-5A29087B63C1_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 4, 2005, at 11:41 AM, Charles Williams wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have been using Open MPI in conjunction with PETSc on OSX 10.4,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and had been having trouble with undefined symbols when trying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tests with PETSc:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _pmpi_wtick__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _pmpi_wtime__
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After playing around with things for a while, I realized that these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; undefined symbols only appeared in libmpi_f90.a, and were somehow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being pulled into the PETSc libraries when they were built.  The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem occurred when trying to build an executable that included
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries with these undefined symbols.  The simplest solution I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could think of was to edit include/mpif.h.in.  In the last two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lines of this file I simply changed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       double precision MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       external MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;       double precision MPI_WTIME, MPI_WTICK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;       external MPI_WTIME, MPI_WTICK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This fixed the problem for me, and I am wondering whether this is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reasonable fix.  My understanding is that the functions are not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actually part of open-mpi.  Would this approach break anything
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; else?  If not, it would be nice to include it, since the only other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option I can think of for fixing things on OSX 10.4 with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; current build procedures is to strip libraries of undefined symbols
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before they are used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry about that.  Some time ago, we decided to make MPI_WTIME and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_WTICK inline functions in C and not provide a profiling interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for them.  Unfortunately, it appears we didn't properly update the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran or C++ interfaces.  I committed a change so PMPI_WTICK /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PMPI_WTIME exist and work properly.  That should fix your problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The change will be in the next 1.0 release candidate, and the nightly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tarballs that will be available tomorrow morning.  Release candidates
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and betas will be available at the URL below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/software/">http://www.open-mpi.org/software/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Charles A. Williams
</span><br>
<span class="quotelev2">&gt;&gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev2">&gt;&gt; Science Center, 2C01B
</span><br>
<span class="quotelev2">&gt;&gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev2">&gt;&gt; Troy, NY  12180
</span><br>
<span class="quotelev2">&gt;&gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev2">&gt;&gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev2">&gt;&gt; e-mail:    willic3_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0294.php">Troy Telford: "[O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>Previous message:</strong> <a href="0292.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<li><strong>In reply to:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
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
