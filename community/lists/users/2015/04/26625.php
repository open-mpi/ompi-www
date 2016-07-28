<?
$subject_val = "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 17:37:31 2015" -->
<!-- isoreceived="20150406213731" -->
<!-- sent="Mon, 6 Apr 2015 14:37:27 -0700" -->
<!-- isosent="20150406213727" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)" -->
<!-- id="B25DCE80-78B7-4A08-925A-E4F4C1930B54_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1bb803c87ad64319b13aecf22821e6c7_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 17:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26626.php">Ray Sheppard: "[OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>Previous message:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>In reply to:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#226;&#128;&#153;m afraid Rolf is correct. We can only define the binding pattern at time of initial process execution, which is well before you start spinning up individual threads. At that point, we no longer have the ability to do binding.
<br>
<p>That said, you can certainly have your application specify a thread-level binding. You&#226;&#128;&#153;d have to do the heavy lifting yourself in the app, I&#226;&#128;&#153;m afraid, instead of relying on us to do it for you.
<br>
<p><p><span class="quotelev1">&gt; On Apr 6, 2015, at 2:24 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is my belief that you cannot do this at least with the openib BTL.  The IB card to be used for communication is selected during the MPI _Init() phase based on where the CPU process is bound to.  You can see some of this selection by using the --mca btl_base_verbose 1 flag.  There is a bunch of output (which I have deleted), but you will see a few lines like this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ivy5] [rank=1] openib: using port mlx5_0:1
</span><br>
<span class="quotelev1">&gt; [ivy5] [rank=1] openib: using port mlx5_0:2
</span><br>
<span class="quotelev1">&gt; [ivy4] [rank=0] openib: using port mlx5_0:1
</span><br>
<span class="quotelev1">&gt; [ivy4] [rank=0] openib: using port mlx5_0:2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And if you have multiple NICs, you may also see some messages like this:
</span><br>
<span class="quotelev1">&gt; &quot;[rank=%d] openib: skipping device %s; it is too far away&quot;
</span><br>
<span class="quotelev1">&gt; (This was lifted from the  code. I do not have a configuration right now where I can generate the second message.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I cannot see how we can make this specific to a thread.  Maybe others have a different opinion.
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, April 06, 2015 5:46 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Mohammed Sourouri
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Different HCA from different OpenMP threads (same
</span><br>
<span class="quotelev2">&gt;&gt; rank using MPI_THREAD_MULTIPLE)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if there is a way to address this particular scenario using MPI_T or
</span><br>
<span class="quotelev2">&gt;&gt; other strategies in Open MPI. I saw a similar discussion few days ago, I assume
</span><br>
<span class="quotelev2">&gt;&gt; the same challenges are applied in this case but I just want to check. Here is
</span><br>
<span class="quotelev2">&gt;&gt; the scenario:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have a system composed by dual rail Mellanox IB, two distinct Connect-IB
</span><br>
<span class="quotelev2">&gt;&gt; cards per node each one sitting on a different PCI-E lane out of two distinct
</span><br>
<span class="quotelev2">&gt;&gt; sockets. We are seeking a way to control MPI traffic thought each one of
</span><br>
<span class="quotelev2">&gt;&gt; them directly into the application. In specific we have a single MPI rank per
</span><br>
<span class="quotelev2">&gt;&gt; node that goes multi-threading using OpenMP. MPI_THREAD_MULTIPLE is
</span><br>
<span class="quotelev2">&gt;&gt; used, each OpenMP thread may initiate MPI communication. We would like to
</span><br>
<span class="quotelev2">&gt;&gt; assign IB-0 to thread 0 and IB-1 to thread 1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Via mpirun or env variables we can control which IB interface to use by binding
</span><br>
<span class="quotelev2">&gt;&gt; it to a specific MPI rank (or by apply a policy that relate IB to MPi ranks). But if
</span><br>
<span class="quotelev2">&gt;&gt; there is only one MPI rank active, how we can differentiate the traffic across
</span><br>
<span class="quotelev2">&gt;&gt; multiple IB cards?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any suggestion about this matter.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Filippo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *****
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev2">&gt;&gt; CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
</span><br>
<span class="quotelev2">&gt;&gt; The contents are not to be disclosed to anyone other than the addressee.
</span><br>
<span class="quotelev2">&gt;&gt; Unauthorized recipients are requested to preserve this confidentiality and to
</span><br>
<span class="quotelev2">&gt;&gt; advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/users/2015/04/26614.php
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26624.php">http://www.open-mpi.org/community/lists/users/2015/04/26624.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26626.php">Ray Sheppard: "[OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>Previous message:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>In reply to:</strong> <a href="26624.php">Rolf vandeVaart: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
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
