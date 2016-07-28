<?
$subject_val = "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 06:50:21 2007" -->
<!-- isoreceived="20071212115021" -->
<!-- sent="Wed, 12 Dec 2007 06:50:03 -0500" -->
<!-- isosent="20071212115003" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard" -->
<!-- id="43BB0BCE-E328-4D3E-AE61-84991B27FBE9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FA5DB52F-A016-453E-9E1B-74D4A290306A_at_apple.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 06:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4644.php">Warner Yuen: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My primary work platform is a MacBook Pro, but I don't specifically  
<br>
develop for OS X, so I don't have any special compilers.
<br>
<p>Sorry to ask this because I think the information was sent before, but  
<br>
could you send all the compile/failure information?  <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On Dec 11, 2007, at 9:32 PM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone gotten Open MPI 1.2.4 to compile with the latest Intel  
</span><br>
<span class="quotelev1">&gt; compilers 10.1.007 and Leopard? I can get Open MPI-1.2.4 to to build  
</span><br>
<span class="quotelev1">&gt; with GCC + Fortran IFORT 10.1.007. But I can't get any configuration  
</span><br>
<span class="quotelev1">&gt; to work with Intel's 10.1.007 Compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configuration completes, but the compilation fails fairly early,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My compiler settings are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For GCC + IFORT (This one works):
</span><br>
<span class="quotelev1">&gt; export CC=/usr/bin/cc
</span><br>
<span class="quotelev1">&gt; export CXX=/usr/bin/c++
</span><br>
<span class="quotelev1">&gt; export FC=/usr/bin/ifort
</span><br>
<span class="quotelev1">&gt; export F90=/usr/bin/ifort
</span><br>
<span class="quotelev1">&gt; export F77=/usr/bin/ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For using all Intel compilers (The configure works but the  
</span><br>
<span class="quotelev1">&gt; compilation fails):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export CC=/usr/bin/icc
</span><br>
<span class="quotelev1">&gt; export CXX=/usr/bin/icpc
</span><br>
<span class="quotelev1">&gt; export FC=/usr/bin/ifort
</span><br>
<span class="quotelev1">&gt; export F90=/usr/bin/ifort
</span><br>
<span class="quotelev1">&gt; export F77=/usr/bin/ifort
</span><br>
<span class="quotelev1">&gt; export FFLAGS=-no-multibyte-chars
</span><br>
<span class="quotelev1">&gt; export CFLAGS=-no-multibyte-chars
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=-no-multibyte-chars
</span><br>
<span class="quotelev1">&gt; export CCASFLAGS=-no-multibyte-chars
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _defined,suppress -o libasm.la  asm.lo atomic-asm.lo  -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: ar cru .libs/libasm.a .libs/asm.o .libs/atomic-asm.o
</span><br>
<span class="quotelev1">&gt; ar: .libs/atomic-asm.o: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libasm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing Consultant
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt; Fax: 408.715.0133
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2007, at 2:26 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 21 Nov 2007 15:15:00 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: Mark Dobossy &lt;mdobossy_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problems compiling 1.2.4 using Intel
</span><br>
<span class="quotelev2">&gt;&gt; 	Compiler	10.1.006 on Leopard
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;99CA0551-9BF4-47C0-85C2-6B2126A83651_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the suggestion Jeff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, that didn't fix the issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 21, 2007, at 7:55 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you try also adding CCASFLAGS=-no-multibyte-chars?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>Previous message:</strong> <a href="4645.php">Aurelien Bouteiller: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4644.php">Warner Yuen: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler	10.1.006 on Leopard"</a>
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
