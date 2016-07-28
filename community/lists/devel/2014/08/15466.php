<?
$subject_val = "[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  1 19:07:53 2014" -->
<!-- isoreceived="20140801230753" -->
<!-- sent="Fri, 1 Aug 2014 16:07:51 -0700" -->
<!-- isosent="20140801230751" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)" -->
<!-- id="CAAvDA17hF+G_-CfaEyoX=R_BEH+NH1iQb0Zw9-A4gemjZ7s0qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-01 19:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15467.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15465.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15472.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Reply:</strong> <a href="15472.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing the following on OpenBSD/amd64 with &quot;make V=1&quot;:
<br>
<p>Making all in tools/wrappers
<br>
/bin/sh ../../../libtool  --tag=CC    --mode=link gcc -std=gnu99  -g
<br>
-finline-functions -fno-strict-aliasing -pthread   -export-dynamic   -o
<br>
opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lutil -lm
<br>
libtool: link: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
<br>
-pthread -o .libs/opal_wrapper opal_wrapper.o -Wl,-E  -L../../../opal/.libs
<br>
-lopen-pal -lpthread -lutil -lm -pthread
<br>
-Wl,-rpath,/home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/INST/lib
<br>
../../../opal/.libs/libopen-pal.so.8.0: warning: vsprintf() is often
<br>
misused, please use vsnprintf()
<br>
../../../opal/.libs/libopen-pal.so.8.0: warning: strcpy() is almost always
<br>
misused, please use strlcpy()
<br>
../../../opal/.libs/libopen-pal.so.8.0: warning: random() isn't random;
<br>
consider using arc4random()
<br>
../../../opal/.libs/libopen-pal.so.8.0: warning: strcat() is almost always
<br>
misused, please use strlcat()
<br>
../../../opal/.libs/libopen-pal.so.8.0: warning: sprintf() is often
<br>
misused, please use snprintf()
<br>
../../../opal/.libs/libopen-pal.so.8.0: undefined reference to
<br>
`arc4random_addrandom'
<br>
collect2: ld returned 1 exit status
<br>
*** Error 1 in opal/tools/wrappers (Makefile:1623 'opal_wrapper')
<br>
*** Error 1 in opal (Makefile:2145 'all-recursive')
<br>
*** Error 1 in /home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/BLD
<br>
(Makefile:1689 'all-recursive')
<br>
<p>Ignoring OpenBSD's typical warnings about functions their developers don't
<br>
like there is an undefined reference to arc4random_addrandom.  The only
<br>
explicit reference appears to be in libevent:
<br>
<p>$ grep -rlw arc4random_addrandom .
<br>
./opal/mca/event/libevent2021/libevent/evutil_rand.c
<br>
./opal/mca/event/libevent2021/libevent/arc4random.c
<br>
<p>It appears that OpenBSD has arc4random, but no arc4random_addrandom():
<br>
/usr/include/stdlib.h:u_int32_t arc4random(void);
<br>
/usr/include/stdlib.h:u_int32_t arc4random_uniform(u_int32_t);
<br>
/usr/include/stdlib.h:void arc4random_buf(void *, size_t)
<br>
<p>I tried to work-around this by adding  &quot;ac_cv_func_arc4random=no&quot; to the
<br>
configure command line, but that creates secondary problems because the #if
<br>
logic in libevent doesn't allow for the case that arc4random() does not
<br>
exist but arc4random_buf() does:
<br>
<p>In file included from
<br>
/home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/openmpi-1.8.2rc3/opal/mca/event/libev
<br>
ent2021/libevent/evutil_rand.c:119:
<br>
/home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/openmpi-1.8.2rc3/opal/mca/event/libevent2021/libevent/./arc
<br>
4random.c:482: error: static declaration of 'arc4random_buf' follows
<br>
non-static declaration
<br>
/usr/include/stdlib.h:308: error: previous declaration of 'arc4random_buf'
<br>
was here
<br>
<p>Use of --with-libevent=... was no use because the pre-built libevent
<br>
package for OpenBSD lacks thread support.
<br>
<p>So, I am left without any recipe to build 1.8.2rc3 on OpenBSD.
<br>
HOWEVER, is appears that 1.8, 1.8.1 and trunk all have the same problem.
<br>
Of course, I am the only one who tests Open MPI on OpenBSD, and I don't
<br>
actually USE it.
<br>
So, this is not any sort of a priority as far as I am concerned.
<br>
<p>-Paul
<br>
<p><p><p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15466/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15467.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.2rc3 now out"</a>
<li><strong>Previous message:</strong> <a href="15465.php">Paul Hargrove: "Re: [OMPI devel] RFC: add atomic compare-and-swap that returns old value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15472.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Reply:</strong> <a href="15472.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
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
