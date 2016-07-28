<?
$subject_val = "Re: [OMPI users] infiniband question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 09:40:28 2009" -->
<!-- isoreceived="20090917134028" -->
<!-- sent="Thu, 17 Sep 2009 09:40:23 -0400" -->
<!-- isosent="20090917134023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] infiniband question" -->
<!-- id="319530FF-0C38-4C32-822B-07C3EE1EBE05_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AB236E6.3090609_at_polytech.univ-mrs.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] infiniband question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 09:40:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10668.php">Yann JOBIC: "[OMPI users] infiniband question"</a>
<li><strong>In reply to:</strong> <a href="10668.php">Yann JOBIC: "[OMPI users] infiniband question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct, you don't need DAPL.  Can you send all the information listed  
<br>
here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Sep 17, 2009, at 9:17 AM, Yann JOBIC wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to infiniband.
</span><br>
<span class="quotelev1">&gt; I installed the rdma_cm, rdma_ucm and ib_uverbs kernel modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i'm running a ring test openmpi code, i've got :
</span><br>
<span class="quotelev1">&gt; [Lidia][0,1,1][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 992:mca_btl_openib_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Set MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [Lidia][0,1,1][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 992:mca_btl_openib_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Set MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [Lilou][0,1,0][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 992:mca_btl_openib_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Set MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt; [Lilou][0,1,0][btl_openib_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 992:mca_btl_openib_endpoint_qp_init_query]
</span><br>
<span class="quotelev1">&gt; Set MTU to IBV value 4 (2048 bytes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then, the program hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought i only need rdma communications, and don't need the DALP lib
</span><br>
<span class="quotelev1">&gt; (with the iboip module).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ___________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann JOBIC
</span><br>
<span class="quotelev1">&gt; HPC engineer
</span><br>
<span class="quotelev1">&gt; Polytech Marseille DME
</span><br>
<span class="quotelev1">&gt; IUSTI-CNRS UMR 6595
</span><br>
<span class="quotelev1">&gt; Technop&#244;le de Ch&#226;teau Gombert
</span><br>
<span class="quotelev1">&gt; 5 rue Enrico Fermi
</span><br>
<span class="quotelev1">&gt; 13453 Marseille cedex 13
</span><br>
<span class="quotelev1">&gt; Tel : (33) 4 91 10 69 39
</span><br>
<span class="quotelev1">&gt;   ou  (33) 4 91 10 69 43
</span><br>
<span class="quotelev1">&gt; Fax : (33) 4 91 10 69 69
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10670.php">Jeff Squyres: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10668.php">Yann JOBIC: "[OMPI users] infiniband question"</a>
<li><strong>In reply to:</strong> <a href="10668.php">Yann JOBIC: "[OMPI users] infiniband question"</a>
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
