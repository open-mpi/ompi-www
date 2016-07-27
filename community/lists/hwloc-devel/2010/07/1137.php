<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 06:58:39 2010" -->
<!-- isoreceived="20100707105839" -->
<!-- sent="Wed, 07 Jul 2010 12:56:44 +0200" -->
<!-- isosent="20100707105644" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="4C345D6C.708_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201007071237.17355.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 06:56:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/07/2010 12:37, Jirka Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; I have also tested depth argument for --list. (BTW, what has happened with 
</span><br>
<span class="quotelev1">&gt; hwloc-info? I cannot find it anymore. Is there some replacement?)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It's a symlink that we create during make install. It doesn't exist in
<br>
the build directory. Did you make install?
<br>
<p><p><span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; [root_at_intel-sunriseridge-02 utils]# hwloc-info (version 1.0.1!!!)
</span><br>
<span class="quotelev1">&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:       3 NUMANodes (type #2)
</span><br>
<span class="quotelev1">&gt;   depth 2:      4 Sockets (type #3)
</span><br>
<span class="quotelev1">&gt;    depth 3:     4 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 4:    32 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;      depth 5:   32 Caches (type #4)
</span><br>
<span class="quotelev1">&gt;       depth 6:  32 Cores (type #5)
</span><br>
<span class="quotelev1">&gt;        depth 7: 64 PUs (type #6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Latest and patched version of hwloc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_intel-sunriseridge-02 utils]# ./hwloc-calc -v --list 4 proc:60
</span><br>
<span class="quotelev1">&gt; object #60 depth 7 below cpuset 0xffffffff,0xffffffff found
</span><br>
<span class="quotelev1">&gt; adding 0x08000000 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x08000000 to 0x0
</span><br>
<span class="quotelev1">&gt; 30
</span><br>
<span class="quotelev1">&gt; [root_at_intel-sunriseridge-02 utils]# ./hwloc-calc -v --list 5 proc:60
</span><br>
<span class="quotelev1">&gt; object #60 depth 7 below cpuset 0xffffffff,0xffffffff found
</span><br>
<span class="quotelev1">&gt; adding 0x08000000 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x08000000 to 0x0
</span><br>
<span class="quotelev1">&gt; 30
</span><br>
<span class="quotelev1">&gt; [root_at_intel-sunriseridge-02 utils]# ./hwloc-calc -v --list 6 proc:60
</span><br>
<span class="quotelev1">&gt; object #60 depth 7 below cpuset 0xffffffff,0xffffffff found
</span><br>
<span class="quotelev1">&gt; adding 0x08000000 to 0x0
</span><br>
<span class="quotelev1">&gt; adding 0x08000000 to 0x0
</span><br>
<span class="quotelev1">&gt; 30
</span><br>
<span class="quotelev1">&gt; =============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works! :-) Just one question: I would expect Cache to be reported as well. 
</span><br>
<span class="quotelev1">&gt; At level 4-6 it reports Core #. Any comment on this?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't see what you're referring to.
<br>
<p><span class="quotelev1">&gt; ================== NEHALEM box =================
</span><br>
<span class="quotelev1">&gt; [root_at_intel-sunriseridge-02 utils]# ./lstopo -
</span><br>
<span class="quotelev1">&gt; Machine (6042MB)
</span><br>
<span class="quotelev1">&gt;   NUMANode #0 (phys=0 1946MB)
</span><br>
<span class="quotelev1">&gt;     Socket #0 + L3 #0 (24MB)
</span><br>
<span class="quotelev1">&gt;       L2 #0 (256KB) + L1 #0 (32KB) + Core #0
</span><br>
<span class="quotelev1">&gt;         PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;         PU #1 (phys=32)
</span><br>
<span class="quotelev1">&gt;       L2 #1 (256KB) + L1 #1 (32KB) + Core #1
</span><br>
<span class="quotelev1">&gt;         PU #2 (phys=4)
</span><br>
<span class="quotelev1">&gt;         PU #3 (phys=36)
</span><br>
<span class="quotelev1">&gt; ........ (stripped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./hwloc-calc --objects proc:0
</span><br>
<span class="quotelev1">&gt; PU:0
</span><br>
<span class="quotelev1">&gt; ./hwloc-calc --objects socket:0
</span><br>
<span class="quotelev1">&gt; Socket:0
</span><br>
<span class="quotelev1">&gt; ./hwloc-calc --objects node:0
</span><br>
<span class="quotelev1">&gt; NUMANode:0
</span><br>
<span class="quotelev1">&gt; ./hwloc-calc --objects machine:0
</span><br>
<span class="quotelev1">&gt; Machine:0
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Having NUMANode != Socket on a Nehalem box is strange. This is probably
<br>
a BIOS bug. hwloc cannot fix this. lstopo will be wrong as long as the
<br>
BIOS/kernel reports that 2 sockets are in the same numa node. All other
<br>
hwloc tools have the same knowledge of the topology, it's expected that
<br>
they are wrong too.
<br>
<p><span class="quotelev1">&gt; Those errors are only reported when -v is given (as well as other
</span><br>
<span class="quotelev2">&gt;&gt; verbose messages). You're right, we should always show them.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Yes, you are right, -v works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error handling (without -v) has been improved in case that NUMA does not exist 
</span><br>
<span class="quotelev1">&gt; at all.
</span><br>
<span class="quotelev1">&gt; $hwloc-calc --list numanode --physical proc:0
</span><br>
<span class="quotelev1">&gt; unavailable list type NUMANode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will still get no error mesage when you specify wrong processor which does 
</span><br>
<span class="quotelev1">&gt; not exist.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, recently added error messages are ok, I need to fix the old ones,
<br>
those that only appear in verbose mode.
<br>
<p><span class="quotelev1">&gt; BTW, you have added quite few new options:-) Any plans to release them?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Once I found option names possibly more satisfying than &quot;--list&quot; and
<br>
&quot;--objects&quot;, I commit this patch. We won't backport that to 1.0.x but we
<br>
can start talking about doing 1.1. There are a couple branches that are
<br>
ready to merge. The big missing piece if the memory binding interface,
<br>
but we haven't made any progress there. Unless we discuss this soon [1],
<br>
I'd rather do a 1.1 without it.
<br>
<p>Brice
<br>
<p>[1] <a href="https://svn.open-mpi.org/trac/hwloc/ticket/9">https://svn.open-mpi.org/trac/hwloc/ticket/9</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1138.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
