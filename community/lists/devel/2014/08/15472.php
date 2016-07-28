<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 14:47:05 2014" -->
<!-- isoreceived="20140802184705" -->
<!-- sent="Sat, 2 Aug 2014 11:46:53 -0700" -->
<!-- isosent="20140802184653" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)" -->
<!-- id="EB7216E4-711F-4530-9380-CC62FAAD5749_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17hF+G_-CfaEyoX=R_BEH+NH1iQb0Zw9-A4gemjZ7s0qg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-02 14:46:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15473.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Previous message:</strong> <a href="15471.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15466.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15473.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Reply:</strong> <a href="15473.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was apparently somewhat recent - here is the OpenBSD ticket regarding it:
<br>
<p><a href="http://sourceforge.net/p/levent/bugs/320/">http://sourceforge.net/p/levent/bugs/320/</a>
<br>
<p>If someone feels it important that we continue supporting OpenBSD, one might explore the solution recommended in that ticket. It's also possible that the libevent guys are working on solving it too (or may have already done so in a later version than we include)
<br>
<p><p>On Aug 1, 2014, at 4:07 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am seeing the following on OpenBSD/amd64 with &quot;make V=1&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC    --mode=link gcc -std=gnu99  -g -finline-functions -fno-strict-aliasing -pthread   -export-dynamic   -o opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lutil -lm 
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing -pthread -o .libs/opal_wrapper opal_wrapper.o -Wl,-E  -L../../../opal/.libs -lopen-pal -lpthread -lutil -lm -pthread -Wl,-rpath,/home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/INST/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: vsprintf() is often misused, please use vsnprintf()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: strcpy() is almost always misused, please use strlcpy()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: random() isn't random; consider using arc4random()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: strcat() is almost always misused, please use strlcat()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: sprintf() is often misused, please use snprintf()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.8.0: undefined reference to `arc4random_addrandom'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; *** Error 1 in opal/tools/wrappers (Makefile:1623 'opal_wrapper')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in opal (Makefile:2145 'all-recursive')
</span><br>
<span class="quotelev1">&gt; *** Error 1 in /home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/BLD (Makefile:1689 'all-recursive')
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ignoring OpenBSD's typical warnings about functions their developers don't like there is an undefined reference to arc4random_addrandom.  The only explicit reference appears to be in libevent:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ grep -rlw arc4random_addrandom .
</span><br>
<span class="quotelev1">&gt; ./opal/mca/event/libevent2021/libevent/evutil_rand.c
</span><br>
<span class="quotelev1">&gt; ./opal/mca/event/libevent2021/libevent/arc4random.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that OpenBSD has arc4random, but no arc4random_addrandom():
</span><br>
<span class="quotelev1">&gt; /usr/include/stdlib.h:u_int32_t arc4random(void);
</span><br>
<span class="quotelev1">&gt; /usr/include/stdlib.h:u_int32_t arc4random_uniform(u_int32_t);
</span><br>
<span class="quotelev1">&gt; /usr/include/stdlib.h:void arc4random_buf(void *, size_t)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to work-around this by adding  &quot;ac_cv_func_arc4random=no&quot; to the configure command line, but that creates secondary problems because the #if logic in libevent doesn't allow for the case that arc4random() does not exist but arc4random_buf() does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from /home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/openmpi-1.8.2rc3/opal/mca/event/libev
</span><br>
<span class="quotelev1">&gt; ent2021/libevent/evutil_rand.c:119:
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/openmpi-1.8.2rc3/opal/mca/event/libevent2021/libevent/./arc
</span><br>
<span class="quotelev1">&gt; 4random.c:482: error: static declaration of 'arc4random_buf' follows non-static declaration
</span><br>
<span class="quotelev1">&gt; /usr/include/stdlib.h:308: error: previous declaration of 'arc4random_buf' was here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Use of --with-libevent=... was no use because the pre-built libevent package for OpenBSD lacks thread support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I am left without any recipe to build 1.8.2rc3 on OpenBSD.
</span><br>
<span class="quotelev1">&gt; HOWEVER, is appears that 1.8, 1.8.1 and trunk all have the same problem.
</span><br>
<span class="quotelev1">&gt; Of course, I am the only one who tests Open MPI on OpenBSD, and I don't actually USE it.
</span><br>
<span class="quotelev1">&gt; So, this is not any sort of a priority as far as I am concerned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15466.php">http://www.open-mpi.org/community/lists/devel/2014/08/15466.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15473.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Previous message:</strong> <a href="15471.php">Ralph Castain: "Re: [OMPI devel] Trunk broken for PPC64?"</a>
<li><strong>In reply to:</strong> <a href="15466.php">Paul Hargrove: "[OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15473.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<li><strong>Reply:</strong> <a href="15473.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
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
