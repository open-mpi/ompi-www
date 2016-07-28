<?
$subject_val = "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 09:34:48 2013" -->
<!-- isoreceived="20130321133448" -->
<!-- sent="Thu, 21 Mar 2013 13:34:42 +0000" -->
<!-- isosent="20130321133442" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB31883240EB_at_MBX4.rwth-ad.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="514AF866.9010100_at_clustervision.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 09:34:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21582.php">Siegmar Gross: "[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>Previous message:</strong> <a href="21580.php">Antony Cleave: "[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>In reply to:</strong> <a href="21580.php">Antony Cleave: "[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>You can use the btl_tcp_disable_family and oob_tcp_disable_family MCA
<br>
parameters to disable the use of a specific IP family addresses. Set both
<br>
parameters to 6 to disable IPv6 or set them both to 4 in order to disable
<br>
IPv4.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Antony Cleave
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 21, 2013 1:09 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6
</span><br>
<span class="quotelev1">&gt; network addresses on the same adaptor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been fighting trying to run comparitive test of IMB using OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.6.3 on the same node using an Intel Truescale card and the onboard
</span><br>
<span class="quotelev1">&gt; Ethernet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turns out that all of the problems were due to the IP v6 addresses being
</span><br>
<span class="quotelev1">&gt; firewalled on the nodes but OpenMPI was trying to use the IPv6 addresses
</span><br>
<span class="quotelev1">&gt; of the nodes in spite of me explicitly specifying the IP v4 address as in
</span><br>
the
<br>
<span class="quotelev1">&gt; following example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl ^openib --mca mtl ^psm --mca btl_tcp_if_include eth0 --
</span><br>
<span class="quotelev1">&gt; mca btl_tcp_if_include 10.141.0.0/16 --mca btl_base_verbose 30 -np 2 --
</span><br>
<span class="quotelev1">&gt; hostfile ./hostfile ./IMB-MPI1 pingpong . . .
</span><br>
<span class="quotelev1">&gt; [node041:16301] select: initializing btl component tcp [node041:16301]
</span><br>
btl:
<br>
<span class="quotelev1">&gt; tcp: Searching for include address+prefix:
</span><br>
<span class="quotelev1">&gt; 10.141.0.0 / 16
</span><br>
<span class="quotelev1">&gt; [node041:16301] btl: tcp: Found match: 10.141.0.41 (eth0) [node041:16301]
</span><br>
<span class="quotelev1">&gt; select: init of component tcp returned success [node041:16301] btl: tcp:
</span><br>
<span class="quotelev1">&gt; attempting to connect() to address
</span><br>
<span class="quotelev1">&gt; 2002:bccb:3a13:141:225:90ff:fe58:5986 on port 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I tried to exclude the IP v6 addresses as well I'm told that --mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include and --mca btl_tcp_if_exclude are mutually exclusive so
</span><br>
I
<br>
<span class="quotelev1">&gt; assume that this is not the expected behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also cannot find a command line switch in the documentation to disable
</span><br>
<span class="quotelev1">&gt; IPv6 or IPv4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To fix this I first manually deleted the ipv6 addresses on the two nodes
</span><br>
and it
<br>
<span class="quotelev1">&gt; worked as expected. I then reenabled them unfirewalled the v6 addresses
</span><br>
<span class="quotelev1">&gt; and it also worked correctly using those (in spite of specifying the IPv4
</span><br>
<span class="quotelev1">&gt; address explicitly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is all running on Scientific Linux release 6.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't tried to reproduce this on a node without a TrueScale card in
</span><br>
but I
<br>
<span class="quotelev1">&gt; do not seem why this would make any difference to the tcp component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Antony
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<pre>
--
Hristo Iliev, PhD - High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21581/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21582.php">Siegmar Gross: "[OMPI users] 32-/64-bit library problem in openmpi-1.7rc8r28176 and openmpi-1.9r28175"</a>
<li><strong>Previous message:</strong> <a href="21580.php">Antony Cleave: "[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>In reply to:</strong> <a href="21580.php">Antony Cleave: "[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
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
