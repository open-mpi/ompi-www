<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 10 17:04:24 2006" -->
<!-- isoreceived="20060810210424" -->
<!-- sent="Thu, 10 Aug 2006 14:06:32 -0700" -->
<!-- isosent="20060810210632" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI users] network preference" -->
<!-- id="44DB9FD8.7040303_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8D392FBF-5D8C-4FC6-BC45-E89811AD894F_at_umich.edu" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-10 17:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1731.php">Jeff Squyres: "Re: [OMPI users] mpirun only run as root"</a>
<li><strong>In reply to:</strong> <a href="1727.php">Brock Palen: "[OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hopefully some of the other developers will correct me if I am wrong..
<br>
<p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I had a user ask this,  its not a very practical question but I am  
</span><br>
<span class="quotelev1">&gt; curious.
</span><br>
<p>This is good information for the archives :)
<br>
<p><span class="quotelev1">&gt; OMPI uses a 'fast' network if its available.  (IB, GM, etc)  I also  
</span><br>
<span class="quotelev1">&gt; infer that for process in the same SMP nodes the sm (shared memory)  
</span><br>
<span class="quotelev1">&gt; btl is used, even if the job has more than one node given to it?  The  
</span><br>
<span class="quotelev1">&gt; real question is what happens if a job is given three nodes, two have  
</span><br>
<span class="quotelev1">&gt; IB adapters and all have ethernet.  Will the entire job use TCP for  
</span><br>
<span class="quotelev1">&gt; process on different nodes and shared memory inner node?  Or will the  
</span><br>
<span class="quotelev1">&gt; two that have ib connections use ib to communicate and only use TCP  
</span><br>
<span class="quotelev1">&gt; when talking to the third host that does not have IB.
</span><br>
<p>You infer correctly - sm is just considered to be another network we 
<br>
support.
<br>
<p>The two nodes with IB will use IB to communicate with each other, and 
<br>
ethernet (TCP) to communicate with the third node that lacks IB.  This 
<br>
works the same for shared memory - MPI processes on the same node will 
<br>
use SM to communicate, and use say IB or TCP to communicate off-node.
<br>
<p><span class="quotelev1">&gt; Second would it be safe to say OMPI searches the BTL's in the  
</span><br>
<span class="quotelev1">&gt; following order when trying to reach a process?
</span><br>
<span class="quotelev1">&gt; Self
</span><br>
<span class="quotelev1">&gt; SM
</span><br>
<span class="quotelev1">&gt; IB, GM, MX, MVAPI
</span><br>
<span class="quotelev1">&gt; TCP
</span><br>
<p>Actually, each BTL has an exclusivity value that we use to choose which 
<br>
BTL is given preference when we have several BTLs available for 
<br>
communication.  A quick grep shows you're pretty much right on:
<br>
<p>$ ompi_info --all|grep exclusivity
<br>
&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_exclusivity&quot; (current value: &quot;1024&quot;)
<br>
&nbsp;&nbsp;MCA btl: parameter &quot;btl_self_exclusivity&quot; (current value: &quot;65536&quot;)
<br>
&nbsp;&nbsp;MCA btl: parameter &quot;btl_sm_exclusivity&quot; (current value: &quot;65535&quot;)
<br>
&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_exclusivity&quot; (current value: &quot;0&quot;)
<br>
<p>These of course can be tuned, though expect trouble if you give 
<br>
something higher exclusivity than self.  These numbers have no real 
<br>
meaning other than their relation to one another.  For example, changing 
<br>
openib's exclusivity to 65000 won't change when/how it is used among the 
<br>
BTLs I have above, though it would possibly change relative to 
<br>
GM/MX/MVAPI if they're present.
<br>
<p><span class="quotelev1">&gt; Third, what about a hypothetical case when a node has both GM and IB  
</span><br>
<span class="quotelev1">&gt; on it?  (evaluation machines)
</span><br>
<p>(This is where I might be wrong) The network with the highest 
<br>
exclusivity is used for sending of eager messages and the initial part 
<br>
of large messages using rendezvous protocol.  Beyond that, large message 
<br>
data is striped across all available BTLs for more bandwidth.
<br>
<p>You probably know already that the 'btl' MCA parameter can be used to 
<br>
select a set of BTLs at runtime, ie to just use IB (and self).
<br>
<p><span class="quotelev1">&gt; Last does OMPI build something like a route list when mpi_init() is  
</span><br>
<span class="quotelev1">&gt; called?  This way knowing how to get to other members off the job?   
</span><br>
<span class="quotelev1">&gt; Or is this done the first time a process needs to talk to another  
</span><br>
<span class="quotelev1">&gt; process thus not storing any route information not needed.
</span><br>
<p>Yes - at initialization time (and when processes are dynamically added), 
<br>
each BTL is responsible for determining which other processes it can 
<br>
communicate with.  This information is pushed back up to the higher 
<br>
levels (BML/PML) for use in scheduling decisions.
<br>
<p>However, those BTLs that communicate over point-to-point connection 
<br>
pairs do not establish connections until data needs to be sent (lazy 
<br>
connection establishment).  This way we do not immediately set up N^2 
<br>
connections, but instead only as each pairwise communication path is used.
<br>
<p>The route information consumes relatively few resources compared to all 
<br>
the buffers and handles that must be allocated for connections in most 
<br>
of the BTLs.
<br>
<p><span class="quotelev1">&gt; p.s.  not having to recompile code for different networks has made  
</span><br>
<span class="quotelev1">&gt; evaluating network so much more enjoyable.  Thank-you for all the  
</span><br>
<span class="quotelev1">&gt; work on the selection of networks 'just working'
</span><br>
<p>That was our goal, stuff should just work.  Glad you appreciate it as 
<br>
much as we do.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>Previous message:</strong> <a href="1731.php">Jeff Squyres: "Re: [OMPI users] mpirun only run as root"</a>
<li><strong>In reply to:</strong> <a href="1727.php">Brock Palen: "[OMPI users] network preference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
<li><strong>Reply:</strong> <a href="1733.php">Donald Kerr: "Re: [OMPI users] network preference"</a>
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
