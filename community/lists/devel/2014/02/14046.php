<?
$subject_val = "Re: [OMPI devel] RFC: Add an OPAL rand and srand";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:48:43 2014" -->
<!-- isoreceived="20140207224843" -->
<!-- sent="Fri, 7 Feb 2014 15:48:42 -0700" -->
<!-- isosent="20140207224842" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an OPAL rand and srand" -->
<!-- id="20140207224842.GH97640_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A3EC6A591_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an OPAL rand and srand<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14045.php">Josh Hursey: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.
<br>
<p>On Fri, Feb 07, 2014 at 10:23:41PM +0000, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt;    What: Add an internal random number generator to OPAL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Why: OMPI uses rand and srand all over the place. Because the middleware
</span><br>
<span class="quotelev1">&gt;    is mucking with the RNG's global state, applications that use these
</span><br>
<span class="quotelev1">&gt;    library routines will not achieve reproducible results with the same seed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    How: I plan to put in an additive lagged Fibonacci generator seeded with a
</span><br>
<span class="quotelev1">&gt;    Tausworthe generator that itself is seeded by the user's seed. The short
</span><br>
<span class="quotelev1">&gt;    story here is that the ALFG has a toroidal state space, i.e. it can be
</span><br>
<span class="quotelev1">&gt;    decomposed into non-overlapping cycles with maximal period. It's well
</span><br>
<span class="quotelev1">&gt;    understood how to fully enumerate these cycles when, for a length k
</span><br>
<span class="quotelev1">&gt;    register composed of m-bit words, we view this as a k X m binary matrix.
</span><br>
<span class="quotelev1">&gt;    It was proven by Marsaglia et al. that this matrix has a canonical form
</span><br>
<span class="quotelev1">&gt;    that is uniquely determined by the values k and l (the two numbers that
</span><br>
<span class="quotelev1">&gt;    (almost) completely characterize an ALFG.) So, distinct seeds are
</span><br>
<span class="quotelev1">&gt;    guaranteed to map to distinct, non-overlapping, long period streams that
</span><br>
<span class="quotelev1">&gt;    have measurably very, very low inter- and intra-stream correlations.  We
</span><br>
<span class="quotelev1">&gt;    used this for large scale Monte Carlo simulations back in my PhD days.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Will define a new type:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    struct opal_rng_buffer_t {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    uint32_t  buff[127]; /* if people are going to pitch a fit over the size,
</span><br>
<span class="quotelev1">&gt;    we can go smaller, down to 7, but, obviously, this affects the quality of
</span><br>
<span class="quotelev1">&gt;    the streams */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int tap1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int tap2;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    and two functions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* User is responsible for defining his/her own opal_rng_buffer_t
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      * or malloc-ing and managing the resources themselves.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int opal_srand(opal_rng_buffer_t *buff, uint32_t seed);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Returns a 32-bit pseudo random integer */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    uint32_t opal_rand(opal_rng_buffer_t *buff);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    When: Should be in by the end of February.  Code is written, but
</span><br>
<span class="quotelev1">&gt;    integration and testing always takes some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Joshua S. Ladd, PhD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    HPC Algorithms Engineer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Cell: +1 (865) 258 - 8898
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14046/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14045.php">Josh Hursey: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
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
