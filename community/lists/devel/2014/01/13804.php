<?
$subject_val = "[OMPI devel] 1.7.4rc: build failure on mips32";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 22:00:29 2014" -->
<!-- isoreceived="20140118030029" -->
<!-- sent="Fri, 17 Jan 2014 19:00:27 -0800" -->
<!-- isosent="20140118030027" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: build failure on mips32" -->
<!-- id="CAAvDA14c=dsstvd70ZNQjRqeazHjr7Vph6ohzvPznKf98F7cVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: build failure on mips32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 22:00:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="13803.php">Paul Hargrove: "[OMPI devel] Compiler family probe broken [w/ patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
<li><strong>Reply:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to build 1.7.4rc2r30303 with gcc on linux/mips32 yields the
<br>
following failure:
<br>
<p>&nbsp;&nbsp;CXX      mpicxx.lo
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:31:2:
<br>
warning: #ident is a deprecated GCC extension
<br>
In file included from
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/class/opal_pointer_array.h:37,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/errhandler/errhandler.h:32,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/ompi/mpi/cxx/mpicxx.cc:37:
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h:
<br>
In function 'int64_t OPAL_THREAD_ADD64(volatile int64_t*, int)':
<br>
/home/phargrov/OMPI/openmpi-1.7.4-latest-linux-mips32/openmpi-1.7.4rc2r30303/opal/threads/mutex.h:292:
<br>
error: 'opal_atomic_add_64' was not declared in this scope
<br>
<p>This looks VERY similar to the problem I reported recently w/ xlc on ppc32
<br>
( <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13801.php">http://www.open-mpi.org/community/lists/devel/2014/01/13801.php</a> )
<br>
I am checking gcc on ppc32 now...
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13804/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13805.php">Ralph Castain: "Re: [OMPI devel] Compiler family probe broken [w/ patch]"</a>
<li><strong>Previous message:</strong> <a href="13803.php">Paul Hargrove: "[OMPI devel] Compiler family probe broken [w/ patch]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
<li><strong>Reply:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
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
