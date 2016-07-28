<?
$subject_val = "[OMPI devel] Trunk broken on NERSC's Cray XE6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 21:52:06 2013" -->
<!-- isoreceived="20130126025206" -->
<!-- sent="Fri, 25 Jan 2013 18:52:00 -0800" -->
<!-- isosent="20130126025200" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk broken on NERSC's Cray XE6" -->
<!-- id="CAAvDA1508t+_FUW+x52ONe5FRiYxzcJ=viUQ=DDVBCr7Tfy0fg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk broken on NERSC's Cray XE6<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 21:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
<li><strong>Previous message:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following up as I promised...
<br>
<p>My results on NERSC's small Cray XE6 (the test/dev rack &quot;Grace&quot;, rather
<br>
than the full-sized &quot;Hopper&quot;) match those I get on the Cray XC30 (Edison),
<br>
and don't follow those Ralph reports for LANL's XE6.
<br>
<p>An attempt to build/link hello_c.c results in unresolved symbols from
<br>
libnuma, libxpmem and libugni.
<br>
A complete list is available if it matters.
<br>
<p>This is still with last night's openmpi-1.9a1r27905 tarball, and the
<br>
following 1-line mod to the platform file:
<br>
- enable_shared=yes
<br>
+ enable_shared=no
<br>
<p>If it will help determine what is going on, I can probably get NERSC
<br>
accounts for any of the DOE Lab folks easily.
<br>
They will only get access to the full-sized XE6 (Hopper) for now.
<br>
<p>In case any of these are helpful clues to the difference(s):
<br>
$ module list
<br>
Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;1) modules/3.2.6.6                         18)
<br>
dvs/1.8.6_0.9.0-1.0401.1401.1.120
<br>
&nbsp;&nbsp;2) torque/4.1.4-snap.201211160904          19)
<br>
csa/3.0.0-1_2.0401.37452.4.50.gem
<br>
&nbsp;&nbsp;3) moab/6.0.4                              20)
<br>
job/1.5.5-0.1_2.0401.35380.1.10.gem
<br>
&nbsp;&nbsp;4) xtpe-network-gemini                     21)
<br>
xpmem/0.1-2.0401.36790.4.3.gem
<br>
&nbsp;&nbsp;5) cray-mpich2/5.6.0                       22)
<br>
gni-headers/2.1-1.0401.5675.4.4.gem
<br>
&nbsp;&nbsp;6) atp/1.6.0                               23)
<br>
dmapp/3.2.1-1.0401.5983.4.5.gem
<br>
&nbsp;&nbsp;7) xe-sysroot/4.1.40                       24)
<br>
pmi/4.0.0-1.0000.9282.69.4.gem
<br>
&nbsp;&nbsp;8) switch/1.0-1.0401.36779.2.72.gem        25)
<br>
ugni/4.0-1.0401.5928.9.5.gem
<br>
&nbsp;&nbsp;9) shared-root/1.0-1.0401.37253.3.50.gem   26)
<br>
udreg/2.3.2-1.0401.5929.3.3.gem
<br>
&nbsp;10) pdsh/2.26-1.0401.37449.1.1.gem          27) xt-libsci/12.0.00
<br>
&nbsp;11) nodehealth/5.0-1.0401.38460.12.18.gem   28) gcc/4.7.2
<br>
&nbsp;12) lbcd/2.1-1.0401.35360.1.2.gem           29) xt-asyncpe/5.16
<br>
&nbsp;13) hosts/1.0-1.0401.35364.1.115.gem        30) eswrap/1.0.10
<br>
&nbsp;14) configuration/1.0-1.0401.35391.1.2.gem  31) xtpe-mc12
<br>
&nbsp;15) ccm/2.2.0-1.0401.37254.2.142            32) cray-shmem/5.6.0
<br>
&nbsp;16) audit/1.0.0-1.0401.37969.2.32.gem       33) PrgEnv-gnu/4.1.40
<br>
&nbsp;17) rca/1.0.0-2.0401.38656.2.2.gem
<br>
<p><p>-Paul
<br>
<p><p>On Fri, Jan 25, 2013 at 5:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again our results differ.
</span><br>
<span class="quotelev1">&gt; I did NOT need the additional #include to link a simple test program.
</span><br>
<span class="quotelev1">&gt; I am going to try on our XE6 shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect you are right about something in the configury being different.
</span><br>
<span class="quotelev1">&gt; I am willing to try a few more nightly tarballs if somebody thinks they
</span><br>
<span class="quotelev1">&gt; have the proper fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 25, 2013 at 5:45 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 25, 2013, at 5:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Those are the result of the missing -lnuma that Nathan already identified
</span><br>
<span class="quotelev2">&gt;&gt; earlier as missing in BOTH 1.7 and trunk.
</span><br>
<span class="quotelev2">&gt;&gt; I see MORE missing symbols, which include ones from libxpmem and libugni.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alright, let me try to be clearer. We are missing -lnuma as well as the
</span><br>
<span class="quotelev2">&gt;&gt; required include file - both are necessary to remove the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I find both the xpmem and ugni libraries *are* correctly included in both
</span><br>
<span class="quotelev2">&gt;&gt; 1.7 and trunk. It could be a case of finding them in the configury, but we
</span><br>
<span class="quotelev2">&gt;&gt; are finding them *and* correctly including them on the XE6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 25, 2013 at 4:59 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 25, 2013, at 4:53 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The repeated libs is something we obviously should fix, but all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libs are there - including lustre. I guess those were dropped due to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared lib setting, so we probably should fix that in the platform file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Perhaps that is the cause of Nathan's issue? shrug...regardless, apps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build and run just fine using mpicc for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correction - turns out I misspoke. I find apps *don't* build correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with this setup:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc -g    hello_c.c   -o hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `hwloc_linux_set_area_membind':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1116:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `mbind'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1135:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `mbind'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `hwloc_linux_get_area_membind':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1337:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `hwloc_linux_find_kernel_max_numnodes':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1239:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `hwloc_linux_set_thisthread_membind':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1183:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1194:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `migrate_pages'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1206:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `set_mempolicy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `hwloc_linux_get_thisthread_membind':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1284:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/aprojects/hpctools/rhc/build/lib/libopen-pal.a(topology-linux.o):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In function `hwloc_linux_find_kernel_max_numnodes':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lscratch1/rcastain/openmpi-1.9a1/opal/mca/hwloc/hwloc151/hwloc/src/topology-linux.c:1239:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `get_mempolicy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [hello_c] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it looks like hwloc is borked when built static.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sigh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
<li><strong>Previous message:</strong> <a href="12010.php">Ralph Castain: "Re: [OMPI devel] One-line patch for warning in 1.7rc6"</a>
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
