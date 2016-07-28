<?
$subject_val = "Re: [OMPI devel] git mirror";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 29 08:21:58 2012" -->
<!-- isoreceived="20120829122158" -->
<!-- sent="Wed, 29 Aug 2012 07:57:31 -0400" -->
<!-- isosent="20120829115731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] git mirror" -->
<!-- id="AC233F5F-24F2-4558-904F-05218208E355_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="503DC8BB.1090403_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] git mirror<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-29 07:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11455.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11453.php">Yevgeny Kliteynik: "Re: [OMPI devel] git mirror"</a>
<li><strong>In reply to:</strong> <a href="11453.php">Yevgeny Kliteynik: "Re: [OMPI devel] git mirror"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2012, at 3:46 AM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; Anyway, looks like there is a problem with OMPI branches: this git repository seem to have all the relevant branches, but they are not updated. Both 1.6 and 1.7 are branched from the same place, and their latest commit is from Aug 15.
</span><br>
<p><p>Ah.  Can you tell me what I'm doing wrong, then?  The update script looks like this:
<br>
<p>-----
<br>
temp_repository=&quot;/home/ompi-git/ompi-git-svn&quot;
<br>
bare_repository=github
<br>
cd $temp_repository
<br>
<p>git svn fetch --fetch-all
<br>
git merge remotes/trunk
<br>
git push $bare_repository '*:*'
<br>
-----
<br>
<p>How do I get all the branches updated?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11455.php">Shamis, Pavel: "Re: [OMPI devel] r27078 and OMPI build"</a>
<li><strong>Previous message:</strong> <a href="11453.php">Yevgeny Kliteynik: "Re: [OMPI devel] git mirror"</a>
<li><strong>In reply to:</strong> <a href="11453.php">Yevgeny Kliteynik: "Re: [OMPI devel] git mirror"</a>
<!-- nextthread="start" -->
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
