<?
$subject_val = "Re: [OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 00:50:28 2014" -->
<!-- isoreceived="20141218055028" -->
<!-- sent="Wed, 17 Dec 2014 21:50:25 -0800" -->
<!-- isosent="20141218055025" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc Status" -->
<!-- id="CAAvDA15_o1BUj0zG2FTUmkYwMCZS-f3aDMRyp+J2Zi-TQEUc5w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15zKsZKcfnVGzrQtnFWhUsZ9bHCuYUyQCqV2D2+LnAbGQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 00:50:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16666.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc5 out"</a>
<li><strong>In reply to:</strong> <a href="16663.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 17, 2014 at 7:17 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to run the nightly on other configs on both my
</span><br>
<span class="quotelev1">&gt; Solaris-11/x86-64 and Solaris-10/SPARC systems.
</span><br>
<span class="quotelev1">&gt; I just want to be sure some other compile/abi/arch combination didn't get
</span><br>
<span class="quotelev1">&gt; broken by accident.
</span><br>
<span class="quotelev1">&gt; I will post my results to the list (probably Thu lunch time in California).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I was able to pipeline/parallelize to speed this up a bit.
<br>
The following configurations all passed (hopefully the names make sense):
<br>
<p>solaris10-sparcT2-ss12u3-v9
<br>
solaris10-sparcT2-gcc346-v9
<br>
solaris10-sparcT2-gcc346-v9-static
<br>
solaris11-x64-ib-ss12u3
<br>
solaris11-x64-ib-ss12u3-static
<br>
solaris11-x86-ib-ss12u3
<br>
solaris11-x64-ib-gcc452
<br>
solaris11-x64-ib-gcc452-static
<br>
solaris11-x86-ib-gcc452
<br>
linux-x86_64-ss12u3
<br>
linux-x86_64-ss12u3-m32
<br>
<p><p>I had 3 additional configs (including v8+ ABI) to run on the SPARC system,
<br>
but killed those to make way for testing 1.8.4rc5 instead.
<br>
<p>In case it isn't clear &quot;ss12u3&quot; is &quot;Solaris Studio 12 Update 3&quot; (aka Studio
<br>
12.3).
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16668.php">Gilles Gouaillardet: "[OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16666.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc5 out"</a>
<li><strong>In reply to:</strong> <a href="16663.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
