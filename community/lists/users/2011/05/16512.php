<?
$subject_val = "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 09:21:50 2011" -->
<!-- isoreceived="20110511132150" -->
<!-- sent="Wed, 11 May 2011 06:21:26 -0700" -->
<!-- isosent="20110511132126" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt" -->
<!-- id="8A79B6A6-0F1A-48A7-BED3-45302CDB8BFF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB809550-4127-4991-8EC1-A3EB7A75F3E7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-11 09:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16513.php">Tran Hai Quan: "[OMPI users] error with checkpoint in openmpi"</a>
<li><strong>Previous message:</strong> <a href="16511.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>In reply to:</strong> <a href="16510.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16524.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 11, 2011, at 5:50 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Clarification: I installed pre-built OpenMPI_v1.5.3-x64 on Windows 7
</span><br>
<span class="quotelev2">&gt;&gt; and copied this directory into Windows Server 2008.
</span><br>
<p>Did you copy OMPI to the same directory tree that you built it?
<br>
<p>OMPI hard-codes some directory names when it builds, and it expects to find that directory structure when it runs.  If you build OMPI with a --prefix of /foo, but then move it to /bar, various things may not work (like finding help messages, etc.) unless you set the OMPI/OPAL environment variables that tell OMPI where the files are actually located.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16513.php">Tran Hai Quan: "[OMPI users] error with checkpoint in openmpi"</a>
<li><strong>Previous message:</strong> <a href="16511.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>In reply to:</strong> <a href="16510.php">Ralph Castain: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16524.php">hi: "Re: [OMPI users] Sorry! You were supposed to get help about: But couldn't open help-orterun.txt"</a>
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
