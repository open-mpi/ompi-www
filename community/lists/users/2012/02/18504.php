<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 07:17:57 2012" -->
<!-- isoreceived="20120216121757" -->
<!-- sent="Thu, 16 Feb 2012 11:05:54 +0000" -->
<!-- isosent="20120216110554" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="871upvm419.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3C551B.5010808_at_uw.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with gridengine integration on RHEL 6<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 06:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian McNally &lt;bmcnally_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked through the INSTALL, VERSION, NEWS, and README files in the
</span><br>
<span class="quotelev1">&gt; 1.5.4 openmpi tarball but didn't see what you were referring to.
</span><br>
<p>I can't access the web site, but there's an item in the notes on the
<br>
download page about the bug.  It must also be in the mail archive in a
<br>
thread with me included.
<br>
<p><span class="quotelev1">&gt; Are
</span><br>
<span class="quotelev1">&gt; you suggesting that I launch mpirun similar to this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -mca plm ^rshd ...?
</span><br>
<p>Yes, or put it in openmpi-mca-params.conf.  It's harmless with 1.4.
<br>
<p><span class="quotelev1">&gt; What I meant by &quot;the same parallel environment setup&quot; was that the PE
</span><br>
<span class="quotelev1">&gt; in SGE was defined the same way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt; slots              9999
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even though I have RHEL 5 and RHEL 6 nodes in the same cluster they
</span><br>
<span class="quotelev1">&gt; never run the same MPI job; it's always either all RHEL 5 nodes or all
</span><br>
<span class="quotelev1">&gt; RHEL 6.
</span><br>
<p>OK.  (I'd expect a separate PE for each node set to enforce that.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18505.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>Previous message:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18503.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18520.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
