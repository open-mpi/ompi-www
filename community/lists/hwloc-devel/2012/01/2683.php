<?
$subject_val = "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 12:54:57 2012" -->
<!-- isoreceived="20120118175457" -->
<!-- sent="Wed, 18 Jan 2012 12:54:44 -0500" -->
<!-- isosent="20120118175444" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype" -->
<!-- id="4F170764.2060306_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120118173645.GJ4341_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2012-01-18 12:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2684.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2682.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2680.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2682.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/18/2012 12:36 PM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; TERRY DONTJE, le Wed 18 Jan 2012 17:57:33 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 1/18/2012 11:48 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TERRY DONTJE, le Wed 18 Jan 2012 16:31:35 +0100, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 1/18/2012 9:55 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm getting an issue with the topology-solaris-chiptype.c work on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Solaris 10: in the ProcessorType case, the returned value does not look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; like a readable string, I'm getting &quot;&#168;&quot;, which consequently poses
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problems in the xml parser. Of course, googling picl_get_propinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;ProcessorType&quot; returns... topology-solaris-chiptype.c ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can somebody have a look?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you point me which parent workspace you are using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to say I don't even know what it means :)
</span><br>
<span class="quotelev2">&gt;&gt; Which branch is your workspace checkedout from?
</span><br>
<span class="quotelev1">&gt; I don't know what a &quot;workspace&quot; is.  I basically don't know anything
</span><br>
<span class="quotelev1">&gt; about solaris, except the usual Unix things, and I login through ssh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Jeff's explanation is correct, all I want to know is which branch did 
<br>
you check out the source from (trunk, v1.4)?
<br>
<p><span class="quotelev2">&gt;&gt; Which S10 are you using?
</span><br>
<span class="quotelev1">&gt; #uname -a
</span><br>
<span class="quotelev1">&gt; SunOS pipol7 5.10 Generic_137138-09 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I tried to build v1.4 and the trunk and I keep getting linkage errors
</span><br>
<span class="quotelev2">&gt;&gt; on lstopo-lstopo-draw.o complaining about hwloc_insert_object_by_cpuset
</span><br>
<span class="quotelev2">&gt;&gt; being undefined.
</span><br>
<span class="quotelev1">&gt; It is defined in ./src/topology.c. Please check with make V=1 that
</span><br>
<span class="quotelev1">&gt; topology.o is really included in the link. Also paste the whole log
</span><br>
<span class="quotelev1">&gt; output, the issue actually come from somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
There must be something screwy with how visibility is done because when 
<br>
I disabled visibility I got a workable lstopo and friends.
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2683/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2683/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2684.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2682.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2680.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2682.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
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
