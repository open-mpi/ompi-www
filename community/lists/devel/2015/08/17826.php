<?
$subject_val = "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:18:21 2015" -->
<!-- isoreceived="20150824181821" -->
<!-- sent="Mon, 24 Aug 2015 11:18:16 -0700" -->
<!-- isosent="20150824181816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc6 - Solaris &amp;quot;make check&amp;quot; problem (regression vs. rc5)" -->
<!-- id="73ED5623-5C1D-4711-9117-E2A3022200E5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15X9xMovoks-h3khOBmKOGShKJ3_6hPwXbagiXMugpkOQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 14:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17824.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Reply:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So you think this will resolve the problem:
<br>
<p>diff --git a/ompi/debuggers/Makefile.am b/ompi/debuggers/Makefile.am
<br>
index 93a3046..069c3e6 100644
<br>
--- a/ompi/debuggers/Makefile.am
<br>
+++ b/ompi/debuggers/Makefile.am
<br>
@@ -44,14 +44,14 @@ headers = \
<br>
&nbsp;# Simple checks to ensure that the DSOs are functional
<br>
&nbsp;
<br>
&nbsp;dlopen_test_SOURCES = dlopen_test.c
<br>
-dlopen_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+dlopen_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;dlopen_test_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;dlopen_test_DEPENDENCIES = $(ompi_predefined_LDADD)
<br>
&nbsp;
<br>
&nbsp;predefined_gap_test_SOURCES = predefined_gap_test.c
<br>
-predefined_gap_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+predefined_gap_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;predefined_gap_test_LDADD = $(top_builddir)/ompi/libmpi.la
<br>
&nbsp;predefined_gap_test_DEPENDENCIES = $(ompi_predefined_LDADD)
<br>
&nbsp;
<br>
diff --git a/test/datatype/Makefile.am b/test/datatype/Makefile.am
<br>
index 7683c34..7c14ec7 100644
<br>
--- a/test/datatype/Makefile.am
<br>
+++ b/test/datatype/Makefile.am
<br>
@@ -21,46 +21,46 @@ TESTS = opal_datatype_test $(MPI_TESTS)
<br>
&nbsp;check_PROGRAMS = $(TESTS) $(MPI_CHECKS)
<br>
&nbsp;
<br>
&nbsp;ddt_test_SOURCES = ddt_test.c ddt_lib.c ddt_lib.h
<br>
-ddt_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+ddt_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;ddt_test_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;
<br>
&nbsp;ddt_raw_SOURCES = ddt_raw.c ddt_lib.c ddt_lib.h
<br>
-ddt_raw_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+ddt_raw_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;ddt_raw_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;
<br>
&nbsp;ddt_pack_SOURCES = ddt_pack.c
<br>
-ddt_pack_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+ddt_pack_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;ddt_pack_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;
<br>
&nbsp;checksum_SOURCES = checksum.c
<br>
-checksum_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+checksum_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;checksum_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;
<br>
&nbsp;position_SOURCES = position.c
<br>
-position_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+position_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;position_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;
<br>
&nbsp;position_noncontig_SOURCES = position_noncontig.c
<br>
-position_noncontig_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+position_noncontig_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;position_noncontig_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;
<br>
&nbsp;to_self_SOURCES = to_self.c
<br>
-to_self_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+to_self_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;to_self_LDADD = $(top_builddir)/ompi/libmpi.la
<br>
&nbsp;
<br>
&nbsp;opal_datatype_test_SOURCES = opal_datatype_test.c opal_ddt_lib.c opal_ddt_lib.h
<br>
-opal_datatype_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
<br>
+opal_datatype_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;opal_datatype_test_LDADD = $(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;
<br>
diff --git a/test/event/Makefile.am b/test/event/Makefile.am
<br>
index 168d6bf..a133f2f 100644
<br>
--- a/test/event/Makefile.am
<br>
+++ b/test/event/Makefile.am
<br>
@@ -27,19 +27,19 @@ check_PROGRAMS = \
<br>
&nbsp;TESTS = $(check_PROGRAMS)
<br>
&nbsp;
<br>
&nbsp;signal_test_SOURCES = signal-test.c
<br>
-signal_test_LDFLAGS = $(OPAL_WRAPPER_EXTRA_LDFLAGS)
<br>
+signal_test_LDFLAGS = $(OPAL_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;signal_test_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;signal_test_DEPENDENCIES = $(signal_test_LDADD)
<br>
&nbsp;
<br>
&nbsp;time_test_SOURCES = time-test.c
<br>
-time_test_LDFLAGS = $(OPAL_WRAPPER_EXTRA_LDFLAGS)
<br>
+time_test_LDFLAGS = $(OPAL_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;time_test_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;time_test_DEPENDENCIES = $(time_test_LDADD)
<br>
&nbsp;
<br>
&nbsp;event_test_SOURCES = event-test.c
<br>
-event_test_LDFLAGS = $(OPAL_WRAPPER_EXTRA_LDFLAGS)
<br>
+event_test_LDFLAGS = $(OPAL_PKG_CONFIG_LDFLAGS)
<br>
&nbsp;event_test_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
&nbsp;event_test_DEPENDENCIES = $(event_test_LDADD)
<br>
<p><p><span class="quotelev1">&gt; On Aug 24, 2015, at 11:04 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is from testing the Studio compilers on a Solaris-11.1/amd64 platform, in a configuration that passed my testing of rc5.
</span><br>
<span class="quotelev1">&gt; I have configured with
</span><br>
<span class="quotelev1">&gt; --prefix=[...] --enable-debug CC=cc CXX=CC FC=f90 --with-verbs \
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-library=stlport4' --with-wrapper-cxxflags='-library=stlport4'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that there is nothing but TCP and Verbs on this platform.
</span><br>
<span class="quotelev1">&gt; This is not yet another problem with mx or ofi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My &quot;make check&quot; step fails as shown below, apparently choking on the $(OMPI_WRAPPER_EXTRA_LDFLAGS) that Ralph had to add to resolve the problems I saw in rc5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gmake[3]: Entering directory `/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; source='/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers/predefined_gap_test.c' object='predefined_gap_test.o' libtool=no \
</span><br>
<span class="quotelev1">&gt;         DEPDIR=.deps depmode=none /bin/sh /shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/config/depcomp \
</span><br>
<span class="quotelev1">&gt;         cc -DHAVE_CONFIG_H -I. -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers -I../../opal/include -I../../orte/include -I../../ompi/include -I../../oshmem/include -I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen   -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6 -I../.. -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/include -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/orte/include -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/include -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/oshmem/include  -D_REENTRANT  -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/hwloc/hwloc191/hwloc/include -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/opal/mca/hwloc/hwloc191/hwloc/include -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/event/libevent2021/libevent -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/event/libevent2021/libevent/include -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/opal/mca/event/libevent2021/libevent/include  -D_REENTRANT -g -c -o predefined_gap_test.o /shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers/predefined_gap_test.c
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/include/opal/sys/ia32/atomic.h&quot;, line 173: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool  --tag=CC   --mode=link cc  -D_REENTRANT -g -R@{libdir}   -o predefined_gap_test predefined_gap_test.o ../../ompi/libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt; -lm -lsocket -lnsl  
</span><br>
<span class="quotelev1">&gt; libtool: link: only absolute run-paths are allowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am going to venture a guess that libtool is complaining about &quot;-R@{libdir}&quot;.
</span><br>
<span class="quotelev1">&gt; Looking at config/opal_setup_wrappers.m4 I find:
</span><br>
<span class="quotelev1">&gt; # Called to find all -L arguments in the LDFLAGS and add in RPATH args
</span><br>
<span class="quotelev1">&gt; # for each of them.  Then also add in an RPATH for @{libdir} (which
</span><br>
<span class="quotelev1">&gt; # will be replaced by the wrapper compile to the installdir libdir at
</span><br>
<span class="quotelev1">&gt; # runtime), and the RUNPATH args, if we have them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, since it sounds like the wrapper compiler (not autoconf, automake or libtool) is expected to perform the expansion, it sounds to me like the $(*_WRAPPER_EXTRA_LDFLAGS) are *not* suitable for linking the tests.
</span><br>
<span class="quotelev1">&gt; This means that Ralph and I wasted our Sunday iterating to the wrong fix for the mx+static problem I encountered in rc5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The good news (I hope) is the following comment in the same .m4 file:
</span><br>
<span class="quotelev1">&gt;     # Note that we have to setup &lt;package&gt;_PKG_CONFIG_LDFLAGS for the
</span><br>
<span class="quotelev1">&gt;     # pkg-config files to parallel the
</span><br>
<span class="quotelev1">&gt;     # &lt;package&gt;_WRAPPER_EXTRA_LDFLAGS.  This is because pkg-config
</span><br>
<span class="quotelev1">&gt;     # will not understand the @{libdir} notation in
</span><br>
<span class="quotelev1">&gt;     # *_WRAPPER_EXTRA_LDFLAGS; we have to translate it to ${libdir}.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, Ralph, I suspect that use of {OMPI,OPAL}_PKG_CONFIG_LDFLAGS is the proper replacement for WRAPPER_LD_FLAGS.
</span><br>
<span class="quotelev1">&gt; I tried manually making this change in the three affected generated Makefiles and was able to pass my testing on this platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17824.php">http://www.open-mpi.org/community/lists/devel/2015/08/17824.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17824.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Reply:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
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
