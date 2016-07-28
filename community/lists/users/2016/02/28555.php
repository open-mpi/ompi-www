<?
$subject_val = "[OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 18:23:16 2016" -->
<!-- isoreceived="20160219232316" -->
<!-- sent="Sat, 20 Feb 2016 00:23:10 +0100" -->
<!-- isosent="20160219232310" -->
<!-- name="Artur Malinowski" -->
<!-- email="artur.malinowski_at_[hidden]" -->
<!-- subject="[OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes" -->
<!-- id="56C7A3DE.1020001_at_pg.gda.pl" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes<br>
<strong>From:</strong> Artur Malinowski (<em>artur.malinowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 18:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28556.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Previous message:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28556.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Reply:</strong> <a href="28556.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Reply:</strong> <a href="28557.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Reply:</strong> <a href="28558.php">George Bosilca: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a problem with my application that is based on dynamic process 
<br>
management. The scenario related to process creation is as follows:
<br>
&nbsp;&nbsp;&nbsp;1. All processes call MPI_Comm_spawn_multiple to spawn additional 
<br>
single process per each node.
<br>
&nbsp;&nbsp;&nbsp;2. Parent processes call MPI_Intercomm_merge.
<br>
&nbsp;&nbsp;&nbsp;3. Child processes call MPI_Init_pmem, MPI_Comm_get_parent, 
<br>
MPI_Intercomm_merge.
<br>
&nbsp;&nbsp;&nbsp;4. Some of parent processes fail at their first MPI_Send with SIGSEGV.
<br>
Before and after above steps, processes call plenty of other MPI 
<br>
routines (so it is hard to extract minimal example that suffer from the 
<br>
problem).
<br>
<p>Interesting observation: the MPI_Comm obtained with MPI_Intercomm_merge 
<br>
for parent processes that fail with SIGSEGV are slightly different. 
<br>
Depending on type used to print it (I'm not sure about the type of 
<br>
MPI_Comm), they are either negative (if printed as int), or bigger than 
<br>
others (if printed as unsigned long long). For instance, with code:
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;%d %d %llu %\n&quot;, rank, intracomm, intracomm);
<br>
and output:
<br>
&nbsp;&nbsp;&nbsp;4 -970650128 140564719013360
<br>
&nbsp;&nbsp;&nbsp;8 14458544 14458544
<br>
&nbsp;&nbsp;&nbsp;12 15121888 15121888
<br>
&nbsp;&nbsp;&nbsp;9 38104000 38104000
<br>
&nbsp;&nbsp;&nbsp;1 14921600 14921600
<br>
&nbsp;&nbsp;&nbsp;11 31413968 31413968
<br>
&nbsp;&nbsp;&nbsp;5 27737968 27737968
<br>
&nbsp;&nbsp;&nbsp;7 -934013376 140023589770816
<br>
&nbsp;&nbsp;&nbsp;13 24512096 24512096
<br>
&nbsp;&nbsp;&nbsp;0 31348624 31348624
<br>
&nbsp;&nbsp;&nbsp;3 -1091084352 139817274269632
<br>
&nbsp;&nbsp;&nbsp;2 27982528 27982528
<br>
&nbsp;&nbsp;&nbsp;10 8745056 8745056
<br>
&nbsp;&nbsp;&nbsp;14 9449856 9449856
<br>
&nbsp;&nbsp;&nbsp;6 10023360 10023360
<br>
processes: 4, 7 and 3 fail. There is no connection between failed 
<br>
processes and particular node, it usually affects about 20% of processes 
<br>
and occurs both for tcp and ib. Any idea how to find source of the 
<br>
problem? More info included at the bottom of this message.
<br>
<p>Thanks for your help.
<br>
<p>Regards,
<br>
Artur Malinowski
<br>
PhD student at Gdansk University of Technology
<br>
<p>----------------------------
<br>
<p>openmpi version:
<br>
<p>problem occurs both in 1.10.1 and 1.10.2, older untested
<br>
<p>----------------------------
<br>
<p>config.log
<br>
<p>included in config.log.tar.bz2 attachment
<br>
<p>----------------------------
<br>
<p>ompi_info
<br>
<p>included in ompi_info.tar.bz2 attachment
<br>
<p>----------------------------
<br>
<p>execution command
<br>
<p>/path/to/openmpi/bin/mpirun --map-by node --prefix /path/to/openmpi 
<br>
/path/to/app
<br>
<p>----------------------------
<br>
<p>system info
<br>
<p>- OpenFabrics: MLNX_OFED_LINUX-3.1-1.0.3-rhel6.5-x86_64 from mellanox 
<br>
official page
<br>
- Linux: CentOS release 6.5 (Final) under Rocks cluster
<br>
- kernel: build on my own, 3.18.0 with some patches
<br>
<p>----------------------------
<br>
<p>ibv_devinfo
<br>
<p>hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.35.5100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c903:009f:5b00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c903:009f:5b03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 4099
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_1090110028
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:             InfiniBand
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_DOWN (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:             InfiniBand
<br>
<p>----------------------------
<br>
<p>ifconfig
<br>
<p>eth0      Link encap:Ethernet  HWaddr XXXXXXXXXX
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.1.255.248  Bcast:10.1.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::21e:67ff:feb9:5ca/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:138132137 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:160269713 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:63945289429 (59.5 GiB)  TX bytes:68561418011 (63.8 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memory:d0960000-d097ffff
<br>
<p>

<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28555/config.log.tar.bz2">config.log.tar.bz2</a>
</ul>
<!-- attachment="config.log.tar.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28555/ompi_info.tar.bz2">ompi_info.tar.bz2</a>
</ul>
<!-- attachment="ompi_info.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28556.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Previous message:</strong> <a href="28554.php">Ralph Castain: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28556.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Reply:</strong> <a href="28556.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Reply:</strong> <a href="28557.php">Gilles Gouaillardet: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Reply:</strong> <a href="28558.php">George Bosilca: "Re: [OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
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
