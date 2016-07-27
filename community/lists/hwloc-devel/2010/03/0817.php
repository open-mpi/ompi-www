<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 14:01:48 2010" -->
<!-- isoreceived="20100326180148" -->
<!-- sent="Fri, 26 Mar 2010 19:01:43 +0100" -->
<!-- isosent="20100326180143" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="4BACF687.2060701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0F9EB447-52BB-40BD-9BAA-12DDADA142B6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Strange difference<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 14:01:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0818.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 26, 2010, at 1:25 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The reason was that the &quot;phys&quot; attribute is mostly useless for anything
</span><br>
<span class="quotelev2">&gt;&gt; but Proc and NUMANode.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Current other differences when adding -v are:
</span><br>
<span class="quotelev2">&gt;&gt; * &quot;Proc&quot; if -v instead of &quot;P&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I like &quot;Proc&quot; instead of &quot;P&quot; even for the non-v output.  :-)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I am not against it, but I don't remember the reason for the initial
<br>
change. Maybe because &quot;processor&quot; is confusing for some people (logical
<br>
vs physical socket) ?
<br>
<p><span class="quotelev2">&gt;&gt; * print local memory size
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the Machine memory size supposed to agree between the two outputs, or does the -v output roll up some sizes together?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (3945MB)
</span><br>
<span class="quotelev1">&gt; Machine (phys=0 local=4039640KB total=4039640KB)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>4039640/1024=3944.96093750000000000000
<br>
We divide by 1024 until we find something between 1 and 10000 iirc, and
<br>
then we round to the nearest integer.
<br>
<p><p><span class="quotelev1">&gt; I'm obviously good with -v having more information.  I guess my reaction was because it wasn't just *more* information -- the *same* information was in a different format, and that struck me as weird.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Don't know :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0818.php">Bert Wesarg: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0816.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0819.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
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
