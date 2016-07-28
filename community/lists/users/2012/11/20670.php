<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 09:52:35 2012" -->
<!-- isoreceived="20121108145235" -->
<!-- sent="Thu, 8 Nov 2012 14:52:11 +0000" -->
<!-- isosent="20121108145211" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F168EC3_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="509AFA11.9090607_at_inria.fr" -->
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
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-08 09:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20671.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Wednesday, November 07, 2012 6:17 PM
<br>
To: users_at_[hidden]
<br>
Subject: EXTERNAL: Re: [OMPI users] Best way to map MPI processes to sockets?
<br>
<p>What processor and kernel is this? (see /proc/cpuinfo, or run &quot;lstopo -v&quot; and look for attributes on the Socket line) You're hwloc output looks like an Intel Xeon Westmere-EX (E7-48xx or E7-88xx).
<br>
The likwid output is likely wrong (maybe confused by the fact that hardware threads are disabled).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20671.php">Jeff Squyres: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>Previous message:</strong> <a href="20669.php">Brice Goglin: "Re: [OMPI users] mpi_leave_pinned is dangerous"</a>
<li><strong>In reply to:</strong> <a href="20657.php">Brice Goglin: "Re: [OMPI users] Best way to map MPI processes to sockets?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
<li><strong>Reply:</strong> <a href="20677.php">Ralph Castain: "Re: [OMPI users] EXTERNAL: Re: Best way to map MPI processes to sockets?"</a>
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
