<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 14 15:52:55 2005" -->
<!-- isoreceived="20051114205255" -->
<!-- sent="Mon, 14 Nov 2005 15:52:48 -0500" -->
<!-- isosent="20051114205248" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[O-MPI users] HPL and TCP" -->
<!-- id="4378F920.1090602_at_sympatico.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2005-11-14 15:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Reply:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff, Sorry I could not test the cluster earlier but I am having 
<br>
problems with one compute node.(I will have to replace it!). So I will 
<br>
have to repeat this test with 15 nodes. Yes I had 4 NIC cards on the 
<br>
head node and it was only eth3 that was the gigabit NIC which was 
<br>
communicating to other eth1 gigabit Nics on the compute nodes through a 
<br>
gigabit switch. So though I did not specify the ethernet interface in 
<br>
the switch --mca pml teg I was getting good performance but in --mca btl 
<br>
tcp not specifying the interface seems to create problems. I wiped out 
<br>
the Linux FC3 installation and tried again with Oscar 4.2 but am having 
<br>
problems with --mca btl tcp switch. mpirun --mca btl tcp --prefix 
<br>
/home/allan/openmpi --hostfile aa -np 16 ./xhpl The hostfile aa contains 
<br>
the 16 hosts a1.lightning.net to a16.lightning.net. So to recap the 
<br>
cluster is only connected to itself through the giga bit 16 port switch 
<br>
through gigabit ethernet cards to form a LAN with an IP for each. There 
<br>
is an extra ethernet card built into the compute motherboards that is 
<br>
10/100Mbps that is not connected to anything yet. Please can you tell me 
<br>
the right mpirun command line for btl tcp for my setup? Is the hostfile 
<br>
right? for the mpirun command above? Should it include a1.lightning.net 
<br>
which is the head node from where I am invoking mpirun? Or should it not 
<br>
have the head node? Thank you, Allan Message: 2 Date: Sun, 13 Nov 2005 
<br>
15:51:30 -0500 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt; Subject: Re: 
<br>
[O-MPI users] HPL anf TCP To: Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Message-ID: &lt;f143e44670c59a2f345708e6e0fad549_at_[hidden]&gt; 
<br>
Content-Type: text/plain; charset=US-ASCII; format=flowed On Nov 3, 
<br>
2005, at 8:35 PM, Allan Menezes wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 1. No, I have 4 NICs on the head node and two on each of the 15 other 
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes. I use the realtek 8169 gigabit ethernet cards on the 
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes as eth1 or eth0(one only) connected to a gigabit 
</span><br>
<span class="quotelev2">&gt;&gt; ethernet switch with bisection bandwidth of 32Gbps and a sk98lin 
</span><br>
<span class="quotelev2">&gt;&gt; driver 3Com built in gigabit ethernet NIC card on the head node(eth3). 
</span><br>
<span class="quotelev2">&gt;&gt; The other ethernet cards 10/100M on the head node handle a network 
</span><br>
<span class="quotelev2">&gt;&gt; laser printer(eth0) and eth2 (10/100M) internet access. Eth1 is a 
</span><br>
<span class="quotelev2">&gt;&gt; spare 10/100M which I can remove. The compute nodes each have two 
</span><br>
<span class="quotelev2">&gt;&gt; ethernet cards one 10/100Mbps ethernet not connected to anything(built 
</span><br>
<span class="quotelev2">&gt;&gt; in to M/B) and a PCI realtek 8169 gigabit ethernet connected to the 
</span><br>
<span class="quotelev2">&gt;&gt; TCP network LAN(Gigabit). When I tried it without the switches -mca 
</span><br>
<span class="quotelev2">&gt;&gt; pml teg the maximum performace I would get with it was 9GFlops for P=4 
</span><br>
<span class="quotelev2">&gt;&gt; Q=4 N=approx 12- 16 thousand and NB ridiculously low at 10 block size. 
</span><br>
<span class="quotelev2">&gt;&gt; If I tried bigger block sizes it would run for along time for large N 
</span><br>
<span class="quotelev2">&gt;&gt; ~ 16,000 unless I killed xhpl. I use atlas BLAS 3.7.11 libs compiled 
</span><br>
<span class="quotelev2">&gt;&gt; for each node and linked to HPL when creating xhpl. I also use open 
</span><br>
<span class="quotelev2">&gt;&gt; mpi mpicc in the hpl make file for compile and link both.  Maybe I 
</span><br>
<span class="quotelev2">&gt;&gt; should according to the new faq use the TCP switch to use eth3 on the 
</span><br>
<span class="quotelev2">&gt;&gt; head node?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So if I'm reading that right, there's only one network that connects 
<br>
the head node and the compute nodes, right?
<br>
<p>That's right!
<br>
Allan
<br>
<p><span class="quotelev2">&gt;&gt; 2. I have 512MB of memory per node which is 8 GB total, so I can 
</span><br>
<span class="quotelev2">&gt;&gt; safely go upto N=22,000 24,000. I used sizes of 22000 for TCP teg and 
</span><br>
<span class="quotelev2">&gt;&gt; did not run into problems. But if I do not specify the switches 
</span><br>
<span class="quotelev2">&gt;&gt; suggested by Tim I get bad performance for N = 12000.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I must admit that I'm still befuddled by this -- we are absolutely 
<br>
unable to duplicate this behavior.  It *sounds* like there is some 
<br>
network mismatching going on in here -- that the tcp btl is somehow 
<br>
routing information differently than the tcp ptl (and therefore taking 
<br>
longer -- timing out and the like).
<br>
<p>We did make some improvements to the tcp subnet mask matching code for 
<br>
rc5; I had to ask again, but could you try with the latest nightly 
<br>
snapshot tarball?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a>
<br>
I will try it in the near future if time permits with the latest 1.0 snapshot and report back.
<br>
I had to &quot;re-image&quot; my cluster so I have some more work to do
<br>
Allan
<br>
<p><p><span class="quotelev2">&gt;&gt; 4. My cluster is an experimental Basement Cluster [BSquared = Brampton 
</span><br>
<span class="quotelev2">&gt;&gt; Beowulf] built out of x86 Durons(6), 2 athlons, 2 semprons, two P4s, 2 
</span><br>
<span class="quotelev2">&gt;&gt; 64 bit x86_64 AMD64 ATHLONS and two AMD x86_64 SEmprons(754 pin) for a 
</span><br>
<span class="quotelev2">&gt;&gt; total of 16 machines running FC3 and Oscar beta cluster software. I 
</span><br>
<span class="quotelev2">&gt;&gt; have not tried it with the latest open mpi snapshot yet but I will to 
</span><br>
<span class="quotelev2">&gt;&gt; night. I think I should reinstall FC3 on the head node P4 2.8GHz and 
</span><br>
<span class="quotelev2">&gt;&gt; reinstall all the compute nodes with Oscar beta Nov 3, 2005 and open 
</span><br>
<span class="quotelev2">&gt;&gt; mpi of todays Nov 3, 2005 1.0 snapshot and try again. I could have 
</span><br>
<span class="quotelev2">&gt;&gt; made an errror somewhere before. It should not take me long. But I 
</span><br>
<span class="quotelev2">&gt;&gt; doubt it as MPICH2 and open mpi with the switches pml teg give good 
</span><br>
<span class="quotelev2">&gt;&gt; comparable performance. I was not using jumo MTU frames either just 
</span><br>
<span class="quotelev2">&gt;&gt; 1500bytes. It is not homogenous (BSquared) but a good test set up.
</span><br>
<span class="quotelev2">&gt;&gt; If you have any advice, Please tell me and I could try it out.
</span><br>
<span class="quotelev2">&gt;&gt; Thank you and good luck!
</span><br>
<span class="quotelev2">&gt;&gt; Allan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2005, at 10:19 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; On Oct 19, 2005, at 12:04 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; We've done linpack runs recently w/ Infiniband, which result in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; performance
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; comparable to mvapich, but not w/ the tcp port. Can you try
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; running w/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; earlier version, specify on the command line:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; -mca pml teg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Hi Tim,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;   I tried the same cluster (16 node x86) with the switches -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; teg and I get good performance of 24.52Gflops at N=22500
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; and Block size NB=120.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; My command line now looks like :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; teg -hostile aa -np 16 ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; hostfile = aa, containing the addresses of the 16 machines.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; I am using a GS116 16 port netgear Gigabit ethernet switch with 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gnet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; realtek gig ethernet cards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Why, PLEASE, do these switches pml teg make such a difference? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; 2.6 times more performance in GFlops than what I was getting 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; without
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; I tried version rc3 and not an earlier version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Thank you very much for your assistance!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Sorry for the delay in replying to this...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; The &quot;pml teg&quot; switch tells Open MPI to use the 2nd generation TCP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; implementation rather than the 3rd generation TCP.  More 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifically,
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; the &quot;PML&quot; is the point-to-point management layer.  There are 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; different components for this -- teg (2nd generation) and ob1 (3rd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; generation).  &quot;ob1&quot; is the default; specifying &quot;--mca pml teg&quot; tells
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Open MPI to use the &quot;teg&quot; component instead of ob1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Note, however, that teg and ob1 know nothing about TCP -- it's the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2nd
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; order implications that make the difference here.  teg and ob1 use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; different back-end components to talk across networks:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; - teg uses PTL components (point-to-point transport layer -- 2nd 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gen)
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; - ob1 uses BTL components (byte transfer layer -- 3rd gen)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; We obviously have TCP implementations for both the PTL and BTL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Considerable time was spent optimizing the TCP PTL (i.e., 2nd gen).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Unfortunately, as yet, little time has been spent optimizing the TCP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; BTL (i.e., 3rd gen) -- it was a simple port, nothing more.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; We have spent the majority of our time, so far, optimizing the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Myrinet
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; and Infiniband BTLs (therefore showing that excellent performance is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; achievable in the BTLs).  However, I'm quite disappointed by the TCP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; BTL performance -- it sounds like we have a protocol mismatch that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; arbitrarily slowing everything down, and something that needs to be
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; fixed before 1.0 (it's not a problem with the BTL design, since IB 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Myrinet performance is quite good -- just a problem/bug in the TCP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; implementation of the BTL).  That much performance degradation is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; clearly unacceptable.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>-- {+} Jeff Squyres {+} The Open MPI Project {+} 
<br>
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> ------------------------------
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0336/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Previous message:</strong> <a href="0335.php">Daryl W. Grunau: "[O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
<li><strong>Reply:</strong> <a href="0337.php">George Bosilca: "Re: [O-MPI users] HPL and TCP"</a>
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
