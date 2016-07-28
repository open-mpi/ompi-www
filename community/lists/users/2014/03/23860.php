<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 16 03:16:42 2014" -->
<!-- isoreceived="20140316071642" -->
<!-- sent="Sun, 16 Mar 2014 07:16:41 +0000" -->
<!-- isosent="20140316071641" -->
<!-- name="Jianyu Liu" -->
<!-- email="jerry_leo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="BAY174-W44C5D1920077EB26712B278A720_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1FDCAE66-F582-479D-981A-4FF01DE8DB26_at_open-mpi.org" -->
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
<strong>From:</strong> Jianyu Liu (<em>jerry_leo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-16 03:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23859.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>In reply to:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your kindly input
<br>
<p>More further questions
<br>
<p>1.  How to check  and change the ordering of network  interfaces, such as tcp, ib, etc.,  in the kernel?
<br>
<p>2.  One of my applications only can run with &quot;--mca btl tcp,self&quot;,  otherwise aborted without specific error messages, even if run on single node.    How to figure out the possible reasons? 
<br>
<p>Appreciating your kindly input
<br>
<p>Jianyu
<br>
<p><p><span class="quotelev1">&gt; From: rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 15 Mar 2014 07:21:31 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Question about '--mca btl tcp,self'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 14, 2014, at 10:18 PM, Jianyu Liu &lt;jerry_leo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 14, 2014, at 10:16:34 AM,Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mar 14, 2014, at 10:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1. If specified '--mca btl tcp,self', which interface application will run on, use GigE adaper OR use the OpenFabrics interface in IP over IB mode (just like a high performance GigE adapter) ? 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Both - ip over ib looks just like an Ethernet adaptor 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To be clear: the TCP BTL will use all TCP interfaces (regardless of underlying physical transport). Your GigE adapter and your IP adapter both present IP interfaces to&gt;the OS, and both support TCP. So the TCP BTL will use them, because it just sees the TCP/IP interfaces. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your kindly input.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please see if I have understood correctly
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Assume there are two nework
</span><br>
<span class="quotelev2">&gt; &gt;   Gigabit Ethernet
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     eth0-renamed : 192.168.[1-22].[1-14] / 255.255.192.0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   InfiniBand network
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     ib0 :  172.20.[1-22].[1-4] / 255.255.0.0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. If specified '--mca btl tcp,self
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not necessarily - the out-of-band (OOB) system will pickup one of the TCP interfaces, but which one depends on the ordering in the kernel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     The MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not necessarily - could use either device
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the TCP BTL would use the selected device for loopback, ignoring the loopback device
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. If specified '--mca btl tcp,self --mca btl_tcp_if_include ib0'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     Both of control information ( such as setup and teardown ) and MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No - control info is sent by the OOB, not the BTL. To get what you describe, you would have to add &quot;-mca oob_tcp_if_include ib0&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     On the same machine, The TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No - the TCP MPI messages would loopback via the ib0 device
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3. If specified '--mca btl openib,self'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     The control information ( such as setup and teardown ) are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not necessarily - same answer as #1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     The MPI messages are routed to and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, it will use IB, but may not use RDMA. That is an internal decision tree made per-message based on a variety of factors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No - you excluded TCP for MPI messages, and so it would have to loopback within the IB stack. Control messages would loopback via TCP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 4. If without specifiying any 'mca btl' parameters
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not necessarily - same answer as #1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     The MPI messages are routed and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same as #3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;     On the same machine, the shared memory (sm) BTL will be used for control and MPI passing messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not for control - just for MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Appreciating your kindly input
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jianyu 		 	   		  
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23859.php">Ralph Castain: "Re: [OMPI users] random problems with a ring communication example"</a>
<li><strong>In reply to:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23861.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
