<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec  2 16:38:49 2006" -->
<!-- isoreceived="20061202213849" -->
<!-- sent="Sat, 2 Dec 2006 16:37:30 -0500" -->
<!-- isosent="20061202213730" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="7B7676E3-C9B8-4FE1-A45D-E7237D0B2A2F_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A65183F5-6AB8-4198-9C23-4078CE83C582_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-02 16:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2281.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2279.php">Patrick Geoffray: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2281.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2006, at 10:31 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, especially on NUMA machines (like AMDs), physical access to
</span><br>
<span class="quotelev1">&gt; network resources (such as NICs / HCAs) can be much faster on
</span><br>
<span class="quotelev1">&gt; specific sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, we recently ran some microbenchmarks showing that if you
</span><br>
<span class="quotelev1">&gt; run 2 MPI processes across 2 NUMA machines (e.g., a simple ping-pong
</span><br>
<span class="quotelev1">&gt; benchmark across 2 machines), if you pin the MPI process to socket 0/
</span><br>
<span class="quotelev1">&gt; core 0, you'll get noticeably better latency.  If you don't, the MPI
</span><br>
<span class="quotelev1">&gt; process may not be consistently located physically close to the NIC/
</span><br>
<span class="quotelev1">&gt; HCA, resulting in more &quot;jitter&quot; in the delivered latency (or even
</span><br>
<span class="quotelev1">&gt; worse, consistently worse latency).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *believe* that this has to do with physical setup within the
</span><br>
<span class="quotelev1">&gt; machine (i.e., the NIC/HCA bus is physically &quot;closer&quot; to some
</span><br>
<span class="quotelev1">&gt; sockets), but I'm not much of a hardware guy to know that for sure.
</span><br>
<span class="quotelev1">&gt; Someone with more specific knowledge should chime in here...
</span><br>
This is true,  It is because only a single cpu has a HT connection to  
<br>
the chipset which then connects to all other devices (NIC, USB,  
<br>
HD's).    All other cpus must send data down its connection to the  
<br>
cpu with the connection to the chipset.  I think though (not sure on  
<br>
duel core) that all cpus up to 8 way, have connections to all other  
<br>
cpus.  So while a single cpu would have lower latency, all others  
<br>
should have roughly the same latency.
<br>
<p>Personally I have not ran this test, nor do i know how. Have you  
<br>
tried it yourself? I would like to know this information for our own  
<br>
systems.  (all AMD's)
<br>
<p>Brock
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 1, 2006, at 2:13 PM, Greg Lindahl wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Dec 01, 2006 at 11:51:24AM +0100, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This might be a bit naive but, if you spawn two procs on a dual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core dual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket system then the linux kernel should automagically schedule
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, we checked this for OpenMP and MPI, and in both cases wiring the
</span><br>
<span class="quotelev2">&gt;&gt; processes to cores was significantly better. The Linux scheduler
</span><br>
<span class="quotelev2">&gt;&gt; (still) tends to migrate processes to the wrong core when OS threads
</span><br>
<span class="quotelev2">&gt;&gt; and processes wake up and go back to sleep.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just like the OpenMPI guys, we don't have a clever solution for the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;what if the user wants to have 2 OpenMP or MPI jobs share the same
</span><br>
<span class="quotelev2">&gt;&gt; node?&quot; Well, I have a plan, but it's annoying to implement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- greg
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2281.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2279.php">Patrick Geoffray: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>In reply to:</strong> <a href="2278.php">Jeff Squyres: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2281.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
