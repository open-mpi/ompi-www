<?
$subject_val = "[OMPI devel] 1.5 plans";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 11:43:56 2010" -->
<!-- isoreceived="20101129164356" -->
<!-- sent="Mon, 29 Nov 2010 11:43:51 -0500" -->
<!-- isosent="20101129164351" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5 plans" -->
<!-- id="94FFFCFB-9325-4A72-AEBF-E8418A14BAA4_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5 plans<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 11:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8727.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8725.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Reply:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm about 2 weeks late on this email; apologies.  SC and Thanksgiving got in the way.
<br>
<p>Per a discussion on the devel teleconf nearly 3 weeks ago, we have decided what to do with the v1.5 series:
<br>
<p>- 1.5.1 will be a bug fix release.  There's 2 blocker bugs right now that need to be reviewed; those and the currently ready-to-commit major CMR are all that is planned for 1.5.1.  Hopefully, they could be ready by tonight.
<br>
<p>- 1.5.2 (and successive releases) will be &quot;normal&quot; feature releases.  There's a bit of divergence between the trunk and the v1.5 branch, meaning that some porting of features may be required to get over to the v1.5 branch (FWIW, I think that many things will not require much porting at all -- but some will).  Many of the CMRs filed against v1.5.2 are still relevant; *some* of the features/bugs are still relevant.  We'll start [re-]examining the v1.5.2 tickets in more detail soon.  So feel free to apply to have your favorite feature brought over to the v1.5 branch.  Bigger features may be kept in the wings for v1.7 (e.g., the wholesale ORTE refresh for v1.5.x has been axed and will wait until v1.7).  There is a bunch of affinity work occurring on the trunk (and/or in hg branches) right now; we plan to bring all that stuff in to the v1.5 series when ready (probably 3+ months at the earliest -- especially with the December holidays delaying everything).  Once that's done, we can then probably start thinking abo<br>
ut wrapping up the v1.5 series, converting it to its stable counterpart (1.6), and then branching for v1.7.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8727.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8725.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Reply:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
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
