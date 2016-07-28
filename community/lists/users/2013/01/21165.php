<?
$subject_val = "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 14:06:28 2013" -->
<!-- isoreceived="20130119190628" -->
<!-- sent="Sat, 19 Jan 2013 21:06:22 +0200" -->
<!-- isosent="20130119190622" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!" -->
<!-- id="CAAO1Kyb=7xxyCB0HUWRPVP5o+m7kwDg=MOzRK-25F_6op8nObg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31976_1358431753_r0HE98sU001291_e036559e7a13df3f18bf8beda8fbec28_at_roma1.infn.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-19 14:06:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21166.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21147.php">Francesco Simula: "[OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, what MOFED/OFED version do you have?
<br>
MXM is compiled per OFED/MOFED version, is there match between active ofed
<br>
and mxm.rpm selected?
<br>
<p>On Thu, Jan 17, 2013 at 4:09 PM, Francesco Simula &lt;
<br>
francesco.simula_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I tried building from OMPI 1.6.3 tarball with the following ./configure:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/apotto/home1/**homedirs/fsimula/Lavoro/**openmpi-1.6.3/install/
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-io \
</span><br>
<span class="quotelev1">&gt; --disable-io-romio \
</span><br>
<span class="quotelev1">&gt; --enable-dependency-tracking \
</span><br>
<span class="quotelev1">&gt; --without-slurm \
</span><br>
<span class="quotelev1">&gt; --with-platform=optimized \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77 \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f90 \
</span><br>
<span class="quotelev1">&gt; --with-openib \
</span><br>
<span class="quotelev1">&gt; --disable-static \
</span><br>
<span class="quotelev1">&gt; --enable-shared \
</span><br>
<span class="quotelev1">&gt; --disable-vt \
</span><br>
<span class="quotelev1">&gt; --enable-pty-support \
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-**ofud,pml-bfo \
</span><br>
<span class="quotelev1">&gt; --with-mxm=/opt/mellanox/mxm \
</span><br>
<span class="quotelev1">&gt; --with-mxm-libdir=/opt/**mellanox/mxm/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see from the last two lines, I want to enable the MXM transport
</span><br>
<span class="quotelev1">&gt; layer on a cluster made of SuperMicro X8DTG-D boards with dual Xeons and
</span><br>
<span class="quotelev1">&gt; Mellanox MT26428 HCAs; the OS is CentOS 5.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried with two different .rpm's for MXM, either
</span><br>
<span class="quotelev1">&gt; 'mxm-1.1.ad085ef-1.x86_64-**centos5u7.rpm' taken from here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mellanox.com/**downloads/hpc/mxm/v1.1/mxm-**latest.tar<http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://www.mellanox.com/**downloads/hpc/mxm/v1.1/mxm-**latest.tar<http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and 'mxm-1.5.f583875-1.x86_64-**centos5u7.rpm' taken from here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mellanox.com/**downloads/hpc/mxm/v1.5/mxm-**latest.tar<http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar">http://www.mellanox.com/**downloads/hpc/mxm/v1.5/mxm-**latest.tar<http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With both, even if the compilation concludes successfully, a simple test
</span><br>
<span class="quotelev1">&gt; (osu_bw from the OSU Micro-Benchmarks 3.8) fails with the sort of message
</span><br>
<span class="quotelev1">&gt; reported below; the lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rdma_dev.c:122  MXM DEBUG Port 1 on mlx4_0 has a link layer different from
</span><br>
<span class="quotelev1">&gt; IB. Skipping it
</span><br>
<span class="quotelev1">&gt; rdma_dev.c:155  MXM ERROR An active IB port on a Mellanox device, with lid
</span><br>
<span class="quotelev1">&gt; [any] gid [any] not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make it seem like it cannot access the HW for the HCA: is that so? The
</span><br>
<span class="quotelev1">&gt; very same test works when using '-mca pml ob1' (thus using the openib BTL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm quite ready to start pulling my hair; any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of /usr/bin/ibv_devinfo for the two cluster nodes follows:
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.7.000
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0025:90ff:ff07:0ac4
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0025:90ff:ff07:0ac7
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xB0
</span><br>
<span class="quotelev1">&gt;         board_id:                       SM_1061000001000
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 4
</span><br>
<span class="quotelev1">&gt;                         port_lid:               6
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt; [/cut]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cut]
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.7.000
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0025:90ff:ff07:0acc
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0025:90ff:ff07:0acf
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xB0
</span><br>
<span class="quotelev1">&gt;         board_id:                       SM_1061000001000
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 4
</span><br>
<span class="quotelev1">&gt;                         port_lid:               8
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt; [/cut]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The complete output of the failing test follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [fsimula_at_agape5 osu-micro-benchmarks-3.8]$ mpirun -x MXM_LOG_LEVEL=poll
</span><br>
<span class="quotelev1">&gt; -mca pml cm -mca mtl_mxm_np 1 -np 2 -host agape4,agape5
</span><br>
<span class="quotelev1">&gt; install/libexec/osu-micro-**benchmarks/mpi/pt2pt/osu_bw H H
</span><br>
<span class="quotelev1">&gt; [1358430343.266782] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; [1358430343.266815] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_HANDLE_ERRORS=bt
</span><br>
<span class="quotelev1">&gt; [1358430343.266826] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_GDB_PATH=/usr/bin/gdb
</span><br>
<span class="quotelev1">&gt; [1358430343.266838] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_DUMP_SIGNO=1
</span><br>
<span class="quotelev1">&gt; [1358430343.266851] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_DUMP_LEVEL=conn
</span><br>
<span class="quotelev1">&gt; [1358430343.266924] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_ASYNC_MODE=THREAD
</span><br>
<span class="quotelev1">&gt; [1358430343.266936] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_TIME_ACCURACY=0.1
</span><br>
<span class="quotelev1">&gt; [1358430343.266956] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_PTLS=self,shm,rdma
</span><br>
<span class="quotelev1">&gt; [1358430343.267249] [agape5:8596 :0]     mpool.c:265  MXM DEBUG mpool
</span><br>
<span class="quotelev1">&gt; 'ptl_self_recv_ev': allocated chunk 0xc075f40 of 96016 bytes with 1000
</span><br>
<span class="quotelev1">&gt; elements
</span><br>
<span class="quotelev1">&gt; [1358430343.267308] [agape5:8596 :0]     mpool.c:156  MXM DEBUG mpool
</span><br>
<span class="quotelev1">&gt; 'ptl_self_recv_ev': align 16, maxelems 1000, elemsize 88, padding 8
</span><br>
<span class="quotelev1">&gt; [1358430343.267316] [agape5:8596 :0]      self.c:410  MXM DEBUG Created
</span><br>
<span class="quotelev1">&gt; ptl_self
</span><br>
<span class="quotelev1">&gt; [1358430343.267333] [agape5:8596 :0]   shm_ptl.c:56   MXM DEBUG Created
</span><br>
<span class="quotelev1">&gt; ptl_shm
</span><br>
<span class="quotelev1">&gt; [1358430343.268457] [agape5:8596 :0]  rdma_ptl.c:65   MXM TRACE Got 1 IB
</span><br>
<span class="quotelev1">&gt; devices
</span><br>
<span class="quotelev1">&gt; [1358430343.268640] [agape5:8596 :0]  rdma_ptl.c:112  MXM DEBUG added
</span><br>
<span class="quotelev1">&gt; device mlx4_0
</span><br>
<span class="quotelev1">&gt; [1358430343.268665] [agape5:8596 :0]    memreg.c:187  MXM TRACE Created
</span><br>
<span class="quotelev1">&gt; memory registration cache on 1 devices
</span><br>
<span class="quotelev1">&gt; [1358430343.268676] [agape5:8596 :0]  rdma_ptl.c:133  MXM DEBUG Created
</span><br>
<span class="quotelev1">&gt; ptl_rdma
</span><br>
<span class="quotelev1">&gt; [1358430343.268689] [agape5:8596 :0]     event.c:353  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_event_init(event=**0x2b73e0ee3038 mode=2 time_accuracy=160000000)
</span><br>
<span class="quotelev1">&gt; [1358430343.268698] [agape5:8596 :0]    timerq.c:55   MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_timerq_init(timerq=**0x2b73e0ee3060 accuracy=160000000
</span><br>
<span class="quotelev1">&gt; max_interval=1600000000)
</span><br>
<span class="quotelev1">&gt; [1358430343.268706] [agape5:8596 :0]     event.c:292  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_event_add_thread_context(**thread=0x2b73e0ee30d0)
</span><br>
<span class="quotelev1">&gt; [1358430343.268732] [agape5:8596 :0]     event.c:198  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_set_fd_nonblock(fd=10)
</span><br>
<span class="quotelev1">&gt; [1358430343.268741] [agape5:8596 :0]     event.c:198  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_set_fd_nonblock(fd=11)
</span><br>
<span class="quotelev1">&gt; [1358430343.268841] [agape5:8596 :0]       mxm.c:162  MXM INFO  context
</span><br>
<span class="quotelev1">&gt; 0x2b73e0ee3010 created
</span><br>
<span class="quotelev1">&gt; [1358430343.269090] [agape5:8596 :1]     event.c:41   MXM FUNC
</span><br>
<span class="quotelev1">&gt;  __call_handler(handler-&gt;cb=**0x2b73e0ab28a0 handler-&gt;arg=0x2b73e0ee3038)
</span><br>
<span class="quotelev1">&gt; [1358430343.269104] [agape5:8596 :1]    timerq.c:88   MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_timerq_sweep(timerq=**0x2b73e0ee3060 current_time=568595527963578)
</span><br>
<span class="quotelev1">&gt; [1358430343.274685] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_ENABLE_HUGETLB=1
</span><br>
<span class="quotelev1">&gt; [1358430343.274700] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_ENABLE_TIMEOUTS=y
</span><br>
<span class="quotelev1">&gt; [1358430343.274709] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_ACK_TIMEOUT=0.3
</span><br>
<span class="quotelev1">&gt; [1358430343.274721] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_POLL_INTERVAL=0.1
</span><br>
<span class="quotelev1">&gt; [1358430343.274742] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_WINDOW_SIZE=512
</span><br>
<span class="quotelev1">&gt; [1358430343.274755] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_TX_BATCH=1
</span><br>
<span class="quotelev1">&gt; [1358430343.274764] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_CQ_MODERATION=64
</span><br>
<span class="quotelev1">&gt; [1358430343.274773] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_DRAIN_CQ=n
</span><br>
<span class="quotelev1">&gt; [1358430343.274782] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_RNDV_THRESH=65536
</span><br>
<span class="quotelev1">&gt; [1358430343.274791] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_ZCOPY_THRESH=2040
</span><br>
<span class="quotelev1">&gt; [1358430343.274815] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_RESIZE_CQ=y
</span><br>
<span class="quotelev1">&gt; [1358430343.274826] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_MTU=65536
</span><br>
<span class="quotelev1">&gt; [1358430343.274836] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_RX_QUEUE_LEN=16000
</span><br>
<span class="quotelev1">&gt; [1358430343.274849] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_TX_QUEUE_LEN=64
</span><br>
<span class="quotelev1">&gt; [1358430343.274859] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_RX_MAX_BUFFERS=128000
</span><br>
<span class="quotelev1">&gt; [1358430343.274877] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_TX_MAX_BUFFERS=8192
</span><br>
<span class="quotelev1">&gt; [1358430343.274887] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_RX_DROP_RATE=0
</span><br>
<span class="quotelev1">&gt; [1358430343.274896] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_ENABLE_NAK=y
</span><br>
<span class="quotelev1">&gt; [1358430343.274904] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_RX_FILL_THRESH=0.6
</span><br>
<span class="quotelev1">&gt; [1358430343.274915] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_UD_TX_MAX_INLINE=128
</span><br>
<span class="quotelev1">&gt; [1358430343.274925] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_SHM_RX_MAX_BUFFERS=2000
</span><br>
<span class="quotelev1">&gt; [1358430343.274941] [agape5:8596 :0] config_parser.c:168  MXM DEBUG
</span><br>
<span class="quotelev1">&gt; default: MXM_RDMA_ALLOC=1
</span><br>
<span class="quotelev1">&gt; [1358430343.274968] [agape5:8596 :0]        ep.c:36   MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_ep_create(context=**0x2b73e0ee3010)
</span><br>
<span class="quotelev1">&gt; [1358430343.274984] [agape5:8596 :0]      self.c:380  MXM DEBUG Created
</span><br>
<span class="quotelev1">&gt; ptl_self EP(rank=3767085072)
</span><br>
<span class="quotelev1">&gt; [1358430343.275028] [agape5:8596 :0] shm_queue.c:230  MXM DEBUG shm_ep=0,
</span><br>
<span class="quotelev1">&gt; shmid=6815750
</span><br>
<span class="quotelev1">&gt; [1358430343.275072] [agape5:8596 :0]     mpool.c:265  MXM DEBUG mpool
</span><br>
<span class="quotelev1">&gt; 'shm_ep_recv': allocated chunk 0x2aaaadd0c010 of 65824016 bytes with 2000
</span><br>
<span class="quotelev1">&gt; elements
</span><br>
<span class="quotelev1">&gt; [1358430343.278550] [agape5:8596 :0]     mpool.c:156  MXM DEBUG mpool
</span><br>
<span class="quotelev1">&gt; 'shm_ep_recv': align 16, maxelems 2000, elemsize 32904, padding 8
</span><br>
<span class="quotelev1">&gt; [1358430343.278584] [agape5:8596 :0]    timerq.c:139  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_timer_schedule(timerq=**0x2b73e0ee3060 timer=0xc029538
</span><br>
<span class="quotelev1">&gt; expiration=568595550657300)
</span><br>
<span class="quotelev1">&gt; [1358430343.278594] [agape5:8596 :0]    timerq.c:43   MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_timerq_insert_timer(put timer 0xc029538 expiration 568595550657300 in
</span><br>
<span class="quotelev1">&gt; slot 10)
</span><br>
<span class="quotelev1">&gt; [1358430343.278608] [agape5:8596 :0]    timerq.c:145  MXM TRACE added
</span><br>
<span class="quotelev1">&gt; timer 0xc029538 expiration 568595550657300 interval 160000000
</span><br>
<span class="quotelev1">&gt; [1358430343.278617] [agape5:8596 :0]    shm_ep.c:176  MXM DEBUG Created
</span><br>
<span class="quotelev1">&gt; ptl_shm EP (rank=0, ctx_id=1)
</span><br>
<span class="quotelev1">&gt; [1358430343.278641] [agape5:8596 :0]   rdma_ep.c:317  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_rdma_ep_create()
</span><br>
<span class="quotelev1">&gt; [1358430343.278722] [agape5:8596 :0]  rdma_dev.c:194  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_rdma_dev_init(dev=**0xc0b3f00)
</span><br>
<span class="quotelev1">&gt; [1358430343.278924] [agape5:8596 :0]  rdma_dev.c:122  MXM DEBUG Port 1 on
</span><br>
<span class="quotelev1">&gt; mlx4_0 has a link layer different from IB. Skipping it
</span><br>
<span class="quotelev1">&gt; [1358430343.278939] [agape5:8596 :0]  rdma_dev.c:155  MXM ERROR An active
</span><br>
<span class="quotelev1">&gt; IB port on a Mellanox device, with lid [any] gid [any] not found
</span><br>
<span class="quotelev1">&gt; [1358430343.278954] [agape5:8596 :0]    timerq.c:150  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_timer_cancel(timerq=**0x2b73e0ee3060 timer=0xc029538)
</span><br>
<span class="quotelev1">&gt; [1358430343.279454] [agape5:8596 :0]     mpool.c:184  MXM DEBUG mpool
</span><br>
<span class="quotelev1">&gt; 'shm_ep_recv': destroyed
</span><br>
<span class="quotelev1">&gt; [1358430343.279466] [agape5:8596 :0]      self.c:287  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_self_ep_destroy(ep=**0xc094600)
</span><br>
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; MXM was unable to create an endpoint. Please make sure that the network
</span><br>
<span class="quotelev1">&gt; link is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Error: No such device
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; [1358430343.287336] [agape5:8596 :0]     event.c:400  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_event_cleanup(event=**0x2b73e0ee3038)
</span><br>
<span class="quotelev1">&gt; [1358430343.287348] [agape5:8596 :0]     event.c:338  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_event_remove_thread_**context(thread=0x2b73e0ee30d0)
</span><br>
<span class="quotelev1">&gt; [1358430343.287355] [agape5:8596 :0]     event.c:145  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_event_thread_wakeup()
</span><br>
<span class="quotelev1">&gt; [1358430343.371011] [agape5:8596 :0]    timerq.c:76   MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_timerq_cleanup(timerq=**0x2b73e0ee3060)
</span><br>
<span class="quotelev1">&gt; [1358430343.371030] [agape5:8596 :0]    memreg.c:194  MXM TRACE Destroying
</span><br>
<span class="quotelev1">&gt; memory registration cache
</span><br>
<span class="quotelev1">&gt; [1358430343.371129] [agape5:8596 :0]   shm_ptl.c:34   MXM FUNC
</span><br>
<span class="quotelev1">&gt;  ptl_shm_destroy(ptl=0xc0729b0)
</span><br>
<span class="quotelev1">&gt; [1358430343.371139] [agape5:8596 :0]      self.c:340  MXM FUNC
</span><br>
<span class="quotelev1">&gt;  mxm_self_destroy(ptl=**0xc0699a0)
</span><br>
<span class="quotelev1">&gt; [1358430343.371148] [agape5:8596 :0]     mpool.c:184  MXM DEBUG mpool
</span><br>
<span class="quotelev1">&gt; 'ptl_self_recv_ev': destroyed
</span><br>
<span class="quotelev1">&gt; [1358430343.371156] [agape5:8596 :0]       mxm.c:197  MXM INFO  context
</span><br>
<span class="quotelev1">&gt; 0x2b73e0ee3010 destroyed
</span><br>
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; [agape5:08596] PML cm cannot be selected
</span><br>
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 8596 on
</span><br>
<span class="quotelev1">&gt; node agape5 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; ------------------------------**------------------------------**
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Francesco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21166.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21164.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>In reply to:</strong> <a href="21147.php">Francesco Simula: "[OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
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
