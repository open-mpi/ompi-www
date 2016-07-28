<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec  2 10:31:42 2006" -->
<!-- isoreceived="20061202153142" -->
<!-- sent="Sat, 2 Dec 2006 10:31:30 -0500" -->
<!-- isosent="20061202153130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to set paffinity on a multi-cpu node?" -->
<!-- id="A65183F5-6AB8-4198-9C23-4078CE83C582_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061201191313.GH2329_at_greglaptop.internal.keyresearch.com" -->
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
<strong>Date:</strong> 2006-12-02 10:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2279.php">Patrick Geoffray: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2277.php">Ralph Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2281.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, especially on NUMA machines (like AMDs), physical access to  
<br>
network resources (such as NICs / HCAs) can be much faster on  
<br>
specific sockets.
<br>
<p>For example, we recently ran some microbenchmarks showing that if you  
<br>
run 2 MPI processes across 2 NUMA machines (e.g., a simple ping-pong  
<br>
benchmark across 2 machines), if you pin the MPI process to socket 0/ 
<br>
core 0, you'll get noticeably better latency.  If you don't, the MPI  
<br>
process may not be consistently located physically close to the NIC/ 
<br>
HCA, resulting in more &quot;jitter&quot; in the delivered latency (or even  
<br>
worse, consistently worse latency).
<br>
<p>I *believe* that this has to do with physical setup within the  
<br>
machine (i.e., the NIC/HCA bus is physically &quot;closer&quot; to some  
<br>
sockets), but I'm not much of a hardware guy to know that for sure.   
<br>
Someone with more specific knowledge should chime in here...
<br>
<p><p>On Dec 1, 2006, at 2:13 PM, Greg Lindahl wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Dec 01, 2006 at 11:51:24AM +0100, Peter Kjellstrom wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This might be a bit naive but, if you spawn two procs on a dual  
</span><br>
<span class="quotelev2">&gt;&gt; core dual
</span><br>
<span class="quotelev2">&gt;&gt; socket system then the linux kernel should automagically schedule  
</span><br>
<span class="quotelev2">&gt;&gt; them this
</span><br>
<span class="quotelev2">&gt;&gt; way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, we checked this for OpenMP and MPI, and in both cases wiring the
</span><br>
<span class="quotelev1">&gt; processes to cores was significantly better. The Linux scheduler
</span><br>
<span class="quotelev1">&gt; (still) tends to migrate processes to the wrong core when OS threads
</span><br>
<span class="quotelev1">&gt; and processes wake up and go back to sleep.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just like the OpenMPI guys, we don't have a clever solution for the
</span><br>
<span class="quotelev1">&gt; &quot;what if the user wants to have 2 OpenMP or MPI jobs share the same
</span><br>
<span class="quotelev1">&gt; node?&quot; Well, I have a plan, but it's annoying to implement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- greg
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2279.php">Patrick Geoffray: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2277.php">Ralph Castain: "Re: [OMPI users] x11 forwarding"</a>
<li><strong>In reply to:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2280.php">Brock Palen: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Reply:</strong> <a href="2281.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
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
