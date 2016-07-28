<?
$subject_val = "Re: [OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 05:17:12 2012" -->
<!-- isoreceived="20120730091712" -->
<!-- sent="Mon, 30 Jul 2012 05:17:24 -0400" -->
<!-- isosent="20120730091724" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="50165124.5080002_at_oracle.com" -->
<!-- charset="ISO-8859-2" -->
<!-- inreplyto="CAGAQqqOQGDGjbAvXko1ydKcak8h-=XrwOW5B+RnvL4QsvjwPSg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-07-30 05:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19861.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19859.php">Josh Hursey: "Re: [OMPI users] checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="19858.php">Pawe&#179; Jaromin: "[OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19861.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19861.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure I am understanding the problem correctly so let me 
<br>
describe it back to you with a couple clarifications.
<br>
<p>So your program using sf_open compiles successfully when using gcc and 
<br>
mpicc.  However, when you run the executable compiled using mpicc 
<br>
sndFile is null?
<br>
<p>If the above is right can you tell us how you ran the code?
<br>
Will the code run ok if ran with &quot;mpirun -np 1&quot; on the same machine you 
<br>
run the gcc code normally?
<br>
When the mpicc compiled code sf_open call returns NULL what does the 
<br>
successive sf_strerror report?
<br>
My wild guess is when you run the mpicc compiled code one of the 
<br>
processes is on a node that doesn't have access to the file passed to 
<br>
sf_open.
<br>
<p>--td
<br>
On 7/28/2012 1:08 PM, Pawe&#179; Jaromin wrote:
<br>
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
<span class="quotelev1">&gt;     // Open sound file
</span><br>
<span class="quotelev1">&gt;     SF_INFO sndInfo;
</span><br>
<span class="quotelev1">&gt;     SNDFILE *sndFile = sf_open(argv[1], SFM_READ,&amp;sndInfo);
</span><br>
<span class="quotelev1">&gt;     if (sndFile == NULL) {
</span><br>
<span class="quotelev1">&gt;        fprintf(stderr, &quot;Error reading source file '%s': %s\n&quot;, argv[1],
</span><br>
<span class="quotelev1">&gt; sf_strerror(sndFile));
</span><br>
<span class="quotelev1">&gt;        return 1;
</span><br>
<span class="quotelev1">&gt;     }
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19861.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19859.php">Josh Hursey: "Re: [OMPI users] checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="19858.php">Pawe&#179; Jaromin: "[OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19861.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19861.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
