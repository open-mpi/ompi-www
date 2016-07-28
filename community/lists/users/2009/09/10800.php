<?
$subject_val = "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 14:24:03 2009" -->
<!-- isoreceived="20090928182403" -->
<!-- sent="Mon, 28 Sep 2009 13:23:55 -0500" -->
<!-- isosent="20090928182355" -->
<!-- name="Charles Wright" -->
<!-- email="charles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success" -->
<!-- id="4AC0FF3B.6020004_at_asc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ABE6C0E.9040806_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Charles Wright (<em>charles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 14:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Previous message:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've verified that ulimit -l is unlimited everywhere.
<br>
<p>After further testing I think the errors are related to OFED not openmpi.
<br>
I've uninstalled the OFED that comes with SLES (1.4.0) and installed 
<br>
OFED 1.4.2 and 1.5-beta and I don't get the errors.
<br>
<p>I got the idea to swap out OFED that after reading this:
<br>
<a href="http://kerneltrap.org/mailarchive/openfabrics-general/2008/11/3/3903184">http://kerneltrap.org/mailarchive/openfabrics-general/2008/11/3/3903184</a>
<br>
<p>Under OFED 1.4.0 (from SLES 11) I had to set options mlx4_core msi_x=0 
<br>
in /etc/modprobe.conf.local to even get the mlx4 module to load.
<br>
I found that advice here:
<br>
<a href="http://forums11.itrc.hp.com/service/forums/questionanswer.do?admit=109447626+1254161827534+28353475&amp;threadId=1361415">http://forums11.itrc.hp.com/service/forums/questionanswer.do?admit=109447626+1254161827534+28353475&amp;threadId=1361415</a>
<br>
(Under 1.4.2 and 1.5-Beta the modules load fine without mlx4_core 
<br>
msi_x=0 being set)
<br>
<p>Now my problem is that with OFED 1.4.2 and 1.5-beta the system hang and 
<br>
the GigE network stops working and I have to power cycle nodes to login.
<br>
<p>I'm going to try to get some help from the OFED mailing list now. 
<br>
<p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Very strange. MPI tries to access CQ context and it get immediate error.
</span><br>
<span class="quotelev1">&gt; Please make sure that you limits configuration is ok, take a look on 
</span><br>
<span class="quotelev1">&gt; this FAQ - 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles Wright wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;    I just got some new cluster hardware :)  :(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't seem to overcome an openib problem
</span><br>
<span class="quotelev2">&gt;&gt; I get this at run time
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried 2 different IB switches and multiple sets of nodes all on 
</span><br>
<span class="quotelev2">&gt;&gt; one switch or the other to try to eliminate the hardware.   (IPoIB 
</span><br>
<span class="quotelev2">&gt;&gt; pings work and IB switches ree
</span><br>
<span class="quotelev2">&gt;&gt; I've tried both v1.3.3 and v1.2.9 and get the same errors.    I'm not 
</span><br>
<span class="quotelev2">&gt;&gt; really sure what these errors mean or how to get rid of them.
</span><br>
<span class="quotelev2">&gt;&gt; My MPI application work if all the CPUs are on the same node (self 
</span><br>
<span class="quotelev2">&gt;&gt; btl only probably)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advice would be appreciated.  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc:~&gt; qsub -I -l nodes=32,partition=dmc,feature=qc226 -q sysadm
</span><br>
<span class="quotelev2">&gt;&gt; qsub: waiting for job 232035.mds1.asc.edu to start
</span><br>
<span class="quotelev2">&gt;&gt; qsub: job 232035.mds1.asc.edu ready
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ####################################################################
</span><br>
<span class="quotelev2">&gt;&gt; #         Alabama Supercomputer Center - PBS Prologue
</span><br>
<span class="quotelev2">&gt;&gt; # Your job id is : 232035
</span><br>
<span class="quotelev2">&gt;&gt; # Your job name is : STDIN
</span><br>
<span class="quotelev2">&gt;&gt; # Your job's queue is : sysadm
</span><br>
<span class="quotelev2">&gt;&gt; # Your username for this job is : asnrcw
</span><br>
<span class="quotelev2">&gt;&gt; # Your group    for this job is : analyst
</span><br>
<span class="quotelev2">&gt;&gt; # Your job used : #       8 CPUs on dmc101
</span><br>
<span class="quotelev2">&gt;&gt; #       8 CPUs on dmc102
</span><br>
<span class="quotelev2">&gt;&gt; #       8 CPUs on dmc103
</span><br>
<span class="quotelev2">&gt;&gt; #       8 CPUs on dmc104
</span><br>
<span class="quotelev2">&gt;&gt; # Your job started at : Fri Sep 25 10:20:05 CDT 2009
</span><br>
<span class="quotelev2">&gt;&gt; ####################################################################
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc101:~&gt; asnrcw_at_dmc101:~&gt; asnrcw_at_dmc101:~&gt; asnrcw_at_dmc101:~&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc101:~&gt; cd mpiprintrank
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc101:~/mpiprintrank&gt; which mpirun
</span><br>
<span class="quotelev2">&gt;&gt; /apps/openmpi-1.3.3-intel/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc101:~/mpiprintrank&gt; mpirun ./mpiprintrank-dmc-1.3.3-intel 
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],19][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],16][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],17][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],18][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],20][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],21][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],23][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],6][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],14][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],7][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc103][[46071,1],22][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],15][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],11][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],11][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],12][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],12][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],3][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],4][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],8][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],0][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],15][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],1][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],9][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],14][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],9][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],5][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],13][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],13][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev2">&gt;&gt; [dmc101][[46071,1],2][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; error polling HP CQ with -2 errno says 
</span><br>
<span class="quotelev2">&gt;&gt; Success[dmc102][[46071,1],10][btl_openib_component.c:3047:poll_device] 
</span><br>
<span class="quotelev2">&gt;&gt; error polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],10][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; [dmc102][[46071,1],8][btl_openib_component.c:3047:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System info:
</span><br>
<span class="quotelev2">&gt;&gt; Compute nodes:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.supermicro.com/products/system/2U/6026/SYS-6026TT-IBXF.cfm">http://www.supermicro.com/products/system/2U/6026/SYS-6026TT-IBXF.cfm</a>
</span><br>
<span class="quotelev2">&gt;&gt; Which has an integrated Mellanox Technologies MT26418 [ConnectX IB 
</span><br>
<span class="quotelev2">&gt;&gt; DDR, PCIe 2.0 5GT/s] (rev a0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc129:~&gt; uname -a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux dmc129 2.6.27.29-0.1-default #1 SMP 2009-08-15 17:53:59 +0200 
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc129:~&gt; rpm -qa | grep ofed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ofed-doc-1.4.0-11.12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ofed-1.4.0-11.12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc129:~&gt; cat /etc/SuSE-release
</span><br>
<span class="quotelev2">&gt;&gt; SUSE Linux Enterprise Server 11 (x86_64)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; VERSION = 11
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PATCHLEVEL = 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc129:~&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subnet manager is running an a Voltaire 9024 DM Switch (firmware 
</span><br>
<span class="quotelev2">&gt;&gt; version 5.1.0)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc129:~&gt; ibv_devinfo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        fw_ver:                         2.6.000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        node_guid:                      0030:48c8:b919:0000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        sys_image_guid:                 0030:48c8:b919:0003
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        vendor_part_id:                 26418
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        hw_ver:                         0xA0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        board_id:                       SM_2081000001000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        phys_port_cnt:                  1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                port:   1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        sm_lid:                 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        port_lid:               139
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                        port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; asnrcw_at_dmc129:~&gt; ulimit -l
</span><br>
<span class="quotelev2">&gt;&gt; unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Charles Wright, HPC Systems Specialist
Computer Sciences Corporation
High Performance Computing Center of Excellence
<a href="http://www.cschpc.com">http://www.cschpc.com</a>
(256)971-7429
cwrigh31_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Previous message:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<li><strong>In reply to:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
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
