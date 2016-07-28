<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 12:25:56 2010" -->
<!-- isoreceived="20101110172556" -->
<!-- sent="Wed, 10 Nov 2010 18:25:51 +0100" -->
<!-- isosent="20101110172551" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="AANLkTim7HHkgmWG1U1riiOQpYVQg6cNZZUr6-uHVa4y6_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CDAD253.6010804_at_ntlworld.com" -->
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
<strong>Date:</strong> 2010-11-10 12:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 10, 2010 at 18:11, Number Cruncher &lt;number.cruncher_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Just some observations from a concerned user with a temperamental Open MPI
</span><br>
<span class="quotelev1">&gt; program (1.4.3):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fedora 14 (just released) includes glibc-2.12 which has optimized versions
</span><br>
<span class="quotelev1">&gt; of memcpy, including a copy backward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceware.org/git/?p=glibc.git;a=commitdiff;h=6fb8cbcb58a29fff73eb2101b34caa19a7f88eba">http://sourceware.org/git/?p=glibc.git;a=commitdiff;h=6fb8cbcb58a29fff73eb2101b34caa19a7f88eba</a>
</span><br>
<p><p>Is the memcpy-back code ever executed when called as memcpy()?  I can't
<br>
imagine why it would be, but it would make plenty of sense to use it inside
<br>
memmove when the destination is at a higher address than the source.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
