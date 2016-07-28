<?
$subject_val = "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 13 00:57:52 2013" -->
<!-- isoreceived="20131113055752" -->
<!-- sent="Wed, 13 Nov 2013 14:58:21 +0900" -->
<!-- isosent="20131113055821" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646" -->
<!-- id="OFCD07A115.5FE2198C-ON49257C22.001EC07D-49257C22.0020C338_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="164051C9-6D9B-409F-9D7B-8A69A9FE8C46_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Segmentation%20fault%20in%20oob_tcp.c%20of	openmpi-1.7.4a1r29646"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-11-13 00:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22964.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22962.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22962.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22964.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22964.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you for your quick response.
<br>
<p>I'd like to report one more regressive issue about Torque support of
<br>
openmpi-1.7.4a1r29646, which might be related to &quot;#3893: LAMA mapper
<br>
has problems&quot; I reported a few days ago.
<br>
<p>The script below does not work with openmpi-1.7.4a1r29646,
<br>
although it worked with openmpi-1.7.3 as I told you before.
<br>
<p>#!/bin/sh
<br>
#PBS -l nodes=node08:ppn=8
<br>
export OMP_NUM_THREADS=1
<br>
cd $PBS_O_WORKDIR
<br>
cp $PBS_NODEFILE pbs_hosts
<br>
NPROCS=`wc -l &lt; pbs_hosts`
<br>
mpirun -machinefile pbs_hosts -np ${NPROCS} -report-bindings -bind-to core
<br>
Myprog
<br>
<p>If I drop &quot;-machinefile pbs_hosts -np ${NPROCS} &quot;, then it works fine.
<br>
Since this happens without lama request, I guess it's not the problem
<br>
in lama itself. Anyway, please look into this issue as well.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Done - thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 12, 2013, at 7:35 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear openmpi developers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I got a segmentation fault in traial use of openmpi-1.7.4a1r29646 built
</span><br>
by
<br>
<span class="quotelev2">&gt; &gt; PGI13.10 as shown below:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage testbed-openmpi-1.7.3]$ mpirun -np 4 -cpus-per-proc 2
</span><br>
<span class="quotelev2">&gt; &gt; -report-bindings mPre
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:23082] MCW rank 2 bound to socket 0[core 4[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 5[hwt 0]]: [././././B/B][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:23082] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 1[core 7[hwt 0]]: [./././././.][B/B/./././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:23082] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 1[hwt 0]]: [B/B/./././.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage.cluster:23082] MCW rank 1 bound to socket 0[core 2[hwt 0]],
</span><br>
socket
<br>
<span class="quotelev2">&gt; &gt; 0[core 3[hwt 0]]: [././B/B/./.][./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [manage:23082] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [manage:23082] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [manage:23082] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [manage:23082] Failing at address: 0x34
</span><br>
<span class="quotelev2">&gt; &gt; [manage:23082] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage testbed-openmpi-1.7.3]$ gdb mpirun core.23082
</span><br>
<span class="quotelev2">&gt; &gt; GNU gdb (GDB) CentOS (7.0.1-42.el5.centos.1)
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Core was generated by `mpirun -np 4 -cpus-per-proc 2 -report-bindings
</span><br>
<span class="quotelev2">&gt; &gt; mPre'.
</span><br>
<span class="quotelev2">&gt; &gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002b5f861c9c4f in recv_connect (mod=0x5f861ca20b00007f,
</span><br>
sd=32767,
<br>
<span class="quotelev2">&gt; &gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev2">&gt; &gt; 631             peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) where
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00002b5f861c9c4f in recv_connect (mod=0x5f861ca20b00007f,
</span><br>
sd=32767,
<br>
<span class="quotelev2">&gt; &gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002b5f861ca20b in recv_handler (sd=1778385023, flags=32767,
</span><br>
<span class="quotelev2">&gt; &gt; cbdata=0x8eb06a00007fff25) at ./oob_tcp.c:760
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b5f848eb06a in event_process_active_single_queue
</span><br>
<span class="quotelev2">&gt; &gt; (base=0x5f848eb27000007f, activeq=0x848eb27000007fff)
</span><br>
<span class="quotelev2">&gt; &gt;    at ./event.c:1366
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002b5f848eb270 in event_process_active
</span><br>
(base=0x5f848eb84900007f)
<br>
<span class="quotelev2">&gt; &gt; at ./event.c:1435
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00002b5f848eb849 in opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev2">&gt; &gt; (base=0x4077a000007f, flags=32767) at ./event.c:1645
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00000000004077a0 in orterun (argc=7, argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev2">&gt; &gt; at ./orterun.c:1030
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00000000004067fb in main (argc=7, argv=0x7fff25bbd4a8)
</span><br>
at ./main.c:13
<br>
<span class="quotelev2">&gt; &gt; (gdb) quit
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The line 627 in orte/mca/oob/tcp/oob_tcp.c is apparently unnecessary,
</span><br>
which
<br>
<span class="quotelev2">&gt; &gt; causes the segfault.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   624      /* lookup the corresponding process */
</span><br>
<span class="quotelev2">&gt; &gt;   625      peer = mca_oob_tcp_peer_lookup(mod, &amp;hdr-&gt;origin);
</span><br>
<span class="quotelev2">&gt; &gt;   626      if (NULL == peer) {
</span><br>
<span class="quotelev2">&gt; &gt;   627          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;   628          opal_output_verbose(OOB_TCP_DEBUG_CONNECT,
</span><br>
<span class="quotelev2">&gt; &gt; orte_oob_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt; &gt;   629                              &quot;%s mca_oob_tcp_recv_connect:
</span><br>
<span class="quotelev2">&gt; &gt; connection from new peer&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;   630                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev2">&gt; &gt;   631          peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev2">&gt; &gt;   632          peer-&gt;mod = mod;
</span><br>
<span class="quotelev2">&gt; &gt;   633          peer-&gt;name = hdr-&gt;origin;
</span><br>
<span class="quotelev2">&gt; &gt;   634          peer-&gt;state = MCA_OOB_TCP_ACCEPTING;
</span><br>
<span class="quotelev2">&gt; &gt;   635          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev2">&gt; &gt;   636          if (OPAL_SUCCESS != opal_hash_table_set_value_uint64
</span><br>
(&amp;mod-&gt;
<br>
<span class="quotelev2">&gt; &gt; peers, (*ui64), peer)) {
</span><br>
<span class="quotelev2">&gt; &gt;   637              OBJ_RELEASE(peer);
</span><br>
<span class="quotelev2">&gt; &gt;   638              return;
</span><br>
<span class="quotelev2">&gt; &gt;   639          }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please fix this mistake in the next release.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22964.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22962.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22962.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22964.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22964.php">Ralph Castain: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
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
