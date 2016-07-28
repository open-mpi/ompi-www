<?
$subject_val = "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 22:28:00 2015" -->
<!-- isoreceived="20150824022800" -->
<!-- sent="Sun, 23 Aug 2015 19:27:55 -0700" -->
<!-- isosent="20150824022755" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically" -->
<!-- id="A79FCC98-99E8-4900-AAF6-7463ADD3F5A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA144EyJ85KN=vedK1iRj0XP3TzrY3vgefcT2zVwgxm47Nw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-23 22:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17805.php">Ralph Castain: "[OMPI devel] Fwd: PMIx 2.0 API thoughts"</a>
<li><strong>Previous message:</strong> <a href="17803.php">Paul Hargrove: "[OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17803.php">Paul Hargrove: "[OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rather than generating another rc right away, could you please apply the following patch and see if it fixes the problem?
<br>
<p>diff --git a/ompi/debuggers/Makefile.am b/ompi/debuggers/Makefile.am
<br>
index 3e48af8..343a0c4 100644
<br>
--- a/ompi/debuggers/Makefile.am
<br>
+++ b/ompi/debuggers/Makefile.am
<br>
@@ -10,6 +10,7 @@
<br>
&nbsp;# Copyright (c) 2004-2005 The Regents of the University of California.
<br>
&nbsp;#                         All rights reserved.
<br>
&nbsp;# Copyright (c) 2007-2015 Cisco Systems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2015      Intel, Inc. All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;# 
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -43,6 +44,7 @@ headers = \
<br>
&nbsp;# Simple checks to ensure that the DSOs are functional
<br>
&nbsp;
<br>
&nbsp;dlopen_test_SOURCES = dlopen_test.c
<br>
+dlopen_test_LDFLAGS = $(WRAPPER_EXTRA_LDFLAGS)
<br>
&nbsp;dlopen_test_LDADD = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/ompi/libmpi.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(top_builddir)/opal/libopen-pal.la
<br>
<p><p>Thanks
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Aug 23, 2015, at 4:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I regret to say that in my endless search for perfection (which is a journey, not a destination) I believe I found another issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had mx2g sources sitting around, which I compiled and installed on two systems (x86 and x86-64).
</span><br>
<span class="quotelev1">&gt; These provide only compile/link tests, since my systems lack the hardware (actually do have some in a box somewhere).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things worked fine on both systems when configure with --with-mx=[path].
</span><br>
<span class="quotelev1">&gt; However, on both systems adding &quot;--enable-static --disable-shared&quot; results in failure from &quot;make check&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt;   CC       predefined_gap_test.o
</span><br>
<span class="quotelev1">&gt;   CCLD     predefined_gap_test
</span><br>
<span class="quotelev1">&gt;   CC       dlopen_test.o
</span><br>
<span class="quotelev1">&gt;   CCLD     dlopen_test
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; ./predefined_gap_test: error while loading shared libraries: libmyriexpress.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; FAIL: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; ./dlopen_test: error while loading shared libraries: libmyriexpress.so: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; FAIL: dlopen_test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following *does* show  mpicc using a correct  rpath argument for the mx library:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./INST/bin/mpicc --show openmpi-1.10.0rc5/examples/ring_c.c
</span><br>
<span class="quotelev1">&gt; gcc openmpi-1.10.0rc5/examples/ring_c.c -I/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/include -pthread -L/opt/mx2g/lib -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath -Wl,/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib -Wl,--enable-new-dtags -L/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib -lmpi -lopen-rte -lopen-pal -lm -ldl -lrt -lmyriexpress -libverbs -lutil
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
<span class="quotelev1">&gt; /bin/sh ../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -fno-strict-aliasing -pthread -g   -o dlopen_test dlopen_test.o ../../ompi/libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt; ../../opal/libopen-pal.la &lt;<a href="http://libopen-pal.la/">http://libopen-pal.la/</a>&gt; -lrt -lm -lutil  
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -fno-strict-aliasing -pthread -g -o dlopen_test dlopen_test.o  ../../ompi/.libs/libmpi.a -L/opt/mx2g/lib -libverbs -lmyriexpress /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/orte/.libs/libopen-rte.a /home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/opal/.libs/libopen-pal.a ../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no reason to suspect this is not also present in 1.8.x, but have not checked.
</span><br>
<span class="quotelev1">&gt; Sometime after 1.10.0 is out to door, I expect to test the v1.8 nightly tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul [who enjoyed breaking his toys as a child and now breaks software with the same enthusiasm]
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17803.php">http://www.open-mpi.org/community/lists/devel/2015/08/17803.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17805.php">Ralph Castain: "[OMPI devel] Fwd: PMIx 2.0 API thoughts"</a>
<li><strong>Previous message:</strong> <a href="17803.php">Paul Hargrove: "[OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>In reply to:</strong> <a href="17803.php">Paul Hargrove: "[OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17806.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
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
