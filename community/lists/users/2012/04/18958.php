<?
$subject_val = "Re: [OMPI users] sge tight intregration leads to bad allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 14:59:00 2012" -->
<!-- isoreceived="20120405185900" -->
<!-- sent="Thu, 5 Apr 2012 20:58:47 +0200" -->
<!-- isosent="20120405185847" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sge tight intregration leads to bad allocation" -->
<!-- id="77B2A78C-10F7-4441-9B62-927C278E6076_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="zarafa.4f7dcf1d.5fc8.35285ab8422ed6c8_at_mail.fft" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 14:58:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18959.php">Anton Morgan: "[OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 05.04.2012 um 18:58 schrieb Eloi Gaudry:
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: jeudi 5 avril 2012 18:41
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] sge tight intregration leads to bad allocation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 05.04.2012 um 17:55 schrieb Eloi Gaudry:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are the allocation info retrieved from `qstat -g t` for the related job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For me the output of `qstat -g t` shows MASTER and SLAVE entries but no variables. Is there any wrapper defined for `qstat` to reformat the output (or a ~/.sge_qstat defined)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [eg: ] sorry, i forgot about sge_qstat being defined. As I don't have any slot available right now, I cannot relaunch the job to get the output updated.
</span><br>
<span class="quotelev2">&gt;&gt; Reuti, here is the output you asked two days ago.
</span><br>
<span class="quotelev2">&gt;&gt; It was produced with another &quot;bad&quot; run for which 3 processes are running on nodes charlie and carl... but we should have only 2 processes on carl and 4 on charlie...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is indeed strange, as it first detects the correct allocation. And it conforms to the one granted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - You used a plain `mpiexec` without and number of processes or machinesfile?
</span><br>
<span class="quotelev1">&gt; [eg: ] I'm using orterun and i'm ony providing the number of process. Shouldn't I ?
</span><br>
<p>With a tight integration it should work without specifying the number of ranks. But OTOH it shouldn't hurt if it's given.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; - Can you please post while it's running the relevant lines from:
</span><br>
<span class="quotelev1">&gt; ps -e f --cols=500
</span><br>
<span class="quotelev1">&gt; (f w/o -) from both machines.
</span><br>
<span class="quotelev1">&gt; It's allocated between the nodes more like in a round-robin fashion.
</span><br>
<span class="quotelev1">&gt; [eg: ] I'll try to do this tomorrow, as soon as some slots become free. Thanks for your feedback Reuti, I appreciate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18959.php">Anton Morgan: "[OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18957.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Reply:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
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
