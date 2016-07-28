<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 16:10:47 2005" -->
<!-- isoreceived="20051114211047" -->
<!-- sent="Mon, 14 Nov 2005 16:10:36 -0500 (Eastern Standard Time)" -->
<!-- isosent="20051114211036" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] HPL and TCP" -->
<!-- id="Pine.WNT.4.63.0511141603140.3384_at_bosilca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4378F920.1090602_at_sympatico.ca" -->
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
<strong>Date:</strong> 2005-11-14 16:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<li><strong>In reply to:</strong> <a href="0336.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Allan,
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
<p><span class="quotelev1">&gt; Dear Jeff, Sorry I could not test the cluster earlier but I am having 
</span><br>
<span class="quotelev1">&gt; problems with one compute node.(I will have to replace it!). So I will have 
</span><br>
<span class="quotelev1">&gt; to repeat this test with 15 nodes. Yes I had 4 NIC cards on the head node and 
</span><br>
<span class="quotelev1">&gt; it was only eth3 that was the gigabit NIC which was communicating to other 
</span><br>
<span class="quotelev1">&gt; eth1 gigabit Nics on the compute nodes through a gigabit switch. So though I 
</span><br>
<span class="quotelev1">&gt; did not specify the ethernet interface in the switch --mca pml teg I was 
</span><br>
<span class="quotelev1">&gt; getting good performance but in --mca btl tcp not specifying the interface 
</span><br>
<span class="quotelev1">&gt; seems to create problems. I wiped out the Linux FC3 installation and tried 
</span><br>
<span class="quotelev1">&gt; again with Oscar 4.2 but am having problems with --mca btl tcp switch. mpirun 
</span><br>
<span class="quotelev1">&gt; --mca btl tcp --prefix /home/allan/openmpi --hostfile aa -np 16 ./xhpl The 
</span><br>
<span class="quotelev1">&gt; hostfile aa contains the 16 hosts a1.lightning.net to a16.lightning.net. So 
</span><br>
<span class="quotelev1">&gt; to recap the cluster is only connected to itself through the giga bit 16 port 
</span><br>
<span class="quotelev1">&gt; switch through gigabit ethernet cards to form a LAN with an IP for each. 
</span><br>
<span class="quotelev1">&gt; There is an extra ethernet card built into the compute motherboards that is 
</span><br>
<span class="quotelev1">&gt; 10/100Mbps that is not connected to anything yet. Please can you tell me the 
</span><br>
<span class="quotelev1">&gt; right mpirun command line for btl tcp for my setup? Is the hostfile right? 
</span><br>
<span class="quotelev1">&gt; for the mpirun command above? Should it include a1.lightning.net which is the 
</span><br>
<span class="quotelev1">&gt; head node from where I am invoking mpirun? Or should it not have the head 
</span><br>
<span class="quotelev1">&gt; node? Thank you, Allan Message: 2 Date: Sun, 13 Nov 2005 15:51:30 -0500 From: 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt; Subject: Re: [O-MPI users] HPL anf TCP 
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; Message-ID: 
</span><br>
<span class="quotelev1">&gt; &lt;f143e44670c59a2f345708e6e0fad549_at_[hidden]&gt; Content-Type: text/plain; 
</span><br>
<span class="quotelev1">&gt; charset=US-ASCII; format=flowed On Nov 3, 2005, at 8:35 PM, Allan Menezes 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. No, I have 4 NICs on the head node and two on each of the 15 other 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes. I use the realtek 8169 gigabit ethernet cards on the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes as eth1 or eth0(one only) connected to a gigabit ethernet 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch with bisection bandwidth of 32Gbps and a sk98lin driver 3Com built 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in gigabit ethernet NIC card on the head node(eth3). The other ethernet 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cards 10/100M on the head node handle a network laser printer(eth0) and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth2 (10/100M) internet access. Eth1 is a spare 10/100M which I can 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove. The compute nodes each have two ethernet cards one 10/100Mbps 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ethernet not connected to anything(built in to M/B) and a PCI realtek 8169 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gigabit ethernet connected to the TCP network LAN(Gigabit). When I tried 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it without the switches -mca pml teg the maximum performace I would get 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with it was 9GFlops for P=4 Q=4 N=approx 12- 16 thousand and NB 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ridiculously low at 10 block size. If I tried bigger block sizes it would 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run for along time for large N ~ 16,000 unless I killed xhpl. I use atlas 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BLAS 3.7.11 libs compiled for each node and linked to HPL when creating 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xhpl. I also use open mpi mpicc in the hpl make file for compile and link 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both.  Maybe I should according to the new faq use the TCP switch to use 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth3 on the head node?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if I'm reading that right, there's only one network that connects the head 
</span><br>
<span class="quotelev1">&gt; node and the compute nodes, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's right!
</span><br>
<span class="quotelev1">&gt; Allan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I have 512MB of memory per node which is 8 GB total, so I can safely go 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; upto N=22,000 24,000. I used sizes of 22000 for TCP teg and did not run 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into problems. But if I do not specify the switches suggested by Tim I get 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bad performance for N = 12000.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I must admit that I'm still befuddled by this -- we are absolutely unable to 
</span><br>
<span class="quotelev1">&gt; duplicate this behavior.  It *sounds* like there is some network mismatching 
</span><br>
<span class="quotelev1">&gt; going on in here -- that the tcp btl is somehow routing information 
</span><br>
<span class="quotelev1">&gt; differently than the tcp ptl (and therefore taking longer -- timing out and 
</span><br>
<span class="quotelev1">&gt; the like).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We did make some improvements to the tcp subnet mask matching code for rc5; I 
</span><br>
<span class="quotelev1">&gt; had to ask again, but could you try with the latest nightly snapshot tarball?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a>
</span><br>
<span class="quotelev1">&gt; I will try it in the near future if time permits with the latest 1.0 snapshot 
</span><br>
<span class="quotelev1">&gt; and report back.
</span><br>
<span class="quotelev1">&gt; I had to &quot;re-image&quot; my cluster so I have some more work to do
</span><br>
<span class="quotelev1">&gt; Allan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. My cluster is an experimental Basement Cluster [BSquared = Brampton 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Beowulf] built out of x86 Durons(6), 2 athlons, 2 semprons, two P4s, 2 64 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bit x86_64 AMD64 ATHLONS and two AMD x86_64 SEmprons(754 pin) for a total 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of 16 machines running FC3 and Oscar beta cluster software. I have not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried it with the latest open mpi snapshot yet but I will to night. I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think I should reinstall FC3 on the head node P4 2.8GHz and reinstall all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the compute nodes with Oscar beta Nov 3, 2005 and open mpi of todays Nov 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3, 2005 1.0 snapshot and try again. I could have made an errror somewhere 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before. It should not take me long. But I doubt it as MPICH2 and open mpi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the switches pml teg give good comparable performance. I was not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using jumo MTU frames either just 1500bytes. It is not homogenous 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (BSquared) but a good test set up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have any advice, Please tell me and I could try it out.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you and good luck!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Allan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 27, 2005, at 10:19 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; On Oct 19, 2005, at 12:04 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; We've done linpack runs recently w/ Infiniband, which result in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; performance
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; comparable to mvapich, but not w/ the tcp port. Can you try
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; running w/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; earlier version, specify on the command line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; -mca pml teg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Hi Tim,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;   I tried the same cluster (16 node x86) with the switches -mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; teg and I get good performance of 24.52Gflops at N=22500
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; and Block size NB=120.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; My command line now looks like :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; pml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; teg -hostile aa -np 16 ./xhpl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; hostfile = aa, containing the addresses of the 16 machines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; I am using a GS116 16 port netgear Gigabit ethernet switch with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gnet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; realtek gig ethernet cards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Why, PLEASE, do these switches pml teg make such a difference?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; 2.6 times more performance in GFlops than what I was getting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; I tried version rc3 and not an earlier version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Thank you very much for your assistance!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Sorry for the delay in replying to this...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; The &quot;pml teg&quot; switch tells Open MPI to use the 2nd generation TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; implementation rather than the 3rd generation TCP.  More
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specifically,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; the &quot;PML&quot; is the point-to-point management layer.  There are 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; different components for this -- teg (2nd generation) and ob1 (3rd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; generation).  &quot;ob1&quot; is the default; specifying &quot;--mca pml teg&quot; tells
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Open MPI to use the &quot;teg&quot; component instead of ob1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Note, however, that teg and ob1 know nothing about TCP -- it's the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2nd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; order implications that make the difference here.  teg and ob1 use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; different back-end components to talk across networks:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; - teg uses PTL components (point-to-point transport layer -- 2nd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gen)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; - ob1 uses BTL components (byte transfer layer -- 3rd gen)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; We obviously have TCP implementations for both the PTL and BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Considerable time was spent optimizing the TCP PTL (i.e., 2nd gen).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Unfortunately, as yet, little time has been spent optimizing the TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; BTL (i.e., 3rd gen) -- it was a simple port, nothing more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; We have spent the majority of our time, so far, optimizing the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Myrinet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; and Infiniband BTLs (therefore showing that excellent performance is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; achievable in the BTLs).  However, I'm quite disappointed by the TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; BTL performance -- it sounds like we have a protocol mismatch that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; arbitrarily slowing everything down, and something that needs to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; fixed before 1.0 (it's not a problem with the BTL design, since IB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Myrinet performance is quite good -- just a problem/bug in the TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; implementation of the BTL).  That much performance degradation is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; clearly unacceptable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; {+} Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; {+} The Open MPI Project
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- {+} Jeff Squyres {+} The Open MPI Project {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0338.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Previous message:</strong> <a href="0336.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<li><strong>In reply to:</strong> <a href="0336.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
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
