<?
$subject_val = "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 08:41:09 2012" -->
<!-- isoreceived="20120622124109" -->
<!-- sent="Fri, 22 Jun 2012 08:41:05 -0400" -->
<!-- isosent="20120622124105" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project" -->
<!-- id="CAANzjE=W8GoufV93Gg8_Sg2zsr9sRh2htxdk+HvzQp8NfkekFA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjE=q4usYGcr6DwY6S3v3WB0beq0uJPpEP94_QuVe5NGDWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 08:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11151.php">TERRY DONTJE: "[OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11149.php">Ralph Castain: "[OMPI devel] OPAL dss release function"</a>
<li><strong>In reply to:</strong> <a href="11109.php">Josh Hursey: "[OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Reply:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The pineapple branch is ready for testing. It was last sync'ed to the
<br>
trunk at r26620. I'll try to update that later today, and keep current
<br>
with the trunk moving forward.
<br>
<p>I created a wiki page to discuss some of the build options, for those
<br>
interested. At the bottom of the page are some remaining todo items
<br>
that I will probably need some help resolving.
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/Runtime_Interposition">https://svn.open-mpi.org/trac/ompi/wiki/Runtime_Interposition</a>
<br>
<p>The branch is at:
<br>
&nbsp;&nbsp;<a href="https://bitbucket.org/jjhursey/ompi-pineapple">https://bitbucket.org/jjhursey/ompi-pineapple</a>
<br>
<p>I would like to bring this into the trunk the evening after the
<br>
teleconf on Tuesday, June 26, 2012. So if you have cycles to test this
<br>
branch I would appreciate it.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Fri, Jun 15, 2012 at 2:55 PM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; What: A Runtime Interposition Project - Codename Pineapple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: Define clear API and semantics for runtime requirements of the OMPI layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When:
</span><br>
<span class="quotelev1">&gt; &#160;- F June 22, 2012 - Work completed
</span><br>
<span class="quotelev1">&gt; &#160;- T June 26, 2012 - Discuss on teleconf
</span><br>
<span class="quotelev1">&gt; &#160;- R June 28, 2012 - Commit to trunk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where: Trunk (development BitBucket branch below)
</span><br>
<span class="quotelev1">&gt; &#160;<a href="https://bitbucket.org/jjhursey/ompi-pineapple">https://bitbucket.org/jjhursey/ompi-pineapple</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached:
</span><br>
<span class="quotelev1">&gt; &#160;PDF of slides presented on the June 12, 2012 teleconf. Note that the
</span><br>
<span class="quotelev1">&gt; timeline was slightly adjusted above (work completed date moved
</span><br>
<span class="quotelev1">&gt; ealier).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Description: Short Version
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; Define, in an 'rte.h', the interfaces and semantics that the OMPI
</span><br>
<span class="quotelev1">&gt; layer requires of a runtime environment. Currently this interface
</span><br>
<span class="quotelev1">&gt; matches the subset of ORTE functionality that is used by the OMPI
</span><br>
<span class="quotelev1">&gt; layer. Runtime symbols (e.g., orte_ess.proc_get_locality) are isolated
</span><br>
<span class="quotelev1">&gt; to a framework inside this project to provide linker-level protection
</span><br>
<span class="quotelev1">&gt; against accidental breakage of the pineapple interposition layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interposition project provides researchers working on side
</span><br>
<span class="quotelev1">&gt; projects above and below the 'rte.h' interface a single location in
</span><br>
<span class="quotelev1">&gt; the code base to watch for interface and semantic changes that they
</span><br>
<span class="quotelev1">&gt; need to be concerned about. Researchers working above the pineapple
</span><br>
<span class="quotelev1">&gt; layer might explore something other than (or in addition to) OMPI
</span><br>
<span class="quotelev1">&gt; (e.g., Extended OMPI, UPC+OMPI). Researchers working below the
</span><br>
<span class="quotelev1">&gt; pineapple layer might explore something other than (or in addition to)
</span><br>
<span class="quotelev1">&gt; ORTE under OMPI (e.g., specialized runtimes for specific
</span><br>
<span class="quotelev1">&gt; environments).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Description: Other notes
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt; The pineapple interface provides OMPI developers with a runtime API to
</span><br>
<span class="quotelev1">&gt; program against without requiring detailed knowledge of the layout of
</span><br>
<span class="quotelev1">&gt; ORTE and its frameworks. In some places in OMPI a single source file
</span><br>
<span class="quotelev1">&gt; needs to include &gt;5 (up to 12 in one place) different header files to
</span><br>
<span class="quotelev1">&gt; get all of the necessary symbols. Developers must not only know where
</span><br>
<span class="quotelev1">&gt; these headers are, but must also understand the differences between
</span><br>
<span class="quotelev1">&gt; the various frameworks in ORTE to use ORTE. The developer must also be
</span><br>
<span class="quotelev1">&gt; aware that there are certain APIs and data structure fields that are
</span><br>
<span class="quotelev1">&gt; not available to the MPI process, so should not be used. The pineapple
</span><br>
<span class="quotelev1">&gt; project provides an API representing the small subset of ORTE that is
</span><br>
<span class="quotelev1">&gt; used by OMPI. With this API a developer only needs to look at a single
</span><br>
<span class="quotelev1">&gt; location in the code base to understand what is provided by the
</span><br>
<span class="quotelev1">&gt; runtime for use in the OMPI layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A similar statement could be made for runtime developers trying to
</span><br>
<span class="quotelev1">&gt; figure out what the OMPI layer requires from the a runtime
</span><br>
<span class="quotelev1">&gt; environment. Currently they need a deep understanding of the behavior
</span><br>
<span class="quotelev1">&gt; of ORTE to understand the semantics of various calls to ORTE from the
</span><br>
<span class="quotelev1">&gt; OMPI layer. Then they must develop a custom patch for the OMPI layer
</span><br>
<span class="quotelev1">&gt; that extracts the ORTE symbols, and replaces them with their own
</span><br>
<span class="quotelev1">&gt; symbols. This process is messy, error prone, and tedious to say the
</span><br>
<span class="quotelev1">&gt; least. Having a single set of interfaces and semantics will allow such
</span><br>
<span class="quotelev1">&gt; developers to focus their efforts on supporting the Open MPI community
</span><br>
<span class="quotelev1">&gt; defined API, and not necessarily the evolution of the ORTE or OMPI
</span><br>
<span class="quotelev1">&gt; project internals. This is advantageous when porting Open MPI to an
</span><br>
<span class="quotelev1">&gt; environment with a full featured runtime already running on the
</span><br>
<span class="quotelev1">&gt; machine, and for researchers exploring radical runtime designs for
</span><br>
<span class="quotelev1">&gt; future systems. The pineapple API allows such projects to develop
</span><br>
<span class="quotelev1">&gt; beside the mainline Open MPI trunk a little more easily than without
</span><br>
<span class="quotelev1">&gt; the pineapple API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FAQ:
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; (1) Why is this a separate project and not a framework of OMPI? or a
</span><br>
<span class="quotelev1">&gt; framework of ORTE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After much deliberation between the developers, from a software
</span><br>
<span class="quotelev1">&gt; engineering perspective, making the pineapple rte.h interface a
</span><br>
<span class="quotelev1">&gt; separate project was the most flexible solution. So neither the OMPI
</span><br>
<span class="quotelev1">&gt; layer nor the ORTE layer 'own' the interface, but it is 'owned' by the
</span><br>
<span class="quotelev1">&gt; Open MPI project primarily to support the interaction between these
</span><br>
<span class="quotelev1">&gt; two layers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Consider that if we decided to place the interface in the OMPI layer
</span><br>
<span class="quotelev1">&gt; as a framework then we would be able to place something other than (or
</span><br>
<span class="quotelev1">&gt; in addition to) ORTE underneath OMPI, but we would be limited in our
</span><br>
<span class="quotelev1">&gt; ability to place something other than (or in addition to) OMPI over
</span><br>
<span class="quotelev1">&gt; ORTE. Alternatively, if we decided to place the rte.h interface in the
</span><br>
<span class="quotelev1">&gt; ORTE layer then we would be able to place something other than (or in
</span><br>
<span class="quotelev1">&gt; addition to) OMPI over ORTE, but we would be limited in our ability to
</span><br>
<span class="quotelev1">&gt; place something other than (or in addition to) ORTE under OMPI.
</span><br>
<span class="quotelev1">&gt; Defining the interposition layer as a separate project between these
</span><br>
<span class="quotelev1">&gt; two layers allows maximal flexibility for the project and researchers
</span><br>
<span class="quotelev1">&gt; working on side branches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) What if another project outside of Open MPI needs interface
</span><br>
<span class="quotelev1">&gt; changes to the pineapple 'rte.h'?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The rule of thumb is that 'The OMPI/ORTE/OPAL stack is king!'. This
</span><br>
<span class="quotelev1">&gt; means that the pineapple project should always err on the side of
</span><br>
<span class="quotelev1">&gt; supporting the OMPI/ORTE/OPAL stack, as that is the flagship product
</span><br>
<span class="quotelev1">&gt; of the Open MPI project. Interface suggestions are always welcome and
</span><br>
<span class="quotelev1">&gt; the rte.h may be extended/modified in the future as a result of those
</span><br>
<span class="quotelev1">&gt; suggestions. However, if a suggested change negatively impacts the
</span><br>
<span class="quotelev1">&gt; OMPI/ORTE/OPAL stack then it is unlikely to be accepted upstream by
</span><br>
<span class="quotelev1">&gt; the Open MPI community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11151.php">TERRY DONTJE: "[OMPI devel] bug in r26626"</a>
<li><strong>Previous message:</strong> <a href="11149.php">Ralph Castain: "[OMPI devel] OPAL dss release function"</a>
<li><strong>In reply to:</strong> <a href="11109.php">Josh Hursey: "[OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>Reply:</strong> <a href="11154.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
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
