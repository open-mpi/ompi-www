<?
$subject_val = "Re: [OMPI users] Help with multirail configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 11:01:03 2014" -->
<!-- isoreceived="20140721150103" -->
<!-- sent="Mon, 21 Jul 2014 08:01:01 -0700" -->
<!-- isosent="20140721150101" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with multirail configuration" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36046F8526D_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53CBEF58.7000200_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with multirail configuration<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-21 11:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>In reply to:</strong> <a href="24827.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Reply:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With Open MPI 1.8.1, the library will use the NIC that is &quot;closest&quot; to the CPU. There was a bug in earlier versions of Open MPI 1.8 so that did not happen.  You can see this by running with some verbosity using the &quot;btl_base_verbose&quot; flag.  For example, this is what I observed on a two node cluster with two NICs on each node.
<br>
<p>[rvandevaart_at_ivy0] $ mpirun --mca btl_base_verbose 1 -host ivy0,ivy1 -np 4 --mca pml ob1 --mca btl_openib_warn_default_gid_prefix 0 MPI_Alltoall_c
<br>
[ivy0.nvidia.com:28896] [rank=0] openib: using device mlx5_0
<br>
[ivy0.nvidia.com:28896] [rank=0] openib: skipping device mlx5_1; it is too far away
<br>
[ivy0.nvidia.com:28897] [rank=1] openib: using device mlx5_1
<br>
[ivy0.nvidia.com:28897] [rank=1] openib: skipping device mlx5_0; it is too far away
<br>
[ivy1.nvidia.com:04652] [rank=2] openib: using device mlx5_0
<br>
[ivy1.nvidia.com:04652] [rank=2] openib: skipping device mlx5_1; it is too far away
<br>
[ivy1.nvidia.com:04653] [rank=3] openib: using device mlx5_1
<br>
[ivy1.nvidia.com:04653] [rank=3] openib: skipping device mlx5_0; it is too far away
<br>
<p>So, maybe the right thing is happening by default?  Or you are looking for more fine-grained control?
<br>
<p>Rolf
<br>
________________________________________
<br>
From: users [users-bounces_at_[hidden]] On Behalf Of Tobias Kloeffel [tobias.kloeffel_at_[hidden]]
<br>
Sent: Sunday, July 20, 2014 12:33 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Help with multirail configuration
<br>
<p>I found no option in 1.6.5 and 1.8.1...
<br>
<p><p>Am 7/20/2014 6:29 PM, schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt; What version of OMPI are you talking about?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 20, 2014, at 9:11 AM, Tobias Kloeffel &lt;tobias.kloeffel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to get the maximum performance out of my two node testing setup. Each node consists of 4 Sandy Bridge CPUs and each CPU has one directly attached Mellanox QDR card. Both nodes are connected via a 8-port Mellanox switch.
</span><br>
<span class="quotelev2">&gt;&gt; So far I found no option that allows binding mpi-ranks to a specific card, as it is available in MVAPICH2. Is there a way to change the round robin behavior of openMPI?
</span><br>
<span class="quotelev2">&gt;&gt; Maybe something like &quot;btl_tcp_if_seq&quot; that I have missed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tobias
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24822.php">http://www.open-mpi.org/community/lists/users/2014/07/24822.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24825.php">http://www.open-mpi.org/community/lists/users/2014/07/24825.php</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24827.php">http://www.open-mpi.org/community/lists/users/2014/07/24827.php</a>
<br>
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
<li><strong>Next message:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Previous message:</strong> <a href="24835.php">Shamis, Pavel: "Re: [OMPI users] Errors for openib, mpirun fails"</a>
<li><strong>In reply to:</strong> <a href="24827.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
<li><strong>Reply:</strong> <a href="24837.php">Tobias Kloeffel: "Re: [OMPI users] Help with multirail configuration"</a>
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
