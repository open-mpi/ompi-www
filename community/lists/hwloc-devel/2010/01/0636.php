<?
$subject_val = "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:28:44 2010" -->
<!-- isoreceived="20100128182844" -->
<!-- sent="Thu, 28 Jan 2010 19:28:38 +0100" -->
<!-- isosent="20100128182838" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] P#0 -&amp;gt; P0 for logical numbers?" -->
<!-- id="4B61D756.6050202_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="43888045-FC5E-4795-8EE0-5FC383DE382E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 13:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0637.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0637.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 28, 2010, at 9:05 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Since we changed the default behavior of lstopo to display logical
</span><br>
<span class="quotelev2">&gt;&gt; numbers instead of physical numbers, I've quite a few times taken one
</span><br>
<span class="quotelev2">&gt;&gt; for the other, leading to confusion.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm... good point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I agree on the fact that it's
</span><br>
<span class="quotelev2">&gt;&gt; better to have coherency, but maybe we could change the output of lstopo
</span><br>
<span class="quotelev2">&gt;&gt; to distinguish between physical and logical?  I.e. for instance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#128; lstopo -p -
</span><br>
<span class="quotelev2">&gt;&gt; Machine(993MB) + Socket#0 + L2(2048KB)
</span><br>
<span class="quotelev2">&gt;&gt;   L1(32KB) + Core#0 + P#0
</span><br>
<span class="quotelev2">&gt;&gt;   L1(32KB) + Core#1 + P#1
</span><br>
<span class="quotelev2">&gt;&gt; &#128; lstopo -
</span><br>
<span class="quotelev2">&gt;&gt; Machine(993MB) + Socket0 + L20(2048KB)
</span><br>
<span class="quotelev2">&gt;&gt;   L10(32KB) + Core0 + P0
</span><br>
<span class="quotelev2">&gt;&gt;   L11(32KB) + Core1 + P1
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about &lt;foo&gt;0p for physical, such as Core0p?  The &quot;#&quot; doesn't really mean / connote anything.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I'd vote for just replacing # with another special character such as -
<br>
or : or / when displaying logical indexes. Those are not very nice, but
<br>
that's the best I have on my keyboard :)
<br>
<p>&#128; lstopo -
<br>
Machine(993MB) + Socket0 + L20(2048KB)
<br>
&nbsp;&nbsp;L1:0(32KB) + Core:0 + P0
<br>
&nbsp;&nbsp;L1:1(32KB) + Core:1 + P1
<br>
<p>&#128; lstopo -
<br>
Machine(993MB) + Socket0 + L20(2048KB)
<br>
&nbsp;&nbsp;L1-0(32KB) + Core-0 + P0
<br>
&nbsp;&nbsp;L1-1(32KB) + Core-1 + P1
<br>
<p>I think it's better to always have a special character between the type
<br>
(which sometimes ends with a digit) and the index.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0637.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0637.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
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
