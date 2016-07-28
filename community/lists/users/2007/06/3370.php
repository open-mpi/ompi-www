<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 14:30:18 2007" -->
<!-- isoreceived="20070605183018" -->
<!-- sent="Tue, 5 Jun 2007 14:29:29 -0400" -->
<!-- isosent="20070605182929" -->
<!-- name="Nuno Sucena Almeida" -->
<!-- email="slug_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="200706051429.31234.slug_at_aeminium.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52a1b28a0706051059g1c1c1bb6xd13142bcf78d9db8_at_mail.gmail.com" -->
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
<strong>From:</strong> Nuno Sucena Almeida (<em>slug_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 14:29:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;there's an autoconf macro you can find at
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://autoconf-archive.cryp.to/acx_mpi.html">http://autoconf-archive.cryp.to/acx_mpi.html</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it might be useful to you. I prefer to use it just to test the existence of 
<br>
MPI and then inside configure.ac something like (ugly):
<br>
<p>(...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_CXXLIBS=`mpicxx --showme:link`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_CXXFLAGS=`mpicxx --showme:compile`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_SUBST(MPI_CXXLIBS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_SUBST(MPI_CXXFLAGS)
<br>
(...)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is for C++, mind you, and then use these variables inside the 
<br>
Makefile.am's which works fine for me, both for building libraries and 
<br>
programs. Of course if mpicxx doesn't have the --showme you are out of luck 
<br>
with this approach.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Another alternative would be to just use the macro and then define C/C++ 
<br>
compilers to point to the ones found by it, although I could never have it 
<br>
working perfectly when I use it along with libtool.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If anyone has a better alternative, I would be glad to hear it!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nuno
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
On Tuesday 05 June 2007 13:59, Lie-Quan Lee wrote:
<br>
<span class="quotelev1">&gt; I am wondering if anyone has already had a way to identify openmpi in
</span><br>
<span class="quotelev1">&gt; configure script using autoconf macro. By identifying openmpi in the
</span><br>
<span class="quotelev1">&gt; configure, I will be able to handle those libraries. Thanks.
</span><br>
<p><pre>
-- 
<a href="http://aeminium.org/slug/">http://aeminium.org/slug/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3372.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
