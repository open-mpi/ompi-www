<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 16 11:25:34 2005" -->
<!-- isoreceived="20050816162534" -->
<!-- sent="Tue, 16 Aug 2005 12:25:32 -0400" -->
<!-- isosent="20050816162532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="processor affinity" -->
<!-- id="ec5f979974089881fd1cf60de9597546_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-16 11:25:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0157.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Processor affinity is now implemented.  You must ask for it via the MCA 
<br>
param &quot;mpi_paffinity_alone&quot;.  If this parameter is set to a nonzero 
<br>
value, OMPI will assume that its job is alone on the nodes that it is 
<br>
running on, and, if you have not oversubscribed the node, will bind MPI 
<br>
processes to processors, starting with processor ID 0 (i.e., 
<br>
effectively bindings MPI processes to the processor number equivalent 
<br>
to their relative VPID on that node).
<br>
<p>Please let me know how this works out for everyone; thanks.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0157.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
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
