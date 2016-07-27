<?
$subject_val = "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 18 17:58:40 2010" -->
<!-- isoreceived="20100318215840" -->
<!-- sent="Thu, 18 Mar 2010 22:58:35 +0100" -->
<!-- isosent="20100318215835" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()" -->
<!-- id="4BA2A20B.9080508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1268861926-19792-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-18 17:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0772.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>In reply to:</strong> <a href="0769.php">Bert Wesarg: "[hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0772.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Reply:</strong> <a href="0772.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg wrote:
<br>
<span class="quotelev1">&gt; Make the linux backend more re-entrant safe by using readdir_r() instead
</span><br>
<span class="quotelev1">&gt; of readdir().
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Changing so many lines because of bugs that don't exist yet doesn't look
<br>
like a good idea to me. If we ever want to parallelize the bottom of the
<br>
discovery stack (or whatever needs reentrancy in such very low-level
<br>
discovery routines), there will be many other changes to do anyway. So
<br>
we'll see later, when we'll know what we want and where we actually need
<br>
reentrancy.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0772.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>In reply to:</strong> <a href="0769.php">Bert Wesarg: "[hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0772.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Reply:</strong> <a href="0772.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
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
