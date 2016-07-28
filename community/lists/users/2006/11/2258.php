<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 10:18:16 2006" -->
<!-- isoreceived="20061130151816" -->
<!-- sent="Thu, 30 Nov 2006 08:18:03 -0700" -->
<!-- isosent="20061130151803" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual Gigabit ethernet support" -->
<!-- id="DE5CDCC7-2D2D-4ABE-8AD1-C8DD20424BC4_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="e7ba66e40610231505q53e64dedqfe7f58f6d4397f30_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-11-30 10:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2259.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2257.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking VERY briefly at the GAMMA API here:
<br>
<a href="http://www.disi.unige.it/project/gamma/gamma_api.html">http://www.disi.unige.it/project/gamma/gamma_api.html</a>
<br>
<p>It looks like one could create a GAMMA BTL with a minimal amount of  
<br>
trouble.
<br>
I would encourage your group to do this!
<br>
<p>There is quite a bit of information regarding the BTL interface, and  
<br>
for GAMMA it looks like all you would need is the send/recv  
<br>
interfaces to start. You could do trickier things with the RDMA put/ 
<br>
get interfaces in an attempt to minimize memory copies (we do this  
<br>
with TCP) but this is not necessary for correctness. Anyway, here is  
<br>
the current list of docs that explain our P2P layers:
<br>
<p>Here is a paper on PML OB1, this is the upper layer above the BTL's  
<br>
you wouldn't need to worry much about this but good to know what we  
<br>
are doing...:
<br>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols</a>
<br>
<p>There is also some information in this paper this has information  
<br>
about the PML BTL interactions, from an IB point of view:
<br>
<a href="http://www.open-mpi.org/papers/ipdps-2006">http://www.open-mpi.org/papers/ipdps-2006</a>
<br>
<p>For a very detailed presentation on OB1 go here, this is probably the  
<br>
most relevant:
<br>
<a href="http://www.open-mpi.org/papers/workshop-2006/wed_01_pt2pt.pdf">http://www.open-mpi.org/papers/workshop-2006/wed_01_pt2pt.pdf</a>
<br>
<p><p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Oct 23, 2006, at 4:05 PM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; On 10/23/06, Tony Ladd &lt;ladd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A couple of comments regarding issues raised by this thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) In my opinion Netpipe is not such a great network benchmarking  
</span><br>
<span class="quotelev2">&gt;&gt; tool for
</span><br>
<span class="quotelev2">&gt;&gt; HPC applications. It measures timings based on the completion of  
</span><br>
<span class="quotelev2">&gt;&gt; the send
</span><br>
<span class="quotelev2">&gt;&gt; call on the transmitter not the completion of the receive. Thus,  
</span><br>
<span class="quotelev2">&gt;&gt; if there is
</span><br>
<span class="quotelev2">&gt;&gt; a delay in copying the send buffer across the net, it will report a
</span><br>
<span class="quotelev2">&gt;&gt; misleading timing compared with the wall-clock time. This is  
</span><br>
<span class="quotelev2">&gt;&gt; particularly
</span><br>
<span class="quotelev2">&gt;&gt; problematic with multiple pairs of edge exchanges, which can  
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribe
</span><br>
<span class="quotelev2">&gt;&gt; most GigE switches. Here the netpipe timings can be off by orders of
</span><br>
<span class="quotelev2">&gt;&gt; magnitude compared with the wall clock. The good thing about  
</span><br>
<span class="quotelev2">&gt;&gt; writing your
</span><br>
<span class="quotelev2">&gt;&gt; own code is that you know what it has done (of course no one else  
</span><br>
<span class="quotelev2">&gt;&gt; knows,
</span><br>
<span class="quotelev2">&gt;&gt; which can be a problem). But it seems many people are unaware of  
</span><br>
<span class="quotelev2">&gt;&gt; the timing
</span><br>
<span class="quotelev2">&gt;&gt; issue in Netpipe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes! I've noticed that. I am now using Intel MPI Benchmarck. PingPong
</span><br>
<span class="quotelev1">&gt; /PingPing and SendRecv test cases seems to be more realistic. Does any
</span><br>
<span class="quotelev1">&gt; one have any comments about this test suite?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Its worth distinguishing between ethernet and TCP/IP. With  
</span><br>
<span class="quotelev2">&gt;&gt; MPIGAMMA, the
</span><br>
<span class="quotelev2">&gt;&gt; Intel Pro 1000 NIC has a latency of 12 microsecs including the  
</span><br>
<span class="quotelev2">&gt;&gt; switch and a
</span><br>
<span class="quotelev2">&gt;&gt; duplex bandwidth of 220 MBytes/sec. With the Extreme Networks  
</span><br>
<span class="quotelev2">&gt;&gt; X450a-48t
</span><br>
<span class="quotelev2">&gt;&gt; switch we can sustain 220MBytes/sec over 48 ports at once. This is  
</span><br>
<span class="quotelev2">&gt;&gt; not IB
</span><br>
<span class="quotelev2">&gt;&gt; performance but it seems sufficient to scale a number of  
</span><br>
<span class="quotelev2">&gt;&gt; applications to the
</span><br>
<span class="quotelev2">&gt;&gt; 100 cpu level, and perhaps beyond.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GAMMA seems to be a great work, looking at some of its reports in web
</span><br>
<span class="quotelev1">&gt; site. Hoever, I have not tried it yet, and I am not sure if I will,
</span><br>
<span class="quotelev1">&gt; mainly because only supports MPICH-1. Has anyone any rough idea how
</span><br>
<span class="quotelev1">&gt; much work it could be to make it availabe for OpenMPI. Seems to be a
</span><br>
<span class="quotelev1">&gt; very interesting student project...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalc&#237;n
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2259.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>Previous message:</strong> <a href="2257.php">Galen Shipman: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2039.php">Lisandro Dalcin: "Re: [OMPI users] dual Gigabit ethernet support"</a>
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
