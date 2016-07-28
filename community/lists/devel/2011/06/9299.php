<?
$subject_val = "[OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 15:00:45 2011" -->
<!-- isoreceived="20110606190045" -->
<!-- sent="Mon, 6 Jun 2011 15:00:36 -0400" -->
<!-- isosent="20110606190036" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Resilient ORTE" -->
<!-- id="EB3451E5-86E0-46E0-8BAD-A85D4D095976_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 15:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Previous message:</strong> <a href="9298.php">Sebastian Rinke: "[OMPI devel] openib error for message size 1.5 GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Maybe reply:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Maybe reply:</strong> <a href="9409.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Allow the runtime to handle fail-stop failures for both runtime (daemons) or application level processes. This patch extends the orte_process_name_t structure with a field to store the process epoch (the number of times it died so far), and add an application failure notification callback function to be registered in the runtime. 
<br>
<p>WHY: Necessary to correctly implement the error handling in the MPI 2.2 standard. In addition, such a resilient runtime is a cornerstone for any level of fault tolerance support we want to provide in the future (such as the MPI-3 Run-Through Stabilization or FT-MPI).
<br>
<p>WHEN:
<br>
<p>WHERE: Patch attached to this email, based on trunk r24747.
<br>
TIMEOUT: 2 weeks from now, on Monday 20 June.
<br>
<p>------
<br>
<p>MORE DETAILS:
<br>
<p>Currently the infrastructure required to enable any kind of fault tolerance development in Open MPI (with the exception of the checkpoint/restart) is missing. However, before developing any fault tolerant support at the application (MPI) level, we need to have a resilient runtime. The changes in this patch address this lack of support and would allow anyone to implement a fault tolerance protocol at the MPI layer without having to worry about the ORTE stabilization.
<br>
<p>This patch will allow the runtime to drop any dead daemons, and re-route all communications around the holes in order to __ALWAYS__ deliver a message as long as the destination process is alive. The application is informed (via a callback) about the loss of the processes with the same jobid. In this patch we do not address the MPI_ERROR_RETURN type of failures, we focused on the MPI_ERROR_ABORT ones. Moreover, we empowered the application level with the decision, instead of taking it down in the runtime.
<br>
<p>NEW STUFF:
<br>
<p>Epoch - A counter that tracks the number of times a process has been detected to have terminated, either from a failure or an expected termination. After the termination is detected, the HNP coordinates all other process&#146;s knowledge of the new epoch. Each ORTED will know the epoch of the other processes in the job, but it will not actually store anything until the epochs change. 
<br>
<p>Run-Through Stabilization - When an ORTED (or HNP) detects that another process has terminated, it repairs the routing layer and informs the HNP. The HNP tells all other processes about the failure so they can also repair their routing layers an update their internal bookkeeping. The processes do not abort after the termination is detected.
<br>
<p>Callback Function - When the HNP tells all the ORTEDs about the failures, they tell the ORTE layers within the applications. The application level ORTE layers have a callback function that they use to inform the OMPI layer about the error. Currently the OMPI errhandler code fills in this callback function so it is informed when there is an error and it aborts (to maintain the current default behavior of MPI). This callback function can also be used in an ORTE only application to perform application based fault tolerance (ABFT) and allow the application to continue.
<br>
<p>NECESSARY FOR IMPLEMENTATION:
<br>
<p>Epoch - The orte_process_name_t struct now has a field for epoch. This means that whenever sending a message, the most current version of the epoch needs to be in this field. This is a simple look up using the function in orte/util/nidmap.c: orte_util_lookup_epoch(). In the orte/orted/orted_comm.c code, there is a check to make sure that it isn&#146;t trying to send messages to a process that has already terminated (don&#146;t send to a process with an epoch less than the current epoch). Make sure that if you are sending a message, you have the most up to date data here.
<br>
<p>Routing - So far, only the binomial routing layer has been updated to use the new resilience features. To modify other routing layers to be able to continue running after a process failure, they need to be able to detect which processes are not currently running and route around them. The errmgr gives the routing layer two chances to do this. First it calls delete_route for each process that fails, then it calls update_routing_tree after it has appropriately marked each process. Before either of these things happen the epoch and process state have already been updates so the routing layer can use this data to determine which processes are alive and which are dead. A convenience function has been added to orte/util/nidmap.h called orte_util_proc_is_running() which allows the ORTEDs to determine the status of a process. Keep in mind that a process is not running if it hasn&#146;t started up yet so it is wise to check the epoch (to make sure that it isn&#146;t ORTE_EPOCH_MIN) as well to make sure that you&#146;re actually detecting an error and not just noticing that an ORTED hasn&#146;t finished starting.
<br>
<p>Callback - If you want to implement some sort of fault tolerance on top of this code, use the callback function in the errmgr framework. There is a new function in the errmgr code called set_fault_callback that takes a function pointer. The ompi_init code sets this to a default value just after it calls orte_init (to make sure that there is an errmgr to call into). If you later set this to a new function, you will get the callback to notify you of process failures. Remember that you&#146;ll need to handle any sort of MPI level fault tolerance at this point because you&#146;ve taken away the callback for the OMPI layer.
<br>
<p><p><p><p>

<br><p>
<p><p><p><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9299/orte-resil.patch.bz2">orte-resil.patch.bz2</a>
</ul>
<!-- attachment="orte-resil.patch.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9300.php">Mike Dubman: "Re: [OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Previous message:</strong> <a href="9298.php">Sebastian Rinke: "[OMPI devel] openib error for message size 1.5 GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9349.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Maybe reply:</strong> <a href="9384.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Maybe reply:</strong> <a href="9409.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
