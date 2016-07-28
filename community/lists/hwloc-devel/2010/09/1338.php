<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:47:04 2010" -->
<!-- isoreceived="20100922144704" -->
<!-- sent="Wed, 22 Sep 2010 16:46:58 +0200" -->
<!-- isosent="20100922144658" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="4C9A16E2.3020500_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B36DC200-6CA6-4B8C-9013-817AA1E19AD9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/09/2010 16:30, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 22, 2010, at 8:09 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_*? hwloc_objset* ? Anything better?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_* might not be the best since we would have a hwloc_set_set()
</span><br>
<span class="quotelev2">&gt;&gt; function to set one bit :)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Agreed.  Too bad, though -- I liked hwloc_set*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_group* (that seems kinda lame, though)
</span><br>
<span class="quotelev1">&gt; hwloc_stuff* (hah)
</span><br>
<span class="quotelev1">&gt; hwloc_bitmap*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>bitmap or bitmask would be acceptable to me.
<br>
<p><span class="quotelev2">&gt;&gt; By the way, hwloc_cpuset_cpu() and hwloc_cpuset_all_but_cpu() should be
</span><br>
<span class="quotelev2">&gt;&gt; renamed too. hwloc_set_onlyone() and hwloc_set_allbutone() maybe?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; How about just hwloc_set() which takes a single position parameter?  &quot;onlyone&quot; can be implied.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>In case you missed it: cpu() = zero() + set() and all_but_cpu() = fill()
<br>
+ clr()
<br>
Maybe just drop these?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
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
