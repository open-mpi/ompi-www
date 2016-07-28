<?
$subject_val = "[OMPI users] OpenMPI with openib partitions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 17:23:38 2008" -->
<!-- isoreceived="20081003212338" -->
<!-- sent="Fri, 3 Oct 2008 17:23:33 -0400" -->
<!-- isosent="20081003212333" -->
<!-- name="Matt Burgess" -->
<!-- email="burgess.matt_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with openib partitions" -->
<!-- id="a2f40f560810031423o32132c45nefa06047760a6851_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with openib partitions<br>
<strong>From:</strong> Matt Burgess (<em>burgess.matt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 17:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6852.php">Daniel Hansen: "[OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>I'm trying to get openmpi working over openib partitions. On this cluster,
<br>
the partition number is 0x109. The ib interfaces are pingable over the
<br>
appropriate ib0.8109 interface:
<br>
<p>d2:/opt/openmpi-ib # ifconfig ib0.8109
<br>
ib0.8109  Link encap:UNSPEC  HWaddr
<br>
80-00-00-4A-FE-80-00-00-00-00-00-00-00-00-00-00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.21.48.2  Bcast:10.21.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c902:26:ca01/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:16811 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:15848 errors:0 dropped:1 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:102229428 (97.4 Mb)  TX bytes:102324172 (97.5 Mb)
<br>
<p><p>I have tried the following:
<br>
<p>/opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
<br>
openib,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
<br>
-mca btl_openib_ib_pkey_ix 1 /cluster/pallas/x86_64-ib/IMB-MPI1
<br>
<p>but I just get a RETRY EXCEEDED ERROR. Is there a MCA parameter I am
<br>
missing?
<br>
<p>I was successful using tcp only:
<br>
<p>/opt/openmpi-ib/1.2.6/bin/mpirun -np 2 -machinefile machinefile -mca btl
<br>
tcp,self -mca btl_openib_max_btls 1 -mca btl_openib_ib_pkey_val 0x8109
<br>
/cluster/pallas/x86_64-ib/IMB-MPI1
<br>
<p><p><p>Thanks,
<br>
Matt Burgess
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6854.php">Daniel Hansen: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6852.php">Daniel Hansen: "[OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6861.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI with openib partitions"</a>
<li><strong>Reply:</strong> <a href="6875.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI with openib partitions"</a>
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
