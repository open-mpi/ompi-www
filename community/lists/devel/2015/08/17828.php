<?
$subject_val = "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:54:02 2015" -->
<!-- isoreceived="20150824185402" -->
<!-- sent="Mon, 24 Aug 2015 11:53:53 -0700" -->
<!-- isosent="20150824185353" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc6 - Solaris &amp;quot;make check&amp;quot; problem (regression vs. rc5)" -->
<!-- id="CAAvDA141Y0_kct4vdBkWBMbsMQxSyHmKtBreGwZgh+KTVcO+ng_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="73ED5623-5C1D-4711-9117-E2A3022200E5_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 14:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Yes, I suspect that would resolve the problem.  However, based on my
<br>
conclusions presented in an email sent a few minutes ago (and expanded upon
<br>
below), I think you should either *revert* or *remove* all of those
<br>
*_LDFLAGS settings.
<br>
<p>These variables were *empty* prior to our work that lead to RC6, since
<br>
WRAPPER_EXTRA_LDFLAGS was undefined.
<br>
Looking at config/opal_setup_wrappers.m4 I find that WRAPPER_EXTRA_LDFLAGS
<br>
is subject to AC_DEFINE_UNQUOTED(), but never AC_SUBST().
<br>
So the presence of this variable in any Makefile.am may be &quot;dead code&quot; -
<br>
that is probably still worth some investigation.
<br>
<p>Perhaps more importantly, as noted in my other recent email, if I had
<br>
followed the MX installation instructions to the letter then the libdir
<br>
would be in my LD_LIBRARY_PATH or system default library search path and
<br>
*none* of these MX-related issues would have arisen at all (mea culpa).
<br>
So, you and I have been chasing a bug (or series of them) that could be
<br>
attributed to &quot;pilot error&quot;.
<br>
<p>So, if one removes or reverts (to rc5) these [testname]_LDFLAGS setting
<br>
then there are no known bugs associated with them.
<br>
The only failures would be attributable to my MIS-INSTALLATION of MX.
<br>
<p>-Paul
<br>
<p><p>On Mon, Aug 24, 2015 at 11:18 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So you think this will resolve the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *diff --git a/ompi/debuggers/Makefile.am b/ompi/debuggers/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *index 93a3046..069c3e6 100644*
</span><br>
<span class="quotelev1">&gt; *--- a/ompi/debuggers/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *+++ b/ompi/debuggers/Makefile.am*
</span><br>
<span class="quotelev1">&gt; @@ -44,14 +44,14 @@ headers = \
</span><br>
<span class="quotelev1">&gt;  # Simple checks to ensure that the DSOs are functional
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  dlopen_test_SOURCES = dlopen_test.c
</span><br>
<span class="quotelev1">&gt; -dlopen_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +dlopen_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  dlopen_test_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;  dlopen_test_DEPENDENCIES = $(ompi_predefined_LDADD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  predefined_gap_test_SOURCES = predefined_gap_test.c
</span><br>
<span class="quotelev1">&gt; -predefined_gap_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +predefined_gap_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  predefined_gap_test_LDADD = $(top_builddir)/ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt;  predefined_gap_test_DEPENDENCIES = $(ompi_predefined_LDADD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *diff --git a/test/datatype/Makefile.am b/test/datatype/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *index 7683c34..7c14ec7 100644*
</span><br>
<span class="quotelev1">&gt; *--- a/test/datatype/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *+++ b/test/datatype/Makefile.am*
</span><br>
<span class="quotelev1">&gt; @@ -21,46 +21,46 @@ TESTS = opal_datatype_test $(MPI_TESTS)
</span><br>
<span class="quotelev1">&gt;  check_PROGRAMS = $(TESTS) $(MPI_CHECKS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ddt_test_SOURCES = ddt_test.c ddt_lib.c ddt_lib.h
</span><br>
<span class="quotelev1">&gt; -ddt_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +ddt_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  ddt_test_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ddt_raw_SOURCES = ddt_raw.c ddt_lib.c ddt_lib.h
</span><br>
<span class="quotelev1">&gt; -ddt_raw_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +ddt_raw_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  ddt_raw_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ddt_pack_SOURCES = ddt_pack.c
</span><br>
<span class="quotelev1">&gt; -ddt_pack_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +ddt_pack_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  ddt_pack_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  checksum_SOURCES = checksum.c
</span><br>
<span class="quotelev1">&gt; -checksum_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +checksum_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  checksum_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  position_SOURCES = position.c
</span><br>
<span class="quotelev1">&gt; -position_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +position_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  position_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  position_noncontig_SOURCES = position_noncontig.c
</span><br>
<span class="quotelev1">&gt; -position_noncontig_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +position_noncontig_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  position_noncontig_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  to_self_SOURCES = to_self.c
</span><br>
<span class="quotelev1">&gt; -to_self_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +to_self_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  to_self_LDADD = $(top_builddir)/ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  opal_datatype_test_SOURCES = opal_datatype_test.c opal_ddt_lib.c
</span><br>
<span class="quotelev1">&gt; opal_ddt_lib.h
</span><br>
<span class="quotelev1">&gt; -opal_datatype_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +opal_datatype_test_LDFLAGS = $(OMPI_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  opal_datatype_test_LDADD = $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *diff --git a/test/event/Makefile.am b/test/event/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *index 168d6bf..a133f2f 100644*
</span><br>
<span class="quotelev1">&gt; *--- a/test/event/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *+++ b/test/event/Makefile.am*
</span><br>
<span class="quotelev1">&gt; @@ -27,19 +27,19 @@ check_PROGRAMS = \
</span><br>
<span class="quotelev1">&gt;  TESTS = $(check_PROGRAMS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  signal_test_SOURCES = signal-test.c
</span><br>
<span class="quotelev1">&gt; -signal_test_LDFLAGS = $(OPAL_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +signal_test_LDFLAGS = $(OPAL_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  signal_test_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;  signal_test_DEPENDENCIES = $(signal_test_LDADD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  time_test_SOURCES = time-test.c
</span><br>
<span class="quotelev1">&gt; -time_test_LDFLAGS = $(OPAL_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +time_test_LDFLAGS = $(OPAL_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  time_test_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;  time_test_DEPENDENCIES = $(time_test_LDADD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  event_test_SOURCES = event-test.c
</span><br>
<span class="quotelev1">&gt; -event_test_LDFLAGS = $(OPAL_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +event_test_LDFLAGS = $(OPAL_PKG_CONFIG_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  event_test_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;  event_test_DEPENDENCIES = $(event_test_LDADD)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2015, at 11:04 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is from testing the Studio compilers on a Solaris-11.1/amd64
</span><br>
<span class="quotelev1">&gt; platform, in a configuration that passed my testing of rc5.
</span><br>
<span class="quotelev1">&gt; I have configured with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --prefix=[...] --enable-debug CC=cc CXX=CC FC=f90 --with-verbs \
</span><br>
<span class="quotelev1">&gt; CXXFLAGS='-library=stlport4' --with-wrapper-cxxflags='-library=stlport4'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that there is nothing but TCP and Verbs on this platform.
</span><br>
<span class="quotelev1">&gt; This is not yet another problem with mx or ofi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My &quot;make check&quot; step fails as shown below, apparently choking on the
</span><br>
<span class="quotelev1">&gt; $(OMPI_WRAPPER_EXTRA_LDFLAGS) that Ralph had to add to resolve the problems
</span><br>
<span class="quotelev1">&gt; I saw in rc5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gmake[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; source='/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers/predefined_gap_test.c'
</span><br>
<span class="quotelev1">&gt; object='predefined_gap_test.o' libtool=no \
</span><br>
<span class="quotelev1">&gt;         DEPDIR=.deps depmode=none /bin/sh
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/config/depcomp
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt;         cc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers
</span><br>
<span class="quotelev1">&gt; -I../../opal/include -I../../orte/include -I../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6
</span><br>
<span class="quotelev1">&gt; -I../..
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/orte/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/oshmem/include
</span><br>
<span class="quotelev1">&gt;  -D_REENTRANT
</span><br>
<span class="quotelev1">&gt;  -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt;  -D_REENTRANT -g -c -o predefined_gap_test.o
</span><br>
<span class="quotelev1">&gt; /shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/ompi/debuggers/predefined_gap_test.c
</span><br>
<span class="quotelev1">&gt; &quot;/shared/OMPI/openmpi-1.10.0rc6-solaris11-x86-ib-ss12u3/openmpi-1.10.0rc6/opal/include/opal/sys/ia32/atomic.h&quot;,
</span><br>
<span class="quotelev1">&gt; line 173: warning: parameter in inline asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool  --tag=CC   --mode=link cc  -D_REENTRANT -g -R@
</span><br>
<span class="quotelev1">&gt; {libdir}   -o predefined_gap_test predefined_gap_test.o ../../ompi/
</span><br>
<span class="quotelev1">&gt; libmpi.la -lm -lsocket -lnsl
</span><br>
<span class="quotelev1">&gt; libtool: link: only absolute run-paths are allowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to venture a guess that libtool is complaining about &quot;-R@
</span><br>
<span class="quotelev1">&gt; {libdir}&quot;.
</span><br>
<span class="quotelev1">&gt; Looking at config/opal_setup_wrappers.m4 I find:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, since it sounds like the wrapper compiler (not autoconf, automake or
</span><br>
<span class="quotelev1">&gt; libtool) is expected to perform the expansion, it sounds to me like the
</span><br>
<span class="quotelev1">&gt; $(*_WRAPPER_EXTRA_LDFLAGS) are *not* suitable for linking the tests.
</span><br>
<span class="quotelev1">&gt; This means that Ralph and I wasted our Sunday iterating to the wrong fix
</span><br>
<span class="quotelev1">&gt; for the mx+static problem I encountered in rc5.
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
<span class="quotelev1">&gt; So, Ralph, I suspect that use of {OMPI,OPAL}_PKG_CONFIG_LDFLAGS is the
</span><br>
<span class="quotelev1">&gt; proper replacement for WRAPPER_LD_FLAGS.
</span><br>
<span class="quotelev1">&gt; I tried manually making this change in the three affected generated
</span><br>
<span class="quotelev1">&gt; Makefiles and was able to pass my testing on this platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17824.php">http://www.open-mpi.org/community/lists/devel/2015/08/17824.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17826.php">http://www.open-mpi.org/community/lists/devel/2015/08/17826.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
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
