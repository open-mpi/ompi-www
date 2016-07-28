<?
$subject_val = "[OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 11:14:38 2010" -->
<!-- isoreceived="20101220161438" -->
<!-- sent="Mon, 20 Dec 2010 17:14:25 +0100" -->
<!-- isosent="20101220161425" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="[OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance" -->
<!-- id="4D0F80E1.50701_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 11:14:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Reply:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour,
<br>
<p>&nbsp;&nbsp;I am now at a loss with my running of OpenMPI (namely 1.4.3)
<br>
on a SGI Altix cluster with 2048 or 4096 cores, running over Infiniband.
<br>
<p>&nbsp;&nbsp;After fixing several rather obvious failures with Ralph, Jeff and John 
<br>
help,
<br>
I am now facing the bottom of this story since :
<br>
- there are no more obvious failures with messages
<br>
- compared to the running of the application with SGI-MPT, the CPU 
<br>
performances I get
<br>
are very low, decreasing when the number of cores increases (cf below)
<br>
- these performances are highly reproducible
<br>
- I tried a very high number of -mca parameters, to no avail
<br>
<p>&nbsp;&nbsp;If I take as a reference the MPT CPU speed performance,
<br>
it is of about 900 (in some arbitrary unit), whatever the
<br>
number of cores I used (up to 8192).
<br>
<p>&nbsp;&nbsp;But, when running with OMPI, I get:
<br>
- 700 with 1024 cores (which is already rather low)
<br>
- 300 with 2048 cores
<br>
- 60   with 4096 cores.
<br>
<p>&nbsp;&nbsp;The computing loop, over which the above CPU performance is evaluated, 
<br>
includes
<br>
a stack of MPI exchanges [per core : 8 x (MPI_Isend + MPI_Irecv) + 
<br>
MPI_Waitall]
<br>
<p>&nbsp;&nbsp;The application is of the 'domain partition' type,
<br>
and the performances, together with the memory footprint,
<br>
are very identical on all  cores. The memory footprint is twice higher in
<br>
the OMPI case (1.5GB/core) than in the MPT case (0.7GB/core).
<br>
<p>*What could be wrong with all these, please* ?
<br>
<p>&nbsp;&nbsp;I provided (in attachment) the '*ompi_info* -all ' output.
<br>
The *config.log* is in attachment as well.
<br>
I compiled OMPI with icc. I checked numa and affinity are OK.
<br>
<p>I use the following command to run my OMPI app:
<br>
&quot;mpiexec -mca btl_openib_rdma_pipeline_send_length 65536\
<br>
&nbsp;&nbsp;-mca btl_openib_rdma_pipeline_frag_size 65536\
<br>
&nbsp;&nbsp;-mca btl_openib_min_rdma_pipeline_size 65536\
<br>
&nbsp;&nbsp;-mca btl_self_rdma_pipeline_send_length 262144\
<br>
&nbsp;&nbsp;-mca btl_self_rdma_pipeline_frag_size 262144\
<br>
&nbsp;&nbsp;-mca plm_rsh_num_concurrent 4096 -mca mpi_paffinity_alone 1\
<br>
&nbsp;&nbsp;-mca mpi_leave_pinned 1 -mca btl_sm_max_send_size 128\
<br>
&nbsp;&nbsp;-mca coll_tuned_pre_allocate_memory_comm_size_limit 128\
<br>
&nbsp;&nbsp;-mca btl_openib_cq_size 128 -mca btl_ofud_rd_num 128\
<br>
&nbsp;&nbsp;-mca mpool_rdma_rcache_size_limit 131072 -mca mpi_preconnect_mpi 0\
<br>
&nbsp;&nbsp;-mca mpool_sm_min_size 131072 -mca mpi_abort_print_stack 1\
<br>
&nbsp;&nbsp;-mca btl sm,openib,self -mca btl_openib_want_fork_support 0\
<br>
&nbsp;&nbsp;-mca opal_set_max_sys_limits 1 -mca osc_pt2pt_no_locks 1\
<br>
&nbsp;&nbsp;-mca osc_rdma_no_locks 1\
<br>
&nbsp;&nbsp;$PBS_JOBDIR/phmc_tm_p2.$PBS_JOBID -v -f $Jinput&quot;.
<br>
<p>*OpenIB info*:
<br>
<p>1) OFED-1.4.1, installed by SGI SGI
<br>
<p>2) Linux xxxxxx 2.6.16.60-0.42.10-smp #1 SMP Tue Apr 27 05:11:27 UTC 
<br>
2010 x86_64 x86_64 x86_64 GNU/Linux
<br>
OS : SGI ProPack 6SP5 for Linux, Build 605r1.sles10-0909302200
<br>
<p>3) Running most probably an SGI subnet manager
<br>
<p>4) &gt; ibv_devinfo (on a worker node)
<br>
hca_id:    mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                2.7.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:            0030:48ff:ffcc:4c44
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:            0030:48ff:ffcc:4c47
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:            0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:            26418
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:            SM_2071000001000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:            2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:            PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:            1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:        6009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:        0x00
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:    2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:            PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:            1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:        6010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:        0x00
<br>
<p>5) &gt; ifconfig -a (on a worker node)
<br>
eth0      Link encap:Ethernet  HWaddr 00:30:48:CE:73:30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet adr:192.168.159.10  Bcast:192.168.159.255  
<br>
Masque:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adr inet6: fe80::230:48ff:fece:7330/64 Scope:Lien
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST NOTRAILERS RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:32337499 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:34733462 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 lg file transmission:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:11486224753 (10954.1 Mb)  TX bytes:16450996864 
<br>
(15688.8 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&#233;moire:fbc60000-fbc80000
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:30:48:CE:73:31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BROADCAST MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 lg file transmission:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M&#233;moire:fbce0000-fbd00000
<br>
<p>ib0       Link encap:UNSPEC  HWaddr 
<br>
80-00-00-48-FE-C0-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet adr:10.148.9.198  Bcast:10.148.255.255  Masque:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adr inet6: fe80::230:48ff:ffcc:4c45/64 Scope:Lien
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:115055101 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:5390843 errors:0 dropped:182 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 lg file transmission:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:49592870352 (47295.4 Mb)  TX bytes:43566897620 
<br>
(41548.6 Mb)
<br>
<p>ib1       Link encap:UNSPEC  HWaddr 
<br>
80-00-00-49-FE-C0-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet adr:10.149.9.198  Bcast:10.149.255.255  Masque:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adr inet6: fe80::230:48ff:ffcc:4c46/64 Scope:Lien
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:673448 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:187 errors:0 dropped:5 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 lg file transmission:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:37713088 (35.9 Mb)  TX bytes:11228 (10.9 Kb)
<br>
<p>lo        Link encap:Boucle locale
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet adr:127.0.0.1  Masque:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adr inet6: ::1/128 Scope:H&#244;te
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:33504149 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:33504149 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 lg file transmission:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:5100850397 (4864.5 Mb)  TX bytes:5100850397 (4864.5 Mb)
<br>
<p>sit0      Link encap:IPv6-dans-IPv4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOARP  MTU:1480  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 lg file transmission:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
<br>
<p>6) &gt; limit (on a worker node)
<br>
cputime      unlimited
<br>
filesize     unlimited
<br>
datasize     unlimited
<br>
stacksize    300000 kbytes
<br>
coredumpsize 0 kbytes
<br>
memoryuse    unlimited
<br>
vmemoryuse   unlimited
<br>
descriptors  16384
<br>
memorylocked unlimited
<br>
maxproc      303104
<br>
<p>&nbsp;&nbsp;If some info is still missing despite all my efforts, please ask.
<br>
<p>&nbsp;&nbsp;Thanks in advance for any hints,   Best,      G.
<br>
<p><p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15201/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15201/ompi_info-all.001.gz">ompi_info-all.001.gz</a>
</ul>
<!-- attachment="ompi_info-all.001.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<li><strong>Reply:</strong> <a href="15202.php">George Bosilca: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
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
