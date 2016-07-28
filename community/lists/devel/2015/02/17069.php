<?
$subject_val = "[OMPI devel] Master warning on oob:ud w/ PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 19:57:24 2015" -->
<!-- isoreceived="20150227005724" -->
<!-- sent="Thu, 26 Feb 2015 16:57:22 -0800" -->
<!-- isosent="20150227005722" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master warning on oob:ud w/ PGI" -->
<!-- id="CAAvDA14+H1v38qTmGVVgV2N2BwYXZ2d1XqPYz_ENfHPMRMM4tw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Master warning on oob:ud w/ PGI<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 19:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
<li><strong>Previous message:</strong> <a href="17068.php">Paul Hargrove: "[OMPI devel] CORRECTION: mtl:psm configury broken (but NOT on master)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17126.php">Nathan Hjelm: "Re: [OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17126.php">Nathan Hjelm: "Re: [OMPI devel] Master warning on oob:ud w/ PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The warning below comes from pgi-14.7 on the latest master tarball (output
<br>
from &quot;make V=1&quot;).
<br>
<p>-Paul
<br>
<p>libtool: compile:  pgcc -DHAVE_CONFIG_H -I.
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/mca/oob/ud
<br>
-I../../../../opal/include -I../../../../ompi/include
<br>
-I../../../../oshmem/include
<br>
-I../../../../opal/mca/common/libfabric/libfabric
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863
<br>
-I../../../..
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/include
<br>
-I../../../../orte/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/ompi/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/oshmem/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/mca/event/libevent2022/libevent
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/opal/mca/event/libevent2022/libevent/include
<br>
-I/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-g -c
<br>
/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/mca/oob/ud/oob_ud_req.c
<br>
-MD  -fpic -DPIC -o .libs/oob_ud_req.o
<br>
PGC-W-0095-Type cast required for this conversion
<br>
(/scratch/scratchdirs/hargrove/OMPI/openmpi-master-linux-x86_64-pgi-14.7/openmpi-dev-1118-gdc80863/orte/mca/oob/ud/oob_ud_req.c:
<br>
140)
<br>
PGC/x86-64 Linux 14.7-0: compilation completed with warnings
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17069/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mtl:psm configury build broken in master"</a>
<li><strong>Previous message:</strong> <a href="17068.php">Paul Hargrove: "[OMPI devel] CORRECTION: mtl:psm configury broken (but NOT on master)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17126.php">Nathan Hjelm: "Re: [OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17126.php">Nathan Hjelm: "Re: [OMPI devel] Master warning on oob:ud w/ PGI"</a>
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
