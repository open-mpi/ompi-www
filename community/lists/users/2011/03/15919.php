<?
$subject_val = "Re: [OMPI users] Problems with openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 02:02:54 2011" -->
<!-- isoreceived="20110321060254" -->
<!-- sent="Mon, 21 Mar 2011 02:02:33 -0400" -->
<!-- isosent="20110321060233" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with openmpi-1.4.3" -->
<!-- id="F86278BD-EE6E-4E69-8871-AE468AD0D76E_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikW5opHPf0YdZQfrDVk24UarKopQNO1Yj4TRX0R_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with openmpi-1.4.3<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 02:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15920.php">Randall Svancara: "[OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Amos
<br>
<p>This form perhaps?
<br>
&nbsp;'export PATH=/opt/openmpi/bin:$PATH' 
<br>
You don't want to wipe off the existing path, just add openmpi to it.
<br>
<p>Also, Intel also has its shared libraries, which may be causing trouble.
<br>
My guess is that you need to set the Intel environment first by
<br>
placing a line more or less like this in your .bashrc/.cshrc file:
<br>
<p>source /path/to/intel/bin/ifortvars.sh  (or ifortvars.csh depending on the shell you use)
<br>
<p>The Intel script will add the Intel bin and lib directories to your environment.
<br>
<p>Then on your .bashrc/.cshrc you pre-pend the OpenMPI bin and lib directories 
<br>
to your PATH and LD_LIBRARY_PATH:
<br>
<p>export PATH=/opt/openmpi/bin:$PATH
<br>
export LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>for bash, or 'setenv PATH /opt/openmpi/bin:$PATH', etc for csh.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Mar 20, 2011, at 10:43 PM, Amos Leffler wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;          I have been having problems getting openmpi-1.4.3 with Linux
</span><br>
<span class="quotelev1">&gt; under SUSE 11.3.  I have put the following entries in .bashrc:
</span><br>
<span class="quotelev1">&gt;                   PATH:                         /opt/openmpi/bin
</span><br>
<span class="quotelev1">&gt;                   LD_LIBRARY_PATH     /opt/openmpi/lib
</span><br>
<span class="quotelev1">&gt;                   alias    ifort='opt/intel/bin/ifort'
</span><br>
<span class="quotelev1">&gt;                  alias   libopen-pal.so.0:=/usr/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; The file appears to run properly under the configure command:
</span><br>
<span class="quotelev1">&gt;                  ./configure   CC=gcc   CXX=g++   F77=ifort
</span><br>
<span class="quotelev1">&gt; F90=ifort      --prefix=/opt/openmpi
</span><br>
<span class="quotelev1">&gt; and using    make all install.  However, running an example such as:
</span><br>
<span class="quotelev1">&gt;                   mpicc hello_c.c -o hello_c it gives the result:
</span><br>
<span class="quotelev1">&gt;                   mpicc: error while loading shared libraries:
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0: cannot open shared object file: No such file or
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt;           At this point I am stumped and any thouughts would be much
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                                       Amos Leffler
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
<li><strong>Next message:</strong> <a href="15920.php">Randall Svancara: "[OMPI users] OpenMPI and Torque"</a>
<li><strong>Previous message:</strong> <a href="15918.php">David Zhang: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
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
