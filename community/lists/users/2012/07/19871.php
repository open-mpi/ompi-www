<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 12:48:12 2012" -->
<!-- isoreceived="20120730164812" -->
<!-- sent="Mon, 30 Jul 2012 18:48:08 +0200" -->
<!-- isosent="20120730164808" -->
<!-- name="Pawe&#179; Jaromin" -->
<!-- email="jaromin.pawel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="CAGAQqqNtDvUVVSoSTQZbtOSoqdiOUMfcO+8f6n9fMr6oZvw4KQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="5016864F.4080004_at_oracle.com" -->
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
<strong>Date:</strong> 2012-07-30 12:48:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19870.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19865.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
normal MPI compiling:
<br>
<p>**** Build of configuration Debug for project snd_0.1 ****
<br>
<p>make all
<br>
Building file: ../src/snd_0.1.c
<br>
Invoking: GCC C Compiler
<br>
mpicc -I/usr/include/mpi -O0 -g3 -Wall -c -fmessage-length=0 -MMD -MP
<br>
-MF&quot;src/snd_0.1.d&quot; -MT&quot;src/snd_0.1.d&quot; -o &quot;src/snd_0.1.o&quot;
<br>
&quot;../src/snd_0.1.c&quot;
<br>
../src/snd_0.1.c:24: warning: return type defaults to 'int'
<br>
../src/snd_0.1.c: In function 'main':
<br>
../src/snd_0.1.c:45: warning: unused variable 'outfile'
<br>
../src/snd_0.1.c:42: warning: unused variable 'FILE_OUT'
<br>
../src/snd_0.1.c:41: warning: unused variable 'FILE_NAME'
<br>
../src/snd_0.1.c:40: warning: unused variable 'AF_setup'
<br>
../src/snd_0.1.c:38: warning: unused variable 'snd_buffor'
<br>
../src/snd_0.1.c:37: warning: unused variable 'i'
<br>
../src/snd_0.1.c: In function 'print_usage':
<br>
../src/snd_0.1.c:29: warning: control reaches end of non-void function
<br>
Finished building: ../src/snd_0.1.c
<br>
<p>Building target: snd_0.1
<br>
Invoking: GCC C Linker
<br>
mpicc  -o &quot;snd_0.1&quot;  ./src/snd_0.1.o   -lsndfile -laudiofile
<br>
Finished building target: snd_0.1
<br>
<p><p>**** Build Finished ****
<br>
<p><p>MPI with option --showme:
<br>
<p>**** Build of configuration Debug for project snd_0.1 ****
<br>
<p>make all
<br>
Building file: ../src/snd_0.1.c
<br>
Invoking: GCC C Compiler
<br>
mpicc --showme -I/usr/include/mpi -O0 -g3 -Wall -c -fmessage-length=0
<br>
-MMD -MP -MF&quot;src/snd_0.1.d&quot; -MT&quot;src/snd_0.1.d&quot; -o &quot;src/snd_0.1.o&quot;
<br>
&quot;../src/snd_0.1.c&quot;
<br>
gcc -I/usr/lib/openmpi/include -I/usr/lib/openmpi/include/openmpi
<br>
-pthread -I/usr/include/mpi -O0 -g3 -Wall -c -fmessage-length=0 -MMD
<br>
-MP -MFsrc/snd_0.1.d -MTsrc/snd_0.1.d -o src/snd_0.1.o
<br>
../src/snd_0.1.c
<br>
gcc: ./src/snd_0.1.o: No file or directory
<br>
make: *** [libsnd_0.1] Error 1
<br>
Finished building: ../src/snd_0.1.c
<br>
<p>Building target: libsnd_0.1
<br>
Invoking: GCC C Linker
<br>
mpicc -shared -o &quot;libsnd_0.1&quot;  ./src/snd_0.1.o   -lsndfile
<br>
<p>**** Build Finished ****
<br>
<p><p><p>no MPI -program which was based on
<br>
<p>**** Build of configuration Debug for project snd_test ****
<br>
<p>make all
<br>
Building file: ../main.c
<br>
Invoking: GCC C Compiler
<br>
gcc -O0 -g3 -Wall -c -fmessage-length=0 -MMD -MP -MF&quot;main.d&quot;
<br>
-MT&quot;main.d&quot; -o &quot;main.o&quot; &quot;../main.c&quot;
<br>
Finished building: ../main.c
<br>
<p>Building target: snd_test
<br>
Invoking: GCC C Linker
<br>
gcc  -o &quot;snd_test&quot;  ./main.o   -lsndfile
<br>
Finished building target: snd_test
<br>
<p><p>**** Build Finished ****
<br>
<p><p>2012/7/30 TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Please show me how you are compiling the program under gcc and mpicc.  Plus
</span><br>
<span class="quotelev1">&gt; do a &quot;mpicc --showme&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/30/2012 8:33 AM, Pawe&#179; Jaromin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This situation is also strange for me, I spend 2 days to find a bug :(.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately I am not  a professional  C/C++ programmer, but I have
</span><br>
<span class="quotelev1">&gt; to make this program. Please have a look in a picture from link below,
</span><br>
<span class="quotelev1">&gt; maybe it will be more clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://vipjg.nazwa.pl/sndfile_error.png">http://vipjg.nazwa.pl/sndfile_error.png</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/7/30 TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/30/2012 6:11 AM, Pawe&#179; Jaromin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for fast answer, but the problem looks a little different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, I use this code only for master node (rank 0), because only
</span><br>
<span class="quotelev1">&gt; this node has an access to file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As You can see i use &quot;if&quot; clause to check sndFile for NULL:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (sndFile == NULL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and it returns not NULL value, so the code can run forward.
</span><br>
<span class="quotelev1">&gt; I have found the problem during check array:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 			   long numFrames = sf_readf_float(sndFile, snd_buffor, sfinfo.frames);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 			   // Check correct number of samples loaded
</span><br>
<span class="quotelev1">&gt; 			   if (numFrames != sfinfo.frames) {
</span><br>
<span class="quotelev1">&gt; 			      fprintf(stderr, &quot;Did not read enough frames for source\n&quot;);
</span><br>
<span class="quotelev1">&gt; 			      sf_close(sndFile);
</span><br>
<span class="quotelev1">&gt; 			      free(snd_buffor);
</span><br>
<span class="quotelev1">&gt; 			  	  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 			      return 1;
</span><br>
<span class="quotelev1">&gt; 			   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, after that I went to debuger to check variables (I use Eclipse PTP
</span><br>
<span class="quotelev1">&gt; and sdm enviroment), then after inicjalization variable &quot;sndFile&quot; has
</span><br>
<span class="quotelev1">&gt; &quot;no value&quot; not &quot;NULL&quot; . Unfortunatelly sndFile has still the same
</span><br>
<span class="quotelev1">&gt; value to the end of program :(.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean by sndFile has &quot;no value&quot;?  There isn't a special &quot;no
</span><br>
<span class="quotelev1">&gt; value&quot; value to a variable unless you are debugging a code that somehow had
</span><br>
<span class="quotelev1">&gt; some variable optimized out at the particular line you are interested in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Declarations:
</span><br>
<span class="quotelev1">&gt; 		FILE		*outfile = NULL ;
</span><br>
<span class="quotelev1">&gt; 		SF_INFO	 	sfinfo ;
</span><br>
<span class="quotelev1">&gt; 		SNDFILE	 	*sndFile= NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very interesting is , that &quot;sfinfo&quot; from the same library  works perfect.
</span><br>
<span class="quotelev1">&gt; At the end of this story, I modified the program without MPI , then
</span><br>
<span class="quotelev1">&gt; compiled it by gcc (not mpicc) and it works fine (in debuger sndFile
</span><br>
<span class="quotelev1">&gt; has proper value).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it seems you believe mpicc is doing something wrong when all mpicc is is
</span><br>
<span class="quotelev1">&gt; a wrapper to a compiler.  Maybe doing a &quot;mpicc --showme&quot; will give you an
</span><br>
<span class="quotelev1">&gt; idea what compiler and options mpicc is passing to the compiler.  This
</span><br>
<span class="quotelev1">&gt; should give you an idea  the difference between your gcc and mpicc
</span><br>
<span class="quotelev1">&gt; compilation.  I would suspect either mpicc is using a compiler significantly
</span><br>
<span class="quotelev1">&gt; different than gcc or that mpicc might be passing some optimization
</span><br>
<span class="quotelev1">&gt; parameter that is messing the code execution (just a guess).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope, now is clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not really.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/7/30 TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure I am understanding the problem correctly so let me describe it
</span><br>
<span class="quotelev1">&gt; back to you with a couple clarifications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So your program using sf_open compiles successfully when using gcc and
</span><br>
<span class="quotelev1">&gt; mpicc.  However, when you run the executable compiled using mpicc sndFile is
</span><br>
<span class="quotelev1">&gt; null?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the above is right can you tell us how you ran the code?
</span><br>
<span class="quotelev1">&gt; Will the code run ok if ran with &quot;mpirun -np 1&quot; on the same machine you run
</span><br>
<span class="quotelev1">&gt; the gcc code normally?
</span><br>
<span class="quotelev1">&gt; When the mpicc compiled code sf_open call returns NULL what does the
</span><br>
<span class="quotelev1">&gt; successive sf_strerror report?
</span><br>
<span class="quotelev1">&gt; My wild guess is when you run the mpicc compiled code one of the processes
</span><br>
<span class="quotelev1">&gt; is on a node that doesn't have access to the file passed to sf_open.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/28/2012 1:08 PM, Pawe&#179; Jaromin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because I try make a program to parallel procesing sound files, I use
</span><br>
<span class="quotelev1">&gt; libsndfile library to load and write wav files. Sytuation is strange,
</span><br>
<span class="quotelev1">&gt; because when I compile the program by gcc is good (no parallel), but
</span><br>
<span class="quotelev1">&gt; if I do it by mpicc is a problem with sndFile variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    // Open sound file
</span><br>
<span class="quotelev1">&gt;    SF_INFO sndInfo;
</span><br>
<span class="quotelev1">&gt;    SNDFILE *sndFile = sf_open(argv[1], SFM_READ, &amp;sndInfo);
</span><br>
<span class="quotelev1">&gt;    if (sndFile == NULL) {
</span><br>
<span class="quotelev1">&gt;       fprintf(stderr, &quot;Error reading source file '%s': %s\n&quot;, argv[1],
</span><br>
<span class="quotelev1">&gt; sf_strerror(sndFile));
</span><br>
<span class="quotelev1">&gt;       return 1;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code run witout an error, but variable is &quot;No value&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe somone can help me ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19870.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19865.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19872.php">Jeff Squyres: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
