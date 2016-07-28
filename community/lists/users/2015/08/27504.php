<?
$subject_val = "Re: [OMPI users] Wrong distance calculations in multi-rail setup?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 11:28:47 2015" -->
<!-- isoreceived="20150828152847" -->
<!-- sent="Fri, 28 Aug 2015 15:28:45 +0000" -->
<!-- isosent="20150828152845" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrong distance calculations in multi-rail setup?" -->
<!-- id="90f37db6598a44eab9625b3be95a4231_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55E074D1.1080100_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Wrong distance calculations in multi-rail setup?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 11:28:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27503.php">marcin.krotkiewski: "[OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>In reply to:</strong> <a href="27503.php">marcin.krotkiewski: "[OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Reply:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure why the distances are being computed as you are seeing. I do not have a dual rail card system to reproduce with. However, short term, I think you could get what you want by running like the following.  The first argument tells the selection logic to ignore locality, so both cards will be available to all ranks.  Then, using the application specific notation you can pick the exact port for each rank.
<br>
<p>Something like:
<br>
&nbsp;mpirun -gmca btl_openib_ignore_locality -np 1 --mca btl_openib_if_include mlx4_0:1 a.out : -np 1 --mca btl_openib_if_include mlx4_0:2 a.out : -np 1 --mca btl_openib_if_include mlx4_1:1 a.out : --mca btl_openib_if_include mlx4_1:2 a.out 
<br>
<p>Kind of messy, but that is the general idea.
<br>
<p>Rolf
<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt;marcin.krotkiewski
</span><br>
<span class="quotelev1">&gt;Sent: Friday, August 28, 2015 10:49 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Wrong distance calculations in multi-rail setup?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a 4-socket machine with two dual-port Infiniband cards (devices
</span><br>
<span class="quotelev1">&gt;mlx4_0 and mlx4_1). The cards are conneted to PCI slots of different CPUs (I
</span><br>
<span class="quotelev1">&gt;hope..), both ports are active on both cards, everything connected to the
</span><br>
<span class="quotelev1">&gt;same physical network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I use openmpi-1.10.0 and run the IBM-MPI1 benchmark with 4 MPI ranks
</span><br>
<span class="quotelev1">&gt;bound to the 4 sockets, hoping to use both IB cards (and both ports):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun --map-by socket --bind-to core -np 4 --mca btl openib,self --mca
</span><br>
<span class="quotelev1">&gt;btl_openib_if_include mlx4_0,mlx4_1 ./IMB-MPI1 SendRecv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;but OpenMPI refuses to use the mlx4_1 device
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [node1.local:28265] [rank=0] openib: skipping device mlx4_1; it is too far
</span><br>
<span class="quotelev1">&gt;away
</span><br>
<span class="quotelev1">&gt;     [ the same for other ranks ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is confusing, since I have read that OpenMPI automatically uses a closer
</span><br>
<span class="quotelev1">&gt;HCA, so at least some (&gt;=one) rank should choose mlx4_1. I use binding by
</span><br>
<span class="quotelev1">&gt;socket, here is the reported map:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [node1.local:28263] MCW rank 2 bound to socket 2[core 24[hwt 0]]:
</span><br>
<span class="quotelev1">&gt;[./././././././././././.][./././././././././././.][B/././././././././././.][./././././././././.
</span><br>
<span class="quotelev1">&gt;/./.]
</span><br>
<span class="quotelev1">&gt;     [node1.local:28263] MCW rank 3 bound to socket 3[core 36[hwt 0]]:
</span><br>
<span class="quotelev1">&gt;[./././././././././././.][./././././././././././.][./././././././././././.][B/././././././././.
</span><br>
<span class="quotelev1">&gt;/./.]
</span><br>
<span class="quotelev1">&gt;     [node1.local:28263] MCW rank 0 bound to socket 0[core  0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt;[B/././././././././././.][./././././././././././.][./././././././././././.][./././././././././.
</span><br>
<span class="quotelev1">&gt;/./.]
</span><br>
<span class="quotelev1">&gt;     [node1.local:28263] MCW rank 1 bound to socket 1[core 12[hwt 0]]:
</span><br>
<span class="quotelev1">&gt;[./././././././././././.][B/././././././././././.][./././././././././././.][./././././././././.
</span><br>
<span class="quotelev1">&gt;/./.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To check what's going on I have modified btl_openib_component.c to print
</span><br>
<span class="quotelev1">&gt;the computed distances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         opal_output_verbose(1, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev1">&gt;                             &quot;[rank=%d] openib: device %d/%d distance %lf&quot;,
</span><br>
<span class="quotelev1">&gt;ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev1">&gt;                             (int)i, (int)num_devs, (double)dev_sorted[i].distance);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is what I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     [node1.local:28265] [rank=0] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev1">&gt;     [node1.local:28266] [rank=1] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev1">&gt;     [node1.local:28267] [rank=2] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev1">&gt;     [node1.local:28268] [rank=3] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev1">&gt;     [node1.local:28265] [rank=0] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev1">&gt;     [node1.local:28266] [rank=1] openib: device 1/2 distance 1.000000
</span><br>
<span class="quotelev1">&gt;     [node1.local:28267] [rank=2] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev1">&gt;     [node1.local:28268] [rank=3] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So the computed distance for mlx4_0 is 0 on all ranks. I believe this should not
</span><br>
<span class="quotelev1">&gt;be so. The distance should be smaller on 1 rank and larger for 3 others, as is
</span><br>
<span class="quotelev1">&gt;the case for mlx4_1. Looks like a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Another question is, In my configuration two ranks will have a 'closer'
</span><br>
<span class="quotelev1">&gt;IB card, but two others will not. Since the correct distance to both devices will
</span><br>
<span class="quotelev1">&gt;likely be equal, which device will they choose, if they do that automatically? I'd
</span><br>
<span class="quotelev1">&gt;rather they didn't both choose mlx4_0.. I guess it would be nice if I could by
</span><br>
<span class="quotelev1">&gt;hand specify the device/port, which should be used by a given MPI rank. Is
</span><br>
<span class="quotelev1">&gt;this (going to be) possible with OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks a lot,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/08/27503.php
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Previous message:</strong> <a href="27503.php">marcin.krotkiewski: "[OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>In reply to:</strong> <a href="27503.php">marcin.krotkiewski: "[OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Reply:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
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
