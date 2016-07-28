<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 08:09:32 2010" -->
<!-- isoreceived="20100922120932" -->
<!-- sent="Wed, 22 Sep 2010 14:09:27 +0200" -->
<!-- isosent="20100922120927" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="4C99F1F7.9030802_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6740458-0123-4AEA-8583-1696AB3B0742_at_cisco.com" -->
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
<strong>Date:</strong> 2010-09-22 08:09:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/09/2010 13:36, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 22, 2010, at 4:38 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; There are still some problems to solve in the membind branch:
</span><br>
<span class="quotelev2">&gt;&gt; * Some OS bind the process too when you bind memory. I see the following
</span><br>
<span class="quotelev2">&gt;&gt; solutions:
</span><br>
<span class="quotelev2">&gt;&gt;  + Add a flag such as HWLOC_MEMBIND_EVEN_IF_FAR_FROM_PROCESS so that
</span><br>
<span class="quotelev2">&gt;&gt; the user can explicitly refuse memory binding if it may break process
</span><br>
<span class="quotelev2">&gt;&gt; binding
</span><br>
<span class="quotelev2">&gt;&gt;  + Drop hwloc_set_membind on these OSes and add a
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_cpumembind() to bind both
</span><br>
<span class="quotelev2">&gt;&gt;  + Make both process and memory binding do nothing if the STRICT flag
</span><br>
<span class="quotelev2">&gt;&gt; is given. But I'd rather not play too much with this flag.
</span><br>
<span class="quotelev2">&gt;&gt;  + Drop support for memory binding on these OS.
</span><br>
<span class="quotelev2">&gt;&gt;  + Drop these OS.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; What OS's are you specifically referring to?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>IIRC, it was AIX and Solaris.
<br>
<p><span class="quotelev1">&gt;  How about adding a query function that says what will happen for hwloc_set_membind()
</span><br>
<p>I like it, we can put this in the output of hwloc_topology_get_support.
<br>
<p>I wonder if there are some other cases where the STRICT flag could be
<br>
dropped in favor of such an informative stuff.
<br>
<p><p><span class="quotelev1">&gt; Just curious -- on these OS's, what happens if you:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - bind proc to A
</span><br>
<span class="quotelev1">&gt; - bind memory to B (which then also re-binds proc to B)
</span><br>
<span class="quotelev1">&gt; - re-bind proc to A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the memory binding then lost?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I'll let Samuel comment on this.
<br>
<p><span class="quotelev2">&gt;&gt; * cpuset and nodeset structures are the same, they are both manipulated
</span><br>
<span class="quotelev2">&gt;&gt; with hwloc_cpuset_foo functions. So maybe rename into hwloc_set_t and
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_set_foo functions. With #define and aliases to not break API/ABIs.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I'm in favor of this -- it would end the overloading of the term &quot;cpuset&quot; between hwloc and cpuset.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>hwloc_set_*? hwloc_objset* ? Anything better?
<br>
<p>hwloc_set_* might not be the best since we would have a hwloc_set_set()
<br>
function to set one bit :)
<br>
<p>By the way, hwloc_cpuset_cpu() and hwloc_cpuset_all_but_cpu() should be
<br>
renamed too. hwloc_set_onlyone() and hwloc_set_allbutone() maybe?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1334.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
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
