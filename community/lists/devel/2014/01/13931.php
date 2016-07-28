<?
$subject_val = "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 17:43:54 2014" -->
<!-- isoreceived="20140127224354" -->
<!-- sent="Mon, 27 Jan 2014 14:43:50 -0800" -->
<!-- isosent="20140127224350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures" -->
<!-- id="014178F7-B01E-415F-9190-2C86B8EB8094_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140127212457.GB10484_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 17:43:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13932.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13930.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13930.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 27, 2014, at 1:24 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Jan 27, 2014 at 01:10:43PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Nathan, I have no idea what you are talking about. What I do know is that you had me commit a patch to the trunk and v1.7.4 that caused multiple warnings about 32-bit issues to appear in both cases. George is reporting issues that look very much like the ones I'd expect based on those warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That patch for coll/ml was correct for 1.7.4 and no further action is
</span><br>
<span class="quotelev1">&gt; required. The two crashed George reported are in 1) the new vader (not
</span><br>
<span class="quotelev1">&gt; in 1.7.4), and 2) the coll/ml updates (also not in 1.7.4). Neither code
</span><br>
<span class="quotelev1">&gt; path exists in 1.7.4.
</span><br>
<p>My bad - I rechecked 1.7.4 and found the warnings indeed do not exist there.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Release of 1.7.4 is still waiting for the patch you promised me last week to fix these problems. I don't give a rats a$$ about SGI at this stage - I just want to get your patch that fixes 1.7.4 so we can release the stupid thing!!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That patch did not cause any warning on 1.7.4. Only the trunk because it
</span><br>
<span class="quotelev1">&gt; conflicted with the update to coll/ml. That is not scheduled for 1.7.4
</span><br>
<span class="quotelev1">&gt; so I am waiting on ORNL to make sure we do the right thing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I am concerned 1.7.4 should be ready to go. Unless some new
</span><br>
<span class="quotelev1">&gt; 32-bit issue cropped up with coll/ml. Since MTT is suggested we are fine
</span><br>
<span class="quotelev1">&gt; with 32-bit I doubt that is the case.
</span><br>
<p>Brian is doing one last 32-bit smoke check to be sure as none of the MTT tests are running in that mode, so far as I'm aware.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<li><strong>Next message:</strong> <a href="13932.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13930.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13930.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
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
