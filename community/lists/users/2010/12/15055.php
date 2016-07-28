<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 16:07:48 2010" -->
<!-- isoreceived="20101209210748" -->
<!-- sent="Thu, 9 Dec 2010 14:07:39 -0700" -->
<!-- isosent="20101209210739" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="EF66DE49-1741-4EB0-8951-68C5F6AD5086_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="002501cb97e0$f6e8ee00$e4baca00$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 16:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - am occupied with my day job.
<br>
<p>Yes, that is correct to an extent. When you yield the processor, all that happens is that you surrender the rest of your scheduled time slice back to the OS. The OS then cycles thru its scheduler and sequentially assigns the processor to the line of waiting processes. Eventually, the OS will cycle back to your process, and you'll begin cranking again.
<br>
<p>So if no other process wants or needs attention, then yes - it will cycle back around to you pretty quickly. In cases where only system processes are running (besides my MPI ones, of course), then I'll typically see cpu usage drop a few percentage points - down to like 95% - because most system tools are very courteous and call yield is they don't need to do something. If there is something out there that wants time, or is less courteous, then my cpu usage can change a great deal.
<br>
<p>Note, though, that top and ps are -very- coarse measuring tools. You'll probably see them reading more like 100% simply because, averaged out over their sampling periods, nobody else is using enough to measure the difference.
<br>
<p><p>On Dec 9, 2010, at 1:37 PM, Hicham Mouline wrote:
<br>
<p><span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 08 December 2010 16:19
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] curious behavior during wait for broadcast:
</span><br>
<span class="quotelev2">&gt;&gt; 100% cpu
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wouldn't mind some clarification here.  Would CPU usage really
</span><br>
<span class="quotelev2">&gt;&gt; decrease, or would other processes simply have an easier time getting
</span><br>
<span class="quotelev2">&gt;&gt; cycles?  My impression of yield was that if there were no one to yield
</span><br>
<span class="quotelev2">&gt;&gt; to, the &quot;yielding&quot; process would still go hard.  Conversely, turning on
</span><br>
<span class="quotelev2">&gt;&gt; &quot;yield&quot; would still show 100% cpu, but it would be easier for other
</span><br>
<span class="quotelev2">&gt;&gt; processes to get time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Any clarifications?
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
<li><strong>Next message:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15096.php">Jeff Squyres: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
