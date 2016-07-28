<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 18:57:05 2014" -->
<!-- isoreceived="20140730225705" -->
<!-- sent="Wed, 30 Jul 2014 15:57:04 -0700" -->
<!-- isosent="20140730225704" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA16S5u4ONYp99H=-ZgAn6kixfq7TQAKDZGutNuJavdKqnQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="OF3F60236C.26516CEC-ON49257D25.00270030-49257D25.0027E241_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 18:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15351.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15349.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tetsuya,
<br>
<p>I found that the behavior of pgf90 changed somewhere between versions 13.6
<br>
and 14.1.
<br>
My previous reports were mostly based on my testing of 13.6.
<br>
So, I have probably been seeing an issue entirely different than yours.
<br>
<p>I am testing 14.4 now and hope to be able to reproduce the problem you
<br>
reported.
<br>
<p>-Paul
<br>
<p><p>On Wed, Jul 30, 2014 at 12:14 AM, &lt;tmishima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul, thank you for your comment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think my mpi_f08.mod is older one, because the time stamp is
</span><br>
<span class="quotelev1">&gt; equal to the time when I rebuilt them today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage openmpi-1.8.2rc2-pgi14.7]$ ll lib/mpi*
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima    315 Jul 30 12:27 lib/mpi_ext.mod
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima    327 Jul 30 12:27 lib/mpi_f08_ext.mod
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima  11716 Jul 30 12:27
</span><br>
<span class="quotelev1">&gt; lib/mpi_f08_interfaces_callbacks.mod
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima 374813 Jul 30 12:27 lib/mpi_f08_interfaces.mod
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima 715615 Jul 30 12:27 lib/mpi_f08.mod
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima  14730 Jul 30 12:27 lib/mpi_f08_sizeof.mod
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima  77141 Jul 30 12:27 lib/mpi_f08_types.mod
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 mishima mishima 878339 Jul 30 12:27 lib/mpi.mod
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15351.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15349.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
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
