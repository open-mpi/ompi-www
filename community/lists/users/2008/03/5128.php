<?
$subject_val = "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 10:22:23 2008" -->
<!-- isoreceived="20080304152223" -->
<!-- sent="Tue, 4 Mar 2008 10:22:09 -0500" -->
<!-- isosent="20080304152209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3" -->
<!-- id="5E0082E7-8700-4930-A66F-C98B62AC5AF5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="335373.85536.qm_at_web31402.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 10:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5129.php">Doug Reeder: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5127.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>In reply to:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try using FC=gfortran, not F90=gfortran.  That should fix the problem  
<br>
for you.
<br>
<p>FC instead of F90 is unfortunately the GNU Autoconf standard way of  
<br>
specifying the Fortran compiler (beyond Fortran 77).  It's a little  
<br>
confusing, but that's what you need to do.
<br>
<p><p>On Mar 4, 2008, at 10:16 AM, Chase Latta wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working with a few other physics students on my campus to try  
</span><br>
<span class="quotelev1">&gt; to get open-mpi to run on a cluster of 8 imacs all running mac os-x  
</span><br>
<span class="quotelev1">&gt; 10.5.3.  Before I start I will let you know that we are not the most  
</span><br>
<span class="quotelev1">&gt; savvy programmers so any detailed information would be much  
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We ran the default install of open-mpi and everything installed  
</span><br>
<span class="quotelev1">&gt; correctly.  We are able to compile and run c programs using the  
</span><br>
<span class="quotelev1">&gt; mpicc wrappers.  The problem that we are having is that we are  
</span><br>
<span class="quotelev1">&gt; unable to get the fortran wrappers to work.  We are using gfortran  
</span><br>
<span class="quotelev1">&gt; and the compiler works perfectly on its own.  To enable the wrapper  
</span><br>
<span class="quotelev1">&gt; compilers I ran the command ./configure --enable-f77 --enable-f90  
</span><br>
<span class="quotelev1">&gt; F77=gfortran F90=gfortran.  I then ran the make and make install  
</span><br>
<span class="quotelev1">&gt; commands.  Everything appeared to work correctly.  The problem is  
</span><br>
<span class="quotelev1">&gt; that when I try to compile a program with mpif90 I get an error  
</span><br>
<span class="quotelev1">&gt; saying that open-mpi was not built with fortran 90 support (the same  
</span><br>
<span class="quotelev1">&gt; happens with f77).  I have looked everywhere in the faq's and cannot  
</span><br>
<span class="quotelev1">&gt; figure out why this is happening.  The only thing that I can think  
</span><br>
<span class="quotelev1">&gt; is that when I tell the F90 wrapper to use gfortran it tells me that  
</span><br>
<span class="quotelev1">&gt; there are no flags in my compiler to compiler to compile .f and .f90  
</span><br>
<span class="quotelev1">&gt; files; even though I can compile .f and .f90 files with my gfortran  
</span><br>
<span class="quotelev1">&gt; compiler.  Any help would be very much appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Chase
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Never miss a thing. Make Yahoo your homepage.  
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
<li><strong>Next message:</strong> <a href="5129.php">Doug Reeder: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>Previous message:</strong> <a href="5127.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] -prefix option to mpirun."</a>
<li><strong>In reply to:</strong> <a href="5126.php">Chase Latta: "[OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5133.php">Chase Latta: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
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
