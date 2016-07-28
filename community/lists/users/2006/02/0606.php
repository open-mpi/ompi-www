<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 17:03:59 2006" -->
<!-- isoreceived="20060208220359" -->
<!-- sent="Wed, 8 Feb 2006 15:03:56 -0700" -->
<!-- isosent="20060208220356" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="7af2e9cb2b17bc5fdf65427c6093c67d_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1139428688.1494.133.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 17:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jean,
<br>
<p>You probably are not seeing overhead costs so much as you are seeing 
<br>
the difference between using send/recv for small messages, which Open 
<br>
MPI uses,  and RDMA for small messages. If you are comparing against 
<br>
another implementation that uses RDMA for small messages then yes, you 
<br>
will see lower latencies, but there are issues with using small message 
<br>
RDMA. I have written a paper that addresses these issues which will be 
<br>
presented at IPDPS.
<br>
<p>The short of it:
<br>
small message RDMA is effective for a small number of peers but polling 
<br>
costs begin to dominate wire time as the number of peers increases.
<br>
Try comparing our latencies with another MPI that uses send/receive, if 
<br>
you are using MVAPICH you can use a compile time flag to disable small 
<br>
message RDMA and force send/receive, our results show lower latencies 
<br>
for send/receive semantics which indicates that the Open MPI framework 
<br>
costs are lower.
<br>
We are looking at small message RDMA for Open MPI but as this is 
<br>
primarily an optimization for very small clusters and micro-benchmarks, 
<br>
the benefit for real applications may be nil.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Feb 8, 2006, at 12:58 PM, Jean-Christophe Hugly wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does someone know what the framework costs in term of latency ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Righ now the latency I get with the openib btl is not great: 5.35 us. I
</span><br>
<span class="quotelev1">&gt; was looking at what I could do to get it down. I tried to get openib be
</span><br>
<span class="quotelev1">&gt; the only btl but the build process refused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand I am not sure it could even work at all, as whenever 
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; tried at run-time to limit the list to just one transport (be it tcp or
</span><br>
<span class="quotelev1">&gt; openib, btw), mpi apps would not start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way, I'm curious if it's even worth trying and if there's other
</span><br>
<span class="quotelev1">&gt; cuts that can be made to shave off one us or two (ok, I'l settle for
</span><br>
<span class="quotelev1">&gt; 1.5 :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PANTA
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
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
