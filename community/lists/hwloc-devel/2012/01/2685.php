<?
$subject_val = "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 12:59:41 2012" -->
<!-- isoreceived="20120118175941" -->
<!-- sent="Wed, 18 Jan 2012 12:59:28 -0500" -->
<!-- isosent="20120118175928" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype" -->
<!-- id="4F170880.4030409_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120118175120.GQ4341_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2012-01-18 12:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2684.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2682.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/18/2012 12:51 PM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Samuel Thibault, le Wed 18 Jan 2012 15:55:18 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting an issue with the topology-solaris-chiptype.c work on
</span><br>
<span class="quotelev2">&gt;&gt; Solaris 10: in the ProcessorType case, the returned value does not look
</span><br>
<span class="quotelev2">&gt;&gt; like a readable string, I'm getting &quot;&#168;&quot;, which consequently poses
</span><br>
<span class="quotelev2">&gt;&gt; problems in the xml parser. Of course, googling picl_get_propinfo
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ProcessorType&quot; returns... topology-solaris-chiptype.c ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can somebody have a look?
</span><br>
<span class="quotelev1">&gt; using ptrpicl -v, I'm getting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            :name  cpus
</span><br>
<span class="quotelev1">&gt;               cpu (cpu, 8900000735)
</span><br>
<span class="quotelev1">&gt;                :StateBegin        Wed Jan 18 07:18:41 2012
</span><br>
<span class="quotelev1">&gt;                :FPUType&lt;ERROR: Argument too big&gt;
</span><br>
<span class="quotelev1">&gt;                :ProcessorType     \360\275^T^H
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which matches what I'm getting with hwloc (0xf0 0xbd 0x14 0x8...) (yes,
</span><br>
<span class="quotelev1">&gt; it's different from by previous report because my job request got
</span><br>
<span class="quotelev1">&gt; another but similar hardware machine).
</span><br>
Weird, my prtpicl on my v20z (which is a Sun system) has readable fields 
<br>
FPUType and ProcessorType.
<br>
However, I am using an older S10 Generic_120012-11.  I'll see if I can 
<br>
find something newer to try.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; pkginfo reports picl packages as being the following version:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     VERSION:  11.10.0,REV=2005.01.21.16.34
</span><br>
<span class="quotelev1">&gt;      PSTAMP:  on10ptchfeatx20080814051153
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2685/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2684.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2682.php">Samuel Thibault: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
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
