<?
$subject_val = "Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 30 00:12:15 2015" -->
<!-- isoreceived="20151230051215" -->
<!-- sent="Wed, 30 Dec 2015 14:12:14 +0900" -->
<!-- isosent="20151230051214" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster" -->
<!-- id="CAAkFZ5vSH6_Lv6er49P1HZ7pLB_gXRYD3zZJfMHo68kbOefaeA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16eXE9NQQeiH59vNp5QMcGCbAb8Mn-H1RUaXcEpLSJybA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-30 00:12:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18463.php">Howard Pritchard: "[OMPI devel] UH jenkins node seems out for the holidays"</a>
<li><strong>Previous message:</strong> <a href="18461.php">Paul Hargrove: "[OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<li><strong>In reply to:</strong> <a href="18461.php">Paul Hargrove: "[OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>generally speaking, when using mellanox stuff (mxm, hcoll, fca)
<br>
these libraries must be accessible, either via LD_LIBRARY_PATH or via
<br>
ld.so.conf
<br>
<p>I do not the config of these cluster, but you might have to use the
<br>
mellanox libraries tha could be in a non standard location.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, December 30, 2015, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have tried 1.8.8, 10.0.2rc3 and master with the following configure
</span><br>
<span class="quotelev1">&gt; options (and --prefix)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-debug --with-verbs --enable-openib-connectx-xrc
</span><br>
<span class="quotelev1">&gt;  --with-mxm=/opt/mellanox/mxm --with-fca=/opt/mellanox/fca
</span><br>
<span class="quotelev1">&gt; --with-hcoll=/opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In all three cases the configure output contains one of the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component coll:hcoll compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-hcoll value... sanity check ok (/opt/mellanox/hcoll)
</span><br>
<span class="quotelev1">&gt; checking hcoll_api.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking hcoll_api.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for hcoll_api.h... yes
</span><br>
<span class="quotelev1">&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev1">&gt; configure: error: HCOLL support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component coll:hcoll (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component coll:hcoll compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking hcoll/api/hcoll_api.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking hcoll/api/hcoll_api.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for hcoll/api/hcoll_api.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for library containing hcoll_get_version... no
</span><br>
<span class="quotelev1">&gt; configure: error: HCOLL support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where the first output is seen with v1.8 and the second with v1.10 and
</span><br>
<span class="quotelev1">&gt; master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The contents of config.log (shown for master, below) indicates that the
</span><br>
<span class="quotelev1">&gt; test for hcoll_get_version has failed *not* due to lack of that symbol, but
</span><br>
<span class="quotelev1">&gt; rather due to some unsatisfied shared library dependency:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:241636: gcc -std=gnu99 -o conftest -g -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; -I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/openmpi-dev-3300-gb7b4231/opal/mca/hwloc/hwloc1111/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/BLD/opal/mca/hwloc/hwloc1111/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/openmpi-dev-3300-gb7b4231/opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev1">&gt; -I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/openmpi-dev-3300-gb7b4231/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/hpc/home/USERS/phhargrove/SCRATCH/OMPI/openmpi-master-linux-x86_64-mxm/BLD/opal/mca/event/libevent2022/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/opt/mellanox/hcoll/include    -L/opt/mellanox/hcoll/lib conftest.c
</span><br>
<span class="quotelev1">&gt; -lhcoll   -lrt -lm -lutil   -lrt -lm -lutil   &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: warning: libibnetdisc.so.5, needed by
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so, not found (try using -rpath or
</span><br>
<span class="quotelev1">&gt; -rpath-link)
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `ibnd_iter_nodes_type_at_IBNETDISC_1.0'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `ibnd_destroy_fabric_at_IBNETDISC_1.0'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `ibnd_load_fabric_at_IBNETDISC_1.0'
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll/lib/libhcoll.so: undefined reference to
</span><br>
<span class="quotelev1">&gt; `ibnd_iter_nodes_at_IBNETDISC_1.0'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on the &quot;mir13&quot; head node of the Mellanox DMZ cluster.
</span><br>
<span class="quotelev1">&gt; So, Mellanox should be able to either tell me what I have done wrong, or
</span><br>
<span class="quotelev1">&gt; else reproduce for themselves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','PHHargrove_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18463.php">Howard Pritchard: "[OMPI devel] UH jenkins node seems out for the holidays"</a>
<li><strong>Previous message:</strong> <a href="18461.php">Paul Hargrove: "[OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<li><strong>In reply to:</strong> <a href="18461.php">Paul Hargrove: "[OMPI devel] Problem using --with-hcoll on Mellanox DMZ cluster"</a>
<!-- nextthread="start" -->
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
