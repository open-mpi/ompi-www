<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 16:27:58 2007" -->
<!-- isoreceived="20070605202758" -->
<!-- sent="Tue, 5 Jun 2007 16:27:30 -0400" -->
<!-- isosent="20070605202730" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="7955DEAC-B1FC-4246-BFC1-21EF0F991D7C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070605202225.GD30567_at_dancer.ca.sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 16:27:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3378.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2007, at 4:22 PM, Ben Allan wrote:
<br>
<p><span class="quotelev1">&gt; What you really want, after configure has confirmed openmpi with the
</span><br>
<span class="quotelev1">&gt; macro check, is to extract the libraries listed in the output of
</span><br>
<span class="quotelev1">&gt; mpif90 -v test.f
</span><br>
<span class="quotelev1">&gt; that are needed.
</span><br>
<span class="quotelev1">&gt; Ideally someone could update ompi_config to output the link flags  
</span><br>
<span class="quotelev1">&gt; for 3 cases:
</span><br>
<span class="quotelev1">&gt; C++ linking without using mpicxx
</span><br>
<span class="quotelev1">&gt; F90 linking without using mpif90
</span><br>
<span class="quotelev1">&gt; F90 linking without f90
</span><br>
<span class="quotelev1">&gt; but that's a nontrivial bit of work.
</span><br>
<p>Or you could run
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiCC --showme:link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpif90 --showme:link
<br>
<p>The objection to that was that --showme is OMPI-specific.  But then  
<br>
again, so is running ompi_info.
<br>
<p>Using the OPEN_MPI #define is probably the safest bet to identify the  
<br>
MPI as Open MPI, which then opens the door to using mpi&lt;compiler&gt; -- 
<br>
showme to find the proper linker flags.  I would *NOT* recommend hard- 
<br>
coding specific flags just because you know that you're linking  
<br>
against Open MPI (because we can/have changed the flags behind the  
<br>
scenes).
<br>
<p><span class="quotelev1">&gt; The fortran lib extraction process can be rather hairy if done  
</span><br>
<span class="quotelev1">&gt; portably-- the
</span><br>
<span class="quotelev1">&gt; babel team at llnl has largely solved it in
</span><br>
<span class="quotelev1">&gt; babel-$VERSION/runtime/m4/llnl_confirm_babel_f90_support.m4
</span><br>
<span class="quotelev1">&gt; and related files obtainable from
</span><br>
<span class="quotelev1">&gt; <a href="http://www.llnl.gov/CASC/components/docs/babel-1.1.0.tar.gz">http://www.llnl.gov/CASC/components/docs/babel-1.1.0.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3375.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3378.php">Ben Allan: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
