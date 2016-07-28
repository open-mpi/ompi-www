<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 11:50:25 2012" -->
<!-- isoreceived="20120320155025" -->
<!-- sent="Tue, 20 Mar 2012 15:50:21 +0000" -->
<!-- isosent="20120320155021" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?" -->
<!-- id="F2C3EA50-8F3A-45AA-9010-14DF1BB74903_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="829E09E3-E315-4453-9F97-258BC32C474C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5	without a C++ compiler?<br>
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 11:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried that at first but hit the same problem I'm having now - lot's of &quot;__intel_&quot; undefined errors when I go to compile even the simplest of mpi codes.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On Mar 20, 2012, at 9:36 AM, Jeffrey Squyres wrote:
&gt; Can you build with g++ instead of icpc?
&gt; 
&gt; All the C++ MPI bindings are inlined anyway, so the performance difference between the two might be negligible.
&gt; 
&gt; 
&gt; On Mar 20, 2012, at 11:35 AM, Gunter, David O wrote:
&gt; 
&gt;&gt; I wish it were that easy.  When I go that route, I get error messages like the following when trying to compile the parallel code with Intel:
&gt;&gt; 
&gt;&gt; libmpi.so:  undefined reference to `__intel_sse2_strcpy'
&gt;&gt; 
&gt;&gt; and other messages for every single Intel-implemented standard C-function.
&gt;&gt; 
&gt;&gt; -david
&gt;&gt; --
&gt;&gt; David Gunter
&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt; Los Alamos National Laboratory
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Mar 20, 2012, at 8:18 AM, Barrett, Brian W wrote:
&gt;&gt; 
&gt;&gt;&gt; On 3/20/12 10:06 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I need to build ompi-1.4.3 (or the newer 1.4.5) with an older Intel 10.0
&gt;&gt;&gt;&gt; compiler, but on a newer system in which the default g++ headers are
&gt;&gt;&gt;&gt; incompatible with Intel. Thus the C and Fortran compilers function
&gt;&gt;&gt;&gt; normally but the Intel C++ compiler fails to build even a simple &quot;hello
&gt;&gt;&gt;&gt; world&quot; code.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Is there a way to build OMPI without a C++ compiler?  I tried using the
&gt;&gt;&gt;&gt; --disable-mpi-cxx and --disable-mpi-cxx-seek flags but these are just for
&gt;&gt;&gt;&gt; the resulting bindings. The configure step still continues to search for
&gt;&gt;&gt;&gt; a working C++ compiler.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Yes, I know I can upgrade the Intel compiler but we don't have that as an
&gt;&gt;&gt;&gt; option in this case.
&gt;&gt;&gt; 
&gt;&gt;&gt; Unfortunately, you're a bit out of luck.  Open MPI 1.4.x requires C++ even
&gt;&gt;&gt; if you're not building the C++ bindings.  This is not true of 1.5.x and
&gt;&gt;&gt; later.
&gt;&gt;&gt; 
&gt;&gt;&gt; If you don't need the C++ bindings, I would build Open MPI with GNU C and
&gt;&gt;&gt; C++ and Intel Fortran.  After building, edit
&gt;&gt;&gt; &lt;PREFIX&gt;/share/openmpi/mpicc-wrapper-data.txt to change the compiler=gcc
&gt;&gt;&gt; line to compiler=&lt;intel C compiler&gt;.  There's not going to be much
&gt;&gt;&gt; performance difference between the two compilers for Open MPI itself.  GNU
&gt;&gt;&gt; C and Intel C are link compatible, so that should work out for you and the
&gt;&gt;&gt; users will never be the wiser.
&gt;&gt;&gt; 
&gt;&gt;&gt; Brian
&gt;&gt;&gt; 
&gt;&gt;&gt; -- 
&gt;&gt;&gt; Brian W. Barrett
&gt;&gt;&gt; Dept. 1423: Scalable System Software
&gt;&gt;&gt; Sandia National Laboratories
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
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
