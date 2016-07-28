<?
$subject_val = "Re: [hwloc-devel] rc1?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  4 07:54:04 2010" -->
<!-- isoreceived="20100404115404" -->
<!-- sent="Sun, 4 Apr 2010 13:53:59 +0200" -->
<!-- isosent="20100404115359" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] rc1?" -->
<!-- id="20100404115358.GM6455_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BB7C1F8.9060606_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-04 07:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0881.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>Previous message:</strong> <a href="0879.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<li><strong>In reply to:</strong> <a href="0879.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0895.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0895.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sun 04 Apr 2010 00:32:24 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; As I said in the past, we're trying to address 2
</span><br>
<span class="quotelev1">&gt; different issues. I said we could have a &quot;Group&quot; type to replace the
</span><br>
<span class="quotelev1">&gt; current meaning of &quot;Misc&quot; and keep &quot;Misc&quot; for user-added objects only.
</span><br>
<p>That's what I meant by &quot;fixing&quot; misc objects, and just did in r1906.
<br>
<p><span class="quotelev1">&gt; A better solution for backward compatibility would be to keep current
</span><br>
<span class="quotelev1">&gt; &quot;Misc&quot; objects as is, and change user-added objects to a new type such
</span><br>
<span class="quotelev1">&gt; as HWLOC_OBJ_USER or CUSTOM. Then only the later needs a quirk in the
</span><br>
<span class="quotelev1">&gt; ignore code.
</span><br>
<p>We have already broken the backward compatibility in a lot of ways, so
<br>
I believe it's better to just name NUMA and AIX groups as &quot;groups&quot;, and
<br>
not just &quot;misc&quot;, so misc can be used for really various things, be it
<br>
user-provided, top-provided, or plugin-provided, etc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0881.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>Previous message:</strong> <a href="0879.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<li><strong>In reply to:</strong> <a href="0879.php">Brice Goglin: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0895.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<li><strong>Reply:</strong> <a href="0895.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
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
