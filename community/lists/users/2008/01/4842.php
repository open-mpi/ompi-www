<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 02:20:59 2008" -->
<!-- isoreceived="20080116072059" -->
<!-- sent="Wed, 16 Jan 2008 16:20:50 +0900" -->
<!-- isosent="20080116072050" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="3879-89574_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="478CF743.1040107_at_dna.bio.keio.ac.jp" -->
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
<strong>From:</strong> <a href="mailto:8mj6tc902_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mixed%20myrinet/non-myrinet%20nodes"><em>8mj6tc902_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-01-16 02:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4843.php">Roland Albrecht: "[OMPI users] Communications Problems when application distributed over different nodes"</a>
<li><strong>Previous message:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Maybe in reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mixed myrinet/non-myrinet nodes
</span><br>
<span class="quotelev1">&gt; From: M D Jones (jonesm_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2008-01-15 14:07:19
</span><br>
<span class="quotelev1">&gt; Hmm, that is the way that I expected it to work as well -
</span><br>
<span class="quotelev1">&gt; we see the warnings also, but closely followed by the
</span><br>
<span class="quotelev1">&gt; errors (I've been trying both 1.2.5 and a recent 1.3
</span><br>
<span class="quotelev1">&gt; snapshot with the same behavior). You don't have the
</span><br>
<span class="quotelev1">&gt; mx driver loaded on the nodes that do not have a myrinet
</span><br>
<span class="quotelev1">&gt; card, do you?
</span><br>
<p>Well, the driver isn't &quot;loaded&quot; (ie: the kernel module isn't loaded),
<br>
but the library (libmyriexpress.so) is available. If that library isn't
<br>
available, OpenMPI will probably fail when it tries to call the mx
<br>
functions (even if only to find there's no myrinet card available).
<br>
<p><span class="quotelev1">&gt; Our mx is a touch behind yours (1.2.3),
</span><br>
<span class="quotelev1">&gt; but I agree that it appears to be something in the process
</span><br>
<span class="quotelev1">&gt; startup that is at fault, so it doesn't seem likely that
</span><br>
<span class="quotelev1">&gt; the mx version is to blame (perhaps just the fact that it
</span><br>
<span class="quotelev1">&gt; is not installed on those nodes?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 16 Jan 2008, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We also have a mixed myrinet/ip cluster, and maybe I'm missing some
</span><br>
<span class="quotelev2">&gt;&gt; nuance of your configuration, but openmpi seems to work fine for me &quot;as
</span><br>
<span class="quotelev2">&gt;&gt; is&quot; with no --mca options across mixed nodes (there's a bunch of
</span><br>
<span class="quotelev2">&gt;&gt; warnings at the beginning where the non-mx nodes realize they don't have
</span><br>
<span class="quotelev2">&gt;&gt; myrinet cards and the mx nodes realize they can't talk mx to the non-mx
</span><br>
<span class="quotelev2">&gt;&gt; nodes, but everything completes fine, so I assumed OpenMPI was working
</span><br>
<span class="quotelev2">&gt;&gt; things out the transport details on it's own (and was quite pleased
</span><br>
<span class="quotelev2">&gt;&gt; about that)).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just did a quick test to confirm that it is in fact still using mx in
</span><br>
<span class="quotelev2">&gt;&gt; that situation, and it is. I'm running OpenMPI 1.2.4 and MX 1.2.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds to me based on those &quot;PML add procs failed&quot; messages that
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI is dying on start up on the non-mx nodes unless you explicitly
</span><br>
<span class="quotelev2">&gt;&gt; disable mx at runtime (perhaps because they're expecting the mx library
</span><br>
<span class="quotelev2">&gt;&gt; to be there, but it's not?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users-request-at-open-mpi.org |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 15 Jan 2008 10:25:00 -0500 (EST)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: M D Jones &lt;jonesm_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] mixed myrinet/non-myrinet nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;Pine.LNX.4.64.0801151018430.18528_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: TEXT/PLAIN; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm, that combination seems to hang on me - but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--mca pml ob1 --mca btl ^mx' does indeed do the trick.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 15 Jan 2008, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This case actually works. We run into it few days ago, when we discovered
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that one of the compute nodes in a cluster didn't get his Myrinet card
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed properly ... The performance were horrible but the application run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to completion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You will have to use the following flags: --mca pml ob1 --mca btl mx,tcp,self
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<p><p><pre>
-- 
--Kris
叶ってしまう瘢雹夢は本当の夢と言えん。
[A dream that comes true can't really be called a dream.]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4843.php">Roland Albrecht: "[OMPI users] Communications Problems when application distributed over different nodes"</a>
<li><strong>Previous message:</strong> <a href="4841.php">Barry Rountree: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Maybe in reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4845.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
