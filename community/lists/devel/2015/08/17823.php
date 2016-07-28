<?
$subject_val = "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:53:02 2015" -->
<!-- isoreceived="20150824175302" -->
<!-- sent="Mon, 24 Aug 2015 10:52:37 -0700" -->
<!-- isosent="20150824175237" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem" -->
<!-- id="CAAvDA16fT0icTs5OEtqezqhPTDYwJ=WChoAkgU4be+6r3AZ5eA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A6EFA060-5A51-40E3-A952-888A397E9625_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 13:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17824.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Previous message:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph
<br>
<p>mx = Myricom (not Mellanox, which is mxm).
<br>
So,  there is probably nobody to fix anything specific to the MX support.
<br>
Thus if this newly reported problem is (as I am going to guess)
<br>
in config/ompi_check_mx.m4 then it may go unfixed.
<br>
You say you and I are the only ones to care, and I think we both care for
<br>
reasons related to software quality rather than any desire to use MX.
<br>
<p>However, the LDFLAGS issues with the tests don't seem to be related to a
<br>
specific network.
<br>
Unfortunately, I am right now composing an email reporting that you and I
<br>
arrived at the WRONG fix for that yesterday.
<br>
<p>-Paul
<br>
<p>On Mon, Aug 24, 2015 at 10:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You know, if it wren&#226;&#128;&#153;t for the impact it would have on our users, I&#226;&#128;&#153;d
</span><br>
<span class="quotelev1">&gt; almost say that if Mellanox doesn&#226;&#128;&#153;t care enough to ensure this works, then
</span><br>
<span class="quotelev1">&gt; maybe we should just release and see if someone actually does care?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ll try again later today if/when I have time. Otherwise, I&#226;&#128;&#153;ll raise it
</span><br>
<span class="quotelev1">&gt; at tomorrow&#226;&#128;&#153;s telecon and see if anyone cares enough to fix it. At the
</span><br>
<span class="quotelev1">&gt; moment, it appears only you and I do - and I&#226;&#128;&#153;m not sure I care enough to
</span><br>
<span class="quotelev1">&gt; keep poking it :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Paul!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 24, 2015, at 10:19 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to yet again be the bearer of bad news.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am now configuring with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --prefix=[...] --enable-debug --with-libfabric=/opt/libfabric-1.0.0
</span><br>
<span class="quotelev1">&gt; --with-mx=/opt/mx2g --disable-dlopen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is like the previous configuration that caused problems, but with
</span><br>
<span class="quotelev1">&gt; &quot;--disable-dlopen&quot; instead of &quot;--enable-static --disable-shared&quot;.
</span><br>
<span class="quotelev1">&gt; I seems that each time I try something new, something else breaks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The build finishes fine.
</span><br>
<span class="quotelev1">&gt; I can compile the examples fine.
</span><br>
<span class="quotelev1">&gt; But I once again see a failure to run an example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; examples/ring_c: error while loading shared libraries: libmyriexpress.so:
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd agrees:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ldd examples/ring_c
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff332f0000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.12 =&gt;
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libmpi.so.12
</span><br>
<span class="quotelev1">&gt; (0x00007f1879305000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f18790d2000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f1878d3e000)
</span><br>
<span class="quotelev1">&gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00007f1878b2c000)
</span><br>
<span class="quotelev1">&gt;         libmyriexpress.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libfabric.so.1 =&gt; /opt/libfabric-1.0.0/lib/libfabric.so.1
</span><br>
<span class="quotelev1">&gt; (0x00007f18788fe000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.12 =&gt;
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libopen-rte.so.12
</span><br>
<span class="quotelev1">&gt; (0x00007f1878565000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.13 =&gt;
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libopen-pal.so.13
</span><br>
<span class="quotelev1">&gt; (0x00007f1878241000)
</span><br>
<span class="quotelev1">&gt;         libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007f1878036000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f1877e32000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f1877c29000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f18779a5000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f18777a2000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007f1879a2a000)
</span><br>
<span class="quotelev1">&gt;         libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007f187754f000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this time it looks like everything is linked correctly:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc --show examples/ring_c.c
</span><br>
<span class="quotelev1">&gt; gcc examples/ring_c.c
</span><br>
<span class="quotelev1">&gt; -I/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/include
</span><br>
<span class="quotelev1">&gt; -pthread -L/opt/mx2g/lib -L/opt/libfabric-1.0.0/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/opt/mx2g/lib -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt; -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt; -L/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt; -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ chrpath --list examples/ring_c
</span><br>
<span class="quotelev1">&gt; examples/ring_c: RPATH=/opt/mx2g/lib
</span><br>
<span class="quotelev1">&gt; :/opt/libfabric-1.0.0/lib:/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking a bit further I find that none of the MPI, OPAL or ORTE libs was
</span><br>
<span class="quotelev1">&gt; built with the MX libdir in its rpath, though MPI and OPAL have libfabric:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ chrpath --list INST/lib/libmpi.so
</span><br>
<span class="quotelev1">&gt; INST/lib/libmpi.so:
</span><br>
<span class="quotelev1">&gt; RPATH=/opt/libfabric-1.0.0/lib:/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt; $ chrpath --list INST/lib/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; INST/lib/libopen-pal.so: RPATH=::/opt/libfabric-1.1.0/lib
</span><br>
<span class="quotelev1">&gt; $ chrpath --list INST/lib/libopen-rte.so
</span><br>
<span class="quotelev1">&gt; INST/lib/libopen-rte.so:
</span><br>
<span class="quotelev1">&gt; RPATH=/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Extracted from the &quot;make V=1&quot; output, here are the (shortened) link
</span><br>
<span class="quotelev1">&gt; commands for libmpi.so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99  -g
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread -version-info 12:0:0   -o
</span><br>
<span class="quotelev1">&gt; libmpi.la -rpath
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt;  [.lo and .la files] -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -shared  -fPIC -DPIC  [.o and .a files]
</span><br>
<span class="quotelev1">&gt; -Wl,--no-whole-archive  -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/orte/.libs
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt; -L/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs
</span><br>
<span class="quotelev1">&gt; -L/opt/mx2g/lib -libverbs -lmyriexpress -L/opt/libfabric-1.0.0/lib
</span><br>
<span class="quotelev1">&gt; /opt/libfabric-1.0.0/lib/libfabric.so -lpthread
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev1">&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -lnuma -ldl -lrt -lm -lutil  -pthread   -pthread -Wl,-soname
</span><br>
<span class="quotelev1">&gt; -Wl,libmpi.so.12 -o .libs/libmpi.so.12.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The appropriate &quot;-L&quot; and &quot;-l&quot; options are present for libmryiexpress, but
</span><br>
<span class="quotelev1">&gt; there is no corresponding &quot;-Wl,-rpath, -Wl,...&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In contrast, libfabric gets  &quot;-L&quot; and &quot;-Wl,-rpath, -Wl,...&quot;.
</span><br>
<span class="quotelev1">&gt; Curiously, libfabric.so gets linked by full path, instead of &quot;-lfabric&quot;.
</span><br>
<span class="quotelev1">&gt; I am not sure if that difference is meaningful or not, but thought I would
</span><br>
<span class="quotelev1">&gt; mention it just in case it is.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17821.php">http://www.open-mpi.org/community/lists/devel/2015/08/17821.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17822.php">http://www.open-mpi.org/community/lists/devel/2015/08/17822.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17823/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17824.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Previous message:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17825.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
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
