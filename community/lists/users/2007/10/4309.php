<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 20:19:02 2007" -->
<!-- isoreceived="20071025001902" -->
<!-- sent="Wed, 24 Oct 2007 20:18:52 -0400" -->
<!-- isosent="20071025001852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuning Openmpi with IB Interconnect" -->
<!-- id="F08A0F6B-EBC9-4B6C-AB8D-E9745FBF8161_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FA08A877-DF3B-4CB4-AF57-B88AFB1EE06A_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 20:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4310.php">Jeff Squyres: "Re: [OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>Previous message:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>In reply to:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I missed this message before... it got lost in the deluge that  
<br>
is my inbox.
<br>
<p>Are you using the mpi_leave_pinned MCA parameter?  That will make a  
<br>
big difference on the typical ping-pong benchmarks:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca mpi_leave_pinned 1 ....
<br>
<p><p><p>On Oct 11, 2007, at 11:44 AM, Matteo Cicuttin wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Il giorno 11/ott/07, alle ore 07:16, Neeraj Chourasia ha scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Could anyone tell me the important tuning parameters in  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi with IB interconnect? I tried setting eager_rdma,  
</span><br>
<span class="quotelev2">&gt;&gt; min_rdma_size, mpi_leave_pinned parameters from the mpirun command  
</span><br>
<span class="quotelev2">&gt;&gt; line on 38 nodes cluster (38*2 processors) but in vain. I found  
</span><br>
<span class="quotelev2">&gt;&gt; simple mpirun with no mca parameters performing better. I  
</span><br>
<span class="quotelev2">&gt;&gt; conducted test on P2P send/receive with data size of 8MB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Similarly i patched HPL linpack code with libnbc(non blocking  
</span><br>
<span class="quotelev2">&gt;&gt; collectives) and found no performance benefits. I went through its  
</span><br>
<span class="quotelev2">&gt;&gt; patch and found that, its probably not overlapping computation  
</span><br>
<span class="quotelev2">&gt;&gt; with communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help in this direction would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; -Neeraj
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm Matteo, and I work for a company that produces HPC systems, in  
</span><br>
<span class="quotelev1">&gt; Italy.
</span><br>
<span class="quotelev1">&gt; I'm new in that company and I'm looking for some help, and this  
</span><br>
<span class="quotelev1">&gt; thread seems to be good :)
</span><br>
<span class="quotelev1">&gt; In the last days we're benchmarking a system, and I'm interested in  
</span><br>
<span class="quotelev1">&gt; some performance
</span><br>
<span class="quotelev1">&gt; scores of the infiniband interconnect.
</span><br>
<span class="quotelev1">&gt; The nodes are dual dual-core opteron machines and we use the PCI-X  
</span><br>
<span class="quotelev1">&gt; IB interfaces Mellanox Cougar Cub.
</span><br>
<span class="quotelev1">&gt; Machines have the 8111 system controller and the 8131 PCI-X bridge.
</span><br>
<span class="quotelev1">&gt; We reach a rate of about 600 MB/s in the point-to-point tests.
</span><br>
<span class="quotelev1">&gt; This rate (more or less) is reported both by the ib_*_bw benchmarks  
</span><br>
<span class="quotelev1">&gt; and the IMB-MPI (sendrecv) benchmarks, version 3.
</span><br>
<span class="quotelev1">&gt; MPI implementation is, of course, openmpi.
</span><br>
<span class="quotelev1">&gt; I've read in a few places that a similar setup can reach about 800  
</span><br>
<span class="quotelev1">&gt; MB/s on machines similar to those descripted above.
</span><br>
<span class="quotelev1">&gt; Someone can confirm this? Someone have similar hardware and the  
</span><br>
<span class="quotelev1">&gt; measured bandwidth is better than 600 MB/s?
</span><br>
<span class="quotelev1">&gt; Hints?Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Cicuttin Matteo
</span><br>
<span class="quotelev1">&gt; <a href="http://www.matteocicuttin.it">http://www.matteocicuttin.it</a>
</span><br>
<span class="quotelev1">&gt; Black holes are where god divided by zero
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4310.php">Jeff Squyres: "Re: [OMPI users] 1.2.4 cross-compilation problem"</a>
<li><strong>Previous message:</strong> <a href="4308.php">Jeff Squyres: "Re: [OMPI users] MPI::BOTTOM vs MPI_BOTTOM"</a>
<li><strong>In reply to:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
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
