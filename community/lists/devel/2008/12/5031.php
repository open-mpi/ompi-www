<?
$subject_val = "Re: [OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 16:01:45 2008" -->
<!-- isoreceived="20081210210145" -->
<!-- sent="Wed, 10 Dec 2008 22:01:41 +0100" -->
<!-- isosent="20081210210141" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="200812102201.41552.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="19349509-3235-431B-BE75-9C9CA936E45E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: merge windows branch into trunk<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 16:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5032.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="5030.php">Eugene Loh: "[OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5032.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="5032.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
we delayed the COB for this to 9.12., announced yesterday to prepare to commit 
<br>
today.
<br>
We updated to get new buglets that were fixed, tested twice on Win 
<br>
(shared&amp;static) and Linux to see that nothing breaks
<br>
<p>Now we are ready to commit and just as well get a r20106 which touches quite a 
<br>
code-base once again ,-]
<br>
<p><p>Thanks,
<br>
Rainer
<br>
<p><p><p>On Donnerstag, 20. November 2008, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm....I was just typing this up when Tim's note hit. I also have two
</span><br>
<span class="quotelev1">&gt; concerns that somewhat echo his:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. since nearly everyone is at SC08, and since next week is a holiday,
</span><br>
<span class="quotelev1">&gt; the timing of this merge is poor. I would really urge that you delay
</span><br>
<span class="quotelev1">&gt; it until at least Dec 5 so people actually know about it - and have
</span><br>
<span class="quotelev1">&gt; time to even think about it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. how does this fit into our overall release schedule? There was talk
</span><br>
<span class="quotelev1">&gt; at one time (when we thought 1.3 was going out soon) about having a
</span><br>
<span class="quotelev1">&gt; short release cycle to get Windows support out for 1.4. Now this is
</span><br>
<span class="quotelev1">&gt; coming into the trunk even before 1.3 goes out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So is 1.3 going to have a lifecycle of a month? Or are we going to
</span><br>
<span class="quotelev1">&gt; delay 1.3 (if it even needs to be delayed) so it can include this code?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reason I ask: last time we rolled Windows support into the system it
</span><br>
<span class="quotelev1">&gt; created a complete code fork, making support for the current stable
</span><br>
<span class="quotelev1">&gt; release nearly impossible. There generated a lot of unhappiness and
</span><br>
<span class="quotelev1">&gt; argument within the community until we finally released a new version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From what I have seen as we've discussed things during devel, these
</span><br>
<span class="quotelev1">&gt; are fairly well-contained changes. However, it -will- make maintaining
</span><br>
<span class="quotelev1">&gt; 1.3 more difficult if people attempt to do it the old way - making
</span><br>
<span class="quotelev1">&gt; changes in the trunk and patching across to 1.3. If we instead use
</span><br>
<span class="quotelev1">&gt; isolated 1.3 branches for maintaining the code, then this isn't an
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Merits more thought than one week can provide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2008, at 6:53 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have two concerns.  First is that we really need to focus on
</span><br>
<span class="quotelev2">&gt; &gt; getting 1.3 stable and released.  My second concern with
</span><br>
<span class="quotelev2">&gt; &gt; this is how will it effect merging of bugfixes for 1.3 from the
</span><br>
<span class="quotelev2">&gt; &gt; trunk once we release 1.3.  Will the following modified files
</span><br>
<span class="quotelev2">&gt; &gt; cause merge conflicts for CMRs?  How big is this diff,
</span><br>
<span class="quotelev2">&gt; &gt; can you send it to the list, or otherwise make it available?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M opal/event/event.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M opal/event/WIN32-Code/win32.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M opal/mca/installdirs/windows/opal_installdirs_windows.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M opal/runtime/opal_cr.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M opal/win32/ompi_misc.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M opal/win32/win_compat.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/mca/plm/ccp/plm_ccp_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/mca/plm/ccp/plm_ccp_module.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/mca/plm/process/plm_process_module.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/mca/ras/ccp/ras_ccp_component.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/mca/ras/ccp/ras_ccp_module.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/runtime/orte_wait.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; M orte/util/hnp_contact.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would ask that you consider breaking these
</span><br>
<span class="quotelev2">&gt; &gt; modifications into parts that &quot;could&quot; be harmlessly
</span><br>
<span class="quotelev2">&gt; &gt; brought over independently to 1.3, if a subsequent
</span><br>
<span class="quotelev2">&gt; &gt; non-windows bugfix to one of those files needs to
</span><br>
<span class="quotelev2">&gt; &gt; be brought over that will only merge cleanly if some
</span><br>
<span class="quotelev2">&gt; &gt; of your changes to the same file are also brought over.
</span><br>
<span class="quotelev2">&gt; &gt; For example, it would be a real pain to have to use
</span><br>
<span class="quotelev2">&gt; &gt; patchfiles to resolve merge conflicts simply because
</span><br>
<span class="quotelev2">&gt; &gt; of an #ifdef or white-space change here or there.
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully that made sense...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Although I don't use windows myself, I appreciate your
</span><br>
<span class="quotelev2">&gt; &gt; and others' efforts to expand the number of platforms
</span><br>
<span class="quotelev2">&gt; &gt; we can run on.  Great work!
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt; &gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5032.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="5030.php">Eugene Loh: "[OMPI devel] shared-memory allocations"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/11/4929.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5032.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="5032.php">Ralph Castain: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
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
