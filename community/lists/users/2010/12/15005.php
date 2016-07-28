<?
$subject_val = "Re: [OMPI users] meaning of MPI_THREAD_*";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 08:37:47 2010" -->
<!-- isoreceived="20101206133747" -->
<!-- sent="Mon, 06 Dec 2010 05:37:36 -0800" -->
<!-- isosent="20101206133736" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] meaning of MPI_THREAD_*" -->
<!-- id="4CFCE720.8040109_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20101206061621.17852_at_web005.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] meaning of MPI_THREAD_*<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 08:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15004.php">Hicham Mouline: "[OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>In reply to:</strong> <a href="15004.php">Hicham Mouline: "[OMPI users] meaning of MPI_THREAD_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/6/2010 3:16 AM, Hicham Mouline wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. MPI_THREAD_SINGLE: Only one thread will execute.
</span><br>
<span class="quotelev1">&gt; Does this really mean the process cannot have any other threads at all, even if they doen't deal with MPI at all?
</span><br>
<span class="quotelev1">&gt; I'm curious as to how this case affects the openmpi implementation?
</span><br>
<span class="quotelev1">&gt; Essentially, what is the difference between MPI_THREAD_SINGLE and MPI_THREAD_FUNNELED?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. In my case, I'm interested in MPI_THREAD_SERIALIZED. However if it's available, I can use MPI_THREAD_FUNNELED.
</span><br>
<span class="quotelev1">&gt; What cmake flags do I need to enable to allow this mode?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Assume I assign only 1 thread in my program to deal with MPI. What is the difference between
</span><br>
<span class="quotelev1">&gt; int MPI::Init_thread(MPI_THREAD_SINGLE)
</span><br>
<span class="quotelev1">&gt; int MPI::Init_thread(MPI_THREAD_FUNNELED)
</span><br>
<span class="quotelev1">&gt; int MPI::Init()
</span><br>
<span class="quotelev1">&gt;
</span><br>
You're question is too broad; perhaps you didn't intend it that way.  
<br>
Are you trying to do something which may work only with a specific 
<br>
version of openmpi, or are you willing to adhere to portable practice?
<br>
I tend to believe what it says at
<br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node165.htm">http://www.mcs.anl.gov/research/projects/mpi/mpi-standard/mpi-report-2.0/node165.htm</a> 
<br>
<p>including:
<br>
A call to MPI_INIT has the same effect as a call to MPI_INIT_THREAD with 
<br>
a required = MPI_THREAD_SINGLE
<br>
<p>You would likely use one of those if all your MPI calls are from a 
<br>
single thread, and you don't perform any threading inside MPI.  MPI 
<br>
implementations vary on the extent to which a higher level of threading 
<br>
than what is declared can be used successfully (there's no guarantee of 
<br>
bad results if you exceed what was set by MPI_INIT).   There shouldn't 
<br>
be any bad effect from setting a higher level of thread support which 
<br>
you never use.
<br>
<p>I would think your question about cmake flags would apply only once you 
<br>
chose a compiler.  I have never seen anyone try mixing 
<br>
auto-parallelization with MPI; that would require MPI_THREAD_MULTIPLE 
<br>
but still appears unpredictable.  MPI_THREAD_FUNNELED is used often with 
<br>
OpenMP parallelization inside MPI.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15006.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Previous message:</strong> <a href="15004.php">Hicham Mouline: "[OMPI users] meaning of MPI_THREAD_*"</a>
<li><strong>In reply to:</strong> <a href="15004.php">Hicham Mouline: "[OMPI users] meaning of MPI_THREAD_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
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
