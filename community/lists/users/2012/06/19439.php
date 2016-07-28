<?
$subject_val = "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  2 15:00:17 2012" -->
<!-- isoreceived="20120602190017" -->
<!-- sent="Sat, 02 Jun 2012 21:01:54 +0200" -->
<!-- isosent="20120602190154" -->
<!-- name="livelfs" -->
<!-- email="livelfs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="4FCA6322.3000209_at_free.fr" -->
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
<strong>Date:</strong> 2012-06-02 15:01:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19440.php">Ifeanyi: "[OMPI users] checkpointing/restart of hpl"</a>
<li><strong>Previous message:</strong> <a href="19438.php">Andreas Sch&#228;fer: "Re: [OMPI users] OT: MPI Quiz..."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19442.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="19442.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;On Jun 1, 2012, at 2:17 PM, livelfs wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Just curious -- do you know if there's a way I can make an
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  RHEL5-friendly SRPM on my RHEL6 cluster?  I seem to have RPM 4.8.0 on my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  RHEL6&gt;machines.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  As I mentioned in my previous mail, what about testing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  rpmbuild --define &quot;_source_filedigest_algorithm md5&quot;  \
</span><br>
<span class="quotelev2">&gt;&gt;    --define &quot;_binary_filedigest_algorithm md5&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Oops -- I missed that.  Can you try the -2 SRPM found here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi again
<br>
I found only one SRPM: 
<br>
<a href="http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6-2.src.rpm">http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6-2.src.rpm</a>
<br>
<p>I successfully tested
<br>
rpmbuild --rebuild openmpi-1.6-2.src.rpm
<br>
(passed GZDIO step) on x86_64 CentOS5.8, CentOS6.2, and SLES10sp2.
<br>
Good!
<br>
<p>Regards,
<br>
Stephane Rouberol
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19440.php">Ifeanyi: "[OMPI users] checkpointing/restart of hpl"</a>
<li><strong>Previous message:</strong> <a href="19438.php">Andreas Sch&#228;fer: "Re: [OMPI users] OT: MPI Quiz..."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19397.php">livelfs: "[OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19442.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<li><strong>Reply:</strong> <a href="19442.php">Jeff Squyres: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
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
