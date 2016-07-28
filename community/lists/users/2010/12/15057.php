<?
$subject_val = "[OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 20:14:05 2010" -->
<!-- isoreceived="20101210011405" -->
<!-- sent="Thu, 09 Dec 2010 17:14:01 -0800" -->
<!-- isosent="20101210011401" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="[OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a single machine?" -->
<!-- id="E1PQrYf-0004ki-D5_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 20:14:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Reply:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it possible through MPI for a worker to determine:
<br>
<p>&nbsp;&nbsp;1. how many MPI processes are running on the local machine
<br>
&nbsp;&nbsp;2. within that set its own &quot;local rank&quot;
<br>
<p>?  
<br>
<p>For instance, a quad core with 4 processes might be hosting ranks 10,
<br>
14, 15, 20, in which case the &quot;local ranks&quot; would be 1,2,3,4.  The idea
<br>
being to use this information so that a program could selectively access
<br>
different local resources.  Simple example: on this 4 worker machine
<br>
reside telephone directories for Los Angeles, San Diego, San Jose, and
<br>
Sacramento.  Each worker is to open one database and search it when the
<br>
master sends a request.  With the &quot;local rank&quot; number this would be as
<br>
easy as naming the databases file1, file2, file3, and file4.  Without it
<br>
the 4 processes would have to communicate with each other somehow to
<br>
sort out which is to use which database.  And that could get ugly fast,
<br>
especially if they don't all start at the same time.
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15056.php">Riccardo Murri: "Re: [OMPI users] Help on Mpi derived datatype for class with static members"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Reply:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
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
