<?
$subject_val = "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 18:25:19 2010" -->
<!-- isoreceived="20100318222519" -->
<!-- sent="Thu, 18 Mar 2010 23:25:05 +0100" -->
<!-- isosent="20100318222505" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()" -->
<!-- id="20100318222505.GH4788_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BA2A20B.9080508_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 18:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>In reply to:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0773.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Reply:</strong> <a href="0773.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 18 Mar 2010 22:58:35 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Make the linux backend more re-entrant safe by using readdir_r() instead
</span><br>
<span class="quotelev2">&gt; &gt; of readdir().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changing so many lines because of bugs that don't exist yet doesn't
</span><br>
<span class="quotelev1">&gt; look like a good idea to me.
</span><br>
<p>Err, they do already exist.  We've just documented that it was safe to
<br>
work on separate topology objects in different threads, so readdir is
<br>
indeed an issue :)
<br>
<p><span class="quotelev1">&gt; If we ever want to parallelize the bottom of the discovery stack (or
</span><br>
<span class="quotelev1">&gt; whatever needs reentrancy in such very low-level discovery routines),
</span><br>
<p>It's not about parallelization of the backend here, but about the
<br>
application calling it several times in parallel.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0773.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>In reply to:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0773.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Reply:</strong> <a href="0773.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
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
