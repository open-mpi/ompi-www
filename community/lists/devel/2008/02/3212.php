<?
$subject_val = "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 11:57:23 2008" -->
<!-- isoreceived="20080212165723" -->
<!-- sent="Tue, 12 Feb 2008 11:54:52 -0500" -->
<!-- isosent="20080212165452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk" -->
<!-- id="C6D35CEE-40E4-4178-8BC8-CAB76DD52E39_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3D670A9.45C5%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 11:54:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3213.php">Jeff Squyres: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Ralph Castain: "[OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph --
<br>
<p>We talked about this on the OMPI con call today and everyone agrees  
<br>
that this seems to be a good plan.  Just as a safety net: if the merge  
<br>
goes disastrously wrong and you're unavailable Thu/Fri this week, we  
<br>
can just back it out and try again later.
<br>
<p>Thanks!
<br>
<p><p>On Feb 11, 2008, at 11:37 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per last week's telecon, we planned the merge of the latest ORTE devel
</span><br>
<span class="quotelev1">&gt; branch to the OMPI trunk for after Sun had committed its C++  
</span><br>
<span class="quotelev1">&gt; changes. That
</span><br>
<span class="quotelev1">&gt; happened over the weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, based on the requests at the telecon, I will be merging the
</span><br>
<span class="quotelev1">&gt; current ORTE devel branch to the trunk on Wed 2/13. I'll make the  
</span><br>
<span class="quotelev1">&gt; commit
</span><br>
<span class="quotelev1">&gt; around 4:30pm Eastern time - will send out warning shortly before  
</span><br>
<span class="quotelev1">&gt; the commit
</span><br>
<span class="quotelev1">&gt; to let you know it is coming. I'll advise of any delays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will be a snapshot of that devel branch - it will include the  
</span><br>
<span class="quotelev1">&gt; upgraded
</span><br>
<span class="quotelev1">&gt; launch system, remove the GPR, add the new tool communication  
</span><br>
<span class="quotelev1">&gt; library, allow
</span><br>
<span class="quotelev1">&gt; arbitrary mpiruns to interconnect, supports the revamped hostfile and
</span><br>
<span class="quotelev1">&gt; dash-host behaviors per the wiki, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it is incomplete and contains some known flaws. For example,
</span><br>
<span class="quotelev1">&gt; totalview support has not been enabled yet. Comm_spawn, which is  
</span><br>
<span class="quotelev1">&gt; currently
</span><br>
<span class="quotelev1">&gt; broken on the OMPI trunk, is fixed - but singleton comm_spawn remains
</span><br>
<span class="quotelev1">&gt; broken. I am in the process of establishing support for direct and
</span><br>
<span class="quotelev1">&gt; standalone launch capabilities, but those won't be in the merge. I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; updated all of the launchers, but can only certify the SLURM, TM,  
</span><br>
<span class="quotelev1">&gt; and RSH
</span><br>
<span class="quotelev1">&gt; ones to work - the Xgrid launcher is known to not compile, so if you  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; Xgrid on your Mac, you need to tell the build system to not build that
</span><br>
<span class="quotelev1">&gt; component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will give you a chance to look over the new arch, though, and I
</span><br>
<span class="quotelev1">&gt; understand that people would like to begin having a chance to test and
</span><br>
<span class="quotelev1">&gt; review the revised code. Hopefully, you will find most of the bugs  
</span><br>
<span class="quotelev1">&gt; to be
</span><br>
<span class="quotelev1">&gt; minor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advise of any concerns about this merge. The schedule is  
</span><br>
<span class="quotelev1">&gt; totally
</span><br>
<span class="quotelev1">&gt; driven by the requests of the MPI team members (delaying the merge  
</span><br>
<span class="quotelev1">&gt; has no
</span><br>
<span class="quotelev1">&gt; impact on ORTE development), so requests to shift the schedule  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; discussed amongst the community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3213.php">Jeff Squyres: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3211.php">George Bosilca: "Re: [OMPI devel] more vt woes"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Ralph Castain: "[OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3228.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
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
