<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 20:07:30 2007" -->
<!-- isoreceived="20070511000730" -->
<!-- sent="Thu, 10 May 2007 20:07:19 -0400" -->
<!-- isosent="20070511000719" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] newbie question" -->
<!-- id="D4A38D86-2A13-40E7-96BD-6406FDF1F826_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1178817953.1519.81.camel_at_stevo-desktop" -->
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
<strong>Date:</strong> 2007-05-10 20:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3239.php">Steve Wise: "Re: [OMPI users] newbie question"</a>
<li><strong>Previous message:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>In reply to:</strong> <a href="3236.php">Steve Wise: "[OMPI users] newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3239.php">Steve Wise: "Re: [OMPI users] newbie question"</a>
<li><strong>Reply:</strong> <a href="3239.php">Steve Wise: "Re: [OMPI users] newbie question"</a>
<li><strong>Reply:</strong> <a href="3273.php">Brian Barrett: "Re: [OMPI users] newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian --
<br>
<p>Didn't you add something to fix exactly this problem recently?  I  
<br>
have a dim recollection of seeing a commit go by about this...?
<br>
<p>(I advised Steve in IM to use --disable-ipv6 in the meantime)
<br>
<p><p>On May 10, 2007, at 1:25 PM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to run a job specifically over tcp and the eth1 interface.
</span><br>
<span class="quotelev1">&gt; It seems to be barfing on trying to listen via ipv6.  I don't want  
</span><br>
<span class="quotelev1">&gt; ipv6.
</span><br>
<span class="quotelev1">&gt; How can I disable it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my mpirun line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_vic12-10g ~]# mpirun --n 2 --host vic12,vic20 --mca btl  
</span><br>
<span class="quotelev1">&gt; self,tcp -mca btl_tcp_if_include eth1 /root/IMB_2.3/src/IMB-MPI1  
</span><br>
<span class="quotelev1">&gt; sendrecv
</span><br>
<span class="quotelev1">&gt; [vic12][0,1,0][btl_tcp_component.c: 
</span><br>
<span class="quotelev1">&gt; 489:mca_btl_tcp_component_create_listen] socket() failed: Address  
</span><br>
<span class="quotelev1">&gt; family not supported by protocol (97)
</span><br>
<span class="quotelev1">&gt; [vic12-10g:15771] mca_btl_tcp_component: IPv6 listening socket failed
</span><br>
<span class="quotelev1">&gt; [vic20][0,1,1][btl_tcp_component.c: 
</span><br>
<span class="quotelev1">&gt; 489:mca_btl_tcp_component_create_listen] socket() failed: Address  
</span><br>
<span class="quotelev1">&gt; family not supported by protocol (97)
</span><br>
<span class="quotelev1">&gt; [vic20-10g:23977] mca_btl_tcp_component: IPv6 listening socket failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3239.php">Steve Wise: "Re: [OMPI users] newbie question"</a>
<li><strong>Previous message:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>In reply to:</strong> <a href="3236.php">Steve Wise: "[OMPI users] newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3239.php">Steve Wise: "Re: [OMPI users] newbie question"</a>
<li><strong>Reply:</strong> <a href="3239.php">Steve Wise: "Re: [OMPI users] newbie question"</a>
<li><strong>Reply:</strong> <a href="3273.php">Brian Barrett: "Re: [OMPI users] newbie question"</a>
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
