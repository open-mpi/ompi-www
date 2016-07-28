<?
$subject_val = "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 13 01:20:59 2013" -->
<!-- isoreceived="20131113062059" -->
<!-- sent="Tue, 12 Nov 2013 22:13:11 -0800" -->
<!-- isosent="20131113061311" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646" -->
<!-- id="55DD8557-3BB5-4EF6-B48E-548207EF05D7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFCD07A115.5FE2198C-ON49257C22.001EC07D-49257C22.0020C338_at_jcity.maeda.co.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-13 01:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22965.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22963.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22963.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22965.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22965.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can try, but I have no way of testing Torque any more - so all I can do is a code review. If you can build --enable-debug and add -mca plm_base_verbose 5 to your cmd line, I'd appreciate seeing the output.
<br>
<p><p>On Nov 12, 2013, at 9:58 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your quick response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like to report one more regressive issue about Torque support of
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.4a1r29646, which might be related to &quot;#3893: LAMA mapper
</span><br>
<span class="quotelev1">&gt; has problems&quot; I reported a few days ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The script below does not work with openmpi-1.7.4a1r29646,
</span><br>
<span class="quotelev1">&gt; although it worked with openmpi-1.7.3 as I told you before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=node08:ppn=8
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev1">&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -report-bindings -bind-to core
</span><br>
<span class="quotelev1">&gt; Myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I drop &quot;-machinefile pbs_hosts -np ${NPROCS} &quot;, then it works fine.
</span><br>
<span class="quotelev1">&gt; Since this happens without lama request, I guess it's not the problem
</span><br>
<span class="quotelev1">&gt; in lama itself. Anyway, please look into this issue as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Done - thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 12, 2013, at 7:35 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear openmpi developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got a segmentation fault in traial use of openmpi-1.7.4a1r29646 built
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGI13.10 as shown below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ mpirun -np 4 -cpus-per-proc 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -report-bindings mPre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage.cluster:23082] MCW rank 2 bound to socket 0[core 4[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 5[hwt 0]]: [././././B/B][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage.cluster:23082] MCW rank 3 bound to socket 1[core 6[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1[core 7[hwt 0]]: [./././././.][B/B/./././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage.cluster:23082] MCW rank 0 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 1[hwt 0]]: [B/B/./././.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage.cluster:23082] MCW rank 1 bound to socket 0[core 2[hwt 0]],
</span><br>
<span class="quotelev1">&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0[core 3[hwt 0]]: [././B/B/./.][./././././.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage:23082] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage:23082] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage:23082] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage:23082] Failing at address: 0x34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [manage:23082] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mishima_at_manage testbed-openmpi-1.7.3]$ gdb mpirun core.23082
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb (GDB) CentOS (7.0.1-42.el5.centos.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2009 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Core was generated by `mpirun -np 4 -cpus-per-proc 2 -report-bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mPre'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev1">&gt; sd=32767,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 631             peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00002b5f861c9c4f in recv_connect (mod=0x5f861ca20b00007f,
</span><br>
<span class="quotelev1">&gt; sd=32767,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hdr=0x1ca20b00007fff25) at ./oob_tcp.c:631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00002b5f861ca20b in recv_handler (sd=1778385023, flags=32767,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cbdata=0x8eb06a00007fff25) at ./oob_tcp.c:760
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00002b5f848eb06a in event_process_active_single_queue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (base=0x5f848eb27000007f, activeq=0x848eb27000007fff)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   at ./event.c:1366
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00002b5f848eb270 in event_process_active
</span><br>
<span class="quotelev1">&gt; (base=0x5f848eb84900007f)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at ./event.c:1435
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00002b5f848eb849 in opal_libevent2021_event_base_loop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (base=0x4077a000007f, flags=32767) at ./event.c:1645
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00000000004077a0 in orterun (argc=7, argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at ./orterun.c:1030
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x00000000004067fb in main (argc=7, argv=0x7fff25bbd4a8)
</span><br>
<span class="quotelev1">&gt; at ./main.c:13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) quit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The line 627 in orte/mca/oob/tcp/oob_tcp.c is apparently unnecessary,
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causes the segfault.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  624      /* lookup the corresponding process */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  625      peer = mca_oob_tcp_peer_lookup(mod, &amp;hdr-&gt;origin);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  626      if (NULL == peer) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  627          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  628          opal_output_verbose(OOB_TCP_DEBUG_CONNECT,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_oob_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  629                              &quot;%s mca_oob_tcp_recv_connect:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connection from new peer&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  630                              ORTE_NAME_PRINT(ORTE_PROC_MY_NAME));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  631          peer = OBJ_NEW(mca_oob_tcp_peer_t);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  632          peer-&gt;mod = mod;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  633          peer-&gt;name = hdr-&gt;origin;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  634          peer-&gt;state = MCA_OOB_TCP_ACCEPTING;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  635          ui64 = (uint64_t*)(&amp;peer-&gt;name);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  636          if (OPAL_SUCCESS != opal_hash_table_set_value_uint64
</span><br>
<span class="quotelev1">&gt; (&amp;mod-&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; peers, (*ui64), peer)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  637              OBJ_RELEASE(peer);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  638              return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  639          }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please fix this mistake in the next release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22965.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>Previous message:</strong> <a href="22963.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<li><strong>In reply to:</strong> <a href="22963.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of	openmpi-1.7.4a1r29646"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22965.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<li><strong>Reply:</strong> <a href="22965.php">tmishima_at_[hidden]: "Re: [OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
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
