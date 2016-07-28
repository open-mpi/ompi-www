<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 19:07:45 2006" -->
<!-- isoreceived="20060209000745" -->
<!-- sent="Wed, 08 Feb 2006 16:06:28 -0800" -->
<!-- isosent="20060209000628" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="1139443588.1494.178.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="8fb422c7493ea2061cc4e958c4627787_at_lanl.gov" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 19:06:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0611.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; you need to specify both the transport and self, such as:
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl self,tcp
</span><br>
<p>I found that the reason why I was no-longer able to run without openib
<br>
was that I had some openib-specific tunables on the command line. I
<br>
expected the params would get ignored, but instead it just sat there.
<br>
<p>The other funny thing I found was that on the cmd line I do not need to
<br>
specify self; just openib, or tcp will do. But in the param file I must
<br>
specify tcp,openib, or self,openib; self,tcp would not work. Oh well, I
<br>
do not care for tcp anyway :-).
<br>
<p>But should I understand from all this that the &quot;direct&quot; mode will never
<br>
actually work ? It seems that if you need at least two transports, then
<br>
none of them can be the hardwired unique one, right ? Unless there's a
<br>
built-in switch between a built-in self and the built-in other
<br>
transport.
<br>
<p><span class="quotelev1">&gt; For Heroic latencies on IB we would need to use small message RDMA and 
</span><br>
<span class="quotelev1">&gt; poll each peers dedicated memory region for completion.
</span><br>
<p>Well, I tried to play around with the eager_limit, min_rdma, etc. I did
<br>
not see the latency of messages of a given size be lowered by changing
<br>
the tresholds to make them rdma'd. Rather the opposite (which was my
<br>
initial expectation, actually). May be I just misunderstood the whole
<br>
set of tunables. My understanding was that messages under the eager
<br>
limit would never be rdma'd by definition, and that the others would or
<br>
would not be, depending on the min_rdma_size. 
<br>
<p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0609.php">George Bosilca: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0611.php">Timothy S. Woodall: "Re: [O-MPI users] direct openib btl and latency"</a>
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
