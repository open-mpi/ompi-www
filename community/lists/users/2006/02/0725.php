<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 13:00:52 2006" -->
<!-- isoreceived="20060228180052" -->
<!-- sent="Tue, 28 Feb 2006 13:00:51 -0500" -->
<!-- isosent="20060228180051" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation problem with OpenIB" -->
<!-- id="41976D6F-6E72-451F-9062-A94BCC3833E8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1141147061.9676.7.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 13:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Previous message:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2006, at 12:17 PM, Emanuel Ziegler wrote:
<br>
<p><span class="quotelev1">&gt; Just another question: Is is possible to use a 32 Bit machine as head
</span><br>
<span class="quotelev1">&gt; node (without being involved into the computations)? When I try to  
</span><br>
<span class="quotelev1">&gt; run a
</span><br>
<span class="quotelev1">&gt; program using mpirun from the 32 Bit machine I get
</span><br>
<span class="quotelev1">&gt;     [headnode:32560] [0,0,0] mca_oob_tcp_recv_handler: \
</span><br>
<span class="quotelev1">&gt;         invalid message type: 0
</span><br>
<span class="quotelev1">&gt; and the debug output shows
</span><br>
<span class="quotelev1">&gt;     [node01:01330] [0,0,1]-[0,0,0] mca_oob_tcp_peer_recv_blocking: \
</span><br>
<span class="quotelev1">&gt;         recv() failed with errno=104
</span><br>
<span class="quotelev1">&gt; which means &quot;Connection reset by peer&quot;. In between the 64 Bit machines
</span><br>
<span class="quotelev1">&gt; it works fine now.
</span><br>
<p>This is not currently supported.  It is something that we are working  
<br>
to fix for the Open MPI 1.1 release.  In the 1.0.x series, we require  
<br>
that all processes have the same word size and the same endianness.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<li><strong>Previous message:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
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
