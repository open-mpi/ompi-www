<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 06:47:00 2010" -->
<!-- isoreceived="20101111114700" -->
<!-- sent="Thu, 11 Nov 2010 12:46:56 +0100" -->
<!-- isosent="20101111114656" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="AANLkTikgEZRVXZdqTizG5cQbmBhDemEbiO_-NeS4xrg1_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CDBD524.5090201_at_ntlworld.com" -->
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
<strong>Date:</strong> 2010-11-11 06:46:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14735.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 11, 2010 at 12:36, Number Cruncher &lt;number.cruncher_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; However as commented here:
</span><br>
<span class="quotelev1">&gt; <a href="https://bugzilla.redhat.com/show_bug.cgi?id=638477#c86">https://bugzilla.redhat.com/show_bug.cgi?id=638477#c86</a> the valgrind memcpy
</span><br>
<span class="quotelev1">&gt; implementation is overlap-safe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&nbsp;Yes, of course.  That's how the bug in Open MPI was originally detected.
<br>
&nbsp;Of course you can't do production runs with valgrind.
<br>
<p>Are you using an Intel Nehalem-class CPU?
<br>
<span class="quotelev1">&gt;
</span><br>
<p>No, Core 2 Duo and Opteron (but the Opterons still have older glibc).
<br>
&nbsp;Reverse memcpy must only be turned on for Nehalem.
<br>
<p>Jed
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14734/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14735.php">Jeff Squyres: "Re: [OMPI users] Problem with sending messages from one of the machines"</a>
<li><strong>Previous message:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>In reply to:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14748.php">George Bosilca: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
