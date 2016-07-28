<?
$subject_val = "Re: [OMPI devel] [RFC] Hierarchical Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 07:58:45 2010" -->
<!-- isoreceived="20101116125845" -->
<!-- sent="Tue, 16 Nov 2010 05:58:38 -0700" -->
<!-- isosent="20101116125838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Hierarchical Topology" -->
<!-- id="AANLkTi=Vkpp3gH3+JWfeW7HqbHYQb8oTAK3YuebrO4Ku_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1011160902380.1631_at_jeaugeys" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 07:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8685.php">Sébastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8683.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8683.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8680.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov 16, 2010 at 1:23 AM, Sylvain Jeaugey
<br>
&lt;sylvain.jeaugey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 15 Nov 2010, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Guess I am a little confused. Every MPI process already has full knowledge
</span><br>
<span class="quotelev2">&gt;&gt; of what node all other processes are located on - this has been true for
</span><br>
<span class="quotelev2">&gt;&gt; quite a long time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok, I didn't see that.
</span><br>
<p><p><p>It's in the ess. There are two relevant API's there:
<br>
<p>1. proc_get_locality tells you the relative locality of the specified proc.
<br>
It returns a bit mask that you can test with the defined values in
<br>
opal/mca/paffinity/paffinity.h - e.g., OPAL_PROC_ON_SOCKET.
<br>
<p>2. proc_get_nodename returns the name of the node where that proc is
<br>
located.
<br>
<p>Both of these APIs are called by various parts of OMPI - e.g., to initialize
<br>
the OMPI proc structs and setup shared memory.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Once my work is complete, mpirun will have full knowledge of each node's
</span><br>
<span class="quotelev2">&gt;&gt; hardware resources. Terry will then use that in mpirun's mappers. The
</span><br>
<span class="quotelev2">&gt;&gt; resulting launch message will contain a full mapping of procs to cores -
</span><br>
<span class="quotelev2">&gt;&gt; i.e., every daemon will know the core placement of every process in the
</span><br>
<span class="quotelev2">&gt;&gt; job.
</span><br>
<span class="quotelev2">&gt;&gt; That info will be passed down to each MPI proc. Thus, upon launch, every
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; process will know not only the node for each process, but also the
</span><br>
<span class="quotelev2">&gt;&gt; hardware
</span><br>
<span class="quotelev2">&gt;&gt; resources of that node, and the bindings of every process in the job to
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; hardware.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Allright.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some things bug me however :
</span><br>
<span class="quotelev1">&gt;  1. What if the placement has been done by a wrapper script or by the
</span><br>
<span class="quotelev1">&gt; resource manager ? I.e. how do you know where MPI procs are located ?
</span><br>
<p>&nbsp;2. How scalable is it ? I would think there an allgather with 1 process per
<br>
<span class="quotelev1">&gt; node ; am I right ?
</span><br>
<span class="quotelev1">&gt;  3. How is that information represented ? As a graph ?
</span><br>
<p><p>There are two scenarios to consider. When we launch by daemons, each daemon
<br>
already uses a collective operation to send back the local node topology
<br>
info - all we are doing is adding some deeper levels to the existing
<br>
operation as hwloc provides more info than our current sysinfo framework
<br>
components. We are then changing the ordering of the operations during
<br>
launch - in this mode (i.e., mapping based on topology), we launch daemons
<br>
on all nodes in the allocation, and then do the mapping. So once the daemon
<br>
collective returns the topology info, we map the procs, construct the launch
<br>
msg, and then use the grpcomm collective operation to send that msg to all
<br>
daemons. All we are doing is adding the topology and detailed mapping
<br>
(bindings, in particular) to that launch msg.
<br>
<p>When we launch directly (e.g., launching the apps by srun instead of using
<br>
mpirun), the apps use the hierarchical grpcomm during orte_init to perform
<br>
their initial modex. This is a collective operation that uses the same basic
<br>
algos currently included in the MPI collective layer (i.e., all local ranks
<br>
<span class="quotelev1">&gt; 0 send to the local_rank=0 proc, that proc engages in a collective with
</span><br>
all other local_rank=0 procs, and then distributes the results locally). As
<br>
part of the exchanged info, we already includes the nodename. My intent was
<br>
to (a) have the local_rank=0 procs do the local node topology discovery and
<br>
include that info in the modex, and (b) have each proc include its affinity
<br>
mask in the info. So at the end of modex, everyone has the full info.
<br>
<p>Bottom line here is that we are not adding any communications to the
<br>
existing system. We are simply adding the topology info to the existing
<br>
startup mechanisms. Thus, we can accomplish the exchange of topology info
<br>
within the current communications.
<br>
<p>The data is currently represented in a simple array. You call the orte ess
<br>
APIs to extract it, as per above. If it was helpful, we can always construct
<br>
a graph or some other representation from the data.
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So the only thing missing is the switch topology of the cluster (the
</span><br>
<span class="quotelev2">&gt;&gt; inter-node topology). We modified carto a while back to support input of
</span><br>
<span class="quotelev2">&gt;&gt; switch topology information, though I'm not sure how many people ever used
</span><br>
<span class="quotelev2">&gt;&gt; that capability - not much value in it so far. We just set it up so that
</span><br>
<span class="quotelev2">&gt;&gt; people could describe the topology, and then let carto compute hop
</span><br>
<span class="quotelev2">&gt;&gt; distance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok. I didn't know we also had some work on switches in carto.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  HTH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; This helps !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'm now wondering if both work, which would seem similar are really
</span><br>
<span class="quotelev1">&gt; redundant. We though about this before starting hitopo, and since a graph
</span><br>
<span class="quotelev1">&gt; didn't fit our needs, we started work towards computing an address. Perhaps
</span><br>
<span class="quotelev1">&gt; hitopo addresses could be computed using hwloc's graph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It would seem that hitopo duplicates some existing functionality that you
<br>
may not have realized exists. Some of the new functionality appears
<br>
redundant, but I personally would be concerned that hitopo introduces
<br>
additional communications instead of piggybacking on the existing operations
<br>
such as modex and the launch msg. Some of that may be caused by wanting to
<br>
include interface info via tapping into the BTLs, which would require doing
<br>
it from the MPI layer. However, that info could still be shared in the
<br>
existing modex (thus avoiding additional comm), and may also be obtainable
<br>
through a combination of hwloc and affinity knowledge.
<br>
<p><p><p><span class="quotelev1">&gt; I understand that for sm optimization, hwloc is richer. The only thing that
</span><br>
<span class="quotelev1">&gt; bugs me is how much time it takes to figure out what capability I have
</span><br>
<span class="quotelev1">&gt; between process A and B. The great thing in hitopo is that a single
</span><br>
<span class="quotelev1">&gt; comparison can give you a property of two processes (e.g. they are on the
</span><br>
<span class="quotelev1">&gt; same socket).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No effort is required. You should be able to do this with a call to
<br>
orte_ess.proc_get_locality to retrieve the data entry and then test against
<br>
OPAL_PROC_ON_SOCKET. You can certainly get it right now at the node level,
<br>
and we could add socket level with little effort (the daemon knows the
<br>
socket and core info for its own local procs - we just don't pass it down as
<br>
nobody cared).  Adding that knowledge for the global job only requires the
<br>
exchange of locality info in the modex (for direct launch), or having it
<br>
passed down by the daemon (who will soon know that info as well).
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I just wanted to present hitopo in case someone would need it. And
</span><br>
<span class="quotelev1">&gt; I think hitopo's prefered domain remains collectives, where you do not
</span><br>
<span class="quotelev1">&gt; really need distances, but groups which share a certain locality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mon, Nov 15, 2010 at 9:00 AM, Sylvain Jeaugey
</span><br>
<span class="quotelev2">&gt;&gt; &lt;sylvain.jeaugey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I already mentionned it answering Terry's e-mail, but to be sure I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clear
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : don't confuse node full topology with MPI job topology. It _is_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And every process does not get the whole topology in hitopo, only its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; own,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which should not cause storms.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 15 Nov 2010, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I think the two efforts (the paffinity and this one) do overlap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somewhat.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've been writing the local topology discovery code for Jeff, Terry, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh - uses hwloc (or any other method - it's a framework) to discover
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hardware resources are available on each node in the job so that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can be used in mapping the procs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As part of that work, we are passing down to the mpi processes the local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hardware topology. This is done because of prior complaints when we had
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi process discover that info for itself - it creates a bit of a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;storm&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the node of large smp's.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that what I've written (still to be completed before coming over)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't tell the proc what cores/HT's it is bound to - that's the part
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; et al are adding. Nor were we discovering the switch topology of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So a little overlap that could be resolved. And a concern on my part: we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have previously introduced capabilities that had every mpi process read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; local system files to get node topology, and gotten user complaints
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it. We probably shouldn't go back to that practice.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Nov 15, 2010 at 8:15 AM, Terry Dontje &lt;terry.dontje_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  A few comments:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.  Have you guys considered using hwloc for level 4-7 detection?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2.  Is L2 related to L2 cache?  If no then is there some other term you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; could use?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3.  What do you see if the process is bound to multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cores/hyperthreads?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4.  What do you see if the process is not bound to any level 4-7 items?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 5.  What about L1 and L2 cache locality as some levels? (hwloc exposes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; these but these are also at different depths depending on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; platform).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note I am working with Jeff Squyres and Josh Hursey on some new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; paffinity
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; code that uses hwloc.  Though the paffinity code may not have direct
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; relationship to hitopo the use of hwloc and standardization of what you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; level 4-7 might help avoid some user confusions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 11/15/2010 06:56 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As a followup of Stuttgart's developper's meeting, here is an RFC for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; topology detection framework.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT: Add a framework for hardware topology detection to be used by any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; other part of Open MPI to help optimization.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY: Collective operations or shared memory algorithms among others may
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have optimizations depending on the hardware relationship between two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes. HiTopo is an attempt to provide it in a unified manner.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE: ompi/mca/hitopo/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHEN: When wanted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==========================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We developped the HiTopo framework for our collective operation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; component,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but it may be useful for other parts of Open MPI, so we'd like to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; contribute
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A wiki page has been setup :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/HiTopo">https://svn.open-mpi.org/trac/ompi/wiki/HiTopo</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and a bitbucket repository :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/jeaugeys/hitopo/">http://bitbucket.org/jeaugeys/hitopo/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In a few words, we have 3 steps in HiTopo :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  - Detection : each MPI process detects its topology at various levels
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   - core/socket : through the cpuid component
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   - node : through gethostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   - switch/island : through openib (mad) or slurm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     [ Other topology detection components may be added for other
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       resource managers, specific hardware or whatever we want ...]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  - Collection : an allgather is performed to have all other processes'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; addresses
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  - Renumbering : &quot;string&quot; addresses are converted to numbers starting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Example : nodenames &quot;foo&quot; and &quot;bar&quot; are renamed 0 and 1).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any comment welcome,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8685.php">Sébastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8683.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8683.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8680.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
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
