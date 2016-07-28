<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 09:19:34 2005" -->
<!-- isoreceived="20050812141934" -->
<!-- sent="Fri, 12 Aug 2005 08:19:30 -0600" -->
<!-- isosent="20050812141930" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  couple of problems in openib mpool." -->
<!-- id="aa72eeb54c6545df7864ddde55c035af_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050811142714.GV16361_at_minantech.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-12 09:19:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0133.php">Galen Shipman: "build warnings.."</a>
<li><strong>Previous message:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0130.php">Gleb Natapov: "couple of problems in openib mpool."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Gleb,
<br>
<p>Sorry for the delay.. we have been doing a bit of reworking of the 
<br>
pml/btl so that the btl's can be shared outside of just the pml 
<br>
(collectives, etc).
<br>
<p>I have added the bug fix (old_reg). Will look at the assumption of 
<br>
non-null registration next.
<br>
<p>Thanks (and keep them coming ;-) ,
<br>
<p>Galen
<br>
<p>On Aug 11, 2005, at 8:27 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  There are couple of bugs/typos in openib mpool. First one is fixed
</span><br>
<span class="quotelev1">&gt; by included patch. Second one is in function mca_mpool_openib_free().
</span><br>
<span class="quotelev1">&gt; This function assumes that registration is never NULL, but there are
</span><br>
<span class="quotelev1">&gt; callers that think different (ompi/class/ompi_fifo.h,
</span><br>
<span class="quotelev1">&gt; ompi/class/ompi_circular_buffer_fifo.h)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/mpool/openib/mpool_openib_module.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/mpool/openib/mpool_openib_module.c	(revision 6806)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/mpool/openib/mpool_openib_module.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -127,7 +127,7 @@
</span><br>
<span class="quotelev1">&gt;      mca_mpool_base_registration_t* old_reg  = *registration;
</span><br>
<span class="quotelev1">&gt;      void* new_mem = mpool-&gt;mpool_alloc(mpool, size, 0, registration);
</span><br>
<span class="quotelev1">&gt;      memcpy(new_mem, addr, old_reg-&gt;bound - old_reg-&gt;base);
</span><br>
<span class="quotelev1">&gt; -    mpool-&gt;mpool_free(mpool, addr, &amp;old_reg);
</span><br>
<span class="quotelev1">&gt; +    mpool-&gt;mpool_free(mpool, addr, old_reg);
</span><br>
<span class="quotelev1">&gt;      return new_mem;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  }
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0133.php">Galen Shipman: "build warnings.."</a>
<li><strong>Previous message:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0130.php">Gleb Natapov: "couple of problems in openib mpool."</a>
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
