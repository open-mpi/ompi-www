<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 17:16:48 2006" -->
<!-- isoreceived="20060208221648" -->
<!-- sent="Wed, 8 Feb 2006 15:16:45 -0700" -->
<!-- isosent="20060208221645" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="8fb422c7493ea2061cc4e958c4627787_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-02-08 17:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, more questions to answer:
<br>
<p><span class="quotelev1">&gt; On the other hand I am not sure it could even work at all, as whenever 
</span><br>
<span class="quotelev1">&gt; I
</span><br>
<span class="quotelev1">&gt; tried at run-time to limit the list to just one transport (be it tcp or
</span><br>
<span class="quotelev1">&gt; openib, btw), mpi apps would not start.
</span><br>
<span class="quotelev1">&gt;
</span><br>
you need to specify both the transport and self, such as:
<br>
mpirun -mca btl self,tcp
<br>
<p>This is a simple loopback and leaving it out may be the problem.
<br>
<p><p><span class="quotelev1">&gt; Either way, I'm curious if it's even worth trying and if there's other
</span><br>
<span class="quotelev1">&gt; cuts that can be made to shave off one us or two (ok, I'l settle for
</span><br>
<span class="quotelev1">&gt; 1.5 :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>For Heroic latencies on IB we would need to use small message RDMA and 
<br>
poll each peers dedicated memory region for completion.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0605.php">Jean-Christophe Hugly: "[O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Reply:</strong> <a href="0608.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
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
