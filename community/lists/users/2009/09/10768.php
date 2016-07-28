<?
$subject_val = "[OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 12:13:19 2009" -->
<!-- isoreceived="20090925161319" -->
<!-- sent="Fri, 25 Sep 2009 11:13:10 -0500" -->
<!-- isosent="20090925161310" -->
<!-- name="Charles Wright" -->
<!-- email="charles_at_[hidden]" -->
<!-- subject="[OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success" -->
<!-- id="4ABCEC16.5070305_at_asc.edu" -->
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
<strong>Subject:</strong> [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success<br>
<strong>From:</strong> Charles Wright (<em>charles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 12:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10767.php">Pacey, Mike: "[OMPI users] Help tracing casue of readv errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Reply:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I just got some new cluster hardware :)  :(
<br>
<p>I can't seem to overcome an openib problem
<br>
I get this at run time
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error polling HP CQ with -2 errno says Success
<br>
<p>I've tried 2 different IB switches and multiple sets of nodes all on one 
<br>
switch or the other to try to eliminate the hardware.   (IPoIB pings 
<br>
work and IB switches ree
<br>
I've tried both v1.3.3 and v1.2.9 and get the same errors.    I'm not 
<br>
really sure what these errors mean or how to get rid of them.
<br>
My MPI application work if all the CPUs are on the same node (self btl 
<br>
only probably)
<br>
<p>Any advice would be appreciated.  
<br>
Thanks.
<br>
<p>asnrcw_at_dmc:~&gt; qsub -I -l nodes=32,partition=dmc,feature=qc226 -q sysadm
<br>
qsub: waiting for job 232035.mds1.asc.edu to start
<br>
qsub: job 232035.mds1.asc.edu ready
<br>
<p>####################################################################
<br>
#         Alabama Supercomputer Center - PBS Prologue
<br>
# Your job id is : 232035
<br>
# Your job name is : STDIN
<br>
# Your job's queue is : sysadm
<br>
# Your username for this job is : asnrcw
<br>
# Your group    for this job is : analyst
<br>
# Your job used : 
<br>
#       8 CPUs on dmc101
<br>
#       8 CPUs on dmc102
<br>
#       8 CPUs on dmc103
<br>
#       8 CPUs on dmc104
<br>
# Your job started at : Fri Sep 25 10:20:05 CDT 2009
<br>
####################################################################
<br>
asnrcw_at_dmc101:~&gt; 
<br>
asnrcw_at_dmc101:~&gt; 
<br>
asnrcw_at_dmc101:~&gt; 
<br>
asnrcw_at_dmc101:~&gt; 
<br>
asnrcw_at_dmc101:~&gt; cd mpiprintrank
<br>
asnrcw_at_dmc101:~/mpiprintrank&gt; which mpirun
<br>
/apps/openmpi-1.3.3-intel/bin/mpirun
<br>
asnrcw_at_dmc101:~/mpiprintrank&gt; mpirun ./mpiprintrank-dmc-1.3.3-intel 
<br>
[dmc103][[46071,1],19][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc103][[46071,1],16][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc103][[46071,1],17][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc103][[46071,1],18][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc103][[46071,1],20][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc103][[46071,1],21][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc103][[46071,1],23][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc101][[46071,1],6][btl_openib_component.c:3047:poll_device] [dmc102][[46071,1],14][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
error polling HP CQ with -2 errno says Success
<br>
[dmc101][[46071,1],7][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc103][[46071,1],22][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],15][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],11][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],11][btl_openib_component.c:3047:poll_device] [dmc102][[46071,1],12][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],12][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
error polling HP CQ with -2 errno says Success
<br>
[dmc101][[46071,1],3][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc101][[46071,1],4][btl_openib_component.c:3047:poll_device] [dmc102][[46071,1],8][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc101][[46071,1],0][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],15][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc101][[46071,1],1][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],9][btl_openib_component.c:3047:poll_device] [dmc102][[46071,1],14][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],9][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc101][[46071,1],5][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],13][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],13][btl_openib_component.c:3047:poll_device] [dmc101][[46071,1],2][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
error polling HP CQ with -2 errno says Success[dmc102][[46071,1],10][btl_openib_component.c:3047:poll_device] 
<br>
error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],10][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
[dmc102][[46071,1],8][btl_openib_component.c:3047:poll_device] error polling HP CQ with -2 errno says Success
<br>
<p><p>System info: 
<br>
<p>Compute nodes:
<br>
<a href="http://www.supermicro.com/products/system/2U/6026/SYS-6026TT-IBXF.cfm">http://www.supermicro.com/products/system/2U/6026/SYS-6026TT-IBXF.cfm</a>
<br>
Which has an integrated Mellanox Technologies MT26418 [ConnectX IB DDR, PCIe 2.0 5GT/s] (rev a0)
<br>
<p>asnrcw_at_dmc129:~&gt; uname -a
<br>
<p>Linux dmc129 2.6.27.29-0.1-default #1 SMP 2009-08-15 17:53:59 +0200 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>asnrcw_at_dmc129:~&gt; rpm -qa | grep ofed
<br>
<p>ofed-doc-1.4.0-11.12
<br>
<p>ofed-1.4.0-11.12
<br>
<p>asnrcw_at_dmc129:~&gt; cat /etc/SuSE-release 
<br>
<p>SUSE Linux Enterprise Server 11 (x86_64)
<br>
<p>VERSION = 11
<br>
<p>PATCHLEVEL = 0
<br>
<p>asnrcw_at_dmc129:~&gt; 
<br>
<p><p><p>Subnet manager is running an a Voltaire 9024 DM Switch (firmware version 5.1.0)
<br>
<p><p><p>asnrcw_at_dmc129:~&gt; ibv_devinfo
<br>
<p>hca_id: mlx4_0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.6.000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0030:48c8:b919:0000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0030:48c8:b919:0003
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 26418
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       SM_2081000001000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               139
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>asnrcw_at_dmc129:~&gt; ulimit -l
<br>
unlimited
<br>
<p><p><p><p><p><p><p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10768/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10768/ompi_info.txt.bz2">ompi_info.txt.bz2</a>
</ul>
<!-- attachment="ompi_info.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10767.php">Pacey, Mike: "[OMPI users] Help tracing casue of readv errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Reply:</strong> <a href="10785.php">Pavel Shamis (Pasha): "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
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
