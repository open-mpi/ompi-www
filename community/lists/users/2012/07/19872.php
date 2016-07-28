<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 13:46:54 2012" -->
<!-- isoreceived="20120730174654" -->
<!-- sent="Mon, 30 Jul 2012 13:46:50 -0400" -->
<!-- isosent="20120730174650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="510F68D0-0704-403E-83D2-DF70C0651200_at_cisco.com" -->
<!-- charset="iso-8859-2" -->
<!-- inreplyto="CAGAQqqNtDvUVVSoSTQZbtOSoqdiOUMfcO+8f6n9fMr6oZvw4KQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-07-30 13:46:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19873.php">Joen Chen: "[OMPI users]  infiniband with MPI"</a>
<li><strong>Previous message:</strong> <a href="19871.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19871.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19875.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19875.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2012, at 12:48 PM, Pawe&#179; Jaromin wrote:
<br>
<p><span class="quotelev1">&gt; make all
</span><br>
<span class="quotelev1">&gt; Building file: ../src/snd_0.1.c
</span><br>
<span class="quotelev1">&gt; Invoking: GCC C Compiler
</span><br>
<span class="quotelev1">&gt; mpicc -I/usr/include/mpi -O0 -g3 -Wall -c -fmessage-length=0 -MMD -MP
</span><br>
<span class="quotelev1">&gt; -MF&quot;src/snd_0.1.d&quot; -MT&quot;src/snd_0.1.d&quot; -o &quot;src/snd_0.1.o&quot;
</span><br>
<span class="quotelev1">&gt; &quot;../src/snd_0.1.c&quot;
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:24: warning: return type defaults to 'int'
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:45: warning: unused variable 'outfile'
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:42: warning: unused variable 'FILE_OUT'
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:41: warning: unused variable 'FILE_NAME'
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:40: warning: unused variable 'AF_setup'
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:38: warning: unused variable 'snd_buffor'
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:37: warning: unused variable 'i'
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c: In function 'print_usage':
</span><br>
<span class="quotelev1">&gt; ../src/snd_0.1.c:29: warning: control reaches end of non-void function
</span><br>
<span class="quotelev1">&gt; Finished building: ../src/snd_0.1.c
</span><br>
<p>You might want to fix these warnings.  The first one and the last one seem like they could cause nondeterminism.
<br>
<p>Also, you shouldn't be adding -I/usr/include/mpi.  mpicc will add the right -I option for you (e.g., do you know for sure that your MPI header files are in /usr/include/mpi?).  It's useless at best, and harmful at worst (E.g., if some other MPI implementation is installed into /usr/include/mpi).
<br>
<p><span class="quotelev1">&gt; no MPI -program which was based on
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **** Build of configuration Debug for project snd_test ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make all
</span><br>
<span class="quotelev1">&gt; Building file: ../main.c
</span><br>
<span class="quotelev1">&gt; Invoking: GCC C Compiler
</span><br>
<span class="quotelev1">&gt; gcc -O0 -g3 -Wall -c -fmessage-length=0 -MMD -MP -MF&quot;main.d&quot;
</span><br>
<span class="quotelev1">&gt; -MT&quot;main.d&quot; -o &quot;main.o&quot; &quot;../main.c&quot;
</span><br>
<span class="quotelev1">&gt; Finished building: ../main.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building target: snd_test
</span><br>
<span class="quotelev1">&gt; Invoking: GCC C Linker
</span><br>
<span class="quotelev1">&gt; gcc  -o &quot;snd_test&quot;  ./main.o   -lsndfile
</span><br>
<span class="quotelev1">&gt; Finished building target: snd_test
</span><br>
<p>I notice that you're not including -Wall and a bunch of other compiler flags in the non-MPI install.
<br>
<p>I also notice that you're not compiling the same .c files at all.
<br>
<p>So if I'm understanding this thread right -- and I may well not be -- it seems like you're saying:
<br>
<p>- when I use gcc to compile main.c, the program runs file
<br>
- when I used mpicc to compile ../src/snd_0.1.c, the program fails
<br>
<p>If that's the case, your comparing apples to oranges here.
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
<li><strong>Next message:</strong> <a href="19873.php">Joen Chen: "[OMPI users]  infiniband with MPI"</a>
<li><strong>Previous message:</strong> <a href="19871.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19871.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19875.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19875.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
