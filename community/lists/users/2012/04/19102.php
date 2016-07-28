<?
$subject_val = "Re: [OMPI users] Optimal 3-D Cartesian processor mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 15:33:43 2012" -->
<!-- isoreceived="20120424193343" -->
<!-- sent="Tue, 24 Apr 2012 12:33:54 -0700" -->
<!-- isosent="20120424193354" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal 3-D Cartesian processor mapping" -->
<!-- id="1335296034.5406.69.camel_at_cedar.reachone.com" -->
<!-- inreplyto="609D1769-421E-4D2D-A160-3D02935F1736_at_cisco.com" -->
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
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 15:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>In reply to:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19106.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Yes, I would be interested in such a plugin.  But be advised that I am
<br>
strictly a fortran programmer, so if it requires any C/C++ talent, I
<br>
would be in trouble.  So maybe, before jumping into that, I would like
<br>
to be able to look at what processor/node mapping Open-mpi is actually
<br>
giving me.  Is there an environmental variable or an MCA option I can
<br>
add to my 'mpirun' command line that would give that to me?  I am
<br>
running 1.5.4.
<br>
<p>T. Rosmond
<br>
<p><p>On Tue, 2012-04-24 at 15:11 -0400, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 24, 2012, at 3:01 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My question is this:  If the cartesian mapping is done so the two
</span><br>
<span class="quotelev2">&gt; &gt; spacial dimensions are the 'most rapidly varying' in equivalent 1-D
</span><br>
<span class="quotelev2">&gt; &gt; processor mapping, will Open-mpi automatically assign those 2 dimensions
</span><br>
<span class="quotelev2">&gt; &gt; 'on-node', and assign the 'ensemble' dimension as the slowest varying
</span><br>
<span class="quotelev2">&gt; &gt; and across nodes?  If not, how can we guarantee this to happen?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sadly, the MPI mapping functions in Open MPI are effectively no-ops -- if you ask for re-ordering, OMPI says &quot;sure!&quot; but then gives you back exactly the same mapping.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, the mapping functionality is actually a plugin in Open MPI (in the &quot;topo&quot; framework).  It would not be too difficult to write a plugin for the mapping that you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would this be of interest to you?  I'd be happy to talk you through the process of writing such a plugin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19101.php">Jeffrey Squyres: "Re: [OMPI users] Segmentation fault during MPI initialization"</a>
<li><strong>In reply to:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19103.php">Ralph Castain: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19106.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
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
