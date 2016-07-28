<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 20:55:31 2007" -->
<!-- isoreceived="20070627005531" -->
<!-- sent="Tue, 26 Jun 2007 18:55:16 -0600" -->
<!-- isosent="20070627005516" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex" -->
<!-- id="ED8D23B1-B57E-427A-8892-FBA0FF2984E2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706262008.29965.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 20:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 26, 2007, at 6:08 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Some time ago you were working on moving the modex out of the pml  
</span><br>
<span class="quotelev1">&gt; and cleaning
</span><br>
<span class="quotelev1">&gt; it up a bit. Is this work still ongoing? The reason I ask is that I am
</span><br>
<span class="quotelev1">&gt; currently working on integrating the RSL, and would rather build on  
</span><br>
<span class="quotelev1">&gt; the new
</span><br>
<span class="quotelev1">&gt; code rather than the old...
</span><br>
<p>Tim Prins brings up a point I keep meaning to ask the group about.  A  
<br>
long time ago in a galaxy far, far away (aka, last fall), Galen and I  
<br>
started working on the BTL / PML redesign that morphed into some  
<br>
smaller changes, including some interesting IB work.  Anyway, I  
<br>
rewrote large chunks of the modex, which did a couple of things:
<br>
<p>* Moved the modex out of the pml base and into the general OMPI code  
<br>
(renaming
<br>
&nbsp;&nbsp;&nbsp;the functions in the process)
<br>
* Fixed the hang if a btl doesn't publish contact information (we  
<br>
wait until we
<br>
&nbsp;&nbsp;&nbsp;receive a key pushed into the modex at the end of MPI_INIT)
<br>
* Tried to reduce the number of required memory copies in the interface
<br>
<p>It's a fairly big change, in that all the BTLs have to be updated due  
<br>
to the function name differences.  It's fairly well tested, and would  
<br>
be really nice for dealing with platforms where there are different  
<br>
networks on different machines.  If no one has any objections, I'll  
<br>
probably do this next week...
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1774.php">Gleb Natapov: "Re: [OMPI devel] Improve OB1 performance when multiple NICs are available"</a>
<li><strong>Previous message:</strong> <a href="1772.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
<li><strong>Reply:</strong> <a href="1776.php">Terry D. Dontje: "Re: [OMPI devel] Modex"</a>
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
