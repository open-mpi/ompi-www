<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 20:29:57 2010" -->
<!-- isoreceived="20100129012957" -->
<!-- sent="Thu, 28 Jan 2010 17:31:41 -0800" -->
<!-- isosent="20100129013141" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="4B623A7D.2030705_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="891118.26442.qm_at_web63107.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 20:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11920.php">Charles Shuller: "[OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim wrote:
<br>
<p><span class="quotelev1">&gt;Thanks, Eugene.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I admit I am not that smart to understand well how to use MPI, but I did read some basic materials about it and understand how some simple problems are solved by MPI. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But dealing with an array in my case, I am not certain about how to apply MPI to it. Are you saying to use send and recieve to transfer the value computed for each element from child process to parent process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
You can, but typically that would entail too much communication overhead 
<br>
for each element.
<br>
<p><span class="quotelev1">&gt;Do you allocate a copy of the array for each process?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
You can, but typically that would entail excessive memory consumption.
<br>
<p>Typically, one allocates only a portion of the array on each process.  
<br>
E.g., if the array has 10,000 elements and you have four processes, the 
<br>
first gets the first 2,500 elements, the second the next 2,500, and so on.
<br>
<p><span class="quotelev1">&gt;Also I only need the loop that computes every element of the array to be parallelized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you only need the initial computation of array elements to be 
<br>
parallelized, perhaps any of the above strategies could work.  It 
<br>
depends on how expensive the computation of each element is.
<br>
<p><span class="quotelev1">&gt;Someone said that the parallel part begins with MPI_Init and ends with MPI_Finilize,
</span><br>
<span class="quotelev1">&gt;
</span><br>
Well, usually all processes are launched in parallel.  So, the parallel 
<br>
begins &quot;immediately.&quot;  Inter-process communications using MPI, however, 
<br>
must take place between the MPI_Init and MPI_Finalize calls.
<br>
<p><span class="quotelev1">&gt;and one can do any serial computations before and/or after these calls. But I have wrote some MPI programs, and found that the parallel part is not restricted between MPI_Init and MPI_Finilize, but instead the whole program. If the rest part of the code has to be wrapped for process with ID 0, I have little idea about how to apply that to my case since the rest part would be the parts before and after the loop in the function and the whole in main().
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't understand your case very clearly.  I will take a guess.  You 
<br>
could have all processes start and call MPI_Init.  Then, slave processes 
<br>
can go to sleep, waking occasionally to check if the master has sent a 
<br>
signal to begin computation.  The master does what it has to do and then 
<br>
sends wake signals.  Each slave computes its portion and sends that 
<br>
portion back to the master.  Each slave exits.  The master gathers all 
<br>
the pieces and resumes its computation.  Does that sound right?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11922.php">Natarajan CS: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11920.php">Charles Shuller: "[OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>In reply to:</strong> <a href="11919.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11924.php">Tim: "Re: [OMPI users] speed up this problem by MPI"</a>
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
