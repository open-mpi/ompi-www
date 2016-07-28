<?
$subject_val = "Re: [OMPI devel] Pull requests to release branch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 06:05:41 2014" -->
<!-- isoreceived="20141010100541" -->
<!-- sent="Fri, 10 Oct 2014 10:05:38 +0000" -->
<!-- isosent="20141010100538" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pull requests to release branch" -->
<!-- id="C7CC17E6-2592-480A-8793-87C6C0049D7E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3981DCE4-7AF8-4158-8FBD-0C3F14B2F0E2_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-10 06:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16038.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Previous message:</strong> <a href="16036.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<li><strong>In reply to:</strong> <a href="16036.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16040.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<li><strong>Reply:</strong> <a href="16040.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just added this to the wiki (<a href="https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests">https://github.com/open-mpi/ompi/wiki/SubmittingPullRequests</a>):
<br>
<p><p>NOTE: Pull requests on ompi-release must include a hash reference in the body/comments corresponding to the commit(s) onompi:master from which it is derived. Specifically: the intent is that code only goes to the ompi-release repository after it has been committed to the ompi:master development branch. Normally, you can just list a Git hash in a PR body/comment, and Github will auto-link it. But since since ompi:master is a different Github repository than ompi-release, you must prefix hashes with open-mpi/&lt;repo_name&gt; so that Github will know to link it to the other repo. For example:
<br>
<p>&nbsp;&nbsp;*   A commit in ompi:master: open-mpi/ompi_at_ce8e33447ff342859c7ffd5216e8aa793d676428&lt;<a href="https://github.com/open-mpi/ompi/commit/ce8e33447ff342859c7ffd5216e8aa793d676428">https://github.com/open-mpi/ompi/commit/ce8e33447ff342859c7ffd5216e8aa793d676428</a>&gt;
<br>
&nbsp;&nbsp;*   A commit in ompi-release:v1.8: open-mpi/ompi-release_at_514ea9f6cc59bcd6426ec3f524ffdfb4279491e0&lt;<a href="https://github.com/open-mpi/ompi-release/commit/514ea9f6cc59bcd6426ec3f524ffdfb4279491e0">https://github.com/open-mpi/ompi-release/commit/514ea9f6cc59bcd6426ec3f524ffdfb4279491e0</a>&gt;
<br>
<p><p><p><p>On Oct 9, 2014, at 10:16 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>Just include the master hash in a comment on the pull request - a link is preferred so I can quickly jump to the master-level commit.
<br>
<p><p>On Oct 9, 2014, at 6:12 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi Ralph,
<br>
<p>Just so its clear to everyone, what is the definition of &quot;mark&quot; in this context?
<br>
<p>Howard
<br>
<p><p>2014-10-09 16:28 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
Hi folks
<br>
<p>I would appreciate it if people marked their pull requests for the 1.8 series with the commit hash from the devel &quot;master&quot; that contains the corresponding trunk changeset. This will help me when checking MTT results to see how that change behaved and whether (or not) it is ready to go into 1.8.
<br>
<p>PR owners should retroactively do that as I won't be accepting PRs without the &quot;master&quot; hash.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16034.php">http://www.open-mpi.org/community/lists/devel/2014/10/16034.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16035.php">http://www.open-mpi.org/community/lists/devel/2014/10/16035.php</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16036.php">http://www.open-mpi.org/community/lists/devel/2014/10/16036.php</a>
<br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16038.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-49-g86f1d5a"</a>
<li><strong>Previous message:</strong> <a href="16036.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<li><strong>In reply to:</strong> <a href="16036.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16040.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
<li><strong>Reply:</strong> <a href="16040.php">Ralph Castain: "Re: [OMPI devel] Pull requests to release branch"</a>
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
