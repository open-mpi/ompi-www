<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 09:04:04 2012" -->
<!-- isoreceived="20120730130404" -->
<!-- sent="Mon, 30 Jul 2012 09:04:15 -0400" -->
<!-- isosent="20120730130415" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="5016864F.4080004_at_oracle.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="CAGAQqqOVcg=bLP7VkRx-nEjYbtTvYq=CTYUX2gW8ispKhvB1tA_at_mail.gmail.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 09:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19866.php">Daniel Junglas: "[OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Previous message:</strong> <a href="19864.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19864.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19871.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19871.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please show me how you are compiling the program under gcc and mpicc.  
<br>
Plus do a &quot;mpicc --showme&quot;.
<br>
<p>--td
<br>
<p>On 7/30/2012 8:33 AM, Pawe&#179; Jaromin wrote:
<br>
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
<span class="quotelev1">&gt; 2012/7/30 TERRY DONTJE&lt;terry.dontje_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; On 7/30/2012 6:11 AM, Pawe&#179; Jaromin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for fast answer, but the problem looks a little different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, I use this code only for master node (rank 0), because only
</span><br>
<span class="quotelev2">&gt;&gt; this node has an access to file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As You can see i use &quot;if&quot; clause to check sndFile for NULL:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (sndFile == NULL)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and it returns not NULL value, so the code can run forward.
</span><br>
<span class="quotelev2">&gt;&gt; I have found the problem during check array:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 			   long numFrames = sf_readf_float(sndFile, snd_buffor, sfinfo.frames);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 			   // Check correct number of samples loaded
</span><br>
<span class="quotelev2">&gt;&gt; 			   if (numFrames != sfinfo.frames) {
</span><br>
<span class="quotelev2">&gt;&gt; 			      fprintf(stderr, &quot;Did not read enough frames for source\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 			      sf_close(sndFile);
</span><br>
<span class="quotelev2">&gt;&gt; 			      free(snd_buffor);
</span><br>
<span class="quotelev2">&gt;&gt; 			  	  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; 			      return 1;
</span><br>
<span class="quotelev2">&gt;&gt; 			   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, after that I went to debuger to check variables (I use Eclipse PTP
</span><br>
<span class="quotelev2">&gt;&gt; and sdm enviroment), then after inicjalization variable &quot;sndFile&quot; has
</span><br>
<span class="quotelev2">&gt;&gt; &quot;no value&quot; not &quot;NULL&quot; . Unfortunatelly sndFile has still the same
</span><br>
<span class="quotelev2">&gt;&gt; value to the end of program :(.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you mean by sndFile has &quot;no value&quot;?  There isn't a special &quot;no
</span><br>
<span class="quotelev2">&gt;&gt; value&quot; value to a variable unless you are debugging a code that somehow had
</span><br>
<span class="quotelev2">&gt;&gt; some variable optimized out at the particular line you are interested in.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Declarations:
</span><br>
<span class="quotelev2">&gt;&gt; 		FILE		*outfile = NULL ;
</span><br>
<span class="quotelev2">&gt;&gt; 		SF_INFO	 	sfinfo ;
</span><br>
<span class="quotelev2">&gt;&gt; 		SNDFILE	 	*sndFile= NULL;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Very interesting is , that &quot;sfinfo&quot; from the same library  works perfect.
</span><br>
<span class="quotelev2">&gt;&gt; At the end of this story, I modified the program without MPI , then
</span><br>
<span class="quotelev2">&gt;&gt; compiled it by gcc (not mpicc) and it works fine (in debuger sndFile
</span><br>
<span class="quotelev2">&gt;&gt; has proper value).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it seems you believe mpicc is doing something wrong when all mpicc is is
</span><br>
<span class="quotelev2">&gt;&gt; a wrapper to a compiler.  Maybe doing a &quot;mpicc --showme&quot; will give you an
</span><br>
<span class="quotelev2">&gt;&gt; idea what compiler and options mpicc is passing to the compiler.  This
</span><br>
<span class="quotelev2">&gt;&gt; should give you an idea  the difference between your gcc and mpicc
</span><br>
<span class="quotelev2">&gt;&gt; compilation.  I would suspect either mpicc is using a compiler significantly
</span><br>
<span class="quotelev2">&gt;&gt; different than gcc or that mpicc might be passing some optimization
</span><br>
<span class="quotelev2">&gt;&gt; parameter that is messing the code execution (just a guess).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope, now is clear.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not really.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/7/30 TERRY DONTJE&lt;terry.dontje_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure I am understanding the problem correctly so let me describe it
</span><br>
<span class="quotelev2">&gt;&gt; back to you with a couple clarifications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So your program using sf_open compiles successfully when using gcc and
</span><br>
<span class="quotelev2">&gt;&gt; mpicc.  However, when you run the executable compiled using mpicc sndFile is
</span><br>
<span class="quotelev2">&gt;&gt; null?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the above is right can you tell us how you ran the code?
</span><br>
<span class="quotelev2">&gt;&gt; Will the code run ok if ran with &quot;mpirun -np 1&quot; on the same machine you run
</span><br>
<span class="quotelev2">&gt;&gt; the gcc code normally?
</span><br>
<span class="quotelev2">&gt;&gt; When the mpicc compiled code sf_open call returns NULL what does the
</span><br>
<span class="quotelev2">&gt;&gt; successive sf_strerror report?
</span><br>
<span class="quotelev2">&gt;&gt; My wild guess is when you run the mpicc compiled code one of the processes
</span><br>
<span class="quotelev2">&gt;&gt; is on a node that doesn't have access to the file passed to sf_open.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/28/2012 1:08 PM, Pawe&#179; Jaromin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because I try make a program to parallel procesing sound files, I use
</span><br>
<span class="quotelev2">&gt;&gt; libsndfile library to load and write wav files. Sytuation is strange,
</span><br>
<span class="quotelev2">&gt;&gt; because when I compile the program by gcc is good (no parallel), but
</span><br>
<span class="quotelev2">&gt;&gt; if I do it by mpicc is a problem with sndFile variable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     // Open sound file
</span><br>
<span class="quotelev2">&gt;&gt;     SF_INFO sndInfo;
</span><br>
<span class="quotelev2">&gt;&gt;     SNDFILE *sndFile = sf_open(argv[1], SFM_READ,&amp;sndInfo);
</span><br>
<span class="quotelev2">&gt;&gt;     if (sndFile == NULL) {
</span><br>
<span class="quotelev2">&gt;&gt;        fprintf(stderr, &quot;Error reading source file '%s': %s\n&quot;, argv[1],
</span><br>
<span class="quotelev2">&gt;&gt; sf_strerror(sndFile));
</span><br>
<span class="quotelev2">&gt;&gt;        return 1;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This code run witout an error, but variable is &quot;No value&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe somone can help me ??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19865/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19866.php">Daniel Junglas: "[OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Previous message:</strong> <a href="19864.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19864.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19871.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19871.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
