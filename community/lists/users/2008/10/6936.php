<?
$subject_val = "[OMPI users]  build failed using intel compilers on mac os";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 11:34:11 2008" -->
<!-- isoreceived="20081010153411" -->
<!-- sent="Fri, 10 Oct 2008 08:34:05 -0700" -->
<!-- isosent="20081010153405" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users]  build failed using intel compilers on mac os" -->
<!-- id="8BA2DFF5-2B9C-45C8-81F5-C0A82B59FEB5_at_apple.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.3099.1223615742.16379.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users]  build failed using intel compilers on mac os<br>
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 11:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6937.php">SLIM H.A.: "[OMPI users] where is opal_install_dirs?"</a>
<li><strong>Previous message:</strong> <a href="6935.php">Francesco Iannone: "[OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If using the Intel v10.1.x compilers to build a 64-bit version, by  
<br>
default (default installation), Intel invokes the 64-bit compiler. But  
<br>
yes, you can use the &quot;-m64&quot; flag as well.
<br>
<p><p>Warner Yuen
<br>
Scientific Computing
<br>
Consulting Engineer
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
<p><p><p>On Oct 9, 2008, at 10:15 PM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Thu, 9 Oct 2008 17:28:38 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] build failed using intel compilers on mac os
</span><br>
<span class="quotelev1">&gt; 	x
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;897C21DB-CB73-430C-B306-8E492B247B34_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The CXX compiler should be icpc, not icc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2008, at 11:08 AM, Massimo Cafaro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi build&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to build the latest v1.2.7 open-mpi version on Mac OS X
</span><br>
<span class="quotelev2">&gt;&gt; 10.5.5 using the intel c, c++ and fortran compilers v10.1.017 (the
</span><br>
<span class="quotelev2">&gt;&gt; latest ones released by intel). Before starting the build I have
</span><br>
<span class="quotelev2">&gt;&gt; properly configured the CC, CXX, F77 and FC environment variables
</span><br>
<span class="quotelev2">&gt;&gt; (to icc and ifort). The build failed due to undefined symbols.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am attaching a log of the failed build process.
</span><br>
<span class="quotelev2">&gt;&gt; Any clue? Am I doing something wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, to build a 64 bit version it is enough to supply in the
</span><br>
<span class="quotelev2">&gt;&gt; corresponding environment variables the -m64 option ?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance and best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Massimo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6936/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6937.php">SLIM H.A.: "[OMPI users] where is opal_install_dirs?"</a>
<li><strong>Previous message:</strong> <a href="6935.php">Francesco Iannone: "[OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
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
