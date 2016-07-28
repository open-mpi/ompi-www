<?
$subject_val = "Re: [hwloc-devel] hwloc to be included in RHEL 6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:57:39 2010" -->
<!-- isoreceived="20101122165739" -->
<!-- sent="Mon, 22 Nov 2010 17:57:34 +0100" -->
<!-- isosent="20101122165734" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc to be included in RHEL 6.1" -->
<!-- id="20101122165734.GX10316_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101122163315.GQ10316_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc to be included in RHEL 6.1<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 11:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1551.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1551.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Reply:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Mon 22 Nov 2010 17:33:15 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; -- using &quot;p&quot; is a good way to indicate &quot;physical&quot;.  But IIRC, we didn't like &quot;l&quot; (for &quot;logical&quot;) because it looks too much like 1 (one).  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think we're open to having some kind of indication to denote &quot;logical&quot; instead of &quot;physical&quot; -- any suggestions?  Perhaps P and L (vs. p and l)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P/L can be better than p/l, yes. Just &quot;PU #0&quot; is indeed probably not
</span><br>
<span class="quotelev1">&gt; precise enough, and &quot;PU L#0&quot; will make people wonder why the L, and then
</span><br>
<span class="quotelev1">&gt; understand why.  I guess we can try to add this to an rc4.
</span><br>
<p>Thinking again about it: can't we just switch only lstopo to physical
<br>
numbering by default, and only for the drawn part?  The textual
<br>
output (lstopo -) displays both anyway.  We wanted to use logical
<br>
numbering by default to be coherent with other hwloc tools, but the
<br>
graphical/semigraphical lstopo one is very particular (I hope nobody is
<br>
crazy enough to parse its output), and in almost all cases people will
<br>
want physical numbering by default, other cases can be obtained through
<br>
-l.  I'd even say 1.0.3 should switch too (v0.9 was only using physical
<br>
numbering in lstopo).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1551.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1551.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Reply:</strong> <a href="1553.php">Jirka Hladky: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
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
