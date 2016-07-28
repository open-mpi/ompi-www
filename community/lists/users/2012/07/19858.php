<?
$subject_val = "[OMPI users] sndlib problem by mpicc compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 28 13:08:49 2012" -->
<!-- isoreceived="20120728170849" -->
<!-- sent="Sat, 28 Jul 2012 19:08:45 +0200" -->
<!-- isosent="20120728170845" -->
<!-- name="Pawe&#179; Jaromin" -->
<!-- email="pawcioj_at_[hidden]" -->
<!-- subject="[OMPI users] sndlib problem by mpicc compiler" -->
<!-- id="CAGAQqqOQGDGjbAvXko1ydKcak8h-=XrwOW5B+RnvL4QsvjwPSg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-2" -->
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
<strong>Subject:</strong> [OMPI users] sndlib problem by mpicc compiler<br>
<strong>From:</strong> Pawe&#179; Jaromin (<em>pawcioj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-28 13:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19859.php">Josh Hursey: "Re: [OMPI users] checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Because I try make a program to parallel procesing sound files, I use
<br>
libsndfile library to load and write wav files. Sytuation is strange,
<br>
because when I compile the program by gcc is good (no parallel), but
<br>
if I do it by mpicc is a problem with sndFile variable.
<br>
<p>&nbsp;&nbsp;&nbsp;// Open sound file
<br>
&nbsp;&nbsp;&nbsp;SF_INFO sndInfo;
<br>
&nbsp;&nbsp;&nbsp;SNDFILE *sndFile = sf_open(argv[1], SFM_READ, &amp;sndInfo);
<br>
&nbsp;&nbsp;&nbsp;if (sndFile == NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Error reading source file '%s': %s\n&quot;, argv[1],
<br>
sf_strerror(sndFile));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>This code run witout an error, but variable is &quot;No value&quot;
<br>
<p>Maybe somone can help me ??
<br>
<p><pre>
-- 
------------------------------------
pozdrawiam
Pawe&#179; Jaromin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19859.php">Josh Hursey: "Re: [OMPI users] checkpoint problem"</a>
<li><strong>Previous message:</strong> <a href="19857.php">Erik Nelson: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Reply:</strong> <a href="19860.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
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
