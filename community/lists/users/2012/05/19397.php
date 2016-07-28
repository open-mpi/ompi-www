<?
$subject_val = "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 31 02:02:59 2012" -->
<!-- isoreceived="20120531060259" -->
<!-- sent="Thu, 31 May 2012 08:04:31 +0200" -->
<!-- isosent="20120531060431" -->
<!-- name="livelfs" -->
<!-- email="livelfs_at_[hidden]" -->
<!-- subject="[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="4FC709EF.2070801_at_free.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)<br>
<strong>From:</strong> livelfs (<em>livelfs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-31 02:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19439.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19443.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19459.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Since 1.4.5 openmpi release, it is no longer possible to build openmpi 
<br>
binary with rpmbuild --rebuild if system rpm package version is 4.4.x, 
<br>
like in SLES10, SLES11, RHEL/CentOS 5.x.
<br>
<p>For instance, on CentOS 5.8 x86_64 with rpm 4.4.2.3-28.el5_8:
<br>
<p>[root_at_horizon _tmp]# rpmbuild --rebuild openmpi-1.4.5-1.src.rpm
<br>
Installing openmpi-1.4.5-1.src.rpm
<br>
warning: user jsquyres does not exist - using root
<br>
error: unpacking of archive failed on file 
<br>
/usr/src/redhat/SPECS/openmpi-1.4.5.spec;4fc65c74: cpio: MD5 sum mismatch
<br>
error: openmpi-1.4.5-1.src.rpm cannot be installed
<br>
<p>Apparently this problem is due to lack of support of SHA-256 in rpm 4.4.x
<br>
<p>Googling suggests
<br>
&nbsp;&nbsp;&nbsp;rpmbuild -bs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--define &quot;_source_filedigest_algorithm md5&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--define &quot;_binary_filedigest_algorithm md5&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;package.spec
<br>
should be used to produce openmpi src rpms and avoid the problem.
<br>
<p>Please note that
<br>
- rpmbuild works OK on RHEL/CentOS 5.x with openmpi-1.4.4-1.src.rpm and 
<br>
all previous versions
<br>
- rpmbuild works OK on with all openmpi versions with rpm 4.8.x from 
<br>
RHEL/CentOS 6.x
<br>
- this is of course not blocking, since I successfully tested 2 workarounds
<br>
1) install package with --nomd5, then rpmbuild -ba &lt;specfile&gt;
<br>
2) repackage with &quot;old&quot; rpm:
<br>
rpm2cpio to extract spec file + sources tar
<br>
rpmbuild -bs &lt;specfile&gt; to produce new src rpm
<br>
Then rpmbuild --rebuild is OK
<br>
<p>Regards,
<br>
Stephane Rouberol
<br>
<p>
<br><p><strong>attached mail follows:</strong><hr><hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19397/ForwardedMessage.eml">ForwardedMessage.eml</a>
</ul>
<!-- attachment="ForwardedMessage.eml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19398.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19396.php">Siegmar Gross: "[OMPI users] problems compiling openmpi-1.6 on some platforms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="19399.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19439.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19443.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19459.php">Prentice Bisbal: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
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
