<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 20 03:19:49 2005" -->
<!-- isoreceived="20051220081949" -->
<!-- sent="Tue, 20 Dec 2005 09:19:26 +0100 (MET)" -->
<!-- isosent="20051220081926" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0512200837080.125346_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="774F60FE-44CE-4C27-AD07-023981B97CDF_at_cs.utk.edu" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-20 03:19:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 19 Dec 2005, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Carsten,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the Open MPI source code directory there is a collective component
</span><br>
<span class="quotelev1">&gt; called tuned (ompi/mca/coll/tuned). This component is not enabled by
</span><br>
<span class="quotelev1">&gt; default right now, but usually it give better performances than the
</span><br>
<span class="quotelev1">&gt; basic one. You should give it a try (go inside and remove
</span><br>
<span class="quotelev1">&gt; the .ompi_ignore file and redo the autogen and configure).
</span><br>
<p>Hi George,
<br>
<p>thanks a lot for your reply. I will definietly try out the tuned
<br>
collectives!
<br>
<p><span class="quotelev1">&gt; I don't see how you deduct that adding barriers increase the
</span><br>
<span class="quotelev1">&gt; congestion ? It increase the latency for the all-to-all but for me
</span><br>
<p>When I do an all-to-all a lot of times, I see that the time for a single
<br>
all-to-all varies a lot. My time measurement:
<br>
<p>do 100 times
<br>
{
<br>
&nbsp;&nbsp;MPI_Barrier
<br>
&nbsp;&nbsp;MPI_Wtime
<br>
&nbsp;&nbsp;ALLTOALL
<br>
&nbsp;&nbsp;MPI_Barrier
<br>
&nbsp;&nbsp;MPI_Wtime
<br>
}
<br>
<p>For the ring-sendrecv all-to-all I get something like
<br>
&nbsp;...
<br>
sending   131072 bytes to 32 processes took ...    0.06433 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.06866 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.06233 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.26683 seconds (*)
<br>
sending   131072 bytes to 32 processes took ...    0.06353 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.06470 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.06483 seconds
<br>
Summary (100-run average, timer resolution 0.000001):
<br>
32768 floats took 0.068903 (0.028432) seconds. Min: 0.061708  max: 0.266832
<br>
<p>The typical time my all-to-all takes is around 0.065 seconds, while
<br>
sometimes (*) it takes 0.2+ seconds more. This I interpret as congestion.
<br>
<p>When I add a barrier after the MPI_Sendrecv inside the alltoall, I get
<br>
many more of these congestion events:
<br>
&nbsp;&nbsp;...
<br>
sending   131072 bytes to 32 processes took ...    0.11023 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.48874 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.27856 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.27711 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.31615 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07439 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07440 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07490 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.27524 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07464 seconds
<br>
Summary (100-run average, timer resolution 0.000001):
<br>
32768 floats took 0.250027 (0.158686) seconds. Min: 0.072322  max: 0.970822
<br>
<p>Indeed, the all-to-all time has increased from 0.065 to 0.075 seconds by
<br>
the barrier, but the most severe problem is congestion as it happens
<br>
nearly every step now.
<br>
<p><span class="quotelev1">&gt; Anyway, the algorithm you describe with the MPI_Sendrecv act as an
</span><br>
<span class="quotelev1">&gt; implicit barrier as they all wait for the other at some point. What's
</span><br>
<span class="quotelev1">&gt; happens if you make sure that all MPI_Sendrecv act only between 2
</span><br>
<span class="quotelev1">&gt; nodes at each moment (make [source:destination] an unique tuple) ?
</span><br>
<p>I actually already have tried this. But I get worse timings compared to
<br>
the ring pattern, what I don't understand. I now choose
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send to dest */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest = m[cpuid][i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* receive from source */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;source = dest;
<br>
<p>With a matrix m chosen such that each processor pair communicates in
<br>
exactly one phase. I get
<br>
<p>Without barrier:
<br>
sending   131072 bytes to 32 processes took ...    0.07872 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07667 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07637 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.28047 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.28580 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.28156 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.28533 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07763 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.27871 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.07749 seconds
<br>
Summary (100-run average, timer resolution 0.000001):
<br>
32768 floats took 0.186031 (0.140984) seconds. Min: 0.075035  max: 0.576157
<br>
<p>With barrier:
<br>
sending   131072 bytes to 32 processes took ...    0.08342 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08432 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08378 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08412 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08312 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08365 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08332 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08376 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.08367 seconds
<br>
sending   131072 bytes to 32 processes took ...    0.32773 seconds
<br>
Summary (100-run average, timer resolution 0.000001):
<br>
32768 floats took 0.107121 (0.066466) seconds. Min: 0.082758  max: 0.357322
<br>
<p>In the case of paired communication the barrier improves stuff. Let me
<br>
stress that both paired and ring communication show no congestion for up
<br>
to 16 nodes. The problem arises in the 32 CPU case. It should not be due
<br>
to the switch, since it has 48 ports and a 96 Gbit/s backplane.
<br>
<p>Does all this mean the congestion problem cannot be solved for
<br>
Gbit Ethernet?
<br>
<p>&nbsp;&nbsp;&nbsp;Carsten
<br>
<p><p>---------------------------------------------------
<br>
Dr. Carsten Kutzner
<br>
Max Planck Institute for Biophysical Chemistry
<br>
Theoretical and Computational Biophysics Department
<br>
Am Fassberg 11
<br>
37077 Goettingen, Germany
<br>
Tel. +49-551-2012313, Fax: +49-551-2012302
<br>
eMail ckutzne_at_[hidden]
<br>
<a href="http://www.gwdg.de/~ckutzne">http://www.gwdg.de/~ckutzne</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0445.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0447.php">George Bosilca: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
