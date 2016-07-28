<?
$subject_val = "Re: [OMPI users] gadget2 infiniband openmpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 12:45:56 2011" -->
<!-- isoreceived="20110317164556" -->
<!-- sent="Thu, 17 Mar 2011 12:45:32 -0400" -->
<!-- isosent="20110317164532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gadget2 infiniband openmpi hang" -->
<!-- id="C03801DD-A057-4544-A365-F2483687926C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimut16yGwtNCUL4Lzgj5Q1477J6MJ1X7i0uk=S9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] gadget2 infiniband openmpi hang<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 12:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15899.php">vaibhav dutt: "[OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>In reply to:</strong> <a href="15893.php">Craig West: "[OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16036.php">Gretchen: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you able to run if you use --mca btl_openib_cpc_include rdmacm ?
<br>
<p><p>On Mar 17, 2011, at 10:57 AM, Craig West wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm a system administrator trying to help users resolve gadget 2 code hangs doing MPI_Sendrecv (similar to <a href="http://www.open-mpi.org/community/lists/users/2010/05/13057.php">http://www.open-mpi.org/community/lists/users/2010/05/13057.php</a>).
</span><br>
<span class="quotelev1">&gt; I'm trying to determine appropriate values for mpool_rdma_rcache_size_limit for our hardware, and to make sure RDMA settings are appropriate and do not lead to data corruption (<a href="http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2">http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2</a>).
</span><br>
<span class="quotelev1">&gt; The gadget code was running fine under openmpi 1.2.9 and the hangs showed up in 1.4.3 (actually also 1.3.2). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; code runs using tcp (-mca btl tcp,self,sm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; code hangs using infiniband 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; code runs using infiniband with &quot;-mca btl_openib_flags 1&quot; and &quot;-mca mpool_rdma_rcache_size_limit 209715200&quot; (suggestion from poster from the referenced link above)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions would be appreciated.
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gretchen
</span><br>
<span class="quotelev1">&gt; 0. openmpi 1.4.3 (ompi_info attached, config.log is missing but may not be needed as this is a more general usage/settings question)
</span><br>
<span class="quotelev1">&gt; 1. OFED 1.4.2 from git.openfabrics.org
</span><br>
<span class="quotelev1">&gt; 2. Debian 5.0, kernel 2.6.26-2-amd64
</span><br>
<span class="quotelev1">&gt; 3. opensm-3.2.6
</span><br>
<span class="quotelev1">&gt; 4. ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id:    mlx4_0
</span><br>
<span class="quotelev1">&gt;     fw_ver:                2.6.000
</span><br>
<span class="quotelev1">&gt;     node_guid:            0002:c903:0002:848c
</span><br>
<span class="quotelev1">&gt;     sys_image_guid:            0002:c903:0002:848f
</span><br>
<span class="quotelev1">&gt;     vendor_id:            0x02c9
</span><br>
<span class="quotelev1">&gt;     vendor_part_id:            25408
</span><br>
<span class="quotelev1">&gt;     hw_ver:                0xA0
</span><br>
<span class="quotelev1">&gt;     board_id:            MT_04A0130005
</span><br>
<span class="quotelev1">&gt;     phys_port_cnt:            2
</span><br>
<span class="quotelev1">&gt;         port:    1
</span><br>
<span class="quotelev1">&gt;             state:            PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;             max_mtu:        2048 (4)
</span><br>
<span class="quotelev1">&gt;             active_mtu:        2048 (4)
</span><br>
<span class="quotelev1">&gt;             sm_lid:            30
</span><br>
<span class="quotelev1">&gt;             port_lid:        99
</span><br>
<span class="quotelev1">&gt;             port_lmc:        0x00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5. ifconfig
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:UNSPEC  HWaddr 80-00-00-48-FE-80-00-00-00-00-00-00-00-00-00-00  
</span><br>
<span class="quotelev1">&gt;           inet addr:10.16.10.20  Bcast:10.16.10.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::202:c903:2:848d/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1936 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:5 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:256 
</span><br>
<span class="quotelev1">&gt;           RX bytes:189055 (184.6 KiB)  TX bytes:0 (0.0 B)
</span><br>
<span class="quotelev1">&gt; 6. unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15899.php">vaibhav dutt: "[OMPI users] Error in Binding MPI Process to a socket"</a>
<li><strong>Previous message:</strong> <a href="15897.php">Jeff Squyres: "Re: [OMPI users] Potential bug in creating MPI_GROUP_EMPTY handling"</a>
<li><strong>In reply to:</strong> <a href="15893.php">Craig West: "[OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16036.php">Gretchen: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
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
