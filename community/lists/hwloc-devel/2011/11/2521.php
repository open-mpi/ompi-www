<?
$subject_val = "Re: [hwloc-devel] hwloc problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 08:42:30 2011" -->
<!-- isoreceived="20111102124230" -->
<!-- sent="Wed, 2 Nov 2011 08:42:04 -0400" -->
<!-- isosent="20111102124204" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc problem" -->
<!-- id="AF936ECB-AA6F-495A-8DB3-DB12E2F0F428_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AFD5C29-6C9D-4A9D-9CC3-37303080C9DB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 08:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2522.php">Brice Goglin: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Previous message:</strong> <a href="2520.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r3950)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2522.php">Brice Goglin: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Reply:</strong> <a href="2522.php">Brice Goglin: "Re: [hwloc-devel] hwloc problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh!  I forgot to add hwloc-devel before hitting send. 
<br>
<p>Brice / Samuel - see below. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Nov 2, 2011, at 8:40 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Chris -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I totally missed this email; sorry!  I'm cc-ing hwloc-devel to see if brice/Samuel can fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm assuming we'll need this fix in the 1.2 hwloc branch as well. (I'm also assuming that the trunk referred to here is the OMPI trunk, now the hwloc trunk).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2011, at 6:15 AM, &quot;Christopher Yeoh&quot; &lt;cyeoh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brad mentioned you might be able to help me with an OMPI hwloc issue
</span><br>
<span class="quotelev2">&gt; &gt; I'm having.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Its occurring on a Power 5 RHEL 6.0 machine and related to the xml
</span><br>
<span class="quotelev2">&gt; &gt; representation of the topology. I've attached the xml to this email.
</span><br>
<span class="quotelev2">&gt; &gt; The problem only occurs on the trunk code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The part which appears to be the problem is this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      &lt;distances nbobjs=&quot;4&quot; relative_depth=&quot;0&quot; latency_base=&quot;10.000000&quot;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      &lt;/distances&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; specifically with relative_depth having a value of 0, but still having
</span><br>
<span class="quotelev2">&gt; &gt; latency children information. In hwloc__xml_import_distances in
</span><br>
<span class="quotelev2">&gt; &gt; topology-xml.c there's a check that assumes there is no latency
</span><br>
<span class="quotelev2">&gt; &gt; information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Around line 634 in topology-xml.c:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if (nbobjs &amp;&amp; reldepth &amp;&amp; latbase) {
</span><br>
<span class="quotelev2">&gt; &gt;    ... process latency xml nodes
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; return hwloc__xml_import_close_tag(state);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The hwloc__xml_import_close_tag function returns a failure because the
</span><br>
<span class="quotelev2">&gt; &gt; latency nodes have not been processed yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had a look in orted where the xml is created and it does look like
</span><br>
<span class="quotelev2">&gt; &gt; the xml is being assembled correctly as per the topology information it
</span><br>
<span class="quotelev2">&gt; &gt; has retrieved (though I don't know if that itself is correct). The
</span><br>
<span class="quotelev2">&gt; &gt; hwloc__xml_export_object function will quite happily create distance
</span><br>
<span class="quotelev2">&gt; &gt; information if the relative depth is 0 even though
</span><br>
<span class="quotelev2">&gt; &gt; hwloc__xml_import_distance will not be able to parse it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So there is at least a problem that the topology code will create xml
</span><br>
<span class="quotelev2">&gt; &gt; that it can't parse, but I don't know enough about the hwloc library to
</span><br>
<span class="quotelev2">&gt; &gt; know if relative depth should always be positive. I suspect its the
</span><br>
<span class="quotelev2">&gt; &gt; former which is the problem not the latter, but I don't know for sure...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If it helps, this is the output of lstopo on the machine:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cyeoh_at_p5-40-P4-E0:~$ /home/OpenHPC/hwloc/build/bin/lstopo
</span><br>
<span class="quotelev2">&gt; &gt; Machine (2048MB)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#0 (P#0 512MB)
</span><br>
<span class="quotelev2">&gt; &gt;    Socket L#0 + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev2">&gt; &gt;      PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt; &gt;      PU L#1 (P#1)
</span><br>
<span class="quotelev2">&gt; &gt;    Socket L#1 + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev2">&gt; &gt;      PU L#2 (P#2)
</span><br>
<span class="quotelev2">&gt; &gt;      PU L#3 (P#3)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#1 (P#1 640MB)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#2 (P#2 512MB)
</span><br>
<span class="quotelev2">&gt; &gt;  NUMANode L#3 (P#3 384MB)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; cyeoh_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &lt;fandango_hwloc_xml.txt&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2521/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2522.php">Brice Goglin: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Previous message:</strong> <a href="2520.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.1rc1r3950)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2522.php">Brice Goglin: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Reply:</strong> <a href="2522.php">Brice Goglin: "Re: [hwloc-devel] hwloc problem"</a>
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
