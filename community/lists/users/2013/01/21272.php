<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 15:29:13 2013" -->
<!-- isoreceived="20130130202913" -->
<!-- sent="Wed, 30 Jan 2013 20:28:35 +0000" -->
<!-- isosent="20130130202835" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317DAFF2_at_EXMB01.srn.sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CD2EB9FA.E2A1%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 15:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Maybe in reply to:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/30/13 12:01 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Actually, the errors are in code that has changed.  A couple weeks ago, we
</span><br>
<span class="quotelev1">&gt;removed the inline assembly support for C++, but I'm guessing not entirely
</span><br>
<span class="quotelev1">&gt;correctly.  That is, I believe something is wrong in the #defines such
</span><br>
<span class="quotelev1">&gt;that opal_atomic_add_32 is being declared inline, but no inline body will
</span><br>
<span class="quotelev1">&gt;be provided, so it all falls down.  Siegmar, can you send me your
</span><br>
<span class="quotelev1">&gt;opal/include/opal_config.h file when running with the Studio compilers?  I
</span><br>
<span class="quotelev1">&gt;don't have then available on x86 and it's probably faster for you to send
</span><br>
<span class="quotelev1">&gt;me the files than for me to try to setup a Linux box with the compilers
</span><br>
<span class="quotelev1">&gt;installed.
</span><br>
<p>Siegmar -
<br>
<p>Can you try the attached patch and see if it fixes the compile error
<br>
you're seeing?  I think I found the issue.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21272/atomic.diff">atomic.diff</a>
</ul>
<!-- attachment="atomic.diff" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21272/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Previous message:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>Maybe in reply to:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21273.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
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
