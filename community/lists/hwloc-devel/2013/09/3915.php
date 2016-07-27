<?
$subject_val = "Re: [hwloc-devel] git / nightly builds";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 29 10:32:52 2013" -->
<!-- isoreceived="20130929143252" -->
<!-- sent="Sun, 29 Sep 2013 16:32:45 +0200" -->
<!-- isosent="20130929143245" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] git / nightly builds" -->
<!-- id="52483A0D.6090804_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F906362_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] git / nightly builds<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-29 10:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3916.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/10/3920.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/10/3920.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/09/2013 14:00, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Agreed. Let's have distscript.csh be the one that sets the
</span><br>
<span class="quotelev1">&gt; git-describe value in VERSION (more below) 
</span><br>
<p>Ok thanks, much better.
<br>
<p>Now why do we still need a call to git-describe in get_version.sh? Isn't
<br>
this script supposed to just read what distscript.csh did? (which would
<br>
mean that &quot;if test -z &quot;$HWLOC_SNAPSHOT_VERSION&quot; is useless). Or do you
<br>
need that as a fallback for when we compile instead of doing make dist?
<br>
In one case, we force the snapshot by modifying VERSION (make dist), in
<br>
the other case we git describe at runtime (make). Itwould be good to
<br>
merge these two cases somehow.
<br>
<p><span class="quotelev1">&gt; 2. contrib/nightly/make_snapshot_tarball:
</span><br>
<span class="quotelev1">&gt;    - Invoked via cron on the build machine
</span><br>
<span class="quotelev1">&gt;    - Very specifically written to interact with the web download tree
</span><br>
<span class="quotelev1">&gt;    - Generally does the following:
</span><br>
<span class="quotelev1">&gt;      a) Gets a new git clone (into a unique directory)
</span><br>
<span class="quotelev1">&gt;      b) Compares output from &quot;git describe ...&quot; to latest_snapshot.txt
</span><br>
<span class="quotelev1">&gt;      c) If they're the same, exit 0
</span><br>
<span class="quotelev1">&gt;         --&gt; If there are no commits since last tarball, no need to do anything
</span><br>
<span class="quotelev1">&gt;      d) Run autogen, configure, make distcheck.
</span><br>
<span class="quotelev1">&gt;      e) Move resulting tarballs to the web download directory
</span><br>
<span class="quotelev1">&gt;      e) Re-generate md5sums.txt/sha1sums.txt
</span><br>
<p>Ok I didn't know that there was so website-specific things in that
<br>
script. I assumed it was mainly a make distcheck (if so, I would have
<br>
tried to reuse it in the regression testing tool).
<br>
<p><span class="quotelev1">&gt; However, for the other cases, I think that doxygen is our main culprit for complexity.  :-\  Meaning: I'm now not sure how to make them simpler...
</span><br>
<p>Yes, there's likely no way to simplify that much.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3916.php">Paul Hargrove: "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Previous message:</strong> <a href="3914.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>In reply to:</strong> <a href="3913.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/10/3920.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/10/3920.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] git / nightly builds"</a>
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
