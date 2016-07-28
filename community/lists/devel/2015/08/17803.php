<?
$subject_val = "[OMPI devel] 1.10.0rc5 - mx problem when compiled statically";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 23 19:58:19 2015" -->
<!-- isoreceived="20150823235819" -->
<!-- sent="Sun, 23 Aug 2015 16:58:15 -0700" -->
<!-- isosent="20150823235815" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.10.0rc5 - mx problem when compiled statically" -->
<!-- id="CAAvDA144EyJ85KN=vedK1iRj0XP3TzrY3vgefcT2zVwgxm47Nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.10.0rc5 - mx problem when compiled statically<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-23 19:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17802.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I regret to say that in my endless search for perfection (which is a
<br>
journey, not a destination) I believe I found another issue:
<br>
<p>I had mx2g sources sitting around, which I compiled and installed on two
<br>
systems (x86 and x86-64).
<br>
These provide only compile/link tests, since my systems lack the hardware
<br>
(actually do have some in a box somewhere).
<br>
<p>Things worked fine on both systems when configure with --with-mx=[path].
<br>
However, on both systems adding &quot;--enable-static --disable-shared&quot; results
<br>
in failure from &quot;make check&quot;:
<br>
<p>make[3]: Entering directory
<br>
`/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
<br>
&nbsp;&nbsp;CC       predefined_gap_test.o
<br>
&nbsp;&nbsp;CCLD     predefined_gap_test
<br>
&nbsp;&nbsp;CC       dlopen_test.o
<br>
&nbsp;&nbsp;CCLD     dlopen_test
<br>
make[3]: Leaving directory
<br>
`/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
<br>
make  check-TESTS
<br>
make[3]: Entering directory
<br>
`/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/ompi/debuggers'
<br>
./predefined_gap_test: error while loading shared libraries:
<br>
libmyriexpress.so: cannot open shared object file: No such file or directory
<br>
FAIL: predefined_gap_test
<br>
./dlopen_test: error while loading shared libraries: libmyriexpress.so:
<br>
cannot open shared object file: No such file or directory
<br>
FAIL: dlopen_test
<br>
<p><p>The following *does* show  mpicc using a correct  rpath argument for the mx
<br>
library:
<br>
<p>$ ./INST/bin/mpicc --show openmpi-1.10.0rc5/examples/ring_c.c
<br>
gcc openmpi-1.10.0rc5/examples/ring_c.c
<br>
-I/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/include
<br>
-pthread -L/opt/mx2g/lib -Wl,-rpath -Wl,/opt/mx2g/lib -Wl,-rpath
<br>
-Wl,/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib
<br>
-Wl,--enable-new-dtags
<br>
-L/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/INST/lib -lmpi
<br>
-lopen-rte -lopen-pal -lm -ldl -lrt -lmyriexpress -libverbs -lutil
<br>
$ ls /opt/mx2g/lib
<br>
debug  libmyriexpress.a  libmyriexpress.so
<br>
<p><p>However, the *test* is built without an rpath:
<br>
<p>/bin/sh ../../libtool  --tag=CC   --mode=link gcc -std=gnu99
<br>
&nbsp;-fno-strict-aliasing -pthread -g   -o dlopen_test dlopen_test.o ../../ompi/
<br>
libmpi.la ../../opal/libopen-pal.la -lrt -lm -lutil
<br>
libtool: link: gcc -std=gnu99 -fno-strict-aliasing -pthread -g -o
<br>
dlopen_test dlopen_test.o  ../../ompi/.libs/libmpi.a -L/opt/mx2g/lib
<br>
-libverbs -lmyriexpress
<br>
/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/orte/.libs/libopen-rte.a
<br>
/home/phargrov/OMPI/openmpi-1.10.0rc5-linux-x86-mx-static/BLD/opal/.libs/libopen-pal.a
<br>
../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread
<br>
<p><p>I have no reason to suspect this is not also present in 1.8.x, but have not
<br>
checked.
<br>
Sometime after 1.10.0 is out to door, I expect to test the v1.8 nightly
<br>
tarball.
<br>
<p>-Paul [who enjoyed breaking his toys as a child and now breaks software
<br>
with the same enthusiasm]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Previous message:</strong> <a href="17802.php">Paul Hargrove: "Re: [OMPI devel] v1.10.0rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
<li><strong>Reply:</strong> <a href="17804.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc5 - mx problem when compiled statically"</a>
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
