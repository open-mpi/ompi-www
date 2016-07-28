<?
$subject_val = "[OMPI devel] Still troubles with 1.3 and MX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 09:18:20 2009" -->
<!-- isoreceived="20090122141820" -->
<!-- sent="Thu, 22 Jan 2009 15:18:13 +0100 (CET)" -->
<!-- isosent="20090122141813" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="[OMPI devel] Still troubles with 1.3 and MX" -->
<!-- id="Pine.LNX.4.64.0901221424190.25360_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Still troubles with 1.3 and MX<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 09:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5273.php">Thomas Ropars: "[OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>Previous message:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Reply:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I'm still having some troubles using the newly released 1.3 with 
<br>
Myricom's MX. I've meant to send a message earlier, but the release 
<br>
candidates went so fast that I didn't have time to catch up and test.
<br>
<p>General details:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nodes with dual CPU, dual core Opteron 2220, 8 GB RAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Debian etch x86_64, self-compiled kernel 2.6.22.18, gcc-4.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Torque 2.1.10 (but this shouldn't make a difference)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MX 1.2.7 with a tiny patch from Myricom
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMB 3.1
<br>
<p>OpenMPI was configured with '--enable-shared --enable-static 
<br>
--with-mx=... --with-tm=...'
<br>
In all cases, there were no options specified at runtime (either in 
<br>
files or on the command line) except for the PML and BTL selection.
<br>
<p>Problem 1:
<br>
<p>I still see hangs of collective functions when running on large number 
<br>
of nodes (or maybe ranks) with the default OB1+BTL. F.e. with 128 
<br>
ranks distributed as nodes=32:ppn=4 or nodes=64:ppn=2, the IMB hangs 
<br>
in Gather.
<br>
<p>strace reports for each rank a stream of:
<br>
<p>poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN}], 3, 0) = 0
<br>
<p>and once in a while a:
<br>
<p>futex(0x55f650, FUTEX_WAKE, 1)          = 1
<br>
<p>A gdb stack shows:
<br>
<p>#0  0x00002acf2615d090 in pthread_mutex_unlock () from /lib/libpthread.so.0
<br>
#1  0x00002acf25a53858 in mx_ipeek (endpoint=0x565150, request=0x7fff857215c0, result=0x7fff857215cc) at ./../mx_ipeek.c:45
<br>
#2  0x00002acf2551ec87 in mca_btl_mx_component_progress () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#3  0x00002acf258ea1a2 in opal_progress () from /opt/openmpi/1.3/gcc-4.1.2/lib/libopen-pal.so.0
<br>
#4  0x00002acf2558436b in mca_pml_ob1_recv () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#5  0x00002acf25535da6 in ompi_coll_tuned_gather_intra_linear_sync () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#6  0x00002acf255280e6 in ompi_coll_tuned_gather_intra_dec_fixed () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#7  0x00002acf254faa93 in PMPI_Gather () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#8  0x0000000000409e7b in IMB_gather ()
<br>
#9  0x0000000000403838 in main ()
<br>
<p>and on another rank:
<br>
<p>#0  0x00002b71acb4ac04 in mca_btl_mx_component_progress () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#1  0x00002b71acf161a2 in opal_progress () from /opt/openmpi/1.3/gcc-4.1.2/lib/libopen-pal.so.0
<br>
#2  0x00002b71acbb036b in mca_pml_ob1_recv () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#3  0x00002b71acb61da6 in ompi_coll_tuned_gather_intra_linear_sync () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#4  0x00002b71acb540e6 in ompi_coll_tuned_gather_intra_dec_fixed () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#5  0x00002b71acb26a93 in PMPI_Gather () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#6  0x0000000000409e7b in IMB_gather ()
<br>
#7  0x0000000000403838 in main ()
<br>
<p>Problem 2:
<br>
<p>When using the CM+MTL with 128 ranks, it finishes fine when running on 
<br>
nodes=64:ppn=2, but on nodes=32:ppn=4 I get a stream of errors that I 
<br>
haven't seen before:
<br>
<p>Max retransmit retries reached (1000) for message
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (2): send_medium
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=510000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:47:89:40 (opt029:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=146, endpoint=3, seqnum=0x2944
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (2): send_medium
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=510000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:47:89:40 (opt029:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=146, endpoint=3, seqnum=0x2f9a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x0068002a_fffffff2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=32768, xfer_length=32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x0068002b_fffffff2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=32768, xfer_length=32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x2aaacc30f010,32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x5b
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:47:89:40 (opt029:0)/3
<br>
Aborted 2 send requests due to remote peer      seg: 0x2aaacc30f010,32768
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x1b
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:47:89:40 (opt029:0)00:60:dd:47:89:40 (opt029:0) disconnected
<br>
/3
<br>
Aborted 2 send requests due to remote peer 00:60:dd:47:89:40 (opt029:0) disconnected
<br>
...
<br>
<p>(output comes interleaved from nodes, so there might be information 
<br>
missing or garbled). These seem to come from the libmyriexpress, not 
<br>
OpenMPI. However earlier OpenMPI versions have not shown such errors 
<br>
and neither MPICH-MX, so I wonder if some new behaviour in OpenMPI 1.3 
<br>
triggers them. From the MX experts out there, I would also need some 
<br>
help to understand what is the source of these messages - I can only 
<br>
see opt029 mentioned, so does it try to communicate intra-node ? (IOW 
<br>
the equivalent of &quot;self&quot; BTL in OpenMPI) This would be somehow 
<br>
consistent with running more ranks per node (4) than the successfull 
<br>
job (with 2 ranks per node).
<br>
<p>At this point, the job hangs in Alltoallv. The strace output is the 
<br>
same as for OB1+BTL above.
<br>
<p>The gdb stack shows:
<br>
#0  0x00002b001d01e318 in mx__luigi (ep=0x55f650) at ./../mx__lib.c:2373
<br>
#1  0x00002b001d01283d in mx_ipeek (endpoint=0x55f650, request=0x7fff8e160090, result=0x7fff8e16009c) at ./../mx_ipeek.c:40
<br>
#2  0x00002b001cb29252 in ompi_mtl_mx_progress () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#3  0x00002b001cea91a2 in opal_progress () from /opt/openmpi/1.3/gcc-4.1.2/lib/libopen-pal.so.0
<br>
#4  0x00002b001ca9f77d in ompi_request_default_wait_all () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#5  0x00002b001caec8c4 in ompi_coll_tuned_alltoallv_intra_basic_linear () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#6  0x00002b001cab36c0 in PMPI_Alltoallv () from /opt/openmpi/1.3/gcc-4.1.2/lib/libmpi.so.0
<br>
#7  0x000000000040a5be in IMB_alltoallv ()
<br>
#8  0x0000000000403838 in main ()
<br>
<p>Can anyone suggest some ways forward ? I'd be happy to help in 
<br>
debugging if given some instructions.
<br>
<p>Thanks in advance!
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5273.php">Thomas Ropars: "[OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>Previous message:</strong> <a href="5271.php">David Robertson: "Re: [OMPI devel] Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
<li><strong>Reply:</strong> <a href="5276.php">Scott Atchley: "Re: [OMPI devel] Still troubles with 1.3 and MX"</a>
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
