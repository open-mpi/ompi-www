<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 12 17:19:18 2007" -->
<!-- isoreceived="20071012211918" -->
<!-- sent="Fri, 12 Oct 2007 23:20:10 +0200" -->
<!-- isosent="20071012212010" -->
<!-- name="Torsten Hoefler" -->
<!-- email="htor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect" -->
<!-- id="20071012212010.GF11225_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1192187402.S.5486.21940.webmail16.rediffmail.com.1192192686.15739_at_webmail.rediffmail.com" -->
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
<strong>From:</strong> Torsten Hoefler (<em>htor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-12 17:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4210.php">Jeremias Spiegel: "[OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<span class="quotelev1">&gt;    Yes, the buffer was being re-used. No we didnt try to benchmark it with
</span><br>
<span class="quotelev1">&gt;    netpipe and other stuffs. But the program was pretty simple. Do you think,
</span><br>
<span class="quotelev1">&gt;    I need to test it with bigger chunks (&gt;8MB) for communication.?
</span><br>
<span class="quotelev1">&gt;    We also tried manipulating eager_limit and min_rdma_sze, but no success.
</span><br>
Hmm, that sounds strange. I think 8MiB are totally sufficient to see the
<br>
difference. You should try Jeff's suggestions and/or some well-known
<br>
benchmarks.
<br>
<p>Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
&quot;The more physics you have the less engineering you need.&quot;                      
        --Ernest Rutherford                                                     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4210.php">Jeremias Spiegel: "[OMPI users] Performance of MPI_Isend() worse than MPI_Send() and even MPI_Ssend()"</a>
<li><strong>Previous message:</strong> <a href="4208.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4202.php">Neeraj Chourasia: "[OMPI users] Re :Re: Re :Re: Tuning Openmpi with IB Interconnect"</a>
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
