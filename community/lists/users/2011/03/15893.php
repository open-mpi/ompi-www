<?
$subject_val = "[OMPI users] gadget2 infiniband openmpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:58:04 2011" -->
<!-- isoreceived="20110317145804" -->
<!-- sent="Thu, 17 Mar 2011 10:57:55 -0400" -->
<!-- isosent="20110317145755" -->
<!-- name="Craig West" -->
<!-- email="umassastrohpcc_at_[hidden]" -->
<!-- subject="[OMPI users] gadget2 infiniband openmpi hang" -->
<!-- id="AANLkTimut16yGwtNCUL4Lzgj5Q1477J6MJ1X7i0uk=S9_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] gadget2 infiniband openmpi hang<br>
<strong>From:</strong> Craig West (<em>umassastrohpcc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 10:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="15892.php">hi: "[OMPI users] Comparison among OpenMPI, MPICH2 and MSPICH on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>Reply:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>Maybe reply:</strong> <a href="16036.php">Gretchen: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm a system administrator trying to help users resolve gadget 2 code hangs
<br>
doing MPI_Sendrecv (similar to
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/05/13057.php">http://www.open-mpi.org/community/lists/users/2010/05/13057.php</a>).
<br>
I'm trying to determine appropriate values for mpool_rdma_rcache_size_limit
<br>
for our hardware, and to make sure RDMA settings are appropriate and do not
<br>
lead to data corruption (
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2">http://www.open-mpi.org/faq/?category=openfabrics#setting-mpi-leave-pinned-1.3.2</a>
<br>
).
<br>
The gadget code was running fine under openmpi 1.2.9 and the hangs showed up
<br>
in 1.4.3 (actually also 1.3.2).
<br>
<p>code runs using tcp (-mca btl tcp,self,sm)
<br>
<p>code hangs using infiniband
<br>
<p>code runs using infiniband with &quot;-mca btl_openib_flags 1&quot; and &quot;-mca
<br>
mpool_rdma_rcache_size_limit 209715200&quot; (suggestion from poster from the
<br>
referenced link above)
<br>
<p>Any suggestions would be appreciated.
<br>
Regards,
<br>
Gretchen
<br>
0. openmpi 1.4.3 (ompi_info attached, config.log is missing but may not be
<br>
needed as this is a more general usage/settings question)
<br>
1. OFED 1.4.2 from git.openfabrics.org
<br>
2. Debian 5.0, kernel 2.6.26-2-amd64
<br>
3. opensm-3.2.6
<br>
4. ibv_devinfo
<br>
hca_id:    mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                2.6.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node_guid:            0002:c903:0002:848c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:            0002:c903:0002:848f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:            0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:            25408
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;board_id:            MT_04A0130005
<br>
&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:            2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:            PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:        2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:            30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:        99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:        0x00
<br>
<p>5. ifconfig
<br>
ib0       Link encap:UNSPEC  HWaddr
<br>
80-00-00-48-FE-80-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.16.10.20  Bcast:10.16.10.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c903:2:848d/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1936 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:0 errors:0 dropped:5 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:189055 (184.6 KiB)  TX bytes:0 (0.0 B)
<br>
6. unlimited
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15893/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15894.php">Jeff Squyres: "Re: [OMPI users] Segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="15892.php">hi: "[OMPI users] Comparison among OpenMPI, MPICH2 and MSPICH on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>Reply:</strong> <a href="15898.php">Jeff Squyres: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<li><strong>Maybe reply:</strong> <a href="16036.php">Gretchen: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
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
