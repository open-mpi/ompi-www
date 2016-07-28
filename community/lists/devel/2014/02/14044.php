<?
$subject_val = "Re: [OMPI devel] RFC: Add an OPAL rand and srand";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:41:09 2014" -->
<!-- isoreceived="20140207224109" -->
<!-- sent="Fri, 7 Feb 2014 22:40:29 +0000" -->
<!-- isosent="20140207224029" -->
<!-- name="Joshua Ladd" -->
<!-- email="joshual_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an OPAL rand and srand" -->
<!-- id="8EDEBDDE2C39D447A738659597BBB63A3EC6A5C8_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA17+_CHBmv_SD9zuAJDiF9XmTtEjg5tpXBdUaQxiYioRkg_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>joshual_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:40:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14045.php">Josh Hursey: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14046.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes. After batting this around a bit with Jeff and Mike, we came to the consensus that the interface should be more &quot;rand_r&quot;, so that state is locally managed by the consumer. The ALFG offers a powerful yet simple way to do it. We may even expose it to users since it offers a very scalable and high quality parallel RNG.
<br>
<p>Josh
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Hargrove
<br>
Sent: Friday, February 07, 2014 5:31 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: Add an OPAL rand and srand
<br>
<p>Joshua,
<br>
<p>This is for ticket #2928, right?
<br>
<p>-Paul
<br>
<p>On Fri, Feb 7, 2014 at 2:23 PM, Joshua Ladd &lt;joshual_at_[hidden]&lt;mailto:joshual_at_[hidden]&gt;&gt; wrote:
<br>
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
Cell: +1 (865) 258 - 8898&lt;tel:%2B1%20%28865%29%20258%20-%208898&gt;
<br>
<p><p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]&lt;mailto:PHHargrove_at_[hidden]&gt;
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14045.php">Josh Hursey: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14043.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14046.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
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
