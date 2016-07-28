<?
$subject_val = "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 22:46:09 2015" -->
<!-- isoreceived="20150824024609" -->
<!-- sent="Sun, 23 Aug 2015 19:46:03 -0700" -->
<!-- isosent="20150824024603" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically" -->
<!-- id="CAAvDA15L-gi5VCR-VWbfp22Zm1y65J_EBK2Y7PG2CnKCfZWh3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A79FCC98-99E8-4900-AAF6-7463ADD3F5A5_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-23 22:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17807.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17805.php">Ralph Castain: "[OMPI devel] Fwd: PMIx 2.0 API thoughts"</a>
<li><strong>In reply to:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17807.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17807.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I will try the requested change and let you know.
<br>
<p>-Paul
<br>
<p>On Sun, Aug 23, 2015 at 7:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Rather than generating another rc right away, could you please apply the
</span><br>
<span class="quotelev1">&gt; following patch and see if it fixes the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *diff --git a/ompi/debuggers/Makefile.am b/ompi/debuggers/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *index 3e48af8..343a0c4 100644*
</span><br>
<span class="quotelev1">&gt; *--- a/ompi/debuggers/Makefile.am*
</span><br>
<span class="quotelev1">&gt; *+++ b/ompi/debuggers/Makefile.am*
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
<span class="quotelev1">&gt; @@ -43,6 +44,7 @@ headers = \
</span><br>
<span class="quotelev1">&gt;  # Simple checks to ensure that the DSOs are functional
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  dlopen_test_SOURCES = dlopen_test.c
</span><br>
<span class="quotelev1">&gt; +dlopen_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev1">&gt;  dlopen_test_LDADD = \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev1">&gt;          $(top_builddir)/opal/libopen-pal.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2015, at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I regret to say that in my endless search for perfection (which is a
</span><br>
<span class="quotelev1">&gt; journey, not a destination) I believe I found another issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had mx2g sources sitting around, which I compiled and installed on two
</span><br>
<span class="quotelev1">&gt; systems (x86 and x86-64).
</span><br>
<span class="quotelev1">&gt; These provide only compile/link tests, since my systems lack the hardware
</span><br>
<span class="quotelev1">&gt; (actually do have some in a box somewhere).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things worked fine on both systems when configure with --with-mx=[path].
</span><br>
<span class="quotelev1">&gt; However, on both systems adding &quot;--enable-static --disable-shared&quot; results
</span><br>
<span class="quotelev1">&gt; in failure from &quot;make check&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt;   CC       predefined_gap_test.o
</span><br>
<span class="quotelev1">&gt;   CCLD     predefined_gap_test
</span><br>
<span class="quotelev1">&gt;   CC       dlopen_test.o
</span><br>
<span class="quotelev1">&gt;   CCLD     dlopen_test
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; ./predefined_gap_test: error while loading shared libraries:
</span><br>
<span class="quotelev1">&gt; libmyriexpress.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; FAIL: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; ./dlopen_test: error while loading shared libraries: libmyriexpress.so:
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following *does* show  mpicc using a correct  rpath argument for the
</span><br>
<span class="quotelev1">&gt; mx library:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./INST/bin/mpicc --show openmpi-1.10.0rc5/examples/ring_c.c
</span><br>
<span class="quotelev1">&gt; gcc openmpi-1.10.0rc5/examples/ring_c.c
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/include
</span><br>
<span class="quotelev1">&gt; -pthread -L/opt/mx2g/lib -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt; -L/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib -lmpi
</span><br>
<span class="quotelev1">&gt; -lopen-rte -lopen-pal -lm -ldl -lrt -lmyriexpress -libverbs -lutil
</span><br>
<span class="quotelev1">&gt; $ ls /opt/mx2g/lib
</span><br>
<span class="quotelev1">&gt; debug  libmyriexpress.a  libmyriexpress.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the *test* is built without an rpath:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool  --tag=CC   --mode=link gcc -std=gnu99
</span><br>
<span class="quotelev1">&gt;  -fno-strict-aliasing -pthread -g   -o dlopen_test dlopen_test.o ../../ompi/
</span><br>
<span class="quotelev1">&gt; libmpi.la ../../opal/libopen-pal.la -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -fno-strict-aliasing -pthread -g -o
</span><br>
<span class="quotelev1">&gt; dlopen_test dlopen_test.o  ../../ompi/.libs/libmpi.a -L/opt/mx2g/lib
</span><br>
<span class="quotelev1">&gt; -libverbs -lmyriexpress
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/opal/.libs/libopen-pal.a
</span><br>
<span class="quotelev1">&gt; ../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no reason to suspect this is not also present in 1.8.x, but have
</span><br>
<span class="quotelev1">&gt; not checked.
</span><br>
<span class="quotelev1">&gt; Sometime after 1.10.0 is out to door, I expect to test the v1.8 nightly
</span><br>
<span class="quotelev1">&gt; tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul [who enjoyed breaking his toys as a child and now breaks software
</span><br>
<span class="quotelev1">&gt; with the same enthusiasm]
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17803.php">http://www.open-mpi.org/community/lists/devel/2015/08/17803.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17804.php">http://www.open-mpi.org/community/lists/devel/2015/08/17804.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17806/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17807.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17805.php">Ralph Castain: "[OMPI devel] Fwd: PMIx 2.0 API thoughts"</a>
<li><strong>In reply to:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17807.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17807.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
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
