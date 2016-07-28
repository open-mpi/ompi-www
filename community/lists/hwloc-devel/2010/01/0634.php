<?
$subject_val = "[hwloc-devel] P#0 -&gt; P0 for logical numbers?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 09:06:13 2010" -->
<!-- isoreceived="20100128140613" -->
<!-- sent="Thu, 28 Jan 2010 15:05:40 +0100" -->
<!-- isosent="20100128140540" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="[hwloc-devel] P#0 -&amp;gt; P0 for logical numbers?" -->
<!-- id="20100128140540.GG4873_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-15" -->
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
<strong>Subject:</strong> [hwloc-devel] P#0 -&gt; P0 for logical numbers?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 09:05:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Since we changed the default behavior of lstopo to display logical
<br>
numbers instead of physical numbers, I've quite a few times taken one
<br>
for the other, leading to confusion. I agree on the fact that it's
<br>
better to have coherency, but maybe we could change the output of lstopo
<br>
to distinguish between physical and logical?  I.e. for instance
<br>
<p>&#164; lstopo -p -
<br>
Machine(993MB) + Socket#0 + L2(2048KB)
<br>
&nbsp;&nbsp;L1(32KB) + Core#0 + P#0
<br>
&nbsp;&nbsp;L1(32KB) + Core#1 + P#1
<br>
&#164; lstopo -
<br>
Machine(993MB) + Socket0 + L20(2048KB)
<br>
&nbsp;&nbsp;L10(32KB) + Core0 + P0
<br>
&nbsp;&nbsp;L11(32KB) + Core1 + P1
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Previous message:</strong> <a href="0633.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
<li><strong>Reply:</strong> <a href="0635.php">Jeff Squyres: "Re: [hwloc-devel] P#0 -&gt; P0 for logical numbers?"</a>
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
