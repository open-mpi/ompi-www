<?
$subject_val = "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 18:04:52 2014" -->
<!-- isoreceived="20140423220452" -->
<!-- sent="Wed, 23 Apr 2014 15:04:50 -0700" -->
<!-- isosent="20140423220450" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="CAAvDA17cZeKpOYov+=5oYBSeViHOKmACAYO0qzyKGchQQxU1VQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0923386-5521-4426-8941-440AAD70E2AE_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 18:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4134.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4132.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4132.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In order to preserve any existing flags, shouldn't this be more like:
<br>
&nbsp;&nbsp;int prev;
<br>
&nbsp;&nbsp;if ((-1 == (prev =  fcntl(root, F_GETFD, 0)) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(-1 == fcntl(root, F_SETFD, FD_CLOEXEC | prev)))
<br>
<p><p><p><p>On Wed, Apr 23, 2014 at 2:55 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Will do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2014, at 5:52 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres (jsquyres), le Wed 23 Apr 2014 21:05:55 +0000, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any objections to this patch?  In OMPI, we're seeing this fd leak into
</span><br>
<span class="quotelev1">&gt; child processes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; diff --git a/src/topology-linux.c b/src/topology-linux.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; index e934d4c..8c5fba1 100644
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- a/src/topology-linux.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ b/src/topology-linux.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -4601,6 +4601,13 @@ hwloc_linux_component_instantiate(struct
</span><br>
<span class="quotelev1">&gt; hwloc_disc_compo
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     data-&gt;is_real_fsroot = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We probably want an #ifdef FD_CLOEXEC here, not all systems have it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  /* Since this fd stays open after hwloc returns, mark it as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +     close-on-exec so that children don't inherit it */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      close(root);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      root = -1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +      goto out_with_data;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +  }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #else
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   if (strcmp(fsroot_path, &quot;/&quot;)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     errno = ENOSYS;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Samuel
</span><br>
<span class="quotelev2">&gt; &gt; Je suis maintenant possesseur d'un ordinateur portable Compaq Armada
</span><br>
<span class="quotelev2">&gt; &gt; 1592DT avec port infra-rouge. Auriez-vous connaissance de programmes
</span><br>
<span class="quotelev2">&gt; &gt; suceptibles d'utiliser ce port afin de servir de t&#233;l&#233;commande ?
</span><br>
<span class="quotelev2">&gt; &gt; -+- JN in NPC : ben quoi, c'est pas &#224; &#231;a que &#231;a sert ?
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4134.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4132.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4132.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4135.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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
