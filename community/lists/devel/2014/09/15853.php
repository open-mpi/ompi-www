<?
$subject_val = "Re: [OMPI devel] ompi-tests SVN repo has been moved to Github";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 18:41:57 2014" -->
<!-- isoreceived="20140916224157" -->
<!-- sent="Tue, 16 Sep 2014 22:41:56 +0000" -->
<!-- isosent="20140916224156" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-tests SVN repo has been moved to Github" -->
<!-- id="F55A8D53-6B00-48B5-8CA4-4F234294E694_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1A3715A3-3CF9-4219-A624-7CF733E3FAB8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-tests SVN repo has been moved to Github<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 18:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15854.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15852.php">Ralph Castain: "Re: [OMPI devel] PSM MTl work with srun launch?"</a>
<li><strong>In reply to:</strong> <a href="15850.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-tests SVN repo has been moved to Github"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two things:
<br>
<p>1. Ensure to &quot;git pull --rebase&quot; on your MTT to get the latest updates to MTT.
<br>
<p>2. Update your INI files something like this (subset of a patch):
<br>
<p>[Test get: ibm]
<br>
module = SCM
<br>
-scm_module = SVN
<br>
-scm_url = svn://savbu-usnic.cisco.com/ompi-tests/trunk/ibm
<br>
+scm_module = Git
<br>
+scm_url = /home/mpiteam/mirror-git/ompi-tests
<br>
+scm_subdir = ibm
<br>
<p>Note the changes:
<br>
- SVN -&gt; Git
<br>
- URL change (notice that I happen to have a local cache of the git repo, but you can put in a git:// or https:// URL here, too)
<br>
- new field: scm_subdir.  In SVN, we could just check out the &quot;trunk/ibm&quot; part of the SVN repo.  But you can only clone the entire repo in Git, so the new field specifies the subdir you want MTT to operate in inside the clone.  Hence, we specify &quot;ibm&quot; here.
<br>
<p>Feel free to look at ompi-tests/cisco/community/*ini for some examples.
<br>
<p><p><p><p>On Sep 16, 2014, at 3:41 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good question.  Info coming shortly (i.e., I'm updating mine right now; will share the results).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 16, 2014, at 3:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And we need to modify our .ini scripts....how?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 16, 2014, at 12:22 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ompi-tests SVN repo has been moved to Github.  The SVN repo is now in read-only mode.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just like the SVN ompi-tests repo, the Github ompi-tests repo is private.  You need to be an active organization in Open MPI to be able to access it.  You can use your developer Github ID or you can request the read-only account password from me (e.g., if you were having MTT use the &quot;ompi-tests&quot; account for SVN access).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are strongly encouraged to update your MTT to fetch from the new Github repo:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="https://github.com/open-mpi/ompi-tests">https://github.com/open-mpi/ompi-tests</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15847.php">http://www.open-mpi.org/community/lists/devel/2014/09/15847.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15848.php">http://www.open-mpi.org/community/lists/devel/2014/09/15848.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15850.php">http://www.open-mpi.org/community/lists/devel/2014/09/15850.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15854.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15852.php">Ralph Castain: "Re: [OMPI devel] PSM MTl work with srun launch?"</a>
<li><strong>In reply to:</strong> <a href="15850.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-tests SVN repo has been moved to Github"</a>
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
