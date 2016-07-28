<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 14:07:28 2008" -->
<!-- isoreceived="20080115190728" -->
<!-- sent="Tue, 15 Jan 2008 14:07:19 -0500 (EST)" -->
<!-- isosent="20080115190719" -->
<!-- name="M D Jones" -->
<!-- email="jonesm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="Pine.LNX.4.64.0801151359580.29293_at_mail.ccr.buffalo.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3354-20942_at_sneakemail.com" -->
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
<strong>Date:</strong> 2008-01-15 14:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4839.php">Aurélien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, that is the way that I expected it to work as well -
<br>
we see the warnings also, but closely followed by the
<br>
errors (I've been trying both 1.2.5 and a recent 1.3
<br>
snapshot with the same behavior).  You don't have the
<br>
mx driver loaded on the nodes that do not have a myrinet
<br>
card, do you?  Our mx is a touch behind yours (1.2.3),
<br>
but I agree that it appears to be something in the process
<br>
startup that is at fault, so it doesn't seem likely that
<br>
the mx version is to blame (perhaps just the fact that it
<br>
is not installed on those nodes?).
<br>
<p>Matt
<br>
<p><p>On Wed, 16 Jan 2008, 8mj6tc902_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; We also have a mixed myrinet/ip cluster, and maybe I'm missing some
</span><br>
<span class="quotelev1">&gt; nuance of your configuration, but openmpi seems to work fine for me &quot;as
</span><br>
<span class="quotelev1">&gt; is&quot; with no --mca options across mixed nodes (there's a bunch of
</span><br>
<span class="quotelev1">&gt; warnings at the beginning where the non-mx nodes realize they don't have
</span><br>
<span class="quotelev1">&gt; myrinet cards and the mx nodes realize they can't talk mx to the non-mx
</span><br>
<span class="quotelev1">&gt; nodes, but everything completes fine, so I assumed OpenMPI was working
</span><br>
<span class="quotelev1">&gt; things out the transport details on it's own (and was quite pleased
</span><br>
<span class="quotelev1">&gt; about that)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just did a quick test to confirm that it is in fact still using mx in
</span><br>
<span class="quotelev1">&gt; that situation, and it is. I'm running OpenMPI 1.2.4 and MX 1.2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds to me based on those &quot;PML add procs failed&quot; messages that
</span><br>
<span class="quotelev1">&gt; OpenMPI is dying on start up on the non-mx nodes unless you explicitly
</span><br>
<span class="quotelev1">&gt; disable mx at runtime (perhaps because they're expecting the mx library
</span><br>
<span class="quotelev1">&gt; to be there, but it's not?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-request-at-open-mpi.org |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 15 Jan 2008 10:25:00 -0500 (EST)
</span><br>
<span class="quotelev2">&gt;&gt; From: M D Jones &lt;jonesm_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mixed myrinet/non-myrinet nodes
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;Pine.LNX.4.64.0801151018430.18528_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: TEXT/PLAIN; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, that combination seems to hang on me - but
</span><br>
<span class="quotelev2">&gt;&gt; '--mca pml ob1 --mca btl ^mx' does indeed do the trick.
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 15 Jan 2008, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This case actually works. We run into it few days ago, when we discovered
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that one of the compute nodes in a cluster didn't get his Myrinet card
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed properly ... The performance were horrible but the application run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to completion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You will have to use the following flags: --mca pml ob1 --mca btl mx,tcp,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4839.php">Aurélien Bouteiller: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>In reply to:</strong> <a href="4837.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
