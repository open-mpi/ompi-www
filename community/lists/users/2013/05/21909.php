<?
$subject_val = "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 15 20:49:46 2013" -->
<!-- isoreceived="20130516004946" -->
<!-- sent="Thu, 16 May 2013 00:49:41 +0000" -->
<!-- isosent="20130516004941" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F624CAE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="004401ce51c5$ea6444d0$f000a8c0_at_ifisr11al7dp30" -->
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
<strong>Subject:</strong> Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-15 20:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Previous message:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>In reply to:</strong> <a href="21907.php">H Hogreve: "[OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Reply:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On May 15, 2013, at 7:42 PM, H Hogreve &lt;hogreve_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear mpi team / users:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To get a mpi with 64-bit integers (linux system:
</span><br>
<span class="quotelev1">&gt; ubuntu 12.04) I invoked the following
</span><br>
<span class="quotelev1">&gt; configuration options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi CXX=icpc CC=icc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; FFLAGS=-i8 FCFLAGS=-i8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The subsequent make/install scripts apparently
</span><br>
<span class="quotelev1">&gt; went through smoothly, but when I check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info -a | grep 'Fort integer size'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the result reads:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fort integer size: 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What went awry?
</span><br>
<span class="quotelev1">&gt; For all hints and suggestions many thanks in advance,
</span><br>
<span class="quotelev1">&gt; Hans H.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Previous message:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>In reply to:</strong> <a href="21907.php">H Hogreve: "[OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Reply:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
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
