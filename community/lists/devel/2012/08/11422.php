<?
$subject_val = "Re: [OMPI devel] RFC: OMPI git mirror on github.com";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 20:39:42 2012" -->
<!-- isoreceived="20120821003942" -->
<!-- sent="Mon, 20 Aug 2012 20:39:37 -0400" -->
<!-- isosent="20120821003937" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OMPI git mirror on github.com" -->
<!-- id="4ED72CC8-86F1-4033-804A-F8C2FDF4CD89_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6FEB3ADC-83FA-4EF3-9E43-B0CA8FB915F9_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-08-20 20:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11423.php">Ralph Castain: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11413.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Amusingly enough, this may be a moot discussion anyway, because I tried the SVN features on github per their directions, and they didn't seem to work:
<br>
<p>-----
<br>
% svn co --depth empty <a href="https://github.com/open-mpi/ompi-svn-mirror">https://github.com/open-mpi/ompi-svn-mirror</a>
<br>
Checked out revision 17370.
<br>
% cd ompi-svn-mirror/
<br>
% svn up trunk
<br>
[hang for 5 minutes]
<br>
svn: Server sent unexpected return value (405 Not Allowed) in response to REPORT request for '/open-mpi/ompi-svn-mirror/!svn/vcc/default'
<br>
%
<br>
-----
<br>
<p><p>On Aug 20, 2012, at 6:15 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We keep having this discussion, and every time the answer is &quot;no - stick with what we currently do&quot;. Can we please stop having it over and over again?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Until someone can point out a problem that (a) needs solving and (b) can only be solved by making a huge change to a DVCS, there is no reason to keep going over this ground.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 20, 2012, at 8:16 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 20, 2012, at 11:10 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, we've seen enough pain from git+svn to definitely not want to go that route.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Personally I have had no problems with git svn. In fact every commit I have made in the last 6 months has been with git svn dcommit. Any issues have been user error as I have to push/pull from my cluser tree (which gets out of sync a lot-- can't update it easily from off-site).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind that that is not what Mike is proposing.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; github has some cleverness that allows both svn and git clients to the same repository.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That being said, I think that this is a pretty large discussion:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - do we want to move to a DVCS?
</span><br>
<span class="quotelev2">&gt;&gt; - if so, which one: hg or git?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - if we move, will IU host it, or will we use Bitbucket / github?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - what do we do about a bug tracker?
</span><br>
<span class="quotelev2">&gt;&gt; - continue to use Trac?
</span><br>
<span class="quotelev2">&gt;&gt; - use the bug tracker on Bitbucket / github?
</span><br>
<span class="quotelev2">&gt;&gt; - ...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - who will do all the migration work?
</span><br>
<span class="quotelev2">&gt;&gt; - official source code migration
</span><br>
<span class="quotelev2">&gt;&gt; - existing open ticket migration
</span><br>
<span class="quotelev2">&gt;&gt; - user migration
</span><br>
<span class="quotelev2">&gt;&gt; - ...probably some other things I'm not thinking of
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - who will develop the &quot;best practices&quot; guidelines for use of a DVCS?  Examples:
</span><br>
<span class="quotelev2">&gt;&gt; - is rebasing before committing encouraged/required/discouraged/...etc.
</span><br>
<span class="quotelev2">&gt;&gt; - how do we do version release branches -- different repos, or branches within a repo, or ...?
</span><br>
<span class="quotelev2">&gt;&gt; - ...etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11423.php">Ralph Castain: "Re: [OMPI devel] 1.6.1rc3 - 3 of 5 tests failed on OSX 10.8"</a>
<li><strong>Previous message:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<li><strong>In reply to:</strong> <a href="11421.php">Ralph Castain: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11413.php">Mike Dubman: "Re: [OMPI devel] RFC: OMPI git mirror on github.com"</a>
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
