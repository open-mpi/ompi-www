<?
$subject_val = "[OMPI devel] RFC: Remove messaging loop in proc state update procedure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 12:35:13 2010" -->
<!-- isoreceived="20100401163513" -->
<!-- sent="Thu, 1 Apr 2010 10:35:05 -0600" -->
<!-- isosent="20100401163505" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove messaging loop in proc state update procedure" -->
<!-- id="AF18FF36-0705-48BA-965A-B088BC970443_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove messaging loop in proc state update procedure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 12:35:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7685.php">Eugene Loh: "[OMPI devel] adding ping-pong test to examples directory?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7683.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7693.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<li><strong>Reply:</strong> <a href="7693.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Modify the errmgr framework's API and have the odls call it to update process state
<br>
<p>WHY: Remove the current loop in mpirun whereby mpirun &quot;messages&quot; itself with updated state on local processes
<br>
<p>WHERE: Make the errmgr &quot;proc_aborted&quot; API more general, and thus change the few places it is called from within orte
<br>
<p>TIMEOUT: Tues April 6 telecon
<br>
<p>======================================================================
<br>
Currently, the odls base functions update mpirun's knowledge regarding the state of local procs by one of two mechanisms:
<br>
<p>1. if we are a daemon, we send the update info to the HNP via the rml. The HNP receives this in plm_base_receive, which then updates the relevant data objects and calls a function to check for job termination. If the proc abnormally terminated, then that function calls the errmgr to report it.
<br>
<p>2. if we are the HNP, we post a &quot;message event&quot; that loops back to a different function that updates the proc state and calls the check job termination function.
<br>
<p>The proposed change would cleanup the &quot;update proc state&quot; procedure by removing the &quot;message event&quot; callback in the HNP. This would involve:
<br>
<p>1. change the errmgr.proc_aborted API to be errmgr.update_proc_state (or pick your name) and add the proc state to the parameter list.
<br>
<p>2. modify the odls_base_default_fns so that they call errmgr.update_proc_state instead of automatically sending a message back to the HNP or pushing a message event if we already are the HNP whenever a proc changes its state. This would allow us to remove the message event loop from the HNP, which will help with thread issues. It also allows the daemons to do something other than just notify the HNP, which is a motivator for me/Cisco.
<br>
<p>3. modify plm_base_receive so that messages to update proc state are referred directly to the errmgr.update_proc_state API
<br>
<p>4. create an orted module for the errmgr that sends an &quot;update proc state&quot; message back to the HNP
<br>
<p>5. create an HNP module for the errmgr that locally updates the proc state, checks for job termination, etc. The code in the plm base function for that purpose (check_job_complete) would be moved here.
<br>
<p>This shouldn't impact anyone EXCEPT for those out there with branches that might get a conflict due to the errmgr API change. Hopefully that doesn't hit too many people.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7685.php">Eugene Loh: "[OMPI devel] adding ping-pong test to examples directory?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/03/7683.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 1/1: improvements to the &quot;notifier&quot; framework and ORTE WDC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7693.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
<li><strong>Reply:</strong> <a href="7693.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove messaging loop in proc state update procedure"</a>
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
