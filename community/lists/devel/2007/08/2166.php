<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 16:49:36 2007" -->
<!-- isoreceived="20070816204936" -->
<!-- sent="Thu, 16 Aug 2007 23:49:25 +0300 (IDT)" -->
<!-- isosent="20070816204925" -->
<!-- name="Alexander Margolin" -->
<!-- email="alexam02_at_[hidden]" -->
<!-- subject="[OMPI devel] simple compilation error" -->
<!-- id="58256.132.65.16.105.1187297365.squirrel_at_webmail.cs.huji.ac.il" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Alexander Margolin (<em>alexam02_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 16:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2167.php">Jeff Squyres: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Previous message:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2167.php">Jeff Squyres: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Reply:</strong> <a href="2167.php">Jeff Squyres: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Reply:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This question seems so simple - and yet i ask:
<br>
<p>I tried following all the steps in the manual:
<br>
<p>1) svn co <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a> ompi
<br>
2) &lt;changed some source code in ompi/mca/btl &gt; *
<br>
3) ./autogen.sh ; ./configure --prefix &lt;some folder&gt;
<br>
4) make all install
<br>
<p>what do I get? The following compilation error:
<br>
<p>...
<br>
make[2]: Leaving directory `somewhere/ompi/ompi/datatype'
<br>
Making all in debuggers
<br>
make[2]: Entering directory
<br>
`/a/mosna/vol/vol0/aa/alexam02/ompi/ompi/debuggers'
<br>
/bin/sh ../../libtool --tag=CC   --mode=compile gcc -DHAVE_CONFIG_H -I.
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../..   -g -Wall
<br>
-Wundef -Wno-long-long -Wsign-compare -Wmissing-prototypes
<br>
-Wstrict-prototypes -Wcomment -pedantic
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread -g -MT libompitv_la-ompi_dll.lo -MD -MP -MF
<br>
.deps/libompitv_la-ompi_dll.Tpo -c -o libompitv_la-ompi_dll.lo `test -f
<br>
'ompi_dll.c' || echo './'`ompi_dll.c
<br>
mkdir .libs
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
<br>
-I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare
<br>
-Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic
<br>
-Werror-implicit-function-declaration -finline-functions
<br>
-fno-strict-aliasing -pthread -g -MT libompitv_la-ompi_dll.lo -MD -MP -MF
<br>
.deps/libompitv_la-ompi_dll.Tpo -c ompi_dll.c  -fPIC -DPIC -o
<br>
.libs/libompitv_la-ompi_dll.o
<br>
ompi_dll.c:102: error: initializer element is not constant
<br>
make[2]: *** [libompitv_la-ompi_dll.lo] Error 1
<br>
make[2]: Leaving directory `somewhere/ompi/ompi/debuggers'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/a/mosna/vol/vol0/aa/alexam02/ompi/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>-Is there a problem with the specific checkout?
<br>
-How can i solve/work around the problem?
<br>
(tried removing deguggers directory - error in autogen.sh)
<br>
<p>* The i tried again without the modification and it still did the same error.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2167.php">Jeff Squyres: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Previous message:</strong> <a href="2165.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2167.php">Jeff Squyres: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Reply:</strong> <a href="2167.php">Jeff Squyres: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>Reply:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
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
