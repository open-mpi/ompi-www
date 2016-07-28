<?
$subject_val = "[OMPI users] Cluster Communications Issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 12:02:15 2010" -->
<!-- isoreceived="20100202170215" -->
<!-- sent="Tue, 2 Feb 2010 09:02:10 -0800" -->
<!-- isosent="20100202170210" -->
<!-- name="Lee Manko" -->
<!-- email="lmanko_at_[hidden]" -->
<!-- subject="[OMPI users] Cluster Communications Issues" -->
<!-- id="e33c0c7d1002020902i188bbb8bm4fab2b66b33fc8a5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Cluster Communications Issues<br>
<strong>From:</strong> Lee Manko (<em>lmanko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 12:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11965.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is my first attempt at configuring a Beowulf cluster running MPI.  ALL
<br>
of the nodes in the cluster are PS3s running Yellow Dog Linux 6.2 and the
<br>
host (server) is a Dell i686 Quad-core running Fedora Core 12.  The cluster
<br>
is running openMPI v1.4.1 configured (non-homogeneous), compiled and
<br>
installed individually on each node and the server.  I have an NSF shared
<br>
directory on the host where the application resides after building.  All
<br>
nodes have access to the shared volume and can see all files in the shared
<br>
volume.  SSH is configured and the server can remote into each node without
<br>
using a password and vice versa.  The built-in firewalls (iptables and
<br>
ip6tables) are disabled.  The server has a dual Ethernet card. The first
<br>
eth1, is used for cluster communications and has a static  IP address of
<br>
192.168.0.1.  The second, eth2 is used to communicate with the outside world
<br>
and is connected to a corporate network getting a DHCP assigned IP address..
<br>
<p><p>I have a very simple master/slave framework application where the slave does
<br>
a simple computation and return the result and the processor name.  The
<br>
master farms out 1024 such tasks to the slaves and after finalizing the
<br>
master exists.
<br>
<p><p><p>When I run the code locally on the multiple cores on either the server or
<br>
the PS3, the code executes and completes as expected. However, when I have
<br>
mpirun spread the work across the nodes, the process hangs waiting for
<br>
messages to be passed between the server and the nodes.  What I have
<br>
discovered is that if I unplug the second NIC running DHCP the process
<br>
executes fine.
<br>
<p><p>I have requested a static IP address from the network admin, but was curious
<br>
as to whether anyone has run into this when running DHCP?
<br>
<p><p>Thanks.
<br>
<p><p><p>Lee Manko
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11965.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11963.php">Charles Shuller: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
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
