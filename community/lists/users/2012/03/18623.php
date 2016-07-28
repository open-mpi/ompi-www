<?
$subject_val = "Re: [OMPI users] Very slow MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 04:27:39 2012" -->
<!-- isoreceived="20120301092739" -->
<!-- sent="Thu, 1 Mar 2012 02:27:31 -0700" -->
<!-- isosent="20120301092731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Very slow MPI_GATHER" -->
<!-- id="71AB9C3E-0586-4604-AB55-3D2B34A31E98_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2584DBFDF8544E4B85B0E40F35707F7502354EF6_at_hnomb01.corp.atmel.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 04:27:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format errorI"</a>
<li><strong>Previous message:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18620.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18625.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - with that heavy an oversubscription, your performance experience certainly is reasonable. Not much you can do about it except reduce the oversubscription, either by increasing the number of computers or reducing the number of processes.
<br>
<p><p>On Mar 1, 2012, at 1:33 AM, Pinero, Pedro_jose wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your fast response.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am launching 200 light processes in two computers with 8 cores each one (Intel i7 processor). They are dedicated and are interconnected through a point-to-point Gigabit Ethernet link.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I read about oversubscribing nodes in the open-mpi documentation, and for that reason I am using the option
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    Mca mpi_yield_when_idle 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pedro
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Feb 29, 2012, at 11:01 AM, Pinero, Pedro_jose wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am using OMPI v.1.5.5 to communicate 200 Processes in a 2-Computers cluster connected though Ethernet, obtaining a very poor performance.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;Let me making sure I'm parsing this statement properly: are you launching 200 MPI processes on 2 computers?  If so, do &gt;those computers each have 100 cores?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;I ask because oversubscribing MPI processes (i.e., putting more than 1 process per core) will be disastrous to &gt;performance.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have measured each operation time and I haver realised that the MPI_Gather operation takes about 1 second in each &gt;&gt;synchronization (only an integer is send in each case). Is this time range normal or I have a synchronization &gt;&gt;problem?  Is there any way to improve this performance?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;I'm afraid I can't say more without more information about your hardware and software setup.  Is this a dedicated HPC &gt;cluster?  Are you oversubscribing the cores?  What kind of Ethernet switching gear do you have?  ...etc.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-18623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18624.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format errorI"</a>
<li><strong>Previous message:</strong> <a href="18622.php">Ralph Castain: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18620.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18625.php">Jeffrey Squyres: "Re: [OMPI users] Very slow MPI_GATHER"</a>
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
