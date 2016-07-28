<?
$subject_val = "Re: [OMPI users] Segfault after malloc()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 08:49:52 2011" -->
<!-- isoreceived="20110518124952" -->
<!-- sent="Wed, 18 May 2011 13:49:48 +0100" -->
<!-- isosent="20110518124948" -->
<!-- name="Paul van der Walt" -->
<!-- email="paul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault after malloc()?" -->
<!-- id="BANLkTinPqHKwrND6bFNUbQBrYQFkhhc4iA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0455DDD7-1886-4115-92F0-9C9DC8E949D1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault after malloc()?<br>
<strong>From:</strong> Paul van der Walt (<em>paul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 08:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for the response.
<br>
<p>On 18 May 2011 13:30, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; *Usually* when we see segv's in calls to alloc, it means that there was previously some kind of memory bug, such as an array overflow or something like that (i.e., something that stomped on the memory allocation tables, causing the next alloc to fail).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried running your code through a memory-checking debugger?
</span><br>
<p>I sort-of tried with valgrind, but I'm not really sure how to
<br>
interpret the output (I'm not such a C-wizard). I'll have another look
<br>
a little later then and report back. I suppose I should RTFM on how to
<br>
properly invoke valgrind so it makes sense with an MPI program?
<br>
<p>Paul
<br>
<p><pre>
-- 
O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16561.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
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
