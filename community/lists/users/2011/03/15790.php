<?
$subject_val = "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 12:59:11 2011" -->
<!-- isoreceived="20110303175911" -->
<!-- sent="Thu, 3 Mar 2011 12:59:07 -0500" -->
<!-- isosent="20110303175907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441" -->
<!-- id="06843724-BC4D-4AC4-A8D3-0632F95BADF8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6D622E.601_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-03 12:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15789.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am unable to reproduce your problem with the 1.5.2rc3 tarball...?
<br>
<p>Does your compiler support INTEGER8?  Can you send the data requested here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Mar 1, 2011, at 4:16 PM, Harald Anlauf wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there appears to be a regression in revision 1.5.2rc3r24441.
</span><br>
<span class="quotelev1">&gt; The attached program crashes even with 1 PE with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Default real, digits:           4          24
</span><br>
<span class="quotelev1">&gt; Real kind,    digits:           8          53
</span><br>
<span class="quotelev1">&gt; Integer kind,   bits:           8                   64
</span><br>
<span class="quotelev1">&gt; Default Integer     :           4          32
</span><br>
<span class="quotelev1">&gt; Sum[real]:   1.0000000       2.0000000       3.0000000
</span><br>
<span class="quotelev1">&gt; Sum[real(8)]:   1.0000000000000000        2.0000000000000000
</span><br>
<span class="quotelev1">&gt; 3.0000000000000000
</span><br>
<span class="quotelev1">&gt; Sum[integer(4)]:           1           2           3
</span><br>
<span class="quotelev1">&gt; [proton:24826] *** An error occurred in MPI_Allreduce: the reduction
</span><br>
<span class="quotelev1">&gt; operation MPI_SUM is not defined on the MPI_INTEGER8 datatype
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % ompi_info --arch
</span><br>
<span class="quotelev1">&gt; Configured architecture: i686-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; % ompi_info --all |grep 'integer[48]'
</span><br>
<span class="quotelev1">&gt;      Fort have integer4: yes
</span><br>
<span class="quotelev1">&gt;      Fort have integer8: yes
</span><br>
<span class="quotelev1">&gt;      Fort integer4 size: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 size: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;     Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are no problems with 1.4.x and earlier revisions.
</span><br>
<span class="quotelev1">&gt; &lt;mpiallreducetest.f90&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15789.php">Nguyen Toan: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
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
