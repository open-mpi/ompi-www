<?
$subject_val = "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 14:54:29 2014" -->
<!-- isoreceived="20140424185429" -->
<!-- sent="Thu, 24 Apr 2014 11:54:27 -0700" -->
<!-- isosent="20140424185427" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="CAAvDA17b3nvVUWmGa8CRWb3Hv+J8NP2-tCDTtYsREJWy5MRzqA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B26F669D-4885-4523-AC54-DD35D2698F59_at_cisco.com" -->
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
<strong>Date:</strong> 2014-04-24 14:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/05/4146.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-157-g69eb9e7)"</a>
<li><strong>Previous message:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4134.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That looks good to me.
<br>
<p>-Paul [the paranoid portability policeman]
<br>
<p><p>On Thu, Apr 24, 2014 at 3:41 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Apr 23, 2014, at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul [Who always does what the late W. Richard Stevens says to.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You make a good point, sir.  How about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/src/topology-linux.c b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; index 25fb465..c9dc7e2 100644
</span><br>
<span class="quotelev1">&gt; --- a/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; +++ b/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; @@ -4568,7 +4568,7 @@ hwloc_linux_component_instantiate(struct
</span><br>
<span class="quotelev1">&gt; hwloc_disc_compon
</span><br>
<span class="quotelev1">&gt;    struct hwloc_backend *backend;
</span><br>
<span class="quotelev1">&gt;    struct hwloc_linux_backend_data_s *data;
</span><br>
<span class="quotelev1">&gt;    const char * fsroot_path = _data1;
</span><br>
<span class="quotelev1">&gt; -  int root = -1;
</span><br>
<span class="quotelev1">&gt; +  int flags, root = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    backend = hwloc_backend_alloc(component);
</span><br>
<span class="quotelev1">&gt;    if (!backend)
</span><br>
<span class="quotelev1">&gt; @@ -4602,8 +4602,11 @@ hwloc_linux_component_instantiate(struct
</span><br>
<span class="quotelev1">&gt; hwloc_disc_compo
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* Since this fd stays open after hwloc returns, mark it as
</span><br>
<span class="quotelev1">&gt; -     close-on-exec so that children don't inherit it */
</span><br>
<span class="quotelev1">&gt; -  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
</span><br>
<span class="quotelev1">&gt; +     close-on-exec so that children don't inherit it.  Stevens says
</span><br>
<span class="quotelev1">&gt; +     that we should GETFD before we SETFD, so we do. */
</span><br>
<span class="quotelev1">&gt; +  flags = fcntl(root, F_GETFD, 0);
</span><br>
<span class="quotelev1">&gt; +  if (-1 == flags ||
</span><br>
<span class="quotelev1">&gt; +      -1 == fcntl(root, F_SETFD, FD_CLOEXEC | flags)) {
</span><br>
<span class="quotelev1">&gt;        close(root);
</span><br>
<span class="quotelev1">&gt;        root = -1;
</span><br>
<span class="quotelev1">&gt;        goto out_with_data;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/05/4146.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-157-g69eb9e7)"</a>
<li><strong>Previous message:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>In reply to:</strong> <a href="4144.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4134.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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
