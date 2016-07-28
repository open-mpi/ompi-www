<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 19 16:57:38 2005" -->
<!-- isoreceived="20051219215738" -->
<!-- sent="Mon, 19 Dec 2005 16:57:55 -0500" -->
<!-- isosent="20051219215755" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="774F60FE-44CE-4C27-AD07-023981B97CDF_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.OSF.4.58.0512191154210.316775_at_gwdu70.gwdg.de" -->
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
<strong>Date:</strong> 2005-12-19 16:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Carsten Kutzner: "[O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0444.php">Carsten Kutzner: "[O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Carsten,
<br>
<p>In the Open MPI source code directory there is a collective component  
<br>
called tuned (ompi/mca/coll/tuned). This component is not enabled by  
<br>
default right now, but usually it give better performances than the  
<br>
basic one. You should give it a try (go inside and remove  
<br>
the .ompi_ignore file and redo the autogen and configure).
<br>
<p>I don't see how you deduct that adding barriers increase the  
<br>
congestion ? It increase the latency for the all-to-all but for me  
<br>
that make sense. For each pair of message that you send (and these  
<br>
pair will send them in parallel) you add a global synchronization on  
<br>
top of it (depend on the algorithm used for the barrier but it can  
<br>
hardly be pipelined with others communications). If you have a  
<br>
hardware barrier it can help, but over TCP or any other p2p network  
<br>
it won't.
<br>
<p>Anyway, the algorithm you describe with the MPI_Sendrecv act as an  
<br>
implicit barrier as they all wait for the other at some point. What's  
<br>
happens if you make sure that all MPI_Sendrecv act only between 2  
<br>
nodes at each moment (make [source:destination] an unique tuple) ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 19, 2005, at 7:26 AM, Carsten Kutzner wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am desparately trying to get better all-to-all performance on Gbit
</span><br>
<span class="quotelev1">&gt; Ethernet (flow control is enabled). I have been playing around with
</span><br>
<span class="quotelev1">&gt; several all-to-all schemes and been able to reduce congestion by
</span><br>
<span class="quotelev1">&gt; communicating in an ordered fashion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g. the simplest scheme looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for (i=0; i&lt;ncpu; i++)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      /* send to dest */
</span><br>
<span class="quotelev1">&gt;      dest = (cpuid + i) % ncpu;
</span><br>
<span class="quotelev1">&gt;      /* receive from source  */
</span><br>
<span class="quotelev1">&gt;      source   = (ncpu + cpuid - i) % ncpu;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Sendrecv(sendbuf+dest  *sendcount, sendcount, sendtype,  
</span><br>
<span class="quotelev1">&gt; dest  , 0,
</span><br>
<span class="quotelev1">&gt;                   recvbuf+source*recvcount, recvcount, recvtype,  
</span><br>
<span class="quotelev1">&gt; source, 0,
</span><br>
<span class="quotelev1">&gt; 		  comm, &amp;status);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For sendcount=32768 and sendtype=float (yields 131072 bytes) the  
</span><br>
<span class="quotelev1">&gt; time such
</span><br>
<span class="quotelev1">&gt; an all-to-all takes is (average over 100 runs, std deviation in () ):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SENDRECV ALLTOALL on 16 PROCS
</span><br>
<span class="quotelev1">&gt;      32768 floats took 0.036783 (0.008798) seconds. Min: 0.034175   
</span><br>
<span class="quotelev1">&gt; max: 0.123684
</span><br>
<span class="quotelev1">&gt; SENDRECV ALLTOALL on 32 PROCS
</span><br>
<span class="quotelev1">&gt;      32768 floats took 0.082687 (0.035920) seconds. Min: 0.071915   
</span><br>
<span class="quotelev1">&gt; max: 0.285299
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For comparison:
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall on 16 PROCS
</span><br>
<span class="quotelev1">&gt;      32768 floats took 0.057936 (0.073605) seconds. Min: 0.027218   
</span><br>
<span class="quotelev1">&gt; max: 0.275988
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall on 32 PROCS
</span><br>
<span class="quotelev1">&gt;      32768 floats took 0.137835 (0.100580) seconds. Min: 0.055607   
</span><br>
<span class="quotelev1">&gt; max: 0.412144
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The sendrecv all-to-all performs better for these message sizes, but
</span><br>
<span class="quotelev1">&gt; on 32 CPUs (on 32 nodes) there is still congestion. When I try to  
</span><br>
<span class="quotelev1">&gt; separate
</span><br>
<span class="quotelev1">&gt; the communication phases by putting an MPI_Barrier(MPI_COMM_WORLD)  
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt; the sendrecv, this makes the problem of congestion even worse:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SENDRECV ALLTOALL on 32 PROCS, with Barrier:
</span><br>
<span class="quotelev1">&gt;      32768 floats took 0.179162 (0.136885) seconds. Min: 0.091028   
</span><br>
<span class="quotelev1">&gt; max: 0.729049
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can a barrier lead to more congestion???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for helpful comments,
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
<li><strong>Next message:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Carsten Kutzner: "[O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0444.php">Carsten Kutzner: "[O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0446.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
