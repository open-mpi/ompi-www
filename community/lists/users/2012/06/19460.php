<?
$subject_val = "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  6 13:05:54 2012" -->
<!-- isoreceived="20120606170554" -->
<!-- sent="Wed, 06 Jun 2012 13:05:50 -0400" -->
<!-- isosent="20120606170550" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="4FCF8DEE.3070208_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A62DA206-9324-4E5D-BCBC-7CB8EF33D7D5_at_cisco.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-06 13:05:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19461.php">Barrett, Brian W: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Previous message:</strong> <a href="19459.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/31/2012 07:26 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 31, 2012, at 2:04 AM, livelfs wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since 1.4.5 openmpi release, it is no longer possible to build openmpi binary with rpmbuild --rebuild if system rpm package version is 4.4.x, like in SLES10, SLES11, RHEL/CentOS 5.x.
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
<span class="quotelev2">&gt;&gt; error: unpacking of archive failed on file /usr/src/redhat/SPECS/openmpi-1.4.5.spec;4fc65c74: cpio: MD5 sum mismatch
</span><br>
<span class="quotelev2">&gt;&gt; error: openmpi-1.4.5-1.src.rpm cannot be installed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Apparently this problem is due to lack of support of SHA-256 in rpm 4.4.x
</span><br>
<span class="quotelev1">&gt; Mmmm.  I wonder if this corresponds to me upgrading my cluster (where I make the SRPM) from RHEL5 to RHEL6.  I'll bet it does.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just curious -- do you know if there's a way I can make an RHEL5-friendly SRPM on my RHEL6 cluster?  I seem to have RPM 4.8.0 on my RHEL6 machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, better yet, perhaps I should be producing the SRPM on the official OMPI build machine (i.e., where we make our tarballs), which is still back at RHEL4.  I'm not quite sure how it evolved that we make tarballs in tightly controlled conditions, but the SRPM is just made by hand on my cluster (which is subject to upgrades, etc.).  Hrm. :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Building on RHEL 4 shouldn't have any impact. If anything, it would make
<br>
things worse instead of better, but I think that's unlikely. This
<br>
problem has to do with changes in RPM itself from RHEL5 to RHEL 6.
<br>
Ideally, you should be using Mock to build your RPMs, and build a
<br>
separate set of RPMs for RHEL 3,4,5,6,... It's a PITA, I know, but it's
<br>
really the best way to build RPMs without any dependency gotchas.
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19461.php">Barrett, Brian W: "Re: [OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>Previous message:</strong> <a href="19459.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
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
