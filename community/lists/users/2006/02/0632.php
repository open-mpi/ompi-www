<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 09:52:24 2006" -->
<!-- isoreceived="20060210145224" -->
<!-- sent="Fri, 10 Feb 2006 07:52:17 -0700" -->
<!-- isosent="20060210145217" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] direct openib btl and latency" -->
<!-- id="69778DF7-AFC5-46FA-9FF7-64E5D9D00AB9_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060210044744.GA13413_at_cse.ohio-state.edu" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-10 09:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>In reply to:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been working for the MVAPICH project for around three years.  
</span><br>
<span class="quotelev1">&gt; Since
</span><br>
<span class="quotelev1">&gt; this thread is discussing MVAPICH, I thought I should post to this
</span><br>
<span class="quotelev1">&gt; thread. Galen's description of MVAPICH is not accurate. MVAPICH uses
</span><br>
<span class="quotelev1">&gt; RDMA for short message to deliver performance benefits to the
</span><br>
<span class="quotelev1">&gt; applications. However, it needs to be designed properly to handle
</span><br>
<span class="quotelev1">&gt; scalability while delivering best performance. Since MVAPICH-0.9.6
</span><br>
<span class="quotelev1">&gt; (released on 6th December, 2005), MVAPICH has been supporting a new  
</span><br>
<span class="quotelev1">&gt; mode
</span><br>
<span class="quotelev1">&gt; of operation which is called ADAPTIVE_RDMA_FAST_PATH (the basic
</span><br>
<span class="quotelev1">&gt; RDMA_FAST_PATH is also supported).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This new design uses RDMA for short message transfer in an intelligent
</span><br>
<span class="quotelev1">&gt; and adaptive manner.  Using this mode, the memory allocation of  
</span><br>
<span class="quotelev1">&gt; MVAPICH
</span><br>
<span class="quotelev1">&gt; is no longer static.  Instead its dynamic. Its an implementation of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; short message RDMA implementation for a limited set of peers (user
</span><br>
<span class="quotelev1">&gt; controllable) which Galen is suggesting. MVAPICH already supports this
</span><br>
<span class="quotelev1">&gt; feature. This also means that in the paper Galen mentions, the
</span><br>
<span class="quotelev1">&gt; comparison results in Figures 4 through 7 have to be re-evaluated to
</span><br>
<span class="quotelev1">&gt; make the paper and the results accurate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not sure how my results and description is not accurate, I was  
<br>
comparing using
<br>
MVAPICH0.9.5-118 which is detailed in my experimental setup.
<br>
This was done before your release of MVAPICH-0.9.6.
<br>
I do think it is good that you have addressed these shortcomings  
<br>
however and appreciate the clarification.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><p><p><p><p><span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sayantan.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cse.ohio-state.edu/~surs">http://www.cse.ohio-state.edu/~surs</a>
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
<li><strong>Next message:</strong> <a href="0633.php">Andy Vierstraete: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0631.php">Alexandre Carissimi: "Re: [O-MPI users] Anyone has build (used) OpenMPI with BLCR??"</a>
<li><strong>In reply to:</strong> <a href="0625.php">Sayantan Sur: "Re: [O-MPI users] direct openib btl and latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0617.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
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
