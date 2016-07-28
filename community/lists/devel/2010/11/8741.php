<?
$subject_val = "Re: [OMPI devel] 1.5 plans";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 09:00:18 2010" -->
<!-- isoreceived="20101130140018" -->
<!-- sent="Tue, 30 Nov 2010 09:00:14 -0500" -->
<!-- isosent="20101130140014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 plans" -->
<!-- id="024819A9-F4D2-4732-8DAE-B6414CF2643C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AC33230F-35C4-49F9-8FC8-482F854B92DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5 plans<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 09:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Reply:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 30, 2010, at 8:54 AM, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Can you make a v1.7 milestone on Trac, so I can move some of my tickets?
</span><br>
<p>Done.
<br>
<p><span class="quotelev1">&gt; Some are CMRs, but a couple are defects, with fixes in development, that without those CMRs cannot be moved to v1.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2010, at 11:43 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm about 2 weeks late on this email; apologies.  SC and Thanksgiving got in the way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Per a discussion on the devel teleconf nearly 3 weeks ago, we have decided what to do with the v1.5 series:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - 1.5.1 will be a bug fix release.  There's 2 blocker bugs right now that need to be reviewed; those and the currently ready-to-commit major CMR are all that is planned for 1.5.1.  Hopefully, they could be ready by tonight.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - 1.5.2 (and successive releases) will be &quot;normal&quot; feature releases.  There's a bit of divergence between the trunk and the v1.5 branch, meaning that some porting of features may be required to get over to the v1.5 branch (FWIW, I think that many things will not require much porting at all -- but some will).  Many of the CMRs filed against v1.5.2 are still relevant; *some* of the features/bugs are still relevant.  We'll start [re-]examining the v1.5.2 tickets in more detail soon.  So feel free to apply to have your favorite feature brought over to the v1.5 branch.  Bigger features may be kept in the wings for v1.7 (e.g., the wholesale ORTE refresh for v1.5.x has been axed and will wait until v1.7).  There is a bunch of affinity work occurring on the trunk (and/or in hg branches) right now; we plan to bring all that stuff in to the v1.5 series when ready (probably 3+ months at the earliest -- especially with the December holidays delaying everything).  Once that's done, we !
</span><br>
<span class="quotelev1">&gt; ca!
</span><br>
<span class="quotelev2">&gt;&gt; n then probably start thinking about wrapping up the v1.5 series, converting it to its stable counterpart (1.6), and then branching for v1.7.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Reply:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
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
