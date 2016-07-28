<?
$subject_val = "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 23:54:26 2016" -->
<!-- isoreceived="20160220045426" -->
<!-- sent="Fri, 19 Feb 2016 23:54:25 -0500" -->
<!-- isosent="20160220045425" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes" -->
<!-- id="CAMJJpkWdWm5QQ5WTpy3QieJ_P5g2y7qaFX28Yh=wJcQyhcM7TQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56C7A3DE.1020001_at_pg.gda.pl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 23:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Previous message:</strong> <a href="28557.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>In reply to:</strong> <a href="28555.php">Artur Malinowski: "[OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arthur,
<br>
<p>Your email does not contain enough information to pinpoint the problem.
<br>
However, there are several hints that tent to indicate a problem in your
<br>
application.
<br>
<p>1. in the collective communication that succeed, the MPI_Intercomm_merge,
<br>
the processes are doing [at least] one MPI_Allreduce followed by one
<br>
MPI_Allgatherv, two collective communications that force the establishment
<br>
of most of the connections between processes. As all the communications
<br>
involved in this step succeed, I see no reason for a subsequent MPI_Send to
<br>
fail if all the call parameters are correct.
<br>
<p>2. The communication fail for both TCP and IB suggests that either the
<br>
buffer your datatype + count is pointing to is not correctly allocated, or
<br>
that the combination of count and datatype are identifying the wrong memory
<br>
pattern. In both cases, the faulty process will segfault during the pack
<br>
operation. Can you check the stack on the processes where the fault occurs?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Feb 19, 2016 at 6:23 PM, Artur Malinowski &lt;
<br>
artur.malinowski_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem with my application that is based on dynamic process
</span><br>
<span class="quotelev1">&gt; management. The scenario related to process creation is as follows:
</span><br>
<span class="quotelev1">&gt;   1. All processes call MPI_Comm_spawn_multiple to spawn additional single
</span><br>
<span class="quotelev1">&gt; process per each node.
</span><br>
<span class="quotelev1">&gt;   2. Parent processes call MPI_Intercomm_merge.
</span><br>
<span class="quotelev1">&gt;   3. Child processes call MPI_Init_pmem, MPI_Comm_get_parent,
</span><br>
<span class="quotelev1">&gt; MPI_Intercomm_merge.
</span><br>
<span class="quotelev1">&gt;   4. Some of parent processes fail at their first MPI_Send with SIGSEGV.
</span><br>
<span class="quotelev1">&gt; Before and after above steps, processes call plenty of other MPI routines
</span><br>
<span class="quotelev1">&gt; (so it is hard to extract minimal example that suffer from the problem).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting observation: the MPI_Comm obtained with MPI_Intercomm_merge
</span><br>
<span class="quotelev1">&gt; for parent processes that fail with SIGSEGV are slightly different.
</span><br>
<span class="quotelev1">&gt; Depending on type used to print it (I'm not sure about the type of
</span><br>
<span class="quotelev1">&gt; MPI_Comm), they are either negative (if printed as int), or bigger than
</span><br>
<span class="quotelev1">&gt; others (if printed as unsigned long long). For instance, with code:
</span><br>
<span class="quotelev1">&gt;   printf(&quot;%d %d %llu %\n&quot;, rank, intracomm, intracomm);
</span><br>
<span class="quotelev1">&gt; and output:
</span><br>
<span class="quotelev1">&gt;   4 -970650128 140564719013360
</span><br>
<span class="quotelev1">&gt;   8 14458544 14458544
</span><br>
<span class="quotelev1">&gt;   12 15121888 15121888
</span><br>
<span class="quotelev1">&gt;   9 38104000 38104000
</span><br>
<span class="quotelev1">&gt;   1 14921600 14921600
</span><br>
<span class="quotelev1">&gt;   11 31413968 31413968
</span><br>
<span class="quotelev1">&gt;   5 27737968 27737968
</span><br>
<span class="quotelev1">&gt;   7 -934013376 140023589770816
</span><br>
<span class="quotelev1">&gt;   13 24512096 24512096
</span><br>
<span class="quotelev1">&gt;   0 31348624 31348624
</span><br>
<span class="quotelev1">&gt;   3 -1091084352 139817274269632
</span><br>
<span class="quotelev1">&gt;   2 27982528 27982528
</span><br>
<span class="quotelev1">&gt;   10 8745056 8745056
</span><br>
<span class="quotelev1">&gt;   14 9449856 9449856
</span><br>
<span class="quotelev1">&gt;   6 10023360 10023360
</span><br>
<span class="quotelev1">&gt; processes: 4, 7 and 3 fail. There is no connection between failed
</span><br>
<span class="quotelev1">&gt; processes and particular node, it usually affects about 20% of processes
</span><br>
<span class="quotelev1">&gt; and occurs both for tcp and ib. Any idea how to find source of the problem?
</span><br>
<span class="quotelev1">&gt; More info included at the bottom of this message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Artur Malinowski
</span><br>
<span class="quotelev1">&gt; PhD student at Gdansk University of Technology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi version:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; problem occurs both in 1.10.1 and 1.10.2, older untested
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; included in config.log.tar.bz2 attachment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; included in ompi_info.tar.bz2 attachment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; execution command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /path/to/openmpi/bin/mpirun --map-by node --prefix /path/to/openmpi
</span><br>
<span class="quotelev1">&gt; /path/to/app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; system info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OpenFabrics: MLNX_OFED_LINUX-3.1-1.0.3-rhel6.5-x86_64 from mellanox
</span><br>
<span class="quotelev1">&gt; official page
</span><br>
<span class="quotelev1">&gt; - Linux: CentOS release 6.5 (Final) under Rocks cluster
</span><br>
<span class="quotelev1">&gt; - kernel: build on my own, 3.18.0 with some patches
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ibv_devinfo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.35.5100
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0002:c903:009f:5b00
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0002:c903:009f:5b03
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 4099
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0x1
</span><br>
<span class="quotelev1">&gt;         board_id:                       MT_1090110028
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 4
</span><br>
<span class="quotelev1">&gt;                         port_lid:               1
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 port:   2
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_DOWN (1)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                         port_lid:               0
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifconfig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr XXXXXXXXXX
</span><br>
<span class="quotelev1">&gt;           inet addr:10.1.255.248  Bcast:10.1.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::21e:67ff:feb9:5ca/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:138132137 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:160269713 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:63945289429 (59.5 GiB)  TX bytes:68561418011 (63.8 GiB)
</span><br>
<span class="quotelev1">&gt;           Memory:d0960000-d097ffff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28555.php">http://www.open-mpi.org/community/lists/users/2016/02/28555.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28559.php">Siegmar Gross: "Re: [OMPI users] runtime error with openmpi-v2.x-dev-958-g7e94425"</a>
<li><strong>Previous message:</strong> <a href="28557.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>In reply to:</strong> <a href="28555.php">Artur Malinowski: "[OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
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
