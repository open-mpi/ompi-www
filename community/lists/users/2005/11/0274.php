<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  2 17:28:35 2005" -->
<!-- isoreceived="20051102222835" -->
<!-- sent="Wed, 2 Nov 2005 17:28:33 -0500" -->
<!-- isosent="20051102222833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] HPL and OpenMpi RC3" -->
<!-- id="10BFC5D6-F68C-46F0-A984-5C8710675811_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="68ed5f8be615dc7574113985860cdaac_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-02 17:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0275.php">Jeff Squyres: "Re: [O-MPI users] TCP problems"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Allan --
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
<p><p>On Oct 27, 2005, at 10:19 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 19, 2005, at 12:04 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've done linpack runs recently w/ Infiniband, which result in
</span><br>
<span class="quotelev2">&gt;&gt; performance
</span><br>
<span class="quotelev2">&gt;&gt; comparable to mvapich, but not w/ the tcp port. Can you try  
</span><br>
<span class="quotelev2">&gt;&gt; running w/
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev2">&gt;&gt; earlier version, specify on the command line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca pml teg
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tim,
</span><br>
<span class="quotelev2">&gt;&gt;   I tried the same cluster (16 node x86) with the switches -mca pml
</span><br>
<span class="quotelev2">&gt;&gt; teg and I get good performance of 24.52Gflops at N=22500
</span><br>
<span class="quotelev2">&gt;&gt; and Block size NB=120.
</span><br>
<span class="quotelev2">&gt;&gt; My command line now looks like :
</span><br>
<span class="quotelev2">&gt;&gt; a1&gt; mpirun -mca pls_rsh_orted /home/allan/openmpi/bin/orted -mca pml
</span><br>
<span class="quotelev2">&gt;&gt; teg -hostile aa -np 16 ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt; hostfile = aa, containing the addresses of the 16 machines.
</span><br>
<span class="quotelev2">&gt;&gt; I am using a GS116 16 port netgear Gigabit ethernet switch with Gnet
</span><br>
<span class="quotelev2">&gt;&gt; realtek gig ethernet cards
</span><br>
<span class="quotelev2">&gt;&gt; Why, PLEASE, do these switches pml teg make such a difference? It's
</span><br>
<span class="quotelev2">&gt;&gt; 2.6 times more performance in GFlops than what I was getting without
</span><br>
<span class="quotelev2">&gt;&gt; them.
</span><br>
<span class="quotelev2">&gt;&gt; I tried version rc3 and not an earlier version.
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your assistance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying to this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;pml teg&quot; switch tells Open MPI to use the 2nd generation TCP
</span><br>
<span class="quotelev1">&gt; implementation rather than the 3rd generation TCP.  More specifically,
</span><br>
<span class="quotelev1">&gt; the &quot;PML&quot; is the point-to-point management layer.  There are 2
</span><br>
<span class="quotelev1">&gt; different components for this -- teg (2nd generation) and ob1 (3rd
</span><br>
<span class="quotelev1">&gt; generation).  &quot;ob1&quot; is the default; specifying &quot;--mca pml teg&quot; tells
</span><br>
<span class="quotelev1">&gt; Open MPI to use the &quot;teg&quot; component instead of ob1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note, however, that teg and ob1 know nothing about TCP -- it's the 2nd
</span><br>
<span class="quotelev1">&gt; order implications that make the difference here.  teg and ob1 use
</span><br>
<span class="quotelev1">&gt; different back-end components to talk across networks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - teg uses PTL components (point-to-point transport layer -- 2nd gen)
</span><br>
<span class="quotelev1">&gt; - ob1 uses BTL components (byte transfer layer -- 3rd gen)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We obviously have TCP implementations for both the PTL and BTL.
</span><br>
<span class="quotelev1">&gt; Considerable time was spent optimizing the TCP PTL (i.e., 2nd gen).
</span><br>
<span class="quotelev1">&gt; Unfortunately, as yet, little time has been spent optimizing the TCP
</span><br>
<span class="quotelev1">&gt; BTL (i.e., 3rd gen) -- it was a simple port, nothing more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have spent the majority of our time, so far, optimizing the Myrinet
</span><br>
<span class="quotelev1">&gt; and Infiniband BTLs (therefore showing that excellent performance is
</span><br>
<span class="quotelev1">&gt; achievable in the BTLs).  However, I'm quite disappointed by the TCP
</span><br>
<span class="quotelev1">&gt; BTL performance -- it sounds like we have a protocol mismatch that is
</span><br>
<span class="quotelev1">&gt; arbitrarily slowing everything down, and something that needs to be
</span><br>
<span class="quotelev1">&gt; fixed before 1.0 (it's not a problem with the BTL design, since IB and
</span><br>
<span class="quotelev1">&gt; Myrinet performance is quite good -- just a problem/bug in the TCP
</span><br>
<span class="quotelev1">&gt; implementation of the BTL).  That much performance degradation is
</span><br>
<span class="quotelev1">&gt; clearly unacceptable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0275.php">Jeff Squyres: "Re: [O-MPI users] TCP problems"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0240.php">Jeff Squyres: "Re: [O-MPI users] HPL and OpenMpi RC3"</a>
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
