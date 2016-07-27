<?
$subject_val = "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 09:32:01 2010" -->
<!-- isoreceived="20100128143201" -->
<!-- sent="Thu, 28 Jan 2010 09:31:56 -0500" -->
<!-- isosent="20100128143156" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] P#0 -&amp;gt; P0 for logical numbers?" -->
<!-- id="43888045-FC5E-4795-8EE0-5FC383DE382E_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20100128140540.GG4873_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 09:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Samuel Thibault: "[hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0634.php">Samuel Thibault: "[hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0637.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2010, at 9:05 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Since we changed the default behavior of lstopo to display logical
</span><br>
<span class="quotelev1">&gt; numbers instead of physical numbers, I've quite a few times taken one
</span><br>
<span class="quotelev1">&gt; for the other, leading to confusion.
</span><br>
<p>Mmm... good point.
<br>
<p><span class="quotelev1">&gt; I agree on the fact that it's
</span><br>
<span class="quotelev1">&gt; better to have coherency, but maybe we could change the output of lstopo
</span><br>
<span class="quotelev1">&gt; to distinguish between physical and logical?  I.e. for instance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#128; lstopo -p -
</span><br>
<span class="quotelev1">&gt; Machine(993MB) + Socket#0 + L2(2048KB)
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core#0 + P#0
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core#1 + P#1
</span><br>
<span class="quotelev1">&gt; &#128; lstopo -
</span><br>
<span class="quotelev1">&gt; Machine(993MB) + Socket0 + L20(2048KB)
</span><br>
<span class="quotelev1">&gt;   L10(32KB) + Core0 + P0
</span><br>
<span class="quotelev1">&gt;   L11(32KB) + Core1 + P1
</span><br>
<p>How about &lt;foo&gt;0p for physical, such as Core0p?  The &quot;#&quot; doesn't really mean / connote anything.
<br>
<p>-----
<br>
&#128; lstopo -p -
<br>
Machine(993MB) + Socket0p + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + Core0p + P0p
<br>
&nbsp;&nbsp;L1(32KB) + Core1p + P1p
<br>
&#128; lstopo -
<br>
Machine(993MB) + Socket0 + L20(2048KB)
<br>
&nbsp;&nbsp;L10(32KB) + Core0 + P0
<br>
&nbsp;&nbsp;L11(32KB) + Core1 + P1
<br>
-----
<br>
<p>Ooo -- how about roman numerals for physical?
<br>
<p>-----
<br>
&#128; lstopo -p -
<br>
Machine(993MB) + SocketIIV + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + CoreX + PXI
<br>
&nbsp;&nbsp;L1(32KB) + CoreXI + PXI
<br>
-----
<br>
<p>Drat; Roman numerals have no &quot;0&quot;.  So -- scratch that...  ;-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0634.php">Samuel Thibault: "[hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0634.php">Samuel Thibault: "[hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0637.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
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
