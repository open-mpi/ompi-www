<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 01:18:25 2014" -->
<!-- isoreceived="20140315051825" -->
<!-- sent="Sat, 15 Mar 2014 05:18:24 +0000" -->
<!-- isosent="20140315051824" -->
<!-- name="Jianyu Liu" -->
<!-- email="jerry_leo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="BAY174-W26E1CE907A0B02127235CF8A730_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="mailman.24.1394812802.12708.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-03-15 01:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23870.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;On Mar 14, 2014, at 10:16:34 AM,Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Mar 14, 2014, at 10:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. If specified '--mca btl tcp,self', which interface application will run on, use GigE adaper OR use the OpenFabrics interface in IP over IB mode (just like a high performance GigE adapter) ? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Both - ip over ib looks just like an Ethernet adaptor 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To be clear: the TCP BTL will use all TCP interfaces (regardless of underlying physical transport). Your GigE adapter and your IP adapter both present IP interfaces to&gt;the OS, and both support TCP. So the TCP BTL will use them, because it just sees the TCP/IP interfaces. 
</span><br>
<p>Thanks for your kindly input.
<br>
<p>Please see if I have understood correctly
<br>
<p>Assume there are two nework
<br>
&nbsp;&nbsp;&nbsp;Gigabit Ethernet
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eth0-renamed : 192.168.[1-22].[1-14] / 255.255.192.0
<br>
<p>&nbsp;&nbsp;&nbsp;InfiniBand network
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ib0 :  172.20.[1-22].[1-4] / 255.255.0.0
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
1. If specified '--mca btl tcp,self
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The MPI messages are routed to and passed by InfiniBand network in IP over IB mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On the same machine, the TCP lookback device will be used for passing control and MPI messages 
<br>
<p>2. If specified '--mca btl tcp,self --mca btl_tcp_if_include ib0'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Both of control information ( such as setup and teardown ) and MPI messages are routed to and passed by InfiniBand network in IP over IB mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On the same machine, The TCP lookback device will be used for passing control and MPI messages
<br>
<p>&nbsp;
<br>
3. If specified '--mca btl openib,self'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The control information ( such as setup and teardown ) are routed to and passed by InfiniBand network in IP over IB mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The MPI messages are routed to and passed by InfiniBand network in RDMA mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On the same machine, the TCP lookback device will be used for passing control and MPI messages
<br>
<p><p>4. If without specifiying any 'mca btl' parameters
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The MPI messages are routed and passed by InfiniBand network in RDMA mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On the same machine, the shared memory (sm) BTL will be used for control and MPI passing messages
<br>
<p><p>Appreciating your kindly input
<br>
<p>Jianyu 		 	   		  <br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23851.php">Ralph Castain: "Re: [OMPI users] exporting PATH ineffective for finding MPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="23842.php">Jianyu Liu: "[OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23870.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
