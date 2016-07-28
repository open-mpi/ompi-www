<?
$subject_val = "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 13:40:20 2009" -->
<!-- isoreceived="20090310174020" -->
<!-- sent="Tue, 10 Mar 2009 18:40:13 +0100" -->
<!-- isosent="20090310174013" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)" -->
<!-- id="1236706813.5288.145.camel_at_skalman.hpc2n.umu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="49B6A1F7.5020606_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 13:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8383.php">Yu Chen: "[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand"</a>
<li><strong>Previous message:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-03-10 at 09:23 -0800, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; &#195;&#133;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Valgrind seems to think that there is an use of uninitialized value in
</span><br>
<span class="quotelev2">&gt; &gt;mca_mpool_sm_alloc, i.e. the if(mpool_sm-&gt;mem_node &gt;= 0) {
</span><br>
<span class="quotelev2">&gt; &gt;Backtracking that i found that mem_node is not set during initializing
</span><br>
<span class="quotelev2">&gt; &gt;in mca_mpool_sm_init.
</span><br>
<span class="quotelev2">&gt; &gt;The resources parameter is never used and the mpool_module-&gt;mem_node is
</span><br>
<span class="quotelev2">&gt; &gt;never initalized.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Bug or not?
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Apparently George fixed this in the trunk in r19257
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c">https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c</a> 
</span><br>
<span class="quotelev1">&gt; .  So, the resources parameter is never used, but you call 
</span><br>
<span class="quotelev1">&gt; mca_mpool_sm_module_init(), which has the decency to set mem_node to 
</span><br>
<span class="quotelev1">&gt; -1.  Not a helpful value, but a legal one.
</span><br>
<p>So why not set it in the calling function which have access to the
<br>
precomputed resources value?
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8383.php">Yu Chen: "[OMPI users] pcart_coords_f.c:74: error: lvalue required as decrement operand"</a>
<li><strong>Previous message:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>In reply to:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
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
