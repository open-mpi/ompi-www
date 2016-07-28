<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 12 12:51:38 2006" -->
<!-- isoreceived="20061112175138" -->
<!-- sent="Sun, 12 Nov 2006 18:52:18 +0100" -->
<!-- isosent="20061112175218" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] valgrind messages important?" -->
<!-- id="20061112175218.GP6230_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-12 12:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Previous message:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Reply:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Reply:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm currently tracing a segfault in mpi_init which is caused
<br>
by ompi/runtime/ompi_mpi_init.c:569
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ret = MCA_PML_CALL(add_procs(procs, nprocs));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;free(procs);
<br>
<p>In most cases, no segfault occurs and everything works fine,
<br>
but with some special combinations of machines, I can trigger
<br>
the bug.
<br>
<p>If I choose a working configuration and increase the number
<br>
of IPv6 addresses on one of the machines, the segfault occurs.
<br>
<p>It cannot be triggered by adding IPv4 addresses, and disabling
<br>
IPv6 completely solves the problem.
<br>
<p>The debugger shows that free internally calls mem2chunk.
<br>
The working configuration has a chunksize of 16 (bytes?),
<br>
the failing one has $BIGNUM, thus causing the segfault.
<br>
(trying to free unallocated memory)
<br>
<p>I think these long IPv6 addresses overwrite a buffer (or at
<br>
least some memory which is allocated inside OMPI's memory
<br>
pool, thus delaying the segfault).
<br>
<p>There are two issues found by valgrind, but I wanted to
<br>
check the &quot;normal&quot; valgrind output first. With the nightly
<br>
snapshot 1.2b1r12555, I got the following &quot;errors&quot;:
<br>
<p>==8948== Conditional jump or move depends on uninitialised value(s)
<br>
==8948==    at 0x1B92884D: ompi_attr_create_predefined_callback (attribute_predefined.c:374)
<br>
==8948==    by 0x1BC869B8: orte_gpr_proxy_deliver_notify_msg (gpr_proxy_deliver_notify_msg.c:144)
<br>
==8948==    by 0x1B9FEDF7: mca_oob_xcast (oob_base_xcast.c:147)
<br>
==8948==    by 0x1B947E49: ompi_mpi_init (ompi_mpi_init.c:542)
<br>
==8948==    by 0x1B97D657: MPI_Init (pinit.c:71)
<br>
==8948==    by 0x8048846: main (in /home/racl/adi/ompi/trunk/test/vm/ring)
<br>
<p>and
<br>
<p>==8948== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==8948==    at 0x1BBCD5E8: (within /lib/tls/libc-2.3.2.so)
<br>
==8948==    by 0x1BD873C1: mca_btl_tcp_frag_send (btl_tcp_frag.c:104)
<br>
==8948==    by 0x1BD87133: mca_btl_tcp_endpoint_send_handler (btl_tcp_endpoint.c:689)
<br>
==8948==    by 0x1BA48AD3: opal_event_process_active (event.c:463)
<br>
==8948==    by 0x1BA48E11: opal_event_base_loop (event.c:600)
<br>
==8948==    by 0x1BA48BE3: opal_event_loop (event.c:514)
<br>
==8948==    by 0x1BA4211D: opal_progress (opal_progress.c:259)
<br>
==8948==    by 0x1BD59D24: opal_condition_wait (condition.h:81)
<br>
==8948==    by 0x1BD5AD00: mca_pml_ob1_send (pml_ob1_isend.c:128)
<br>
==8948==    by 0x1B985CD9: MPI_Send (psend.c:63)
<br>
==8948==    by 0x80488B6: main (in /home/racl/adi/ompi/trunk/test/vm/ring)
<br>
==8948==  Address 0x80FEECE is not stack'd, malloc'd or (recently) free'd
<br>
<p><p>Should I worry about these two?
<br>
<p>The segfault itself is probably related to this output:
<br>
<p>==3324== Syscall param writev(vector[...]) points to uninitialised byte(s)
<br>
==3324==    at 0x1BBB45E8: (within /lib/tls/libc-2.3.2.so)
<br>
==3324==    by 0x1BC57191: mca_oob_tcp_msg_send_handler (oob_tcp_msg.c:234)
<br>
==3324==    by 0x1BC58658: mca_oob_tcp_peer_send (oob_tcp_peer.c:194)
<br>
==3324==    by 0x1BC5E873: mca_oob_tcp_send (oob_tcp_send.c:152)
<br>
==3324==    by 0x1B9FEC92: mca_oob_send_packed (oob_base_send.c:78)
<br>
==3324==    by 0x1BC6CE92: orte_gpr_proxy_exec_compound_cmd (gpr_proxy_compound_cmd.c:117)
<br>
==3324==    by 0x1B94503A: ompi_mpi_init (ompi_mpi_init.c:523)
<br>
==3324==    by 0x1B97AE7F: MPI_Init (pinit.c:71)
<br>
==3324==    by 0x8048846: main (in /home/racl/adi/ompi/trunk/test/vm/ring)
<br>
==3324==  Address 0x822BF11 is not stack'd, malloc'd or (recently) free'd
<br>
<p>But I still have to look closer.
<br>
<p>Is there a way to disable OMPI's ptmalloc2 and use the
<br>
system's free/malloc? (hopefully causing the segfault right where
<br>
it is done, probably a memcpy with wrong size)
<br>
<p>Or are there other ways to debug such an issue?
<br>
<p>TIA
<br>
<p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Paradox ist, wenn einer vom Rotwein blau wird.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Previous message:</strong> <a href="1171.php">Ralph Castain: "Re: [OMPI devel] Getting process PID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Reply:</strong> <a href="1173.php">Thomas Peiselt: "Re: [OMPI devel] valgrind messages important?"</a>
<li><strong>Reply:</strong> <a href="1175.php">Ralph Castain: "Re: [OMPI devel] valgrind messages important?"</a>
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
