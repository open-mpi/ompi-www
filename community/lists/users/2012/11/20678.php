<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to	sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 12:32:09 2012" -->
<!-- isoreceived="20121108173209" -->
<!-- sent="Thu, 8 Nov 2012 17:31:25 +0000" -->
<!-- isosent="20121108173125" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to	sockets?" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F168FCE_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57of6VQer=f8vnyUEgjdX33H2RzLiy=2ZaAOu3nXqoFspKg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to	sockets?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 12:31:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20679.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20679.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20679.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that's what I'm looking for.
<br>
<p>My first look for documentation is always the FAQ, not the man pages.  I found no mention of -npersocket in the FAQ but there it is very clear in the man page.  Boy do I feel dumb.
<br>
<p>Anyway, thanks a lot.
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, November 08, 2012 10:08 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?
<br>
<p>I gather from your other emails you are using 1.4.3, yes? I believe that has npersocket as an option. If so, you could do:
<br>
<p>mpirun -npersocket 2 -bind-to-socket ...
<br>
<p>That would put two processes in each socket, bind them to that socket, and rank them in series. So ranks 0-1 would be bound to the first socket, ranks 2-3 to the second.
<br>
<p>Ralph
<br>
<p>On Thu, Nov 8, 2012 at 6:52 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&lt;mailto:edwin.l.blosch_at_[hidden]&gt;&gt; wrote:
<br>
Yes it is a Westmere system.
<br>
<p>Socket L#0 (P#0 CPUModel=&quot;Intel(R) Xeon(R) CPU E7- 8870  @ 2.40GHz&quot; CPUType=x86_64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#0 (size=30720KB linesize=64 ways=24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#0 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#0 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#0 (size=32KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#1 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#1 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#1 (size=32KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#1)
<br>
<p>So I guess each core has its own L1 and L2 caches.  Maybe I shouldn't care where or if the MPI processes are bound within a socket; if I can test it, that will be good enough for me.
<br>
<p>So my initial question is now changed to:
<br>
<p>What is the best/easiest way to get this mapping?  Rankfile?, --cpus-per-proc 2 --bind-to-socket, or something else?
<br>
<p>RANK  SOCKET  CORE
<br>
0       0       unspecified
<br>
1       0       unspecified
<br>
2       1       unspecified
<br>
3       1       unspecified
<br>
<p><p>Thanks
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt; [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Brice Goglin
<br>
Sent: Wednesday, November 07, 2012 6:17 PM
<br>
To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subject: EXTERNAL: Re: [OMPI users] Best way to map MPI processes to sockets?
<br>
<p>What processor and kernel is this? (see /proc/cpuinfo, or run &quot;lstopo -v&quot; and look for attributes on the Socket line) You're hwloc output looks like an Intel Xeon Westmere-EX (E7-48xx or E7-88xx).
<br>
The likwid output is likely wrong (maybe confused by the fact that hardware threads are disabled).
<br>
<p>Brice
<br>
<p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20679.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Previous message:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>In reply to:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20679.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20679.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
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
