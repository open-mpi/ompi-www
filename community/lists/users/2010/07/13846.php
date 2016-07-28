<?
$subject_val = "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 13:13:23 2010" -->
<!-- isoreceived="20100728171323" -->
<!-- sent="Wed, 28 Jul 2010 13:13:11 -0400" -->
<!-- isosent="20100728171311" -->
<!-- name="Brian Smith" -->
<!-- email="brs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1" -->
<!-- id="1280337191.18207.53.camel_at_daemon.rc.usf.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4C500CDF.3060801_at_oracle.com" -->
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
<strong>Date:</strong> 2010-07-28 13:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13845.php">christophe petit: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>In reply to:</strong> <a href="13822.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've used the TCP btl and it works fine.  Its only with openib btl that
<br>
I have issues.  I have a set of nodes that uses qib and psm.  This mtl
<br>
works fine also.  I'll try adjusting rendezvous limit and message
<br>
settings as well as the collective algorithm options and see if that
<br>
helps.  
<br>
<p>Many thanks for your assistance.  I'll report back with my findings.
<br>
<p>-Brian
<br>
<p><pre>
-- 
Brian Smith
Senior Systems Administrator
IT Research Computing, University of South Florida
4202 E. Fowler Ave. ENB204
Office Phone: +1 813 974-1467
Organization URL: <a href="http://rc.usf.edu">http://rc.usf.edu</a>
On Wed, 2010-07-28 at 06:56 -0400, Terry Dontje wrote:
&gt; Here are a couple other suggestions:
&gt; 
&gt; 1.  Have you tried your code with using the TCP btl just to make sure
&gt; this might not be a general algorithm issue with the collective?
&gt; 
&gt; 2.  While using the openib btl you may want to try things with rdma
&gt; turned off by using the following parameters to mpirun:
&gt; -mca btl_openib_use_eager_rdma 0 -mca btl_openib_max_eager_rdma 0 -mca
&gt; btl_openib_flags 1
&gt; 
&gt; 3.  While using the openib btl you may want to try things while
&gt; bumping up the rendezvous limit to see  if eliminating rendezvous
&gt; messages helps things (others on the list is there an easier way to do
&gt; this?).  Set the following parameters raising the 8192 and 2048
&gt; values:
&gt; -mca btl_openib_receive_queues &quot;P,8192&quot; -mca btl_openib_max_send_size
&gt; 8192 -mca btl_openib_eager_limit 8192 -mca btl_openib_rndv_eager_limit
&gt; 2048
&gt; 
&gt; 4.  You mayb also want to try and see if the basic collective
&gt; algorithm work instead of using the tuned, which is the default I
&gt; believe, by setting  &quot;-mca coll_basic_priority 100&quot;.  The idea here is
&gt; to determine if the tuned collective itself is tickling the issue.
&gt; 
&gt; --td
&gt; 
&gt; Terry Dontje wrote: 
&gt; &gt; With this earlier failure do you know how many message may have been
&gt; &gt; transferred between the two processes?  Is there a way to narrow
&gt; &gt; this down to a small piece of code?  Do you have totalview or ddt at
&gt; &gt; your disposal?
&gt; &gt; 
&gt; &gt; --td
&gt; &gt; 
&gt; &gt; Brian Smith wrote: 
&gt; &gt; &gt; Also, the application I'm having trouble with appears to work fine with
&gt; &gt; &gt; MVAPICH2 1.4.1, if that is any help.
&gt; &gt; &gt; 
&gt; &gt; &gt; -Brian
&gt; &gt; &gt; 
&gt; &gt; &gt; On Tue, 2010-07-27 at 10:48 -0400, Terry Dontje wrote:
&gt; &gt; &gt;   
&gt; &gt; &gt; &gt; Can you try a simple point-to-point program?
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; --td
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; Brian Smith wrote: 
&gt; &gt; &gt; &gt;     
&gt; &gt; &gt; &gt; &gt; After running on two processors across two nodes, the problem occurs
&gt; &gt; &gt; &gt; &gt; much earlier during execution:
&gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; (gdb) bt
&gt; &gt; &gt; &gt; &gt; #0  opal_sys_timer_get_cycles ()
&gt; &gt; &gt; &gt; &gt; at ../opal/include/opal/sys/amd64/timer.h:46
&gt; &gt; &gt; &gt; &gt; #1  opal_timer_base_get_cycles ()
&gt; &gt; &gt; &gt; &gt; at ../opal/mca/timer/linux/timer_linux.h:31
&gt; &gt; &gt; &gt; &gt; #2  opal_progress () at runtime/opal_progress.c:181
&gt; &gt; &gt; &gt; &gt; #3  0x00002b4bc3c00215 in opal_condition_wait (count=2,
&gt; &gt; &gt; &gt; &gt; requests=0x7fff33372480, statuses=0x7fff33372450)
&gt; &gt; &gt; &gt; &gt;     at ../opal/threads/condition.h:99
&gt; &gt; &gt; &gt; &gt; #4  ompi_request_default_wait_all (count=2, requests=0x7fff33372480,
&gt; &gt; &gt; &gt; &gt; statuses=0x7fff33372450) at request/req_wait.c:262
&gt; &gt; &gt; &gt; &gt; #5  0x00002b4bc3c915b7 in ompi_coll_tuned_sendrecv_actual
&gt; &gt; &gt; &gt; &gt; (sendbuf=0x2aaad11dfaf0, scount=117692, 
&gt; &gt; &gt; &gt; &gt;     sdatatype=0x2b4bc3fa9ea0, dest=1, stag=-13, recvbuf=&lt;value optimized
&gt; &gt; &gt; &gt; &gt; out&gt;, rcount=117692, 
&gt; &gt; &gt; &gt; &gt;     rdatatype=0x2b4bc3fa9ea0, source=1, rtag=-13, comm=0x12cd98c0,
&gt; &gt; &gt; &gt; &gt; status=0x0) at coll_tuned_util.c:55
&gt; &gt; &gt; &gt; &gt; #6  0x00002b4bc3c982db in ompi_coll_tuned_sendrecv (sbuf=0x2aaad10f9d10,
&gt; &gt; &gt; &gt; &gt; scount=117692, sdtype=0x2b4bc3fa9ea0, 
&gt; &gt; &gt; &gt; &gt;     rbuf=0x2aaae104d010, rcount=117692, rdtype=0x2b4bc3fa9ea0,
&gt; &gt; &gt; &gt; &gt; comm=0x12cd98c0, module=0x12cda340)
&gt; &gt; &gt; &gt; &gt;     at coll_tuned_util.h:60
&gt; &gt; &gt; &gt; &gt; #7  ompi_coll_tuned_alltoall_intra_two_procs (sbuf=0x2aaad10f9d10,
&gt; &gt; &gt; &gt; &gt; scount=117692, sdtype=0x2b4bc3fa9ea0, 
&gt; &gt; &gt; &gt; &gt;     rbuf=0x2aaae104d010, rcount=117692, rdtype=0x2b4bc3fa9ea0,
&gt; &gt; &gt; &gt; &gt; comm=0x12cd98c0, module=0x12cda340)
&gt; &gt; &gt; &gt; &gt;     at coll_tuned_alltoall.c:432
&gt; &gt; &gt; &gt; &gt; #8  0x00002b4bc3c1b71f in PMPI_Alltoall (sendbuf=0x2aaad10f9d10,
&gt; &gt; &gt; &gt; &gt; sendcount=117692, sendtype=0x2b4bc3fa9ea0, 
&gt; &gt; &gt; &gt; &gt;     recvbuf=0x2aaae104d010, recvcount=117692, recvtype=0x2b4bc3fa9ea0,
&gt; &gt; &gt; &gt; &gt; comm=0x12cd98c0) at palltoall.c:84
&gt; &gt; &gt; &gt; &gt; #9  0x00002b4bc399cc86 in mpi_alltoall_f (sendbuf=0x2aaad10f9d10 &quot;Z\n
&gt; &gt; &gt; &gt; &gt; \271\356\023\254\271?&quot;, sendcount=0x7fff33372688, 
&gt; &gt; &gt; &gt; &gt;     sendtype=&lt;value optimized out&gt;, recvbuf=0x2aaae104d010 &quot;&quot;,
&gt; &gt; &gt; &gt; &gt; recvcount=0x7fff3337268c, recvtype=0xb67490, 
&gt; &gt; &gt; &gt; &gt;     comm=0x12d9d20, ierr=0x7fff33372690) at palltoall_f.c:76
&gt; &gt; &gt; &gt; &gt; #10 0x00000000004613b8 in m_alltoall_z_ ()
&gt; &gt; &gt; &gt; &gt; #11 0x00000000004ec55f in redis_pw_ ()
&gt; &gt; &gt; &gt; &gt; #12 0x00000000005643d0 in choleski_mp_orthch_ ()
&gt; &gt; &gt; &gt; &gt; #13 0x000000000043fbba in MAIN__ ()
&gt; &gt; &gt; &gt; &gt; #14 0x000000000042f15c in main ()
&gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; On Tue, 2010-07-27 at 06:14 -0400, Terry Dontje wrote:
&gt; &gt; &gt; &gt; &gt;   
&gt; &gt; &gt; &gt; &gt;       
&gt; &gt; &gt; &gt; &gt; &gt; A clarification from your previous email, you had your code working
&gt; &gt; &gt; &gt; &gt; &gt; with OMPI 1.4.1 but an older version of OFED?  Then you upgraded to
&gt; &gt; &gt; &gt; &gt; &gt; OFED 1.4 and things stopped working?  Sounds like your current system
&gt; &gt; &gt; &gt; &gt; &gt; is set up with OMPI 1.4.2 and OFED 1.5.  Anyways, I am a little
&gt; &gt; &gt; &gt; &gt; &gt; confused as to when things might have actually broke.
&gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; My first guess would be something may be wrong with the OFED setup.
&gt; &gt; &gt; &gt; &gt; &gt; Have checked the status of your ib devices with ibv_devinfo?  Have you
&gt; &gt; &gt; &gt; &gt; &gt; ran any of the OFED rc tests like ibv_rc_pingpong?  
&gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; If the above seems ok have you tried to run a simpler OMPI test like
&gt; &gt; &gt; &gt; &gt; &gt; connectivity?  I would see if a simple np=2 run spanning across two
&gt; &gt; &gt; &gt; &gt; &gt; nodes fails?
&gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; What OS distribution and version you are running on?
&gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; --td
&gt; &gt; &gt; &gt; &gt; &gt; Brian Smith wrote: 
&gt; &gt; &gt; &gt; &gt; &gt;     
&gt; &gt; &gt; &gt; &gt; &gt;         
&gt; &gt; &gt; &gt; &gt; &gt; &gt; In case my previous e-mail is too vague for anyone to address, here's a
&gt; &gt; &gt; &gt; &gt; &gt; &gt; backtrace from my application.  This version, compiled with Intel
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 11.1.064 (OpenMPI 1.4.2 w/ gcc 4.4.2), hangs during MPI_Alltoall
&gt; &gt; &gt; &gt; &gt; &gt; &gt; instead.  Running on 16 CPUs, Opteron 2427, Mellanox Technologies
&gt; &gt; &gt; &gt; &gt; &gt; &gt; MT25418 w/ OFED 1.5
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; strace on all ranks repeatedly shows:
&gt; &gt; &gt; &gt; &gt; &gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}, {fd=22,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; events=POLLIN}, {fd=23, events=POLLIN}], 7, 0) = 0 (Timeout)
&gt; &gt; &gt; &gt; &gt; &gt; &gt; ...
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; gdb --pid=&lt;pid&gt;
&gt; &gt; &gt; &gt; &gt; &gt; &gt; (gdb) bt
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #0  sm_fifo_read () at btl_sm.h:267
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #1  mca_btl_sm_component_progress () at btl_sm_component.c:391
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #2  0x00002b00085116ea in opal_progress () at
&gt; &gt; &gt; &gt; &gt; &gt; &gt; runtime/opal_progress.c:207
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #3  0x00002b0007def215 in opal_condition_wait (count=2,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; requests=0x7fffd27802a0, statuses=0x7fffd2780270)
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     at ../opal/threads/condition.h:99
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #4  ompi_request_default_wait_all (count=2, requests=0x7fffd27802a0,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; statuses=0x7fffd2780270) at request/req_wait.c:262
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #5  0x00002b0007e805b7 in ompi_coll_tuned_sendrecv_actual
&gt; &gt; &gt; &gt; &gt; &gt; &gt; (sendbuf=0x2aaac2c4c210, scount=28000, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     sdatatype=0x2b0008198ea0, dest=6, stag=-13, recvbuf=&lt;value optimized
&gt; &gt; &gt; &gt; &gt; &gt; &gt; out&gt;, rcount=28000, rdatatype=0x2b0008198ea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     source=10, rtag=-13, comm=0x16ad7420, status=0x0) at
&gt; &gt; &gt; &gt; &gt; &gt; &gt; coll_tuned_util.c:55
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #6  0x00002b0007e8705f in ompi_coll_tuned_sendrecv (sbuf=0x2aaac2b04010,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; scount=28000, sdtype=0x2b0008198ea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b0008198ea0,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; comm=0x16ad7420, module=0x16ad8450)
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     at coll_tuned_util.h:60
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #7  ompi_coll_tuned_alltoall_intra_pairwise (sbuf=0x2aaac2b04010,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; scount=28000, sdtype=0x2b0008198ea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b0008198ea0,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; comm=0x16ad7420, module=0x16ad8450)
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     at coll_tuned_alltoall.c:70
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #8  0x00002b0007e0a71f in PMPI_Alltoall (sendbuf=0x2aaac2b04010,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; sendcount=28000, sendtype=0x2b0008198ea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     recvbuf=0x2aaac99a2010, recvcount=28000, recvtype=0x2b0008198ea0,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; comm=0x16ad7420) at palltoall.c:84
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #9  0x00002b0007b8bc86 in mpi_alltoall_f (sendbuf=0x2aaac2b04010 &quot;&quot;,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; sendcount=0x7fffd27806a0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     sendtype=&lt;value optimized out&gt;, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     recvbuf=0x2aaac99a2010 &quot;6%\177e\373\354\306&gt;\346\226z\262\347\350
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \260&gt;\032ya(\303\003\272\276\231\343\322\363zj&#195;&#190;\230\247i\232\307P&#212;&#190;(\304
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \373\321D\261&#196;&#190;\204&#214;&#156;&#206;&#149;h&#214;&#190;H\266H\342l2\245\276\231C7]\003\250&#199;&#190;`\277\231\272
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \265E\261&gt;j\213&#209;&#147;\370\002\263&gt;&#208;&#157;&#195;&#152;x.\254&gt;}\332-\313\371\326\320&gt;\346\245f
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \304\f\214\262\276\070\222zf#'\321&gt;\024\066&#204;&#134;\026\227&#201;&#190;.T\277\266}\366
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \270&gt;h|\323L\330\f&#198;&#190;^z\214!q*\277\276pQ?O\346\067\270&gt;~\006\300&quot;,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; recvcount=0x7fffd27806a4, recvtype=0xb67490, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     comm=0x12d9ba0, ierr=0x7fffd27806a8) at palltoall_f.c:76
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #10 0x00000000004634cc in m_sumf_d_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #11 0x0000000000463072 in m_sum_z_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #12 0x00000000004c8a8b in mrg_grid_rc_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #13 0x00000000004ffc5e in rhosym_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #14 0x0000000000610dc6 in us_mp_set_charge_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #15 0x0000000000771c43 in elmin_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #16 0x0000000000453853 in MAIN__ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #17 0x000000000042f15c in main ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; On other processes:
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; (gdb) bt
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #0  0x0000003692a0b725 in pthread_spin_lock ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; from /lib64/libpthread.so.0
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #1  0x00002aaaaacdfa7b in ibv_cmd_create_qp ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; from /usr/lib64/libmlx4-rdmav2.so
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #2  0x00002b9dc1db3ff8 in progress_one_device ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; at /usr/include/infiniband/verbs.h:884
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #3  btl_openib_component_progress () at btl_openib_component.c:3451
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #4  0x00002b9dc24736ea in opal_progress () at
&gt; &gt; &gt; &gt; &gt; &gt; &gt; runtime/opal_progress.c:207
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #5  0x00002b9dc1d51215 in opal_condition_wait (count=2,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; requests=0x7fffece3cc20, statuses=0x7fffece3cbf0)
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     at ../opal/threads/condition.h:99
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #6  ompi_request_default_wait_all (count=2, requests=0x7fffece3cc20,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; statuses=0x7fffece3cbf0) at request/req_wait.c:262
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #7  0x00002b9dc1de25b7 in ompi_coll_tuned_sendrecv_actual
&gt; &gt; &gt; &gt; &gt; &gt; &gt; (sendbuf=0x2aaac2c4c210, scount=28000, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     sdatatype=0x2b9dc20faea0, dest=6, stag=-13, recvbuf=&lt;value optimized
&gt; &gt; &gt; &gt; &gt; &gt; &gt; out&gt;, rcount=28000, rdatatype=0x2b9dc20faea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     source=10, rtag=-13, comm=0x1745b420, status=0x0) at
&gt; &gt; &gt; &gt; &gt; &gt; &gt; coll_tuned_util.c:55
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #8  0x00002b9dc1de905f in ompi_coll_tuned_sendrecv (sbuf=0x2aaac2b04010,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; scount=28000, sdtype=0x2b9dc20faea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b9dc20faea0,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; comm=0x1745b420, module=0x1745c450)
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     at coll_tuned_util.h:60
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #9  ompi_coll_tuned_alltoall_intra_pairwise (sbuf=0x2aaac2b04010,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; scount=28000, sdtype=0x2b9dc20faea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b9dc20faea0,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; comm=0x1745b420, module=0x1745c450)
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     at coll_tuned_alltoall.c:70
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #10 0x00002b9dc1d6c71f in PMPI_Alltoall (sendbuf=0x2aaac2b04010,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; sendcount=28000, sendtype=0x2b9dc20faea0, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     recvbuf=0x2aaac99a2010, recvcount=28000, recvtype=0x2b9dc20faea0,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; comm=0x1745b420) at palltoall.c:84
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #11 0x00002b9dc1aedc86 in mpi_alltoall_f (sendbuf=0x2aaac2b04010 &quot;&quot;,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; sendcount=0x7fffece3d020, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     sendtype=&lt;value optimized out&gt;, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     recvbuf=0x2aaac99a2010 &quot;6%\177e\373\354\306&gt;\346\226z\262\347\350
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \260&gt;\032ya(\303\003\272\276\231\343\322\363zj&#195;&#190;\230\247i\232\307P&#212;&#190;(\304
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \373\321D\261&#196;&#190;\204&#214;&#156;&#206;&#149;h&#214;&#190;H\266H\342l2\245\276\231C7]\003\250&#199;&#190;`\277\231\272
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \265E\261&gt;j\213&#209;&#147;\370\002\263&gt;&#208;&#157;&#195;&#152;x.\254&gt;}\332-\313\371\326\320&gt;\346\245f
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \304\f\214\262\276\070\222zf#'\321&gt;\024\066&#204;&#134;\026\227&#201;&#190;.T\277\266}\366
&gt; &gt; &gt; &gt; &gt; &gt; &gt; \270&gt;h|\323L\330\f&#198;&#190;^z\214!q*\277\276pQ?O\346\067\270&gt;~\006\300&quot;,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; recvcount=0x7fffece3d024, recvtype=0xb67490, 
&gt; &gt; &gt; &gt; &gt; &gt; &gt;     comm=0x12d9ba0, ierr=0x7fffece3d028) at palltoall_f.c:76
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #12 0x00000000004634cc in m_sumf_d_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #13 0x0000000000463072 in m_sum_z_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #14 0x00000000004c8a8b in mrg_grid_rc_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #15 0x00000000004ffc5e in rhosym_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #16 0x0000000000610dc6 in us_mp_set_charge_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #17 0x0000000000771c43 in elmin_ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #18 0x0000000000453853 in MAIN__ ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; #19 0x000000000042f15c in main ()
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; I set up padb to collect a full report on the process and I've attached
&gt; &gt; &gt; &gt; &gt; &gt; &gt; it to this message.  Let me know if I can provide anything further.
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; Thanks,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; -Brian
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; On Wed, 2010-07-21 at 10:07 -0400, Brian Smith wrote:
&gt; &gt; &gt; &gt; &gt; &gt; &gt;   
&gt; &gt; &gt; &gt; &gt; &gt; &gt;       
&gt; &gt; &gt; &gt; &gt; &gt; &gt;           
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Hi, All,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; A couple of applications that I'm using -- VASP and Charmm -- end up
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; &quot;stuck&quot; (for lack of a better word) during a waitall call after some
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; non-blocking send/recv action.  This only happens when utilizing the
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; openib btl.  I've followed a couple of bugs where this seemed to happen
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; in some previous revisions and tried the work-arounds provided, but to
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; no avail.  I'm going to try running against a previous version to see if
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; its a regression of some sort, but this problem didn't seem to exist in
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 1.4.1 until our systems were updated to OFED &gt;= 1.4.  Any suggestions
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; besides the obvious, &quot;well, down-grade from &gt;= 1.4&quot;?  What additional
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; info can I provide to help?
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; Thanks,
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; -Brian
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;     
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;         
&gt; &gt; &gt; &gt; &gt; &gt; &gt; &gt;             
&gt; &gt; &gt; &gt; &gt; &gt; &gt; ____________________________________________________________________
&gt; &gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; &gt; &gt; &gt; &gt; users mailing list
&gt; &gt; &gt; &gt; &gt; &gt; &gt; users_at_[hidden]
&gt; &gt; &gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; &gt; &gt; &gt; &gt; &gt;       
&gt; &gt; &gt; &gt; &gt; &gt; &gt;           
&gt; &gt; &gt; &gt; &gt; &gt; -- 
&gt; &gt; &gt; &gt; &gt; &gt; Oracle
&gt; &gt; &gt; &gt; &gt; &gt; Terry D. Dontje | Principal Software Engineer
&gt; &gt; &gt; &gt; &gt; &gt; Developer Tools Engineering | +1.650.633.7054
&gt; &gt; &gt; &gt; &gt; &gt; Oracle - Performance Technologies
&gt; &gt; &gt; &gt; &gt; &gt; 95 Network Drive, Burlington, MA 01803
&gt; &gt; &gt; &gt; &gt; &gt; Email terry.dontje_at_[hidden]
&gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; &gt; &gt;     
&gt; &gt; &gt; &gt; &gt; &gt;         
&gt; &gt; &gt; &gt; -- 
&gt; &gt; &gt; &gt; Oracle
&gt; &gt; &gt; &gt; Terry D. Dontje | Principal Software Engineer
&gt; &gt; &gt; &gt; Developer Tools Engineering | +1.650.633.7054
&gt; &gt; &gt; &gt; Oracle - Performance Technologies
&gt; &gt; &gt; &gt; 95 Network Drive, Burlington, MA 01803
&gt; &gt; &gt; &gt; Email terry.dontje_at_[hidden]
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt;     
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt;   
&gt; &gt; 
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; Oracle
&gt; &gt; Terry D. Dontje | Principal Software Engineer
&gt; &gt; Developer Tools Engineering | +1.650.633.7054
&gt; &gt; Oracle - Performance Technologies
&gt; &gt; 95 Network Drive, Burlington, MA 01803
&gt; &gt; Email terry.dontje_at_[hidden]
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; ____________________________________________________________________
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; -- 
&gt; Oracle
&gt; Terry D. Dontje | Principal Software Engineer
&gt; Developer Tools Engineering | +1.650.633.7054
&gt; Oracle - Performance Technologies
&gt; 95 Network Drive, Burlington, MA 01803
&gt; Email terry.dontje_at_[hidden]
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13847.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13845.php">christophe petit: "Re: [OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>In reply to:</strong> <a href="13822.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
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
