<?
$subject_val = "Re: [OMPI users] errors testing openmpi1.6.5 ----";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 29 12:15:31 2013" -->
<!-- isoreceived="20130729161531" -->
<!-- sent="Mon, 29 Jul 2013 18:15:04 +0200" -->
<!-- isosent="20130729161504" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors testing openmpi1.6.5 ----" -->
<!-- id="5CA6F119-D464-4607-B0F6-852E81987109_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F782D49_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors testing openmpi1.6.5 ----<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-29 12:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22409.php">christian schmitt: "[OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 29.07.2013 um 13:47 schrieb Jeff Squyres (jsquyres):
<br>
<p><span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=building#build-intel-compilers">http://www.open-mpi.org/faq/?category=building#build-intel-compilers</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2013, at 11:34 PM, Yuping Sun &lt;ysun_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was able to make and build openmpi-1.6.5 using gfortran. However, I was not able to compile using intel ifort. Would anyone tell me how to modify configure options to use ifort? Please give me the instruction if you can. Here is what I 
</span><br>
<span class="quotelev2">&gt;&gt; used:
</span><br>
<span class="quotelev2">&gt;&gt; $ ./configure --prefix=/usr/local/openmpi165 FC=`which ifort ` F77=`which ifort` --disable-shared
</span><br>
<p>and: <a href="http://www.open-mpi.org/faq/?category=building#static-build">http://www.open-mpi.org/faq/?category=building#static-build</a>
<br>
<p>Looks like you disabled the shared build without enabling a static build.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; $ make &#150;j8 all
</span><br>
<span class="quotelev2">&gt;&gt; $ make install
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It does not work out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yuping
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22409.php">christian schmitt: "[OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>In reply to:</strong> <a href="22407.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors testing openmpi1.6.5 ----"</a>
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
