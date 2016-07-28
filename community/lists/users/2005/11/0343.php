<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 23:21:51 2005" -->
<!-- isoreceived="20051115042151" -->
<!-- sent="Mon, 14 Nov 2005 23:21:46 -0500" -->
<!-- isosent="20051115042146" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[O-MPI users] HPL and TCP" -->
<!-- id="4379625A.60708_at_sympatico.ca" -->
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
<strong>Date:</strong> 2005-11-14 23:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0344.php">Allan Menezes: "[O-MPI users] hpl and tcp"</a>
<li><strong>Previous message:</strong> <a href="0342.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Reply:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I think the confusion was my fault because --mca pml teg did not 
<br>
produce errors and gave almost the same performance as Mpich2 v 1.02p1.
<br>
The reason why I cannot do what you suggest below is because the 
<br>
.openmpi/mca-params.conf file if I am not mistaken would reside in my 
<br>
home NFS share directory. I have installed a new 5.01 beta version of 
<br>
Oscar and /home/allan is a shared directory of my head node where the 
<br>
openmpi installation resides.[/home/allan/openmpi with paths in the 
<br>
.bash_profile and .bashrc files] I would have to do an individual 16 
<br>
installations of open mpi on each node for /opt/openmpi and the 
<br>
mca-params file residing in there. Tell me if I am wrong. I might have 
<br>
to do this as this is a heterogenous cluster with different brands of 
<br>
ethernet cards and CPU's.
<br>
But it's a good test bed and I have no problems installing Oscar 4.2 on it.
<br>
See my later post Hpl and TCP today where I tried 0b1 without mca  pml 
<br>
teg and so on and get a good performance with 15 nodes and open mpi rc6.
<br>
Thank you very much,
<br>
Regards,
<br>
Allan
<br>
<p>Message: 1
<br>
Date: Mon, 14 Nov 2005 16:10:36 -0500 (Eastern Standard Time)
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Subject: Re: [O-MPI users] HPL and TCP
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;Pine.WNT.4.63.0511141603140.3384_at_bosilca&gt;
<br>
Content-Type: TEXT/PLAIN; charset=US-ASCII; format=flowed
<br>
<p>Allan,
<br>
<p>If there are 2 Ethernet cards it's better if you can point to the one you 
<br>
want to use. For that you can modify the .openmpi/mca-params.conf file in 
<br>
your home directory. All of the options can go in this file so you will 
<br>
not have to specify them on the mpirun command every time.
<br>
<p>I give you here a small example that contain the host file (from where 
<br>
open mpi will pick the nodes) as well as the BTL configuration.
<br>
<p>btl_base_include=tcp,sm,self
<br>
btl_tcp_if_include=eth0
<br>
rds_hostfile_path = /home/bosilca/.openmpi/machinefile
<br>
<p>On the first line I specify that Open MPI is allowed to use the TCP, 
<br>
shared memory and self devices. Self should always be specified otherwise 
<br>
any communication to the same process will fail (it's out loopback 
<br>
device).
<br>
<p>The second line specify that the TCP BTL is allowed to use only the eth0 
<br>
interface. This line has to reflect your own configuration.
<br>
<p>Finally the 3th one give the full path to the hostfile file.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>On Mon, 14 Nov 2005, Allan Menezes wrote:
<br>
<p><p><span class="quotelev2">&gt;&gt; Dear Jeff, Sorry I could not test the cluster earlier but I am having 
</span><br>
<span class="quotelev2">&gt;&gt; problems with one compute node.(I will have to replace it!). So I will have 
</span><br>
<span class="quotelev2">&gt;&gt; to repeat this test with 15 nodes. Yes I had 4 NIC cards on the head node and 
</span><br>
<span class="quotelev2">&gt;&gt; it was only eth3 that was the gigabit NIC which was communicating to other 
</span><br>
<span class="quotelev2">&gt;&gt; eth1 gigabit Nics on the compute nodes through a gigabit switch. So though I 
</span><br>
<span class="quotelev2">&gt;&gt; did not specify the ethernet interface in the switch --mca pml teg I was 
</span><br>
<span class="quotelev2">&gt;&gt; getting good performance but in --mca btl tcp not specifying the interface 
</span><br>
<span class="quotelev2">&gt;&gt; seems to create problems. I wiped out the Linux FC3 installation and tried 
</span><br>
<span class="quotelev2">&gt;&gt; again with Oscar 4.2 but am having problems with --mca btl tcp switch. mpirun 
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl tcp --prefix /home/allan/openmpi --hostfile aa -np 16 ./xhpl The 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile aa contains the 16 hosts a1.lightning.net to a16.lightning.net. So 
</span><br>
<span class="quotelev2">&gt;&gt; to recap the cluster is only connected to itself through the giga bit 16 port 
</span><br>
<span class="quotelev2">&gt;&gt; switch through gigabit ethernet cards to form a LAN with an IP for each. 
</span><br>
<span class="quotelev2">&gt;&gt; There is an extra ethernet card built into the compute motherboards that is 
</span><br>
<span class="quotelev2">&gt;&gt; 10/100Mbps that is not connected to anything yet. Please can you tell me the 
</span><br>
<span class="quotelev2">&gt;&gt; right mpirun command line for btl tcp for my setup? Is the hostfile right? 
</span><br>
<span class="quotelev2">&gt;&gt; for the mpirun command above? Should it include a1.lightning.net which is the 
</span><br>
<span class="quotelev2">&gt;&gt; head node from where I am invoking mpirun? Or should it not have the head 
</span><br>
<span class="quotelev2">&gt;&gt; node? Thank you, Allan Message: 2 Date: Sun, 13 Nov 2005 15:51:30 -0500 From: 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt; Subject: Re: [O-MPI users] HPL anf TCP 
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; Message-ID: 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;f143e44670c59a2f345708e6e0fad549_at_[hidden]&gt; Content-Type: text/plain; 
</span><br>
<span class="quotelev2">&gt;&gt; charset=US-ASCII; format=flowed On Nov 3, 2005, at 8:35 PM, Allan Menezes 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. No, I have 4 NICs on the head node and two on each of the 15 other 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute nodes. I use the realtek 8169 gigabit ethernet cards on the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compute nodes as eth1 or eth0(one only) connected to a gigabit ethernet 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; switch with bisection bandwidth of 32Gbps and a sk98lin driver 3Com built 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in gigabit ethernet NIC card on the head node(eth3). The other ethernet 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cards 10/100M on the head node handle a network laser printer(eth0) and 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; eth2 (10/100M) internet access. Eth1 is a spare 10/100M which I can 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; remove. The compute nodes each have two ethernet cards one 10/100Mbps 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ethernet not connected to anything(built in to M/B) and a PCI realtek 8169 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gigabit ethernet connected to the TCP network LAN(Gigabit). When I tried 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; it without the switches -mca pml teg the maximum performace I would get 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with it was 9GFlops for P=4 Q=4 N=approx 12- 16 thousand and NB 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ridiculously low at 10 block size. If I tried bigger block sizes it would 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; run for along time for large N ~ 16,000 unless I killed xhpl. I use atlas 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; BLAS 3.7.11 libs compiled for each node and linked to HPL when creating 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; xhpl. I also use open mpi mpicc in the hpl make file for compile and link 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; both.  Maybe I should according to the new faq use the TCP switch to use 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; eth3 on the head node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if I'm reading that right, there's only one network that connects the head 
</span><br>
<span class="quotelev2">&gt;&gt; node and the compute nodes, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's right!
</span><br>
<span class="quotelev2">&gt;&gt; Allan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0344.php">Allan Menezes: "[O-MPI users] hpl and tcp"</a>
<li><strong>Previous message:</strong> <a href="0342.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Reply:</strong> <a href="0346.php">Jeff Squyres: "Re: [O-MPI users] HPL and TCP"</a>
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
