<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 10:52:08 2014" -->
<!-- isoreceived="20140317145208" -->
<!-- sent="Mon, 17 Mar 2014 14:52:06 +0000" -->
<!-- isosent="20140317145206" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="DAC4282A-9B70-465D-93D3-1CCB1B5A113D_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 10:52:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23871.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and	Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23869.php">madhurima madhunapanthula: "[OMPI users] OpenMpi-java Examples"</a>
<li><strong>In reply to:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add on to what Ralph said:
<br>
<p>1. There are two different message passing paths in OMPI:
<br>
&nbsp;&nbsp;&nbsp;- &quot;OOB&quot; (out of band): used for control messages
<br>
&nbsp;&nbsp;&nbsp;- &quot;BTL&quot; (byte transfer layer): used for MPI traffic
<br>
&nbsp;&nbsp;&nbsp;(there are actually others, but these seem to be the relevant 2 for your setup)
<br>
<p>2. If you don't specify which OOB interfaces to use OMPI will (basically) just pick one.  It doesn't really matter which one it uses; the OOB channel doesn't use too much bandwidth, and is mostly just during startup and shutdown.
<br>
<p>The one exception to this is stdout/stderr routing.  If your MPI app writes to stdout/stderr, this also uses the OOB path.  So if you output a LOT to stdout, then the OOB interface choice might matter.
<br>
<p>3. If you don't specify which MPI interfaces to use, OMPI will basically find the &quot;best&quot; set of interfaces and use those.  IP interfaces are always rated less than OS-bypass interfaces (e.g., verbs/IB).
<br>
<p>Or, as you noticed, you can give a comma-delimited list of BTLs to use.  OMPI will then use -- at most -- exactly those BTLs, but definitely no others.  Each BTL typically has an additional parameter or parameters that can be used to specify which interfaces to use for the network interface type that that BTL uses.  For example, btl_tcp_if_include tells the TCP BTL which interface(s) to use.
<br>
<p>Also, note that you seem to have missed a BTL: sm (shared memory).  sm is the preferred BTL to use for same-server communication.  It is much faster than both the TCP loopback device (which OMPI excludes by default, BTW, which is probably why you got reachability errors when you specifying &quot;--mca btl tcp,self&quot;) and the verbs (i.e., &quot;openib&quot;) BTL for same-server communication.
<br>
<p>4. If you don't specify anything, OMPI usually picks the best thing for you.  In your case, it'll probably be equivalent to:
<br>
<p>&nbsp;mpirun --mca btl openib,sm,self ...
<br>
<p>And the control messages will flow across one of your IP interfaces.  
<br>
<p>5. If you want to be specific about which one it uses, you can specify oob_tcp_if_include.  For example:
<br>
<p>&nbsp;&nbsp;mpirun --mca oob_tcp_if_include eth0 ...
<br>
<p>Make sense?
<br>
<p><p><p>On Mar 15, 2014, at 1:18 AM, Jianyu Liu &lt;jerry_leo_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt;     The MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev1">&gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If specified '--mca btl tcp,self --mca btl_tcp_if_include ib0'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Both of control information ( such as setup and teardown ) and MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev1">&gt;     On the same machine, The TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. If specified '--mca btl openib,self'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The control information ( such as setup and teardown ) are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev1">&gt;     The MPI messages are routed to and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev1">&gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. If without specifiying any 'mca btl' parameters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<span class="quotelev1">&gt;     The MPI messages are routed and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev1">&gt;     On the same machine, the shared memory (sm) BTL will be used for control and MPI passing messages
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23871.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and	Mellanox HCOLL enabled"</a>
<li><strong>Previous message:</strong> <a href="23869.php">madhurima madhunapanthula: "[OMPI users] OpenMpi-java Examples"</a>
<li><strong>In reply to:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
