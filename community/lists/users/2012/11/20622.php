<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 09:58:00 2012" -->
<!-- isoreceived="20121102135800" -->
<!-- sent="Fri, 2 Nov 2012 13:57:33 +0000" -->
<!-- isosent="20121102135733" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC0412FA50_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="95DD5DA3-285E-4038-80EC-E036FF5C0A9E_at_cisco.com" -->
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
<strong>Date:</strong> 2012-11-02 09:57:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20623.php">Blosch, Edwin L: "[OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>Previous message:</strong> <a href="20621.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20621.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is 8GB memory on each node, with 6GB available, swap is off by commenting it out in the /etc/fstab
<br>
<p>I cannot try the alternate mechanisms right now, thanks for the info, will try it when we move up to 1.6.1
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Friday, November 02, 2012 9:32 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: openmpi shared memory feature
<br>
<p>What's the memory usage on your nodes -- are you invoking swap, perchance?
<br>
<p>Can you try one of the other shared memory mechanisms (sysv or posix)?  (I just described how in my previous email)
<br>
<p><p>On Nov 1, 2012, at 11:24 AM, Hodge, Gary C wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We move 40K and 160K size messages from process to process on the same node.  Our app does mlock(MCL_CURRENT | MCL_FUTURE) before MPI_INIT.
</span><br>
<span class="quotelev1">&gt; I measure the page faults using getrusage and record when they increase. I observe increasing ru_minflt values and no ru_majflt increase.
</span><br>
<span class="quotelev1">&gt; Increased values reported are 40, 80, or 120; our page size is 4K.  The page reclaims/faults are checked after MPI receive processing,
</span><br>
<span class="quotelev1">&gt; after our application processing, and after MPI send processing.  Our application processing is not the source of increasing reclaims/faults.
</span><br>
<span class="quotelev1">&gt; I observe the disk I/O light flashing on nodes when we report increasing reclaims/faults.
</span><br>
<span class="quotelev1">&gt; When I turn off the SM BTL, the reclaims stop increasing and the disk I/O light does not blink.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: George Bosilca [mailto:bosilca_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 01, 2012 12:25 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Hodge, Gary C
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: openmpi shared memory feature
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2012, at 09:57 , Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 30, 2012, at 9:51 AM, Hodge, Gary C wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI, recently, I was tracking down the source of page faults in our application that has real-time requirements.  I found that disabling the sm component (--mca btl ^sm) eliminated many page faults I was seeing.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good point.  This is likely true; the shared memory component will definitely cause more page faults.  Using huge pages may alleviate this (e.g., less TLB usage), but we haven't studied it much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will depend on the communication pattern of the application and the size of the messages. A rise in the number of page faults is not a normal behavior and it is mostly unexpected in most of the common execution scenarios. We reuse the memory pages in the SM BTL, minimizing the page faults as well as the TLB misses.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the sharp increase in the number of page fault is indeed to be blamed on the SM BTL, this is more than worrisome, as it might in indicate a wrong usage of the reserved memory pages (like a FIFO instead of a LIFO). Can you provide us with more precise information regarding this please.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I now have much better deterministic performance in that I no longer see outlier measurements (jobs that usually take 3 ms would sometimes take 15 ms).  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I grok that; are you benchmarking an entire *job* (i.e., a single &quot;mpirun&quot;) that varies between 3 and 15 milliseconds?  If so, I'd say that both are pretty darn good, because mpirun invokes a lot of overhead for launching and completing jobs.  Furthermore, benchmarking an entire job that lasts significantly less than 1 second is probably not the most stable measurement, regardless of page faults or not -- there's lots of other distributed and OS effects that can cause a jump from 3 to 15 milliseconds. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did not notice a performance penalty using a network stack.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depends on the app.  Some MPI apps are latency bound; some are not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Latency-bound applications will definitely benefit from faster point-to-point performance.  Shared memory will definitely have the fastest point-to-point latency compared to any network stack (i.e., hundreds of nanos vs. 1+ micro).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20623.php">Blosch, Edwin L: "[OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>Previous message:</strong> <a href="20621.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<li><strong>In reply to:</strong> <a href="20621.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
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
