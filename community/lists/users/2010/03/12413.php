<?
$subject_val = "Re: [OMPI users] problem with opal_net_private_ipv4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 13:43:35 2010" -->
<!-- isoreceived="20100323174335" -->
<!-- sent="Tue, 23 Mar 2010 13:42:58 -0400" -->
<!-- isosent="20100323174258" -->
<!-- name="Rolf vandeVaarrt" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with opal_net_private_ipv4" -->
<!-- id="4BA8FDA2.6020908_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4BA8EDC5.1000409_at_sophia.inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with opal_net_private_ipv4<br>
<strong>From:</strong> Rolf vandeVaarrt (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 13:42:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12414.php">fengguang tian: "[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>Previous message:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nicolas Niclausse wrote:
<br>
<span class="quotelev1">&gt; Fernando Lemos ecrivait le 23/03/2010 16:28:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to run openmpi (1.4.1) on two clusters; on each cluster, several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfaces are private;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on cluster1, nodes have 3 interfaces, and only 192.168.159.0/24 is visible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from cluster2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chicon-3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0     inet addr:192.168.160.76  Bcast:192.168.160.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth1     inet addr:192.168.159.76  Bcast:192.168.159.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myri0    inet addr:192.168.162.76  Bcast:192.168.162.255  Mask:255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on cluster2, nodes have 3 interfaces, and only 172.24.110.0/17 is visible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from cluster1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; netgdx-8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0  inet addr:172.24.190.8  Bcast:172.24.191.255  Mask:255.255.192.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth1  inet addr:172.24.110.8  Bcast:172.24.127.255  Mask:255.255.128.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth2  inet addr:172.24.240.8  Bcast:172.24.255.255  Mask:255.255.192.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so i'm using this to declare all the other networks as private:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -machinefile ~/gridnodes  --mca opal_net_private_ipv4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;192.168.162.0/24\;192.168.160.0/24\;172.24.192.0/18\;172.24.128.0/18&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./alltoall
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but this doesn't work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried -mca btl_tcp_if_include/exclude?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't do that because the &quot;public&quot; interface is not always eth1 as in
</span><br>
<span class="quotelev1">&gt; this example (i have several other clusters with different network
</span><br>
<span class="quotelev1">&gt; configurations in my setup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why openmpi tries to connect different private networks, given that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;public&quot; networks exists ? is it a bug or am i missing something ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From what I've seen, I believe OpenMPI tries to find the fastest route
</span><br>
<span class="quotelev2">&gt;&gt; to the nodes. In some cases it's trivial to sort that out, in other
</span><br>
<span class="quotelev2">&gt;&gt; cases you might need to give it some hints.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, so  i thought that &quot;opal_net_private_ipv4&quot; was the right thing for me;
</span><br>
<span class="quotelev1">&gt; but it doesn't work without the patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It seems to me that you are entering a piece of the code where the code 
<br>
thinks at least one of the interfaces is private.  And when comparing a 
<br>
public and private, it gives a weighting of 
<br>
CQ_PRIVATE_DIFFERENT_NETWORK.  I am not sure why, but that is the 
<br>
weighting it gives.  You can take a look at this FAQ
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3">http://www.open-mpi.org/faq/?category=tcp#tcp-routability-1.3</a> which has 
<br>
links to the paper that explains how all this logic works.
<br>
<p>It seems that what you are doing makes sense.  You are trying to define 
<br>
which networks are private so that in the end you
<br>
expect the two other networks to end up being public, and therefore get 
<br>
the highest weight for a connection.
<br>
<p>I realize this does not help much, but maybe the paper will help out.
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12414.php">fengguang tian: "[OMPI users] question about checkpoint on cluster, mpirun doesn't work on cluster"</a>
<li><strong>Previous message:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
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
