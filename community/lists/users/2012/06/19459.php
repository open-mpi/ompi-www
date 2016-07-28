<?
$subject_val = "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  6 13:01:21 2012" -->
<!-- isoreceived="20120606170121" -->
<!-- sent="Wed, 06 Jun 2012 13:01:17 -0400" -->
<!-- isosent="20120606170117" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="4FCF8CDD.4030103_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-06 13:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19458.php">Ziaul Haque Olive: "[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/31/2012 02:04 AM, livelfs wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Since 1.4.5 openmpi release, it is no longer possible to build openmpi
</span><br>
<span class="quotelev1">&gt; binary with rpmbuild --rebuild if system rpm package version is 4.4.x,
</span><br>
<span class="quotelev1">&gt; like in SLES10, SLES11, RHEL/CentOS 5.x.
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
<span class="quotelev1">&gt; error: unpacking of archive failed on file
</span><br>
<span class="quotelev1">&gt; /usr/src/redhat/SPECS/openmpi-1.4.5.spec;4fc65c74: cpio: MD5 sum mismatch
</span><br>
<span class="quotelev1">&gt; error: openmpi-1.4.5-1.src.rpm cannot be installed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apparently this problem is due to lack of support of SHA-256 in rpm 4.4.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Googling suggests
</span><br>
<span class="quotelev1">&gt;   rpmbuild -bs \
</span><br>
<span class="quotelev1">&gt;    --define &quot;_source_filedigest_algorithm md5&quot; \
</span><br>
<span class="quotelev1">&gt;    --define &quot;_binary_filedigest_algorithm md5&quot; \
</span><br>
<span class="quotelev1">&gt;    package.spec
</span><br>
<span class="quotelev1">&gt; should be used to produce openmpi src rpms and avoid the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please note that
</span><br>
<span class="quotelev1">&gt; - rpmbuild works OK on RHEL/CentOS 5.x with openmpi-1.4.4-1.src.rpm
</span><br>
<span class="quotelev1">&gt; and all previous versions
</span><br>
<span class="quotelev1">&gt; - rpmbuild works OK on with all openmpi versions with rpm 4.8.x from
</span><br>
<span class="quotelev1">&gt; RHEL/CentOS 6.x
</span><br>
<span class="quotelev1">&gt; - this is of course not blocking, since I successfully tested 2
</span><br>
<span class="quotelev1">&gt; workarounds
</span><br>
<span class="quotelev1">&gt; 1) install package with --nomd5, then rpmbuild -ba &lt;specfile&gt;
</span><br>
<span class="quotelev1">&gt; 2) repackage with &quot;old&quot; rpm:
</span><br>
<span class="quotelev1">&gt; rpm2cpio to extract spec file + sources tar
</span><br>
<span class="quotelev1">&gt; rpmbuild -bs &lt;specfile&gt; to produce new src rpm
</span><br>
<span class="quotelev1">&gt; Then rpmbuild --rebuild is OK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is a known &quot;problem&quot; with RHEL 6 that burned me, too. I say
<br>
&quot;problem&quot; in quotes because in my case, it only appeared when I tried to
<br>
install RPMS built for RHEL 5 on a RHEL 6 system. That's a problem to
<br>
me, but some purists don't see this is a problem and just say &quot;Well,
<br>
that's what you get for trying to install RHEL 5 RPMs on a RHEL 6
<br>
system. I don't agree with them.
<br>
<p>As a work around, i think I did some magic with rpm2cpio, as documented
<br>
above, but I don't remember the details.
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19460.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Previous message:</strong> <a href="19458.php">Ziaul Haque Olive: "[OMPI users] MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
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
