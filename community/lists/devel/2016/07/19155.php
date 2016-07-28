<?
$subject_val = "[OMPI devel] [2.0.0rc4] non-critical faulres report";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 17:29:50 2016" -->
<!-- isoreceived="20160706212950" -->
<!-- sent="Wed, 6 Jul 2016 14:29:46 -0700" -->
<!-- isosent="20160706212946" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc4] non-critical faulres report" -->
<!-- id="CAAvDA17k52KZzVZU9Zyr4kENszK5Qynth5u=_jwbjGVVNws_xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc4] non-critical faulres report<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-06 17:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19156.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Previous message:</strong> <a href="19154.php">Paul Hargrove: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19181.php">Howard Pritchard: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following are previously reported issues that I am *not* expecting to
<br>
be resolved in 2.0.0.
<br>
However, I am listing them here for completeness.
<br>
<p>Known, but with later target:
<br>
<p>OpenBSD fails to build ROMIO - PR1178 exists with v2.0.1 target
<br>
NAG Fortran support - PR1215 exists with v2.0.1 target
<br>
<p>Known, but *not* suspected to be the fault of Open MPI or it embedded
<br>
components:
<br>
<p>Pathcc gets ICE - versions 5.0.5 and 6.0.527 get compiler crashes building
<br>
Open MPI
<br>
Pgcc -m32 gets ICE - versions 12.x and 13.x (the only ones I can test w/
<br>
-m32) crash compiling hwloc
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19156.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Previous message:</strong> <a href="19154.php">Paul Hargrove: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19176.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19181.php">Howard Pritchard: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
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
