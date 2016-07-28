<?
$subject_val = "Re: [OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 01:02:00 2014" -->
<!-- isoreceived="20141217060200" -->
<!-- sent="Tue, 16 Dec 2014 22:01:57 -0800" -->
<!-- isosent="20141217060157" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="CAMD57ofbJ0UTk0k5Wwf_+t1YdBNHBT0POwE6oZgV0HN=iq+YYw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAAvDA17EDXud6jD7oeQjzYCdqqjEss1JYKd=DLCixvh_PF9WoQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 01:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16628.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul
<br>
<p>Can you try the attached patch? It would require running autogen, I fear.
<br>
Otherwise, I can add it to the tarball.
<br>
<p>Ralph
<br>
<p><p>On Tue, Dec 16, 2014 at 9:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The 1.8.3 test works where the 1.8.4rc4 one fails with identical configure
</span><br>
<span class="quotelev1">&gt; arguments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While it may be overkill, I configured 1.8.4rc4 with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-m64 -mt&quot; --with-wrapper-cflags=&quot;-m64 -mt&quot; \
</span><br>
<span class="quotelev1">&gt;    LDFLAGS=&quot;-mt&quot; --with-wrapper-ldflags=&quot;-mt&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The resulting run worked!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I very strongly suspect that the problem will be resolved if one
</span><br>
<span class="quotelev1">&gt; restores the configure logic that my previous email shows has vanished
</span><br>
<span class="quotelev1">&gt; (since that would restore &quot;-mt&quot; to CFLAGS and wrapper cflags).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 16, 2014 at 8:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My 1.8.3 build has not completed.
</span><br>
<span class="quotelev2">&gt;&gt; HOWEVER, I can already see a key difference in the configure step.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In 1.8.3 &quot;-mt&quot; was added AUTOMATICALLY to CFLAGS by configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking if C compiler and POSIX threads work as is... no - Solaris, not
</span><br>
<span class="quotelev2">&gt;&gt; checked
</span><br>
<span class="quotelev2">&gt;&gt; checking if C++ compiler and POSIX threads work as is... no - Solaris,
</span><br>
<span class="quotelev2">&gt;&gt; not checked
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler and POSIX threads work as is... no -
</span><br>
<span class="quotelev2">&gt;&gt; Solaris, not checked
</span><br>
<span class="quotelev2">&gt;&gt; checking if C compiler and POSIX threads work with -pthread... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if C compiler and POSIX threads work with -pthreads... no
</span><br>
<span class="quotelev2">&gt;&gt; checking if C compiler and POSIX threads work with -mt... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is not the case in 1.8.4rc4:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking if C compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if C++ compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, it looks like a chunk of Solaris-specific configure logic was LOST.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16625.php">http://www.open-mpi.org/community/lists/devel/2014/12/16625.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16626/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16626/paul.diff">paul.diff</a>
</ul>
<!-- attachment="paul.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16625.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16627.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16628.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
