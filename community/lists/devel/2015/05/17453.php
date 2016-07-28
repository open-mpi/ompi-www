<?
$subject_val = "Re: [OMPI devel] 1.8.6rc1 ready for test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 12:02:21 2015" -->
<!-- isoreceived="20150525160221" -->
<!-- sent="Mon, 25 May 2015 09:02:14 -0700" -->
<!-- isosent="20150525160214" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.6rc1 ready for test" -->
<!-- id="EFE696D5-08F1-4660-BC6C-2729616704B2_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15hriRO02swrdXUZmu0DBYqxeXdN6BoKpRDAFqJCgtDTQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-25 12:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17454.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
<li><strong>In reply to:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17450.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul!!
<br>
<p><span class="quotelev1">&gt; On May 24, 2015, at 6:53 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have determined that 1.8.5 also fails in the same manner on this host.
</span><br>
<span class="quotelev1">&gt; Configuring with --disable-io-romio allows 1.8.6rc1 to build correctly.
</span><br>
<span class="quotelev1">&gt; So, the problem appears to be in ROMIO as it relates to OpenBSD-5.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this is *not* a regression I feel this should not delay a 1.8.6 release unless there is an existing fix upstream in romio.
</span><br>
<span class="quotelev1">&gt; A quick look at their trac didn't show anything promising.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Notice the following difference in the configure output (from romio) between an old saved test of 1.8.5rc3 on OpenBSD-5.6 and a fresh test of 1.8.6rc1 on OpenBSD-5.7:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  checking sys/param.h usability... yes
</span><br>
<span class="quotelev1">&gt;  checking sys/param.h presence... yes
</span><br>
<span class="quotelev1">&gt;  checking for sys/param.h... yes
</span><br>
<span class="quotelev1">&gt; -checking sys/mount.h usability... no
</span><br>
<span class="quotelev1">&gt; +checking sys/mount.h usability... yes
</span><br>
<span class="quotelev1">&gt;  checking sys/mount.h presence... yes
</span><br>
<span class="quotelev1">&gt; -configure: WARNING: sys/mount.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; -configure: WARNING: sys/mount.h:     check for missing prerequisite headers?
</span><br>
<span class="quotelev1">&gt; -configure: WARNING: sys/mount.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt; -configure: WARNING: sys/mount.h:     section &quot;Present But Cannot Be Compiled&quot;
</span><br>
<span class="quotelev1">&gt; -configure: WARNING: sys/mount.h: proceeding with the compiler's result
</span><br>
<span class="quotelev1">&gt; -configure: WARNING:     ## -------------------------------- ##
</span><br>
<span class="quotelev1">&gt; -configure: WARNING:     ## Report this to discuss_at_[hidden] &lt;mailto:discuss_at_[hidden]&gt; ##
</span><br>
<span class="quotelev1">&gt; -configure: WARNING:     ## -------------------------------- ##
</span><br>
<span class="quotelev1">&gt; -checking for sys/mount.h... no
</span><br>
<span class="quotelev1">&gt; +checking for sys/mount.h... yes
</span><br>
<span class="quotelev1">&gt;  checking sys/statvfs.h usability... yes
</span><br>
<span class="quotelev1">&gt;  checking sys/statvfs.h presence... yes
</span><br>
<span class="quotelev1">&gt;  checking for sys/statvfs.h... yes
</span><br>
<span class="quotelev1">&gt; -checking whether struct statfs properly defined... no
</span><br>
<span class="quotelev1">&gt; +checking whether struct statfs properly defined... yes
</span><br>
<span class="quotelev1">&gt;  checking for f_fstypename member of statfs structure... yes
</span><br>
<span class="quotelev1">&gt;  checking for sys/stat.h... (cached) yes
</span><br>
<span class="quotelev1">&gt;  checking for sys/types.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This suggests to me that code that may have been unreachable under OpenBSD 5.6 is now being built (unsuccessfully) under OpenBSD 5.7.
</span><br>
<span class="quotelev1">&gt; Specifically the &quot;struct statfs properly defined&quot; test result has changed from &quot;no&quot; to &quot;yes&quot;.
</span><br>
<span class="quotelev1">&gt; To me it looks like the failing code assumes that if that configure test passed, then struct statfs contains a f_type field.
</span><br>
<span class="quotelev1">&gt; I do notice that Open MPI's configure actually checks rather than assuming this:
</span><br>
<span class="quotelev1">&gt; checking for struct statfs.f_type... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, May 24, 2015 at 5:57 PM, Paul Hargrove &lt;phhargrove_at_[hidden] &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I see a failure on OpenBSD when building ROMIO:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I. -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio -I./adio/include -DOMPI_BUILDING=1 -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/../../../../.. -I/home/phargrov/OMPI/openmpi-1.8.6r
</span><br>
<span class="quotelev1">&gt; c1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/../../../../../opal/include -I./../../../../../opal/include -I./../../../../../ompi/include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc
</span><br>
<span class="quotelev1">&gt; 1/ompi/mca/io/romio/romio/include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/include -I./include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.
</span><br>
<span class="quotelev1">&gt; 6rc1/ompi/mca/io/romio/romio/include -I./mpi-io -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-
</span><br>
<span class="quotelev1">&gt; 1.8.6rc1/ompi/mca/io/romio/romio/mpi-io -I./adio/include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64
</span><br>
<span class="quotelev1">&gt; /openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/o
</span><br>
<span class="quotelev1">&gt; penmpi-1.8.6rc1/opal/mca/hwloc/hwloc191/hwloc/include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BL
</span><br>
<span class="quotelev1">&gt; D/opal/mca/hwloc/hwloc191/hwloc/include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1
</span><br>
<span class="quotelev1">&gt; /opal/mca/event/libevent2021/libevent -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/o
</span><br>
<span class="quotelev1">&gt; pal/mca/event/libevent2021/libevent/include -I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BLD/opal/mca
</span><br>
<span class="quotelev1">&gt; /event/libevent2021/libevent/include -g -finline-functions -fno-strict-aliasing -pthread -DHAVE_ROMIOCONF_H -I
</span><br>
<span class="quotelev1">&gt; ./include -MT adio/common/ad_fstype.lo -MD -MP -MF adio/common/.deps/ad_fstype.Tpo -c /home/phargrov/OMPI/open
</span><br>
<span class="quotelev1">&gt; mpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c  -fPIC -DPIC -o a
</span><br>
<span class="quotelev1">&gt; dio/common/.libs/ad_fstype.o
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fs
</span><br>
<span class="quotelev1">&gt; type.c: In function 'ADIO_FileSysType_fncall':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:374: error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:398: error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:419: error: 'struct statfs' has no member named 'f_type'
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio/romio (Makefile:3335 'adio/common/ad_fstype.lo')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio/romio (Makefile:4196 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi/mca/io/romio (Makefile:1840 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in ompi (Makefile:3164 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BLD (Makefile:1724 'all-recursive')
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was NOT present in my testing of 1.8.5rc3.
</span><br>
<span class="quotelev1">&gt; HOWEVER the host has been updated from OpenBSD-5.6 to 5.7.
</span><br>
<span class="quotelev1">&gt; So, I don't yet know if the problem is due to a change in OMPI or in the host.
</span><br>
<span class="quotelev1">&gt; I will report again when I know more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, May 23, 2015 at 1:28 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.8.6
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Fixed memory leak on Mac OS-X exposed by TCP keepalive
</span><br>
<span class="quotelev1">&gt; - Fixed keepalive support to ensure that daemon/node failure
</span><br>
<span class="quotelev1">&gt;   results in complete job cleanup
</span><br>
<span class="quotelev1">&gt; - Update Java binding support
</span><br>
<span class="quotelev1">&gt; - Fixed MPI_THREAD_MULTIPLE bug in vader shared memory BTL
</span><br>
<span class="quotelev1">&gt; - Fixed issue during shutdown when CUDA initialization wasn't complete
</span><br>
<span class="quotelev1">&gt; - Fixed orted environment when no prefix given
</span><br>
<span class="quotelev1">&gt; - Fixed trivial typo in MPI_Neighbor_allgather manpage
</span><br>
<span class="quotelev1">&gt; - Fixed tree-spawn support for sh and ksh shells
</span><br>
<span class="quotelev1">&gt; - Several data type fixes
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17447.php">http://www.open-mpi.org/community/lists/devel/2015/05/17447.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/05/17447.php">http://www.open-mpi.org/community/lists/devel/2015/05/17447.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17452.php">http://www.open-mpi.org/community/lists/devel/2015/05/17452.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/05/17452.php">http://www.open-mpi.org/community/lists/devel/2015/05/17452.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17454.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17452.php">Mike Dubman: "Re: [OMPI devel] Jenkins and coverity logs"</a>
<li><strong>In reply to:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17450.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
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
