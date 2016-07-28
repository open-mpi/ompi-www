<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 14:12:14 2005" -->
<!-- isoreceived="20050808191214" -->
<!-- sent="Mon, 8 Aug 2005 13:12:10 -0600" -->
<!-- isosent="20050808191210" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  [PATCH] wrong variable type in OpenIB." -->
<!-- id="496308daf70bc00e5b1f3ad18b33eed2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050807103228.GA16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-08 14:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Gleb Natapov: "[PATCH] wrong variable type in OpenIB."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb,
<br>
<p>Changes are in the trunk thanks,
<br>
<p>Galen
<br>
<p>On Aug 7, 2005, at 4:32 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; Hello Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Included patch changes type of returned value from ibv_poll_cq.
</span><br>
<span class="quotelev1">&gt; It should be signed because we check if it is less then zero later
</span><br>
<span class="quotelev1">&gt; in the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/btl/openib/btl_openib_component.c	(revision 6757)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -492,8 +492,8 @@ mca_btl_base_module_t** mca_btl_openib_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int mca_btl_openib_component_progress()
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    uint32_t i, ne;
</span><br>
<span class="quotelev1">&gt; -    int count = 0;
</span><br>
<span class="quotelev1">&gt; +    uint32_t i;
</span><br>
<span class="quotelev1">&gt; +    int count = 0, ne;
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_frag_t* frag;
</span><br>
<span class="quotelev1">&gt;      mca_btl_openib_endpoint_t* endpoint;
</span><br>
<span class="quotelev1">&gt;      /* Poll for completions */
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
<li><strong>In reply to:</strong> <a href="0082.php">Gleb Natapov: "[PATCH] wrong variable type in OpenIB."</a>
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
