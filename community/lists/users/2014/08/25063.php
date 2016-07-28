<?
$subject_val = "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 15:50:02 2014" -->
<!-- isoreceived="20140818195002" -->
<!-- sent="Mon, 18 Aug 2014 22:49:59 +0300" -->
<!-- isosent="20140818194959" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No log_num_mtt in Ubuntu 14.04" -->
<!-- id="CAAO1KyZ0HsA7Af3z4P+q3t5aD1qtsDVQpgjMswZ7js3qHnGPsQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3FEFF65D-5D44-4D60-B802-49A2A685BF47_at_mac.com" -->
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
<strong>Date:</strong> 2014-08-18 15:49:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25064.php">Maxime Boissonneault: "[OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25062.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25062.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
most likely you installing old ofed which does not have this parameter:
<br>
<p>try:
<br>
<p>#modinfo mlx4_core
<br>
<p>and see if it is there.
<br>
I would suggest install latest OFED or Mellanox OFED.
<br>
<p><p>On Mon, Aug 18, 2014 at 9:53 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I get &quot;ofed_info: command not found&quot;. Note that I don't install the entire
</span><br>
<span class="quotelev1">&gt; OFED, but do a component wise installation by doing &quot;apt-get install
</span><br>
<span class="quotelev1">&gt; infiniband-diags ibutils ibverbs-utils libmlx4-dev&quot; for the drivers and
</span><br>
<span class="quotelev1">&gt; utilities.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; what ofed version do you use?
</span><br>
<span class="quotelev1">&gt; (ofed_info -s)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Aug 17, 2014 at 7:16 PM, Rio Yokota &lt;rioyokota_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have recently upgraded from Ubuntu 12.04 to 14.04 and OpenMPI gives the
</span><br>
<span class="quotelev2">&gt;&gt; following warning upon execution, which did not appear before the upgrade.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev2">&gt;&gt; allow registering part of your physical memory. This can cause MPI jobs to
</span><br>
<span class="quotelev2">&gt;&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything that I could find on google suggests to change log_num_mtt,
</span><br>
<span class="quotelev2">&gt;&gt; but I cannot do this for the following reasons:
</span><br>
<span class="quotelev2">&gt;&gt; 1. There is no log_num_mtt in /sys/module/mlx4_core/parameters/
</span><br>
<span class="quotelev2">&gt;&gt; 2. Adding &quot;options mlx4_core log_num_mtt=24&quot; to /etc/modprobe.d/mlx4.conf
</span><br>
<span class="quotelev2">&gt;&gt; doesn't seem to change anything
</span><br>
<span class="quotelev2">&gt;&gt; 3. I am not sure how I can restart the driver because there is no
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/etc/init.d/openibd&quot; file (I've rebooted the system but it didn't do
</span><br>
<span class="quotelev2">&gt;&gt; anything to create log_num_mtt)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Template information]
</span><br>
<span class="quotelev2">&gt;&gt; 1. OpenFabrics is from the Ubuntu distribution using &quot;apt-get install
</span><br>
<span class="quotelev2">&gt;&gt; infiniband-diags ibutils ibverbs-utils libmlx4-dev&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 2. OS is Ubuntu 14.04 LTS
</span><br>
<span class="quotelev2">&gt;&gt; 3. Subnet manager is from the Ubuntu distribution using &quot;apt-get install
</span><br>
<span class="quotelev2">&gt;&gt; opensm&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 4. Output of ibv_devinfo is:
</span><br>
<span class="quotelev2">&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev2">&gt;&gt;         fw_ver:                         2.10.600
</span><br>
<span class="quotelev2">&gt;&gt;         node_guid:                      0002:c903:003d:52b0
</span><br>
<span class="quotelev2">&gt;&gt;         sys_image_guid:                 0002:c903:003d:52b3
</span><br>
<span class="quotelev2">&gt;&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt;&gt;         vendor_part_id:                 4099
</span><br>
<span class="quotelev2">&gt;&gt;         hw_ver:                         0x0
</span><br>
<span class="quotelev2">&gt;&gt;         board_id:                       MT_1100120019
</span><br>
<span class="quotelev2">&gt;&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev2">&gt;&gt;                 port:   1
</span><br>
<span class="quotelev2">&gt;&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev2">&gt;&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev2">&gt;&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev2">&gt;&gt;                         port_lid:               1
</span><br>
<span class="quotelev2">&gt;&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt;&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; 5. Output of ifconfig for IB is
</span><br>
<span class="quotelev2">&gt;&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev2">&gt;&gt; 80-00-00-48-FE-80-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: fe80::202:c903:3d:52b1/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:26 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:34 errors:0 dropped:16 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:256
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:5843 (5.8 KB)  TX bytes:4324 (4.3 KB)
</span><br>
<span class="quotelev2">&gt;&gt; 6. ulimit -l is &quot;unlimited&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rio
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25048.php">http://www.open-mpi.org/community/lists/users/2014/08/25048.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25049.php">http://www.open-mpi.org/community/lists/users/2014/08/25049.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25062.php">http://www.open-mpi.org/community/lists/users/2014/08/25062.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25064.php">Maxime Boissonneault: "[OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25062.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>In reply to:</strong> <a href="25062.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25069.php">Rio Yokota: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
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
