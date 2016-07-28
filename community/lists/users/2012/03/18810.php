<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 11:35:36 2012" -->
<!-- isoreceived="20120320153536" -->
<!-- sent="Tue, 20 Mar 2012 15:35:30 +0000" -->
<!-- isosent="20120320153530" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?" -->
<!-- id="166050C7-B16C-4420-909E-ED9335BECBA2_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CB8E08ED.B4B4%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 11:35:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18814.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wish it were that easy.  When I go that route, I get error messages like the following when trying to compile the parallel code with Intel:
<br>
<p>libmpi.so:  undefined reference to `__intel_sse2_strcpy'
<br>
<p>and other messages for every single Intel-implemented standard C-function.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On Mar 20, 2012, at 8:18 AM, Barrett, Brian W wrote:
&gt; On 3/20/12 10:06 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; I need to build ompi-1.4.3 (or the newer 1.4.5) with an older Intel 10.0
&gt;&gt; compiler, but on a newer system in which the default g++ headers are
&gt;&gt; incompatible with Intel. Thus the C and Fortran compilers function
&gt;&gt; normally but the Intel C++ compiler fails to build even a simple &quot;hello
&gt;&gt; world&quot; code.
&gt;&gt; 
&gt;&gt; Is there a way to build OMPI without a C++ compiler?  I tried using the
&gt;&gt; --disable-mpi-cxx and --disable-mpi-cxx-seek flags but these are just for
&gt;&gt; the resulting bindings. The configure step still continues to search for
&gt;&gt; a working C++ compiler.
&gt;&gt; 
&gt;&gt; Yes, I know I can upgrade the Intel compiler but we don't have that as an
&gt;&gt; option in this case.
&gt; 
&gt; Unfortunately, you're a bit out of luck.  Open MPI 1.4.x requires C++ even
&gt; if you're not building the C++ bindings.  This is not true of 1.5.x and
&gt; later.
&gt; 
&gt; If you don't need the C++ bindings, I would build Open MPI with GNU C and
&gt; C++ and Intel Fortran.  After building, edit
&gt; &lt;PREFIX&gt;/share/openmpi/mpicc-wrapper-data.txt to change the compiler=gcc
&gt; line to compiler=&lt;intel C compiler&gt;.  There's not going to be much
&gt; performance difference between the two compilers for Open MPI itself.  GNU
&gt; C and Intel C are link compatible, so that should work out for you and the
&gt; users will never be the wiser.
&gt; 
&gt; Brian
&gt; 
&gt; -- 
&gt;  Brian W. Barrett
&gt;  Dept. 1423: Scalable System Software
&gt;  Sandia National Laboratories
&gt; 
&gt; 
&gt; 
&gt; 
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
<li><strong>Next message:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18809.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18808.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18811.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Reply:</strong> <a href="18814.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
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
