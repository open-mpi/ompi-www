<?
$subject_val = "Re: [OMPI users] Regarding OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 08:58:41 2011" -->
<!-- isoreceived="20110601125841" -->
<!-- sent="Wed, 1 Jun 2011 08:58:36 -0400" -->
<!-- isosent="20110601125836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding OpenMPI" -->
<!-- id="F748DE84-F18B-4A3D-B447-7B245BD65F6F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=1pN+uL8qgHS9zePnATqYv4uacBg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-01 08:58:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16658.php">Bhargava Ramu Kavati: "[OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16658.php">Bhargava Ramu Kavati: "[OMPI users] Regarding OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2011, at 8:49 AM, Bhargava Ramu Kavati wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to run MPI applications using OpenMPI in OFED Cluster (over IB).  I am trying to find whether OpenMPI supports a transport interface which is based on libibverbs layer in OFED (I mean, which does not use connection manager in OFED) ?
</span><br>
<p>You're asking two different questions.
<br>
<p>1. Does Open MPI use the native verbs interface in OFED?
<br>
<p>Yes.
<br>
<p>2. Does Open MPI use one of the OFED connection managers?
<br>
<p>For IB, Open MPI can use the RDMA connection manager, but it does not have to.  It defaults to not using it (instead, it exchanges IB/verbs connection data via TCP sockets).
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16658.php">Bhargava Ramu Kavati: "[OMPI users] Regarding OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16658.php">Bhargava Ramu Kavati: "[OMPI users] Regarding OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
<li><strong>Reply:</strong> <a href="16660.php">Bhargava Ramu Kavati: "Re: [OMPI users] Regarding OpenMPI"</a>
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
