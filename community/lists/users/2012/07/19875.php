<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 31 04:26:16 2012" -->
<!-- isoreceived="20120731082616" -->
<!-- sent="Tue, 31 Jul 2012 10:26:12 +0200" -->
<!-- isosent="20120731082612" -->
<!-- name="Pawe&#179; Jaromin" -->
<!-- email="jaromin.pawel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="CAGAQqqPTJS3kRVEdNkdenqVSJa3J62FciJytFFE+tV_NwZre9g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="510F68D0-0704-403E-83D2-DF70C0651200_at_cisco.com" -->
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
<strong>From:</strong> Pawe&#179; Jaromin (<em>jaromin.pawel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-31 04:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19874.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2012/7/30 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Jul 30, 2012, at 12:48 PM, Pawe&#179; Jaromin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make all
</span><br>
<span class="quotelev2">&gt;&gt; Building file: ../src/snd_0.1.c
</span><br>
<span class="quotelev2">&gt;&gt; Invoking: GCC C Compiler
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -I/usr/include/mpi -O0 -g3 -Wall -c -fmessage-length=0 -MMD -MP
</span><br>
<span class="quotelev2">&gt;&gt; -MF&quot;src/snd_0.1.d&quot; -MT&quot;src/snd_0.1.d&quot; -o &quot;src/snd_0.1.o&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../src/snd_0.1.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:24: warning: return type defaults to 'int'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c: In function 'main':
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:45: warning: unused variable 'outfile'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:42: warning: unused variable 'FILE_OUT'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:41: warning: unused variable 'FILE_NAME'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:40: warning: unused variable 'AF_setup'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:38: warning: unused variable 'snd_buffor'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:37: warning: unused variable 'i'
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c: In function 'print_usage':
</span><br>
<span class="quotelev2">&gt;&gt; ../src/snd_0.1.c:29: warning: control reaches end of non-void function
</span><br>
<span class="quotelev2">&gt;&gt; Finished building: ../src/snd_0.1.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to fix these warnings.  The first one and the last one seem like they could cause nondeterminism.
</span><br>
<p>Sorry, in the code is big mes, but I`am sure it not effects my
<br>
problem. - I tried another ways to solve the problem.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, you shouldn't be adding -I/usr/include/mpi.  mpicc will add the right -I option for you (e.g., do you know for sure that your MPI header files are in /usr/include/mpi?).  It's useless at best, and harmful at worst (E.g., if some other MPI implementation is installed into /usr/include/mpi).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know why, but in Eclipse I had to add option -l. Was not
<br>
enought  #include mpi/mpi.h - problem &quot;undefined references&quot; in linker
<br>
:(.
<br>
<p><span class="quotelev2">&gt;&gt; no MPI -program which was based on
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **** Build of configuration Debug for project snd_test ****
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make all
</span><br>
<span class="quotelev2">&gt;&gt; Building file: ../main.c
</span><br>
<span class="quotelev2">&gt;&gt; Invoking: GCC C Compiler
</span><br>
<span class="quotelev2">&gt;&gt; gcc -O0 -g3 -Wall -c -fmessage-length=0 -MMD -MP -MF&quot;main.d&quot;
</span><br>
<span class="quotelev2">&gt;&gt; -MT&quot;main.d&quot; -o &quot;main.o&quot; &quot;../main.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Finished building: ../main.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building target: snd_test
</span><br>
<span class="quotelev2">&gt;&gt; Invoking: GCC C Linker
</span><br>
<span class="quotelev2">&gt;&gt; gcc  -o &quot;snd_test&quot;  ./main.o   -lsndfile
</span><br>
<span class="quotelev2">&gt;&gt; Finished building target: snd_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I notice that you're not including -Wall and a bunch of other compiler flags in the non-MPI install.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also notice that you're not compiling the same .c files at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if I'm understanding this thread right -- and I may well not be -- it seems like you're saying:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - when I use gcc to compile main.c, the program runs file
</span><br>
<span class="quotelev1">&gt; - when I used mpicc to compile ../src/snd_0.1.c, the program fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If that's the case, your comparing apples to oranges here.
</span><br>
<p>Not exactly, maybe I show You my thinking:
<br>
<p>Because I need to procesing  wav files, I wanted load it into array,
<br>
then by MPI_Scater send   to nodes. I haveI found a code that does
<br>
this, and then i try use with MPI (sndfile lib). &quot;main&quot; in &quot;snd_test&quot;
<br>
is exactly this code, witch copmpile and runs without problems. So,
<br>
after that I copied it into MPI program to master node &quot;rank == 0&quot;. I
<br>
expected run the same way like in no MPI program. It means, that I
<br>
compare normal code with the same code in MPI runs by node 0.
<br>
<p>Jeff, Thank you for your commitment, but I'm afraid about
<br>
misunderstanding. I try clarify the problem as good as I can, but I
<br>
feel that You don't understand me. Maybe my english is not enough good
<br>
:(.I hope, background above, give you bigger view for what I want to
<br>
do. Maybe You have suggestion, how do it or good example how deal with
<br>
it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
------------------
pozdrawiam
Pawe&#179; Jaromin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19874.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19876.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
