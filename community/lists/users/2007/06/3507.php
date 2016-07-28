<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 15:40:56 2007" -->
<!-- isoreceived="20070619194056" -->
<!-- sent="Tue, 19 Jun 2007 15:40:36 -0400" -->
<!-- isosent="20070619194036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="BA339C00-908A-45F5-AFC7-F9B844D5F1B4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A39F5E5E-DDF3-44D1-95E8-5EA12CCC9866_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-06-19 15:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3508.php">Andrew Friedley: "[OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3506.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2007, at 2:24 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; While limiting the ports used by Open MPI might be a good idea, I'm  
</span><br>
<span class="quotelev1">&gt; skeptical about it. For at least 2 reasons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I don't believe the OS to release the binding when we close the  
</span><br>
<span class="quotelev1">&gt; socket. As an example on Linux the kernel sockets are release at a  
</span><br>
<span class="quotelev1">&gt; later moment. That means the socket might be still in use for the  
</span><br>
<span class="quotelev1">&gt; next run.
</span><br>
<p>So...?  If you define a large enough range, it's not a big enough  
<br>
deal -- if you use port N for one run, if you start another run right  
<br>
after the first one finishes, you'll use port N+1.
<br>
<p><span class="quotelev1">&gt; 2. Multiple processes on the same node will try to bind the ports  
</span><br>
<span class="quotelev1">&gt; in same order. Is this really safe ?
</span><br>
<p>Sure.  Say that 2 processes try to bind to the same port  
<br>
simultaneously.  If they can both succeed binding to the same port,  
<br>
I'd say that the kernel is pretty broken!
<br>
<p>That being said, I am equally dubious about restricting to specific  
<br>
port ranges, but for different reasons:
<br>
<p>1. If you're trying to go through firewalls, this isn't enough.   
<br>
You'll also need &quot;external&quot; IP addresses for each internal IP  
<br>
address.  This alone is such a hassle that it really makes the  
<br>
concept not worth it (and no competent network/firewall admin would  
<br>
agree to do it ;-) ).  Instead, you'd want a *single* punch-through  
<br>
in the firewall to communicate between processes in front of and  
<br>
behind the firewall, and then have some MPI-level routing to  
<br>
multiplex all relevant MPI communication through that single pinhole.
<br>
<p>2. If your range is small enough and you execute lots and lots of  
<br>
short jobs on the same nodes, you could run out of available ports in  
<br>
the range while the kernel is shutting down the sockets from the  
<br>
previous runs.
<br>
<p>That being said, I *can* see at least one argument for wanting  
<br>
restricted TCP port ranges: using switches for traffic shaping or  
<br>
other kinds of QoS/filtering based on port range.  For example, if  
<br>
you have a TCP-based HPC cluster, you might want to give priority to  
<br>
your MPI traffic.  If the MPI traffic is guaranteed to be in a  
<br>
specific port range, you can do that.
<br>
<p>This is why I asked about the network topology in my previous mail.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3508.php">Andrew Friedley: "[OMPI users] error -- libtool unsupported hardcode properties"</a>
<li><strong>Previous message:</strong> <a href="3506.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="3504.php">George Bosilca: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="3531.php">Chris Reeves: "Re: [OMPI users] Processes stuck in MPI_BARRIER"</a>
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
