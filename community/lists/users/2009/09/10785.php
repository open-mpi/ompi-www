<?
$subject_val = "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 15:31:43 2009" -->
<!-- isoreceived="20090926193143" -->
<!-- sent="Sat, 26 Sep 2009 22:31:26 +0300" -->
<!-- isosent="20090926193126" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success" -->
<!-- id="4ABE6C0E.9040806_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ABCEC16.5070305_at_asc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 15:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
<li><strong>In reply to:</strong> <a href="10768.php">Charles Wright: "[OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Reply:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very strange. MPI tries to access CQ context and it get immediate error.
<br>
Please make sure that you limits configuration is ok, take a look on 
<br>
this FAQ - <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>Pasha.
<br>
<p><p>Charles Wright wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;    I just got some new cluster hardware :)  :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't seem to overcome an openib problem
</span><br>
<span class="quotelev1">&gt; I get this at run time
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried 2 different IB switches and multiple sets of nodes all on 
</span><br>
<span class="quotelev1">&gt; one switch or the other to try to eliminate the hardware.   (IPoIB 
</span><br>
<span class="quotelev1">&gt; pings work and IB switches ree
</span><br>
<span class="quotelev1">&gt; I've tried both v1.3.3 and v1.2.9 and get the same errors.    I'm not 
</span><br>
<span class="quotelev1">&gt; really sure what these errors mean or how to get rid of them.
</span><br>
<span class="quotelev1">&gt; My MPI application work if all the CPUs are on the same node (self btl 
</span><br>
<span class="quotelev1">&gt; only probably)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice would be appreciated.  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc:~&gt; qsub -I -l nodes=32,partition=dmc,feature=qc226 -q sysadm
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 232035.mds1.asc.edu to start
</span><br>
<span class="quotelev1">&gt; qsub: job 232035.mds1.asc.edu ready
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ####################################################################
</span><br>
<span class="quotelev1">&gt; #         Alabama Supercomputer Center - PBS Prologue
</span><br>
<span class="quotelev1">&gt; # Your job id is : 232035
</span><br>
<span class="quotelev1">&gt; # Your job name is : STDIN
</span><br>
<span class="quotelev1">&gt; # Your job's queue is : sysadm
</span><br>
<span class="quotelev1">&gt; # Your username for this job is : asnrcw
</span><br>
<span class="quotelev1">&gt; # Your group    for this job is : analyst
</span><br>
<span class="quotelev1">&gt; # Your job used : #       8 CPUs on dmc101
</span><br>
<span class="quotelev1">&gt; #       8 CPUs on dmc102
</span><br>
<span class="quotelev1">&gt; #       8 CPUs on dmc103
</span><br>
<span class="quotelev1">&gt; #       8 CPUs on dmc104
</span><br>
<span class="quotelev1">&gt; # Your job started at : Fri Sep 25 10:20:05 CDT 2009
</span><br>
<span class="quotelev1">&gt; ####################################################################
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc101:~&gt; asnrcw_at_dmc101:~&gt; asnrcw_at_dmc101:~&gt; asnrcw_at_dmc101:~&gt; 
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc101:~&gt; cd mpiprintrank
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc101:~/mpiprintrank&gt; which mpirun
</span><br>
<span class="quotelev1">&gt; /apps/openmpi-1.3.3-intel/bin/mpirun
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc101:~/mpiprintrank&gt; mpirun ./mpiprintrank-dmc-1.3.3-intel 
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],19][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],16][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],17][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],18][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],20][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],21][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],23][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],6][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],14][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],7][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc103][[46071,1],22][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],15][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],11][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],11][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],12][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],12][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],3][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],4][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],8][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],0][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],15][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],1][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],9][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],14][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],9][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],5][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],13][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],13][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev1">&gt; [dmc101][[46071,1],2][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with -2 errno says 
</span><br>
<span class="quotelev1">&gt; Success[dmc102][[46071,1],10][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev1">&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],10][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt; [dmc102][[46071,1],8][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System info:
</span><br>
<span class="quotelev1">&gt; Compute nodes:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.supermicro.com/products/system/2U/6026/SYS-6026TT-IBXF.cfm">http://www.supermicro.com/products/system/2U/6026/SYS-6026TT-IBXF.cfm</a>
</span><br>
<span class="quotelev1">&gt; Which has an integrated Mellanox Technologies MT26418 [ConnectX IB 
</span><br>
<span class="quotelev1">&gt; DDR, PCIe 2.0 5GT/s] (rev a0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc129:~&gt; uname -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux dmc129 2.6.27.29-0.1-default #1 SMP 2009-08-15 17:53:59 +0200 
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc129:~&gt; rpm -qa | grep ofed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ofed-doc-1.4.0-11.12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ofed-1.4.0-11.12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc129:~&gt; cat /etc/SuSE-release
</span><br>
<span class="quotelev1">&gt; SUSE Linux Enterprise Server 11 (x86_64)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; VERSION = 11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATCHLEVEL = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc129:~&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subnet manager is running an a Voltaire 9024 DM Switch (firmware 
</span><br>
<span class="quotelev1">&gt; version 5.1.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc129:~&gt; ibv_devinfo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        fw_ver:                         2.6.000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        node_guid:                      0030:48c8:b919:0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        sys_image_guid:                 0030:48c8:b919:0003
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        vendor_part_id:                 26418
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        board_id:                       SM_2081000001000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                port:   1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        port_lid:               139
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; asnrcw_at_dmc129:~&gt; ulimit -l
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="10786.php">Ashley Pittman: "Re: [OMPI users] Is there an &quot;flush()&quot;-like function in MPI?"</a>
<li><strong>Previous message:</strong> <a href="10784.php">Jonathan Dursi: "[OMPI users] Looped Barrier/Sendrecv hangs with btl sml: OMP1.3.3, 1.3.2, gcc44, intel 11"</a>
<li><strong>In reply to:</strong> <a href="10768.php">Charles Wright: "[OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Reply:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
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
