<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 11:33:09 2010" -->
<!-- isoreceived="20100326153309" -->
<!-- sent="Fri, 26 Mar 2010 16:33:01 +0100" -->
<!-- isosent="20100326153301" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="20100326153301.GY31139_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50882089-0D6B-4FF3-8BDA-264429AF3C57_at_cisco.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 11:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Jeff Squyres: "[hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Fri 26 Mar 2010 10:47:15 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; The output of &quot;lstopo -l&quot; is different than &quot;lstopo -l -v&quot; -- is that intentional?
</span><br>
<p>Well, yes, it is supposed to display less information :)
<br>
Which precise difference are you referring to?
<br>
<p>Samuel
<br>
<p><span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [7:45] svbu-mpi:~/svn/hwloc % ./utils/lstopo -l 
</span><br>
<span class="quotelev1">&gt; Machine (3945MB)
</span><br>
<span class="quotelev1">&gt;   Socket #0
</span><br>
<span class="quotelev1">&gt;     L2 #0 (2048KB) + L1 #0 (16KB) + Core #0
</span><br>
<span class="quotelev1">&gt;       P #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;       P #1 (phys=4)
</span><br>
<span class="quotelev1">&gt;     L2 #1 (2048KB) + L1 #1 (16KB) + Core #1
</span><br>
<span class="quotelev1">&gt;       P #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;       P #3 (phys=6)
</span><br>
<span class="quotelev1">&gt;   Socket #1
</span><br>
<span class="quotelev1">&gt;     L2 #2 (2048KB) + L1 #2 (16KB) + Core #2
</span><br>
<span class="quotelev1">&gt;       P #4 (phys=1)
</span><br>
<span class="quotelev1">&gt;       P #5 (phys=5)
</span><br>
<span class="quotelev1">&gt;     L2 #3 (2048KB) + L1 #3 (16KB) + Core #3
</span><br>
<span class="quotelev1">&gt;       P #6 (phys=3)
</span><br>
<span class="quotelev1">&gt;       P #7 (phys=7)
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [7:45] svbu-mpi:~/svn/hwloc % ./utils/lstopo -l -v
</span><br>
<span class="quotelev1">&gt; Machine (phys=0 local=4039640KB total=4039640KB)
</span><br>
<span class="quotelev1">&gt;   Socket #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;     L2Cache #0 (2048KB)
</span><br>
<span class="quotelev1">&gt;       L1Cache #0 (16KB)
</span><br>
<span class="quotelev1">&gt;         Core #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;           P #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;           P #1 (phys=4)
</span><br>
<span class="quotelev1">&gt;     L2Cache #1 (2048KB)
</span><br>
<span class="quotelev1">&gt;       L1Cache #1 (16KB)
</span><br>
<span class="quotelev1">&gt;         Core #1 (phys=1)
</span><br>
<span class="quotelev1">&gt;           P #2 (phys=2)
</span><br>
<span class="quotelev1">&gt;           P #3 (phys=6)
</span><br>
<span class="quotelev1">&gt;   Socket #1 (phys=1)
</span><br>
<span class="quotelev1">&gt;     L2Cache #2 (2048KB)
</span><br>
<span class="quotelev1">&gt;       L1Cache #2 (16KB)
</span><br>
<span class="quotelev1">&gt;         Core #2 (phys=0)
</span><br>
<span class="quotelev1">&gt;           P #4 (phys=1)
</span><br>
<span class="quotelev1">&gt;           P #5 (phys=5)
</span><br>
<span class="quotelev1">&gt;     L2Cache #3 (2048KB)
</span><br>
<span class="quotelev1">&gt;       L1Cache #3 (16KB)
</span><br>
<span class="quotelev1">&gt;         Core #3 (phys=1)
</span><br>
<span class="quotelev1">&gt;           P #6 (phys=3)
</span><br>
<span class="quotelev1">&gt;           P #7 (phys=7)
</span><br>
<span class="quotelev1">&gt; depth 0:	1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:	2 Sockets (type #3)
</span><br>
<span class="quotelev1">&gt;   depth 2:	4 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;    depth 3:	4 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 4:	4 Cores (type #5)
</span><br>
<span class="quotelev1">&gt;      depth 5:	8 Procs (type #6)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0805.php">Jeff Squyres: "[hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0814.php">Jeff Squyres: "Re: [hwloc-devel] Strange difference"</a>
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
