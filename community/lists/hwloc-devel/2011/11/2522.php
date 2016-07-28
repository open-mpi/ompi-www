<?
$subject_val = "Re: [hwloc-devel] hwloc problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 09:32:26 2011" -->
<!-- isoreceived="20111102133226" -->
<!-- sent="Wed, 02 Nov 2011 14:32:20 +0100" -->
<!-- isosent="20111102133220" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc problem" -->
<!-- id="4EB14664.1010604_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AF936ECB-AA6F-495A-8DB3-DB12E2F0F428_at_cisco.com" -->
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
<strong>Date:</strong> 2011-11-02 09:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Previous message:</strong> <a href="2521.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>In reply to:</strong> <a href="2521.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Reply:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The v1.2 branch has known problems with distance matrices when the
<br>
topology is asymmetric (especially when Linux cpuset make some NUMA
<br>
nodes CPU-less). This is what causes wrong relative_depth here. It can
<br>
even be negative is some cases which is obviously wrong.
<br>
<p>This should be fixed in v1.3 but it's NOT easy to backport in v1.2. Can
<br>
you check that you can export and reimport with v1.3 properly? I will
<br>
see if I can find a workaround for v1.2, but it will likely be something
<br>
like ignore distance matrices if reldepth is &lt;= 0.
<br>
<p>In the meantime, you can remove &quot;&amp;&amp; reldepth&quot; from the &quot;if&quot; line below.
<br>
It may help.
<br>
<p>Brice
<br>
<p><p><p>Le 02/11/2011 13:42, Jeff Squyres (jsquyres) a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Brad mentioned you might be able to help me with an OMPI hwloc issue
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm having.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Its occurring on a Power 5 RHEL 6.0 machine and related to the xml
</span><br>
<span class="quotelev3">&gt;&gt; &gt; representation of the topology. I've attached the xml to this email.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The problem only occurs on the trunk code.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The part which appears to be the problem is this:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      &lt;distances nbobjs=&quot;4&quot; relative_depth=&quot;0&quot; latency_base=&quot;10.000000&quot;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        &lt;latency value=&quot;1.000000&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      &lt;/distances&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; specifically with relative_depth having a value of 0, but still having
</span><br>
<span class="quotelev3">&gt;&gt; &gt; latency children information. In hwloc__xml_import_distances in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; topology-xml.c there's a check that assumes there is no latency
</span><br>
<span class="quotelev3">&gt;&gt; &gt; information.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Around line 634 in topology-xml.c:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if (nbobjs &amp;&amp; reldepth &amp;&amp; latbase) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    ... process latency xml nodes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; return hwloc__xml_import_close_tag(state);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The hwloc__xml_import_close_tag function returns a failure because the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; latency nodes have not been processed yet.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I had a look in orted where the xml is created and it does look like
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the xml is being assembled correctly as per the topology information it
</span><br>
<span class="quotelev3">&gt;&gt; &gt; has retrieved (though I don't know if that itself is correct). The
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc__xml_export_object function will quite happily create distance
</span><br>
<span class="quotelev3">&gt;&gt; &gt; information if the relative depth is 0 even though
</span><br>
<span class="quotelev3">&gt;&gt; &gt; hwloc__xml_import_distance will not be able to parse it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; So there is at least a problem that the topology code will create xml
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that it can't parse, but I don't know enough about the hwloc library to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; know if relative depth should always be positive. I suspect its the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; former which is the problem not the latter, but I don't know for
</span><br>
<span class="quotelev2">&gt;&gt; sure...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If it helps, this is the output of lstopo on the machine:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cyeoh_at_p5-40-P4-E0:~$ /home/OpenHPC/hwloc/build/bin/lstopo
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Machine (2048MB)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  NUMANode L#0 (P#0 512MB)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Socket L#0 + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      PU L#0 (P#0)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      PU L#1 (P#1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Socket L#1 + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      PU L#2 (P#2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      PU L#3 (P#3)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  NUMANode L#1 (P#1 640MB)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  NUMANode L#2 (P#2 512MB)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  NUMANode L#3 (P#3 384MB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2522/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Previous message:</strong> <a href="2521.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>In reply to:</strong> <a href="2521.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
<li><strong>Reply:</strong> <a href="2523.php">Jeff Squyres: "Re: [hwloc-devel] hwloc problem"</a>
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
