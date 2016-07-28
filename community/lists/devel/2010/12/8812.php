<?
$subject_val = "[OMPI devel] Datatype question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 12:02:34 2010" -->
<!-- isoreceived="20101221170234" -->
<!-- sent="Tue, 21 Dec 2010 10:02:14 -0700" -->
<!-- isosent="20101221170214" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] Datatype question" -->
<!-- id="317FA5E1-83D9-49B3-8A8B-1436D9ECF34F_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Datatype question<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 12:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Previous message:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Reply:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>I'm trying to follow up on James Dinan's one-sided datatype errors e-mail and running into some datatype issues from when the datatype engine was moved to OPAL (sigh).  Accumulate needs to get at the underlying datatypes for a user-created dataype.  Before the ddt move, one just walked bdt_used and found the underlying type.  Now it appears that bdt_used refers to the opal types, not the ompi types.  And since there's not a one-to-one mapping between the two, I'm at a loss as to how one could find a MPI pre-defined datatype from the user-defined datatype.  Can someone point me in the right direction?
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Previous message:</strong> <a href="8811.php">Terry Dontje: "Re: [OMPI devel] openib btl_openib_async_thread poll question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
<li><strong>Reply:</strong> <a href="8813.php">George Bosilca: "Re: [OMPI devel] Datatype question"</a>
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
