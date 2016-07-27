<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 13:21:06 2010" -->
<!-- isoreceived="20100326172106" -->
<!-- sent="Fri, 26 Mar 2010 13:20:59 -0400" -->
<!-- isosent="20100326172059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="D0DBD566-C17C-4EF3-8688-2D6D8028652F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100326153301.GY31139_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 13:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>In reply to:</strong> <a href="0808.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0815.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0815.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 26, 2010, at 11:33 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Well, yes, it is supposed to display less information :)
</span><br>
<span class="quotelev1">&gt; Which precise difference are you referring to?
</span><br>
<p>The first section of both -- obviously, not the 2nd section of the -v output.  :-)
<br>
<p>The first section of both displays roughly the same information -- the only addition seems to be the phys number of the socket and the machine memory sizes (which don't agree between -v and non-v -- why?).  Indeed, the &quot;-v&quot; output seems to remove a lot of whitespace that was included in the non-v output.  
<br>
<p>I just thought it was weird that the -v output is almost exactly the same information (in the first part), but expressed in more lines with less whitespace (L1 and core moved to their own lines).  More specifically, if adding the phys number of the socket and the machine sizes is the only information difference, why not add to the same output format as the non-v output?
<br>
<p><span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; [7:45] svbu-mpi:~/svn/hwloc % ./utils/lstopo -l
</span><br>
<span class="quotelev2">&gt; &gt; Machine (3945MB)
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #0
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #0 (2048KB) + L1 #0 (16KB) + Core #0
</span><br>
<span class="quotelev2">&gt; &gt;       P #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;       P #1 (phys=4)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #1 (2048KB) + L1 #1 (16KB) + Core #1
</span><br>
<span class="quotelev2">&gt; &gt;       P #2 (phys=2)
</span><br>
<span class="quotelev2">&gt; &gt;       P #3 (phys=6)
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #1
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #2 (2048KB) + L1 #2 (16KB) + Core #2
</span><br>
<span class="quotelev2">&gt; &gt;       P #4 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;       P #5 (phys=5)
</span><br>
<span class="quotelev2">&gt; &gt;     L2 #3 (2048KB) + L1 #3 (16KB) + Core #3
</span><br>
<span class="quotelev2">&gt; &gt;       P #6 (phys=3)
</span><br>
<span class="quotelev2">&gt; &gt;       P #7 (phys=7)
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; [7:45] svbu-mpi:~/svn/hwloc % ./utils/lstopo -l -v
</span><br>
<span class="quotelev2">&gt; &gt; Machine (phys=0 local=4039640KB total=4039640KB)
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;     L2Cache #0 (2048KB)
</span><br>
<span class="quotelev2">&gt; &gt;       L1Cache #0 (16KB)
</span><br>
<span class="quotelev2">&gt; &gt;         Core #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;           P #0 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;           P #1 (phys=4)
</span><br>
<span class="quotelev2">&gt; &gt;     L2Cache #1 (2048KB)
</span><br>
<span class="quotelev2">&gt; &gt;       L1Cache #1 (16KB)
</span><br>
<span class="quotelev2">&gt; &gt;         Core #1 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;           P #2 (phys=2)
</span><br>
<span class="quotelev2">&gt; &gt;           P #3 (phys=6)
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #1 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;     L2Cache #2 (2048KB)
</span><br>
<span class="quotelev2">&gt; &gt;       L1Cache #2 (16KB)
</span><br>
<span class="quotelev2">&gt; &gt;         Core #2 (phys=0)
</span><br>
<span class="quotelev2">&gt; &gt;           P #4 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;           P #5 (phys=5)
</span><br>
<span class="quotelev2">&gt; &gt;     L2Cache #3 (2048KB)
</span><br>
<span class="quotelev2">&gt; &gt;       L1Cache #3 (16KB)
</span><br>
<span class="quotelev2">&gt; &gt;         Core #3 (phys=1)
</span><br>
<span class="quotelev2">&gt; &gt;           P #6 (phys=3)
</span><br>
<span class="quotelev2">&gt; &gt;           P #7 (phys=7)
</span><br>
<span class="quotelev2">&gt; &gt; depth 0:      1 Machine (type #1)
</span><br>
<span class="quotelev2">&gt; &gt;  depth 1:     2 Sockets (type #3)
</span><br>
<span class="quotelev2">&gt; &gt;   depth 2:    4 Caches (type #4)
</span><br>
<span class="quotelev2">&gt; &gt;    depth 3:   4 Caches (type #4)
</span><br>
<span class="quotelev2">&gt; &gt;     depth 4:  4 Cores (type #5)
</span><br>
<span class="quotelev2">&gt; &gt;      depth 5: 8 Procs (type #6)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1853"</a>
<li><strong>In reply to:</strong> <a href="0808.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0815.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0815.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
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
