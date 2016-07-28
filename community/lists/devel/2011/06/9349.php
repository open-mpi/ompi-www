<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 08:33:38 2011" -->
<!-- isoreceived="20110610123338" -->
<!-- sent="Fri, 10 Jun 2011 06:33:29 -0600" -->
<!-- isosent="20110610123329" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="3325C4C0-0B0E-47F9-A38B-C25DC6D215BA_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EB3451E5-86E0-46E0-8BAD-A85D4D095976_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-10 08:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9350.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9348.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, finally have time to sit down and review this. It looks pretty much identical to what was done in ORCM - we just kept &quot;epoch&quot; separate from the process name, and use multicast to notify all procs that someone failed. I do have a few questions/comments about your proposed patch:
<br>
<p>1. I note that in some places you just set peer_name.epoch = proc_name.epoch, and in others you make the assignment by calling a new API orte_ess.proc_get_epoch(&amp;proc_name). Ditto for proc_set_epoch. What are the rules for when each method should be used? Which leads to...
<br>
<p>2. I'm puzzled as to why you are storing process state and epoch number in the modex as well as in the process name and orte_proc_t struct. This creates a bit of a race condition as the two will be out-of-sync for some (probably small) period of time, and looks like unnecessary duplication. Is there some reason for doing this? We are trying to eliminate duplicate storage because of the data confusion and memory issues, hence my question.
<br>
<p>3. as a follow on to #2, I am bothered that we now have the ESS storing proc state. That isn't the functional purpose of the ESS - that's a PLM function. Is there some reason for doing this in the ESS? Why aren't we just looking at the orte_proc_t for that proc and using its state field? I guess I can understand if you want to get that via an API (instead of having code to lookup the proc_t in multiple places), but then let's put it in the PLM please. I note that it is only used in the binomial routing code, so why not just put a static function in there to get the state of a proc rather than creating another API?
<br>
<p>4. ess_base_open.c: the default orte_ess module appears to be missing an entry for proc_set_epoch.
<br>
<p>5. I really don't think that notification of proc failure belongs in the orted_comm - messages notifying of proc failure should be received in the errmgr. This allows people who want to handle things differently (e.g., orcm) the ability to create their own errmgr component(s) for daemons and HNP that send the messages over their desired messaging system, decide how they want to respond, etc. Putting it in orted_comm forces everyone to use only this one method, which conflicts with allowing freedom for others to explore alternative methods, and frankly, I don't see any strong reason that outweighs that limitation.
<br>
<p>6. I don't think this errmgr_fault_callback registration is going to work, per my response to Josh's RFC. I'll leave the discussion in that thread.
<br>
<p><p>On Jun 6, 2011, at 1:00 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Allow the runtime to handle fail-stop failures for both runtime (daemons) or application level processes. This patch extends the orte_process_name_t structure with a field to store the process epoch (the number of times it died so far), and add an application failure notification callback function to be registered in the runtime. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Necessary to correctly implement the error handling in the MPI 2.2 standard. In addition, such a resilient runtime is a cornerstone for any level of fault tolerance support we want to provide in the future (such as the MPI-3 Run-Through Stabilization or FT-MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Patch attached to this email, based on trunk r24747.
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 2 weeks from now, on Monday 20 June.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAILS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently the infrastructure required to enable any kind of fault tolerance development in Open MPI (with the exception of the checkpoint/restart) is missing. However, before developing any fault tolerant support at the application (MPI) level, we need to have a resilient runtime. The changes in this patch address this lack of support and would allow anyone to implement a fault tolerance protocol at the MPI layer without having to worry about the ORTE stabilization.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch will allow the runtime to drop any dead daemons, and re-route all communications around the holes in order to __ALWAYS__ deliver a message as long as the destination process is alive. The application is informed (via a callback) about the loss of the processes with the same jobid. In this patch we do not address the MPI_ERROR_RETURN type of failures, we focused on the MPI_ERROR_ABORT ones. Moreover, we empowered the application level with the decision, instead of taking it down in the runtime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NEW STUFF:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Epoch - A counter that tracks the number of times a process has been detected to have terminated, either from a failure or an expected termination. After the termination is detected, the HNP coordinates all other process&#146;s knowledge of the new epoch. Each ORTED will know the epoch of the other processes in the job, but it will not actually store anything until the epochs change. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run-Through Stabilization - When an ORTED (or HNP) detects that another process has terminated, it repairs the routing layer and informs the HNP. The HNP tells all other processes about the failure so they can also repair their routing layers an update their internal bookkeeping. The processes do not abort after the termination is detected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Callback Function - When the HNP tells all the ORTEDs about the failures, they tell the ORTE layers within the applications. The application level ORTE layers have a callback function that they use to inform the OMPI layer about the error. Currently the OMPI errhandler code fills in this callback function so it is informed when there is an error and it aborts (to maintain the current default behavior of MPI). This callback function can also be used in an ORTE only application to perform application based fault tolerance (ABFT) and allow the application to continue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NECESSARY FOR IMPLEMENTATION:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Epoch - The orte_process_name_t struct now has a field for epoch. This means that whenever sending a message, the most current version of the epoch needs to be in this field. This is a simple look up using the function in orte/util/nidmap.c: orte_util_lookup_epoch(). In the orte/orted/orted_comm.c code, there is a check to make sure that it isn&#146;t trying to send messages to a process that has already terminated (don&#146;t send to a process with an epoch less than the current epoch). Make sure that if you are sending a message, you have the most up to date data here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Routing - So far, only the binomial routing layer has been updated to use the new resilience features. To modify other routing layers to be able to continue running after a process failure, they need to be able to detect which processes are not currently running and route around them. The errmgr gives the routing layer two chances to do this. First it calls delete_route for each process that fails, then it calls update_routing_tree after it has appropriately marked each process. Before either of these things happen the epoch and process state have already been updates so the routing layer can use this data to determine which processes are alive and which are dead. A convenience function has been added to orte/util/nidmap.h called orte_util_proc_is_running() which allows the ORTEDs to determine the status of a process. Keep in mind that a process is not running if it hasn&#146;t started up yet so it is wise to check the epoch (to make sure that it isn&#146;t ORTE_EPOCH_MIN) as well to make sure that you&#146;re actually d</span><br>
etecting an error and not just noticing that an ORTED hasn&#146;t finished starting.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Callback - If you want to implement some sort of fault tolerance on top of this code, use the callback function in the errmgr framework. There is a new function in the errmgr code called set_fault_callback that takes a function pointer. The ompi_init code sets this to a default value just after it calls orte_init (to make sure that there is an errmgr to call into). If you later set this to a new function, you will get the callback to notify you of process failures. Remember that you&#146;ll need to handle any sort of MPI level fault tolerance at this point because you&#146;ve taken away the callback for the OMPI layer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;orte-resil.patch.bz2&gt;
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
<li><strong>Next message:</strong> <a href="9350.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9348.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9299.php">George Bosilca: "[OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
