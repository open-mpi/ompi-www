<?
$subject_val = "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 11:37:33 2010" -->
<!-- isoreceived="20100323153733" -->
<!-- sent="Tue, 23 Mar 2010 12:37:27 -0300" -->
<!-- isosent="20100323153727" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters" -->
<!-- id="9108753b1003230837w7774d0d7m47a4b1a7a3296b71_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="958403f51003230824l209a525ct8ddf6e0ec00fb9f1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 11:37:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12402.php">fengguang tian: "[OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Reply:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 23, 2010 at 12:24 PM, fengguang tian &lt;fernyabc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using open-mpi and blcr in a cluster of 3 machines, and the checkpoint
</span><br>
<span class="quotelev1">&gt; and restart work fine in single machine,but when doing checkpoint in
</span><br>
<span class="quotelev1">&gt; clusters environment, the ompi-checkpoint hangs
</span><br>
<p>Besdies what has been said in another thread (regarding 1.4 and
<br>
checkpointing to shared directories), you might want to make sure your
<br>
app is terminated if you send a SIGTERM to it. Some apps might ignore
<br>
SIGTERM or handle it in a way that does not cause the apps to quit.
<br>
<p>ompi-checkpoint --term is simply ompi-checkpoint + sending SIGTERM to
<br>
the application (not sure whether SIGTERM is sent to each process
<br>
individually or not).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12407.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12402.php">fengguang tian: "[OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>Reply:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
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
