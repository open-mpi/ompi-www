<?
$subject_val = "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 12:14:46 2014" -->
<!-- isoreceived="20140820161446" -->
<!-- sent="Wed, 20 Aug 2014 19:14:33 +0300" -->
<!-- isosent="20140820161433" -->
<!-- name="Rio Yokota" -->
<!-- email="rioyokota_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No log_num_mtt in Ubuntu 14.04" -->
<!-- id="F149A9A0-8379-448E-8409-1334B5FDD80B_at_mac.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21492.51281.218750.137669_at_gargle.gargle.HOWL" -->
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
<strong>From:</strong> Rio Yokota (<em>rioyokota_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 12:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25092.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Roland,
<br>
<p>Thank you so much. This was very helpful.
<br>
<p>Best,
<br>
Rio
<br>
<p><span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;Mike&quot; == Mike Dubman &lt;miked_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike&gt; so, it seems you have old ofed w/o this parameter.  Can you
</span><br>
<span class="quotelev1">&gt;    Mike&gt; install latest Mellanox ofed? or check which community ofed
</span><br>
<span class="quotelev1">&gt;    Mike&gt; has it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rio is using the kernel.org drivers that are part of Ubuntu/3.13.x and
</span><br>
<span class="quotelev1">&gt; log_num_mtt is not a parameter in those drivers. In fact log_num_mtt
</span><br>
<span class="quotelev1">&gt; has never been a parameter in the kernel.org sources (just checked the
</span><br>
<span class="quotelev1">&gt; git commit history). And it's not needed anymore either, since the
</span><br>
<span class="quotelev1">&gt; following commit (which is also part of OFED 3.12 btw; Mike, seems
</span><br>
<span class="quotelev1">&gt; Mellanox OFED is behind with this respect):
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; commit db5a7a65c05867cb6ff5cb6d556a0edfce631d2d
</span><br>
<span class="quotelev1">&gt; Author: Roland Dreier &lt;roland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Mon Mar 5 10:05:28 2012 -0800
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mlx4_core: Scale size of MTT table with system RAM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The current driver defaults to 1M MTT segments, where each segment holds
</span><br>
<span class="quotelev1">&gt;    8 MTT entries.  This limits the total memory registered to 8M * PAGE_SIZE
</span><br>
<span class="quotelev1">&gt;    which is 32GB with 4K pages.  Since systems that have much more memory
</span><br>
<span class="quotelev1">&gt;    are pretty common now (at least among systems with InfiniBand hardware),
</span><br>
<span class="quotelev1">&gt;    this limit ends up getting hit in practice quite a bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Handle this by having the driver allocate at least enough MTT entries to
</span><br>
<span class="quotelev1">&gt;    cover 2 * totalram pages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Signed-off-by: Roland Dreier &lt;roland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The relevant code segment (drivers/net/ethernet/mellanox/mlx4/profile.c):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        /*
</span><br>
<span class="quotelev1">&gt;         * We want to scale the number of MTTs with the size of the
</span><br>
<span class="quotelev1">&gt;         * system memory, since it makes sense to register a lot of
</span><br>
<span class="quotelev1">&gt;         * memory on a system with a lot of memory.  As a heuristic,
</span><br>
<span class="quotelev1">&gt;         * make sure we have enough MTTs to cover twice the system
</span><br>
<span class="quotelev1">&gt;         * memory (with PAGE_SIZE entries).
</span><br>
<span class="quotelev1">&gt;         *
</span><br>
<span class="quotelev1">&gt;         * This number has to be a power of two and fit into 32 bits
</span><br>
<span class="quotelev1">&gt;         * due to device limitations, so cap this at 2^31 as well.
</span><br>
<span class="quotelev1">&gt;         * That limits us to 8TB of memory registration per HCA with
</span><br>
<span class="quotelev1">&gt;         * 4KB pages, which is probably OK for the next few months.
</span><br>
<span class="quotelev1">&gt;         */
</span><br>
<span class="quotelev1">&gt;        si_meminfo(&amp;si);
</span><br>
<span class="quotelev1">&gt;        request-&gt;num_mtt =
</span><br>
<span class="quotelev1">&gt;                roundup_pow_of_two(max_t(unsigned, request-&gt;num_mtt,
</span><br>
<span class="quotelev1">&gt;                                         min(1UL &lt;&lt; (31 - log_mtts_per_seg),
</span><br>
<span class="quotelev1">&gt;                                             si.totalram &gt;&gt; (log_mtts_per_seg - 1))));
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the point here is that OpenMPI should check the mlx4 driver versions
</span><br>
<span class="quotelev1">&gt; and not output false warnings when newer drivers are used. Didn't check
</span><br>
<span class="quotelev1">&gt; whether this is fixed in the OpenMPI code repositories yet. It's not
</span><br>
<span class="quotelev1">&gt; fixed in 1.8.2rc4 anyway (static uint64_t calculate_max_reg in
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib.c). Also, the OpenMPI FAQ should be
</span><br>
<span class="quotelev1">&gt; corrected accordingly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rio as a note for you: You can safely ignore the warning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Roland
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; <a href="http://www.q-leap.com">http://www.q-leap.com</a> / <a href="http://qlustar.com">http://qlustar.com</a>
</span><br>
<span class="quotelev1">&gt;          --- HPC / Storage / Cloud Linux Cluster OS ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike&gt; On Tue, Aug 19, 2014 at 9:34 AM, Rio Yokota
</span><br>
<span class="quotelev1">&gt;    Mike&gt; &lt;rioyokota_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is what &quot;modinfo mlx4_core&quot; gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filename:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/modules/3.13.0-34-generic/kernel/drivers/net/ethernet/mellanox/mlx4/mlx4_core.ko
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version: 2.2-1 license: Dual BSD/GPL description: Mellanox
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX HCA low-level driver author: Roland Dreier srcversion:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3AE29A0A6538EBBE9227361 alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001010sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000100Fsv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000100Esv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000100Dsv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000100Csv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000100Bsv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000100Asv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001009sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001008sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001007sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001006sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001005sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001004sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001003sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00001002sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000676Esv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006746sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006764sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000675Asv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006372sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006750sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006368sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000673Csv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006732sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006354sv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d0000634Asv*sd*bc*sc*i* alias:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pci:v000015B3d00006340sv*sd*bc*sc*i* depends: intree: Y vermagic:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.13.0-34-generic SMP mod_unload modversions signer: Magrathea:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Glacier signing key sig_key:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 50:0B:C5:C8:7D:4B:11:5C:F3:C1:50:4F:7A:92:E2:33:C6:14:3D:58
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sig_hashalgo: sha512 parm: debug_level:Enable debug tracing if &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 (int) parm: msi_x:attempt to use MSI-X if nonzero (int) parm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; num_vfs:enable #num_vfs functions if num_vfs &gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; num_vfs=port1,port2,port1+2 (array of byte) parm: probe_vf:number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of vfs to probe by pf driver (num_vfs &gt; 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probe_vf=port1,port2,port1+2 (array of byte) parm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log_num_mgm_entry_size:log mgm size, that defines the num of qp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per mcg, for example: 10 gives 248.range: 7 &lt;=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log_num_mgm_entry_size &lt;= 12. To activate device managed flow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; steering when available, set to -1 (int) parm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_64b_cqe_eqe:Enable 64 byte CQEs/EQEs when the FW supports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this (default: True) (bool) parm: log_num_mac:Log2 max number of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MACs per ETH port (1-7) (int) parm: log_num_vlan:Log2 max number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of VLANs per ETH port (0-7) (int) parm: use_prio:Enable steering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by VLAN priority on ETH ports (0/1, default 0) (bool) parm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; log_mtts_per_seg:Log2 number of MTT entries per segment (1-7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (int) parm: port_type_array:Array of port types: HW_DEFAULT (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is default 1 for IB, 2 for Ethernet (array of int) parm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable_qos:Enable Quality of Service support in the HCA (default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; off) (bool) parm: internal_err_reset:Reset device on internal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors if non-zero (default 1, in SRIOV mode default is 0) (int)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most likely you installing old ofed which does not have this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #modinfo mlx4_core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and see if it is there.  I would suggest install latest OFED or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox OFED.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 18, 2014 at 9:53 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get &quot;ofed_info: command not found&quot;. Note that I don't install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the entire OFED, but do a component wise installation by doing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;apt-get install infiniband-diags ibutils ibverbs-utils
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libmlx4-dev&quot; for the drivers and utilities.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, what ofed version do you use?  (ofed_info -s)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sun, Aug 17, 2014 at 7:16 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have recently upgraded from Ubuntu 12.04 to 14.04 and OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gives the following warning upon execution, which did not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; appear before the upgrade.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configured to only allow registering part of your physical
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory. This can cause MPI jobs to run with erratic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Everything that I could find on google suggests to change
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; log_num_mtt, but I cannot do this for the following reasons:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. There is no log_num_mtt in /sys/module/mlx4_core/parameters/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. Adding &quot;options mlx4_core log_num_mtt=24&quot; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /etc/modprobe.d/mlx4.conf doesn't seem to change anything
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. I am not sure how I can restart the driver because there is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   no
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;/etc/init.d/openibd&quot; file (I've rebooted the system but it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; didn't do anything to create log_num_mtt)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [Template information]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. OpenFabrics is from the Ubuntu distribution using &quot;apt-get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   install
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; infiniband-diags ibutils ibverbs-utils libmlx4-dev&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. OS is Ubuntu 14.04 LTS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3. Subnet manager is from the Ubuntu distribution using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   &quot;apt-get install
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opensm&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4. Output of ibv_devinfo is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hca_id: mlx4_0 transport: InfiniBand (0) fw_ver: 2.10.600
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node_guid: 0002:c903:003d:52b0 sys_image_guid:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0002:c903:003d:52b3 vendor_id: 0x02c9 vendor_part_id: 4099
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hw_ver: 0x0 board_id: MT_1100120019 phys_port_cnt: 1 port: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; state: PORT_ACTIVE (4) max_mtu: 4096 (5) active_mtu: 4096 (5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sm_lid: 1 port_lid: 1 port_lmc: 0x00 link_layer: InfiniBand
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5. Output of ifconfig for IB is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ib0 Link encap:UNSPEC HWaddr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 80-00-00-48-FE-80-00-00-00-00-00-00-00-00-00-00 inet
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; addr:192.168.1.1 Bcast:192.168.1.255 Mask:255.255.255.0 inet6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; addr: fe80::202:c903:3d:52b1/64 Scope:Link UP BROADCAST RUNNING
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MULTICAST MTU:2044 Metric:1 RX packets:26 errors:0 dropped:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; overruns:0 frame:0 TX packets:34 errors:0 dropped:16 overruns:0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; carrier:0 collisions:0 txqueuelen:256 RX bytes:5843 (5.8 KB) TX
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bytes:4324 (4.3 KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 6. ulimit -l is &quot;unlimited&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks, Rio _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list users_at_[hidden] Subscription:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25092.php">Ralph Castain: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
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
