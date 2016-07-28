<?
$subject_val = "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  4 13:37:05 2012" -->
<!-- isoreceived="20120604173705" -->
<!-- sent="Mon, 4 Jun 2012 13:36:59 -0400" -->
<!-- isosent="20120604173659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="52931C9A-984A-43DA-ABAA-899AE42EDD02_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FCA6322.3000209_at_free.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-04 13:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19443.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19441.php">Constantinos Makassikis: "Re: [OMPI users] checkpointing/restart of hpl"</a>
<li><strong>In reply to:</strong> <a href="19439.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19443.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2012, at 3:01 PM, livelfs wrote:
<br>
<p><span class="quotelev1">&gt; Hi again
</span><br>
<span class="quotelev1">&gt; I found only one SRPM: <a href="http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6-2.src.rpm">http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6-2.src.rpm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I successfully tested
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild openmpi-1.6-2.src.rpm
</span><br>
<span class="quotelev1">&gt; (passed GZDIO step) on x86_64 CentOS5.8, CentOS6.2, and SLES10sp2.
</span><br>
<span class="quotelev1">&gt; Good!
</span><br>
<p><p>Excellent -- many thanks for the help.  
<br>
<p>I updated the following SRPMs on the OMPI site:
<br>
<p>- 1.6
<br>
- 1.4.5
<br>
- 1.5.5
<br>
<p>All of these were built with new versions of RPM and defaulted to SHA1 checksums.  So I build them with the MD5 checksums and put out -2 versions of those SRPMs.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19443.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19441.php">Constantinos Makassikis: "Re: [OMPI users] checkpointing/restart of hpl"</a>
<li><strong>In reply to:</strong> <a href="19439.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19443.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
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
