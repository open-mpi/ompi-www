<?
$subject_val = "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 16:24:58 2014" -->
<!-- isoreceived="20140127212458" -->
<!-- sent="Mon, 27 Jan 2014 14:24:57 -0700" -->
<!-- isosent="20140127212457" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures" -->
<!-- id="20140127212457.GB10484_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F0EE2DC-BC62-493E-9B70-D0DA2B3ABD4A_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 16:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13931.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13929.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13929.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13931.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Reply:</strong> <a href="13931.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 27, 2014 at 01:10:43PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Nathan, I have no idea what you are talking about. What I do know is that you had me commit a patch to the trunk and v1.7.4 that caused multiple warnings about 32-bit issues to appear in both cases. George is reporting issues that look very much like the ones I'd expect based on those warnings.
</span><br>
<p>That patch for coll/ml was correct for 1.7.4 and no further action is
<br>
required. The two crashed George reported are in 1) the new vader (not
<br>
in 1.7.4), and 2) the coll/ml updates (also not in 1.7.4). Neither code
<br>
path exists in 1.7.4.
<br>
<p><span class="quotelev1">&gt; Release of 1.7.4 is still waiting for the patch you promised me last week to fix these problems. I don't give a rats a$$ about SGI at this stage - I just want to get your patch that fixes 1.7.4 so we can release the stupid thing!!!
</span><br>
<p>That patch did not cause any warning on 1.7.4. Only the trunk because it
<br>
conflicted with the update to coll/ml. That is not scheduled for 1.7.4
<br>
so I am waiting on ORNL to make sure we do the right thing.
<br>
<p>As far as I am concerned 1.7.4 should be ready to go. Unless some new
<br>
32-bit issue cropped up with coll/ml. Since MTT is suggested we are fine
<br>
with 32-bit I doubt that is the case.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13930/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13931.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13929.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>In reply to:</strong> <a href="13929.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13931.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Reply:</strong> <a href="13931.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
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
