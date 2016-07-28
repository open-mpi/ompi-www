<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 29 09:36:42 2013" -->
<!-- isoreceived="20130429133642" -->
<!-- sent="Mon, 29 Apr 2013 15:36:31 +0200" -->
<!-- isosent="20130429133631" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issues" -->
<!-- id="517E775F.7040707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="517E0155.80306_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 issues<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-29 09:36:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/04/2013 07:12, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 29/04/2013 05:53, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are seeing two errors with hwloc-1.7:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. The hwloc embedded in mpich was failing to build on FreeBSD with a
</span><br>
<span class="quotelev2">&gt;&gt; strict build.  I was able to reproduce the failure with hwloc-1.7 by
</span><br>
<span class="quotelev2">&gt;&gt; setting CFLAGS=-D_POSIX_SOURCE (the error shows up even with later
</span><br>
<span class="quotelev2">&gt;&gt; versions of POSIX enabled).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; topology.c: In function 'hwloc_fallback_nbprocessors':
</span><br>
<span class="quotelev2">&gt;&gt; topology.c:146: error: conflicting types for 'n'
</span><br>
<span class="quotelev2">&gt;&gt; topology.c:131: error: previous declaration of 'n' was here
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I fixed the above one
</span><br>
<p><a href="https://svn.open-mpi.org/trac/hwloc/changeset/5559">https://svn.open-mpi.org/trac/hwloc/changeset/5559</a>
<br>
<p><span class="quotelev1">&gt;  but I am getting many other warnings and another
</span><br>
<span class="quotelev1">&gt; error on FreeBSD 9.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/include/sys/sysctl.h:799: error: expected declaration specifiers or '...' before 'u_int'
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c: In function 'hwloc_freebsd_node_meminfo_info':
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:173: warning: passing argument 2 of 'sysctl' makes pointer from integer without a cast
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:173: warning: passing argument 5 of 'sysctl' makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; topology-freebsd.c:173: error: too many arguments to function 'sysctl'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if this CFLAGS=-D_POSIX_SOURCE is supported by FreeBSD headers.
</span><br>
<p>I could not fix this. Google says that FreeBSD does not define u_int
<br>
when _POSIX_SOURCE, so the sysctl() prototype cannot be correct. I tend
<br>
to think you should remove _POSIX_SOURCE on this FreeBSD release.
<br>
<p><span class="quotelev2">&gt;&gt; 2. The second error shows up with hwloc in embedded mode.  In hydra, we
</span><br>
<span class="quotelev2">&gt;&gt; setup hwloc in embedded mode using HWLOC_SETUP_CORE.  autoreconf on this
</span><br>
<span class="quotelev2">&gt;&gt; fails as:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; tools/topo/hwloc/hwloc/src/Makefile.am:211: error: HWLOC_LTDL_INCLUDED
</span><br>
<span class="quotelev2">&gt;&gt; does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: automake failed with exit status: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to be that this conditional is defined in hwloc's
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac directly instead of in the SETUP_CORE macro.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>This one is harder to fix.
<br>
<p>Moving AM_CONDITIONAL to HWLOC_DO_AM_CONDITIONAL would fix &quot;make&quot;. But
<br>
&quot;make distclean&quot; fails later because it enters src/libltdl which has not
<br>
been configured.
<br>
<p>In the end, we need to have embedders call these lines even when plugins
<br>
are disabled:
<br>
<p>LT_CONFIG_LTDL_DIR([src/libltdl])
<br>
LTDL_INIT([recursive convenience])
<br>
AC_CONFIG_FILES([src/libltdl/Makefile])
<br>
AM_CONDITIONAL([HWLOC_LTDL_INCLUDED], [test &quot;x$with_included_ltdl&quot; = xyes])
<br>
<p><p>So we should move them to SETUP_CORE or a new SETUP_PLUGINS(yes/no). But
<br>
libtool warns that these should stay in the main configure.ac. Also I
<br>
need to check whether we need to move these lines too:
<br>
<p>AM_ENABLE_SHARED
<br>
AM_DISABLE_STATIC
<br>
AM_PROG_LIBTOOL([dlopen win32-dll])
<br>
LT_LANG([C])
<br>
<p><p>Some of these may want not to go in SETUP_FOO to avoid conflicts with
<br>
embedders configure.ac?
<br>
<p>All this may be a good reason to switch to having libltdl run its own
<br>
configure recursevely instead of embedding it inside hwloc, things
<br>
should be more simple.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Previous message:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>In reply to:</strong> <a href="3650.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3652.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
<li><strong>Reply:</strong> <a href="3658.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.7 issues"</a>
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
