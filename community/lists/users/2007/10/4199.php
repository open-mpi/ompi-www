<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 11:44:34 2007" -->
<!-- isoreceived="20071011154434" -->
<!-- sent="Thu, 11 Oct 2007 17:44:22 +0200" -->
<!-- isosent="20071011154422" -->
<!-- name="Matteo Cicuttin" -->
<!-- email="matteo.cicuttin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuning Openmpi with IB Interconnect" -->
<!-- id="FA08A877-DF3B-4CB4-AF57-B88AFB1EE06A_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071011051608.29212.qmail_at_webmail17.rediffmail.com" -->
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
<strong>From:</strong> Matteo Cicuttin (<em>matteo.cicuttin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 11:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4200.php">Neeraj Chourasia: "[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>In reply to:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Il giorno 11/ott/07, alle ore 07:16, Neeraj Chourasia ha scritto:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Could anyone tell me the important tuning parameters in openmpi  
</span><br>
<span class="quotelev1">&gt; with IB interconnect? I tried setting eager_rdma, min_rdma_size,  
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned parameters from the mpirun command line on 38  
</span><br>
<span class="quotelev1">&gt; nodes cluster (38*2 processors) but in vain. I found simple mpirun  
</span><br>
<span class="quotelev1">&gt; with no mca parameters performing better. I conducted test on P2P  
</span><br>
<span class="quotelev1">&gt; send/receive with data size of 8MB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Similarly i patched HPL linpack code with libnbc(non blocking  
</span><br>
<span class="quotelev1">&gt; collectives) and found no performance benefits. I went through its  
</span><br>
<span class="quotelev1">&gt; patch and found that, its probably not overlapping computation with  
</span><br>
<span class="quotelev1">&gt; communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help in this direction would be appreciated.
</span><br>
<span class="quotelev1">&gt; -Neeraj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi!
<br>
<p>I'm Matteo, and I work for a company that produces HPC systems, in  
<br>
Italy.
<br>
I'm new in that company and I'm looking for some help, and this  
<br>
thread seems to be good :)
<br>
In the last days we're benchmarking a system, and I'm interested in  
<br>
some performance
<br>
scores of the infiniband interconnect.
<br>
The nodes are dual dual-core opteron machines and we use the PCI-X IB  
<br>
interfaces Mellanox Cougar Cub.
<br>
Machines have the 8111 system controller and the 8131 PCI-X bridge.
<br>
We reach a rate of about 600 MB/s in the point-to-point tests.
<br>
This rate (more or less) is reported both by the ib_*_bw benchmarks  
<br>
and the IMB-MPI (sendrecv) benchmarks, version 3.
<br>
MPI implementation is, of course, openmpi.
<br>
I've read in a few places that a similar setup can reach about 800 MB/ 
<br>
s on machines similar to those descripted above.
<br>
Someone can confirm this? Someone have similar hardware and the  
<br>
measured bandwidth is better than 600 MB/s?
<br>
Hints?Comments?
<br>
<p>Thank you in advance,
<br>
Best regards,
<br>
<p><pre>
---
Cicuttin Matteo
<a href="http://www.matteocicuttin.it">http://www.matteocicuttin.it</a>
Black holes are where god divided by zero
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4200.php">Neeraj Chourasia: "[OMPI users] Re :Re:  Tuning Openmpi with IB Interconnect"</a>
<li><strong>Previous message:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>In reply to:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Reply:</strong> <a href="4309.php">Jeff Squyres: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
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
