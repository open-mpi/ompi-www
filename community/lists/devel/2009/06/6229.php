<?
$subject_val = "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 15:57:05 2009" -->
<!-- isoreceived="20090612195705" -->
<!-- sent="Fri, 12 Jun 2009 13:56:48 -0600" -->
<!-- isosent="20090612195648" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &amp;quot;CFLAGS=-pg -g&amp;quot;)" -->
<!-- id="6B0DF8B2-F7DE-48E7-9792-427BF9D9D8FF_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52863.42507.qm_at_web8704.mail.in.yahoo.com" -->
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
<strong>Date:</strong> 2009-06-12 15:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6230.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6228.php">Eugene Loh: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The firewall should already be solved. Basically, you have to define a  
<br>
set of ports in your firewall that will let TCP messages pass through,  
<br>
and then tell OMPI to use those ports for both the TCP BTL and the OOB.
<br>
<p>&quot;ompi_info --params btl tcp&quot; - will tell you the right param to set  
<br>
for the TCP BTL
<br>
<p>&quot;ompi_info --params oob tcp&quot; will do the same for the OOB
<br>
<p>Of course, that -does- leave a hole in your firewall that any TCP  
<br>
message can exploit. :-/  You could look at more secure alternative  
<br>
ways.
<br>
<p>I'm not sure how to solve the NAT problem as it boils down to how to  
<br>
specify the names/IP addresses of the nodes behind the NAT. Someone  
<br>
who understands NATs better can help you there - I know there is a way  
<br>
to do it, but I've never played with it.
<br>
<p>Ralph
<br>
<p><p>On Jun 12, 2009, at 11:00 AM, Leo P. wrote:
<br>
<p><span class="quotelev1">&gt; Thank you Ralph and Samuel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the complete newbie question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason that i wanted to study openMPI is because i wanted to  
</span><br>
<span class="quotelev1">&gt; make open MPI support nodes that are behind NAT or firewall. If you  
</span><br>
<span class="quotelev1">&gt; guys could give me some pointers on how to go about doing this i  
</span><br>
<span class="quotelev1">&gt; would appreciate alot. I am considering this for my thesis project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; LEO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 12 June, 2009 9:56:16 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Enabling debugging and profiling in  
</span><br>
<span class="quotelev1">&gt; openMPI (make &quot;CFLAGS=-pg -g&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do a &quot;./configure --help&quot; you will get a complete list of the  
</span><br>
<span class="quotelev1">&gt; configure options. You may want to turn on more things than just  
</span><br>
<span class="quotelev1">&gt; enable-debug, though that is the critical first step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2009, at 8:31 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me begin by stating that I'm at most an Open MPI novice - but  
</span><br>
<span class="quotelev2">&gt;&gt; you may want to try the addition of the --enable-debug configure  
</span><br>
<span class="quotelev2">&gt;&gt; option.  That is, for example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-debug; make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 12, 2009, at 3:27 AM, Leo P. wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to understand the openMPI code so was trying to enable  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; debug and profiling by issusing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make &quot;CFLAGS=-pg -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But i am getting this error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;mca_paffinity_linux.la&quot; &amp;&amp;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ln -s &quot;../mca_paffinity_linux.la&quot; &quot;mca_paffinity_linux.la&quot; )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[3]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity/linux'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal/mca/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; paffinity/linux'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/Desktop/openmpi-1.3.2/opal/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools/wrappers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     gcc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte/include -I../../../ompi/include -I../../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux/plpa/src/libplpa   -I../../..    -pg -g -MT opal_wrapper.o - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MD -MP -MF $depbase.Tpo -c -o opal_wrapper.o opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/bash ../../../libtool --tag=CC   --mode=link gcc  -pg -g  - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export-dynamic   -o opal_wrapper opal_wrapper.o ../../../opal/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-pal.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: gcc -pg -g -o .libs/opal_wrapper opal_wrapper.o - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wl,--export-dynamic  ../../../opal/.libs/libopen-pal.so -ldl -lnsl  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lutil -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `pthread_key_create'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `pthread_getspecific'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `pthread_create'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `pthread_atfork'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `pthread_setspecific'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `pthread_join'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home//Desktop/openmpi-1.3.2/opal/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools/wrappers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/Desktop/openmpi-1.3.2/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any other way of enabling debugging and profilling in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Explore your hobbies and interests. Click here to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; begin._______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bollywood news, movie reviews, film trailers and more! Click  
</span><br>
<span class="quotelev1">&gt; here._______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6230.php">Nifty Tom Mitchell: "Re: [OMPI devel] Multi-rail on openib"</a>
<li><strong>Previous message:</strong> <a href="6228.php">Eugene Loh: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>In reply to:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6231.php">Leo P.: "[OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
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
