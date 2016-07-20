<?
$subject_val = "Re: [hwloc-users] Questions to lstopo and hwloc-bind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 14 02:47:45 2012" -->
<!-- isoreceived="20120914064745" -->
<!-- sent="Fri, 14 Sep 2012 08:47:40 +0200" -->
<!-- isosent="20120914064740" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Questions to lstopo and hwloc-bind" -->
<!-- id="5052D30C.3010809_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201209140548.q8E5m3BZ001597_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Questions to lstopo and hwloc-bind<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-14 02:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Siegmar Gross: "[hwloc-users] Questions to lstopo and hwloc-bind"</a>
<li><strong>In reply to:</strong> <a href="0725.php">Siegmar Gross: "[hwloc-users] Questions to lstopo and hwloc-bind"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/09/2012 07:48, Siegmar Gross a &#233;crit :
<br>
<span class="quotelev1">&gt; I have installed hwloc-1.5 on our systems and get the following output
</span><br>
<span class="quotelev1">&gt; when I run &quot;lstopo&quot; on a Sun Server M4000 (two quad-core processors with
</span><br>
<span class="quotelev1">&gt; two hardware-threads each).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 101 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (32GB) + NUMANode L#0 (P#1 32GB)
</span><br>
<span class="quotelev1">&gt;   Socket L#0
</span><br>
<span class="quotelev1">&gt;     Core L#0
</span><br>
<span class="quotelev1">&gt;       PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;     Core L#1
</span><br>
<span class="quotelev1">&gt;       PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;       PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;     Core L#2
</span><br>
<span class="quotelev1">&gt;       PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;       PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;     Core L#3
</span><br>
<span class="quotelev1">&gt;       PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;       PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt;   Socket L#1
</span><br>
<span class="quotelev1">&gt;     Core L#4
</span><br>
<span class="quotelev1">&gt;       PU L#8 (P#8)
</span><br>
<span class="quotelev1">&gt;       PU L#9 (P#9)
</span><br>
<span class="quotelev1">&gt;     Core L#5
</span><br>
<span class="quotelev1">&gt;       PU L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;       PU L#11 (P#11)
</span><br>
<span class="quotelev1">&gt;     Core L#6
</span><br>
<span class="quotelev1">&gt;       PU L#12 (P#12)
</span><br>
<span class="quotelev1">&gt;       PU L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;     Core L#7
</span><br>
<span class="quotelev1">&gt;       PU L#14 (P#14)
</span><br>
<span class="quotelev1">&gt;       PU L#15 (P#15)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the command on a Sun Ultra 45 with two single core processors
</span><br>
<span class="quotelev1">&gt; I get the following output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr fd1026 116 lstopo
</span><br>
<span class="quotelev1">&gt; Machine (4096MB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#2 2048MB) + Socket L#0 + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 2048MB) + Socket L#1 + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First question: Why reports &quot;lstopo&quot; two NUMA nodes on a Sun Ultra and
</span><br>
<span class="quotelev1">&gt; only one NUMA node on the M4000 although both machines are equipped
</span><br>
<span class="quotelev1">&gt; with two processors and both machines are running Solaris 10?
</span><br>
<p>Depending on the architecture, you may have one NUMA node containing
<br>
multiple processor sockets (old x86 machines for instance), one NUMA
<br>
node per socket (many modern processors), or even multiple NUMA nodes
<br>
per socket (some AMD processor). I am not familiar enough with Sparc
<br>
processors to compare, but I would bet that some exist in the first and
<br>
second model too.
<br>
<p>Google has some links to a patch adding NUMA support for the Ultra 45 in
<br>
Opensolaris, so the second output would be OK.
<br>
<p>And people say that the lgroup utility confirms that the M4000 is not
<br>
NUMA (which means the first output would be right).
<br>
<p><span class="quotelev1">&gt; I get the following error when I try to bind a process to a core
</span><br>
<span class="quotelev1">&gt; on the M4000 machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 104 hwloc-bind socket:0.core:0 -l date
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
</span><br>
<span class="quotelev1">&gt; Fri Sep 14 07:37:14 CEST 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can use the following command which works for all 16 hardware threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rs0 fd1026 105 hwloc-bind pu:0 -l date
</span><br>
<span class="quotelev1">&gt; Fri Sep 14 07:38:37 CEST 2012
</span><br>
<p>On Solaris, you can't bind to an entire core if it contains multiple
<br>
threads. You have to bind to a single thread (a PU). When each core
<br>
contains a single thread, you're lucky :)
<br>
<p><span class="quotelev1">&gt; Second question: How can I find out which bindings are allowed when
</span><br>
<span class="quotelev1">&gt; I know the output from &quot;lstopo&quot;? I have no idea why I get &quot;errno 18
</span><br>
<span class="quotelev1">&gt; Cross-device link&quot; on the M4000.
</span><br>
<p>That's something we need to think about. We were aware of the limitation
<br>
but we didn't really think about making the user aware of it yet. We
<br>
have a function that returns some information about what hwloc supports
<br>
on the current platform. It could be extended. But if we want to be
<br>
feature complete, we'd need to be able to say:
<br>
1) binding works for random sets of objects (even objects of different
<br>
kinds)
<br>
2) binding works for a single object of this type
<br>
3) binding works on random sets of objects of the same type
<br>
Solaris always has (2) with type=PU (or type=Core if each Core has one
<br>
PU) and optionally has (3) for NUMA node.
<br>
<p>Another solution would be to document that this specific errno means
<br>
that you should try to bind to something smaller, likely a PU (those are
<br>
always supported when binding is supported).
<br>
<p>Keep in mind that we recommend that you run hwloc_bitmap_singlify()
<br>
before binding. This avoids problems with tasks moving from one PU to
<br>
another inside the whole binding.
<br>
<p>The drawback of singlify or binding to smaller on failure is that you
<br>
have to manually distributes tasks if several of them want the same
<br>
binding: Two tasks bound to a whole dual-thread single-core will be well
<br>
distributed by the OS. Two tasks bound to a single thread within this
<br>
core require you to make sure they are not bound to the same thread.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-users] Solaris and hwloc"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Siegmar Gross: "[hwloc-users] Questions to lstopo and hwloc-bind"</a>
<li><strong>In reply to:</strong> <a href="0725.php">Siegmar Gross: "[hwloc-users] Questions to lstopo and hwloc-bind"</a>
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
