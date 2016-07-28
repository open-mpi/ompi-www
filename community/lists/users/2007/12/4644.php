<?
$subject_val = "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 21:32:10 2007" -->
<!-- isoreceived="20071212023210" -->
<!-- sent="Tue, 11 Dec 2007 18:32:00 -0800" -->
<!-- isosent="20071212023200" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard" -->
<!-- id="FA5DB52F-A016-453E-9E1B-74D4A290306A_at_apple.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.16526.1195727197.6844.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard<br>
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 21:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone gotten Open MPI 1.2.4 to compile with the latest Intel  
<br>
compilers 10.1.007 and Leopard? I can get Open MPI-1.2.4 to to build  
<br>
with GCC + Fortran IFORT 10.1.007. But I can't get any configuration  
<br>
to work with Intel's 10.1.007 Compilers.
<br>
<p>The configuration completes, but the compilation fails fairly early,
<br>
<p>My compiler settings are as follows:
<br>
<p>For GCC + IFORT (This one works):
<br>
export CC=/usr/bin/cc
<br>
export CXX=/usr/bin/c++
<br>
export FC=/usr/bin/ifort
<br>
export F90=/usr/bin/ifort
<br>
export F77=/usr/bin/ifort
<br>
<p><p>For using all Intel compilers (The configure works but the compilation  
<br>
fails):
<br>
<p>export CC=/usr/bin/icc
<br>
export CXX=/usr/bin/icpc
<br>
export FC=/usr/bin/ifort
<br>
export F90=/usr/bin/ifort
<br>
export F77=/usr/bin/ifort
<br>
export FFLAGS=-no-multibyte-chars
<br>
export CFLAGS=-no-multibyte-chars
<br>
export CXXFLAGS=-no-multibyte-chars
<br>
export CCASFLAGS=-no-multibyte-chars
<br>
<p>_defined,suppress -o libasm.la  asm.lo atomic-asm.lo  -lutil
<br>
libtool: link: ar cru .libs/libasm.a .libs/asm.o .libs/atomic-asm.o
<br>
ar: .libs/atomic-asm.o: No such file or directory
<br>
make[2]: *** [libasm.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><p><p>Warner Yuen
<br>
Scientific Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p>On Nov 22, 2007, at 2:26 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Nov 2007 15:15:00 -0500
</span><br>
<span class="quotelev1">&gt; From: Mark Dobossy &lt;mdobossy_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problems compiling 1.2.4 using Intel
</span><br>
<span class="quotelev1">&gt; 	Compiler	10.1.006 on Leopard
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;99CA0551-9BF4-47C0-85C2-6B2126A83651_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the suggestion Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, that didn't fix the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 21, 2007, at 7:55 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try also adding CCASFLAGS=-no-multibyte-chars?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4643.php">Tim Mattox: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4646.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
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
