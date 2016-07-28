<?
$subject_val = "Re: [OMPI users] problem with opal_net_private_ipv4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 11:29:01 2010" -->
<!-- isoreceived="20100323152901" -->
<!-- sent="Tue, 23 Mar 2010 12:28:54 -0300" -->
<!-- isosent="20100323152854" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with opal_net_private_ipv4" -->
<!-- id="9108753b1003230828i104d6561w2d62e9ab59bc2e2a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BA8C133.4000107_at_sophia.inria.fr" -->
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
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 11:28:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12400.php">Nicolas Niclausse: "[OMPI users] problem with  opal_net_private_ipv4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Reply:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Mar 23, 2010 at 10:25 AM, Nicolas Niclausse
<br>
&lt;Nicolas.Niclausse_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run openmpi (1.4.1) on two clusters; on each cluster, several
</span><br>
<span class="quotelev1">&gt; interfaces are private;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on cluster1, nodes have 3 interfaces, and only 192.168.159.0/24 is visible
</span><br>
<span class="quotelev1">&gt; from cluster2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; chicon-3
</span><br>
<span class="quotelev1">&gt; eth0 &#160; &#160; inet addr:192.168.160.76 &#160;Bcast:192.168.160.255 &#160;Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt; eth1 &#160; &#160; inet addr:192.168.159.76 &#160;Bcast:192.168.159.255 &#160;Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt; myri0 &#160; &#160;inet addr:192.168.162.76 &#160;Bcast:192.168.162.255 &#160;Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on cluster2, nodes have 3 interfaces, and only 172.24.110.0/17 is visible
</span><br>
<span class="quotelev1">&gt; from cluster1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; netgdx-8
</span><br>
<span class="quotelev1">&gt; eth0 &#160;inet addr:172.24.190.8 &#160;Bcast:172.24.191.255 &#160;Mask:255.255.192.0
</span><br>
<span class="quotelev1">&gt; eth1 &#160;inet addr:172.24.110.8 &#160;Bcast:172.24.127.255 &#160;Mask:255.255.128.0
</span><br>
<span class="quotelev1">&gt; eth2 &#160;inet addr:172.24.240.8 &#160;Bcast:172.24.255.255 &#160;Mask:255.255.192.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so i'm using this to declare all the other networks as private:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile ~/gridnodes &#160;--mca opal_net_private_ipv4
</span><br>
<span class="quotelev1">&gt; &quot;192.168.162.0/24\;192.168.160.0/24\;172.24.192.0/18\;172.24.128.0/18&quot;
</span><br>
<span class="quotelev1">&gt; ./alltoall
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but this doesn't work:
</span><br>
<p>Have you tried -mca btl_tcp_if_include/exclude?
<br>
<p><span class="quotelev1">&gt; Why openmpi tries to connect different private networks, given that
</span><br>
<span class="quotelev1">&gt; &quot;public&quot; networks exists ? is it a bug or am i missing something ?
</span><br>
<p><span class="quotelev1">&gt;From what I've seen, I believe OpenMPI tries to find the fastest route
</span><br>
to the nodes. In some cases it's trivial to sort that out, in other
<br>
cases you might need to give it some hints.
<br>
<p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12405.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12403.php">fengguang tian: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>In reply to:</strong> <a href="12400.php">Nicolas Niclausse: "[OMPI users] problem with  opal_net_private_ipv4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Reply:</strong> <a href="12411.php">Nicolas Niclausse: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
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
