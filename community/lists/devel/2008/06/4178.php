<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 14:04:25 2008" -->
<!-- isoreceived="20080619180425" -->
<!-- sent="Thu, 19 Jun 2008 12:04:13 -0600" -->
<!-- isosent="20080619180413" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677" -->
<!-- id="C47FFBBD.DEA1%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5160C31B-CF5B-4DD0-9B31-D921558E8527_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 14:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="4177.php">Pavel Shamis (Pasha): "[OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4175.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4191.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would argue that this behavior is in fact consistent - the returned state
<br>
is that all required connections have been opened and is independent of the
<br>
selected routed module. How that is done is irrelevant to the caller.
<br>
<p>Each routed module knows precisely what connections are used for its
<br>
operation. It is therefore trivial for it to internally do the right thing.
<br>
For example, in the binomial case, no communication is required whatsoever
<br>
for an MPI proc (only a daemon would ever warmup its connections to its
<br>
parent and/or children). In the direct module, the old wireup is required.
<br>
In a topo-aware module, we may want to do some other pattern.
<br>
<p>In all cases, the precise pattern to be used depends upon whether we are
<br>
warming up the connections of a daemon, the HNP, or an application process.
<br>
We will shortly be calling &quot;warmup_routes&quot; for all three cases, though for
<br>
now the actions taken may be &quot;null&quot; in some cases.
<br>
<p>So we might as well let each routed module do what it thinks is required. I
<br>
don't see much advantage in having something that digs the info out of the
<br>
module, and then attempts to reconstruct what the module already knew how to
<br>
do. What matters is that the end state is consistent - what happens under
<br>
the covers is solely determined by the selected routed module.
<br>
<p>Ralph
<br>
<p><p>On 6/19/08 10:05 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't necessarily agree with this statement. There is a generic
</span><br>
<span class="quotelev1">&gt; method to do the correct wireup, and this method works independent of
</span><br>
<span class="quotelev1">&gt; the selected routed algorithms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One can use the routed to ask for the next hop for each of the
</span><br>
<span class="quotelev1">&gt; destinations, make a unique list out of these first hop destinations,
</span><br>
<span class="quotelev1">&gt; and then finally generate the connections to them. Of course there is
</span><br>
<span class="quotelev1">&gt; a cost associated with this method. Creating the temporary list will
</span><br>
<span class="quotelev1">&gt; be a quite expensive, but this list will be smaller for highly
</span><br>
<span class="quotelev1">&gt; optimized routed components. Eventually, a more optimized approach
</span><br>
<span class="quotelev1">&gt; will be to use the get_routing_tree function in order to gather the
</span><br>
<span class="quotelev1">&gt; direct routes, and then start the connections to these children. This
</span><br>
<span class="quotelev1">&gt; approach is not more complex than the current implementation, and give
</span><br>
<span class="quotelev1">&gt; us the benefit of having a consistent behavior in all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2008, at 3:48 PM, rhc_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-06-19 09:48:26 EDT (Thu, 19 Jun 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 18677
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18677">https://svn.open-mpi.org/trac/ompi/changeset/18677</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Shift responsibility for preconnecting the oob to the orte routed
</span><br>
<span class="quotelev2">&gt;&gt; framework, which is the only place that knows what needs to be done.
</span><br>
<span class="quotelev2">&gt;&gt; Only the direct module will actually do anything - it uses the same
</span><br>
<span class="quotelev2">&gt;&gt; algo as the original preconnect function.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/dpm/dpm.h                            |     7 +-
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/runtime/mpiruntime.h                     |     1
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/runtime/ompi_mpi_init.c                  |    29 ++++++
</span><br>
<span class="quotelev2">&gt;&gt; +------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/runtime/ompi_mpi_preconnect.c            |    80
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c |    13 ++++-
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c    |     5 +
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/routed/binomial/routed_binomial.c    |    20 +++++++
</span><br>
<span class="quotelev2">&gt;&gt; ++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/routed/direct/routed_direct.c        |    56 +++++++
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/routed/linear/routed_linear.c        |     7 +++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/routed/routed.h                      |    10 ++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/orted/orted_comm.c                       |     5 ++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/util/nidmap.c                            |    81 +++++++
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++-------------
</span><br>
<span class="quotelev2">&gt;&gt;   12 files changed, 184 insertions(+), 130 deletions(-)
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
<li><strong>Next message:</strong> <a href="4179.php">Ralph H Castain: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>Previous message:</strong> <a href="4177.php">Pavel Shamis (Pasha): "[OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4175.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4191.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
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
