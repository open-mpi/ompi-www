<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 09:53:01 2010" -->
<!-- isoreceived="20101213145301" -->
<!-- sent="Mon, 13 Dec 2010 09:52:56 -0500" -->
<!-- isosent="20101213145256" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="F5D8BA1F-1AA6-401E-8D97-737FBBA5F2B7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="10AB6724-EADD-4D0B-BAF2-049EBCDFCFF0_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 09:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15098.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15098.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See the discussion on kerneltrap:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://kerneltrap.org/Linux/CFS_and_sched_yield">http://kerneltrap.org/Linux/CFS_and_sched_yield</a>
<br>
<p>Looks like the change came in somewhere around 2.6.23 or so...?
<br>
<p><p><p>On Dec 13, 2010, at 9:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Could you at least provide a one-line explanation of that statement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 13, 2010, at 7:31 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also note that recent versions of the Linux kernel have changed what sched_yield() does -- it no longer does essentially what Ralph describes below.  Google around to find those discussions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 9, 2010, at 4:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for delay - am occupied with my day job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, that is correct to an extent. When you yield the processor, all that happens is that you surrender the rest of your scheduled time slice back to the OS. The OS then cycles thru its scheduler and sequentially assigns the processor to the line of waiting processes. Eventually, the OS will cycle back to your process, and you'll begin cranking again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So if no other process wants or needs attention, then yes - it will cycle back around to you pretty quickly. In cases where only system processes are running (besides my MPI ones, of course), then I'll typically see cpu usage drop a few percentage points - down to like 95% - because most system tools are very courteous and call yield is they don't need to do something. If there is something out there that wants time, or is less courteous, then my cpu usage can change a great deal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note, though, that top and ps are -very- coarse measuring tools. You'll probably see them reading more like 100% simply because, averaged out over their sampling periods, nobody else is using enough to measure the difference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 9, 2010, at 1:37 PM, Hicham Mouline wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Behalf Of Eugene Loh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: 08 December 2010 16:19
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] curious behavior during wait for broadcast:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 100% cpu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wouldn't mind some clarification here.  Would CPU usage really
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; decrease, or would other processes simply have an easier time getting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cycles?  My impression of yield was that if there were no one to yield
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to, the &quot;yielding&quot; process would still go hard.  Conversely, turning on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;yield&quot; would still show 100% cpu, but it would be easier for other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes to get time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any clarifications?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Previous message:</strong> <a href="15098.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>In reply to:</strong> <a href="15098.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15100.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
