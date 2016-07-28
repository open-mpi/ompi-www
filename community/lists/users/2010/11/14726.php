<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 16:08:29 2010" -->
<!-- isoreceived="20101110210829" -->
<!-- sent="Wed, 10 Nov 2010 21:08:23 +0000" -->
<!-- isosent="20101110210823" -->
<!-- name="e-mail number.cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="AANLkTinFb50C0G=F_O3mrUycKJO2pFm4tQBNbYJ1h+W+_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> e-mail number.cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 16:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10 November 2010 17:25, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the memcpy-back code ever executed when called as memcpy()? &#160;I can't
</span><br>
<span class="quotelev1">&gt; imagine why it would be, but it would make plenty of sense to use it inside
</span><br>
<span class="quotelev1">&gt; memmove when the destination is at a higher address than the source.
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<p>Oh yes. And, after further reading, it seems I'm not alone. There's an
<br>
article at <a href="http://lwn.net/Articles/414467/">http://lwn.net/Articles/414467/</a> about the new glibc changes
<br>
and a bug at <a href="https://bugzilla.redhat.com/show_bug.cgi?id=638477">https://bugzilla.redhat.com/show_bug.cgi?id=638477</a>
<br>
relating directly to memcpy. The Fedora bug is particularly insightful
<br>
with some interesting contributions from Linus Torvalds himself,
<br>
amongst other.
<br>
<p>In short, someone from Intel submitted a glibc patch that does faster
<br>
memcpy's on e.g. Intel i7, respects the ISO C definition, but does
<br>
things backwards. I think any software that ignores the ISO warning
<br>
&quot;If copying takes place between objects that overlap, the behavior is
<br>
undefined&quot; needs fixing.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14725.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14723.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
