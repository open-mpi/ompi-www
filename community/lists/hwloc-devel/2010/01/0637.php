<?
$subject_val = "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 13:30:01 2010" -->
<!-- isoreceived="20100128183001" -->
<!-- sent="Thu, 28 Jan 2010 13:29:55 -0500" -->
<!-- isosent="20100128182955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] P#0 -&amp;gt; P0 for logical numbers?" -->
<!-- id="DDD0B790-753C-4790-BA39-20243CD87819_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 13:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0638.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1697)"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2010, at 9:31 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; How about &lt;foo&gt;0p for physical, such as Core0p?  The &quot;#&quot; doesn't really mean / connote anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; &#128; lstopo -p -
</span><br>
<span class="quotelev1">&gt; Machine(993MB) + Socket0p + L2(2048KB)
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core0p + P0p
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core1p + P1p
</span><br>
<span class="quotelev1">&gt; &#128; lstopo -
</span><br>
<span class="quotelev1">&gt; Machine(993MB) + Socket0 + L2(2048KB)
</span><br>
<span class="quotelev1">&gt;   L10(32KB) + Core0 + P0
</span><br>
<span class="quotelev1">&gt;   L11(32KB) + Core1 + P1
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<p>The more I look at a suffix of &quot;p&quot;, the less I like it.  :-\  
<br>
<p>I'm still not a fan of the &quot;#&quot; because it doesn't really mean / connote anything, but I do like the idea of some kind of a prefix better than a single-letter-suffix.
<br>
<p>Some other random ideas:
<br>
<p>- Print physical IDs in hex (doesn't necessarily connote &quot;physical&quot;, either)
<br>
&nbsp;&nbsp;Example: Core0p1 + P0x1 
<br>
- Prefix with capitol P
<br>
&nbsp;&nbsp;Example: CoreP1 + PP1
<br>
- Prefix with &quot;0p&quot;, but still use decimal
<br>
&nbsp;&nbsp;Example: Core0p1 + P0p1
<br>
- ...?
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
<li><strong>Next message:</strong> <a href="0638.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1697)"</a>
<li><strong>Previous message:</strong> <a href="0636.php">Brice Goglin: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0649.php">Samuel Thibault: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
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
