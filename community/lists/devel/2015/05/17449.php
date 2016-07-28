<?
$subject_val = "Re: [OMPI devel] 1.8.6rc1 ready for test";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 21:53:42 2015" -->
<!-- isoreceived="20150525015342" -->
<!-- sent="Sun, 24 May 2015 18:53:34 -0700" -->
<!-- isosent="20150525015334" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.6rc1 ready for test" -->
<!-- id="CAAvDA15hriRO02swrdXUZmu0DBYqxeXdN6BoKpRDAFqJCgtDTQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17LexA695pa7PZGHL9iDfuaRjLK0KAUfS0jt7Y5wzfGOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.6rc1 ready for test<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-24 21:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17450.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17448.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17448.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17453.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Reply:</strong> <a href="17453.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have determined that 1.8.5 also fails in the same manner on this host.
<br>
Configuring with --disable-io-romio allows 1.8.6rc1 to build correctly.
<br>
So, the problem appears to be in ROMIO as it relates to OpenBSD-5.7.
<br>
<p>Since this is *not* a regression I feel this should not delay a 1.8.6
<br>
release unless there is an existing fix upstream in romio.
<br>
A quick look at their trac didn't show anything promising.
<br>
<p><p>Notice the following difference in the configure output (from romio)
<br>
between an old saved test of 1.8.5rc3 on OpenBSD-5.6 and a fresh test of
<br>
1.8.6rc1 on OpenBSD-5.7:
<br>
<p>&nbsp;checking sys/param.h usability... yes
<br>
&nbsp;checking sys/param.h presence... yes
<br>
&nbsp;checking for sys/param.h... yes
<br>
-checking sys/mount.h usability... no
<br>
+checking sys/mount.h usability... yes
<br>
&nbsp;checking sys/mount.h presence... yes
<br>
-configure: WARNING: sys/mount.h: present but cannot be compiled
<br>
-configure: WARNING: sys/mount.h:     check for missing prerequisite
<br>
headers?
<br>
-configure: WARNING: sys/mount.h: see the Autoconf documentation
<br>
-configure: WARNING: sys/mount.h:     section &quot;Present But Cannot Be
<br>
Compiled&quot;
<br>
-configure: WARNING: sys/mount.h: proceeding with the compiler's result
<br>
-configure: WARNING:     ## -------------------------------- ##
<br>
-configure: WARNING:     ## Report this to discuss_at_[hidden] ##
<br>
-configure: WARNING:     ## -------------------------------- ##
<br>
-checking for sys/mount.h... no
<br>
+checking for sys/mount.h... yes
<br>
&nbsp;checking sys/statvfs.h usability... yes
<br>
&nbsp;checking sys/statvfs.h presence... yes
<br>
&nbsp;checking for sys/statvfs.h... yes
<br>
-checking whether struct statfs properly defined... no
<br>
+checking whether struct statfs properly defined... yes
<br>
&nbsp;checking for f_fstypename member of statfs structure... yes
<br>
&nbsp;checking for sys/stat.h... (cached) yes
<br>
&nbsp;checking for sys/types.h... (cached) yes
<br>
<p><p>This suggests to me that code that may have been unreachable under OpenBSD
<br>
5.6 is now being built (unsuccessfully) under OpenBSD 5.7.
<br>
Specifically the &quot;struct statfs properly defined&quot; test result has changed
<br>
from &quot;no&quot; to &quot;yes&quot;.
<br>
To me it looks like the failing code assumes that if that configure test
<br>
passed, then struct statfs contains a f_type field.
<br>
I do notice that Open MPI's configure actually checks rather than assuming
<br>
this:
<br>
<p>checking for struct statfs.f_type... no
<br>
<p><p><p>-Paul
<br>
<p>On Sun, May 24, 2015 at 5:57 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I see a failure on OpenBSD when building ROMIO:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt; -I./adio/include -DOMPI_BUILDING=1
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/../../../../..
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6r
</span><br>
<span class="quotelev1">&gt; c1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/../../../../../opal/include
</span><br>
<span class="quotelev1">&gt; -I./../../../../../opal/include -I./../../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc
</span><br>
<span class="quotelev1">&gt; 1/ompi/mca/io/romio/romio/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/include
</span><br>
<span class="quotelev1">&gt; -I./include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.
</span><br>
<span class="quotelev1">&gt; 6rc1/ompi/mca/io/romio/romio/include -I./mpi-io
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-
</span><br>
<span class="quotelev1">&gt; 1.8.6rc1/ompi/mca/io/romio/romio/mpi-io -I./adio/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64
</span><br>
<span class="quotelev1">&gt; /openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/o
</span><br>
<span class="quotelev1">&gt; penmpi-1.8.6rc1/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BL
</span><br>
<span class="quotelev1">&gt; D/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1
</span><br>
<span class="quotelev1">&gt; /opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/o
</span><br>
<span class="quotelev1">&gt; pal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BLD/opal/mca
</span><br>
<span class="quotelev1">&gt; /event/libevent2021/libevent/include -g -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -DHAVE_ROMIOCONF_H -I
</span><br>
<span class="quotelev1">&gt; ./include -MT adio/common/ad_fstype.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt; adio/common/.deps/ad_fstype.Tpo -c /home/phargrov/OMPI/open
</span><br>
<span class="quotelev1">&gt; mpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c
</span><br>
<span class="quotelev1">&gt;  -fPIC -DPIC -o a
</span><br>
<span class="quotelev1">&gt; dio/common/.libs/ad_fstype.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fs
</span><br>
<span class="quotelev1">&gt; type.c: In function 'ADIO_FileSysType_fncall':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:374:
</span><br>
<span class="quotelev1">&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:398:
</span><br>
<span class="quotelev1">&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:419:
</span><br>
<span class="quotelev1">&gt; error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio/romio (Makefile:3335
</span><br>
<span class="quotelev1">&gt; 'adio/common/ad_fstype.lo')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio/romio (Makefile:4196 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio (Makefile:1840 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi (Makefile:3164 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BLD
</span><br>
<span class="quotelev1">&gt; (Makefile:1724 'all-recursive')
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was NOT present in my testing of 1.8.5rc3.
</span><br>
<span class="quotelev1">&gt; HOWEVER the host has been updated from OpenBSD-5.6 to 5.7.
</span><br>
<span class="quotelev1">&gt; So, I don't yet know if the problem is due to a change in OMPI or in the
</span><br>
<span class="quotelev1">&gt; host.
</span><br>
<span class="quotelev1">&gt; I will report again when I know more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, May 23, 2015 at 1:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.6
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed memory leak on Mac OS-X exposed by TCP keepalive
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed keepalive support to ensure that daemon/node failure
</span><br>
<span class="quotelev2">&gt;&gt;   results in complete job cleanup
</span><br>
<span class="quotelev2">&gt;&gt; - Update Java binding support
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed MPI_THREAD_MULTIPLE bug in vader shared memory BTL
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed issue during shutdown when CUDA initialization wasn't complete
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed orted environment when no prefix given
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed trivial typo in MPI_Neighbor_allgather manpage
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed tree-spawn support for sh and ksh shells
</span><br>
<span class="quotelev2">&gt;&gt; - Several data type fixes
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17447.php">http://www.open-mpi.org/community/lists/devel/2015/05/17447.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17449/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17450.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17448.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17448.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17453.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Reply:</strong> <a href="17453.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
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
