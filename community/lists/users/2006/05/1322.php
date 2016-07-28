<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 29 07:58:10 2006" -->
<!-- isoreceived="20060529115810" -->
<!-- sent="Mon, 29 May 2006 13:46:57 +0200" -->
<!-- isosent="20060529114657" -->
<!-- name="Francoise Roch" -->
<!-- email="roch_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.1a7  on solaris10 opteron" -->
<!-- id="447ADF31.1020107_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Francoise Roch (<em>roch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-29 07:46:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1323.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1321.php">Justin Bronder: "[OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<li><strong>Reply:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>I still have a problem to select an interface with openmpi-1.1a7 on 
<br>
solaris opteron.
<br>
I compile in 64 bit mode, with Studio11 compilers
<br>
<p>I attempted to force interface exclusion without success.
<br>
This problem is critical for us because we'll soon have Infiniband 
<br>
interfaces for mpi traffic.
<br>
<p>roch_at_n15 ~/MPI &gt; mpirun --mca btl_tcp_if_exclude bge1 -np 2 -host 
<br>
p15,p27 all2all
<br>
Process 0 is alive on n15
<br>
Process 1 is alive on n27
<br>
[n27:05110] *** An error occurred in MPI_Barrier
<br>
[n27:05110] *** on communicator MPI_COMM_WORLD
<br>
[n27:05110] *** MPI_ERR_INTERN: internal error
<br>
[n27:05110] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
1 process killed (possibly by Open MPI)
<br>
<p><p>The code works without mca btl_tcp_if_exclude option.
<br>
<p>Currently each node has two ethernet interfaces :
<br>
roch_at_n15 ~ &gt; /usr/sbin/ifconfig -a
<br>
lo0: flags=2001000849&lt;UP,LOOPBACK,RUNNING,MULTICAST,IPv4,VIRTUAL&gt; mtu 
<br>
8232 index 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask ff000000
<br>
bge0: flags=1000843&lt;UP,BROADCAST,RUNNING,MULTICAST,IPv4&gt; mtu 1500 index 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.12.15 netmask ffffff00 broadcast 192.168.12.255
<br>
bge1: flags=1004843&lt;UP,BROADCAST,RUNNING,MULTICAST,DHCP,IPv4&gt; mtu 1500 
<br>
index 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.11.15 netmask ffffff00 broadcast 192.168.11.255
<br>
<p>The hostname of the nodes are nxx.
<br>
in /etc/hosts, nxx corresponds to the interface bge1; pxx to the 
<br>
interface bge0.
<br>
<p>Thanks in advance for any help.
<br>
<p>Fran&#231;oise
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1323.php">Jens Klostermann: "[OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1321.php">Justin Bronder: "[OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<li><strong>Reply:</strong> <a href="1333.php">Brian Barrett: "Re: [OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
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
