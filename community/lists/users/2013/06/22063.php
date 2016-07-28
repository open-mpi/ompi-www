<?
$subject_val = "Re: [OMPI users] OMPI Coll Framework and RDMA";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  7 14:11:35 2013" -->
<!-- isoreceived="20130607181135" -->
<!-- sent="Fri, 7 Jun 2013 11:11:07 -0700" -->
<!-- isosent="20130607181107" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Coll Framework and RDMA" -->
<!-- id="CAOf_+-Vbe5R9gp7Cvgmiavbxn3XgdCarAGcJLuoRSKY_rAd5=A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0E5139A-03FD-49F4-B208-02434E1D45B0_at_ornl.gov" -->
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
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-07 14:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22064.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>In reply to:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22064.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22064.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting.
<br>
<p>I would like to understand more on how QP implementation in OpenMPI, for
<br>
example, heuristics behind creating multiple QPs between two mpi processes.
<br>
<p>Is there any whitepaper / reference / manual that I can refer to for that?
<br>
Or can you point me to the source code  region for this?
<br>
<p>Thanks,
<br>
--Joba
<br>
<p><p>On Fri, Jun 7, 2013 at 8:09 AM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that mean, if there is a AllGatherV and assuming that every process
</span><br>
<span class="quotelev1">&gt; belongs to default comm, there will n-1 Queue Pair between the collecting
</span><br>
<span class="quotelev1">&gt; process and other processes ?
</span><br>
<span class="quotelev1">&gt; n = total number of MPI processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The answer depends on multiple parameters, like number of processes,
</span><br>
<span class="quotelev1">&gt; message size, etc. Some algorithms will require O(log(n)) connections other
</span><br>
<span class="quotelev1">&gt; O(n).
</span><br>
<span class="quotelev1">&gt; Also on OpenIB btl level per rank we create multiple QPs , not just one.
</span><br>
<span class="quotelev1">&gt; To make things even more complicated :-) there are multiple types of QPs,
</span><br>
<span class="quotelev1">&gt; like RC and XRC.
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
<span class="quotelev1">&gt; On Thu, Jun 6, 2013 at 3:37 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; shamisp_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Default implementation of collectives is based on PML (p2p layer) that is
</span><br>
<span class="quotelev1">&gt; implemented on top of BTL.
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
<span class="quotelev1">&gt; On Jun 6, 2013, at 1:59 PM, Jingcha Joba &lt;pukkimonkey_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; pukkimonkey_at_[hidden]&gt;&lt;mailto:pukkimonkey_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev1">&gt; pukkimonkey_at_[hidden]&gt;&gt;&gt; wrote:
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
<span class="quotelev1">&gt; I have an MPI application with gatherv and scatterv. I am wondering if I
</span><br>
<span class="quotelev1">&gt; can leverage RDMA capabilities of the underlying Infiniband fabric.
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:users_at_[hidden]&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22064.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>In reply to:</strong> <a href="22062.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22064.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Reply:</strong> <a href="22064.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
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
