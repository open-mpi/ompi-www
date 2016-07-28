<?
$subject_val = "[OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 05:27:27 2009" -->
<!-- isoreceived="20090612092727" -->
<!-- sent="Fri, 12 Jun 2009 14:57:20 +0530 (IST)" -->
<!-- isosent="20090612092720" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="[OMPI devel] Enabling debugging and profiling in openMPI (make &amp;quot;CFLAGS=-pg -g&amp;quot;)" -->
<!-- id="877078.36113.qm_at_web8707.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 05:27:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6222.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pathscale C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,

I am trying to understand the openMPI code so was trying to enable debug and profiling by issusing 

$ make &quot;CFLAGS=-pg -g&quot;

But i am getting this error.

libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;mca_paffinity_linux.la&quot; &amp;&amp; ln -s &quot;../mca_paffinity_linux.la&quot; &quot;mca_paffinity_linux.la&quot; )
make[3]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/paffinity/linux'
make[2]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/paffinity/linux'
Making all in tools/wrappers
make[2]: Entering directory `/home/Desktop/openmpi-1.3.2/opal/tools/wrappers'
depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
    gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -pg -g -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o opal_wrapper.o opal_wrapper.c &amp;&amp;\
    mv -f $depbase.Tpo $depbase.Po
/bin/bash ../../../libtool --tag=CC   --mode=link gcc  -pg -g  -export-dynamic   -o opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lnsl -lutil  -lm 
libtool: link: gcc -pg -g -o .libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm
../../../opal/.libs/libopen-pal.so: undefined reference to `pthread_key_create'
../../../opal/.libs/libopen-pal.so: undefined reference to `pthread_getspecific'
../../../opal/.libs/libopen-pal.so: undefined reference to `pthread_create'
../../../opal/.libs/libopen-pal.so: undefined reference to `pthread_atfork'
../../../opal/.libs/libopen-pal.so: undefined reference to `pthread_setspecific'
../../../opal/.libs/libopen-pal.so: undefined reference to `pthread_join'
collect2: ld returned 1 exit status
make[2]: *** [opal_wrapper] Error 1
make[2]: Leaving directory `/home//Desktop/openmpi-1.3.2/opal/tools/wrappers'
make[1]: *** [all-recursive] Error 1
make[1]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal'
make: *** [all-recursive] Error 1

Is there any other way of enabling debugging and profilling in open MPI.

Leo


      Own a website.Get an unlimited package.Pay next to nothing.*Go to <a href="http://in.business.yahoo.com/">http://in.business.yahoo.com/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6223/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6222.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Pathscale C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
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
