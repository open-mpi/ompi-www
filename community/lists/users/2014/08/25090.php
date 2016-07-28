<?
$subject_val = "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 12:09:55 2014" -->
<!-- isoreceived="20140820160955" -->
<!-- sent="Wed, 20 Aug 2014 18:09:53 +0200" -->
<!-- isosent="20140820160953" -->
<!-- name="rf_at_[hidden]" -->
<!-- email="rf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No log_num_mtt in Ubuntu 14.04" -->
<!-- id="21492.51281.218750.137669_at_gargle.gargle.HOWL" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyY9mm=kwp-3JGjU63HLzHga5R2ofnQ3ZHg3tz4cTjEc6Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] No log_num_mtt in Ubuntu 14.04<br>
<strong>From:</strong> <a href="mailto:rf_at_[hidden]?Subject=Re:%20[OMPI%20users]%20No%20log_num_mtt%20in%20Ubuntu%2014.04"><em>rf_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-08-20 12:09:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25091.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Previous message:</strong> <a href="25089.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25070.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25091.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25091.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Mike&quot; == Mike Dubman &lt;miked_at_[hidden]&gt; writes:
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Mike&gt; so, it seems you have old ofed w/o this parameter.  Can you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mike&gt; install latest Mellanox ofed? or check which community ofed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mike&gt; has it?
<br>
<p>Rio is using the kernel.org drivers that are part of Ubuntu/3.13.x and
<br>
log_num_mtt is not a parameter in those drivers. In fact log_num_mtt
<br>
has never been a parameter in the kernel.org sources (just checked the
<br>
git commit history). And it's not needed anymore either, since the
<br>
following commit (which is also part of OFED 3.12 btw; Mike, seems
<br>
Mellanox OFED is behind with this respect):
<br>
-----------------------------------------------------------
<br>
commit db5a7a65c05867cb6ff5cb6d556a0edfce631d2d
<br>
Author: Roland Dreier &lt;roland_at_[hidden]&gt;
<br>
Date:   Mon Mar 5 10:05:28 2012 -0800
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mlx4_core: Scale size of MTT table with system RAM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The current driver defaults to 1M MTT segments, where each segment holds
<br>
&nbsp;&nbsp;&nbsp;&nbsp;8 MTT entries.  This limits the total memory registered to 8M * PAGE_SIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 32GB with 4K pages.  Since systems that have much more memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;are pretty common now (at least among systems with InfiniBand hardware),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this limit ends up getting hit in practice quite a bit.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Handle this by having the driver allocate at least enough MTT entries to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cover 2 * totalram pages.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Signed-off-by: Roland Dreier &lt;roland_at_[hidden]&gt;
<br>
-----------------------------------------------------------
<br>
<p>The relevant code segment (drivers/net/ethernet/mellanox/mlx4/profile.c):
<br>
<p>-----------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* We want to scale the number of MTTs with the size of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* system memory, since it makes sense to register a lot of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* memory on a system with a lot of memory.  As a heuristic,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* make sure we have enough MTTs to cover twice the system
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* memory (with PAGE_SIZE entries).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* This number has to be a power of two and fit into 32 bits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* due to device limitations, so cap this at 2^31 as well.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* That limits us to 8TB of memory registration per HCA with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 4KB pages, which is probably OK for the next few months.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;si_meminfo(&amp;si);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request-&gt;num_mtt =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;roundup_pow_of_two(max_t(unsigned, request-&gt;num_mtt,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;min(1UL &lt;&lt; (31 - log_mtts_per_seg),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;si.totalram &gt;&gt; (log_mtts_per_seg - 1))));
<br>
-----------------------------------------------------------
<br>
<p>So the point here is that OpenMPI should check the mlx4 driver versions
<br>
and not output false warnings when newer drivers are used. Didn't check
<br>
whether this is fixed in the OpenMPI code repositories yet. It's not
<br>
fixed in 1.8.2rc4 anyway (static uint64_t calculate_max_reg in
<br>
ompi/mca/btl/openib/btl_openib.c). Also, the OpenMPI FAQ should be
<br>
corrected accordingly.
<br>
<p>Rio as a note for you: You can safely ignore the warning.
<br>
<p>Cheers,
<br>
<p>Roland
<br>
<p>-------
<br>
<a href="http://www.q-leap.com">http://www.q-leap.com</a> / <a href="http://qlustar.com">http://qlustar.com</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--- HPC / Storage / Cloud Linux Cluster OS ---
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Mike&gt; On Tue, Aug 19, 2014 at 9:34 AM, Rio Yokota
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Mike&gt; &lt;rioyokota_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">    &gt;&gt; Here is what &quot;modinfo mlx4_core&quot; gives
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev2">    &gt;&gt; filename:
</span><br>
<span class="quotelev2">    &gt;&gt; /lib/modules/3.13.0-34-generic/kernel/drivers/net/ethernet/mellanox/mlx4/mlx4_core.ko
</span><br>
<span class="quotelev2">    &gt;&gt; version: 2.2-1 license: Dual BSD/GPL description: Mellanox
</span><br>
<span class="quotelev2">    &gt;&gt; ConnectX HCA low-level driver author: Roland Dreier srcversion:
</span><br>
<span class="quotelev2">    &gt;&gt; 3AE29A0A6538EBBE9227361 alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001010sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000100Fsv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000100Esv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000100Dsv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000100Csv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000100Bsv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000100Asv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001009sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001008sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001007sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001006sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001005sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001004sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001003sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00001002sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000676Esv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006746sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006764sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000675Asv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006372sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006750sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006368sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000673Csv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006732sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006354sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d0000634Asv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev2">    &gt;&gt; pci:v000015B3d00006340sv*sd*bc*sc*i* depends: intree: Y vermagic:
</span><br>
<span class="quotelev2">    &gt;&gt; 3.13.0-34-generic SMP mod_unload modversions signer: Magrathea:
</span><br>
<span class="quotelev2">    &gt;&gt; Glacier signing key sig_key:
</span><br>
<span class="quotelev2">    &gt;&gt; 50:0B:C5:C8:7D:4B:11:5C:F3:C1:50:4F:7A:92:E2:33:C6:14:3D:58
</span><br>
<span class="quotelev2">    &gt;&gt; sig_hashalgo: sha512 parm: debug_level:Enable debug tracing if &gt;
</span><br>
<span class="quotelev2">    &gt;&gt; 0 (int) parm: msi_x:attempt to use MSI-X if nonzero (int) parm:
</span><br>
<span class="quotelev2">    &gt;&gt; num_vfs:enable #num_vfs functions if num_vfs &gt; 0
</span><br>
<span class="quotelev2">    &gt;&gt; num_vfs=port1,port2,port1+2 (array of byte) parm: probe_vf:number
</span><br>
<span class="quotelev2">    &gt;&gt; of vfs to probe by pf driver (num_vfs &gt; 0)
</span><br>
<span class="quotelev2">    &gt;&gt; probe_vf=port1,port2,port1+2 (array of byte) parm:
</span><br>
<span class="quotelev2">    &gt;&gt; log_num_mgm_entry_size:log mgm size, that defines the num of qp
</span><br>
<span class="quotelev2">    &gt;&gt; per mcg, for example: 10 gives 248.range: 7 &lt;=
</span><br>
<span class="quotelev2">    &gt;&gt; log_num_mgm_entry_size &lt;= 12. To activate device managed flow
</span><br>
<span class="quotelev2">    &gt;&gt; steering when available, set to -1 (int) parm:
</span><br>
<span class="quotelev2">    &gt;&gt; enable_64b_cqe_eqe:Enable 64 byte CQEs/EQEs when the FW supports
</span><br>
<span class="quotelev2">    &gt;&gt; this (default: True) (bool) parm: log_num_mac:Log2 max number of
</span><br>
<span class="quotelev2">    &gt;&gt; MACs per ETH port (1-7) (int) parm: log_num_vlan:Log2 max number
</span><br>
<span class="quotelev2">    &gt;&gt; of VLANs per ETH port (0-7) (int) parm: use_prio:Enable steering
</span><br>
<span class="quotelev2">    &gt;&gt; by VLAN priority on ETH ports (0/1, default 0) (bool) parm:
</span><br>
<span class="quotelev2">    &gt;&gt; log_mtts_per_seg:Log2 number of MTT entries per segment (1-7)
</span><br>
<span class="quotelev2">    &gt;&gt; (int) parm: port_type_array:Array of port types: HW_DEFAULT (0)
</span><br>
<span class="quotelev2">    &gt;&gt; is default 1 for IB, 2 for Ethernet (array of int) parm:
</span><br>
<span class="quotelev2">    &gt;&gt; enable_qos:Enable Quality of Service support in the HCA (default:
</span><br>
<span class="quotelev2">    &gt;&gt; off) (bool) parm: internal_err_reset:Reset device on internal
</span><br>
<span class="quotelev2">    &gt;&gt; errors if non-zero (default 1, in SRIOV mode default is 0) (int)
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev2">    &gt;&gt; most likely you installing old ofed which does not have this
</span><br>
<span class="quotelev2">    &gt;&gt; parameter:
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev2">    &gt;&gt; try:
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev2">    &gt;&gt; #modinfo mlx4_core
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev2">    &gt;&gt; and see if it is there.  I would suggest install latest OFED or
</span><br>
<span class="quotelev2">    &gt;&gt; Mellanox OFED.
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev2">    &gt;&gt; On Mon, Aug 18, 2014 at 9:53 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt;
</span><br>
<span class="quotelev2">    &gt;&gt; wrote:
</span><br>
<span class="quotelev2">    &gt;&gt;
</span><br>
<span class="quotelev3">    &gt;&gt;&gt; I get &quot;ofed_info: command not found&quot;. Note that I don't install
</span><br>
<span class="quotelev3">    &gt;&gt;&gt; the entire OFED, but do a component wise installation by doing
</span><br>
<span class="quotelev3">    &gt;&gt;&gt; &quot;apt-get install infiniband-diags ibutils ibverbs-utils
</span><br>
<span class="quotelev3">    &gt;&gt;&gt; libmlx4-dev&quot; for the drivers and utilities.
</span><br>
<span class="quotelev3">    &gt;&gt;&gt;
</span><br>
<span class="quotelev3">    &gt;&gt;&gt; Hi, what ofed version do you use?  (ofed_info -s)
</span><br>
<span class="quotelev3">    &gt;&gt;&gt;
</span><br>
<span class="quotelev3">    &gt;&gt;&gt;
</span><br>
<span class="quotelev3">    &gt;&gt;&gt; On Sun, Aug 17, 2014 at 7:16 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt;
</span><br>
<span class="quotelev3">    &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">    &gt;&gt;&gt;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; I have recently upgraded from Ubuntu 12.04 to 14.04 and OpenMPI
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; gives the following warning upon execution, which did not
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; appear before the upgrade.
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; configured to only allow registering part of your physical
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; memory. This can cause MPI jobs to run with erratic
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; performance, hang, and/or crash.
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; Everything that I could find on google suggests to change
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; log_num_mtt, but I cannot do this for the following reasons:
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 1. There is no log_num_mtt in /sys/module/mlx4_core/parameters/
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 2. Adding &quot;options mlx4_core log_num_mtt=24&quot; to
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; /etc/modprobe.d/mlx4.conf doesn't seem to change anything
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 3. I am not sure how I can restart the driver because there is
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt;    no
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; &quot;/etc/init.d/openibd&quot; file (I've rebooted the system but it
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; didn't do anything to create log_num_mtt)
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; [Template information]
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 1. OpenFabrics is from the Ubuntu distribution using &quot;apt-get
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt;    install
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; infiniband-diags ibutils ibverbs-utils libmlx4-dev&quot;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 2. OS is Ubuntu 14.04 LTS
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 3. Subnet manager is from the Ubuntu distribution using
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt;    &quot;apt-get install
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; opensm&quot;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 4. Output of ibv_devinfo is:
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; hca_id: mlx4_0 transport: InfiniBand (0) fw_ver: 2.10.600
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; node_guid: 0002:c903:003d:52b0 sys_image_guid:
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 0002:c903:003d:52b3 vendor_id: 0x02c9 vendor_part_id: 4099
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; hw_ver: 0x0 board_id: MT_1100120019 phys_port_cnt: 1 port: 1
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; state: PORT_ACTIVE (4) max_mtu: 4096 (5) active_mtu: 4096 (5)
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; sm_lid: 1 port_lid: 1 port_lmc: 0x00 link_layer: InfiniBand
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 5. Output of ifconfig for IB is
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; ib0 Link encap:UNSPEC HWaddr
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 80-00-00-48-FE-80-00-00-00-00-00-00-00-00-00-00 inet
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; addr:192.168.1.1 Bcast:192.168.1.255 Mask:255.255.255.0 inet6
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; addr: fe80::202:c903:3d:52b1/64 Scope:Link UP BROADCAST RUNNING
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; MULTICAST MTU:2044 Metric:1 RX packets:26 errors:0 dropped:0
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; overruns:0 frame:0 TX packets:34 errors:0 dropped:16 overruns:0
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; carrier:0 collisions:0 txqueuelen:256 RX bytes:5843 (5.8 KB) TX
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; bytes:4324 (4.3 KB)
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; 6. ulimit -l is &quot;unlimited&quot;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; Thanks, Rio _______________________________________________
</span><br>
<span class="quotelev4">    &gt;&gt;&gt;&gt; users mailing list users_at_[hidden] Subscription:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25091.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Previous message:</strong> <a href="25089.php">Reuti: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25070.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25091.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25091.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
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
