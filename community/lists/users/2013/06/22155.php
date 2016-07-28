<?
$subject_val = "Re: [OMPI users] error with openmpi on snow leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 17:21:07 2013" -->
<!-- isoreceived="20130619212107" -->
<!-- sent="Wed, 19 Jun 2013 21:21:02 +0000" -->
<!-- isosent="20130619212102" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with openmpi on snow leopard" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F692169_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU0-SMTP267F22A13FEE799EFF26D02CB8D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] error with openmpi on snow leopard<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 17:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22156.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22154.php">Gus Correa: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22150.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22154.php">Gus Correa: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2013, at 4:11 PM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; MacBook-Pro-di-Lorenzo-Dona:bin lorenzodona$ mpif90
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; but when i type:
</span><br>
<span class="quotelev1">&gt; MacBook-Pro-di-Lorenzo-Dona:bin lorenzodona$ ./mpif90
</span><br>
<span class="quotelev1">&gt; gfortran: fatal error: no input files
</span><br>
<p>This sounds like you might benefit from taking a Linux shell tutorial.
<br>
<p>If you run &quot;foo&quot; and get one error message and run &quot;./foo&quot; and get a different error message, that suggests that you are running two different &quot;foo&quot; executables.  For example, it might mean that &quot;foo&quot; is found early in your PATH, and is *not* the &quot;foo&quot; that is in your current working directory.  But when you run &quot;./foo&quot;, you're forcing the use of the &quot;foo&quot; in your current working directory.  It sounds like the former one is broken, but the latter one works.
<br>
<p>Gus also noted some good points in his reply.
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
<li><strong>Next message:</strong> <a href="22156.php">Reuti: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Previous message:</strong> <a href="22154.php">Gus Correa: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<li><strong>In reply to:</strong> <a href="22150.php">Lorenzo Don&#224;: "Re: [OMPI users] error with openmpi on snow leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22154.php">Gus Correa: "Re: [OMPI users] error with openmpi on snow leopard"</a>
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
