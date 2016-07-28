<?
$subject_val = "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 12:18:03 2014" -->
<!-- isoreceived="20140328161803" -->
<!-- sent="Fri, 28 Mar 2014 12:18:00 -0400" -->
<!-- isosent="20140328161800" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;#181;&amp;#170;&amp;#206;`: &amp;#181;&amp;#170;&amp;#206;`: doubt on latency result with OpenMPI library" -->
<!-- id="53CFE433-D8D5-490A-A8EE-87A6DBA6C131_at_ornl.gov" -->
<!-- charset="big5" -->
<!-- inreplyto="CB7D0112-A583-4FC8-A2FD-7B2F71901480_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 12:18:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>In reply to:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Mar 27, 2014, at 11:45 PM, &quot;Wang,Yanfei(SYS)&quot; &lt;wangyanfei01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. In the RoCE, we cannot use OOB(via tcp socket) for RDMA connection.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, RoCE QPs can only be made using the RDMA connection manager.
</span><br>

<br>
Technically you may setup RoCE connection without RDMA CM. 
<br>

<br>
The version of the RoCE support that I implemented (in an alternative MPI implementation) did it through the regular OOB
<br>
channel. As I remember the only difference is the fact that you have to exchange mac instead of guid plus some other small tricks. The problem
<br>
of this approach is in the VLAN support, which is more challenging to implement this way. Therefore RDMACM is sort of &quot;preferred&quot; method.
<br>

<br>
-Pasha
<br>

<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, as I known, mellanox HCA supporting RoCE can make rdma and tcp/ip work simultaneously. whether some other HCAs can only work on RoCE and normal Ethernet individually,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI: Mellanox is the only RoCE vendor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so that OMPI cannot user OOB(like tcp socket) to build rdma connection except RDMA_CM?   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're mixing two different things: having the ability to run an OS IP stack over a RoCE-capable NIC is orthogonal to whether you can use some out-of-band method to make RoCE RC QPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you're misunderstanding what OMPI's &quot;oob&quot; QP connection mechanism did.  Here's what it did:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. MPI processes A and B (on different servers) would create half a QP
</span><br>
<span class="quotelev1">&gt; 2. they would then extract the QP connection information from the half-created QP data structures (e.g., the unique QP number) -- A would extra Aa and B would extra Bb
</span><br>
<span class="quotelev1">&gt; 3. A and B would exchange this information
</span><br>
<span class="quotelev1">&gt; 4. A would use Bb to finish creating its QP, and B would use Aa to finish creating its QP.  This is a LOCAL operation -- it's effectively just filling in some data structures.
</span><br>
<span class="quotelev1">&gt; 5. Now A and B have fully formed QPs and can use them to send/receive to each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fact that #3 used TCP sockets to exchange information is irrelevant -- you could very well have printed out that information on a screen and hand-typed the information in at the peer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only important aspect is that the information had to be exchanged.  It doesn't matter whether you use TCP sockets or the actual RDMA CM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Also keep in mind that OMPI's &quot;oob&quot; connection method for IB RC QPs in the openib BTL has been deleted, and has been wholly replaced with the &quot;udcm&quot; connection method (which uses UD QPs for #3, which act very much like UDP datagrams).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For IB, this method of &quot;exchange critical connection information via an out-of-band method&quot; works fine.  For RoCE, it's not possible -- there's additional, kernel-level (and possibly hardware-level? I don't know/remember offhand) information that cannot be extracted by userspace and exchanged via an out-of-band method.  Hence, you HAVE to use the RDMA CM to make RoCE QPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me make this totally clear: the fact that you have to use the RCMA CM to make RoCE RC QPs is not an OMPI choice.  It's mandated by how the RoCE technology works.  IB technology allows the &quot;workaround&quot; of extracting the necessary connection information such that we can use our &quot;udcm&quot; and not RDMA CM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think, If OOB(like tcp) can run simultaneously with ROCE, the rdma connection management would benefit from tcp socket's scalabitly , right?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Scalability of RDMA_CM.  
</span><br>
<span class="quotelev2">&gt;&gt; Previously I also have few doubts on RDMA_CM ' scalability,  when I go deep insight into source code of RDMA_CM library and corresponding kernel module, eg, the shared single QP1 for connection requestion and response, which could introduce severe lock contention if huge rdma connections exist and remote NUMA memory access at multi-core platform; also lots of shared session management data structures which could cause additional contention; 
</span><br>
<span class="quotelev2">&gt;&gt; However, if the connection are not frequently destroyed and rebuilt, does the scalability still have highly dependency on RDMA_CM?   
</span><br>
<span class="quotelev2">&gt;&gt; To get further aware of UDCM, I would like to have a deep understanding on rdma_CM's disadvantage.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You'll have to ask Mellanox / the OpenFabrics community for insights about the RDMA CM.  To OMPI, that's the lower layer and we're just a consumer of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind that the CM is only used during QP connection establishment -- it's not used after that.  So if it's a little less efficient, it usually doesn't matter (if it's a LOT less efficient, then it does matter, of course).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14418.php">http://www.open-mpi.org/community/lists/devel/2014/03/14418.php</a>
</span><br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14420.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>In reply to:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14422.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
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
