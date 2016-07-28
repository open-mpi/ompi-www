<?
$subject_val = "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 23:46:01 2014" -->
<!-- isoreceived="20140328034601" -->
<!-- sent="Fri, 28 Mar 2014 03:45:41 +0000" -->
<!-- isosent="20140328034541" -->
<!-- name="Wang,Yanfei(SYS)" -->
<!-- email="wangyanfei01_at_[hidden]" -->
<!-- subject="[OMPI devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;:  &amp;#180;&amp;#240;&amp;#184;&amp;#180;: &amp;#180;&amp;#240;&amp;#184;&amp;#180;: doubt on latency result with OpenMPI library" -->
<!-- id="90EBD3F3C2BD0E44804EEB54DD5003A455233A06_at_TC-MAIL-MB02.internal.baidu.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="00343138-51A4-4F9C-A9DC-DD02EBC817D3_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Wang,Yanfei(SYS) (<em>wangyanfei01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 23:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14415.php">tmishima_at_[hidden]: "[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14413.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>In reply to:</strong> <a href="14409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi&#163;&#172;  
<br>

<br>
1. In the RoCE, we cannot use OOB(via tcp socket) for RDMA connection.  
<br>
However, as I known, mellanox HCA supporting RoCE can make rdma and tcp/ip work simultaneously. whether some other HCAs can only work on RoCE and normal Ethernet individually, so that OMPI cannot user OOB(like tcp socket) to build rdma connection except RDMA_CM?   
<br>

<br>
I think, If OOB(like tcp) can run simultaneously with ROCE, the rdma connection management would benefit from tcp socket's scalabitly , right?  
<br>

<br>
2. Scalability of RDMA_CM.  
<br>
Previously I also have few doubts on RDMA_CM ' scalability,  when I go deep insight into source code of RDMA_CM library and corresponding kernel module, eg, the shared single QP1 for connection requestion and response, which could introduce severe lock contention if huge rdma connections exist and remote NUMA memory access at multi-core platform; also lots of shared session management data structures which could cause additional contention; 
<br>
However, if the connection are not frequently destroyed and rebuilt, does the scalability still have highly dependency on RDMA_CM?   
<br>
To get further aware of UDCM, I would like to have a deep understanding on rdma_CM's disadvantage.  
<br>

<br>
This thread has a lot of help on OMPI and RDMA transport setting for me, thanks!  
<br>

<br>
Thanks 
<br>
yanfei
<br>

<br>
-----&#211;&#202;&#188;&#254;&#212;&#173;&#188;&#254;-----
<br>
&#183;&#162;&#188;&#254;&#200;&#203;: devel [mailto:devel-bounces_at_[hidden]] &#180;&#250;&#177;&#237; Jeff Squyres (jsquyres)
<br>
&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;: 2014&#196;&#234;3&#212;&#194;28&#200;&#213; 0:58
<br>
&#202;&#213;&#188;&#254;&#200;&#203;: Open MPI Developers
<br>
&#214;&#247;&#204;&#226;: Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library
<br>

<br>
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
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14409.php">http://www.open-mpi.org/community/lists/devel/2014/03/14409.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14415.php">tmishima_at_[hidden]: "[OMPI devel] system call failed during shared memory initialization with openmpi-1.8a1r31254"</a>
<li><strong>Previous message:</strong> <a href="14413.php">tmishima_at_[hidden]: "Re: [OMPI devel] cleanup of rr_byobj"</a>
<li><strong>In reply to:</strong> <a href="14409.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Reply:</strong> <a href="14418.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
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
