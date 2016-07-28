<?
$subject_val = "[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 08:09:20 2013" -->
<!-- isoreceived="20130321120920" -->
<!-- sent="Thu, 21 Mar 2013 12:09:10 +0000" -->
<!-- isosent="20130321120910" -->
<!-- name="Antony Cleave" -->
<!-- email="antony.cleave_at_[hidden]" -->
<!-- subject="[OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor" -->
<!-- id="514AF866.9010100_at_clustervision.com" -->
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
<strong>Subject:</strong> [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor<br>
<strong>From:</strong> Antony Cleave (<em>antony.cleave_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 08:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>Previous message:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>Reply:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I've been fighting trying to run comparitive test of IMB using OpenMPI 
<br>
1.6.3 on the same node using an Intel Truescale card and the onboard 
<br>
Ethernet.
<br>
<p>Turns out that all of the problems were due to the IP v6 addresses being 
<br>
firewalled on the nodes but OpenMPI was trying to use the IPv6 addresses 
<br>
of the nodes in spite of me explicitly specifying the IP v4 address as 
<br>
in the following example:
<br>
<p>mpirun --mca btl ^openib --mca mtl ^psm --mca btl_tcp_if_include eth0  
<br>
--mca btl_tcp_if_include 10.141.0.0/16 --mca btl_base_verbose 30 -np 2 
<br>
--hostfile ./hostfile ./IMB-MPI1 pingpong
<br>
. . .
<br>
[node041:16301] select: initializing btl component tcp
<br>
[node041:16301] btl: tcp: Searching for include address+prefix: 
<br>
10.141.0.0 / 16
<br>
[node041:16301] btl: tcp: Found match: 10.141.0.41 (eth0)
<br>
[node041:16301] select: init of component tcp returned success
<br>
[node041:16301] btl: tcp: attempting to connect() to address 
<br>
2002:bccb:3a13:141:225:90ff:fe58:5986 on port 4
<br>
<p>When I tried to exclude the IP v6 addresses as well I'm told that --mca 
<br>
btl_tcp_if_include and --mca btl_tcp_if_exclude are mutually exclusive 
<br>
so I assume that this is not the expected behaviour.
<br>
<p>I also cannot find a command line switch in the documentation to disable 
<br>
IPv6 or IPv4.
<br>
<p>To fix this I first manually deleted the ipv6 addresses on the two nodes 
<br>
and it worked as expected. I then reenabled them unfirewalled the v6 
<br>
addresses and it also worked correctly using those (in spite of 
<br>
specifying the IPv4 address explicitly).
<br>
<p>This is all running on Scientific Linux release 6.3
<br>
<p>I haven't tried to reproduce this on a node without a TrueScale card in 
<br>
but I do not seem why this would make any difference to the tcp component.
<br>
<p>Thanks
<br>
<p>Antony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>Previous message:</strong> <a href="21579.php">Bruno Cramer: "Re: [OMPI users] mpirun error output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
<li><strong>Reply:</strong> <a href="21581.php">Iliev, Hristo: "Re: [OMPI users] Possible bug in OpenMPI 1.6.3 in selecting v4 or v6 network addresses on the same adaptor"</a>
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
