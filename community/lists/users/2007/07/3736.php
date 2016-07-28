<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 10:06:36 2007" -->
<!-- isoreceived="20070723140636" -->
<!-- sent="Mon, 23 Jul 2007 16:05:37 +0200" -->
<!-- isosent="20070723140537" -->
<!-- name="Andrea" -->
<!-- email="andrea_iob_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="46A4B5B1.8040304_at_yahoo.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC414_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Andrea (<em>andrea_iob_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 10:05:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you be a bit more specific than &quot;it dies&quot;? Are you talking about
</span><br>
<span class="quotelev2">&gt; &gt; mpif90/mpif77, or your app?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, tuspid me. When executing mpif90 or mpif77 I have a segfault and it
</span><br>
<span class="quotelev1">&gt; doesn't compile. I've tried both with or without input (i.e., giving it
</span><br>
<span class="quotelev1">&gt; something to compile or just executing it expecting to see the normal &quot;no
</span><br>
<span class="quotelev1">&gt; files given&quot; kind of message). The intel suite compiled openmpi without
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<p>Hello,
<br>
<p>I've the same problem: when I try to run any mpi-command (like mpicc, mpirun,
<br>
ompi_info, ...) I recive a &quot;Segmentation Fault&quot;. I've tried both openMPI version
<br>
1.2.3 and version 1.2.4b0, but all I get is:
<br>
<p>$ ompi_info --all
<br>
Segmentation fault
<br>
<p>Some info on my system:
<br>
<p>&nbsp;- GNU/Linux, 2.6.22 Kernel, Slackware 12.0
<br>
&nbsp;- Genuine Intel(R) CPU, T2400  @ 1.83GHz GenuineIntel (Toshiba A-100 Laptop)
<br>
<p>&nbsp;- Intel C Compiler 9.1.047
<br>
&nbsp;- Intel Fortran Compiler 9.1.041
<br>
<p>The configure script options I've used are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/usr CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>If you need more info just tell me.
<br>
<p>Thank you for you attention.
<br>
<p>Andrea
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3735.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3730.php">SLIM H.A.: "[OMPI users] sge qdel fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
