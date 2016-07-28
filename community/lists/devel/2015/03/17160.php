<?
$subject_val = "[OMPI devel] Opal atomics question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 11:22:40 2015" -->
<!-- isoreceived="20150326152240" -->
<!-- sent="Thu, 26 Mar 2015 09:22:39 -0600" -->
<!-- isosent="20150326152239" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] Opal atomics question" -->
<!-- id="20150326152239.GJ25043_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Opal atomics question<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-26 11:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17161.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17161.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Reply:</strong> <a href="17161.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Reply:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am working on cleaning up the atomics in opal and I noticed something
<br>
odd. We define opal_atomic_sub_32 and opal_atomic_sub_64 yet only use
<br>
opal_atomic_sub_32 once:
<br>
<p>./opal/runtime/opal_progress.c:    val = opal_atomic_sub_32(&amp;num_event_users, 1);
<br>
<p>This could easily be changed to:
<br>
<p>val = opal_atomic_add_32(&amp;num_event_users, -1);
<br>
<p>And then we could remove all both opal_atomic_sub_32 and
<br>
opal_atomic_sub_64. Is there a reason to leave these functions in opal?
<br>
<p><p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17160/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17161.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Previous message:</strong> <a href="17159.php">Artem Polyakov: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17161.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Reply:</strong> <a href="17161.php">Paul Hargrove: "Re: [OMPI devel] Opal atomics question"</a>
<li><strong>Reply:</strong> <a href="17162.php">Nathan Hjelm: "Re: [OMPI devel] Opal atomics question"</a>
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
