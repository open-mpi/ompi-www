<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  9 09:21:54 2013" -->
<!-- isoreceived="20130509132154" -->
<!-- sent="Thu, 09 May 2013 15:21:49 +0200" -->
<!-- isosent="20130509132149" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk" -->
<!-- id="518BA2ED.4090104_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F612202_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-09 09:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3736.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5611)"</a>
<li><strong>Previous message:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was already fixed by the revert, sorry I forgot to make that clear.
<br>
<p>We only use C++ to build a *C* file with g++. We don't have actual C++
<br>
code. Looks like CXX gets initialized properly, even when I comment out
<br>
our AC_PROC_CXX in configure.ac and the following code in hwloc_internal.m4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING(if CXX works)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_PUSH([C++])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
#include &lt;iostream&gt;
<br>
using namespace std;
<br>
int foo(void) {
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;test&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]])], [hwloc_have_cxx=yes], [hwloc_have_cxx=no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_LANG_POP([C++])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([$hwloc_have_cxx])
<br>
<p><p><p>If we remove the above and use LT_LANG(C++), what do you use instead of
<br>
&quot;if HWLOC_HAVE_CXX&quot; in doc/Makefile.am
<br>
<p>Brice
<br>
<p><p><p>Le 09/05/2013 14:57, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Does this patch fix it?  It's not clear to me from the LT docs whether you're supposed to call LT_LANG multiple times or LT_LANG with multiple languages, but this patch below seems to run the libtool C++ configury:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: configure.ac
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- configure.ac	(revision 5609)
</span><br>
<span class="quotelev1">&gt; +++ configure.ac	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -168,6 +168,7 @@
</span><br>
<span class="quotelev1">&gt;  AM_DISABLE_STATIC
</span><br>
<span class="quotelev1">&gt;  AM_PROG_LIBTOOL([dlopen win32-dll])
</span><br>
<span class="quotelev1">&gt;  LT_LANG([C])
</span><br>
<span class="quotelev1">&gt; +LT_LANG([C++])
</span><br>
<span class="quotelev1">&gt;  LT_CONFIG_LTDL_DIR([src/libltdl])
</span><br>
<span class="quotelev1">&gt;  LTDL_INIT([recursive convenience])
</span><br>
<span class="quotelev1">&gt;  AC_CONFIG_FILES([src/libltdl/Makefile])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I couldn't generate the make check failure on my Mac with or without the additional LT_LANG, so I can't confirm if this is the correct fix or not)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 8, 2013, at 2:28 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We actually used C++ during make check (we test the C++ build of
</span><br>
<span class="quotelev2">&gt;&gt; doc/hwloc-hello.c)
</span><br>
<span class="quotelev2">&gt;&gt; (got a build failure report from <a href="https://ci.inria.fr/hwloc/">https://ci.inria.fr/hwloc/</a>)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 08/05/2013 02:27, svn-commit-mailer_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2013-05-07 20:27:25 EDT (Tue, 07 May 2013)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 5606
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5606">https://svn.open-mpi.org/trac/hwloc/changeset/5606</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Revert r5604 -- it's redundant with LT_LANG([C]).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   trunk/configure.ac |     4 ----                                    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   1 files changed, 0 insertions(+), 4 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/configure.ac
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/configure.ac	Tue May  7 20:18:05 2013	(r5605)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/configure.ac	2013-05-07 20:27:25 EDT (Tue, 07 May 2013)	(r5606)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -166,10 +166,6 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Compiler support -- we don't need that stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AM_ENABLE_SHARED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AM_DISABLE_STATIC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -# Tell libtool that we don't need Fortran or C++ support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -FC=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -F77=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -CXX=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AM_PROG_LIBTOOL([dlopen win32-dll])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LT_LANG([C])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LT_CONFIG_LTDL_DIR([src/libltdl])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3736.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5611)"</a>
<li><strong>Previous message:</strong> <a href="3734.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>In reply to:</strong> <a href="3733.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
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
