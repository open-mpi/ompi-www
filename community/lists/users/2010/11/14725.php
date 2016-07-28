<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 15:47:52 2010" -->
<!-- isoreceived="20101110204752" -->
<!-- sent="Wed, 10 Nov 2010 21:47:48 +0100" -->
<!-- isosent="20101110204748" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="AANLkTimQV1n=B2af7UAg8fyu-6Kxf85kG+BzFL6Q49bP_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTim7HHkgmWG1U1riiOQpYVQg6cNZZUr6-uHVa4y6_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-11-10 15:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Nov 10, 2010 at 18:25, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is the memcpy-back code ever executed when called as memcpy()?  I can't
</span><br>
<span class="quotelev1">&gt; imagine why it would be, but it would make plenty of sense to use it inside
</span><br>
<span class="quotelev1">&gt; memmove when the destination is at a higher address than the source.
</span><br>
<p><p>Apparently the backward memcpy is actually used, but I still don't know why
<br>
and neither does Linus:
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=638477#c46">https://bugzilla.redhat.com/show_bug.cgi?id=638477#c46</a>
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14724.php">David Zhang: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>In reply to:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14726.php">e-mail number.cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
