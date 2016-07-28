<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 18 08:07:52 2007" -->
<!-- isoreceived="20070518120752" -->
<!-- sent="Fri, 18 May 2007 07:07:47 -0500" -->
<!-- isosent="20070518120747" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication" -->
<!-- id="200705180707.47526.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1626092b0705180319s4f92fe98u7e326fe40123657b_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-18 08:07:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3288.php">Maestas, Christopher Daniel: "[OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3286.php">Code Master: "[OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3286.php">Code Master: "[OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI uses TCP, and does not use any fixed ports. We use whatever ports the 
<br>
operating system gives us. At this time there is no way to specify what ports 
<br>
to use.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>On Friday 18 May 2007 05:19 am, Code Master wrote:
<br>
<span class="quotelev1">&gt; I run my openmpi-based application in a multi-node cluster.  There is also
</span><br>
<span class="quotelev1">&gt; a sniffer computer (installed with wireshark) attached to a listener port
</span><br>
<span class="quotelev1">&gt; on the switch to sniff any packets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I would like to know the protocol (UDP or TCP) as well as the ports
</span><br>
<span class="quotelev1">&gt; used by openmpi for interprocess communication so that wireshark can only
</span><br>
<span class="quotelev1">&gt; capture these packets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3288.php">Maestas, Christopher Daniel: "[OMPI users] Intel MPI SendRcv Performance using MX 1.1.7 comparison of Open MPI 1.2.2 and MPICH-MX 1.2.7..4"</a>
<li><strong>Previous message:</strong> <a href="3286.php">Code Master: "[OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>In reply to:</strong> <a href="3286.php">Code Master: "[OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3292.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
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
