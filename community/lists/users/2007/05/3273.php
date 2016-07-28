<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 17:46:47 2007" -->
<!-- isoreceived="20070514214647" -->
<!-- sent="Mon, 14 May 2007 15:46:16 -0600" -->
<!-- isosent="20070514214616" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] newbie question" -->
<!-- id="E9E6D20E-1637-478E-A201-39CC08F81B91_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D4A38D86-2A13-40E7-96BD-6406FDF1F826_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 17:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3274.php">Brian Barrett: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>In reply to:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I fixed the OOB.  I also mucked some things up with it interface wise  
<br>
that I need to undo :).  Anyway, I'll have a look at fixing up the  
<br>
TCP component in the next day or two.
<br>
<p>Brian
<br>
<p>On May 10, 2007, at 6:07 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Brian --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Didn't you add something to fix exactly this problem recently?  I
</span><br>
<span class="quotelev1">&gt; have a dim recollection of seeing a commit go by about this...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I advised Steve in IM to use --disable-ipv6 in the meantime)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 10, 2007, at 1:25 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run a job specifically over tcp and the eth1 interface.
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be barfing on trying to listen via ipv6.  I don't want
</span><br>
<span class="quotelev2">&gt;&gt; ipv6.
</span><br>
<span class="quotelev2">&gt;&gt; How can I disable it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's my mpirun line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_vic12-10g ~]# mpirun --n 2 --host vic12,vic20 --mca btl
</span><br>
<span class="quotelev2">&gt;&gt; self,tcp -mca btl_tcp_if_include eth1 /root/IMB_2.3/src/IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt; sendrecv
</span><br>
<span class="quotelev2">&gt;&gt; [vic12][0,1,0][btl_tcp_component.c:
</span><br>
<span class="quotelev2">&gt;&gt; 489:mca_btl_tcp_component_create_listen] socket() failed: Address
</span><br>
<span class="quotelev2">&gt;&gt; family not supported by protocol (97)
</span><br>
<span class="quotelev2">&gt;&gt; [vic12-10g:15771] mca_btl_tcp_component: IPv6 listening socket failed
</span><br>
<span class="quotelev2">&gt;&gt; [vic20][0,1,1][btl_tcp_component.c:
</span><br>
<span class="quotelev2">&gt;&gt; 489:mca_btl_tcp_component_create_listen] socket() failed: Address
</span><br>
<span class="quotelev2">&gt;&gt; family not supported by protocol (97)
</span><br>
<span class="quotelev2">&gt;&gt; [vic20-10g:23977] mca_btl_tcp_component: IPv6 listening socket failed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3274.php">Brian Barrett: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3272.php">Nym: "Re: [OMPI users] MPI_TYPE_STRUCT Not"</a>
<li><strong>In reply to:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
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
