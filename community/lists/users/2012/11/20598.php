<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 11:24:40 2012" -->
<!-- isoreceived="20121101152440" -->
<!-- sent="Thu, 01 Nov 2012 15:24:16 +0000" -->
<!-- isosent="20121101152416" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC0412743B_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3672D9A3-057C-472F-B260-7E28147960B6_at_icl.utk.edu" -->
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
<strong>From:</strong> Hodge, Gary C (<em>gary.c.hodge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-01 11:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20599.php">J R Jones: "[OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20597.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20594.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20610.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20610.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>We move 40K and 160K size messages from process to process on the same node.  Our app does mlock(MCL_CURRENT | MCL_FUTURE) before MPI_INIT.
<br>
I measure the page faults using getrusage and record when they increase. I observe increasing ru_minflt values and no ru_majflt increase.
<br>
Increased values reported are 40, 80, or 120; our page size is 4K.  The page reclaims/faults are checked after MPI receive processing,
<br>
after our application processing, and after MPI send processing.  Our application processing is not the source of increasing reclaims/faults.
<br>
I observe the disk I/O light flashing on nodes when we report increasing reclaims/faults.
<br>
When I turn off the SM BTL, the reclaims stop increasing and the disk I/O light does not blink.
<br>
<p>-----Original Message-----
<br>
From: George Bosilca [mailto:bosilca_at_[hidden]] 
<br>
Sent: Thursday, November 01, 2012 12:25 AM
<br>
To: Open MPI Users
<br>
Cc: Hodge, Gary C
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: openmpi shared memory feature
<br>
<p><p>On Oct 30, 2012, at 09:57 , Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 30, 2012, at 9:51 AM, Hodge, Gary C wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FYI, recently, I was tracking down the source of page faults in our application that has real-time requirements.  I found that disabling the sm component (--mca btl ^sm) eliminated many page faults I was seeing.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good point.  This is likely true; the shared memory component will definitely cause more page faults.  Using huge pages may alleviate this (e.g., less TLB usage), but we haven't studied it much.
</span><br>
<p>This will depend on the communication pattern of the application and the size of the messages. A rise in the number of page faults is not a normal behavior and it is mostly unexpected in most of the common execution scenarios. We reuse the memory pages in the SM BTL, minimizing the page faults as well as the TLB misses.
<br>
<p>If the sharp increase in the number of page fault is indeed to be blamed on the SM BTL, this is more than worrisome, as it might in indicate a wrong usage of the reserved memory pages (like a FIFO instead of a LIFO). Can you provide us with more precise information regarding this please.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev2">&gt;&gt; I now have much better deterministic performance in that I no longer see outlier measurements (jobs that usually take 3 ms would sometimes take 15 ms).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I grok that; are you benchmarking an entire *job* (i.e., a single &quot;mpirun&quot;) that varies between 3 and 15 milliseconds?  If so, I'd say that both are pretty darn good, because mpirun invokes a lot of overhead for launching and completing jobs.  Furthermore, benchmarking an entire job that lasts significantly less than 1 second is probably not the most stable measurement, regardless of page faults or not -- there's lots of other distributed and OS effects that can cause a jump from 3 to 15 milliseconds. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I did not notice a performance penalty using a network stack.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Depends on the app.  Some MPI apps are latency bound; some are not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Latency-bound applications will definitely benefit from faster point-to-point performance.  Shared memory will definitely have the fastest point-to-point latency compared to any network stack (i.e., hundreds of nanos vs. 1+ micro).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="../../att-20598/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20599.php">J R Jones: "[OMPI users] make check fails with OpenMPI 1.6.3 and Intel Compilers"</a>
<li><strong>Previous message:</strong> <a href="20597.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20594.php">George Bosilca: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20610.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="20610.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
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
