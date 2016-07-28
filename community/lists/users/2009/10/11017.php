<?
$subject_val = "Re: [OMPI users] Fortran Library Problem using openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 09:08:25 2009" -->
<!-- isoreceived="20091030130825" -->
<!-- sent="Fri, 30 Oct 2009 14:07:30 +0100" -->
<!-- isosent="20091030130730" -->
<!-- name="Georg A. Reichstein" -->
<!-- email="reichstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran Library Problem using openMPI" -->
<!-- id="BDED383B3A99438AB3BD552F6217F4FD_at_ila.unistuttgart.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AEADAD1.3040507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran Library Problem using openMPI<br>
<strong>From:</strong> Georg A. Reichstein (<em>reichstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 09:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>In reply to:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is he configure line I used:
<br>
<p>./configure OMPI_F77=/opt/intel/Compiler/11.1/056/bin/ia32/ifort
<br>
--with-wrapper-fflags='-compiler -03 -ip-pad -xW -w -02'
<br>
OMPI_FFLAGS='-compiler -03 
<br>
-ip -pad -xW -w -02'
<br>
<p>The specifications were included on the basis that they are used in the
<br>
compile command I received.
<br>
<p>I am using the Intel compiler 11.1 ia32 (as can be seen in the path to ifort
<br>
above)
<br>
<p>When I do file on libmpi_f77 I get the following result:
<br>
<p># file libmpi_f77.so
<br>
libmpi_f77.so: symbolic link to `libmpi_f77.so.0.0.0'
<br>
# file libmpi_f90.so.0.0.0
<br>
libmpi_f77.so.0.0.0: ELF 64-bit LSB shared object, x86-64, version 1 (SYSV),
<br>
dynamically linked, not stripped
<br>
<p>I installed my Open MPI build in the defaut directory, being /usr/local/bin
<br>
- the libraries are in /usr/local/lib.
<br>
<p>~G.
<br>
<p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] Im
<br>
Auftrag von Terry Dontje
<br>
Gesendet: Freitag, 30. Oktober 2009 13:24
<br>
An: users_at_[hidden]
<br>
Betreff: Re: [OMPI users] Fortran Library Problem using openMPI
<br>
<p>A copy of the configure line for Open MPI would be helpful.  Which Intel 
<br>
compiler are you using, version and bitness.   Can you do file on 
<br>
libmpi_f77.so?  Also, are you sure that /usr/local/lib is where you 
<br>
installed you Open MPI build and that isn't something latent?
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Date: Fri, 30 Oct 2009 12:45:07 +0100
</span><br>
<span class="quotelev1">&gt; From: &quot;Georg A. Reichstein&quot; &lt;reichstein_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Fortran Library Problem using openMPI
</span><br>
<span class="quotelev1">&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;D49F4D3BCDB3460AA6F2C204044FD298_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I?m trying to compile a Fortran file. I did not code it myself and am not
</span><br>
<span class="quotelev1">&gt; familiar with it?s detailed workings ? I?m interested in the program it
</span><br>
will
<br>
<span class="quotelev1">&gt; result in after compiling. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Along with the file I also received a command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My OS is openSuse 11.1. As I need openMPI and the Intel compiler is
</span><br>
<span class="quotelev1">&gt; recommended I downloaded both and installed them. I ? hopefully ?
</span><br>
configured
<br>
<span class="quotelev1">&gt; openMPI in the right way. When I run the command I get the following
</span><br>
result
<br>
<span class="quotelev1">&gt; (&lt;file&gt;.f is the name of the Fortran code that I got):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpif77 -O3 -ip -pad -xW -o &lt;file&gt; &lt;file&gt;.f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ld: skipping incompatible /usr/local/lib/libmpi_f77.so when searching for
</span><br>
<span class="quotelev1">&gt; -lmpi_f77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ld: skipping incompatible /usr/local/lib/libmpi_f77.so when searching for
</span><br>
<span class="quotelev1">&gt; -lmpi_f77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ld: cannot find -lmpi_f77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously there is an issue with the library lmpi_f77. The file
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libmpi_f77.so exists ? I just do not know how to check it
</span><br>
and
<br>
<span class="quotelev1">&gt; find out why it is labelled ?incompatible?. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached all logs from ./configure, make all and make install as
</span><br>
<span class="quotelev1">&gt; mentioned on the openMPI website. They are compressed in a single folder. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I very much appreciate your help! Please feel free to contact me about
</span><br>
<span class="quotelev1">&gt; further details where needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Georg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried to find help in a few forums on the net ? but without
</span><br>
success.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>In reply to:</strong> <a href="11016.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11018.php">Terry Dontje: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
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
