<?
$subject_val = "Re: [OMPI devel] [patch] Verifying the message queue DLL build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 09:37:19 2009" -->
<!-- isoreceived="20091209143719" -->
<!-- sent="Wed, 09 Dec 2009 14:37:11 +0000" -->
<!-- isosent="20091209143711" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] Verifying the message queue DLL build" -->
<!-- id="1260369431.21674.79.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1E646D.4090801_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] Verifying the message queue DLL build<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 09:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="7210.php">Jeff Squyres: "[OMPI devel] Open MPI v1.4 release: explanation"</a>
<li><strong>In reply to:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-12-08 at 09:36 -0500, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; You can get it from the svn branch repo:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi/branches/v1.5">https://svn.open-mpi.org/svn/ompi/branches/v1.5</a>
</span><br>
<span class="quotelev1">&gt; You might as well also try 1.4 which should also be clean:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi/branches/v1.4">https://svn.open-mpi.org/svn/ompi/branches/v1.4</a>
</span><br>
<p>I can confirm that for both branches the patch applies cleanly, the test
<br>
is run and that the test passes.  For v1.4 I did a in-tree build, for
<br>
v1.5 I did a VPATH build.
<br>
<p>There was an error in the v1.4 code though, after my check had passed
<br>
the check command went on to fail with this error.  This is a fresh
<br>
checkout, r22287M with the only configure option specified being
<br>
--prefix
<br>
<p>The checks did pass if I ran &quot;make install&quot; before running &quot;make check&quot;,
<br>
the v1.5 tree didn't need this however.  I guess that means this is a
<br>
build issue rather than a problem with the actual code.
<br>
<p>Ashley,
<br>
<p>/bin/sh ../../libtool --tag=CC   --mode=link gcc  -g -Wall -Wundef
<br>
-Wno-long-long -Wsign-compare -Wmissing-prototypes -Wstrict-prototypes
<br>
-Wcomment -pedantic -Wno-long-double
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden  -export-dynamic   -o
<br>
ddt_pack ddt_pack.o ../../ompi/libmpi.la -lnsl -lutil  -lm 
<br>
libtool: link: gcc -g -Wall -Wundef -Wno-long-long -Wsign-compare
<br>
-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
<br>
-Wno-long-double -Werror-implicit-function-declaration
<br>
-finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
<br>
-o .libs/ddt_pack ddt_pack.o
<br>
-Wl,--export-dynamic  ../../ompi/.libs/libmpi.so -lnsl -lutil -lm
<br>
-pthread -Wl,-rpath -Wl,/tmp/v1.4/lib
<br>
make[3]: Leaving directory
<br>
`/mnt/home/debian/ashley/code/tmp/v1.4/test/datatype'
<br>
make  check-TESTS
<br>
make[3]: Entering directory
<br>
`/mnt/home/debian/ashley/code/tmp/v1.4/test/datatype'
<br>
/mnt/home/debian/ashley/code/tmp/v1.4/test/datatype/.libs/lt-checksum:
<br>
error while loading shared libraries: libopen-pal.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
FAIL: checksum
<br>
/mnt/home/debian/ashley/code/tmp/v1.4/test/datatype/.libs/lt-position:
<br>
error while loading shared libraries: libopen-pal.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
FAIL: position
<br>
========================================================
<br>
2 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: Leaving directory
<br>
`/mnt/home/debian/ashley/code/tmp/v1.4/test/datatype'
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory
<br>
`/mnt/home/debian/ashley/code/tmp/v1.4/test/datatype'
<br>
make[1]: Leaving directory `/mnt/home/debian/ashley/code/tmp/v1.4/test'
<br>
make[1]: *** [check-recursive] Error 1
<br>
make: *** [check-recursive] Error 1
<br>
ashley_at_alpha:~/code/tmp/v1.4$ 
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="7210.php">Jeff Squyres: "[OMPI devel] Open MPI v1.4 release: explanation"</a>
<li><strong>In reply to:</strong> <a href="7203.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7222.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
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
