<?
$subject_val = "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 13:00:56 2009" -->
<!-- isoreceived="20090612170056" -->
<!-- sent="Fri, 12 Jun 2009 22:30:49 +0530 (IST)" -->
<!-- isosent="20090612170049" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &amp;quot;CFLAGS=-pg -g&amp;quot;)" -->
<!-- id="52863.42507.qm_at_web8704.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9F2E88C5-8F5C-4AC6-A7F5-9CF6B559CC7F_at_open-mpi.org" -->
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
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 13:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6228.php">Eugene Loh: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph and Samuel. 

Sorry for the complete newbie question. 

The reason that i wanted to study openMPI is because i wanted to make open MPI support nodes that are behind NAT or firewall. If you guys could give me some pointers on how to go about doing this i would appreciate alot. I am considering this for my thesis project.

Sincerely,
LEO




________________________________
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Friday, 12 June, 2009 9:56:16 PM
Subject: Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)

If you do a &quot;./configure --help&quot; you will get a complete list of the configure options. You may want to turn on more things than just enable-debug, though that is the critical first step.



On Jun 12, 2009, at 8:31 AM, Samuel K. Gutierrez wrote:

Hi,

Let me begin by stating that I'm at most an Open MPI novice - but you may want to try the addition of the --enable-debug configure option.  That is, for example:

./configure --enable-debug; make

Hope this helps.

Samuel K. Gutierrez
 

On Jun 12, 2009, at 3:27 AM, Leo P. wrote:

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


________________________________
Explore your hobbies and interests. Click here to begin._______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>



      Bollywood news, movie reviews, film trailers and more! Go to <a href="http://in.movies.yahoo.com/">http://in.movies.yahoo.com/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6227/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6228.php">Eugene Loh: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6225.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Reply:</strong> <a href="6242.php">Nifty Tom Mitchell: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make	&quot;CFLAGS=-pg -g&quot;)"</a>
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
