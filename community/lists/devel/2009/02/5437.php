<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 07:55:24 2009" -->
<!-- isoreceived="20090217125524" -->
<!-- sent="Tue, 17 Feb 2009 07:55:19 -0500" -->
<!-- isosent="20090217125519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="F3F85D6A-4F96-4F36-ABE8-5ACBB3F39FE6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200902170233.n1H2X3ra006860_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 07:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5438.php">Jeff Squyres: "[OMPI devel] Feb ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5694.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This should be fixed in r20576; I'll go start a new tarball build  
<br>
right now...
<br>
<p><p>On Feb 16, 2009, at 9:33 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (trunk):
</span><br>
<span class="quotelev1">&gt;       ./configure --enable-dist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Mon Feb 16 21:26:57 EST 2009
</span><br>
<span class="quotelev1">&gt; End time:   Mon Feb 16 21:33:03 EST 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; +++ Configuring MCA framework memory
</span><br>
<span class="quotelev1">&gt; checking for no configure components in framework memory...
</span><br>
<span class="quotelev1">&gt; checking for m4 configure components in framework memory...  
</span><br>
<span class="quotelev1">&gt; ptmalloc2, malloc_solaris, mallopt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component memory:ptmalloc2 (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component memory:ptmalloc2 compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if ptmalloc2 should be part of libopen-pal... no
</span><br>
<span class="quotelev1">&gt; checking for malloc.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking whether __malloc_initialize_hook is declared... yes
</span><br>
<span class="quotelev1">&gt; checking whether sbrk is declared... yes
</span><br>
<span class="quotelev1">&gt; checking syscall.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking syscall.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for syscall.h... yes
</span><br>
<span class="quotelev1">&gt; checking for syscall... yes
</span><br>
<span class="quotelev1">&gt; checking for __munmap... no
</span><br>
<span class="quotelev1">&gt; checking for __mmap... no
</span><br>
<span class="quotelev1">&gt; checking for dlsym in -ldl... yes
</span><br>
<span class="quotelev1">&gt; checking for dlsym... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component memory:ptmalloc2 can compile... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component memory:malloc_solaris (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component memory:malloc_solaris compile mode...  
</span><br>
<span class="quotelev1">&gt; static
</span><br>
<span class="quotelev1">&gt; checking if MCA component memory:malloc_solaris can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component memory:mallopt (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component memory:mallopt compile mode... static
</span><br>
<span class="quotelev1">&gt; checking if MCA component memory:mallopt can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ Configuring MCA framework paffinity
</span><br>
<span class="quotelev1">&gt; checking for no configure components in framework paffinity...
</span><br>
<span class="quotelev1">&gt; checking for m4 configure components in framework paffinity...  
</span><br>
<span class="quotelev1">&gt; linux, solaris, windows, darwin, posix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component paffinity:linux (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component paffinity:linux compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking for syscall... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking sys/syscall.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking sys/syscall.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for sys/syscall.h... yes
</span><br>
<span class="quotelev1">&gt; checking for unistd.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for __NR_sched_setaffinity... yes
</span><br>
<span class="quotelev1">&gt; checking for __NR_sched_getaffinity... yes
</span><br>
<span class="quotelev1">&gt; checking for PLPA building mode... included
</span><br>
<span class="quotelev1">&gt; checking if want PLPA maintainer support... enabled (SVN checkout  
</span><br>
<span class="quotelev1">&gt; default)
</span><br>
<span class="quotelev1">&gt; checking for PLPA config prefix... opal/mca/paffinity/linux/plpa
</span><br>
<span class="quotelev1">&gt; checking for PLPA symbol prefix... opal_paffinity_linux_plpa_
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for valgrind/valgrind.h... yes
</span><br>
<span class="quotelev1">&gt; checking for VALGRIND_CHECK_MEM_IS_ADDRESSABLE... no
</span><br>
<span class="quotelev1">&gt; configure: error: Need Valgrind version 3.2.0 or later.
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5438.php">Jeff Squyres: "[OMPI devel] Feb ORTE meeting"</a>
<li><strong>Previous message:</strong> <a href="5436.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20568"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/08/4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5694.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
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
