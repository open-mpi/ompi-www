<?
$subject_val = "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 13:11:07 2012" -->
<!-- isoreceived="20120118181107" -->
<!-- sent="Wed, 18 Jan 2012 19:11:02 +0100" -->
<!-- isosent="20120118181102" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype" -->
<!-- id="20120118181102.GT4341_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="937161260.440693.1326909874840.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2012-01-18 13:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2688.php">Samuel Thibault: "[hwloc-devel] Solaris visibility issue"</a>
<li><strong>Previous message:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Maybe in reply to:</strong> <a href="2676.php">Samuel Thibault: "[hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TERRY DONTJE, le Wed 18 Jan 2012 19:04:34 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 1/18/2012 12:59 PM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On 1/18/2012 12:51 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Samuel Thibault, le Wed 18 Jan 2012 15:55:18 +0100, a &#233;crit :
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
<span class="quotelev3">&gt; &gt;&gt;using ptrpicl -v, I'm getting
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           :name  cpus
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              cpu (cpu, 8900000735)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               :StateBegin        Wed Jan 18 07:18:41 2012
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               :FPUType&lt;ERROR: Argument too big&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;               :ProcessorType     \360\275^T^H
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;which matches what I'm getting with hwloc (0xf0 0xbd 0x14 0x8...) (yes,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;it's different from by previous report because my job request got
</span><br>
<span class="quotelev3">&gt; &gt;&gt;another but similar hardware machine).
</span><br>
<span class="quotelev2">&gt; &gt;Weird, my prtpicl on my v20z (which is a Sun system) has readable fields
</span><br>
<span class="quotelev2">&gt; &gt;FPUType and ProcessorType.
</span><br>
<span class="quotelev2">&gt; &gt;However, I am using an older S10 Generic_120012-11.  I'll see if I can
</span><br>
<span class="quotelev2">&gt; &gt;find something newer to try.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--td
</span><br>
<span class="quotelev1">&gt; Just tried an S10 Generic_144489-05 which has the same version of picl
</span><br>
<span class="quotelev1">&gt; packages as you show below.  The system is showing readable fields, unlike
</span><br>
<span class="quotelev1">&gt; yours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can only infer that there must be some issue with compatibility between
</span><br>
<span class="quotelev1">&gt; Dell platforms and S10's initialization of the picl information.
</span><br>
<p>Ok, I'll ignore this test failure then.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2688.php">Samuel Thibault: "[hwloc-devel] Solaris visibility issue"</a>
<li><strong>Previous message:</strong> <a href="2686.php">TERRY DONTJE: "Re: [hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<li><strong>Maybe in reply to:</strong> <a href="2676.php">Samuel Thibault: "[hwloc-devel] topology-solaris-chiptype.c bugs on processortype"</a>
<!-- nextthread="start" -->
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
