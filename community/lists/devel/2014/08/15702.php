<?
$subject_val = "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 09:44:20 2014" -->
<!-- isoreceived="20140825134420" -->
<!-- sent="Mon, 25 Aug 2014 06:43:46 -0700" -->
<!-- isosent="20140825134346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite" -->
<!-- id="4921958B-ED4A-41D6-8D39-6CBD33DF6F1F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53FAFAE0.5030906_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-25 09:43:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15703.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="15701.php">Gilles Gouaillardet: "[OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="15701.php">Gilles Gouaillardet: "[OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Each collective is given a &quot;signature&quot; that is just the array of names for all procs involved in the collective. Thus, even though task 0 is involved in both of the disconnect barriers, the two collectives should be running in isolation from each other.
<br>
<p>The &quot;tags&quot; are just receive callbacks and have no meaning other than to associate a particular callback to a given send/recv pair. It is the signature that counts as the daemons are using that to keep the various collectives separated.
<br>
<p>I'll have to take a look at why task 2 is leaving early. The key will be to look at that signature to ensure we aren't getting it confused.
<br>
<p>On Aug 25, 2014, at 1:59 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when i run
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 ./intercomm_create
</span><br>
<span class="quotelev1">&gt; from the ibm test suite, it either :
</span><br>
<span class="quotelev1">&gt; - success
</span><br>
<span class="quotelev1">&gt; - hangs
</span><br>
<span class="quotelev1">&gt; - mpirun crashes (SIGSEGV) soon after writing the following message
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../src/ompi-trunk/orte/orted/pmix/pmix_server.c at line 566
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is what happens :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; first, the test program itself :
</span><br>
<span class="quotelev1">&gt; task 0 spawns task 1 : the inter communicator is ab_inter on task 0 and
</span><br>
<span class="quotelev1">&gt; parent on task 1
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; task 0 spawns task 2 : the inter communicator is ac_inter on task 0 and
</span><br>
<span class="quotelev1">&gt; parent on task 2
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; several operations (merge, barrier, ...)
</span><br>
<span class="quotelev1">&gt; and then without any synchronization :
</span><br>
<span class="quotelev1">&gt; - task 0 MPI_Comm_disconnect(ab_inter) and then
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect(ac_inter)
</span><br>
<span class="quotelev1">&gt; - task 1 and task 2 MPI_Comm_disconnect(parent)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i applied the attached pmix_debug.patch and ran
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca pmix_base_verbose 90 ./intercomm_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, tasks 0 and 1 execute a native fence and in parallel, tasks 0
</span><br>
<span class="quotelev1">&gt; and 2 execute a native fence.
</span><br>
<span class="quotelev1">&gt; they both use the *same* tags on different though overlapping tasks
</span><br>
<span class="quotelev1">&gt; bottom line, task 2 leave the fences *before* task 0 enterred the fence
</span><br>
<span class="quotelev1">&gt; (it seems task 1 told task 2 it is ok to leave the fence)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a simple work around is to call MPI_Barrier before calling
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at this stage, i doubt it is even possible to get this working at the
</span><br>
<span class="quotelev1">&gt; pmix level, so the fix
</span><br>
<span class="quotelev1">&gt; might be to have MPI_Comm_disconnect invoke MPI_Barrier
</span><br>
<span class="quotelev1">&gt; the attached comm_disconnect.patch always call the barrier before
</span><br>
<span class="quotelev1">&gt; (indirectly) invoking pmix
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could you please comment on this issue ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here are the relevant logs :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] pmix:native executing fence on 2 procs
</span><br>
<span class="quotelev1">&gt; [[8110,1],0] and [[8110,3],0]
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0]
</span><br>
<span class="quotelev1">&gt; [../../../../../../src/ompi-trunk/opal/mca/pmix/native/pmix_native.c:493] post
</span><br>
<span class="quotelev1">&gt; send to server
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] posting recv on tag 5
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] usock:send_nb: already connected to server -
</span><br>
<span class="quotelev1">&gt; queueing for send
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] usock:send_handler called to send to server
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] usock:send_handler SENDING TO SERVER
</span><br>
<span class="quotelev1">&gt; [soleil:00647] [[8110,2],0] pmix:native executing fence on 2 procs
</span><br>
<span class="quotelev1">&gt; [[8110,1],0] and [[8110,2],0]
</span><br>
<span class="quotelev1">&gt; [soleil:00647] [[8110,2],0]
</span><br>
<span class="quotelev1">&gt; [../../../../../../src/ompi-trunk/opal/mca/pmix/native/pmix_native.c:493] post
</span><br>
<span class="quotelev1">&gt; send to server
</span><br>
<span class="quotelev1">&gt; [soleil:00647] [[8110,2],0] posting recv on tag 5
</span><br>
<span class="quotelev1">&gt; [soleil:00647] [[8110,2],0] usock:send_nb: already connected to server -
</span><br>
<span class="quotelev1">&gt; queueing for send
</span><br>
<span class="quotelev1">&gt; [soleil:00647] [[8110,2],0] usock:send_handler called to send to server
</span><br>
<span class="quotelev1">&gt; [soleil:00647] [[8110,2],0] usock:send_handler SENDING TO SERVER
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] usock:recv:handler called
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] usock:recv:handler CONNECTED
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] usock:recv:handler allocate new recv msg
</span><br>
<span class="quotelev1">&gt; [soleil:00650] usock:recv:handler read hdr
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] usock:recv:handler allocate data region of
</span><br>
<span class="quotelev1">&gt; size 14
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] RECVD COMPLETE MESSAGE FROM SERVER OF 14
</span><br>
<span class="quotelev1">&gt; BYTES FOR TAG 5
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0]
</span><br>
<span class="quotelev1">&gt; [../../../../../../src/ompi-trunk/opal/mca/pmix/native/usock_sendrecv.c:415]
</span><br>
<span class="quotelev1">&gt; post msg
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] message received 14 bytes for tag 5
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] checking msg on tag 5 for tag 5
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] pmix:native recv callback activated with 14
</span><br>
<span class="quotelev1">&gt; bytes
</span><br>
<span class="quotelev1">&gt; [soleil:00650] [[8110,3],0] pmix:native fence released on 2 procs
</span><br>
<span class="quotelev1">&gt; [[8110,1],0] and [[8110,3],0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;pmix_debug.patch&gt;&lt;comm_disconnect.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15701.php">http://www.open-mpi.org/community/lists/devel/2014/08/15701.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15703.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="15701.php">Gilles Gouaillardet: "[OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="15701.php">Gilles Gouaillardet: "[OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
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
