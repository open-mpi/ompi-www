<?
$subject_val = "Re: [OMPI devel] OMPI v1.10.2rc3 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  2 17:21:28 2016" -->
<!-- isoreceived="20160102222128" -->
<!-- sent="Sat, 2 Jan 2016 14:21:21 -0800" -->
<!-- isosent="20160102222121" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI v1.10.2rc3 is out" -->
<!-- id="CAAvDA16xSe+nHj0qbn=P8Ybf8wS8B5ixzispSTr5cJfqB+fvpw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16rD8VdJoys9iYHgtq3Xi953S1znQzo-kYwOHvLN8JV6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI v1.10.2rc3 is out<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-02 17:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<li><strong>Previous message:</strong> <a href="18467.php">Ralph Castain: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<li><strong>In reply to:</strong> <a href="18466.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<li><strong>Reply:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to regain access to the following compilers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Intel 12.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PGI 12.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PGI 13.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PGI 14.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PGI 15.9
<br>
and add access to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;EkoPath 5.0.5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;EkoPath 6.0.527
<br>
<p>My tests against the 1.10.2rc3 tarball PASS on those 7 compilers.
<br>
<p>I have leads on NAG and Absoft Fortran compilers, and will report again if
<br>
they work out.
<br>
<p>-Paul
<br>
<p>On Thu, Dec 31, 2015 at 10:14 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have completed testing 1.10.2rc3 on all systems that I can.
</span><br>
<span class="quotelev1">&gt; I found no new issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am temporarily unable to test Solaris Studio compilers older than 12.2.
</span><br>
<span class="quotelev1">&gt; I am unable to test *any* PGI compilers now, or for the foreseeable future.
</span><br>
<span class="quotelev1">&gt; I have also given up on regaining access to any SPARC hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 24, 2015 at 9:47 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We got some immediate feedback indicating a critical problem with rc2
</span><br>
<span class="quotelev2">&gt;&gt; (thanks Valentin!), and so we have fixed that, picked up a few lagging
</span><br>
<span class="quotelev2">&gt;&gt; changes (courtesy of Paul Hargrove and Marco), and are now releasing the
</span><br>
<span class="quotelev2">&gt;&gt; next candidate.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Usual place: <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/12/18459.php">http://www.open-mpi.org/community/lists/devel/2015/12/18459.php</a>
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
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<li><strong>Previous message:</strong> <a href="18467.php">Ralph Castain: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<li><strong>In reply to:</strong> <a href="18466.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
<li><strong>Reply:</strong> <a href="18469.php">Paul Hargrove: "Re: [OMPI devel] OMPI v1.10.2rc3 is out"</a>
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
