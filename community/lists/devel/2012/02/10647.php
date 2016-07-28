<?
$subject_val = "Re: [OMPI devel] 1.5 supported systems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 15:17:09 2012" -->
<!-- isoreceived="20120229201709" -->
<!-- sent="Wed, 29 Feb 2012 15:17:02 -0500" -->
<!-- isosent="20120229201702" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 supported systems" -->
<!-- id="7DE5E9F5-B2C1-4618-9132-29CF5998E2C2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CC159578-3908-4E9C-A2BC-C584868BE534_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5 supported systems<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 15:17:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Previous message:</strong> <a href="10646.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10646.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10574.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2012, at 3:02 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; I do not have time to systematically go through my 1.4.3 patches against the 1.5.5 code, but I did just look at configure in the nightly 1.5.5rc3 candidate.  I don't remember which platform/compiler caused me to fix this, but I still see a logic problem in enabling support for Fortran&lt;-&gt;C data marshaling.  (It was probably a make check failure.)  In configure, I added extra checks to make sure that the data formats are the same between the Fortran and C compilers.  The 1.5.5 configure still has the incomplete tests.
</span><br>
<p>Ah, crud.  You sent a patch -- back in December? -- and I promised that I'd look into it.  I didn't.  :-(
<br>
<p>I'll do so shortly.  Sorry for the massive delay.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/03/10648.php">Y.MATSUMOTO: "[OMPI devel] [PATCH]Incorrect algorithm choice using coll_tuned_dynamic_rules_filename (over 2GiB message)"</a>
<li><strong>Previous message:</strong> <a href="10646.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10646.php">Larry Baker: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10574.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
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
