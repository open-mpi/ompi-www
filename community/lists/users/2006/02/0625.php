<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 23:47:47 2006" -->
<!-- isoreceived="20060210044747" -->
<!-- sent="Thu, 9 Feb 2006 23:47:46 -0500" -->
<!-- isosent="20060210044746" -->
<!-- name="Sayantan Sur" -->
<!-- email="surs_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="20060210044744.GA13413_at_cse.ohio-state.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1139541001.1494.284.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Sayantan Sur (<em>surs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 23:47:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0626.php">Joel Dudley: "[O-MPI users] MacResearch.org announces iPod giveaway contest"</a>
<li><strong>Previous message:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Galen Shipman wrote:
<br>
<p><span class="quotelev1">&gt;Hi Jean,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You probably are not seeing overhead costs so much as you are seeing
</span><br>
<span class="quotelev1">&gt;the difference between using send/recv for small messages, which Open
</span><br>
<span class="quotelev1">&gt;MPI uses,  and RDMA for small messages. If you are comparing against
</span><br>
<span class="quotelev1">&gt;another implementation that uses RDMA for small messages then yes,
</span><br>
<span class="quotelev1">&gt;you
</span><br>
<span class="quotelev1">&gt;will see lower latencies, but there are issues with using small
</span><br>
<span class="quotelev1">&gt;message
</span><br>
<span class="quotelev1">&gt;RDMA. I have written a paper that addresses these issues which will
</span><br>
<span class="quotelev1">&gt;be
</span><br>
<span class="quotelev1">&gt;presented at IPDPS.
</span><br>
<p>I've been working for the MVAPICH project for around three years. Since
<br>
this thread is discussing MVAPICH, I thought I should post to this
<br>
thread. Galen's description of MVAPICH is not accurate. MVAPICH uses
<br>
RDMA for short message to deliver performance benefits to the
<br>
applications. However, it needs to be designed properly to handle
<br>
scalability while delivering best performance. Since MVAPICH-0.9.6
<br>
(released on 6th December, 2005), MVAPICH has been supporting a new mode
<br>
of operation which is called ADAPTIVE_RDMA_FAST_PATH (the basic
<br>
RDMA_FAST_PATH is also supported).
<br>
<p>This new design uses RDMA for short message transfer in an intelligent
<br>
and adaptive manner.  Using this mode, the memory allocation of MVAPICH
<br>
is no longer static.  Instead its dynamic. Its an implementation of the
<br>
short message RDMA implementation for a limited set of peers (user
<br>
controllable) which Galen is suggesting. MVAPICH already supports this
<br>
feature. This also means that in the paper Galen mentions, the
<br>
comparison results in Figures 4 through 7 have to be re-evaluated to
<br>
make the paper and the results accurate.
<br>
<p>Hope this helps.
<br>
<p>Thanks,
<br>
Sayantan.
<br>
<p><p><pre>
-- 
<a href="http://www.cse.ohio-state.edu/~surs">http://www.cse.ohio-state.edu/~surs</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0626.php">Joel Dudley: "[O-MPI users] MacResearch.org announces iPod giveaway contest"</a>
<li><strong>Previous message:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0632.php">Galen M. Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
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
