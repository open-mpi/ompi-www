<?
$subject_val = "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 14:15:34 2012" -->
<!-- isoreceived="20120601181534" -->
<!-- sent="Fri, 01 Jun 2012 20:17:10 +0200" -->
<!-- isosent="20120601181710" -->
<!-- name="livelfs" -->
<!-- email="livelfs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="4FC90726.4000208_at_free.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
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
<strong>From:</strong> livelfs (<em>livelfs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 14:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19426.php">Jeremy: "[OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Previous message:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19428.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="19428.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/01/2012 02:25 PM, livelfs wrote:
<br>
<span class="quotelev1">&gt; On May 31, 2012, at 2:04 AM, livelfs wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since 1.4.5 openmpi release, it is no longer possible to build
</span><br>
<span class="quotelev2">&gt;&gt; openmpi binary with rpmbuild --rebuild if system rpm package version is
</span><br>
<span class="quotelev2">&gt;&gt; 4.4.x, like &gt;in SLES10, SLES11, RHEL/CentOS 5.x.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For instance, on CentOS 5.8 x86_64 with rpm 4.4.2.3-28.el5_8:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_horizon _tmp]# rpmbuild --rebuild openmpi-1.4.5-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; Installing openmpi-1.4.5-1.src.rpm
</span><br>
<span class="quotelev2">&gt;&gt; warning: user jsquyres does not exist - using root
</span><br>
<span class="quotelev2">&gt;&gt; error: unpacking of archive failed on file
</span><br>
<span class="quotelev2">&gt;&gt; /usr/src/redhat/SPECS/openmpi-1.4.5.spec;4fc65c74: cpio: MD5 sum mismatch
</span><br>
<span class="quotelev2">&gt;&gt; error: openmpi-1.4.5-1.src.rpm cannot be installed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Apparently this problem is due to lack of support of SHA-256 in rpm 4.4.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmmm.  I wonder if this corresponds to me upgrading my cluster (where I
</span><br>
<span class="quotelev1">&gt; make the SRPM) from RHEL5 to RHEL6.  I'll bet it does.  :-\
</span><br>
<p>+1
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just curious -- do you know if there's a way I can make an
</span><br>
<span class="quotelev1">&gt; RHEL5-friendly SRPM on my RHEL6 cluster?  I seem to have RPM 4.8.0 on my
</span><br>
<span class="quotelev1">&gt; RHEL6 &gt;machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
As I mentioned in my previous mail, what about testing
<br>
<p>rpmbuild --define &quot;_source_filedigest_algorithm md5&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--define &quot;_binary_filedigest_algorithm md5&quot;
<br>
<p>on RHEL6 ?
<br>
<p><span class="quotelev1">&gt; Or, better yet, perhaps I should be producing the SRPM on the official
</span><br>
<span class="quotelev1">&gt; OMPI build machine (i.e., where we make our tarballs), which is still
</span><br>
<span class="quotelev1">&gt; back at &gt;RHEL4.  I'm not quite sure how it evolved that we make tarballs
</span><br>
<span class="quotelev1">&gt; in tightly controlled conditions, but the SRPM is just made by hand on
</span><br>
<span class="quotelev1">&gt; my cluster &gt;(which is subject to upgrades, etc.).  Hrm. :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
What puzzles me is that I could not reproduce the problem using
<br>
rpmbuild -bs
<br>
on CentOS 6.2 with rpm-4.8.0-19.el6_2.1.x86_64
<br>
Perhaps a rpm config difference between RHEL and CentOS ?
<br>
<p>Anyway, using rpm 4.4.x to produce src rpms seems to me to be the safest 
<br>
path
<br>
<p>Regards,
<br>
Stephane Rouberol
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19426.php">Jeremy: "[OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Previous message:</strong> <a href="19424.php">Jeff Squyres: "Re: [OMPI users] Intra-node communication"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19428.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="19428.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
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
