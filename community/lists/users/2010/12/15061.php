<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 05:36:44 2010" -->
<!-- isoreceived="20101210103644" -->
<!-- sent="Fri, 10 Dec 2010 05:36:57 -0500" -->
<!-- isosent="20101210103657" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a single machine?" -->
<!-- id="4D0202C9.7070501_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D605F09D-638E-4A28-977F-620D3812C05C_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 05:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>In reply to:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Reply:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A more portable way of doing what you want below is to gather each 
<br>
processes processor_name given by MPI_Get_processor_name, have the root 
<br>
who gets this data assign unique numbers to each name and then scatter 
<br>
that info to the processes and have them use that as the color to a 
<br>
MPI_Comm_split call.  Once you've done that you can do a MPI_Comm_size 
<br>
to find how many are on the node and be able to send to all the other 
<br>
processes on that node using the new communicator.
<br>
<p>Good luck,
<br>
<p>--td
<br>
On 12/09/2010 08:18 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The answer is yes - sort of...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OpenMPI, every process has information about not only its own local rank, but the local rank of all its peers regardless of what node they are on. We use that info internally for a variety of things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this time. If that doesn't matter, then I can tell you how to get it - it's pretty trivial to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2010, at 6:14 PM, David Mathog wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible through MPI for a worker to determine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   1. how many MPI processes are running on the local machine
</span><br>
<span class="quotelev2">&gt;&gt;   2. within that set its own &quot;local rank&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For instance, a quad core with 4 processes might be hosting ranks 10,
</span><br>
<span class="quotelev2">&gt;&gt; 14, 15, 20, in which case the &quot;local ranks&quot; would be 1,2,3,4.  The idea
</span><br>
<span class="quotelev2">&gt;&gt; being to use this information so that a program could selectively access
</span><br>
<span class="quotelev2">&gt;&gt; different local resources.  Simple example: on this 4 worker machine
</span><br>
<span class="quotelev2">&gt;&gt; reside telephone directories for Los Angeles, San Diego, San Jose, and
</span><br>
<span class="quotelev2">&gt;&gt; Sacramento.  Each worker is to open one database and search it when the
</span><br>
<span class="quotelev2">&gt;&gt; master sends a request.  With the &quot;local rank&quot; number this would be as
</span><br>
<span class="quotelev2">&gt;&gt; easy as naming the databases file1, file2, file3, and file4.  Without it
</span><br>
<span class="quotelev2">&gt;&gt; the 4 processes would have to communicate with each other somehow to
</span><br>
<span class="quotelev2">&gt;&gt; sort out which is to use which database.  And that could get ugly fast,
</span><br>
<span class="quotelev2">&gt;&gt; especially if they don't all start at the same time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David Mathog
</span><br>
<span class="quotelev2">&gt;&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15061/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Previous message:</strong> <a href="15060.php">Shiqing Fan: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>In reply to:</strong> <a href="15058.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
<li><strong>Reply:</strong> <a href="15062.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a single machine?"</a>
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
