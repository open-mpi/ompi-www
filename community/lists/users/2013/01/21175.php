<?
$subject_val = "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 10:00:15 2013" -->
<!-- isoreceived="20130121150015" -->
<!-- sent="Mon, 21 Jan 2013 16:00:05 +0100" -->
<!-- isosent="20130121150005" -->
<!-- name="Francesco Simula" -->
<!-- email="francesco.simula_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!" -->
<!-- id="18450_1358780415_r0LF0AOG009654_5619b73e8996009ee8457263d0452232_at_roma1.infn.it" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAO1Kyb=7xxyCB0HUWRPVP5o+m7kwDg=MOzRK-25F_6op8nObg_at_mail.gmail.com" -->
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
<strong>From:</strong> Francesco Simula (<em>francesco.simula_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 10:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21176.php">Reuti: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Previous message:</strong> <a href="21174.php">Eric Chamberland: "[OMPI users] Invalid filename?"</a>
<li><strong>In reply to:</strong> <a href="21165.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21203.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21203.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>Hi Mike, 
<br>
<p>that is a question I'm not sure I can answer, because I
<br>
didn't install the OFED package; looking for it on the OpenFabrics.org
<br>
site I see that the archive contains the packages that in my distro come
<br>
one by one, e.g. 'libmthca-1.0.5-6.el5.rpm', 'libmlx4-1.0.1-7.el5.rpm',
<br>
etc. 
<br>
<p>The complete list of packages that I was instructed to install to
<br>
make the IB HCAs work under Centos/Red Hat is here:
<br>
<p><p><a href="http://people.redhat.com/dledford/infiniband_get_started.html">http://people.redhat.com/dledford/infiniband_get_started.html</a> [4]
<br>
<p><p>Taking for example the 'libmthca' package, the version is 1.0.5, the
<br>
same as 'libmthca-1.0.5-0.1-gbe5eef3.src.rpm' source package inside
<br>
'OFED-3.5-rc5.tgz' from the OpenFabrics site; on the other hand, the
<br>
'libibmad' package for Centos 5.8 is version 1.3.3, not matching with
<br>
'libibmad-1.3.9-1.src.rpm' inside the tarball. 
<br>
<p>Do you think I should
<br>
erase the relevant packages and instead rely on a completely recompiled
<br>
OFED? As a desperate measure I will, but I understood that usage of OMPI
<br>
1.6.3 with MXM was not needing this... 
<br>
<p>Best regards, 
<br>
<p>Francesco 
<br>
<p>Il
<br>
2013-01-19 20:06 Mike Dubman ha scritto: 
<br>
<p><span class="quotelev1">&gt; Also, what MOFED/OFED
</span><br>
version do you have? 
<br>
<span class="quotelev1">&gt; MXM is compiled per OFED/MOFED version, is there
</span><br>
match between active ofed and mxm.rpm selected?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 17,
</span><br>
2013 at 4:09 PM, Francesco Simula &lt;francesco.simula_at_[hidden]&gt;
<br>
wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried building from OMPI 1.6.3 tarball with the following
</span><br>
./configure:
<br>
<span class="quotelev2">&gt;&gt; ./configure
</span><br>
--prefix=/apotto/home1/homedirs/fsimula/Lavoro/openmpi-1.6.3/install/
<br>
<p><span class="quotelev2">&gt;&gt; --disable-mpi-io 
</span><br>
<span class="quotelev2">&gt;&gt; --disable-io-romio 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
--enable-dependency-tracking 
<br>
<span class="quotelev2">&gt;&gt; --without-slurm 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
--with-platform=optimized 
<br>
<span class="quotelev2">&gt;&gt; --disable-mpi-f77 
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mpi-f90
</span><br>
<p><span class="quotelev2">&gt;&gt; --with-openib 
</span><br>
<span class="quotelev2">&gt;&gt; --disable-static 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-shared 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
--disable-vt 
<br>
<span class="quotelev2">&gt;&gt; --enable-pty-support 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
--enable-mca-no-build=btl-ofud,pml-bfo 
<br>
<span class="quotelev2">&gt;&gt; --with-mxm=/opt/mellanox/mxm
</span><br>
<p><span class="quotelev2">&gt;&gt; --with-mxm-libdir=/opt/mellanox/mxm/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As you can see from
</span><br>
the last two lines, I want to enable the MXM transport layer on a
<br>
cluster made of SuperMicro X8DTG-D boards with dual Xeons and Mellanox
<br>
MT26428 HCAs; the OS is CentOS 5.8.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried with two different
</span><br>
.rpm's for MXM, either 'mxm-1.1.ad085ef-1.x86_64-centos5u7.rpm' taken
<br>
from here:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<a href="http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a> [1]
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
and 'mxm-1.5.f583875-1.x86_64-centos5u7.rpm' taken from here:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<a href="http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar">http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar</a> [2]
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
With both, even if the compilation concludes successfully, a simple test
<br>
(osu_bw from the OSU Micro-Benchmarks 3.8) fails with the sort of
<br>
message reported below; the lines:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rdma_dev.c:122 MXM DEBUG Port
</span><br>
1 on mlx4_0 has a link layer different from IB. Skipping it
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
rdma_dev.c:155 MXM ERROR An active IB port on a Mellanox device, with
<br>
lid [any] gid [any] not found
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make it seem like it cannot access
</span><br>
the HW for the HCA: is that so? The very same test works when using
<br>
'-mca pml ob1' (thus using the openib BTL).
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm quite ready to
</span><br>
start pulling my hair; any suggestions?
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The output of
</span><br>
/usr/bin/ibv_devinfo for the two cluster nodes follows:
<br>
<span class="quotelev2">&gt;&gt; [cut]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
hca_id: mlx4_0
<br>
<span class="quotelev2">&gt;&gt; transport: InfiniBand (0)
</span><br>
<span class="quotelev2">&gt;&gt; fw_ver: 2.7.000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
node_guid: 0025:90ff:ff07:0ac4
<br>
<span class="quotelev2">&gt;&gt; sys_image_guid: 0025:90ff:ff07:0ac7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
vendor_id: 0x02c9
<br>
<span class="quotelev2">&gt;&gt; vendor_part_id: 26428
</span><br>
<span class="quotelev2">&gt;&gt; hw_ver: 0xB0
</span><br>
<span class="quotelev2">&gt;&gt; board_id:
</span><br>
SM_1061000001000
<br>
<span class="quotelev2">&gt;&gt; phys_port_cnt: 1
</span><br>
<span class="quotelev2">&gt;&gt; port: 1
</span><br>
<span class="quotelev2">&gt;&gt; state: PORT_ACTIVE
</span><br>
(4)
<br>
<span class="quotelev2">&gt;&gt; max_mtu: 2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt; active_mtu: 2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt; sm_lid: 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
port_lid: 6
<br>
<span class="quotelev2">&gt;&gt; port_lmc: 0x00
</span><br>
<span class="quotelev2">&gt;&gt; [/cut]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [cut]
</span><br>
<span class="quotelev2">&gt;&gt; hca_id:
</span><br>
mlx4_0
<br>
<span class="quotelev2">&gt;&gt; transport: InfiniBand (0)
</span><br>
<span class="quotelev2">&gt;&gt; fw_ver: 2.7.000
</span><br>
<span class="quotelev2">&gt;&gt; node_guid:
</span><br>
0025:90ff:ff07:0acc
<br>
<span class="quotelev2">&gt;&gt; sys_image_guid: 0025:90ff:ff07:0acf
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id:
</span><br>
0x02c9
<br>
<span class="quotelev2">&gt;&gt; vendor_part_id: 26428
</span><br>
<span class="quotelev2">&gt;&gt; hw_ver: 0xB0
</span><br>
<span class="quotelev2">&gt;&gt; board_id:
</span><br>
SM_1061000001000
<br>
<span class="quotelev2">&gt;&gt; phys_port_cnt: 1
</span><br>
<span class="quotelev2">&gt;&gt; port: 1
</span><br>
<span class="quotelev2">&gt;&gt; state: PORT_ACTIVE
</span><br>
(4)
<br>
<span class="quotelev2">&gt;&gt; max_mtu: 2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt; active_mtu: 2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt; sm_lid: 4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
port_lid: 8
<br>
<span class="quotelev2">&gt;&gt; port_lmc: 0x00
</span><br>
<span class="quotelev2">&gt;&gt; [/cut]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The complete output of
</span><br>
the failing test follows:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [fsimula_at_agape5
</span><br>
osu-micro-benchmarks-3.8]$ mpirun -x MXM_LOG_LEVEL=poll -mca pml cm -mca
<br>
mtl_mxm_np 1 -np 2 -host agape4,agape5
<br>
install/libexec/osu-micro-benchmarks/mpi/pt2pt/osu_bw H H
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.266782] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.266815] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_HANDLE_ERRORS=bt
<br>
<span class="quotelev2">&gt;&gt; [1358430343.266826] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_GDB_PATH=/usr/bin/gdb
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.266838] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_DUMP_SIGNO=1
<br>
<span class="quotelev2">&gt;&gt; [1358430343.266851] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_DUMP_LEVEL=conn
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.266924] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_ASYNC_MODE=THREAD
<br>
<span class="quotelev2">&gt;&gt; [1358430343.266936] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_TIME_ACCURACY=0.1
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.266956] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_PTLS=self,shm,rdma
<br>
<span class="quotelev2">&gt;&gt; [1358430343.267249] [agape5:8596 :0]
</span><br>
mpool.c:265 MXM DEBUG mpool 'ptl_self_recv_ev': allocated chunk
<br>
0xc075f40 of 96016 bytes with 1000 elements
<br>
<span class="quotelev2">&gt;&gt; [1358430343.267308]
</span><br>
[agape5:8596 :0] mpool.c:156 MXM DEBUG mpool 'ptl_self_recv_ev': align
<br>
16, maxelems 1000, elemsize 88, padding 8
<br>
<span class="quotelev2">&gt;&gt; [1358430343.267316]
</span><br>
[agape5:8596 :0] self.c:410 MXM DEBUG Created ptl_self
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.267333] [agape5:8596 :0] shm_ptl.c:56 MXM DEBUG Created
<br>
ptl_shm
<br>
<span class="quotelev2">&gt;&gt; [1358430343.268457] [agape5:8596 :0] rdma_ptl.c:65 MXM TRACE
</span><br>
Got 1 IB devices
<br>
<span class="quotelev2">&gt;&gt; [1358430343.268640] [agape5:8596 :0] rdma_ptl.c:112
</span><br>
MXM DEBUG added device mlx4_0
<br>
<span class="quotelev2">&gt;&gt; [1358430343.268665] [agape5:8596 :0]
</span><br>
memreg.c:187 MXM TRACE Created memory registration cache on 1 devices
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.268676] [agape5:8596 :0] rdma_ptl.c:133 MXM DEBUG Created
<br>
ptl_rdma
<br>
<span class="quotelev2">&gt;&gt; [1358430343.268689] [agape5:8596 :0] event.c:353 MXM FUNC
</span><br>
mxm_event_init(event=0x2b73e0ee3038 mode=2 time_accuracy=160000000)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.268698] [agape5:8596 :0] timerq.c:55 MXM FUNC
<br>
mxm_timerq_init(timerq=0x2b73e0ee3060 accuracy=160000000
<br>
max_interval=1600000000)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.268706] [agape5:8596 :0]
</span><br>
event.c:292 MXM FUNC
<br>
mxm_event_add_thread_context(thread=0x2b73e0ee30d0)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.268732] [agape5:8596 :0] event.c:198 MXM FUNC
<br>
mxm_set_fd_nonblock(fd=10)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.268741] [agape5:8596 :0]
</span><br>
event.c:198 MXM FUNC mxm_set_fd_nonblock(fd=11)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.268841]
</span><br>
[agape5:8596 :0] mxm.c:162 MXM INFO context 0x2b73e0ee3010 created
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.269090] [agape5:8596 :1] event.c:41 MXM FUNC
<br>
__call_handler(handler-&gt;cb=0x2b73e0ab28a0
<br>
handler-&gt;arg=0x2b73e0ee3038)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.269104] [agape5:8596 :1]
</span><br>
timerq.c:88 MXM FUNC mxm_timerq_sweep(timerq=0x2b73e0ee3060
<br>
current_time=568595527963578)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274685] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_ENABLE_HUGETLB=1
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274700] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_ENABLE_TIMEOUTS=y
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274709] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_ACK_TIMEOUT=0.3
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274721] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_POLL_INTERVAL=0.1
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274742] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_WINDOW_SIZE=512
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274755] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_TX_BATCH=1
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274764] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_CQ_MODERATION=64
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274773] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_DRAIN_CQ=n
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274782] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_RNDV_THRESH=65536
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274791] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_ZCOPY_THRESH=2040
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274815] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_RESIZE_CQ=y
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274826] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_UD_MTU=65536
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274836] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_UD_RX_QUEUE_LEN=16000
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274849] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_UD_TX_QUEUE_LEN=64
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274859] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_UD_RX_MAX_BUFFERS=128000
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274877] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_UD_TX_MAX_BUFFERS=8192
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274887] [agape5:8596
</span><br>
:0] config_parser.c:168 MXM DEBUG default: MXM_UD_RX_DROP_RATE=0
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274896] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_UD_ENABLE_NAK=y
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274904] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_UD_RX_FILL_THRESH=0.6
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274915] [agape5:8596 :0] config_parser.c:168 MXM DEBUG
<br>
default: MXM_UD_TX_MAX_INLINE=128
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274925] [agape5:8596
</span><br>
:0] config_parser.c:168 MXM DEBUG default:
<br>
MXM_SHM_RX_MAX_BUFFERS=2000
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274941] [agape5:8596 :0]
</span><br>
config_parser.c:168 MXM DEBUG default: MXM_RDMA_ALLOC=1
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.274968] [agape5:8596 :0] ep.c:36 MXM FUNC
<br>
mxm_ep_create(context=0x2b73e0ee3010)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.274984]
</span><br>
[agape5:8596 :0] self.c:380 MXM DEBUG Created ptl_self
<br>
EP(rank=3767085072)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.275028] [agape5:8596 :0]
</span><br>
shm_queue.c:230 MXM DEBUG shm_ep=0, shmid=6815750
<br>
<span class="quotelev2">&gt;&gt; [1358430343.275072]
</span><br>
[agape5:8596 :0] mpool.c:265 MXM DEBUG mpool 'shm_ep_recv': allocated
<br>
chunk 0x2aaaadd0c010 of 65824016 bytes with 2000 elements
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.278550] [agape5:8596 :0] mpool.c:156 MXM DEBUG mpool
<br>
'shm_ep_recv': align 16, maxelems 2000, elemsize 32904, padding 8
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.278584] [agape5:8596 :0] timerq.c:139 MXM FUNC
<br>
mxm_timer_schedule(timerq=0x2b73e0ee3060 timer=0xc029538
<br>
expiration=568595550657300)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.278594] [agape5:8596 :0]
</span><br>
timerq.c:43 MXM FUNC mxm_timerq_insert_timer(put timer 0xc029538
<br>
expiration 568595550657300 in slot 10)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.278608]
</span><br>
[agape5:8596 :0] timerq.c:145 MXM TRACE added timer 0xc029538 expiration
<br>
568595550657300 interval 160000000
<br>
<span class="quotelev2">&gt;&gt; [1358430343.278617] [agape5:8596
</span><br>
:0] shm_ep.c:176 MXM DEBUG Created ptl_shm EP (rank=0, ctx_id=1)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.278641] [agape5:8596 :0] rdma_ep.c:317 MXM FUNC
<br>
mxm_rdma_ep_create()
<br>
<span class="quotelev2">&gt;&gt; [1358430343.278722] [agape5:8596 :0]
</span><br>
rdma_dev.c:194 MXM FUNC mxm_rdma_dev_init(dev=0xc0b3f00)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.278924] [agape5:8596 :0] rdma_dev.c:122 MXM DEBUG Port 1 on
<br>
mlx4_0 has a link layer different from IB. Skipping it
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.278939] [agape5:8596 :0] rdma_dev.c:155 MXM ERROR An active
<br>
IB port on a Mellanox device, with lid [any] gid [any] not found
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.278954] [agape5:8596 :0] timerq.c:150 MXM FUNC
<br>
mxm_timer_cancel(timerq=0x2b73e0ee3060 timer=0xc029538)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.279454] [agape5:8596 :0] mpool.c:184 MXM DEBUG mpool
<br>
'shm_ep_recv': destroyed
<br>
<span class="quotelev2">&gt;&gt; [1358430343.279466] [agape5:8596 :0]
</span><br>
self.c:287 MXM FUNC mxm_self_ep_destroy(ep=0xc094600)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
MXM was unable to create an endpoint. Please make sure that the network
<br>
link is
<br>
<span class="quotelev2">&gt;&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
Error: No such device
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.287336] [agape5:8596 :0] event.c:400 MXM FUNC
<br>
mxm_event_cleanup(event=0x2b73e0ee3038)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.287348]
</span><br>
[agape5:8596 :0] event.c:338 MXM FUNC
<br>
mxm_event_remove_thread_context(thread=0x2b73e0ee30d0)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.287355] [agape5:8596 :0] event.c:145 MXM FUNC
<br>
mxm_event_thread_wakeup()
<br>
<span class="quotelev2">&gt;&gt; [1358430343.371011] [agape5:8596 :0]
</span><br>
timerq.c:76 MXM FUNC mxm_timerq_cleanup(timerq=0x2b73e0ee3060)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.371030] [agape5:8596 :0] memreg.c:194 MXM TRACE Destroying
<br>
memory registration cache
<br>
<span class="quotelev2">&gt;&gt; [1358430343.371129] [agape5:8596 :0]
</span><br>
shm_ptl.c:34 MXM FUNC ptl_shm_destroy(ptl=0xc0729b0)
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.371139] [agape5:8596 :0] self.c:340 MXM FUNC
<br>
mxm_self_destroy(ptl=0xc0699a0)
<br>
<span class="quotelev2">&gt;&gt; [1358430343.371148] [agape5:8596 :0]
</span><br>
mpool.c:184 MXM DEBUG mpool 'ptl_self_recv_ev': destroyed
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[1358430343.371156] [agape5:8596 :0] mxm.c:197 MXM INFO context
<br>
0x2b73e0ee3010 destroyed
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
No available pml components were found!
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This means that there
</span><br>
are no components of this type installed on your
<br>
<span class="quotelev2">&gt;&gt; system or all the
</span><br>
components reported that they could not be used.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a fatal
</span><br>
error; your MPI process is likely to abort. Check the
<br>
<span class="quotelev2">&gt;&gt; output of the
</span><br>
&quot;ompi_info&quot; command and ensure that components of this
<br>
<span class="quotelev2">&gt;&gt; type are
</span><br>
available on your system. You may also wish to check the
<br>
<span class="quotelev2">&gt;&gt; value of the
</span><br>
&quot;component_path&quot; MCA parameter and ensure that it has at
<br>
<span class="quotelev2">&gt;&gt; least one
</span><br>
directory that contains valid MCA components.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
[agape5:08596] PML cm cannot be selected
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
mpirun has exited due to process rank 1 with PID 8596 on
<br>
<span class="quotelev2">&gt;&gt; node agape5
</span><br>
exiting improperly. There are two reasons this could occur:
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1.
</span><br>
this process did not call &quot;init&quot; before exiting, but others in
<br>
<span class="quotelev2">&gt;&gt; the
</span><br>
job did. This can cause a job to hang indefinitely while it waits
<br>
<span class="quotelev2">&gt;&gt; for
</span><br>
all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. this
</span><br>
process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
<span class="quotelev2">&gt;&gt; By
</span><br>
rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This
</span><br>
may have caused other processes in the application to be
<br>
<span class="quotelev2">&gt;&gt; terminated
</span><br>
by signals sent by mpirun (as reported here).
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Francesco
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
_______________________________________________
<br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
users_at_[hidden]
<br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
[3]
<br>
&nbsp;
<br>
<p>Links:
<br>
------
<br>
[1]
<br>
<a href="http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar">http://www.mellanox.com/downloads/hpc/mxm/v1.1/mxm-latest.tar</a>
<br>
[2]
<br>
<a href="http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar">http://www.mellanox.com/downloads/hpc/mxm/v1.5/mxm-latest.tar</a>
<br>
[3]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
[4]
<br>
<a href="http://people.redhat.com/dledford/infiniband_get_started.html">http://people.redhat.com/dledford/infiniband_get_started.html</a>
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21176.php">Reuti: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Previous message:</strong> <a href="21174.php">Eric Chamberland: "[OMPI users] Invalid filename?"</a>
<li><strong>In reply to:</strong> <a href="21165.php">Mike Dubman: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21203.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Reply:</strong> <a href="21203.php">Alina Sklarevich: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
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
