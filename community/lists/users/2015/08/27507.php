<?
$subject_val = "Re: [OMPI users] Wrong distance calculations in multi-rail setup?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 15:55:28 2015" -->
<!-- isoreceived="20150828195528" -->
<!-- sent="Fri, 28 Aug 2015 19:00:14 +0000" -->
<!-- isosent="20150828190014" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Wrong distance calculations in multi-rail setup?" -->
<!-- id="fc21d797700942f180155e2634a8b50c_at_HQMAIL101.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55E08888.1090209_at_gmail.com" -->
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
<strong>Date:</strong> 2015-08-28 15:00:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Previous message:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>In reply to:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me send you a patch off list that will print out some extra information to see if we can figure out where things are going wrong.
<br>
We basically depend on the information reported by hwloc so the patch will print out some extra information to see if we are getting good data from hwloc.
<br>
<p>Thanks,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Marcin
</span><br>
<span class="quotelev1">&gt;Krotkiewski
</span><br>
<span class="quotelev1">&gt;Sent: Friday, August 28, 2015 12:13 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Wrong distance calculations in multi-rail setup?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brilliant! Thank you, Rolf. This works: all ranks have reported using the
</span><br>
<span class="quotelev1">&gt;expected port number, and performance is twice of what I was observing
</span><br>
<span class="quotelev1">&gt;before :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I can certainly live with this workaround, but I will be happy to do some
</span><br>
<span class="quotelev1">&gt;debugging to find the problem. If you tell me what is needed / where I can
</span><br>
<span class="quotelev1">&gt;look, I could help to find the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks a lot!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On 08/28/2015 05:28 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure why the distances are being computed as you are seeing. I do
</span><br>
<span class="quotelev1">&gt;not have a dual rail card system to reproduce with. However, short term, I
</span><br>
<span class="quotelev1">&gt;think you could get what you want by running like the following.  The first
</span><br>
<span class="quotelev1">&gt;argument tells the selection logic to ignore locality, so both cards will be
</span><br>
<span class="quotelev1">&gt;available to all ranks.  Then, using the application specific notation you can pick
</span><br>
<span class="quotelev1">&gt;the exact port for each rank.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Something like:
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun -gmca btl_openib_ignore_locality -np 1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_if_include mlx4_0:1 a.out : -np 1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_if_include mlx4_0:2 a.out : -np 1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_if_include mlx4_1:1 a.out : --mca btl_openib_if_include
</span><br>
<span class="quotelev2">&gt;&gt; mlx4_1:2 a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind of messy, but that is the general idea.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; marcin.krotkiewski
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, August 28, 2015 10:49 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] Wrong distance calculations in multi-rail setup?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a 4-socket machine with two dual-port Infiniband cards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (devices
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mlx4_0 and mlx4_1). The cards are conneted to PCI slots of different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPUs (I hope..), both ports are active on both cards, everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connected to the same physical network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use openmpi-1.10.0 and run the IBM-MPI1 benchmark with 4 MPI ranks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bound to the 4 sockets, hoping to use both IB cards (and both ports):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      mpirun --map-by socket --bind-to core -np 4 --mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib,self --mca btl_openib_if_include mlx4_0,mlx4_1 ./IMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SendRecv
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but OpenMPI refuses to use the mlx4_1 device
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28265] [rank=0] openib: skipping device mlx4_1; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is too far away
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [ the same for other ranks ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is confusing, since I have read that OpenMPI automatically uses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a closer HCA, so at least some (&gt;=one) rank should choose mlx4_1. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use binding by socket, here is the reported map:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28263] MCW rank 2 bound to socket 2[core 24[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;[./././././././././././.][./././././././././././.][B/././././././././././.][./././././././././.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28263] MCW rank 3 bound to socket 3[core 36[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;[./././././././././././.][./././././././././././.][./././././././././././.][B/././././././././.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28263] MCW rank 0 bound to socket 0[core  0[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;[B/././././././././././.][./././././././././././.][./././././././././././.][./././././././././.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28263] MCW rank 1 bound to socket 1[core 12[hwt 0]]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;[./././././././././././.][B/././././././././././.][./././././././././././.][./././././././././.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /./.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To check what's going on I have modified btl_openib_component.c to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; print the computed distances.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          opal_output_verbose(1,
</span><br>
<span class="quotelev1">&gt;ompi_btl_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              &quot;[rank=%d] openib: device %d/%d distance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; %lf&quot;, ORTE_PROC_MY_NAME-&gt;vpid,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              (int)i, (int)num_devs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (double)dev_sorted[i].distance);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is what I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28265] [rank=0] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28266] [rank=1] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28267] [rank=2] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28268] [rank=3] openib: device 0/2 distance 0.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28265] [rank=0] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28266] [rank=1] openib: device 1/2 distance 1.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28267] [rank=2] openib: device 1/2 distance 2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      [node1.local:28268] [rank=3] openib: device 1/2 distance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the computed distance for mlx4_0 is 0 on all ranks. I believe this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should not be so. The distance should be smaller on 1 rank and larger
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for 3 others, as is the case for mlx4_1. Looks like a bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another question is, In my configuration two ranks will have a 'closer'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IB card, but two others will not. Since the correct distance to both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devices will likely be equal, which device will they choose, if they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do that automatically? I'd rather they didn't both choose mlx4_0.. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guess it would be nice if I could by hand specify the device/port,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which should be used by a given MPI rank. Is this (going to be) possible
</span><br>
<span class="quotelev1">&gt;with OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org/community/lists/users/2015/08/27503.php
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27504.php">http://www.open-mpi.org/community/lists/users/2015/08/27504.php</a>
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/08/27505.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27508.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>Previous message:</strong> <a href="27506.php">Roy Stogner: "Re: [OMPI users] MPI_LB in a recursive type"</a>
<li><strong>In reply to:</strong> <a href="27505.php">Marcin Krotkiewski: "Re: [OMPI users] Wrong distance calculations in multi-rail setup?"</a>
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
