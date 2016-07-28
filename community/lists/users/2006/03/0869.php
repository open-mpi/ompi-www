<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 22:51:32 2006" -->
<!-- isoreceived="20060316035132" -->
<!-- sent="Wed, 15 Mar 2006 22:51:51 -0500 (EST)" -->
<!-- isosent="20060316035151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two Gigabit NiCs" -->
<!-- id="Pine.LNX.4.58.0603152232470.28358_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4418DB0E.4030301_at_sympatico.ca" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-15 22:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Allan Menezes: "[OMPI users] Two Gigabit NiCs"</a>
<li><strong>In reply to:</strong> <a href="0868.php">Allan Menezes: "[OMPI users] Two Gigabit NiCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0882.php">Jayabrata Chakrabarty: "Re: [OMPI users] Two Gigabit NiCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 15 Mar 2006, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt; Dear Brian, I have the same setup as Mr.  Chakrbarty with 16 nodes,
</span><br>
<span class="quotelev1">&gt; Oscar 4.2.1 beta 4 and two Gigabit ethernet cards with two 16 and 24
</span><br>
<span class="quotelev1">&gt; port switches one smart and the other managed.  I use dhcp to get the IP
</span><br>
<span class="quotelev1">&gt; addresses for one eth card(The Ip addresses of these range from
</span><br>
<span class="quotelev1">&gt; 192.168.1.1 ... 16) and use static IP addresses for the other NIC of
</span><br>
<span class="quotelev1">&gt; 192.168.5.1 ... 16. The MTU of the first is 9000 for both the nICs and
</span><br>
<span class="quotelev1">&gt; switch. For the second the MTU is 1500 for both the switch and the NIC
</span><br>
<span class="quotelev1">&gt; cards as the switch cannot go beyond an MTU of beyond 1500.  Using the
</span><br>
<span class="quotelev1">&gt; -mca btl tcp switch with the 192.168.1.1 .. 16 NICs included and the
</span><br>
<span class="quotelev1">&gt; 192.168.5.1 ... 16 excluded by switches -mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; eth1(MTU=9000) and -mca btl_tcp_if_exclude eth0 (MTU=1500) I get with
</span><br>
<span class="quotelev1">&gt; HPL a performance of approx 28.3GigaFlops with both Open Mpi and Mpich2.
</span><br>
<span class="quotelev1">&gt; But since as you say above if you include both gigabit cards with the
</span><br>
<span class="quotelev1">&gt; switch -mca btl_tcp_if_include eth0,eth1 using Open Mpi 1.1 (beta) or
</span><br>
<span class="quotelev1">&gt; 1.01 teh performance should increase for the same N and NB in HPL I get
</span><br>
<span class="quotelev1">&gt; aslight performance decrease instead of increase of about 0.5 to 1
</span><br>
<span class="quotelev1">&gt; gigaflop less. The hostfile is simply a1, a2 ... a16 using Oscar's DNS
</span><br>
<span class="quotelev1">&gt; to resolve the domain name. Why is there a performance decrease?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0868.php">Allan Menezes: "[OMPI users] Two Gigabit NiCs"</a>
<li><strong>In reply to:</strong> <a href="0868.php">Allan Menezes: "[OMPI users] Two Gigabit NiCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0882.php">Jayabrata Chakrabarty: "Re: [OMPI users] Two Gigabit NiCs"</a>
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
