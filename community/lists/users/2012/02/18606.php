<?
$subject_val = "Re: [OMPI users] Very slow MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 12:59:27 2012" -->
<!-- isoreceived="20120229175927" -->
<!-- sent="Wed, 29 Feb 2012 12:59:19 -0500" -->
<!-- isosent="20120229175919" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Very slow MPI_GATHER" -->
<!-- id="5426DC37-47A2-4913-A1F2-4B9448616467_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2584DBFDF8544E4B85B0E40F35707F7502354E83_at_hnomb01.corp.atmel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Very slow MPI_GATHER<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 12:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18607.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18605.php">Jeffrey Squyres: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18599.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18611.php">Jingcha Joba: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2012, at 11:01 AM, Pinero, Pedro_jose wrote:
<br>
<p><span class="quotelev1">&gt; I am using OMPI v.1.5.5 to communicate 200 Processes in a 2-Computers cluster connected though Ethernet, obtaining a very poor performance.
</span><br>
<p>Let me making sure I'm parsing this statement properly: are you launching 200 MPI processes on 2 computers?  If so, do those computers each have 100 cores?
<br>
<p>I ask because oversubscribing MPI processes (i.e., putting more than 1 process per core) will be disastrous to performance.
<br>
<p><span class="quotelev1">&gt; I have measured each operation time and I haver realised that the MPI_Gather operation takes about 1 second in each synchronization (only an integer is send in each case). Is this time range normal or I have a synchronization problem?  Is there any way to improve this performance?
</span><br>
<p>I'm afraid I can't say more without more information about your hardware and software setup.  Is this a dedicated HPC cluster?  Are you oversubscribing the cores?  What kind of Ethernet switching gear do you have?  ...etc.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18607.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18605.php">Jeffrey Squyres: "Re: [OMPI users] Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18599.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18611.php">Jingcha Joba: "Re: [OMPI users] Very slow MPI_GATHER"</a>
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
