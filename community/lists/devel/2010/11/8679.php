<?
$subject_val = "Re: [OMPI devel] [RFC] Hierarchical Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 10:37:00 2010" -->
<!-- isoreceived="20101115153700" -->
<!-- sent="Mon, 15 Nov 2010 08:36:55 -0700" -->
<!-- isosent="20101115153655" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Hierarchical Topology" -->
<!-- id="AANLkTinCKSBaO-GS9adGFCRJ4V2kN=kwYoeucfJvK=m0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 10:36:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8680.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8681.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8681.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the two efforts (the paffinity and this one) do overlap somewhat.
<br>
I've been writing the local topology discovery code for Jeff, Terry, and
<br>
Josh - uses hwloc (or any other method - it's a framework) to discover what
<br>
hardware resources are available on each node in the job so that the info
<br>
can be used in mapping the procs.
<br>
<p>As part of that work, we are passing down to the mpi processes the local
<br>
hardware topology. This is done because of prior complaints when we had each
<br>
mpi process discover that info for itself - it creates a bit of a &quot;storm&quot; on
<br>
the node of large smp's.
<br>
<p>Note that what I've written (still to be completed before coming over)
<br>
doesn't tell the proc what cores/HT's it is bound to - that's the part Terry
<br>
et al are adding. Nor were we discovering the switch topology of the
<br>
cluster.
<br>
<p>So a little overlap that could be resolved. And a concern on my part: we
<br>
have previously introduced capabilities that had every mpi process read
<br>
local system files to get node topology, and gotten user complaints about
<br>
it. We probably shouldn't go back to that practice.
<br>
<p>Ralph
<br>
<p><p>On Mon, Nov 15, 2010 at 8:15 AM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  A few comments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  Have you guys considered using hwloc for level 4-7 detection?
</span><br>
<span class="quotelev1">&gt; 2.  Is L2 related to L2 cache?  If no then is there some other term you
</span><br>
<span class="quotelev1">&gt; could use?
</span><br>
<span class="quotelev1">&gt; 3.  What do you see if the process is bound to multiple cores/hyperthreads?
</span><br>
<span class="quotelev1">&gt; 4.  What do you see if the process is not bound to any level 4-7 items?
</span><br>
<span class="quotelev1">&gt; 5.  What about L1 and L2 cache locality as some levels? (hwloc exposes
</span><br>
<span class="quotelev1">&gt; these but these are also at different depths depending on the platform).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note I am working with Jeff Squyres and Josh Hursey on some new paffinity
</span><br>
<span class="quotelev1">&gt; code that uses hwloc.  Though the paffinity code may not have direct
</span><br>
<span class="quotelev1">&gt; relationship to hitopo the use of hwloc and standardization of what you call
</span><br>
<span class="quotelev1">&gt; level 4-7 might help avoid some user confusions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/15/2010 06:56 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a followup of Stuttgart's developper's meeting, here is an RFC for our
</span><br>
<span class="quotelev1">&gt; topology detection framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Add a framework for hardware topology detection to be used by any
</span><br>
<span class="quotelev1">&gt; other part of Open MPI to help optimization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Collective operations or shared memory algorithms among others may
</span><br>
<span class="quotelev1">&gt; have optimizations depending on the hardware relationship between two MPI
</span><br>
<span class="quotelev1">&gt; processes. HiTopo is an attempt to provide it in a unified manner.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mca/hitopo/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: When wanted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==========================================================================
</span><br>
<span class="quotelev1">&gt; We developped the HiTopo framework for our collective operation component,
</span><br>
<span class="quotelev1">&gt; but it may be useful for other parts of Open MPI, so we'd like to contribute
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A wiki page has been setup :
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/HiTopo">https://svn.open-mpi.org/trac/ompi/wiki/HiTopo</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and a bitbucket repository :
</span><br>
<span class="quotelev1">&gt; <a href="http://bitbucket.org/jeaugeys/hitopo/">http://bitbucket.org/jeaugeys/hitopo/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In a few words, we have 3 steps in HiTopo :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Detection : each MPI process detects its topology at various levels :
</span><br>
<span class="quotelev1">&gt;     - core/socket : through the cpuid component
</span><br>
<span class="quotelev1">&gt;     - node : through gethostname
</span><br>
<span class="quotelev1">&gt;     - switch/island : through openib (mad) or slurm
</span><br>
<span class="quotelev1">&gt;       [ Other topology detection components may be added for other
</span><br>
<span class="quotelev1">&gt;         resource managers, specific hardware or whatever we want ...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Collection : an allgather is performed to have all other processes'
</span><br>
<span class="quotelev1">&gt; addresses
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Renumbering : &quot;string&quot; addresses are converted to numbers starting at 0
</span><br>
<span class="quotelev1">&gt; (Example : nodenames &quot;foo&quot; and &quot;bar&quot; are renamed 0 and 1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any comment welcome,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8679/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8680.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8681.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8681.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
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
