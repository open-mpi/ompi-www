<?
$subject_val = "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 15:44:42 2008" -->
<!-- isoreceived="20080212204442" -->
<!-- sent="Tue, 12 Feb 2008 13:43:58 -0700 (MST)" -->
<!-- isosent="20080212204358" -->
<!-- name="Doug Tody" -->
<!-- email="dtody_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk" -->
<!-- id="Pine.LNX.4.64.0802121342220.4575_at_localhost.localdomain" -->
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
<strong>From:</strong> Doug Tody (<em>dtody_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 15:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3222.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Previous message:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Ralph Castain: "[OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph -
<br>
<p>How extensive are the changes involved in removing the GPR?  How hard would
<br>
it be for someone to maintain an enhanced version of this as an addon or
<br>
compile-time optional module?  Thanks.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Doug
<br>
<p><p>On Mon, 11 Feb 2008, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Per last week's telecon, we planned the merge of the latest ORTE devel
</span><br>
<span class="quotelev1">&gt; branch to the OMPI trunk for after Sun had committed its C++ changes. That
</span><br>
<span class="quotelev1">&gt; happened over the weekend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Therefore, based on the requests at the telecon, I will be merging the
</span><br>
<span class="quotelev1">&gt; current ORTE devel branch to the trunk on Wed 2/13. I'll make the commit
</span><br>
<span class="quotelev1">&gt; around 4:30pm Eastern time - will send out warning shortly before the commit
</span><br>
<span class="quotelev1">&gt; to let you know it is coming. I'll advise of any delays.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will be a snapshot of that devel branch - it will include the upgraded
</span><br>
<span class="quotelev1">&gt; launch system, remove the GPR, add the new tool communication library, allow
</span><br>
<span class="quotelev1">&gt; arbitrary mpiruns to interconnect, supports the revamped hostfile and
</span><br>
<span class="quotelev1">&gt; dash-host behaviors per the wiki, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, it is incomplete and contains some known flaws. For example,
</span><br>
<span class="quotelev1">&gt; totalview support has not been enabled yet. Comm_spawn, which is currently
</span><br>
<span class="quotelev1">&gt; broken on the OMPI trunk, is fixed - but singleton comm_spawn remains
</span><br>
<span class="quotelev1">&gt; broken. I am in the process of establishing support for direct and
</span><br>
<span class="quotelev1">&gt; standalone launch capabilities, but those won't be in the merge. I have
</span><br>
<span class="quotelev1">&gt; updated all of the launchers, but can only certify the SLURM, TM, and RSH
</span><br>
<span class="quotelev1">&gt; ones to work - the Xgrid launcher is known to not compile, so if you have
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
<span class="quotelev1">&gt; review the revised code. Hopefully, you will find most of the bugs to be
</span><br>
<span class="quotelev1">&gt; minor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please advise of any concerns about this merge. The schedule is totally
</span><br>
<span class="quotelev1">&gt; driven by the requests of the MPI team members (delaying the merge has no
</span><br>
<span class="quotelev1">&gt; impact on ORTE development), so requests to shift the schedule should be
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3222.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Previous message:</strong> <a href="3220.php">Adrian Knoth: "[OMPI devel] New address selection for btl-tcp (was Re: [OMPI svn] svn:open-mpi r17307)"</a>
<li><strong>In reply to:</strong> <a href="3192.php">Ralph Castain: "[OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Reply:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
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
