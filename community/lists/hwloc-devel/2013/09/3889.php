<?
$subject_val = "Re: [hwloc-devel] xml file load incompatibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 21 17:07:47 2013" -->
<!-- isoreceived="20130921210747" -->
<!-- sent="Sat, 21 Sep 2013 14:07:43 -0700" -->
<!-- isosent="20130921210743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] xml file load incompatibilities" -->
<!-- id="F74353DE-DFA5-4D15-8175-B03DBD055B5F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="523D3E89.7050102_at_inria.fr" -->
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
<strong>Date:</strong> 2013-09-21 17:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3890.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Git testing of hwloc"</a>
<li><strong>Previous message:</strong> <a href="3888.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>In reply to:</strong> <a href="3888.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I found it - was a sequencing problem in OMPI itself (we &quot;set&quot; the new topology too late in the setup sequence). Sorry for false alarm.
<br>
<p>Thanks for the help!
<br>
Ralph
<br>
<p>On Sep 20, 2013, at 11:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Strange, the backtrace below looks total crazy, I don't see how debug checks could still pass in that case.
</span><br>
<span class="quotelev1">&gt; Any chance you valgrind that thing?
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
<span class="quotelev1">&gt; Le 21/09/2013 01:09, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...nope, not a peep (no extra output at all). Just segfaulted like before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 20, 2013, at 4:06 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try adding HWLOC_DEBUG_CHECK=1 in your environment, it will enable many assertions at the end of hwloc_topology_load()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 21/09/2013 01:03, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I didn't try loading it with lstopo - just tried the OMPI trunk. It loads okay, but segfaults when you try to find an object by depth
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00000001005fe5dc in opal_hwloc172_hwloc_get_obj_by_depth (topology=Cannot access memory at address 0xfffffffffffffff7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at traversal.c:623
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x0000000100b6dfaa in opal_hwloc172_hwloc_get_root_obj (topology=Cannot access memory at address 0xfffffffffffffff7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at rmaps_rr_mappers.c:747
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x0000000100b6e139 in orte_rmaps_rr_byslot (jdata=Cannot access memory at address 0xffffffffffffff77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at rmaps_rr_mappers.c:774
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x0000000100b6d6da in orte_rmaps_rr_map (jdata=Cannot access memory at address 0xffffffffffffff17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at rmaps_rr.c:211
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x0000000100353098 in orte_rmaps_base_map_job (fd=Cannot access memory at address 0xfffffffffffffe7b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at base/rmaps_base_map_job.c:320
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00000001005ce28c in event_process_active_single_queue (base=Cannot access memory at address 0xffffffffffffffe7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at event.c:1367
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x00000001005ce500 in event_process_active (base=Cannot access memory at address 0xffffffffffffffe7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at event.c:1437
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #7  0x00000001005ceb71 in opal_libevent2021_event_base_loop (base=Cannot access memory at address 0xffffffffffffffb7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at event.c:1645
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #8  0x00000001002c5158 in orterun (argc=Cannot access memory at address 0xfffffffffffffd1b
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at orterun.c:3039
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #9  0x00000001002c32a4 in main (argc=Cannot access memory at address 0xfffffffffffffffb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ) at main.c:14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looks to me like memory may be getting hosed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 20, 2013, at 2:59 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can't see any segfault. Where does the segfault occurs for you? In OMPI only (or lstopo too)? When loading or when using the topology?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried lstopo on that file with and without HWLOC_NO_LIBXML_IMPORT=1 (in case the bug is in one of XML backends), looks ok.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Le 20/09/2013 23:53, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here are the two files I tried - not from the same machine. The foo.xml works, the topo.xml segfaults
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; One of our users reported it from their machine, but I don't have their topo file.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Sep 20, 2013, at 2:41 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't see anything reason for such an incompatibility. But there are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; many combinations, we can't test everything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can't reproduce that on my machines. Can you send the XML output of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; both versions on one of your machines?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Le 20/09/2013 23:32, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've run across a rather strange behavior. We have two branches in OMPI - the devel trunk (using hwloc v1.7.2) and our feature release series (using hwloc 1.5.2). I have found the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; *the feature series can correctly load an xml file generated by lstopo of versions 1.5 or greater
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * the devel series can correctly load an xml file generated by lstopo of versions 1.7 or greater, but not files generated by prior versions. In the latter case, I segfault as soon as I try to use the loaded topology.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas why the discrepancy? Can I at least detect the version used to create a file when loading it so I can error out instead of segfaulting?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3890.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Git testing of hwloc"</a>
<li><strong>Previous message:</strong> <a href="3888.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
<li><strong>In reply to:</strong> <a href="3888.php">Brice Goglin: "Re: [hwloc-devel] xml file load incompatibilities"</a>
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
