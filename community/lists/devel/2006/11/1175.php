<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 12 21:34:10 2006" -->
<!-- isoreceived="20061113023410" -->
<!-- sent="Sun, 12 Nov 2006 19:33:59 -0700" -->
<!-- isosent="20061113023359" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] valgrind messages important?" -->
<!-- id="C17D27A7.480%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061112175218.GP6230_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-12 21:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1176.php">George Bosilca: "Re: [OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>Previous message:</strong> <a href="1174.php">Andreas Sch&#228;fer: "[OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll fix the case in attr_create_predefined_callback - we should initialize
<br>
the rank variable first to be safe.
<br>
<p>For your other question, do your configure with &quot;--without-memory-manager&quot;.
<br>
<p>Ralph
<br>
<p><p>On 11/12/06 10:52 AM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm currently tracing a segfault in mpi_init which is caused
</span><br>
<span class="quotelev1">&gt; by ompi/runtime/ompi_mpi_init.c:569
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ret = MCA_PML_CALL(add_procs(procs, nprocs));
</span><br>
<span class="quotelev1">&gt;     free(procs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In most cases, no segfault occurs and everything works fine,
</span><br>
<span class="quotelev1">&gt; but with some special combinations of machines, I can trigger
</span><br>
<span class="quotelev1">&gt; the bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I choose a working configuration and increase the number
</span><br>
<span class="quotelev1">&gt; of IPv6 addresses on one of the machines, the segfault occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It cannot be triggered by adding IPv4 addresses, and disabling
</span><br>
<span class="quotelev1">&gt; IPv6 completely solves the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The debugger shows that free internally calls mem2chunk.
</span><br>
<span class="quotelev1">&gt; The working configuration has a chunksize of 16 (bytes?),
</span><br>
<span class="quotelev1">&gt; the failing one has $BIGNUM, thus causing the segfault.
</span><br>
<span class="quotelev1">&gt; (trying to free unallocated memory)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think these long IPv6 addresses overwrite a buffer (or at
</span><br>
<span class="quotelev1">&gt; least some memory which is allocated inside OMPI's memory
</span><br>
<span class="quotelev1">&gt; pool, thus delaying the segfault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are two issues found by valgrind, but I wanted to
</span><br>
<span class="quotelev1">&gt; check the &quot;normal&quot; valgrind output first. With the nightly
</span><br>
<span class="quotelev1">&gt; snapshot 1.2b1r12555, I got the following &quot;errors&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==8948== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==8948==    at 0x1B92884D: ompi_attr_create_predefined_callback
</span><br>
<span class="quotelev1">&gt; (attribute_predefined.c:374)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BC869B8: orte_gpr_proxy_deliver_notify_msg
</span><br>
<span class="quotelev1">&gt; (gpr_proxy_deliver_notify_msg.c:144)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1B9FEDF7: mca_oob_xcast (oob_base_xcast.c:147)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1B947E49: ompi_mpi_init (ompi_mpi_init.c:542)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1B97D657: MPI_Init (pinit.c:71)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x8048846: main (in /home/racl/adi/ompi/trunk/test/vm/ring)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==8948== Syscall param writev(vector[...]) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==8948==    at 0x1BBCD5E8: (within /lib/tls/libc-2.3.2.so)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BD873C1: mca_btl_tcp_frag_send (btl_tcp_frag.c:104)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BD87133: mca_btl_tcp_endpoint_send_handler
</span><br>
<span class="quotelev1">&gt; (btl_tcp_endpoint.c:689)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BA48AD3: opal_event_process_active (event.c:463)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BA48E11: opal_event_base_loop (event.c:600)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BA48BE3: opal_event_loop (event.c:514)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BA4211D: opal_progress (opal_progress.c:259)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BD59D24: opal_condition_wait (condition.h:81)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1BD5AD00: mca_pml_ob1_send (pml_ob1_isend.c:128)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x1B985CD9: MPI_Send (psend.c:63)
</span><br>
<span class="quotelev1">&gt; ==8948==    by 0x80488B6: main (in /home/racl/adi/ompi/trunk/test/vm/ring)
</span><br>
<span class="quotelev1">&gt; ==8948==  Address 0x80FEECE is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I worry about these two?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The segfault itself is probably related to this output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==3324== Syscall param writev(vector[...]) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==3324==    at 0x1BBB45E8: (within /lib/tls/libc-2.3.2.so)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x1BC57191: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:234)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x1BC58658: mca_oob_tcp_peer_send (oob_tcp_peer.c:194)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x1BC5E873: mca_oob_tcp_send (oob_tcp_send.c:152)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x1B9FEC92: mca_oob_send_packed (oob_base_send.c:78)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x1BC6CE92: orte_gpr_proxy_exec_compound_cmd
</span><br>
<span class="quotelev1">&gt; (gpr_proxy_compound_cmd.c:117)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x1B94503A: ompi_mpi_init (ompi_mpi_init.c:523)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x1B97AE7F: MPI_Init (pinit.c:71)
</span><br>
<span class="quotelev1">&gt; ==3324==    by 0x8048846: main (in /home/racl/adi/ompi/trunk/test/vm/ring)
</span><br>
<span class="quotelev1">&gt; ==3324==  Address 0x822BF11 is not stack'd, malloc'd or (recently) free'd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I still have to look closer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to disable OMPI's ptmalloc2 and use the
</span><br>
<span class="quotelev1">&gt; system's free/malloc? (hopefully causing the segfault right where
</span><br>
<span class="quotelev1">&gt; it is done, probably a memcpy with wrong size)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or are there other ways to debug such an issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIA
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1176.php">George Bosilca: "Re: [OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>Previous message:</strong> <a href="1174.php">Andreas Sch&#228;fer: "[OMPI devel] memory leak caused by possibly wrong initialization in ompi_ddt_duplicate()"</a>
<li><strong>In reply to:</strong> <a href="1172.php">Adrian Knoth: "[OMPI devel] valgrind messages important?"</a>
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
