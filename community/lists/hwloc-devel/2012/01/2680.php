<?
$subject_val = "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 12:36:49 2012" -->
<!-- isoreceived="20120118173649" -->
<!-- sent="Wed, 18 Jan 2012 18:36:45 +0100" -->
<!-- isosent="20120118173645" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype" -->
<!-- id="20120118173645.GJ4341_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="34908790.439601.1326905853267.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 12:36:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2679.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Maybe in reply to:</strong> <a href="2676.php">Samuel Thibault: "[hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2683.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TERRY DONTJE, le Wed 18 Jan 2012 17:57:33 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 1/18/2012 11:48 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt;TERRY DONTJE, le Wed 18 Jan 2012 16:31:35 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On 1/18/2012 9:55 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I'm getting an issue with the topology-solaris-chiptype.c work on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Solaris 10: in the ProcessorType case, the returned value does not look
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;like a readable string, I'm getting &quot;&#168;&quot;, which consequently poses
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;problems in the xml parser. Of course, googling picl_get_propinfo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;&quot;ProcessorType&quot; returns... topology-solaris-chiptype.c ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Can somebody have a look?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Can you point me which parent workspace you are using
</span><br>
<span class="quotelev2">&gt; &gt;I have to say I don't even know what it means :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which branch is your workspace checkedout from?
</span><br>
<p>I don't know what a &quot;workspace&quot; is.  I basically don't know anything
<br>
about solaris, except the usual Unix things, and I login through ssh.
<br>
<p><span class="quotelev1">&gt; Which S10 are you using?
</span><br>
<p>#uname -a
<br>
SunOS pipol7 5.10 Generic_137138-09 i86pc i386 i86pc Solaris
<br>
<p><span class="quotelev1">&gt; Also, I tried to build v1.4 and the trunk and I keep getting linkage errors
</span><br>
<span class="quotelev1">&gt; on lstopo-lstopo-draw.o complaining about hwloc_insert_object_by_cpuset
</span><br>
<span class="quotelev1">&gt; being undefined.
</span><br>
<p>It is defined in ./src/topology.c. Please check with make V=1 that
<br>
topology.o is really included in the link. Also paste the whole log
<br>
output, the issue actually come from somewhere.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2679.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Maybe in reply to:</strong> <a href="2676.php">Samuel Thibault: "[hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2683.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
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
