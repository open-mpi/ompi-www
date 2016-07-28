<?
$subject_val = "[OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 10:54:58 2007" -->
<!-- isoreceived="20071211155458" -->
<!-- sent="Tue, 11 Dec 2007 17:54:52 +0200" -->
<!-- isosent="20071211155452" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071211155452.GF3360_at_minantech.com" -->
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
<strong>Subject:</strong> [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 10:54:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Maybe reply:</strong> <a href="2828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;I did a rewrite of matching code in OB1. I made it much simpler and 2
<br>
times smaller (which is good, less code - less bugs). I also got rid
<br>
of huge macros - very helpful if you need to debug something. There
<br>
is no performance degradation, actually I even see very small performance
<br>
improvement. I ran MTT with this patch and the result is the same as on
<br>
trunk. I would like to commit this to the trunk. The patch is attached
<br>
for everybody to try.
<br>
<p><pre>
--
			Gleb.

</pre>
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2786/ob1_match.diff">ob1_match.diff</a>
</ul>
<!-- attachment="ob1_match.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2785.php">Gleb Natapov: "Re: [OMPI devel] opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2787.php">Brian W. Barrett: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Maybe reply:</strong> <a href="2828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
