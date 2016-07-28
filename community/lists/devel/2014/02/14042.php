<?
$subject_val = "[OMPI devel] RFC: Add an OPAL rand and srand";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:23:45 2014" -->
<!-- isoreceived="20140207222345" -->
<!-- sent="Fri, 7 Feb 2014 22:23:41 +0000" -->
<!-- isosent="20140207222341" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Add an OPAL rand and srand" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3EC6A591_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Add an OPAL rand and srand<br>
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14041.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14046.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add an internal random number generator to OPAL.
<br>
<p>Why: OMPI uses rand and srand all over the place. Because the middleware is mucking with the RNG's global state, applications that use these library routines will not achieve reproducible results with the same seed.
<br>
<p>How: I plan to put in an additive lagged Fibonacci generator seeded with a Tausworthe generator that itself is seeded by the user's seed. The short story here is that the ALFG has a toroidal state space, i.e. it can be decomposed into non-overlapping cycles with maximal period. It's well understood how to fully enumerate these cycles when, for a length k register composed of m-bit words, we view this as a k X m binary matrix. It was proven by Marsaglia et al. that this matrix has a canonical form that is uniquely determined by the values k and l (the two numbers that (almost) completely characterize an ALFG.) So, distinct seeds are guaranteed to map to distinct, non-overlapping, long period streams that have measurably very, very low inter- and intra-stream correlations.  We used this for large scale Monte Carlo simulations back in my PhD days.
<br>
<p>Will define a new type:
<br>
<p>struct opal_rng_buffer_t {
<br>
<p>uint32_t  buff[127]; /* if people are going to pitch a fit over the size, we can go smaller, down to 7, but, obviously, this affects the quality of the streams */
<br>
int tap1;
<br>
int tap2;
<br>
<p>};
<br>
<p>and two functions:
<br>
<p>/* User is responsible for defining his/her own opal_rng_buffer_t
<br>
&nbsp;&nbsp;* or malloc-ing and managing the resources themselves.
<br>
&nbsp;*/
<br>
int opal_srand(opal_rng_buffer_t *buff, uint32_t seed);
<br>
<p>/* Returns a 32-bit pseudo random integer */
<br>
uint32_t opal_rand(opal_rng_buffer_t *buff);
<br>
<p><p>When: Should be in by the end of February.  Code is written, but integration and testing always takes some time.
<br>
<p><p><p>Joshua S. Ladd, PhD
<br>
HPC Algorithms Engineer
<br>
Mellanox Technologies
<br>
<p>Email: joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;
<br>
Cell: +1 (865) 258 - 8898
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Previous message:</strong> <a href="14041.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14046.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>Reply:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
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
