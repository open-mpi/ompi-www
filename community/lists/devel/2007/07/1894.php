<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 16:55:24 2007" -->
<!-- isoreceived="20070714205524" -->
<!-- sent="Sat, 14 Jul 2007 15:55:12 -0500" -->
<!-- isosent="20070714205512" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD" -->
<!-- id="18073.14384.876294.571906_at_basebud.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.62.0707142219480.18329_at_sci.felk.cvut.cz" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 16:55:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>Reply:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Petr,
<br>
<p>On 14 July 2007 at 22:26, Petr Salinger wrote:
<br>
| Package: openmpi
<br>
| Severity: important
<br>
| Version: 1.2.3-1
<br>
| Tags: patch
<br>
| User: glibc-bsd-devel_at_[hidden]
<br>
| Usertags: kfreebsd
<br>
| 
<br>
| 
<br>
| Hi,
<br>
| 
<br>
| the current version fails to build on GNU/kFreeBSD.
<br>
| 
<br>
| It needs small fixups for munmap hackery and stacktrace.
<br>
| It also needs to exclude linux specific build-depends.
<br>
| Please find attached patch with that.
<br>
<p>Thanks for that patch.
<br>
&nbsp;
<br>
| It would be nice if you can ask upstream
<br>
| to include changes to opal/util/stacktrace.c and
<br>
| opal/mca/memory/ptmalloc2/opal_ptmalloc2_munmap.c .
<br>
<p>Doing so now for their consideration.
<br>
<p>Regards, Dirk
<br>
<p><p>| 
<br>
| Thanks in advance
<br>
| 
<br>
|                          Petrdiff -u openmpi-1.2.3/debian/control openmpi-1.2.3/debian/control
<br>
| --- openmpi-1.2.3/debian/control
<br>
| +++ openmpi-1.2.3/debian/control
<br>
| @@ -3,7 +3,7 @@
<br>
|  Priority: optional
<br>
|  Maintainer: Debian OpenMPI Maintainers &lt;pkg-openmpi-maintainers_at_[hidden]&gt;
<br>
|  Uploaders: Dirk Eddelbuettel &lt;edd_at_[hidden]&gt;
<br>
| -Build-Depends: debhelper (&gt;= 5.0.0), dpatch, libibverbs-dev, gfortran, libsysfs-dev, automake, gcc (&gt;= 4:4.1.2)
<br>
| +Build-Depends: debhelper (&gt;= 5.0.0), dpatch, libibverbs-dev [!kfreebsd-i386 !kfreebsd-amd64 !hurd-i386], gfortran, libsysfs-dev [!kfreebsd-i386 !kfreebsd-amd64 !hurd-i386], automake, gcc (&gt;= 4:4.1.2)
<br>
|  Standards-Version: 3.7.2
<br>
|  XS-Vcs-Svn: svn://svn.debian.org/svn/pkg-openmpi/openmpi/trunk/
<br>
|  XS-Vcs-Browser: <a href="http://svn.debian.org/wsvn/pkg-openmpi/openmpi/trunk/">http://svn.debian.org/wsvn/pkg-openmpi/openmpi/trunk/</a>
<br>
| only in patch2:
<br>
| unchanged:
<br>
| --- openmpi-1.2.3.orig/opal/mca/memory/ptmalloc2/opal_ptmalloc2_munmap.c
<br>
| +++ openmpi-1.2.3/opal/mca/memory/ptmalloc2/opal_ptmalloc2_munmap.c
<br>
| @@ -26,7 +26,8 @@
<br>
|  #elif defined(HAVE_SYSCALL)
<br>
|  #include &lt;syscall.h&gt;
<br>
|  #include &lt;unistd.h&gt;
<br>
| -#elif defined(HAVE_DLSYM)
<br>
| +#endif
<br>
| +#if defined(HAVE_DLSYM)
<br>
|  #ifndef __USE_GNU
<br>
|  #define __USE_GNU
<br>
|  #endif
<br>
| @@ -59,7 +60,7 @@
<br>
|  int
<br>
|  opal_mem_free_ptmalloc2_munmap(void *start, size_t length, int from_alloc)
<br>
|  {
<br>
| -#if !defined(HAVE___MUNMAP) &amp;&amp; !defined(HAVE_SYSCALL) &amp;&amp; defined(HAVE_DLSYM)
<br>
| +#if !defined(HAVE___MUNMAP) &amp;&amp; !(defined(HAVE_SYSCALL) &amp;&amp; defined(__NR_munmap)) &amp;&amp; defined(HAVE_DLSYM)
<br>
|      static int (*realmunmap)(void*, size_t);
<br>
|  #endif
<br>
|  
<br>
| @@ -67,7 +68,7 @@
<br>
|  
<br>
|  #if defined(HAVE___MUNMAP)
<br>
|      return __munmap(start, length);
<br>
| -#elif defined(HAVE_SYSCALL)
<br>
| +#elif defined(HAVE_SYSCALL) &amp;&amp; defined(__NR_munmap)
<br>
|      return syscall(__NR_munmap, start, length);
<br>
|  #elif defined(HAVE_DLSYM)
<br>
|      if (NULL == realmunmap) {
<br>
| only in patch2:
<br>
| unchanged:
<br>
| --- openmpi-1.2.3.orig/opal/util/stacktrace.c
<br>
| +++ openmpi-1.2.3/opal/util/stacktrace.c
<br>
| @@ -145,8 +145,12 @@
<br>
|              case FPE_FLTDIV: si_code_str = &quot;Floating point divide-by-zero&quot;; break;
<br>
|              case FPE_FLTOVF: si_code_str = &quot;Floating point overflow&quot;; break;
<br>
|              case FPE_FLTUND: si_code_str = &quot;Floating point underflow&quot;; break;
<br>
| +#ifdef FPE_FLTRES
<br>
|              case FPE_FLTRES: si_code_str = &quot;Floating point inexact result&quot;; break;
<br>
| +#endif
<br>
| +#ifdef FPE_FLTINV            
<br>
|              case FPE_FLTINV: si_code_str = &quot;Invalid floating point operation&quot;; break;
<br>
| +#endif            
<br>
|  #ifdef FPE_FLTSUB
<br>
|              case FPE_FLTSUB: si_code_str = &quot;Subscript out of range&quot;; break;
<br>
|  #endif
<br>
| _______________________________________________
<br>
| Pkg-openmpi-maintainers mailing list
<br>
| Pkg-openmpi-maintainers_at_[hidden]
<br>
| <a href="http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers">http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers</a>
<br>
<p><pre>
-- 
Hell, there are no rules here - we're trying to accomplish something. 
                                                  -- Thomas A. Edison
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1895.php">Ralph Castain: "Re: [OMPI devel] lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>Reply:</strong> <a href="1990.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
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
