<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 05:45:28 2010" -->
<!-- isoreceived="20101111104528" -->
<!-- sent="Thu, 11 Nov 2010 10:45:18 +0000" -->
<!-- isosent="20101111104518" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="4CDBC93E.9060806_at_ntlworld.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTinwef02F9A1QFCfSGi6qPDKnj1-CVdbmm-YbaPW_at_mail.gmail.com" -->
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
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 05:45:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14731.php">Nysal Jan: "Re: [OMPI users] EXTERNAL: Re: Creating 64-bit objects?"</a>
<li><strong>In reply to:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/11/10 21:17, Jed Brown wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I think any software that ignores the ISO warning
</span><br>
<span class="quotelev1">&gt;     &quot;If copying takes place between objects that overlap, the behavior is
</span><br>
<span class="quotelev1">&gt;     undefined&quot; needs fixing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Absolutely, it is incorrect and should be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Having just replaced the memcpy with Linus safe forward-copy version 
<br>
from <a href="https://bugzilla.redhat.com/show_bug.cgi?id=638477#c38">https://bugzilla.redhat.com/show_bug.cgi?id=638477#c38</a> I can report 
<br>
no more problems with my Open MPI program which was previously behaving 
<br>
unpredictably after calls to memcpy with overlapping ranges.
<br>
<p>*** Fedora 14 x86_64 and other 64-bit glibc 2.12 distros break Open MPI ***
<br>
<p>As for a fix, I suspect glibc developers will dig their heels in, so how 
<br>
do we fix Open MPI? We could just replace memcpy call with memmove. This 
<br>
has to be better than rolling an MPI-specific memory copy function for 
<br>
every architecture.
<br>
<p>Simon H.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14731.php">Nysal Jan: "Re: [OMPI users] EXTERNAL: Re: Creating 64-bit objects?"</a>
<li><strong>In reply to:</strong> <a href="14727.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14733.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
