<?
$subject_val = "Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 16:21:13 2013" -->
<!-- isoreceived="20130516202113" -->
<!-- sent="Thu, 16 May 2013 22:21:29 +0200" -->
<!-- isosent="20130516202129" -->
<!-- name="H Hogreve" -->
<!-- email="hogreve_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers" -->
<!-- id="006801ce5272$f37abe20$f000a8c0_at_ifisr11al7dp30" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F625DC2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers<br>
<strong>From:</strong> H Hogreve (<em>hogreve_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 16:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Previous message:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>In reply to:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff::
<br>
<p>Many thanks for your kind response. Since before changing to
<br>
version 1.6.4, I had installed (via &quot;apt-get install&quot;) a 1.5 version
<br>
of openmpi, I also was suspicious that ompi_info was referring
<br>
to remnants of this old mpi version, though I did my best of
<br>
removing it. Nonetheless, when cheching again, actually there
<br>
still was an ompi_info in /usr/bin from this previous installation.
<br>
Upon removing these ompi-s from /usr/bin, the ompi_info
<br>
now indeed yields the desired result:    Fort integer size: 8
<br>
<p>Thanks again and best wishes, Hans H.
<br>
<p>----- Original Message -----
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Thursday, May 16, 2013 3:33 PM
<br>
Subject: Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit
<br>
integers
<br>
<p><p><span class="quotelev1">&gt; Looking at your config.log, it looks like OMPI correctly determined that
</span><br>
the Fortran INTEGER size is 8.  I see statements like this:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define OMPI_SIZEOF_FORTRAN_INTEGER 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that you're running the ompi_info that you just installed?
</span><br>
Can you double check to see that there's not another ompi_info somewhere in
<br>
your path that you're accidentally executing?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 15, 2013, at 9:58 PM, H Hogreve &lt;hogreve_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Jeff:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached please find the compressed  Config.log  file;
</span><br>
<span class="quotelev2">&gt; &gt; perhaps it already might provide some indications for
</span><br>
<span class="quotelev2">&gt; &gt; the problem encountered. There are several entries
</span><br>
<span class="quotelev2">&gt; &gt; &quot;compilation aborted for conftest.c&quot;, but I don't know
</span><br>
<span class="quotelev2">&gt; &gt; whether this is of importance.
</span><br>
<span class="quotelev2">&gt; &gt; Many thanks and best wishes, Hans H.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, May 16, 2013 2:49 AM
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit
</span><br>
<span class="quotelev2">&gt; &gt; integers
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 15, 2013, at 7:42 PM, H Hogreve &lt;hogreve_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Dear mpi team / users:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To get a mpi with 64-bit integers (linux system:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ubuntu 12.04) I invoked the following
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; configuration options:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./configure --prefix=/opt/openmpi CXX=icpc CC=icc F77=ifort FC=ifort
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; FFLAGS=-i8 FCFLAGS=-i8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The subsequent make/install scripts apparently
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; went through smoothly, but when I check
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ompi_info -a | grep 'Fort integer size'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the result reads:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Fort integer size: 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What went awry?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For all hints and suggestions many thanks in advance,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hans H.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21925.php">Gus Correa: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>Previous message:</strong> <a href="21923.php">Geraldine Hochman-Klarenberg: "Re: [OMPI users] Configuration with Intel C++ Composer 12.0.2 on OSX 10.7.5"</a>
<li><strong>In reply to:</strong> <a href="21911.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers"</a>
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
