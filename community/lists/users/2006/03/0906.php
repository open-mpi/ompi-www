<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 26 04:36:03 2006" -->
<!-- isoreceived="20060326093603" -->
<!-- sent="Sun, 26 Mar 2006 04:35:41 -0500" -->
<!-- isosent="20060326093541" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[OMPI users] No increase in performance found using two Gigabit Nics" -->
<!-- id="4426606D.20002_at_sympatico.ca" -->
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
<strong>Date:</strong> 2006-03-26 04:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>Previous message:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>Maybe reply:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 15 Mar 2006, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt;  Dear Brian, I have the same setup as Mr. Chakrbarty with 16 nodes,
</span><br>
<span class="quotelev1">&gt;  Oscar 4.2.1 beta 4 and two Gigabit ethernet cards with two 16 and 24
</span><br>
<span class="quotelev1">&gt;  port switches one smart and the other managed. I use dhcp to get the IP
</span><br>
<span class="quotelev1">&gt;  addresses for one eth card(The Ip addresses of these range from
</span><br>
<span class="quotelev1">&gt;  192.168.1.1 ... 16) and use static IP addresses for the other NIC of
</span><br>
<span class="quotelev1">&gt;  192.168.5.1 ... 16. The MTU of the first is 9000 for both the nICs and
</span><br>
<span class="quotelev1">&gt;  switch. For the second the MTU is 1500 for both the switch and the NIC
</span><br>
<span class="quotelev1">&gt;  cards as the switch cannot go beyond an MTU of beyond 1500. Using the
</span><br>
<span class="quotelev1">&gt;  -mca btl tcp switch with the 192.168.1.1 .. 16 NICs included and the
</span><br>
<span class="quotelev1">&gt;  192.168.5.1 ... 16 excluded by switches -mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt;  eth1(MTU=9000) and -mca btl_tcp_if_exclude eth0 (MTU=1500) I get with
</span><br>
<span class="quotelev1">&gt;  HPL a performance of approx 28.3GigaFlops with both Open Mpi and Mpich2.
</span><br>
<span class="quotelev1">&gt;  But since as you say above if you include both gigabit cards with the
</span><br>
<span class="quotelev1">&gt;  switch -mca btl_tcp_if_include eth0,eth1 using Open Mpi 1.1 (beta) or
</span><br>
<span class="quotelev1">&gt;  1.01 teh performance should increase for the same N and NB in HPL I get
</span><br>
<span class="quotelev1">&gt;  aslight performance decrease instead of increase of about 0.5 to 1
</span><br>
<span class="quotelev1">&gt;  gigaflop less. The hostfile is simply a1, a2 ... a16 using Oscar's DNS
</span><br>
<span class="quotelev1">&gt;  to resolve the domain name. Why is there a performance decrease?
</span><br>
<p>As both of the network devices come from the same BTL (internal driver
<br>
denomination) they will both have a similar priority. Let me explain how
<br>
exactly the fragmenting work. First for small messages only one of the
<br>
devices will be used. For messages above a certain size (usualy first
<br>
fragment + max_frag_size) the rest of the data will be split between the 2
<br>
devices depending on the device capabilities. Hint: what are the device
<br>
capabilities ? Well our algorithm is based on the latency and
<br>
bandwidth. As it is difficult to compute them directly from Open MPI,
<br>
the user should provide them with the correct values if the 2 nics
<br>
don't have similar performance.
<br>
<p>It is clear that for best latency the fastest of the 2 nics should be
<br>
used. Therefore, you should give a hint to open mpi which one is the
<br>
fastest one. There is a parameter for that called btl_tcp_latency_%device,
<br>
where %device is the name of your device. On a similar way you should
<br>
indicate what is the bandwidth for each nic in order to allow Open MPI to
<br>
correctly split the messages across all the nics (the parameter name is
<br>
btl_tcp_bandwidth_%device).
<br>
<p>Now le't take an example: You have 2 devices eth0 and eth1. Fir of all,
<br>
you have to compute the latency and bandwidth for each of them (using
<br>
Netpipe). Once you have these 4 values you will add them in your
<br>
$(HOME)/.openmpi/mca-params.conf file.
<br>
<p>btl_tcp_latency_eth0=30
<br>
btl_tcp_latency_eth1=40
<br>
<p>and
<br>
<p>btl_tcp_bandwidth_eth0=30
<br>
btl_tcp_bandwidth_eth1=70
<br>
<p>Now there is one trick. While the latency is an absolute value, the
<br>
bandwidth is relative (to the total bandwidth). Therefore, you have to
<br>
compute the percentage of each of the networks based on their total
<br>
bandwidth. If let's say eth0 has a bandwidth of 280Mbs and eth1 has a
<br>
bandwidth of 580Mbs the correct values for the bandwidth will be:
<br>
<p>btl_tcp_bandwidth_eth0=(280*100)/(280+580) [*32*]
<br>
btl_tcp_bandwidth_eth1=(580*100)/(280+580) [*well 100-32 ~ 68]
<br>
<p>Now, once you have your 2 devices correctly configured run again Netpipe
<br>
and you will notice that the bandwidth will increase. Of course you have
<br>
to specify that you want to use both of them via &quot;--mca btl_tcp_if_include
<br>
eth0,eth1&quot;
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
Dear George,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I did the above for a set of 4 nodes with the setup as per my 
<br>
previous post and I got no increase in performance.
<br>
I have 2 gigabit NICs per node, one realtek giving a latency of 27 us 
<br>
and bandwidth approximately 460Mbps measured using Netpipe.
<br>
The other is a dlink with latency 32us and bandwidth 760Mbps. While 
<br>
benchmarking with HPL with One gig Bytes DDRRAM pernode I get 8.209 
<br>
GFlops for 4 nodes with eth1 the dlink cards and jumbo MTU =9000 for all 
<br>
and the NETGEAR managaed switch set with Jumbo frames enabled. The 
<br>
command I used was:
<br>
&nbsp;#&gt; mpirun --prefix /opt/openmpi102 -hostfile a1234 -mca btl tcp -mca 
<br>
btl_tcp_if_exclude eth0,eth2,eth3,lo -np 4 ./xhpl
<br>
the hostfile a1234 conatins a1, a2, a3, a4 which resolve to 192.168.1.1 
<br>
... 4
<br>
The Network Topology: Conists of 2 gigabit NICs per node a realtek and a 
<br>
dlink. Realtek MTU =1500 and Dlink MTU =9000
<br>
on two subnets the realtek subnet of 192.168.1.1 ... 4 and the dlink 
<br>
subnet of 192.168.5.1 ... 4 with NETMASK=255.255.255.0
<br>
The dlink subnet is connected to the Managed Jumbo Frames Enabled 
<br>
gigabit NEtgear switch(model -GS724T)
<br>
while the realtek subnet is connected to the smart gigabit NETGEAR 
<br>
switch with MTU max 1500 (model -GS116)
<br>
The switches are isolated and not interconnected. I can connect from 
<br>
192.168.5.1 to 192.168.1.3 and  to 192 .168.5.4
<br>
so I have total connectivitybtl_tcp_latency_eth0 = 27
<br>
. I guess this happens because of the loopback on each machine. I am 
<br>
running FC4 and Oscar 4.2.1 beta 4
<br>
My openmpi-params file in the $HOME/.openmpi/ diectory looks something like
<br>
btl_tcp_latency_eth0 = 27
<br>
btl_tcp_latency_eth1 = 32
<br>
btl_tcp_bandwidth_eth1 = 34
<br>
btl_tcp_bandwidth_eth0 = 66
<br>
<p>Case 2) Measuring performance with hpl with open mpi 1.02 with two eth 
<br>
cards with the cfollowing command:
<br>
#&gt; mpirun --prefix /opt/openmpi102 -hostfile a1234 -mca btl tcp -mca 
<br>
btl_tcp_if_exclude eth2,eth3,lo -np 4 ./xhpl
<br>
The head node on which mpirun was executed has 4 NICs two gigabit 
<br>
realtek and Sk98lin and two Fast ethernet 100Mps cards for internet and 
<br>
network printer
<br>
The open_params file looked like:
<br>
btl_tcp_latency_eth0 = 27
<br>
btl_tcp_latency_eth1 = 32
<br>
btl_tcp_bandwidth_eth1 = 0
<br>
btl_tcp_bandwidth_eth0 = 100
<br>
The peformance I measured was 8.132 GFlops.
<br>
<p>So no performance increase was found using two gigabit NICs or one using 
<br>
openmpi1.02 beta
<br>
The Gigabit NICS are cheap cards that use the processing power of the 
<br>
CPU to do most of the overhead work and are 33MHz 32 PCI cards.
<br>
They reside on cheap Asrock micro atx all in one Motherboards. Each PCI 
<br>
slot can supply only one gigabit card a burst of data to satuarate the 
<br>
PCI bus.
<br>
These mobos have only two PCI slots (32bit 33MHz) and are Athlon and 
<br>
Duron and P4 mixed. Head node P4 and rest athlon, 2 duron.
<br>
So tell me if my analysis is right? Have I made any mistakes in the 
<br>
network topology or elsewhere?
<br>
Why is it that there is no performance increase with two gigabit cards? 
<br>
Should the cards be matched like both dlink in a node?
<br>
Thank you very much,
<br>
Best regards,
<br>
Allan Menezes
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>Previous message:</strong> <a href="0905.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
<li><strong>Maybe reply:</strong> <a href="0907.php">Jayabrata Chakrabarty: "Re: [OMPI users] No increase in performance found using two Gigabit Nics"</a>
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
