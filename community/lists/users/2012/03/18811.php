<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 11:36:47 2012" -->
<!-- isoreceived="20120320153647" -->
<!-- sent="Tue, 20 Mar 2012 11:36:41 -0400" -->
<!-- isosent="20120320153641" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?" -->
<!-- id="829E09E3-E315-4453-9F97-258BC32C474C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="166050C7-B16C-4420-909E-ED9335BECBA2_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 11:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18812.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18812.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18812.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you build with g++ instead of icpc?
<br>
<p>All the C++ MPI bindings are inlined anyway, so the performance difference between the two might be negligible.
<br>
<p><p>On Mar 20, 2012, at 11:35 AM, Gunter, David O wrote:
<br>
<p><span class="quotelev1">&gt; I wish it were that easy.  When I go that route, I get error messages like the following when trying to compile the parallel code with Intel:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libmpi.so:  undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and other messages for every single Intel-implemented standard C-function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-3: Infrastructure Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2012, at 8:18 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/20/12 10:06 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to build ompi-1.4.3 (or the newer 1.4.5) with an older Intel 10.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler, but on a newer system in which the default g++ headers are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incompatible with Intel. Thus the C and Fortran compilers function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; normally but the Intel C++ compiler fails to build even a simple &quot;hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; world&quot; code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to build OMPI without a C++ compiler?  I tried using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-cxx and --disable-mpi-cxx-seek flags but these are just for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the resulting bindings. The configure step still continues to search for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a working C++ compiler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I know I can upgrade the Intel compiler but we don't have that as an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option in this case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, you're a bit out of luck.  Open MPI 1.4.x requires C++ even
</span><br>
<span class="quotelev2">&gt;&gt; if you're not building the C++ bindings.  This is not true of 1.5.x and
</span><br>
<span class="quotelev2">&gt;&gt; later.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you don't need the C++ bindings, I would build Open MPI with GNU C and
</span><br>
<span class="quotelev2">&gt;&gt; C++ and Intel Fortran.  After building, edit
</span><br>
<span class="quotelev2">&gt;&gt; &lt;PREFIX&gt;/share/openmpi/mpicc-wrapper-data.txt to change the compiler=gcc
</span><br>
<span class="quotelev2">&gt;&gt; line to compiler=&lt;intel C compiler&gt;.  There's not going to be much
</span><br>
<span class="quotelev2">&gt;&gt; performance difference between the two compilers for Open MPI itself.  GNU
</span><br>
<span class="quotelev2">&gt;&gt; C and Intel C are link compatible, so that should work out for you and the
</span><br>
<span class="quotelev2">&gt;&gt; users will never be the wiser.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="18812.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18812.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18812.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?"</a>
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
