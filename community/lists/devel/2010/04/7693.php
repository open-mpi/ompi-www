<?
$subject_val = "Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  5 19:08:04 2010" -->
<!-- isoreceived="20100405230804" -->
<!-- sent="Mon, 5 Apr 2010 17:07:56 -0600" -->
<!-- isosent="20100405230756" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure" -->
<!-- id="1FF01192-09F2-4AC9-80AC-EC8621C6357A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AF18FF36-0705-48BA-965A-B088BC970443_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-05 19:07:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7694.php">luyang dong: "[OMPI devel] inquiry about mpirun"</a>
<li><strong>Previous message:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7684.php">Ralph Castain: "[OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This RFC has been cancelled.
<br>
<p>It proved impossible to implement cleanly given the current &quot;composite&quot; nature of the errmgr framework. This creates an indeterminate state issue when falling between errmgr modules once async messaging is implemented. The only solution we could find was a giant global &quot;lock&quot; across ORTE, which defeated the purpose of async operations.
<br>
<p>Once Josh commits his other modules, we will work with him to review those modules and see how we can reorganize this framework to a more conventional mode of operation where the individual modules are independent.
<br>
<p>Meantime, we have moved the orcm module to the orcm code base and will &quot;no-build&quot; all other modules to avoid the problems. Unfortunately, this means we will also have to copy significant chunks of orte code over to orcm until this can be resolved, but it hopefully won't be too far into the future before the two code bases can be re-merged.
<br>
<p><p>On Apr 1, 2010, at 10:35 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Modify the errmgr framework's API and have the odls call it to update process state
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Remove the current loop in mpirun whereby mpirun &quot;messages&quot; itself with updated state on local processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Make the errmgr &quot;proc_aborted&quot; API more general, and thus change the few places it is called from within orte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tues April 6 telecon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; Currently, the odls base functions update mpirun's knowledge regarding the state of local procs by one of two mechanisms:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. if we are a daemon, we send the update info to the HNP via the rml. The HNP receives this in plm_base_receive, which then updates the relevant data objects and calls a function to check for job termination. If the proc abnormally terminated, then that function calls the errmgr to report it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. if we are the HNP, we post a &quot;message event&quot; that loops back to a different function that updates the proc state and calls the check job termination function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The proposed change would cleanup the &quot;update proc state&quot; procedure by removing the &quot;message event&quot; callback in the HNP. This would involve:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. change the errmgr.proc_aborted API to be errmgr.update_proc_state (or pick your name) and add the proc state to the parameter list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. modify the odls_base_default_fns so that they call errmgr.update_proc_state instead of automatically sending a message back to the HNP or pushing a message event if we already are the HNP whenever a proc changes its state. This would allow us to remove the message event loop from the HNP, which will help with thread issues. It also allows the daemons to do something other than just notify the HNP, which is a motivator for me/Cisco.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. modify plm_base_receive so that messages to update proc state are referred directly to the errmgr.update_proc_state API
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. create an orted module for the errmgr that sends an &quot;update proc state&quot; message back to the HNP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. create an HNP module for the errmgr that locally updates the proc state, checks for job termination, etc. The code in the plm base function for that purpose (check_job_complete) would be moved here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This shouldn't impact anyone EXCEPT for those out there with branches that might get a conflict due to the errmgr API change. Hopefully that doesn't hit too many people.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7694.php">luyang dong: "[OMPI devel] inquiry about mpirun"</a>
<li><strong>Previous message:</strong> <a href="7692.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>In reply to:</strong> <a href="7684.php">Ralph Castain: "[OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
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
