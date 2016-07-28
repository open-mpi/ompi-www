<?
$subject_val = "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:35:00 2015" -->
<!-- isoreceived="20150824183500" -->
<!-- sent="Mon, 24 Aug 2015 11:34:55 -0700" -->
<!-- isosent="20150824183455" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem" -->
<!-- id="CAAvDA15xCFG9b89PMXA-pLdwYekj1M0V5t6=b8N1xL83LW=+zQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16fT0icTs5OEtqezqhPTDYwJ=WChoAkgU4be+6r3AZ5eA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 14:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Previous message:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>In reply to:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 24, 2015 at 10:52 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thus if this newly reported problem is (as I am going to guess)
</span><br>
<span class="quotelev1">&gt; in config/ompi_check_mx.m4 then it may go unfixed.
</span><br>
<span class="quotelev1">&gt; You say you and I are the only ones to care, and I think we both care for
</span><br>
<span class="quotelev1">&gt; reasons related to software quality rather than any desire to use MX.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I looked to see where the -rpath options are coming from.
<br>
I am 95% certain that libtool is constructing them from the
<br>
network-specific .la files (such as libfabric.la).
<br>
That is also the reason why libfabric gets linked by full path instead of a
<br>
&quot;-l&quot; option.
<br>
<p>So, my conclusions:
<br>
<p>1. Since there is no libmyriexpress.la, one should either
<br>
&nbsp;&nbsp;&nbsp;1a.  add the MX libdir to LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;&nbsp;1b.  use the wrapper-ldflags family of configure arguments to add an
<br>
rpath
<br>
<p>2. There is *probably* no Open MPI bug here assuming the authors of MX
<br>
support assumed &quot;1a&quot;.
<br>
<p>In support of these conclusion, the following is quoted from the MX
<br>
installation instructions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Linux, FreeBSD and Solaris, add the MX library directory to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;system library search path. Otherwise, individual users will have to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;either manage their LD_LIBRARY_PATH(_64) environment variable or
<br>
link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;their program with an &quot;-rpath/-R&quot; option for the dynamic linker to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;locate the MX shared library.
<br>
<p>So, I am actually wondering if Ralph's changes yesterday to &quot;fix&quot;
<br>
$(WRAPPER_EXTRA_LDFLAGS) might have been unnecessary.
<br>
Instead, I think *removing* those [testname]_LDFLAGS lines may be the
<br>
correct solution - they were *empty* until rc6.
<br>
<p>IMHO:  dropping MX support in 1.10 is probably wise given the lack of
<br>
vendor support .
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>Previous message:</strong> <a href="17826.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>In reply to:</strong> <a href="17823.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
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
