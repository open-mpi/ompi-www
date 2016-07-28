<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 16:17:09 2010" -->
<!-- isoreceived="20101110211709" -->
<!-- sent="Wed, 10 Nov 2010 22:17:02 +0100" -->
<!-- isosent="20101110211702" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="AANLkTinwef02F9A1QFCfSGi6qPDKnj1-CVdbmm-YbaPW_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTinFb50C0G=F_O3mrUycKJO2pFm4tQBNbYJ1h+W+_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 16:17:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14728.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>Previous message:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14732.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14732.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 10, 2010 at 22:08, e-mail number.cruncher &lt;
<br>
number.cruncher_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In short, someone from Intel submitted a glibc patch that does faster
</span><br>
<span class="quotelev1">&gt; memcpy's on e.g. Intel i7, respects the ISO C definition, but does
</span><br>
<span class="quotelev1">&gt; things backwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>However, the commit message and mailing list, as far as I can tell, does not
<br>
explain how the implementations were benchmarked.  Linus claims that his
<br>
(entirely trivial) implementation matches or beats the new one.  If indeed
<br>
the performance gains claimed by Lu (2X to 4X) are real, then the old
<br>
implementation must have been truly horrible (as stated by Agner Fog in
<br>
<a href="http://sourceware.org/ml/libc-help/2008-08/msg00007.html">http://sourceware.org/ml/libc-help/2008-08/msg00007.html</a>).  I'd like to see
<br>
the benchmark results demonstrating that the backward memcpy is really
<br>
faster than forward.
<br>
<p><p><span class="quotelev1">&gt; I think any software that ignores the ISO warning
</span><br>
<span class="quotelev1">&gt; &quot;If copying takes place between objects that overlap, the behavior is
</span><br>
<span class="quotelev1">&gt; undefined&quot; needs fixing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Absolutely, it is incorrect and should be fixed.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14727/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14728.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>Previous message:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14732.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14732.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
