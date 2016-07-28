<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI with PGI pgc++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 12:24:15 2014" -->
<!-- isoreceived="20140129172415" -->
<!-- sent="Wed, 29 Jan 2014 17:24:14 +0000" -->
<!-- isosent="20140129172414" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI with PGI pgc++" -->
<!-- id="A44062AF-C16F-4B16-8680-C303AE864499_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="754A977B8DC8A14F9C722AF73FB8C004B679E15752_at_DEMAIL01.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling OpenMPI with PGI pgc++<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 12:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23501.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23501.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Reply:</strong> <a href="23501.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, I'm sorry -- I mis-read your initial mail (I thought when you did use all the PGI compilers, it worked).
<br>
<p>I don't know the difference between pgc++ and pgcpp, unfortunately.
<br>
<p>Do you have the latest version of your PGI compiler suite in that series?
<br>
<p><p>On Jan 29, 2014, at 12:10 PM, Jiri Kraus &lt;jkraus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for taking a look. I don't want to mix compiler tool chains. I have just double checked my configure line and I am passing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	CXX=pgc++ CC=pgcc FC=pgfortran F77=pgfortran ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so there are only PGI compilers used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jiri
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 29 Jan 2014 16:24:08 +0000
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Compiling OpenMPI with PGI pgc++
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;C7F17676-833E-4A51-AD9E-DE988C5D2E0F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That sounds about right.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What's happening is that OMPI has learned a bunch about the C compiler
</span><br>
<span class="quotelev2">&gt;&gt; before it does this C++ link test.  In your first case (which is assumedly with
</span><br>
<span class="quotelev2">&gt;&gt; gcc), it determines that it needs _GNU_SOURCE set -- or some other test has
</span><br>
<span class="quotelev2">&gt;&gt; caused that to be set.  Then it uses that with pgc++ and runs into the error you
</span><br>
<span class="quotelev2">&gt;&gt; show below.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason you want to mix gcc and pgc++?  It's usually simpler/better to
</span><br>
<span class="quotelev2">&gt;&gt; use a single compiler suite for the whole thing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 29, 2014, at 10:54 AM, Jiri Kraus &lt;jkraus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to compile OpenMPI 1.7.3 with pgc++ (14.1) as C++ compiler.
</span><br>
<span class="quotelev2">&gt;&gt; During configure it fails with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C and C++ are link compatible... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error from config.log is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:18205: checking if C and C++ are link compatible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:18230: pgcc -c -DNDEBUG -fast  conftest_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:18237: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:18268: pgc++ -o conftest -DNDEBUG -fast   conftest.cpp
</span><br>
<span class="quotelev2">&gt;&gt; conftest_c.o  &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.cpp:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;conftest.cpp&quot;, line 21: error: &quot;_GNU_SOURCE&quot; is predefined; attempted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          redefinition ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define _GNU_SOURCE 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;conftest.cpp&quot;, line 86: error: &quot;_GNU_SOURCE&quot; is predefined; attempted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          redefinition ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #define _GNU_SOURCE 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;conftest.cpp&quot;, line 167: warning: statement is unreachable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 errors detected in the compilation of &quot;conftest.cpp&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I use pgcpp instead of pgc++ OpenMPI configures and builds.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXX=pgcpp|pgc++ CC=pgcc FC=pgfortran F77=pgfortran CFLAGS=-fast
</span><br>
<span class="quotelev2">&gt;&gt; FCFLAGS=-fast FFLAGS=-fast CXXFLAGS=-fast ./configure --with-
</span><br>
<span class="quotelev2">&gt;&gt; hwloc=/shared/apps/rhel-6.2/tools/hwloc-1.7.1 --enable-hwloc-pci --with-cuda -
</span><br>
<span class="quotelev2">&gt;&gt; -prefix=/home-2/jkraus/local/openmpi-1.7.3/pgi-14.1/cuda-5.5.22
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to configure OpenMPI. Any Idea what caused the errors with pgc++?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jiri
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nvidia GmbH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; W?rselen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Amtsgericht Aachen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HRB 8361
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Managing Director: Karen Theresa Burns
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This email message is for the sole use of the intended recipient(s) and may
</span><br>
<span class="quotelev2">&gt;&gt; contain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev2">&gt;&gt; distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the sender
</span><br>
<span class="quotelev2">&gt;&gt; by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Digest Footer
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; End of users Digest, Vol 2796, Issue 1
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
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
<li><strong>Next message:</strong> <a href="23501.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23501.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Reply:</strong> <a href="23501.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
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
