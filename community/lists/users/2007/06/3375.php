<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 16:22:43 2007" -->
<!-- isoreceived="20070605202243" -->
<!-- sent="Tue, 5 Jun 2007 13:22:25 -0700" -->
<!-- isosent="20070605202225" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="20070605202225.GD30567_at_dancer.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 16:22:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What you really want, after configure has confirmed openmpi with the
<br>
macro check, is to extract the libraries listed in the output of
<br>
mpif90 -v test.f 
<br>
that are needed.  
<br>
Ideally someone could update ompi_config to output the link flags for 3 cases:
<br>
C++ linking without using mpicxx
<br>
F90 linking without using mpif90
<br>
F90 linking without f90
<br>
but that's a nontrivial bit of work.
<br>
<p>The fortran lib extraction process can be rather hairy if done portably-- the
<br>
babel team at llnl has largely solved it in
<br>
babel-$VERSION/runtime/m4/llnl_confirm_babel_f90_support.m4
<br>
and related files obtainable from
<br>
<a href="http://www.llnl.gov/CASC/components/docs/babel-1.1.0.tar.gz">http://www.llnl.gov/CASC/components/docs/babel-1.1.0.tar.gz</a>
<br>
<p>Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3374.php">Brian Barrett: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3369.php">Lie-Quan Lee: "[OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
