<?
$subject_val = "Re: [OMPI users] mpirun links wrong library with BLACS tester";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 07:55:22 2010" -->
<!-- isoreceived="20100129125522" -->
<!-- sent="Fri, 29 Jan 2010 07:55:16 -0500" -->
<!-- isosent="20100129125516" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun links wrong library with BLACS tester" -->
<!-- id="45F243EF-9088-4D28-9947-CCA8E560D2AF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B25224F-731F-434F-9B2D-68466D8E4244_at_gmx.ch" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 07:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11930.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh!  Sorry about that.  :-(
<br>
<p>We took extra effort in Open MPI to try to obey serialized precedents.  That is, when we're discussing some feature X, we frequently ask ourselves, &quot;What would happen if you tried to do X with no MPI/parallelization involved?&quot;  Meaning: what would happen if you ran this in serial without Open MPI?
<br>
<p>The &quot;foo&quot; vs. &quot;./foo&quot; is a perfect example of this.  If you type an executable name on the command line, the shell searches your PATH for the first match.  It depends on where &quot;.&quot; is in your PATH as to whether it finds /bin/foo or ./foo first (for example).  So we try to obey the same semantics with mpirun -- the difference between &quot;mpirun foo&quot; and &quot;mpirun ./foo&quot; is exactly the same: we obey the ordering of where &quot;foo&quot; is found in the PATH.
<br>
<p>Although I'm glad you figured it out, I'm sorry this caused you extra time.  :-(
<br>
<p><p><p>On Jan 28, 2010, at 12:50 PM, Fawzi Mohamed wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 28-gen-10, at 12:35, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What was blacs compiled against, lam or ompi?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is your LD_LIBRARY_PATH set to?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you ensuring to use ompi's mpirun (vs, for example, lam's mpirun)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; yes everything was ok, I had tried everything I could think of, rpath, 
</span><br>
<span class="quotelev1">&gt; --prefix,... everything and was really getting mad.
</span><br>
<span class="quotelev1">&gt; I spent an inordinate amount of time on this, and now that I realized 
</span><br>
<span class="quotelev1">&gt; what it was I just want to hit myself.
</span><br>
<span class="quotelev1">&gt; On that machine someone just installed all the blacs and scalapack 
</span><br>
<span class="quotelev1">&gt; tests in /usr/bin.
</span><br>
<span class="quotelev1">&gt; I was doing
</span><br>
<span class="quotelev1">&gt;         mpirun -np 8 xFbtest_MPI-LINUX-0
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt;         mpirun -np 8 ./xFbtest_MPI-LINUX-0
</span><br>
<span class="quotelev1">&gt; so mpirun was using the version in /usr/bin but
</span><br>
<span class="quotelev1">&gt;         mpirun -np 1 env
</span><br>
<span class="quotelev1">&gt;         mpirun -np 1 ldd xFbtest_MPI-LINUX-0
</span><br>
<span class="quotelev1">&gt; and so on did return correct things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As initially I tested only the blacs and scalapack things it took me a 
</span><br>
<span class="quotelev1">&gt; long time to figure out.
</span><br>
<span class="quotelev1">&gt; Yesterday before posting I tested the ompi examples and to my surprise 
</span><br>
<span class="quotelev1">&gt; they did work.
</span><br>
<span class="quotelev1">&gt; Probably those time that it worked I had typed ./ without really 
</span><br>
<span class="quotelev1">&gt; realizing it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway sorry for the noise, a really stupid mistake that had nothing 
</span><br>
<span class="quotelev1">&gt; to do with ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ciao
</span><br>
<span class="quotelev1">&gt; Fawzi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -jms
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wed Jan 27 21:11:21 2010
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI users] mpirun links wrong library with BLACS tester
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have installed openmpi 1.4.1 locally for one user on a cluster,
</span><br>
<span class="quotelev2">&gt; &gt; where some other mpi were installed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when I try to run an executable through mpirun (I am running the BLACS
</span><br>
<span class="quotelev2">&gt; &gt; tester) I get
</span><br>
<span class="quotelev2">&gt; &gt; xFbtest_MPI-LINUX-0: error while loading shared libraries: liblam.so.
</span><br>
<span class="quotelev2">&gt; &gt; 0: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if I run the executable it works
</span><br>
<span class="quotelev2">&gt; &gt; ldd always shows the correct libraries (even when run in mpirun) and
</span><br>
<span class="quotelev2">&gt; &gt; no liblam
</span><br>
<span class="quotelev2">&gt; &gt; also the environment looks normal in both cases (both PATH and
</span><br>
<span class="quotelev2">&gt; &gt; LD_RUN_PATH have the installation as first path).
</span><br>
<span class="quotelev2">&gt; &gt; I did try to  set -rpath to */lib and */lib/openmpi, and generally
</span><br>
<span class="quotelev2">&gt; &gt; reduce the environment to a basic one, and use that in all the shells
</span><br>
<span class="quotelev2">&gt; &gt; both when compiling and running, but to no avail.
</span><br>
<span class="quotelev2">&gt; &gt; The examples in the openmpi directory seem to work without problems.
</span><br>
<span class="quotelev2">&gt; &gt; I did manage to run the blacs tester, but in no reproducible way (I
</span><br>
<span class="quotelev2">&gt; &gt; really don't know what I did to make it work and it stopped working
</span><br>
<span class="quotelev2">&gt; &gt; really fast (the same binary)).
</span><br>
<span class="quotelev2">&gt; &gt; The same setup works in another machine (and I think BLACS flags are 
</span><br>
<span class="quotelev2">&gt; &gt; ok)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am getting really crazy, any pointer at what else I could try would
</span><br>
<span class="quotelev2">&gt; &gt; be greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gcc (GCC) 4.1.2 20071124 (Red Hat 4.1.2-42)
</span><br>
<span class="quotelev2">&gt; &gt; G95 (GCC 4.0.3 (g95 0.92!) Jun 24 2009)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; Fawzi
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11932.php">Jeff Squyres: "Re: [OMPI users] Trapping fortran I/O errors leaving zombiempiprocesses"</a>
<li><strong>Previous message:</strong> <a href="11930.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
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
