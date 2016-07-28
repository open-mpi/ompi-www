<?
$subject_val = "Re: [hwloc-devel] Why are misc objects ignored by default?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 17:55:27 2010" -->
<!-- isoreceived="20100310225527" -->
<!-- sent="Wed, 10 Mar 2010 23:55:21 +0100" -->
<!-- isosent="20100310225521" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Why are misc objects ignored by default?" -->
<!-- id="4B982359.9010801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100310224504.GC4836_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Why are misc objects ignored by default?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 17:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0729.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<li><strong>Previous message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>In reply to:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev2">&gt;&gt; I guess what we called &quot;Fake&quot; or &quot;Misc&quot; has evolved a bit. In the
</span><br>
<span class="quotelev2">&gt;&gt; beginning, it was more some &quot;strange&quot; stuff that could be ignored if it
</span><br>
<span class="quotelev2">&gt;&gt; didn't bring any new structure. Now it's more about &quot;misc&quot; stuff for real.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, well, the code hasn't changed, now I remember: the issue is with
</span><br>
<span class="quotelev1">&gt; AIX, which does still report a lot of strange stuff. Maybe the AIX
</span><br>
<span class="quotelev1">&gt; backend should tell which objects could be dropped instead of the
</span><br>
<span class="quotelev1">&gt; converse.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>IIRC, you said in the past we could have a special type for &quot;groups&quot; of
<br>
objects, especially NUMA groups generated from distances. Maybe we could
<br>
indeed add a &quot;Group&quot; type for this special case and  for strange objects
<br>
that some OS add. Those could be ignored by default when they don't
<br>
bring any structure. The only purpose of these objects is to add more
<br>
structure to the topology.
<br>
<p>Then keep &quot;Misc&quot; for really &quot;misc&quot; stuff that we don't want to ignore by
<br>
default anyhow (user-defined annotations, ...) since those bring
<br>
information without structure.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0729.php">Bert Wesarg: "[hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<li><strong>Previous message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>In reply to:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
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
