<?
$subject_val = "[OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 01:21:59 2016" -->
<!-- isoreceived="20160503052159" -->
<!-- sent="Mon, 2 May 2016 22:21:43 -0700" -->
<!-- isosent="20160503052143" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)" -->
<!-- id="CAAvDA16Ehm6CHofWGSe2ApcMMgux2pkPR9pg08jbBZtFLmqthg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 01:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18892.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18890.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>Reply:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is NOT a new issue, but I wanted to mention it explicitly once again
<br>
since no progress has been made since I first reported to problem in
<br>
1.8.6rc1 (about 1 year ago).
<br>
<p>Though the directory name and line numbers have changed, the error reported
<br>
in <a href="https://www.open-mpi.org/community/lists/devel/2015/05/17449.php">https://www.open-mpi.org/community/lists/devel/2015/05/17449.php</a> is
<br>
still present in the 2.0.0rc2 tarball, and prevents building on OpenBSD-5.7
<br>
unless one configures with --disable-io-romio:
<br>
<p>libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I.
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio
<br>
-I./adio/include -DOMPI_BUILDING=1
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/../../../../..
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/../../../../../opal/include
<br>
-I./../../../../../opal/include -I./../../../../../ompi/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/include
<br>
-I./include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/include
<br>
-I./mpi-io
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/mpi-io
<br>
-I./adio/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/BLD/opal/mca/hwloc/hwloc1112/hwloc/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/opal/mca/event/libevent2022/libevent/include
<br>
-I/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -finline-functions -fno-strict-aliasing -pthread -D__EXTENSIONS__
<br>
-DHAVE_ROMIOCONF_H -I./include -MT adio/common/ad_fstype.lo -MD -MP -MF
<br>
adio/common/.deps/ad_fstype.Tpo -c
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c
<br>
&nbsp;-fPIC -DPIC -o adio/common/.libs/ad_fstype.o
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:
<br>
In function 'ADIO_FileSysType_fncall':
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:358:
<br>
error: 'struct statfs' has no member named 'f_type'
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:382:
<br>
error: 'struct statfs' has no member named 'f_type'
<br>
/home/phargrov/OMPI/openmpi-2.0.0rc2-openbsd5-amd64/openmpi-2.0.0rc2/ompi/mca/io/romio314/romio/adio/common/ad_fstype.c:403:
<br>
error: 'struct statfs' has no member named 'f_type'
<br>
*** Error 1 in ompi/mca/io/romio314/romio (Makefile:3548
<br>
'adio/common/ad_fstype.lo')
<br>
*** Error 1 in ompi/mca/io/romio314/romio (Makefile:4409 'all-recursive')
<br>
*** Error 1 in ompi/mca/io/romio314 (Makefile:1954 'all-recursive')
<br>
*** Error 1 in ompi (Makefile:3352 'all-recursive')
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18891/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18892.php">Brice Goglin: "Re: [OMPI devel] [2.0.0rc2] build failure with ppc64 and &quot;gcc -m32&quot; (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18890.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
<li><strong>Reply:</strong> <a href="18925.php">Gilles Gouaillardet: "Re: [OMPI devel] [2.0.0rc2] build failures on OpenBSD-5.7 (romio)"</a>
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
