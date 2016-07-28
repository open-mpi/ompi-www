<?
$subject_val = "Re: [OMPI users] Different HCA from different OpenMP threads (same	rank	using MPI_THREAD_MULTIPLE)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 10:50:13 2015" -->
<!-- isoreceived="20150407145013" -->
<!-- sent="Tue, 7 Apr 2015 14:50:12 +0000" -->
<!-- isosent="20150407145012" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different HCA from different OpenMP threads (same	rank	using MPI_THREAD_MULTIPLE)" -->
<!-- id="bd3bc2c8fdb84c0ea453b6f20c08252a_at_HQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DA4B351A-0C5C-48AD-A4E6-950880102DFC_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different HCA from different OpenMP threads (same	rank	using MPI_THREAD_MULTIPLE)<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 10:50:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26637.php">Hamidreza Anvari: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26635.php">Howard Pritchard: "Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php"</a>
<li><strong>In reply to:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26640.php">Abdul Rahman Riza: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I still do not believe there is a way for you to steer your traffic based on the thread that is calling into Open MPI. While you can spawn your own threads, Open MPI is going to figure out what interfaces to use based on the characteristics of the process during MPI_Init.  Even if Open MPI decides to use two interfaces, the use of these will be done based on the process.  It will alternate between them independent of which thread happens to be doing the sends or receives.  There is no way of doing this with something like MPI_T_cvar_write which I think is what you were looking for.
<br>

<br>
Rolf  
<br>

<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, April 07, 2015 5:46 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Different HCA from different OpenMP threads
</span><br>
<span class="quotelev1">&gt;(same rank using MPI_THREAD_MULTIPLE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks Rolf and Ralph for the replies!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Apr 6, 2015, at 10:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That said, you can certainly have your application specify a thread-level
</span><br>
<span class="quotelev1">&gt;binding. You&#226;&#128;&#153;d have to do the heavy lifting yourself in the app, I&#226;&#128;&#153;m afraid,
</span><br>
<span class="quotelev1">&gt;instead of relying on us to do it for you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ok, my application must do it and I am fine with it. But how? I mean, does
</span><br>
<span class="quotelev1">&gt;Open MPi expose some API that allows such fine grain control?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;F
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt;<a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
</span><br>

<br>

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
<li><strong>Next message:</strong> <a href="26637.php">Hamidreza Anvari: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26635.php">Howard Pritchard: "Re: [OMPI users] http://www.open-mpi.org/doc/current/man3/MPI_Win_lock_all.3.php"</a>
<li><strong>In reply to:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26640.php">Abdul Rahman Riza: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
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
