<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  8 13:17:09 2005" -->
<!-- isoreceived="20051108181709" -->
<!-- sent="Tue, 8 Nov 2005 13:17:00 -0500" -->
<!-- isosent="20051108181700" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime" -->
<!-- id="A0AB184E-FCEB-488D-8B68-363E849E2957_at_rpi.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.27.1131469204.12817.users_at_open-mpi.org" -->
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
<strong>From:</strong> Charles Williams (<em>willic3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-08 13:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Nick I: "[O-MPI users] backbone of a large-file streaming system"</a>
<li><strong>Maybe in reply to:</strong> <a href="0280.php">Charles Williams: "[O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Reply:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>Thanks for working on this.  I now have a problem building Open MPI,  
<br>
though.  This is from the end of the build log:
<br>
<p>gcc -DHAVE_CONFIG_H -I. -I/Users/willic3/build/openmpi-1.0rc5r8038/ 
<br>
ompi/mpi/f77
<br>
/profile -I../../../../include -I../../../../include - 
<br>
DOMPI_PROFILE_LAYER=1 -DOM
<br>
PI_COMPILING_F77_WRAPPERS=1 -I/Users/willic3/build/ 
<br>
openmpi-1.0rc5r8038/include -
<br>
I/Users/willic3/build/openmpi-1.0rc5r8038 -I../../../.. -I../../../../ 
<br>
include -I
<br>
/Users/willic3/build/openmpi-1.0rc5r8038/opal -I/Users/willic3/build/ 
<br>
openmpi-1.0
<br>
rc5r8038/orte -I/Users/willic3/build/openmpi-1.0rc5r8038/ompi - 
<br>
D_REENTRANT -O3 -
<br>
DNDEBUG -fno-strict-aliasing -MT pwaitsome_f.lo -MD -MP -MF .deps/ 
<br>
pwaitsome_f.Tp
<br>
o -c pwaitsome_f.c  -fno-common -DPIC -o .libs/pwaitsome_f.o
<br>
if test ! -r pwtick_f.c ; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pname=`echo pwtick_f.c | cut -b '2-'` ; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s /Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/ 
<br>
$pname pwtick_f.
<br>
c ; \
<br>
fi
<br>
depbase=`echo pwtick_f.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`; \
<br>
if /bin/sh ../../../../libtool --tag=CC --mode=compile gcc - 
<br>
DHAVE_CONFIG_H -I. -
<br>
I/Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile - 
<br>
I../../../../inc
<br>
lude -I../../../../include  -DOMPI_PROFILE_LAYER=1 - 
<br>
DOMPI_COMPILING_F77_WRAPPERS
<br>
=1 -I/Users/willic3/build/openmpi-1.0rc5r8038/include -I/Users/ 
<br>
willic3/build/ope
<br>
nmpi-1.0rc5r8038 -I../../../.. -I../../../../include -I/Users/willic3/ 
<br>
build/open
<br>
mpi-1.0rc5r8038/opal -I/Users/willic3/build/openmpi-1.0rc5r8038/orte - 
<br>
I/Users/wi
<br>
llic3/build/openmpi-1.0rc5r8038/ompi  -D_REENTRANT  -O3 -DNDEBUG -fno- 
<br>
strict-ali
<br>
asing  -MT pwtick_f.lo -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o pwtick_f.lo  
<br>
pwtick_f.c;
<br>
\
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
<br>
exit 1; fi
<br>
gcc -DHAVE_CONFIG_H -I. -I/Users/willic3/build/openmpi-1.0rc5r8038/ 
<br>
ompi/mpi/f77
<br>
/profile -I../../../../include -I../../../../include - 
<br>
DOMPI_PROFILE_LAYER=1 -DOM
<br>
PI_COMPILING_F77_WRAPPERS=1 -I/Users/willic3/build/ 
<br>
openmpi-1.0rc5r8038/include -
<br>
I/Users/willic3/build/openmpi-1.0rc5r8038 -I../../../.. -I../../../../ 
<br>
include -I
<br>
/Users/willic3/build/openmpi-1.0rc5r8038/opal -I/Users/willic3/build/ 
<br>
openmpi-1.0
<br>
rc5r8038/orte -I/Users/willic3/build/openmpi-1.0rc5r8038/ompi - 
<br>
D_REENTRANT -O3 -
<br>
DNDEBUG -fno-strict-aliasing -MT pwtick_f.lo -MD -MP -MF .deps/ 
<br>
pwtick_f.Tpo -c p
<br>
wtick_f.c  -fno-common -DPIC -o .libs/pwtick_f.o
<br>
pwtick_f.c:33: error: conflicting types for 'PMPI_WTICK'
<br>
/Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile/ 
<br>
prototypes_pmpi.h:
<br>
1483: error: previous declaration of 'PMPI_WTICK' was here
<br>
pwtick_f.c: In function 'PMPI_WTICK':
<br>
pwtick_f.c:33: error: incompatible types in return
<br>
pwtick_f.c: At top level:
<br>
pwtick_f.c:34: error: conflicting types for 'pmpi_wtick'
<br>
/Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile/ 
<br>
prototypes_pmpi.h:
<br>
622: error: previous declaration of 'pmpi_wtick' was here
<br>
pwtick_f.c: In function 'pmpi_wtick':
<br>
pwtick_f.c:34: error: incompatible types in return
<br>
pwtick_f.c: At top level:
<br>
pwtick_f.c:35: error: conflicting types for 'pmpi_wtick_'
<br>
/Users/willic3/build/openmpi-1.0rc5r8038/ompi/mpi/f77/profile/ 
<br>
prototypes_pmpi.h:
<br>
909: error: previous declaration of 'pmpi_wtick_' was here
<br>
<p>If it would help, I can also send complete configure and build logs.
<br>
<p>Thanks,
<br>
Charles
<br>
<p><p><p>On Nov 8, 2005, at 12:00 PM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 7 Nov 2005 14:05:02 -0500
</span><br>
<span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;3AE5C826-7EB8-4CA2-A69D-5A29087B63C1_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 4, 2005, at 11:41 AM, Charles Williams wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been using Open MPI in conjunction with PETSc on OSX 10.4,
</span><br>
<span class="quotelev2">&gt;&gt; and had been having trouble with undefined symbols when trying
</span><br>
<span class="quotelev2">&gt;&gt; tests with PETSc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt; _pmpi_wtick__
</span><br>
<span class="quotelev2">&gt;&gt; _pmpi_wtime__
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After playing around with things for a while, I realized that these
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbols only appeared in libmpi_f90.a, and were somehow
</span><br>
<span class="quotelev2">&gt;&gt; being pulled into the PETSc libraries when they were built.  The
</span><br>
<span class="quotelev2">&gt;&gt; problem occurred when trying to build an executable that included
</span><br>
<span class="quotelev2">&gt;&gt; libraries with these undefined symbols.  The simplest solution I
</span><br>
<span class="quotelev2">&gt;&gt; could think of was to edit include/mpif.h.in.  In the last two
</span><br>
<span class="quotelev2">&gt;&gt; lines of this file I simply changed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       double precision MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       external MPI_WTIME, MPI_WTICK, PMPI_WTIME, PMPI_WTICK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;       double precision MPI_WTIME, MPI_WTICK
</span><br>
<span class="quotelev2">&gt;&gt; &lt;       external MPI_WTIME, MPI_WTICK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This fixed the problem for me, and I am wondering whether this is a
</span><br>
<span class="quotelev2">&gt;&gt; reasonable fix.  My understanding is that the functions are not
</span><br>
<span class="quotelev2">&gt;&gt; actually part of open-mpi.  Would this approach break anything
</span><br>
<span class="quotelev2">&gt;&gt; else?  If not, it would be nice to include it, since the only other
</span><br>
<span class="quotelev2">&gt;&gt; option I can think of for fixing things on OSX 10.4 with the
</span><br>
<span class="quotelev2">&gt;&gt; current build procedures is to strip libraries of undefined symbols
</span><br>
<span class="quotelev2">&gt;&gt; before they are used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about that.  Some time ago, we decided to make MPI_WTIME and
</span><br>
<span class="quotelev1">&gt; MPI_WTICK inline functions in C and not provide a profiling interface
</span><br>
<span class="quotelev1">&gt; for them.  Unfortunately, it appears we didn't properly update the
</span><br>
<span class="quotelev1">&gt; Fortran or C++ interfaces.  I committed a change so PMPI_WTICK /
</span><br>
<span class="quotelev1">&gt; PMPI_WTIME exist and work properly.  That should fix your problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The change will be in the next 1.0 release candidate, and the nightly
</span><br>
<span class="quotelev1">&gt; tarballs that will be available tomorrow morning.  Release candidates
</span><br>
<span class="quotelev1">&gt; and betas will be available at the URL below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/">http://www.open-mpi.org/software/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p>Charles A. Williams
<br>
Dept. of Earth &amp; Environmental Sciences
<br>
Science Center, 2C01B
<br>
Rensselaer Polytechnic Institute
<br>
Troy, NY  12180
<br>
Phone:    (518) 276-3369
<br>
FAX:        (518) 276-2012
<br>
e-mail:    willic3_at_[hidden]
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0290/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Nick I: "[O-MPI users] backbone of a large-file streaming system"</a>
<li><strong>Maybe in reply to:</strong> <a href="0280.php">Charles Williams: "[O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Reply:</strong> <a href="0291.php">George Bosilca: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
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
