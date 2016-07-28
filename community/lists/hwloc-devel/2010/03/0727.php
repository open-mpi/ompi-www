<?
$subject_val = "Re: [hwloc-devel] Why are misc objects ignored by default?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 17:45:09 2010" -->
<!-- isoreceived="20100310224509" -->
<!-- sent="Wed, 10 Mar 2010 23:45:04 +0100" -->
<!-- isosent="20100310224504" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Why are misc objects ignored by default?" -->
<!-- id="20100310224504.GC4836_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B97FF05.1030207_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 17:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Previous message:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>In reply to:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Reply:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 10 Mar 2010 21:20:21 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; In hwloc_topology_init(), topology-&gt;ignored_types[HWLOC_OBJ_MISC] is set
</span><br>
<span class="quotelev2">&gt; &gt; to HWLOC_IGNORE_TYPE_KEEP_STRUCTURE by default.  Is there a reason for
</span><br>
<span class="quotelev2">&gt; &gt; it?  The problem is that there is no option to change that...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: thibault &lt;thibault_at_4b44e086-7f34-40ce-a3bd-00e031736276&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed May 27 13:40:13 2009 +0000
</span><br>
<p>Oops, thanks, indeed that's mine :)
<br>
<p><span class="quotelev1">&gt; I guess what we called &quot;Fake&quot; or &quot;Misc&quot; has evolved a bit. In the
</span><br>
<span class="quotelev1">&gt; beginning, it was more some &quot;strange&quot; stuff that could be ignored if it
</span><br>
<span class="quotelev1">&gt; didn't bring any new structure. Now it's more about &quot;misc&quot; stuff for real.
</span><br>
<p>Mmm, well, the code hasn't changed, now I remember: the issue is with
<br>
AIX, which does still report a lot of strange stuff. Maybe the AIX
<br>
backend should tell which objects could be dropped instead of the
<br>
converse.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Previous message:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>In reply to:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<li><strong>Reply:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
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
