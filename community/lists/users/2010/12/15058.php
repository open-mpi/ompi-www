<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 20:18:30 2010" -->
<!-- isoreceived="20101210011830" -->
<!-- sent="Thu, 9 Dec 2010 18:18:20 -0700" -->
<!-- isosent="20101210011820" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a single machine?" -->
<!-- id="D605F09D-638E-4A28-977F-620D3812C05C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1PQrYf-0004ki-D5_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 20:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15057.php">David Mathog: "[OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>In reply to:</strong> <a href="15057.php">David Mathog: "[OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15061.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Reply:</strong> <a href="15061.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The answer is yes - sort of...
<br>
<p>In OpenMPI, every process has information about not only its own local rank, but the local rank of all its peers regardless of what node they are on. We use that info internally for a variety of things.
<br>
<p>Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this time. If that doesn't matter, then I can tell you how to get it - it's pretty trivial to do.
<br>
<p><p>On Dec 9, 2010, at 6:14 PM, David Mathog wrote:
<br>
<p><span class="quotelev1">&gt; Is it possible through MPI for a worker to determine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1. how many MPI processes are running on the local machine
</span><br>
<span class="quotelev1">&gt;  2. within that set its own &quot;local rank&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For instance, a quad core with 4 processes might be hosting ranks 10,
</span><br>
<span class="quotelev1">&gt; 14, 15, 20, in which case the &quot;local ranks&quot; would be 1,2,3,4.  The idea
</span><br>
<span class="quotelev1">&gt; being to use this information so that a program could selectively access
</span><br>
<span class="quotelev1">&gt; different local resources.  Simple example: on this 4 worker machine
</span><br>
<span class="quotelev1">&gt; reside telephone directories for Los Angeles, San Diego, San Jose, and
</span><br>
<span class="quotelev1">&gt; Sacramento.  Each worker is to open one database and search it when the
</span><br>
<span class="quotelev1">&gt; master sends a request.  With the &quot;local rank&quot; number this would be as
</span><br>
<span class="quotelev1">&gt; easy as naming the databases file1, file2, file3, and file4.  Without it
</span><br>
<span class="quotelev1">&gt; the 4 processes would have to communicate with each other somehow to
</span><br>
<span class="quotelev1">&gt; sort out which is to use which database.  And that could get ugly fast,
</span><br>
<span class="quotelev1">&gt; especially if they don't all start at the same time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15059.php">Santosh Ansumali: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<li><strong>Previous message:</strong> <a href="15057.php">David Mathog: "[OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>In reply to:</strong> <a href="15057.php">David Mathog: "[OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15061.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Reply:</strong> <a href="15061.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
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
