<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 12:58:11 2012" -->
<!-- isoreceived="20120405165811" -->
<!-- sent="Thu, 5 Apr 2012 18:58:05 +0200" -->
<!-- isosent="20120405165805" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="zarafa.4f7dcf1d.5fc8.35285ab8422ed6c8_at_mail.fft" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F4345CC9-69FE-4A30-9A63-EA278A23EFC2_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] sge tight intregration leads to bad allocation<br>
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 12:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
<br>
Sent: jeudi 5 avril 2012 18:41
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] sge tight intregration leads to bad allocation
<br>
<p>Am 05.04.2012 um 17:55 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here are the allocation info retrieved from `qstat -g t` for the related job:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For me the output of `qstat -g t` shows MASTER and SLAVE entries but no variables. Is there any wrapper defined for `qstat` to reformat the output (or a ~/.sge_qstat defined)?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [eg: ] sorry, i forgot about sge_qstat being defined. As I don't have any slot available right now, I cannot relaunch the job to get the output updated.
</span><br>
<span class="quotelev1">&gt; Reuti, here is the output you asked two days ago.
</span><br>
<span class="quotelev1">&gt; It was produced with another &quot;bad&quot; run for which 3 processes are running on nodes charlie and carl... but we should have only 2 processes on carl and 4 on charlie...
</span><br>
<p>This is indeed strange, as it first detects the correct allocation. And it conforms to the one granted.
<br>
<p>- You used a plain `mpiexec` without and number of processes or machinesfile?
<br>
[eg: ] I'm using orterun and i'm ony providing the number of process. Shouldn't I ?
<br>
<p>- Can you please post while it's running the relevant lines from:
<br>
ps -e f --cols=500
<br>
(f w/o -) from both machines.
<br>
It's allocated between the nodes more like in a round-robin fashion.
<br>
[eg: ] I'll try to do this tomorrow, as soon as some slots become free. Thanks for your feedback Reuti, I appreciate.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18956.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
