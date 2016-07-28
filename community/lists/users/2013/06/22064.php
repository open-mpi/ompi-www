<?
$subject_val = "Re: [OMPI users] OMPI Coll Framework and RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  7 18:53:57 2013" -->
<!-- isoreceived="20130607225357" -->
<!-- sent="Fri, 7 Jun 2013 22:53:52 +0000" -->
<!-- isosent="20130607225352" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Coll Framework and RDMA" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F66E37D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-Vbe5R9gp7Cvgmiavbxn3XgdCarAGcJLuoRSKY_rAd5=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI Coll Framework and RDMA<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-07 18:53:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22065.php">Gary Lu: "[OMPI users] Ompi-BLCR"</a>
<li><strong>Previous message:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>In reply to:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/">http://www.open-mpi.org/papers/euro-pvmmpi-2007-ib/</a>
<br>
<p>On Jun 7, 2013, at 11:11 AM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Interesting.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I would like to understand more on how QP implementation in OpenMPI, for example, heuristics behind creating multiple QPs between two mpi processes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there any whitepaper / reference / manual that I can refer to for that?
</span><br>
<span class="quotelev1">&gt; Or can you point me to the source code  region for this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --Joba
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 7, 2013 at 8:09 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that mean, if there is a AllGatherV and assuming that every process belongs to default comm, there will n-1 Queue Pair between the collecting process and other processes ?
</span><br>
<span class="quotelev1">&gt; n = total number of MPI processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The answer depends on multiple parameters, like number of processes, message size, etc. Some algorithms will require O(log(n)) connections other O(n).
</span><br>
<span class="quotelev1">&gt; Also on OpenIB btl level per rank we create multiple QPs , not just one. To make things even more complicated :-) there are multiple types of QPs, like RC and XRC.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joba
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 6, 2013 at 3:37 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:shamisp_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Default implementation of collectives is based on PML (p2p layer) that is implemented on top of BTL.
</span><br>
<span class="quotelev1">&gt; Consequently it laverages RDMA capabilities to some extend.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Computer Science Research Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2013, at 1:59 PM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&lt;mailto:pukkimonkey_at_[hidden]&gt;&lt;mailto:pukkimonkey_at_[hidden]&lt;mailto:pukkimonkey_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a quick question.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there an openib (in btl framework) equivalent in coll framework?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an MPI application with gatherv and scatterv. I am wondering if I can leverage RDMA capabilities of the underlying Infiniband fabric.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joba
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22065.php">Gary Lu: "[OMPI users] Ompi-BLCR"</a>
<li><strong>Previous message:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>In reply to:</strong> <a href="22063.php">Jingcha Joba: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
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
