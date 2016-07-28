<?
$subject_val = "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 09:07:07 2012" -->
<!-- isoreceived="20120327130707" -->
<!-- sent="Tue, 27 Mar 2012 14:07:37 +0100" -->
<!-- isosent="20120327130737" -->
<!-- name="Leif Lindholm" -->
<!-- email="leif.lindholm_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)" -->
<!-- id="000001cd0c1a$95311fc0$bf935f40$_at_lindholm@arm.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="26352FCD-1750-479F-85FD-64DCC644F5C2_at_cisco.com" -->
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
<strong>From:</strong> Leif Lindholm (<em>leif.lindholm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 09:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10776.php">Shamis, Pavel: "Re: [OMPI devel] Remove Portals support?"</a>
<li><strong>Previous message:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10757.php">Jeffrey Squyres: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For any archive readers or otherwise interested parties:
<br>
<p>Apparently Ubuntu 11.10 onwards includes Open MPI 1.4.3 with an ARM patch
<br>
set different from mine. It was lacking a functional
<br>
opal_sys_timer_get_cycles() implementation.
<br>
<p>There is an open bug being tracked through:
<br>
<a href="https://bugs.launchpad.net/ubuntu/+source/openmpi/+bug/949044">https://bugs.launchpad.net/ubuntu/+source/openmpi/+bug/949044</a>
<br>
This may or may not be the cause of Juan's issue, but it prevented
<br>
helloworld from running to completion.
<br>
<p>/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leif
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeffrey Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 22 March 2012 18:20
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-
</span><br>
<span class="quotelev1">&gt; mpi 1.4.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We did not support ARM until Open MPI 1.5.x.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2012, at 7:07 AM, Juan Solano wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a problem using Open MPI on my linux system (pandaboard
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev2">&gt; &gt; Ubuntu precise). A call to MPI_Init_thread with the following
</span><br>
<span class="quotelev1">&gt; parameters
</span><br>
<span class="quotelev2">&gt; &gt; hangs:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init_thread(0, 0, MPI_THREAD_MULTIPLE, &amp;provided);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; it seems that we are stuck on this loop in function
</span><br>
<span class="quotelev2">&gt; &gt; opal_condition_wait():
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;    opal_progress();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this is the call stack:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #0  opal_condition_wait (c=0x42528, m=0x42500) at
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt; &gt; #1  0xb6d23124 in orte_rml_oob_send (peer=0xb6e40ae0, iov=0xbeffefa4,
</span><br>
<span class="quotelev2">&gt; &gt; count=1, tag=1, flags=16)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../../../orte/mca/rml/oob/rml_oob_send.c:153
</span><br>
<span class="quotelev2">&gt; &gt; #2  0xb6d2351a in orte_rml_oob_send_buffer (peer=0xb6e40ae0,
</span><br>
<span class="quotelev2">&gt; &gt; buffer=0xbeffefdc, tag=1, flags=0)
</span><br>
<span class="quotelev2">&gt; &gt;    at ../../../../../../orte/mca/rml/oob/rml_oob_send.c:269
</span><br>
<span class="quotelev2">&gt; &gt; #3  0xb6e2dca6 in orte_routed_base_register_sync (setup=true) at
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../orte/mca/routed/base/routed_base_register_sync.c:91
</span><br>
<span class="quotelev2">&gt; &gt; #4  0xb6d46274 in init_routes (job=3667329025, ndat=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../orte/mca/routed/binomial/routed_binomial.c:890
</span><br>
<span class="quotelev2">&gt; &gt; #5  0xb6e1a088 in orte_ess_base_app_setup () at
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../orte/mca/ess/base/ess_base_std_app.c:150
</span><br>
<span class="quotelev2">&gt; &gt; #6  0xb6d2e630 in rte_init (flags=0 '\000') at
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../orte/mca/ess/singleton/ess_singleton_module.c:276
</span><br>
<span class="quotelev2">&gt; &gt; #7  0xb6e01404 in orte_init (flags=0 '\000') at
</span><br>
<span class="quotelev2">&gt; &gt; ../../../orte/runtime/orte_init.c:131
</span><br>
<span class="quotelev2">&gt; &gt; #8  0xb6f552dc in ompi_mpi_init (argc=0, argv=0x0, requested=0,
</span><br>
<span class="quotelev2">&gt; &gt; provided=0xbefff67c) at ../../../ompi/runtime/ompi_mpi_init.c:344
</span><br>
<span class="quotelev2">&gt; &gt; #9  0xb6f7c6f2 in PMPI_Init_thread (argc=0x0, argv=0x0, required=0,
</span><br>
<span class="quotelev2">&gt; &gt; provided=0xbefff67c) at pinit_thread.c:84
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00008572 in main () at test_lib.c:8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In function opal_condition_wait(), opal_using_threads() returns
</span><br>
<span class="quotelev1">&gt; false,
</span><br>
<span class="quotelev2">&gt; &gt; shouldn't this returns true in this case, as we are calling the
</span><br>
<span class="quotelev2">&gt; &gt; initialization function with MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The global opal_uses_threads is set by calling
</span><br>
<span class="quotelev1">&gt; opal_set_using_threads()
</span><br>
<span class="quotelev2">&gt; &gt; from MPI_Init_thread(), however this happens further down in this
</span><br>
<span class="quotelev2">&gt; &gt; function and we never reach the point in which this is set.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Juan.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10776.php">Shamis, Pavel: "Re: [OMPI devel] Remove Portals support?"</a>
<li><strong>Previous message:</strong> <a href="10774.php">TERRY DONTJE: "Re: [OMPI devel] [EXTERNAL] Re:  Debugger question"</a>
<li><strong>In reply to:</strong> <a href="10757.php">Jeffrey Squyres: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
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
