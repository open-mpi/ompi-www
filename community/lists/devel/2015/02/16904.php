<?
$subject_val = "Re: [OMPI devel] Build failure on OpenBSD (deja vu)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 23:36:09 2015" -->
<!-- isoreceived="20150203043609" -->
<!-- sent="Mon, 2 Feb 2015 20:36:07 -0800" -->
<!-- isosent="20150203043607" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failure on OpenBSD (deja vu)" -->
<!-- id="CAMD57oe-aRD5PmSzOTOkJyJ=_yZS7tvspb4BCK4zXDOrMdnuPg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA17021gxG-bMGRUgCfGM39a8ZFtdKYX0qOqcRsFezSK_cQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build failure on OpenBSD (deja vu)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 23:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>Previous message:</strong> <a href="16903.php">Paul Hargrove: "[OMPI devel] Master build failure w/ Solaris Studio 12.3 on Linux/x86-64"</a>
<li><strong>In reply to:</strong> <a href="16894.php">Paul Hargrove: "[OMPI devel] Build failure on OpenBSD (deja vu)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see what happened - we upgraded libevent not that long ago, and I tried
<br>
to catch all the OMPI-committed changes to it. However, I appear to have
<br>
missed this one.
<br>
<p>I'll fix it now. Sorry about that...
<br>
Ralph
<br>
<p><p>On Mon, Feb 2, 2015 at 6:11 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The following comes from testing Jeff's no-embedded-libltdl work, but I
</span><br>
<span class="quotelev1">&gt; suspect the same is true on tru^H^H^Hmaster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output below, from &quot;make V=1&quot; shows a link failure from trying to use
</span><br>
<span class="quotelev1">&gt; arc4random_addrandom(), which was removed on OpenBSD in late 2013.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The part that bugs me is that I thought Ralph had fixed this in v1.8
</span><br>
<span class="quotelev1">&gt; already!
</span><br>
<span class="quotelev1">&gt; See <a href="https://svn.open-mpi.org/trac/ompi/ticket/4829">https://svn.open-mpi.org/trac/ompi/ticket/4829</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI: The warnings are just the standard Open BSD paranoia and don't
</span><br>
<span class="quotelev1">&gt; indicate any real problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC    --mode=link gcc -std=gnu99  -g
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread    -o opal_wrapper
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o ../../../opal/libopen-pal.la -lm -lutil   -lm -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt; -pthread -o .libs/opal_wrapper opal_wrapper.o  -L../../../opal/.libs
</span><br>
<span class="quotelev1">&gt; -lopen-pal -lpthread -lm -lutil -pthread
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/home/phargrov/OMPI/openmpi-libltdl-openbsd5-amd64/INST/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.0.0: warning: vsprintf() is often
</span><br>
<span class="quotelev1">&gt; misused, please use vsnprintf()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.0.0: warning: strcpy() is almost always
</span><br>
<span class="quotelev1">&gt; misused, please use strlcpy()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.0.0: warning: random() isn't random;
</span><br>
<span class="quotelev1">&gt; consider using arc4random()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.0.0: warning: strcat() is almost always
</span><br>
<span class="quotelev1">&gt; misused, please use strlcat()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.0.0: warning: sprintf() is often
</span><br>
<span class="quotelev1">&gt; misused, please use snprintf()
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so.0.0: undefined reference to
</span><br>
<span class="quotelev1">&gt; `arc4random_addrandom'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
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
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16894.php">http://www.open-mpi.org/community/lists/devel/2015/02/16894.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16905.php">Ralph Castain: "Re: [OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>Previous message:</strong> <a href="16903.php">Paul Hargrove: "[OMPI devel] Master build failure w/ Solaris Studio 12.3 on Linux/x86-64"</a>
<li><strong>In reply to:</strong> <a href="16894.php">Paul Hargrove: "[OMPI devel] Build failure on OpenBSD (deja vu)"</a>
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
