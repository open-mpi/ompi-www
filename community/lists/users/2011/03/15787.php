<?
$subject_val = "Re: [OMPI users] RDMACM Differences";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 07:39:31 2011" -->
<!-- isoreceived="20110303123931" -->
<!-- sent="Thu, 3 Mar 2011 07:39:27 -0500" -->
<!-- isosent="20110303123927" -->
<!-- name="Michael Shuey" -->
<!-- email="shuey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RDMACM Differences" -->
<!-- id="AANLkTikAnQV5bBf=pCV=FmRadeqESsLGt1K_Eo+-guxs_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A76C72BE-DD94-40C2-B099-256C154B874C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RDMACM Differences<br>
<strong>From:</strong> Michael Shuey (<em>shuey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-03 07:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15786.php">Gus Correa: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alternatively, if OpenMPI is really trying to use both ports, you
<br>
could force it to use just one port with --mca btl_openib_if_include
<br>
mlx4_0:1 (probably)
<br>
<p><pre>
--
Mike Shuey
On Tue, Mar 1, 2011 at 1:02 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; On Feb 28, 2011, at 12:49 PM, Jagga Soorma wrote:
&gt;
&gt;&gt; -bash-3.2$ mpiexec --mca btl openib,self -mca btl_openib_warn_default_gid_
&gt;&gt; prefix 0 -np 2 --hostfile mpihosts /home/jagga/osu-micro-benchmarks-3.3/openmpi/ofed-1.5.2/bin/osu_latency
&gt;
&gt; Your use of btl_openib_warn_default_gid_prefix may have brought up a subtle issue in Open MPI's verbs support. &#160;More below.
&gt;
&gt;&gt; # OSU MPI Latency Test v3.3
&gt;&gt; # Size &#160; &#160; &#160; &#160; &#160; &#160;Latency (us)
&gt;&gt; [amber04][[10252,1],1][connect/btl_openib_connect_oob.c:325:qp_connect_all] error modifing QP to RTR errno says Invalid argument
&gt;&gt; [amber04][[10252,1],1][connect/btl_openib_connect_oob.c:815:rml_recv_cb] error in endpoint reply start connect
&gt;
&gt; Looking at this error message and your ibv_devinfo output:
&gt;
&gt;&gt; [root_at_amber03 ~]# ibv_devinfo
&gt;&gt; hca_id: &#160; &#160;mlx4_0
&gt;&gt; &#160; &#160; transport: &#160; &#160; &#160; &#160; &#160; &#160;InfiniBand (0)
&gt;&gt; &#160; &#160; fw_ver: &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;2.7.9294
&gt;&gt; &#160; &#160; node_guid: &#160; &#160; &#160; &#160; &#160; &#160;78e7:d103:0021:8884
&gt;&gt; &#160; &#160; sys_image_guid: &#160; &#160; &#160; &#160; &#160; &#160;78e7:d103:0021:8887
&gt;&gt; &#160; &#160; vendor_id: &#160; &#160; &#160; &#160; &#160; &#160;0x02c9
&gt;&gt; &#160; &#160; vendor_part_id: &#160; &#160; &#160; &#160; &#160; &#160;26438
&gt;&gt; &#160; &#160; hw_ver: &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;0xB0
&gt;&gt; &#160; &#160; board_id: &#160; &#160; &#160; &#160; &#160; &#160;HP_0200000003
&gt;&gt; &#160; &#160; phys_port_cnt: &#160; &#160; &#160; &#160; &#160; &#160;2
&gt;&gt; &#160; &#160; &#160; &#160; port: &#160; &#160;1
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; state: &#160; &#160; &#160; &#160; &#160; &#160;PORT_ACTIVE (4)
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; max_mtu: &#160; &#160; &#160; &#160;2048 (4)
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; active_mtu: &#160; &#160; &#160; &#160;2048 (4)
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; sm_lid: &#160; &#160; &#160; &#160; &#160; &#160;1
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; port_lid: &#160; &#160; &#160; &#160;20
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; port_lmc: &#160; &#160; &#160; &#160;0x00
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; link_layer: &#160; &#160; &#160; &#160;IB
&gt;&gt;
&gt;&gt; &#160; &#160; &#160; &#160; port: &#160; &#160;2
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; state: &#160; &#160; &#160; &#160; &#160; &#160;PORT_ACTIVE (4)
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; max_mtu: &#160; &#160; &#160; &#160;2048 (4)
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; active_mtu: &#160; &#160; &#160; &#160;1024 (3)
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; sm_lid: &#160; &#160; &#160; &#160; &#160; &#160;0
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; port_lid: &#160; &#160; &#160; &#160;0
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; port_lmc: &#160; &#160; &#160; &#160;0x00
&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; link_layer: &#160; &#160; &#160; &#160;Ethernet
&gt;
&gt; It looks like you have 1 HCA port as IB and the other at Ethernet.
&gt;
&gt; I'm wondering if OMPI is not taking the device transport into account and is *only* using the subnet ID to determine reachability (i.e., I'm wondering if we didn't anticipate multiple devices/ports with the same subnet ID but with different transports). &#160;I pointed this out to Mellanox yesterday; I think they're following up on it.
&gt;
&gt; In the meantime, a workaround might be to set a non-default subnet ID on your IB network. &#160;That should allow Open MPI to tell these networks apart without additional help.
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15788.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>Previous message:</strong> <a href="15786.php">Gus Correa: "Re: [OMPI users] MPI_File_Read_all and large file"</a>
<li><strong>In reply to:</strong> <a href="15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
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
