<?
$subject_val = "Re: [OMPI devel] [RFC] Hierarchical Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 10:17:15 2010" -->
<!-- isoreceived="20101115151715" -->
<!-- sent="Mon, 15 Nov 2010 10:15:17 -0500" -->
<!-- isosent="20101115151517" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Hierarchical Topology" -->
<!-- id="4CE14E85.70205_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1011151245360.1631_at_jeaugeys" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 10:15:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8677.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8677.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8680.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few comments:
<br>
<p>1.  Have you guys considered using hwloc for level 4-7 detection?
<br>
2.  Is L2 related to L2 cache?  If no then is there some other term you 
<br>
could use?
<br>
3.  What do you see if the process is bound to multiple cores/hyperthreads?
<br>
4.  What do you see if the process is not bound to any level 4-7 items?
<br>
5.  What about L1 and L2 cache locality as some levels? (hwloc exposes 
<br>
these but these are also at different depths depending on the platform).
<br>
<p>Note I am working with Jeff Squyres and Josh Hursey on some new 
<br>
paffinity code that uses hwloc.  Though the paffinity code may not have 
<br>
direct relationship to hitopo the use of hwloc and standardization of 
<br>
what you call level 4-7 might help avoid some user confusions.
<br>
<p>--td
<br>
<p>On 11/15/2010 06:56 AM, Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; As a followup of Stuttgart's developper's meeting, here is an RFC for 
</span><br>
<span class="quotelev1">&gt; our topology detection framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Add a framework for hardware topology detection to be used by 
</span><br>
<span class="quotelev1">&gt; any other part of Open MPI to help optimization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Collective operations or shared memory algorithms among others 
</span><br>
<span class="quotelev1">&gt; may have optimizations depending on the hardware relationship between 
</span><br>
<span class="quotelev1">&gt; two MPI processes. HiTopo is an attempt to provide it in a unified 
</span><br>
<span class="quotelev1">&gt; manner.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We developped the HiTopo framework for our collective operation 
</span><br>
<span class="quotelev1">&gt; component, but it may be useful for other parts of Open MPI, so we'd 
</span><br>
<span class="quotelev1">&gt; like to contribute it.
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
<span class="quotelev1">&gt;  - Renumbering : &quot;string&quot; addresses are converted to numbers starting 
</span><br>
<span class="quotelev1">&gt; at 0 (Example : nodenames &quot;foo&quot; and &quot;bar&quot; are renamed 0 and 1).
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-8678/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8677.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>In reply to:</strong> <a href="8677.php">Sylvain Jeaugey: "[OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8679.php">Ralph Castain: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8680.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
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
