<?
$subject_val = "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 11:58:30 2012" -->
<!-- isoreceived="20120118165830" -->
<!-- sent="Wed, 18 Jan 2012 11:58:17 -0500" -->
<!-- isosent="20120118165817" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype" -->
<!-- id="4F16FA29.8000307_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120118164759.GE4341_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 11:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2680.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2678.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2678.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2680.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/18/2012 11:48 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; TERRY DONTJE, le Wed 18 Jan 2012 16:31:35 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 1/18/2012 9:55 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting an issue with the topology-solaris-chiptype.c work on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris 10: in the ProcessorType case, the returned value does not look
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like a readable string, I'm getting &quot;&#168;&quot;, which consequently poses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems in the xml parser. Of course, googling picl_get_propinfo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ProcessorType&quot; returns... topology-solaris-chiptype.c ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can somebody have a look?
</span><br>
<span class="quotelev2">&gt;&gt; Can you point me which parent workspace you are using
</span><br>
<span class="quotelev1">&gt; I have to say I don't even know what it means :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
Which branch is your workspace checkedout from?
<br>
<p>Which S10 are you using?
<br>
<p>Also, I tried to build v1.4 and the trunk and I keep getting linkage 
<br>
errors on lstopo-lstopo-draw.o complaining about 
<br>
hwloc_insert_object_by_cpuset being undefined.
<br>
<p>--td
<br>
<span class="quotelev2">&gt;&gt; and what type of machine you are running on?
</span><br>
<span class="quotelev1">&gt; It's a Dell PowerEdge 1950  	 8 GB  	 Intel Xeon Dual Core @ 2x2GHz.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2679/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2680.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2678.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2678.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2680.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
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
