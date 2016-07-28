<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 12 11:26:58 2011" -->
<!-- isoreceived="20111012152658" -->
<!-- sent="Wed, 12 Oct 2011 11:26:52 -0400" -->
<!-- isosent="20111012152652" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270" -->
<!-- id="CALwSR2W81VnAcJKJtu4OycPzDSwcyHNS9uRNE3sC0eT62vdsuw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201110112249.p9BMn2ML022390_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-12 11:26:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
<li><strong>Previous message:</strong> <a href="9819.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package (Revised)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9825.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>Reply:</strong> <a href="9825.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
If you wanted to speedup these routines for processors without __builtin_clz,
<br>
there are a variety of variations in C to implement clz efficiently.
<br>
See Hacker's Delight nlz (number of leading zeros):
<br>
<a href="http://www.hackersdelight.org/HDcode/nlz.c.txt">http://www.hackersdelight.org/HDcode/nlz.c.txt</a>
<br>
<p>Or from my Ph.D. advisor's magic algorithm's page:
<br>
<a href="http://aggregate.org/MAGIC/#Leading%20Zero%20Count">http://aggregate.org/MAGIC/#Leading%20Zero%20Count</a>
<br>
<p>And you can directly implement opal_next_poweroftwo()
<br>
with this:
<br>
<a href="http://aggregate.org/MAGIC/#Next%20Largest%20Power%20of%202">http://aggregate.org/MAGIC/#Next%20Largest%20Power%20of%202</a>
<br>
<p>The Hacker's Delight webpage (and book) are fun to read for that
<br>
certain kind of person. :-)
<br>
<a href="http://www.hackersdelight.org/">http://www.hackersdelight.org/</a>
<br>
<p>On Tue, Oct 11, 2011 at 6:49 PM,  &lt;rusraink_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2011-10-11 18:49:01 EDT (Tue, 11 Oct 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 25270
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25270">https://svn.open-mpi.org/trac/ompi/changeset/25270</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; &#160;- Check, whether the compiler supports __builtin_clz (count leading
</span><br>
<span class="quotelev1">&gt; &#160; zeroes);
</span><br>
<span class="quotelev1">&gt; &#160; if so, use it for bit-operations like opal_cube_dim and opal_hibit.
</span><br>
<span class="quotelev1">&gt; &#160; Implement two versions of power-of-two.
</span><br>
<span class="quotelev1">&gt; &#160; In case of opal_next_poweroftwo, this reduces the average execution
</span><br>
<span class="quotelev1">&gt; &#160; time from 83 cycles to 4 cycles (Intel Nehalem, icc, -O2, inlining,
</span><br>
<span class="quotelev1">&gt; &#160; measured rdtsc, with loop over 2^27 values).
</span><br>
<span class="quotelev1">&gt; &#160; Numbers for other functions are similar (but of course heavily depend
</span><br>
<span class="quotelev1">&gt; &#160; on the usage, e.g. opal_hibit() with a start of 4 does not save
</span><br>
<span class="quotelev1">&gt; &#160; much). &#160;The bsr instruction on AMD Opteron is also not as fast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;- Replace various places where the next power-of-two is computed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; Tested on Intel Nehalem Cluster with openib, compilers GNU-4.6.1 and
</span><br>
<span class="quotelev1">&gt; &#160; Intel-12.0.4 using mpi_testsuite -t &quot;Collective&quot; with 128 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt; &#160; trunk/test/util/opal_bit_ops.c
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/btl/openib/btl_openib_mca.c &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160;13 +---
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/btl/sm/btl_sm.h &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 5 -
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/btl/sm/btl_sm_component.c &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 9 +--
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/btl/wv/btl_wv_mca.c &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160;13 +---
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/coll/basic/coll_basic_reduce_scatter.c | &#160; &#160; 5 +
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/coll/tuned/coll_tuned_allgather.c &#160; &#160; &#160;| &#160; &#160; 3
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/coll/tuned/coll_tuned_allreduce.c &#160; &#160; &#160;| &#160; &#160; 4 +
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/coll/tuned/coll_tuned_barrier.c &#160; &#160; &#160; &#160;| &#160; &#160; 5 +
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c | &#160; &#160; 5 +
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/coll/tuned/coll_tuned_reduce_scatter.c | &#160; &#160; 5 +
</span><br>
<span class="quotelev1">&gt; &#160; trunk/ompi/mca/coll/tuned/coll_tuned_topo.c &#160; &#160; &#160; &#160; &#160; | &#160; &#160; 3
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/class/opal_hash_table.c &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160; 8 --
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/config/opal_setup_cc.m4 &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;| &#160; &#160;20 ++++++
</span><br>
<span class="quotelev1">&gt; &#160; trunk/opal/util/bit_ops.h &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | &#160; 106 +++++++++++++++++++++++++++++++++++----
</span><br>
<span class="quotelev1">&gt; &#160; trunk/test/util/Makefile.am &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; | &#160; &#160;14 ++++-
</span><br>
<span class="quotelev1">&gt; &#160; 15 files changed, 158 insertions(+), 60 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
[snip]
<br>
<p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
&#160;timattox_at_[hidden] || tmattox_at_[hidden]
&#160; &#160; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9821.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25248"</a>
<li><strong>Previous message:</strong> <a href="9819.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package (Revised)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9825.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
<li><strong>Reply:</strong> <a href="9825.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25270"</a>
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
