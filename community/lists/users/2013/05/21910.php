<?
$subject_val = "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 15 21:57:55 2013" -->
<!-- isoreceived="20130516015755" -->
<!-- sent="Thu, 16 May 2013 03:58:00 +0200" -->
<!-- isosent="20130516015800" -->
<!-- name="H Hogreve" -->
<!-- email="hogreve_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers" -->
<!-- id="006301ce51d8$cbdd0b10$f000a8c0_at_ifisr11al7dp30" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F624CAE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> H Hogreve (<em>hogreve_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-15 21:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<li><strong>Previous message:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>In reply to:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<li><strong>Reply:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff:
<br>
<p>Attached please find the compressed  Config.log  file;
<br>
perhaps it already might provide some indications for
<br>
the problem encountered. There are several entries
<br>
&quot;compilation aborted for conftest.c&quot;, but I don't know
<br>
whether this is of importance.
<br>
Many thanks and best wishes, Hans H.
<br>
<p>----- Original Message -----
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Thursday, May 16, 2013 2:49 AM
<br>
Subject: Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit
<br>
integers
<br>
<p><p><span class="quotelev1">&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2013, at 7:42 PM, H Hogreve &lt;hogreve_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear mpi team / users:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To get a mpi with 64-bit integers (linux system:
</span><br>
<span class="quotelev2">&gt; &gt; ubuntu 12.04) I invoked the following
</span><br>
<span class="quotelev2">&gt; &gt; configuration options:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/openmpi CXX=icpc CC=icc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt; &gt; FFLAGS=-i8 FCFLAGS=-i8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The subsequent make/install scripts apparently
</span><br>
<span class="quotelev2">&gt; &gt; went through smoothly, but when I check
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info -a | grep 'Fort integer size'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the result reads:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fort integer size: 4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What went awry?
</span><br>
<span class="quotelev2">&gt; &gt; For all hints and suggestions many thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt; Hans H.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
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
<p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21910/config.log.tar.bz2">config.log.tar.bz2</a>
</ul>
<!-- attachment="config.log.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<li><strong>Previous message:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>In reply to:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<li><strong>Reply:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
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
