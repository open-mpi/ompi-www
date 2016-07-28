<?
$subject_val = "Re: [OMPI users] Problems with openmpi-1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 00:37:20 2011" -->
<!-- isoreceived="20110321043720" -->
<!-- sent="Sun, 20 Mar 2011 21:36:53 -0700" -->
<!-- isosent="20110321043653" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with openmpi-1.4.3" -->
<!-- id="AANLkTimHNtq+SDZ5nybkDsePBz1un52bTuUm3CLHCAoL_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 00:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if your alias got mapped when mpicc is called.  Try adding
<br>
/usr/lib to LD_LIBRARY_PATH?
<br>
<p>On Sun, Mar 20, 2011 at 7:43 PM, Amos Leffler &lt;amosleffler_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15918/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15919.php">Gustavo Correa: "Re: [OMPI users] Problems with openmpi-1.4.3"</a>
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
