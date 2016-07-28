<?
$subject_val = "Re: [MTT users] Actual releases?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 03:23:38 2015" -->
<!-- isoreceived="20151211082338" -->
<!-- sent="Fri, 11 Dec 2015 00:23:24 -0800" -->
<!-- isosent="20151211082324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] Actual releases?" -->
<!-- id="A5EE08DE-5045-4E3F-AF4B-ABAB967B59CB_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="566A14E1.10807_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-11 03:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Josh Hursey: "Re: [MTT users] Python client"</a>
<li><strong>Previous message:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
<li><strong>In reply to:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m sure we&#226;&#128;&#153;ll need a spec file and generate an RPM for them. I may have an Intel person willing to step up and help us do this - should know soon.
<br>
<p><p><span class="quotelev1">&gt; On Dec 10, 2015, at 4:12 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1 too
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, just to be clear ...
</span><br>
<span class="quotelev1">&gt; from a mtt point of view, do you expect only a release tag and a tarball ?
</span><br>
<span class="quotelev1">&gt; or do you also expect a .spec file
</span><br>
<span class="quotelev1">&gt; (iirc, OpenHPC is RPM based even if they use their own .spec file)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/10/2015 11:34 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; +1.  We did do a release branch at one point (which is likely completely stale), but we've never invested any release engineering efforts into MTT to make a packaged/perfect tarball -- mainly because, at least in the beginning, MTT was just for Open MPI core developers, and we were comfortable telling them &quot;get a source checkout and run from there.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If MTT is growing up to be a real package in OpenHPC, then it probably does need to get some release engineering lovin'.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 10, 2015, at 4:47 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think that would be good. I won't have any cycles to help until after the first of the year. We started working towards a release way back when, but I think we got stuck with the license to package up the graphing library for the MTT Reporter. We could just remove that feature from the release since the new reporter will do something different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Releasing where we are now should be pretty straight forward if folks just want to posted a versioned tarball. We would have to assess how to get MTT into a more packaged configuration (e.g., rpm) if folks want that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Dec 9, 2015 at 11:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey folks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is interest in packaging MTT in the OpenHPC distribution. However, we don't actually have &quot;releases&quot; of MTT. Any objection to actually tagging/releasing versions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0832.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0832.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0833.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0833.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden] &lt;mailto:mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0835.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0835.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/mtt-users/2015/12/0835.php">http://www.open-mpi.org/community/lists/mtt-users/2015/12/0835.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0837.php">Josh Hursey: "Re: [MTT users] Python client"</a>
<li><strong>Previous message:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
<li><strong>In reply to:</strong> <a href="0835.php">Gilles Gouaillardet: "Re: [MTT users] Actual releases?"</a>
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
