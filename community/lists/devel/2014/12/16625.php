<?
$subject_val = "Re: [OMPI devel] OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 00:59:20 2014" -->
<!-- isoreceived="20141217055920" -->
<!-- sent="Tue, 16 Dec 2014 21:59:17 -0800" -->
<!-- isosent="20141217055917" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] 1.8.4rc Status" -->
<!-- id="CAAvDA17EDXud6jD7oeQjzYCdqqjEss1JYKd=DLCixvh_PF9WoQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16u-TXW9Vm7UUd2CWw=c2CjeC5QNAXs2mxvdk+sDAnmgA_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 00:59:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16624.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16624.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>The 1.8.3 test works where the 1.8.4rc4 one fails with identical configure
<br>
arguments.
<br>
<p>While it may be overkill, I configured 1.8.4rc4 with
<br>
<p>&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64 -mt&quot; --with-wrapper-cflags=&quot;-m64 -mt&quot; \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-mt&quot; --with-wrapper-ldflags=&quot;-mt&quot;
<br>
<p>The resulting run worked!
<br>
<p>So, I very strongly suspect that the problem will be resolved if one
<br>
restores the configure logic that my previous email shows has vanished
<br>
(since that would restore &quot;-mt&quot; to CFLAGS and wrapper cflags).
<br>
<p>-Paul
<br>
<p>On Tue, Dec 16, 2014 at 8:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My 1.8.3 build has not completed.
</span><br>
<span class="quotelev1">&gt; HOWEVER, I can already see a key difference in the configure step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In 1.8.3 &quot;-mt&quot; was added AUTOMATICALLY to CFLAGS by configure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work as is... no - Solaris, not
</span><br>
<span class="quotelev1">&gt; checked
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work as is... no - Solaris, not
</span><br>
<span class="quotelev1">&gt; checked
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work as is... no - Solaris,
</span><br>
<span class="quotelev1">&gt; not checked
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -pthread... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -pthreads... no
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work with -mt... yes
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work with -pthread... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not the case in 1.8.4rc4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking if C compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler and POSIX threads work as is... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it looks like a chunk of Solaris-specific configure logic was LOST.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16625/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16624.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16624.php">Paul Hargrove: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16626.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
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
