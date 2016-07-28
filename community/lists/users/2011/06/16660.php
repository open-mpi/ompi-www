<?
$subject_val = "Re: [OMPI users] Regarding OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 23:55:50 2011" -->
<!-- isoreceived="20110602035550" -->
<!-- sent="Thu, 2 Jun 2011 09:25:44 +0530" -->
<!-- isosent="20110602035544" -->
<!-- name="Bhargava Ramu Kavati" -->
<!-- email="ramu.kavati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding OpenMPI" -->
<!-- id="BANLkTimpucRs1tLB1PuGhchEjR4ajJAdLA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F748DE84-F18B-4A3D-B447-7B245BD65F6F_at_cisco.com" -->
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
<strong>From:</strong> Bhargava Ramu Kavati (<em>ramu.kavati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-01 23:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16661.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16659.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16659.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
Thank you for your quick response.
<br>
I have another query, whether OpenMPI depends on Subnet manager/Subnet
<br>
administration components of OFED ? (I mean, does OpenMPI require any
<br>
services from Subnet manager/Subnet administration components in OFED
<br>
without which it cannot run?)
<br>
<p>Thanks &amp; Regards,
<br>
Ramu
<br>
<p>On Wed, Jun 1, 2011 at 6:28 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 1, 2011, at 8:49 AM, Bhargava Ramu Kavati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run MPI applications using OpenMPI in OFED Cluster (over
</span><br>
<span class="quotelev1">&gt; IB).  I am trying to find whether OpenMPI supports a transport interface
</span><br>
<span class="quotelev1">&gt; which is based on libibverbs layer in OFED (I mean, which does not use
</span><br>
<span class="quotelev1">&gt; connection manager in OFED) ?
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
<span class="quotelev1">&gt; For IB, Open MPI can use the RDMA connection manager, but it does not have
</span><br>
<span class="quotelev1">&gt; to.  It defaults to not using it (instead, it exchanges IB/verbs connection
</span><br>
<span class="quotelev1">&gt; data via TCP sockets).
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
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-16660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16661.php">David Zhang: "Re: [OMPI users] Problem with MPI_Intercomm_create"</a>
<li><strong>Previous message:</strong> <a href="16659.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16659.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16662.php">Jeff Squyres: "Re: [OMPI users] Regarding OpenMPI"</a>
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
