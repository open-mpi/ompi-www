<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 20 07:18:22 2008" -->
<!-- isoreceived="20080620111822" -->
<!-- sent="Fri, 20 Jun 2008 07:18:12 -0400" -->
<!-- isosent="20080620111812" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677" -->
<!-- id="A81B0F85-6102-4944-BD79-A94C24B1E687_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-20 07:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4192.php">Jeff Squyres: "[OMPI devel] How to return a run-time error to the PML?"</a>
<li><strong>Previous message:</strong> <a href="4190.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4175.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess I had thought that this new model fit nicely within  
<br>
abstraction barriers -- ask the component to &quot;do whatever you need to  
<br>
do to warmup your routes&quot;.  The knowledge how to do that is already  
<br>
down in that component; is there really a reason/need to export it  
<br>
higher?
<br>
<p><p><p>On Jun 19, 2008, at 12:05 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't necessarily agree with this statement. There is a generic  
</span><br>
<span class="quotelev1">&gt; method to do the correct wireup, and this method works independent  
</span><br>
<span class="quotelev1">&gt; of the selected routed algorithms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One can use the routed to ask for the next hop for each of the  
</span><br>
<span class="quotelev1">&gt; destinations, make a unique list out of these first hop  
</span><br>
<span class="quotelev1">&gt; destinations, and then finally generate the connections to them. Of  
</span><br>
<span class="quotelev1">&gt; course there is a cost associated with this method. Creating the  
</span><br>
<span class="quotelev1">&gt; temporary list will be a quite expensive, but this list will be  
</span><br>
<span class="quotelev1">&gt; smaller for highly optimized routed components. Eventually, a more  
</span><br>
<span class="quotelev1">&gt; optimized approach will be to use the get_routing_tree function in  
</span><br>
<span class="quotelev1">&gt; order to gather the direct routes, and then start the connections to  
</span><br>
<span class="quotelev1">&gt; these children. This approach is not more complex than the current  
</span><br>
<span class="quotelev1">&gt; implementation, and give us the benefit of having a consistent  
</span><br>
<span class="quotelev1">&gt; behavior in all cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
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
<span class="quotelev2">&gt;&gt; framework, which is the only place that knows what needs to be  
</span><br>
<span class="quotelev2">&gt;&gt; done. Only the direct module will actually do anything - it uses  
</span><br>
<span class="quotelev2">&gt;&gt; the same algo as the original preconnect function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/dpm/dpm.h                            |     7 +-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/mpiruntime.h                     |     1
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_init.c                  |    29 ++++++ 
</span><br>
<span class="quotelev2">&gt;&gt; +------
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_preconnect.c            |    80  
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/grpcomm/basic/grpcomm_basic_module.c |    13 ++++-
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/odls/base/odls_base_default_fns.c    |     5 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/binomial/routed_binomial.c    |    20 +++++++ 
</span><br>
<span class="quotelev2">&gt;&gt; ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/direct/routed_direct.c        |    56 +++++++ 
</span><br>
<span class="quotelev2">&gt;&gt; ++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/linear/routed_linear.c        |     7 +++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/mca/routed/routed.h                      |    10 ++++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/orted/orted_comm.c                       |     5 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/util/nidmap.c                            |    81 +++++++ 
</span><br>
<span class="quotelev2">&gt;&gt; +++++++++++++++++++-------------
</span><br>
<span class="quotelev2">&gt;&gt;  12 files changed, 184 insertions(+), 130 deletions(-)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4192.php">Jeff Squyres: "[OMPI devel] How to return a run-time error to the PML?"</a>
<li><strong>Previous message:</strong> <a href="4190.php">Jeff Squyres: "Re: [OMPI devel] Is trunk broken ?"</a>
<li><strong>In reply to:</strong> <a href="4175.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18677"</a>
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
