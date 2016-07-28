<?
$subject_val = "Re: [OMPI users] Very slow MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 03:33:53 2012" -->
<!-- isoreceived="20120301083353" -->
<!-- sent="Thu, 1 Mar 2012 09:33:30 +0100" -->
<!-- isosent="20120301083330" -->
<!-- name="Pinero, Pedro_jose" -->
<!-- email="Pedro_jose.Pinero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Very slow MPI_GATHER" -->
<!-- id="2584DBFDF8544E4B85B0E40F35707F7502354EF6_at_hnomb01.corp.atmel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Very slow MPI_GATHER" -->
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
<strong>From:</strong> Pinero, Pedro_jose (<em>Pedro_jose.Pinero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 03:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18621.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18619.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2012/02/18588.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18625.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your fast response.
<br>
<p>&nbsp;
<br>
<p>I am launching 200 light processes in two computers with 8 cores each
<br>
one (Intel i7 processor). They are dedicated and are interconnected
<br>
through a point-to-point Gigabit Ethernet link.
<br>
<p>&nbsp;
<br>
<p>I read about oversubscribing nodes in the open-mpi documentation, and
<br>
for that reason I am using the option 
<br>
<p>&nbsp;
<br>
<p>-    Mca mpi_yield_when_idle 1
<br>
<p>&nbsp;
<br>
<p>Regards
<br>
<p>&nbsp;
<br>
<p>Pedro
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><span class="quotelev2">&gt;&gt;On Feb 29, 2012, at 11:01 AM, Pinero, Pedro_jose wrote:
</span><br>
<p>&nbsp;
<br>
<p><span class="quotelev2">&gt;&gt; I am using OMPI v.1.5.5 to communicate 200 Processes in a 2-Computers
</span><br>
cluster connected though Ethernet, obtaining a very poor performance.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;Let me making sure I'm parsing this statement properly: are you
</span><br>
launching 200 MPI processes on 2 computers?  If so, do &gt;those computers
<br>
each have 100 cores?
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;I ask because oversubscribing MPI processes (i.e., putting more than 1
</span><br>
process per core) will be disastrous to &gt;performance.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev2">&gt;&gt; I have measured each operation time and I haver realised that the
</span><br>
MPI_Gather operation takes about 1 second in each &gt;&gt;synchronization
<br>
(only an integer is send in each case). Is this time range normal or I
<br>
have a synchronization &gt;&gt;problem?  Is there any way to improve this
<br>
performance?
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;I'm afraid I can't say more without more information about your
</span><br>
hardware and software setup.  Is this a dedicated HPC &gt;cluster?  Are you
<br>
oversubscribing the cores?  What kind of Ethernet switching gear do you
<br>
have?  ...etc.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;-- 
</span><br>
<p><span class="quotelev1">&gt;Jeff Squyres
</span><br>
<p><span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-18620/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18621.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18619.php">PukkiMonkey: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2012/02/18588.php">Pinero, Pedro_jose: "[OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18623.php">Ralph Castain: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<li><strong>Reply:</strong> <a href="18625.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
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
