<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 11:00:09 2010" -->
<!-- isoreceived="20101210160009" -->
<!-- sent="Fri, 10 Dec 2010 11:00:23 -0500" -->
<!-- isosent="20101210160023" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="4D024E97.8060201_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="09F12D63-50AF-4A22-BE9B-9B2DA0037B90_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 11:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15068.php">Jose Agustín García Reynoso: "[OMPI users] openmpi-1.4.3 atomic_cmpset check failed in mac OS X 10.6 intel ifort"</a>
<li><strong>Previous message:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/10/2010 07:55 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ick - I agree that's portable, but truly ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it make sense to implement this as an MPI extension, and then
</span><br>
<span class="quotelev1">&gt; perhaps propose something to the Forum for this purpose?
</span><br>
<p>I think that makes sense. As core and socket counts go up, I imagine the 
<br>
need for this information will become more common as programmers try to 
<br>
explicitly keep codes on a single socket or node.
<br>
<p>Prentice
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just hate to see such a complex, time-consuming method when the info is
</span><br>
<span class="quotelev1">&gt; already available on every process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2010, at 3:36 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A more portable way of doing what you want below is to gather each
</span><br>
<span class="quotelev2">&gt;&gt; processes processor_name given by MPI_Get_processor_name, have the
</span><br>
<span class="quotelev2">&gt;&gt; root who gets this data assign unique numbers to each name and then
</span><br>
<span class="quotelev2">&gt;&gt; scatter that info to the processes and have them use that as the color
</span><br>
<span class="quotelev2">&gt;&gt; to a MPI_Comm_split call. Once you've done that you can do a
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size to find how many are on the node and be able to send to
</span><br>
<span class="quotelev2">&gt;&gt; all the other processes on that node using the new communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good luck,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; On 12/09/2010 08:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The answer is yes - sort of...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In OpenMPI, every process has information about not only its own local rank, but the local rank of all its peers regardless of what node they are on. We use that info internally for a variety of things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this time. If that doesn't matter, then I can tell you how to get it - it's pretty trivial to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 9, 2010, at 6:14 PM, David Mathog wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible through MPI for a worker to determine:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   1. how many MPI processes are running on the local machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   2. within that set its own &quot;local rank&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For instance, a quad core with 4 processes might be hosting ranks 10,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 14, 15, 20, in which case the &quot;local ranks&quot; would be 1,2,3,4.  The idea
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being to use this information so that a program could selectively access
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different local resources.  Simple example: on this 4 worker machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reside telephone directories for Los Angeles, San Diego, San Jose, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sacramento.  Each worker is to open one database and search it when the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; master sends a request.  With the &quot;local rank&quot; number this would be as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; easy as naming the databases file1, file2, file3, and file4.  Without it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the 4 processes would have to communicate with each other somehow to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sort out which is to use which database.  And that could get ugly fast,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; especially if they don't all start at the same time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David Mathog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15068.php">Jose Agustín García Reynoso: "[OMPI users] openmpi-1.4.3 atomic_cmpset check failed in mac OS X 10.6 intel ifort"</a>
<li><strong>Previous message:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
