<?
$subject_val = "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 17:21:06 2014" -->
<!-- isoreceived="20140423212106" -->
<!-- sent="Wed, 23 Apr 2014 23:21:04 +0200" -->
<!-- isosent="20140423212104" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="53582EC0.1090504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FF62DB79-EC8D-44D7-9743-C849E7872798_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PATCH: Mark fd as close-on-exec<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 17:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4129.php">Jeff Squyres (jsquyres): "[hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4129.php">Jeff Squyres (jsquyres): "[hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks OK to me.
<br>
Brice
<br>
<p><p><p>Le 23/04/2014 23:05, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Any objections to this patch?  In OMPI, we're seeing this fd leak into child processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/src/topology-linux.c b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; index e934d4c..8c5fba1 100644
</span><br>
<span class="quotelev1">&gt; --- a/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; +++ b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; @@ -4601,6 +4601,13 @@ hwloc_linux_component_instantiate(struct hwloc_disc_compo
</span><br>
<span class="quotelev1">&gt;       data-&gt;is_real_fsroot = 0;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; +  /* Since this fd stays open after hwloc returns, mark it as
</span><br>
<span class="quotelev1">&gt; +     close-on-exec so that children don't inherit it */
</span><br>
<span class="quotelev1">&gt; +  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
</span><br>
<span class="quotelev1">&gt; +      close(root);
</span><br>
<span class="quotelev1">&gt; +      root = -1;
</span><br>
<span class="quotelev1">&gt; +      goto out_with_data;
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt;   #else
</span><br>
<span class="quotelev1">&gt;     if (strcmp(fsroot_path, &quot;/&quot;)) {
</span><br>
<span class="quotelev1">&gt;       errno = ENOSYS;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4129.php">Jeff Squyres (jsquyres): "[hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4129.php">Jeff Squyres (jsquyres): "[hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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
