<?
$subject_val = "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:26:50 2015" -->
<!-- isoreceived="20150824172650" -->
<!-- sent="Mon, 24 Aug 2015 10:26:45 -0700" -->
<!-- isosent="20150824172645" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem" -->
<!-- id="A6EFA060-5A51-40E3-A952-888A397E9625_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAvDA16gJmxe0c6Sq251honaBRd9iVtLz26hV4C02CJ6qnRb_w_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 13:26:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17821.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17821.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You know, if it wren&#226;&#128;&#153;t for the impact it would have on our users, I&#226;&#128;&#153;d almost say that if Mellanox doesn&#226;&#128;&#153;t care enough to ensure this works, then maybe we should just release and see if someone actually does care?
<br>
<p>I&#226;&#128;&#153;ll try again later today if/when I have time. Otherwise, I&#226;&#128;&#153;ll raise it at tomorrow&#226;&#128;&#153;s telecon and see if anyone cares enough to fix it. At the moment, it appears only you and I do - and I&#226;&#128;&#153;m not sure I care enough to keep poking it :-)
<br>
<p>Thanks Paul!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Aug 24, 2015, at 10:19 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to yet again be the bearer of bad news.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am now configuring with
</span><br>
<span class="quotelev1">&gt; --prefix=[...] --enable-debug --with-libfabric=/opt/libfabric-1.0.0 --with-mx=/opt/mx2g --disable-dlopen
</span><br>
<span class="quotelev1">&gt; This is like the previous configuration that caused problems, but with &quot;--disable-dlopen&quot; instead of &quot;--enable-static --disable-shared&quot;.
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
<span class="quotelev1">&gt; examples/ring_c: error while loading shared libraries: libmyriexpress.so: cannot open shared object file: No such file or directory
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
<span class="quotelev1">&gt;         libmpi.so.12 =&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libmpi.so.12 (0x00007f1879305000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f18790d2000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f1878d3e000)
</span><br>
<span class="quotelev1">&gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00007f1878b2c000)
</span><br>
<span class="quotelev1">&gt;         libmyriexpress.so =&gt; not found
</span><br>
<span class="quotelev1">&gt;         libfabric.so.1 =&gt; /opt/libfabric-1.0.0/lib/libfabric.so.1 (0x00007f18788fe000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.12 =&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libopen-rte.so.12 (0x00007f1878565000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.13 =&gt; /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libopen-pal.so.13 (0x00007f1878241000)
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
<span class="quotelev1">&gt; gcc examples/ring_c.c -I/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/include -pthread -L/opt/mx2g/lib -L/opt/libfabric-1.0.0/lib -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib -Wl,--enable-new-dtags -L/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ chrpath --list examples/ring_c
</span><br>
<span class="quotelev1">&gt; examples/ring_c: RPATH=/opt/mx2g/lib:/opt/libfabric-1.0.0/lib:/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking a bit further I find that none of the MPI, OPAL or ORTE libs was built with the MX libdir in its rpath, though MPI and OPAL have libfabric:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ chrpath --list INST/lib/libmpi.so      
</span><br>
<span class="quotelev1">&gt; INST/lib/libmpi.so: RPATH=/opt/libfabric-1.0.0/lib:/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt; $ chrpath --list INST/lib/libopen-pal.so 
</span><br>
<span class="quotelev1">&gt; INST/lib/libopen-pal.so: RPATH=::/opt/libfabric-1.1.0/lib
</span><br>
<span class="quotelev1">&gt; $ chrpath --list INST/lib/libopen-rte.so  
</span><br>
<span class="quotelev1">&gt; INST/lib/libopen-rte.so: RPATH=/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Extracted from the &quot;make V=1&quot; output, here are the (shortened) link commands for libmpi.so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99  -g -finline-functions -fno-strict-aliasing -pthread -version-info 12:0:0   -o libmpi.la &lt;<a href="http://libmpi.la/">http://libmpi.la/</a>&gt; -rpath /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib  [.lo and .la files] -lrt -lm -lutil
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -shared  -fPIC -DPIC  [.o and .a files] -Wl,--no-whole-archive  -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/orte/.libs -Wl,-rpath -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath -Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib -L/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs -L/opt/mx2g/lib -libverbs -lmyriexpress -L/opt/libfabric-1.0.0/lib /opt/libfabric-1.0.0/lib/libfabric.so -lpthread /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/orte/.libs/libopen-rte.so /scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs/libopen-pal.so -lnuma -ldl -lrt -lm -lutil  -pthread   -pthread -Wl,-soname -Wl,libmpi.so.12 -o .libs/libmpi.so.12.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The appropriate &quot;-L&quot; and &quot;-l&quot; options are present for libmryiexpress, but there is no corresponding &quot;-Wl,-rpath, -Wl,...&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In contrast, libfabric gets  &quot;-L&quot; and &quot;-Wl,-rpath, -Wl,...&quot;.
</span><br>
<span class="quotelev1">&gt; Curiously, libfabric.so gets linked by full path, instead of &quot;-lfabric&quot;.
</span><br>
<span class="quotelev1">&gt; I am not sure if that difference is meaningful or not, but thought I would mention it just in case it is.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17821.php">http://www.open-mpi.org/community/lists/devel/2015/08/17821.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17821.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17821.php">Paul Hargrove: "[OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
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
