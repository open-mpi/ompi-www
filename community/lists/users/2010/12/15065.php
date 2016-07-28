<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 10:22:00 2010" -->
<!-- isoreceived="20101210152200" -->
<!-- sent="Fri, 10 Dec 2010 10:22:15 -0500" -->
<!-- isosent="20101210152215" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="4D0245A7.8050806_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFA1F8548A.6D7883EF-ON852577F5.004DDA51-852577F5.004EBB0B_at_us.ibm.com" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 10:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>In reply to:</strong> <a href="15063.php">Richard Treumann: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/10/2010 09:19 AM, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to me the MPI_Get_processor_namedescription is too ambiguous 
</span><br>
<span class="quotelev1">&gt; to make this 100% portable.  I assume most MPI implementations simply 
</span><br>
<span class="quotelev1">&gt; use the hostname so all processes on the same host will return the 
</span><br>
<span class="quotelev1">&gt; same string.  The suggestion would work then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it would also be reasonable for an MPI  that did processor 
</span><br>
<span class="quotelev1">&gt; binding to return &quot; hostname.socket#.core#&quot; so every rank would have a 
</span><br>
<span class="quotelev1">&gt; unique processor name.
</span><br>
Fair enough.  However, I think it is a lot more stable then grabbing 
<br>
information from the bowels of the runtime environment.  Of course one 
<br>
could just call the appropriate system call to get the hostname, if you 
<br>
are on the right type of OS/Architecture :-).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The extension idea is a bit at odds with the idea that MPI is an 
</span><br>
<span class="quotelev1">&gt; architecture independent API.  That does not rule out the option if 
</span><br>
<span class="quotelev1">&gt; there is a good use case but it does raise the bar just a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yeah, that is kind of the rub isn't it.  There is enough architectural 
<br>
differences out there that it might be difficult to come to an agreement 
<br>
on the elements of locality you should focus on.  It would be nice if 
<br>
there was some sort of distance value that would be assigned to each 
<br>
peer a process has.  Of course then you still have the problem trying to 
<br>
figure out what distance you really want to base your grouping on.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: 	Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: 	Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 	12/10/2010 08:00 AM
</span><br>
<span class="quotelev1">&gt; Subject: 	Re: [OMPI users] Method for worker to determine its &quot;rank&quot; 
</span><br>
<span class="quotelev1">&gt; on a        single machine?
</span><br>
<span class="quotelev1">&gt; Sent by: 	users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ick - I agree that's portable, but truly ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it make sense to implement this as an MPI extension, and then 
</span><br>
<span class="quotelev1">&gt; perhaps propose something to the Forum for this purpose?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just hate to see such a complex, time-consuming method when the info 
</span><br>
<span class="quotelev1">&gt; is already available on every process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 10, 2010, at 3:36 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A more portable way of doing what you want below is to gather each 
</span><br>
<span class="quotelev1">&gt; processes processor_name given by MPI_Get_processor_name, have the 
</span><br>
<span class="quotelev1">&gt; root who gets this data assign unique numbers to each name and then 
</span><br>
<span class="quotelev1">&gt; scatter that info to the processes and have them use that as the color 
</span><br>
<span class="quotelev1">&gt; to a MPI_Comm_split call.  Once you've done that you can do a 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size to find how many are on the node and be able to send to 
</span><br>
<span class="quotelev1">&gt; all the other processes on that node using the new communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; On 12/09/2010 08:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; The answer is yes - sort of...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OpenMPI, every process has information about not only its own local 
</span><br>
<span class="quotelev1">&gt; rank, but the local rank of all its peers regardless of what node they 
</span><br>
<span class="quotelev1">&gt; are on. We use that info internally for a variety of things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the &quot;sort of&quot;. That info isn't exposed via an MPI API at this 
</span><br>
<span class="quotelev1">&gt; time. If that doesn't matter, then I can tell you how to get it - it's 
</span><br>
<span class="quotelev1">&gt; pretty trivial to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 9, 2010, at 6:14 PM, David Mathog wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible through MPI for a worker to determine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. how many MPI processes are running on the local machine
</span><br>
<span class="quotelev1">&gt; 2. within that set its own &quot;local rank&quot;
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
<span class="quotelev1">&gt; _mathog_at_[hidden]_ &lt;mailto:mathog_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; _users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; _<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; _users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; _<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email _terry.dontje_at_[hidden]_ &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list_
</span><br>
<span class="quotelev1">&gt; __users_at_[hidden]_ &lt;mailto:users_at_[hidden]&gt;_
</span><br>
<span class="quotelev1">&gt; __<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15065/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15064.php">Siegmar Gross: "Re: [OMPI users] Open MPI on Cygwin"</a>
<li><strong>In reply to:</strong> <a href="15063.php">Richard Treumann: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15066.php">Eugene Loh: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
