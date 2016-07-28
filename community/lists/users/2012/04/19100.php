<?
$subject_val = "Re: [OMPI users] Optimal 3-D Cartesian processor mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 15:11:23 2012" -->
<!-- isoreceived="20120424191123" -->
<!-- sent="Tue, 24 Apr 2012 15:11:19 -0400" -->
<!-- isosent="20120424191119" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal 3-D Cartesian processor mapping" -->
<!-- id="609D1769-421E-4D2D-A160-3D02935F1736_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1335294098.5406.58.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Optimal 3-D Cartesian processor mapping<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 15:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Previous message:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19098.php">Tom Rosmond: "[OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2012, at 3:01 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; My question is this:  If the cartesian mapping is done so the two
</span><br>
<span class="quotelev1">&gt; spacial dimensions are the 'most rapidly varying' in equivalent 1-D
</span><br>
<span class="quotelev1">&gt; processor mapping, will Open-mpi automatically assign those 2 dimensions
</span><br>
<span class="quotelev1">&gt; 'on-node', and assign the 'ensemble' dimension as the slowest varying
</span><br>
<span class="quotelev1">&gt; and across nodes?  If not, how can we guarantee this to happen?
</span><br>
<p><p>Sadly, the MPI mapping functions in Open MPI are effectively no-ops -- if you ask for re-ordering, OMPI says &quot;sure!&quot; but then gives you back exactly the same mapping.  :-(
<br>
<p>That being said, the mapping functionality is actually a plugin in Open MPI (in the &quot;topo&quot; framework).  It would not be too difficult to write a plugin for the mapping that you want.
<br>
<p>Would this be of interest to you?  I'd be happy to talk you through the process of writing such a plugin.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>Previous message:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19098.php">Tom Rosmond: "[OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
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
