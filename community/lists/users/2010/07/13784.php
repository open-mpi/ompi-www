<?
$subject_val = "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 21:49:01 2010" -->
<!-- isoreceived="20100727014901" -->
<!-- sent="Mon, 26 Jul 2010 21:48:52 -0400" -->
<!-- isosent="20100727014852" -->
<!-- name="Brian Smith" -->
<!-- email="brs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1" -->
<!-- id="1280195332.12833.64.camel_at_plato.home" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1279721250.13917.13.camel_at_daemon.rc.usf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1<br>
<strong>From:</strong> Brian Smith (<em>brs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 21:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13785.php">Hugo Gagnon: "[OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13720.php">Brian Smith: "[OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13791.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Reply:</strong> <a href="13791.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In case my previous e-mail is too vague for anyone to address, here's a
<br>
backtrace from my application.  This version, compiled with Intel
<br>
11.1.064 (OpenMPI 1.4.2 w/ gcc 4.4.2), hangs during MPI_Alltoall
<br>
instead.  Running on 16 CPUs, Opteron 2427, Mellanox Technologies
<br>
MT25418 w/ OFED 1.5
<br>
<p>strace on all ranks repeatedly shows:
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
<br>
events=POLLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}, {fd=22,
<br>
events=POLLIN}, {fd=23, events=POLLIN}], 7, 0) = 0 (Timeout)
<br>
...
<br>
<p>gdb --pid=&lt;pid&gt;
<br>
(gdb) bt
<br>
#0  sm_fifo_read () at btl_sm.h:267
<br>
#1  mca_btl_sm_component_progress () at btl_sm_component.c:391
<br>
#2  0x00002b00085116ea in opal_progress () at
<br>
runtime/opal_progress.c:207
<br>
#3  0x00002b0007def215 in opal_condition_wait (count=2,
<br>
requests=0x7fffd27802a0, statuses=0x7fffd2780270)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../opal/threads/condition.h:99
<br>
#4  ompi_request_default_wait_all (count=2, requests=0x7fffd27802a0,
<br>
statuses=0x7fffd2780270) at request/req_wait.c:262
<br>
#5  0x00002b0007e805b7 in ompi_coll_tuned_sendrecv_actual
<br>
(sendbuf=0x2aaac2c4c210, scount=28000, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sdatatype=0x2b0008198ea0, dest=6, stag=-13, recvbuf=&lt;value optimized
<br>
out&gt;, rcount=28000, rdatatype=0x2b0008198ea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source=10, rtag=-13, comm=0x16ad7420, status=0x0) at
<br>
coll_tuned_util.c:55
<br>
#6  0x00002b0007e8705f in ompi_coll_tuned_sendrecv (sbuf=0x2aaac2b04010,
<br>
scount=28000, sdtype=0x2b0008198ea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b0008198ea0,
<br>
comm=0x16ad7420, module=0x16ad8450)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_util.h:60
<br>
#7  ompi_coll_tuned_alltoall_intra_pairwise (sbuf=0x2aaac2b04010,
<br>
scount=28000, sdtype=0x2b0008198ea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b0008198ea0,
<br>
comm=0x16ad7420, module=0x16ad8450)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_alltoall.c:70
<br>
#8  0x00002b0007e0a71f in PMPI_Alltoall (sendbuf=0x2aaac2b04010,
<br>
sendcount=28000, sendtype=0x2b0008198ea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x2aaac99a2010, recvcount=28000, recvtype=0x2b0008198ea0,
<br>
comm=0x16ad7420) at palltoall.c:84
<br>
#9  0x00002b0007b8bc86 in mpi_alltoall_f (sendbuf=0x2aaac2b04010 &quot;&quot;,
<br>
sendcount=0x7fffd27806a0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendtype=&lt;value optimized out&gt;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x2aaac99a2010 &quot;6%\177e\373\354\306&gt;\346\226z\262\347\350
<br>
\260&gt;\032ya(\303\003\272\276\231\343\322\363zj&#195;&#190;\230\247i\232\307P&#212;&#190;(\304
<br>
\373\321D\261&#196;&#190;\204&#214;&#156;&#206;&#149;h&#214;&#190;H\266H\342l2\245\276\231C7]\003\250&#199;&#190;`\277\231\272
<br>
\265E\261&gt;j\213&#209;&#147;\370\002\263&gt;&#208;&#157;&#195;&#152;x.\254&gt;}\332-\313\371\326\320&gt;\346\245f
<br>
\304\f\214\262\276\070\222zf#'\321&gt;\024\066&#204;&#134;\026\227&#201;&#190;.T\277\266}\366
<br>
\270&gt;h|\323L\330\f&#198;&#190;^z\214!q*\277\276pQ?O\346\067\270&gt;~\006\300&quot;,
<br>
recvcount=0x7fffd27806a4, recvtype=0xb67490, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x12d9ba0, ierr=0x7fffd27806a8) at palltoall_f.c:76
<br>
#10 0x00000000004634cc in m_sumf_d_ ()
<br>
#11 0x0000000000463072 in m_sum_z_ ()
<br>
#12 0x00000000004c8a8b in mrg_grid_rc_ ()
<br>
#13 0x00000000004ffc5e in rhosym_ ()
<br>
#14 0x0000000000610dc6 in us_mp_set_charge_ ()
<br>
#15 0x0000000000771c43 in elmin_ ()
<br>
#16 0x0000000000453853 in MAIN__ ()
<br>
#17 0x000000000042f15c in main ()
<br>
<p>On other processes:
<br>
<p>(gdb) bt
<br>
#0  0x0000003692a0b725 in pthread_spin_lock ()
<br>
from /lib64/libpthread.so.0
<br>
#1  0x00002aaaaacdfa7b in ibv_cmd_create_qp ()
<br>
from /usr/lib64/libmlx4-rdmav2.so
<br>
#2  0x00002b9dc1db3ff8 in progress_one_device ()
<br>
at /usr/include/infiniband/verbs.h:884
<br>
#3  btl_openib_component_progress () at btl_openib_component.c:3451
<br>
#4  0x00002b9dc24736ea in opal_progress () at
<br>
runtime/opal_progress.c:207
<br>
#5  0x00002b9dc1d51215 in opal_condition_wait (count=2,
<br>
requests=0x7fffece3cc20, statuses=0x7fffece3cbf0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../opal/threads/condition.h:99
<br>
#6  ompi_request_default_wait_all (count=2, requests=0x7fffece3cc20,
<br>
statuses=0x7fffece3cbf0) at request/req_wait.c:262
<br>
#7  0x00002b9dc1de25b7 in ompi_coll_tuned_sendrecv_actual
<br>
(sendbuf=0x2aaac2c4c210, scount=28000, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sdatatype=0x2b9dc20faea0, dest=6, stag=-13, recvbuf=&lt;value optimized
<br>
out&gt;, rcount=28000, rdatatype=0x2b9dc20faea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source=10, rtag=-13, comm=0x1745b420, status=0x0) at
<br>
coll_tuned_util.c:55
<br>
#8  0x00002b9dc1de905f in ompi_coll_tuned_sendrecv (sbuf=0x2aaac2b04010,
<br>
scount=28000, sdtype=0x2b9dc20faea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b9dc20faea0,
<br>
comm=0x1745b420, module=0x1745c450)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_util.h:60
<br>
#9  ompi_coll_tuned_alltoall_intra_pairwise (sbuf=0x2aaac2b04010,
<br>
scount=28000, sdtype=0x2b9dc20faea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b9dc20faea0,
<br>
comm=0x1745b420, module=0x1745c450)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_alltoall.c:70
<br>
#10 0x00002b9dc1d6c71f in PMPI_Alltoall (sendbuf=0x2aaac2b04010,
<br>
sendcount=28000, sendtype=0x2b9dc20faea0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x2aaac99a2010, recvcount=28000, recvtype=0x2b9dc20faea0,
<br>
comm=0x1745b420) at palltoall.c:84
<br>
#11 0x00002b9dc1aedc86 in mpi_alltoall_f (sendbuf=0x2aaac2b04010 &quot;&quot;,
<br>
sendcount=0x7fffece3d020, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendtype=&lt;value optimized out&gt;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x2aaac99a2010 &quot;6%\177e\373\354\306&gt;\346\226z\262\347\350
<br>
\260&gt;\032ya(\303\003\272\276\231\343\322\363zj&#195;&#190;\230\247i\232\307P&#212;&#190;(\304
<br>
\373\321D\261&#196;&#190;\204&#214;&#156;&#206;&#149;h&#214;&#190;H\266H\342l2\245\276\231C7]\003\250&#199;&#190;`\277\231\272
<br>
\265E\261&gt;j\213&#209;&#147;\370\002\263&gt;&#208;&#157;&#195;&#152;x.\254&gt;}\332-\313\371\326\320&gt;\346\245f
<br>
\304\f\214\262\276\070\222zf#'\321&gt;\024\066&#204;&#134;\026\227&#201;&#190;.T\277\266}\366
<br>
\270&gt;h|\323L\330\f&#198;&#190;^z\214!q*\277\276pQ?O\346\067\270&gt;~\006\300&quot;,
<br>
recvcount=0x7fffece3d024, recvtype=0xb67490, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x12d9ba0, ierr=0x7fffece3d028) at palltoall_f.c:76
<br>
#12 0x00000000004634cc in m_sumf_d_ ()
<br>
#13 0x0000000000463072 in m_sum_z_ ()
<br>
#14 0x00000000004c8a8b in mrg_grid_rc_ ()
<br>
#15 0x00000000004ffc5e in rhosym_ ()
<br>
#16 0x0000000000610dc6 in us_mp_set_charge_ ()
<br>
#17 0x0000000000771c43 in elmin_ ()
<br>
#18 0x0000000000453853 in MAIN__ ()
<br>
#19 0x000000000042f15c in main ()
<br>
<p><p>I set up padb to collect a full report on the process and I've attached
<br>
it to this message.  Let me know if I can provide anything further.
<br>
<p>Thanks,
<br>
-Brian
<br>
<p><p><p>On Wed, 2010-07-21 at 10:07 -0400, Brian Smith wrote:
<br>
<span class="quotelev1">&gt; Hi, All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A couple of applications that I'm using -- VASP and Charmm -- end up
</span><br>
<span class="quotelev1">&gt; &quot;stuck&quot; (for lack of a better word) during a waitall call after some
</span><br>
<span class="quotelev1">&gt; non-blocking send/recv action.  This only happens when utilizing the
</span><br>
<span class="quotelev1">&gt; openib btl.  I've followed a couple of bugs where this seemed to happen
</span><br>
<span class="quotelev1">&gt; in some previous revisions and tried the work-arounds provided, but to
</span><br>
<span class="quotelev1">&gt; no avail.  I'm going to try running against a previous version to see if
</span><br>
<span class="quotelev1">&gt; its a regression of some sort, but this problem didn't seem to exist in
</span><br>
<span class="quotelev1">&gt; 1.4.1 until our systems were updated to OFED &gt;= 1.4.  Any suggestions
</span><br>
<span class="quotelev1">&gt; besides the obvious, &quot;well, down-grade from &gt;= 1.4&quot;?  What additional
</span><br>
<span class="quotelev1">&gt; info can I provide to help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<p>
padb version 3.2 (Revision 389)
<br>
full job report for job 3436
<br>
<p>----------------
<br>
[0]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '0'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '0'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '0'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '0'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '0'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '0'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 0
<br>
comm8: Rank: local 1 global 1
<br>
comm8: Rank: local 2 global 2
<br>
comm8: Rank: local 3 global 3
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '0'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 0
<br>
comm9: Rank: local 1 global 4
<br>
comm9: Rank: local 2 global 8
<br>
comm9: Rank: local 3 global 12
<br>
----------------
<br>
[1]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '1'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '1'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '1'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '1'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '1'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '1'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 0
<br>
comm8: Rank: local 1 global 1
<br>
comm8: Rank: local 2 global 2
<br>
comm8: Rank: local 3 global 3
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '0'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 1
<br>
comm9: Rank: local 1 global 5
<br>
comm9: Rank: local 2 global 9
<br>
comm9: Rank: local 3 global 13
<br>
----------------
<br>
[2]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '2'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '2'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '2'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '2'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '2'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '2'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 0
<br>
comm8: Rank: local 1 global 1
<br>
comm8: Rank: local 2 global 2
<br>
comm8: Rank: local 3 global 3
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '0'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 2
<br>
comm9: Rank: local 1 global 6
<br>
comm9: Rank: local 2 global 10
<br>
comm9: Rank: local 3 global 14
<br>
----------------
<br>
[3]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '3'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '3'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '3'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '3'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '3'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '3'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 0
<br>
comm8: Rank: local 1 global 1
<br>
comm8: Rank: local 2 global 2
<br>
comm8: Rank: local 3 global 3
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '0'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 3
<br>
comm9: Rank: local 1 global 7
<br>
comm9: Rank: local 2 global 11
<br>
comm9: Rank: local 3 global 15
<br>
----------------
<br>
[4]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '4'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '4'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '4'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '4'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '4'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '0'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 4
<br>
comm8: Rank: local 1 global 5
<br>
comm8: Rank: local 2 global 6
<br>
comm8: Rank: local 3 global 7
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '1'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 0
<br>
comm9: Rank: local 1 global 4
<br>
comm9: Rank: local 2 global 8
<br>
comm9: Rank: local 3 global 12
<br>
----------------
<br>
[5]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '5'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '5'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '5'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '5'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '5'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '1'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 4
<br>
comm8: Rank: local 1 global 5
<br>
comm8: Rank: local 2 global 6
<br>
comm8: Rank: local 3 global 7
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '1'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 1
<br>
comm9: Rank: local 1 global 5
<br>
comm9: Rank: local 2 global 9
<br>
comm9: Rank: local 3 global 13
<br>
----------------
<br>
[6]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '6'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '6'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '6'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '6'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '6'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '2'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 4
<br>
comm8: Rank: local 1 global 5
<br>
comm8: Rank: local 2 global 6
<br>
comm8: Rank: local 3 global 7
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '1'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 2
<br>
comm9: Rank: local 1 global 6
<br>
comm9: Rank: local 2 global 10
<br>
comm9: Rank: local 3 global 14
<br>
----------------
<br>
[7]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '7'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '7'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '7'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '7'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '7'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '3'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 4
<br>
comm8: Rank: local 1 global 5
<br>
comm8: Rank: local 2 global 6
<br>
comm8: Rank: local 3 global 7
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '1'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 3
<br>
comm9: Rank: local 1 global 7
<br>
comm9: Rank: local 2 global 11
<br>
comm9: Rank: local 3 global 15
<br>
----------------
<br>
[8]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '8'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '8'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '8'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '8'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '8'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '0'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 8
<br>
comm8: Rank: local 1 global 9
<br>
comm8: Rank: local 2 global 10
<br>
comm8: Rank: local 3 global 11
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '2'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 0
<br>
comm9: Rank: local 1 global 4
<br>
comm9: Rank: local 2 global 8
<br>
comm9: Rank: local 3 global 12
<br>
----------------
<br>
[9]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '9'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '9'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '9'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '9'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '9'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '1'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 8
<br>
comm8: Rank: local 1 global 9
<br>
comm8: Rank: local 2 global 10
<br>
comm8: Rank: local 3 global 11
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '2'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 1
<br>
comm9: Rank: local 1 global 5
<br>
comm9: Rank: local 2 global 9
<br>
comm9: Rank: local 3 global 13
<br>
----------------
<br>
[10]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '10'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '10'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '10'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '10'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '10'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '2'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 8
<br>
comm8: Rank: local 1 global 9
<br>
comm8: Rank: local 2 global 10
<br>
comm8: Rank: local 3 global 11
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '2'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 2
<br>
comm9: Rank: local 1 global 6
<br>
comm9: Rank: local 2 global 10
<br>
comm9: Rank: local 3 global 14
<br>
----------------
<br>
[11]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '11'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '11'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '11'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '11'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '11'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '3'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 8
<br>
comm8: Rank: local 1 global 9
<br>
comm8: Rank: local 2 global 10
<br>
comm8: Rank: local 3 global 11
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '2'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 3
<br>
comm9: Rank: local 1 global 7
<br>
comm9: Rank: local 2 global 11
<br>
comm9: Rank: local 3 global 15
<br>
----------------
<br>
[12]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '12'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '12'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '12'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '12'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '12'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '0'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 12
<br>
comm8: Rank: local 1 global 13
<br>
comm8: Rank: local 2 global 14
<br>
comm8: Rank: local 3 global 15
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '3'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 0
<br>
comm9: Rank: local 1 global 4
<br>
comm9: Rank: local 2 global 8
<br>
comm9: Rank: local 3 global 12
<br>
----------------
<br>
[13]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '13'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '13'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '13'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '13'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '13'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '1'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 12
<br>
comm8: Rank: local 1 global 13
<br>
comm8: Rank: local 2 global 14
<br>
comm8: Rank: local 3 global 15
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '3'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 1
<br>
comm9: Rank: local 1 global 5
<br>
comm9: Rank: local 2 global 9
<br>
comm9: Rank: local 3 global 13
<br>
----------------
<br>
[14]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '14'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '14'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '14'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '14'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '14'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '2'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 12
<br>
comm8: Rank: local 1 global 13
<br>
comm8: Rank: local 2 global 14
<br>
comm8: Rank: local 3 global 15
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '3'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 2
<br>
comm9: Rank: local 1 global 6
<br>
comm9: Rank: local 2 global 10
<br>
comm9: Rank: local 3 global 14
<br>
----------------
<br>
[15]
<br>
----------------
<br>
comm0: name: 'MPI_COMM_WORLD'
<br>
comm0: rank: '15'
<br>
comm0: size: '16'
<br>
comm0: id: '0'
<br>
comm0: Rank: local 0 global 0
<br>
comm0: Rank: local 1 global 1
<br>
comm0: Rank: local 2 global 2
<br>
comm0: Rank: local 3 global 3
<br>
comm0: Rank: local 4 global 4
<br>
comm0: Rank: local 5 global 5
<br>
comm0: Rank: local 6 global 6
<br>
comm0: Rank: local 7 global 7
<br>
comm0: Rank: local 8 global 8
<br>
comm0: Rank: local 9 global 9
<br>
comm0: Rank: local 10 global 10
<br>
comm0: Rank: local 11 global 11
<br>
comm0: Rank: local 12 global 12
<br>
comm0: Rank: local 13 global 13
<br>
comm0: Rank: local 14 global 14
<br>
comm0: Rank: local 15 global 15
<br>
comm1: name: 'MPI_COMM_SELF'
<br>
comm1: rank: '0'
<br>
comm1: size: '1'
<br>
comm1: id: '0x1'
<br>
comm2: name: 'MPI_COMM_NULL'
<br>
comm2: size: '0'
<br>
comm2: id: '0x2'
<br>
comm3: name: 'MPI_COMMUNICATOR 3'
<br>
comm3: rank: '15'
<br>
comm3: size: '16'
<br>
comm3: id: '0x3'
<br>
comm3: Rank: local 0 global 0
<br>
comm3: Rank: local 1 global 1
<br>
comm3: Rank: local 2 global 2
<br>
comm3: Rank: local 3 global 3
<br>
comm3: Rank: local 4 global 4
<br>
comm3: Rank: local 5 global 5
<br>
comm3: Rank: local 6 global 6
<br>
comm3: Rank: local 7 global 7
<br>
comm3: Rank: local 8 global 8
<br>
comm3: Rank: local 9 global 9
<br>
comm3: Rank: local 10 global 10
<br>
comm3: Rank: local 11 global 11
<br>
comm3: Rank: local 12 global 12
<br>
comm3: Rank: local 13 global 13
<br>
comm3: Rank: local 14 global 14
<br>
comm3: Rank: local 15 global 15
<br>
comm4: name: 'MPI COMMUNICATOR 4 SPLIT FROM 3'
<br>
comm4: rank: '0'
<br>
comm4: size: '1'
<br>
comm4: id: '0x4'
<br>
comm5: name: 'MPI COMMUNICATOR 5 SPLIT FROM 3'
<br>
comm5: rank: '15'
<br>
comm5: size: '16'
<br>
comm5: id: '0x5'
<br>
comm5: Rank: local 0 global 0
<br>
comm5: Rank: local 1 global 1
<br>
comm5: Rank: local 2 global 2
<br>
comm5: Rank: local 3 global 3
<br>
comm5: Rank: local 4 global 4
<br>
comm5: Rank: local 5 global 5
<br>
comm5: Rank: local 6 global 6
<br>
comm5: Rank: local 7 global 7
<br>
comm5: Rank: local 8 global 8
<br>
comm5: Rank: local 9 global 9
<br>
comm5: Rank: local 10 global 10
<br>
comm5: Rank: local 11 global 11
<br>
comm5: Rank: local 12 global 12
<br>
comm5: Rank: local 13 global 13
<br>
comm5: Rank: local 14 global 14
<br>
comm5: Rank: local 15 global 15
<br>
comm6: name: 'MPI COMMUNICATOR 6 CREATE FROM 0'
<br>
comm6: rank: '15'
<br>
comm6: size: '16'
<br>
comm6: id: '0x6'
<br>
comm6: Rank: local 0 global 0
<br>
comm6: Rank: local 1 global 1
<br>
comm6: Rank: local 2 global 2
<br>
comm6: Rank: local 3 global 3
<br>
comm6: Rank: local 4 global 4
<br>
comm6: Rank: local 5 global 5
<br>
comm6: Rank: local 6 global 6
<br>
comm6: Rank: local 7 global 7
<br>
comm6: Rank: local 8 global 8
<br>
comm6: Rank: local 9 global 9
<br>
comm6: Rank: local 10 global 10
<br>
comm6: Rank: local 11 global 11
<br>
comm6: Rank: local 12 global 12
<br>
comm6: Rank: local 13 global 13
<br>
comm6: Rank: local 14 global 14
<br>
comm6: Rank: local 15 global 15
<br>
comm7: name: 'MPI COMMUNICATOR 7 DUP FROM 6'
<br>
comm7: rank: '15'
<br>
comm7: size: '16'
<br>
comm7: id: '0x7'
<br>
comm7: Rank: local 0 global 0
<br>
comm7: Rank: local 1 global 1
<br>
comm7: Rank: local 2 global 2
<br>
comm7: Rank: local 3 global 3
<br>
comm7: Rank: local 4 global 4
<br>
comm7: Rank: local 5 global 5
<br>
comm7: Rank: local 6 global 6
<br>
comm7: Rank: local 7 global 7
<br>
comm7: Rank: local 8 global 8
<br>
comm7: Rank: local 9 global 9
<br>
comm7: Rank: local 10 global 10
<br>
comm7: Rank: local 11 global 11
<br>
comm7: Rank: local 12 global 12
<br>
comm7: Rank: local 13 global 13
<br>
comm7: Rank: local 14 global 14
<br>
comm7: Rank: local 15 global 15
<br>
comm8: name: 'MPI COMMUNICATOR 8 SPLIT FROM 6'
<br>
comm8: rank: '3'
<br>
comm8: size: '4'
<br>
comm8: id: '0x8'
<br>
comm8: Rank: local 0 global 12
<br>
comm8: Rank: local 1 global 13
<br>
comm8: Rank: local 2 global 14
<br>
comm8: Rank: local 3 global 15
<br>
comm9: name: 'MPI COMMUNICATOR 9 SPLIT FROM 6'
<br>
comm9: rank: '3'
<br>
comm9: size: '4'
<br>
comm9: id: '0x9'
<br>
comm9: Rank: local 0 global 3
<br>
comm9: Rank: local 1 global 7
<br>
comm9: Rank: local 2 global 11
<br>
comm9: Rank: local 3 global 15
<br>
Total: 46 communicators of which 0 are in use.
<br>
No data was recorded for 160 communicators
<br>
Warning: errors reported by some ranks
<br>
========
<br>
[6-11]: Critical error: (Failed to extrace square braces from {name=&quot;recvbuf&quot;,type=&quot;char *&quot;,value=&quot;0x2aaac7efc010 \&quot;6%\\177e\\373\\354\\306&gt;\\346\\226z\\262\\347\\350\\260&gt;\\032ya(\\303\\003\\272\\276\\231\\343\\322\\363zj\303\276\\230\\247i\\232\\307P\324\276(\\304\\373\\321D\\261\304\276\\204\326\234\316\225h\326\276H\\266H\\342l2\\245\\276\\231C7 at /home/b/brs/padb/bin/padb line 6343)
<br>
[12-13,15]: Critical error: (Failed to extrace square braces from {name=&quot;recvbuf&quot;,type=&quot;char *&quot;,value=&quot;0x2aaac824d010 \&quot;6%\\177e\\373\\354\\306&gt;\\346\\226z\\262\\347\\350\\260&gt;\\032ya(\\303\\003\\272\\276\\231\\343\\322\\363zj\303\276\\230\\247i\\232\\307P\324\276(\\304\\373\\321D\\261\304\276\\204\326\234\316\225h\326\276H\\266H\\342l2\\245\\276\\231C7 at /home/b/brs/padb/bin/padb line 6343)
<br>
[14]: Critical error: (Failed to extrace square braces from {name=&quot;recvbuf&quot;,type=&quot;char *&quot;,value=&quot;0x2aaac8361010 \&quot;6%\\177e\\373\\354\\306&gt;\\346\\226z\\262\\347\\350\\260&gt;\\032ya(\\303\\003\\272\\276\\231\\343\\322\\363zj\303\276\\230\\247i\\232\\307P\324\276(\\304\\373\\321D\\261\304\276\\204\326\234\316\225h\326\276H\\266H\\342l2\\245\\276\\231C7 at /home/b/brs/padb/bin/padb line 6343)
<br>
[0]: Critical error: (Failed to extrace square braces from {name=&quot;recvbuf&quot;,type=&quot;char *&quot;,value=&quot;0x2aaac99a2010 \&quot;6%\\177e\\373\\354\\306&gt;\\346\\226z\\262\\347\\350\\260&gt;\\032ya(\\303\\003\\272\\276\\231\\343\\322\\363zj\303\276\\230\\247i\\232\\307P\324\276(\\304\\373\\321D\\261\304\276\\204\326\234\316\225h\326\276H\\266H\\342l2\\245\\276\\231C7 at /home/b/brs/padb/bin/padb line 6343)
<br>
========
<br>
Stack trace(s) for thread: 1
<br>
-----------------
<br>
[1-5] (5 processes)
<br>
-----------------
<br>
main() at ?:?
<br>
&nbsp;&nbsp;MAIN__() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;elmin_() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;us_mp_set_charge_() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rhosym_() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mrg_grid_rc_() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_sum_z_() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_sumf_d_() at ?:?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_alltoall_f() at palltoall_f.c:76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *  sendbuf = '0x2aaac105e010 &quot;&quot;' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int * sendcount: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *  sendtype = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *  recvbuf = '0x2aaac7efc010 &quot;&quot;' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int * recvcount = 'valid pointer perm=rwxp ([stack])' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *  recvtype = 'valid pointer perm=r-xp (/home/b/brs/src/vasp-5.2.2/bin/vasp)' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *      comm = '19766176' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *      ierr: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm         c_comm = '' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype c_recvtype = '' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype c_sendtype = '' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1-5] (5 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMPI_Alltoall() at palltoall.c:84
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *        sendbuf = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int         sendcount = '28000' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype sendtype: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *        recvbuf = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int         recvcount = '28000' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype recvtype: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm         comm: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int err = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1-5] (5 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_alltoall_intra_pairwise() at coll_tuned_alltoall.c:70
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *                       sbuf = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                        scount = '28000' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_datatype_t *   sdtype = 'MPI_DOUBLE_PRECISION' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *                       rbuf = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                        rcount = '28000' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_datatype_t *   rdtype = 'MPI_DOUBLE_PRECISION' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_communicator_t * comm = 'MPI_COMMUNICATOR 3' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_coll_base_module_t *   module = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int        err = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptrdiff_t   lb = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int       rank: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int   recvfrom = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int     sendto: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int       size = '16' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int       step:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'4' [1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'5' [2-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * tmprecv = 'null pointer' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * tmpsend = '0x2 (Invalid pointer)' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1-5] (5 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_sendrecv() at coll_tuned_util.h:60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_sendrecv_actual() at coll_tuned_util.c:55
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *                    sendbuf = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                        scount = '28000' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_t *       sdatatype = 'MPI_DOUBLE_PRECISION' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                          dest: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                          stag = '-13' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void *                    recvbuf = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                        rcount = '28000' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_datatype_t *       rdatatype = 'MPI_DOUBLE_PRECISION' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                        source: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                          rtag = '-13' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_communicator_t * comm = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_status_public_t *     status = 'null pointer' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                           err = '0' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                          line: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_t *[2]          reqs = '{, }' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_status_public_t [2] statuses = 'value too long to display' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1-5] (5 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_default_wait_all() at request/req_wait.c:262
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t                    count = '2' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_t **      requests: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_status_public_t * statuses = 'valid pointer perm=rwxp ([stack])' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char [30] __PRETTY_FUNCTION__ = '&quot;ompi_request_default_wait_all&quot;' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t              completed = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t                      i: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                 mpi_error = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t                pending = '2' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_t *      request = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_t **        rptr = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t                  start: more than 3 distinct values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1-5] (5 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait() at ../opal/threads/condition.h:99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress() at runtime/opal_progress.c:207
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int events = '0' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t   i:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'1' [1,3-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'2' [2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,4-5] (3 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_component_progress() at btl_sm_component.c:391
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_frag_t   Frag = 'value too long to display' [1,4-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_fifo_t * fifo = 'value too long to display' [1,4-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_frag_t * frag = '0x2 (Invalid pointer)' [1,4-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_hdr_t *   hdr = '0x2 (Invalid pointer)' [1,4-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                    j:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'10' [4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'11' [1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'4' [5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int          my_smp_rank:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'1' [1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'4' [4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'5' [5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int        peer_smp_rank = 'value optimized out' [1,4-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                   rc = '0' [1,4-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1,5] (2 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_fifo_read() at btl_sm.h:272
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * value = '0xfffffffffffffffe (Invalid pointer)' [1,5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] (1 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_fifo_read() at btl_sm.h:267
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * value = '0xfffffffffffffffe (Invalid pointer)' [4]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] (1 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_component_progress() at btl_openib_component.c:3437
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int count = 'value optimized out' [2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int     i = 'value optimized out' [2]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] (1 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_component_progress() at btl_sm_component.c:357
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_frag_t   Frag = 'value too long to display' [3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_fifo_t * fifo = 'value optimized out' [3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_frag_t * frag = 'value optimized out' [3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_hdr_t *   hdr = 'value optimized out' [3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                    j = '2' [3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int          my_smp_rank = '0' [3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int        peer_smp_rank = 'value optimized out' [3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                   rc = '0' [3]
<br>
Stack trace(s) for thread: 2
<br>
-----------------
<br>
[1-5] (5 processes)
<br>
-----------------
<br>
start_thread() at ?:?
<br>
&nbsp;&nbsp;btl_openib_async_thread() at btl_openib_async.c:344
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * async = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char [24] __func__ = '&quot;btl_openib_async_thread&quot;' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int              i = '2' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int             rc = '-4' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[1-5] (5 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;poll() at ?:?
<br>
Stack trace(s) for thread: 3
<br>
-----------------
<br>
[1-5] (5 processes)
<br>
-----------------
<br>
start_thread() at ?:?
<br>
&nbsp;&nbsp;service_thread_start() at btl_openib_fd.c:427
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;params
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * context = 'value optimized out' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locals
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int               flags = '0' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t * item = 'valid pointer perm=rwxp' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int                  rc = '0' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fd_set    read_fds_copy = '{fds_bits = {16640, 0 &lt;repeats 15 times&gt;}}' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fd_set   write_fds_copy = '{fds_bits = {0 &lt;repeats 16 times&gt;}}' [1-5]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[1-5] (5 processes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;select() at ?:?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13785.php">Hugo Gagnon: "[OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>In reply to:</strong> <a href="13720.php">Brian Smith: "[OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13791.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Reply:</strong> <a href="13791.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
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
