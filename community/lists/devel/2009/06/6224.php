<?
$subject_val = "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 10:31:39 2009" -->
<!-- isoreceived="20090612143139" -->
<!-- sent="Fri, 12 Jun 2009 08:31:28 -0600" -->
<!-- isosent="20090612143128" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &amp;quot;CFLAGS=-pg -g&amp;quot;)" -->
<!-- id="8CAA9208-1224-49AE-ACCB-8999BF496640_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="877078.36113.qm_at_web8707.mail.in.yahoo.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 10:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6223.php">Leo P.: "[OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Leo P.: "[OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Let me begin by stating that I'm at most an Open MPI novice - but you  
<br>
may want to try the addition of the --enable-debug configure option.   
<br>
That is, for example:
<br>
<p>./configure --enable-debug; make
<br>
<p>Hope this helps.
<br>
<p>Samuel K. Gutierrez
<br>
<p>On Jun 12, 2009, at 3:27 AM, Leo P. wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to understand the openMPI code so was trying to enable  
</span><br>
<span class="quotelev1">&gt; debug and profiling by issusing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make &quot;CFLAGS=-pg -g&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i am getting this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;mca_paffinity_linux.la&quot; &amp;&amp; ln - 
</span><br>
<span class="quotelev1">&gt; s &quot;../mca_paffinity_linux.la&quot; &quot;mca_paffinity_linux.la&quot; )
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/linux'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/ 
</span><br>
<span class="quotelev1">&gt; paffinity/linux'
</span><br>
<span class="quotelev1">&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/Desktop/openmpi-1.3.2/opal/tools/ 
</span><br>
<span class="quotelev1">&gt; wrappers'
</span><br>
<span class="quotelev1">&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt;     gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/ 
</span><br>
<span class="quotelev1">&gt; plpa/src/libplpa   -I../../..    -pg -g -MT opal_wrapper.o -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF $depbase.Tpo -c -o opal_wrapper.o opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;     mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -pg -g  - 
</span><br>
<span class="quotelev1">&gt; export-dynamic   -o opal_wrapper opal_wrapper.o ../../../opal/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -pg -g -o .libs/opal_wrapper opal_wrapper.o -Wl,-- 
</span><br>
<span class="quotelev1">&gt; export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil  
</span><br>
<span class="quotelev1">&gt; -lm
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_key_create'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_getspecific'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_create'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_atfork'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_setspecific'
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `pthread_join'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home//Desktop/openmpi-1.3.2/opal/tools/ 
</span><br>
<span class="quotelev1">&gt; wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any other way of enabling debugging and profilling in open  
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Explore your hobbies and interests. Click here to  
</span><br>
<span class="quotelev1">&gt; begin._______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6223.php">Leo P.: "[OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Leo P.: "[OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
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
