<?
$subject_val = "Re: [MTT users] Actual releases?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 09:34:46 2015" -->
<!-- isoreceived="20151210143446" -->
<!-- sent="Thu, 10 Dec 2015 14:34:41 +0000" -->
<!-- isosent="20151210143441" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Actual releases?" -->
<!-- id="EB3114C8-3E28-4A5B-8FBC-77552E91E252_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjE==jct3U-PCgoWdwNANf93_WV3voGzknoYY_nQ11z0RSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Actual releases?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-10 09:34:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0834.php">Ralph Castain: "[MTT users] Python client"</a>
<li><strong>Previous message:</strong> <a href="0832.php">Josh Hursey: "Re: [MTT users] Actual releases?"</a>
<li><strong>In reply to:</strong> <a href="0832.php">Josh Hursey: "Re: [MTT users] Actual releases?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
<li><strong>Reply:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.  We did do a release branch at one point (which is likely completely stale), but we've never invested any release engineering efforts into MTT to make a packaged/perfect tarball -- mainly because, at least in the beginning, MTT was just for Open MPI core developers, and we were comfortable telling them &quot;get a source checkout and run from there.&quot;
<br>
<p>If MTT is growing up to be a real package in OpenHPC, then it probably does need to get some release engineering lovin'.
<br>
<p><p><span class="quotelev1">&gt; On Dec 10, 2015, at 4:47 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that would be good. I won't have any cycles to help until after the first of the year. We started working towards a release way back when, but I think we got stuck with the license to package up the graphing library for the MTT Reporter. We could just remove that feature from the release since the new reporter will do something different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Releasing where we are now should be pretty straight forward if folks just want to posted a versioned tarball. We would have to assess how to get MTT into a more packaged configuration (e.g., rpm) if folks want that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 9, 2015 at 11:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hey folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is interest in packaging MTT in the OpenHPC distribution. However, we don't actually have &quot;releases&quot; of MTT. Any objection to actually tagging/releasing versions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0832.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0832.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0833.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0833.php</a>
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
<li><strong>Next message:</strong> <a href="0834.php">Ralph Castain: "[MTT users] Python client"</a>
<li><strong>Previous message:</strong> <a href="0832.php">Josh Hursey: "Re: [MTT users] Actual releases?"</a>
<li><strong>In reply to:</strong> <a href="0832.php">Josh Hursey: "Re: [MTT users] Actual releases?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
<li><strong>Reply:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
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
