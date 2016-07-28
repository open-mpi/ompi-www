<?
$subject_val = "Re: [OMPI users] fortran program with integer kind=8 using openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  5 13:23:47 2012" -->
<!-- isoreceived="20120705172347" -->
<!-- sent="Thu, 5 Jul 2012 13:23:42 -0400" -->
<!-- isosent="20120705172342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran program with integer kind=8 using openmpi?" -->
<!-- id="0ACA8F4B-2C4E-4B6E-8B9F-08C91463D32D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120704001246.GA30051_at_troutmask.apl.washington.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran program with integer kind=8 using openmpi?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-05 13:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19742.php">Ryan S. Davis: "[OMPI users] scatterv displacement unit"</a>
<li><strong>Previous message:</strong> <a href="19740.php">Gus Correa: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 3, 2012, at 8:12 PM, Steve Kargl wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Thank you for all responses. There is another problem using
</span><br>
<span class="quotelev2">&gt;&gt; -fdefault-integer-8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll make the unsolicited suggestion that you really
</span><br>
<span class="quotelev1">&gt; really really don't want to use the -fdefault-integer-8
</span><br>
<span class="quotelev1">&gt; option.  It would be far better to actually audit your
</span><br>
<span class="quotelev1">&gt; Fortran code and use Fortran's kind type mechanism to
</span><br>
<span class="quotelev1">&gt; choose the appropriate kinds.
</span><br>
<p>This is probably true.
<br>
<p><span class="quotelev1">&gt; I think that you're just hitting the tip of the iceberg
</span><br>
<span class="quotelev1">&gt; with problems and potential nasty bugs.
</span><br>
<p>Agreed: there are likely to be more bugs than just this one.
<br>
<p>I did file <a href="https://svn.open-mpi.org/trac/ompi/ticket/3163">https://svn.open-mpi.org/trac/ompi/ticket/3163</a> about this problem, though, and will look into it.  But possibly not until next week...
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
<li><strong>Next message:</strong> <a href="19742.php">Ryan S. Davis: "[OMPI users] scatterv displacement unit"</a>
<li><strong>Previous message:</strong> <a href="19740.php">Gus Correa: "Re: [OMPI users] automatically creating a machinefile"</a>
<li><strong>In reply to:</strong> <a href="19733.php">Steve Kargl: "Re: [OMPI users] fortran program with integer kind=8 using openmpi?"</a>
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
