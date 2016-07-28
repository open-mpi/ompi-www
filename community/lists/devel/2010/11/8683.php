<?
$subject_val = "Re: [OMPI devel] [RFC] Hierarchical Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 03:28:58 2010" -->
<!-- isoreceived="20101116082858" -->
<!-- sent="Tue, 16 Nov 2010 09:23:35 +0100 (CET)" -->
<!-- isosent="20101116082335" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Hierarchical Topology" -->
<!-- id="alpine.DEB.2.00.1011160902380.1631_at_jeaugeys" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AANLkTimUxinnpWkBwDnqF68+WfKWaWi9gwX2xy=2zZYK_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Hierarchical Topology<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 03:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8682.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8682.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 15 Nov 2010, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Guess I am a little confused. Every MPI process already has full knowledge
</span><br>
<span class="quotelev1">&gt; of what node all other processes are located on - this has been true for
</span><br>
<span class="quotelev1">&gt; quite a long time.
</span><br>
Ok, I didn't see that.
<br>
<p><span class="quotelev1">&gt; Once my work is complete, mpirun will have full knowledge of each node's
</span><br>
<span class="quotelev1">&gt; hardware resources. Terry will then use that in mpirun's mappers. The
</span><br>
<span class="quotelev1">&gt; resulting launch message will contain a full mapping of procs to cores -
</span><br>
<span class="quotelev1">&gt; i.e., every daemon will know the core placement of every process in the job.
</span><br>
<span class="quotelev1">&gt; That info will be passed down to each MPI proc. Thus, upon launch, every MPI
</span><br>
<span class="quotelev1">&gt; process will know not only the node for each process, but also the hardware
</span><br>
<span class="quotelev1">&gt; resources of that node, and the bindings of every process in the job to that
</span><br>
<span class="quotelev1">&gt; hardware.
</span><br>
Allright.
<br>
<p>Some things bug me however :
<br>
&nbsp;&nbsp;1. What if the placement has been done by a wrapper script or by the 
<br>
resource manager ? I.e. how do you know where MPI procs are located ?
<br>
&nbsp;&nbsp;2. How scalable is it ? I would think there an allgather with 1 process 
<br>
per node ; am I right ?
<br>
&nbsp;&nbsp;3. How is that information represented ? As a graph ?
<br>
<p><span class="quotelev1">&gt; So the only thing missing is the switch topology of the cluster (the
</span><br>
<span class="quotelev1">&gt; inter-node topology). We modified carto a while back to support input of
</span><br>
<span class="quotelev1">&gt; switch topology information, though I'm not sure how many people ever used
</span><br>
<span class="quotelev1">&gt; that capability - not much value in it so far. We just set it up so that
</span><br>
<span class="quotelev1">&gt; people could describe the topology, and then let carto compute hop distance.
</span><br>
Ok. I didn't know we also had some work on switches in carto.
<br>
<p><span class="quotelev1">&gt; HTH
</span><br>
This helps !
<br>
<p>So, I'm now wondering if both work, which would seem similar are really 
<br>
redundant. We though about this before starting hitopo, and since a graph 
<br>
didn't fit our needs, we started work towards computing an address. 
<br>
Perhaps hitopo addresses could be computed using hwloc's graph.
<br>
<p>I understand that for sm optimization, hwloc is richer. The only thing 
<br>
that bugs me is how much time it takes to figure out what capability I 
<br>
have between process A and B. The great thing in hitopo is that a single 
<br>
comparison can give you a property of two processes (e.g. they are on the 
<br>
same socket).
<br>
<p>Anyway, I just wanted to present hitopo in case someone would need it. And 
<br>
I think hitopo's prefered domain remains collectives, where you do not 
<br>
really need distances, but groups which share a certain locality.
<br>
<p>Sylvain
<br>
<p><span class="quotelev1">&gt; On Mon, Nov 15, 2010 at 9:00 AM, Sylvain Jeaugey
</span><br>
<span class="quotelev1">&gt; &lt;sylvain.jeaugey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I already mentionned it answering Terry's e-mail, but to be sure I'm clear
</span><br>
<span class="quotelev2">&gt;&gt; : don't confuse node full topology with MPI job topology. It _is_ different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And every process does not get the whole topology in hitopo, only its own,
</span><br>
<span class="quotelev2">&gt;&gt; which should not cause storms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 15 Nov 2010, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I think the two efforts (the paffinity and this one) do overlap somewhat.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been writing the local topology discovery code for Jeff, Terry, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh - uses hwloc (or any other method - it's a framework) to discover
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hardware resources are available on each node in the job so that the info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can be used in mapping the procs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As part of that work, we are passing down to the mpi processes the local
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hardware topology. This is done because of prior complaints when we had
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi process discover that info for itself - it creates a bit of a &quot;storm&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the node of large smp's.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that what I've written (still to be completed before coming over)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't tell the proc what cores/HT's it is bound to - that's the part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry
</span><br>
<span class="quotelev3">&gt;&gt;&gt; et al are adding. Nor were we discovering the switch topology of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So a little overlap that could be resolved. And a concern on my part: we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have previously introduced capabilities that had every mpi process read
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local system files to get node topology, and gotten user complaints about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. We probably shouldn't go back to that practice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Nov 15, 2010 at 8:15 AM, Terry Dontje &lt;terry.dontje_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   A few comments:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.  Have you guys considered using hwloc for level 4-7 detection?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.  Is L2 related to L2 cache?  If no then is there some other term you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could use?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3.  What do you see if the process is bound to multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cores/hyperthreads?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4.  What do you see if the process is not bound to any level 4-7 items?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5.  What about L1 and L2 cache locality as some levels? (hwloc exposes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these but these are also at different depths depending on the platform).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note I am working with Jeff Squyres and Josh Hursey on some new paffinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code that uses hwloc.  Though the paffinity code may not have direct
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; relationship to hitopo the use of hwloc and standardization of what you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; level 4-7 might help avoid some user confusions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 11/15/2010 06:56 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As a followup of Stuttgart's developper's meeting, here is an RFC for our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; topology detection framework.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Add a framework for hardware topology detection to be used by any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other part of Open MPI to help optimization.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: Collective operations or shared memory algorithms among others may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have optimizations depending on the hardware relationship between two MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes. HiTopo is an attempt to provide it in a unified manner.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: ompi/mca/hitopo/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN: When wanted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==========================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We developped the HiTopo framework for our collective operation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; component,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it may be useful for other parts of Open MPI, so we'd like to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contribute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A wiki page has been setup :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/HiTopo">https://svn.open-mpi.org/trac/ompi/wiki/HiTopo</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and a bitbucket repository :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/jeaugeys/hitopo/">http://bitbucket.org/jeaugeys/hitopo/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In a few words, we have 3 steps in HiTopo :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  - Detection : each MPI process detects its topology at various levels :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    - core/socket : through the cpuid component
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    - node : through gethostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    - switch/island : through openib (mad) or slurm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      [ Other topology detection components may be added for other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        resource managers, specific hardware or whatever we want ...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  - Collection : an allgather is performed to have all other processes'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; addresses
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  - Renumbering : &quot;string&quot; addresses are converted to numbers starting at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Example : nodenames &quot;foo&quot; and &quot;bar&quot; are renamed 0 and 1).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any comment welcome,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [image: Oracle]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8682.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8682.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8684.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
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
