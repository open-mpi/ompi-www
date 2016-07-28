<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  5 12:23:57 2005" -->
<!-- isoreceived="20051205172357" -->
<!-- sent="Mon, 5 Dec 2005 10:23:14 -0700 (MST)" -->
<!-- isosent="20051205172314" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  [PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="Pine.LNX.4.62.0512051018450.9570_at_oberon.cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051205162241.GB19290_at_minantech.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-05 12:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0585.php">Jeff Squyres: "Re:  [OMPI svn-full] svn:open-mpi r8379 - trunk/ompi/mca/btl/self"</a>
<li><strong>Previous message:</strong> <a href="0583.php">Gleb Natapov: "[PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0583.php">Gleb Natapov: "[PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 5 Dec 2005, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; This is because there is no &quot;mpool_base&quot; mca (see patch).
</span><br>
This looks good, will apply. 
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also there is a code commented out that enables memory hooks if
</span><br>
<span class="quotelev1">&gt; leave_pinned is set. Why this code is disabled? Infiniband will
</span><br>
<span class="quotelev1">&gt; not work correctly in such setup.
</span><br>
There is still some debate about what will be the default behavior with 
<br>
the leave_pinned option but we should have something in the trunk soon.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/mpool/base/mpool_base_open.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/mpool/base/mpool_base_open.c	(revision 8378)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/mpool/base/mpool_base_open.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -77,7 +77,7 @@
</span><br>
<span class="quotelev1">&gt;      * check for use_mem_hooks (for diagnostics/testing)
</span><br>
<span class="quotelev1">&gt;      * however if leave_pinned is set we force this to be enabled
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    mca_base_param_reg_int_name(&quot;mpool_base&quot;,
</span><br>
<span class="quotelev1">&gt; +    mca_base_param_reg_int_name(&quot;mpool&quot;,
</span><br>
<span class="quotelev1">&gt;                               &quot;use_mem_hooks&quot;,
</span><br>
<span class="quotelev1">&gt;                               &quot;use memory hooks for deregistering freed memory&quot;,
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0585.php">Jeff Squyres: "Re:  [OMPI svn-full] svn:open-mpi r8379 - trunk/ompi/mca/btl/self"</a>
<li><strong>Previous message:</strong> <a href="0583.php">Gleb Natapov: "[PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="0583.php">Gleb Natapov: "[PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0588.php">Gleb Natapov: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
