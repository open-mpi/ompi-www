<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov  7 01:20:24 2005" -->
<!-- isoreceived="20051107062024" -->
<!-- sent="Mon, 07 Nov 2005 01:17:59 -0500" -->
<!-- isosent="20051107061759" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[O-MPI users] TCP" -->
<!-- id="436EF197.2030003_at_sympatico.ca" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-07 01:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
<li><strong>Reply:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I am using Oscar 4.2. I have two ethernet cards on compute nodes, 
<br>
eth0, eth1[one 10/100Mbps and one realtek 8169 gigabit NIC] and 4 
<br>
ethernet cards on the head node , eth0 10/100Mbps, eth1 10/100Mbps, eth2 
<br>
realtek 8169 gigabit, eth3 a built in 3com gigabit ethernet with the 
<br>
sk98lin driver. I am using FC3. Can you give me an mpirun command for 
<br>
this hardware to run hpl?
<br>
The command line i use looks like:
<br>
mpirun --mca btl_tcp_if_include eth2 --mca btl tcp --hostfile aa -np 16 
<br>
./xhpl from  the benchmark directory.
<br>
But it spews out with errors about eth2 and not being able to find the 
<br>
HPL.dat file.
<br>
All the 8169 cards on all nodes are connected by Gig copper cables to a 
<br>
16 port gigabit switch .
<br>
Thank you very much,
<br>
Allan 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Troy Telford: "Re: [O-MPI users] OpenMPI Scaling on mvapi interface:"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
<li><strong>Reply:</strong> <a href="0284.php">Brian Barrett: "Re: [O-MPI users] TCP"</a>
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
