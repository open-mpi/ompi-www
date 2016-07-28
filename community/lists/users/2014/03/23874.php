<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 13:02:55 2014" -->
<!-- isoreceived="20140317170255" -->
<!-- sent="Mon, 17 Mar 2014 10:01:39 -0700" -->
<!-- isosent="20140317170139" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="107E296B-A320-4457-AE5B-D8F664BB199A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="532724B3.8020104_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-03-17 13:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 17, 2014, at 9:37 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 03/17/2014 10:52 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; To add on to what Ralph said:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. There are two different message passing paths in OMPI:
</span><br>
<span class="quotelev2">&gt;&gt;    - &quot;OOB&quot; (out of band): used for control messages
</span><br>
<span class="quotelev2">&gt;&gt;    - &quot;BTL&quot; (byte transfer layer): used for MPI traffic
</span><br>
<span class="quotelev2">&gt;&gt;    (there are actually others, but these seem to be the relevant 2 for your setup)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. If you don't specify which OOB interfaces
</span><br>
<span class="quotelev1">&gt; to use OMPI will (basically) just pick one.
</span><br>
<span class="quotelev1">&gt; It doesn't really matter which one it uses;
</span><br>
<span class="quotelev1">&gt; the OOB channel doesn't use too much bandwidth,
</span><br>
<span class="quotelev1">&gt; and is mostly just during startup and shutdown.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The one exception to this is stdout/stderr routing.
</span><br>
<span class="quotelev1">&gt; If your MPI app writes to stdout/stderr, this also uses the OOB path.
</span><br>
<span class="quotelev1">&gt; So if you output a LOT to stdout, then the OOB interface choice might matter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not trying to hijack Jianyu's very interesting and informative questions and thread, I have two questions and one note about it.
</span><br>
<span class="quotelev1">&gt; I promise to shut up after this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the interface that OOB picks and uses
</span><br>
<span class="quotelev1">&gt; somehow related to how the hosts/nodes names listed
</span><br>
<span class="quotelev1">&gt; in a &quot;hostfile&quot;
</span><br>
<span class="quotelev1">&gt; (or in the mpiexec command -host option,
</span><br>
<span class="quotelev1">&gt; or in the Torque/SGE/Slurm node file,)
</span><br>
<span class="quotelev1">&gt; are resolved into IP addresses (via /etc/hosts, DNS or other mechanism)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In other words, does OOB pick the interface associated to the IP address
</span><br>
<span class="quotelev1">&gt; that resolves the specific node name, or does OOB have its own will and
</span><br>
<span class="quotelev1">&gt; picks whatever interface it wants?
</span><br>
<p>The OOB on each node gets the list of available interfaces from the kernel on that node. When it needs to talk to someone on a remote node, it uses the standard mechanisms to resolve that node name to an IP address *if* it already isn't one - i.e., it checks the provided info to see if it is an IP address, and attempts to resolve the name if not.
<br>
<p>Once it has an IP address for the remote host, it checks its interfaces to see if one is on the same subnet as the remote IP. If so, then it uses that interface to create the connection. If none of the interfaces share the same subnet as the remote IP, then the OOB picks the first kernel-ordered interface and attempts to connect via that one, in the hope that there is a router in the system capable of passing the connection to the remote subnet. The OOB will cycle across all its interfaces in that manner until one indicates that it was indeed able to connect - if not, then we error out.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At some early point during startup I suppose mpiexec
</span><br>
<span class="quotelev1">&gt; needs to touch base first time with each node,
</span><br>
<span class="quotelev1">&gt; and I would guess the nodes' IP address
</span><br>
<span class="quotelev1">&gt; (and the corresponding interface) plays a role then.
</span><br>
<span class="quotelev1">&gt; Does OOB piggy-back that same interface to do its job?
</span><br>
<p>Yes - once we establish that connection, we use it for whatever OOB communication is required.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. If you don't specify which MPI interfaces to use, OMPI will basically find the
</span><br>
<span class="quotelev1">&gt; &quot;best&quot; set of interfaces and use those.  IP interfaces are always rated less than
</span><br>
<span class="quotelev1">&gt; OS-bypass interfaces (e.g., verbs/IB).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a node outfitted with more than one Inifinband interface,
</span><br>
<span class="quotelev1">&gt; can one choose which one OMPI is going to use (say, if one wants to
</span><br>
<span class="quotelev1">&gt; reserve the other IB interface for IO)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In other words, are there verbs/rdma syntax equivalent to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca oob_tcp_if_include  ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Perhaps something like --mca btl_openib_if_include ...?]
</span><br>
<p>Yes - exactly as you describe
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Forgive me if this question doesn't make sense,
</span><br>
<span class="quotelev1">&gt; for maybe on its guts verbs/rdma already has a greedy policy of using everything available, but I don't know anything about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or, as you noticed, you can give a comma-delimited list of BTLs to use.
</span><br>
<span class="quotelev1">&gt; OMPI will then use -- at most -- exactly those BTLs, but definitely no others.
</span><br>
<span class="quotelev1">&gt; Each BTL typically has an additional parameter or parameters that can be used
</span><br>
<span class="quotelev1">&gt; to specify which interfaces to use for the network interface type that that BTL uses.
</span><br>
<span class="quotelev1">&gt; For example, btl_tcp_if_include tells the TCP BTL which interface(s) to use.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, note that you seem to have missed a BTL: sm (shared memory).
</span><br>
<span class="quotelev1">&gt; sm is the preferred BTL to use for same-server communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because several FAQs skip the sm BTL, even when it would
</span><br>
<span class="quotelev1">&gt; be an appropriate/recommended choice to include in the BTL list.
</span><br>
<span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#selecting-components">http://www.open-mpi.org/faq/?category=all#selecting-components</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#tcp-selection">http://www.open-mpi.org/faq/?category=all#tcp-selection</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line examples with an ellipsis &quot;...&quot; don't actually e
</span><br>
<span class="quotelev1">&gt; xclude the use of &quot;sm&quot;, but IMHO are too vague and somewhat misleading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this issue was reported/discussed before in the list,
</span><br>
<span class="quotelev1">&gt; but somehow the FAQ were not fixed.
</span><br>
<p>I can try to do something about it - largely a question of time :-/
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is much faster than both the TCP loopback device
</span><br>
<span class="quotelev1">&gt; (which OMPI excludes by default, BTW, which is probably
</span><br>
<span class="quotelev1">&gt; why you got reachability errors when you specifying
</span><br>
<span class="quotelev1">&gt; &quot;--mca btl tcp,self&quot;) and the verbs (i.e., &quot;openib&quot;)
</span><br>
<span class="quotelev1">&gt; BTL for same-server communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. If you don't specify anything, OMPI usually picks the best thing for you.
</span><br>
<span class="quotelev1">&gt; In your case, it'll probably be equivalent to:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun --mca btl openib,sm,self ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And the control messages will flow across one of your IP interfaces.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. If you want to be specific about which one it uses,
</span><br>
<span class="quotelev1">&gt; you can specify oob_tcp_if_include.  For example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun --mca oob_tcp_if_include eth0 ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 15, 2014, at 1:18 AM, Jianyu Liu &lt;jerry_leo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 14, 2014, at 10:16:34 AM,Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 14, 2014, at 10:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. If specified '--mca btl tcp,self', which interface application will run on, use GigE adaper OR use the OpenFabrics interface in IP over IB mode (just like a high performance GigE adapter) ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Both - ip over ib looks just like an Ethernet adaptor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To be clear: the TCP BTL will use all TCP interfaces (regardless of underlying physical transport). Your GigE adapter and your IP adapter both present IP interfaces to&gt;the OS, and both support TCP. So the TCP BTL will use them, because it just sees the TCP/IP interfaces.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your kindly input.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please see if I have understood correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assume there are two nework
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Gigabit Ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     eth0-renamed : 192.168.[1-22].[1-14] / 255.255.192.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   InfiniBand network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ib0 :  172.20.[1-22].[1-4] / 255.255.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. If specified '--mca btl tcp,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. If specified '--mca btl tcp,self --mca btl_tcp_if_include ib0'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Both of control information ( such as setup and teardown ) and MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On the same machine, The TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. If specified '--mca btl openib,self'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The control information ( such as setup and teardown ) are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The MPI messages are routed to and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On the same machine, the TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. If without specifiying any 'mca btl' parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     The MPI messages are routed and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On the same machine, the shared memory (sm) BTL will be used for control and MPI passing messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Appreciating your kindly input
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jianyu 		 	   		
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23873.php">Gus Correa: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
