<?
$subject_val = "Re: [MTT devel] MTT on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 09:48:33 2009" -->
<!-- isoreceived="20090312134833" -->
<!-- sent="Thu, 12 Mar 2009 09:48:28 -0400" -->
<!-- isosent="20090312134828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT on Windows" -->
<!-- id="80CB261A-28B7-46A7-A290-41764AAAB343_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49B90CF2.805_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT on Windows<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 09:48:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0345.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0345.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/changeset/1272">https://svn.open-mpi.org/trac/mtt/changeset/1272</a>
<br>
<p>You should probably push your patch to Filesys::Diskfree upstream to  
<br>
the CPAN author:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://search.cpan.org/~abarclay/Filesys-DiskFree-0.06/DiskFree.pm">http://search.cpan.org/~abarclay/Filesys-DiskFree-0.06/DiskFree.pm</a>
<br>
<p>(i.e., we wholly imported this module into MTT; we didn't write it)
<br>
<p><p>On Mar 12, 2009, at 9:24 AM, Shiqing Fan wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No problem. I made a tarball for you. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This could be an artifact of the new SVN manager system that IU
</span><br>
<span class="quotelev2">&gt; &gt; installed yesterday; I've sent a mail to the admin asking about it.
</span><br>
<span class="quotelev2">&gt; &gt; Sorry!  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you could send me your patch as an attachment, I can commit it  
</span><br>
<span class="quotelev1">&gt; (OS
</span><br>
<span class="quotelev2">&gt; &gt; X Mail.app does weird things with the spacing of inlined patches :- 
</span><br>
<span class="quotelev1">&gt; ( ).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 12, 2009, at 7:00 AM, Shiqing Fan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is some output of 'svn info':
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Path: .
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/svn/mtt/trunk">https://svn.open-mpi.org/svn/mtt/trunk</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Repository Root: <a href="https://svn.open-mpi.org/svn/mtt">https://svn.open-mpi.org/svn/mtt</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Repository UUID: 3a00f1f0-e206-0410-aee5-9638c71ae14b
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Revision: 1271
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Node Kind: directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Schedule: normal
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Last Changed Author: emallove
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Last Changed Rev: 1271
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Last Changed Date: 2009-02-05 18:22:38 +0100 (Thu, 05 Feb 2009)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is that ok, if someone else commits the patch instead of me? I  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mind actually. :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mtt-windows.tar.gz&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>In reply to:</strong> <a href="0343.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0345.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
<li><strong>Reply:</strong> <a href="0345.php">Shiqing Fan: "Re: [MTT devel] MTT on Windows"</a>
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
