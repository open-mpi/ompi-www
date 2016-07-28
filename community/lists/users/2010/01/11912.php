<?
$subject_val = "Re: [OMPI users] mpirun links wrong library with BLACS tester";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 12:50:16 2010" -->
<!-- isoreceived="20100128175016" -->
<!-- sent="Thu, 28 Jan 2010 18:50:09 +0100" -->
<!-- isosent="20100128175009" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun links wrong library with BLACS tester" -->
<!-- id="2B25224F-731F-434F-9B2D-68466D8E4244_at_gmx.ch" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA170566C4_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun links wrong library with BLACS tester<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 12:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>In reply to:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Reply:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 28-gen-10, at 12:35, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; What was blacs compiled against, lam or ompi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is your LD_LIBRARY_PATH set to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you ensuring to use ompi's mpirun (vs, for example, lam's mpirun)
</span><br>
<span class="quotelev1">&gt;
</span><br>
yes everything was ok, I had tried everything I could think of, rpath,  
<br>
--prefix,... everything and was really getting mad.
<br>
I spent an inordinate amount of time on this, and now that I realized  
<br>
what it was I just want to hit myself.
<br>
On that machine someone just installed all the blacs and scalapack  
<br>
tests in /usr/bin.
<br>
I was doing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 xFbtest_MPI-LINUX-0
<br>
instead of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 ./xFbtest_MPI-LINUX-0
<br>
so mpirun was using the version in /usr/bin but
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 env
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 ldd xFbtest_MPI-LINUX-0
<br>
and so on did return correct things.
<br>
<p>As initially I tested only the blacs and scalapack things it took me a  
<br>
long time to figure out.
<br>
Yesterday before posting I tested the ompi examples and to my surprise  
<br>
they did work.
<br>
Probably those time that it worked I had typed ./ without really  
<br>
realizing it.
<br>
<p>Anyway sorry for the noise, a really stupid mistake that had nothing  
<br>
to do with ompi
<br>
<p>ciao
<br>
Fawzi
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wed Jan 27 21:11:21 2010
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] mpirun links wrong library with BLACS tester
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed openmpi 1.4.1 locally for one user on a cluster,
</span><br>
<span class="quotelev1">&gt; where some other mpi were installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I try to run an executable through mpirun (I am running the BLACS
</span><br>
<span class="quotelev1">&gt; tester) I get
</span><br>
<span class="quotelev1">&gt; xFbtest_MPI-LINUX-0: error while loading shared libraries: liblam.so.
</span><br>
<span class="quotelev1">&gt; 0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if I run the executable it works
</span><br>
<span class="quotelev1">&gt; ldd always shows the correct libraries (even when run in mpirun) and
</span><br>
<span class="quotelev1">&gt; no liblam
</span><br>
<span class="quotelev1">&gt; also the environment looks normal in both cases (both PATH and
</span><br>
<span class="quotelev1">&gt; LD_RUN_PATH have the installation as first path).
</span><br>
<span class="quotelev1">&gt; I did try to  set -rpath to */lib and */lib/openmpi, and generally
</span><br>
<span class="quotelev1">&gt; reduce the environment to a basic one, and use that in all the shells
</span><br>
<span class="quotelev1">&gt; both when compiling and running, but to no avail.
</span><br>
<span class="quotelev1">&gt; The examples in the openmpi directory seem to work without problems.
</span><br>
<span class="quotelev1">&gt; I did manage to run the blacs tester, but in no reproducible way (I
</span><br>
<span class="quotelev1">&gt; really don't know what I did to make it work and it stopped working
</span><br>
<span class="quotelev1">&gt; really fast (the same binary)).
</span><br>
<span class="quotelev1">&gt; The same setup works in another machine (and I think BLACS flags are  
</span><br>
<span class="quotelev1">&gt; ok)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting really crazy, any pointer at what else I could try would
</span><br>
<span class="quotelev1">&gt; be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.1.2 20071124 (Red Hat 4.1.2-42)
</span><br>
<span class="quotelev1">&gt; G95 (GCC 4.0.3 (g95 0.92!) Jun 24 2009)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Fawzi
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11913.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombie mpiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11911.php">Shiqing Fan: "Re: [OMPI users] building OpenMPI on Windows XP 64 using Visual Studio 6 and Compaq Visual Fortran"</a>
<li><strong>In reply to:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Reply:</strong> <a href="11931.php">Jeff Squyres: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
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
