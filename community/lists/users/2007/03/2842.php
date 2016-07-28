<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 14:47:53 2007" -->
<!-- isoreceived="20070319184753" -->
<!-- sent="Mon, 19 Mar 2007 11:28:14 -0600" -->
<!-- isosent="20070319172814" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9" -->
<!-- id="2CFF38E3-BBA2-417D-9EE8-CB6CDE0AC1DA_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="82367DB0-EBC6-4438-BBC2-D7896318633E_at_physics.aamu.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 13:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2843.php">George Bosilca: "Re: [OMPI users] quadrics"</a>
<li><strong>Previous message:</strong> <a href="2841.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>In reply to:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2844.php">Marius Schamschula: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Reply:</strong> <a href="2844.php">Marius Schamschula: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
<p>Thanks for the bug report.  I've fixed the problem in SVN and it will  
<br>
likely be part of the 1.2.1 release (whenever that happens).  In the  
<br>
mean time, I've attached a patch that should apply to the 1.2 tarball  
<br>
that will also fix the problem.
<br>
<p>The environment variables you want for specifying the Fortran  
<br>
compilers are F77 for Fortran 77 and FC for Fortran 90/95/03.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p>On Mar 16, 2007, at 5:42 PM, Marius Schamschula wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was building open-mpi 1.2 on my G4 running Mac OS X 10.3.9 and  
</span><br>
<span class="quotelev1">&gt; had a build failure with the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; depbase=`echo runtime/ompi_mpi_preconnect.lo | sed 's|[^/]*$|.deps/ 
</span><br>
<span class="quotelev1">&gt; &amp;|;s|\.lo$||'`; \
</span><br>
<span class="quotelev1">&gt; if /bin/sh ../libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I. -I../opal/include -I../orte/include -I../ompi/include -I../ 
</span><br>
<span class="quotelev1">&gt; ompi/include   -I..  -D_REENTRANT  -O3 -DNDEBUG -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing  -MT runtime/ompi_mpi_preconnect.lo -MD -MP -MF  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot; -c -o runtime/ompi_mpi_preconnect.lo runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.c; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Plo&quot;; else rm -f  
</span><br>
<span class="quotelev1">&gt; &quot;$depbase.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../orte/include -I../ompi/include -I../ompi/include -I.. - 
</span><br>
<span class="quotelev1">&gt; D_REENTRANT -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; MT runtime/ompi_mpi_preconnect.lo -MD -MP -MF runtime/.deps/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_preconnect.Tpo -c runtime/ompi_mpi_preconnect.c  -fno- 
</span><br>
<span class="quotelev1">&gt; common -DPIC -o runtime/.libs/ompi_mpi_preconnect.o
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c: In function  
</span><br>
<span class="quotelev1">&gt; `ompi_init_do_oob_preconnect':
</span><br>
<span class="quotelev1">&gt; runtime/ompi_mpi_preconnect.c:74: error: storage size of `msg'  
</span><br>
<span class="quotelev1">&gt; isn't known
</span><br>
<span class="quotelev1">&gt; make[2]: *** [runtime/ompi_mpi_preconnect.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/libexec/gcc/darwin/ppc/3.3/specs
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.3 20030304 (Apple Computer, Inc. build 1495)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ g77 -v
</span><br>
<span class="quotelev1">&gt; Reading specs from /usr/local/lib/gcc/powerpc-apple- 
</span><br>
<span class="quotelev1">&gt; darwin7.3.0/3.5.0/specs
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc/configure --enable-threads=posix --enable- 
</span><br>
<span class="quotelev1">&gt; languages=f77
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 3.5.0 20040429 (experimental)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (g77 from hpc.sf.net)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note: I had no such problem under Mac OS X 10.4.9 with my ppc and  
</span><br>
<span class="quotelev1">&gt; x86 builds. However, I did notice that the configure script did not  
</span><br>
<span class="quotelev1">&gt; detect g95 from g95.org correctly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... no
</span><br>
<span class="quotelev1">&gt; checking for f95... no
</span><br>
<span class="quotelev1">&gt; checking for fort... no
</span><br>
<span class="quotelev1">&gt; checking for xlf95... no
</span><br>
<span class="quotelev1">&gt; checking for ifort... no
</span><br>
<span class="quotelev1">&gt; checking for ifc... no
</span><br>
<span class="quotelev1">&gt; checking for efc... no
</span><br>
<span class="quotelev1">&gt; checking for pgf95... no
</span><br>
<span class="quotelev1">&gt; checking for lf95... no
</span><br>
<span class="quotelev1">&gt; checking for f90... no
</span><br>
<span class="quotelev1">&gt; checking for xlf90... no
</span><br>
<span class="quotelev1">&gt; checking for pgf90... no
</span><br>
<span class="quotelev1">&gt; checking for epcf90... no
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure --help doesn't give any hint about specifying F95.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>

<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2842/ompi_1.2_osx_10.3.diff">ompi_1.2_osx_10.3.diff</a>
</ul>
<!-- attachment="ompi_1.2_osx_10.3.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2843.php">George Bosilca: "Re: [OMPI users] quadrics"</a>
<li><strong>Previous message:</strong> <a href="2841.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<li><strong>In reply to:</strong> <a href="2819.php">Marius Schamschula: "[OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2844.php">Marius Schamschula: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
<li><strong>Reply:</strong> <a href="2844.php">Marius Schamschula: "Re: [OMPI users] open-mpi 1.2 build failure under Mac OS X 10.3.9"</a>
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
