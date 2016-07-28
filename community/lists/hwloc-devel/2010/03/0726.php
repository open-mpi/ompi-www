<?
$subject_val = "Re: [hwloc-devel] Why are misc objects ignored by default?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 15:20:27 2010" -->
<!-- isoreceived="20100310202027" -->
<!-- sent="Wed, 10 Mar 2010 21:20:21 +0100" -->
<!-- isosent="20100310202021" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Why are misc objects ignored by default?" -->
<!-- id="4B97FF05.1030207_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100310185705.GA16831_at_const.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2010-03-10 15:20:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Samuel Thibault: "[hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>In reply to:</strong> <a href="0725.php">Samuel Thibault: "[hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Reply:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In hwloc_topology_init(), topology-&gt;ignored_types[HWLOC_OBJ_MISC] is set
</span><br>
<span class="quotelev1">&gt; to HWLOC_IGNORE_TYPE_KEEP_STRUCTURE by default.  Is there a reason for
</span><br>
<span class="quotelev1">&gt; it?  The problem is that there is no option to change that...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>commit 511237a65a6eca12ffd9cf2c08161788361cd93a
<br>
Author: thibault &lt;thibault_at_4b44e086-7f34-40ce-a3bd-00e031736276&gt;
<br>
Date:   Wed May 27 13:40:13 2009 +0000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Let OSes provide whatever they can find at worse through fake
<br>
objects without completely cluttering the output.
<br>
<p><p><p><p>I guess what we called &quot;Fake&quot; or &quot;Misc&quot; has evolved a bit. In the
<br>
beginning, it was more some &quot;strange&quot; stuff that could be ignored if it
<br>
didn't bring any new structure. Now it's more about &quot;misc&quot; stuff for real.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Previous message:</strong> <a href="0725.php">Samuel Thibault: "[hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>In reply to:</strong> <a href="0725.php">Samuel Thibault: "[hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Reply:</strong> <a href="0727.php">Samuel Thibault: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
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
