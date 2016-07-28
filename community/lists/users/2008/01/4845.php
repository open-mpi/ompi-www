<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 15:07:46 2008" -->
<!-- isoreceived="20080116200746" -->
<!-- sent="Wed, 16 Jan 2008 15:07:37 -0500 (EST)" -->
<!-- isosent="20080116200737" -->
<!-- name="M D Jones" -->
<!-- email="jonesm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="Pine.LNX.4.64.0801161506020.32737_at_mail.ccr.buffalo.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3879-89574_at_sneakemail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mixed myrinet/non-myrinet nodes<br>
<strong>From:</strong> M D Jones (<em>jonesm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-16 15:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>Previous message:</strong> <a href="4844.php">Brock Palen: "[OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>In reply to:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 16 Jan 2008, 8mj6tc902_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mixed myrinet/non-myrinet nodes
</span><br>
<span class="quotelev2">&gt;&gt; From: M D Jones (jonesm_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-01-15 14:07:19
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, that is the way that I expected it to work as well -
</span><br>
<span class="quotelev2">&gt;&gt; we see the warnings also, but closely followed by the
</span><br>
<span class="quotelev2">&gt;&gt; errors (I've been trying both 1.2.5 and a recent 1.3
</span><br>
<span class="quotelev2">&gt;&gt; snapshot with the same behavior). You don't have the
</span><br>
<span class="quotelev2">&gt;&gt; mx driver loaded on the nodes that do not have a myrinet
</span><br>
<span class="quotelev2">&gt;&gt; card, do you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, the driver isn't &quot;loaded&quot; (ie: the kernel module isn't loaded),
</span><br>
<span class="quotelev1">&gt; but the library (libmyriexpress.so) is available. If that library isn't
</span><br>
<span class="quotelev1">&gt; available, OpenMPI will probably fail when it tries to call the mx
</span><br>
<span class="quotelev1">&gt; functions (even if only to find there's no myrinet card available).
</span><br>
<p>Yeah, that is much better - not having the mx software available on
<br>
the non-myrinet nodes was the main problem.
<br>
<p>Matt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>Previous message:</strong> <a href="4844.php">Brock Palen: "[OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>In reply to:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
