<?
$subject_val = "Re: [OMPI users] printing text fixes a problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  1 13:09:32 2011" -->
<!-- isoreceived="20110201180932" -->
<!-- sent="Tue, 1 Feb 2011 13:09:17 -0500" -->
<!-- isosent="20110201180917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printing text fixes a problem?" -->
<!-- id="E328C1DE-670B-433F-B6D4-76D2D2DC55BD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinYNp-AD6RuYi6cT0o+4qjOEocV8WVLZ7dQB6V-_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] printing text fixes a problem?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-01 13:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15467.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>In reply to:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 1, 2011, at 1:03 PM, David Zhang wrote:
<br>
<p><span class="quotelev1">&gt; Yes, that was a typo.  mpi_finalize terminates all mpi processings.
</span><br>
<p>Just to nit-pick a little more (sorry!)...
<br>
<p>MPI_Finalize terminates all MPI processings...in the process that calls it.  It does not terminate all MPI processings in other processes until they call MPI_Finalize.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15467.php">David Mathog: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
<li><strong>In reply to:</strong> <a href="15465.php">David Zhang: "Re: [OMPI users] printing text fixes a problem?"</a>
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
