<?
$subject_val = "Re: [OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 01:31:33 2014" -->
<!-- isoreceived="20141217063133" -->
<!-- sent="Wed, 17 Dec 2014 15:31:32 +0900" -->
<!-- isosent="20141217063132" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="54912344.7070106_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57ofbJ0UTk0k5Wwf_+t1YdBNHBT0POwE6oZgV0HN=iq+YYw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 01:31:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16629.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16629.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16629.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i think that will not work.
<br>
<p>here is the full story :
<br>
<p>once upon a time, on solaris, we did not try to compile pthread'ed app
<br>
without any special parameters.
<br>
that was a minor annoyance on solaris 10 with old gcc : configure passed
<br>
a flag (-pthread if i remember correctly)
<br>
that was not supported by gcc (at that time) and generated tons of warnings.
<br>
when i asked &quot;why don't we just try no special parameter on solaris ?&quot; i
<br>
was replied this is because looong time ago
<br>
openmpi used solaris lwp, so solaris was &quot;special&quot; anyway.
<br>
since solaris is able to build (compile+link) a pthread'ed app without
<br>
any flags, i removed the special case for solaris,
<br>
and no flag was used.
<br>
then i noticed that lead to bad code (errno is global instead of per
<br>
thread specific), so you automatically added -D_REENTRANT
<br>
on solaris (e.g. if the __sun__ macro is defined)
<br>
then i found that solarisstudio compilers do not define the __sun__macro
<br>
automatically (__sun and sun are defined) so i improved
<br>
the test (e.g. we are on solaris if __sun__ or __sun is defined)
<br>
this was merged (yesterday) and is not in rc4
<br>
<p>what we should do know is unclear for me ...
<br>
is -D_REENTRANT enough for gcc compilers on solaris ?
<br>
is -D_REENTRANT *not* enough for solarisstudio compilers on solaris ?
<br>
/* if -D_REENTRANT is *not* enough, then we all we have to do is use -mt
<br>
since that implies -D_REENTRANT */
<br>
<p><p>a working solution (minus the minor annoyance i described earlier) is to
<br>
restore
<br>
config/opal_check_os_flavors.m4
<br>
config/ompi_config_pthreads.m4
<br>
<p>and then i ll find a better way to correctly set the flags that must be
<br>
used on solaris
<br>
<p>that being said, and based on Paul's availability, i d rather have a new
<br>
tarball (rc5?) tested.
<br>
(do we *really* need -mt ? isn't -D_REENTRANT enough ?)
<br>
this tarball must include
<br>
<a href="https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83">https://github.com/open-mpi/ompi-release/commit/ac8b84ce674b958dbf8c9481b300beeef0548b83</a>
<br>
<p>configury: test the __sun macro to detect solaris OS.
<br>
<p><p>FWIW. i was unable to reproduce the problem on solaris 11 with sunstudio
<br>
12.4 even if i do not use -D_REENTRANT *nor* -mt (!)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/17 15:01, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try the attached patch? It would require running autogen, I fear.
</span><br>
<span class="quotelev1">&gt; Otherwise, I can add it to the tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 16, 2014 at 9:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 1.8.3 test works where the 1.8.4rc4 one fails with identical configure
</span><br>
<span class="quotelev2">&gt;&gt; arguments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While it may be overkill, I configured 1.8.4rc4 with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    CFLAGS=&quot;-m64 -mt&quot; --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;    LDFLAGS=&quot;-mt&quot; --with-wrapper-ldflags=&quot;-mt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The resulting run worked!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I very strongly suspect that the problem will be resolved if one
</span><br>
<span class="quotelev2">&gt;&gt; restores the configure logic that my previous email shows has vanished
</span><br>
<span class="quotelev2">&gt;&gt; (since that would restore &quot;-mt&quot; to CFLAGS and wrapper cflags).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 16, 2014 at 8:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My 1.8.3 build has not completed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOWEVER, I can already see a key difference in the configure step.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In 1.8.3 &quot;-mt&quot; was added AUTOMATICALLY to CFLAGS by configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work as is... no - Solaris, not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C++ compiler and POSIX threads work as is... no - Solaris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not checked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler and POSIX threads work as is... no -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris, not checked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work with -pthread... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work with -pthreads... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work with -mt... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not the case in 1.8.4rc4:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C++ compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it looks like a chunk of Solaris-specific configure logic was LOST.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16625.php">http://www.open-mpi.org/community/lists/devel/2014/12/16625.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16626.php">http://www.open-mpi.org/community/lists/devel/2014/12/16626.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16629.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16629.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16629.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
