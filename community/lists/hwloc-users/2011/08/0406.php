<?
$subject_val = "Re: [hwloc-users] Magny Cours L3 cache issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 18:14:28 2011" -->
<!-- isoreceived="20110815221428" -->
<!-- sent="Tue, 16 Aug 2011 00:14:24 +0200" -->
<!-- isosent="20110815221424" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Magny Cours L3 cache issue" -->
<!-- id="20110815221424.GX18853_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="310017181.2010682.1313446301088.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Magny Cours L3 cache issue<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 18:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">PULVERAIL Sébastien: "[hwloc-users] lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Wheeler, Kyle Bruce: "[hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="0405.php">Wheeler, Kyle Bruce: "[hwloc-users] Magny Cours L3 cache issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0412.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Reply:</strong> <a href="0412.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wheeler, Kyle Bruce, le Tue 16 Aug 2011 00:11:41 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm having the problem that my Magny Cours system is being identified (via hwloc-ls) as sharing an L3 cache between the NUMAnodes on a single socket. I know that this is not actually true, and I don't know how to begin debugging hwloc to see why it thinks that about the L3 cache. Thoughts?
</span><br>
<p>I guess you have updated to the latest Linux kernel version?
<br>
If the problem persists, please attach the output of lstopo after having
<br>
given the --enable-debug option to ./configure and rebuilt completely,
<br>
to get debugging output. Also attach the /proc + /sys tarball generated
<br>
by the installed script hwloc-gather-topology.sh
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">PULVERAIL Sébastien: "[hwloc-users] lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Wheeler, Kyle Bruce: "[hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Maybe in reply to:</strong> <a href="0405.php">Wheeler, Kyle Bruce: "[hwloc-users] Magny Cours L3 cache issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0412.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
<li><strong>Reply:</strong> <a href="0412.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] Magny Cours L3 cache issue"</a>
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
