<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 11:29:23 2014" -->
<!-- isoreceived="20140716152923" -->
<!-- sent="Wed, 16 Jul 2014 15:29:21 +0000" -->
<!-- isosent="20140716152921" -->
<!-- name="Pritchard, Howard r" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05AB3AC2_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140716150742.GQ1506_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Pritchard, Howard r (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 11:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Folks,
<br>
<p>I vote for solution #1.  Doesn't change current behavior.  Doesn't open the door to becoming dependent on availability of
<br>
ctor/dtor feature in future toolchains.
<br>
<p>Howard
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Wednesday, July 16, 2014 9:08 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal
<br>
<p>On Wed, Jul 16, 2014 at 07:59:14AM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I discussed this over IM with Nathan to try and get a better understanding of the options. Basically, we have two approaches available to us:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. my solution resolves the segv problem and eliminates leaks so long as the user calls MPI_Init/Finalize after calling the MPI_T init/finalize functions. This method will still leak memory if the user doesn't use MPI after calling the MPI_T functions, but does mean that all memory used by MPI will be released upon MPI_Finalize. So if the user program continues beyond MPI, they won't be carrying the MPI memory footprint with them. This continues our current behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. the destructor method, which release the MPI memory footprint upon final program termination instead of at MPI_Finalize. This also solves the segv and leak problems, and ensures that someone calling only the MPI_T init/finalize functions will be valgrind-clean, but means that a user program that runs beyond MPI will carry the MPI memory footprint with them. This is a change in our current behavior.
</span><br>
<p>Correct. Though the only thing we will carry around until termination is the memory associated with opal/mca/if, opal/mca/event, opal_net, opal_malloc, opal_show_help, opal_output, opal_dss, opal_datatype, and opal_class. Not sure how much memory this is.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15173.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15171.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
