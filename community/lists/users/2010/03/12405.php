<?
$subject_val = "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 11:34:39 2010" -->
<!-- isoreceived="20100323153439" -->
<!-- sent="Tue, 23 Mar 2010 12:34:34 -0300" -->
<!-- isosent="20100323153434" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI" -->
<!-- id="9108753b1003230834w31da614co86b51f6ff08651a6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="958403f51003230827od0ffbc2w35a07926df39adb2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 11:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>In reply to:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12408.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 23, 2010 at 12:27 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have created the shared file system. but I created a /mirror at root
</span><br>
<span class="quotelev1">&gt; directory,not at the $HOME directory,is that the
</span><br>
<span class="quotelev1">&gt; problem? thank you
</span><br>
<p>Others might be able to give you more a accurate explanation. The way
<br>
I understood it, in OpenMPI 1.4, you need to write all checkpoints to
<br>
a single, shared location. That's why you generally want a shared file
<br>
system.
<br>
<p>Now I'm pretty sure you can change the directory to which the
<br>
checkpoints are written. If you $HOME isn't a shared directory, you
<br>
can point OpenMPI to write the checkpoints to the shared directory
<br>
instead.
<br>
<p>In OpenMPI 1.5 (unstable), some magic allows you to create the
<br>
checkpoints and restore them without a shared directory.
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12406.php">Fernando Lemos: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Previous message:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>In reply to:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Reply:</strong> <a href="12408.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
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
