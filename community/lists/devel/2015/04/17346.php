<?
$subject_val = "[OMPI devel] Suggested README changes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 14:29:18 2015" -->
<!-- isoreceived="20150423182918" -->
<!-- sent="Thu, 23 Apr 2015 11:29:10 -0700" -->
<!-- isosent="20150423182910" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Suggested README changes" -->
<!-- id="CAAvDA178KEL9spFD_-SxTP-7zcHG9iSvew5HokzcJyS2JKsKaQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Suggested README changes<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 14:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17347.php">Howard Pritchard: "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Previous message:</strong> <a href="17345.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17347.php">Howard Pritchard: "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Reply:</strong> <a href="17347.php">Howard Pritchard: "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Reply:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have attached a patch (against master) that fixes some typos and makes an
<br>
update.
<br>
It applies *almost* cleanly to v1.8, requiring &quot;-C2&quot; if applying with &quot;git
<br>
apply&quot; due to context changes.
<br>
<p>I also noted the following which I believe is just plain false, but don't
<br>
have an alternative for.
<br>
&nbsp;&nbsp;Portals4 is the support library for Cray interconnects, but is also
<br>
&nbsp;&nbsp;available on other platforms (e.g., there is a Portals4 library
<br>
&nbsp;&nbsp;implemented over regular TCP).
<br>
<p>It seems to be based on a dated description of Portals3.3.  Cray does not
<br>
(to the best of my knowledge) have an implementation of Portals4, and the
<br>
reference implementation of Portals4 is over IB rather than over TCP.
<br>
Perhaps @regrant can offer a re-write?
<br>
<p>-Paul [generating more work for @jsquyres since 1999]
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17346/README-fixes.patch">README-fixes.patch</a>
</ul>
<!-- attachment="README-fixes.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17347.php">Howard Pritchard: "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Previous message:</strong> <a href="17345.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI developer meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17347.php">Howard Pritchard: "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Reply:</strong> <a href="17347.php">Howard Pritchard: "Re: [OMPI devel] Suggested README changes"</a>
<li><strong>Reply:</strong> <a href="17349.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Suggested README changes"</a>
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
