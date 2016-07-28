<?
$subject_val = "Re: [OMPI users] Topology functions from MPI 1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 12:00:01 2008" -->
<!-- isoreceived="20080128170001" -->
<!-- sent="Mon, 28 Jan 2008 11:59:25 -0500" -->
<!-- isosent="20080128165925" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Topology functions from MPI 1.1" -->
<!-- id="BE98102E-A3D3-42A2-9FFB-232E07D13C13_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a45d2cb70801241542t324f3097tfa702f7e304161c2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Topology functions from MPI 1.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 11:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4896.php">Jeff Squyres: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>In reply to:</strong> <a href="4878.php">David Souther: "[OMPI users] Topology functions from MPI 1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends on what you are trying to do.  Is your network physically  
<br>
wired such that there is no direct link between nodes 1 and 2?  (i.e.,  
<br>
node 1 cannot directly send to node 2, such as via opening a socket  
<br>
from node 1 to node 2's IP address)
<br>
<p>MPI topology communicators do not prohibit on process from sending to  
<br>
any other process in the communicator.  They might provide more  
<br>
optimal routing for nearest-neighbor communication if the underlying  
<br>
network topology supports it, for example.
<br>
<p><p>On Jan 24, 2008, at 6:42 PM, David Souther wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My name is David Souther, and I am a student working on a parallel  
</span><br>
<span class="quotelev1">&gt; processing research project at Rocky Mountain College. We need to  
</span><br>
<span class="quotelev1">&gt; attach topology information to our processes, but the assertions we  
</span><br>
<span class="quotelev1">&gt; have been making about the MPI Topology mechanism seem to be false.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We would like to do something similar to the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Node 0 &lt;---&gt; Node 1
</span><br>
<span class="quotelev1">&gt;      |
</span><br>
<span class="quotelev1">&gt;      |
</span><br>
<span class="quotelev1">&gt;     V
</span><br>
<span class="quotelev1">&gt; Node 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, Node 0 can talk to Node 1 and 2, and Node 1 can talk to  
</span><br>
<span class="quotelev1">&gt; Node 0, but Node 2 can't talk to anyone. From what I understand, the  
</span><br>
<span class="quotelev1">&gt; code to do that would look like:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; MPI_Comm graph_comm;
</span><br>
<span class="quotelev1">&gt; int nodes = 3;
</span><br>
<span class="quotelev1">&gt; int indexes[] = {2, 3, 3};
</span><br>
<span class="quotelev1">&gt; int edges[] = {1, 2, 0};
</span><br>
<span class="quotelev1">&gt; MPI_Graph_create(MPI_COMM_WORLD, nodes, indexes, edges, 0,  
</span><br>
<span class="quotelev1">&gt; &amp;graph_comm);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is how, with my understanding, I would build that graph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then, the following pseudocode  would work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(rank == 0)
</span><br>
<span class="quotelev1">&gt; MPI_SEND(&quot;Message&quot;, To Rank 1, graph_comm)
</span><br>
<span class="quotelev1">&gt; if(rank == 1)
</span><br>
<span class="quotelev1">&gt; MPI_RECV(buffer, From Rank 0, graph_comm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this would not (It would throw an error, maybe?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(rank == 2)
</span><br>
<span class="quotelev1">&gt; MPI_SEND(&quot;Message&quot;, To Rank 0, graph_comm)
</span><br>
<span class="quotelev1">&gt; if(rank == 0)
</span><br>
<span class="quotelev1">&gt; MPI_RECV(buffer, From Rank 2, graph_comm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, the point is, that doesn't work/happen. The messages simply  
</span><br>
<span class="quotelev1">&gt; send and receive as if they were all in the global communicator  
</span><br>
<span class="quotelev1">&gt; (MPI_COMM_WORLD).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I have two questions: could (and how do I make) this work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, If I'm going at this entirely the wrong way, what is a good use  
</span><br>
<span class="quotelev1">&gt; for the topology mechanism?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you so much for your time!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -DS
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; David Souther
</span><br>
<span class="quotelev1">&gt; 1511 Poly Dr
</span><br>
<span class="quotelev1">&gt; Billings, MT, 59102
</span><br>
<span class="quotelev1">&gt; (406) 545-9223
</span><br>
<span class="quotelev1">&gt; <a href="http://www.davidsouther.com">http://www.davidsouther.com</a>  
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4896.php">Jeff Squyres: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="4894.php">Mostyn Lewis: "Re: [OMPI users] compilation with intel fortran compiller problem"</a>
<li><strong>In reply to:</strong> <a href="4878.php">David Souther: "[OMPI users] Topology functions from MPI 1.1"</a>
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
