<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 17:03:26 2013" -->
<!-- isoreceived="20130716210326" -->
<!-- sent="Tue, 16 Jul 2013 21:03:22 +0000" -->
<!-- isosent="20130716210322" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7223E7_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130716205448.GI18047_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add support for large counts using derived datatypes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 17:03:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12622.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2013, at 4:54 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 3. We had a policy that we only export one single MPI level function per file in the mpi directory. You changed this as some of the files exports now two function (the original function together with the _x version).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was trying to avoid having too much duplicate code. If including both functions in the same file is not ok I will move the _x functions to their own .c files.
</span><br>
<p>This is an unfortunate side-effect of the PMPI mandate (be able to override any individual MPI symbol).  Because of the way linkers work, you can only put 1 MPI symbol in any given .o file.  :-(
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
<li><strong>Next message:</strong> <a href="12622.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12620.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12619.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12636.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
