<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 08:34:53 2006" -->
<!-- isoreceived="20060313133453" -->
<!-- sent="Mon, 13 Mar 2006 08:34:51 -0500" -->
<!-- isosent="20060313133451" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] writing a module to use OMPI on another network interface" -->
<!-- id="27DE90DB-14A2-4FDD-961F-98FAD1E1FFFF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060312173257.GA13726_at_core" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 08:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0749.php">Graham E Fagg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9278"</a>
<li><strong>Previous message:</strong> <a href="0747.php">Christian Leber: "[OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Christian Leber: "[OMPI devel] writing a module to use OMPI on another network interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 12, 2006, at 12:32 PM, Christian Leber wrote:
<br>
<p><span class="quotelev1">&gt; I would like to write a module (i think that's the right terminology)
</span><br>
<span class="quotelev1">&gt; for OpenMPI to a new network interface.
</span><br>
<p>To be completely pedantic (but we all know what you mean, so it  
<br>
doesn't really matter), you would be writing a component.  A module  
<br>
is an instance of that component (with all it's associated state and  
<br>
all that).  Other than helping understand some of the variable names  
<br>
in the code, it really doesn't matter.
<br>
<p><span class="quotelev1">&gt; The network interface (actually a simulator) can do the following
</span><br>
<span class="quotelev1">&gt; simple things:
</span><br>
<span class="quotelev1">&gt; -return the size of the network
</span><br>
<span class="quotelev1">&gt; -return the id of the node inside the network
</span><br>
<span class="quotelev1">&gt; -send non-blocking to a node
</span><br>
<span class="quotelev1">&gt; -probe for messages
</span><br>
<span class="quotelev1">&gt; -recv blocking
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it's a pretty simple interface, the connection to the simulator  
</span><br>
<span class="quotelev1">&gt; works
</span><br>
<span class="quotelev1">&gt; over normal TCP/IP sockets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So how should I start doing this?
</span><br>
<span class="quotelev1">&gt; Or is there something existing i could modify?
</span><br>
The answer is &quot;it depends&quot; ;).
<br>
<p>At an absolute minimum, you will have to write a BTL component for  
<br>
MPI message transport.  The BTL code is in &lt;top srcdir&gt;/ompi/mca/ 
<br>
btl/, with the interface specified in &lt;top srcdir&gt;/ompi/mca/btl/ 
<br>
btl.h.  I believe there is an example BTL you can use as a starting  
<br>
point, but if not, there are a number of already implemented BTLs  
<br>
that you can look at.  I'd explicitly recommend not looking at the  
<br>
Portals BTL, as it is layered over a communication architecture that  
<br>
is the polar opposite of yours - it has RDMA put/get but no send/ 
<br>
recv.  You do not need to implement the btl_put and btl_get functions  
<br>
- the upper layers will just not use RDMA operations if the network  
<br>
does not support them.
<br>
<p>You're going to need a subversion checkout of Open MPI in order to  
<br>
add a new component, and therefore all the tools that requires. The  
<br>
complete list of instructions is available at:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/svn/obtaining.php">http://www.open-mpi.org/svn/obtaining.php</a>
<br>
<p>I would also recommend grabbing a copy of Doxygen so that you can  
<br>
read our interface documentation in a format more comprehendible than  
<br>
source code comments.
<br>
<p>It's possible that all you will need to do is write a BTL - I'm not  
<br>
exactly sure.  The second question is how much &quot;other network&quot; your  
<br>
simulator supports - can two processes in your simulator talk over  
<br>
TCP?  How do you intend to start processes in your simulator?  You  
<br>
will likely need to write some components for our run-time layer if  
<br>
you can't use rsh/fork/etc to start processes or the started  
<br>
processes can't make normal TCP connections for out of band  
<br>
communication.  If you include more information on how you intend  
<br>
this part to work, I can offer some more advice on the lowest effort  
<br>
way of making our run-time environment suit your needs.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0749.php">Graham E Fagg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r9278"</a>
<li><strong>Previous message:</strong> <a href="0747.php">Christian Leber: "[OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Christian Leber: "[OMPI devel] writing a module to use OMPI on another network interface"</a>
<!-- nextthread="start" -->
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
