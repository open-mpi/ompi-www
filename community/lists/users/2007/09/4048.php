<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 07:49:32 2007" -->
<!-- isoreceived="20070920114932" -->
<!-- sent="Thu, 20 Sep 2007 07:49:29 -0400" -->
<!-- isosent="20070920114929" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue." -->
<!-- id="46F25E49.80209_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="aa2205a30709200436i15c86991qc8e4c00ede799621_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 07:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<li><strong>Previous message:</strong> <a href="4047.php">Bertrand P. S. Russell: "[OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>In reply to:</strong> <a href="4047.php">Bertrand P. S. Russell: "[OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>Reply:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This is because Open MPI is finding gcc for the C compiler and ifort for 
<br>
the Fortran compiler. Please see:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#build-compilers">http://www.open-mpi.org/faq/?category=building#build-compilers</a>
<br>
<p>For how to specify to use the Intel compilers.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>Bertrand P. S. Russell wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to install OpenMPI-1.2.3 in a MacOS-X 10. I installed trial 
</span><br>
<span class="quotelev1">&gt; version ifort C compiler and fortran compiler both 10.0.16 version. When 
</span><br>
<span class="quotelev1">&gt; issue ./configure command my configuration stops with the following 
</span><br>
<span class="quotelev1">&gt; error message. Could nayone tell me how to solve this problem? Many 
</span><br>
<span class="quotelev1">&gt; thanks in advance. I herewith attaching the config.log file and error 
</span><br>
<span class="quotelev1">&gt; message on screen.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Miles to go......... Millions to meet...........
</span><br>
<span class="quotelev1">&gt; Bertrand. P. S. Russell
</span><br>
<span class="quotelev1">&gt; +91 - 98943 98441
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4049.php">Bas van der Vlies: "Re: [OMPI users] Get some errors when try to run hpl"</a>
<li><strong>Previous message:</strong> <a href="4047.php">Bertrand P. S. Russell: "[OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>In reply to:</strong> <a href="4047.php">Bertrand P. S. Russell: "[OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
<li><strong>Reply:</strong> <a href="4050.php">Michael: "Re: [OMPI users] C and Fortran 77 compilers are not link compatible. Can not continue."</a>
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
