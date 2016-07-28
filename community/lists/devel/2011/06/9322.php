<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 16:55:58 2011" -->
<!-- isoreceived="20110607205558" -->
<!-- sent="Tue, 7 Jun 2011 16:55:52 -0400" -->
<!-- isosent="20110607205552" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTikRQgojprVYuoGgnP8rdrgi3T-ywg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BANLkTimBz732qytJ7o62h6ydZE516UXfrg_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 16:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9321.php">Kishor Kharbas: "[OMPI devel] MPI application hangs after a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="9308.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9326.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9326.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looked through the patch a bit more today and had a few notes/questions.
<br>
- orte_errmgr.post_startup() start the persistent RML message. There
<br>
does not seem to be a shutdown version of this (to deregister the RML
<br>
message at orte_finalize time). Was this intentional, or just missed?
<br>
- in the orte_errmgr.set_fault_callback: it would be nice if it
<br>
returned the previous callback, so you could layer more than one
<br>
'thing' on top of ORTE and have them chain in a sigaction-like manner.
<br>
- orte_process_info.max_procs: this seems to be only used in the
<br>
binomial routed, but I was a bit unclear about its purpose. Can you
<br>
describe what it does, and how it is used?
<br>
- in orted_comm.c: you process the ORTE_PROCESS_FAILED_NOTIFICATION
<br>
message here. Why not push all of that logic into the errmgr
<br>
components? It is not a big deal, just curious.
<br>
<p>I'll probably send more notes after some more digging and testing of
<br>
the code. But the patch is looking good. Good work!
<br>
<p>-- Josh
<br>
<p>On Tue, Jun 7, 2011 at 10:51 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I briefly looked over the patch. Excluding the epochs (which we don't
</span><br>
<span class="quotelev1">&gt; need now, but will soon) it looks similar to what I have setup on my
</span><br>
<span class="quotelev1">&gt; MPI run-through stabilization branch - so it should support that work
</span><br>
<span class="quotelev1">&gt; nicely. I'll try to test it this week and send back any other
</span><br>
<span class="quotelev1">&gt; comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 7, 2011 at 10:46 AM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This could certainly work alongside another ORCM or any other fault
</span><br>
<span class="quotelev2">&gt;&gt; detection/prediction/recovery mechanism. Most of the code is just dedicated
</span><br>
<span class="quotelev2">&gt;&gt; to keeping the epoch up to date and tracking the status of the processes.
</span><br>
<span class="quotelev2">&gt;&gt; The underlying idea was to provide a way for the application to decide what
</span><br>
<span class="quotelev2">&gt;&gt; its fault policy would be rather than trying to dictate one in the runtime.
</span><br>
<span class="quotelev2">&gt;&gt; If any other layer wanted to register a callback function with this code, it
</span><br>
<span class="quotelev2">&gt;&gt; could do anything it wanted to on top of it.
</span><br>
<span class="quotelev2">&gt;&gt; Wesley
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, June 7, 2011 at 7:41 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm on travel this week, but will look this over when I return. From the
</span><br>
<span class="quotelev2">&gt;&gt; description, it sounds nearly identical to what we did in ORCM, so I expect
</span><br>
<span class="quotelev2">&gt;&gt; there won't be many issues. You do get some race conditions that the new
</span><br>
<span class="quotelev2">&gt;&gt; state machine code should help resolve.
</span><br>
<span class="quotelev2">&gt;&gt; Only difference I can quickly see is that we chose not to modify the process
</span><br>
<span class="quotelev2">&gt;&gt; name structure, keeping the &quot;epoch&quot; (we called it &quot;incarnation&quot;) as a
</span><br>
<span class="quotelev2">&gt;&gt; separate value. Since we aren't terribly concerned about backward
</span><br>
<span class="quotelev2">&gt;&gt; compatibility, I don't consider this a significant issue - but something the
</span><br>
<span class="quotelev2">&gt;&gt; community should recognize.
</span><br>
<span class="quotelev2">&gt;&gt; My main concern will be to ensure that the new code contains enough
</span><br>
<span class="quotelev2">&gt;&gt; flexibility to allow integration with other layers such as ORCM without
</span><br>
<span class="quotelev2">&gt;&gt; creating potential conflict over &quot;double protection&quot; - i.e., if the layer
</span><br>
<span class="quotelev2">&gt;&gt; above ORTE wants to provide a certain level of fault protection, then ORTE
</span><br>
<span class="quotelev2">&gt;&gt; needs to get out of the way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jun 6, 2011 at 1:00 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Allow the runtime to handle fail-stop failures for both runtime
</span><br>
<span class="quotelev2">&gt;&gt; (daemons) or application level processes. This patch extends the
</span><br>
<span class="quotelev2">&gt;&gt; orte_process_name_t structure with a field to store the process epoch (the
</span><br>
<span class="quotelev2">&gt;&gt; number of times it died so far), and add an application failure notification
</span><br>
<span class="quotelev2">&gt;&gt; callback function to be registered in the runtime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Necessary to correctly implement the error handling in the MPI 2.2
</span><br>
<span class="quotelev2">&gt;&gt; standard. In addition, such a resilient runtime is a cornerstone for any
</span><br>
<span class="quotelev2">&gt;&gt; level of fault tolerance support we want to provide in the future (such as
</span><br>
<span class="quotelev2">&gt;&gt; the MPI-3 Run-Through Stabilization or FT-MPI).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: Patch attached to this email, based on trunk r24747.
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: 2 weeks from now, on Monday 20 June.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAILS:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently the infrastructure required to enable any kind of fault tolerance
</span><br>
<span class="quotelev2">&gt;&gt; development in Open MPI (with the exception of the checkpoint/restart) is
</span><br>
<span class="quotelev2">&gt;&gt; missing. However, before developing any fault tolerant support at the
</span><br>
<span class="quotelev2">&gt;&gt; application (MPI) level, we need to have a resilient runtime. The changes in
</span><br>
<span class="quotelev2">&gt;&gt; this patch address this lack of support and would allow anyone to implement
</span><br>
<span class="quotelev2">&gt;&gt; a fault tolerance protocol at the MPI layer without having to worry about
</span><br>
<span class="quotelev2">&gt;&gt; the ORTE stabilization.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This patch will allow the runtime to drop any dead daemons, and re-route all
</span><br>
<span class="quotelev2">&gt;&gt; communications around the holes in order to __ALWAYS__ deliver a message as
</span><br>
<span class="quotelev2">&gt;&gt; long as the destination process is alive. The application is informed (via a
</span><br>
<span class="quotelev2">&gt;&gt; callback) about the loss of the processes with the same jobid. In this patch
</span><br>
<span class="quotelev2">&gt;&gt; we do not address the MPI_ERROR_RETURN type of failures, we focused on the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ERROR_ABORT ones. Moreover, we empowered the application level with the
</span><br>
<span class="quotelev2">&gt;&gt; decision, instead of taking it down in the runtime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NEW STUFF:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Epoch - A counter that tracks the number of times a process has been
</span><br>
<span class="quotelev2">&gt;&gt; detected to have terminated, either from a failure or an expected
</span><br>
<span class="quotelev2">&gt;&gt; termination. After the termination is detected, the HNP coordinates all
</span><br>
<span class="quotelev2">&gt;&gt; other process&#146;s knowledge of the new epoch. Each ORTED will know the epoch
</span><br>
<span class="quotelev2">&gt;&gt; of the other processes in the job, but it will not actually store anything
</span><br>
<span class="quotelev2">&gt;&gt; until the epochs change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Run-Through Stabilization - When an ORTED (or HNP) detects that another
</span><br>
<span class="quotelev2">&gt;&gt; process has terminated, it repairs the routing layer and informs the HNP.
</span><br>
<span class="quotelev2">&gt;&gt; The HNP tells all other processes about the failure so they can also repair
</span><br>
<span class="quotelev2">&gt;&gt; their routing layers an update their internal bookkeeping. The processes do
</span><br>
<span class="quotelev2">&gt;&gt; not abort after the termination is detected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Callback Function - When the HNP tells all the ORTEDs about the failures,
</span><br>
<span class="quotelev2">&gt;&gt; they tell the ORTE layers within the applications. The application level
</span><br>
<span class="quotelev2">&gt;&gt; ORTE layers have a callback function that they use to inform the OMPI layer
</span><br>
<span class="quotelev2">&gt;&gt; about the error. Currently the OMPI errhandler code fills in this callback
</span><br>
<span class="quotelev2">&gt;&gt; function so it is informed when there is an error and it aborts (to maintain
</span><br>
<span class="quotelev2">&gt;&gt; the current default behavior of MPI). This callback function can also be
</span><br>
<span class="quotelev2">&gt;&gt; used in an ORTE only application to perform application based fault
</span><br>
<span class="quotelev2">&gt;&gt; tolerance (ABFT) and allow the application to continue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NECESSARY FOR IMPLEMENTATION:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Epoch - The orte_process_name_t struct now has a field for epoch. This means
</span><br>
<span class="quotelev2">&gt;&gt; that whenever sending a message, the most current version of the epoch needs
</span><br>
<span class="quotelev2">&gt;&gt; to be in this field. This is a simple look up using the function in
</span><br>
<span class="quotelev2">&gt;&gt; orte/util/nidmap.c: orte_util_lookup_epoch(). In the orte/orted/orted_comm.c
</span><br>
<span class="quotelev2">&gt;&gt; code, there is a check to make sure that it isn&#146;t trying to send messages to
</span><br>
<span class="quotelev2">&gt;&gt; a process that has already terminated (don&#146;t send to a process with an epoch
</span><br>
<span class="quotelev2">&gt;&gt; less than the current epoch). Make sure that if you are sending a message,
</span><br>
<span class="quotelev2">&gt;&gt; you have the most up to date data here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Routing - So far, only the binomial routing layer has been updated to use
</span><br>
<span class="quotelev2">&gt;&gt; the new resilience features. To modify other routing layers to be able to
</span><br>
<span class="quotelev2">&gt;&gt; continue running after a process failure, they need to be able to detect
</span><br>
<span class="quotelev2">&gt;&gt; which processes are not currently running and route around them. The errmgr
</span><br>
<span class="quotelev2">&gt;&gt; gives the routing layer two chances to do this. First it calls delete_route
</span><br>
<span class="quotelev2">&gt;&gt; for each process that fails, then it calls update_routing_tree after it has
</span><br>
<span class="quotelev2">&gt;&gt; appropriately marked each process. Before either of these things happen the
</span><br>
<span class="quotelev2">&gt;&gt; epoch and process state have already been updates so the routing layer can
</span><br>
<span class="quotelev2">&gt;&gt; use this data to determine which processes are alive and which are dead. A
</span><br>
<span class="quotelev2">&gt;&gt; convenience function has been added to orte/util/nidmap.h called
</span><br>
<span class="quotelev2">&gt;&gt; orte_util_proc_is_running() which allows the ORTEDs to determine the status
</span><br>
<span class="quotelev2">&gt;&gt; of a process. Keep in mind that a process is not running if it hasn&#146;t
</span><br>
<span class="quotelev2">&gt;&gt; started up yet so it is wise to check the epoch (to make sure that it isn&#146;t
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_EPOCH_MIN) as well to make sure that you&#146;re actually detecting an error
</span><br>
<span class="quotelev2">&gt;&gt; and not just noticing that an ORTED hasn&#146;t finished starting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Callback - If you want to implement some sort of fault tolerance on top of
</span><br>
<span class="quotelev2">&gt;&gt; this code, use the callback function in the errmgr framework. There is a new
</span><br>
<span class="quotelev2">&gt;&gt; function in the errmgr code called set_fault_callback that takes a function
</span><br>
<span class="quotelev2">&gt;&gt; pointer. The ompi_init code sets this to a default value just after it calls
</span><br>
<span class="quotelev2">&gt;&gt; orte_init (to make sure that there is an errmgr to call into). If you later
</span><br>
<span class="quotelev2">&gt;&gt; set this to a new function, you will get the callback to notify you of
</span><br>
<span class="quotelev2">&gt;&gt; process failures. Remember that you&#146;ll need to handle any sort of MPI level
</span><br>
<span class="quotelev2">&gt;&gt; fault tolerance at this point because you&#146;ve taken away the callback for the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI layer.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9323.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9321.php">Kishor Kharbas: "[OMPI devel] MPI application hangs after a checkpoint"</a>
<li><strong>In reply to:</strong> <a href="9308.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9326.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9326.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
