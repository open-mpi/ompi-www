<?
$subject_val = "Re: [OMPI devel] 1.5 plans";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 10:29:20 2010" -->
<!-- isoreceived="20101130152920" -->
<!-- sent="Tue, 30 Nov 2010 10:28:56 -0500" -->
<!-- isosent="20101130152856" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 plans" -->
<!-- id="4CF51838.6040905_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D4CF5C40-B75D-48C2-B1DA-A09D96962877_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 10:28:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8747.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8745.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8745.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/30/2010 10:10 AM, Joshua Hursey wrote:
<br>
<span class="quotelev1">&gt; (Insert jab at the definition of 'quickly' when talking about OMPI releases)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From the way I read Jeff's original email, it seems that we are trying to get v1.5 stable so we can start v1.7 in the next few months (3-5). The C/R functionality on the trunk is significantly different than that on the v1.5 (and more so with v1.4). So brining these features over the v1.5 branch will require a CMR that will look like re-syncing to the trunk (it requires the ORTE refresh, and a couple other odds and ends). Since the ORTE refresh was killed due to the size of the feature, so has the C/R features. So even though the v1.5 is a feature branch, the C/R feature is locked out of it at the moment and pushed to v1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yeah, we have successfully deadlocked ourselves.  We got features that 
<br>
cannot go in because they rely on stuff we refuse to bringover because 
<br>
of stability but at the same time cannot force 1.5 to be 1.6 because 1.5 
<br>
isn't stable enough itself.  Quite a pickle.  I still believe a 
<br>
refresh/sync of trunk to 1.5 makes sense.  The only other solution is to 
<br>
start 1.7 and put 1.5 to bed.   Unfortunately there are some 
<br>
implications for Oracle if all the current stuff is put into 1.7 instead 
<br>
of 1.5.
<br>
<span class="quotelev1">&gt; So, from my perspective, there is now a push to hurry up on the v1.7 so users will have a release branch with the latest-n-greatest C/R functionality. Releasing v1.7 next summer would be fine with me, but pushing it further into the future seems bad to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well, I think we need to really think about this carefully to make sure 
<br>
we do not end up in the same situation 6 months from now.
<br>
<span class="quotelev1">&gt; As a side comment:
</span><br>
<span class="quotelev1">&gt; The stable branch is a great idea for the production side of the house since it is more carefully crafted and maintained. The feature branch is a great idea for the researchers in the group to gain exposure for new features, and enhancements on old features (many of these require changes to internal APIs and data structures). From my perspective, a slow moving feature branch is no longer that useful to the research community since it becomes more and more painful to synchronize the trunk and branch the longer it takes for the feature branch to stabilize for release. So the question often becomes why bother. But this a longer discussion for another time maybe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
IMO, the problem is we ended up not stablizing 1.5 quick enough thus 
<br>
causing so great of a divergence that we are in the pickle we are now.  
<br>
The whole idea was we were to push stuff into 1.5 quickly.  If we cannot 
<br>
do that then we may want to reconsider how we handle releases again :-(.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2010, at 9:36 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 11/30/2010 09:00 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 30, 2010, at 8:54 AM, Joshua Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you make a v1.7 milestone on Trac, so I can move some of my tickets?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a question about Josh's recent ticket moves.  One of them mentions 1.5 is stablizing quickly Josh can you clarify what you mean by quickly because I think there will be a 1.5 release 3-6 months from now.  So does that fall into your quickly perspective?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some are CMRs, but a couple are defects, with fixes in development, that without those CMRs cannot be moved to v1.5.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 29, 2010, at 11:43 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm about 2 weeks late on this email; apologies.  SC and Thanksgiving got in the way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Per a discussion on the devel teleconf nearly 3 weeks ago, we have decided what to do with the v1.5 series:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 1.5.1 will be a bug fix release.  There's 2 blocker bugs right now that need to be reviewed; those and the currently ready-to-commit major CMR are all that is planned for 1.5.1.  Hopefully, they could be ready by tonight.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - 1.5.2 (and successive releases) will be &quot;normal&quot; feature releases.  There's a bit of divergence between the trunk and the v1.5 branch, meaning that some porting of features may be required to get over to the v1.5 branch (FWIW, I think that many things will not require much porting at all -- but some will).  Many of the CMRs filed against v1.5.2 are still relevant; *some* of the features/bugs are still relevant.  We'll start [re-]examining the v1.5.2 tickets in more detail soon.  So feel free to apply to have your favorite feature brought over to the v1.5 branch.  Bigger features may be kept in the wings for v1.7 (e.g., the wholesale ORTE refresh for v1.5.x has been axed and will wait until v1.7).  There is a bunch of affinity work occurring on the trunk (and/or in hg branches) right now; we plan to bring all that stuff in to the v1.5 series when ready (probably 3+ months at the earliest -- especially with the December holidays delaying everything).  Once that's done, !
</span><br>
<span class="quotelev1">&gt;   we!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ca!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; n then probably start thinking about wrapping up the v1.5 series, converting it to its stable counterpart (1.6), and then branching for v1.7.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ATT00001.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8746/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8747.php">Jeff Squyres: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>Previous message:</strong> <a href="8745.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8745.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
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
