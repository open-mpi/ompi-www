<?
$subject_val = "Re: [OMPI devel] RTE Framework";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 11:24:43 2013" -->
<!-- isoreceived="20130124162443" -->
<!-- sent="Thu, 24 Jan 2013 16:17:52 +0000" -->
<!-- isosent="20130124161752" -->
<!-- name="Richard Graham" -->
<!-- email="richardg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Framework" -->
<!-- id="3D8F945A4E59E644AE9205E5CD3708E5188263D8_at_MTIDAG01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F7CF48F3-A622-41CA-AF6F-0AEB06A719DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Framework<br>
<strong>From:</strong> Richard Graham (<em>richardg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 11:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11982.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11980.php">Richard Graham: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11982.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11982.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was trying to figure out what the new interface provides.  Is it supposed to provide the ability to replace entire run-time functionality, does it increase the modularity or the rte, or something else.
<br>
<p>Thanks,
<br>
Rich
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, January 23, 2013 5:05 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RTE Framework
<br>
<p>I'm not entirely sure what you're asking here. There is no state at all in the MPI layer - just a set of function calls. Each component in the ompi/mca/rte framework is required to map those function calls to their own implementation. The function calls themselves are just a rename of the current ORTE calls, so the implementations must provide the same functionality - they are simply free to do so however they choose.
<br>
<p><p>On Jan 22, 2013, at 11:31 PM, Richard Graham &lt;richardg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;  First - thanks.  I am very happy this is proceeding.
</span><br>
<span class="quotelev1">&gt;  General question here - do you have any idea how much global state sits behind the current implementation ?  What I am trying to gauge at what level of granularity one can bring in additional capabilities.
</span><br>
<span class="quotelev1">&gt;  I have not looked in detail yet, but will in the near future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Barrett, Brian W
</span><br>
<span class="quotelev1">&gt; Sent: Monday, January 21, 2013 9:31 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] RFC: RTE Framework
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As discussed at the December developer's meeting, a number of us have been working on a framework in OMPI to encompass the RTE resources (typically provided by ORTE).  This follows on work Oak Ridge did on the ORCA layer, which ended up having a number of technical challenges and was dropped for a simpler approach.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The interface is still a work in process and designed around the concept that the ORTE component is a thin renaming around ORTE itself (this was one of the points the ORTE developers felt strongly about).  We think it's ready for comments and coming into the trunk, so are trying to get it looked at by a broader community.  The Mercurial repository is available
</span><br>
<span class="quotelev1">&gt; at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://bitbucket.org/rhc/ompi-trunk">https://bitbucket.org/rhc/ompi-trunk</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This work is focussed only on the creation of a framework to encompass the RTE interface between OMPI and ORTE.  There are currently two components:
</span><br>
<span class="quotelev1">&gt; the ORTE component and a test component implemented over PMI.  The PMI component is only really useful if ORTE is disabled at autogen time with the --no-orte option to autogen.  Future work to build against an external OMPI (in progress, on a different branch) will make using non-orte components slightly more useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, if there aren't any major comments, I'll plan on bringing this work to the trunk this weekend (Jan 26/27).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11982.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Previous message:</strong> <a href="11980.php">Richard Graham: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11982.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11982.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
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
