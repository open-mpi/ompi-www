<?
$subject_val = "[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 04:12:50 2009" -->
<!-- isoreceived="20090310081250" -->
<!-- sent="Tue, 10 Mar 2009 09:12:42 +0100" -->
<!-- isosent="20090310081242" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)" -->
<!-- id="1236672762.5288.107.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 04:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Valgrind seems to think that there is an use of uninitialized value in
<br>
mca_mpool_sm_alloc, i.e. the if(mpool_sm-&gt;mem_node &gt;= 0) {
<br>
Backtracking that i found that mem_node is not set during initializing
<br>
in mca_mpool_sm_init.
<br>
The resources parameter is never used and the mpool_module-&gt;mem_node is
<br>
never initalized.
<br>
<p>Bug or not?
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
<li><strong>Next message:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>Reply:</strong> <a href="8381.php">Eugene Loh: "Re: [OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
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
