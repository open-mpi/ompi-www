<?
$subject_val = "[OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 09:09:13 2013" -->
<!-- isoreceived="20130117140913" -->
<!-- sent="Thu, 17 Jan 2013 15:09:06 +0100" -->
<!-- isosent="20130117140906" -->
<!-- name="Francesco Simula" -->
<!-- email="francesco.simula_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!" -->
<!-- id="31976_1358431753_r0HE98sU001291_e036559e7a13df3f18bf8beda8fbec28_at_roma1.infn.it" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!<br>
<strong>From:</strong> Francesco Simula (<em>francesco.simula_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 09:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21148.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21146.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21165.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried building from OMPI 1.6.3 tarball with the following 
<br>
./configure:
<br>
./configure 
<br>
--prefix=/apotto/home1/homedirs/fsimula/Lavoro/openmpi-1.6.3/install/ \
<br>
--disable-mpi-io \
<br>
--disable-io-romio \
<br>
--enable-dependency-tracking \
<br>
--without-slurm \
<br>
--with-platform=optimized \
<br>
--disable-mpi-f77 \
<br>
--disable-mpi-f90 \
<br>
--with-openib \
<br>
--disable-static \
<br>
--enable-shared \
<br>
--disable-vt \
<br>
--enable-pty-support \
<br>
--enable-mca-no-build=btl-ofud,pml-bfo \
<br>
--with-mxm=/opt/mellanox/mxm \
<br>
--with-mxm-libdir=/opt/mellanox/mxm/lib
<br>
<p>As you can see from the last two lines, I want to enable the MXM 
<br>
transport layer on a cluster made of SuperMicro X8DTG-D boards with dual 
<br>
Xeons and Mellanox MT26428 HCAs; the OS is CentOS 5.8.
<br>
<p>I tried with two different .rpm's for MXM, either 
<br>
'mxm-1.1.ad085ef-1.x86_64-centos5u7.rpm' taken from here:
<br>
<a href="http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>
<br>
<p>and 'mxm-1.5.f583875-1.x86_64-centos5u7.rpm' taken from here:
<br>
<a href="http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar">http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar</a>
<br>
<p>With both, even if the compilation concludes successfully, a simple 
<br>
test (osu_bw from the OSU Micro-Benchmarks 3.8) fails with the sort of 
<br>
message reported below; the lines:
<br>
<p>rdma_dev.c:122  MXM DEBUG Port 1 on mlx4_0 has a link layer different 
<br>
from IB. Skipping it
<br>
rdma_dev.c:155  MXM ERROR An active IB port on a Mellanox device, with 
<br>
lid [any] gid [any] not found
<br>
<p>make it seem like it cannot access the HW for the HCA: is that so? The 
<br>
very same test works when using '-mca pml ob1' (thus using the openib 
<br>
BTL).
<br>
<p>I'm quite ready to start pulling my hair; any suggestions?
<br>
<p>The output of /usr/bin/ibv_devinfo for the two cluster nodes follows:
<br>
[cut]
<br>
hca_id:	mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:			InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:				2.7.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:			0025:90ff:ff07:0ac4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:			0025:90ff:ff07:0ac7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:			0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:			26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:				0xB0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:			SM_1061000001000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:			1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:	1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:			PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:			4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:		6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:		0x00
<br>
[/cut]
<br>
<p>[cut]
<br>
hca_id:	mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:			InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:				2.7.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:			0025:90ff:ff07:0acc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:			0025:90ff:ff07:0acf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:			0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:			26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:				0xB0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:			SM_1061000001000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:			1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:	1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:			PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:			4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:		8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:		0x00
<br>
[/cut]
<br>
<p>The complete output of the failing test follows:
<br>
<p>[fsimula_at_agape5 osu-micro-benchmarks-3.8]$ mpirun -x MXM_LOG_LEVEL=poll 
<br>
-mca pml cm -mca mtl_mxm_np 1 -np 2 -host agape4,agape5 
<br>
install/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_bw H H
<br>
[1358430343.266782] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
<br>
[1358430343.266815] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_HANDLE_ERRORS=bt
<br>
[1358430343.266826] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_GDB_PATH=/usr/bin/gdb
<br>
[1358430343.266838] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_DUMP_SIGNO=1
<br>
[1358430343.266851] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_DUMP_LEVEL=conn
<br>
[1358430343.266924] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_ASYNC_MODE=THREAD
<br>
[1358430343.266936] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_TIME_ACCURACY=0.1
<br>
[1358430343.266956] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_PTLS=self,shm,rdma
<br>
[1358430343.267249] [agape5:8596 :0]     mpool.c:265  MXM DEBUG mpool 
<br>
'ptl_self_recv_ev': allocated chunk 0xc075f40 of 96016 bytes with 1000 
<br>
elements
<br>
[1358430343.267308] [agape5:8596 :0]     mpool.c:156  MXM DEBUG mpool 
<br>
'ptl_self_recv_ev': align 16, maxelems 1000, elemsize 88, padding 8
<br>
[1358430343.267316] [agape5:8596 :0]      self.c:410  MXM DEBUG Created 
<br>
ptl_self
<br>
[1358430343.267333] [agape5:8596 :0]   shm_ptl.c:56   MXM DEBUG Created 
<br>
ptl_shm
<br>
[1358430343.268457] [agape5:8596 :0]  rdma_ptl.c:65   MXM TRACE Got 1 
<br>
IB devices
<br>
[1358430343.268640] [agape5:8596 :0]  rdma_ptl.c:112  MXM DEBUG added 
<br>
device mlx4_0
<br>
[1358430343.268665] [agape5:8596 :0]    memreg.c:187  MXM TRACE Created 
<br>
memory registration cache on 1 devices
<br>
[1358430343.268676] [agape5:8596 :0]  rdma_ptl.c:133  MXM DEBUG Created 
<br>
ptl_rdma
<br>
[1358430343.268689] [agape5:8596 :0]     event.c:353  MXM FUNC  
<br>
mxm_event_init(event=0x2b73e0ee3038 mode=2 time_accuracy=160000000)
<br>
[1358430343.268698] [agape5:8596 :0]    timerq.c:55   MXM FUNC  
<br>
mxm_timerq_init(timerq=0x2b73e0ee3060 accuracy=160000000 
<br>
max_interval=1600000000)
<br>
[1358430343.268706] [agape5:8596 :0]     event.c:292  MXM FUNC  
<br>
mxm_event_add_thread_context(thread=0x2b73e0ee30d0)
<br>
[1358430343.268732] [agape5:8596 :0]     event.c:198  MXM FUNC  
<br>
mxm_set_fd_nonblock(fd=10)
<br>
[1358430343.268741] [agape5:8596 :0]     event.c:198  MXM FUNC  
<br>
mxm_set_fd_nonblock(fd=11)
<br>
[1358430343.268841] [agape5:8596 :0]       mxm.c:162  MXM INFO  context 
<br>
0x2b73e0ee3010 created
<br>
[1358430343.269090] [agape5:8596 :1]     event.c:41   MXM FUNC  
<br>
__call_handler(handler-&gt;cb=0x2b73e0ab28a0 handler-&gt;arg=0x2b73e0ee3038)
<br>
[1358430343.269104] [agape5:8596 :1]    timerq.c:88   MXM FUNC  
<br>
mxm_timerq_sweep(timerq=0x2b73e0ee3060 current_time=568595527963578)
<br>
[1358430343.274685] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_ENABLE_HUGETLB=1
<br>
[1358430343.274700] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_ENABLE_TIMEOUTS=y
<br>
[1358430343.274709] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_ACK_TIMEOUT=0.3
<br>
[1358430343.274721] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_POLL_INTERVAL=0.1
<br>
[1358430343.274742] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_WINDOW_SIZE=512
<br>
[1358430343.274755] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_TX_BATCH=1
<br>
[1358430343.274764] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_CQ_MODERATION=64
<br>
[1358430343.274773] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_DRAIN_CQ=n
<br>
[1358430343.274782] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_RNDV_THRESH=65536
<br>
[1358430343.274791] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_ZCOPY_THRESH=2040
<br>
[1358430343.274815] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_RESIZE_CQ=y
<br>
[1358430343.274826] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_MTU=65536
<br>
[1358430343.274836] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_RX_QUEUE_LEN=16000
<br>
[1358430343.274849] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_TX_QUEUE_LEN=64
<br>
[1358430343.274859] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_RX_MAX_BUFFERS=128000
<br>
[1358430343.274877] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_TX_MAX_BUFFERS=8192
<br>
[1358430343.274887] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_RX_DROP_RATE=0
<br>
[1358430343.274896] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_ENABLE_NAK=y
<br>
[1358430343.274904] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_RX_FILL_THRESH=0.6
<br>
[1358430343.274915] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_UD_TX_MAX_INLINE=128
<br>
[1358430343.274925] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_SHM_RX_MAX_BUFFERS=2000
<br>
[1358430343.274941] [agape5:8596 :0] config_parser.c:168  MXM DEBUG 
<br>
default: MXM_RDMA_ALLOC=1
<br>
[1358430343.274968] [agape5:8596 :0]        ep.c:36   MXM FUNC  
<br>
mxm_ep_create(context=0x2b73e0ee3010)
<br>
[1358430343.274984] [agape5:8596 :0]      self.c:380  MXM DEBUG Created 
<br>
ptl_self EP(rank=3767085072)
<br>
[1358430343.275028] [agape5:8596 :0] shm_queue.c:230  MXM DEBUG 
<br>
shm_ep=0, shmid=6815750
<br>
[1358430343.275072] [agape5:8596 :0]     mpool.c:265  MXM DEBUG mpool 
<br>
'shm_ep_recv': allocated chunk 0x2aaaadd0c010 of 65824016 bytes with 
<br>
2000 elements
<br>
[1358430343.278550] [agape5:8596 :0]     mpool.c:156  MXM DEBUG mpool 
<br>
'shm_ep_recv': align 16, maxelems 2000, elemsize 32904, padding 8
<br>
[1358430343.278584] [agape5:8596 :0]    timerq.c:139  MXM FUNC  
<br>
mxm_timer_schedule(timerq=0x2b73e0ee3060 timer=0xc029538 
<br>
expiration=568595550657300)
<br>
[1358430343.278594] [agape5:8596 :0]    timerq.c:43   MXM FUNC  
<br>
mxm_timerq_insert_timer(put timer 0xc029538 expiration 568595550657300 
<br>
in slot 10)
<br>
[1358430343.278608] [agape5:8596 :0]    timerq.c:145  MXM TRACE added 
<br>
timer 0xc029538 expiration 568595550657300 interval 160000000
<br>
[1358430343.278617] [agape5:8596 :0]    shm_ep.c:176  MXM DEBUG Created 
<br>
ptl_shm EP (rank=0, ctx_id=1)
<br>
[1358430343.278641] [agape5:8596 :0]   rdma_ep.c:317  MXM FUNC  
<br>
mxm_rdma_ep_create()
<br>
[1358430343.278722] [agape5:8596 :0]  rdma_dev.c:194  MXM FUNC  
<br>
mxm_rdma_dev_init(dev=0xc0b3f00)
<br>
[1358430343.278924] [agape5:8596 :0]  rdma_dev.c:122  MXM DEBUG Port 1 
<br>
on mlx4_0 has a link layer different from IB. Skipping it
<br>
[1358430343.278939] [agape5:8596 :0]  rdma_dev.c:155  MXM ERROR An 
<br>
active IB port on a Mellanox device, with lid [any] gid [any] not found
<br>
[1358430343.278954] [agape5:8596 :0]    timerq.c:150  MXM FUNC  
<br>
mxm_timer_cancel(timerq=0x2b73e0ee3060 timer=0xc029538)
<br>
[1358430343.279454] [agape5:8596 :0]     mpool.c:184  MXM DEBUG mpool 
<br>
'shm_ep_recv': destroyed
<br>
[1358430343.279466] [agape5:8596 :0]      self.c:287  MXM FUNC  
<br>
mxm_self_ep_destroy(ep=0xc094600)
<br>
--------------------------------------------------------------------------
<br>
MXM was unable to create an endpoint. Please make sure that the network 
<br>
link is
<br>
active on the node and the hardware is functioning.
<br>
<p>&nbsp;&nbsp;&nbsp;Error: No such device
<br>
<p>--------------------------------------------------------------------------
<br>
[1358430343.287336] [agape5:8596 :0]     event.c:400  MXM FUNC  
<br>
mxm_event_cleanup(event=0x2b73e0ee3038)
<br>
[1358430343.287348] [agape5:8596 :0]     event.c:338  MXM FUNC  
<br>
mxm_event_remove_thread_context(thread=0x2b73e0ee30d0)
<br>
[1358430343.287355] [agape5:8596 :0]     event.c:145  MXM FUNC  
<br>
mxm_event_thread_wakeup()
<br>
[1358430343.371011] [agape5:8596 :0]    timerq.c:76   MXM FUNC  
<br>
mxm_timerq_cleanup(timerq=0x2b73e0ee3060)
<br>
[1358430343.371030] [agape5:8596 :0]    memreg.c:194  MXM TRACE 
<br>
Destroying memory registration cache
<br>
[1358430343.371129] [agape5:8596 :0]   shm_ptl.c:34   MXM FUNC  
<br>
ptl_shm_destroy(ptl=0xc0729b0)
<br>
[1358430343.371139] [agape5:8596 :0]      self.c:340  MXM FUNC  
<br>
mxm_self_destroy(ptl=0xc0699a0)
<br>
[1358430343.371148] [agape5:8596 :0]     mpool.c:184  MXM DEBUG mpool 
<br>
'ptl_self_recv_ev': destroyed
<br>
[1358430343.371156] [agape5:8596 :0]       mxm.c:197  MXM INFO  context 
<br>
0x2b73e0ee3010 destroyed
<br>
--------------------------------------------------------------------------
<br>
No available pml components were found!
<br>
<p>This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
<p>This is a fatal error; your MPI process is likely to abort.  Check the
<br>
output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
type are available on your system.  You may also wish to check the
<br>
value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
least one directory that contains valid MCA components.
<br>
--------------------------------------------------------------------------
<br>
[agape5:08596] PML cm cannot be selected
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 8596 on
<br>
node agape5 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>Regards,
<br>
Francesco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21148.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>Previous message:</strong> <a href="21146.php">Jure Pe&#196;&#141;ar: "Re: [OMPI users] help me understand these error msgs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21165.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
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
