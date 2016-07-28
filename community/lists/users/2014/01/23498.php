<?
$subject_val = "Re: [OMPI users] Compiling OpenMPI with PGI pgc++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 11:24:10 2014" -->
<!-- isoreceived="20140129162410" -->
<!-- sent="Wed, 29 Jan 2014 16:24:08 +0000" -->
<!-- isosent="20140129162408" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling OpenMPI with PGI pgc++" -->
<!-- id="C7F17676-833E-4A51-AD9E-DE988C5D2E0F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="754A977B8DC8A14F9C722AF73FB8C004B679E15722_at_DEMAIL01.nvidia.com" -->
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
<strong>Date:</strong> 2014-01-29 11:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23497.php">Jiri Kraus: "[OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23497.php">Jiri Kraus: "[OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds about right.
<br>
<p>What's happening is that OMPI has learned a bunch about the C compiler before it does this C++ link test.  In your first case (which is assumedly with gcc), it determines that it needs _GNU_SOURCE set -- or some other test has caused that to be set.  Then it uses that with pgc++ and runs into the error you show below.
<br>
<p>Is there a reason you want to mix gcc and pgc++?  It's usually simpler/better to use a single compiler suite for the whole thing.
<br>
<p><p>On Jan 29, 2014, at 10:54 AM, Jiri Kraus &lt;jkraus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am trying to compile OpenMPI 1.7.3 with pgc++ (14.1) as C++ compiler. During configure it fails with
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; checking if C and C++ are link compatible... no
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The error from config.log is:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; configure:18205: checking if C and C++ are link compatible
</span><br>
<span class="quotelev1">&gt; configure:18230: pgcc -c -DNDEBUG -fast  conftest_c.c
</span><br>
<span class="quotelev1">&gt; configure:18237: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:18268: pgc++ -o conftest -DNDEBUG -fast   conftest.cpp conftest_c.o  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.cpp:
</span><br>
<span class="quotelev1">&gt; &quot;conftest.cpp&quot;, line 21: error: &quot;_GNU_SOURCE&quot; is predefined; attempted
</span><br>
<span class="quotelev1">&gt;           redefinition ignored
</span><br>
<span class="quotelev1">&gt;   #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;conftest.cpp&quot;, line 86: error: &quot;_GNU_SOURCE&quot; is predefined; attempted
</span><br>
<span class="quotelev1">&gt;           redefinition ignored
</span><br>
<span class="quotelev1">&gt;   #define _GNU_SOURCE 1
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &quot;conftest.cpp&quot;, line 167: warning: statement is unreachable
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2 errors detected in the compilation of &quot;conftest.cpp&quot;.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; When I use pgcpp instead of pgc++ OpenMPI configures and builds.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am using
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; CXX=pgcpp|pgc++ CC=pgcc FC=pgfortran F77=pgfortran CFLAGS=-fast FCFLAGS=-fast FFLAGS=-fast CXXFLAGS=-fast ./configure --with-hwloc=/shared/apps/rhel-6.2/tools/hwloc-1.7.1 --enable-hwloc-pci --with-cuda --prefix=/home-2/jkraus/local/openmpi-1.7.3/pgi-14.1/cuda-5.5.22
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; to configure OpenMPI. Any Idea what caused the errors with pgc++?
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
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Nvidia GmbH
</span><br>
<span class="quotelev1">&gt; W?rselen
</span><br>
<span class="quotelev1">&gt; Amtsgericht Aachen
</span><br>
<span class="quotelev1">&gt; HRB 8361
</span><br>
<span class="quotelev1">&gt; Managing Director: Karen Theresa Burns
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23497.php">Jiri Kraus: "[OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23497.php">Jiri Kraus: "[OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23499.php">Jiri Kraus: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
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
