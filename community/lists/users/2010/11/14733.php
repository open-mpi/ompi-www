<?
$subject_val = "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 06:36:11 2010" -->
<!-- isoreceived="20101111113611" -->
<!-- sent="Thu, 11 Nov 2010 11:36:04 +0000" -->
<!-- isosent="20101111113604" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12" -->
<!-- id="4CDBD524.5090201_at_ntlworld.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTika1Z2Wmntz-=OY7UrLAf7sfEjpP2vrbQFZsiny_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-11-11 06:36:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14732.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Maybe in reply to:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/11/10 10:56, Jed Brown wrote:
<br>
<span class="quotelev1">&gt; On Thu, Nov 11, 2010 at 11:45, Number Cruncher 
</span><br>
<span class="quotelev1">&gt; &lt;number.cruncher_at_[hidden] &lt;mailto:number.cruncher_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Having just replaced the memcpy with Linus safe forward-copy
</span><br>
<span class="quotelev1">&gt;     version from
</span><br>
<span class="quotelev1">&gt;     <a href="https://bugzilla.redhat.com/show_bug.cgi?id=638477#c38">https://bugzilla.redhat.com/show_bug.cgi?id=638477#c38</a> I can
</span><br>
<span class="quotelev1">&gt;     report no more problems with my Open MPI program which was
</span><br>
<span class="quotelev1">&gt;     previously behaving unpredictably after calls to memcpy with
</span><br>
<span class="quotelev1">&gt;     overlapping ranges.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you happen to have a test case?  I am running glibc-2.12.1 on 
</span><br>
<span class="quotelev1">&gt; 64-bit Arch Linux and although valgrind reports the overlapping 
</span><br>
<span class="quotelev1">&gt; memcpy, I have not yet noticed incorrect results or crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
Unfortunately, I don't have a test case I can send; an actual problem 
<br>
only manifested itself when running one of our commericial applications 
<br>
on a fresh F14 install (dual Xeon E5620).
<br>
<p>However as commented here: 
<br>
<a href="https://bugzilla.redhat.com/show_bug.cgi?id=638477#c86">https://bugzilla.redhat.com/show_bug.cgi?id=638477#c86</a> the valgrind 
<br>
memcpy implementation is overlap-safe.
<br>
<p>Are you using an Intel Nehalem-class CPU? The bug was also only 
<br>
temperamental for me; I'm not entirely sure why. It would hang in 
<br>
unmatched collectives 60-80% of the times run. With a forward memcpy, it 
<br>
never hung.
<br>
<p>I can provide a thought test case. Consider source and destination where 
<br>
destination is 1 byte before source:
<br>
SRC:  ABCD
<br>
DST: Xabc
<br>
<p>Copy forward memcpy:
<br>
SRC:  ABCD
<br>
DST: Aabc
<br>
DST: ABbc
<br>
DST: ABCc
<br>
DST: ABCD
<br>
<p>Copy backward memcpy:
<br>
SRC:  ABCD
<br>
DST: XabD
<br>
DST: XaDD
<br>
DST: XDDD
<br>
DST: DDDD   (WRONG)
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14733/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Previous message:</strong> <a href="14732.php">Number Cruncher: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Maybe in reply to:</strong> <a href="14722.php">Number Cruncher: "[OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
<li><strong>Reply:</strong> <a href="14734.php">Jed Brown: "Re: [OMPI users] memcpy overlap in ompi_ddt_copy_content_same_ddt and glibc 2.12"</a>
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
