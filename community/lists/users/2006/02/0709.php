<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 22:11:12 2006" -->
<!-- isoreceived="20060225031112" -->
<!-- sent="Fri, 24 Feb 2006 22:11:07 -0500" -->
<!-- isosent="20060225031107" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[OMPI users] Ethernet bonding and Open MPI" -->
<!-- id="43FFCACB.7050500_at_sympatico.ca" -->
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
<strong>Date:</strong> 2006-02-24 22:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>Reply:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;I have a 16 node AMD/P4 machine cluster running Oscar 4.2.1 Beta and 
<br>
FC4. Each machine has two Gigabit network cards. One being realtek8169 
<br>
all connected to a netgear GS116 gigabit switch with max MTU =1500 and 
<br>
the other NIC being aDlink Syskonnect chipset gigabit card connected to 
<br>
a managed NetgearGS724T Gigabit switch with Jumbo MTU enabled on the 
<br>
switch and each Dlink card's MTU set at 9000 from the ifcfg-eth1 file. I 
<br>
want to know how I can use open mpi (any version &gt;=1.01) to use ethernet 
<br>
bonding to get 2 gig eth cards to boost performance. I have 512MB memory 
<br>
on each machine for a total of 8 GigBytes Memory and a hard disk on each 
<br>
node.. I use HPL/Linpack to run benchmarks and get 28.36GFlops with open 
<br>
mpi 1.1a1br9098 and with mpich2 1.03 i get 28.7Gflops using only one 
<br>
ethernet (GIg Dlink) with jumbo frames on both benchmarks at MTU=9000. I 
<br>
use -mca btl tcp on openmpi. The N = 26760 and NB= 120 for HPL.dat at 
<br>
P=4 Q=4 for 16 processors for both benchmarks using openmpi and mpich2. 
<br>
Can any one tell me if I will get a performance increasse &gt; 29GFlops 
<br>
using the two Switches and 2 GigEth Nic cards per node if I use Ethernet 
<br>
Channel Boning in FC4?
<br>
Thank you,
<br>
Allan Menezes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>Reply:</strong> <a href="0711.php">Brian Barrett: "Re: [OMPI users] Ethernet bonding and Open MPI"</a>
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
