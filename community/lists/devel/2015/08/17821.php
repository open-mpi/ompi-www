<?
$subject_val = "[OMPI devel] 1.10.0rc6 - slightly different mx problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:19:17 2015" -->
<!-- isoreceived="20150824171917" -->
<!-- sent="Mon, 24 Aug 2015 10:19:12 -0700" -->
<!-- isosent="20150824171912" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc6 - slightly different mx problem" -->
<!-- id="CAAvDA16gJmxe0c6Sq251honaBRd9iVtLz26hV4C02CJ6qnRb_w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc6 - slightly different mx problem<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 13:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17820.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Maybe reply:</strong> <a href="17833.php">Christopher Samuel: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to yet again be the bearer of bad news.
<br>
<p>I am now configuring with
<br>
<p>--prefix=[...] --enable-debug --with-libfabric=/opt/libfabric-1.0.0
<br>
--with-mx=/opt/mx2g --disable-dlopen
<br>
<p>This is like the previous configuration that caused problems, but with
<br>
&quot;--disable-dlopen&quot; instead of &quot;--enable-static --disable-shared&quot;.
<br>
I seems that each time I try something new, something else breaks.
<br>
<p>The build finishes fine.
<br>
I can compile the examples fine.
<br>
But I once again see a failure to run an example:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
examples/ring_c: error while loading shared libraries: libmyriexpress.so:
<br>
cannot open shared object file: No such file or directory
<br>
<p>ldd agrees:
<br>
<p>$ ldd examples/ring_c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff332f0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.12 =&gt;
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libmpi.so.12
<br>
(0x00007f1879305000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f18790d2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f1878d3e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00007f1878b2c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmyriexpress.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libfabric.so.1 =&gt; /opt/libfabric-1.0.0/lib/libfabric.so.1
<br>
(0x00007f18788fe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.12 =&gt;
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libopen-rte.so.12
<br>
(0x00007f1878565000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.13 =&gt;
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib/libopen-pal.so.13
<br>
(0x00007f1878241000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007f1878036000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f1877e32000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f1877c29000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f18779a5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f18777a2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f1879a2a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnl.so.1 =&gt; /lib64/libnl.so.1 (0x00007f187754f000)
<br>
<p>However, this time it looks like everything is linked correctly:
<br>
<p>$ mpicc --show examples/ring_c.c
<br>
gcc examples/ring_c.c
<br>
-I/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/include
<br>
-pthread -L/opt/mx2g/lib -L/opt/libfabric-1.0.0/lib -Wl,-rpath
<br>
-Wl,/opt/mx2g/lib -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath
<br>
-Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
<br>
-Wl,--enable-new-dtags
<br>
-L/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
<br>
-lmpi
<br>
<p>$ chrpath --list examples/ring_c
<br>
examples/ring_c: RPATH=/opt/mx2g/lib
<br>
:/opt/libfabric-1.0.0/lib:/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
<br>
<p><p>Looking a bit further I find that none of the MPI, OPAL or ORTE libs was
<br>
built with the MX libdir in its rpath, though MPI and OPAL have libfabric:
<br>
<p>$ chrpath --list INST/lib/libmpi.so
<br>
INST/lib/libmpi.so:
<br>
RPATH=/opt/libfabric-1.0.0/lib:/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
<br>
$ chrpath --list INST/lib/libopen-pal.so
<br>
INST/lib/libopen-pal.so: RPATH=::/opt/libfabric-1.1.0/lib
<br>
$ chrpath --list INST/lib/libopen-rte.so
<br>
INST/lib/libopen-rte.so:
<br>
RPATH=/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
<br>
<p><p>Extracted from the &quot;make V=1&quot; output, here are the (shortened) link
<br>
commands for libmpi.so:
<br>
<p>/bin/sh ../libtool  --tag=CC   --mode=link gcc -std=gnu99  -g
<br>
-finline-functions -fno-strict-aliasing -pthread -version-info 12:0:0   -o
<br>
libmpi.la -rpath
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
<br>
&nbsp;[.lo and .la files] -lrt -lm -lutil
<br>
<p>libtool: link: gcc -std=gnu99 -shared  -fPIC -DPIC  [.o and .a files]
<br>
-Wl,--no-whole-archive  -Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath
<br>
-Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/orte/.libs
<br>
-Wl,-rpath
<br>
-Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs
<br>
-Wl,-rpath -Wl,/opt/libfabric-1.0.0/lib -Wl,-rpath
<br>
-Wl,/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/INST/lib
<br>
-L/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs
<br>
-L/opt/mx2g/lib -libverbs -lmyriexpress -L/opt/libfabric-1.0.0/lib
<br>
/opt/libfabric-1.0.0/lib/libfabric.so -lpthread
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/orte/.libs/libopen-rte.so
<br>
/scratch/phargrov/OMPI/openmpi-1.10.0rc6-linux-x86_64-no-dlopen/BLD/opal/.libs/libopen-pal.so
<br>
-lnuma -ldl -lrt -lm -lutil  -pthread   -pthread -Wl,-soname
<br>
-Wl,libmpi.so.12 -o .libs/libmpi.so.12.0.0
<br>
<p>The appropriate &quot;-L&quot; and &quot;-l&quot; options are present for libmryiexpress, but
<br>
there is no corresponding &quot;-Wl,-rpath, -Wl,...&quot;.
<br>
<p>In contrast, libfabric gets  &quot;-L&quot; and &quot;-Wl,-rpath, -Wl,...&quot;.
<br>
Curiously, libfabric.so gets linked by full path, instead of &quot;-lfabric&quot;.
<br>
I am not sure if that difference is meaningful or not, but thought I would
<br>
mention it just in case it is.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17821/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17820.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17822.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Maybe reply:</strong> <a href="17833.php">Christopher Samuel: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
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
