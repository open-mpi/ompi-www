<?
$subject_val = "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 14:20:23 2012" -->
<!-- isoreceived="20120322182023" -->
<!-- sent="Thu, 22 Mar 2012 14:20:18 -0400" -->
<!-- isosent="20120322182018" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)" -->
<!-- id="26352FCD-1750-479F-85FD-64DCC644F5C2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1332328032.21172.140661052071965_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 14:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10758.php">George Bosilca: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10756.php">Ralph Castain: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="10744.php">Juan Solano: "[OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10775.php">Leif Lindholm: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="10775.php">Leif Lindholm: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We did not support ARM until Open MPI 1.5.x.
<br>
<p>On Mar 21, 2012, at 7:07 AM, Juan Solano wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem using Open MPI on my linux system (pandaboard running
</span><br>
<span class="quotelev1">&gt; Ubuntu precise). A call to MPI_Init_thread with the following parameters
</span><br>
<span class="quotelev1">&gt; hangs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread(0, 0, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it seems that we are stuck on this loop in function
</span><br>
<span class="quotelev1">&gt; opal_condition_wait():
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev1">&gt;    opal_progress();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is the call stack:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  opal_condition_wait (c=0x42528, m=0x42500) at
</span><br>
<span class="quotelev1">&gt; ../../../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #1  0xb6d23124 in orte_rml_oob_send (peer=0xb6e40ae0, iov=0xbeffefa4,
</span><br>
<span class="quotelev1">&gt; count=1, tag=1, flags=16)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../orte/mca/rml/oob/rml_oob_send.c:153
</span><br>
<span class="quotelev1">&gt; #2  0xb6d2351a in orte_rml_oob_send_buffer (peer=0xb6e40ae0,
</span><br>
<span class="quotelev1">&gt; buffer=0xbeffefdc, tag=1, flags=0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../orte/mca/rml/oob/rml_oob_send.c:269
</span><br>
<span class="quotelev1">&gt; #3  0xb6e2dca6 in orte_routed_base_register_sync (setup=true) at
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/routed/base/routed_base_register_sync.c:91
</span><br>
<span class="quotelev1">&gt; #4  0xb6d46274 in init_routes (job=3667329025, ndat=0x0) at
</span><br>
<span class="quotelev1">&gt; ../../../../../../orte/mca/routed/binomial/routed_binomial.c:890
</span><br>
<span class="quotelev1">&gt; #5  0xb6e1a088 in orte_ess_base_app_setup () at
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ess/base/ess_base_std_app.c:150
</span><br>
<span class="quotelev1">&gt; #6  0xb6d2e630 in rte_init (flags=0 '\000') at
</span><br>
<span class="quotelev1">&gt; ../../../../../../orte/mca/ess/singleton/ess_singleton_module.c:276
</span><br>
<span class="quotelev1">&gt; #7  0xb6e01404 in orte_init (flags=0 '\000') at
</span><br>
<span class="quotelev1">&gt; ../../../orte/runtime/orte_init.c:131
</span><br>
<span class="quotelev1">&gt; #8  0xb6f552dc in ompi_mpi_init (argc=0, argv=0x0, requested=0,
</span><br>
<span class="quotelev1">&gt; provided=0xbefff67c) at ../../../ompi/runtime/ompi_mpi_init.c:344
</span><br>
<span class="quotelev1">&gt; #9  0xb6f7c6f2 in PMPI_Init_thread (argc=0x0, argv=0x0, required=0,
</span><br>
<span class="quotelev1">&gt; provided=0xbefff67c) at pinit_thread.c:84
</span><br>
<span class="quotelev1">&gt; #10 0x00008572 in main () at test_lib.c:8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In function opal_condition_wait(), opal_using_threads() returns false,
</span><br>
<span class="quotelev1">&gt; shouldn't this returns true in this case, as we are calling the
</span><br>
<span class="quotelev1">&gt; initialization function with MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The global opal_uses_threads is set by calling opal_set_using_threads()
</span><br>
<span class="quotelev1">&gt; from MPI_Init_thread(), however this happens further down in this
</span><br>
<span class="quotelev1">&gt; function and we never reach the point in which this is set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Juan.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10758.php">George Bosilca: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10756.php">Ralph Castain: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="10744.php">Juan Solano: "[OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10775.php">Leif Lindholm: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="10775.php">Leif Lindholm: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
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
