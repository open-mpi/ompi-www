<?
$subject_val = "[OMPI devel] New BTL parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  9 10:34:39 2007" -->
<!-- isoreceived="20071209153439" -->
<!-- sent="Sun, 9 Dec 2007 17:34:30 +0200" -->
<!-- isosent="20071209153430" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] New BTL parameter" -->
<!-- id="20071209153430.GB3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] New BTL parameter<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-09 10:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2769.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16908"</a>
<li><strong>Previous message:</strong> <a href="2767.php">Gleb Natapov: "[OMPI devel] Changes to all BTLs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;Currently BTL has parameter btl_min_send_size that is no longer used.
<br>
I want to change it to be btl_rndv_eager_limit. This new parameter will
<br>
determine a size of a first fragment of rendezvous protocol. Now we use
<br>
btl_eager_limit to set its size. btl_rndv_eager_limit will have to be
<br>
smaller or equal to btl_eager_limit. By default it will be equal to
<br>
btl_eager_limit so no behavior change will be observed if default is
<br>
used.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2769.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16908"</a>
<li><strong>Previous message:</strong> <a href="2767.php">Gleb Natapov: "[OMPI devel] Changes to all BTLs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2818.php">Jeff Squyres: "Re: [OMPI devel] New BTL parameter"</a>
<li><strong>Reply:</strong> <a href="2856.php">Gleb Natapov: "Re: [OMPI devel] New BTL parameter"</a>
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
