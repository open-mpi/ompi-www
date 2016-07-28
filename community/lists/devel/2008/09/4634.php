<?
$subject_val = "[OMPI devel] MPI ABI on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 14:44:37 2008" -->
<!-- isoreceived="20080908184437" -->
<!-- sent="Mon, 8 Sep 2008 14:44:28 -0400" -->
<!-- isosent="20080908184428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI ABI on Linux" -->
<!-- id="7B520704-FBF5-475B-A74D-3C0437F9D0FD_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI ABI on Linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-08 14:44:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
==============
<br>
<p>Does anyone in the OMPI community want to work on a 6-function MPI  
<br>
proof-of-concept for an MPI ABI on Linux, collaborating with Intel MPI?
<br>
<p>Longer version:
<br>
===============
<br>
<p>At the MPI Forum meeting in Dublin, the MPI ABI meeting was... er...  
<br>
shall we say, &quot;spirited.&quot;  :-)  Both the benefits and drawbacks of an  
<br>
MPI ABI are widely contended (it's a surprisingly complex topic).
<br>
<p>Several items were decided by the end of the ABI meeting.  The  
<br>
following is an abbreviated list; see the ABI working group's summary  
<br>
slide presentation for a more complete list:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://meetings.mpi-forum.org/secretary/2008/09/slides/MPI-Forum-ABI-WG-session.pdf">http://meetings.mpi-forum.org/secretary/2008/09/slides/MPI-Forum-ABI-WG-session.pdf</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; In particular, see slide 8
<br>
<p>- If it is ever completed, MPI ABI compliance will be a separate  
<br>
entity from the MPI 2.x and 3.x standards.  ABI compliance will be a  
<br>
checkmark for an MPI implementation, but will be unrelated to an  
<br>
implementation's 2.1, 2.2, 3.0, ...etc. compliance.
<br>
<p>- Microsoft and Intel MPI will go off and try to implement a 6- 
<br>
function MPI ABI morph layer for Windows-based MPI implementations.   
<br>
The goal is to report back on the progress for the December MPI Forum  
<br>
meeting (i.e., after SC08).
<br>
<p>- Intel MPI has volunteered to work with another Linux MPI  
<br>
implementation to do the same (proof of concept 6-function MPI ABI  
<br>
morph layer for the Dec Forum meeting).
<br>
<p>*** I was asked if Open MPI would be the 2nd Linux MPI (the Argonne/ 
<br>
MPICH crew has already said &quot;no&quot;).  I said that I did not have any  
<br>
cycles/priority to work on this, but that I would ask the rest of the  
<br>
OMPI community to see if anyone else wanted to.  Does anyone want to  
<br>
work with Intel MPI on this project?
<br>
<p>(we can discuss this on the call tomorrow in detail, if desired)
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
<li><strong>Next message:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4633.php">Lenny Verkhovsky: "Re: [OMPI devel] allocating sm memory with page alignment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
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
