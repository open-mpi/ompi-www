<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 08:43:36 2006" -->
<!-- isoreceived="20060720124336" -->
<!-- sent="Thu, 20 Jul 2006 08:43:23 -0400" -->
<!-- isosent="20060720124323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI v/s( MPICH,LAM/MPI)" -->
<!-- id="C0E4F2AB.B052%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="00c201c6abc2$a445c9c0$1c120897_at_hclad66fee8771" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 08:43:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1668.php">Vladimir Sipos: "[OMPI users] MPI applicability"</a>
<li><strong>Previous message:</strong> <a href="1666.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
<li><strong>In reply to:</strong> <a href="1660.php">esaifu: "[OMPI users] OpenMPI v/s( MPICH,LAM/MPI)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/20/06 2:06 AM, &quot;esaifu&quot; &lt;esaifu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I have been using openMPI for the last one month,so i need some clarification
</span><br>
<span class="quotelev1">&gt; regrding the following points.
</span><br>
<span class="quotelev1">&gt;   1). What is the advantage of OpenMPI over MPICH2 and LAM/MPI.I mean to say
</span><br>
<span class="quotelev1">&gt; is there any difference in performace wise.
</span><br>
<p>Open MPI's TCP performance is still a bit sub-par (because until only
<br>
recently, none of us had gotten around to optimizing it).  It is probably
<br>
below MPICH's TCP performance and definitely below LAM's TCP performance.
<br>
<p>There are still a few features that have not yet been ported to OMPI from
<br>
LAM (we're working on them -- TCP performance is one of them).  But even
<br>
with those missing features, I consider OMPI to be a superior product than
<br>
LAM/MPI -- I have switched all my day-to-day MPI applications to use Open
<br>
MPI (instead of LAM).  Indeed, since Open MPI was designed and built by --
<br>
among many others -- the LAM/MPI crew, it contains most of the great ideas
<br>
from LAM and is therefore (in my mind, at least ;-) ) a worthy successor.
<br>
<p>I can say all these things about LAM because I was the technical lead for it
<br>
for many years, and therefore have pretty good insight in the comparison of
<br>
the two.
<br>
<p>One of the main advantages of Open MPI is that it has different goals than
<br>
other MPI implementations.  Open MPI aims to be a production-quality
<br>
software, is fully open source, strikes a good balance of cutting-edge
<br>
research and stability, and actively invites others to join in the process.
<br>
While there will always be bugs and &quot;but with specific metric ABC, &lt;insert
<br>
other MPI implementation&gt; performs better than Open MPI!&quot;, we feel that the
<br>
above are critical characteristics that distinguish Open MPI from other
<br>
projects.
<br>
<p><span class="quotelev1">&gt;  2). Any check pointing mechanism is there in OpenMPI like it is there in
</span><br>
<span class="quotelev1">&gt; LAM/MPI.
</span><br>
<p>Not yet.  Work is actively progressing on this front.  Search the mailing
<br>
list archives for mails from Josh Hursey for more details on this.  The
<br>
short version is that we will have a demonstratable version of
<br>
checkpoint/restart at SC'06 (although it is highly unlikely that it will be
<br>
included in a stable release by then).  The checkpoint/restart work that we
<br>
are doing in OMPI will far surpass what we did in LAM/MPI.
<br>
<p><span class="quotelev1">&gt;  3) .Can i port the openMPI in any of the platform(X86,X86-64,ia64).
</span><br>
<p>Yes.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1668.php">Vladimir Sipos: "[OMPI users] MPI applicability"</a>
<li><strong>Previous message:</strong> <a href="1666.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
<li><strong>In reply to:</strong> <a href="1660.php">esaifu: "[OMPI users] OpenMPI v/s( MPICH,LAM/MPI)"</a>
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
