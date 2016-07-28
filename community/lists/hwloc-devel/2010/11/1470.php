<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 07:20:45 2010" -->
<!-- isoreceived="20101111122045" -->
<!-- sent="Thu, 11 Nov 2010 13:20:34 +0100" -->
<!-- isosent="20101111122034" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="20101111122034.GL4896_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1280832627.171926.1289477286697.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 07:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1471.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1471.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1471.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka Hladky, le Thu 11 Nov 2010 13:08:06 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; thanks for the quick patch. I have tested it and it works! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ utils/hwloc-bind --membind node:1 --mempolicy interleave -- utils/hwloc-bind 
</span><br>
<span class="quotelev1">&gt; --get --membind
</span><br>
<span class="quotelev1">&gt; 0x0000aaaa (interleave)
</span><br>
<p>Good :)
<br>
<p><span class="quotelev1">&gt; 1) Does the option --get works together with --pid ? Like finding out mempolicy 
</span><br>
<span class="quotelev1">&gt; for any pid? I don't think that get_mempolicy supports this.
</span><br>
<p>hwloc indeed gives:
<br>
<p>hwloc_get_membind failed (errno 38 Function not implemented)
<br>
<p><span class="quotelev1">&gt; We can perhaps enhance the parsing to raise an error when --pid and
</span><br>
<span class="quotelev1">&gt; --get are both specified.
</span><br>
<p>That's catched by the underlying support itself, depending on the OS
<br>
support, so it shouldn't be prevented at the parse time (for OSes where
<br>
that's possible).
<br>
<p><span class="quotelev1">&gt; $utils/hwloc-bind --membind node:0 --mempolicy interleave -- utils/hwloc-bind 
</span><br>
<span class="quotelev1">&gt; --get --membind
</span><br>
<span class="quotelev1">&gt; 0xf...f (interleave)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does &quot;0xf...f&quot; mean?
</span><br>
<p>I guess Brice used this notation for &quot;everything 1&quot;.  That doesn't seem
<br>
to be documented though.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1471.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1469.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1471.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1471.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
