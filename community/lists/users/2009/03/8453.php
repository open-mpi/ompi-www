<?
$subject_val = "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 14 18:08:52 2009" -->
<!-- isoreceived="20090314220852" -->
<!-- sent="Sat, 14 Mar 2009 18:08:43 -0400" -->
<!-- isosent="20090314220843" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)" -->
<!-- id="019816F5-4EAA-4115-95BD-165C39C66AF6_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B17819BB-4063-4285-93DB-ECADA78E9486_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-14 18:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8454.php">Terry Frankcombe: "Re: [OMPI users] core dump while running openmpi"</a>
<li><strong>Previous message:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>In reply to:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I set it based on the only available information we have in the init  
<br>
function. This way the variable is always initialized, and the upper  
<br>
layer (whatever it is) has the responsibility to set it to something  
<br>
useful.
<br>
<p>Looking at the code it seems that the upper layer in question is the  
<br>
mpool sm component who has this information. r20780 fixes this problem.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 14, 2009, at 09:23 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any particular reason you fixed it this way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 10, 2009, at 1:40 PM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 2009-03-10 at 09:23 -0800, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;Hi!
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;Valgrind seems to think that there is an use of uninitialized  
</span><br>
<span class="quotelev2">&gt;&gt; value in
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;mca_mpool_sm_alloc, i.e. the if(mpool_sm-&gt;mem_node &gt;= 0) {
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;Backtracking that i found that mem_node is not set during  
</span><br>
<span class="quotelev2">&gt;&gt; initializing
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;in mca_mpool_sm_init.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;The resources parameter is never used and the mpool_module- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;mem_node is
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;never initalized.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;Bug or not?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Apparently George fixed this in the trunk in r19257
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c">https://svn.open-mpi.org/source/history/ompi-trunk/ompi/mca/mpool/sm/mpool_sm_module.c</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; .  So, the resources parameter is never used, but you call
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mca_mpool_sm_module_init(), which has the decency to set mem_node  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -1.  Not a helpful value, but a legal one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So why not set it in the calling function which have access to the
</span><br>
<span class="quotelev2">&gt;&gt; precomputed resources value?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev2">&gt;&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90  
</span><br>
<span class="quotelev2">&gt;&gt; 7866126
</span><br>
<span class="quotelev2">&gt;&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8454.php">Terry Frankcombe: "Re: [OMPI users] core dump while running openmpi"</a>
<li><strong>Previous message:</strong> <a href="8452.php">George Bosilca: "Re: [OMPI users] freeing attributes on communicators"</a>
<li><strong>In reply to:</strong> <a href="8449.php">Jeff Squyres: "Re: [OMPI users] valgrind complaint in openmpi1.3	(mca_mpool_sm_alloc)"</a>
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
