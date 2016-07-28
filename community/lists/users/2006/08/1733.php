<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 10 17:18:14 2006" -->
<!-- isoreceived="20060810211814" -->
<!-- sent="Thu, 10 Aug 2006 17:18:12 -0400" -->
<!-- isosent="20060810211812" -->
<!-- name="Donald Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network preference" -->
<!-- id="44DBA294.8010507_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="44DB9FD8.7040303_at_open-mpi.org" -->
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
<strong>From:</strong> Donald Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-10 17:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Andrew I have one for you...
<br>
<p>I get the following error message on a node that does not have any IB cards
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: uDAPL on host burl-ct-v40z-0 was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
<p>but I don't see this for the openib btl. Why udapl and not openib? Am I 
<br>
missing something?
<br>
<p>-DON
<br>
<p>Andrew Friedley wrote On 08/10/06 17:06,:
<br>
<p><span class="quotelev1">&gt;Hopefully some of the other developers will correct me if I am wrong..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I had a user ask this,  its not a very practical question but I am  
</span><br>
<span class="quotelev2">&gt;&gt;curious.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This is good information for the archives :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;OMPI uses a 'fast' network if its available.  (IB, GM, etc)  I also  
</span><br>
<span class="quotelev2">&gt;&gt;infer that for process in the same SMP nodes the sm (shared memory)  
</span><br>
<span class="quotelev2">&gt;&gt;btl is used, even if the job has more than one node given to it?  The  
</span><br>
<span class="quotelev2">&gt;&gt;real question is what happens if a job is given three nodes, two have  
</span><br>
<span class="quotelev2">&gt;&gt;IB adapters and all have ethernet.  Will the entire job use TCP for  
</span><br>
<span class="quotelev2">&gt;&gt;process on different nodes and shared memory inner node?  Or will the  
</span><br>
<span class="quotelev2">&gt;&gt;two that have ib connections use ib to communicate and only use TCP  
</span><br>
<span class="quotelev2">&gt;&gt;when talking to the third host that does not have IB.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You infer correctly - sm is just considered to be another network we 
</span><br>
<span class="quotelev1">&gt;support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The two nodes with IB will use IB to communicate with each other, and 
</span><br>
<span class="quotelev1">&gt;ethernet (TCP) to communicate with the third node that lacks IB.  This 
</span><br>
<span class="quotelev1">&gt;works the same for shared memory - MPI processes on the same node will 
</span><br>
<span class="quotelev1">&gt;use SM to communicate, and use say IB or TCP to communicate off-node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Second would it be safe to say OMPI searches the BTL's in the  
</span><br>
<span class="quotelev2">&gt;&gt;following order when trying to reach a process?
</span><br>
<span class="quotelev2">&gt;&gt;Self
</span><br>
<span class="quotelev2">&gt;&gt;SM
</span><br>
<span class="quotelev2">&gt;&gt;IB, GM, MX, MVAPI
</span><br>
<span class="quotelev2">&gt;&gt;TCP
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Actually, each BTL has an exclusivity value that we use to choose which 
</span><br>
<span class="quotelev1">&gt;BTL is given preference when we have several BTLs available for 
</span><br>
<span class="quotelev1">&gt;communication.  A quick grep shows you're pretty much right on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ ompi_info --all|grep exclusivity
</span><br>
<span class="quotelev1">&gt;  MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;)
</span><br>
<span class="quotelev1">&gt;  MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
</span><br>
<span class="quotelev1">&gt;  MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;  MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;These of course can be tuned, though expect trouble if you give 
</span><br>
<span class="quotelev1">&gt;something higher exclusivity than self.  These numbers have no real 
</span><br>
<span class="quotelev1">&gt;meaning other than their relation to one another.  For example, changing 
</span><br>
<span class="quotelev1">&gt;openib's exclusivity to 65000 won't change when/how it is used among the 
</span><br>
<span class="quotelev1">&gt;BTLs I have above, though it would possibly change relative to 
</span><br>
<span class="quotelev1">&gt;GM/MX/MVAPI if they're present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Third, what about a hypothetical case when a node has both GM and IB  
</span><br>
<span class="quotelev2">&gt;&gt;on it?  (evaluation machines)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(This is where I might be wrong) The network with the highest 
</span><br>
<span class="quotelev1">&gt;exclusivity is used for sending of eager messages and the initial part 
</span><br>
<span class="quotelev1">&gt;of large messages using rendezvous protocol.  Beyond that, large message 
</span><br>
<span class="quotelev1">&gt;data is striped across all available BTLs for more bandwidth.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You probably know already that the 'btl' MCA parameter can be used to 
</span><br>
<span class="quotelev1">&gt;select a set of BTLs at runtime, ie to just use IB (and self).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Last does OMPI build something like a route list when mpi_init() is  
</span><br>
<span class="quotelev2">&gt;&gt;called?  This way knowing how to get to other members off the job?   
</span><br>
<span class="quotelev2">&gt;&gt;Or is this done the first time a process needs to talk to another  
</span><br>
<span class="quotelev2">&gt;&gt;process thus not storing any route information not needed.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes - at initialization time (and when processes are dynamically added), 
</span><br>
<span class="quotelev1">&gt;each BTL is responsible for determining which other processes it can 
</span><br>
<span class="quotelev1">&gt;communicate with.  This information is pushed back up to the higher 
</span><br>
<span class="quotelev1">&gt;levels (BML/PML) for use in scheduling decisions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, those BTLs that communicate over point-to-point connection 
</span><br>
<span class="quotelev1">&gt;pairs do not establish connections until data needs to be sent (lazy 
</span><br>
<span class="quotelev1">&gt;connection establishment).  This way we do not immediately set up N^2 
</span><br>
<span class="quotelev1">&gt;connections, but instead only as each pairwise communication path is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The route information consumes relatively few resources compared to all 
</span><br>
<span class="quotelev1">&gt;the buffers and handles that must be allocated for connections in most 
</span><br>
<span class="quotelev1">&gt;of the BTLs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;p.s.  not having to recompile code for different networks has made  
</span><br>
<span class="quotelev2">&gt;&gt;evaluating network so much more enjoyable.  Thank-you for all the  
</span><br>
<span class="quotelev2">&gt;&gt;work on the selection of networks 'just working'
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That was our goal, stuff should just work.  Glad you appreciate it as 
</span><br>
<span class="quotelev1">&gt;much as we do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Andrew
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>In reply to:</strong> <a href="1732.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1734.php">Andrew Friedley: "Re: [OMPI users] network preference"</a>
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
