<?
$subject_val = "[OMPI devel] #327";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 17:30:03 2015" -->
<!-- isoreceived="20150109223003" -->
<!-- sent="Fri, 9 Jan 2015 17:30:02 -0500" -->
<!-- isosent="20150109223002" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] #327" -->
<!-- id="CAMJJpkXyJHJ=dqLC+JSwyynEiP0YnV-bweSAe80bFjBiq0znaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] #327<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 17:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16775.php">Burette, Yohann: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
<li><strong>Reply:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some comments about this ticket and the corresponding patch.
<br>
Honestly, the patch lacks most of the things we have talked about during
<br>
our last developers meeting. However, my main concern in this particular
<br>
email is about the SIGNAL flag.
<br>
<p>1. The fact that currently there is little difference between this flag and
<br>
PRIORITY is a fact that I would like to hear a justification for.
<br>
<p>2. Moreover, right now SIGNAL is a purely PML decision. Again, we talked
<br>
about this and decided that the upper layer (this meant whoever is using
<br>
the PML) was to define this policy. We specifically said that this should
<br>
not be a PML level decision, because the PML lacks the means to take the
<br>
right decision about what should be signaled and what not. The current code
<br>
signals most of the PML control logic, including some of the matching logic
<br>
(but not all for some obscure reason). Based on my understanding of the
<br>
code, one didn't need to pollute the PML code for this, it could have just
<br>
used the PRIORITY flag instead.
<br>
<p>Additionally, if my memory is good we decided that this should be
<br>
thoughtfully evaluated before pushing it into the trunk. And here
<br>
thoughtfully meant over multiple BTL and so on. Obviously, I missed the
<br>
email thread about the evaluation of this flag on UGNI. I guess I might not
<br>
be the only one, so I would really appreciate if someone can repost it
<br>
again.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16774/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16775.php">Burette, Yohann: "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<li><strong>Previous message:</strong> <a href="16773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Changed behaviour with PSM on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
<li><strong>Reply:</strong> <a href="16778.php">Howard Pritchard: "Re: [OMPI devel] #327"</a>
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
