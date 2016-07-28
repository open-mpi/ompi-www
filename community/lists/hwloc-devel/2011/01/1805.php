<?
$subject_val = "Re: [hwloc-devel] Docs updates";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 19:11:14 2011" -->
<!-- isoreceived="20110107001114" -->
<!-- sent="Fri, 7 Jan 2011 01:11:06 +0100" -->
<!-- isosent="20110107001106" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Docs updates" -->
<!-- id="20110107001106.GI5800_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1521051584.2616189.1294358469283.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Docs updates<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 19:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1806.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3053)"</a>
<li><strong>Previous message:</strong> <a href="1804.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Maybe in reply to:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1812.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Reply:</strong> <a href="1812.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher Samuel, le Fri 07 Jan 2011 01:01:09 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; # Hwloc provides both functions that set the current memory
</span><br>
<span class="quotelev1">&gt; # binding policies (if supported), and functions that allocate
</span><br>
<span class="quotelev1">&gt; # memory bound to specific node set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I suggest either dropping &quot;both&quot; or instead saying:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ Hwloc provides functions that both set the current memory
</span><br>
<span class="quotelev1">&gt; $ binding policies (if supported) and that allocate memory
</span><br>
<span class="quotelev1">&gt; $ bound to specific node set.
</span><br>
<p>Mmm, it's not exactly the same meaning.  I can't find that sentence in
<br>
the current trunk, where is it?
<br>
<p>Just to explain my concern, hwloc provides
<br>
- a function that sets the current memory binding policy
<br>
- a function that allocates memory bound to specific node set
<br>
- a helper that sets the current memory binding policy, allocates
<br>
&nbsp;&nbsp;memory, and touches it to enforce the policy.
<br>
<p>Your formulation looks like the 3rd case, which is not the same as the
<br>
two first ones.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1806.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3053)"</a>
<li><strong>Previous message:</strong> <a href="1804.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Maybe in reply to:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1812.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Reply:</strong> <a href="1812.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
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
