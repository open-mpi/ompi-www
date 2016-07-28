<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 14:48:59 2007" -->
<!-- isoreceived="20070828184859" -->
<!-- sent="Tue, 28 Aug 2007 12:46:56 -0600" -->
<!-- isosent="20070828184656" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer" -->
<!-- id="C2F9C9C0.A9C0%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46D2D1F5.20801_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2007-08-28 14:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2248.php">Jeff Squyres: "[OMPI devel] Patch for reporter and friends"</a>
<li><strong>Previous message:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2208.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/27/07 7:30 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just returned from vacation...sorry for delayed response
</span><br>
<span class="quotelev1">&gt; No Problem. Hope you had a good vacation :) And sorry for my super
</span><br>
<span class="quotelev1">&gt; delayed response. I have been pondering this a bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the past, I have expressed three concerns about the RSL.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My bottom line recommendation: I have no philosophical issue with the RSL
</span><br>
<span class="quotelev2">&gt;&gt; concept. However, I recommend holding off until the next version of ORTE is
</span><br>
<span class="quotelev2">&gt;&gt; completed and then re-evaluating to see how valuable the RSL might be, as
</span><br>
<span class="quotelev2">&gt;&gt; that next version will include memory footprint reduction and framework
</span><br>
<span class="quotelev2">&gt;&gt; consolidation that may yield much of the RSL's value without the extra work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Long version:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. What problem are we really trying to solve?
</span><br>
<span class="quotelev2">&gt;&gt; If the RSL is intended to solve the Cray support problem (where the Cray OS
</span><br>
<span class="quotelev2">&gt;&gt; really just wants to see OMPI, not ORTE), then it may have some value. The
</span><br>
<span class="quotelev2">&gt;&gt; issue to date has revolved around the difficulty of maintaining the Cray
</span><br>
<span class="quotelev2">&gt;&gt; port in the face of changes to ORTE - as new frameworks are added, special
</span><br>
<span class="quotelev2">&gt;&gt; components for Cray also need to be created to provide a &quot;do-nothing&quot;
</span><br>
<span class="quotelev2">&gt;&gt; capability. In addition, the Cray is memory constrained, and the ORTE
</span><br>
<span class="quotelev2">&gt;&gt; library occupies considerable space while providing very little
</span><br>
<span class="quotelev2">&gt;&gt; functionality.
</span><br>
<span class="quotelev1">&gt; This is definitely a motivation, but not the only one.
</span><br>
<p>So...what are the others?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The degree of value provide by the RSL will therefore depend somewhat on the
</span><br>
<span class="quotelev2">&gt;&gt; efficacy of the changes in development within ORTE. Those changes will,
</span><br>
<span class="quotelev2">&gt;&gt; among other things, significantly consolidate and reduce the number of
</span><br>
<span class="quotelev2">&gt;&gt; frameworks, and reduce the memory footprint. The expectation is that the
</span><br>
<span class="quotelev2">&gt;&gt; result will require only a single CNOS component in one framework. It isn't
</span><br>
<span class="quotelev2">&gt;&gt; clear, therefore, that the RSL will provide a significant value in that
</span><br>
<span class="quotelev2">&gt;&gt; environment.
</span><br>
<span class="quotelev1">&gt; But won't there still be a lot of orte code linked in that will never be
</span><br>
<span class="quotelev1">&gt; used?
</span><br>
<p>Not really. The only thing left would be the stuff in runtime and util.
<br>
<p>We have talked for years about creating an ORTE &quot;services&quot; framework -
<br>
basically, combining what is now in the runtime and util directories into a
<br>
single framework ala &quot;svcs&quot;. The notion was that everything OS-specific
<br>
would go in there. What has held up implementation is (a) some thought that
<br>
maybe those things should go into OPAL instead of ORTE, and (b) low priority
<br>
and more important things to do.
<br>
<p>However, if someone went ahead and implemented that idea, then you would
<br>
have a &quot;NULL&quot; component in the base that basically does a &quot;no-op&quot;, and a
<br>
&quot;default&quot; component that provides actual services. Thus, for CNOS, you would
<br>
take the NULL component (so you don't open the framework's components and
<br>
avoid that memory overhead), and away you go.
<br>
<p>I don't see how the RSL does anything better. Admittedly, you wouldn't have
<br>
to maintain the svcs APIs, but that doesn't seem any more onerous than
<br>
maintaining the RSL APIs as we change the MPI/RTE interfaces.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, a RSL would simplify ORTE in that there would be no need to do
</span><br>
<span class="quotelev1">&gt; anything special for CNOs in it.
</span><br>
<p>But if all I do is remove the ORTE cnos component and add an RSL cnos
<br>
component...what have I simplified?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the RSL is intended to aid in ORTE development, as hinted at in the RFC,
</span><br>
<span class="quotelev2">&gt;&gt; then I believe that is questionable. Developing ORTE in a tmp branch has
</span><br>
<span class="quotelev2">&gt;&gt; proven reasonably effective as changes to the MPI layer are largely
</span><br>
<span class="quotelev2">&gt;&gt; invisible to ORTE. Creating another layer to the system that would also have
</span><br>
<span class="quotelev2">&gt;&gt; to be maintained seems like a non-productive way of addressing any problems
</span><br>
<span class="quotelev2">&gt;&gt; in that area.
</span><br>
<span class="quotelev1">&gt; Whether or not it would help in orte development remains to be seen. I
</span><br>
<span class="quotelev1">&gt; just say that it might. Although I would argue that developing in tmp
</span><br>
<span class="quotelev1">&gt; branches has caused a lot of problems with merging, etc.
</span><br>
<p>Guess I don't see how this would solve the merge problems...but whatever.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the RSL is intended as a means of &quot;freezing&quot; the MPI-RTE interface, then
</span><br>
<span class="quotelev2">&gt;&gt; I believe we could better attain that objective by simply defining a set of
</span><br>
<span class="quotelev2">&gt;&gt; requirements for the RTE. As I'll note below, freezing the interface at an
</span><br>
<span class="quotelev2">&gt;&gt; API level could negatively impact other Open MPI objectives.
</span><br>
<span class="quotelev1">&gt; It is intended to easily allow the development and use of other runtime
</span><br>
<span class="quotelev1">&gt; systems, so simply defining requirements is not enough.
</span><br>
<p>Could you please give some examples of these other runtimes?? Or is this
<br>
just hypothetical at this time?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Who is going to maintain old RTE versions, and why?
</span><br>
<span class="quotelev2">&gt;&gt; It isn't clear to me why anyone would want to do this - are we seriously
</span><br>
<span class="quotelev2">&gt;&gt; proposing that we maintain support for the ORTE layer that shipped with Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1.0?? Can someone explain why we would want to do that?
</span><br>
<span class="quotelev1">&gt; I highly doubt anyone would, and see no reason to include support for
</span><br>
<span class="quotelev1">&gt; older runtime versions. Again, the purpose is to be able to run
</span><br>
<span class="quotelev1">&gt; different runtimes. The ability to run different versions of the same
</span><br>
<span class="quotelev1">&gt; runtime is just a side-effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. Are we constraining ourselves from further improvements in startup
</span><br>
<span class="quotelev2">&gt;&gt; performance?
</span><br>
<span class="quotelev2">&gt;&gt; This is my biggest area of concern. The RSL has been proposed as an
</span><br>
<span class="quotelev2">&gt;&gt; API-level definition. However, the MPI-RTE interaction really is defined in
</span><br>
<span class="quotelev2">&gt;&gt; terms of a flow-of-control - although each point of interaction is
</span><br>
<span class="quotelev2">&gt;&gt; instantiated as an API, the fact is that what happens at that point is not
</span><br>
<span class="quotelev2">&gt;&gt; independent of all prior interactions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As an example of my concern, consider what we are currently doing with ORTE.
</span><br>
<span class="quotelev2">&gt;&gt; The latest change in requirements involves the need to significantly improve
</span><br>
<span class="quotelev2">&gt;&gt; startup time, reduce memory footprint, and reduce ORTE complexity. What we
</span><br>
<span class="quotelev2">&gt;&gt; are doing to meet that requirement is to review the delineation of
</span><br>
<span class="quotelev2">&gt;&gt; responsibilities between the MPI and RTE layers. The current delineation
</span><br>
<span class="quotelev2">&gt;&gt; evolved over time, with many of the decisions made at a very early point in
</span><br>
<span class="quotelev2">&gt;&gt; the program. For example, we instituted RTE-level stage gates in the MPI
</span><br>
<span class="quotelev2">&gt;&gt; layer because, at the time they were needed, the MPI developers didn't want
</span><br>
<span class="quotelev2">&gt;&gt; to deal with them on their side (e.g., ensuring that failure of one proc
</span><br>
<span class="quotelev2">&gt;&gt; wouldn't hang the system). Given today's level of maturity in the MPI layer,
</span><br>
<span class="quotelev2">&gt;&gt; we are now planning on moving the stage gates to the MPI layer, implemented
</span><br>
<span class="quotelev2">&gt;&gt; as an &quot;all-to-all&quot; - this will remove several thousand lines of code from
</span><br>
<span class="quotelev2">&gt;&gt; ORTE and make it easier for the MPI layer to operate on non-ORTE
</span><br>
<span class="quotelev2">&gt;&gt; environments.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Similar efforts are underway to reduce ORTE involvement in the modex
</span><br>
<span class="quotelev2">&gt;&gt; operation and other parts of the MPI application lifecycle. We are able to
</span><br>
<span class="quotelev2">&gt;&gt; do these things because we are now moving towards a tight integration of
</span><br>
<span class="quotelev2">&gt;&gt; ORTE and OMPI layers - i.e., ORTE can be simplified because we can take
</span><br>
<span class="quotelev2">&gt;&gt; advantage of our knowledge of what is happening on the MPI side of the
</span><br>
<span class="quotelev2">&gt;&gt; equation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In order to accomplish this, however, we need to change the
</span><br>
<span class="quotelev2">&gt;&gt; points-of-contact between the MPI and RTE layers, and redefine what happens
</span><br>
<span class="quotelev2">&gt;&gt; at those points. If we require via the RSL that we&quot; those points and what
</span><br>
<span class="quotelev2">&gt;&gt; happens at those points, then making these changes will either prove
</span><br>
<span class="quotelev2">&gt;&gt; impossible or at least will require considerable RSL code. On the other
</span><br>
<span class="quotelev2">&gt;&gt; hand, if we revise the RSL to support the new ORTE/OMPI functionality, then
</span><br>
<span class="quotelev2">&gt;&gt; we will have to write considerable code to make old versions of ORTE work
</span><br>
<span class="quotelev2">&gt;&gt; with the new system.
</span><br>
<span class="quotelev1">&gt; Again, I am not particularly concerned with supporting older versions of
</span><br>
<span class="quotelev1">&gt; orte, but rather supporting different runtime systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, from what I know of these changes (and perhaps I don't understand
</span><br>
<span class="quotelev1">&gt; them), the proposed changes would fit into the current RSL design.
</span><br>
<p>Well, we changed the STG3 stage gate to be an MPI call instead of an RTE
<br>
call. The STG2 stage gate is gone, replaced by an RTE barrier function. The
<br>
STG1 stage gate is going away, replaced by an RTE allgather. All
<br>
subscriptions and their associated trigger events are gone, replaced by
<br>
direct messaging where necessary (though most of them were simply eliminated
<br>
as we now let MPI do data exchanges itself). The spawn call in comm_spawn
<br>
has been cleaned up to eliminate lots of unused options - only remaining
<br>
things are translation of MPI_Info keys to their corresponding ORTE keys to
<br>
avoid abstraction violations, though we have talked about removing this as
<br>
well by having ORTE's spawn function read OPAL keyvals instead of ORTE
<br>
attributes (I'll probably do that as part of the next revision).
<br>
<p>So it seems to me like there will be a few changes to the RSL API, and major
<br>
changes to where RSL calls go. As we continue to fine tune performance, I
<br>
expect this will continue to happen, hopefully with decreasing frequency as
<br>
we &quot;home in&quot; on a final solution.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hence, my concern is that we not let RSL implementation prevent us from
</span><br>
<span class="quotelev2">&gt;&gt; moving forward with ORTE. The current work is required to meet scaling
</span><br>
<span class="quotelev2">&gt;&gt; demands, and hopefully will resolve much of the Cray issue. I see no value
</span><br>
<span class="quotelev2">&gt;&gt; in creating RSL just to support old versions of ORTE, nor for supporting
</span><br>
<span class="quotelev2">&gt;&gt; ORTE development. It would be nice if we could re-evaluate this after the
</span><br>
<span class="quotelev2">&gt;&gt; next ORTE version becomes solidified to see how the cost/benefit analysis
</span><br>
<span class="quotelev2">&gt;&gt; has changed, and whether the RSL remains a desirable option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 8/16/07 7:47 PM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Solicitation of feedback on the possibility of adding a runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; services layer to Open MPI to abstract out the runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: To solidify the interface between OMPI and the runtime environment,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and to allow the use of different runtime systems, including different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions of ORTE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: Addition of a new framework to OMPI, and changes to many of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files in OMPI to funnel all runtime request through this framework. Few
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes should be required in OPAL and ORTE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Development has started in tmp/rsl, but is still in its infancy. We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hope
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to have a working system in the next month.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: 8/29/07
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am working on creating an interface between OMPI and the runtime system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would make a RSL framework in OMPI which all runtime services would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accessed from. Attached is a graphic depicting this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This change would be invasive to the OMPI layer. Few (if any) changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will be required of the ORTE and OPAL layers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this point I am soliciting feedback as to whether people are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supportive or not of this change both in general and for v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Long version:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The current model used in Open MPI assumes that one runtime system is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the best for all environments. However, in many environments it may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; beneficial to have specialized runtime systems. With our current system this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not easy to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With this in mind, the idea of creating a 'runtime services layer' was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hatched. This would take the form of a framework within OMPI, through which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all runtime functionality would be accessed. This would allow new or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different runtime systems to be used with Open MPI. Additionally, with such
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system it would be possible to have multiple versions of open rte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coexisting,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which may facilitate development and testing. Finally, this would solidify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface between OMPI and the runtime system, as well as provide
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documentation and side effects of each interface function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, such a change would be fairly invasive to the OMPI layer, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needs a buy-in from everyone for it to be possible.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a summary of the changes required for the RSL (at least how it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently envisioned):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Add a framework to ompi for the rsl, and a component to support orte.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Change ompi so that it uses the new interface. This involves:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          a. Moving runtime specific code into the orte rsl component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          b. Changing the process names in ompi to an opaque object.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          c. change all references to orte in ompi to be to the rsl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Change the configuration code so that open-rte is only linked where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, all this would happen on a tmp branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The design of the rsl is not solidified. I have been playing in a tmp branch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (located at <a href="https://svn.open-mpi.org/svn/ompi/tmp/rsl">https://svn.open-mpi.org/svn/ompi/tmp/rsl</a>) which everyone is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; welcome to look at and comment on, but be advised that things here are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subject to change (I don't think it even compiles right now). There are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some fairly large open questions on this, including:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. How to handle mpirun (that is, when a user types 'mpirun', do they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always get ORTE, or do they sometimes get a system specific runtime). Most
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely mpirun will always use ORTE, and alternative launching programs would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be used for other runtimes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Whether there will be any performance implications. My guess is not,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but am not quite sure of this yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, I am interested in people's comments on whether they think adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such abstraction is good or not, and whether it is reasonable to do such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing for v1.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Prins
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2248.php">Jeff Squyres: "[OMPI devel] Patch for reporter and friends"</a>
<li><strong>Previous message:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2229.php">Tim Prins: "Re: [OMPI devel] [devel-core]  [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2208.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
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
