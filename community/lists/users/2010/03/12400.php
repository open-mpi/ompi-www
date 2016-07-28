<?
$subject_val = "[OMPI users] problem with  opal_net_private_ipv4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 09:25:28 2010" -->
<!-- isoreceived="20100323132528" -->
<!-- sent="Tue, 23 Mar 2010 14:25:07 +0100" -->
<!-- isosent="20100323132507" -->
<!-- name="Nicolas Niclausse" -->
<!-- email="Nicolas.Niclausse_at_[hidden]" -->
<!-- subject="[OMPI users] problem with  opal_net_private_ipv4" -->
<!-- id="4BA8C133.4000107_at_sophia.inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] problem with  opal_net_private_ipv4<br>
<strong>From:</strong> Nicolas Niclausse (<em>Nicolas.Niclausse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 09:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12399.php">Shiqing Fan: "Re: [OMPI users] error when using mpiexec to launch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Reply:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I'm trying to run openmpi (1.4.1) on two clusters; on each cluster, several
<br>
interfaces are private;
<br>
<p>on cluster1, nodes have 3 interfaces, and only 192.168.159.0/24 is visible
<br>
from cluster2.
<br>
<p>chicon-3
<br>
eth0     inet addr:192.168.160.76  Bcast:192.168.160.255  Mask:255.255.255.0
<br>
eth1     inet addr:192.168.159.76  Bcast:192.168.159.255  Mask:255.255.255.0
<br>
myri0    inet addr:192.168.162.76  Bcast:192.168.162.255  Mask:255.255.255.0
<br>
<p>on cluster2, nodes have 3 interfaces, and only 172.24.110.0/17 is visible
<br>
from cluster1
<br>
<p>netgdx-8
<br>
eth0  inet addr:172.24.190.8  Bcast:172.24.191.255  Mask:255.255.192.0
<br>
eth1  inet addr:172.24.110.8  Bcast:172.24.127.255  Mask:255.255.128.0
<br>
eth2  inet addr:172.24.240.8  Bcast:172.24.255.255  Mask:255.255.192.0
<br>
<p>so i'm using this to declare all the other networks as private:
<br>
<p>mpirun -machinefile ~/gridnodes  --mca opal_net_private_ipv4
<br>
&quot;192.168.162.0/24\;192.168.160.0/24\;172.24.192.0/18\;172.24.128.0/18&quot;
<br>
./alltoall
<br>
<p>but this doesn't work:
<br>
<p>[netgdx-8][[64214,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.160.76 failed: No route to host (113)
<br>
[netgdx-8][[64214,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.160.76 failed: No route to host (113)
<br>
[netgdx-8][[64214,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.160.76 failed: No route to host (113)
<br>
[netgdx-8][[64214,1],5][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.160.76 failed: No route to host (113)
<br>
[netgdx-8][[64214,1],4][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
<br>
connect() to 192.168.160.76 failed: No route to host (113)
<br>
<p>the following patch works for me :
<br>
<p>diff -u ompi/mca/btl/tcp/btl_tcp_proc.c.orig ompi/mca/btl/tcp/btl_tcp_proc.c
<br>
--- ompi/mca/btl/tcp/btl_tcp_proc.c.orig        2010-03-23
<br>
14:01:28.000000000 +0100
<br>
+++ ompi/mca/btl/tcp/btl_tcp_proc.c     2010-03-23 14:01:50.000000000 +0100
<br>
@@ -496,7 +496,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_interfaces[i]-&gt;ipv4_netmask)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weights[i][j] = CQ_PRIVATE_SAME_NETWORK;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-                        weights[i][j] = CQ_PRIVATE_DIFFERENT_NETWORK;
<br>
+                        weights[i][j] = CQ_NO_CONNECTION;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;best_addr[i][j] = peer_interfaces[j]-&gt;ipv4_endpoint_addr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>Why openmpi tries to connect different private networks, given that
<br>
&quot;public&quot; networks exists ? is it a bug or am i missing something ?
<br>
<p><pre>
-- 
Nicolas NICLAUSSE                          Service DREAM
INRIA Sophia Antipolis                     <a href="http://www-sop.inria.fr/">http://www-sop.inria.fr/</a>
2004 route des lucioles - BP 93            Tel: (33/0) 4 92 38 76 93
06902  SOPHIA-ANTIPOLIS cedex (France)     Fax: (33/0) 4 92 38 76 02

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12400/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12401.php">Fernando Lemos: "Re: [OMPI users] questions about checkpoint/restart on multiple clusters of MPI"</a>
<li><strong>Previous message:</strong> <a href="12399.php">Shiqing Fan: "Re: [OMPI users] error when using mpiexec to launch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
<li><strong>Reply:</strong> <a href="12404.php">Fernando Lemos: "Re: [OMPI users] problem with opal_net_private_ipv4"</a>
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
