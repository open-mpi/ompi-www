<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 13:04:15 2012" -->
<!-- isoreceived="20121108180415" -->
<!-- sent="Thu, 8 Nov 2012 10:04:06 -0800" -->
<!-- isosent="20121108180406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?" -->
<!-- id="B2D028B2-0798-4372-98C3-4424146EB51D_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F168FCE_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 13:04:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20680.php">shiny knight: "[OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20678.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to	sockets?"</a>
<li><strong>In reply to:</strong> <a href="20678.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to	sockets?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm way behind on updating the FAQs -my apologies :-(
<br>
<p><p>Sent from my iPhone
<br>
<p>On Nov 8, 2012, at 9:31 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, that&#226;&#128;&#153;s what I&#226;&#128;&#153;m looking for.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My first look for documentation is always the FAQ, not the man pages.  I found no mention of -npersocket in the FAQ but there it is very clear in the man page.  Boy do I feel dumb.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Anyway, thanks a lot.
</span><br>
<span class="quotelev1">&gt;                    
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 08, 2012 10:08 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I gather from your other emails you are using 1.4.3, yes? I believe that has npersocket as an option. If so, you could do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -npersocket 2 -bind-to-socket ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That would put two processes in each socket, bind them to that socket, and rank them in series. So ranks 0-1 would be bound to the first socket, ranks 2-3 to the second.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 8, 2012 at 6:52 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes it is a Westmere system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Socket L#0 (P#0 CPUModel=&quot;Intel(R) Xeon(R) CPU E7- 8870  @ 2.40GHz&quot; CPUType=x86_64)
</span><br>
<span class="quotelev1">&gt;       L3Cache L#0 (size=30720KB linesize=64 ways=24)
</span><br>
<span class="quotelev1">&gt;         L2Cache L#0 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;           L1dCache L#0 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;             L1iCache L#0 (size=32KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;               Core L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;                 PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;         L2Cache L#1 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;           L1dCache L#1 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev1">&gt;             L1iCache L#1 (size=32KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;               Core L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;                 PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I guess each core has its own L1 and L2 caches.  Maybe I shouldn't care where or if the MPI processes are bound within a socket; if I can test it, that will be good enough for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my initial question is now changed to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the best/easiest way to get this mapping?  Rankfile?, --cpus-per-proc 2 --bind-to-socket, or something else?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RANK  SOCKET  CORE
</span><br>
<span class="quotelev1">&gt; 0       0       unspecified
</span><br>
<span class="quotelev1">&gt; 1       0       unspecified
</span><br>
<span class="quotelev1">&gt; 2       1       unspecified
</span><br>
<span class="quotelev1">&gt; 3       1       unspecified
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brice Goglin
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, November 07, 2012 6:17 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Best way to map MPI processes to sockets?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What processor and kernel is this? (see /proc/cpuinfo, or run &quot;lstopo -v&quot; and look for attributes on the Socket line) You're hwloc output looks like an Intel Xeon Westmere-EX (E7-48xx or E7-88xx).
</span><br>
<span class="quotelev1">&gt; The likwid output is likely wrong (maybe confused by the fact that hardware threads are disabled).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20680.php">shiny knight: "[OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20678.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to	sockets?"</a>
<li><strong>In reply to:</strong> <a href="20678.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to	sockets?"</a>
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
