<?
$subject_val = "Re: [OMPI users] launching the mpi runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 16:25:22 2010" -->
<!-- isoreceived="20101129212522" -->
<!-- sent="Mon, 29 Nov 2010 16:25:18 -0500" -->
<!-- isosent="20101129212518" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launching the mpi runtime" -->
<!-- id="250A494C-56DD-491F-B2FA-FBE87F8FB05D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="002701cb8c20$5296d590$f7c480b0$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] launching the mpi runtime<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 16:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14925.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14923.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Maybe in reply to:</strong> <a href="14826.php">Hicham Mouline: "[OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 24, 2010, at 4:41 PM, Hicham Mouline wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Sadly true.  There has been (very) little demand for this, so we
</span><br>
<span class="quotelev2">&gt;&gt; haven't spent much (any) time on making it work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it the same for MacOSX? can't mix MacOsX and linux?
</span><br>
<span class="quotelev1">&gt; Can't mix Win and MacOSX?
</span><br>
<p>The issue is mainly Windows, I believe.  I *believe* that the network transport that Windows uses is not compatible with any other.
<br>
<p>Shiqing -- can you confirm/deny?
<br>
<p>Hence, you can run OSX + Linux MPI jobs, although you need to be careful about exactly how you do it -- heterogeneity is not for the meek.  You need to have different executables for your different OS's, for example.
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
<li><strong>Next message:</strong> <a href="14925.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14923.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Maybe in reply to:</strong> <a href="14826.php">Hicham Mouline: "[OMPI users] launching the mpi runtime"</a>
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
