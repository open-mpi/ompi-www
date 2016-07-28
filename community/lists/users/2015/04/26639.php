<?
$subject_val = "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 13:38:56 2015" -->
<!-- isoreceived="20150407173856" -->
<!-- sent="Wed, 8 Apr 2015 00:38:42 +0700" -->
<!-- isosent="20150407173842" -->
<!-- name="Abdul Rahman Riza" -->
<!-- email="tenth.avatar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)" -->
<!-- id="CAGtbyJ57zJ=4Etsz6TQpdmKXCFPSHpkDi-20c_rbYjp+Emk=iw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)<br>
<strong>From:</strong> Abdul Rahman Riza (<em>tenth.avatar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 13:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26640.php">Abdul Rahman Riza: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26638.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26614.php">Filippo Spiga: "[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
how to unsubscribe?
<br>
<p>On Mon, Apr 6, 2015 at 4:45 PM, Filippo Spiga &lt;spiga.filippo_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if there is a way to address this particular scenario using MPI_T
</span><br>
<span class="quotelev1">&gt; or other strategies in Open MPI. I saw a similar discussion few days ago, I
</span><br>
<span class="quotelev1">&gt; assume the same challenges are applied in this case but I just want to
</span><br>
<span class="quotelev1">&gt; check. Here is the scenario:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a system composed by dual rail Mellanox IB, two distinct
</span><br>
<span class="quotelev1">&gt; Connect-IB cards per node each one sitting on a different PCI-E lane out of
</span><br>
<span class="quotelev1">&gt; two distinct sockets. We are seeking a way to control MPI traffic thought
</span><br>
<span class="quotelev1">&gt; each one of them directly into the application. In specific we have a
</span><br>
<span class="quotelev1">&gt; single MPI rank per node that goes multi-threading using OpenMP.
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE is used, each OpenMP thread may initiate MPI
</span><br>
<span class="quotelev1">&gt; communication. We would like to assign IB-0 to thread 0 and IB-1 to thread
</span><br>
<span class="quotelev1">&gt; 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via mpirun or env variables we can control which IB interface to use by
</span><br>
<span class="quotelev1">&gt; binding it to a specific MPI rank (or by apply a policy that relate IB to
</span><br>
<span class="quotelev1">&gt; MPi ranks). But if there is only one MPI rank active, how we can
</span><br>
<span class="quotelev1">&gt; differentiate the traffic across multiple IB cards?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any suggestion about this matter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Filippo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt; <a href="http://filippospiga.info">http://filippospiga.info</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#171;Nobody will drive us out of Cantor's paradise.&#194;&#187; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt; Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL
</span><br>
<span class="quotelev1">&gt; and may be privileged or otherwise protected from disclosure. The contents
</span><br>
<span class="quotelev1">&gt; are not to be disclosed to anyone other than the addressee. Unauthorized
</span><br>
<span class="quotelev1">&gt; recipients are requested to preserve this confidentiality and to advise the
</span><br>
<span class="quotelev1">&gt; sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26614.php">http://www.open-mpi.org/community/lists/users/2015/04/26614.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26640.php">Abdul Rahman Riza: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26638.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26614.php">Filippo Spiga: "[OMPI users] Different HCA from different OpenMP threads (same rank using MPI_THREAD_MULTIPLE)"</a>
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
