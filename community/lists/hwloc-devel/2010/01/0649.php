<?
$subject_val = "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 09:49:08 2010" -->
<!-- isoreceived="20100130144908" -->
<!-- sent="Sat, 30 Jan 2010 15:49:03 +0100" -->
<!-- isosent="20100130144903" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] P#0 -&amp;gt; P0 for logical numbers?" -->
<!-- id="20100130144903.GH4798_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 09:49:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With p/l prefixes:
<br>
<p>&#164; lstopo -p -
<br>
Machine(993MB) + Socketp0 + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + Corep0 + Pp0
<br>
&nbsp;&nbsp;L1(32KB) + Corep1 + Pp1
<br>
&#164; lstopo -
<br>
Machine(993MB) + Socketl0 + L2l0(2048KB)
<br>
&nbsp;&nbsp;L1l0(32KB) + Corel0 + Pl0
<br>
&nbsp;&nbsp;L1l1(32KB) + Corel1 + Pl1
<br>
<p>What I dislike is that this seems to bring odd words like &quot;Corel&quot;.
<br>
I'd rather read this:
<br>
<p>&#164; lstopo -p -
<br>
Machine(993MB) + Socket p#0 + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + Core p#0 + P p#0
<br>
&nbsp;&nbsp;L1(32KB) + Core p#1 + P p#1
<br>
&#164; lstopo -
<br>
Machine(993MB) + Socket l#0 + L2 l#0(2048KB)
<br>
&nbsp;&nbsp;L1 l#0(32KB) + Core l#0 + P l#0
<br>
&nbsp;&nbsp;L1 l#1(32KB) + Core l#1 + P l#1
<br>
<p>or that:
<br>
<p>&#164; lstopo -p -
<br>
Machine(993MB) + Socket p0 + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + Core p0 + P p0
<br>
&nbsp;&nbsp;L1(32KB) + Core p1 + P p1
<br>
&#164; lstopo -
<br>
Machine(993MB) + Socket l0 + L2 l0(2048KB)
<br>
&nbsp;&nbsp;L1 l0(32KB) + Core l0 + P l0
<br>
&nbsp;&nbsp;L1 l1(32KB) + Core l1 + P l1
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0650.php">Samuel Thibault: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>Previous message:</strong> <a href="0648.php">Brice Goglin: "Re: [hwloc-devel] processor restriction + lookup of pid for 1.0"</a>
<li><strong>In reply to:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
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
