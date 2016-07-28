<?
$subject_val = "[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 22:08:19 2015" -->
<!-- isoreceived="20150203030819" -->
<!-- sent="Mon, 2 Feb 2015 19:08:17 -0800" -->
<!-- isosent="20150203030817" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared" -->
<!-- id="CAAvDA14p6w1Teavy-63KDzqNFAZY10B4+9RwfGH=y9O6ztMoBw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 22:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16900.php">Paul Hargrove: "[OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>Previous message:</strong> <a href="16898.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>Reply:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a Mac OSX 10.8 system, where cc is clang.
<br>
I have no problems with a default build from the current master tarball.
<br>
However, a static-only build leads to a link failure on opal_wrapper.
<br>
<p>Configured with
<br>
&nbsp;&nbsp;--prefix=... --enable-debug CC=cc CXX=c++ --enable-static --disable-shared
<br>
<p>Failing portion of &quot;make V=1&quot;:
<br>
<p>/bin/sh ../../../libtool  --tag=CC   --mode=link cc  -g -finline-functions
<br>
-fno-strict-aliasing   -export-dynamic    -o opal_wrapper opal_wrapper.o
<br>
../../../opal/libopen-pal.la
<br>
libtool: link: cc -g -finline-functions -fno-strict-aliasing -o
<br>
opal_wrapper opal_wrapper.o  ../../../opal/.libs/libopen-pal.a -lm
<br>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_opal_pmix&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_opal_get_proc_hostname in libopen-pal.a(proc.o)
<br>
ld: symbol(s) not found for architecture x86_64
<br>
clang: error: linker command failed with exit code 1 (use -v to see
<br>
invocation)
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16899/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16900.php">Paul Hargrove: "[OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>Previous message:</strong> <a href="16898.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>Reply:</strong> <a href="16906.php">Ralph Castain: "Re: [OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
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
