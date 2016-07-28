<?
$subject_val = "[OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 07:07:16 2012" -->
<!-- isoreceived="20120321110716" -->
<!-- sent="Wed, 21 Mar 2012 12:07:12 +0100" -->
<!-- isosent="20120321110712" -->
<!-- name="Juan Solano" -->
<!-- email="jsm_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)" -->
<!-- id="1332328032.21172.140661052071965_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)<br>
<strong>From:</strong> Juan Solano (<em>jsm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 07:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10745.php">TERRY DONTJE: "[OMPI devel] SUSE verification"</a>
<li><strong>Previous message:</strong> <a href="10743.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc5 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10756.php">Ralph Castain: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="10756.php">Ralph Castain: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="10757.php">Jeffrey Squyres: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a problem using Open MPI on my linux system (pandaboard running
<br>
Ubuntu precise). A call to MPI_Init_thread with the following parameters
<br>
hangs:
<br>
<p>&nbsp;&nbsp;MPI_Init_thread(0, 0, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
<p>it seems that we are stuck on this loop in function
<br>
opal_condition_wait():
<br>
<p>while (c-&gt;c_signaled == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();
<br>
<p><p>this is the call stack:
<br>
<p>#0  opal_condition_wait (c=0x42528, m=0x42500) at
<br>
../../../../../../opal/threads/condition.h:76
<br>
#1  0xb6d23124 in orte_rml_oob_send (peer=0xb6e40ae0, iov=0xbeffefa4,
<br>
count=1, tag=1, flags=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../orte/mca/rml/oob/rml_oob_send.c:153
<br>
#2  0xb6d2351a in orte_rml_oob_send_buffer (peer=0xb6e40ae0,
<br>
buffer=0xbeffefdc, tag=1, flags=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../../orte/mca/rml/oob/rml_oob_send.c:269
<br>
#3  0xb6e2dca6 in orte_routed_base_register_sync (setup=true) at
<br>
../../../../../orte/mca/routed/base/routed_base_register_sync.c:91
<br>
#4  0xb6d46274 in init_routes (job=3667329025, ndat=0x0) at
<br>
../../../../../../orte/mca/routed/binomial/routed_binomial.c:890
<br>
#5  0xb6e1a088 in orte_ess_base_app_setup () at
<br>
../../../../../orte/mca/ess/base/ess_base_std_app.c:150
<br>
#6  0xb6d2e630 in rte_init (flags=0 '\000') at
<br>
../../../../../../orte/mca/ess/singleton/ess_singleton_module.c:276
<br>
#7  0xb6e01404 in orte_init (flags=0 '\000') at
<br>
../../../orte/runtime/orte_init.c:131
<br>
#8  0xb6f552dc in ompi_mpi_init (argc=0, argv=0x0, requested=0,
<br>
provided=0xbefff67c) at ../../../ompi/runtime/ompi_mpi_init.c:344
<br>
#9  0xb6f7c6f2 in PMPI_Init_thread (argc=0x0, argv=0x0, required=0,
<br>
provided=0xbefff67c) at pinit_thread.c:84
<br>
#10 0x00008572 in main () at test_lib.c:8
<br>
<p><p>In function opal_condition_wait(), opal_using_threads() returns false,
<br>
shouldn't this returns true in this case, as we are calling the
<br>
initialization function with MPI_THREAD_MULTIPLE?
<br>
<p>The global opal_uses_threads is set by calling opal_set_using_threads()
<br>
from MPI_Init_thread(), however this happens further down in this
<br>
function and we never reach the point in which this is set.
<br>
<p>Thanks,
<br>
Juan.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10745.php">TERRY DONTJE: "[OMPI devel] SUSE verification"</a>
<li><strong>Previous message:</strong> <a href="10743.php">Jeffrey Squyres: "[OMPI devel] 1.5.5rc5 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10756.php">Ralph Castain: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="10756.php">Ralph Castain: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="10757.php">Jeffrey Squyres: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
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
