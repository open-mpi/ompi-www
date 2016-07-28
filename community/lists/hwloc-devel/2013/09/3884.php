<?
$subject_val = "Re: [hwloc-devel] xml file load incompatibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 19:03:52 2013" -->
<!-- isoreceived="20130920230352" -->
<!-- sent="Fri, 20 Sep 2013 16:03:48 -0700" -->
<!-- isosent="20130920230348" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] xml file load incompatibilities" -->
<!-- id="78890F25-D683-4897-A9CE-126E1C942BBB_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="523CC55E.80007_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] xml file load incompatibilities<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 19:03:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3885.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Previous message:</strong> <a href="3883.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>In reply to:</strong> <a href="3883.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3885.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Reply:</strong> <a href="3885.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I didn't try loading it with lstopo - just tried the OMPI trunk. It loads okay, but segfaults when you try to find an object by depth
<br>
<p>#0  0x00000001005fe5dc in opal_hwloc172_hwloc_get_obj_by_depth (topology=Cannot access memory at address 0xfffffffffffffff7
<br>
) at traversal.c:623
<br>
#1  0x0000000100b6dfaa in opal_hwloc172_hwloc_get_root_obj (topology=Cannot access memory at address 0xfffffffffffffff7
<br>
) at rmaps_rr_mappers.c:747
<br>
#2  0x0000000100b6e139 in orte_rmaps_rr_byslot (jdata=Cannot access memory at address 0xffffffffffffff77
<br>
) at rmaps_rr_mappers.c:774
<br>
#3  0x0000000100b6d6da in orte_rmaps_rr_map (jdata=Cannot access memory at address 0xffffffffffffff17
<br>
) at rmaps_rr.c:211
<br>
#4  0x0000000100353098 in orte_rmaps_base_map_job (fd=Cannot access memory at address 0xfffffffffffffe7b
<br>
) at base/rmaps_base_map_job.c:320
<br>
#5  0x00000001005ce28c in event_process_active_single_queue (base=Cannot access memory at address 0xffffffffffffffe7
<br>
) at event.c:1367
<br>
#6  0x00000001005ce500 in event_process_active (base=Cannot access memory at address 0xffffffffffffffe7
<br>
) at event.c:1437
<br>
#7  0x00000001005ceb71 in opal_libevent2021_event_base_loop (base=Cannot access memory at address 0xffffffffffffffb7
<br>
) at event.c:1645
<br>
#8  0x00000001002c5158 in orterun (argc=Cannot access memory at address 0xfffffffffffffd1b
<br>
) at orterun.c:3039
<br>
#9  0x00000001002c32a4 in main (argc=Cannot access memory at address 0xfffffffffffffffb
<br>
) at main.c:14
<br>
<p>Looks to me like memory may be getting hosed
<br>
<p><p>On Sep 20, 2013, at 2:59 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I can't see any segfault. Where does the segfault occurs for you? In OMPI only (or lstopo too)? When loading or when using the topology?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried lstopo on that file with and without HWLOC_NO_LIBXML_IMPORT=1 (in case the bug is in one of XML backends), looks ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 20/09/2013 23:53, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Here are the two files I tried - not from the same machine. The foo.xml works, the topo.xml segfaults
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One of our users reported it from their machine, but I don't have their topo file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 20, 2013, at 2:41 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't see anything reason for such an incompatibility. But there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many combinations, we can't test everything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't reproduce that on my machines. Can you send the XML output of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both versions on one of your machines?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 20/09/2013 23:32, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've run across a rather strange behavior. We have two branches in OMPI - the devel trunk (using hwloc v1.7.2) and our feature release series (using hwloc 1.5.2). I have found the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *the feature series can correctly load an xml file generated by lstopo of versions 1.5 or greater
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * the devel series can correctly load an xml file generated by lstopo of versions 1.7 or greater, but not files generated by prior versions. In the latter case, I segfault as soon as I try to use the loaded topology.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas why the discrepancy? Can I at least detect the version used to create a file when loading it so I can error out instead of segfaulting?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3885.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Previous message:</strong> <a href="3883.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>In reply to:</strong> <a href="3883.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3885.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>Reply:</strong> <a href="3885.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
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
