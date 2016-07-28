<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 07:30:54 2012" -->
<!-- isoreceived="20120731113054" -->
<!-- sent="Tue, 31 Jul 2012 07:30:49 -0400" -->
<!-- isosent="20120731113049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="EACA40A7-E1FD-42C4-8572-E07C29DE1255_at_cisco.com" -->
<!-- charset="iso-8859-2" -->
<!-- inreplyto="CAGAQqqPTJS3kRVEdNkdenqVSJa3J62FciJytFFE+tV_NwZre9g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sndlib problem by mpicc compiler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 07:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19877.php">Jeff Squyres: "Re: [OMPI users] infiniband with MPI"</a>
<li><strong>Previous message:</strong> <a href="19875.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19875.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2012, at 4:26 AM, Pawe&#179; Jaromin wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, in the code is big mes, but I`am sure it not effects my
</span><br>
<span class="quotelev1">&gt; problem. - I tried another ways to solve the problem.
</span><br>
<p>I can pretty guarantee you that these two issues will cause you problems.  You need to fix them.
<br>
<p>Specifically: it seems like you're focusing on the one symptom that you think is the problem.  But there seem to be other symptoms that you don't fully grok yet (e.g., how do you know *for absolutely sure* that problems leading from those two warnings aren't leading to silent memory corruption that ends up causing other problems later?), and they might *all* be contributing to the overall problem.
<br>
<p>I don't know your code, and I don't know how it's structured.  But if I were you, I would fix those two problems.  And I'd fix any other warnings that may be leading to non-deterministic behavior.
<br>
<p><span class="quotelev2">&gt;&gt; Also, you shouldn't be adding -I/usr/include/mpi.  mpicc will add the right -I option for you (e.g., do you know for sure that your MPI header files are in /usr/include/mpi?).  It's useless at best, and harmful at worst (E.g., if some other MPI implementation is installed into /usr/include/mpi).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know why, but in Eclipse I had to add option -l. Was not
</span><br>
<span class="quotelev1">&gt; enought  #include mpi/mpi.h - problem &quot;undefined references&quot; in linker
</span><br>
<span class="quotelev1">&gt; :(.
</span><br>
<p>I cited -I (upper case i, as in &quot;include&quot;), not -l (lower case l, as in &quot;library&quot;).
<br>
<p>You might need to understand your build system a bit more to solve this issue.  I do not use Eclipse, so I'm afraid I have no advice to offer here.
<br>
<p>All I'm saying is that mpicc adds all the -I, -L, and -l flags that you need.  You do not need to add any more.  *Usually* adding such extra flags is harmless, but sometimes they can actually be harmful in unexpected ways.  You should figure out and fix this issue.
<br>
<p><span class="quotelev1">&gt; Because I need to procesing  wav files, I wanted load it into array,
</span><br>
<span class="quotelev1">&gt; then by MPI_Scater send   to nodes. I haveI found a code that does
</span><br>
<span class="quotelev1">&gt; this, and then i try use with MPI (sndfile lib). &quot;main&quot; in &quot;snd_test&quot;
</span><br>
<span class="quotelev1">&gt; is exactly this code, witch copmpile and runs without problems. So,
</span><br>
<span class="quotelev1">&gt; after that I copied it into MPI program to master node &quot;rank == 0&quot;. I
</span><br>
<span class="quotelev1">&gt; expected run the same way like in no MPI program. It means, that I
</span><br>
<span class="quotelev1">&gt; compare normal code with the same code in MPI runs by node 0.
</span><br>
<p>I'm afraid I still don't understand what you're saying, and can't reconcile that with the code and compiler snipits you have sent so far (e.g., you said above that the MPI code runs without problems, but before you said that the MPI code had problems -- which is it?). :-(
<br>
<p>-----
<br>
<p>FWIW, I don't think that the use of libsndfile is the issue.  It's a symptom.  You have some other problem that is causing the real issue.
<br>
<p>In your prior mail, you show compiling one program (snd_0.1.c) with mpicc and a specific set of compiler / linker flags.  You say that this program does not work when you run it.
<br>
<p>You also showed compiling a different program (main.c) with gcc and what looks to be the same specific set of compiler flags, but without -laudiofile.  You say that this program works.
<br>
<p>The fact that one works and the other doesn't is likely due to the fact that you have a bug in the one that doesn't work.  If you don't understand the MPI-based code, then that might well be the issue -- it may be buggy and you don't yet grok why.  
<br>
<p>A simple test: compile your non-MPI program with mpicc.  You'll most likely see that it works fine.
<br>
<p>Remember: mpicc is just a &quot;wrapper&quot; compiler -- it is not a compiler in itself.  All it does is add some extra command line options (e.g., -I, -L, and -l options) and invoke the underlying gcc.  Hence, mpicc is likely not your issue.  A bug (or set of bugs) in your MPI-based code is likely the issue.  My best advice to you is to use normal debugging techniques to find this(these) bug(s).
<br>
<p>Good luck!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19877.php">Jeff Squyres: "Re: [OMPI users] infiniband with MPI"</a>
<li><strong>Previous message:</strong> <a href="19875.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19875.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
