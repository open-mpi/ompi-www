<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 07:25:33 2012" -->
<!-- isoreceived="20120730112533" -->
<!-- sent="Mon, 30 Jul 2012 07:25:44 -0400" -->
<!-- isosent="20120730112544" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="50166F38.1040608_at_oracle.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="CAGAQqqPuysZHht-fpugAkqfkuqbdqmErcOzWCGDtK-AGD-Hs9w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-07-30 07:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19864.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19862.php">seshendra seshu: "[OMPI users] Regarding the programming"</a>
<li><strong>In reply to:</strong> <a href="19861.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19864.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19864.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/30/2012 6:11 AM, Pawe&#179; Jaromin wrote:
<br>
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
What do you mean by sndFile has &quot;no value&quot;?  There isn't a special &quot;no 
<br>
value&quot; value to a variable unless you are debugging a code that somehow 
<br>
had some variable optimized out at the particular line you are 
<br>
interested in.
<br>
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
So it seems you believe mpicc is doing something wrong when all mpicc is 
<br>
is a wrapper to a compiler.  Maybe doing a &quot;mpicc --showme&quot; will give 
<br>
you an idea what compiler and options mpicc is passing to the compiler.  
<br>
This should give you an idea  the difference between your gcc and mpicc 
<br>
compilation.  I would suspect either mpicc is using a compiler 
<br>
significantly different than gcc or that mpicc might be passing some 
<br>
optimization parameter that is messing the code execution (just a guess).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope, now is clear.
</span><br>
Not really.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/7/30 TERRY DONTJE&lt;terry.dontje_at_[hidden]&gt;:
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19864.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19862.php">seshendra seshu: "[OMPI users] Regarding the programming"</a>
<li><strong>In reply to:</strong> <a href="19861.php">Pawe&#179; Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19864.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19864.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
