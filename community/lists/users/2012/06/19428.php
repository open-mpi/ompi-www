<?
$subject_val = "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 15:01:55 2012" -->
<!-- isoreceived="20120601190155" -->
<!-- sent="Fri, 1 Jun 2012 15:01:41 -0400" -->
<!-- isosent="20120601190141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)" -->
<!-- id="5682837F-D217-42E5-AFBC-AAA0966AC582_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FC90726.4000208_at_free.fr" -->
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
<strong>Date:</strong> 2012-06-01 15:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Previous message:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>In reply to:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19439.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 1, 2012, at 2:17 PM, livelfs wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Just curious -- do you know if there's a way I can make an
</span><br>
<span class="quotelev2">&gt;&gt; RHEL5-friendly SRPM on my RHEL6 cluster?  I seem to have RPM 4.8.0 on my
</span><br>
<span class="quotelev2">&gt;&gt; RHEL6 &gt;machines.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; As I mentioned in my previous mail, what about testing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpmbuild --define &quot;_source_filedigest_algorithm md5&quot;  \
</span><br>
<span class="quotelev1">&gt;   --define &quot;_binary_filedigest_algorithm md5&quot;
</span><br>
<p>Oops -- I missed that.  Can you try the -2 SRPM found here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
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
<li><strong>Next message:</strong> <a href="19429.php">Jeremy: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>Previous message:</strong> <a href="19427.php">Jeff Squyres: "Re: [OMPI users] Error building openmpi-1.6 from copy"</a>
<li><strong>In reply to:</strong> <a href="19425.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19439.php">livelfs: "Re: [OMPI users] Building openmpi from src rpm: rpmbuild --rebuild errors with 'cpio: MD5 sum mismatch' (since openmpi 1.4.5)"</a>
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
