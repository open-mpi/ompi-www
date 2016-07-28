<?
$subject_val = "[OMPI devel] RFC: Component-izing MPI_Op";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 08:42:10 2009" -->
<!-- isoreceived="20090105134210" -->
<!-- sent="Mon, 5 Jan 2009 08:42:04 -0500" -->
<!-- isosent="20090105134204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Component-izing MPI_Op" -->
<!-- id="4CEC64CB-B497-469A-ACCB-3966A0934341_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Component-izing MPI_Op<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 08:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Previous message:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Converting the back-end of MPI_Op's to use components instead of  
<br>
hard-coded C functions.
<br>
<p>WHY: To support specialized hardware (such as GPUs).
<br>
<p>WHERE: Changes most of the MPI_Op code, adds a new ompi/mca/op  
<br>
framework.
<br>
<p>WHEN: Work has started in an hg branch (<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/cuda/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/cuda/</a> 
<br>
).
<br>
<p>TIMEOUT: Next Tuesday's teleconference, Jan 13 2008.
<br>
<p>---------------------------------------
<br>
<p>Note: I don't plan to finish the work by Jan 13; I just want to get a  
<br>
yea/nay from the community on the concept.  Final review of the code  
<br>
before coming into the trunk can come later when I have more work to  
<br>
show / review.
<br>
<p>Background: Today, the back-end MPI_Op functionality of (MPI_Op,  
<br>
MPI_Datatype) tuples are implemented as function pointers to a series  
<br>
of hard-coded C functions in the ompi/op/ directory.
<br>
<p>&nbsp;&nbsp;&nbsp;*** NOTE: Since we already implement MPI_Op functionality via  
<br>
function pointer, this proposed extension is not expected to cause any  
<br>
performance difference in terms of OMPI's infrastructure.
<br>
<p>Proposal: Extend the current implementation by creating a new  
<br>
framework (&quot;op&quot;) that allows components to provide back-end MPI_Op  
<br>
functions instead of/in addition to the hard-coded C functions (we've  
<br>
talked about this idea before, but never done it).
<br>
<p>The &quot;op&quot; framework will be similar to the MPI coll framework in that  
<br>
individual function pointers from multiple different modules can be  
<br>
mixed-n-matched.  For example, if you want to write a new coll  
<br>
component that implements *only* a new MPI_BCAST algorithm, that coll  
<br>
component can be mixed-n-matched with other coll components at run  
<br>
time to get a full set of collective implementations on a  
<br>
communicator.  A similar concept will be applied to the &quot;op&quot;  
<br>
framework.  Case in point: some specialized hardware is only good at  
<br>
*some* operations on *some* datatypes; we'll need to fall back to the  
<br>
hard-coded C versions for all other tuples.
<br>
<p>It is likely that the the &quot;op&quot; framework base will have all the hard- 
<br>
coded C &quot;basic&quot; MPI_Op functions that will always be available for  
<br>
fallback if a component is not used at run-time for a specialized  
<br>
implementation.  Specifically: the intent is that components will be  
<br>
for specialized implementations.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Previous message:</strong> <a href="5090.php">Rolf Vandevaart: "Re: [OMPI devel] LOCK_SHARED?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5092.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
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
