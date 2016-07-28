<?
$subject_val = "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 13:23:37 2009" -->
<!-- isoreceived="20090310172337" -->
<!-- sent="Tue, 10 Mar 2009 09:23:03 -0800" -->
<!-- isosent="20090310172303" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)" -->
<!-- id="49B6A1F7.5020606_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1236672762.5288.107.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 13:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8382.php">흆e Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Previous message:</strong> <a href="8380.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8375.php">&#197;ke Sandgren: "[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8382.php">흆e Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8382.php">흆e Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt;Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Valgrind seems to think that there is an use of uninitialized value in
</span><br>
<span class="quotelev1">&gt;mca_mpool_sm_alloc, i.e. the if(mpool_sm-&gt;mem_node &gt;= 0) {
</span><br>
<span class="quotelev1">&gt;Backtracking that i found that mem_node is not set during initializing
</span><br>
<span class="quotelev1">&gt;in mca_mpool_sm_init.
</span><br>
<span class="quotelev1">&gt;The resources parameter is never used and the mpool_module-&gt;mem_node is
</span><br>
<span class="quotelev1">&gt;never initalized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Bug or not?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Apparently George fixed this in the trunk in r19257
<br>
<a href="https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c">https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c</a> 
<br>
.  So, the resources parameter is never used, but you call 
<br>
mca_mpool_sm_module_init(), which has the decency to set mem_node to 
<br>
-1.  Not a helpful value, but a legal one.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8382.php">흆e Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Previous message:</strong> <a href="8380.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8375.php">&#197;ke Sandgren: "[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8382.php">흆e Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8382.php">흆e Sandgren: "Re: [OMPI users] valgrind complaint in openmpi 1.3	(mca_mpool_sm_alloc)"</a>
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
