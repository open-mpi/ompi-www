<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:23:32 2010" -->
<!-- isoreceived="20100922142332" -->
<!-- sent="Wed, 22 Sep 2010 16:23:27 +0200" -->
<!-- isosent="20100922142327" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="20100922142326.GC23167_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="911088223.957900.1285144718613.JavaMail.root_at_zmbs2.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe in reply to:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 22 Sep 2010 10:38:38 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; * Some OS bind the process too when you bind memory.
</span><br>
<p>Not for all kinds of memory bindings. For now, nothing that has been
<br>
commited does that, it's only the remaining TODOs. The bindings in
<br>
question are policy binding, i.e. not binding some given area or
<br>
explicitly allocating some given size.
<br>
<p><span class="quotelev1">&gt;   + Add a flag such as HWLOC_MEMBIND_EVEN_IF_FAR_FROM_PROCESS
</span><br>
<p>The length of the word tells me that won't be convenient :)
<br>
<p><span class="quotelev1">&gt; so that the user can explicitly refuse memory binding if it may break
</span><br>
<span class="quotelev1">&gt; process binding
</span><br>
<p><span class="quotelev1">&gt;   + Drop hwloc_set_membind on these OSes and add a
</span><br>
<span class="quotelev1">&gt; hwloc_set_cpumembind() to bind both
</span><br>
<p>That's the solution I prefer most as it directly maps to existing OS
<br>
practice
<br>
<p><span class="quotelev1">&gt;   + Make both process and memory binding do nothing if the STRICT flag
</span><br>
<span class="quotelev1">&gt; is given. But I'd rather not play too much with this flag.
</span><br>
<p>Yes. We should not put too vague semantic on this.
<br>
<p><span class="quotelev1">&gt;   + Drop support for memory binding on these OS.
</span><br>
<p>Not all support, just setting the policy.
<br>
<p><span class="quotelev1">&gt;   + Drop these OS.
</span><br>
<p>Nope :)
<br>
<p><span class="quotelev1">&gt; * cpuset and nodeset structures are the same, they are both manipulated
</span><br>
<span class="quotelev1">&gt; with hwloc_cpuset_foo functions. So maybe rename into hwloc_set_t and
</span><br>
<span class="quotelev1">&gt; hwloc_set_foo functions. With #define and aliases to not break API/ABIs.
</span><br>
<p>I'd say so.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1337.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Maybe in reply to:</strong> <a href="1333.php">Brice Goglin: "[hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1339.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
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
