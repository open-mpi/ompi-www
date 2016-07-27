<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 11:02:48 2011" -->
<!-- isoreceived="20110924150248" -->
<!-- sent="Sat, 24 Sep 2011 09:02:38 -0600" -->
<!-- isosent="20110924150238" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="A8AB7711-3D84-4D1E-A05D-F31F046D8A08_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D3331838-F4E9-49D0-99F9-C9CA0F1CF2B3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 11:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2466.php">Ralph Castain: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2466.php">Ralph Castain: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2466.php">Ralph Castain: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the trace:
<br>
<p>#0  0x00002aaaaae61737 in hwloc__xml_export_object (output=0x7fffffffd890, topology=0x695f10, obj=0x2aaaab139b28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-xml.c:1094
<br>
#1  0x00002aaaaae61b69 in hwloc___nolibxml_prepare_export (topology=0x695f10, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;xmlbuffer=0x698a70 &quot;&lt;?xml version=\&quot;1.0\&quot; encoding=\&quot;UTF-8\&quot;?&gt;\n&lt;!DOCTYPE topology SYSTEM \&quot;hwloc.dtd\&quot;&gt;\n&lt;topology&gt;\n  &lt;object type=\&quot;Unknown\&quot; os_level=\&quot;-1424778408\&quot; os_index=\&quot;10922\&quot; cpuset=\&quot;0xf...f\&quot; complete_cpuset=\&quot;0xf...f\&quot; onl&quot;..., 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buflen=16384) at topology-xml.c:1193
<br>
#2  0x00002aaaaae61be0 in hwloc__nolibxml_prepare_export (topology=0x695f10, bufferp=0x7fffffffd988, buflenp=0x7fffffffd97c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-xml.c:1207
<br>
#3  0x00002aaaaae61d02 in opal_hwloc122_hwloc_topology_export_xmlbuffer (topology=0x695f10, xmlbuffer=0x7fffffffd988, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;buflen=0x7fffffffd97c) at topology-xml.c:1281
<br>
#4  0x00002aaaaae529f4 in opal_hwloc_compare (topo1=0x695f10, topo2=0x6915c0, type=22 '\026') at base/hwloc_base_dt.c:183
<br>
#5  0x00002aaaaadf348c in opal_dss_compare (value1=0x695f10, value2=0x6915c0, type=22 '\026') at dss/dss_compare.c:39
<br>
#6  0x00002aaaaad9b5f7 in process_orted_launch_report (fd=-1, event=1, data=0x6444d0) at base/plm_base_launch_support.c:564
<br>
#7  0x00002aaaaae3881f in event_process_active_single_queue (base=0x60dd60, activeq=0x6111e0) at event.c:1329
<br>
#8  0x00002aaaaae38c71 in event_process_active (base=0x60dd60) at event.c:1396
<br>
#9  0x00002aaaaae3902b in opal_libevent2012_event_base_loop (base=0x60dd60, flags=1) at event.c:1598
<br>
#10 0x00002aaaaadf080d in opal_progress () at runtime/opal_progress.c:189
<br>
#11 0x00002aaaaad9bbfa in orte_plm_base_daemon_callback (num_daemons=2) at base/plm_base_launch_support.c:666
<br>
#12 0x00002aaaaada49e1 in plm_slurm_launch_job (jdata=0x67a500) at plm_slurm_module.c:404
<br>
#13 0x0000000000403822 in orterun (argc=4, argv=0x7fffffffe1d8) at orterun.c:817
<br>
#14 0x0000000000402aa3 in main (argc=4, argv=0x7fffffffe1d8) at main.c:13
<br>
<p>And the error report
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00002aaaaae61737 in hwloc__xml_export_object (output=0x7fffffffd890, topology=0x695f10, obj=0x2aaaab139b28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-xml.c:1094
<br>
1094	    sprintf(tmp, &quot;%llu&quot;, (unsigned long long) obj-&gt;memory.page_types[i].count);
<br>
(gdb) print obj
<br>
$1 = (opal_hwloc122_hwloc_obj_t) 0x2aaaab139b28
<br>
(gdb) print *obj
<br>
$2 = {type = 2870188824, os_index = 10922, name = 0x2aaaab139b18 &quot;\b\233\023\253\252*&quot;, memory = {total_memory = 6579376, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;local_memory = 6579376, page_types_len = 2870188856, page_types = 0x2aaaab139b38}, attr = 0x2aaaab139b48, 
<br>
&nbsp;&nbsp;depth = 2870188872, logical_index = 10922, os_level = -1424778408, next_cousin = 0x2aaaab139b58, 
<br>
&nbsp;&nbsp;prev_cousin = 0x2aaaab139b68, parent = 0x2aaaab139b68, sibling_rank = 2870188920, next_sibling = 0x2aaaab139b78, 
<br>
&nbsp;&nbsp;prev_sibling = 0x2aaaab139b88, arity = 2870188936, children = 0x2aaaab139b98, first_child = 0x2aaaab139b98, 
<br>
&nbsp;&nbsp;last_child = 0x2aaaab139ba8, userdata = 0x2aaaab139ba8, cpuset = 0x2aaaab139bb8, complete_cpuset = 0x2aaaab139bb8, 
<br>
&nbsp;&nbsp;online_cpuset = 0x2aaaab139bc8, allowed_cpuset = 0x2aaaab139bc8, nodeset = 0x2aaaab139bd8, 
<br>
&nbsp;&nbsp;complete_nodeset = 0x2aaaab139bd8, allowed_nodeset = 0x2aaaab139be8, distances = 0x2aaaab139be8, 
<br>
&nbsp;&nbsp;distances_count = 2870189048, infos = 0x2aaaab139bf8, infos_count = 2870189064}
<br>
(gdb) print obj-&gt;memory
<br>
$3 = {total_memory = 6579376, local_memory = 6579376, page_types_len = 2870188856, page_types = 0x2aaaab139b38}
<br>
(gdb) print obj-&gt;memory.page_types
<br>
$4 = (struct opal_hwloc122_hwloc_obj_memory_page_type_s *) 0x2aaaab139b38
<br>
(gdb) print i
<br>
$5 = 1612
<br>
(gdb) print obj-&gt;memory.page_types[1600]
<br>
$6 = {size = 0, count = 0}
<br>
(gdb) print obj-&gt;memory.page_types[1612]
<br>
Cannot access memory at address 0x2aaaab13fff8
<br>
(gdb) print obj-&gt;memory.page_types[1611]
<br>
$7 = {size = 0, count = 0}
<br>
(gdb) 
<br>
<p><p>The whole obj looks like trash to me. I looked a little more - the object referenced is the root object:
<br>
<p>1193	  hwloc__xml_export_object (&amp;output, topology, hwloc_get_root_obj(topology));
<br>
<p>I'm continuing to look in case I'm doing something stupid, but the code is pretty linear here - unpack, import, export for compare.
<br>
<p><p>On Sep 24, 2011, at 8:59 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Here's some feedback from Ralph -- any idea what's going wrong here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I export a topology into xml using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       hwloc_topology_export_xmlbuffer(t, &amp;xmlbuffer, &amp;len);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then pack and send the string.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I unpack the string on the other end and import it into a topology
</span><br>
<span class="quotelev1">&gt;       hwloc_topology_init(&amp;t);
</span><br>
<span class="quotelev1">&gt;       if (0 != (rc = hwloc_topology_set_xmlbuffer(t, xmlbuffer, strlen(xmlbuffer)))) {
</span><br>
<span class="quotelev1">&gt;           hwloc_topology_destroy(t);
</span><br>
<span class="quotelev1">&gt;           goto cleanup;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       hwloc_topology_load(t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. I then need to compare two topologies, so I export the topology I received into another xml string
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_export_xmlbuffer(t1, &amp;x1, &amp;l1);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is this export that fails, which implies to me that somehow the import didn't work right. Note that this code worked fine with libxml2, so this is a regression.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2011, at 9:39 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I can get some testing of the ompi branch pretty quickly.  I can bring in a new copy of this later today and see what we can see.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 19, 2011, at 9:05 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I pushed the new minimalistic XML import/export implementation without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libxml2 to the nolibxml branch. If libxml2 is available, it's still used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by default. --disable-libxml2 or some env variables can be used for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; force the minimalistic implementation if needed. The minimalistic implem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is only guaranteed to import XML files that were generated by hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (even if libxml was enabled there).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also backported most of this to the new v1.2-ompi branch (required to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; backport some other XML cleanups from trunk). This branch will now serve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as a base for Open MPI's embedded hwloc. The idea is to have a complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.2 + nolibxml somewhere so that we can at least run make check (Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI does not embed enough to run hwloc's make check).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do we proceed now? Can we have the OMPI guys test the new code soon?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should I wait for their feedback before merging the nolibxml branch into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the trunk? I'd like to merge this in v1.3 too (and basically release rc2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as the actual first feature-complete RC), so getting feedback early
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2466.php">Ralph Castain: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Previous message:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2464.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2466.php">Ralph Castain: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2466.php">Ralph Castain: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
