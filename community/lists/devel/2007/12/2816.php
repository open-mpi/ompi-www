<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 12:24:20 2007" -->
<!-- isoreceived="20071212172420" -->
<!-- sent="Wed, 12 Dec 2007 11:24:17 -0600" -->
<!-- isosent="20071212172417" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's" -->
<!-- id="20071212172417.GA21216_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20071212142456.GP3360_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 12:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, glad I got this conversation started :)
<br>
<p>So, we need a slight redesign to determine the cm method (unless forced
<br>
via commandline arg).  This can be determined by calling all the
<br>
individual open routines, and having them return a priority based on
<br>
their ability to function.  For example, the xoob open function will
<br>
check the mca_btl_openib_component.num_xrc_qps for a non-zero value and
<br>
return the priority based on that.
<br>
<p>Of course, if forced then it will only call that specific open function
<br>
and throw any relevant errors as necessary.
<br>
<p>If this sounds sane, then let me know and I'll start coding it up.
<br>
<p>Thanks,
<br>
Jon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2815.php">Jeff Squyres: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2817.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
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
