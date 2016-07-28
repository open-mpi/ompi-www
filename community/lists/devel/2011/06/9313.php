<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 12:35:18 2011" -->
<!-- isoreceived="20110607163518" -->
<!-- sent="Tue, 7 Jun 2011 12:35:12 -0400" -->
<!-- isosent="20110607163512" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="F1C8D5CA586F4DB58E1174B6CDC9F9A6_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BANLkTi=TkbytGKDvfSZBQ=hLt0TY=q6QLQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 12:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9314.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9312.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9312.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tuesday, June 7, 2011 at 12:14 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 7, 2011 at 9:45 AM, Wesley Bland &lt;wbland_at_[hidden] (mailto:wbland_at_[hidden])&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; To adress your concerns about putting the epoch in the process name structure, putting it in there rather than in a separately maintained list simplifies things later. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not really concerned - I was just noting we had done it a tad differently, but nothing important.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For example, during communication you need to attach the epoch to each of your messages so they can be tracked later. If a process dies while the message is in flight, or you need to cancel your communication, you need to be able to find the matching message to the matching epoch. If the epoch isn't in the process name, then you have to modify to the message header for each type of message to include that information. Each process not only needs to know what the current version of the epoch is from it's own perspective, but also from the perspective of whomever is sending the message. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the epoch is process-unique - i.e., it is the number of times that this specific process has been started, which differs per proc since we don't restart all the procs every time one fails. So if I look at the epoch of the proc sending me a message, I really can't check it against my own value as the comparison is meaningless. All I really can do is check to see if it changed from the last time I heard from that proc, which would tell me that the proc has been restarted in the interim.
</span><br>
But that is the point of the epoch. It prevents communication with a failed process. If the epoch. If the epoch is too low, you know you're communicating with an old process and you need to drop the message. If it is too high, you know that the process has been restarted and you need to update your known epoch.
<br>
<p>Maybe I'm misunderstanding what you're saying?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is also true for things like reporting failures. To prevent duplicate notifications you would need to include your epoch in all the notifications so no one marks a process as failing twice. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure of the relevance here. We handle this without problem right now (at least, within orcm - haven't looked inside orte yet to see what needs to be brought back, if anything) without an epoch - and the state machine will resolve the remaining race conditions, which really don't pertain to epoch anyway.
</span><br>
An example here might be if a process fails and two other processes detect it. By marking which version of the process failed, the HNP knows that it is one failure detected by two processes rather than two failures being detected in quick succession.
<br>
<p>I'm not sure what ORCM does in the respect, but I don't know of anything in ORTE that would track this data other than the process state and that doesn't keep track of anything beyond one failure (which admittedly isn't an issue until we implement process recovery).
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Really the point is that by changing the process name, you prevent the need to pack the epoch each time you have any sort of communication. All that work is done along with packing the rest of the structure. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No argument - I don't mind having the value in the name. Makes no difference to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday, June 7, 2011 at 11:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for the explanation - as I said, I won't have time to really review the patch this week, but appreciate the info. I don't really expect to see a conflict as George had discussed this with me previously.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I know I'll have merge conflicts with my state machine branch, which would be ready for commit in the same time frame, but I'll hold off on that one and deal with the merge issues on my side. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Tue, Jun 7, 2011 at 8:46 AM, Wesley Bland &lt;wbland_at_[hidden] (mailto:wbland_at_[hidden])&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This could certainly work alongside another ORCM or any other fault detection/prediction/recovery mechanism. Most of the code is just dedicated to keeping the epoch up to date and tracking the status of the processes. The underlying idea was to provide a way for the application to decide what its fault policy would be rather than trying to dictate one in the runtime. If any other layer wanted to register a callback function with this code, it could do anything it wanted to on top of it. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Wesley
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Tuesday, June 7, 2011 at 7:41 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I'm on travel this week, but will look this over when I return. From the description, it sounds nearly identical to what we did in ORCM, so I expect there won't be many issues. You do get some race conditions that the new state machine code should help resolve.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Only difference I can quickly see is that we chose not to modify the process name structure, keeping the &quot;epoch&quot; (we called it &quot;incarnation&quot;) as a separate value. Since we aren't terribly concerned about backward compatibility, I don't consider this a significant issue - but something the community should recognize. 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; My main concern will be to ensure that the new code contains enough flexibility to allow integration with other layers such as ORCM without creating potential conflict over &quot;double protection&quot; - i.e., if the layer above ORTE wants to provide a certain level of fault protection, then ORTE needs to get out of the way. 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; On Mon, Jun 6, 2011 at 1:00 PM, George Bosilca &lt;bosilca_at_[hidden] (mailto:bosilca_at_[hidden])&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  WHAT: Allow the runtime to handle fail-stop failures for both runtime (daemons) or application level processes. This patch extends the orte_process_name_t structure with a field to store the process epoch (the number of times it died so far), and add an application failure notification callback function to be registered in the runtime.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  WHY: Necessary to correctly implement the error handling in the MPI 2.2 standard. In addition, such a resilient runtime is a cornerstone for any level of fault tolerance support we want to provide in the future (such as the MPI-3 Run-Through Stabilization or FT-MPI).
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  WHEN:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  WHERE: Patch attached to this email, based on trunk r24747.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  TIMEOUT: 2 weeks from now, on Monday 20 June.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  ------
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  MORE DETAILS:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Currently the infrastructure required to enable any kind of fault tolerance development in Open MPI (with the exception of the checkpoint/restart) is missing. However, before developing any fault tolerant support at the application (MPI) level, we need to have a resilient runtime. The changes in this patch address this lack of support and would allow anyone to implement a fault tolerance protocol at the MPI layer without having to worry about the ORTE stabilization.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  This patch will allow the runtime to drop any dead daemons, and re-route all communications around the holes in order to __ALWAYS__ deliver a message as long as the destination process is alive. The application is informed (via a callback) about the loss of the processes with the same jobid. In this patch we do not address the MPI_ERROR_RETURN type of failures, we focused on the MPI_ERROR_ABORT ones. Moreover, we empowered the application level with the decision, instead of taking it down in the runtime.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  NEW STUFF:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Epoch - A counter that tracks the number of times a process has been detected to have terminated, either from a failure or an expected termination. After the termination is detected, the HNP coordinates all other process&#226;&#128;&#153;s knowledge of the new epoch. Each ORTED will know the epoch of the other processes in the job, but it will not actually store anything until the epochs change.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Run-Through Stabilization - When an ORTED (or HNP) detects that another process has terminated, it repairs the routing layer and informs the HNP. The HNP tells all other processes about the failure so they can also repair their routing layers an update their internal bookkeeping. The processes do not abort after the termination is detected.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Callback Function - When the HNP tells all the ORTEDs about the failures, they tell the ORTE layers within the applications. The application level ORTE layers have a callback function that they use to inform the OMPI layer about the error. Currently the OMPI errhandler code fills in this callback function so it is informed when there is an error and it aborts (to maintain the current default behavior of MPI). This callback function can also be used in an ORTE only application to perform application based fault tolerance (ABFT) and allow the application to continue.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  NECESSARY FOR IMPLEMENTATION:
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Epoch - The orte_process_name_t struct now has a field for epoch. This means that whenever sending a message, the most current version of the epoch needs to be in this field. This is a simple look up using the function in orte/util/nidmap.c: orte_util_lookup_epoch(). In the orte/orted/orted_comm.c code, there is a check to make sure that it isn&#226;&#128;&#153;t trying to send messages to a process that has already terminated (don&#226;&#128;&#153;t send to a process with an epoch less than the current epoch). Make sure that if you are sending a message, you have the most up to date data here.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Routing - So far, only the binomial routing layer has been updated to use the new resilience features. To modify other routing layers to be able to continue running after a process failure, they need to be able to detect which processes are not currently running and route around them. The errmgr gives the routing layer two chances to do this. First it calls delete_route for each process that fails, then it calls update_routing_tree after it has appropriately marked each process. Before either of these things happen the epoch and process state have already been updates so the routing layer can use this data to determine which processes are alive and which are dead. A convenience function has been added to orte/util/nidmap.h called orte_util_proc_is_running() which allows the ORTEDs to determine the status of a process. Keep in mind that a process is not running if it hasn&#226;&#128;&#153;t started up yet so it is wise to check the epoch (to make sure that it isn&#226;&#128;&#153;t ORTE_EPOCH_MIN) as well to make sure that you&#226;&#128;&#153;re actually detecting an error and not just noticing that an ORTED hasn&#226;&#128;&#153;t finished starting.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  Callback - If you want to implement some sort of fault tolerance on top of this code, use the callback function in the errmgr framework. There is a new function in the errmgr code called set_fault_callback that takes a function pointer. The ompi_init code sets this to a default value just after it calls orte_init (to make sure that there is an errmgr to call into). If you later set this to a new function, you will get the callback to notify you of process failures. Remember that you&#226;&#128;&#153;ll need to handle any sort of MPI level fault tolerance at this point because you&#226;&#128;&#153;ve taken away the callback for the OMPI layer.
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev2">&gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;  devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] (mailto:devel_at_[hidden])
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9314.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9312.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9312.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
