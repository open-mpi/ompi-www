<?
$subject_val = "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 09:23:19 2009" -->
<!-- isoreceived="20090314132319" -->
<!-- sent="Sat, 14 Mar 2009 09:23:12 -0400" -->
<!-- isosent="20090314132312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)" -->
<!-- id="B17819BB-4063-4285-93DB-ECADA78E9486_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1236706813.5288.145.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 09:23:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Previous message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>In reply to:</strong> <a href="8382.php">&#197;ke Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Any particular reason you fixed it this way?
<br>
<p><p>On Mar 10, 2009, at 1:40 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2009-03-10 at 09:23 -0800, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Hi!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Valgrind seems to think that there is an use of uninitialized  
</span><br>
<span class="quotelev1">&gt; value in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;mca_mpool_sm_alloc, i.e. the if(mpool_sm-&gt;mem_node &gt;= 0) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Backtracking that i found that mem_node is not set during  
</span><br>
<span class="quotelev1">&gt; initializing
</span><br>
<span class="quotelev3">&gt; &gt; &gt;in mca_mpool_sm_init.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;The resources parameter is never used and the mpool_module- 
</span><br>
<span class="quotelev2">&gt; &gt;mem_node is
</span><br>
<span class="quotelev3">&gt; &gt; &gt;never initalized.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;Bug or not?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Apparently George fixed this in the trunk in r19257
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c">https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c</a>
</span><br>
<span class="quotelev2">&gt; &gt; .  So, the resources parameter is never used, but you call
</span><br>
<span class="quotelev2">&gt; &gt; mca_mpool_sm_module_init(), which has the decency to set mem_node to
</span><br>
<span class="quotelev2">&gt; &gt; -1.  Not a helpful value, but a legal one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So why not set it in the calling function which have access to the
</span><br>
<span class="quotelev1">&gt; precomputed resources value?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
<li><strong>Next message:</strong> <a href="8450.php">ben rodriguez: "Re: [OMPI users] Compiling ompi for use on another machine"</a>
<li><strong>Previous message:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>In reply to:</strong> <a href="8382.php">&#197;ke Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8453.php">George Bosilca: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
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
