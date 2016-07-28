<?
$subject_val = "Re: [OMPI users] valgrind problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 22:17:20 2009" -->
<!-- isoreceived="20090227031720" -->
<!-- sent="Thu, 26 Feb 2009 22:16:56 -0500" -->
<!-- isosent="20090227031656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] valgrind problems" -->
<!-- id="525CF7BB-92E2-499C-A2AA-382C437B5B1A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A72DDA.8020307_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] valgrind problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 22:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8224.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8221.php">Justin: "[OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 26, 2009, at 7:03 PM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to use valgrind to check if we have any memory problems  
</span><br>
<span class="quotelev1">&gt; in our code when running with parallel processors.  However,  when I  
</span><br>
<span class="quotelev1">&gt; run using mpi and valgrind I crashes in various places.  For example  
</span><br>
<span class="quotelev1">&gt; some of the times it will crash with a segfault within  
</span><br>
<span class="quotelev1">&gt; MPI_Allgatherv despite the fact that all the arguments to the all  
</span><br>
<span class="quotelev1">&gt; gather on all processors is completely valid.   If we don't use  
</span><br>
<span class="quotelev1">&gt; valgrind the program runs just fine.
</span><br>
<span class="quotelev1">&gt; This is on a Debian(lenny) 64 bit machine using the stock mpi  
</span><br>
<span class="quotelev1">&gt; package.  The command used to launch the job is: mpirun -np 8  
</span><br>
<span class="quotelev1">&gt; valgrind -v --log-file=valgrind.%p executable.  Are valgrind and  
</span><br>
<span class="quotelev1">&gt; openmpi compatible?  Is there any special tricks to getting them to  
</span><br>
<span class="quotelev1">&gt; work together?
</span><br>
<p><p>We use valgrind internally to track down leaks and other debugging  
<br>
kinds of things.  So yes, it should work.
<br>
<p>I do try to keep up with the latest latest latest valgrind, though.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Previous message:</strong> <a href="8224.php">Ralph Castain: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8221.php">Justin: "[OMPI users] valgrind problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
<li><strong>Reply:</strong> <a href="8226.php">Justin: "Re: [OMPI users] valgrind problems"</a>
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
