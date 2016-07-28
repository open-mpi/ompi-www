<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 06:11:41 2012" -->
<!-- isoreceived="20120730101141" -->
<!-- sent="Mon, 30 Jul 2012 12:11:37 +0200" -->
<!-- isosent="20120730101137" -->
<!-- name="Pawe&#179; Jaromin" -->
<!-- email="jaromin.pawel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="CAGAQqqPuysZHht-fpugAkqfkuqbdqmErcOzWCGDtK-AGD-Hs9w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="50165124.5080002_at_oracle.com" -->
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
<strong>Date:</strong> 2012-07-30 06:11:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19862.php">seshendra seshu: "[OMPI users] Regarding the programming"</a>
<li><strong>Previous message:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19863.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19863.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Thanks for fast answer, but the problem looks a little different.
<br>
<p>Of course, I use this code only for master node (rank 0), because only
<br>
this node has an access to file.
<br>
<p>As You can see i use &quot;if&quot; clause to check sndFile for NULL:
<br>
<p>if (sndFile == NULL)
<br>
<p>and it returns not NULL value, so the code can run forward.
<br>
I have found the problem during check array:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;long numFrames = sf_readf_float(sndFile, snd_buffor, sfinfo.frames);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Check correct number of samples loaded
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (numFrames != sfinfo.frames) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Did not read enough frames for source\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sf_close(sndFile);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(snd_buffor);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>So, after that I went to debuger to check variables (I use Eclipse PTP
<br>
and sdm enviroment), then after inicjalization variable &quot;sndFile&quot; has
<br>
&quot;no value&quot; not &quot;NULL&quot; . Unfortunatelly sndFile has still the same
<br>
value to the end of program :(.
<br>
Declarations:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FILE		*outfile = NULL ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SF_INFO	 	sfinfo ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SNDFILE	 	*sndFile= NULL;
<br>
<p>Very interesting is , that &quot;sfinfo&quot; from the same library  works perfect.
<br>
At the end of this story, I modified the program without MPI , then
<br>
compiled it by gcc (not mpicc) and it works fine (in debuger sndFile
<br>
has proper value).
<br>
<p>I hope, now is clear.
<br>
<p><p><p>2012/7/30 TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;:
<br>
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
<li><strong>Next message:</strong> <a href="19862.php">seshendra seshu: "[OMPI users] Regarding the programming"</a>
<li><strong>Previous message:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>In reply to:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19863.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19863.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
