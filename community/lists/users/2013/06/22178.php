<?
$subject_val = "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 04:53:34 2013" -->
<!-- isoreceived="20130621085334" -->
<!-- sent="Fri, 21 Jun 2013 08:53:28 +0000" -->
<!-- isosent="20130621085328" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB31883693EA_at_MBX1.rwth-ad.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1371575692.17628.YahooMailNeo_at_web161606.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 04:53:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22179.php">Mohamad Ali Rostami: "[OMPI users] MPI Finalize hangs!"</a>
<li><strong>Previous message:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Claire,
<br>
<p>&nbsp;
<br>
<p>The most probable reason for the observed behaviour is that there are additional active network interfaces on the nodes that cannot be used to pass data around. Example of such interfaces are various virtual Ethernet devices (e.g. on systems with virtualisation enabled) or tunnels. Open MPI tries to maximise the network bandwidth by cycling over the available endpoints on each node (with the basic presumption being that different IP addresses are routed over different physical networks and hence more bandwidth is available) and that's why it fails with more than one message - the first message goes to the reachable node IP address while the second one gets directed to an unreachable one.
<br>
<p>&nbsp;
<br>
<p>The solution is to either tell Open MPI to ignore the offending interfaces or to specifically state what interfaces are to be used by the TCP BTL and OOB components. This entry in the FAQ gives more details:
<br>
<p>&nbsp;
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>&nbsp;
<br>
<p>Probably the following options would remedy your problem:
<br>
<p>&nbsp;
<br>
<p>--mca btl_tcp_if_exclude 192.168.0.0/16,127.0.0.1/8
<br>
<p>--mca btl_oob_if_exclude 192.168.0.0/16,127.0.0.1/8
<br>
<p>&nbsp;
<br>
<p>Note that the loopback interface has to be part of the excluded interfaces list if the latter is provided.
<br>
<p>&nbsp;
<br>
<p>The list of the active interfaces can be obtained with the &quot;/sbin/ifconfig&quot; command. Look for interfaces in state &quot;UP&quot;.
<br>
<p>&nbsp;
<br>
<p><pre>
--
Hristo Iliev, PhD &#226;&#128;&#147; High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)
Phone: +49 241 80 24367 &#226;&#128;&#147; Fax/UMS: +49 241 80 624367
 
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Claire Williams
Sent: Tuesday, June 18, 2013 7:15 PM
To: users_at_[hidden]
Subject: [OMPI users] Trouble with Sending Multiple messages to the Same Machine
 
Hi guys &#226;&#152;&#186;!
 
I'm working with a simple &quot;Hello, World&quot; MPI program that has one master and is sending one message to each worker, receives a message back from each of the workers, and re-sends a new message. This unfortunately is not working :(. When the master only sends one message to each worker, and then receives it, it is working fine, but there are problems with sending more than one message to each worker. When it happens, it prints the error:
 
[[401,1],0][../../../../../openmpi-1.6.3/ompi/mca/btl/tcp/btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.X.X failed: No route to host (113)
 
I'm wondering how I can go about fixing this. This program is running across multiple Linux nodes, by the way :). 
 
BTW, I'm a girl.
 
 
 
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22178/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22178/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22179.php">Mohamad Ali Rostami: "[OMPI users] MPI Finalize hangs!"</a>
<li><strong>Previous message:</strong> <a href="22177.php">Stefano Zaghi: "Re: [OMPI users] OpenMPI 1.6.4 and Intel Composer_xe_2013.4.183: problem with remote runs, orted: error while loading shared libraries: libimf.so"</a>
<li><strong>In reply to:</strong> <a href="22124.php">Claire Williams: "[OMPI users] Trouble with Sending Multiple messages to the Same Machine"</a>
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
