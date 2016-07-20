<?
$subject_val = "Re: [hwloc-users] hwloc problem on SGI machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 18:54:25 2014" -->
<!-- isoreceived="20140110235425" -->
<!-- sent="Sat, 11 Jan 2014 00:54:23 +0100" -->
<!-- isosent="20140110235423" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc problem on SGI machine" -->
<!-- id="52D0882F.1000406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DDF6AA89-55F9-49E9-9EF0-D0176BB9237B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc problem on SGI machine<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 18:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0946.php">Chris Samuel: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Previous message:</strong> <a href="0944.php">Jeff Squyres (jsquyres): "[hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>In reply to:</strong> <a href="0944.php">Jeff Squyres (jsquyres): "[hwloc-users] hwloc problem on SGI machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0946.php">Chris Samuel: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/01/2014 00:27, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Jeff Becker (CC'ed) reported to me a failure with hwloc 1.7.2 (in OMPI trunk).  I had him verify this with a standalone hwloc 1.7.2, and then had him try standalone hwloc 1.8 as well -- all got the same failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what he's seeing in 1.7.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ lstopo
</span><br>
<span class="quotelev1">&gt; Different OS indexes
</span><br>
<span class="quotelev1">&gt; lstopo: topology-linux.c:2731: look_sysfsnode: Assertion `node == res_obj' failed.
</span><br>
<span class="quotelev1">&gt; Aborted (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In 1.8, the issue is the same, but a different line number (2741).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's an SGI x86_64 server, running SLES 11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this an hwloc issue, or a hardware issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>SGI machines are usually good at reporting topology info, and good at
<br>
creating large use cases that we did never test earlier, so could be a
<br>
hwloc problem :) Can you run &quot;hwloc-gather-topology sgi&quot; and then the
<br>
resulting sgi.tar.bz2 ?
<br>
<p>thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0946.php">Chris Samuel: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>Previous message:</strong> <a href="0944.php">Jeff Squyres (jsquyres): "[hwloc-users] hwloc problem on SGI machine"</a>
<li><strong>In reply to:</strong> <a href="0944.php">Jeff Squyres (jsquyres): "[hwloc-users] hwloc problem on SGI machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0946.php">Chris Samuel: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
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
