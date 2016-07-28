<?
$subject_val = "Re: [hwloc-devel] hwloc problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 10:05:34 2011" -->
<!-- isoreceived="20111102140534" -->
<!-- sent="Wed, 02 Nov 2011 15:05:28 +0100" -->
<!-- isosent="20111102140528" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc problem" -->
<!-- id="4EB14E28.9030908_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7EC63993-D823-4279-8A52-95B2D94A92C0_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 10:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2525.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Previous message:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>In reply to:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2525.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Reply:</strong> <a href="2525.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If we can't find any other way, filtering (during export) would be an
<br>
easy solution.
<br>
<p>For the v1.2 branch, the attached patch seems to help. It just prevents
<br>
the creation of internal matrices with invalid relative depth. No
<br>
internal matrix, means no XML export, which means you don't break your
<br>
import.
<br>
<p>Brice
<br>
<p><p><p><p>Le 02/11/2011 14:59, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Should we just filter out the &quot;distance&quot; attribute in the XML on the v1.2ompi branch?  We're not using it (yet) in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 2, 2011, at 9:32 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The v1.2 branch has known problems with distance matrices when the topology is asymmetric (especially when Linux cpuset make some NUMA nodes CPU-less). This is what causes wrong relative_depth here. It can even be negative is some cases which is obviously wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should be fixed in v1.3 but it's NOT easy to backport in v1.2. Can you check that you can export and reimport with v1.3 properly? I will see if I can find a workaround for v1.2, but it will likely be something like ignore distance matrices if reldepth is &lt;= 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the meantime, you can remove &quot;&amp;&amp; reldepth&quot; from the &quot;if&quot; line below. It may help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 02/11/2011 13:42, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Brad mentioned you might be able to help me with an OMPI hwloc issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm having.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Its occurring on a Power 5 RHEL 6.0 machine and related to the xml
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; representation of the topology. I've attached the xml to this email.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem only occurs on the trunk code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The part which appears to be the problem is this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      &lt;distances nbobjs=&quot;4&quot; relative_depth=&quot;0&quot; latency_base=&quot;10.000000&quot;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      &lt;/distances&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specifically with relative_depth having a value of 0, but still having
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; latency children information. In hwloc__xml_import_distances in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; topology-xml.c there's a check that assumes there is no latency
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Around line 634 in topology-xml.c:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (nbobjs &amp;&amp; reldepth &amp;&amp; latbase) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    ... process latency xml nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; return hwloc__xml_import_close_tag(state);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The hwloc__xml_import_close_tag function returns a failure because the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; latency nodes have not been processed yet.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I had a look in orted where the xml is created and it does look like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the xml is being assembled correctly as per the topology information it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has retrieved (though I don't know if that itself is correct). The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc__xml_export_object function will quite happily create distance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information if the relative depth is 0 even though
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc__xml_import_distance will not be able to parse it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So there is at least a problem that the topology code will create xml
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that it can't parse, but I don't know enough about the hwloc library to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; know if relative depth should always be positive. I suspect its the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; former which is the problem not the latter, but I don't know for sure...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If it helps, this is the output of lstopo on the machine:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cyeoh_at_p5-40-P4-E0:~$ /home/OpenHPC/hwloc/build/bin/lstopo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Machine (2048MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#0 (P#0 512MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Socket L#0 + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Socket L#1 + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#1 (P#1 640MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#2 (P#2 512MB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#3 (P#3 384MB)
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
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2524/ignore_invalid_reldepth.patch">ignore_invalid_reldepth.patch</a>
</ul>
<!-- attachment="ignore_invalid_reldepth.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2525.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Previous message:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>In reply to:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2525.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Reply:</strong> <a href="2525.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
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
