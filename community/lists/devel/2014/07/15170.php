<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 11:00:05 2014" -->
<!-- isoreceived="20140716150005" -->
<!-- sent="Wed, 16 Jul 2014 07:59:14 -0700" -->
<!-- isosent="20140716145914" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="AED6BA56-BB96-468D-8F95-628B96C8A24F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140716143611.GP1506_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 10:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15169.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15175.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I discussed this over IM with Nathan to try and get a better understanding of the options. Basically, we have two approaches available to us:
<br>
<p>1. my solution resolves the segv problem and eliminates leaks so long as the user calls MPI_Init/Finalize after calling the MPI_T init/finalize functions. This method will still leak memory if the user doesn't use MPI after calling the MPI_T functions, but does mean that all memory used by MPI will be released upon MPI_Finalize. So if the user program continues beyond MPI, they won't be carrying the MPI memory footprint with them. This continues our current behavior.
<br>
<p>2. the destructor method, which release the MPI memory footprint upon final program termination instead of at MPI_Finalize. This also solves the segv and leak problems, and ensures that someone calling only the MPI_T init/finalize functions will be valgrind-clean, but means that a user program that runs beyond MPI will carry the MPI memory footprint with them. This is a change in our current behavior.
<br>
<p>I'm not sure which approach is best, but I think this captures the heart of the decision.
<br>
<p><p>On Jul 16, 2014, at 7:36 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 08:26:44AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A number of issues have been raised as part of this discussion. Here is
</span><br>
<span class="quotelev2">&gt;&gt; what I have seen so far:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - contructor/destructor order not garaunteed: From an opal perspective
</span><br>
<span class="quotelev2">&gt;&gt;   this should not be a problem. Most components are unloaded by
</span><br>
<span class="quotelev2">&gt;&gt;   opal_finalize () not opal_finalize_util (). So opal components
</span><br>
<span class="quotelev2">&gt;&gt;   opal should already be finalized by the time the destructor is called
</span><br>
<span class="quotelev2">&gt;&gt;   (or we can finalize them in the destructor if necessary).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - portability: All the compilers most of us care about: gcc, intel,
</span><br>
<span class="quotelev2">&gt;&gt;   clang. The exceptions appear to be xlc and pgi. For these compilers
</span><br>
<span class="quotelev2">&gt;&gt;   we can fall back on Ralph's solution and just leak if
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize () is not called after MPI_T_Finalize (). Attached is an
</span><br>
<span class="quotelev2">&gt;&gt;   implementation that does that (needs some adjustment).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correction. xlc does support the destructor function attribute. The odd
</span><br>
<span class="quotelev1">&gt; one out is PGI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15168.php">http://www.open-mpi.org/community/lists/devel/2014/07/15168.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15169.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15168.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15175.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal"</a>
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
