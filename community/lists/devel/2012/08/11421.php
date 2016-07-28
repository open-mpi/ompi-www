<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 18:15:26 2012" -->
<!-- isoreceived="20120820221526" -->
<!-- sent="Mon, 20 Aug 2012 15:15:19 -0700" -->
<!-- isosent="20120820221519" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="6FEB3ADC-83FA-4EF3-9E43-B0CA8FB915F9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0585E1C7-1DE6-4B00-B064-6EF2658700D6_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 18:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>In reply to:</strong> <a href="11419.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We keep having this discussion, and every time the answer is &quot;no - stick with what we currently do&quot;. Can we please stop having it over and over again?
<br>
<p>Until someone can point out a problem that (a) needs solving and (b) can only be solved by making a huge change to a DVCS, there is no reason to keep going over this ground.
<br>
<p><p>On Aug 20, 2012, at 8:16 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 20, 2012, at 11:10 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, we've seen enough pain from git+svn to definitely not want to go that route.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Personally I have had no problems with git svn. In fact every commit I have made in the last 6 months has been with git svn dcommit. Any issues have been user error as I have to push/pull from my cluser tree (which gets out of sync a lot-- can't update it easily from off-site).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind that that is not what Mike is proposing.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; github has some cleverness that allows both svn and git clients to the same repository.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, I think that this is a pretty large discussion:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - do we want to move to a DVCS?
</span><br>
<span class="quotelev1">&gt;  - if so, which one: hg or git?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - if we move, will IU host it, or will we use Bitbucket / github?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - what do we do about a bug tracker?
</span><br>
<span class="quotelev1">&gt;  - continue to use Trac?
</span><br>
<span class="quotelev1">&gt;  - use the bug tracker on Bitbucket / github?
</span><br>
<span class="quotelev1">&gt;  - ...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - who will do all the migration work?
</span><br>
<span class="quotelev1">&gt;  - official source code migration
</span><br>
<span class="quotelev1">&gt;  - existing open ticket migration
</span><br>
<span class="quotelev1">&gt;  - user migration
</span><br>
<span class="quotelev1">&gt;  - ...probably some other things I'm not thinking of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - who will develop the &quot;best practices&quot; guidelines for use of a DVCS?  Examples:
</span><br>
<span class="quotelev1">&gt;  - is rebasing before committing encouraged/required/discouraged/...etc.
</span><br>
<span class="quotelev1">&gt;  - how do we do version release branches -- different repos, or branches within a repo, or ...?
</span><br>
<span class="quotelev1">&gt;  - ...etc.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Previous message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>In reply to:</strong> <a href="11419.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>Reply:</strong> <a href="11422.php">Jeff Squyres: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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
