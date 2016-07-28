<?
$subject_val = "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 07:26:34 2012" -->
<!-- isoreceived="20120531112634" -->
<!-- sent="Thu, 31 May 2012 07:26:29 -0400" -->
<!-- isosent="20120531112629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="A62DA206-9324-4E5D-BCBC-7CB8EF33D7D5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FC709EF.2070801_at_free.fr" -->
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
<strong>Date:</strong> 2012-05-31 07:26:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19400.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2012, at 2:04 AM, livelfs wrote:
<br>
<p><span class="quotelev1">&gt; Since 1.4.5 openmpi release, it is no longer possible to build openmpi binary with rpmbuild --rebuild if system rpm package version is 4.4.x, like in SLES10, SLES11, RHEL/CentOS 5.x.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance, on CentOS 5.8 x86_64 with rpm 4.4.2.3-28.el5_8:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_horizon _tmp]# rpmbuild --rebuild openmpi-1.4.5-1.src.rpm
</span><br>
<span class="quotelev1">&gt; Installing openmpi-1.4.5-1.src.rpm
</span><br>
<span class="quotelev1">&gt; warning: user jsquyres does not exist - using root
</span><br>
<span class="quotelev1">&gt; error: unpacking of archive failed on file /usr/src/redhat/SPECS/openmpi-1.4.5.spec;4fc65c74: cpio: MD5 sum mismatch
</span><br>
<span class="quotelev1">&gt; error: openmpi-1.4.5-1.src.rpm cannot be installed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apparently this problem is due to lack of support of SHA-256 in rpm 4.4.x
</span><br>
<p>Mmmm.  I wonder if this corresponds to me upgrading my cluster (where I make the SRPM) from RHEL5 to RHEL6.  I'll bet it does.  :-\
<br>
<p>Just curious -- do you know if there's a way I can make an RHEL5-friendly SRPM on my RHEL6 cluster?  I seem to have RPM 4.8.0 on my RHEL6 machines.
<br>
<p>Or, better yet, perhaps I should be producing the SRPM on the official OMPI build machine (i.e., where we make our tarballs), which is still back at RHEL4.  I'm not quite sure how it evolved that we make tarballs in tightly controlled conditions, but the SRPM is just made by hand on my cluster (which is subject to upgrades, etc.).  Hrm. :-\
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
<li><strong>Next message:</strong> <a href="19400.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
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
