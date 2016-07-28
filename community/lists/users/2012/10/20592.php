<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 11:46:45 2012" -->
<!-- isoreceived="20121030154645" -->
<!-- sent="Tue, 30 Oct 2012 15:46:25 +0000" -->
<!-- isosent="20121030154625" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC041272D5_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B610930B-E420-4194-A97C-53E88601D793_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature<br>
<strong>From:</strong> Hodge, Gary C (<em>gary.c.hodge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 11:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20593.php">Aleksej Saushev: "[OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<li><strong>Previous message:</strong> <a href="20591.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>In reply to:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20605.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our measurements are not for the entire mpirun job, rather they are for the time it takes to process a message through our processing pipeline consisting of 11 processes distributed over 8 nodes.  Taking an extra microsecond here and there is better for us than jumping from 3 to 15 ms because this is when we cross a hard real-time limit
<br>
<p>-----Original Message-----
<br>
From: Jeff Squyres [mailto:jsquyres_at_[hidden]] 
<br>
Sent: Tuesday, October 30, 2012 9:57 AM
<br>
To: Hodge, Gary C
<br>
Cc: Mahmood Naderan; Open MPI Users
<br>
Subject: Re: EXTERNAL: Re: [OMPI users] openmpi shared memory feature
<br>
<p>On Oct 30, 2012, at 9:51 AM, Hodge, Gary C wrote:
<br>
<p><span class="quotelev1">&gt; FYI, recently, I was tracking down the source of page faults in our application that has real-time requirements.  I found that disabling the sm component (--mca btl ^sm) eliminated many page faults I was seeing.  
</span><br>
<p>Good point.  This is likely true; the shared memory component will definitely cause more page faults.  Using huge pages may alleviate this (e.g., less TLB usage), but we haven't studied it much.
<br>
<p><span class="quotelev1">&gt; I now have much better deterministic performance in that I no longer see outlier measurements (jobs that usually take 3 ms would sometimes take 15 ms).  
</span><br>
<p>I'm not sure I grok that; are you benchmarking an entire *job* (i.e., a single &quot;mpirun&quot;) that varies between 3 and 15 milliseconds?  If so, I'd say that both are pretty darn good, because mpirun invokes a lot of overhead for launching and completing jobs.  Furthermore, benchmarking an entire job that lasts significantly less than 1 second is probably not the most stable measurement, regardless of page faults or not -- there's lots of other distributed and OS effects that can cause a jump from 3 to 15 milliseconds. 
<br>
<p><span class="quotelev1">&gt; I did not notice a performance penalty using a network stack.
</span><br>
<p>Depends on the app.  Some MPI apps are latency bound; some are not.
<br>
<p>Latency-bound applications will definitely benefit from faster point-to-point performance.  Shared memory will definitely have the fastest point-to-point latency compared to any network stack (i.e., hundreds of nanos vs. 1+ micro).
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
<li><strong>Next message:</strong> <a href="20593.php">Aleksej Saushev: "[OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<li><strong>Previous message:</strong> <a href="20591.php">Jeff Squyres: "Re: [OMPI users] error from MPI_Allgather"</a>
<li><strong>In reply to:</strong> <a href="20590.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20605.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
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
