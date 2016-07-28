<?
$subject_val = "[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 17:41:14 2015" -->
<!-- isoreceived="20150406214114" -->
<!-- sent="Mon, 6 Apr 2015 14:41:11 -0700" -->
<!-- isosent="20150406214111" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)" -->
<!-- id="CAAvDA16EoggzsLOwJGRQMyAc+yceNTmG1bvj7+-0kixYk8KutA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 17:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17185.php">Howard Pritchard: "[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Previous message:</strong> <a href="17183.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Reply:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On MacOS X 10.8 (where cc and c++ are clang and clang++, and the default
<br>
ABI is LP64) I've configured the release candidate with
<br>
<p>--prefix=.... --enable-debug CC=cc CXX=c++
<br>
<p><p><p>The build fails linking opal_wrapper as shown in the &quot;make V=1&quot; output
<br>
below.
<br>
<p>Based on the undefined symbol (_lt_libltdlc_LTX_preloaded_symbols) I am
<br>
guessing this is a libltdl issue.  If relevant, note that configure picks
<br>
the embedded libltdl:
<br>
<p>*** GNU libltdl setup
<br>
checking location of libltdl... internal copy
<br>
configure: OMPI configuring in opal/libltdl
<br>
<p>Oddly enough, I have no problems with a build configured for the ILP32 ABI
<br>
as follows:
<br>
<p>--prefix=.... --enable-debug CC=cc CXX=c++ \
<br>
CFLAGS=-m32 --with-wrapper-cflags=-m32 \
<br>
CXXFLAGS=-m32 --with-wrapper-cxxflags=-m32 \
<br>
FCFLAGS=-m32 --with-wrapper-fcflags=-m32
<br>
<p><p>I can send (off-list) the config.log and configure's complete stdout for
<br>
both the LP64 and ILP32 builds if requested.
<br>
<p>-Paul
<br>
<p><p>/bin/sh ../../../libtool  --tag=CC   --mode=link cc  -g -finline-functions
<br>
-fno-strict-aliasing   -export-dynamic  -Wl,-flat_namespace  -o
<br>
opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la
<br>
libtool: link: cc -g -finline-functions -fno-strict-aliasing
<br>
-Wl,-flat_namespace -o .libs/opal_wrapper opal_wrapper.o
<br>
&nbsp;../../../opal/.libs/libopen-pal.dylib -lm
<br>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_lt_libltdlc_LTX_preloaded_symbols&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;import-atom in libopen-pal.dylib
<br>
ld: symbol(s) not found for architecture x86_64
<br>
clang: error: linker command failed with exit code 1 (use -v to see
<br>
invocation)
<br>
make[2]: *** [opal_wrapper] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17184/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17185.php">Howard Pritchard: "[OMPI devel] dlclose of libmpi, java gc, and pthread_key destructors"</a>
<li><strong>Previous message:</strong> <a href="17183.php">Paul Hargrove: "[OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
<li><strong>Reply:</strong> <a href="17187.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 MacOS X 10.8 build failure (libltdl?)"</a>
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
