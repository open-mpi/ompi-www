<?
$subject_val = "Re: [OMPI users] problem running with RoCE over 10GbE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 09:04:44 2011" -->
<!-- isoreceived="20111005130444" -->
<!-- sent="Wed, 05 Oct 2011 15:04:23 +0200" -->
<!-- isosent="20111005130423" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running with RoCE over 10GbE" -->
<!-- id="4E8C55D7.4020407_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77486CDD5CFC9449BEE3C555886D8A90018CF0_at_G9W0339.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem running with RoCE over 10GbE<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 09:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17505.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17485.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>On 01-Oct-11 1:01 AM, Konz, Jeffrey (SSA Solution Centers) wrote:
<br>
<span class="quotelev1">&gt; Encountered a problem when trying to run OpenMPI 1.5.4 with RoCE over 10GbE fabric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Got this run time error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An invalid CPC name was specified via the btl_openib_cpc_include MCA
</span><br>
<span class="quotelev1">&gt; parameter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Local host:                   atl3-14
</span><br>
<span class="quotelev1">&gt;    btl_openib_cpc_include value: rdmacm
</span><br>
<span class="quotelev1">&gt;    Invalid name:                 rdmacm
</span><br>
<span class="quotelev1">&gt;    All possible valid names:     oob,xoob
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [atl3-14:07184] mca: base: components_open: component btl / openib open function failed
</span><br>
<span class="quotelev1">&gt; [atl3-12:09178] mca: base: components_open: component btl / openib open function failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Used these options to mpirun:
</span><br>
<span class="quotelev1">&gt;    &quot;--mca btl openib,self,sm --mca btl_openib_cpc_include rdmacm -mca btl_openib_if_include mlx4_0:2&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a Mellanox LOM with two ports, first is an IB port, second is an 10GbE port.
</span><br>
<span class="quotelev1">&gt; Running over the IB port and TCP over the 10GbE port work fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Built OpenMPI with this option &quot;--enable-openib-rdmacm&quot;.
</span><br>
<span class="quotelev1">&gt; Our system has OFED 1.5.2 with librdmacm-1.0.13-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I noticed this output from configure script:
</span><br>
<span class="quotelev1">&gt; checking rdma/rdma_cma.h usability... no
</span><br>
<span class="quotelev1">&gt; checking rdma/rdma_cma.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for rdma/rdma_cma.h... no
</span><br>
<span class="quotelev1">&gt; checking whether IBV_LINK_LAYER_ETHERNET is declared... yes
</span><br>
<span class="quotelev1">&gt; checking if RDMAoE support is enabled... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/driver.h... yes
</span><br>
<span class="quotelev1">&gt; checking if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if OpenFabrics RDMACM support is enabled... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are we missing a build option or a piece of software?
</span><br>
<span class="quotelev1">&gt; Config.log and output from &quot;ompi_info --all&quot; attached.
</span><br>
<p>You shouldn't use the &quot;--enable-openib-rdmacm&quot; option - rdmacm
<br>
support is enabled by default, providing librdmacm is found on
<br>
the machine.
<br>
<p>So the question is, why OMPI config script didn't find it?
<br>
OMPI looks for &quot;rdma/rdma_cma.h&quot; header. Do you have it on
<br>
you build machine?
<br>
The usual location of this file is /usr/include/rdma/rdma_cma.h
<br>
<p>Another reason might be this: it appears that OMPI is including
<br>
&quot;rdma/rdma_cma.h&quot; rather than &lt;rdma/rdma_cma.h&gt;.
<br>
<p>Please apply the following tiny fix to OMPI source:
<br>
<p>Index: ompi/config/ompi_check_openib.m4
<br>
===================================================================
<br>
--- ompi/config/ompi_check_openib.m4    (revision 25228)
<br>
+++ ompi/config/ompi_check_openib.m4    (working copy)
<br>
@@ -207,7 +207,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_CHECK_LIB([rdmacm], [rdma_create_id],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_CHECKING([for rdma_get_peer_addr])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_msg=no
<br>
-                         AC_LINK_IFELSE([AC_LANG_PROGRAM([[#include &quot;rdma/rdma_cma.h&quot;
<br>
+                         AC_LINK_IFELSE([AC_LANG_PROGRAM([[#include &lt;rdma/rdma_cma.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]], [[void *ret = (void*) rdma_get_peer_addr((struct rdma_cm_id*)0);]])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_have_rdmacm=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_msg=yes])
<br>
<p>Run autogen.sh &amp; configure and check if rdmacm is found.
<br>
<p>-- YK
<br>
<p><p>&nbsp;
<br>
<span class="quotelev1">&gt; % ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;          transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;          fw_ver:                         2.9.1000
</span><br>
<span class="quotelev1">&gt;          node_guid:                      78e7:d103:0021:4464
</span><br>
<span class="quotelev1">&gt;          sys_image_guid:                 78e7:d103:0021:4467
</span><br>
<span class="quotelev1">&gt;          vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;          vendor_part_id:                 26438
</span><br>
<span class="quotelev1">&gt;          hw_ver:                         0xB0
</span><br>
<span class="quotelev1">&gt;          board_id:                       HP_0200000003
</span><br>
<span class="quotelev1">&gt;          phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;                  port:   1
</span><br>
<span class="quotelev1">&gt;                          state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                          max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                          active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                          sm_lid:                 34
</span><br>
<span class="quotelev1">&gt;                          port_lid:               11
</span><br>
<span class="quotelev1">&gt;                          port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                          link_layer:             IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                  port:   2
</span><br>
<span class="quotelev1">&gt;                          state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                          max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                          active_mtu:             1024 (3)
</span><br>
<span class="quotelev1">&gt;                          sm_lid:                 0
</span><br>
<span class="quotelev1">&gt;                          port_lid:               0
</span><br>
<span class="quotelev1">&gt;                          port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                          link_layer:             Ethernet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 78:E7:D1:21:44:60
</span><br>
<span class="quotelev1">&gt;            inet addr:16.113.180.147  Bcast:16.113.183.255  Mask:255.255.252.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::7ae7:d1ff:fe21:4460/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:1861763 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:1776402 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:712448939 (679.4 MiB)  TX bytes:994111004 (948.0 MiB)
</span><br>
<span class="quotelev1">&gt;            Memory:fb9e0000-fba00000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth2      Link encap:Ethernet  HWaddr 78:E7:D1:21:44:65
</span><br>
<span class="quotelev1">&gt;            inet addr:10.10.0.147  Bcast:10.10.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::78e7:d100:121:4465/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:8519814 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:8555715 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:12370127778 (11.5 GiB)  TX bytes:12372246315 (11.5 GiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:InfiniBand  HWaddr 80:00:00:4D:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev1">&gt;            inet addr:192.168.0.147  Bcast:192.168.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::7ae7:d103:21:4465/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:16384  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:1989 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:208 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:256
</span><br>
<span class="quotelev1">&gt;            RX bytes:275196 (268.7 KiB)  TX bytes:19202 (18.7 KiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;            inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;            UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:42224 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:42224 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:3115668 (2.9 MiB)  TX bytes:3115668 (2.9 MiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /**********************************************************/
</span><br>
<span class="quotelev1">&gt; /* Jeff Konz                          jeffrey.konz_at_[hidden] */
</span><br>
<span class="quotelev1">&gt; /* Solutions Architect                   HPC Benchmarking */
</span><br>
<span class="quotelev1">&gt; /* Americas Shared Solutions Architecture (SSA)           */
</span><br>
<span class="quotelev1">&gt; /* Hewlett-Packard Company                                */
</span><br>
<span class="quotelev1">&gt; /* Office: 248-491-7480              Mobile: 248-345-6857 */
</span><br>
<span class="quotelev1">&gt; /**********************************************************/
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
<li><strong>Next message:</strong> <a href="17505.php">Andreas Schäfer: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17503.php">Dmitry N. Mikushin: "Re: [OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17485.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] problem running with RoCE over 10GbE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
<li><strong>Reply:</strong> <a href="17506.php">Jeff Squyres: "Re: [OMPI users] problem running with RoCE over 10GbE"</a>
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
