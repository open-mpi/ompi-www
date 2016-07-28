<?
$subject_val = "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 04:05:36 2015" -->
<!-- isoreceived="20150824080536" -->
<!-- sent="Mon, 24 Aug 2015 01:05:31 -0700" -->
<!-- isosent="20150824080531" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically" -->
<!-- id="65270A68-11AE-4C4E-8C64-78733F335F28_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA15uxJE9d3yHoMcj5TgwWbmEKxbd9O92XA0npk6fvsTFkA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 04:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17812.php">Gilles Gouaillardet: "[OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17810.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17810.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17817.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17817.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, you are absolutely correct! I will fix all of them, but wanted first to ensure that was the correct fix.
<br>
<p>Thanks Paul!
<br>
<p><span class="quotelev1">&gt; On Aug 23, 2015, at 10:44 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As I expected your fixes to ompi/debuggers/Makefile.am only fixed the tests in that directory.
</span><br>
<span class="quotelev1">&gt; I am still left with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/test/datatype'
</span><br>
<span class="quotelev1">&gt; PASS: opal_datatype_test
</span><br>
<span class="quotelev1">&gt; FAIL: checksum
</span><br>
<span class="quotelev1">&gt; FAIL: position
</span><br>
<span class="quotelev1">&gt; FAIL: position_noncontig
</span><br>
<span class="quotelev1">&gt; FAIL: ddt_test
</span><br>
<span class="quotelev1">&gt; FAIL: ddt_raw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was able to resolve those by making the &quot;obvious&quot; changes in test/datatype/Makefile.am to replace undefined uses of $(WRAPPER_EXTRA_LDFLAGS) with $(OMPI_WRAPPER_EXTRA_LDFLAGS).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That leaves 6 more undefined references to $(WRAPPER_EXTRA_LDFLAGS).
</span><br>
<span class="quotelev1">&gt; I think somebody should look at those, but I am guessing that all in test/datatype/Makefile.am should be $(OMPI_WRAPPER_EXTRA_LDFLAGS) while all in test/event/Makefile.am should probably be $(OPAL_WRAPPER_EXTRA_LDFLAGS).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 23, 2015 at 9:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will try that and expect it will fix exactly those two tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, that leaves 11 other undefined references in WRAPPER_EXTRA_LDFLAGS.
</span><br>
<span class="quotelev1">&gt; Five of those I already know will cause test failures as shown in my previous email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 23, 2015 at 8:50 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmm&#226;&#128;&#166;.I&#226;&#128;&#153;ll bet this is the correct change, then:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/debuggers/Makefile.am b/ompi/debuggers/Makefile.am
</span><br>
<span class="quotelev1">&gt; index 3e48af8..93a3046 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/debuggers/Makefile.am
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/debuggers/Makefile.am
</span><br>
<span class="quotelev1">&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev1">&gt;  #                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # Copyright (c) 2007-2015 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +# Copyright (c) 2015      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev1">&gt;  # $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  # 
</span><br>
<span class="quotelev1">&gt;  # Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -43,13 +44,14 @@ headers = \
</span><br>
<span class="quotelev1">&gt;  # Simple checks to ensure that the DSOs are functional
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  dlopen_test_SOURCES = dlopen_test.c
</span><br>
<span class="quotelev1">&gt; +dlopen_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  dlopen_test_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt; \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la &lt;<a href="http://libopen-pal.la/">http://libopen-pal.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;  dlopen_test_DEPENDENCIES = $(ompi_predefined_LDADD)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  predefined_gap_test_SOURCES = predefined_gap_test.c
</span><br>
<span class="quotelev1">&gt; -predefined_gap_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt; +predefined_gap_test_LDFLAGS = $(OMPI_WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  predefined_gap_test_LDADD = $(top_builddir)/ompi/libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt;  predefined_gap_test_DEPENDENCIES = $(ompi_predefined_LDADD)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 23, 2015, at 8:41 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, but no change - still failing to load libmyriexpress.so and still no rpath at link:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -fno-strict-aliasing -pthread -g   -o dlopen_test dlopen_test.o ../../ompi/libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt; ../../opal/libopen-pal.la &lt;<a href="http://libopen-pal.la/">http://libopen-pal.la/</a>&gt; -lrt -lm -lutil  
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -std=gnu99 -fno-strict-aliasing -pthread -g -o dlopen_test dlopen_test.o  ../../ompi/.libs/libmpi.a -L/opt/mx2g/lib -libverbs -lmyriexpress /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/orte/.libs/libopen-rte.a /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/opal/.libs/libopen-pal.a ../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not surprised, since predefined_gap_test already had those LDFLAGS and had also failed to locate the library at run time.
</span><br>
<span class="quotelev2">&gt;&gt; Don't misunderstand - I agree the change you made is correct (and necessary), but it is apparently not sufficient.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It does look like configure did its job:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ grep ,-rpath config.status
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;OMPI_PKG_CONFIG_LDFLAGS&quot;]=&quot;-L/opt/mx2g/lib    -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath -Wl,${libdir} -Wl,--enable-new-dtags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;OMPI_WRAPPER_EXTRA_LDFLAGS&quot;]=&quot;-L/opt/mx2g/lib    -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;ORTE_PKG_CONFIG_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,${libdir} -Wl,--enable-new-dtags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;ORTE_WRAPPER_EXTRA_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;OPAL_PKG_CONFIG_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,${libdir} -Wl,--enable-new-dtags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; S[&quot;OPAL_WRAPPER_EXTRA_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags&quot;
</span><br>
<span class="quotelev2">&gt;&gt; D[&quot;WRAPPER_EXTRA_LDFLAGS&quot;]=&quot; \&quot;-L/opt/mx2g/lib    -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags\&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, WRAPPER_EXTRA_LDFLAGS isn't defined in any Makefile, despite being used in several:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ find . -name Makefile | xargs grep -w WRAPPER_EXTRA_LDFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; ./test/event/Makefile:signal_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/event/Makefile:time_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/event/Makefile:event_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:ddt_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:ddt_raw_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:ddt_pack_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:checksum_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:position_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:position_noncontig_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:to_self_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./test/datatype/Makefile:opal_datatype_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/debuggers/Makefile:dlopen_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/debuggers/Makefile:predefined_gap_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, the following result is probably not too surprising (unless due to the tests NOT appearing):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ make -k check 2&gt;&amp;1 | grep ^FAIL
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: predefined_gap_test
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: checksum
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: position
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: position_noncontig
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: ddt_test
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: ddt_raw
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Aug 23, 2015 at 7:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will try the requested change and let you know.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Aug 23, 2015 at 7:27 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Rather than generating another rc right away, could you please apply the following patch and see if it fixes the problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/ompi/debuggers/Makefile.am b/ompi/debuggers/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; index 3e48af8..343a0c4 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/ompi/debuggers/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/ompi/debuggers/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; @@ -10,6 +10,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;  # Copyright (c) 2004-2005 The Regents of the University of California.
</span><br>
<span class="quotelev2">&gt;&gt;  #                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  # Copyright (c) 2007-2015 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; +# Copyright (c) 2015      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  # $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;  # 
</span><br>
<span class="quotelev2">&gt;&gt;  # Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -43,6 +44,7 @@ headers = \
</span><br>
<span class="quotelev2">&gt;&gt;  # Simple checks to ensure that the DSOs are functional
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  dlopen_test_SOURCES = dlopen_test.c
</span><br>
<span class="quotelev2">&gt;&gt; +dlopen_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt;  dlopen_test_LDADD = \
</span><br>
<span class="quotelev2">&gt;&gt;          $(top_builddir)/ompi/libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt; \
</span><br>
<span class="quotelev2">&gt;&gt;          $(top_builddir)/opal/libopen-pal.la &lt;<a href="http://libopen-pal.la/">http://libopen-pal.la/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 23, 2015, at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I regret to say that in my endless search for perfection (which is a journey, not a destination) I believe I found another issue:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had mx2g sources sitting around, which I compiled and installed on two systems (x86 and x86-64).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These provide only compile/link tests, since my systems lack the hardware (actually do have some in a box somewhere).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Things worked fine on both systems when configure with --with-mx=[path].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, on both systems adding &quot;--enable-static --disable-shared&quot; results in failure from &quot;make check&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC       predefined_gap_test.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CCLD     predefined_gap_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CC       dlopen_test.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   CCLD     dlopen_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Entering directory `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./predefined_gap_test: error while loading shared libraries: libmyriexpress.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: predefined_gap_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./dlopen_test: error while loading shared libraries: libmyriexpress.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following *does* show  mpicc using a correct  rpath argument for the mx library:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ./INST/bin/mpicc --show openmpi-1.10.0rc5/examples/ring_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc openmpi-1.10.0rc5/examples/ring_c.c -I/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/include -pthread -L/opt/mx2g/lib -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath -Wl,/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib -Wl,--enable-new-dtags -L/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib -lmpi -lopen-rte -lopen-pal -lm -ldl -lrt -lmyriexpress -libverbs -lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ls /opt/mx2g/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug  libmyriexpress.a  libmyriexpress.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the *test* is built without an rpath:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -fno-strict-aliasing -pthread -g   -o dlopen_test dlopen_test.o ../../ompi/libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt; ../../opal/libopen-pal.la &lt;<a href="http://libopen-pal.la/">http://libopen-pal.la/</a>&gt; -lrt -lm -lutil  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: gcc -std=gnu99 -fno-strict-aliasing -pthread -g -o dlopen_test dlopen_test.o  ../../ompi/.libs/libmpi.a -L/opt/mx2g/lib -libverbs -lmyriexpress /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/orte/.libs/libopen-rte.a /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/opal/.libs/libopen-pal.a ../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have no reason to suspect this is not also present in 1.8.x, but have not checked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sometime after 1.10.0 is out to door, I expect to test the v1.8 nightly tarball.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul [who enjoyed breaking his toys as a child and now breaks software with the same enthusiasm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17803.php">http://www.open-mpi.org/community/lists/devel/2015/08/17803.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17803.php">http://www.open-mpi.org/community/lists/devel/2015/08/17803.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17804.php">http://www.open-mpi.org/community/lists/devel/2015/08/17804.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17804.php">http://www.open-mpi.org/community/lists/devel/2015/08/17804.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17807.php">http://www.open-mpi.org/community/lists/devel/2015/08/17807.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17807.php">http://www.open-mpi.org/community/lists/devel/2015/08/17807.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17808.php">http://www.open-mpi.org/community/lists/devel/2015/08/17808.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17808.php">http://www.open-mpi.org/community/lists/devel/2015/08/17808.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17810.php">http://www.open-mpi.org/community/lists/devel/2015/08/17810.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17810.php">http://www.open-mpi.org/community/lists/devel/2015/08/17810.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17812.php">Gilles Gouaillardet: "[OMPI devel] reachable_netlink mca, libnl and libnl3"</a>
<li><strong>Previous message:</strong> <a href="17810.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17810.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17817.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17817.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
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
