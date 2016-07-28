<?
$subject_val = "Re: [OMPI users] Optimal 3-D Cartesian processor mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 16:19:46 2012" -->
<!-- isoreceived="20120424201946" -->
<!-- sent="Tue, 24 Apr 2012 16:19:40 -0400" -->
<!-- isosent="20120424201940" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Optimal 3-D Cartesian processor mapping" -->
<!-- id="D3BE9B3C-D5A1-4805-82C2-67253DB22EE2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1335296034.5406.69.camel_at_cedar.reachone.com" -->
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
<strong>Date:</strong> 2012-04-24 16:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19105.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2012, at 3:33 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; Yes, I would be interested in such a plugin.  But be advised that I am
</span><br>
<span class="quotelev1">&gt; strictly a fortran programmer, so if it requires any C/C++ talent, I
</span><br>
<span class="quotelev1">&gt; would be in trouble.  So maybe, before jumping into that, I would like
</span><br>
<span class="quotelev1">&gt; to be able to look at what processor/node mapping Open-mpi is actually
</span><br>
<span class="quotelev1">&gt; giving me.  
</span><br>
<p>Cool.  Yes, there is some C stuff you would need to know.  Basically, our components must adhere to a C API.  That being said, if you really wanted to, your algorithm could be written in Fortran below that.  :-)
<br>
<p>Supplying you with a skeleton topo component with a /* Fill in your algorithm here */ section probably would not be too difficult.  
<br>
<p>One caveat here, though: the topo plugins have the following interface for v1.5/v1.6:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.6/ompi/mca/topo/topo.h">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.6/ompi/mca/topo/topo.h</a>
<br>
<p>But they're going to change for v1.7/v1.8 to this (this hasn't been merged to our SVN trunk yet, but it will be):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/ompi-topo-fixes/src/tip/ompi/mca/topo/topo.h">https://bitbucket.org/jsquyres/ompi-topo-fixes/src/tip/ompi/mca/topo/topo.h</a>
<br>
<p>The differences are minor, but non-zero.
<br>
<p><span class="quotelev1">&gt; Is there an environmental variable or an MCA option I can
</span><br>
<span class="quotelev1">&gt; add to my 'mpirun' command line that would give that to me?  I am
</span><br>
<span class="quotelev1">&gt; running 1.5.4.
</span><br>
<p>Ralph pointed you to the --display-map mpirun option there.  
<br>
<p>Note that there's two levels of things going on here:
<br>
<p>1. How OMPI's mpirun lays out your processes
<br>
2. How MPI_CART_CREATE re-arranges the ranks in the newly-created communicator
<br>
<p>The topo component that I'm talking about is only involved in #2.  
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
<li><strong>Next message:</strong> <a href="19107.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19105.php">Brock Palen: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19102.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
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
