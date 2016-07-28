<?
$subject_val = "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 07:18:20 2014" -->
<!-- isoreceived="20140328111820" -->
<!-- sent="Fri, 28 Mar 2014 11:18:18 +0000" -->
<!-- isosent="20140328111818" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;:  &amp;#180;&amp;#240;&amp;#184;&amp;#180;: &amp;#180;&amp;#240;&amp;#184;&amp;#180;: doubt on latency result with OpenMPI library" -->
<!-- id="CB7D0112-A583-4FC8-A2FD-7B2F71901480_at_cisco.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="90EBD3F3C2BD0E44804EEB54DD5003A455233A06_at_TC-MAIL-MB02.internal.baidu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 07:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14419.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>In reply to:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14427.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 27, 2014, at 11:45 PM, &quot;Wang,Yanfei(SYS)&quot; &lt;wangyanfei01_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; 1. In the RoCE, we cannot use OOB(via tcp socket) for RDMA connection.  
</span><br>

<br>
More specifically, RoCE QPs can only be made using the RDMA connection manager.
<br>

<br>
<span class="quotelev1">&gt; However, as I known, mellanox HCA supporting RoCE can make rdma and tcp/ip work simultaneously. whether some other HCAs can only work on RoCE and normal Ethernet individually,
</span><br>

<br>
FYI: Mellanox is the only RoCE vendor.
<br>

<br>
<span class="quotelev1">&gt; so that OMPI cannot user OOB(like tcp socket) to build rdma connection except RDMA_CM?   
</span><br>

<br>
You're mixing two different things: having the ability to run an OS IP stack over a RoCE-capable NIC is orthogonal to whether you can use some out-of-band method to make RoCE RC QPs.
<br>

<br>
I think you're misunderstanding what OMPI's &quot;oob&quot; QP connection mechanism did.  Here's what it did:
<br>

<br>
1. MPI processes A and B (on different servers) would create half a QP
<br>
2. they would then extract the QP connection information from the half-created QP data structures (e.g., the unique QP number) -- A would extra Aa and B would extra Bb
<br>
3. A and B would exchange this information
<br>
4. A would use Bb to finish creating its QP, and B would use Aa to finish creating its QP.  This is a LOCAL operation -- it's effectively just filling in some data structures.
<br>
5. Now A and B have fully formed QPs and can use them to send/receive to each other.
<br>

<br>
The fact that #3 used TCP sockets to exchange information is irrelevant -- you could very well have printed out that information on a screen and hand-typed the information in at the peer.
<br>

<br>
The only important aspect is that the information had to be exchanged.  It doesn't matter whether you use TCP sockets or the actual RDMA CM.
<br>

<br>
*** Also keep in mind that OMPI's &quot;oob&quot; connection method for IB RC QPs in the openib BTL has been deleted, and has been wholly replaced with the &quot;udcm&quot; connection method (which uses UD QPs for #3, which act very much like UDP datagrams).
<br>

<br>
For IB, this method of &quot;exchange critical connection information via an out-of-band method&quot; works fine.  For RoCE, it's not possible -- there's additional, kernel-level (and possibly hardware-level? I don't know/remember offhand) information that cannot be extracted by userspace and exchanged via an out-of-band method.  Hence, you HAVE to use the RDMA CM to make RoCE QPs.
<br>

<br>
Let me make this totally clear: the fact that you have to use the RCMA CM to make RoCE RC QPs is not an OMPI choice.  It's mandated by how the RoCE technology works.  IB technology allows the &quot;workaround&quot; of extracting the necessary connection information such that we can use our &quot;udcm&quot; and not RDMA CM.
<br>

<br>
<span class="quotelev1">&gt; I think, If OOB(like tcp) can run simultaneously with ROCE, the rdma connection management would benefit from tcp socket's scalabitly , right?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Scalability of RDMA_CM.  
</span><br>
<span class="quotelev1">&gt; Previously I also have few doubts on RDMA_CM ' scalability,  when I go deep insight into source code of RDMA_CM library and corresponding kernel module, eg, the shared single QP1 for connection requestion and response, which could introduce severe lock contention if huge rdma connections exist and remote NUMA memory access at multi-core platform; also lots of shared session management data structures which could cause additional contention; 
</span><br>
<span class="quotelev1">&gt; However, if the connection are not frequently destroyed and rebuilt, does the scalability still have highly dependency on RDMA_CM?   
</span><br>
<span class="quotelev1">&gt; To get further aware of UDCM, I would like to have a deep understanding on rdma_CM's disadvantage.  
</span><br>

<br>
You'll have to ask Mellanox / the OpenFabrics community for insights about the RDMA CM.  To OMPI, that's the lower layer and we're just a consumer of it.
<br>

<br>
Keep in mind that the CM is only used during QP connection establishment -- it's not used after that.  So if it's a little less efficient, it usually doesn't matter (if it's a LOT less efficient, then it does matter, of course).
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14419.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] system call failed during shared memory	initialization	with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14417.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared memory initialization	with openmpi-1.8a1r31254"</a>
<li><strong>In reply to:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14427.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
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
