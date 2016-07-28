<?
$subject_val = "Re: [OMPI devel] 1.8.6rc1 ready for test";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 24 20:57:28 2015" -->
<!-- isoreceived="20150525005728" -->
<!-- sent="Sun, 24 May 2015 17:57:00 -0700" -->
<!-- isosent="20150525005700" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.6rc1 ready for test" -->
<!-- id="CAAvDA17LexA695pa7PZGHL9iDfuaRjLK0KAUfS0jt7Y5wzfGOg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="908AB2A2-218E-403E-AA36-269EB0F30B00_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-05-24 20:57:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17447.php">Ralph Castain: "[OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17447.php">Ralph Castain: "[OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Reply:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see a failure on OpenBSD when building ROMIO:
<br>
<p>libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio
<br>
-I./adio/include -DOMPI_BUILDING=1
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/../../../../..
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6r
<br>
c1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/../../../../../opal/include
<br>
-I./../../../../../opal/include -I./../../../../../ompi/include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc
<br>
1/ompi/mca/io/romio/romio/include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/include
<br>
-I./include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.
<br>
6rc1/ompi/mca/io/romio/romio/include -I./mpi-io
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-
<br>
1.8.6rc1/ompi/mca/io/romio/romio/mpi-io -I./adio/include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64
<br>
/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/o
<br>
penmpi-1.8.6rc1/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BL
<br>
D/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1
<br>
/opal/mca/event/libevent2021/libevent
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/o
<br>
pal/mca/event/libevent2021/libevent/include
<br>
-I/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BLD/opal/mca
<br>
/event/libevent2021/libevent/include -g -finline-functions
<br>
-fno-strict-aliasing -pthread -DHAVE_ROMIOCONF_H -I
<br>
./include -MT adio/common/ad_fstype.lo -MD -MP -MF
<br>
adio/common/.deps/ad_fstype.Tpo -c /home/phargrov/OMPI/open
<br>
mpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c
<br>
&nbsp;-fPIC -DPIC -o a
<br>
dio/common/.libs/ad_fstype.o
<br>
/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fs
<br>
type.c: In function 'ADIO_FileSysType_fncall':
<br>
/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:374:
<br>
error: 'struct statfs' has no member named 'f_type'
<br>
/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:398:
<br>
error: 'struct statfs' has no member named 'f_type'
<br>
/home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/openmpi-1.8.6rc1/ompi/mca/io/romio/romio/adio/common/ad_fstype.c:419:
<br>
error: 'struct statfs' has no member named 'f_type'
<br>
*** Error 1 in ompi/mca/io/romio/romio (Makefile:3335
<br>
'adio/common/ad_fstype.lo')
<br>
*** Error 1 in ompi/mca/io/romio/romio (Makefile:4196 'all-recursive')
<br>
*** Error 1 in ompi/mca/io/romio (Makefile:1840 'all-recursive')
<br>
*** Error 1 in ompi (Makefile:3164 'all-recursive')
<br>
*** Error 1 in /home/phargrov/OMPI/openmpi-1.8.6rc1-openbsd5-amd64/BLD
<br>
(Makefile:1724 'all-recursive')
<br>
<p>This was NOT present in my testing of 1.8.5rc3.
<br>
HOWEVER the host has been updated from OpenBSD-5.6 to 5.7.
<br>
So, I don't yet know if the problem is due to a change in OMPI or in the
<br>
host.
<br>
I will report again when I know more.
<br>
<p>-Paul
<br>
<p>On Sat, May 23, 2015 at 1:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17447.php">http://www.open-mpi.org/community/lists/devel/2015/05/17447.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17447.php">Ralph Castain: "[OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17447.php">Ralph Castain: "[OMPI devel] 1.8.6rc1 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
<li><strong>Reply:</strong> <a href="17449.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc1 ready for test"</a>
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
