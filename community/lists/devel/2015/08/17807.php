<?
$subject_val = "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 23:42:24 2015" -->
<!-- isoreceived="20150824034224" -->
<!-- sent="Sun, 23 Aug 2015 20:41:49 -0700" -->
<!-- isosent="20150824034149" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically" -->
<!-- id="CAAvDA15BsxfN1GmRvD98EDTTEY8vkprpSTxp2jT6M9H99z_SXA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15L-gi5VCR-VWbfp22Zm1y65J_EBK2Y7PG2CnKCfZWh3A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-23 23:41:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17808.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17808.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17808.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Sorry, but no change - still failing to load libmyriexpress.so and still no
<br>
rpath at link:
<br>
<p>/bin/sh ../../libtool  --tag=CC   --mode=link gcc -std=gnu99
<br>
&nbsp;-fno-strict-aliasing -pthread -g   -o dlopen_test dlopen_test.o ../../ompi/
<br>
libmpi.la ../../opal/libopen-pal.la -lrt -lm -lutil
<br>
libtool: link: gcc -std=gnu99 -fno-strict-aliasing -pthread -g -o
<br>
dlopen_test dlopen_test.o  ../../ompi/.libs/libmpi.a -L/opt/mx2g/lib
<br>
-libverbs -lmyriexpress
<br>
/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/orte/.libs/libopen-rte.a
<br>
/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/opal/.libs/libopen-pal.a
<br>
../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread
<br>
<p>I am not surprised, since predefined_gap_test already had those LDFLAGS and
<br>
had also failed to locate the library at run time.
<br>
Don't misunderstand - I agree the change you made is correct (and
<br>
necessary), but it is apparently not sufficient.
<br>
<p>It does look like configure did its job:
<br>
<p>$ grep ,-rpath config.status
<br>
S[&quot;OMPI_PKG_CONFIG_LDFLAGS&quot;]=&quot;-L/opt/mx2g/lib    -Wl,-rpath
<br>
-Wl,/opt/mx2g/lib -Wl,-rpath -Wl,${libdir} -Wl,--enable-new-dtags&quot;
<br>
S[&quot;OMPI_WRAPPER_EXTRA_LDFLAGS&quot;]=&quot;-L/opt/mx2g/lib    -Wl,-rpath
<br>
-Wl,/opt/mx2g/lib -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags&quot;
<br>
S[&quot;ORTE_PKG_CONFIG_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,${libdir}
<br>
-Wl,--enable-new-dtags&quot;
<br>
S[&quot;ORTE_WRAPPER_EXTRA_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,@{libdir}
<br>
-Wl,--enable-new-dtags&quot;
<br>
S[&quot;OPAL_PKG_CONFIG_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,${libdir}
<br>
-Wl,--enable-new-dtags&quot;
<br>
S[&quot;OPAL_WRAPPER_EXTRA_LDFLAGS&quot;]=&quot;    -Wl,-rpath -Wl,@{libdir}
<br>
-Wl,--enable-new-dtags&quot;
<br>
D[&quot;WRAPPER_EXTRA_LDFLAGS&quot;]=&quot; \&quot;-L/opt/mx2g/lib    -Wl,-rpath
<br>
-Wl,/opt/mx2g/lib -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags\&quot;&quot;
<br>
<p>However, WRAPPER_EXTRA_LDFLAGS isn't defined in any Makefile, despite being
<br>
used in several:
<br>
<p>$ find . -name Makefile | xargs grep -w WRAPPER_EXTRA_LDFLAGS
<br>
./test/event/Makefile:signal_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/event/Makefile:time_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/event/Makefile:event_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:ddt_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:ddt_raw_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:ddt_pack_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:checksum_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:position_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:position_noncontig_LDFLAGS =
<br>
$(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:to_self_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./test/datatype/Makefile:opal_datatype_test_LDFLAGS =
<br>
$(WRAPPER_EXTRA_LDFLAGS)
<br>
./ompi/debuggers/Makefile:dlopen_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
./ompi/debuggers/Makefile:predefined_gap_test_LDFLAGS =
<br>
$(WRAPPER_EXTRA_LDFLAGS)
<br>
<p>So, the following result is probably not too surprising (unless due to the
<br>
tests NOT appearing):
<br>
<p>$ make -k check 2&gt;&amp;1 | grep ^FAIL
<br>
FAIL: predefined_gap_test
<br>
FAIL: dlopen_test
<br>
FAIL: checksum
<br>
FAIL: position
<br>
FAIL: position_noncontig
<br>
FAIL: ddt_test
<br>
FAIL: ddt_raw
<br>
<p><p>-Paul
<br>
<p><p>On Sun, Aug 23, 2015 at 7:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try the requested change and let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 23, 2015 at 7:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rather than generating another rc right away, could you please apply the
</span><br>
<span class="quotelev2">&gt;&gt; following patch and see if it fixes the problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *diff --git a/ompi/debuggers/Makefile.am b/ompi/debuggers/Makefile.am*
</span><br>
<span class="quotelev2">&gt;&gt; *index 3e48af8..343a0c4 100644*
</span><br>
<span class="quotelev2">&gt;&gt; *--- a/ompi/debuggers/Makefile.am*
</span><br>
<span class="quotelev2">&gt;&gt; *+++ b/ompi/debuggers/Makefile.am*
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  dlopen_test_SOURCES = dlopen_test.c
</span><br>
<span class="quotelev2">&gt;&gt; +dlopen_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt;  dlopen_test_LDADD = \
</span><br>
<span class="quotelev2">&gt;&gt;          $(top_builddir)/ompi/libmpi.la \
</span><br>
<span class="quotelev2">&gt;&gt;          $(top_builddir)/opal/libopen-pal.la
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
<span class="quotelev2">&gt;&gt; On Aug 23, 2015, at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I regret to say that in my endless search for perfection (which is a
</span><br>
<span class="quotelev2">&gt;&gt; journey, not a destination) I believe I found another issue:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had mx2g sources sitting around, which I compiled and installed on two
</span><br>
<span class="quotelev2">&gt;&gt; systems (x86 and x86-64).
</span><br>
<span class="quotelev2">&gt;&gt; These provide only compile/link tests, since my systems lack the hardware
</span><br>
<span class="quotelev2">&gt;&gt; (actually do have some in a box somewhere).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Things worked fine on both systems when configure with --with-mx=[path].
</span><br>
<span class="quotelev2">&gt;&gt; However, on both systems adding &quot;--enable-static --disable-shared&quot;
</span><br>
<span class="quotelev2">&gt;&gt; results in failure from &quot;make check&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       predefined_gap_test.o
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     predefined_gap_test
</span><br>
<span class="quotelev2">&gt;&gt;   CC       dlopen_test.o
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev2">&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev2">&gt;&gt; ./predefined_gap_test: error while loading shared libraries:
</span><br>
<span class="quotelev2">&gt;&gt; libmyriexpress.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: predefined_gap_test
</span><br>
<span class="quotelev2">&gt;&gt; ./dlopen_test: error while loading shared libraries: libmyriexpress.so:
</span><br>
<span class="quotelev2">&gt;&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following *does* show  mpicc using a correct  rpath argument for the
</span><br>
<span class="quotelev2">&gt;&gt; mx library:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./INST/bin/mpicc --show openmpi-1.10.0rc5/examples/ring_c.c
</span><br>
<span class="quotelev2">&gt;&gt; gcc openmpi-1.10.0rc5/examples/ring_c.c
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/include
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -L/opt/mx2g/lib -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,--enable-new-dtags
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib -lmpi
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-rte -lopen-pal -lm -ldl -lrt -lmyriexpress -libverbs -lutil
</span><br>
<span class="quotelev2">&gt;&gt; $ ls /opt/mx2g/lib
</span><br>
<span class="quotelev2">&gt;&gt; debug  libmyriexpress.a  libmyriexpress.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, the *test* is built without an rpath:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool  --tag=CC   --mode=link gcc -std=gnu99
</span><br>
<span class="quotelev2">&gt;&gt;  -fno-strict-aliasing -pthread -g   -o dlopen_test dlopen_test.o ../../ompi/
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.la ../../opal/libopen-pal.la -lrt -lm -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -std=gnu99 -fno-strict-aliasing -pthread -g -o
</span><br>
<span class="quotelev2">&gt;&gt; dlopen_test dlopen_test.o  ../../ompi/.libs/libmpi.a -L/opt/mx2g/lib
</span><br>
<span class="quotelev2">&gt;&gt; -libverbs -lmyriexpress
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/opal/.libs/libopen-pal.a
</span><br>
<span class="quotelev2">&gt;&gt; ../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have no reason to suspect this is not also present in 1.8.x, but have
</span><br>
<span class="quotelev2">&gt;&gt; not checked.
</span><br>
<span class="quotelev2">&gt;&gt; Sometime after 1.10.0 is out to door, I expect to test the v1.8 nightly
</span><br>
<span class="quotelev2">&gt;&gt; tarball.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul [who enjoyed breaking his toys as a child and now breaks software
</span><br>
<span class="quotelev2">&gt;&gt; with the same enthusiasm]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17803.php">http://www.open-mpi.org/community/lists/devel/2015/08/17803.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17804.php">http://www.open-mpi.org/community/lists/devel/2015/08/17804.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17808.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17808.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17808.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
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
