<?
$subject_val = "Re: [OMPI users] Question about '--mca btl tcp,self'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 12:37:14 2014" -->
<!-- isoreceived="20140317163714" -->
<!-- sent="Mon, 17 Mar 2014 12:37:07 -0400" -->
<!-- isosent="20140317163707" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about '--mca btl tcp,self'" -->
<!-- id="532724B3.8020104_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DAC4282A-9B70-465D-93D3-1CCB1B5A113D_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-17 12:37:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>In reply to:</strong> <a href="23870.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/17/2014 10:52 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; To add on to what Ralph said:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. There are two different message passing paths in OMPI:
</span><br>
<span class="quotelev1">&gt;     - &quot;OOB&quot; (out of band): used for control messages
</span><br>
<span class="quotelev1">&gt;     - &quot;BTL&quot; (byte transfer layer): used for MPI traffic
</span><br>
<span class="quotelev1">&gt;     (there are actually others, but these seem to be the relevant 2 for your setup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If you don't specify which OOB interfaces
</span><br>
to use OMPI will (basically) just pick one.
<br>
It doesn't really matter which one it uses;
<br>
the OOB channel doesn't use too much bandwidth,
<br>
and is mostly just during startup and shutdown.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The one exception to this is stdout/stderr routing.
</span><br>
If your MPI app writes to stdout/stderr, this also uses the OOB path.
<br>
So if you output a LOT to stdout, then the OOB interface choice might 
<br>
matter.
<br>
<p>Hi All
<br>
<p>Not trying to hijack Jianyu's very interesting and informative questions 
<br>
and thread, I have two questions and one note about it.
<br>
I promise to shut up after this.
<br>
<p>Is the interface that OOB picks and uses
<br>
somehow related to how the hosts/nodes names listed
<br>
in a &quot;hostfile&quot;
<br>
(or in the mpiexec command -host option,
<br>
or in the Torque/SGE/Slurm node file,)
<br>
are resolved into IP addresses (via /etc/hosts, DNS or other mechanism)?
<br>
<p>In other words, does OOB pick the interface associated to the IP address
<br>
that resolves the specific node name, or does OOB have its own will and
<br>
picks whatever interface it wants?
<br>
<p>At some early point during startup I suppose mpiexec
<br>
needs to touch base first time with each node,
<br>
and I would guess the nodes' IP address
<br>
(and the corresponding interface) plays a role then.
<br>
Does OOB piggy-back that same interface to do its job?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. If you don't specify which MPI interfaces to use, OMPI will basically find the
</span><br>
&quot;best&quot; set of interfaces and use those.  IP interfaces are always rated 
<br>
less than
<br>
OS-bypass interfaces (e.g., verbs/IB).
<br>
<p><p>In a node outfitted with more than one Inifinband interface,
<br>
can one choose which one OMPI is going to use (say, if one wants to
<br>
reserve the other IB interface for IO)?
<br>
<p>In other words, are there verbs/rdma syntax equivalent to
<br>
<p>--mca btl_tcp_if_include
<br>
<p>and to
<br>
<p>--mca oob_tcp_if_include  ?
<br>
<p>[Perhaps something like --mca btl_openib_if_include ...?]
<br>
<p>Forgive me if this question doesn't make sense,
<br>
for maybe on its guts verbs/rdma already has a greedy policy of using 
<br>
everything available, but I don't know anything about it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, as you noticed, you can give a comma-delimited list of BTLs to use.
</span><br>
OMPI will then use -- at most -- exactly those BTLs, but definitely no 
<br>
others.
<br>
Each BTL typically has an additional parameter or parameters that can be 
<br>
used
<br>
to specify which interfaces to use for the network interface type that 
<br>
that BTL uses.
<br>
For example, btl_tcp_if_include tells the TCP BTL which interface(s) to use.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, note that you seem to have missed a BTL: sm (shared memory).
</span><br>
sm is the preferred BTL to use for same-server communication.
<br>
<p>This may be because several FAQs skip the sm BTL, even when it would
<br>
be an appropriate/recommended choice to include in the BTL list.
<br>
For instance:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=all#selecting-components">http://www.open-mpi.org/faq/?category=all#selecting-components</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=all#tcp-selection">http://www.open-mpi.org/faq/?category=all#tcp-selection</a>
<br>
<p>The command line examples with an ellipsis &quot;...&quot; don't actually e
<br>
xclude the use of &quot;sm&quot;, but IMHO are too vague and somewhat misleading.
<br>
<p>I think this issue was reported/discussed before in the list,
<br>
but somehow the FAQ were not fixed.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p>It is much faster than both the TCP loopback device
<br>
(which OMPI excludes by default, BTW, which is probably
<br>
why you got reachability errors when you specifying
<br>
&quot;--mca btl tcp,self&quot;) and the verbs (i.e., &quot;openib&quot;)
<br>
BTL for same-server communication.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. If you don't specify anything, OMPI usually picks the best thing for you.
</span><br>
In your case, it'll probably be equivalent to:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --mca btl openib,sm,self ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the control messages will flow across one of your IP interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. If you want to be specific about which one it uses,
</span><br>
you can specify oob_tcp_if_include.  For example:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun --mca oob_tcp_if_include eth0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2014, at 1:18 AM, Jianyu Liu &lt;jerry_leo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 14, 2014, at 10:16:34 AM,Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 14, 2014, at 10:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. If specified '--mca btl tcp,self', which interface application will run on, use GigE adaper OR use the OpenFabrics interface in IP over IB mode (just like a high performance GigE adapter) ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Both - ip over ib looks just like an Ethernet adaptor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To be clear: the TCP BTL will use all TCP interfaces (regardless of underlying physical transport). Your GigE adapter and your IP adapter both present IP interfaces to&gt;the OS, and both support TCP. So the TCP BTL will use them, because it just sees the TCP/IP interfaces.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your kindly input.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please see if I have understood correctly
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assume there are two nework
</span><br>
<span class="quotelev2">&gt;&gt;    Gigabit Ethernet
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      eth0-renamed : 192.168.[1-22].[1-14] / 255.255.192.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    InfiniBand network
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      ib0 :  172.20.[1-22].[1-4] / 255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. If specified '--mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<span class="quotelev2">&gt;&gt;      The MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev2">&gt;&gt;      On the same machine, the TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. If specified '--mca btl tcp,self --mca btl_tcp_if_include ib0'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      Both of control information ( such as setup and teardown ) and MPI messages are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev2">&gt;&gt;      On the same machine, The TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. If specified '--mca btl openib,self'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      The control information ( such as setup and teardown ) are routed to and passed by InfiniBand network in IP over IB mode
</span><br>
<span class="quotelev2">&gt;&gt;      The MPI messages are routed to and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev2">&gt;&gt;      On the same machine, the TCP lookback device will be used for passing control and MPI messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. If without specifiying any 'mca btl' parameters
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      The control information ( such as setup and teardown ) are routed to and passed by Gigabit Ethernet in TCP/IP mode
</span><br>
<span class="quotelev2">&gt;&gt;      The MPI messages are routed and passed by InfiniBand network in RDMA mode
</span><br>
<span class="quotelev2">&gt;&gt;      On the same machine, the shared memory (sm) BTL will be used for control and MPI passing messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Appreciating your kindly input
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jianyu 		 	   		
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23872.php">Jeff Squyres (jsquyres): "Re: [OMPI users] efficient strategy with temporary message copy"</a>
<li><strong>In reply to:</strong> <a href="23870.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23874.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Reply:</strong> <a href="23875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
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
