<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 11:17:01 2012" -->
<!-- isoreceived="20120820151701" -->
<!-- sent="Mon, 20 Aug 2012 11:16:56 -0400" -->
<!-- isosent="20120820151656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="0585E1C7-1DE6-4B00-B064-6EF2658700D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120820151040.GK75046_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: OMPI git mirror on github.com<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 11:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2012, at 11:10 AM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Unfortunately, we've seen enough pain from git+svn to definitely not want to go that route.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Personally I have had no problems with git svn. In fact every commit I have made in the last 6 months has been with git svn dcommit. Any issues have been user error as I have to push/pull from my cluser tree (which gets out of sync a lot-- can't update it easily from off-site).
</span><br>
<p>Keep in mind that that is not what Mike is proposing.  :-)
<br>
<p>github has some cleverness that allows both svn and git clients to the same repository.
<br>
<p>That being said, I think that this is a pretty large discussion:
<br>
<p>- do we want to move to a DVCS?
<br>
&nbsp;&nbsp;- if so, which one: hg or git?
<br>
<p>- if we move, will IU host it, or will we use Bitbucket / github?
<br>
<p>- what do we do about a bug tracker?
<br>
&nbsp;&nbsp;- continue to use Trac?
<br>
&nbsp;&nbsp;- use the bug tracker on Bitbucket / github?
<br>
&nbsp;&nbsp;- ...?
<br>
<p>- who will do all the migration work?
<br>
&nbsp;&nbsp;- official source code migration
<br>
&nbsp;&nbsp;- existing open ticket migration
<br>
&nbsp;&nbsp;- user migration
<br>
&nbsp;&nbsp;- ...probably some other things I'm not thinking of
<br>
<p>- who will develop the &quot;best practices&quot; guidelines for use of a DVCS?  Examples:
<br>
&nbsp;&nbsp;- is rebasing before committing encouraged/required/discouraged/...etc.
<br>
&nbsp;&nbsp;- how do we do version release branches -- different repos, or branches within a repo, or ...?
<br>
&nbsp;&nbsp;- ...etc.
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
<li><strong>Next message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11418.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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
