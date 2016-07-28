<?
$subject_val = "Re: [OMPI devel] RFC: merge windows branch into trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 08:59:14 2008" -->
<!-- isoreceived="20081120135914" -->
<!-- sent="Thu, 20 Nov 2008 06:59:04 -0700" -->
<!-- isosent="20081120135904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: merge windows branch into trunk" -->
<!-- id="19349509-3235-431B-BE75-9C9CA936E45E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220811200553v77ae9f14n2ec9defac033eb3f_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 08:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4930.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5031.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....I was just typing this up when Tim's note hit. I also have two  
<br>
concerns that somewhat echo his:
<br>
<p>1. since nearly everyone is at SC08, and since next week is a holiday,  
<br>
the timing of this merge is poor. I would really urge that you delay  
<br>
it until at least Dec 5 so people actually know about it - and have  
<br>
time to even think about it
<br>
<p>2. how does this fit into our overall release schedule? There was talk  
<br>
at one time (when we thought 1.3 was going out soon) about having a  
<br>
short release cycle to get Windows support out for 1.4. Now this is  
<br>
coming into the trunk even before 1.3 goes out.
<br>
<p>So is 1.3 going to have a lifecycle of a month? Or are we going to  
<br>
delay 1.3 (if it even needs to be delayed) so it can include this code?
<br>
<p>Reason I ask: last time we rolled Windows support into the system it  
<br>
created a complete code fork, making support for the current stable  
<br>
release nearly impossible. There generated a lot of unhappiness and  
<br>
argument within the community until we finally released a new version.
<br>
<p>&nbsp;From what I have seen as we've discussed things during devel, these  
<br>
are fairly well-contained changes. However, it -will- make maintaining  
<br>
1.3 more difficult if people attempt to do it the old way - making  
<br>
changes in the trunk and patching across to 1.3. If we instead use  
<br>
isolated 1.3 branches for maintaining the code, then this isn't an  
<br>
issue.
<br>
<p>Merits more thought than one week can provide.
<br>
<p>Ralph
<br>
<p><p>On Nov 20, 2008, at 6:53 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; I have two concerns.  First is that we really need to focus on
</span><br>
<span class="quotelev1">&gt; getting 1.3 stable and released.  My second concern with
</span><br>
<span class="quotelev1">&gt; this is how will it effect merging of bugfixes for 1.3 from the
</span><br>
<span class="quotelev1">&gt; trunk once we release 1.3.  Will the following modified files
</span><br>
<span class="quotelev1">&gt; cause merge conflicts for CMRs?  How big is this diff,
</span><br>
<span class="quotelev1">&gt; can you send it to the list, or otherwise make it available?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; M ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/event/event.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/event/WIN32-Code/win32.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/mca/installdirs/windows/opal_installdirs_windows.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/runtime/opal_cr.c
</span><br>
<span class="quotelev2">&gt;&gt; M opal/win32/ompi_misc.h
</span><br>
<span class="quotelev2">&gt;&gt; M opal/win32/win_compat.h
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/plm/ccp/plm_ccp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/plm/ccp/plm_ccp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/plm/process/plm_process_module.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/ras/ccp/ras_ccp_component.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/mca/ras/ccp/ras_ccp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/runtime/orte_wait.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev2">&gt;&gt; M orte/util/hnp_contact.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would ask that you consider breaking these
</span><br>
<span class="quotelev1">&gt; modifications into parts that &quot;could&quot; be harmlessly
</span><br>
<span class="quotelev1">&gt; brought over independently to 1.3, if a subsequent
</span><br>
<span class="quotelev1">&gt; non-windows bugfix to one of those files needs to
</span><br>
<span class="quotelev1">&gt; be brought over that will only merge cleanly if some
</span><br>
<span class="quotelev1">&gt; of your changes to the same file are also brought over.
</span><br>
<span class="quotelev1">&gt; For example, it would be a real pain to have to use
</span><br>
<span class="quotelev1">&gt; patchfiles to resolve merge conflicts simply because
</span><br>
<span class="quotelev1">&gt; of an #ifdef or white-space change here or there.
</span><br>
<span class="quotelev1">&gt; Hopefully that made sense...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although I don't use windows myself, I appreciate your
</span><br>
<span class="quotelev1">&gt; and others' efforts to expand the number of platforms
</span><br>
<span class="quotelev1">&gt; we can run on.  Great work!
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="4930.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>In reply to:</strong> <a href="4928.php">Tim Mattox: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4931.php">Shiqing Fan: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5031.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
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
