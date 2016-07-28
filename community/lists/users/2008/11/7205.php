<?
$subject_val = "Re: [OMPI users] question regarding the configuration of multiple nics	for openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 11:03:11 2008" -->
<!-- isoreceived="20081104160311" -->
<!-- sent="Tue, 04 Nov 2008 11:03:02 -0500" -->
<!-- isosent="20081104160302" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question regarding the configuration of multiple nics	for openmpi" -->
<!-- id="49107236.5080402_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49102178.30401_at_ec-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] question regarding the configuration of multiple nics	for openmpi<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 11:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>Previous message:</strong> <a href="7204.php">Sangamesh B: "[OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>In reply to:</strong> <a href="7202.php">Olivier Marsden: "[OMPI users] question regarding the configuration of multiple nics for openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Olivier and list
<br>
<p>I presume you are talking about Ethernet or GigE.
<br>
The basic information on  how to launch jobs is on the OpenMPI FAQ pages:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>Here is what I did on our toy/test cluster made of salvaged computers.
<br>
<p>1) I use ROCKS cluster, which makes some steps more automatic then 
<br>
described below.
<br>
However, ROCKS is not needed for this.
<br>
<p>2) I have actually three private networks, but you may use, say, two,
<br>
if your motherboards have dual Ethernet (or GigE) ports.
<br>
Each node has three NICs, which Linux recognized and activated as eth0, 
<br>
eth1, eth2.
<br>
<p>Make sure you and Linux agree on which port is eth0, eth1, etc.
<br>
This may be a  bit tricky, the kernel seems to have its own wisdom and 
<br>
mood when it assigns the port names.
<br>
Ping, lspci, ifconfig, ifup, ifdown, ethtool, are your friends here, and 
<br>
can help you
<br>
sort out the correct port-name map.
<br>
<p>3) For a modest number of nodes, less than 8, you can buy inexpensive 
<br>
SOHO type GigE switches,
<br>
one for each network, for about $50 a piece. (This is what I did.)
<br>
For more nodes you would need larger switches.
<br>
Use Cat5e or Cat6 Ethernet cables and connect the separate networks 
<br>
using the correct ports on the
<br>
nodes and switches.
<br>
Well, you may have done that already ...
<br>
<p>4) On RHEL or Fedora the essential information is on 
<br>
/etc/sysconfig/network-scripts/ifcfg-eth[0,1,2],
<br>
on each of your cluster nodes.
<br>
Other Linux distributions may have equivalent files.
<br>
You need to edit these files to insert the correct IP address, netmask, 
<br>
and MAC address.
<br>
<p>For instance, if you have less than 254 nodes, you can define private 
<br>
networks like this:
<br>
net1) 192.168.1.0 netmask 255.255.255.0  (using the eth0 port)
<br>
net2) 192.168.2.0 netmask 255.255.255.0 (using the eth1 port)
<br>
net3) 192.168.3.0 netmask 255.255.255.0 (using the eth2 port)
<br>
etc.
<br>
<p>Here is an example:
<br>
<p>[node1] $ cat /etc/sysconfig/network-scripts/ifcfg-eth0
<br>
<p>DEVICE=eth0
<br>
HWADDR=(put your eth0 port MAC address here)
<br>
IPADDR=192.168.1.1   ( ... 192.168.1.2 on node2, etc)
<br>
NETMASK=255.255.255.0
<br>
BOOTPROTO=none
<br>
ONBOOT=yes
<br>
<p>[node1] $ cat /etc/sysconfig/network-scripts/ifcfg-eth1
<br>
<p>DEVICE=eth1
<br>
HWADDR=(put your eth1 port MAC address here)
<br>
IPADDR=192.168.2.1 ( ... 192.168.2.2 on node2, etc)
<br>
NETMASK=255.255.255.0
<br>
BOOTPROTO=none
<br>
ONBOOT=yes
<br>
<p><p>5) To launch the OpenMPI program &quot;mp_prog&quot;
<br>
using the 192.168.2.0 (i.e. &quot;eth1&quot;) network using, say, 8 processes, do:
<br>
<p>mpiexec --mca btl_tcp_if_include eth1 -n 8 my_prog
<br>
<p>(Good if your 192.168.1.0 (eth0) network is already used for I/O, 
<br>
control, etc.)
<br>
<p>To be more aggressive, and use both networks,
<br>
192.168.1.0 (&quot;eth0&quot;) and 192.168.2.0 (&quot;eth1&quot;)  do:
<br>
<p>mpiexec --mca btl_tcp_if_include eth0,eth1 -n 8 my_prog
<br>
<p>***
<br>
<p>Works for me.
<br>
I hope it helps!
<br>
<p>Gus Correa
<br>
PS - More answers below.
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Olivier Marsden wrote:
&gt; Hello,
&gt; I am configuring a cluster with multiple nics for use with open mpi.
&gt; I have not found very much information on the best way of setting up
&gt; my network for open mpi. At the moment I have a pretty standard setup
&gt; with a single hostname and single ip address for each node.
&gt; Could someone advise me on the following points?
&gt; - for each node, should I have the second ip on the same subnet as the 
&gt; first, or not ?
No, use separate subnets.
&gt;
&gt; - does openmpi need separate hostnames for each ip?
No, same hostname, but different subnets and different IPs for each port 
on a given host.
&gt;
&gt; If there is a webpage describing how to configure such a network for 
&gt; the best, that
&gt; would be great.
&gt;
Yes, to some extent.
Look at the OpenMPI FAQ:
<a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
&gt; Many thanks,
&gt;
&gt; Olivier Marsden
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7206.php">Reuti: "Re: [OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>Previous message:</strong> <a href="7204.php">Sangamesh B: "[OMPI users] OpenMPI-1.2.7 + SGE"</a>
<li><strong>In reply to:</strong> <a href="7202.php">Olivier Marsden: "[OMPI users] question regarding the configuration of multiple nics for openmpi"</a>
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
