<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 14:36:35 2012" -->
<!-- isoreceived="20120320183635" -->
<!-- sent="Tue, 20 Mar 2012 18:35:48 +0000" -->
<!-- isosent="20120320183548" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?" -->
<!-- id="CB8E45C7.B501%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DAEF8630-2778-4972-9000-E1B183F9522D_at_lanl.gov" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 14:35:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18815.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18815.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18814.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David -
<br>
<p>No problem.  Generally, you can get away with that trick whenever you're
<br>
compiling shared libraries and using the system compiler.  The biggest
<br>
advantage is that the chance of the code being mis-compiled goes down
<br>
significantly when using the system compiler.  The kernel is a good stress
<br>
test that all the atomics got implemented properly :).
<br>
<p>Brian
<br>
<p>On 3/20/12 1:24 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;You are right, Brian. I failed to build from a fresh untar, so I had some
</span><br>
<span class="quotelev1">&gt;leftover intel-compiled bits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Your suggestion seems to work so I'll pass it along to the user to try
</span><br>
<span class="quotelev1">&gt;out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-david
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;David Gunter
</span><br>
<span class="quotelev1">&gt;HPC-3: Infrastructure Team
</span><br>
<span class="quotelev1">&gt;Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mar 20, 2012, at 9:52 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That doesn't make a whole lot of sense; what compile / link line is
</span><br>
<span class="quotelev2">&gt;&gt; resulting in that error message?  The error message is saying that
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so depends on an Intel built-in function, but since you built
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so with gcc, that shouldn't happen.  Are you sure that libmpi.so
</span><br>
<span class="quotelev2">&gt;&gt; wasn't build against the Intel compilers?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/20/12 11:35 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wish it were that easy.  When I go that route, I get error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like the following when trying to compile the parallel code with Intel:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi.so:  undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and other messages for every single Intel-implemented standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;C-function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -david
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David Gunter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC-3: Infrastructure Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 20, 2012, at 8:18 AM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/20/12 10:06 AM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I need to build ompi-1.4.3 (or the newer 1.4.5) with an older Intel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 10.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compiler, but on a newer system in which the default g++ headers are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; incompatible with Intel. Thus the C and Fortran compilers function
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; normally but the Intel C++ compiler fails to build even a simple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&quot;hello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; world&quot; code.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to build OMPI without a C++ compiler?  I tried using
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --disable-mpi-cxx and --disable-mpi-cxx-seek flags but these are just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the resulting bindings. The configure step still continues to search
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a working C++ compiler.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yes, I know I can upgrade the Intel compiler but we don't have that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; option in this case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, you're a bit out of luck.  Open MPI 1.4.x requires C++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; even
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if you're not building the C++ bindings.  This is not true of 1.5.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; later.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you don't need the C++ bindings, I would build Open MPI with GNU C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++ and Intel Fortran.  After building, edit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;PREFIX&gt;/share/openmpi/mpicc-wrapper-data.txt to change the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;compiler=gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line to compiler=&lt;intel C compiler&gt;.  There's not going to be much
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance difference between the two compilers for Open MPI itself.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GNU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C and Intel C are link compatible, so that should work out for you and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users will never be the wiser.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18817.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18815.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18815.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18814.php">Tim Prince: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
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
