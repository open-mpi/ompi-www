<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 22 10:29:30 2007" -->
<!-- isoreceived="20070822142930" -->
<!-- sent="Wed, 22 Aug 2007 08:29:20 -0600" -->
<!-- isosent="20070822142920" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Runtime Services Layer" -->
<!-- id="C2F1A460.A8A3%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708162147.10145.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-22 10:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2203.php">Carlos Segura: "[OMPI devel] Orted problem"</a>
<li><strong>Previous message:</strong> <a href="2201.php">Terry D. Dontje: "[OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>In reply to:</strong> <a href="2170.php">Tim Prins: "[OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just returned from vacation...sorry for delayed response
<br>
<p>In the past, I have expressed three concerns about the RSL. I'll aggregate
<br>
them here for those who haven't seen them before - and apologize in advance
<br>
for the long note.
<br>
<p>For those wanting it in short, the concerns (somewhat related) are:
<br>
<p>1. What problem are we really trying to solve?
<br>
2. Who is going to maintain old RTE versions, and why?
<br>
3. Are we constraining ourselves from further improvements in startup
<br>
performance?
<br>
<p>My bottom line recommendation: I have no philosophical issue with the RSL
<br>
concept. However, I recommend holding off until the next version of ORTE is
<br>
completed and then re-evaluating to see how valuable the RSL might be, as
<br>
that next version will include memory footprint reduction and framework
<br>
consolidation that may yield much of the RSL's value without the extra work.
<br>
<p><p>Long version:
<br>
<p>1. What problem are we really trying to solve?
<br>
If the RSL is intended to solve the Cray support problem (where the Cray OS
<br>
really just wants to see OMPI, not ORTE), then it may have some value. The
<br>
issue to date has revolved around the difficulty of maintaining the Cray
<br>
port in the face of changes to ORTE - as new frameworks are added, special
<br>
components for Cray also need to be created to provide a &quot;do-nothing&quot;
<br>
capability. In addition, the Cray is memory constrained, and the ORTE
<br>
library occupies considerable space while providing very little
<br>
functionality.
<br>
<p>The degree of value provide by the RSL will therefore depend somewhat on the
<br>
efficacy of the changes in development within ORTE. Those changes will,
<br>
among other things, significantly consolidate and reduce the number of
<br>
frameworks, and reduce the memory footprint. The expectation is that the
<br>
result will require only a single CNOS component in one framework. It isn't
<br>
clear, therefore, that the RSL will provide a significant value in that
<br>
environment.
<br>
<p>If the RSL is intended to aid in ORTE development, as hinted at in the RFC,
<br>
then I believe that is questionable. Developing ORTE in a tmp branch has
<br>
proven reasonably effective as changes to the MPI layer are largely
<br>
invisible to ORTE. Creating another layer to the system that would also have
<br>
to be maintained seems like a non-productive way of addressing any problems
<br>
in that area.
<br>
<p>If the RSL is intended as a means of &quot;freezing&quot; the MPI-RTE interface, then
<br>
I believe we could better attain that objective by simply defining a set of
<br>
requirements for the RTE. As I'll note below, freezing the interface at an
<br>
API level could negatively impact other Open MPI objectives.
<br>
<p><p>2. Who is going to maintain old RTE versions, and why?
<br>
It isn't clear to me why anyone would want to do this - are we seriously
<br>
proposing that we maintain support for the ORTE layer that shipped with Open
<br>
MPI 1.0?? Can someone explain why we would want to do that?
<br>
<p>Given what I know of ORTE, it seems questionable that, for example, one
<br>
could have RSL components for both the ORTE that shipped with Open MPI 1.0
<br>
and the ORTE that is currently in the trunk without writing a great deal of
<br>
RSL code. Creating an RSL component for the ORTE intended for Open MPI 1.3
<br>
would seem like even greater work as the flow of control is very different
<br>
(see below).
<br>
<p>I'm sure one could overcome this with considerable code in the respective
<br>
RSL components - but I have difficulty understanding the value in doing all
<br>
that coding. Can someone explain that, and can we identify the personnel
<br>
(and/or their organization) that are willing to perform that function?
<br>
<p><p>3. Are we constraining ourselves from further improvements in startup
<br>
performance?
<br>
This is my biggest area of concern. The RSL has been proposed as an
<br>
API-level definition. However, the MPI-RTE interaction really is defined in
<br>
terms of a flow-of-control - although each point of interaction is
<br>
instantiated as an API, the fact is that what happens at that point is not
<br>
independent of all prior interactions.
<br>
<p>As an example of my concern, consider what we are currently doing with ORTE.
<br>
The latest change in requirements involves the need to significantly improve
<br>
startup time, reduce memory footprint, and reduce ORTE complexity. What we
<br>
are doing to meet that requirement is to review the delineation of
<br>
responsibilities between the MPI and RTE layers. The current delineation
<br>
evolved over time, with many of the decisions made at a very early point in
<br>
the program. For example, we instituted RTE-level stage gates in the MPI
<br>
layer because, at the time they were needed, the MPI developers didn't want
<br>
to deal with them on their side (e.g., ensuring that failure of one proc
<br>
wouldn't hang the system). Given today's level of maturity in the MPI layer,
<br>
we are now planning on moving the stage gates to the MPI layer, implemented
<br>
as an &quot;all-to-all&quot; - this will remove several thousand lines of code from
<br>
ORTE and make it easier for the MPI layer to operate on non-ORTE
<br>
environments.
<br>
<p>Similar efforts are underway to reduce ORTE involvement in the modex
<br>
operation and other parts of the MPI application lifecycle. We are able to
<br>
do these things because we are now moving towards a tight integration of
<br>
ORTE and OMPI layers - i.e., ORTE can be simplified because we can take
<br>
advantage of our knowledge of what is happening on the MPI side of the
<br>
equation.
<br>
<p>In order to accomplish this, however, we need to change the
<br>
points-of-contact between the MPI and RTE layers, and redefine what happens
<br>
at those points. If we require via the RSL that we&quot; those points and what
<br>
happens at those points, then making these changes will either prove
<br>
impossible or at least will require considerable RSL code. On the other
<br>
hand, if we revise the RSL to support the new ORTE/OMPI functionality, then
<br>
we will have to write considerable code to make old versions of ORTE work
<br>
with the new system.
<br>
<p><p><p>Hence, my concern is that we not let RSL implementation prevent us from
<br>
moving forward with ORTE. The current work is required to meet scaling
<br>
demands, and hopefully will resolve much of the Cray issue. I see no value
<br>
in creating RSL just to support old versions of ORTE, nor for supporting
<br>
ORTE development. It would be nice if we could re-evaluate this after the
<br>
next ORTE version becomes solidified to see how the cost/benefit analysis
<br>
has changed, and whether the RSL remains a desirable option.
<br>
<p>Ralph
<br>
<p><p><p>On 8/16/07 7:47 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Solicitation of feedback on the possibility of adding a runtime
</span><br>
<span class="quotelev1">&gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: To solidify the interface between OMPI and the runtime environment,
</span><br>
<span class="quotelev1">&gt; and to allow the use of different runtime systems, including different
</span><br>
<span class="quotelev1">&gt; versions of ORTE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: Addition of a new framework to OMPI, and changes to many of the
</span><br>
<span class="quotelev1">&gt; files in OMPI to funnel all runtime request through this framework. Few
</span><br>
<span class="quotelev1">&gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Development has started in tmp/rsl, but is still in its infancy. We hope
</span><br>
<span class="quotelev1">&gt; to have a working system in the next month.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; Short version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on creating an interface between OMPI and the runtime system.
</span><br>
<span class="quotelev1">&gt; This would make a RSL framework in OMPI which all runtime services would be
</span><br>
<span class="quotelev1">&gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This change would be invasive to the OMPI layer. Few (if any) changes
</span><br>
<span class="quotelev1">&gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point I am soliciting feedback as to whether people are
</span><br>
<span class="quotelev1">&gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Long version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current model used in Open MPI assumes that one runtime system is
</span><br>
<span class="quotelev1">&gt; the best for all environments. However, in many environments it may be
</span><br>
<span class="quotelev1">&gt; beneficial to have specialized runtime systems. With our current system this
</span><br>
<span class="quotelev1">&gt; is not easy to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With this in mind, the idea of creating a 'runtime services layer' was
</span><br>
<span class="quotelev1">&gt; hatched. This would take the form of a framework within OMPI, through which
</span><br>
<span class="quotelev1">&gt; all runtime functionality would be accessed. This would allow new or
</span><br>
<span class="quotelev1">&gt; different runtime systems to be used with Open MPI. Additionally, with such a
</span><br>
<span class="quotelev1">&gt; system it would be possible to have multiple versions of open rte coexisting,
</span><br>
<span class="quotelev1">&gt; which may facilitate development and testing. Finally, this would solidify the
</span><br>
<span class="quotelev1">&gt; interface between OMPI and the runtime system, as well as provide
</span><br>
<span class="quotelev1">&gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, such a change would be fairly invasive to the OMPI layer, and
</span><br>
<span class="quotelev1">&gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a summary of the changes required for the RSL (at least how it is
</span><br>
<span class="quotelev1">&gt; currently envisioned):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Add a framework to ompi for the rsl, and a component to support orte.
</span><br>
<span class="quotelev1">&gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev1">&gt;          a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev1">&gt;          b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev1">&gt;          c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev1">&gt; 3. Change the configuration code so that open-rte is only linked where needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The design of the rsl is not solidified. I have been playing in a tmp branch
</span><br>
<span class="quotelev1">&gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which everyone is
</span><br>
<span class="quotelev1">&gt; welcome to look at and comment on, but be advised that things here are
</span><br>
<span class="quotelev1">&gt; subject to change (I don't think it even compiles right now). There are
</span><br>
<span class="quotelev1">&gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they
</span><br>
<span class="quotelev1">&gt; always get ORTE, or do they sometimes get a system specific runtime). Most
</span><br>
<span class="quotelev1">&gt; likely mpirun will always use ORTE, and alternative launching programs would
</span><br>
<span class="quotelev1">&gt; be used for other runtimes.
</span><br>
<span class="quotelev1">&gt; 2. Whether there will be any performance implications. My guess is not,
</span><br>
<span class="quotelev1">&gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, I am interested in people's comments on whether they think adding
</span><br>
<span class="quotelev1">&gt; such abstraction is good or not, and whether it is reasonable to do such a
</span><br>
<span class="quotelev1">&gt; thing for v1.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim Prins
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
<li><strong>Next message:</strong> <a href="2203.php">Carlos Segura: "[OMPI devel] Orted problem"</a>
<li><strong>Previous message:</strong> <a href="2201.php">Terry D. Dontje: "[OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>In reply to:</strong> <a href="2170.php">Tim Prins: "[OMPI devel] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<li><strong>Reply:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
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
