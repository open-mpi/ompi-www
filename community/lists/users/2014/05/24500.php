<?
$subject_val = "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 18:52:01 2014" -->
<!-- isoreceived="20140527225201" -->
<!-- sent="Tue, 27 May 2014 16:52:00 -0600" -->
<!-- isosent="20140527225200" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs" -->
<!-- id="20140527225200.GG48634_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="53851283.1030200_at_oca.eu" -->
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
<strong>Subject:</strong> Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 18:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24501.php">Lorenzo Donà: "[OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="24499.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>In reply to:</strong> <a href="24498.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 28, 2014 at 12:32:35AM +0200, Alain Miniussi wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, the debug library works like a charm (which make the
</span><br>
<span class="quotelev1">&gt; uninitialized variable issue more likely).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still, the stack trace point to mca_btl_openib_add_procs in
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib.c and there is only one division in that
</span><br>
<span class="quotelev1">&gt; function (although not floating point) at the end:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     openib_btl-&gt;local_procs += local_procs;
</span><br>
<span class="quotelev1">&gt;     openib_btl-&gt;device-&gt;mem_reg_max = calculate_max_reg () /
</span><br>
<span class="quotelev1">&gt; openib_btl-&gt;local_procs;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now, I'm not sure how much I would trust the local_procs initialization:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for (i = 0, local_procs = 0 ; i &lt; (int) nprocs; i++) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that a compiler could (wrongly) decide to pass the init of
</span><br>
<span class="quotelev1">&gt; local_proc if procs = 0 or in  a few other corner cases.
</span><br>
<p>If that is the case the compiler has a bug. From C99 &#194;&#167;  6.8.5:
<br>
<p>&quot;
<br>
6.8.5.3 The for statement
<br>
1 The statement
<br>
for ( clause-1 ; expression-2 ; expression-3 ) statement
<br>
behaves as follows: The expression expression-2 is the controlling expression that is
<br>
evaluated before each execution of the loop body. The expression expression-3 is
<br>
evaluated as a void expression after each execution of the loop body. If clause-1 is a
<br>
declaration, the scope of any variables it declares is the remainder of the declaration and
<br>
the entire loop, including the other two expressions; it is reached in the order of execution
<br>
before the &#239;&#172;&#129;rst evaluation of the controlling expression. If clause-1 is an expression, it is
<br>
evaluated as a void expression before the &#239;&#172;&#129;rst evaluation of the controlling expression.134)
<br>
2 Both clause-1 and expression-3 can be omitted. An omitted expression-2 is replaced by a
<br>
nonzero constant.
<br>
<p><p>If clause-1 is an expression, it is evaluated as a void expression
<br>
before the &#239;&#172;&#129;rst evaluation of the controlling expression.
<br>
&quot;
<br>
<p>That final bit says that clause-1 will always get evaluated.
<br>
<p><span class="quotelev1">&gt; Anyway, applying the attache patch on btl_openlib.c seems to fix the issue
</span><br>
<span class="quotelev1">&gt; on my small case (but I have no exhaustive test suite to run).
</span><br>
<p>Not sure what is going on here. Is local_procs = 0 when
<br>
openib_btl-&gt;device-&gt;mem_reg_max is calculated? Not sure how that can
<br>
happen but if it is possible the correct fix is to check for
<br>
openib_btl-&gt;local_procs to be zero.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24500/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24501.php">Lorenzo Donà: "[OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="24499.php">Ralph Castain: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<li><strong>In reply to:</strong> <a href="24498.php">Alain Miniussi: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24482.php">Gustavo Correa: "Re: [OMPI users] divide-by-zero in mca_btl_openib_add_procs"</a>
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
