<?
$subject_val = "[OMPI devel] Build failure on OpenBSD (deja vu)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 21:11:32 2015" -->
<!-- isoreceived="20150203021132" -->
<!-- sent="Mon, 2 Feb 2015 18:11:30 -0800" -->
<!-- isosent="20150203021130" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Build failure on OpenBSD (deja vu)" -->
<!-- id="CAAvDA17021gxG-bMGRUgCfGM39a8ZFtdKYX0qOqcRsFezSK_cQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Build failure on OpenBSD (deja vu)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 21:11:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16895.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>Reply:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following comes from testing Jeff's no-embedded-libltdl work, but I
<br>
suspect the same is true on tru^H^H^Hmaster.
<br>
<p>The output below, from &quot;make V=1&quot; shows a link failure from trying to use
<br>
arc4random_addrandom(), which was removed on OpenBSD in late 2013.
<br>
<p>The part that bugs me is that I thought Ralph had fixed this in v1.8
<br>
already!
<br>
See <a href="https://svn.open-mpi.org/trac/ompi/ticket/4829">https://svn.open-mpi.org/trac/ompi/ticket/4829</a>
<br>
<p>FYI: The warnings are just the standard Open BSD paranoia and don't
<br>
indicate any real problems.
<br>
<p>-Paul
<br>
<p>/bin/sh ../../../libtool  --tag=CC    --mode=link gcc -std=gnu99  -g
<br>
-finline-functions -fno-strict-aliasing -pthread    -o opal_wrapper
<br>
opal_wrapper.o ../../../opal/libopen-pal.la -lm -lutil   -lm -lutil
<br>
libtool: link: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
<br>
-pthread -o .libs/opal_wrapper opal_wrapper.o  -L../../../opal/.libs
<br>
-lopen-pal -lpthread -lm -lutil -pthread
<br>
-Wl,-rpath,/home/phargrov/OMPI/openmpi-libltdl-openbsd5-amd64/INST/lib
<br>
../../../opal/.libs/libopen-pal.so.0.0: warning: vsprintf() is often
<br>
misused, please use vsnprintf()
<br>
../../../opal/.libs/libopen-pal.so.0.0: warning: strcpy() is almost always
<br>
misused, please use strlcpy()
<br>
../../../opal/.libs/libopen-pal.so.0.0: warning: random() isn't random;
<br>
consider using arc4random()
<br>
../../../opal/.libs/libopen-pal.so.0.0: warning: strcat() is almost always
<br>
misused, please use strlcat()
<br>
../../../opal/.libs/libopen-pal.so.0.0: warning: sprintf() is often
<br>
misused, please use snprintf()
<br>
../../../opal/.libs/libopen-pal.so.0.0: undefined reference to
<br>
`arc4random_addrandom'
<br>
collect2: ld returned 1 exit status
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16895.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16893.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<li><strong>Reply:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI devel] Build failure on OpenBSD (deja vu)"</a>
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
