<?
$subject_val = "Re: [OMPI users] fork in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 12:01:25 2012" -->
<!-- isoreceived="20120830160125" -->
<!-- sent="Thu, 30 Aug 2012 18:01:21 +0200" -->
<!-- isosent="20120830160121" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fork in Fortran" -->
<!-- id="CAGR4S9GufWgQHWGD6uPcYu7+vD5fxDo2pBa1n1SatnJ_T8PN3g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMG+jN=K4hh99KQpFpTTWjG3qFXwd_hCS1t6iXPebg27PjiBWw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fork in Fortran<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 12:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20072.php">Brian Budge: "[OMPI users] valgrind/memory leaks from spawn"</a>
<li><strong>Previous message:</strong> <a href="20070.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Modern Fortran has a feature called ISO_C_BINDING. It essentially
<br>
allows to declare a binding of external function to be used from
<br>
Fortran program. You only need to provide a corresponding interface.
<br>
ISO_C_BINDING module contains C-like extensions in type system, but
<br>
you don't need them, as your function has no arguments :)
<br>
<p>Example:
<br>
<p>program fork_test
<br>
<p>interface
<br>
<p>function fork() bind(C)
<br>
use iso_c_binding
<br>
integer(c_int) :: fork
<br>
end function fork
<br>
<p>end interface
<br>
<p>print *, 'My PID = ', fork()
<br>
<p>end program fork_test
<br>
<p>$ make
<br>
gfortran fork.f90 -o fork
<br>
$ ./fork
<br>
&nbsp;My PID =         4033
<br>
&nbsp;My PID =            0
<br>
<p>For further info, please refer to language standard
<br>
<a href="http://gcc.gnu.org/wiki/GFortranStandards#Fortran_2003">http://gcc.gnu.org/wiki/GFortranStandards#Fortran_2003</a>
<br>
If you have any questions - consider asking the gfortran community,
<br>
they are very friendly.
<br>
<p>Best,
<br>
- D.
<br>
<p>2012/8/30 sudhirs@ &lt;sudhirchem87_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt;  How to use fork(), vfork() type functions in Fortran programming ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanking you in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sudhir Kumar Sahoo
</span><br>
<span class="quotelev1">&gt; Ph.D Scholar
</span><br>
<span class="quotelev1">&gt; Dept. Of Chemistry
</span><br>
<span class="quotelev1">&gt; IIT Kanpur-208016
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20072.php">Brian Budge: "[OMPI users] valgrind/memory leaks from spawn"</a>
<li><strong>Previous message:</strong> <a href="20070.php">Brian Budge: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<li><strong>In reply to:</strong> <a href="20063.php">sudhirs_at_[hidden]: "[OMPI users] fork in Fortran"</a>
<!-- nextthread="start" -->
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
