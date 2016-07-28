<?
$subject_val = "Re: [OMPI devel] Open MPI and NAG Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  6 11:52:58 2016" -->
<!-- isoreceived="20160106165258" -->
<!-- sent="Wed, 6 Jan 2016 16:52:26 +0000" -->
<!-- isosent="20160106165226" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI and NAG Fortran" -->
<!-- id="C81D1600-5916-4261-ABC2-E83FCA9ED72E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17JGKUQeGyQTT-9X_WE572FwEU34Kj7yUn2_85CoLJPFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI and NAG Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-06 11:52:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18477.php">Mudit Sharma: "[OMPI devel] Contributing to mpi"</a>
<li><strong>Previous message:</strong> <a href="18475.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>In reply to:</strong> <a href="18470.php">Paul Hargrove: "[OMPI devel] Open MPI and NAG Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Awesome; thanks for reporting this.  I've filed a ticket for this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/1284">https://github.com/open-mpi/ompi/issues/1284</a>
<br>
<p>This is unlikely to get fixed for the v1.10.2 release, but I want to track the issue to make sure it does eventually get solved.
<br>
<p><p><span class="quotelev1">&gt; On Jan 2, 2016, at 9:15 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried the 1.8.8, 1.10.2rc3 and nightly master tarballs with the NAG Fortran compiler.
</span><br>
<span class="quotelev1">&gt; Both versions 6.0 and 5.3 are unable to build and/or link Open MPI's Fortran bindings (MPI and SHMEM) w/o some extra work.
</span><br>
<span class="quotelev1">&gt; A google search turned up a blog entry dealing with the exact issues I encountered:
</span><br>
<span class="quotelev1">&gt; <a href="http://baradi09.blogspot.com/2014/08/compiling-openmpi-with-nag-fortran.html">http://baradi09.blogspot.com/2014/08/compiling-openmpi-with-nag-fortran.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It suggests the following
</span><br>
<span class="quotelev1">&gt;   + Adding FCFLAGS=&quot;-mismatch&quot; to disable some type checking.
</span><br>
<span class="quotelev1">&gt;   + Building only static libs to avoid issues with libtool and nagfor (see <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9497.php">http://www.open-mpi.org/community/lists/devel/2011/07/9497.php</a>)
</span><br>
<span class="quotelev1">&gt;   + Patching the *fort*-wrapper.data files (same problem as with libtool)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Together those are sufficient to get 1.10.2rc3 built with both 6.0 and 5.3 version of NAG Fortran.
</span><br>
<span class="quotelev1">&gt; However, the patching of the *fort*-wrapper.data files is necessary but not sufficient to fix the linking problems:
</span><br>
<span class="quotelev1">&gt; $ mpifort -g ring_mpifh.f -o ring_mpifh
</span><br>
<span class="quotelev1">&gt; NAG Fortran Compiler Release 6.0(Hibiya) Build 1028
</span><br>
<span class="quotelev1">&gt; Warning: ring_mpifh.f, line 80: Unused external reference MPI_WTICK
</span><br>
<span class="quotelev1">&gt; Warning: ring_mpifh.f, line 80: Unused external reference MPI_WTIME
</span><br>
<span class="quotelev1">&gt; Warning: ring_mpifh.f, line 80: Unused external reference PMPI_WTICK
</span><br>
<span class="quotelev1">&gt; Warning: ring_mpifh.f, line 80: Unused external reference PMPI_WTIME
</span><br>
<span class="quotelev1">&gt; Obsolescent: ring_mpifh.f, line 10: Fixed source form
</span><br>
<span class="quotelev1">&gt; [NAG Fortran Compiler normal termination, 5 warnings]
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/INST/lib/libmpi.a(ompi_mpi_init.o): In function `ompi_warn_fork':
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/openmpi-1.10.2rc3/ompi/runtime/ompi_mpi_init.c:193: undefined reference to `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/INST/lib/libopen-pal.a(lt1-malloc.o): In function `ptmalloc_init':
</span><br>
<span class="quotelev1">&gt; /sandbox/hargrove/OMPI/openmpi-1.10.2rc3-linux-x86_64-nagfor-6/openmpi-1.10.2rc3/opal/mca/memory/linux/arena.c:387: undefined reference to `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I needed to manually append &quot;-lpthreads&quot; to libs_static in the *fort*-wrapper.data files to resolve that problem.
</span><br>
<span class="quotelev1">&gt; I suspect configure should have taken care of that, based on the following:
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work as is... no
</span><br>
<span class="quotelev1">&gt; [...C++ checks...]
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -Kthread... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -kthread... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -pthread... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -pthreads... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -mt... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -mthreads... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -lpthreads... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -llthread... no
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -lpthread... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is no interest in support for the NAG Fortran compiler, just say so and I'll drop the subject.
</span><br>
<span class="quotelev1">&gt; However, if you want more info or need me to test possible fixes, let me know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18470.php">http://www.open-mpi.org/community/lists/devel/2016/01/18470.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18477.php">Mudit Sharma: "[OMPI devel] Contributing to mpi"</a>
<li><strong>Previous message:</strong> <a href="18475.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3330-g213b2ab"</a>
<li><strong>In reply to:</strong> <a href="18470.php">Paul Hargrove: "[OMPI devel] Open MPI and NAG Fortran"</a>
<!-- nextthread="start" -->
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
