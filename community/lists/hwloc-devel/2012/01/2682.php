<?
$subject_val = "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 12:51:24 2012" -->
<!-- isoreceived="20120118175124" -->
<!-- sent="Wed, 18 Jan 2012 18:51:20 +0100" -->
<!-- isosent="20120118175120" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype" -->
<!-- id="20120118175120.GQ4341_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120118145518.GB4341_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2012-01-18 12:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2683.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2676.php">Samuel Thibault: "[hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2685.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2685.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Wed 18 Jan 2012 15:55:18 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm getting an issue with the topology-solaris-chiptype.c work on
</span><br>
<span class="quotelev1">&gt; Solaris 10: in the ProcessorType case, the returned value does not look
</span><br>
<span class="quotelev1">&gt; like a readable string, I'm getting &quot;&#168;&quot;, which consequently poses
</span><br>
<span class="quotelev1">&gt; problems in the xml parser. Of course, googling picl_get_propinfo
</span><br>
<span class="quotelev1">&gt; &quot;ProcessorType&quot; returns... topology-solaris-chiptype.c ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can somebody have a look?
</span><br>
<p>using ptrpicl -v, I'm getting
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:name  cpus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu (cpu, 8900000735)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:StateBegin        Wed Jan 18 07:18:41 2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:FPUType  &lt;ERROR: Argument too big&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:ProcessorType     \360\275^T^H
<br>
<p>which matches what I'm getting with hwloc (0xf0 0xbd 0x14 0x8...) (yes,
<br>
it's different from by previous report because my job request got
<br>
another but similar hardware machine).
<br>
<p>pkginfo reports picl packages as being the following version:
<br>
<p>&nbsp;&nbsp;&nbsp;VERSION:  11.10.0,REV=2005.01.21.16.34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PSTAMP:  on10ptchfeatx20080814051153
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2683.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Previous message:</strong> <a href="2681.php">Jeff Squyres: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>In reply to:</strong> <a href="2676.php">Samuel Thibault: "[hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2685.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Reply:</strong> <a href="2685.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
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
