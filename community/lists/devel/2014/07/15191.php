<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 20:55:09 2014" -->
<!-- isoreceived="20140718005509" -->
<!-- sent="Thu, 17 Jul 2014 20:55:08 -0400" -->
<!-- isosent="20140718005508" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAMJJpkUy=HyocEyuUh6+N9a3TSiYtrpGJP6zsBLYB78NAmY9Yg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16c=S=oJnC8kHDsM3LMm-JovT5WAQzfYe8jtFEig5m0mw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 20:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15192.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>In reply to:</strong> <a href="15183.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15192.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15192.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are these also called for shared libraries?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Wed, Jul 16, 2014 at 3:36 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 7:36 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Correction. xlc does support the destructor function attribute. The odd
</span><br>
<span class="quotelev2">&gt;&gt; one out is PGI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the Solaris Studio compilers still of interest to the Open MPI
</span><br>
<span class="quotelev1">&gt; community?
</span><br>
<span class="quotelev1">&gt; If so, I've confirmed support using the following 5-line test on a
</span><br>
<span class="quotelev1">&gt; Solaris-10/SPARC platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int X = 0;
</span><br>
<span class="quotelev1">&gt; __attribute__((__constructor__)) void hello(void) { X = 42; }
</span><br>
<span class="quotelev1">&gt; __attribute__((__destructor__)) void goodbye(void) { printf(&quot;X = %d\n&quot;,
</span><br>
<span class="quotelev1">&gt; X); }
</span><br>
<span class="quotelev1">&gt; int main(void) { return 0; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15183.php">http://www.open-mpi.org/community/lists/devel/2014/07/15183.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15191/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15192.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15190.php">Gilles Gouaillardet: "Re: [OMPI devel] Onesided failures"</a>
<li><strong>In reply to:</strong> <a href="15183.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15192.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15192.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
