<?
$subject_val = "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 10:56:31 2009" -->
<!-- isoreceived="20090612145631" -->
<!-- sent="Fri, 12 Jun 2009 08:56:16 -0600" -->
<!-- isosent="20090612145616" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &amp;quot;CFLAGS=-pg -g&amp;quot;)" -->
<!-- id="9F2E88C5-8F5C-4AC6-A7F5-9CF6B559CC7F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8CAA9208-1224-49AE-ACCB-8999BF496640_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 10:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you do a &quot;./configure --help&quot; you will get a complete list of the  
<br>
configure options. You may want to turn on more things than just  
<br>
enable-debug, though that is the critical first step.
<br>
<p><p>On Jun 12, 2009, at 8:31 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me begin by stating that I'm at most an Open MPI novice - but  
</span><br>
<span class="quotelev1">&gt; you may want to try the addition of the --enable-debug configure  
</span><br>
<span class="quotelev1">&gt; option.  That is, for example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --enable-debug; make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2009, at 3:27 AM, Leo P. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to understand the openMPI code so was trying to enable  
</span><br>
<span class="quotelev2">&gt;&gt; debug and profiling by issusing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ make &quot;CFLAGS=-pg -g&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But i am getting this error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;mca_paffinity_linux.la&quot; &amp;&amp; ln  
</span><br>
<span class="quotelev2">&gt;&gt; -s &quot;../mca_paffinity_linux.la&quot; &quot;mca_paffinity_linux.la&quot; )
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; paffinity/linux'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; paffinity/linux'
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/Desktop/openmpi-1.3.2/opal/tools/ 
</span><br>
<span class="quotelev2">&gt;&gt; wrappers'
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt;     gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/ 
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/ 
</span><br>
<span class="quotelev2">&gt;&gt; plpa/src/libplpa   -I../../..    -pg -g -MT opal_wrapper.o -MD -MP - 
</span><br>
<span class="quotelev2">&gt;&gt; MF $depbase.Tpo -c -o opal_wrapper.o opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt;     mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -pg -g  - 
</span><br>
<span class="quotelev2">&gt;&gt; export-dynamic   -o opal_wrapper opal_wrapper.o ../../../opal/ 
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -pg -g -o .libs/opal_wrapper opal_wrapper.o - 
</span><br>
<span class="quotelev2">&gt;&gt; Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lnsl - 
</span><br>
<span class="quotelev2">&gt;&gt; lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `pthread_key_create'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `pthread_getspecific'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `pthread_create'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `pthread_atfork'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `pthread_setspecific'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev2">&gt;&gt; `pthread_join'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home//Desktop/openmpi-1.3.2/opal/tools/ 
</span><br>
<span class="quotelev2">&gt;&gt; wrappers'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any other way of enabling debugging and profilling in open  
</span><br>
<span class="quotelev2">&gt;&gt; MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Explore your hobbies and interests. Click here to  
</span><br>
<span class="quotelev2">&gt;&gt; begin._______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6224.php">Samuel K. Gutierrez: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
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
