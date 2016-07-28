<?
$subject_val = "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 27 18:57:25 2011" -->
<!-- isoreceived="20110427225725" -->
<!-- sent="Thu, 28 Apr 2011 00:57:20 +0200" -->
<!-- isosent="20110427225720" -->
<!-- name="Tru Huynh" -->
<!-- email="tru_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux" -->
<!-- id="20110427225720.GF9911_at_sillage.bis.pasteur.fr" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110427224627.GE9911_at_sillage.bis.pasteur.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux<br>
<strong>From:</strong> Tru Huynh (<em>tru_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-27 18:57:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 28, 2011 at 12:46:27AM +0200, Tru Huynh wrote:
<br>
<span class="quotelev1">&gt; On Thu, Apr 21, 2011 at 06:35:16PM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It's normal and expected for there to be lots of errors in config.log.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There's a bunch of tests in configure that are designed to succeed on some systems and fail on others.  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So don't read anything into the failures that you see in config.log -- unless configure itself fails.  Then we generally go look at the *last* failures in config.log to start backtracking to figure out what went wrong.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for what's worth this works fine for me CentOS 5 x86_64:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/c5/shared/openmpi/1.4.3/sge/6.2u4/intel/12.2011.3.174 --with-sge CC=icc FC=ifort CXX=icpc F77=ifort &amp;&amp; make &amp;&amp; make check &amp;&amp; make install 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
The above was with:
<br>
Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.0 Build 20110309
<br>
Copyright (C) 1985-2011 Intel Corporation.  All rights reserved.
<br>
<p>I have just retried with the initial XE version:
<br>
Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 12.0 Build 20101006
<br>
Copyright (C) 1985-2010 Intel Corporation.  All rights reserved.
<br>
<p>builds and passes the check too.
<br>
<p>my 2 cents
<br>
<p>Tru
<br>
<pre>
-- 
Dr Tru Huynh          | <a href="http://www.pasteur.fr/recherche/unites/Binfs/">http://www.pasteur.fr/recherche/unites/Binfs/</a>
mailto:tru_at_[hidden] | tel/fax +33 1 45 68 87 37/19
Institut Pasteur, 25-28 rue du Docteur Roux, 75724 Paris CEDEX 15 France  
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI users] OpenMPI out of band TCP retry exceeded"</a>
<li><strong>Previous message:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16361.php">Tru Huynh: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
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
