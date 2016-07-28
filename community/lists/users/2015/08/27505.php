<?
$subject_val = "Re: [OMPI users] Wrong distance calculations in multi-rail setup?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 12:12:59 2015" -->
<!-- isoreceived="20150828161259" -->
<!-- sent="Fri, 28 Aug 2015 18:12:56 +0200" -->
<!-- isosent="20150828161256" -->
<!-- name="Marcin Krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrong distance calculations in multi-rail setup?" -->
<!-- id="55E08888.1090209_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="90f37db6598a44eab9625b3be95a4231_at_HQMAIL102.nvidia.com" -->
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
<strong>From:</strong> Marcin Krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 12:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Previous message:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>In reply to:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Reply:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brilliant! Thank you, Rolf. This works: all ranks have reported using 
<br>
the expected port number, and performance is twice of what I was 
<br>
observing before :)
<br>
<p>I can certainly live with this workaround, but I will be happy to do 
<br>
some debugging to find the problem. If you tell me what is needed / 
<br>
where I can look, I could help to find the issue.
<br>
<p>Thanks a lot!
<br>
<p>Marcin
<br>
<p><p>On 08/28/2015 05:28 PM, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; I am not sure why the distances are being computed as you are seeing. I do not have a dual rail card system to reproduce with. However, short term, I think you could get what you want by running like the following.  The first argument tells the selection logic to ignore locality, so both cards will be available to all ranks.  Then, using the application specific notation you can pick the exact port for each rank.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something like:
</span><br>
<span class="quotelev1">&gt;   mpirun -gmca btl_openib_ignore_locality -np 1 --mca btl_openib_if_include mlx4_0:1 a.out : -np 1 --mca btl_openib_if_include mlx4_0:2 a.out : -np 1 --mca btl_openib_if_include mlx4_1:1 a.out : --mca btl_openib_if_include mlx4_1:2 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind of messy, but that is the general idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev2">&gt;&gt; marcin.krotkiewski
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, August 28, 2015 10:49 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Wrong distance calculations in multi-rail setup?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a 4-socket machine with two dual-port Infiniband cards (devices
</span><br>
<span class="quotelev2">&gt;&gt; mlx4_0 and mlx4_1). The cards are conneted to PCI slots of different CPUs (I
</span><br>
<span class="quotelev2">&gt;&gt; hope..), both ports are active on both cards, everything connected to the
</span><br>
<span class="quotelev2">&gt;&gt; same physical network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use openmpi-1.10.0 and run the IBM-MPI1 benchmark with 4 MPI ranks
</span><br>
<span class="quotelev2">&gt;&gt; bound to the 4 sockets, hoping to use both IB cards (and both ports):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      mpirun --map-by socket --bind-to core -np 4 --mca btl openib,self --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_if_include mlx4_0,mlx4_1 ./IMB-MPI1 SendRecv
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but OpenMPI refuses to use the mlx4_1 device
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28265] [rank=0] openib: skipping device mlx4_1; it is too far
</span><br>
<span class="quotelev2">&gt;&gt; away
</span><br>
<span class="quotelev2">&gt;&gt;      [ the same for other ranks ]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is confusing, since I have read that OpenMPI automatically uses a closer
</span><br>
<span class="quotelev2">&gt;&gt; HCA, so at least some (&gt;=one) rank should choose mlx4_1. I use binding by
</span><br>
<span class="quotelev2">&gt;&gt; socket, here is the reported map:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28263] MCW rank 2 bound to socket 2[core 24[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././././././.][./././././././././././.][B/././././././././././.][./././././././././.
</span><br>
<span class="quotelev2">&gt;&gt; /./.]
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28263] MCW rank 3 bound to socket 3[core 36[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././././././.][./././././././././././.][./././././././././././.][B/././././././././.
</span><br>
<span class="quotelev2">&gt;&gt; /./.]
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28263] MCW rank 0 bound to socket 0[core  0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [B/././././././././././.][./././././././././././.][./././././././././././.][./././././././././.
</span><br>
<span class="quotelev2">&gt;&gt; /./.]
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28263] MCW rank 1 bound to socket 1[core 12[hwt 0]]:
</span><br>
<span class="quotelev2">&gt;&gt; [./././././././././././.][B/././././././././././.][./././././././././././.][./././././././././.
</span><br>
<span class="quotelev2">&gt;&gt; /./.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To check what's going on I have modified btl_openib_component.c to print
</span><br>
<span class="quotelev2">&gt;&gt; the computed distances.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          opal_output_verbose(1, ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt;                              &quot;[rank=%d] openib: device %d/%d distance %lf&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev2">&gt;&gt;                              (int)i, (int)num_devs, (double)dev_sorted[i].distance);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is what I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28265] [rank=0] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28266] [rank=1] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28267] [rank=2] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28268] [rank=3] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28265] [rank=0] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28266] [rank=1] openib: device 1/2 distance 1.000000
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28267] [rank=2] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev2">&gt;&gt;      [node1.local:28268] [rank=3] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the computed distance for mlx4_0 is 0 on all ranks. I believe this should not
</span><br>
<span class="quotelev2">&gt;&gt; be so. The distance should be smaller on 1 rank and larger for 3 others, as is
</span><br>
<span class="quotelev2">&gt;&gt; the case for mlx4_1. Looks like a bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another question is, In my configuration two ranks will have a 'closer'
</span><br>
<span class="quotelev2">&gt;&gt; IB card, but two others will not. Since the correct distance to both devices will
</span><br>
<span class="quotelev2">&gt;&gt; likely be equal, which device will they choose, if they do that automatically? I'd
</span><br>
<span class="quotelev2">&gt;&gt; rather they didn't both choose mlx4_0.. I guess it would be nice if I could by
</span><br>
<span class="quotelev2">&gt;&gt; hand specify the device/port, which should be used by a given MPI rank. Is
</span><br>
<span class="quotelev2">&gt;&gt; this (going to be) possible with OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/users/2015/08/27503.php
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27504.php">http://www.open-mpi.org/community/lists/users/2015/08/27504.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Previous message:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>In reply to:</strong> <a href="27504.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<li><strong>Reply:</strong> <a href="27507.php">Rolf vandeVaart: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
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
