<?
$subject_val = "Re: [OMPI devel] [RFC] Hierarchical Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 10:58:19 2010" -->
<!-- isoreceived="20101115155819" -->
<!-- sent="Mon, 15 Nov 2010 16:53:04 +0100 (CET)" -->
<!-- isosent="20101115155304" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Hierarchical Topology" -->
<!-- id="alpine.DEB.2.00.1011151615410.1631_at_jeaugeys" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4CE14E85.70205_at_oracle.com" -->
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
<strong>Date:</strong> 2010-11-15 10:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8681.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 15 Nov 2010, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; A few comments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  Have you guys considered using hwloc for level 4-7 detection?
</span><br>
Yes, and I agree there may be something to improve on level 4-7 detection. 
<br>
But note that hitopo differs from hwloc because it is not discovering the 
<br>
whole machine, only where MPI processes have been spawned. More on this 
<br>
after.
<br>
<p><span class="quotelev1">&gt; 2.  Is L2 related to L2 cache?  If no then is there some other term you could 
</span><br>
<span class="quotelev1">&gt; use?
</span><br>
It is not L2 cache. However, claiming that L2 is always related to L2 
<br>
cache is a bit exagerated in my opinion. The term in hitopo is &quot;L2NUMA&quot; 
<br>
which seems clear to me. And there are L2 Infiniband switches, L2 
<br>
support, ... :-)
<br>
<p><span class="quotelev1">&gt; 3.  What do you see if the process is bound to multiple cores/hyperthreads?
</span><br>
<span class="quotelev1">&gt; 4.  What do you see if the process is not bound to any level 4-7 items?
</span><br>
Currently (and this is not optimal), as soon as the process is not bound 
<br>
to 1 core, the cpuid component returns nothing (no socket, no core). We 
<br>
could improving this by returning only the socket when we are bound to a 
<br>
socket.
<br>
<p>When placement is not per-core, socket number will therefore be 0 and core 
<br>
number will be renumbered by the &quot;renumber&quot; phase from 0 to N (N being the 
<br>
number of MPI processes on the node).
<br>
<p>Hyperthread are only used if two processes are bound on the same core (the 
<br>
renumber phase will mark them as 0, 1, ...).
<br>
<p><span class="quotelev1">&gt; 5.  What about L1 and L2 cache locality as some levels? (hwloc exposes these 
</span><br>
<span class="quotelev1">&gt; but these are also at different depths depending on the platform).
</span><br>
This is something hitopo doesn't [want to] show. But we could imagine 
<br>
calling hwloc to know what are the properties of MPI process on the same 
<br>
core/socket/...
<br>
<p><span class="quotelev1">&gt; Note I am working with Jeff Squyres and Josh Hursey on some new paffinity 
</span><br>
<span class="quotelev1">&gt; code that uses hwloc.  Though the paffinity code may not have direct 
</span><br>
<span class="quotelev1">&gt; relationship to hitopo the use of hwloc and standardization of what you call 
</span><br>
<span class="quotelev1">&gt; level 4-7 might help avoid some user confusions.
</span><br>
I agree there is a big potential for confusion between hwloc, carto, 
<br>
hitopo, ... One could think we should mutualise code, which is often not 
<br>
possible or not what we want.
<br>
<p>My (maybe incorrect) vision is that hwloc and carto discover the hardware 
<br>
topology, i.e. what exists on the node (not what will be used). This is 
<br>
used by placement modules or btls to know what resources to use when 
<br>
launching processes.
<br>
<p>HiTopo provides where (inside this discovery) MPI process end up being 
<br>
spawned [btw, not only intra-node but also inter-node]. We could get this 
<br>
information from Open MPI components that do the spawning, but since it is 
<br>
not enough (resource manager may do part of the binding), we re-do the 
<br>
discovery in the end.
<br>
<p>To sum up, here is the complete picture as I see it :
<br>
<p>[ 0. Resource manager restricts node/cpu/io/mem sets ]
<br>
&nbsp;&nbsp;&nbsp;1. Hwloc discovers what's available for intra-node
<br>
&nbsp;&nbsp;&nbsp;2. Spawning/placement is done by a combination of RMs, paffinity, ...
<br>
&nbsp;&nbsp;&nbsp;3. HiTopo discovers what is used from intra- to inter- node.
<br>
<p>Sylvain
<br>
<p><span class="quotelev1">&gt; On 11/15/2010 06:56 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As a followup of Stuttgart's developper's meeting, here is an RFC for our 
</span><br>
<span class="quotelev2">&gt;&gt; topology detection framework.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Add a framework for hardware topology detection to be used by any 
</span><br>
<span class="quotelev2">&gt;&gt; other part of Open MPI to help optimization.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Collective operations or shared memory algorithms among others may 
</span><br>
<span class="quotelev2">&gt;&gt; have optimizations depending on the hardware relationship between two MPI 
</span><br>
<span class="quotelev2">&gt;&gt; processes. HiTopo is an attempt to provide it in a unified manner.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ompi/mca/hitopo/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: When wanted.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ========================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; We developped the HiTopo framework for our collective operation component, 
</span><br>
<span class="quotelev2">&gt;&gt; but it may be useful for other parts of Open MPI, so we'd like to 
</span><br>
<span class="quotelev2">&gt;&gt; contribute it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A wiki page has been setup :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/HiTopo">https://svn.open-mpi.org/trac/ompi/wiki/HiTopo</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and a bitbucket repository :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitbucket.org/jeaugeys/hitopo/">http://bitbucket.org/jeaugeys/hitopo/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In a few words, we have 3 steps in HiTopo :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - Detection : each MPI process detects its topology at various levels :
</span><br>
<span class="quotelev2">&gt;&gt;     - core/socket : through the cpuid component
</span><br>
<span class="quotelev2">&gt;&gt;     - node : through gethostname
</span><br>
<span class="quotelev2">&gt;&gt;     - switch/island : through openib (mad) or slurm
</span><br>
<span class="quotelev2">&gt;&gt;       [ Other topology detection components may be added for other
</span><br>
<span class="quotelev2">&gt;&gt;         resource managers, specific hardware or whatever we want ...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - Collection : an allgather is performed to have all other processes' 
</span><br>
<span class="quotelev2">&gt;&gt; addresses
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - Renumbering : &quot;string&quot; addresses are converted to numbers starting at 0 
</span><br>
<span class="quotelev2">&gt;&gt; (Example : nodenames &quot;foo&quot; and &quot;bar&quot; are renamed 0 and 1).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any comment welcome,
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8681.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
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
