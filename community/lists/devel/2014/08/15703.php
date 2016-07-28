<?
$subject_val = "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 10:33:00 2014" -->
<!-- isoreceived="20140825143300" -->
<!-- sent="Mon, 25 Aug 2014 23:32:52 +0900" -->
<!-- isosent="20140825143252" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite" -->
<!-- id="6h8100b4h39jj56933lwfmgj.1408976908894_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-25 10:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15704.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15704.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Reply:</strong> <a href="15704.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the explanation
<br>
<p>In orte_dt_compare_sig(...) memcmp did not multiply value1-&gt;sz by sizeof(opal_identifier_t).
<br>
<p>Being afk, I could not test but that looks like a good suspect
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;Each collective is given a &quot;signature&quot; that is just the array of names for all procs involved in the collective. Thus, even though task 0 is involved in both of the disconnect barriers, the two collectives should be running in isolation from each other.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The &quot;tags&quot; are just receive callbacks and have no meaning other than to associate a particular callback to a given send/recv pair. It is the signature that counts as the daemons are using that to keep the various collectives separated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'll have to take a look at why task 2 is leaving early. The key will be to look at that signature to ensure we aren't getting it confused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 25, 2014, at 1:59 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; when i run
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 ./intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt; from the ibm test suite, it either :
</span><br>
<span class="quotelev2">&gt;&gt; - success
</span><br>
<span class="quotelev2">&gt;&gt; - hangs
</span><br>
<span class="quotelev2">&gt;&gt; - mpirun crashes (SIGSEGV) soon after writing the following message
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../src/ompi-trunk/orte/orted/pmix/pmix_server.c at line 566
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; here is what happens :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; first, the test program itself :
</span><br>
<span class="quotelev2">&gt;&gt; task 0 spawns task 1 : the inter communicator is ab_inter on task 0 and
</span><br>
<span class="quotelev2">&gt;&gt; parent on task 1
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt; task 0 spawns task 2 : the inter communicator is ac_inter on task 0 and
</span><br>
<span class="quotelev2">&gt;&gt; parent on task 2
</span><br>
<span class="quotelev2">&gt;&gt; then
</span><br>
<span class="quotelev2">&gt;&gt; several operations (merge, barrier, ...)
</span><br>
<span class="quotelev2">&gt;&gt; and then without any synchronization :
</span><br>
<span class="quotelev2">&gt;&gt; - task 0 MPI_Comm_disconnect(ab_inter) and then
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_disconnect(ac_inter)
</span><br>
<span class="quotelev2">&gt;&gt; - task 1 and task 2 MPI_Comm_disconnect(parent)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i applied the attached pmix_debug.patch and ran
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 --mca pmix_base_verbose 90 ./intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; basically, tasks 0 and 1 execute a native fence and in parallel, tasks 0
</span><br>
<span class="quotelev2">&gt;&gt; and 2 execute a native fence.
</span><br>
<span class="quotelev2">&gt;&gt; they both use the *same* tags on different though overlapping tasks
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, task 2 leave the fences *before* task 0 enterred the fence
</span><br>
<span class="quotelev2">&gt;&gt; (it seems task 1 told task 2 it is ok to leave the fence)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a simple work around is to call MPI_Barrier before calling
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_disconnect
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; at this stage, i doubt it is even possible to get this working at the
</span><br>
<span class="quotelev2">&gt;&gt; pmix level, so the fix
</span><br>
<span class="quotelev2">&gt;&gt; might be to have MPI_Comm_disconnect invoke MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt; the attached comm_disconnect.patch always call the barrier before
</span><br>
<span class="quotelev2">&gt;&gt; (indirectly) invoking pmix
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; could you please comment on this issue ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; here are the relevant logs :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] pmix:native executing fence on 2 procs
</span><br>
<span class="quotelev2">&gt;&gt; [[8110,1],0] and [[8110,3],0]
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0]
</span><br>
<span class="quotelev2">&gt;&gt; [../../../../../../src/ompi-trunk/opal/mca/pmix/native/pmix_native.c:493] post
</span><br>
<span class="quotelev2">&gt;&gt; send to server
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] posting recv on tag 5
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] usock:send_nb: already connected to server -
</span><br>
<span class="quotelev2">&gt;&gt; queueing for send
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] usock:send_handler called to send to server
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] usock:send_handler SENDING TO SERVER
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00647] [[8110,2],0] pmix:native executing fence on 2 procs
</span><br>
<span class="quotelev2">&gt;&gt; [[8110,1],0] and [[8110,2],0]
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00647] [[8110,2],0]
</span><br>
<span class="quotelev2">&gt;&gt; [../../../../../../src/ompi-trunk/opal/mca/pmix/native/pmix_native.c:493] post
</span><br>
<span class="quotelev2">&gt;&gt; send to server
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00647] [[8110,2],0] posting recv on tag 5
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00647] [[8110,2],0] usock:send_nb: already connected to server -
</span><br>
<span class="quotelev2">&gt;&gt; queueing for send
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00647] [[8110,2],0] usock:send_handler called to send to server
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00647] [[8110,2],0] usock:send_handler SENDING TO SERVER
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] usock:recv:handler called
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] usock:recv:handler CONNECTED
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] usock:recv:handler allocate new recv msg
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] usock:recv:handler read hdr
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] usock:recv:handler allocate data region of
</span><br>
<span class="quotelev2">&gt;&gt; size 14
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] RECVD COMPLETE MESSAGE FROM SERVER OF 14
</span><br>
<span class="quotelev2">&gt;&gt; BYTES FOR TAG 5
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0]
</span><br>
<span class="quotelev2">&gt;&gt; [../../../../../../src/ompi-trunk/opal/mca/pmix/native/usock_sendrecv.c:415]
</span><br>
<span class="quotelev2">&gt;&gt; post msg
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] message received 14 bytes for tag 5
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] checking msg on tag 5 for tag 5
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] pmix:native recv callback activated with 14
</span><br>
<span class="quotelev2">&gt;&gt; bytes
</span><br>
<span class="quotelev2">&gt;&gt; [soleil:00650] [[8110,3],0] pmix:native fence released on 2 procs
</span><br>
<span class="quotelev2">&gt;&gt; [[8110,1],0] and [[8110,3],0]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;pmix_debug.patch&gt;&lt;comm_disconnect.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15701.php">http://www.open-mpi.org/community/lists/devel/2014/08/15701.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15702.php">http://www.open-mpi.org/community/lists/devel/2014/08/15702.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15704.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15704.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Reply:</strong> <a href="15704.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
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
