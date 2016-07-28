<?
$subject_val = "Re: [OMPI users] mixed myrinet/non-myrinet nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 13:11:24 2008" -->
<!-- isoreceived="20080115181124" -->
<!-- sent="Wed, 16 Jan 2008 03:11:15 +0900" -->
<!-- isosent="20080115181115" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixed myrinet/non-myrinet nodes" -->
<!-- id="3354-20942_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="mailman.19.1200416413.510.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-01-15 13:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We also have a mixed myrinet/ip cluster, and maybe I'm missing some
<br>
nuance of your configuration, but openmpi seems to work fine for me &quot;as
<br>
is&quot; with no --mca options across mixed nodes (there's a bunch of
<br>
warnings at the beginning where the non-mx nodes realize they don't have
<br>
myrinet cards and the mx nodes realize they can't talk mx to the non-mx
<br>
nodes, but everything completes fine, so I assumed OpenMPI was working
<br>
things out the transport details on it's own (and was quite pleased
<br>
about that)).
<br>
<p>I just did a quick test to confirm that it is in fact still using mx in
<br>
that situation, and it is. I'm running OpenMPI 1.2.4 and MX 1.2.3.
<br>
<p>It sounds to me based on those &quot;PML add procs failed&quot; messages that
<br>
OpenMPI is dying on start up on the non-mx nodes unless you explicitly
<br>
disable mx at runtime (perhaps because they're expecting the mx library
<br>
to be there, but it's not?)
<br>
<p>users-request-at-open-mpi.org |openmpi-users/Allow| wrote:
<br>
<span class="quotelev1">&gt; Date: Tue, 15 Jan 2008 10:25:00 -0500 (EST)
</span><br>
<span class="quotelev1">&gt; From: M D Jones &lt;jonesm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mixed myrinet/non-myrinet nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;Pine.LNX.4.64.0801151018430.18528_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: TEXT/PLAIN; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm, that combination seems to hang on me - but
</span><br>
<span class="quotelev1">&gt; '--mca pml ob1 --mca btl ^mx' does indeed do the trick.
</span><br>
<span class="quotelev1">&gt; Many thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 15 Jan 2008, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This case actually works. We run into it few days ago, when we discovered 
</span><br>
<span class="quotelev2">&gt;&gt; that one of the compute nodes in a cluster didn't get his Myrinet card 
</span><br>
<span class="quotelev2">&gt;&gt; installed properly ... The performance were horrible but the application run 
</span><br>
<span class="quotelev2">&gt;&gt; to completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You will have to use the following flags: --mca pml ob1 --mca btl mx,tcp,self
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
<li><strong>Next message:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4836.php">Patrick Geoffray: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="4832.php">M Jones: "[OMPI users] mixed myrinet/non-myrinet nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Reply:</strong> <a href="4838.php">M D Jones: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
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
