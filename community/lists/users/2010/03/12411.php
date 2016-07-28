<?
$subject_val = "Re: [OMPI users] problem with opal_net_private_ipv4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 12:35:27 2010" -->
<!-- isoreceived="20100323163527" -->
<!-- sent="Tue, 23 Mar 2010 17:35:17 +0100" -->
<!-- isosent="20100323163517" -->
<!-- name="Nicolas Niclausse" -->
<!-- email="Nicolas.Niclausse_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with opal_net_private_ipv4" -->
<!-- id="4BA8EDC5.1000409_at_sophia.inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9108753b1003230828i104d6561w2d62e9ab59bc2e2a_at_mail.gmail.com" -->
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
<strong>From:</strong> Nicolas Niclausse (<em>Nicolas.Niclausse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 12:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Reply:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fernando Lemos ecrivait le 23/03/2010 16:28:
<br>
<span class="quotelev2">&gt;&gt; I'm trying to run openmpi (1.4.1) on two clusters; on each cluster, several
</span><br>
<span class="quotelev2">&gt;&gt; interfaces are private;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on cluster1, nodes have 3 interfaces, and only 192.168.159.0/24 is visible
</span><br>
<span class="quotelev2">&gt;&gt; from cluster2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; chicon-3
</span><br>
<span class="quotelev2">&gt;&gt; eth0     inet addr:192.168.160.76  Bcast:192.168.160.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt; eth1     inet addr:192.168.159.76  Bcast:192.168.159.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt; myri0    inet addr:192.168.162.76  Bcast:192.168.162.255  Mask:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on cluster2, nodes have 3 interfaces, and only 172.24.110.0/17 is visible
</span><br>
<span class="quotelev2">&gt;&gt; from cluster1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; netgdx-8
</span><br>
<span class="quotelev2">&gt;&gt; eth0  inet addr:172.24.190.8  Bcast:172.24.191.255  Mask:255.255.192.0
</span><br>
<span class="quotelev2">&gt;&gt; eth1  inet addr:172.24.110.8  Bcast:172.24.127.255  Mask:255.255.128.0
</span><br>
<span class="quotelev2">&gt;&gt; eth2  inet addr:172.24.240.8  Bcast:172.24.255.255  Mask:255.255.192.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so i'm using this to declare all the other networks as private:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -machinefile ~/gridnodes  --mca opal_net_private_ipv4
</span><br>
<span class="quotelev2">&gt;&gt; &quot;192.168.162.0/24\;192.168.160.0/24\;172.24.192.0/18\;172.24.128.0/18&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ./alltoall
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but this doesn't work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried -mca btl_tcp_if_include/exclude?
</span><br>
<p>I can't do that because the &quot;public&quot; interface is not always eth1 as in
<br>
this example (i have several other clusters with different network
<br>
configurations in my setup)
<br>
<p><span class="quotelev2">&gt;&gt; Why openmpi tries to connect different private networks, given that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;public&quot; networks exists ? is it a bug or am i missing something ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;From what I've seen, I believe OpenMPI tries to find the fastest route
</span><br>
<span class="quotelev1">&gt; to the nodes. In some cases it's trivial to sort that out, in other
</span><br>
<span class="quotelev1">&gt; cases you might need to give it some hints.
</span><br>
<p>yes, so  i thought that &quot;opal_net_private_ipv4&quot; was the right thing for me;
<br>
but it doesn't work without the patch.
<br>
<p><p><pre>
-- 
Nicolas NICLAUSSE                          Service DREAM
INRIA Sophia Antipolis                     <a href="http://www-sop.inria.fr/">http://www-sop.inria.fr/</a>
2004 route des lucioles - BP 93            Tel: (33/0) 4 92 38 76 93
06902  SOPHIA-ANTIPOLIS cedex (France)     Fax: (33/0) 4 92 38 76 02

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12411/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12412.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12410.php">fengguang tian: "Re: [OMPI users] ompi-checkpoint hangs when using in multiple clusters"</a>
<li><strong>In reply to:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Reply:</strong> <a href="12413.php">Rolf vandeVaarrt: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
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
