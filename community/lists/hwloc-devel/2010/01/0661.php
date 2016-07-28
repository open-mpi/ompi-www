<?
$subject_val = "Re: [hwloc-devel] random api questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 30 12:17:37 2010" -->
<!-- isoreceived="20100130171737" -->
<!-- sent="Sat, 30 Jan 2010 18:17:31 +0100" -->
<!-- isosent="20100130171731" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] random api questions" -->
<!-- id="4B6469AB.2010100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100130165725.GU4798_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] random api questions<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-30 12:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0660.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0663.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0663.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0664.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Yes, if we weren't wanting to express contradictory things it'd be way
</span><br>
<span class="quotelev1">&gt; simpler, but we want to.  I don't believe duplicating information will
</span><br>
<span class="quotelev1">&gt; help the programmer to understand things.  For now, I can see three
</span><br>
<span class="quotelev1">&gt; usage cases:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - An application wants to bind itself somewhere.  That's what the
</span><br>
<span class="quotelev1">&gt;   default configuration is meant for.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; - A global monitoring application wants to check which processors are
</span><br>
<span class="quotelev1">&gt;   online/allowed and where applications are running etc.  That's what
</span><br>
<span class="quotelev1">&gt;   the HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM flag helps for.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Wait, does WHOLE_SYSTEM also toggle the ignoring of offline_cpus in
<br>
obj-&gt;cpuset? The documentation doesn't say so, but the code seems to
<br>
implement it. That would the best behavior.
<br>
<p>By the way, lstopo --whole-system fails on my dual-core machine when
<br>
core#1 is offline and debug is enabled:
<br>
Propagate total memory up
<br>
1853: hwloc__check_children: Assertion
<br>
`hwloc_cpuset_iszero(remaining_parent_set)' failed.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>In reply to:</strong> <a href="0660.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0663.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0663.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
<li><strong>Reply:</strong> <a href="0664.php">Samuel Thibault: "Re: [hwloc-devel] random api questions"</a>
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
