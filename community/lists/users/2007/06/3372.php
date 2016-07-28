<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 15:35:01 2007" -->
<!-- isoreceived="20070605193501" -->
<!-- sent="Tue, 5 Jun 2007 12:34:55 -0700" -->
<!-- isosent="20070605193455" -->
<!-- name="Lie-Quan Lee" -->
<!-- email="liequan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="52a1b28a0706051234h73f4074ek375040ddd791aa5a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200706051429.31234.slug_at_aeminium.org" -->
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
<strong>From:</strong> Lie-Quan Lee (<em>liequan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 15:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3370.php">Nuno Sucena Almeida: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this is neat but it will need to identify whether the MPI implementation is
<br>
openmpi. -- Not all the implementations accept --showme flag.
<br>
<p>--Rich
<br>
<p>On 6/5/07, Nuno Sucena Almeida &lt;slug_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;         there's an autoconf macro you can find at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://autoconf-archive.cryp.to/acx_mpi.html">http://autoconf-archive.cryp.to/acx_mpi.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         it might be useful to you. I prefer to use it just to test the
</span><br>
<span class="quotelev1">&gt; existence of
</span><br>
<span class="quotelev1">&gt; MPI and then inside configure.ac something like (ugly):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt;         MPI_CXXLIBS=`mpicxx --showme:link`
</span><br>
<span class="quotelev1">&gt;         MPI_CXXFLAGS=`mpicxx --showme:compile`
</span><br>
<span class="quotelev1">&gt;         AC_SUBST(MPI_CXXLIBS)
</span><br>
<span class="quotelev1">&gt;         AC_SUBST(MPI_CXXFLAGS)
</span><br>
<span class="quotelev1">&gt; (...)
</span><br>
<span class="quotelev1">&gt;         This is for C++, mind you, and then use these variables inside the
</span><br>
<span class="quotelev1">&gt; Makefile.am's which works fine for me, both for building libraries and
</span><br>
<span class="quotelev1">&gt; programs. Of course if mpicxx doesn't have the --showme you are out of
</span><br>
<span class="quotelev1">&gt; luck
</span><br>
<span class="quotelev1">&gt; with this approach.
</span><br>
<span class="quotelev1">&gt;         Another alternative would be to just use the macro and then define
</span><br>
<span class="quotelev1">&gt; C/C++
</span><br>
<span class="quotelev1">&gt; compilers to point to the ones found by it, although I could never have it
</span><br>
<span class="quotelev1">&gt; working perfectly when I use it along with libtool.
</span><br>
<span class="quotelev1">&gt;         If anyone has a better alternative, I would be glad to hear it!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                                 Nuno
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday 05 June 2007 13:59, Lie-Quan Lee wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering if anyone has already had a way to identify openmpi in
</span><br>
<span class="quotelev2">&gt; &gt; configure script using autoconf macro. By identifying openmpi in the
</span><br>
<span class="quotelev2">&gt; &gt; configure, I will be able to handle those libraries. Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; <a href="http://aeminium.org/slug/">http://aeminium.org/slug/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best regards,
Rich
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3372/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3373.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3370.php">Nuno Sucena Almeida: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3371.php">Anthony Chan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
