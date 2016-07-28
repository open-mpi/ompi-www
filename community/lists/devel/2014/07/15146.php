<?
$subject_val = "Re: [OMPI devel] 100% test failures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 10:50:24 2014" -->
<!-- isoreceived="20140715145024" -->
<!-- sent="Tue, 15 Jul 2014 08:50:23 -0600" -->
<!-- isosent="20140715145023" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 100% test failures" -->
<!-- id="20140715145023.GM1506_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="hhod3ylqr9293thfjow67x1i.1405434998729_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 100% test failures<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 10:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>In reply to:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Reply:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 15, 2014 at 11:40:38PM +0900, Gilles GOUAILLARDET wrote:
<br>
<span class="quotelev1">&gt;    r32236 is a suspect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    i am afk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I just read the code and a class is initialized with opal_class_initialize
</span><br>
<span class="quotelev1">&gt;    the first time an object is instantiated with OBJ_NEW
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I would simply revert r32236 or update opal_class_finalize and
</span><br>
<span class="quotelev1">&gt;    free(cls-&gt;cls_construct_array); only if cls-&gt;cls_construct_array is not
</span><br>
<span class="quotelev1">&gt;    NULL
</span><br>
<p>free(NULL) is safe. Something else is going wrong here. I am
<br>
investigating.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15146/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Previous message:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>In reply to:</strong> <a href="15145.php">Gilles GOUAILLARDET: "Re: [OMPI devel] 100% test failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
<li><strong>Reply:</strong> <a href="15147.php">George Bosilca: "Re: [OMPI devel] 100% test failures"</a>
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
