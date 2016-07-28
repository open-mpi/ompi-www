<?
$subject_val = "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 16 09:33:16 2013" -->
<!-- isoreceived="20130516133316" -->
<!-- sent="Thu, 16 May 2013 13:33:10 +0000" -->
<!-- isosent="20130516133310" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F625DC2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="006301ce51d8$cbdd0b10$f000a8c0_at_ifisr11al7dp30" -->
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
<strong>Subject:</strong> Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit	integers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-16 09:33:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21912.php">Hayato KUNIIE: "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>In reply to:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21924.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers"</a>
<li><strong>Reply:</strong> <a href="21924.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at your config.log, it looks like OMPI correctly determined that the Fortran INTEGER size is 8.  I see statements like this:
<br>
<p>#define OMPI_SIZEOF_FORTRAN_INTEGER 8
<br>
<p>Are you sure that you're running the ompi_info that you just installed?  Can you double check to see that there's not another ompi_info somewhere in your path that you're accidentally executing?
<br>
<p><p>On May 15, 2013, at 9:58 PM, H Hogreve &lt;hogreve_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jeff:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached please find the compressed  Config.log  file;
</span><br>
<span class="quotelev1">&gt; perhaps it already might provide some indications for
</span><br>
<span class="quotelev1">&gt; the problem encountered. There are several entries
</span><br>
<span class="quotelev1">&gt; &quot;compilation aborted for conftest.c&quot;, but I don't know
</span><br>
<span class="quotelev1">&gt; whether this is of importance.
</span><br>
<span class="quotelev1">&gt; Many thanks and best wishes, Hans H.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 16, 2013 2:49 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit
</span><br>
<span class="quotelev1">&gt; integers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you send all the information listed here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 15, 2013, at 7:42 PM, H Hogreve &lt;hogreve_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear mpi team / users:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To get a mpi with 64-bit integers (linux system:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ubuntu 12.04) I invoked the following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openmpi CXX=icpc CC=icc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS=-i8 FCFLAGS=-i8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The subsequent make/install scripts apparently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; went through smoothly, but when I check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info -a | grep 'Fort integer size'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the result reads:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fort integer size: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What went awry?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For all hints and suggestions many thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hans H.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &lt;config.log.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="21912.php">Hayato KUNIIE: "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>In reply to:</strong> <a href="21910.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21924.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers"</a>
<li><strong>Reply:</strong> <a href="21924.php">H Hogreve: "Re: [OMPI users] Subject: Building openmpi-1.6.4 with64-bit integers"</a>
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
