<?
$subject_val = "[OMPI devel] [RFC] Hierarchical Topology";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 07:02:04 2010" -->
<!-- isoreceived="20101115120204" -->
<!-- sent="Mon, 15 Nov 2010 12:56:53 +0100 (CET)" -->
<!-- isosent="20101115115653" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Hierarchical Topology" -->
<!-- id="alpine.DEB.2.00.1011151245360.1631_at_jeaugeys" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] Hierarchical Topology<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 06:56:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8676.php">Jeff Squyres: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a followup of Stuttgart's developper's meeting, here is an RFC for our 
<br>
topology detection framework.
<br>
<p>WHAT: Add a framework for hardware topology detection to be used by any 
<br>
other part of Open MPI to help optimization.
<br>
<p>WHY: Collective operations or shared memory algorithms among others may 
<br>
have optimizations depending on the hardware relationship between two MPI 
<br>
processes. HiTopo is an attempt to provide it in a unified manner.
<br>
<p>WHERE: ompi/mca/hitopo/
<br>
<p>WHEN: When wanted.
<br>
<p>==========================================================================
<br>
We developped the HiTopo framework for our collective operation component, 
<br>
but it may be useful for other parts of Open MPI, so we'd like to 
<br>
contribute it.
<br>
<p>A wiki page has been setup :
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/HiTopo">https://svn.open-mpi.org/trac/ompi/wiki/HiTopo</a>
<br>
<p>and a bitbucket repository :
<br>
<a href="http://bitbucket.org/jeaugeys/hitopo/">http://bitbucket.org/jeaugeys/hitopo/</a>
<br>
<p>In a few words, we have 3 steps in HiTopo :
<br>
<p>&nbsp;&nbsp;- Detection : each MPI process detects its topology at various levels :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- core/socket : through the cpuid component
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- node : through gethostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- switch/island : through openib (mad) or slurm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ Other topology detection components may be added for other
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;resource managers, specific hardware or whatever we want ...]
<br>
<p>&nbsp;&nbsp;- Collection : an allgather is performed to have all other processes' 
<br>
addresses
<br>
<p>&nbsp;&nbsp;- Renumbering : &quot;string&quot; addresses are converted to numbers starting at 0 
<br>
(Example : nodenames &quot;foo&quot; and &quot;bar&quot; are renamed 0 and 1).
<br>
<p>Any comment welcome,
<br>
Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Previous message:</strong> <a href="8676.php">Jeff Squyres: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
<li><strong>Reply:</strong> <a href="8678.php">Terry Dontje: "Re: [OMPI devel] [RFC] Hierarchical Topology"</a>
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
