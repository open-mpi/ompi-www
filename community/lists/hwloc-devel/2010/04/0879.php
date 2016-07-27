<?
$subject_val = "Re: [hwloc-devel] rc1?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  3 18:32:30 2010" -->
<!-- isoreceived="20100403223230" -->
<!-- sent="Sun, 04 Apr 2010 00:32:24 +0200" -->
<!-- isosent="20100403223224" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] rc1?" -->
<!-- id="4BB7C1F8.9060606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100401172312.GX4967_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] rc1?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-03 18:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Previous message:</strong> <a href="0878.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1902)"</a>
<li><strong>In reply to:</strong> <a href="0850.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0886.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Brice Goglin, le Thu 01 Apr 2010 19:13:23 +0200, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There have been a few commits today -- are we ready for rc1?  Give me the word and I'll make it.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I am done now (r1895).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to fix the MISC objects so they are not ignored.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't like where we're going with Misc objects. I don't see why
<br>
&quot;regular&quot; Misc objects (those added by OS backends) should be
<br>
handled/ignored differently just because &quot;user-added&quot; Misc objects have
<br>
special requirements. As I said in the past, we're trying to address 2
<br>
different issues. I said we could have a &quot;Group&quot; type to replace the
<br>
current meaning of &quot;Misc&quot; and keep &quot;Misc&quot; for user-added objects only. A
<br>
better solution for backward compatibility would be to keep current
<br>
&quot;Misc&quot; objects as is, and change user-added objects to a new type such
<br>
as HWLOC_OBJ_USER or CUSTOM. Then only the later needs a quirk in the
<br>
ignore code.
<br>
<p>By the way, instead of delaying the release while we discuss this and
<br>
wait for your fix, we could mark hwloc_topology_insert_misc*() as
<br>
experimental or even undocument it for now, release 1.0-rc1, and bring
<br>
it back later if/when it's ready.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Previous message:</strong> <a href="0878.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1902)"</a>
<li><strong>In reply to:</strong> <a href="0850.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0886.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
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
