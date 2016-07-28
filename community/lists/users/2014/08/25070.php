<?
$subject_val = "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 05:02:00 2014" -->
<!-- isoreceived="20140819090200" -->
<!-- sent="Tue, 19 Aug 2014 12:01:53 +0300" -->
<!-- isosent="20140819090153" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No log_num_mtt in Ubuntu 14.04" -->
<!-- id="CAAO1KyY9mm=kwp-3JGjU63HLzHga5R2ofnQ3ZHg3tz4cTjEc6Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="310411C2-DCDF-4DDB-9E59-CEFFA7AC4D40_at_mac.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-19 05:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25071.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so, it seems you have old ofed w/o this parameter.
<br>
Can you install latest Mellanox ofed? or check which community ofed has it?
<br>
<p><p>On Tue, Aug 19, 2014 at 9:34 AM, Rio Yokota &lt;rioyokota_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here is what &quot;modinfo mlx4_core&quot; gives
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; filename:
</span><br>
<span class="quotelev1">&gt;   /lib/modules/3.13.0-34-generic/kernel/drivers/net/ethernet/mellanox/mlx4/mlx4_core.ko
</span><br>
<span class="quotelev1">&gt; version:        2.2-1
</span><br>
<span class="quotelev1">&gt; license:        Dual BSD/GPL
</span><br>
<span class="quotelev1">&gt; description:    Mellanox ConnectX HCA low-level driver
</span><br>
<span class="quotelev1">&gt; author:         Roland Dreier
</span><br>
<span class="quotelev1">&gt; srcversion:     3AE29A0A6538EBBE9227361
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001010sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000100Fsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000100Esv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000100Dsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000100Csv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000100Bsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000100Asv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001009sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001008sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001007sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001006sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001005sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001004sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001003sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00001002sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000676Esv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006746sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006764sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000675Asv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006372sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006750sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006368sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000673Csv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006732sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006354sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d0000634Asv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias:          pci:v000015B3d00006340sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; depends:
</span><br>
<span class="quotelev1">&gt; intree:         Y
</span><br>
<span class="quotelev1">&gt; vermagic:       3.13.0-34-generic SMP mod_unload modversions
</span><br>
<span class="quotelev1">&gt; signer:         Magrathea: Glacier signing key
</span><br>
<span class="quotelev1">&gt; sig_key:        50:0B:C5:C8:7D:4B:11:5C:F3:C1:50:4F:7A:92:E2:33:C6:14:3D:58
</span><br>
<span class="quotelev1">&gt; sig_hashalgo:   sha512
</span><br>
<span class="quotelev1">&gt; parm:           debug_level:Enable debug tracing if &gt; 0 (int)
</span><br>
<span class="quotelev1">&gt; parm:           msi_x:attempt to use MSI-X if nonzero (int)
</span><br>
<span class="quotelev1">&gt; parm:           num_vfs:enable #num_vfs functions if num_vfs &gt; 0
</span><br>
<span class="quotelev1">&gt; num_vfs=port1,port2,port1+2 (array of byte)
</span><br>
<span class="quotelev1">&gt; parm:           probe_vf:number of vfs to probe by pf driver (num_vfs &gt; 0)
</span><br>
<span class="quotelev1">&gt; probe_vf=port1,port2,port1+2 (array of byte)
</span><br>
<span class="quotelev1">&gt; parm:           log_num_mgm_entry_size:log mgm size, that defines the num
</span><br>
<span class="quotelev1">&gt; of qp per mcg, for example: 10 gives 248.range: 7 &lt;= log_num_mgm_entry_size
</span><br>
<span class="quotelev1">&gt; &lt;= 12. To activate device managed flow steering when available, set to -1
</span><br>
<span class="quotelev1">&gt; (int)
</span><br>
<span class="quotelev1">&gt; parm:           enable_64b_cqe_eqe:Enable 64 byte CQEs/EQEs when the FW
</span><br>
<span class="quotelev1">&gt; supports this (default: True) (bool)
</span><br>
<span class="quotelev1">&gt; parm:           log_num_mac:Log2 max number of MACs per ETH port (1-7)
</span><br>
<span class="quotelev1">&gt; (int)
</span><br>
<span class="quotelev1">&gt; parm:           log_num_vlan:Log2 max number of VLANs per ETH port (0-7)
</span><br>
<span class="quotelev1">&gt; (int)
</span><br>
<span class="quotelev1">&gt; parm:           use_prio:Enable steering by VLAN priority on ETH ports
</span><br>
<span class="quotelev1">&gt; (0/1, default 0) (bool)
</span><br>
<span class="quotelev1">&gt; parm:           log_mtts_per_seg:Log2 number of MTT entries per segment
</span><br>
<span class="quotelev1">&gt; (1-7) (int)
</span><br>
<span class="quotelev1">&gt; parm:           port_type_array:Array of port types: HW_DEFAULT (0) is
</span><br>
<span class="quotelev1">&gt; default 1 for IB, 2 for Ethernet (array of int)
</span><br>
<span class="quotelev1">&gt; parm:           enable_qos:Enable Quality of Service support in the HCA
</span><br>
<span class="quotelev1">&gt; (default: off) (bool)
</span><br>
<span class="quotelev1">&gt; parm:           internal_err_reset:Reset device on internal errors if
</span><br>
<span class="quotelev1">&gt; non-zero (default 1, in SRIOV mode default is 0) (int)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; most likely you installing old ofed which does not have this parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #modinfo mlx4_core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see if it is there.
</span><br>
<span class="quotelev1">&gt; I would suggest install latest OFED or Mellanox OFED.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 18, 2014 at 9:53 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get &quot;ofed_info: command not found&quot;. Note that I don't install the
</span><br>
<span class="quotelev2">&gt;&gt; entire OFED, but do a component wise installation by doing &quot;apt-get install
</span><br>
<span class="quotelev2">&gt;&gt; infiniband-diags ibutils ibverbs-utils libmlx4-dev&quot; for the drivers and
</span><br>
<span class="quotelev2">&gt;&gt; utilities.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; what ofed version do you use?
</span><br>
<span class="quotelev2">&gt;&gt; (ofed_info -s)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Aug 17, 2014 at 7:16 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have recently upgraded from Ubuntu 12.04 to 14.04 and OpenMPI gives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following warning upon execution, which did not appear before the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upgrade.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow registering part of your physical memory. This can cause MPI jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything that I could find on google suggests to change log_num_mtt,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I cannot do this for the following reasons:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. There is no log_num_mtt in /sys/module/mlx4_core/parameters/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Adding &quot;options mlx4_core log_num_mtt=24&quot; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /etc/modprobe.d/mlx4.conf doesn't seem to change anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. I am not sure how I can restart the driver because there is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;/etc/init.d/openibd&quot; file (I've rebooted the system but it didn't do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything to create log_num_mtt)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Template information]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. OpenFabrics is from the Ubuntu distribution using &quot;apt-get install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; infiniband-diags ibutils ibverbs-utils libmlx4-dev&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. OS is Ubuntu 14.04 LTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Subnet manager is from the Ubuntu distribution using &quot;apt-get install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opensm&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. Output of ibv_devinfo is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fw_ver:                         2.10.600
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         node_guid:                      0002:c903:003d:52b0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sys_image_guid:                 0002:c903:003d:52b3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         vendor_part_id:                 4099
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hw_ver:                         0x0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         board_id:                       MT_1100120019
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 port:   1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         port_lid:               1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. Output of ifconfig for IB is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 80-00-00-48-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet6 addr: fe80::202:c903:3d:52b1/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX packets:26 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           TX packets:34 errors:0 dropped:16 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX bytes:5843 (5.8 KB)  TX bytes:4324 (4.3 KB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6. ulimit -l is &quot;unlimited&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25048.php">http://www.open-mpi.org/community/lists/users/2014/08/25048.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25049.php">http://www.open-mpi.org/community/lists/users/2014/08/25049.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25062.php">http://www.open-mpi.org/community/lists/users/2014/08/25062.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25063.php">http://www.open-mpi.org/community/lists/users/2014/08/25063.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25069.php">http://www.open-mpi.org/community/lists/users/2014/08/25069.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25070/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25071.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25090.php">rf_at_[hidden]: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
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
