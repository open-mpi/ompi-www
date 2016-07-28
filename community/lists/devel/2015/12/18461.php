<?
$subject_val = "[OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 29 23:09:59 2015" -->
<!-- isoreceived="20151230040959" -->
<!-- sent="Tue, 29 Dec 2015 20:09:52 -0800" -->
<!-- isosent="20151230040952" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster" -->
<!-- id="CAAvDA16eXE9NQQeiH59vNp5QMcGCbAb8Mn-H1RUaXcEpLSJybA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-29 23:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18462.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<li><strong>Previous message:</strong> <a href="18460.php">Geoffrey Paulsen: "[OMPI devel] No meeting today 12/29/2015 either."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18462.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<li><strong>Reply:</strong> <a href="18462.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried 1.8.8, 10.0.2rc3 and master with the following configure
<br>
options (and --prefix)
<br>
<p>--enable-debug --with-verbs --enable-openib-connectx-xrc
<br>
&nbsp;--with-mxm=/opt/mellanox/mxm --with-fca=/opt/mellanox/fca
<br>
--with-hcoll=/opt/mellanox/hcoll
<br>
<p>In all three cases the configure output contains one of the following:
<br>
<p>--- MCA component coll:hcoll (m4 configuration macro)
<br>
checking for MCA component coll:hcoll compile mode... dso
<br>
checking --with-hcoll value... sanity check ok (/opt/mellanox/hcoll)
<br>
checking hcoll_api.h usability... yes
<br>
checking hcoll_api.h presence... yes
<br>
checking for hcoll_api.h... yes
<br>
checking for library containing hcoll_get_version... no
<br>
configure: error: HCOLL support requested but not found.  Aborting
<br>
<p><p>OR
<br>
<p>--- MCA component coll:hcoll (m4 configuration macro)
<br>
checking for MCA component coll:hcoll compile mode... dso
<br>
checking hcoll/api/hcoll_api.h usability... yes
<br>
checking hcoll/api/hcoll_api.h presence... yes
<br>
checking for hcoll/api/hcoll_api.h... yes
<br>
looking for library in lib
<br>
checking for library containing hcoll_get_version... no
<br>
looking for library in lib64
<br>
checking for library containing hcoll_get_version... no
<br>
configure: error: HCOLL support requested but not found.  Aborting
<br>
<p><p>Where the first output is seen with v1.8 and the second with v1.10 and
<br>
master.
<br>
<p>The contents of config.log (shown for master, below) indicates that the
<br>
test for hcoll_get_version has failed *not* due to lack of that symbol, but
<br>
rather due to some unsatisfied shared library dependency:
<br>
<p>configure:241636: gcc -std=gnu99 -o conftest -g -finline-functions
<br>
-fno-strict-aliasing -pthread
<br>
-I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/openmpi-dev-3300-gb7b4231/opal/mca/hwloc/hwloc1111/hwloc/include
<br>
-I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/BLD/opal/mca/hwloc/hwloc1111/hwloc/include
<br>
-I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/openmpi-dev-3300-gb7b4231/opal/mca/event/libevent2022/libevent
<br>
-I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/openmpi-dev-3300-gb7b4231/opal/mca/event/libevent2022/libevent/include
<br>
-I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/BLD/opal/mca/event/libevent2022/libevent/include
<br>
-I/opt/mellanox/hcoll/include    -L/opt/mellanox/hcoll/lib conftest.c
<br>
-lhcoll   -lrt -lm -lutil   -lrt -lm -lutil   &gt;&amp;5
<br>
/usr/bin/ld: warning: libibnetdisc.so.5, needed by
<br>
/opt/mellanox/hcoll/lib/libhcoll.so, not found (try using -rpath or
<br>
-rpath-link)
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
<br>
`ibnd_iter_nodes_type_at_IBNETDISC_1.0'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
<br>
`ibnd_destroy_fabric_at_IBNETDISC_1.0'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
<br>
`ibnd_load_fabric_at_IBNETDISC_1.0'
<br>
/opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
<br>
`ibnd_iter_nodes_at_IBNETDISC_1.0'
<br>
collect2: ld returned 1 exit status
<br>
<p><p>This is on the &quot;mir13&quot; head node of the Mellanox DMZ cluster.
<br>
So, Mellanox should be able to either tell me what I have done wrong, or
<br>
else reproduce for themselves.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18461/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18462.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<li><strong>Previous message:</strong> <a href="18460.php">Geoffrey Paulsen: "[OMPI devel] No meeting today 12/29/2015 either."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18462.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<li><strong>Reply:</strong> <a href="18462.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
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
