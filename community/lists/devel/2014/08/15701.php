<?
$subject_val = "[OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 25 04:59:09 2014" -->
<!-- isoreceived="20140825085909" -->
<!-- sent="Mon, 25 Aug 2014 17:59:12 +0900" -->
<!-- isosent="20140825085912" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite" -->
<!-- id="53FAFAE0.5030906_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-25 04:59:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="15700.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Reply:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>when i run
<br>
mpirun -np 1 ./intercomm_create
<br>
from the ibm test suite, it either :
<br>
- success
<br>
- hangs
<br>
- mpirun crashes (SIGSEGV) soon after writing the following message
<br>
ORTE_ERROR_LOG: Not found in file
<br>
../../../src/ompi-trunk/orte/orted/pmix/pmix_server.c at line 566
<br>
<p>here is what happens :
<br>
<p>first, the test program itself :
<br>
task 0 spawns task 1 : the inter communicator is ab_inter on task 0 and
<br>
parent on task 1
<br>
then
<br>
task 0 spawns task 2 : the inter communicator is ac_inter on task 0 and
<br>
parent on task 2
<br>
then
<br>
several operations (merge, barrier, ...)
<br>
and then without any synchronization :
<br>
- task 0 MPI_Comm_disconnect(ab_inter) and then
<br>
MPI_Comm_disconnect(ac_inter)
<br>
- task 1 and task 2 MPI_Comm_disconnect(parent)
<br>
<p>i applied the attached pmix_debug.patch and ran
<br>
mpirun -np 1 --mca pmix_base_verbose 90 ./intercomm_create
<br>
<p>basically, tasks 0 and 1 execute a native fence and in parallel, tasks 0
<br>
and 2 execute a native fence.
<br>
they both use the *same* tags on different though overlapping tasks
<br>
bottom line, task 2 leave the fences *before* task 0 enterred the fence
<br>
(it seems task 1 told task 2 it is ok to leave the fence)
<br>
<p>a simple work around is to call MPI_Barrier before calling
<br>
MPI_Comm_disconnect
<br>
<p>at this stage, i doubt it is even possible to get this working at the
<br>
pmix level, so the fix
<br>
might be to have MPI_Comm_disconnect invoke MPI_Barrier
<br>
the attached comm_disconnect.patch always call the barrier before
<br>
(indirectly) invoking pmix
<br>
<p>could you please comment on this issue ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>here are the relevant logs :
<br>
<p>[soleil:00650] [[8110,3],0] pmix:native executing fence on 2 procs
<br>
[[8110,1],0] and [[8110,3],0]
<br>
[soleil:00650] [[8110,3],0]
<br>
[../../../../../../src/ompi-trunk/opal/mca/pmix/native/pmix_native.c:493] post
<br>
send to server
<br>
[soleil:00650] [[8110,3],0] posting recv on tag 5
<br>
[soleil:00650] [[8110,3],0] usock:send_nb: already connected to server -
<br>
queueing for send
<br>
[soleil:00650] [[8110,3],0] usock:send_handler called to send to server
<br>
[soleil:00650] [[8110,3],0] usock:send_handler SENDING TO SERVER
<br>
[soleil:00647] [[8110,2],0] pmix:native executing fence on 2 procs
<br>
[[8110,1],0] and [[8110,2],0]
<br>
[soleil:00647] [[8110,2],0]
<br>
[../../../../../../src/ompi-trunk/opal/mca/pmix/native/pmix_native.c:493] post
<br>
send to server
<br>
[soleil:00647] [[8110,2],0] posting recv on tag 5
<br>
[soleil:00647] [[8110,2],0] usock:send_nb: already connected to server -
<br>
queueing for send
<br>
[soleil:00647] [[8110,2],0] usock:send_handler called to send to server
<br>
[soleil:00647] [[8110,2],0] usock:send_handler SENDING TO SERVER
<br>
[soleil:00650] [[8110,3],0] usock:recv:handler called
<br>
[soleil:00650] [[8110,3],0] usock:recv:handler CONNECTED
<br>
[soleil:00650] [[8110,3],0] usock:recv:handler allocate new recv msg
<br>
[soleil:00650] usock:recv:handler read hdr
<br>
[soleil:00650] [[8110,3],0] usock:recv:handler allocate data region of
<br>
size 14
<br>
[soleil:00650] [[8110,3],0] RECVD COMPLETE MESSAGE FROM SERVER OF 14
<br>
BYTES FOR TAG 5
<br>
[soleil:00650] [[8110,3],0]
<br>
[../../../../../../src/ompi-trunk/opal/mca/pmix/native/usock_sendrecv.c:415]
<br>
post msg
<br>
[soleil:00650] [[8110,3],0] message received 14 bytes for tag 5
<br>
[soleil:00650] [[8110,3],0] checking msg on tag 5 for tag 5
<br>
[soleil:00650] [[8110,3],0] pmix:native recv callback activated with 14
<br>
bytes
<br>
[soleil:00650] [[8110,3],0] pmix:native fence released on 2 procs
<br>
[[8110,1],0] and [[8110,3],0]
<br>
<p><p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15701/pmix_debug.patch">pmix_debug.patch</a>
</ul>
<!-- attachment="pmix_debug.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15701/comm_disconnect.patch">comm_disconnect.patch</a>
</ul>
<!-- attachment="comm_disconnect.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="15700.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
<li><strong>Reply:</strong> <a href="15702.php">Ralph Castain: "Re: [OMPI devel] pmix: race condition in dynamic/intercomm_create from the ibm test suite"</a>
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
