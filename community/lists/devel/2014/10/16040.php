<?
$subject_val = "Re: [OMPI devel] Pull requests to release branch";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 05:04:36 2014" -->
<!-- isoreceived="20141011090436" -->
<!-- sent="Sat, 11 Oct 2014 02:04:31 -0700" -->
<!-- isosent="20141011090431" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pull requests to release branch" -->
<!-- id="AB16B196-9016-4763-92CA-75017928DCEE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C7CC17E6-2592-480A-8793-87C6C0049D7E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Pull requests to release branch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-11 05:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16041.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>Previous message:</strong> <a href="16039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>In reply to:</strong> <a href="16037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pull requests to release branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I updated the wiki to explain the rest of the process when discussion causes changes to the pull request:
<br>
<p>Once the Pull Request is filed, there can be discussion on the PR. It is critical that any changes resulting from the discussion be first committed to the `ompi` repo on Github so they can be tested by the community prior to moving them to the release branch. Once the changes have been pushed to the `ompi` repo, the Pull Request should be updated and a commit message containing the revision's `master` hash added. This should be done at the time the changes are pushed to the `ompi` repo so tracking is maintained.
<br>
<p><p><p>On Oct 10, 2014, at 3:05 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just added this to the wiki (<a href="https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests">https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests</a>):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: Pull requests on ompi-release must include a hash reference in the body/comments corresponding to the commit(s) onompi:master from which it is derived. Specifically: the intent is that code only goes to the ompi-release repository after it has been committed to the ompi:master development branch. Normally, you can just list a Git hash in a PR body/comment, and Github will auto-link it. But since since ompi:master is a different Github repository than ompi-release, you must prefix hashes with open-mpi/&lt;repo_name&gt; so that Github will know to link it to the other repo. For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A commit in ompi:master: open-mpi/ompi_at_ce8e33447ff342859c7ffd5216e8aa793d676428
</span><br>
<span class="quotelev1">&gt; A commit in ompi-release:v1.8: open-mpi/ompi-release_at_514ea9f6cc59bcd6426ec3f524ffdfb4279491e0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 9, 2014, at 10:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just include the master hash in a comment on the pull request - a link is preferred so I can quickly jump to the master-level commit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 9, 2014, at 6:12 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just so its clear to everyone, what is the definition of &quot;mark&quot; in this context?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2014-10-09 16:28 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would appreciate it if people marked their pull requests for the 1.8 series with the commit hash from the devel &quot;master&quot; that contains the corresponding trunk changeset. This will help me when checking MTT results to see how that change behaved and whether (or not) it is ready to go into 1.8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PR owners should retroactively do that as I won't be accepting PRs without the &quot;master&quot; hash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16034.php">http://www.open-mpi.org/community/lists/devel/2014/10/16034.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16035.php">http://www.open-mpi.org/community/lists/devel/2014/10/16035.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16036.php">http://www.open-mpi.org/community/lists/devel/2014/10/16036.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16037.php">http://www.open-mpi.org/community/lists/devel/2014/10/16037.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16041.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-78-g6372ac9"</a>
<li><strong>Previous message:</strong> <a href="16039.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] End of life: Bitbucket and Github read-only SVN mirrors"</a>
<li><strong>In reply to:</strong> <a href="16037.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pull requests to release branch"</a>
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
