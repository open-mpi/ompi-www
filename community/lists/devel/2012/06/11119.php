<?
$subject_val = "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 12:46:53 2012" -->
<!-- isoreceived="20120618164653" -->
<!-- sent="Mon, 18 Jun 2012 12:46:48 -0400" -->
<!-- isosent="20120618164648" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project" -->
<!-- id="CAANzjEmJnQkuyUT5JMvjNjQRfktZP5bTQyXEn97oDo8JOjp-oA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EBB59A2D-C65C-4D0C-AB5A-0D3BCE21F9EB_at_open-mpi.org" -->
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
<strong>Date:</strong> 2012-06-18 12:46:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Previous message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11150.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds good.
<br>
<p>The approach for this project can be seen as multi-phased.
<br>
<p>Phase 0: Baseline
<br>
&nbsp;- Baseline implementation of just the interfaces that OMPI uses.
<br>
&nbsp;- This is what I want to commit to the trunk next week.
<br>
<p>Phases 1-N: Interface enhancements
<br>
&nbsp;- There are a number of suggested enhancements for the interface
<br>
going forward. From making the API a bit more general to exposing more
<br>
of ORTE through the pineapple interface.
<br>
&nbsp;- Per the 'OMPI/ORTE/OPAL stack is king' discussion, the Open MPI
<br>
community needs to discuss the manipulation of the interface for
<br>
projects outside of that stack. So it seems that interface
<br>
modifications needed for projects outside of the OMPI/ORTE/OPAL stack
<br>
need to be discussed by the Open MPI community.
<br>
&nbsp;- As Ralph pointed out, this will probably not be an easy discussion at times.
<br>
&nbsp;- No timeline for these phases
<br>
<p>I intentionally did not want to blur Phase 0 with Phase 1-N so that we
<br>
can get things going. It seems from past attempts at this that Phase
<br>
1-N seem to sink the conversation and good software development in
<br>
Phase 0 is lost. So I want to get Phase 0 in the trunk, then if folks
<br>
want to talk about interface tweaks we can do so as needed going
<br>
forward.
<br>
<p>I should note that at this time I, personally, do not have any
<br>
interface items to be addressed. This interface is sufficient for what
<br>
I need right now.
<br>
<p>I'll get back to work finishing up the branch :)
<br>
<p>-- Josh
<br>
<p><p><p>On Mon, Jun 18, 2012 at 9:59 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; No disagreement over the approach - having the interface only cover OMPI as it sits is fine. As I said at the meeting, those of us using ORTE for other purposes have no real reason to need &quot;pineapple&quot; and can just work directly with the ORTE interfaces (GP will commit to this route). Based on that plus your comments, I would leave the interface alone for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I remain unconvinced by the &quot;put other RTEs under OMPI&quot; argument, as you know, but I won't belabor it. We'll let time show us just how real that concern is. For now, as we agreed at the meeting, we'll modify the interface as required to meet OMPI's needs for its integration with the ORTE trunk. We know that will mean some near-term changes as we work on modex, but we can adjust as needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really care about the name, but just want something usably short. I'm content with the old &quot;Ompi Runtime Services Layer&quot; (ORSL), if you want to go back to it. Not sure we need to spend cycles trying to get the name to reflect the precedence agreement - the precise definition of the API is likely to get argued over multiple times regardless, based on prior history, so a stormy future for this proposal (regardless of name) is a reasonable prediction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Josh!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 18, 2012, at 7:06 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jun 16, 2012 at 10:32 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had a chance to review your code this morning, and generally find it is okay with me. I see a couple of things that appear to limit it, though they may be intentional:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this pass of the pineapple interface I included only those
</span><br>
<span class="quotelev2">&gt;&gt; interfaces that OMPI uses without extension. So if OMPI did not use a
</span><br>
<span class="quotelev2">&gt;&gt; parameter or only used an interface in a single way then I simplified
</span><br>
<span class="quotelev2">&gt;&gt; the interface appropriately. The intention in this first pass was to
</span><br>
<span class="quotelev2">&gt;&gt; provide only what OMPI needs from ORTE in the interface, and nothing
</span><br>
<span class="quotelev2">&gt;&gt; more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Extending this interface to be more flexible and extensible I saw as a
</span><br>
<span class="quotelev2">&gt;&gt; secondary discussion that the group can have moving forward from this
</span><br>
<span class="quotelev2">&gt;&gt; initial baseline.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. the call to pineapple_init really needs a third flag to define the process type. Locking the underlying orte_init to MPI seems to somewhat defeat your goal of allowing pineapple to be used for non-MPI purposes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For OMPI, we only ever pass one type to the orte_init function. As
</span><br>
<span class="quotelev2">&gt;&gt; such, I eliminated the third parameter since it was unnecessary for
</span><br>
<span class="quotelev2">&gt;&gt; OMPI in this baseline pass.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, it may be useful to have for non-MPI purposes. Maybe a 'int'
</span><br>
<span class="quotelev2">&gt;&gt; parameter with pineapple only defining that '0' is OMPI_PROCESS, and
</span><br>
<span class="quotelev2">&gt;&gt; all other values are to be defined in the future. However, I am
</span><br>
<span class="quotelev2">&gt;&gt; hesitant to extend the interface for what we 'might' do, but rather
</span><br>
<span class="quotelev2">&gt;&gt; only extend the interface for what we will support going forward. But
</span><br>
<span class="quotelev2">&gt;&gt; if you have a good use case, then we can discuss adding it to support
</span><br>
<span class="quotelev2">&gt;&gt; non-MPI layers above. I just did not do so since it is not what OMPI
</span><br>
<span class="quotelev2">&gt;&gt; needed, so why make a more complex API in this first pass.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. the barrier and other collectives are locked to the MPI_Init and MPI_Finalize procedures due to hardcoding of the collective id. You might want to consider altering the API to pass a collective id down so these functions can be used in other places.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making this more generic would be useful. I'll see what I can do when
</span><br>
<span class="quotelev2">&gt;&gt; I dig back in this week. I hardcoded them since that is exactly how
</span><br>
<span class="quotelev2">&gt;&gt; OMPI uses them today. But having them more widely accessible would be
</span><br>
<span class="quotelev2">&gt;&gt; better.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, as you allude to in the next paragraph, we do not want to
</span><br>
<span class="quotelev2">&gt;&gt; define an ultimate generalized RTE abstraction. So we must be careful
</span><br>
<span class="quotelev2">&gt;&gt; when defining more generic interfaces that we are not hindering the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI/ORTE/OPAL stack and that we have a testable usecase for the
</span><br>
<span class="quotelev2">&gt;&gt; interface extension. This case (collective uses) is easier, but I can
</span><br>
<span class="quotelev2">&gt;&gt; think of other places wehre it could get more delicate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Finally, we have to get rid of the &quot;pineapple&quot; name. It seems to me that the primary purpose of this work is to allow ORTE to be used more generally, and to support multiple variants of ORTE within OMPI. So how about calling it &quot;ORte Abstraction Layer&quot;, or ORAL? This would emphasize that we are not trying to create the ultimate generalized RTE abstraction, which I think is important for all the reasons raised at the recent meeting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Renaming 'pineapple' is the very last step. So we can discuss that
</span><br>
<span class="quotelev2">&gt;&gt; until just before it comes into the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The primary purpose of this effort is two fold. First, to allow ORTE
</span><br>
<span class="quotelev2">&gt;&gt; to be used more generally (something other than, or in addition to,
</span><br>
<span class="quotelev2">&gt;&gt; OMPI above it). Secondly, to allow OMPI to be used across different
</span><br>
<span class="quotelev2">&gt;&gt; RTEs (something other than, or in addition to, ORTE below it). We are
</span><br>
<span class="quotelev2">&gt;&gt; not trying to create the ultimate generalized RTE abstraction layer,
</span><br>
<span class="quotelev2">&gt;&gt; but something that serves the primary master of the interaction
</span><br>
<span class="quotelev2">&gt;&gt; between OMPI/ORTE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if we consider calling it the 'ORte Abstraction Layer' for
</span><br>
<span class="quotelev2">&gt;&gt; OMPI then we could just as easily call it the 'OMPI RTE Abstraction
</span><br>
<span class="quotelev2">&gt;&gt; Layer' for ORTE. And then we quickly get back to the who owns the
</span><br>
<span class="quotelev2">&gt;&gt; interface issue, and which project stack it serves. I think a better
</span><br>
<span class="quotelev2">&gt;&gt; name is one that ties OMPI and ORTE together - maybe... OMPI and ORTE
</span><br>
<span class="quotelev2">&gt;&gt; Synergistic Abstraction (OOSA) Layer. OMPI/ORTE/OPAL stack is king,
</span><br>
<span class="quotelev2">&gt;&gt; and having the name reflect that would be good. I am just not sure
</span><br>
<span class="quotelev2">&gt;&gt; what that would be at the moment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 15, 2012, at 12:55 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What: A Runtime Interposition Project - Codename Pineapple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why: Define clear API and semantics for runtime requirements of the OMPI layer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - F June 22, 2012 - Work completed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - T June 26, 2012 - Discuss on teleconf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - R June 28, 2012 - Commit to trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Where: Trunk (development BitBucket branch below)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;<a href="https://bitbucket.org/jjhursey/ompi-pineapple">https://bitbucket.org/jjhursey/ompi-pineapple</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attached:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;PDF of slides presented on the June 12, 2012 teleconf. Note that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; timeline was slightly adjusted above (work completed date moved
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ealier).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Description: Short Version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Define, in an 'rte.h', the interfaces and semantics that the OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer requires of a runtime environment. Currently this interface
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; matches the subset of ORTE functionality that is used by the OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer. Runtime symbols (e.g., orte_ess.proc_get_locality) are isolated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to a framework inside this project to provide linker-level protection
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; against accidental breakage of the pineapple interposition layer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The interposition project provides researchers working on side
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; projects above and below the 'rte.h' interface a single location in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the code base to watch for interface and semantic changes that they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to be concerned about. Researchers working above the pineapple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer might explore something other than (or in addition to) OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., Extended OMPI, UPC+OMPI). Researchers working below the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pineapple layer might explore something other than (or in addition to)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE under OMPI (e.g., specialized runtimes for specific
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environments).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Description: Other notes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The pineapple interface provides OMPI developers with a runtime API to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program against without requiring detailed knowledge of the layout of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE and its frameworks. In some places in OMPI a single source file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; needs to include &gt;5 (up to 12 in one place) different header files to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get all of the necessary symbols. Developers must not only know where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these headers are, but must also understand the differences between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the various frameworks in ORTE to use ORTE. The developer must also be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; aware that there are certain APIs and data structure fields that are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not available to the MPI process, so should not be used. The pineapple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; project provides an API representing the small subset of ORTE that is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used by OMPI. With this API a developer only needs to look at a single
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; location in the code base to understand what is provided by the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime for use in the OMPI layer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A similar statement could be made for runtime developers trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; figure out what the OMPI layer requires from the a runtime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment. Currently they need a deep understanding of the behavior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of ORTE to understand the semantics of various calls to ORTE from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI layer. Then they must develop a custom patch for the OMPI layer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that extracts the ORTE symbols, and replaces them with their own
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbols. This process is messy, error prone, and tedious to say the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; least. Having a single set of interfaces and semantics will allow such
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; developers to focus their efforts on supporting the Open MPI community
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; defined API, and not necessarily the evolution of the ORTE or OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; project internals. This is advantageous when porting Open MPI to an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment with a full featured runtime already running on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; machine, and for researchers exploring radical runtime designs for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; future systems. The pineapple API allows such projects to develop
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; beside the mainline Open MPI trunk a little more easily than without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the pineapple API.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAQ:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (1) Why is this a separate project and not a framework of OMPI? or a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; framework of ORTE?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After much deliberation between the developers, from a software
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; engineering perspective, making the pineapple rte.h interface a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separate project was the most flexible solution. So neither the OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; layer nor the ORTE layer 'own' the interface, but it is 'owned' by the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI project primarily to support the interaction between these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two layers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Consider that if we decided to place the interface in the OMPI layer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as a framework then we would be able to place something other than (or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in addition to) ORTE underneath OMPI, but we would be limited in our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ability to place something other than (or in addition to) OMPI over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE. Alternatively, if we decided to place the rte.h interface in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE layer then we would be able to place something other than (or in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; addition to) OMPI over ORTE, but we would be limited in our ability to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; place something other than (or in addition to) ORTE under OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Defining the interposition layer as a separate project between these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two layers allows maximal flexibility for the project and researchers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; working on side branches.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (2) What if another project outside of Open MPI needs interface
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changes to the pineapple 'rte.h'?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The rule of thumb is that 'The OMPI/ORTE/OPAL stack is king!'. This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; means that the pineapple project should always err on the side of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supporting the OMPI/ORTE/OPAL stack, as that is the flagship product
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the Open MPI project. Interface suggestions are always welcome and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the rte.h may be extended/modified in the future as a result of those
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggestions. However, if a suggested change negatively impacts the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI/ORTE/OPAL stack then it is unlikely to be accepted upstream by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the Open MPI community.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Pineapple-Teleconf.pdf&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Previous message:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11118.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11150.php">Josh Hursey: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
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
