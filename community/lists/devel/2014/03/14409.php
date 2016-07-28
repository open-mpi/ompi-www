<?
$subject_val = "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 12:57:54 2014" -->
<!-- isoreceived="20140327165754" -->
<!-- sent="Thu, 27 Mar 2014 16:57:40 +0000" -->
<!-- isosent="20140327165740" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;: &amp;#180;&amp;#240;&amp;#184;&amp;#180;: doubt on latency result with OpenMPI library" -->
<!-- id="00343138-51A4-4F9C-A9DC-DD02EBC817D3_at_cisco.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="C381729D-4CDA-40A0-8C57-1D6CA9121BFB_at_baidu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 12:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14410.php">Lisandro Dalcin: "[OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Previous message:</strong> <a href="14408.php">Wang,Yanfei(SYS): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14408.php">Wang,Yanfei(SYS): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14423.php">Joshua Ladd: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 27, 2014, at 11:15 AM, &quot;Wang,Yanfei(SYS)&quot; &lt;wangyanfei01_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Normally we use rdma-cm to build rdma connection ,then create Qpairs to do rdma data transmit ion, so what is the consideration for separating rdma-cm connection built and data transmit ion at design stage? 
</span><br>

<br>
There's some history here...
<br>

<br>
Waaaay back in the day, the only way to make RC verbs connections over IB was to send QP numbers (and other info) out-of-band to a peer (e.g., via TCP sockets).  OMPI implemented this method in the openib BTL.
<br>

<br>
This had some scalability issues, though, so we eventually started experimenting with some other mechanisms for making RC QPs.  For example, we tried using the IB connection manager for a while (IBCM), but that ultimately got dropped.
<br>

<br>
The RDMA Connection Manager was always an option (RDMA CM), but we never bothered to implement it in OMPI until other technologies came along that *required* the use of the RDMA CM, namely: iWARP and RoCE.  Meaning: you *can't* make RC QPs over iWARP and RoCE over the OOB method, nor can you use the IB CM -- you *have* to use the RDMA CM.
<br>

<br>
RDMA CM has its own limitations, though.  So for IB RC QPs -- where you don't *have* to use the RDMA CM -- we recently implemented the UDCM, which basically does the same thing as the initial OOB method, but in a more scalable and efficient fashion (I'm leaving out the details; let me know if you want to hear them).
<br>

<br>
So at different times, we've had different numbers of mechanisms in OMPI for making these connections.  In the v1.7/v1.8 tree, I believe that the only 2 left are the RDMA CM and the UDCM.
<br>

<br>
I also believe that for iWARP and RoCE, the RDMA CM will be chosen automatically, and UD CM will be automatically chosen for IB.
<br>

<br>
So after all that: I think you shouldn't need to specify the connection manager MCA parameter at all; the openib BTL should choose the Right one for you.
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
<li><strong>Next message:</strong> <a href="14410.php">Lisandro Dalcin: "[OMPI devel] Missing MPI 3 definitions"</a>
<li><strong>Previous message:</strong> <a href="14408.php">Wang,Yanfei(SYS): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14408.php">Wang,Yanfei(SYS): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14414.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14423.php">Joshua Ladd: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
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
