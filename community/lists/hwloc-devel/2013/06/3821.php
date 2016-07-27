<?
$subject_val = "Re: [hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 11:50:33 2013" -->
<!-- isoreceived="20130621155033" -->
<!-- sent="Fri, 21 Jun 2013 17:50:29 +0200" -->
<!-- isosent="20130621155029" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo --top" -->
<!-- id="CALT_uBTsp+49s7_d9kg5ZAKi1i4eyNcxdK+JesPztZYxDqGS3Q_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20130621122058.GJ10000_at_type.eduroam.u-bordeaux.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo --top<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 11:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3822.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3823.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3823.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have checked API of hwloc_topology_insert_misc_object_by_parent and there
<br>
is no support for color:
<br>
<p><p>hwloc_obj_t hwloc_topology_insert_misc_object_by_cpuset (hwloc_topology_t
<br>
topology, hwloc_const_cpuset_t cpuset, const char *name)
<br>
&nbsp;&nbsp;Add a MISC object to the topology.
<br>
hwloc_obj_t hwloc_topology_insert_misc_object_by_parent (hwloc_topology_t
<br>
topology, hwloc_obj_t parent, const char *name)
<br>
&nbsp;&nbsp;Add a MISC object as a leaf of the topology.
<br>
<p>Nevertheless I gave it a try but i cannot get it running. Original code
<br>
(using cpuset) was
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_zero(cpuset);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_set(cpuset, d-&gt;lines[j]-&gt;cpu[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snprintf(data, 128, &quot;%d: %d&quot;, i, d-&gt;lines[j]-&gt;cpu[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_insert_misc_object_by_cpuset(topology, cpuset, data);
<br>
<p>I have now changed it to
<br>
hwloc_obj[0] = hwloc_get_first_largest_obj_inside_cpuset(topology, cpuset);
<br>
hwloc_obj[1] = hwloc_obj[0]-&gt;parent;
<br>
and tried both
<br>
hwloc_topology_insert_misc_object_by_parent (topology,  hwloc_obj[0], data);
<br>
hwloc_topology_insert_misc_object_by_parent (topology,  hwloc_obj[1], data);
<br>
<p>but lstopo will core dump with the XML file
<br>
$lstopo --input /tmp/a.xml
<br>
lstopo: topology.c:1128: add_default_object_sets: Assertion `obj-&gt;cpuset'
<br>
failed.
<br>
Aborted (core dumped)
<br>
<p>I have attached
<br>
- source code
<br>
- input file data
<br>
- out /tmp/a.xml
<br>
<p>Commands to reproduce the problem;
<br>
gcc -Wall -Wextra -o parse parse.c -lhwloc
<br>
./parse data
<br>
lstopo --input /tmp/a.xml
<br>
<p>Any idea what's wrong?
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p>On Fri, Jun 21, 2013 at 2:20 PM, Samuel Thibault
<br>
&lt;samuel.thibault_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Jiri Hladky, le Thu 20 Jun 2013 22:08:03 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; lstopo has obviously some logic how to sort the data inserted
</span><br>
<span class="quotelev2">&gt; &gt; by hwloc_topology_insert_misc_object_by_cpuset. Could be data displayed
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev2">&gt; &gt; same order as inserted?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_insert_misc_object_by_parent probably does that, you just
</span><br>
<span class="quotelev1">&gt; need to replace the cpuset with an hwloc object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3821/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3821/parse.c">parse.c</a>
</ul>
<!-- attachment="parse.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3821/data">data</a>
</ul>
<!-- attachment="data" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3821/a.xml">a.xml</a>
</ul>
<!-- attachment="a.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3822.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3820.php">Samuel Thibault: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3823.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Reply:</strong> <a href="3823.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
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
