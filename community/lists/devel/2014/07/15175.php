<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 12:40:50 2014" -->
<!-- isoreceived="20140716164050" -->
<!-- sent="Wed, 16 Jul 2014 10:40:50 -0600" -->
<!-- isosent="20140716164050" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal" -->
<!-- id="008c01cfa114$b42c8c70$1c85a550$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AED6BA56-BB96-468D-8F95-628B96C8A24F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function	to opal<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 12:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15176.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15170.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15183.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What about providing garbage collection for both POSIX and MPI threads? This
<br>
problem hints at several underlying layers of &quot;programming faults&quot;.
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, July 16, 2014 8:59 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function
<br>
to opal
<br>
<p>I discussed this over IM with Nathan to try and get a better understanding
<br>
of the options. Basically, we have two approaches available to us:
<br>
<p>1. my solution resolves the segv problem and eliminates leaks so long as the
<br>
user calls MPI_Init/Finalize after calling the MPI_T init/finalize
<br>
functions. This method will still leak memory if the user doesn't use MPI
<br>
after calling the MPI_T functions, but does mean that all memory used by MPI
<br>
will be released upon MPI_Finalize. So if the user program continues beyond
<br>
MPI, they won't be carrying the MPI memory footprint with them. This
<br>
continues our current behavior.
<br>
<p>2. the destructor method, which release the MPI memory footprint upon final
<br>
program termination instead of at MPI_Finalize. This also solves the segv
<br>
and leak problems, and ensures that someone calling only the MPI_T
<br>
init/finalize functions will be valgrind-clean, but means that a user
<br>
program that runs beyond MPI will carry the MPI memory footprint with them.
<br>
This is a change in our current behavior.
<br>
<p>I'm not sure which approach is best, but I think this captures the heart of
<br>
the decision.
<br>
<p><p>On Jul 16, 2014, at 7:36 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 08:26:44AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A number of issues have been raised as part of this discussion. Here 
</span><br>
<span class="quotelev2">&gt;&gt; is what I have seen so far:
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
<span class="quotelev1">&gt; Correction. xlc does support the destructor function attribute. The 
</span><br>
<span class="quotelev1">&gt; odd one out is PGI.
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
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15168.php">http://www.open-mpi.org/community/lists/devel/2014/07/15168.php</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15170.php">http://www.open-mpi.org/community/lists/devel/2014/07/15170.php</a>
<br>
<p><p>-----
<br>
No virus found in this message.
<br>
Checked by AVG - www.avg.com
<br>
Version: 2014.0.4716 / Virus Database: 3986/7863 - Release Date: 07/16/14
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15176.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk:	opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15174.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15170.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15183.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
