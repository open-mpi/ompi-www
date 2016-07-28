<?
$subject_val = "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  2 17:23:17 2014" -->
<!-- isoreceived="20140802212317" -->
<!-- sent="Sat, 2 Aug 2014 14:23:15 -0700" -->
<!-- isosent="20140802212315" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)" -->
<!-- id="CAAvDA15kqWU47ME-U_yXm03idpXBu9oz9FsfTByZe4G5eCPvcQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37420EDD-D8CC-4031-A5E3-8C53147F73C6_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-02 17:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15478.php">Paul Hargrove: "Re: [OMPI devel] Trak missing Versions for 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="15476.php">Ralph Castain: "Re: [OMPI devel] Trak missing Versions for 1.8.x"</a>
<li><strong>In reply to:</strong> <a href="15475.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I understand that I am likely the only one in a position to test.
<br>
<p>I have already completed initial testing of the approach in the bug report
<br>
you fount at sourceforge: excise the sole *unused* routine that calls
<br>
arc4random_addrandom().
<br>
<p>Assuming the remainder of my testing is successful, I will soon attach a
<br>
patch to the trac issue (#4829).  It is up to you and the other core
<br>
developers to decide whether to CMR for inclusion 1.8.2, 1.8.3 or leave for
<br>
1.9.  I will not push to delay 1.8.2 for OpenBSD support.
<br>
<p>-Paul
<br>
<p><p>On Sat, Aug 2, 2014 at 2:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; To be clear, I fully support what you say. Ordinarily, I would just do the
</span><br>
<span class="quotelev1">&gt; port, but sadly (a) I am totally buried at work right now, and (b) I have
</span><br>
<span class="quotelev1">&gt; no way to verify that the patches actually work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If/when you have time, do let me know the results and I'll be happy to
</span><br>
<span class="quotelev1">&gt; proceed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 2, 2014, at 12:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My position on support for OpenBSD is the same as the numerous other
</span><br>
<span class="quotelev1">&gt; operating systems, cpu architectures and compilers I help test on.  I feel
</span><br>
<span class="quotelev1">&gt; that every additional platform for which one can maintain support improves
</span><br>
<span class="quotelev1">&gt; the chance of catching bugs in ones code and reduces the effort to port to
</span><br>
<span class="quotelev1">&gt; new platforms in the future, making portability a goal rather than just a
</span><br>
<span class="quotelev1">&gt; means to ones ends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore, I believe that resolving portability issues is deserving of
</span><br>
<span class="quotelev1">&gt; effort that may seem out of proportion to the number of potential users of
</span><br>
<span class="quotelev1">&gt; a given port.  Keep in mind that when I have time I aggressively test to
</span><br>
<span class="quotelev1">&gt; help ensure the wide portability of Open MPI despite the fact that I have
</span><br>
<span class="quotelev1">&gt; never written an MPI application outside of course work (over ten years
</span><br>
<span class="quotelev1">&gt; ago).  I am not an MPI developer or user - I am an advocate for portable
</span><br>
<span class="quotelev1">&gt; HPC middleware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unless somebody beat me to it, I will create a ticket for this issue
</span><br>
<span class="quotelev1">&gt; assigning it to myself.
</span><br>
<span class="quotelev1">&gt; If/when I have the time I will try libevent patches to resolve the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the possibility that this is fixed in a later libevent than is
</span><br>
<span class="quotelev1">&gt; packaged with Open MPI, I had a look at the OpenBSD ports tree.  They have
</span><br>
<span class="quotelev1">&gt; libevent-2.0.21-stable and still apply patches to remove the use of
</span><br>
<span class="quotelev1">&gt; arc4random_addrandom().  I believe that is the same version packages with
</span><br>
<span class="quotelev1">&gt; Open MPI and so their patches will be the starting point for trying to fix
</span><br>
<span class="quotelev1">&gt; libevent in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now having said all of that, I find that the OpenBSD ports tree and
</span><br>
<span class="quotelev1">&gt; repository of binary packages still contain Open MPI 1.4.1 (and nothing
</span><br>
<span class="quotelev1">&gt; newer) and no version of mpich at all (and thankfully no LAM/MPI).  This
</span><br>
<span class="quotelev1">&gt; suggests that either
</span><br>
<span class="quotelev1">&gt; a) there is no demand at all for MPI on OpenBSD
</span><br>
<span class="quotelev1">&gt; b) there are users working building from sources
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, there is absolutely no reason to believe there is any time sensitivity
</span><br>
<span class="quotelev1">&gt; for resolution of this issue.  Only I am likely to ever notice the lack of
</span><br>
<span class="quotelev1">&gt; OpenBSD support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 2, 2014 at 11:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was apparently somewhat recent - here is the OpenBSD ticket
</span><br>
<span class="quotelev2">&gt;&gt; regarding it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sourceforge.net/p/levent/bugs/320/">http://sourceforge.net/p/levent/bugs/320/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If someone feels it important that we continue supporting OpenBSD, one
</span><br>
<span class="quotelev2">&gt;&gt; might explore the solution recommended in that ticket. It's also possible
</span><br>
<span class="quotelev2">&gt;&gt; that the libevent guys are working on solving it too (or may have already
</span><br>
<span class="quotelev2">&gt;&gt; done so in a later version than we include)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 1, 2014, at 4:07 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am seeing the following on OpenBSD/amd64 with &quot;make V=1&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/wrappers
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool  --tag=CC    --mode=link gcc -std=gnu99  -g
</span><br>
<span class="quotelev2">&gt;&gt; -finline-functions -fno-strict-aliasing -pthread   -export-dynamic   -o
</span><br>
<span class="quotelev2">&gt;&gt; opal_wrapper opal_wrapper.o ../../../opal/libopen-pal.la -lutil -lm
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pthread -o .libs/opal_wrapper opal_wrapper.o -Wl,-E  -L../../../opal/.libs
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-pal -lpthread -lutil -lm -pthread
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath,/home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: vsprintf() is often
</span><br>
<span class="quotelev2">&gt;&gt; misused, please use vsnprintf()
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: strcpy() is almost
</span><br>
<span class="quotelev2">&gt;&gt; always misused, please use strlcpy()
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: random() isn't random;
</span><br>
<span class="quotelev2">&gt;&gt; consider using arc4random()
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: strcat() is almost
</span><br>
<span class="quotelev2">&gt;&gt; always misused, please use strlcat()
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so.8.0: warning: sprintf() is often
</span><br>
<span class="quotelev2">&gt;&gt; misused, please use snprintf()
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.so.8.0: undefined reference to
</span><br>
<span class="quotelev2">&gt;&gt; `arc4random_addrandom'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; *** Error 1 in opal/tools/wrappers (Makefile:1623 'opal_wrapper')
</span><br>
<span class="quotelev2">&gt;&gt; *** Error 1 in opal (Makefile:2145 'all-recursive')
</span><br>
<span class="quotelev2">&gt;&gt; *** Error 1 in /home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/BLD
</span><br>
<span class="quotelev2">&gt;&gt; (Makefile:1689 'all-recursive')
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ignoring OpenBSD's typical warnings about functions their developers
</span><br>
<span class="quotelev2">&gt;&gt; don't like there is an undefined reference to arc4random_addrandom.  The
</span><br>
<span class="quotelev2">&gt;&gt; only explicit reference appears to be in libevent:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ grep -rlw arc4random_addrandom .
</span><br>
<span class="quotelev2">&gt;&gt; ./opal/mca/event/libevent2021/libevent/evutil_rand.c
</span><br>
<span class="quotelev2">&gt;&gt; ./opal/mca/event/libevent2021/libevent/arc4random.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appears that OpenBSD has arc4random, but no arc4random_addrandom():
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/stdlib.h:u_int32_t arc4random(void);
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/stdlib.h:u_int32_t arc4random_uniform(u_int32_t);
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/stdlib.h:void arc4random_buf(void *, size_t)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to work-around this by adding  &quot;ac_cv_func_arc4random=no&quot; to the
</span><br>
<span class="quotelev2">&gt;&gt; configure command line, but that creates secondary problems because the #if
</span><br>
<span class="quotelev2">&gt;&gt; logic in libevent doesn't allow for the case that arc4random() does not
</span><br>
<span class="quotelev2">&gt;&gt; exist but arc4random_buf() does:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In file included from
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/openmpi-1.8.2rc3/opal/mca/event/libev
</span><br>
<span class="quotelev2">&gt;&gt; ent2021/libevent/evutil_rand.c:119:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/openmpi-1.8.2rc3-openbsd5-amd64/openmpi-1.8.2rc3/opal/mca/event/libevent2021/libevent/./arc
</span><br>
<span class="quotelev2">&gt;&gt; 4random.c:482: error: static declaration of 'arc4random_buf' follows
</span><br>
<span class="quotelev2">&gt;&gt; non-static declaration
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/stdlib.h:308: error: previous declaration of
</span><br>
<span class="quotelev2">&gt;&gt; 'arc4random_buf' was here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Use of --with-libevent=... was no use because the pre-built libevent
</span><br>
<span class="quotelev2">&gt;&gt; package for OpenBSD lacks thread support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I am left without any recipe to build 1.8.2rc3 on OpenBSD.
</span><br>
<span class="quotelev2">&gt;&gt; HOWEVER, is appears that 1.8, 1.8.1 and trunk all have the same problem.
</span><br>
<span class="quotelev2">&gt;&gt; Of course, I am the only one who tests Open MPI on OpenBSD, and I don't
</span><br>
<span class="quotelev2">&gt;&gt; actually USE it.
</span><br>
<span class="quotelev2">&gt;&gt; So, this is not any sort of a priority as far as I am concerned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15466.php">http://www.open-mpi.org/community/lists/devel/2014/08/15466.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15472.php">http://www.open-mpi.org/community/lists/devel/2014/08/15472.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15473.php">http://www.open-mpi.org/community/lists/devel/2014/08/15473.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15475.php">http://www.open-mpi.org/community/lists/devel/2014/08/15475.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15478.php">Paul Hargrove: "Re: [OMPI devel] Trak missing Versions for 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="15476.php">Ralph Castain: "Re: [OMPI devel] Trak missing Versions for 1.8.x"</a>
<li><strong>In reply to:</strong> <a href="15475.php">Ralph Castain: "Re: [OMPI devel] [1.8.2rc3] build failure on OpenBSD (libevent)"</a>
<!-- nextthread="start" -->
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
