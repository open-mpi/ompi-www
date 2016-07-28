<?
$subject_val = "Re: [MTT users] Actual releases?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 19:12:23 2015" -->
<!-- isoreceived="20151211001223" -->
<!-- sent="Fri, 11 Dec 2015 09:12:17 +0900" -->
<!-- isosent="20151211001217" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [MTT users] Actual releases?" -->
<!-- id="566A14E1.10807_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EB3114C8-3E28-4A5B-8FBC-77552E91E252_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-10 19:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0836.php">Ralph Castain: "Re: [MTT users] Actual releases?"</a>
<li><strong>Previous message:</strong> <a href="0834.php">Ralph Castain: "[MTT users] Python client"</a>
<li><strong>In reply to:</strong> <a href="0833.php">Jeff Squyres (jsquyres): "Re: [MTT users] Actual releases?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0836.php">Ralph Castain: "Re: [MTT users] Actual releases?"</a>
<li><strong>Reply:</strong> <a href="0836.php">Ralph Castain: "Re: [MTT users] Actual releases?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1 too
<br>
<p>Ralph, just to be clear ...
<br>
from a mtt point of view, do you expect only a release tag and a tarball ?
<br>
or do you also expect a .spec file
<br>
(iirc, OpenHPC is RPM based even if they use their own .spec file)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/10/2015 11:34 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; +1.  We did do a release branch at one point (which is likely completely stale), but we've never invested any release engineering efforts into MTT to make a packaged/perfect tarball -- mainly because, at least in the beginning, MTT was just for Open MPI core developers, and we were comfortable telling them &quot;get a source checkout and run from there.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If MTT is growing up to be a real package in OpenHPC, then it probably does need to get some release engineering lovin'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 10, 2015, at 4:47 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that would be good. I won't have any cycles to help until after the first of the year. We started working towards a release way back when, but I think we got stuck with the license to package up the graphing library for the MTT Reporter. We could just remove that feature from the release since the new reporter will do something different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Releasing where we are now should be pretty straight forward if folks just want to posted a versioned tarball. We would have to assess how to get MTT into a more packaged configuration (e.g., rpm) if folks want that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Dec 9, 2015 at 11:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hey folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is interest in packaging MTT in the OpenHPC distribution. However, we don't actually have &quot;releases&quot; of MTT. Any objection to actually tagging/releasing versions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0832.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0832.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0833.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0833.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0836.php">Ralph Castain: "Re: [MTT users] Actual releases?"</a>
<li><strong>Previous message:</strong> <a href="0834.php">Ralph Castain: "[MTT users] Python client"</a>
<li><strong>In reply to:</strong> <a href="0833.php">Jeff Squyres (jsquyres): "Re: [MTT users] Actual releases?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0836.php">Ralph Castain: "Re: [MTT users] Actual releases?"</a>
<li><strong>Reply:</strong> <a href="0836.php">Ralph Castain: "Re: [MTT users] Actual releases?"</a>
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
