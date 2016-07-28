<?
$subject_val = "[OMPI devel] out-of-date or missing manpages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 19:17:56 2014" -->
<!-- isoreceived="20140124001756" -->
<!-- sent="Thu, 23 Jan 2014 16:17:55 -0800" -->
<!-- isosent="20140124001755" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] out-of-date or missing manpages" -->
<!-- id="CAAvDA16LRqv0JQpkt_wj3DisR3KQU3o36MMePy=PwP+kFmxJEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] out-of-date or missing manpages<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 19:17:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13894.php">Paul Hargrove: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Reply:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Reply:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The man pages in trunk for the compiler wrappers still make reference to
<br>
distinct FC and F77 (and FCFLAGS and FFLAGS), though configure no longer
<br>
honors F77 or FFLAGS:
<br>
<p>$ grep -e F77 -e FFLAGS INST/share/man/man1/*
<br>
INST/share/man/man1/mpiCC.1:the user in the CC, CXX, F77, and/or FC
<br>
environment variables
<br>
INST/share/man/man1/mpiCC.1:F77
<br>
INST/share/man/man1/mpiCC.1:FFLAGS
<br>
INST/share/man/man1/mpic++.1:the user in the CC, CXX, F77, and/or FC
<br>
environment variables
<br>
INST/share/man/man1/mpic++.1:F77
<br>
INST/share/man/man1/mpic++.1:FFLAGS
<br>
INST/share/man/man1/mpicc.1:the user in the CC, CXX, F77, and/or FC
<br>
environment variables
<br>
INST/share/man/man1/mpicc.1:F77
<br>
INST/share/man/man1/mpicc.1:FFLAGS
<br>
INST/share/man/man1/mpicxx.1:the user in the CC, CXX, F77, and/or FC
<br>
environment variables
<br>
INST/share/man/man1/mpicxx.1:F77
<br>
INST/share/man/man1/mpicxx.1:FFLAGS
<br>
INST/share/man/man1/mpifort.1:the user in the CC, CXX, F77, and/or FC
<br>
environment variables
<br>
INST/share/man/man1/mpifort.1:F77
<br>
INST/share/man/man1/mpifort.1:FFLAGS
<br>
grep: INST/share/man/man1/orteCC.1: No such file or directory
<br>
<p><p>Note also the last line out output is due to an orteCC.1 which is a
<br>
dangling symlink:
<br>
lrwxrwxrwx 1 hargrove PARTS     9 Jan 23 21:53 orteCC.1 -&gt; ortec++.1
<br>
<p>There is no manpage for ortec++ (nor otrecc).
<br>
<p>However bin/ is populated correctly:
<br>
lrwxrwxrwx 1 hargrove PARTS     12 Jan 23 21:53 orteCC -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 hargrove PARTS     12 Jan 23 21:53 ortec++ -&gt; opal_wrapper
<br>
lrwxrwxrwx 1 hargrove PARTS     12 Jan 23 21:53 ortecc -&gt; opal_wrapper
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13894.php">Paul Hargrove: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13892.php">Ralph Castain: "Re: [OMPI devel] [PATCH] mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Reply:</strong> <a href="13896.php">Paul Hargrove: "Re: [OMPI devel] out-of-date or missing manpages"</a>
<li><strong>Reply:</strong> <a href="13912.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] out-of-date or missing manpages"</a>
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
