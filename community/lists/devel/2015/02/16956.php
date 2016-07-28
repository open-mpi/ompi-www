<?
$subject_val = "[OMPI devel] ess:alps build failure with PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 19:38:47 2015" -->
<!-- isoreceived="20150207003847" -->
<!-- sent="Fri, 6 Feb 2015 16:38:46 -0800" -->
<!-- isosent="20150207003846" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] ess:alps build failure with PGI" -->
<!-- id="CAAvDA15PxwUn4Ag2X++bOc2pgZnuYwByK2oAmRcz0bCgQGESDw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] ess:alps build failure with PGI<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 19:38:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16955.php">Paul Hargrove: "[OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>Reply:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following in orte/mca/ess/alps/Makefile.am assumes a GNU (or GNU-like)
<br>
compiler:
<br>
<p>mca_ess_alps_la_CPPFLAGS = $(ess_alps_CPPFLAGS) -fno-ident
<br>
<p>If building with PGI, the result is
<br>
&nbsp;&nbsp;&nbsp;pgcc-Error-Unknown switch: -fno-ident
<br>
when compiling orte/mca/ess/alps/ess_alps_component.c
<br>
<p>This is last night's master tarball (openmpi-dev-845-ga3275aa).
<br>
<p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16956/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16957.php">George Bosilca: "Re: [OMPI devel] OMPI devel] Master hangs in opal_fifo test"</a>
<li><strong>Previous message:</strong> <a href="16955.php">Paul Hargrove: "[OMPI devel] opal_fifo SEGV from master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
<li><strong>Reply:</strong> <a href="16964.php">Howard Pritchard: "Re: [OMPI devel] ess:alps build failure with PGI"</a>
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
