<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  3 20:36:12 2005" -->
<!-- isoreceived="20051104013612" -->
<!-- sent="Thu, 03 Nov 2005 20:35:41 -0500" -->
<!-- isosent="20051104013541" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[O-MPI users] HPL anf TCP" -->
<!-- id="436ABAED.6000302_at_sympatico.ca" -->
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
<strong>Date:</strong> 2005-11-03 20:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0278.php">Jeff Squyres: "Re: [O-MPI users] Open MPI limitations?"</a>
<li><strong>Previous message:</strong> <a href="0276.php">Sebastian Forsman: "[O-MPI users] Open MPI limitations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0328.php">Jeff Squyres: "Re: [O-MPI users] HPL anf TCP"</a>
<li><strong>Reply:</strong> <a href="0328.php">Jeff Squyres: "Re: [O-MPI users] HPL anf TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Message: 2
<br>
Date: Wed, 2 Nov 2005 17:28:33 -0500
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [O-MPI users] HPL and OpenMpi RC3
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;10BFC5D6-F68C-46F0-A984-5C8710675811_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
<br>
<p>Allan --
<br>
<p>We have been unable to reproduce this bad TCP performance behavior.   
<br>
Indeed, in our runs, TEG TCP is performing slower than OB1 TCP.
<br>
<p>Sidenote: is there any reason you're supplying the pls_rsh_orted MCA  
<br>
parameter on the command line?  It shouldn't really be necessary if  
<br>
OMPI is in your PATH (although you may need to add it to your PATH in  
<br>
your shell startup files, or use the --prefix option -- see http:// 
<br>
www.open-mpi.org/faq/?category=running#adding-ompi-to-path and http:// 
<br>
www.open-mpi.org/faq/?category=running#mpirun-prefix).
<br>
<p>Some followup questions:
<br>
<p>1. Do you only have one TCP NIC on each node?
<br>
2. Are you running HPL in a size that is not going to thrash your  
<br>
memory? (I'm guessing not, since teg runs were ok, but just to be  
<br>
sure...)
<br>
3. Is anyone else running on these nodes at the same time?  (Again,  
<br>
I'm assuming no, but just want to be sure)
<br>
4. Can you try this again with the latest v1.0 snapshot?  (http:// 
<br>
www.open-mpi.org/nightly/v1.0/)
<br>
<p>Thanks!
<br>
<p>Hi Jeff,
<br>
Answers to the above Questions:
<br>
1. No, I have 4 NICs on the head node and two on each of the 15 other compute nodes. I use the realtek 8169 gigabit ethernet cards on the compute nodes as eth1 or eth0(one only) connected to a gigabit ethernet switch with bisection bandwidth of 32Gbps and a sk98lin driver 3Com built in gigabit ethernet NIC card on the head node(eth3). The other ethernet cards 10/100M on the head node handle a network laser printer(eth0) and eth2 (10/100M) internet access. Eth1 is a spare 10/100M which I can remove. The compute nodes each have two ethernet cards one 10/100Mbps ethernet not connected to anything(built in to M/B) and a PCI realtek 8169 gigabit ethernet connected to the TCP network LAN(Gigabit). When I tried it without the switches -mca pml teg the maximum performace I would get with it was 9GFlops for P=4 Q=4 N=approx 12- 16 thousand and NB ridiculously low at 10 block size. If I tried bigger block sizes it would run for along time for large N ~ 16,000 unless I killed xhpl. I use atlas BLAS 3.7.11 libs compiled for each node and linked to HPL when creating xhpl. I also use open mpi mpicc in the hpl make file for compile and link both.
<br>
&nbsp;&nbsp;&nbsp;Maybe I should according to the new faq use the TCP switch to use eth3 on the head node?
<br>
2. I have 512MB of memory per node which is 8 GB total, so I can safely go upto N=22,000 24,000. I used sizes of 22000 for TCP teg and did not run into problems. But if I do not specify the switches suggested by Tim I get bad performance for N = 12000.
<br>
3. No , just me.
<br>
4. My cluster is an experimental Basement Cluster [BSquared = Brampton Beowulf] built out of x86 Durons(6), 2 athlons, 2 semprons, two P4s, 2 64 bit x86_64 AMD64 ATHLONS and two AMD x86_64 SEmprons(754 pin) for a total of 16 machines running FC3 and Oscar beta cluster software. I have not tried it with the latest open mpi snapshot yet but I will to night. I think I should reinstall FC3 on the head node P4 2.8GHz and reinstall all the compute nodes with Oscar beta Nov 3, 2005 and open mpi of todays Nov 3, 2005 1.0 snapshot and try again. I could have made an errror somewhere before. It should not take me long. But I doubt it as MPICH2 and open mpi with the switches pml teg give good comparable performance. I was not using jumo MTU frames either just 1500bytes. It is not homogenous (BSquared) but a good test set up. 
<br>
If you have any advice, Please tell me and I could try it out.
<br>
Thank you and good luck!
<br>
Allan 
<br>
<p><p><p><p><p>On Oct 27, 2005, at 10:19 AM, Jeff Squyres wrote:
<br>
<p><p><span class="quotelev2">&gt;&gt; On Oct 19, 2005, at 12:04 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We've done linpack runs recently w/ Infiniband, which result in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comparable to mvapich, but not w/ the tcp port. Can you try  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running w/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; earlier version, specify on the command line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca pml teg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Tim,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   I tried the same cluster (16 node x86) with the switches -mca pml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; teg and I get good performance of 24.52Gflops at N=22500
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and Block size NB=120.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My command line now looks like :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -mca pml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; teg -hostile aa -np 16 ./xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile = aa, containing the addresses of the 16 machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using a GS116 16 port netgear Gigabit ethernet switch with Gnet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; realtek gig ethernet cards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why, PLEASE, do these switches pml teg make such a difference? It's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.6 times more performance in GFlops than what I was getting without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried version rc3 and not an earlier version.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you very much for your assistance!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the delay in replying to this...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;pml teg&quot; switch tells Open MPI to use the 2nd generation TCP
</span><br>
<span class="quotelev2">&gt;&gt; implementation rather than the 3rd generation TCP.  More specifically,
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;PML&quot; is the point-to-point management layer.  There are 2
</span><br>
<span class="quotelev2">&gt;&gt; different components for this -- teg (2nd generation) and ob1 (3rd
</span><br>
<span class="quotelev2">&gt;&gt; generation).  &quot;ob1&quot; is the default; specifying &quot;--mca pml teg&quot; tells
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI to use the &quot;teg&quot; component instead of ob1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note, however, that teg and ob1 know nothing about TCP -- it's the 2nd
</span><br>
<span class="quotelev2">&gt;&gt; order implications that make the difference here.  teg and ob1 use
</span><br>
<span class="quotelev2">&gt;&gt; different back-end components to talk across networks:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - teg uses PTL components (point-to-point transport layer -- 2nd gen)
</span><br>
<span class="quotelev2">&gt;&gt; - ob1 uses BTL components (byte transfer layer -- 3rd gen)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We obviously have TCP implementations for both the PTL and BTL.
</span><br>
<span class="quotelev2">&gt;&gt; Considerable time was spent optimizing the TCP PTL (i.e., 2nd gen).
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, as yet, little time has been spent optimizing the TCP
</span><br>
<span class="quotelev2">&gt;&gt; BTL (i.e., 3rd gen) -- it was a simple port, nothing more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have spent the majority of our time, so far, optimizing the Myrinet
</span><br>
<span class="quotelev2">&gt;&gt; and Infiniband BTLs (therefore showing that excellent performance is
</span><br>
<span class="quotelev2">&gt;&gt; achievable in the BTLs).  However, I'm quite disappointed by the TCP
</span><br>
<span class="quotelev2">&gt;&gt; BTL performance -- it sounds like we have a protocol mismatch that is
</span><br>
<span class="quotelev2">&gt;&gt; arbitrarily slowing everything down, and something that needs to be
</span><br>
<span class="quotelev2">&gt;&gt; fixed before 1.0 (it's not a problem with the BTL design, since IB and
</span><br>
<span class="quotelev2">&gt;&gt; Myrinet performance is quite good -- just a problem/bug in the TCP
</span><br>
<span class="quotelev2">&gt;&gt; implementation of the BTL).  That much performance degradation is
</span><br>
<span class="quotelev2">&gt;&gt; clearly unacceptable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0277/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0278.php">Jeff Squyres: "Re: [O-MPI users] Open MPI limitations?"</a>
<li><strong>Previous message:</strong> <a href="0276.php">Sebastian Forsman: "[O-MPI users] Open MPI limitations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0328.php">Jeff Squyres: "Re: [O-MPI users] HPL anf TCP"</a>
<li><strong>Reply:</strong> <a href="0328.php">Jeff Squyres: "Re: [O-MPI users] HPL anf TCP"</a>
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
