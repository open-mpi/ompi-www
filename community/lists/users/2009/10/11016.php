<?
$subject_val = "Re: [OMPI users] Fortran Library Problem using openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 08:24:55 2009" -->
<!-- isoreceived="20091030122455" -->
<!-- sent="Fri, 30 Oct 2009 08:23:45 -0400" -->
<!-- isosent="20091030122345" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran Library Problem using openMPI" -->
<!-- id="4AEADAD1.3040507_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.2279.1256903085.7252.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 08:23:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11015.php">Georg A. Reichstein: "[OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="11015.php">Georg A. Reichstein: "[OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Reply:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A copy of the configure line for Open MPI would be helpful.  Which Intel 
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
<span class="quotelev1">&gt; familiar with it?s detailed workings ? I?m interested in the program it will
</span><br>
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
<span class="quotelev1">&gt; recommended I downloaded both and installed them. I ? hopefully ? configured
</span><br>
<span class="quotelev1">&gt; openMPI in the right way. When I run the command I get the following result
</span><br>
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
<span class="quotelev1">&gt; /usr/local/lib/libmpi_f77.so exists ? I just do not know how to check it and
</span><br>
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
<span class="quotelev1">&gt; I also tried to find help in a few forums on the net ? but without success.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Previous message:</strong> <a href="11015.php">Georg A. Reichstein: "[OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="11015.php">Georg A. Reichstein: "[OMPI users] Fortran Library Problem using openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
<li><strong>Reply:</strong> <a href="11017.php">Georg A. Reichstein: "Re: [OMPI users] Fortran Library Problem using openMPI"</a>
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
