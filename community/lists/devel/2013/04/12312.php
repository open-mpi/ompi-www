<?
$subject_val = "[OMPI devel] RFC: libevent thread support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 26 15:22:52 2013" -->
<!-- isoreceived="20130426192252" -->
<!-- sent="Fri, 26 Apr 2013 12:22:45 -0700" -->
<!-- isosent="20130426192245" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: libevent thread support" -->
<!-- id="459EC1DB-8468-4990-A1FD-E63D3174E041_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: libevent thread support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-26 15:22:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12313.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  Developer meeting: mid/late summer?"</a>
<li><strong>Previous message:</strong> <a href="12311.php">Alex Margolin: "Re: [OMPI devel] Mosix support?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  Turn on libevent thread support by default
<br>
<p>WHY:     Async progress relies on progress threads, some of which involve the event library
<br>
<p>WHEN:  As this was discussed at the last developer's meeting and at earlier meetings at UTK, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all were in agreement at those times, a short timeout seems appropriate - barring objections,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COB Fri May 3rd.
<br>
<p>&nbsp;The proposed patch is attached for comment.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12312/event.diff">event.diff</a>
</ul>
<!-- attachment="event.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12313.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  Developer meeting: mid/late summer?"</a>
<li><strong>Previous message:</strong> <a href="12311.php">Alex Margolin: "Re: [OMPI devel] Mosix support?"</a>
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
