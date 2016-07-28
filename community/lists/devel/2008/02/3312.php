<?
$subject_val = "Re: [OMPI devel] Trunk returned to normal operations";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 08:52:10 2008" -->
<!-- isoreceived="20080228135210" -->
<!-- sent="Thu, 28 Feb 2008 06:51:59 -0700" -->
<!-- isosent="20080228135159" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk returned to normal operations" -->
<!-- id="C3EC0A8F.C695%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6E376574-B612-4278-90E0-1BB05035EBDA_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk returned to normal operations<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 08:51:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3313.php">Ralph H Castain: "[OMPI devel] Revised trunk: debugging output"</a>
<li><strong>Previous message:</strong> <a href="3311.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>In reply to:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3314.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/27/08 11:23 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have 2 questions related to the merge.
</span><br>
<span class="quotelev1">&gt; 1. How about orte_run_debugger ? Looks like this function is now never
</span><br>
<span class="quotelev1">&gt; called. Should we remove it ?
</span><br>
<p>Not yet. Jeff is working on a new debugger integration on a tmp branch. We
<br>
will merge that into the trunk when complete - we have to do some
<br>
modifications to reflect the revamped architecture.
<br>
<p>NOTE: This means that totalview is -not- currently supported on the trunk.
<br>
<p><p><span class="quotelev1">&gt; 2. There was a nice feature in the old ORTE that I particularly liked.
</span><br>
<span class="quotelev1">&gt; The ability to specify a default hostfile in the mca-params.conf file
</span><br>
<span class="quotelev1">&gt; (rds_hostfile_path). As there is no rds anymore do we still have this
</span><br>
<span class="quotelev1">&gt; or some similar feature or do we have to always specify the
</span><br>
<span class="quotelev1">&gt; machinefile via the command line option ?
</span><br>
<p>Hmmm...well, I'm afraid we don't now, though there is no reason we couldn't
<br>
do it. The revised specification for hostfile operations changed the scope
<br>
of &quot;hostfile&quot; to apply at the app_context level. So if we have a hostfile
<br>
mca param, the issue becomes &quot;which app_context does that apply to?&quot;.
<br>
<p>I honestly have no opinion on this - if you would like to raise the
<br>
discussion with the community, I can implement whatever people decide. I can
<br>
see one option might be to say that any mca-specified hostfile would provide
<br>
a &quot;global&quot; pool of nodes, with any cmd-line specs then indicating which of
<br>
those hosts are to be used for that app_context (and no cmd-line spec
<br>
meaning draw from the &quot;global&quot; pool).
<br>
<p>I'll leave that for you folks to decide...just let me know what you want the
<br>
name to be, and how you want it to behave.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2008, at 9:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, the ORTE merge appears to have gone well and is now complete -
</span><br>
<span class="quotelev2">&gt;&gt; you are
</span><br>
<span class="quotelev2">&gt;&gt; free to use the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A few caveats:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. obviously, you will need to autogen/configure once you update. I
</span><br>
<span class="quotelev2">&gt;&gt; -strongly- recommend you rm -rf your install directory first as you
</span><br>
<span class="quotelev2">&gt;&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; definitely be hit with stale libraries from this commit
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. this is a &quot;drop&quot; from the ORTE devel effort. As such, it is -not-
</span><br>
<span class="quotelev2">&gt;&gt; complete. There are several known issues, particularly with
</span><br>
<span class="quotelev2">&gt;&gt; comm_spawn and
</span><br>
<span class="quotelev2">&gt;&gt; singleton comm_spawn in certain environments and scenarios. I have a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fix&quot;
</span><br>
<span class="quotelev2">&gt;&gt; already done and ready to be applied for the comm_spawn problems,
</span><br>
<span class="quotelev2">&gt;&gt; but I want
</span><br>
<span class="quotelev2">&gt;&gt; to test it some more in the morning before committing it to the
</span><br>
<span class="quotelev2">&gt;&gt; trunk - and
</span><br>
<span class="quotelev2">&gt;&gt; I didn't want to delay this merge any longer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. we know that checkpoint/restart is currently broken. Josh and I
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; discussed a couple of options for repairing it, and he will look at
</span><br>
<span class="quotelev2">&gt;&gt; it as
</span><br>
<span class="quotelev2">&gt;&gt; soon as he has a chance. It isn't a big problem - just need to
</span><br>
<span class="quotelev2">&gt;&gt; decide which
</span><br>
<span class="quotelev2">&gt;&gt; option he would prefer to pursue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The remaining ORTE scalability work should be moving into the trunk
</span><br>
<span class="quotelev2">&gt;&gt; over the
</span><br>
<span class="quotelev2">&gt;&gt; next few weeks (I will be on vacation 3/7-14, so it will likely take
</span><br>
<span class="quotelev2">&gt;&gt; through
</span><br>
<span class="quotelev2">&gt;&gt; March). We do not anticipate any API changes or framework adds/
</span><br>
<span class="quotelev2">&gt;&gt; deletes the
</span><br>
<span class="quotelev2">&gt;&gt; rest of the way - there will be a few new components added to existing
</span><br>
<span class="quotelev2">&gt;&gt; frameworks, some revamp of the logic in a few places, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will try to cover all the changes in one or two notes over the
</span><br>
<span class="quotelev2">&gt;&gt; next few
</span><br>
<span class="quotelev2">&gt;&gt; days to avoid carpal tunnel. Please feel free to ask questions and
</span><br>
<span class="quotelev2">&gt;&gt; I'll do
</span><br>
<span class="quotelev2">&gt;&gt; my best to provide answers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again for the cooperation tonight...
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3313.php">Ralph H Castain: "[OMPI devel] Revised trunk: debugging output"</a>
<li><strong>Previous message:</strong> <a href="3311.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17635"</a>
<li><strong>In reply to:</strong> <a href="3310.php">George Bosilca: "Re: [OMPI devel] Trunk returned to normal operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3314.php">Aurélien Bouteiller: "Re: [OMPI devel] Trunk returned to normal operations"</a>
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
