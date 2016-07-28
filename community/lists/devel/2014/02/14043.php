<?
$subject_val = "Re: [OMPI devel] RFC: Add an OPAL rand and srand";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:30:30 2014" -->
<!-- isoreceived="20140207223030" -->
<!-- sent="Fri, 7 Feb 2014 14:30:06 -0800" -->
<!-- isosent="20140207223006" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an OPAL rand and srand" -->
<!-- id="CAAvDA17+_CHBmv_SD9zuAJDiF9XmTtEjg5tpXBdUaQxiYioRkg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joshua,
<br>
<p>This is for ticket #2928, right?
<br>
<p>-Paul
<br>
<p><p>On Fri, Feb 7, 2014 at 2:23 PM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  What: Add an internal random number generator to OPAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: OMPI uses rand and srand all over the place. Because the middleware
</span><br>
<span class="quotelev1">&gt; is mucking with the RNG's global state, applications that use these library
</span><br>
<span class="quotelev1">&gt; routines will not achieve reproducible results with the same seed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How: I plan to put in an additive lagged Fibonacci generator seeded with a
</span><br>
<span class="quotelev1">&gt; Tausworthe generator that itself is seeded by the user's seed. The short
</span><br>
<span class="quotelev1">&gt; story here is that the ALFG has a toroidal state space, i.e. it can be
</span><br>
<span class="quotelev1">&gt; decomposed into non-overlapping cycles with maximal period. It's well
</span><br>
<span class="quotelev1">&gt; understood how to fully enumerate these cycles when, for a length k
</span><br>
<span class="quotelev1">&gt; register composed of m-bit words, we view this as a k X m binary matrix. It
</span><br>
<span class="quotelev1">&gt; was proven by Marsaglia et al. that this matrix has a canonical form that
</span><br>
<span class="quotelev1">&gt; is uniquely determined by the values k and l (the two numbers that (almost)
</span><br>
<span class="quotelev1">&gt; completely characterize an ALFG.) So, distinct seeds are guaranteed to map
</span><br>
<span class="quotelev1">&gt; to distinct, non-overlapping, long period streams that have measurably
</span><br>
<span class="quotelev1">&gt; very, very low inter- and intra-stream correlations.  We used this for
</span><br>
<span class="quotelev1">&gt; large scale Monte Carlo simulations back in my PhD days.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will define a new type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct opal_rng_buffer_t {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uint32_t  buff[127]; /* if people are going to pitch a fit over the size,
</span><br>
<span class="quotelev1">&gt; we can go smaller, down to 7, but, obviously, this affects the quality of
</span><br>
<span class="quotelev1">&gt; the streams */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int tap1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int tap2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and two functions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* User is responsible for defining his/her own opal_rng_buffer_t
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * or malloc-ing and managing the resources themselves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int opal_srand(opal_rng_buffer_t *buff, uint32_t seed);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Returns a 32-bit pseudo random integer */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; uint32_t opal_rand(opal_rng_buffer_t *buff);
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
<span class="quotelev1">&gt; When: Should be in by the end of February.  Code is written, but
</span><br>
<span class="quotelev1">&gt; integration and testing always takes some time.
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
<span class="quotelev1">&gt; Joshua S. Ladd, PhD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC Algorithms Engineer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Email: joshual_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cell: +1 (865) 258 - 8898
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14042.php">Joshua Ladd: "[OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14044.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
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
