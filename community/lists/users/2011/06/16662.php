<?
$subject_val = "Re: [OMPI users] Regarding OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 06:28:27 2011" -->
<!-- isoreceived="20110602102827" -->
<!-- sent="Thu, 2 Jun 2011 06:28:16 -0400" -->
<!-- isosent="20110602102816" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding OpenMPI" -->
<!-- id="B5F5A5C2-709E-4609-A447-C17EBA10FF80_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimpucRs1tLB1PuGhchEjR4ajJAdLA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-02 06:28:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16663.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16661.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not directly, but your IB network will not run without a subnet manager having been run at least once.
<br>
<p>It's been a few years since I've been an IB vendor, but whenever you bring a new IB port online (e.g., if a server reboots) it has to check in with the subnet manager before it will be brought into the active state.  Most sites tend to run their IB subnet manager on one of their login nodes for the cluster and just leave it running.
<br>
<p><p>On Jun 1, 2011, at 11:55 PM, Bhargava Ramu Kavati wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; Thank you for your quick response.
</span><br>
<span class="quotelev1">&gt; I have another query, whether OpenMPI depends on Subnet manager/Subnet administration components of OFED ? (I mean, does OpenMPI require any services from Subnet manager/Subnet administration components in OFED without which it cannot run?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; Ramu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 1, 2011 at 6:28 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Jun 1, 2011, at 8:49 AM, Bhargava Ramu Kavati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run MPI applications using OpenMPI in OFED Cluster (over IB).  I am trying to find whether OpenMPI supports a transport interface which is based on libibverbs layer in OFED (I mean, which does not use connection manager in OFED) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're asking two different questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Does Open MPI use the native verbs interface in OFED?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Does Open MPI use one of the OFED connection managers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For IB, Open MPI can use the RDMA connection manager, but it does not have to.  It defaults to not using it (instead, it exchanges IB/verbs connection data via TCP sockets).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16663.php">Jeff Squyres: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="16661.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>In reply to:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
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
