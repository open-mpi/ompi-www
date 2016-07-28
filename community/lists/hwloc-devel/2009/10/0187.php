<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 20:53:06 2009" -->
<!-- isoreceived="20091021005306" -->
<!-- sent="Wed, 21 Oct 2009 02:52:37 +0200" -->
<!-- isosent="20091021005237" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="20091021005237.GV5589_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ADE2C76.4060600_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 20:52:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0188.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1202)"</a>
<li><strong>Previous message:</strong> <a href="0186.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 20 Oct 2009 23:32:38 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; From my quick tests, if you try to build on a non-supported platform,
</span><br>
<span class="quotelev1">&gt; you'll probably get a System object with 1 or N processors depending on
</span><br>
<span class="quotelev1">&gt; whether sysconf is available. So building the topology looks ok. And you
</span><br>
<span class="quotelev1">&gt; get -1 and ENOSYS if you try to bind.
</span><br>
<p>Yes, it was meant to have a reasonable behavior even on an unsupported
<br>
OS. Systems that don't provide the sysconf are probably pretty rare, the
<br>
only I know is OSF IIRC, for which we have a port.
<br>
<p><span class="quotelev1">&gt; I am not sure how hard it'd be to avoid errors during configure. Are we
</span><br>
<span class="quotelev1">&gt; sure PKG_* macros or other external things will never use AC_MSG_ERROR ?
</span><br>
<p>In principle ac macros always have an &quot;what if not found&quot; part which
<br>
allows us to fallback nicely.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0188.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1202)"</a>
<li><strong>Previous message:</strong> <a href="0186.php">Jeff Squyres: "Re: [hwloc-devel] v0.9 branch"</a>
<li><strong>In reply to:</strong> <a href="0180.php">Brice Goglin: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Reply:</strong> <a href="0189.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
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
