<?
$subject_val = "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 17:24:17 2015" -->
<!-- isoreceived="20150406212417" -->
<!-- sent="Mon, 6 Apr 2015 21:24:14 +0000" -->
<!-- isosent="20150406212414" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)" -->
<!-- id="1bb803c87ad64319b13aecf22821e6c7_at_HQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9D3DDC7B-1261-4F6F-99C0-A621C5D2C18C_at_gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 17:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26625.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26623.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26614.php">Filippo Spiga: "[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26625.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26625.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is my belief that you cannot do this at least with the openib BTL.  The IB card to be used for communication is selected during the MPI _Init() phase based on where the CPU process is bound to.  You can see some of this selection by using the --mca btl_base_verbose 1 flag.  There is a bunch of output (which I have deleted), but you will see a few lines like this.
<br>

<br>
[ivy5] [rank=1] openib: using port mlx5_0:1
<br>
[ivy5] [rank=1] openib: using port mlx5_0:2
<br>
[ivy4] [rank=0] openib: using port mlx5_0:1
<br>
[ivy4] [rank=0] openib: using port mlx5_0:2
<br>

<br>
And if you have multiple NICs, you may also see some messages like this:
<br>
&nbsp;&quot;[rank=%d] openib: skipping device %s; it is too far away&quot;
<br>
(This was lifted from the  code. I do not have a configuration right now where I can generate the second message.)
<br>

<br>
I cannot see how we can make this specific to a thread.  Maybe others have a different opinion.
<br>
Rolf
<br>

<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev1">&gt;Sent: Monday, April 06, 2015 5:46 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Cc: Mohammed Sourouri
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Different HCA from different OpenMP threads (same
</span><br>
<span class="quotelev1">&gt;rank using MPI_THREAD_MULTIPLE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I wonder if there is a way to address this particular scenario using MPI_T or
</span><br>
<span class="quotelev1">&gt;other strategies in Open MPI. I saw a similar discussion few days ago, I assume
</span><br>
<span class="quotelev1">&gt;the same challenges are applied in this case but I just want to check. Here is
</span><br>
<span class="quotelev1">&gt;the scenario:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We have a system composed by dual rail Mellanox IB, two distinct Connect-IB
</span><br>
<span class="quotelev1">&gt;cards per node each one sitting on a different PCI-E lane out of two distinct
</span><br>
<span class="quotelev1">&gt;sockets. We are seeking a way to control MPI traffic thought each one of
</span><br>
<span class="quotelev1">&gt;them directly into the application. In specific we have a single MPI rank per
</span><br>
<span class="quotelev1">&gt;node that goes multi-threading using OpenMP. MPI_THREAD_MULTIPLE is
</span><br>
<span class="quotelev1">&gt;used, each OpenMP thread may initiate MPI communication. We would like to
</span><br>
<span class="quotelev1">&gt;assign IB-0 to thread 0 and IB-1 to thread 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Via mpirun or env variables we can control which IB interface to use by binding
</span><br>
<span class="quotelev1">&gt;it to a specific MPI rank (or by apply a policy that relate IB to MPi ranks). But if
</span><br>
<span class="quotelev1">&gt;there is only one MPI rank active, how we can differentiate the traffic across
</span><br>
<span class="quotelev1">&gt;multiple IB cards?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks in advance for any suggestion about this matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regards,
</span><br>
<span class="quotelev1">&gt;Filippo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt;<a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*****
</span><br>
<span class="quotelev1">&gt;Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev1">&gt;CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
</span><br>
<span class="quotelev1">&gt;The contents are not to be disclosed to anyone other than the addressee.
</span><br>
<span class="quotelev1">&gt;Unauthorized recipients are requested to preserve this confidentiality and to
</span><br>
<span class="quotelev1">&gt;advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/04/26614.php
</span><br>

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
<li><strong>Next message:</strong> <a href="26625.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26623.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26614.php">Filippo Spiga: "[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26625.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Reply:</strong> <a href="26625.php">Ralph Castain: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
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
