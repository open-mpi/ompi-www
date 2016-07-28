<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 20 17:46:16 2005" -->
<!-- isoreceived="20051220224616" -->
<!-- sent="Tue, 20 Dec 2005 17:46:38 -0500" -->
<!-- isosent="20051220224638" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="862CBEFC-D244-40BF-9751-61C25963E8AD_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.OSF.4.58.0512200837080.125346_at_gwdu70.gwdg.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-20 17:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Christophe Peyret: "[O-MPI users] High Virtual Memory"</a>
<li><strong>Previous message:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 20, 2005, at 3:19 AM, Carsten Kutzner wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I don't see how you deduct that adding barriers increase the
</span><br>
<span class="quotelev2">&gt;&gt; congestion ? It increase the latency for the all-to-all but for me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I do an all-to-all a lot of times, I see that the time for a  
</span><br>
<span class="quotelev1">&gt; single
</span><br>
<span class="quotelev1">&gt; all-to-all varies a lot. My time measurement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do 100 times
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier
</span><br>
<span class="quotelev1">&gt;   MPI_Wtime
</span><br>
<span class="quotelev1">&gt;   ALLTOALL
</span><br>
<span class="quotelev1">&gt;   MPI_Barrier
</span><br>
<span class="quotelev1">&gt;   MPI_Wtime
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>This way of computing the time for collective operations is not  
<br>
considered as the best approach. Even for p2p communications if you  
<br>
time them like that, you will find a huge standard deviation. Way too  
<br>
many things are involved in any communications, and they usually have  
<br>
a big effect on the duration. For collectives the effect of this  
<br>
approach on standard deviation is even more drastic. A better way is  
<br>
to split the loop in 2 loops:
<br>
<p>&nbsp;&nbsp;&nbsp;do 10 times
<br>
&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start &lt;- MPI_Wtime
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do 10 times
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ALLTOALL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end &lt;- MPI_Wtime
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total_time = (end - start) / 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>You will get results that make more sense. There is another problem  
<br>
with your code. If we look on how the MPI standard define the  
<br>
MPI_Barrier, we can see that the only requirement is that all nodes  
<br>
belonging to the same communicator reach the barrier. It does not  
<br>
means they leave the barrier in same time ! It depend on how the  
<br>
barrier is implemented. If it use a linear approach (node 0 get a  
<br>
message from everybody else and then send a message to everybody  
<br>
else), it is clear that the node 0 has more chances to get out of the  
<br>
barrier last. Therefore, when he will reach the next ALLTOALL, the  
<br>
messages will be already there, as all the others nodes are on the  
<br>
alltoall. Now, as he reach the alltoall later, imagine   the effect  
<br>
that it will have on the communications between the others nodes. If  
<br>
it late enough, then there will be congestion as all others will be  
<br>
waiting for a sendrecv with the node 0.
<br>
<p>There are others approaches for performance measurement, but they are  
<br>
more complex. The one I will describe give correct results with a  
<br>
fairly simple algorithm. What people usually do for measuring  
<br>
performances is that after filling up the array with their individual  
<br>
results, and before computing the mean-time they remove the best and  
<br>
the worst results (the 2 extremum). They can be considered as  
<br>
anomalies. If there are several &quot;worst&quot; then they will show up anyway  
<br>
in the standard deviation as you will remove just one.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the ring-sendrecv all-to-all I get something like
</span><br>
<span class="quotelev1">&gt;  ...
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.06433 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.06866 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.06233 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.26683 seconds (*)
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.06353 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.06470 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.06483 seconds
</span><br>
<span class="quotelev1">&gt; Summary (100-run average, timer resolution 0.000001):
</span><br>
<span class="quotelev1">&gt; 32768 floats took 0.068903 (0.028432) seconds. Min: 0.061708  max:  
</span><br>
<span class="quotelev1">&gt; 0.266832
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The typical time my all-to-all takes is around 0.065 seconds, while
</span><br>
<span class="quotelev1">&gt; sometimes (*) it takes 0.2+ seconds more. This I interpret as  
</span><br>
<span class="quotelev1">&gt; congestion.
</span><br>
<p>It can be congestion ...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I add a barrier after the MPI_Sendrecv inside the alltoall, I get
</span><br>
<span class="quotelev1">&gt; many more of these congestion events:
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.11023 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.48874 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.27856 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.27711 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.31615 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07439 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07440 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07490 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.27524 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07464 seconds
</span><br>
<span class="quotelev1">&gt; Summary (100-run average, timer resolution 0.000001):
</span><br>
<span class="quotelev1">&gt; 32768 floats took 0.250027 (0.158686) seconds. Min: 0.072322  max:  
</span><br>
<span class="quotelev1">&gt; 0.970822
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, the all-to-all time has increased from 0.065 to 0.075  
</span><br>
<span class="quotelev1">&gt; seconds by
</span><br>
<span class="quotelev1">&gt; the barrier, but the most severe problem is congestion as it happens
</span><br>
<span class="quotelev1">&gt; nearly every step now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, the algorithm you describe with the MPI_Sendrecv act as an
</span><br>
<span class="quotelev2">&gt;&gt; implicit barrier as they all wait for the other at some point. What's
</span><br>
<span class="quotelev2">&gt;&gt; happens if you make sure that all MPI_Sendrecv act only between 2
</span><br>
<span class="quotelev2">&gt;&gt; nodes at each moment (make [source:destination] an unique tuple) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I actually already have tried this. But I get worse timings  
</span><br>
<span class="quotelev1">&gt; compared to
</span><br>
<span class="quotelev1">&gt; the ring pattern, what I don't understand. I now choose
</span><br>
<span class="quotelev1">&gt;      /* send to dest */
</span><br>
<span class="quotelev1">&gt;      dest = m[cpuid][i];
</span><br>
<span class="quotelev1">&gt;      /* receive from source */
</span><br>
<span class="quotelev1">&gt;      source = dest;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With a matrix m chosen such that each processor pair communicates in
</span><br>
<span class="quotelev1">&gt; exactly one phase. I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without barrier:
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07872 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07667 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07637 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.28047 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.28580 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.28156 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.28533 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07763 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.27871 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.07749 seconds
</span><br>
<span class="quotelev1">&gt; Summary (100-run average, timer resolution 0.000001):
</span><br>
<span class="quotelev1">&gt; 32768 floats took 0.186031 (0.140984) seconds. Min: 0.075035  max:  
</span><br>
<span class="quotelev1">&gt; 0.576157
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With barrier:
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08342 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08432 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08378 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08412 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08312 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08365 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08332 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08376 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.08367 seconds
</span><br>
<span class="quotelev1">&gt; sending   131072 bytes to 32 processes took ...    0.32773 seconds
</span><br>
<span class="quotelev1">&gt; Summary (100-run average, timer resolution 0.000001):
</span><br>
<span class="quotelev1">&gt; 32768 floats took 0.107121 (0.066466) seconds. Min: 0.082758  max:  
</span><br>
<span class="quotelev1">&gt; 0.357322
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the case of paired communication the barrier improves stuff. Let me
</span><br>
<span class="quotelev1">&gt; stress that both paired and ring communication show no congestion  
</span><br>
<span class="quotelev1">&gt; for up
</span><br>
<span class="quotelev1">&gt; to 16 nodes. The problem arises in the 32 CPU case. It should not  
</span><br>
<span class="quotelev1">&gt; be due
</span><br>
<span class="quotelev1">&gt; to the switch, since it has 48 ports and a 96 Gbit/s backplane.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does all this mean the congestion problem cannot be solved for
</span><br>
<span class="quotelev1">&gt; Gbit Ethernet?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Carsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dr. Carsten Kutzner
</span><br>
<span class="quotelev1">&gt; Max Planck Institute for Biophysical Chemistry
</span><br>
<span class="quotelev1">&gt; Theoretical and Computational Biophysics Department
</span><br>
<span class="quotelev1">&gt; Am Fassberg 11
</span><br>
<span class="quotelev1">&gt; 37077 Goettingen, Germany
</span><br>
<span class="quotelev1">&gt; Tel. +49-551-2012313, Fax: +49-551-2012302
</span><br>
<span class="quotelev1">&gt; eMail ckutzne_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gwdg.de/~ckutzne">http://www.gwdg.de/~ckutzne</a>
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Christophe Peyret: "[O-MPI users] High Virtual Memory"</a>
<li><strong>Previous message:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
