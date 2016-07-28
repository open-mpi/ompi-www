<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 10:22:31 2014" -->
<!-- isoreceived="20140315142231" -->
<!-- sent="Sat, 15 Mar 2014 07:21:31 -0700" -->
<!-- isosent="20140315142131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="1FDCAE66-F582-479D-981A-4FF01DE8DB26_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BAY174-W26E1CE907A0B02127235CF8A730_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about '--mca btl tcp,self'<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-15 10:21:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23856.php">christophe petit: "[OMPI users] random problems with a ring communication example"</a>
<li><strong>Previous message:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23860.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23860.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2014, at 10:18 PM, Jianyu Liu &lt;jerry_leo_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; On Mar 14, 2014, at 10:16:34 AM,Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 14, 2014, at 10:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. If specified '--mca btl tcp,self', which interface application will run on, use GigE adaper OR use the OpenFabrics interface in IP over IB mode (just like a high performance GigE adapter) ? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both - ip over ib looks just like an Ethernet adaptor 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To be clear: the TCP BTL will use all TCP interfaces (regardless of underlying physical transport). Your GigE adapter and your IP adapter both present IP interfaces to&gt;the OS, and both support TCP. So the TCP BTL will use them, because it just sees the TCP/IP interfaces. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your kindly input.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please see if I have understood correctly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assume there are two nework
</span><br>
<span class="quotelev1">&gt;   Gigabit Ethernet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     eth0-renamed : 192.168.[1-22].[1-14] / 255.255.192.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   InfiniBand network
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ib0 :  172.20.[1-22].[1-4] / 255.255.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If specified '--mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<p>Not necessarily - the out-of-band (OOB) system will pickup one of the TCP interfaces, but which one depends on the ordering in the kernel.
<br>
<p><span class="quotelev1">&gt;     The MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<p>Not necessarily - could use either device
<br>
<p><span class="quotelev1">&gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages 
</span><br>
<p>I believe the TCP BTL would use the selected device for loopback, ignoring the loopback device
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If specified '--mca btl tcp,self --mca btl_tcp_if_include ib0'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Both of control information ( such as setup and teardown ) and MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<p>No - control info is sent by the OOB, not the BTL. To get what you describe, you would have to add &quot;-mca oob_tcp_if_include ib0&quot;
<br>
<p><span class="quotelev1">&gt;     On the same machine, The TCP lookback device will be used for passing control and MPI messages
</span><br>
<p>No - the TCP MPI messages would loopback via the ib0 device
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. If specified '--mca btl openib,self'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The control information ( such as setup and teardown ) are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<p>Not necessarily - same answer as #1
<br>
<p><span class="quotelev1">&gt;     The MPI messages are routed to and passed by InfiniBand network in RDMA mode
</span><br>
<p>Well, it will use IB, but may not use RDMA. That is an internal decision tree made per-message based on a variety of factors
<br>
<p><span class="quotelev1">&gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages
</span><br>
<p>No - you excluded TCP for MPI messages, and so it would have to loopback within the IB stack. Control messages would loopback via TCP
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. If without specifiying any 'mca btl' parameters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<p>Not necessarily - same answer as #1
<br>
<p><span class="quotelev1">&gt;     The MPI messages are routed and passed by InfiniBand network in RDMA mode
</span><br>
<p>Same as #3
<br>
<p><span class="quotelev1">&gt;     On the same machine, the shared memory (sm) BTL will be used for control and MPI passing messages
</span><br>
<p>Not for control - just for MPI
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Appreciating your kindly input
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jianyu 		 	   		  
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
<li><strong>Next message:</strong> <a href="23856.php">christophe petit: "[OMPI users] random problems with a ring communication example"</a>
<li><strong>Previous message:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23860.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23860.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
