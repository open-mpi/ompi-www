<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 12:05:38 2008" -->
<!-- isoreceived="20080619160538" -->
<!-- sent="Thu, 19 Jun 2008 18:05:20 +0200" -->
<!-- isosent="20080619160520" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677" -->
<!-- id="5160C31B-CF5B-4DD0-9B31-D921558E8527_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200806191348.m5JDmQYT001709_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 12:05:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4178.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Reply:</strong> <a href="4178.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Reply:</strong> <a href="4191.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I don't necessarily agree with this statement. There is a generic  
<br>
method to do the correct wireup, and this method works independent of  
<br>
the selected routed algorithms.
<br>
<p>One can use the routed to ask for the next hop for each of the  
<br>
destinations, make a unique list out of these first hop destinations,  
<br>
and then finally generate the connections to them. Of course there is  
<br>
a cost associated with this method. Creating the temporary list will  
<br>
be a quite expensive, but this list will be smaller for highly  
<br>
optimized routed components. Eventually, a more optimized approach  
<br>
will be to use the get_routing_tree function in order to gather the  
<br>
direct routes, and then start the connections to these children. This  
<br>
approach is not more complex than the current implementation, and give  
<br>
us the benefit of having a consistent behavior in all cases.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 19, 2008, at 3:48 PM, rhc_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-06-19 09:48:26 EDT (Thu, 19 Jun 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 18677
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/18677">https://svn.open-mpi.org/trac/ompi/changeset/18677</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Shift responsibility for preconnecting the oob to the orte routed  
</span><br>
<span class="quotelev1">&gt; framework, which is the only place that knows what needs to be done.  
</span><br>
<span class="quotelev1">&gt; Only the direct module will actually do anything - it uses the same  
</span><br>
<span class="quotelev1">&gt; algo as the original preconnect function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/dpm/dpm.h                            |     7 +-
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/mpiruntime.h                     |     1
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_mpi_init.c                  |    29 ++++++ 
</span><br>
<span class="quotelev1">&gt; +------
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_mpi_preconnect.c            |    80  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c |    13 ++++-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c    |     5 +
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/binomial/routed_binomial.c    |    20 +++++++ 
</span><br>
<span class="quotelev1">&gt; ++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/direct/routed_direct.c        |    56 +++++++ 
</span><br>
<span class="quotelev1">&gt; ++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/linear/routed_linear.c        |     7 +++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/routed.h                      |    10 ++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/orted/orted_comm.c                       |     5 ++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/util/nidmap.c                            |    81 +++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++-------------
</span><br>
<span class="quotelev1">&gt;   12 files changed, 184 insertions(+), 130 deletions(-)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4174.php">Ralf Wildenhues: "Re: [OMPI devel] autogen error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4178.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Reply:</strong> <a href="4178.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<li><strong>Reply:</strong> <a href="4191.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
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
