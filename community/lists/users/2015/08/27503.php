<?
$subject_val = "[OMPI users] Wrong distance calculations in multi-rail setup?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 10:48:51 2015" -->
<!-- isoreceived="20150828144851" -->
<!-- sent="Fri, 28 Aug 2015 16:48:49 +0200" -->
<!-- isosent="20150828144849" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="[OMPI users] Wrong distance calculations in multi-rail setup?" -->
<!-- id="55E074D1.1080100_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Wrong distance calculations in multi-rail setup?<br>
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 10:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Reply:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a 4-socket machine with two dual-port Infiniband cards (devices 
<br>
mlx4_0 and mlx4_1). The cards are conneted to PCI slots of different 
<br>
CPUs (I hope..), both ports are active on both cards, everything 
<br>
connected to the same physical network.
<br>
<p>I use openmpi-1.10.0 and run the IBM-MPI1 benchmark with 4 MPI ranks 
<br>
bound to the 4 sockets, hoping to use both IB cards (and both ports):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --map-by socket --bind-to core -np 4 --mca btl openib,self 
<br>
--mca btl_openib_if_include mlx4_0,mlx4_1 ./IMB-MPI1 SendRecv
<br>
<p>but OpenMPI refuses to use the mlx4_1 device
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28265] [rank=0] openib: skipping device mlx4_1; it is 
<br>
too far away
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ the same for other ranks ]
<br>
<p>This is confusing, since I have read that OpenMPI automatically uses a 
<br>
closer HCA, so at least some (&gt;=one) rank should choose mlx4_1. I use 
<br>
binding by socket, here is the reported map:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28263] MCW rank 2 bound to socket 2[core 24[hwt 0]]: 
<br>
[./././././././././././.][./././././././././././.][B/././././././././././.][./././././././././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28263] MCW rank 3 bound to socket 3[core 36[hwt 0]]: 
<br>
[./././././././././././.][./././././././././././.][./././././././././././.][B/././././././././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28263] MCW rank 0 bound to socket 0[core  0[hwt 0]]: 
<br>
[B/././././././././././.][./././././././././././.][./././././././././././.][./././././././././././.]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28263] MCW rank 1 bound to socket 1[core 12[hwt 0]]: 
<br>
[./././././././././././.][B/././././././././././.][./././././././././././.][./././././././././././.]
<br>
<p>To check what's going on I have modified btl_openib_component.c to print 
<br>
the computed distances.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(1, ompi_btl_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;[rank=%d] openib: device %d/%d distance %lf&quot;,
<br>
ORTE_PROC_MY_NAME-&gt;vpid,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(int)i, (int)num_devs,
<br>
(double)dev_sorted[i].distance);
<br>
<p>Here is what I get:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28265] [rank=0] openib: device 0/2 distance 0.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28266] [rank=1] openib: device 0/2 distance 0.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28267] [rank=2] openib: device 0/2 distance 0.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28268] [rank=3] openib: device 0/2 distance 0.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28265] [rank=0] openib: device 1/2 distance 2.100000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28266] [rank=1] openib: device 1/2 distance 1.000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28267] [rank=2] openib: device 1/2 distance 2.100000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[node1.local:28268] [rank=3] openib: device 1/2 distance 2.100000
<br>
<p>So the computed distance for mlx4_0 is 0 on all ranks. I believe this 
<br>
should not be so. The distance should be smaller on 1 rank and larger 
<br>
for 3 others, as is the case for mlx4_1. Looks like a bug?
<br>
<p>Another question is, In my configuration two ranks will have a 'closer' 
<br>
IB card, but two others will not. Since the correct distance to both 
<br>
devices will likely be equal, which device will they choose, if they do 
<br>
that automatically? I'd rather they didn't both choose mlx4_0.. I guess 
<br>
it would be nice if I could by hand specify the device/port, which 
<br>
should be used by a given MPI rank. Is this (going to be) possible with 
<br>
OpenMPI?
<br>
<p>Thanks a lot,
<br>
<p>Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27502.php">George Bosilca: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Reply:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
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
